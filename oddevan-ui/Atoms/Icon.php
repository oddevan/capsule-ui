<?php

namespace oddEvan\UI\Atoms;

use Cavatappi\Foundation\Value\ValueKit;
use oddEvan\CapsuleUI\Component\ComponentKit;
use oddEvan\CapsuleUI\Component\KeyFromClassNameKit;
use oddEvan\CapsuleUI\Component\StyledComponent;

class Icon implements StyledComponent {
	use ComponentKit;

	public static function styles(): string {
		return <<< EOF
			:where(.icon) {
				display: inline-block;
				width: 1em;
				height: 1em;

				svg {
					fill: currentColor;
					stroke: currentColor;
				}
			}
		EOF;
	}
}
