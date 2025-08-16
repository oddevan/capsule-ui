<?php

namespace oddEvan\MimicYou;

/**
 * A user interface component. Takes in arbitrary props and outputs HTML.
 */
interface Component {
	/**
	 * Render the component to the screen using the given props.
	 * 
	 * Equivalent to `echo $this->html()`.
	 *
	 * @param mixed ...$props Properties for this rendering.
	 * @return void
	 */
	public function render(mixed ...$props): void;

	/**
	 * Render the component to an HTML string that can be used elsewhere.
	 * 
	 * Equivalent to capturing the output of `$this->render()`.
	 *
	 * @param mixed ...$props Properties for this rendering.
	 * @return string HTML representation of the Component.
	 */
	public function html(mixed ...$props): string;
}