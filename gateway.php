<?php
/*
|--------------------------------------------------------------------------
| Developer Notes
|--------------------------------------------------------------------------
|
| The purpose of this file is to fetch the required components to access
| the core functionality of the system (database, router, logging, etc.)
| independent of the framework. This is useful for tasks that are typically
| performed from the terminal or otherwise does not send output to the browser;
| for example, a script that manages cronjobs.
|
| Store your custom scripts inside the /var/scripts folder. Be sure to include
| this file before anything else in your scripts.
|
 */

# Prevent direct access to this file
if (basename($_SERVER['SCRIPT_FILENAME']) === 'gateway.php') {
	header('Location: /error/_404');
	exit;
}

if (!defined('DS')) {
	define('DS', DIRECTORY_SEPARATOR);
}

if (!defined('BASE_PATH')) {
	define('BASE_PATH', dirname(__FILE__));
}

# Change this if you moved your .env file. Enter the full fill path.
if (!defined('ENV_PATH')) {
	define('ENV_PATH', dirname(__FILE__) . '/.env');
}

require_once 'vendor/autoload.php';
require_once 'app/system/Factory.php';
require 'app/system/Paths.php';
require_once 'app/system/Config.php';
require 'app/system/Paths.php';
