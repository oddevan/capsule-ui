<?php

namespace oddEvan\UI;

use oddEvan\CapsuleUI\Component;
use oddEvan\CapsuleUI\Component\StyledComponent;
use oddEvan\CapsuleUI\ComponentEngine;

class AppShell implements Component, StyledComponent {
	public static function getKey(): string {
		return 'app-shell';
	}

	public function __construct(
		public readonly Component $menu,
		public readonly Component $main,
		public readonly bool $global = false,
	) {
	}

	public static function styles(): string {
		return <<<EOF
			:where(.app-shell) {
				container-type: inline-size;
				contain: paint;
				display: flex;
				flex-direction: column-reverse;
			}

			:where(.app-shell--global) {
				height: 100vh;
				padding-block-end: 0.5rem;
			}

			@container (min-width: 45rem) {
				:where(.app-shell) {
					display: grid;
					grid-template-columns: 3.5rem auto;
					gap: .5em;
				}

				:where(.app-shell--global) {
					padding-block-end: 0;
				}
			}
			
			@container (min-width: 60rem) {
				:where(.app-shell) {
					grid-template-columns: 15rem auto;
				}
			}
		EOF;
	}

	public function render(?ComponentEngine $engine = null): void {
		$classes = '.app-shell';
		if ($this->global) {
			$classes .= ' .app-shell--global';
		}
		?>
		<div class="<?= $classes ?>">
			<div class="app-shell__menu">
				<?php $this->menu->render($engine); ?>
			</div>
			<div class="app-shell__main">
				<?php $this->main->render($engine); ?>
			</div>
		</div>
		<?php
	}
}
