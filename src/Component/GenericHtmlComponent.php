<?php

namespace oddEvan\CapsuleUI\Component;

use Cavatappi\Foundation\Value;
use Cavatappi\Foundation\Value\ValueKit;
use oddEvan\CapsuleUI\Component;
use oddEvan\CapsuleUI\ComponentEngine;

class GenericHtmlComponent implements Value, Component {
	use ValueKit;

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
