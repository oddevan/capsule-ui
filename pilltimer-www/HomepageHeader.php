<?php

namespace oddEvan\PillTimer\Website;

use oddEvan\CapsuleUI\Component;
use oddEvan\CapsuleUI\Component\KeyFromClassNameKit;
use oddEvan\CapsuleUI\ComponentEngine;

class HomepageHeader implements Component {
	use KeyFromClassNameKit;

	public function render(?ComponentEngine $engine = null): void {
		?>
<header
	style="
		background: url(/wedge.svg);
		background-size: cover;
		background-position: bottom;
		margin-bottom: 2rem;
		padding-top: 5rem;
		padding-bottom: 3rem;
		position: relative;
		z-index: 2000;
		transform: translate3d(0px, 0px, 1px);
	"
>
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-sm col-xl-6" style="padding-top: 10rem">
				<h1
					class="display-1 p-3"
					style="filter: drop-shadow(0 5px 10px black)"
				>
					<picture>
						<img src="/lockup.svg" alt="PillTimer" class="img-fluid">
					</picture>
				</h1>

				<p class="text-light">
					Track and manage your medications on iPhone and iPad
				</p>

				<p>
					<a href="<?= PillTimerWebsite::APPSTORE_URL ?>">
						<img
							src="/appstore.svg"
							alt="Download on the App Store"
							height="60"
							width="179"
						>
					</a>
				</p>
			</div>

			<div class="col-sm col-xl text-center">
				<img
					src="/hero.png"
					alt="Screenshot of the PillTimer app"
					width="450"
					height="907"
					class="img-fluid"
					style="position: relative; top: -13rem"
				>
			</div>
		</div>
	</div>
</header>
		<?php
	}
}
