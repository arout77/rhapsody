{include file=$layout}

		<legend>Introduction</legend>

		<p>
			DiamondPHP implements the <a href="http://smarty.net">Smarty 3 template engine</a> to generate templates and view files. If you are familiar with MVC frameworks, or have already read through the <a href="{$smarty.const.SITE_URL}documentation/mvc/controllers">Controllers</a> and <a href="{$smarty.const.SITE_URL}documentation/mvc/models">Models</a> portion of the documentation, you'll already know that controllers and models do not present data, they only manage it. Views are what is responsible for outputting HTML and content to the browser.
		</p>
        <hr style="border: 1px dashed #333;">
		<p>
			<div class="alert alert-warning-light" role="alert">
				<span class="alert-icon"><i class="fas fa-info-circle"></i></span>
				<span class="alert-text">Smarty view files end with <strong>.tpl</strong> extension. When creating your own view files, they must also 
				use the .tpl extension.</span>
			</div>
		</p>

		<legend>File location</legend>
		<p>
			Like other template engines, Smarty view files contain the HTML, as well as any data passed to the view, to be displayed by the browser.
			Data objects are passed to view files as a variable, from the controller. We will discuss this further below, but for the moment it is important to remember
			that view files should only ever contain your HTML and any needed Smarty tags; there should be no programming logic or database interactions 
			performed from the view. 
		</p>
		<p>
			View files are stored inside the following location:<br>
			<code>/public/template/template_name/views</code><br><br>
			"template_name" is the name of your template, as set in the 
			<a href="{$smarty.const.SITE_URL}documentation/introduction/configuration">.env configuration file</a>.
		</p>
		<p>
			It is highly recommended to create separate folders for your view files for each corresponding controller. 
			For example, if you have a Users controller, store view files for the Users controller in the following directory:<br>
			<code>/public/template/template_name/views/users</code><br><br>
			Organizing your views in such a manner will make it simple to find a specific file, and will help avoid name collisions.
		</p>
		<hr style="border: 1px dashed #333;">

		<legend>CSS, JS, Images and other assets</legend>
		<p>
			While you will link to your CSS and JS files within the <code>head.tpl</code> and <code>footer.tpl</code> view files, 
			you must store the actual CSS, JS and images under the media folder. The precise location to store the files are as follows:<br>
			<code><h5>/media/template_name/assets/</h5></code>.<br>As such, your folder structure should look like the below example:<br><br>
			
			<dl class="row">
				<dt class="col-sm-3">CSS files</dt>
					<dd class="col-sm-9">
						<p><code>/media/template_name/assets/css</code></p>
					</dd>
				<dt class="col-sm-3">JS files</dt>
					<dd class="col-sm-9">
						<p><code>/media/template_name/assets/js</code></p>
					</dd>
				<dt class="col-sm-3">Images</dt>
					<dd class="col-sm-9">
						<p><code>/media/template_name/assets/img</code></p>
					</dd>
				<dt class="col-sm-3">Fonts</dt>
					<dd class="col-sm-9">
						<p><code>/media/template_name/assets/fonts</code></p>
					</dd>
			</dl>
			
		</p>

		<hr style="border: 1px dashed #333;">
		<legend>Layout</legend>
		<p>
			Smarty template engine was the first major template engine produced for the PHP language. 
			DiamondPHP chose Smarty for template management for it's class leading performance, ease of use and full feature set. 
			Smarty 3, the latest version, has introduced many key features and upgrades over previous versions. 
			One of the most important is <em>template inheritance</em>. As Smarty itself describes it, 
			"template inheritance keeps template management minimal and efficient.". 
			We will quickly review the default template layout of DiamondPHP framework.
		</p>
		
		<p>
			The framework relies on four seperate view files to generate the template and content:
		</p>
		<p>
			<dl>
				<dt class="red">head.tpl</dt>
				<dd>Sets page titles, and manages meta tags and other elements inside of the HTML &lt;head> tags</dd>
				<dt class="red">footer.tpl</dt>
				<dd>The page footer. Primary purpose is to load required Javascript files and display links</dd>
				<dt class="red">menu.tpl</dt>
				<dd>The navigation menu</dd>
				<dt class="red">body.tpl</dt>
				<dd>The entire HTML structure of the website. Automatically imports the head, menu and footer files</dd>
			</dl>
		</p>

		<hr style="border: 1px dashed #333;">

		<legend>Assigning and displaying views</legend>

		<p>
			Due to the way DiamondPHP has structured the base template, it looks for a variable named <code>{ $content }</code> 
			to determine what content to display. As a result, we assign our view files to the $content variable, therefore <strong>'content'</strong> is 
			<span class="red"><strong>required</strong></span> as the first parameter, in order to display a view.
		</p>
		<p>
			Views are assigned in the Controller for each web page, using the following syntax:<br>
<pre class="console">
$this->template->assign('content', 'example.tpl');
</pre>
		<p>
			It is important to note that this just <em>registers</em> the view file with the controller. In order to actually display the view
			in your browser, you must manually trigger the <strong>body.tpl</strong>, using the command <code>$this->template->display()</code><br>
<pre class="console prettify">
// <em>Register our view file</em>
<span class="yellow">$this->template->assign('content', 'example.tpl');</span>
<em>
// Now display it in the browser. 
// The 'template' prefix is needed because by default, we store the base template files under
// a directory named 'template' in our views folder.</em>
<span class="yellow">$this->template->display('template/body.tpl');</span>
</pre>
		</p>
		<p>
			There are occasions where you may wish to display partial views, or multiple view files, on a web page. 
			To do so, simply create an array, with each key representing the view file to include, and pass the array as the second parameter. An example is provided below:
			<br>
<pre class="console">
// Array using filenames of each view that we want to display
<span class="yellow">$content = ['example_1.tpl', 'example_2.tpl', 'example_3.tpl'];
$this->template->assign('content', $content);</span>
</pre>
		</p>

		<p>
			<div class="alert alert-warning-light" role="alert">
				<span class="alert-icon"><i class="fas fa-exclamation-circle"></i></span>
				<span class="alert-text">If you store view files in a subdirectory, you will need to prefix the view file name 
				with the name of the subdirectory when assigning views.<br>
				<small>example:</small> $this->template->assign('content', '<code>users/</code>index.tpl')</span>
			</div>
		</p>

<hr style="border: 1px dashed #333;">

		<legend>Passing variables from controller to view</legend>
		<p>
			Variables are assigned in the Controller, using the following syntax:<br>
			<code>$this->template->assign( parameter 1, parameter 2 );</code>
		</p>
		<p>
			In the above code, parameter 1 is setting the variable name that will be used and parsed inside the view file, and parameter 2 is the value assigned to parameter 1. The primary purpose of this function is to set data, and then pass that data to the view file. Please view the following example:
		</p>
		<em>Controller file</em>
<pre class="console">
public function get_user() 
{ldelim}
    # Use the Session Plugin to fetch username
    if( $this->session->verify('username') ) 
    {ldelim}
        $username = $this->session->get('username');
    {rdelim}
    else 
    {ldelim}
    	$username = 'Visitor';
    {rdelim}

    # Now we can simply pass it to the view file
    $this->template->assign('user', $username);

    # Display the view file
    $this->template->assign('content', 'member/hello.tpl');
{rdelim}
</pre>

				<em>View (hello.tpl)</em>
<pre class="console">
# Say hello!
Hello, {ldelim}$user{rdelim}
</pre>				

					Full documentation on assigning variables is available on <a href="http://www.smarty.net/docs/en/api.assign.tpl" target="_blank">Smarty assign() documentation</a>.
					<br><br>
					<div class="alert alert-danger-light" role="alert">
						<h4 class="white">Important</h4> <em>The Smarty template engine provides functions that allows you to retrieve data directly from your database. An example of that is seen in the link above.</em>
						<strong> DO NOT USE VIEW FILES TO MAKE DATABASE CALLS!</strong><br>
						Instead, use the provided 
						<a class="blue" href="{$smarty.const.SITE_URL}documentation/core/database">database functionality</a> and/or 
						<a class="blue" href="{$smarty.const.SITE_URL}documentation/mvc/models">Models</a> within your controller, and then pass that data to your view file using the <em>$this->template->assign()</em> function.
					</div>
				</p>
			

			</div>
		</div>
	</article>
</div>

{include file=$layout_close}