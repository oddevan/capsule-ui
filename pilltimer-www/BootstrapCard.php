<?php

namespace oddEvan\PillTimer\Website;

use Cavatappi\Foundation\Validation\Validated;
use Cavatappi\Foundation\Value\ValueKit;
use oddEvan\CapsuleUI\Component;
use oddEvan\CapsuleUI\ComponentEngine;
use oddEvan\CapsuleUI\ComponentError;

readonly class BootstrapCard implements Component, Validated {
	use ValueKit;

	public static function getKey(): string {
		return 'card';
	}

	public function __construct(
		public string $text,
		public ?string $image = null,
		public ?string $imageAlt = null,
		public ?string $title = null,
	) {
		$this->validate();
	}

	public function validate(): void {
		if (isset($this->image) && !isset($this->imageAlt)) {
			throw new ComponentError('Images must have alt text.');
		}
	}

	public function render(?ComponentEngine $engine = null): void {
		?>
			<div class="card">
				<?php if ($this->image) : ?>
					<img src="<?= $this->image ?>" alt="<?= $this->imageAlt ?>" class="card-img-top">
				<?php endif; ?>
				<div class="card-body">
					<?php if ($this->title) : ?>
						<h4 class="card-title"><?= $this->title ?></h4>
					<?php endif; ?>
					<p class="card-text">
						<?= $this->text ?>
					</p>
				</div>
			</div>
		<?php
	}
}
