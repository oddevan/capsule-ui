<?php

namespace oddEvan\PillTimer\Website;

use oddEvan\CapsuleUI\Component;
use oddEvan\CapsuleUI\Component\KeyFromClassNameKit;
use oddEvan\CapsuleUI\ComponentEngine;

class GlobalNav implements Component {
	use KeyFromClassNameKit;

	public function render(?ComponentEngine $engine = null): void {
		?>
<nav class="navbar fixed-top" style="background: rgba(255, 255, 255, 0.7)">
	<div class="container">
		<a class="navbar-brand" href="/">
			<img src="/lockup.svg" alt="PillTimer" height="40" width="196">
		</a>
		<div class="justify-content-end">
			<a href="<?= PillTimerWebsite::APPSTORE_URL ?>">
				<img
					src="/appstore.svg"
					alt="Download on the App Store"
					height="40"
					width="119"
				>
			</a>
		</div>
	</div>
</nav>
		<?php
	}
}
