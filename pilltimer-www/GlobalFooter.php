<?php

namespace oddEvan\PillTimer\Website;

use oddEvan\CapsuleUI\Component;
use oddEvan\CapsuleUI\Component\ComponentKit;
use oddEvan\CapsuleUI\Component\KeyFromClassNameKit;
use oddEvan\CapsuleUI\ComponentEngine;

class GlobalFooter implements Component {
	use ComponentKit;

	public function render(?ComponentEngine $engine = null): void {
		?>
<footer
	style="background: rgb(59, 62, 87)"
	class="text-white pb-3 pt-5"
>
	<div class="container">
		<div class="row">
			<div class="col sm">
				<p
					class="p-1"
					style="filter: drop-shadow(0 1px 3px black)"
				>
					<a href="/">
						<img
							src="/lockup.svg"
							alt="PillTimer"
							height="40"
							width="161"
						>
					</a>
				</p>
				<p>Track and manage your medications on iPhone and iPad.</p>
				<p>
					<a href="<?= PillTimerWebsite::APPSTORE_URL ?>">
						<img
							src="/appstore.svg"
							alt="Download on the App Store"
							height="40"
							width="119"
						>
					</a>
				</p>
			</div>
			<div class="col sm align-self-end">
				<p class="text-end">
					<a href="/support" class="link-light">Support</a> |
					<a href="/privacy" class="link-light">Privacy policy</a>
				</p>
			</div>
		</div>
		<div class="row mt-5 mb-3">
			<div class="col">
				<p class="text-end">
					<a href="http://www.oddevan.com/">
						<img
							src="/signature.svg"
							alt="an oddEvan project"
							height="25"
							width="195"
						>
					</a>
				</p>
			</div>
		</div>
	</div>
</footer>
		<?php
	}
}
