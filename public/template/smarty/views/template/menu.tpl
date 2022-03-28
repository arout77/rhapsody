<nav id="header" class="header-light navbar-toggleable-md shadow-after-3 clearfix">
<div class="container">

	<!-- 
		MOBILE : NAVIGATION TOGGLE 
		* always before .header-logo
			data-text="MENU"
	-->
	<button data-text="Docs" class="nav-toggle"></button>

	<!-- 
		LOGO 
	-->						
	<a class="header-logo" href="{$smarty.const.SITE_URL}">
		<span style="border-right: 2px solid black;" class="bg-red white">d</span><span class="bg-dark white">iamondphp</span>
		{* <img src="{$smarty.const.SITE_URL}media/images/logo.png" alt="DiamondPHP | MVC framework for PHP 8" /> *}
	</a>

	<!--
		+ LAYOUT
			.header-buttons-bordered
	-->
	<ul class="list-inline header-buttons">
		<li class="list-inline-item">
			<a href="https://diamondphp.org/codegenie/">
				<i class="fa fa-magic"></i>
				Code Genie
			</a>
		</li>
		<li class="list-inline-item">
			<a href="https://diamondphp.org/forums/">
				<i class="fa fa-life-saver red"></i>
				Support
			</a>
		</li>
		<li class="list-inline-item hidden-xs-down">
			<a href="https://github.com/arout77/diamondphp">
				<i class="fa fa-github"></i>
				GitHub
			</a>
		</li>
		<li class="list-inline-item hidden-xs-down">
			<a href="https://github.com/arout77/diamondphp">
				<i class="fa fa-download lime"></i>
				Download
			</a>
		</li>

		{* <li class="list-inline-item header-button-arrow">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" aria-expanded="false">
				<i class="fa fa-download"></i>
				Download
			</a>
			<div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; transform: translate3d(84px, 60px, 0px); top: 0px; left: 0px; will-change: transform;">
				<span><i class="fa fa-user"></i> John Doe</span>
				<div class="pl-15 pr-15 pt-15 pb-15">
					<h4 class="fs-13 fw-400 mb-10">Welcome to Smarty!</h4>
					<a href="pack-megashop-sign-in.html" class="btn btn-primary btn-sm btn-block fw-300">SIGN IN</a>
					
					<div class="clearfix mt-8">
						<span class="fs-11 pt-3 float-left">OR SIGN IN WITH:</span>

						<div class="float-right">
							<a target="_blank" class="social-icon social-icon-sm social-facebook" href="#">
								<i class="fa fa-facebook"></i>
								<i class="fa fa-facebook"></i>
							</a>
							<a target="_blank" class="social-icon social-icon-sm social-gplus" href="#">
								<i class="fa fa-google-plus"></i>
								<i class="fa fa-google-plus"></i>
							</a>
						</div>
					</div>


					<a href="pack-megashop-sign-up.html" class="btn btn-danger btn-sm btn-block fw-300">SIGN UP</a>

				</div>

				<hr>

				<a class="dropdown-item" href="pack-megashop-account-wishlist.html">My Wishlist</a>
				<a class="dropdown-item" href="pack-megashop-account-orders.html">My Orders</a>
				<a class="dropdown-item" href="pack-megashop-account-settings.html">Account Settings</a>
				<a class="dropdown-item dropdown-custom-icon dropdown-myaccount-logout" href="#">
					<i class="fa fa-power-off"></i> 
					<b>Log Out</b>
				</a>
			</div>
		</li> *}
	</ul>

	<script src="{$smarty.const.SITE_URL}media/smarty/assets/plugins/typeahead.bundle.js"></script>
	<form action="{$smarty.const.SITE_URL}search/results" method="post" class="search-global hidden-sm-down">
		<!-- AUTOSUGGEST

			Loaded dinamically by scripts.js
			plugin path: assets/plugins/typeahead.bundle.js
			Default limit changed to: 1000 [limit should be applied from the PHP code]

			data-prefetch="php/view/demo.autosuggest.php?limit=10&search=" - The URL to query!
			PLEASE NOTE: 
				?limit=10	- this is the results limit sent to PHP script (php/view/demo.autosuggest.php)
				&search - query param. you can replace it with &q or anything you need on your backend script

			data-minLength="1" 		- minimum letters to activate autosuggestions
			data-highlight="false" 	- deactivate highlight
			data-hint="false" 		- deactivate hint (placeholder hint)
			
			data-autoload="false"	- if you want to use your custom typeahead JS code [advanced]
		-->
			<input type="search" id="search_query" name="search_query" class="form-control typeahead" placeholder="Search...">
			<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
	</form>
	<div class="searchResult"></div>
	

	<!--
		.main-nav-bordered
	-->
	<nav class="main-nav main-nav-toggle" style="">

		<div class="main-nav-mobile-header clearfix">
			<button class="nav-toggle-close"></button>
			<span style="border-right: 2px solid black;" class="bg-red white">d</span><span class="bg-dark white">iamondphp</span>
		</div>

		<div class="main-nav-mobile-scroll">
			<ul class="list-unstyled mb-0">
				<li>
					<span>
						<a href="#">
							Documentation
						</a>
					</span>
				</li>

				<li class="main-nav-item main-nav-expanded">
					<a href="#" class="text-info">
						<h4><i class="fa fa-circle-o-notch text-info"></i> 
						Introduction</h4>
					</a>

					<div class="main-nav-submenu" style="min-height: 539px;">
						<div class="row">
							<div class="col-md-12">
								<h3><i class="fa fa-star-o"></i> Getting Started</h3>
								<ul class="list-unstyled">
									<li></li>
									<li><a href="{$smarty.const.SITE_URL}documentation/introduction/requirements">Requirements</a></li>
									<li><a href="{$smarty.const.SITE_URL}documentation/introduction/install">Installation</a></li>
									<li><a href="{$smarty.const.SITE_URL}documentation/introduction/configuration">Configuration</a></li>
									<li><a href="{$smarty.const.SITE_URL}documentation/introduction/overview">Overview</a></li>
								</ul>
							</div>
						</div>
					</div>

				</li>

				<!-- 
					.main-nav-expanded = expanded mega menu
				-->
				<li class="main-nav-item main-nav-expanded">
					<a href="#" class="text-success">
						<h4><i class="fa fa-code text-success"></i> 
						MVC Functions</h4>
					</a>

					<div class="main-nav-submenu" style="min-height: 539px;">
						<div class="row">

							<div class="col-md-12">
								<h3><i class="fa fa-star-o"></i> Understanding <strong>M</strong>odels, <strong>V</strong>iews and <strong>Controllers</strong></h3>
								<ul class="list-unstyled">
									<li></li>
									<li><a href="{$smarty.const.SITE_URL}documentation/mvc/router">Router</a></li>
									<li><a href="{$smarty.const.SITE_URL}documentation/mvc/controllers">Controllers</a></li>
									<li><a href="{$smarty.const.SITE_URL}documentation/mvc/models">Models</a></li>
									<li><a href="{$smarty.const.SITE_URL}documentation/mvc/views">Views</a></li>
								</ul>
							</div>

						</div>

					</div>
				</li>

				<li class="main-nav-item main-nav-expanded">
					<a href="#" class="text-danger">
						<h4><i class="fa fa-sitemap text-danger"></i> 
						Plugins</h4>
					</a>

					<div class="main-nav-submenu" style="min-height: 539px;">
						<div><h3><i class="fa fa-sitemap"></i> Working with plugins</h3></div>
						<div class="row">
								<div class="col-md-4">
								<ul class="list-unstyled">
									<li></li>
								<li><a class="dropdown-item ps-3 border-radius-md mb-1" href="{$smarty.const.SITE_URL}documentation/modules/overview">Overview</a></li>
						      <li><a class="dropdown-item ps-3 border-radius-md mb-1" href="{$smarty.const.SITE_URL}documentation/modules/breadcrumbs">Breadcrumbs</a></li>
						      <li><a class="dropdown-item ps-3 border-radius-md mb-1" href="{$smarty.const.SITE_URL}documentation/modules/useragent">Browser Data</a></li>
						      <li><a class="dropdown-item ps-3 border-radius-md mb-1" href="{$smarty.const.SITE_URL}documentation/modules/ckeditor">CKEditor</a></li>
						      <li><a class="dropdown-item ps-3 border-radius-md mb-1" href="{$smarty.const.SITE_URL}documentation/modules/formatter">Data Formatter</a></li>
						      <li><a class="dropdown-item ps-3 border-radius-md mb-1" href="{$smarty.const.SITE_URL}documentation/modules/sanitize">Data Sanitization</a></li>
						      <li><a class="dropdown-item ps-3 border-radius-md mb-1" href="{$smarty.const.SITE_URL}documentation/modules/email">Email Helper</a></li>
						      <li><a class="dropdown-item ps-3 border-radius-md mb-1" href="{$smarty.const.SITE_URL}documentation/modules/validation">Form Validation</a></li>
						      <li><a class="dropdown-item ps-3 border-radius-md mb-1" href="{$smarty.const.SITE_URL}documentation/modules/friends">Friends</a></li>
						      <li><a class="dropdown-item ps-3 border-radius-md mb-1" href="{$smarty.const.SITE_URL}documentation/modules/geoip">GeoIP</a></li>
								</ul>
								</div>

								<div class="col-md-4">
								<ul class="list-unstyled">
									<li></li>
						      <li><a class="dropdown-item ps-3 border-radius-md mb-1" href="{$smarty.const.SITE_URL}documentation/modules/gritter">Gritter Notifications</a></li>
						      <li><a class="dropdown-item ps-3 border-radius-md mb-1" href="{$smarty.const.SITE_URL}documentation/modules/images">Image Uploader</a></li>
						      <li><a class="dropdown-item ps-3 border-radius-md mb-1" href="{$smarty.const.SITE_URL}documentation/modules/messenger">Messenger</a></li>
						      <li><a class="dropdown-item ps-3 border-radius-md mb-1" href="{$smarty.const.SITE_URL}documentation/modules/mobile">Mobile Detection</a></li>
						      <li><a class="dropdown-item ps-3 border-radius-md mb-1" href="{$smarty.const.SITE_URL}documentation/modules/title">Page Titles</a></li>
						      <li><a class="dropdown-item ps-3 border-radius-md mb-1" href="{$smarty.const.SITE_URL}documentation/modules/pagination">Pagination</a></li>
						      <li><a class="dropdown-item ps-3 border-radius-md mb-1" href="{$smarty.const.SITE_URL}documentation/modules/hash">Password / Data Encryption</a></li>
						      <li><a class="dropdown-item ps-3 border-radius-md mb-1" href="{$smarty.const.SITE_URL}documentation/modules/phpword">PHPWord</a></li>
						      <li><a class="dropdown-item ps-3 border-radius-md mb-1" href="{$smarty.const.SITE_URL}documentation/core/sessions">User authentication / Login</a></li>
								</ul>
								</div>
							</div>


					</div>
				</li>

				<li class="main-nav-item main-nav-expanded">
					<a href="#" class="text-warning">
						<h4><i class="fa fa-cogs text-warning"></i> 
						System Functionality</h4>
					</a>

					<div class="main-nav-submenu" style="min-height: 539px;">
						<div class="row">

							<div class="col-md-12">
								<h3><i class="fa fa-star-o"></i> Working with core functions</h3>
								<ul class="list-unstyled">
									<li></li>
									<li><a href="{$smarty.const.SITE_URL}documentation/core/blocks">Blocks</a></li>
							      <li><a href="{$smarty.const.SITE_URL}documentation/core/override">Class Overrides</a></li>
							      <li><a href="{$smarty.const.SITE_URL}documentation/core/codegenie">Code Genie</a></li>
							      <li><a href="{$smarty.const.SITE_URL}documentation/core/cron">Cron Jobs</a></li>
							      <li><a href="{$smarty.const.SITE_URL}documentation/core/database">Database</a></li>
							      <li><a href="{$smarty.const.SITE_URL}documentation/core/events">Event Listeners</a></li>
							      <li><a href="{$smarty.const.SITE_URL}documentation/core/logger">Error Logging</a></li>
							      <li><a href="{$smarty.const.SITE_URL}documentation/core/loader">File Loading</a></li>
							      <li><a href="{$smarty.const.SITE_URL}documentation/core/headers">HTTP Headers</a></li>
							      <li><a href="{$smarty.const.SITE_URL}documentation/core/sessions">Sessions</a></li>
								</ul>
							</div>

						</div>

					</div>
				</li>

				<li class="main-nav-item main-nav-expanded">
					<a href="#" class="text-danger">
						<h4><i class="fa fa-html5 text-danger"></i> 
						Template Features</h4>
					</a>

					<div class="main-nav-submenu" style="min-height: 539px;">
						<div class="row">

							<div class="col-md-12">
								<h3><i class="fa fa-star-o"></i> Working with core functions</h3>
								<ul class="list-unstyled">
									<li></li>
									<li><a href="{$smarty.const.SITE_URL}documentation/core/blocks">Blocks</a></li>
							      <li><a href="{$smarty.const.SITE_URL}documentation/core/override">Class Overrides</a></li>
							      <li><a href="{$smarty.const.SITE_URL}documentation/core/codegenie">Code Genie</a></li>
							      <li><a href="{$smarty.const.SITE_URL}documentation/core/cron">Cron Jobs</a></li>
							      <li><a href="{$smarty.const.SITE_URL}documentation/core/database">Database</a></li>
							      <li><a href="{$smarty.const.SITE_URL}documentation/core/events">Event Listeners</a></li>
							      <li><a href="{$smarty.const.SITE_URL}documentation/core/logger">Error Logging</a></li>
							      <li><a href="{$smarty.const.SITE_URL}documentation/core/loader">File Loading</a></li>
							      <li><a href="{$smarty.const.SITE_URL}documentation/core/headers">HTTP Headers</a></li>
							      <li><a href="{$smarty.const.SITE_URL}documentation/core/sessions">Sessions</a></li>
								</ul>
							</div>

						</div>

					</div>
				</li>

				<li class="main-nav-item main-nav-expanded">
					<a href="#" class="text-info">
						<h4><i class="fa fa-circle-o-notch text-info"></i> 
						Modularity</h4>
					</a>

					<div class="main-nav-submenu" style="min-height: 539px;">
						<div class="row">
							<div class="col-md-12">
								<h3><i class="fa fa-star-o"></i> Accessing framework components from outside of the framework</h3>
								<ul class="list-unstyled">
									<li></li>
									<li><a href="{$smarty.const.SITE_URL}documentation/introduction/modular">Access system components in your custom scripts</a></li>
								</ul>
							</div>
						</div>
					</div>

				</li>
				
			</ul>
		</div>

	</nav>

</div>
</nav>