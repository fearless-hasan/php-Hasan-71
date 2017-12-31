<?php

/**
 * Created by PhpStorm.
 * User: Web App Develop-PHP
 * Date: 12/26/2017
 * Time: 1:08 PM
 */
class Functionality
{
	public function increasing(var a,var b){
		var result = "";
		for(var i = a;i<=b;i++) {
			result += i;
		}
	}
	public function decreasing(var a,var b){
		var result = "";
		for(var i = a;i>=b;i--) {
			result += i;
		}
	}
}