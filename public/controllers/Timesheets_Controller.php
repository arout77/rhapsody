<?php
namespace Web\Controller;
use App\Controller\Base_Controller;

class Timesheets_Controller extends Base_Controller
{
	public function __construct($app)
	{
		parent::__construct($app);
	}

	public function index()
	{
		$this->template->assign("content", "timesheets/index.tpl");
		$this->template->display("timesheets/body.tpl");
	}

}
