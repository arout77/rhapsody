<?php
namespace Web\Controller;
use App\Controller\Base_Controller;

class Tickets_Controller extends Base_Controller
{
	public function __construct($app)
	{
		parent::__construct($app);
	}

	public function index()
	{
		$this->template->assign("content", "tickets/index.tpl");
		$this->template->display("tickets/body.tpl");
	}

}
