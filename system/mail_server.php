<?php 
require 'PHPMailer/PHPMailerAutoload.php';
class EmailSender
{
	function __construct($email, $message, $message_html, $subject,$is_ssl=false)
	{		
		$this->mailserver 	= "smtp.gmail.com";
		$this->username 	= "istanbulteknikci@gmail.com";
		$this->password 	= "qwds@345P3sdf";
		$this->port 		= "587";
		$this->is_ssl 		= $is_ssl;

		$this->email = $email;
		$this->message = $message;
		$this->message_html = $message_html;
		$this->subject = $subject;

	}
	function sendnow(){
		$msj = "";
		$mail = new PHPMailer;
		$mail->CharSet = 'UTF-8';
		$mail->Encoding = 'base64';
		$mail->SMTPDebug = 0;
		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = $this->mailserver;                      // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = $this->username;                    // SMTP username
		$mail->Password = $this->password;                    // SMTP password
		$mail->Port = $this->port;                            // TCP port to connect to
		$mail->setFrom('ilkerak@istanbulteknik.com', 'istanbulteknik.com');
		$mail->addAddress('ilkerak@istanbulteknik.com', 'istanbulteknik.com');           // Name is optional
		//$mail->addReplyTo('info@ilkerak.com', 'istanbulteknik.com');
		//$mail->addCC('info@ilkerak.com');
		$mail->isHTML(true);                                  // Set email format to HTML
        $mail->SMTPSecure = $this->is_ssl?'ssl':'tls';
		$mail->Subject = $this->subject;
		$mail->Body    = $this->message_html;
		$mail->AltBody = $this->message;
		$mail->SMTPOptions = array(
		    'ssl' => array(
		        'verify_peer' => false,
		        'verify_peer_name' => false,      
		        'allow_self_signed' => true
		    )	
		);
		//print_r($mail);
		return $mail->send();
		if(!$mail->send()) {
		    $msj = 'Message could not be sent.';
		    $msj .= 'Mailer Error: ' . $mail->ErrorInfo;
		} else {
		    $msj = 'Message has been sent';
		}
		return $msj;
	}
}


?>
