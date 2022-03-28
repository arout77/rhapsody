<?php
namespace Web\Model;

class MemberModel extends \App\Model\System_Model {
	public function __construct(\Pimple\Container $app) {
		parent::__construct($app);
	}

	public function select($limit = 0) {
		# Get all member profiles
		if ($limit !== 0) {
			$query = "SELECT * FROM users LIMIT $limit";
		} else {
			$limit = $this->plugin('sanitize')->xss("0, 20");
			$query = "SELECT * FROM users WHERE hidden = 0 LIMIT {$limit}";
		}

		$r = $this->db->prepare($query);
		$r->execute();

		return $r;
	}

	public function get_member_id($username) {
		# Fetch member ID
		// $validate = new \App\Plugin\Validation;
		// $username = $validate->xss_clean([$username]);
		$r = $this->db->prepare("SELECT member_id FROM users WHERE username = ?");
		$r->execute([$username]);
		if ($r) {
			foreach ($r as $r) {
				return $r['member_id'];
			}

		}
		return FALSE;
	}

	public function email_exists($email) {
		# Check if the submitted email already exists; reurns true/false
		$email = $this->plugin('sanitize')->xss($email);
		$r = $this->db->prepare("SELECT email FROM users WHERE email = ?");
		$r->execute([$email]);
		if ($r) {
			foreach ($r as $r) {
				return TRUE;
			}

		}
		return FALSE;
	}

	public function get_username($memberid) {
		# Fetch username
		// $validate = new \App\Plugin\Validation;
		// $id = $this->plugins->plugin("validate")->xss_clean([$memberid]);
		$r = $this->db->prepare("SELECT username FROM users WHERE member_id = ?");
		$r->execute([$memberid]);
		foreach ($r as $r) {
			return $r['username'];
		}

	}

	public function get_avatar($id) {
		# Get user avatar
		$r = $this->db->prepare("SELECT pic FROM users WHERE member_id = ?");
		$r->execute([$id]);
		if ($r->rowCount()) {
			foreach ($r as $r) {
				return $r['pic'];
			}

		} else {
			return FALSE;
		}

	}

	public function img_gallery($id) {
		# Get user image gallery
		$r = $this->db->prepare("SELECT * FROM images WHERE owner_id = ?");
		$r->execute([$id]);
		if ($r->rowCount() >= 1) {
			return $r;
		} else {
			return FALSE;
		}

	}

	public function profile_data($user) {
		# Get profile data for selected user
		# Used for viewing profiles
		$r = $this->db->prepare("SELECT * FROM users WHERE username = ?");
		$r->execute([$user]);
		return $r;
	}

	public function update_profile_data() {
		# Update profile data for selected user
		# Used for editing profiles
		if ($_POST) {

			$form = $this->plugin('sanitize')->xss($_POST);
			$phone = $this->plugin('formatter')->PhoneNumber($form['phone']);

			$r = $this->db->prepare("
				UPDATE users
				SET username = ?, first_name = ?, last_name = ?, email = ?, dob = ?, about_me = ?, personal_website = ?, facebook_page = ?, phone = ?, city = ?, state = ?, zip = ?
				WHERE username = ?
		    ");
			$r->execute([$form['username'], $form['first_name'], $form['last_name'], $form['email'], $form['dob'], $form['about_me'], $form['personal_website'], $form['facebook_page'], $phone, $form['city'], $form['state'], $form['zip'], $form['username']]);
			return $r;
		}
	}

	public function image_update() {
		# Update profile avatar
		if ($_POST) {
			$form = $this->plugin('sanitize')->xss($_POST);

			$r = $this->db->prepare("
				UPDATE users
				SET pic = ?
				WHERE username = ?
		    ");

			$r->execute([$this->session->get('username'), $form['image']]);
			return $r;
		}
	}

	public function count($table) {

		# get the number of rows from our query
		$query = $this->db->prepare("SELECT COUNT(*) as count FROM $table");
		$query->execute();
		$count = $query->fetch(PDO::FETCH_ASSOC);
		return $count = $count['count'];
	}

	public function member_view($member, $viewed_by) {
		if (!is_null($member) && !is_null($viewed_by)) {
			# Track who is viewing who's profile
			$timestamp = time();
			$query = $this->db->prepare("
			REPLACE INTO profile_views(member, viewed_by, view_timestamp)
			VALUES(?,?,?)");
			return $query->execute([$member, $viewed_by, $timestamp]);
		}

		return FALSE;
	}

	public function notify_member_view($recipient_name, $sender_name, $subject, $message) {
		// Used by NotifyUserProfileViewed event. Sends notification to member
		// informing them they just received a profile view from another member

		$recipient_id = self::get_member_id($recipient_name);

		$sql = $this->db->prepare("SELECT member, view_timestamp FROM profile_views WHERE member = ? GROUP BY view_timestamp DESC LIMIT 1, 1");
		$sql->execute([$recipient_id]);

		foreach ($sql as $row) {
			// Don't send more than one notification per day for each person
			// viewing this profile. We don't want this member to get 10 notifications
			// in an hour from the same stalk- um, visitor
			if ((time() - $row['view_timestamp'] >= 86400) || $row['view_timestamp'] == '' || !isset($row['view_timestamp'])) {
				$query = $this->db->prepare("
				INSERT INTO inbox_from_site(sender_name, recipient_name, subject, message)
				VALUES(?,?,?,?)");
				return $query->execute([$sender_name, $recipient_name, $subject, $message]);
			}
		}

	}

	public function check_login($form) {
		# Check if login is valid
		$query = "SELECT * FROM `users` WHERE `email` = ?";
		$row = $this->db->prepare($query);
		$row->execute([$form['email']]);

		foreach ($row as $result) {

			if (empty($result)) {
				# Email not found, or not confirmed
				exit("Invalid email");
			} elseif ($this->plugin('hash')->verify($form['password'], $result['password']) == FALSE) {
				# Email found, wrong password
				exit("Invalid password");
			}
			elseif ($result['confirmed'] == false) {
				# Has not verified account yet
				 exit("You have registered on our site, but have not confirmed your account yet. 
				 Please check your email inbox for instructions on verifying your account.");
			}
			elseif ($this->verify($form['password'], $result['password']) == TRUE) {

				# Email and password are both correct -- valid login
				$this->session->set('member_id', $result['uid']);
				$this->session->set('name', $result['name']);
				$this->session->set('email', $result['email']);
                $this->session->set('permissions', $result['permissions']);
                $this->session->set('token', md5(uniqid(mt_rand(), true)));

				# Update user table
				// $ip = $this->plugin('geoip')->ip();
				// $lat = $this->plugin('geoip')->latitude;
				// $long = $this->plugin('geoip')->longitude;

				$now = time();
				$online = $this->db->prepare("
					INSERT INTO online(email, last_login, last_ping)
					VALUES(?,?,?)
					ON DUPLICATE KEY UPDATE last_login = '{$now}', last_ping = '{$now}';
				");
				$online->execute([
					$result['email'],
					"$now",
					"$now",
				]);
				//exit(0);
				return true;
			} else {
				return FALSE;
			}
		}
	}

	public function create_member($form) {

		$companyid 	= $form['companyid'];
		$company 	= $form['company'];
		$email 		= $form['email'];

		// If company already exists, user must provide their Company ID
		// in order to prevent just anyone from logging into any company
		if(!empty($company) && empty($companyid))
		{
			$sql = $this->db->prepare("SELECT `name` FROM `clients` WHERE `name` = ?");
			$sql->execute(["$company"]);
			$sql->fetchAll(\PDO::FETCH_ASSOC);
			if($sql->rowCount() == 1)
			{
				exit("Your company has already registered with " . $this->config->setting('site_name') . 
				". Please enter your Company ID to confirm your association with <strong class='doodoo-brown'>{$company}</strong>. The company ID can be found in 
				the confirmation email when you (or someone else) first signed up, or in the account settings tab of a logged in user.");
			}
		}
		
		// Confirm that the submitted company id matches the one we have stored
		// Only non-registered users of an existing company needs to provide the id, since 
		// new users/companies do not have one yet
		if(!empty($companyid))
		{
			$sql = $this->db->prepare("SELECT `name`, `client_id` FROM `clients` WHERE `client_id` = ?");
			$sql->execute(["$companyid"]);
			$sql->fetchAll(\PDO::FETCH_ASSOC);
			if($sql->rowCount() <= 0)
			{
				exit("The submitted company ID is invalid. Please make sure your caps lock is turned off, or if you copy/pasted the ID, 
				make sure you did not copy any blank spaces, and try again.");
			}
		}

		// At this point, we know that the submission is coming from either a new company,
		// or from an employee or member of an existing company that has not created their 
		// own account yet. New companies do not have an ID yet, so go ahead and generate one.
		// If an ID was submitted, we already verified it in the step above, so we'll keep
		// using it in the user creation process below.
		if(empty($companyid)) {
			$companyid = md5($company);
		}
		# Create a new member; i.e. signup form
		try
		{
			$password = $this->plugin('hash')->encrypt($form['password']);
			// $form['phone'] = $this->plugin('formatter')->PhoneNumber($form['phone']);
			// $latitude = $this->plugin('geoip')->latitude;
			// $longitude = $this->plugin('geoip')->longitude;
			// $ip = $this->plugin('geoip')->ip();
			// if ($this->config->setting('signup_email_confirmation') === TRUE) {
			// 	$confirmed = (int) 0;
			// } else {
			// 	$confirmed = (int) 1;
			// }
			$today = \date("Y-m-d h:i:s");
			$name = $form['name'];
			$email = $form['email'];
			$query = "INSERT INTO users(
				`name`,
				`password`,
				`email`,
				`company`) VALUES(?,?,?,?)";
			$create_new_member = $this->db->prepare($query);
			$create_new_member->execute([
				"$name",
				"$password",
				"$email",
				"$company"
			]);

			$query = "INSERT INTO clients(
				`name`,
				`client_id`) VALUES(?,?)";
			$create_new_member = $this->db->prepare($query);
			$create_new_member->execute([
				"$company",
				"$companyid"
			]);

			if ($this->config->setting('signup_email_confirmation') === TRUE) {
				$confirmation_code = md5($email);
				$sql = "INSERT INTO signup_confirm( email, code ) VALUES( ?, ? )";
				$confirm = $this->db->prepare($sql);
				$confirm->execute([$email, $confirmation_code]);
			}

		} catch (\Exception $e) {
			$this->log->save("Error occured during signup: " . $e->getMessage(), 'signup-errors.log');
			if(str_contains($e, '1062 Duplicate entry')) {
				header('Content-Type: application/json; charset=UTF-8');
				exit( "Registration was not submitted. The following error(s) occurred: <br><br>
				The email address <strong>".$_POST['email']."</strong> is already registered with our service. 
					Please <a href='".$this->config->setting('site_url')."login'>login</a> to continue.");
			} else {
				header('Content-Type: application/json; charset=UTF-8');
				exit( "An unknown system error occured. If you do not receive your confirmation email within a few minutes, 
				<a href='mailto:".$this->config->setting('site_email')."'>please contact the site administrator</a> for assistance.");
				$this->log->save($e->getMessage(), 'signup-errors.log');
			}
		}
	}

	public function update_password($password, $email) {
		$password = $this->plugin('hash')->encrypt($password);
		$q = "UPDATE users SET password = ? WHERE email = ?";
		$r = $this->db->prepare($q);
		$r->execute([$password, $email]);
	}

}
