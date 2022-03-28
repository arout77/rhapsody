<?php
namespace Web\Controller;
use App\Controller\Base_Controller;

class Signup_Controller extends Base_Controller {
	/**
	 * @param $app
	 */
	public function __construct($app) {
		parent::__construct($app);

		$this->template->assign('signup_email_confirmation', $this->config->setting('signup_email_confirmation'));
		$this->template->assign('site_url', $this->config->setting('site_url'));
	}

	/**
	 * @return mixed
	 */
	public function index() {

		// if ($_POST) {
		// 	$data = $this->plugin('sanitize')->xss($_POST);
		// }
		// $this->template->assign('data', $data);

		// if ($this->route->action != 'complete') {
		// 	return $this->template->assign('content', 'forms/signup_form.tpl');
		// }

		// if ($this->route->action == 'complete') {
		// 	$this->template->assign('email_confirm', $this->config->setting('signup_email_confirmation'));
		// }

		// $data = [
		// 	'slider' => 'homepage'
		// ];
		$data['modal'] = 'terms';
		$this->template->assign('title', 'Create new account with ' . $this->config->setting('site_name'));
		$this->template->assign('data', $data);
		$this->template->assign('content', 'forms/signup_form.tpl');
		$this->template->display('template/body.tpl');
	}

	public function complete() {
		$this->template->assign('title', 'Registration Complete');
		$this->template->assign('content', 'signup/signup_complete.tpl');
		$this->template->display('template/body.tpl');
	}

	public function register() {
		$this->index();
	}

	public function submit() {

		if (!$_POST || empty($_POST)) {
			$this->redirect('signup');
		}

		/*
		 * Now set validation rules for each field.
		 * Pass the sanitized $form variable above
		 * to the function below
		 */
		$check_if_valid = $this->plugin('validate')->form($_POST, [

			'name'         		=> 'required',
			'password'         	=> 'required|max_len,40|min_len,6',
			// 'cpassword' 		=> 'required|matches,' . $_POST['password'] . '',
			'email'            	=> 'required|valid_email',
			'company'         	=> 'required',
		]);

		/*
		 * Now validate the form according to the rules set above.
		 * If $check_if_valid is true, form was successfully validated,
		 * so we can go ahead and process the data.
		 * Otherwise, display the errors encountered.
		 */
		if ($check_if_valid === TRUE) {
			$this->log->save('$check_if_valid returned true', 'signup-errors.log');
			# valid submission -- continue
			/*
			if( isset( $form['phone'] ) && ! empty( $form['phone'] ) ) {
			// NOTE THE []; $form must be converted to array
			foreach($form as $form[]) {

			$phone = $this->plugin('formatter')->PhoneNumber($form['phone']);
			}
			}
			 */
			try {
				if ($this->model('Member')->create_member($_POST)) {
					# Send confirmation email
					if ($this->config->setting('signup_email_confirmation') === TRUE) {
						$options = [
							'to' => [ $_POST['email'], 'andrew_rout@yahoo.com' ],
							'to_name' => [ $_POST['name'], 'Onru Rout' ],
							'cc' => 'flynismo@gmail.com',
							'bcc' => ['andrew_rout@yahoo.com', 'andrewrout@hotmail.com'],
							'attachment' => 'C:\Version Control\DiamondPHP\media\logo.png'
						];
						$mail['confirmation_code'] = md5($_POST['email']);
						$mail['from']              = $this->config->setting('site_name');
						$mail['from_name']         = $this->config->setting('smtp_name');
						$mail['reply_to']          = $this->config->setting('site_email');
						$mail['subject']           = "Confirm your registration on " . $mail['from'];
						$mail['message']           = "<p>To activate your account, please visit the following link:</p>" .
							"<p>{$this->config->setting('site_url')}signup/activate/".$mail['confirmation_code']."</p>" .
							"<p>If you believe you received this email by mistake, no further action is necessary.</p>";

						$this->plugin('email')->send($mail, $options);
						$this->log->save('mail apparently was successful', 'signup-errors.log');
					}
				}
				header('Content-Type: application/json; charset=UTF-8');
				echo json_encode("Signup Complete");

			} catch (\Exception $e) {
				header('Content-Type: application/json; charset=UTF-8');
				$this->log->save($e->getMessage(), 'signup-errors.log');
				if(str_contains($e, '1062 Duplicate entry')) {
					exit("Registration was not submitted. The following error(s) occurred: <br><br>
					Your company has already registered with our service. Please enter the Company ID to continue.");
				} else {
					header('Content-Type: application/json; charset=UTF-8');
					$this->log->save($e->getMessage(), 'signup-errors.log');
					exit("An unknown system error occured. If you do not receive your confirmation email within a few minutes, 
					<a href='mailto:".$this->config->setting('site_email')."'>please contact the site administrator</a> for assistance.");
				}
				
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
