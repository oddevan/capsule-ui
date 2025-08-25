<?php

namespace oddEvan\CapsuleUI;

use oddEvan\CapsuleUI\Component\StyledComponent;
use Smolblog\Foundation\Service;
use Smolblog\Foundation\v2\Registry\Registry;
use Smolblog\Foundation\v2\Registry\RegistryKit;
use Throwable;

use function array_filter;
use function ob_get_clean;
use function ob_start;

class ComponentRegistry implements Service, Registry, ComponentEngine {
	use RegistryKit;

	private string $styles;

	public static function getInterfaceToRegister(): string {
		return Component::class;
	}

	/**
	 * Get the class name for a given component key.
	 *
	 * @param string $key Key for the component.
	 * @return class-string<Component>|null Class for the given component or null if not found.
	 */
	public function componentClass(string $key): ?string {
		return $this->library[$key] ?? null;
	}

	public function make(string $component, mixed ...$props): Component {
		$componentClass = $this->componentClass($component);
		if (!isset($componentClass)) {
			throw new ComponentError("ComponentRegistry::make called for unregistered component {$component}.");
		}

		try {
			return new $componentClass(...$props);
		} catch (Throwable $e) {
			throw new ComponentError("Could not instantiate component {$component}: {$e->getMessage()}", previous: $e);
		}
	}

	public function render(string $component, mixed ...$props): void {
		$this->make($component, ...$props)->render($this);
	}

	public function allStyles(): string {
		$this->styles ??= $this->createAllStyles();
		return $this->styles;
	}

	private function createAllStyles(): string {
		/** @var class-string<StyledComponent>[] */
		$styled = array_filter(
			$this->library,
			fn($cmp) => is_a($cmp, StyledComponent::class, allow_string: true)
		);

		return array_reduce($styled, fn($css, $cmp) => $css .= $cmp::styles() . "\n\n", '');
	}
}
