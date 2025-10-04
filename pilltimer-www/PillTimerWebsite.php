<?php

namespace oddEvan\PillTimer\Website;

use Cavatappi\Foundation\Module;
use Cavatappi\Foundation\Module\FileDiscoveryKit;
use Cavatappi\Foundation\Module\ModuleKit;

class PillTimerWebsite implements Module {
	use FileDiscoveryKit;
	use ModuleKit;

	public const string APPSTORE_URL = 'https://apps.apple.com/app/apple-store/id624064313?pt=2017935&ct=website&mt=8';

	private static function serviceMapOverrides(): array {
		return [];
	}
}
