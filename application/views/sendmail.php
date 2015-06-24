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

    $Mail = new PHPMailer(true);

    //Enable SMTP debugging.
    $Mail->SMTPDebug = 0;
    //Set PHPMailer to use SMTP.
    $Mail->isSMTP();
    //Set SMTP host name
    $Mail->Host = "smtp.gmail.com";
    //Set this to true if SMTP host requires authentication to send email
    $Mail->SMTPAuth = true;
    //Provide username and password
    $Mail->Username = "contact.imjalpreet@gmail.com";
    $Mail->Password = "contactjalpreet";
    //If SMTP requires TLS encryption then set it
    $Mail->SMTPSecure = "tls";
    //Set TCP port to connect to
    $Mail->Port = 587;

    $mail->addReplyTo($_POST['email'], $_POST['name']);
    $mail->From = "contact.imjalpreet@gmail.com";
    $mail->FromName = 'Me';
    $Mail->From = "contact.imjalpreet@gmail.com";
    $Mail->FromName = 'Jalpreet Singh Nanda';

    $mail->addAddress("contact.imjalpreet@gmail.com", "Jalpreet Singh Nanda");
    $Mail->addAddress($_POST['email'], $_POST['name']);

    $mail->isHTML(true);

    $mail->Subject = $_POST['subject'];
    $mail->Body = $_POST['message'] ;
    //$mail->AltBody = $_POST['message'];
    $Mail->isHTML(true);
    $Mail->Subject = "Re: ".$_POST['subject'];
    $Mail->Body = "<i><b>Hey ".$_POST['name'].", Thank you for contacting me! I will try to respond to you as soon as possible.</b></i>" ;
    if(!$mail->send()) {
        echo "Mailer Error: " . $mail->ErrorInfo; // ... or this one to tell it that it wasn't sent
    }else{
       echo 'sent';
    }
    $Mail->send();
?>
