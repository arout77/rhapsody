{include file="docs/layout.tpl"}
<style>
	legend {
    padding: 0px 20px;
    margin: 20px 0 25px;
    border-left: 8px solid #c8081b !important;
    font-size: 24px !important;
}
@media only screen and (min-width: 992px)
body.header-over:not(.user-scrolled-down) .navbar .navbar-nav .nav-link {
    color: #000 !important;
}
</style>

<div class="container">
<p>
	If you've used other PHP frameworks, you know that you'll often need to manually link URLs to controllers. The code to define a route will typically look something like:<br>
	<code>Route::get('/user', [UserController::class, 'index']);</code>
	<br>
	This must be done for every page on your website. 
	 This can be very cumbersome and labor intensive when maintaining your site, especially as it grows larger. DiamondPHP takes a different approach in order to simplify things and reduce the time and effort needed to map URLs.
</p>
<p>
	In DiamondPHP, the router does the URL mapping automatically for you. With this being the case, understanding the router may be a bit confusing at first if you are coming from other frameworks. It is suggested to first read the <a href="{$smarty.const.SITE_URL}documentation/mvc/controllers">Controllers documentation</a> 
	if you have not yet already.<br>
	When you create a controller, you are creating a new (blank) page on your website. You will then typically use models to fetch data and views to display the data and render the HTML.
	The router is then parsed automatically, reads the requested URL, and instantiates the proper controller and action for you. See the example below.
</p>

<legend>Mapping URLs to Controllers</legend>

<p>
	<code><em>File: /public/controllers/Products_Controller.php</em><br>
	<em>URL: {$smarty.const.SITE_URL}products</em></code>
<pre class="terminal">
&lt;?php
namespace Web\Controller;
use App\Controller\Base_Controller;

class Products_Controller extends Base_Controller {

	public function index() {
		// index() method gets executed by default 
		// if no action is specified
	}
}

?&gt;
</pre>
	In the above example, we created a controller named "Products_Controller". 
	To access this page, we would navigate to {$smarty.const.SITE_URL}products. 
	When we request that URL, the router knows that "Products_Controller" is being requested, since it is the first URL segment after your domain name. 
	The second URL segment to appear after your domain name is called the "action". The action looks for a method of the same name inside the controller class 
	"Products_Controller". Since we did not specify an action, the router will default to "index". If instead, we navigate to {$smarty.const.SITE_URL}products/widgets, 
	the router will create an <code>Products_Controller</code> object, and then look for and execute the method named <code>widgets</code> 
	in the Products_Controller class:
</p>

<p>
	<code><em>File: /public/controllers/Products_Controller.php</em><br>
	<em> URL: {$smarty.const.SITE_URL}products/widgets</em></code>
<pre class="terminal">
&lt;?php
namespace Web\Controller;
use App\Controller\Base_Controller;

class Products_Controller extends Base_Controller {

	public function index() {
		// We called the "widgets" action in the URL,
		// so index() gets ignored
	}

	public function widgets() {
		// Since we called the widgets action in the URL,
		// this method will get executed rather than index()
	}
}

?&gt;
</pre>
</p>

<div class="alert alert-info">
	It is important to remember that if there is no action present in the URL, the router will try to execute <code>index</code> by default; therefore, each controller should contain a method named index, else a 404 server error will be raised.
</div>

<legend>URL parameters</legend>

<p>
	Consider the following URL:<br>
	<var>www.example.com/products/shoes/men/size/12</var>
</p>
<p>
	Everything after the domain name, www.example.com, is considered a URL segment, with each segment divided by a forward slash. Using the above URL, we have the url segments <strong>'products', 'shoes', 'men', 'size' and '12'</strong>.<br>
	When navigating to this URL, the router reads each segment, from left to right. The first segment is always going to point to that page's Controller. The second segment is called the action. The action acts as a callback, it parses the method in the controller with the action name in the url. Every segment after the action gets stored to an array, named parameter.
</p>
<p>
	Lets break down the URL in the example above.<br>
	<dl>
		<dt>'products'</dt>
		<dd>Triggers the Products controller</dd>
		<dt>'shoes'</dt>
		<dd>Triggers the 'shoes' method in the Products controller</dd>
		<dt>'men', 'size', '12'</dt>
		<dd>URL parameters. Accessed from inside the controller using <code>$this->route->parameter[1]</code> (replace '1' with the corresponding parameter you are trying to use)</dd>
	</dl>
</p>
<p>
	There are many advantages to this way of handling routes and http requests. One big advantage is the ability to easily make SEO friendly urls. Another advantage is that maintenance and debugging becomes much simpler. Performance is also increased by offloading some of the rewriting overhead from mod_rewrite and processing the .htaccess file. 
</p>

</div>