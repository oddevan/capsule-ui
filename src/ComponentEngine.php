<?php

namespace oddEvan\MimicYou;

interface ComponentEngine {
	/**
	 * Make the given Component with the given props.
	 *
	 * @param string $component
	 * @param mixed ...$props
	 * @return Component
	 */
	public function make(string $component, mixed ...$props): Component;

	/**
	 * Make and render the given Component with the given props.
	 *
	 * @param string $component
	 * @param mixed ...$props
	 * @return Component
	 */
	public function render(string $component, mixed ...$props): void;
}