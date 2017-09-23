<?php

namespace PhilippStaender\SilverStripeHelper\ControllerHelper;
use SilverStripe\Control\Director;

trait CSSClasses {

	function CSSClassname() {
		$suffix = '';
		$prefix = '';
		return trim($prefix . strtolower(preg_replace('/(?<!^)[A-Z]/', '-$0', $this->ClassName)) . '  ' . $suffix);
	}

}

trait Permissions {

	function CurrentMemberHasPermission($permissionCode) {
		return \SilverStripe\Security\Permission::check($permissionCode);
	}

}

trait Environment {

	function IsLive() {
		return Director::isLive();
	}

	function IsDev() {
		return Director::isDev();
	}

	function isTest() {
		return Director::isTest();
	}


}