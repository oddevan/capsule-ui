<?php

namespace oddEvan\PillTimer\Website;

use oddEvan\CapsuleUI\Component\KeyFromClassNameKit;
use oddEvan\CapsuleUI\Component\StyledComponent;
use oddEvan\CapsuleUI\ComponentEngine;

class WhyPillTimer implements StyledComponent {
	use KeyFromClassNameKit;

	public static function styles(): string {
		return <<<EOF
			section.why-pill-timer {
				background: url(/banner.svg);
				background-size: cover;
				background-repeat: no-repeat;
				background-position: center;
			}
		EOF;
	}

	public function render(?ComponentEngine $engine = null): void {
		?>
		<section class="why-pill-timer">
			<div class="container">
				<h2 class="display-3 text-center my-5">Why use PillTimer?</h2>

				<div class="row justify-content-end my-5">
					<div class="col-md-8">
						<h3>Privacy</h3>
						<p>
							Know what&apos;s better than a great privacy policy? Not needing
							one. PillTimer&apos;s developer doesn&apos;t collect any data from
							you using the application. Your medications stay on your phone and
							in your private iCloud. So don&apos;t worry, adding an allergy
							medicine to PillTimer won&apos;t send you ads for tissues.
						</p>

						<h3 class="mt-4">Simple and Clean</h3>

						<p>
							PillTimer is designed to do one thing and do it well. No waiting
							for pages to load. No wading through more dubiously useful coupons
							than a pharmacy receipt. Just load the app and know whether you
							can take your medicine or not. It&apos;s that simple.
						</p>

						<h3 class="mt-4">Upgrade Once</h3>

						<p>
							There&apos;s a reason software is sold as subscriptions these
							days. It takes work to keep an app up-to-date and running, and
							PillTimer is no exception. But PillTimer is also simple and
							focused enough that it can be priced simply. The multiple
							medications upgrade is a one-time purchase that will work as long
							as PillTimer does.
						</p>
					</div>
				</div>
			</div>
		</section>
		<?php
	}
}
