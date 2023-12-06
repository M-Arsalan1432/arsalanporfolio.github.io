<?php
	  // use PHPMailer\PHPMailer\PHPMailer;
    // use PHPMailer\PHPMailer\Exception;
    
    // require '../assets/vendor/autoload.php'; // Include PHPMailer autoloader
    
    // $mail = new PHPMailer(true);
    
    // try {
    //   if (isset($_POST["submit"])) {
    //     $name = $_POST['name'];
    //     $email = $_POST['email'];
    //     $message = $_POST['message'];
    //     $subject = $_POST['subject'];
    //     // SMTP configuration
    //     $mail->isSMTP();
    //     $mail->Host = 'smtp.googlemail.com';
    //     $mail->SMTPAuth = true;
    //     $mail->Username = 'bitm-f19-024@superior.edu.pk';
    //     $mail->Password = 'arslan123';
    //     $mail->SMTPSecure = 'tls';
    //     $mail->Port = 587;
    
    //     // Sender and recipient
    //     $mail->setFrom('bitm-f19-024@superior.edu.pk', 'Arsalan Arif');
    //     $mail->addAddress($email, $name);
    
    //     // Email content
    //     $mail->isHTML(true);
    //     $mail->Subject = $subject;
    //     $mail->Body = $message;
    
    //     // Send email
    //     $mail->send();
    //     echo 'Email sent successfully';
    //   }
    // } catch (Exception $e) {
    //     echo 'Email could not be sent. Error: ', $mail->ErrorInfo;
    // }
    $to = $_POST["email"]; // Replace with the recipient's email address
    $subject = $_POST["subject"] . "(" . $_POST["name"] . ")";
    $message = $_POST["message"];
    $headers = "From: muhammadarsalan1432@gmail.com"; // Replace with your email address

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully!";
        // header("Location: https://m-arsalan1432.github.io/arsalanporfolio.github.io/index.html");
    } else {
        echo "Email delivery failed.";
    }
?>