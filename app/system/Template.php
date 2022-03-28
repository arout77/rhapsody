<?php

namespace App\System;
use Smarty;

if (!class_exists('Smarty')) {
	require SMARTY_DIR . 'Smarty.class.php';
}

class Template extends Smarty {
	/**
	 * @var mixed
	 */
	public $app;
	/**
	 * @var mixed
	 */
	protected $config;
	/**
	 * @var mixed
	 */
	protected $load;
	/**
	 * @var mixed
	 */
	protected $route;
	/**
	 * @var mixed
	 */
	public $session;
	# Is this the admin area?
	/**
	 * @var mixed
	 */
	private $is_admin = FALSE;

	protected $_template_name;

	protected $_controller;

	protected $_action;

	/**
	 * @param $app
	 */
	public function __construct($app) {
		parent::__construct();

		$this->app    = $app;
		$this->config = $app['config'];
		$this->load   = $app['load'];
		$this->route  = $app['router'];
		$this->_template_name    = $this->config->setting('template_name');
		$this->_controller    = $this->route->controller;
		$this->_action    = $this->route->action;
		parent::assign('_template_name', $this->_template_name);
		parent::assign('_controller', $this->_controller);
		parent::assign('_action', $this->_action);


		if ($this->route->controller == 'Admin') {
			$this->is_admin = TRUE;
		}
	}
}
