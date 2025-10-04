<?php

namespace oddEvan\UI\Atoms;

use Cavatappi\Foundation\Exceptions\InvalidValueProperties;
use Cavatappi\Foundation\Validation\Validated;
use Cavatappi\Foundation\Value\ValueKit;
use oddEvan\CapsuleUI\Component;
use oddEvan\CapsuleUI\Component\StyledComponent;
use oddEvan\CapsuleUI\ComponentEngine;

use function oddEvan\CapsuleUI\attributes;
use function oddEvan\CapsuleUI\esc;

class Button implements Component, StyledComponent, Validated {
	use ValueKit;

	public static function getKey(): string {
		return 'button';
	}

	public static function styles(): string {
		return <<<EOF
			:where(.button) {
				background: #036;
				color: #fff;
				border: 0;
				font-weight: bold;
				padding: .5em 1em;
				border-radius: .5em;
			}
		EOF;
	}

	public function __construct(
		public readonly string $label,
		public readonly ?string $href = null,
		public readonly ?string $action = null,
	) {
		$this->validate();
	}

	public function validate(): void {
		if (empty($this->href) && empty($this->action)) {
			throw new InvalidValueProperties("Either 'href' or 'action' must be set.");
		}
	}

	public function render(?ComponentEngine $engine = null): void {
		$tag = '';
		$attrs = '';
		if (!empty($this->href)) {
			$tag = 'a';
			$attrs = attributes(href: $this->href);
		}
		if (!empty($this->action)) {
			$tag = 'button';
			$attrs = attributes(onClick: $this->action);
		}
?>
		<<?= $tag ?> <?= $attrs ?> class="button">
			<?= esc($this->label); ?>
		</<?= $tag ?>>
<?php
	}
}
