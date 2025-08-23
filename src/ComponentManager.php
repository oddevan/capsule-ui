<?php

namespace oddEvan\MimicYou;

use Smolblog\Foundation\v2\Module as ModuleInterface;
use Smolblog\Foundation\v2\Registry\RegistryConfiguratorKit;

class ComponentManager {
	use RegistryConfiguratorKit;

	public readonly ComponentRegistry $registry;

	/**
	 * Undocumented function
	 *
	 * @param class-string<ModuleInterface> ...$modules
	 */
	public function __construct(string ...$modules) {
		$classInterfaceMap = array_reduce(
			$modules,
			fn($carry, $mod) => array_merge($carry, $mod::discoverableClasses()),
			Module::discoverableClasses(),
		);

		$this->registry = new ComponentRegistry();
		$this->registry->configure(
			$this->getImplementingClassesForRegistry($classInterfaceMap, ComponentRegistry::class)
		);
	}
}