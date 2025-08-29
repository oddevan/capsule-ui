<?php

namespace oddEvan\CapsuleUI\Component;

use ReflectionClass;

use function implode;
use function preg_split;
use function strtolower;

trait KeyFromClassNameKit {
	public static function getKey(): string {
		// Via https://stackoverflow.com/a/42665007.
		return strtolower(
			implode('-', preg_split('/(?=[A-Z])/', new ReflectionClass(static::class)->getShortName()) ?: [])
		);
	}
}
