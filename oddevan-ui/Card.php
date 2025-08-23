<?php

namespace oddEvan\UI;

use oddEvan\MimicYou\Component;
use oddEvan\MimicYou\Component\JustRenderKit;
use oddEvan\MimicYou\Component\StyledComponent;
use oddEvan\MimicYou\ComponentEngine;

use function oddEvan\MimicYou\esc;

class Card implements Component, StyledComponent {
	use JustRenderKit;

	public static function getKey(): string { return 'card'; }

	public static function styles(): string
	{
		return <<<EOF
			:where(.card) {
				border: 1px solid gray;
				border-radius: 1em;
				padding: 1em;
			}

			:where(.card__headline) {
				font-size: 1.5rem;
				font-weight: bold;
			}
		EOF;
	}

	public function __construct(
		public readonly string $headline,
		public readonly string $description,
		public readonly string $submitButtonText,
		public readonly ?string $cancelButtonText = null,
		public readonly int $headlineLevel = 2,
	)
	{
		
	}

	public function render(?ComponentEngine $engine = null): void
	{
		$hTag = 'h' . $this->headlineLevel;

		?>

		<aside class="card">
			<<?= $hTag ?> class="card__headline"><?= esc($this->headline) ?></<?= $hTag ?>>
			<div class="card__body">
				<?= esc($this->description) ?>
			</div>
			<div class="card__footer">
				<?php $engine?->render('button', label: $this->submitButtonText, action: '() => alert("Hello!")'); ?>
				<?php if (isset($this->cancelButtonText)) : ?>
					<?php $engine?->render('button', label: $this->cancelButtonText, href: 'https://eph.me/'); ?>
				<?php endif; ?>
			</div>
		</aside>

		<?php
	}
}