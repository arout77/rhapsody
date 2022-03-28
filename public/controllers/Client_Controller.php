<?php
namespace Web\Controller;
use App\Controller\Base_Controller;
use Symfony\Component\EventDispatcher\EventDispatcher;
use App\Events\NotifyUserProfileViewedEvent;
use App\Subscribers\PostSubscriber;

class Client_Controller extends Base_Controller
{
	public function __construct($app)
	{
		parent::__construct($app);
		if( 
			$this->session->get('name') == '' 
			)
		{
			$this->redirect('login');
			exit;
		}
	}

	public function index()
	{
		$this->template->assign("content", "clients/index.tpl");
		$this->template->display("template/body.tpl");
	}

	public function dashboard()
	{
		return self::index();
	}
	
	public function edit_profile()
	{
		$max_file_size = $this->config->setting('img_file_size');
		$new_file_name = str_replace(" ", "", $this->session->get("name"));
		$this->template->assign("max_size", $max_file_size);
		$this->template->assign("new_file_name", $new_file_name);
		$this->template->assign("content", "clients/edit_profile.tpl");
		$this->template->display("template/body.tpl");
	}

	public function password_reset()
	{
		$this->load->view('forms/password_reset');
	}

	public function change_password()
	{
		if ($_POST)
		{
			$password  = $_POST['password'];
			$cpassword = $_POST['confirm_password'];
			if ($password !== $cpassword)
			{
				return FALSE;
			}

			if ($this->model('Member')->update_password($password, $this->plugin('session')->get('email')))
			{
				$data['saved']          = 'Password successfully updated';
				$data['saved_message']  = 'To keep your account secure, it is recommended to change your passwords at least every 90 days, and create a unique password for different sites.';
				$data['data_saved_btn'] = '<a href="#" data-dismiss="alert" class="btn btn-dark btn-sm">Close</a>';
			}
			else
			{
				$data['saved']          = 'Problem updating password';
				$data['saved_message']  = 'There was a problem saving your password. Please make sure that your passwords match, and do not contain any illegal characters.';
				$data['data_saved_btn'] = '<a href="#" data-dismiss="alert" class="btn btn-dark btn-sm">Close</a>';
			}

			$this->template->assign('new_pw_saved', $data['saved']);
			$this->template->assign('data_saved_message', $data['saved_message']);
			$this->template->assign('data_saved_btn', $data['data_saved_btn']);
			$this->template->assign('content', 'forms/change_password.tpl');
		}
		else
		{
			$this->template->assign('content', 'forms/change_password.tpl');
		}
	}

}
