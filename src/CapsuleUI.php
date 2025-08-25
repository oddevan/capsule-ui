<?php

namespace oddEvan\CapsuleUI;

use Smolblog\Foundation\v2\Module;
use Smolblog\Foundation\v2\Module\FileDiscoveryKit;
use Smolblog\Foundation\v2\Module\ModuleKit;
use Smolblog\Foundation\v2\Registry\RegistryConfiguratorKit;

class CapsuleUI implements Module {
	use FileDiscoveryKit;
	use ModuleKit;

	private static function serviceMapOverrides(): array {
		return [];
	}

	public static function createRegistry(string ...$modules) {
		$classInterfaceMap = array_reduce(
			$modules,
			fn($carry, $mod) => array_merge($carry, $mod::discoverableClasses()),
			static::discoverableClasses(),
		);

		$configurator = new class () {
			use RegistryConfiguratorKit {
				getImplementingClassesForRegistry as public;
			}
		};

		$registry = new ComponentRegistry();
		$registry->configure(
			$configurator->getImplementingClassesForRegistry($classInterfaceMap, ComponentRegistry::class)
		);

		return $registry;
	}
}
