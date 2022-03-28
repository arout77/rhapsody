<?php
namespace Web\Model;

class EmployeesModel extends \App\Model\System_Model
{
    public $error;
    public function getEmployee()
    {

    }

    public function getAllEmployees()
    {

    }
    
    public function login_validate($post)
    {
        $email = $post['email'];
        $password = $post['password'];

        $query = "SELECT * FROM `employees` WHERE `email` = ?";
		$row = $this->db->prepare($query);
		$row->execute(["$email"]);
        if(!$row) {
            exit("The email address < " . $email . " > did not match any records. Please check your spelling and make sure CAPS lock is off.
             If you feel this message is in error, please contact your system administrator.");
        }
        $count = $row->rowCount();

		foreach ($row as $result) {
            try{
                if ($count == '0') {
                    # Email not found, or not confirmed
                    exit ("The email address < " . $email . " > did not match any records. Please check your spelling and make sure CAPS lock is off.
                     If you feel this message is in error, please contact your system administrator.");
                    // $this->error = "The email address < " . $email . " > did not match any records. Please check your spelling and make sure CAPS lock is off.
                    // If you feel this message is in error, please contact your system administrator.";
                } 
                if (!$this->plugin('hash')->verify($password, $result['password'])) {
                    # Email found, wrong password
                    exit ("Invalid password");
                } elseif ($this->verify($password, $result['password'])) {
                    # Email and password are both correct -- valid login
                    $this->session->set('employee_id', $result['eid']);
                    $this->session->set('name', $result['name']);
                    $this->session->set('email', $result['email']);
                    $this->session->set('permissions', $result['permissions']);
                    $this->session->set('token', md5(uniqid(mt_rand(), true)));

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
                   exit("An unkown error occurred. If you continue to see this message, please contact your system administrator.");
                }
            } catch(\Exception $e) {
                $this->log->save("The following error occurred: " . $e->getMessage(), 'employee-login.log');
                exit("The following error occurred: " . $e->getMessage() . " Please contct your system administrator");
            }
        }
    }

}
