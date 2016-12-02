<?php

session_start();

global $Nutec;

include_once(dirname(__FILE__).'/libraries/scambo.lib.route.php');

include_once(scambo_route()->libs . 'scambo.lib.constants.php');

if ( ! defined('DEBUG') || DEBUG === false ) {
	error_reporting(0);
	ini_set("display_errors", 0); 
	
} else {
	error_reporting(E_ALL);
	ini_set("display_errors", 1); 
}

require_once (scambo_route()->function . 'global-functions.php');

$scambo = new scamboMVC();
