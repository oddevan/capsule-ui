<?php

namespace oddEvan\MimicYou;

function attributes(string ...$attrs): string {
	$output = '';
	foreach ($attrs as $attribute => $value) {
		if (empty($value)) {
			$output .= $attribute . ' ';
			continue;
		}

		$output .= $attribute . '="' . esc($value) . '" ';
	}

	return rtrim($output);
}

function esc(string $text): string {
	return htmlspecialchars($text, flags: ENT_QUOTES|ENT_SUBSTITUTE|ENT_HTML5, double_encode: false);
}