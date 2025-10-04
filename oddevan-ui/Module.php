<?php

namespace oddEvan\UI;

use Cavatappi\Foundation\Module as CavatappiModule;
use Cavatappi\Foundation\Module\FileDiscoveryKit;
use Cavatappi\Foundation\Module\ModuleKit;

class Module implements CavatappiModule {
	use FileDiscoveryKit;
	use ModuleKit;

	private static function serviceMapOverrides(): array {
		return [];
	}
}
