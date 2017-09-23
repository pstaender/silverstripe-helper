<?php

namespace PhilippStaender\SilverStripeHelper;

use Michelf\MarkdownExtra;
use League\HTMLToMarkdown\HtmlConverter;

trait Markdown {
	function Markdown() {
		return MarkdownExtra::defaultTransform($this->owner->RAW());
	}

	function MarkdownLine() {
		$text = trim($this->owner->Markdown());
		$text = preg_replace("/^<p>/", "", $text);
		$text = preg_replace("/<\\/\\s*p>$/", "", $text);
		return $text;
	}

	function HTMLToMarkdown() {
		$converter = new HtmlConverter([
		  'strip_tags' => true,
		]);
		return $converter->convert($this->owner->RAW());
	}
}