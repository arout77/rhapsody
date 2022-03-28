<?php
namespace Web\Controller;
use App\Controller\Base_Controller;

class Company_Controller extends Base_Controller
{
	public function __construct($app)
	{
		parent::__construct($app);
	}

	public function index()
	{
		$this->template->assign("content", "company/index.tpl");
		$this->template->display("company/body.tpl");
	}

}
