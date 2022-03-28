<?php
namespace Web\Controller;
use App\Controller\Base_Controller;

ini_set('max_execution_time', 3000000); //300 seconds = 5 minutes
ini_set('memory_limit', -1);

class Block_Controller extends Base_Controller {
	public function getnews() {

		echo json_encode([
			'url' => 'https://diamondphp.org/news/123',
			'news' => '<h4>New plugin added</h4>Manually processing CSV files can be complicated and time consuming. Not anymore! DiamondPHP has just added the CSV plugin which allows you to easily read from, write to, download and display .csv files...',
		]);
	}

	public function updateonline() {
		$now = time();
		$email = $_POST['email'];
		$is_online_now = self::checkIfOnline($email);
		if($is_online_now) {
			$query = "UPDATE `online` SET last_ping = ? WHERE email = ?";
			$sql = $this->db->prepare($query);
			$sql->execute([ $now, "$email" ]);
		} else {
			$query = "INSERT INTO `online`(email, last_ping) VALUES (?,?)";
			$sql = $this->db->prepare($query);
			$sql->execute([ "$email", $now ]);
		}

		$sid = session_id();
		$query2 = "UPDATE `session_data` SET `session_expire` = ? WHERE `session_id` = ?";
		$sql2 = $this->db->prepare($query);
		$sql2->execute([ $now, "$sid" ]);
	}

	public function checkIfOnline($email)
	{
		$query = "SELECT email FROM `online` WHERE email = ?";
		$sql = $this->db->prepare($query);
		$sql->execute([ "$email" ]);
		foreach($sql as $row) {
			if(!empty($row['email']))
			{
				return true;
			}
			return false;
		}
	}

	public function getCurrentVer() {
		$ver = $this->model('System')->get_current_release();
		// echo str_replace(" ", "", $_POST['user_version']);exit;
		echo json_encode($ver);
	}

	public function edit_avatar() {
		$username = $_POST['name'];
		$name = str_replace(" ", "_", $username);

		// File name
		echo $filename = $_FILES['file']['name'];
		echo '<br>';

		$imagetypes = array(
			'image/png' => '.png',
			'image/gif' => '.gif',
			'image/tiff' => '.tiff',
			'image/jpeg' => '.jeg',
			'image/jpeg' => '.jpg',
			'image/bmp' => '.bmp');
		$ext = $imagetypes[$_FILES['file']['type']];

		$newfilename = $name.$ext;

		// Valid file extensions
		$valid_extensions = array("jpg","jpeg","png","gif", "tiff", "bmp" );

		// File extension
		$extension = pathinfo($filename, PATHINFO_EXTENSION);

		// Check extension
		if(in_array(strtolower($extension),$valid_extensions) ) {

			// Upload file
			if(move_uploaded_file($_FILES['file']['tmp_name'], USER_PICS . $newfilename)){
				echo 1;
			}else{
				echo 0;
			}
		}else{
		echo 0;
		}
	}

	# System Geo functions; do not remove
	public function get_city() {
		$zip = (int) $this->route->param1;
		$get_city = $this->model('Geoip')->get_cities($zip);
		// $this->load->block('geo/get_city.php');

		foreach ($get_city as $city) {
			echo "<option value='{$city['citycode']}'>{$city['citycode']}</option>";
		}

	}

	public function get_state() {
		$zip = (int) $this->route->param1;
		$get_state = $this->model('Geoip')->get_states($zip);

		foreach ($get_state as $state) {
			// echo "<option value='{$state['statecode']}'>{$state['statecode']}</option>";
			echo $state['statecode'];
		}

	}
	# End system geo functions

	# Signup form user checks. Do not remove
	public function check_username() {
		$username = $this->route->param1;
		$check = $this->model('Member')->get_member_id($username);
		if ($check >= 1) {
			echo $check;
		} else {
			echo 0;
		}

	}

	public function check_email() {
		$email = $_REQUEST['email'];
		$check = $this->model('Member')->email_exists($email);
		if ($check == TRUE) {
			echo 1;
		} else {
			echo 0;
		}

	}

	public function check_company() {
		$company = $_POST['company'];
		$check = $this->model('Company')->checkIfExists($company);
		echo json_encode($check);
	}
	# End signup form user checks

	# Search bar in nav menu
	public function search() {
		# Search request submitted by user
		$search_query = $_POST['search_query'];
		$response = 'success';

		if (strlen($search_query) < 4) {
			$response = 'query_too_short';
		}

		# Search members / profiles
		$results = $this->model('Search')->select_from_pages_results($search_query);

		$search_query = str_replace("%", "", $search_query);

		foreach ($results as $row) {
			$url = $row['url'];
			// $row['content'] = str_replace("$search_query", "<span style='background-color: yellow;'>$search_query</span>", $row['content']);
			$content = strip_tags($row['content']);
			$content = substr($content, 0, 400);
			$content = str_replace("$search_query", "<span style='background-color: yellow;'>$search_query</span>", $content);
			echo $content . "<br><a href='{$url}'>" . $url . "</a><br><br>";
			// var_dump(self::cleanSearchString($content, $search_query));exit;
			//echo "<p> " . self::cleanSearchString($content, $search_query) . "</p> <p><a href='".strip_tags($url)."'>". strip_tags($url)."</a></p><br>";
		}
	}

	public function cleanSearchString($in, $wordToFind) {
		$numWordsToWrap = 10;
		$words = preg_split('/\s+/', $in);

		$found_words = preg_grep("/^" . $wordToFind . ".*/", $words);
		$found_pos = array_keys($found_words);
		if (count($found_pos)) {
			$pos = $found_pos[0];
		}

		if (isset($pos)) {
			$start = ($pos - $numWordsToWrap > 0) ? $pos - $numWordsToWrap : 0;
			$length = (($pos + ($numWordsToWrap + 1) < count($words)) ? $pos + ($numWordsToWrap + 1) : count($words)) - $start;
			$slice = array_slice($words, $start, $length);

			$pre_start = ($start > 0) ? "..." : "";

			$post_end = ($pos + ($numWordsToWrap + 1) < count($words)) ? "..." : "";

			$out = $pre_start . implode(' ', $slice) . $post_end;
			$out = str_replace("$wordToFind",
				"<span style='background-color: yellow;'>$wordToFind</span>",
				$out);
			echo $out;
		} else {
			echo 'No results found';
		}

	}

	public function upload_img() {
		return $this->toolbox('form')->image();
	}

	public function image($data = '') {
		// echo json_encode('I see U');exit;
		$data['notify_max_size'] = $this->config->setting['notify_img_size'];
		$data['max_size'] = $this->config->setting['img_size'];
		$data['allowed_types'] = [$this->config->setting['img_type']];
		$data['member_id'] = $this->session->get('member_id');
		$img_gallery = $this->toolbox('image')->get_images();

		$target_dir = USER_PICS . $this->session->get('username') . '/';
		$target_file = $target_dir . basename($_FILES["avatar"]["name"]);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

		$newfilename = $data['member_id'] . '_0.' . $imageFileType;
		$target_file = str_replace($_FILES["avatar"]["name"], $newfilename, $target_file);

		// Check if image file is a actual image or fake image
		if (isset($_POST["submit"])) {
			$check = getimagesize($_FILES["avatar"]["tmp_name"]);
			if ($check !== false) {
				echo json_encode("File is an image - " . $check["mime"] . ".");
				$uploadOk = 1;
			} else {
				echo json_encode("File is not an image.");
				$uploadOk = 0;
			}
		}

		// Check if file already exists
		if (file_exists($target_file)) {
			// Image already exists, so we'll get all the current images,
			// find the last img number (the "_0", "_1", etc portion of the img names)
			// and assign the next number to the img

			# Get the full filename of most recently uploaded image
			$get_last_img = array_pop($img_gallery);
			# Explode the file name at the '.'
			$get_last_img_num = explode('.', $get_last_img);
			# and get the number to the left of the decimal
			$img_int = substr($get_last_img_num[0], -1, 1);
			# Add 1 to the above number and assign it to our uploaded image
			$next_number = $img_int + 1;
			$newfilename2 = $data['member_id'] . '_' . $next_number . '.' . $imageFileType;
			$target_file = str_replace($data['member_id'] . '_0.' . $imageFileType, $newfilename2, $target_file);
		}
		// Check file size
		if ($_FILES["avatar"]["size"] > $data['max_size']) {
			echo json_encode("Sorry, your file is too large.");
			$uploadOk = 0;
		}
		// Allow certain file formats
		if ($imageFileType != "jpg" &&
			$imageFileType != "jpeg" &&
			$imageFileType != "png" &&
			$imageFileType != "gif" &&
			$imageFileType != "JPG" &&
			$imageFileType != "JPEG" &&
			$imageFileType != "PNG" &&
			$imageFileType != "GIF") {
			echo json_encode("Sorry, only JPG, JPEG, PNG and GIF files are allowed.");
			$uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
			echo json_encode("Sorry, your file was not uploaded.");
			// if everything is ok, try to upload file
		} else {
			if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) {
				// If $newfilename2 was set, use that, otherwise use $newfilename
				$new_avatar = $newfilename2 ?? $newfilename;
				// File has been uploaded and moved to the user directory successfully
				// Finally, we need to update the database to let it know that this is the new avatar
				$sql = $this->db->prepare("UPDATE members SET pic = ? WHERE member_id = ?");
				$sql->execute([$new_avatar, $data['member_id']]);

				$imguploaded = basename($_FILES["avatar"]["name"]);
				echo json_encode("The file $imguploaded has been uploaded.");
			} else {
				echo json_encode("Sorry, there was an error uploading your file.");
			}
		}

		// if (!is_dir($target_path))
		// {
		// 	mkdir(USER_PICS);
		// 	chmod(USER_PICS, 0755);
		// }

		if (!empty($_FILES["avatar"])) {
			$avatar = $_FILES["avatar"];

			if ($avatar["error"] !== UPLOAD_ERR_OK) {
				echo json_encode("An error occurred.");
				exit;
			}

			// don't overwrite an existing file
			$i = 0;
			$parts = pathinfo($name);
			while (file_exists(USER_PICS . $name)) {
				$i++;
				$name = $parts["filename"] . "-" . $i . "." . $parts["extension"];
			}

			// preserve file from temporary directory
			$success = move_uploaded_file($avatar["tmp_name"],
				USER_PICS . $name);
			// if (!$success)
			// {
			// 	echo json_encode("Unable to save file.");
			// 	exit;
			// }

			// set proper permissions on the new file
			//chmod(USER_PICS . $name, 0644);
		}

	}

	public function multi_image($data = '') {
		foreach ($_FILES as $_FILES) {
			// echo json_encode('I see U');exit;
			$data['notify_max_size'] = $this->config->setting['notify_img_size'];
			$data['max_size'] = $this->config->setting['img_size'];
			$data['allowed_types'] = [$this->config->setting['img_type']];
			$data['member_id'] = $this->session->get('member_id');
			$img_gallery = $this->toolbox('image')->get_images();

			$target_dir = USER_PICS . $this->session->get('username') . '/';
			$target_file = $target_dir . basename($_FILES["img_multi"]["name"]);
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

			$newfilename = $data['member_id'] . '_0.' . $imageFileType;
			$target_file = str_replace($_FILES["img_multi"]["name"], $newfilename, $target_file);

			// Check if image file is a actual image or fake image
			if (isset($_POST["submit"])) {
				$check = getimagesize($_FILES["img_multi"]["tmp_name"]);
				if ($check !== false) {
					echo json_encode("File is an image - " . $check["mime"] . ".");
					$uploadOk = 1;
				} else {
					echo json_encode("File is not an image.");
					$uploadOk = 0;
				}
			}

			// Check if file already exists
			if (file_exists($target_file)) {
				// Image already exists, so we'll get all the current images,
				// find the last img number (the "_0", "_1", etc portion of the img names)
				// and assign the next number to the img

				# Get the full filename of most recently uploaded image
				$get_last_img = array_pop($img_gallery);
				# Explode the file name at the '.'
				$get_last_img_num = explode('.', $get_last_img);
				# and get the number to the left of the decimal
				$img_int = substr($get_last_img_num[0], -1, 1);
				# Add 1 to the above number and assign it to our uploaded image
				$next_number = $img_int + 1;
				$newfilename2 = $data['member_id'] . '_' . $next_number . '.' . $imageFileType;
				$target_file = str_replace($data['member_id'] . '_0.' . $imageFileType, $newfilename2, $target_file);
			}
			// Check file size
			if ($_FILES["img_multi"]["size"] > $data['max_size']) {
				echo json_encode("Sorry, your file is too large.");
				$uploadOk = 0;
			}
			// Allow certain file formats
			if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
				&& $imageFileType != "gif" && $imageFileType != "JPG" && $imageFileType != "PNG" && $imageFileType != "JPEG"
				&& $imageFileType != "GIF") {
				echo json_encode("Sorry, only JPG, JPEG, PNG and GIF files are allowed.");
				$uploadOk = 0;
			}
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
				echo json_encode("Sorry, your file was not uploaded.");
				// if everything is ok, try to upload file
			} else {
				if (move_uploaded_file($_FILES["img_multi"]["tmp_name"], $target_file)) {
					// If $newfilename2 was set, use that, otherwise use $newfilename
					$new_avatar = $newfilename2 ?? $newfilename;
					// File has been uploaded and moved to the user directory successfully
					// Finally, we need to update the database to let it know that this is the new avatar
					$sql = $this->db->prepare("UPDATE members SET pic = ? WHERE member_id = ?");
					$sql->execute([$new_avatar, $data['member_id']]);

					$imguploaded = basename($_FILES["img_multi"]["name"]);
					echo json_encode("The file $imguploaded has been uploaded.");
				} else {
					echo json_encode("Sorry, there was an error uploading your file.");
				}
			}

			// if (!is_dir($target_path))
			// {
			// 	mkdir(USER_PICS);
			// 	chmod(USER_PICS, 0755);
			// }

			if (!empty($_FILES["img_multi"])) {
				$avatar = $_FILES["img_multi"];

				if ($avatar["error"] !== UPLOAD_ERR_OK) {
					echo json_encode("An error occurred.");
					exit;
				}

				// don't overwrite an existing file
				$i = 0;
				$parts = pathinfo($name);
				while (file_exists(USER_PICS . $name)) {
					$i++;
					$name = $parts["filename"] . "-" . $i . "." . $parts["extension"];
				}

				// preserve file from temporary directory
				$success = move_uploaded_file($avatar["tmp_name"],
					USER_PICS . $name);
				// if (!$success)
				// {
				// 	echo json_encode("Unable to save file.");
				// 	exit;
				// }

				// set proper permissions on the new file
				//chmod(USER_PICS . $name, 0644);
			}
		}

	}

	### Save first img to database as 'main_img' (avatar) ###
	public function create_avatar() {
		$sql = "SELECT member_id FROM members WHERE username IS NOT NULL ORDER BY member_id ASC";
		$members = $this->db->prepare($sql);
		$members->execute();

		foreach ($members as $member) {
			$id = $member['member_id'];
			$img = $member['member_id'] . '_0.jpg';
			$sql = "UPDATE members SET main_img = ? WHERE member_id = ?";
			$query = $this->db->prepare($sql);
			$query->execute(["$img", $id]);
		}
	}

	### Mass image relocation ###
	public function stock_img() {
		/*
			 * All images, excluding file path
		*/
		$images = [];
		$source_path = DOC_ROOT . 'dating/' . 'media/images/stock/';
		foreach (glob($source_path . '*') as $filename) {
			if (!is_null($filename) && !empty($filename)) {
				$images[$filename] = basename($filename);
			}

		}

		return $images;
	}

	public function user_img_map() {
		$sql = "SELECT member_id, username FROM members WHERE username IS NOT NULL ORDER BY member_id ASC";
		$members = $this->db->prepare($sql);
		$members->execute();

		$source_path = DOC_ROOT . 'dating/' . 'media/images/stock/';
		$target_path = [];

		foreach ($members as $user) {
			$name = $user['username'];
			$target_path[$name] = USER_PICS . $name . '/';
			if (!is_dir($target_path[$name])) {
				mkdir($target_path[$name]);
				chmod($target_path[$name], 0755);
			}
		}

		return $target_path;

	}

	public function memberName($id) {
		$sql = "SELECT username FROM members WHERE member_id = ?";
		$members = $this->db->prepare($sql);
		$members->execute([$id]);
		foreach ($members as $user) {
			return $user['username'];
		}

	}

	public function update_imgs() {
		/*
			 * Array containing all stock images
			 * 100k images total
		*/
		$stockmap = self::stock_img();
		/*
			 * Move to this directory if match
		*/
		$target_dir = self::user_img_map();

		$checkname = [];
		$checkdir = [];

		foreach ($target_dir as $user => $destination) {
			$checkname[$user] = $user;
			$checkdir[$user] = $destination;
		}

		foreach ($stockmap as $imgpath => $img) {

			$id = substr($img, 0, -6);
			$user = self::memberName($id);

			if (in_array($user, $checkname)) {
				rename("{$imgpath}", $checkdir[$user] . $img);
				echo "Moving {$imgpath} to ---> {$checkdir[$user]}<br>";
			}
		}

	}
	### Image relocation ###

	### Below functions used to count the number of images a member has uploaded and store the total in members table ###
	public function countUserPics($id) {
		$sql = "SELECT username FROM members WHERE member_id = ?";
		$member = $this->db->prepare($sql);
		$member->execute([$id]);
		foreach ($member as $user) {
			$img_loc = USER_PICS . $user['username'] . '/';
		}

		$filecount = 0;

		$files2 = glob($img_loc . "*");

		if ($files2) {
			$filecount = count($files2);

			### The loop below was used to populate the `images` database table
			### with each member's uploaded photos. Leave this commented out; it
			### is just here for future reference in case you need to do the same
			// foreach($files2 as $img)
			// {
			// 	$img;
			// 	$file = explode('/', $img);
			// 	$filename = end($file);
			// 	$query = "INSERT INTO images(owner_id, img_filename) VALUES(?,?)";
			// 	$sql = $this->db->prepare($query);
			// 	$sql->execute([$id, "$filename"]);
			// }
		}

		return $filecount;
	}

	public function updateImgCount($member_id) {
		$pic_count = self::countUserPics($member_id);
		$query = "UPDATE members SET photo_count = ? WHERE member_id = ?";
		$sql = $this->db->prepare($query);
		return $sql->execute([$pic_count, $member_id]);
	}

	public function updateImgRegistry() {
		$sql = "SELECT member_id FROM members";
		$member = $this->db->prepare($sql);
		$member->execute();
		foreach ($member as $user) {
			self::countUserPics($user['member_id']);
		}
	}

}
