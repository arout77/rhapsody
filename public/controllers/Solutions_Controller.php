<?php
namespace Web\Controller;
use App\Controller\Base_Controller;

class Solutions_Controller extends Base_Controller
{
	public function __construct($app)
	{
		parent::__construct($app);
	}

	public function index()
	{
		$this->template->assign("content", "solutions/index.tpl");
		$this->template->display("solutions/body.tpl");
	}

}
