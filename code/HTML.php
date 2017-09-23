<?php

namespace PhilippStaender\SilverStripeHelper;

trait HTML {

	function HTMLToText() {
		return Html2Text\Html2Text::convert($this->owner->RAW());
	}

	function StripHTMLTags() {
		return strip_tags($this->owner->RAW());
	}

}