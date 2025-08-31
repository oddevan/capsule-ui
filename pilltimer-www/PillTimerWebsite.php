<?php

namespace oddEvan\PillTimer\Website;

use Smolblog\Foundation\v2\Module;
use Smolblog\Foundation\v2\Module\FileDiscoveryKit;
use Smolblog\Foundation\v2\Module\ModuleKit;

class PillTimerWebsite implements Module {
	use FileDiscoveryKit;
	use ModuleKit;

	public const string APPSTORE_URL = 'https://apps.apple.com/app/apple-store/id624064313?pt=2017935&ct=website&mt=8';

	private static function serviceMapOverrides(): array {
		return [];
	}
}
