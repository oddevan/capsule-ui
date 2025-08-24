<?php

namespace oddEvan\CapsuleUI;

use Smolblog\Foundation\v2\Registry\Registerable;

/**
 * A user interface component. Takes in arbitrary props and outputs HTML.
 */
interface Component extends Registerable {
	/**
	 * Render the component to the screen using its props.
	 *
	 * Equivalent to `echo $this->html()`.
	 *
	 * @param ComponentEngine|null $engine ComponentEngine for rendering child components.
	 * @return void
	 */
	public function render(?ComponentEngine $engine = null): void;
}
