<?php

namespace oddEvan\CapsuleUI\Data;

use Cavatappi\Foundation\Value;
use Cavatappi\Foundation\Value\ValueKit;
use Psr\Http\Message\UriInterface;

class Link implements Value {
	use ValueKit;

	public function __construct(
		public readonly string $label,
		public readonly UriInterface $url,
	) {
	}
}
