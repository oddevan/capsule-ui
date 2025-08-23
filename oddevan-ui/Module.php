<?php

namespace oddEvan\UI;

use Smolblog\Foundation\v2\Module as V2Module;
use Smolblog\Foundation\v2\Module\FileDiscoveryKit;
use Smolblog\Foundation\v2\Module\ModuleKit;

class Module implements V2Module {
	use FileDiscoveryKit;
	use ModuleKit;

	private static function serviceMapOverrides(): array {
		return [];
	}
}