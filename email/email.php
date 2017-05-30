<?php
// var_dump($_POST);
date_default_timezone_set('America/Bogota');
require ('PHPMailer/PHPMailerAutoload.php') ;

$from       = 'contacto@lovestorytravels.com';
$fromName   = 'Love Story Travels';
$to         = 'contacto@lovestorytravels.com';
$replyTo    = 'contacto@lovestorytravels.com';

$mail       = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP                                    // TCP port to connect to

$mail->From = $from;
$mail->FromName = $fromName;
$mail->addAddress($to, 'Info');     // Add a recipient             // Name is optional
$mail->addReplyTo($replyTo, 'Love Story Travels');
$mail->addBCC('raul@wheretogo.com.mx');
$mail->addBCC('reservaciones@lovestorytravels.com');
// $mail->addBCC('info@elitemgroup.com');


$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = "Love Story Travels ";

ob_start();
?>
	<h1>Love Story Travels</h1>
	<br>
	<p> First name: <strong><?php echo $_POST['name']; ?></strong></p>
	<p> Last name: <strong><?php echo $_POST['last-name']; ?></strong></p>
	<p> Email address: <strong><?php echo $_POST['email']; ?></strong></p>
	<p> Phone number: <strong><?php echo $_POST['phone']; ?></strong></p>
    <p> Date: <strong><?php echo $_POST['date']; ?></strong></p>
	<p> Motivo de Viaje: <strong><?php echo $_POST['motivo']; ?></strong></p>
	<p> Order notes: <strong><?php echo $_POST['message']; ?></strong></p>
	<br>
	

	
<?php
$body = ob_get_contents();
ob_end_clean();

$mail->Body    = $body;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    die('MF000');
}

// echo "success";