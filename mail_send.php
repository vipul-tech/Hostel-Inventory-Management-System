<?php 
  session_start();
  $uname=$_SESSION['uname'];
  if(!isset($_SESSION['uname']))
    header('location:http://localhost/hostel_inventory_system/Home.php');
?>
<?php
  //$num=mysqli_num_rows($result);
  //$row=mysqli_fetch_array($num);
//mysqli_close($con);
/*
require 'C:\Users\HP\Downloads\PHPMailer\class.phpmailer.php';
require 'C:\Users\HP\Downloads\PHPMailer\class.smtp.php';
require 'C:\Users\HP\Downloads\PHPMailer\PHPMailerAutoload.php';
require 'confidential.php';

$mail = new PHPMailer;

$mail->SMTPDebug = 4;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = EMAIL;                 // SMTP username
$mail->Password = PASS;                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom(EMAIL, 'IIIT BHAGALPUR');
$mail->addAddress(EMAIL);     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
$mail->addReplyTo(EMAIL);
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = $_POST['subject'];
$mail->Body    = "HELLO BOYS";//"<form action='mail_admin.php' method='post'><input type='submit' value='Accept' name='Accept'><input type='submit' value='Decline' name='Decline'></form>";
$mail->AltBody = $_POST['message'];

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}*/
?>
<?php
$con=mysqli_connect('localhost','root');
  mysqli_select_db($con,'hism');
  //$q="select username from hostel1 where hostel='" . $_POST['hostel'] . "' and type='caretaker'";
  $q="select username from login_admin";
  $result=mysqli_query($con,$q);
  $row=mysqli_fetch_array($result);
$to ="vipul.cse.1754@iiitbh.ac.in";
$subject = $_POST['subject'];
$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";
$txt = $_POST['roll_no'] ."\r\n" . $_POST['hostel'] . "\r\n" . $_POST['message'];
//<?php $_POST['roll_no'] ."\r\n" . $_POST['hostel'] . "\r\n" . $_POST['message'] . "\r\n" . "<form action='mail_admin.php' method='post'><input 
$headers = "From: mukulsharma0480259@gmail.com" . "\r\n" .
"CC: roushan.cse.1745@iiitbh.ac.in";

$result=mail($to,$subject,$txt,$headers);
if($result)
  echo "mail successfully sent";
?>