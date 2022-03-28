<?php ob_start();?>

<style>
code { color: red;  }
</style>

<?php

if (!is_readable('app/system/Config.php'))
{
	ini_set('display_errors', '0');
	error_reporting(0);
	exit("<h3>Configuration file either does not exist, or does not have read permissions (0644) in <code>app/system/Config.php</code></h3>");
}

if (!is_readable('app/system/Factory.php'))
{
	ini_set('display_errors', '0');
	error_reporting(0);
	exit("<h3>factory.php file either does not exist, or does not have read permissions (0644) in <code>app/system/Factory.php</code></h3>");
}

if (!is_readable('app/system/Run.php'))
{
	ini_set('display_errors', '0');
	error_reporting(0);
	exit("<h3>run.php file either does not exist, or does not have read permissions (0644) in <code>app/system/Run.php</code></h3>");
}

if (!is_readable('app/system/Paths.php'))
{
	ini_set('display_errors', '0');
	error_reporting(0);
	exit("<h3>paths.php file either does not exist, or does not have read permissions (0644) in <code>app/system/Paths.php</code></h3>");
}

if (!is_readable('app/system/Loader.php'))
{
	ini_set('display_errors', '0');
	error_reporting(0);
	exit("<h3>Loader.php file either does not exist, or does not have read permissions (0644) in <code>app/system/Loader.php</code></h3>");
}

if (!is_readable('app/system/controllers/Base_Controller.php'))
{
	ini_set('display_errors', '0');
	error_reporting(0);
	exit("<h3>Base_Controller.php file either does not exist, or does not have read permissions (0644) in <code>app/system/controllers/Base_Controller.php</code></h3>");
}

if (!array_key_exists('mod_rewrite', $_SERVER) && !array_key_exists('REDIRECT_mod_rewrite', $_SERVER) && !array_key_exists('REDIRECT_HTTP_MOD_REWRITE', $_SERVER))
{
	exit('<h3>Apache module <code>mod_rewrite</code> was not detected. System exiting...</h3>');
}

if (!extension_loaded('pdo'))
{
	exit('<h3><code>PDO extension</code> was not detected. System exiting...</h3>');
}

function php_ver()
{
	// Detect PHP version being run
	return PHP_MAJOR_VERSION . '.' . PHP_MINOR_VERSION . '.' . PHP_RELEASE_VERSION;
}
if (php_ver() <= 7.9)
{
	exit('<h3>You must have PHP version 8.0 or higher. Your PHP version: <code>' . php_ver() . '</code> System exiting...</h3>');
}
	
exit('<div class="alert alert-info">
		<h2>No problems could be found in the initial environment and file system checks</h2>
	  </div>
	  <h3>If you are experiencing errors or other problems, turn on error reporting in the <code>.env</code> configuration file, reload this page, and check for any errors reported in <code>/var/logs</code></h3>');

ob_flush();