<?php
namespace App\Plugin;
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require_once VENDOR_PATH . 'phpmailer/phpmailer/src/Exception.php';
require_once VENDOR_PATH . 'phpmailer/phpmailer/src/PHPMailer.php';
require_once VENDOR_PATH . 'phpmailer/phpmailer/src/SMTP.php';

class Email extends Plugin_Core {

	public function __construct(
		public string $host = $this->config->setting('smtp_host'), 
		public string $username = $this->config->setting('smtp_username'), 
		public string $password = $this->config->setting('smtp_password'), 
		public int $port = $this->config->setting('smtp_port'), 
		public bool $secure = $this->config->setting('smtp_secure'), 
		public bool $smtp = true, 
		public bool $smtp_auth = $this->config->setting('smtp_auth'), 
		public bool $html = $this->config->setting('smtp_html'), 
		public int $debug = $this->config->setting('smtp_debug'),
	) {}

	public function send( array $email, array $options = []) {

		extract($email);
		// extract($options);
		
		//Instantiation and passing `true` enables exceptions
		$mail = new PHPMailer(true);

		try {

			if($this->debug === 1 || $this->debug === 2) { 
				//Enable verbose debug output
				$mail->SMTPDebug = SMTP::DEBUG_SERVER;
			}
			if($this->smtp === true) { 
				//Send using SMTP
				$mail->isSMTP();
			}
			$mail->Host       = $this->host;          	//Set the SMTP server to send through
			$mail->SMTPAuth   = $this->smtp_auth;       //Enable SMTP authentication
			$mail->Username   = $this->username;        //SMTP username
			$mail->Password   = $this->password;        //SMTP password
			if($this->secure === true) {
				//Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
				$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; 
			}
			//TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
			$mail->Port = $this->port;

			// Sender and Reply To
			$mail->setFrom($from, $from_name);
			$mail->addReplyTo($from, $from_name);

			// Recipient(s) information
			foreach($options['to'] as $to)
			{
				foreach($options['to_name'] as $to_name) 
				{
					$mail->addAddress($to, $to_name); //Add a recipient
				}
			}

			foreach($options['cc'] as $cc) 
			{
				$mail->addCC($cc); //Add a recipient
			}

			foreach($options['bcc'] as $bcc) 
			{
				$mail->addBCC($bcc); //Add a recipient
			}
			
			foreach($options['attachment'] as $attachment) 
			{
				//Attachments
				//$mail->addAttachment('/var/tmp/file.tar.gz');      //Add attachments
				//$mail->addAttachment('/tmp/image.jpg', 'new.jpg'); //Optional name
				$mail->addAttachment($attachment);
			}

			//Content
			$mail->isHTML($this->html); //Set email format to HTML
			$mail->Subject = $subject;
			if($this->html === true) {
				$mail->Body    = $message;
			}else{
				$mail->AltBody = $message;
			}

			return $mail->send();

		} catch (Exception $e) {
			echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
		}

	}

}