<?php

namespace oddEvan\CapsuleUI;

use Smolblog\Foundation\v2\Registry\Registerable;

/**
 * A user interface component. Takes in arbitrary props and outputs HTML.
 */
interface Component extends Registerable
{
	/**
	 * Render the component to the screen using its props.
	 * 
	 * Equivalent to `echo $this->html()`.
	 *
	 * @param ComponentEngine|null $engine ComponentEngine for rendering child components.
	 * @return void
	 */
	public function render(?ComponentEngine $engine = null): void;

	/**
	 * Render the component to an HTML string that can be used elsewhere.
	 * 
	 * Equivalent to capturing the output of `$this->render()`.
	 *
	 * @param ComponentEngine|null $engine ComponentEngine for rendering child components.
	 * @return string HTML representation of the Component.
	 */
	public function html(?ComponentEngine $engine = null): string;
}