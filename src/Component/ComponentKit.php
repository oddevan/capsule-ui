<?php

namespace oddEvan\CapsuleUI\Component;

use Cavatappi\Foundation\Utilities\StringUtils;
use Cavatappi\Foundation\Value\ValueKit;

/**
 * Sane defaults for components.
 */
trait ComponentKit {
	use ValueKit;

	public static function getKey(): string {
		// Via https://stackoverflow.com/a/42665007.
		return strtolower(
			implode('-', preg_split('/(?=[A-Z])/', StringUtils::dequalifyClassName(static::class)) ?: [])
		);
	}
}
