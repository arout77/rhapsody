<style>
	dt { font-weight: bolder; font-size: 1.1em; color: maroon; }
</style>

<div class="container">
	{include file=$layout}
<p>
	There may be times where you need to create small applications or tasks that are typically performed from the terminal or otherwise does not send output to the browser and
	does not require you to implement the controllers and views or the overhead of instantiating the entire framework. For example, perhaps you need a script that manages cronjobs. In instances like these, it would be nice to have access to bits and pieces of the framework, such as the database interface or logging tool, without having to load the 
	entire shebang.
</p>

<div class="alert alert-info">Store your custom scripts in the <code>/var/scripts</code> folder.</div>

<p>
	DiamondPHP provides a service locator which allows you to do precisely that. We recommend that you store your scripts under the /var/scripts directory. Once you have created your file, all you need to do is include the <var>gateway.php</var> file (located in the root directory, alongside your .env and .htaccess files).
</p>

<span><strong>File:</strong> /var/scripts/example.php</span>
<pre class="prettyprint">
&lt;?php
	require_once '../../gateway.php';
?>
</pre>

<p>
	Now that you have included gateway.php, you have access to the system's <code>$app</code> variable. The $app variable is an instance of a <a href="https://github.com/silexphp/Pimple" target="_blank">Pimple container</a>. Pimple handles all of the dependency injection and object creation, all you need to do is use it.
</p>

<pre class="prettyprint">
&lt;?php

	// None of this works without gateway.php
	// so lets import it before we do anything else
	require_once '../../gateway.php';

	// Use the database connection
	$dbhandler = $app['database'];

	$query = "SELECT * FROM some_tbl WHERE id = ?";
	$results = $dbhandler->prepare($query);
	$results->execute([ 123 ]);

	....
?>
</pre>

<p>
	Through this method, not only do you gain access to the system's core components, but any installed plugins as well!
</p>

<pre class="prettyprint">
&lt;?php
	require_once '../../gateway.php';

	// Use the hash plugin
	$hash = $app['hash'];

	$data = $_POST['password'];

	$hash->encrypt($data);

	....
?>
</pre>

<p>
	Below is a current list of all available components and plugins available to you.
</p>
</div></div>
<div class="row p-60">
	<div class="col-xs-12 col-md-6">
		<span style="width: 50%; text-decoration: underline;"><legend>Core Components</legend></span>
		<dl>
			<dt>$app['config']</dt>
			<dd>The configuration settings submitted in the .env file, as well as some other undocumented settings. View <strong>/app/system/Config.php</strong> for all possible settings.</dd>

			<dt>$app['database']</dt>
			<dd>The database interface, as demonstrated in example above.</dd>

			<dt>$app['database_info']</dt>
			<dd>Shows information about active database.</dd>

			<dt>$app['event_manager']</dt>
			<dd>The component used to manage events.</dd>

			<dt>$app['load']</dt>
			<dd>Use to load (include) files</dd>

			<dt>$app['log']</dt>
			<dd>System logging utility used to log errors and other messages to /var/logs directory.</dd>

			<dt>$app['profiler']</dt>
			<dd>Displays system resource data to help debug performance issues.</dd>

			<dt>$app['router']</dt>
			<dd>System router; parses controllers and stores URL parameters.</dd>

			<dt>$app['session']</dt>
			<dd>Read and write to session data.</dd>

		</dl>
	</div>
	<div class="col-xs-12 col-md-6">
		<span style="width: 50%; text-decoration: underline;"><legend>Plugins</legend></span>
		<dl>
			<dt>$app['email']</dt>
			<dd>Plugin to simplify sending emails.</dd>

			<dt>$app['formatter']</dt>
			<dd>Formats phone numbers, get age in years from date of birth, various date formatting options.</dd>

			<dt>$app['geoip']</dt>
			<dd>Plugin featuring various geo location utilities.</dd>

			<dt>$app['hash']</dt>
			<dd>Essentially a wrapper around PHP's <code>password_hash()</code> function.</dd>

			<dt>$app['html_purify']</dt>
			<dd>Protects against XSS attacks and helps keep HTML compliant. Documentation can be found <a href="http://htmlpurifier.org/docs" target="_blank">here</a></dd>

			<dt>$app['pagination']</dt>
			<dd>Paginate your data</dd>

			<dt>$app['validate']</dt>
			<dd>Form validation plugin. Many of it's methods can be used to validate any type of data, not just forms. See documentation for more details.</dd>

			<dt>$app['whitelist']</dt>
			<dd>A plugin to restrict and grant access to various areas of your site.</dd>

		</dl>
	</div>
</div>

</div>

{include file=$layout_close}