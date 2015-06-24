<?php
    require_once($_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php');

    $mail = new PHPMailer(true);

    //Enable SMTP debugging.
    $mail->SMTPDebug = 0;
    //Set PHPMailer to use SMTP.
    $mail->isSMTP();
    //Set SMTP host name
    $mail->Host = "smtp.gmail.com";
    //Set this to true if SMTP host requires authentication to send email
    $mail->SMTPAuth = true;
    //Provide username and password
    $mail->Username = "contact.imjalpreet@gmail.com";
    $mail->Password = "contactjalpreet";
    //If SMTP requires TLS encryption then set it
    $mail->SMTPSecure = "tls";
    //Set TCP port to connect to
    $mail->Port = 587;

    $mail->addReplyTo($_POST['email'], $_POST['name']);
    $mail->From = "contact.imjalpreet@gmail.com";
    $mail->FromName = 'Me';

    $mail->addAddress("contact.imjalpreet@gmail.com", "Jalpreet Singh Nanda");

    $mail->isHTML(true);

    $mail->Subject = $_POST['subject'];
    $mail->Body = $_POST['message'] ;
    //$mail->AltBody = $_POST['message'];

    if(!$mail->send()) {
        echo "Mailer Error: " . $mail->ErrorInfo; // ... or this one to tell it that it wasn't sent
    }else{
       echo 'sent';
    }
?>
