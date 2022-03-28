<?php
namespace Web\Controller;
use App\Controller\Base_Controller;

class Documentation_Controller extends Base_Controller {

	/**
	 * @param $app
	 */
	public function __construct($app) {

		parent::__construct($app);

		// $app = (array) $app;
		// $array = array_keys($app);
		// echo \Pimple\Container::keys;
		// var_dump($array[3]);
		// exit;
		// $this->template->assign('components', $data);
		$this->template->assign('title', 'DiamondPHP MVC Framework for PHP 8');
		$this->template->assign('controller', $this->route->controller);
		$this->template->assign('sidebar', 'docs/toc.tpl');
		// $this->template->assign('content', 'docs/toc.tpl');
		$this->template->assign('layout', 'docs/layout.tpl');
		$this->template->assign('layout_close', 'docs/layout_close.tpl');
	}

	/**
	 * @return mixed
	 */
	public function index() {
		$data['load'] = $this->load;
		$data['route'] = $this->route;

		$this->template->assign('title', 'DiamondPHP MVC Framework for PHP 8');
		$this->template->assign('content', 'docs/index.tpl');
		$this->template->display('template/body.tpl');
	}

	/**
	 * @return mixed
	 */
	public function introduction() {
		$data['load'] = $this->load;
		$data['route'] = $this->route;
		$page = $data['route']->parameter['1'];
		switch ($page) {
		case "requirements":
			$this->template->assign('title', 'Requirements for installing DiamondPHP Framework');
			$this->template->assign('content', 'docs/introduction/requirements.tpl');
			$this->template->display('template/body.tpl');
			break;
		case "install":
			$this->template->assign('title', 'How to install DiamondPHP MVC Framework');
			$this->template->assign('content', 'docs/introduction/install.tpl');
			$this->template->display('template/body.tpl');
			break;
		case "configuration":
			$this->template->assign('title', 'Configuration options for DiamondPHP MVC framework');
			$this->template->assign('content', 'docs/introduction/configuration.tpl');
			$this->template->display('template/body.tpl');
			break;
		case "modular":
			$this->template->assign('title', 'Accessing features independent of framework');
			$this->template->assign('subtitle', 'Creating an Object');
			$this->template->assign('use_it', 'Use it: <code>$app["component-name"]</code>');
			$this->template->assign('icon', 'code');
			$this->template->assign('lead', "Use the global service locator to access core features and even plugins when creating applications outside of the framework.");
			$this->template->assign('content', 'docs/introduction/modular.tpl');
			$this->template->display('template/body.tpl');
			break;

		default:
			$this->template->assign('content', 'docs/index.tpl');
			$this->template->display('template/body.tpl');
		}
	}

	/**
	 * @return mixed
	 */
	public function mvc() {
		$data['load'] = $this->load;
		$data['route'] = $this->route;
		$page = $data['route']->parameter['1'];
		switch ($page) {
		case "controllers":
			$this->template->assign('title', 'Working with Controllers in DiamondPHP MVC Framework');
			$this->template->assign('subtitle', 'Creating Controllers');
			$this->template->assign('use_it', '');
			$this->template->assign('icon', 'flag');
			$this->template->assign('lead', "The controller's job is to handle data that the user inputs or submits, and update the model accordingly. The controller’s life blood is the user; without user interactions, the controller has no purpose. It is the only part of the MVC pattern the user should be interacting with.");
			$this->template->assign('content', 'docs/mvc/controllers.tpl');
			$this->template->display('template/body.tpl');
			break;
		case "models":
			$this->template->assign('title', 'How to use Models in DiamondPHP MVC Framework');
			$this->template->assign('subtitle', 'Creating Models');
			$this->template->assign('use_it', 'Use it: <code>$this->model(\'Example\');</code>');
			$this->template->assign('icon', 'database');
			$this->template->assign('lead', "Models interact directly with your database. The model will perform your sql query and return the result, from which your controllers and views can then access the data.");
			$this->template->assign('content', 'docs/mvc/models.tpl');
			$this->template->display('template/body.tpl');
			break;
		case "router":
			$this->template->assign('title', 'Role of the Router in DiamondPHP MVC Framework');
			$this->template->assign('subtitle', 'Working with the Router');
			$this->template->assign('use_it', 'Use it: <code>$this->route;</code>');
			$this->template->assign('icon', 'share-alt');
			$this->template->assign('lead', "The Router class examines the HTTP request and dynamically maps URLs to the corresponding controller.");
			$this->template->assign('content', 'docs/mvc/router.tpl');
			$this->template->display('template/body.tpl');
			break;
		case "views":
			$this->template->assign('title', 'Display your HTML in Views with DiamondPHP MVC Framework');
			$this->template->assign('subtitle', 'Working with view files');
			$this->template->assign('use_it', 'Use it: <code>$this->template->display(\'filename.tpl\');</code>');
			$this->template->assign('icon', 'file');
			$this->template->assign('lead', "View files take the data sent by controllers and models and presents it to the web browser. View files are generated by the Smarty template engine.");
			$this->template->assign('content', 'docs/mvc/views.tpl');
			$this->template->display('template/body.tpl');
			break;

		default:
			$this->template->display('docs/index.tpl');
			$this->template->display('template/body.tpl');
		}
	}

	/**
	 * @return mixed
	 */
	public function core() {
		$data['load'] = $this->load;
		$data['route'] = $this->route;
		$page = $data['route']->parameter['1'];
		switch ($page) {
		case "codegenie":
			$this->template->assign('title', 'DiamondPHP MVC Framework for PHP 8 | Code Genie');
			$this->template->assign('subtitle', 'Using the Code Genie');
			$this->template->assign('use_it', '');
			$this->template->assign('icon', 'magic');
			$this->template->assign('lead', "The Code Genie greatly reduces the amount of boilerplate code when creating new pages in your website.");
			$this->template->assign('content', 'docs/core/codegenie.tpl');
			$this->template->display('template/body.tpl');
			break;
		case "cron":
			$this->template->assign('content', 'docs/core/cron.tpl');
			$this->template->display('template/body.tpl');
			break;
		case "database":
			$this->template->assign('title', 'DiamondPHP MVC Framework for PHP 8 | Database');
			$this->template->assign('subtitle', 'Working with SQL');
			$this->template->assign('use_it', 'Use it: <code>$this->db;</code>');
			$this->template->assign('icon', 'share-alt');
			$this->template->assign('lead', "How to interact with your database using the built-in PDO interface.");
			$this->template->assign('content', 'docs/core/database.tpl');
			$this->template->display('template/body.tpl');
			break;
		case "events":
			$this->template->assign('content', 'docs/core/events.tpl');
			$this->template->display('template/body.tpl');
			break;
		case "headers":
			$this->template->assign('title', 'DiamondPHP MVC Framework for PHP 8 | HTTP Headers');
			$this->template->assign('subtitle', 'Working with headers');
			$this->template->assign('use_it', 'Use it: <code>$this->set_headers(<samp>parameter</samp>);</code>');
			$this->template->assign('icon', 'share-alt');
			$this->template->assign('lead', "Use the base controller's builtin functionality to manage HTTP headers.");
			$this->template->assign('content', 'docs/core/headers.tpl');
			$this->template->display('template/body.tpl');
			break;
		case "sessions":
			$this->template->assign('content', 'docs/core/sessions.tpl');
			break;
		case "blocks":
			$this->template->assign('content', 'docs/core/blocks.tpl');
			break;
		case "override":
			$this->template->assign('content', 'docs/core/override.tpl');
			break;
		case "logger":
			$this->template->assign('content', 'docs/core/logger.tpl');
			break;
		case "loader":
			$this->template->assign('content', 'docs/core/loader.tpl');
			break;

		default:
			return $this->template->display('docs/index.tpl');
		}
	}

	/**
	 * @return mixed
	 */
	public function modules() {
		$data['load'] = $this->load;
		$data['route'] = $this->route;
		$page = $data['route']->parameter['1'];
		switch ($page) {
		case "breadcrumbs":
			$this->template->assign('content', 'docs/modules/breadcrumbs.tpl');
			break;

		case "email":
			$this->template->assign('title', 'DiamondPHP MVC Framework for PHP 8 | Email Helper');
			$this->template->assign('subtitle', 'Password Encryption');
			$this->template->assign('use_it', 'Use it: <code>$this->plugin(\'email\');</code>');
			$this->template->assign('icon', 'envelope');
			$this->template->assign('lead', "The Email helper implements PHPMailer, allowing you to easily and quickly send SMTP emails.");
			$this->template->display('docs/modules/email.tpl');
			$this->template->display('template/body.tpl');
			break;

		case "formatter":
			$this->template->assign('content', 'docs/modules/formatter.tpl');
			break;

		case "friends":
			$this->template->assign('content', 'docs/modules/friends.tpl');
			break;

		case "geoip":
			$this->template->assign('content', 'docs/modules/geoip.tpl');
			break;

		case "hash":
			$this->template->assign('title', 'DiamondPHP MVC Framework for PHP 8 | Encryption Helper');
			$this->template->assign('subtitle', 'Password Encryption');
			$this->template->assign('use_it', 'Use it: <code>$this->toolbox(\'hash\');</code>');
			$this->template->assign('icon', 'user-secret');
			$this->template->assign('lead', "The Encryption helper uses PHP's built-in password_hash() function to encrypt and salt important data.");
			$this->template->assign('content', 'docs/modules/hash.tpl');
			break;

		case "images":
			$this->template->assign('content', 'docs/modules/images.tpl');
			break;

		case "messenger":
			$this->template->assign('content', 'docs/modules/messenger.tpl');
			break;

		case "titles":
			$this->template->assign('content', 'docs/modules/titles.tpl');
			break;

		case "pagination":
			$this->template->assign('title', 'DiamondPHP MVC Framework for PHP 8 | Pagination Helper');
			$this->template->assign('subtitle', 'Paginating Data');
			$this->template->assign('use_it', 'Use it: <code>$this->toolbox(\'pagination\');</code>');
			$this->template->assign('icon', 'list-ol');
			$this->template->assign('lead', "Paginate your data easily with the Pagination helper.");
			$this->template->assign('content', 'docs/modules/pagination.tpl');
			break;

		case "sanitize":
			$this->template->assign('title', 'DiamondPHP MVC Framework for PHP 8 | Data Sanitize Helper');
			$this->template->assign('subtitle', 'Data Sanitization');
			$this->template->assign('use_it', 'Use it: <code>$this->toolbox(\'sanitize\');</code>');
			$this->template->assign('icon', 'medkit');
			$this->template->assign('lead', "The Sanitize helper is used to enable/disable the submission of HTML tags in GET and POST data. Use the Sanitize helper in addition to the Validation helper when you want to customize the data processing of forms.");
			$this->template->assign('content', 'docs/modules/sanitize.tpl');
			break;

		case "user-agent":
			$this->template->assign('content', 'docs/modules/user-agent.tpl');
			break;

		case "validation":
			$this->template->assign('title', 'DiamondPHP MVC Framework for PHP 8 | Validation Helper');
			$this->template->assign('subtitle', 'Form Validation');
			$this->template->assign('use_it', 'Use it: <code>$this->toolbox(\'validate\');</code>');
			$this->template->assign('icon', 'check');
			$this->template->assign('lead', "The Validation helper is used to validate forms. It is recommended, but not required, to use this in conjuction with the JS form validation.");
			$this->template->assign('content', 'docs/modules/validation.tpl');
			break;

		case "ckeditor":
			$this->template->assign('content', 'docs/modules/ckeditor.tpl');
			break;

		case "gritter":
			$this->template->assign('content', 'docs/modules/gritter.tpl');
			break;

		case "mobile":
			$this->template->assign('content', 'docs/modules/mobile.tpl');
			break;

		case "phpword":
			$this->template->assign('content', 'docs/modules/phpword.tpl');
			break;

		default:
			$this->template->assign('content', 'docs/modules/overview.tpl');
		}

		$this->template->display('template/body.tpl');
	}

	public function docs() {
		$this->index();
	}

	public function faq() {
		$data['load'] = $this->load;
		$data['route'] = $this->route;
		$this->template->assign('content', 'docs/faq.tpl');
	}

	public function license() {

		$this->template->assign('content', 'docs/license.tpl');
	}

}
