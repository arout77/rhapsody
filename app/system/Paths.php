<?php
if($app['config']->setting('subdir') == '') {
	$_subdir = '';
} else {
	$_subdir = $app['config']->setting('subdir') . '/';
}
define('DOC_ROOT', $_SERVER['DOCUMENT_ROOT'] . DS);
define('SITE_URL', $app['config']->setting('site_url'));
define('SITE_NAME', $app['config']->setting('site_name'));
define('LOG_PATH', $app['config']->setting('log_path'));
define('CONTROLLERS_PATH', $app['config']->setting('public_path') . 'controllers' . DS);
define('MODELS_PATH', $app['config']->setting('public_path') . 'models' . DS);
define('PLUGINS_PATH', $app['config']->setting('plugins_path'));
define('PLUGINS_URL', $app['config']->setting('site_url') . 'app/code/plugins/');
define('PUBLIC_OVERRIDE_PATH', $app['config']->setting('public_path') . 'override' . DS);
define('SYSTEM_PATH', $app['config']->setting('system_path'));
define('EMPLOYEE_PICS', DOC_ROOT . $_subdir . 'media/images/profile/employees' . DS);
define('EMPLOYEE_PICS_URL', SITE_URL . 'media/images/profile/employees' . DS);
define('USER_PICS', DOC_ROOT . $_subdir . 'media/images/profile' . DS);
define('USER_PICS_URL', SITE_URL . 'media/images/profile' . DS);
define('VAR_PATH', $app['config']->setting('var_path'));
define('VENDOR_PATH', $app['config']->setting('vendor_folder'));
define('VIEWS_PATH', $app['config']->setting('template_folder') . 'views' . DS);
define('SMARTY_PATH', VENDOR_PATH . 'smarty' . DS . 'smarty' . DS);
if (!defined('SMARTY_DIR')) {
	define('SMARTY_DIR', VENDOR_PATH . 'smarty' . DS . 'smarty' . DS . 'libs' . DS);
}

$ip4 = $_SERVER['HTTP_CLIENT_IP'] ??
$_SERVER['HTTP_X_FORWARDED_FOR'] ??
$_SERVER['HTTP_X_FORWARDED'] ??
$_SERVER['HTTP_FORWARDED_FOR'] ??
$_SERVER['HTTP_FORWARDED'] ??
	$_SERVER['REMOTE_ADDR'];
if (str_contains($ip4, '::1') || str_contains($ip4, '127.0.0.1')) {
	$externalContent = file_get_contents('http://checkip.dyndns.com/');
	preg_match('/Current IP Address: \[?([:.0-9a-fA-F]+)\]?/', $externalContent, $m);
	$ip4 = $m[1];
}

define('MY_IP4', $ip4);
// define('MY_IP6', );
