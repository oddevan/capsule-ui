<?php

namespace oddEvan\CapsuleUI;

use Cavatappi\Foundation\Fields\Markdown;

interface MarkdownProvider {
	public function convertMarkdown(Markdown|string $source): string;
}
