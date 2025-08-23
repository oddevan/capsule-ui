<?php

namespace oddEvan\CapsuleUI;

use Smolblog\Foundation\Service;
use Smolblog\Foundation\v2\Registry\Registry;
use Smolblog\Foundation\v2\Registry\RegistryKit;
use Throwable;

class ComponentRegistry implements Service, Registry, ComponentEngine {
	use RegistryKit;

	public static function getInterfaceToRegister(): string {
		return Component::class;
	}
	
	/**
	 * Get the class name for a given component key.
	 *
	 * @param string $key Key for the component.
	 * @return class-string<Component>|null Class for the given component or null if not found.
	 */
	public function componentClass(string $key): ?string {
		return $this->library[$key] ?? null;
	}

	public function make(string $component, mixed ...$props): Component
	{
		$componentClass = $this->componentClass($component);
		if (!isset($componentClass)) {
			throw new ComponentError("ComponentRegistry::render called for component {$component} which is not registered.");
		}

		try {
			return new $componentClass(...$props);
		} catch (Throwable $e) {
			throw new ComponentError("Could not instantiate component {$component}: {$e->getMessage()}", previous: $e);
		}
	}

	public function render(string $component, mixed ...$props): void
	{
		$this->make($component, ...$props)->render($this);
	}
}