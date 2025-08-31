<?php

namespace oddEvan\CapsuleUI\Data;

use Psr\Http\Message\UriInterface;
use Smolblog\Foundation\v2\Value;

class Link implements Value {
	public function __construct(
		public readonly string $label,
		public readonly UriInterface $url,
	) {
	}
}
