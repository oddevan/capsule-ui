<?php

namespace oddEvan\MimicYou\Component;

use oddEvan\MimicYou\Component;

/**
 * Indicates that a Component has associated styles.
 */
interface StyledComponent extends Component {
	/**
	 * Get the CSS styles for this Component.
	 *
	 * @return string CSS rules.
	 */
	public static function styles(): string;
}