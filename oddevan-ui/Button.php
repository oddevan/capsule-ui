<?php

namespace oddEvan\UI;

use oddEvan\MimicYou\Component;
use oddEvan\MimicYou\Component\JustRenderKit;
use oddEvan\MimicYou\Component\StyledComponent;
use oddEvan\MimicYou\ComponentEngine;
use Smolblog\Foundation\Exceptions\InvalidValueProperties;
use Smolblog\Foundation\v2\Value\Traits\Validated;

use function oddEvan\MimicYou\attributes;
use function oddEvan\MimicYou\esc;

class Button implements Component, StyledComponent, Validated
{
	use JustRenderKit;

	public static function getKey(): string
	{
		return 'button';
	}

	public static function styles(): string
	{
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

	public function validate(): void
	{
		if (empty($this->href) && empty($this->action)) {
			throw new InvalidValueProperties("Either 'href' or 'action' must be set.");
		}
	}

	public function render(?ComponentEngine $engine = null): void
	{
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
