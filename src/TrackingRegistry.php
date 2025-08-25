<?php

namespace oddEvan\CapsuleUI;

use oddEvan\CapsuleUI\Component\StyledComponent;

use function get_class;

class TrackingRegistry implements ComponentEngine {
	private array $used = [];

	public private(set) string $css;
	public private(set) string $html;

	public function __construct(private ComponentRegistry $registry) {
		$this->reset();
	}

	public function reset(): void {
		$this->used = [];
		$this->css = '';
		$this->html = '';
	}

	public function make(string $component, mixed ...$props): Component {
		$componentInstance = $this->registry->make($component, ...$props);
		$this->used[$component] ??= get_class($componentInstance);

		return $componentInstance;
	}

	public function render(string $component, mixed ...$props): void {
		$this->make($component, ...$props)->render($this);
	}

	public function prepare(string $component, mixed ...$props): void {
		ob_start();
		$this->render($component, ...$props);
		$this->html = ob_get_clean();

		/** @var class-string<StyledComponent>[] */
		$styled = array_filter(
			$this->used,
			fn($cmp) => is_a($cmp, StyledComponent::class, allow_string: true)
		);

		$this->css = array_reduce($styled, fn($css, $cmp) => $css .= $cmp::styles() . "\n\n", '');
	}
}
