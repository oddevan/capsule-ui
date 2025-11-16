<?php

namespace oddEvan\CapsuleUI;

use Cavatappi\Foundation\Module;
use Cavatappi\Foundation\Module\FileDiscoveryKit;
use Cavatappi\Foundation\Module\ModuleKit;
use Cavatappi\Foundation\Registry\RegistryUtils;

class CapsuleUI implements Module {
	use FileDiscoveryKit;
	use ModuleKit;

	private static function serviceMapOverrides(): array {
		return [
			ComponentRegistry::class => [],
			ComponentEngine::class => ComponentRegistry::class,
		];
	}

	public static function createRegistry(string ...$modules) {
		$classInterfaceMap = array_reduce(
			$modules,
			fn($carry, $mod) => array_merge($carry, $mod::discoverableClasses()),
			static::discoverableClasses(),
		);

		$registry = new ComponentRegistry();
		$registry->configure(
			RegistryUtils::getImplementingClassesForRegistry($classInterfaceMap, ComponentRegistry::class)
		);

		return $registry;
	}
}
