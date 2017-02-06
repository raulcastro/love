<?php
// var_dump($_POST);
require ('PHPMailer/PHPMailerAutoload.php') ;

$from       = 'info@babygearforrent.com ';
$fromName   = 'Baby Gear for rent';
$to         = 'info@babygearforrent.com ';
$replyTo    = 'info@babygearforrent.com ';

$mail       = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP                                    // TCP port to connect to

$mail->From = $from;
$mail->FromName = $fromName;
$mail->addAddress($to, 'Info');     // Add a recipient             // Name is optional
$mail->addReplyTo($replyTo, 'Info from Elite M Group');
$mail->addBCC('raul@wheretogo.com.mx');
// $mail->addBCC('info@elitemgroup.com');


$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = $_POST['sendEmailSubject'];

ob_start();
?>
	<h1>Baby Gear for Rent - New Order</h1>
	<br>
	<p> First name: <strong><?php echo $_POST['firstName']; ?></strong></p>
	<p> Last name: <strong><?php echo $_POST['lastName']; ?></strong></p>
	<p> Company: <strong><?php echo $_POST['company']; ?></strong></p>
	<p> Email address: <strong><?php echo $_POST['email']; ?></strong></p>
	<p> Phone number: <strong><?php echo $_POST['phone']; ?></strong></p>
	<p> Country: <strong><?php echo $_POST['country']; ?></strong></p>
	<p> Address 1: <strong><?php echo $_POST['addressOne']; ?></strong></p>
	<p> Address 2: <strong><?php echo $_POST['addressTwo']; ?></strong></p>
	<p> Town/City: <strong><?php echo $_POST['city']; ?></strong></p>
	<p> State: <strong><?php echo $_POST['state']; ?></strong></p>
	<p> Post code: <strong><?php echo $_POST['postCode']; ?></strong></p>
	<p> Drop off location (hotel/property name): <strong><?php echo $_POST['dropOff']; ?></strong></p>
	<p> Drop off time: <strong><?php echo $_POST['dropOffTime']; ?></strong></p>
	<p> Pick up location: <strong><?php echo $_POST['PickUp']; ?></strong></p>
	<p> Pick up time: <strong><?php echo $_POST['PickUpTime']; ?></strong></p>
	<p> First and Last name that the hotel is booked under: <strong><?php echo $_POST['nameHotel']; ?></strong></p>
	<p> If you are renting through an owner rental agent or agency, please provide their name and contact information: <strong><?php echo $_POST['rentalAgency']; ?></strong></p>
	<p> Order notes: <strong><?php echo $_POST['message']; ?></strong></p>
<?php
$body = ob_get_contents();
ob_end_clean();


$mail->Body    = $body;
echo $body;


if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'success';
}