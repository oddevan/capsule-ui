<?php

namespace oddEvan\PillTimer\Website;

use oddEvan\CapsuleUI\Component;
use oddEvan\CapsuleUI\Component\KeyFromClassNameKit;
use oddEvan\CapsuleUI\ComponentEngine;

class FeatureGrid implements Component {
	use KeyFromClassNameKit;

	public function render(?ComponentEngine $engine = null): void {
		?>
<section style="margin: 10rem auto">
	<p class="text-center my-5 lead">PillTimer is free to use for a single medicine.</p>

	<div class="row my-5">
		<div class="col-md my-3 order-md-2">
			<?php $engine?->render(
				'card',
				image: '/do-the-math.png',
				imageAlt:
					'Screenshot of PillTimer showing the time of the next dose calculated from the previous doses',
				title: 'Forget the Math',
				text: 'PillTimer uses your previous doses to know when your next dose is.',
			); ?>
		</div>
		<div class="col-sm my-3 order-md-1" >
			<?php $engine?->render(
				'card',
				image: '/record-dose.png',
				imageAlt: 'Screenshot of PillTimer showing the dose entry screen',
				title: 'Track Doses',
				text: 'Record a dose for now or any point in the last 24 hours.',
			); ?>
		</div>
		<div class="col-sm my-3 order-md-3">
			<?php $engine?->render(
				'card',
				image: '/notification.png',
				imageAlt: 'Screenshot of an iOS notification from PillTimer',
				title: 'Know When',
				text: 'Get alerts when you&apos;re able to take another dose.',
			); ?>
		</div>
	</div>

	<p class="text-center my-5 lead">
		Purchase the one - time Multiple Medications upgrade for $2.99 USD to
		track all your medicines.
	</p>

	<div class="row my-5">
		<div class="col-sm my-3">
			<?php $engine?->render(
				'card',
				image: '/track-everything.png',
				imageAlt:
					'Screenshot of PillTimer showing multiple medications, some available to take now and some not',
				title: 'Track Everything',
				text: 'Track all your medicines and see at a glance which ones you can take.',
			); ?>
		</div>
		<div class="col-sm my-3">
			<?php $engine?->render(
				'card',
				image: '/archive.png',
				imageAlt: 'Screenshot of PillTimer showing the archive panel',
				title: 'Save for Later',
				text: 'Save older or seasonal medications in the archive.',
			); ?>
		</div>
	</div>
</section>
		<?php
	}
}
