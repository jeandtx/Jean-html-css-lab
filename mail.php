<?php
ini_set('display_errors', '1');
require 'includes/PHPMailer.php';
require 'includes/SMTP.php';
require 'includes/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;

function sendEmail()
{

    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = "tls";
    $mail->Port = "587";
    $mail->Username = "dmvistro@gmail.com";
    $mail->Password = "fjfjkmdlhxtoupgu";
    $mail->Subject = "Reset Password!";
    $mail->setFrom('dmvistro@gmail.com');
    $mail->isHTML(true);

    $mail->Body = "here is your temporary password: hello";

    $sendTo = $_POST['email'];
    $mail->addAddress($sendTo);


    if ($mail->send()) {
        echo "Email Sent..!";
    } else {
        echo "Message could not be sent. Mailer Error: ";
    }

    $mail->smtpClose();
}

if (isset($_POST['submit'])) {
    sendEmail();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        Email Address : <input type="email" name="email">
        <br>
        <input type="submit" value="Reset Password" name="submit">
    </form>
</body>

</html>