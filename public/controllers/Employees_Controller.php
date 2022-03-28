<?php
namespace Web\Controller;
use App\Controller\Base_Controller;

class Employees_Controller extends Base_Controller
{
	public function __construct($app)
	{
		parent::__construct($app);
		// if(!$this->session->get('name') && $this->route->action != 'login' && !$_POST) {
		// 	$this->redirect('employees/login/');
		// }
		// $this->session->set_flashdata('email', $_SESSION['email']);
		// $this->template->assign('email', $this->session->get('email'));
		// echo $this->session->get('email'); exit;
	}

	public function index()
	{
		if(!$this->session->get('name')) {
			$this->redirect('employees/login/');
		}
		$employee_id = $this->session->get('employee_id');
		$tickets = $this->model('Tickets')->getTickets($employee_id);
		$assigned = $this->model('Tickets')->getTickets($employee_id);
		$inprogress = $this->model('Tickets')->getTickets($employee_id);
		$onhold = $this->model('Tickets')->getTickets($employee_id);
		$duetoday = $this->model('Tickets')->getTickets($employee_id);
		$overdue = $this->model('Tickets')->getTickets($employee_id);
		$total_assigned = $this->model('Tickets')->countTickets($employee_id);
		$total_new = $this->model('Tickets')->countTickets($employee_id, "assigned");
		$total_inprogress = $this->model('Tickets')->countTickets($employee_id, "in progress");
		$total_onhold = $this->model('Tickets')->countTickets($employee_id, "on hold");
		$total_duetoday = $this->model('Tickets')->countTicketsDueToday($employee_id);
		$total_overdue = $this->model('Tickets')->countTicketsOverdue($employee_id);
		$this->template->assign('tickets', $tickets);
		$this->template->assign('assigned', $assigned);
		$this->template->assign('inprogress', $inprogress);
		$this->template->assign('onhold', $onhold);
		$this->template->assign('duetoday', $duetoday);
		$this->template->assign('overdue', $overdue);
		$this->template->assign('total_assigned', $total_assigned);
		$this->template->assign('total_new', $total_new);
		$this->template->assign('total_inprogress', $total_inprogress);
		$this->template->assign('total_onhold', $total_onhold);
		$this->template->assign('total_duetoday', $total_duetoday);
		$this->template->assign('total_overdue', $total_overdue);
		$this->template->assign("content", "employees/index.tpl");
		$this->template->display("template/body.tpl");
	}

	public function dashboard()
	{
		return self::index();
	}

	

	public function login() 
	{
		$name = $this->session->get('name');
		$email = $this->session->get('email');
		$data['lockscreen']  = $this->route->parameter[2];
		$data['uri']    = $_SERVER['REQUEST_URI'];
		$this->template->assign('uri', $data['uri']);
		$this->template->assign('title', 'Sign in to ' . $this->config->setting('site_name'));
		$this->template->assign('lockscreen', $data['lockscreen']);
		if( $this->route->parameter[1] == 'lock' )
		{
			$this->template->assign('name', $name);
			$this->template->assign('email', $email);
			$this->template->assign('content', 'forms/employee_lockscreen.tpl');
		} else {
			$this->template->assign('content', 'forms/employee_login_form.tpl');
		}
		$this->template->display('template/body.tpl');
		$this->session->stop();
	}

	public function loginsubmit() 
	{
		// if (!$_POST || empty($_POST)) {
		// 	$this->redirect('employess/dashboard/');
		// }
		$check_if_valid = $this->plugin('validate')->form($_POST, [
			'password'         	=> 'required|max_len,40|min_len,6',
			'email'            	=> 'required|valid_email'
		]);
		if ($check_if_valid === TRUE) {
			$loginCheck = $this->model('Employees')->login_validate($_POST);
			if ($loginCheck) {
				// $this->redirect('employees/dashboard/');
				$url = "<script>$(location).attr('href','".SITE_URL."employees/dashboard')</script>";
				echo $url;
				exit(0);
			} elseif($loginCheck == "Email") {
                   exit("The email address < " . $_POST['email'] . " > did not match any records. Please check your spelling and make sure CAPS lock is off.
				   If you feel this message is in error, please contact your system administrator.");
            } elseif($loginCheck == "Pword") {
				exit("The password is incorrect. Please check your spelling and make sure CAPS lock is off.
				If you feel this message is in error, please contact your system administrator.");
		 	}else{
				 exit("<code>The submitted email did not match our records</code>");
			 }
			
		} else {
			// Did not pass validation -- Show errors
			echo '<div class="alert alert-danger">';
			foreach ($check_if_valid as $invalid) {
				echo '<i class="fa fa-exclamation-triangle"></i> ' . $invalid . '<br>';
			}
			echo '</div>';
		}
	}

}
