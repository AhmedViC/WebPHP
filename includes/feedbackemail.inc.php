<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
$mail = new PHPMailer(true);
if(isset($_POST["submit"]))
{


$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth=true;
$mail->Username = 'wowstoreww@gmail.com';
$mail->Password='vopxljmtpqbgheai';
$mail->SMTPSecure = 'ssl';
$mail->Port=465;

$mail->setFrom('wowstoreww@gmail.com');
$mail->addAddress('wowstoreww@gmail.com');
$mail->isHTML(true);
$mail->Subject = $_POST['subject'];

$mail->Body="<h2>sender information:</h2>\n<br>First Name:".$_POST['fname']
."<br>Last Name:"
.$_POST['lname']
."<br>Email:".$_POST['email']."\n\n<h2>The Message:</h2>"
.$_POST['message']."<h2>";


$mail->send();
echo "<script>
alert('Your Message Has been sent successfully');
document.location.href='../homepage.php';
</script>";


}
?>