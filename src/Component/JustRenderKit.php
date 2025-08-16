<?php

namespace oddEvan\MimicYou\Component;

/**
 * Provides a basic implementation of the html() method required by Component that captures the output of render()
 * and returns it.
 */
trait JustRenderKit {
	/**
	 * Capture the output of $this->render() and return it as a string.
	 *
	 * @param mixed ...$props Properties for this rendering.
	 * @return string Output of $this->render().
	 */
	public function html(mixed ...$props): string {
		ob_start();
		$this->render(...$props);
		return ob_get_clean();
	}
}