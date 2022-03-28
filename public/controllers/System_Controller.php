<?php
namespace Web\Controller;
use App\Controller\Base_Controller;

class System_Controller extends Base_Controller {
	protected $whitelisted_ips = [];

	public function __construct($app) {
		parent::__construct($app);

		$whitelisted_ips = $this->plugin('whitelist');
		$this->whitelisted_ips = $whitelisted_ips->admin_ip();
		$visitor_ip = MY_IP4;
		if (!in_array($visitor_ip, $this->whitelisted_ips)) {
			$this->redirect('error/_404');
		}

		$this->template->assign('latest_version', $header['content']);
	}

	public function index() {
		$this->template->assign('whitelist', $this->whitelisted_ips);
		$this->template->assign('heading', 'System');
		$this->template->assign('subheading', 'System Home');
		$this->template->assign('title', 'System Dashboard');
		$this->template->assign('content', 'system/index.tpl');
		$this->template->display("template/body.tpl");
	}

	public function update() {
		$this->template->assign('whitelist', $this->whitelisted_ips);
		$this->template->assign('heading', 'System');
		$this->template->assign('subheading', 'System Home');
		$this->template->assign('title', 'System Dashboard');
		$this->template->assign('software_version', $this->config->setting['software_version']);
		$this->template->assign('content', 'system/update.tpl');
		$this->template->display("template/body.tpl");
	}

}
