<?php

namespace oddEvan\CapsuleUI\Component;

use oddEvan\CapsuleUI\Component;
use oddEvan\CapsuleUI\ComponentEngine;
use Smolblog\Foundation\v2\Value;

class GenericHtmlComponent implements Value, Component {
	public static function getKey(): string {
		return 'generic-html';
	}

	public function __construct(
		public readonly string $rawHtml
	) {
	}

	public function render(?ComponentEngine $engine = null): void {
		echo $this->rawHtml;
	}
}
