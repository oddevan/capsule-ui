<?php

namespace oddEvan\UI\Organisms;

use Cavatappi\Foundation\Value\ValueKit;
use oddEvan\CapsuleUI\Component;
use oddEvan\CapsuleUI\Component\ComponentKit;
use oddEvan\CapsuleUI\Component\KeyFromClassNameKit;
use oddEvan\CapsuleUI\Component\StyledComponent;
use oddEvan\CapsuleUI\ComponentEngine;

class Navbar implements Component, StyledComponent {
	use ComponentKit;

	public static function styles(): string {
		return <<<EOF
		EOF;
	}

	public function render(?ComponentEngine $engine = null): void {
		?>
		<nav class="navbar">
			<a class="navbar__brand" href="#">Brand</a>
			<menu class="navbar__menu">
				<li><a href="#">Link One</a></li>
				<li><a href="#">Link Two</a></li>
				<li><a href="#">Link Three</a></li>
			</menu>
		</nav>
		<?php
	}
}
