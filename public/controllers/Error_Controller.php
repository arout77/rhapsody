<?php
namespace Web\Controller;
use App\Controller\Base_Controller;

class Error_Controller extends Base_Controller {

	/**
	 * @param $app
	 */
	public function __construct($app) {
		parent::__construct($app);
	}
	// Error type ( 403, 404, 500, etc )
	/**
	 * @var mixed
	 */
	public $type;

	public function index() {
		$this->template->assign('content', 'error/index.tpl');
		$this->template->display('template/body.tpl');
	}

	public function controller() {
		$this->template->assign('content', 'error/controller.tpl');
		$this->template->display('template/body.tpl');
	}

	public function _403() {
		$this->type = 403;
		$this->template->assign('content', 'error/_403.tpl');
		$this->template->display('template/body.tpl');
	}

	public function _404() {
		$this->type = 404;
		$this->template->assign('content', 'error/_404.tpl');
		$this->template->display('template/body.tpl');
	}

	public function _500() {
		$this->type = 500;
		$this->template->assign('content', 'error/_500.tpl');
		$this->template->display('template/body.tpl');
	}

}