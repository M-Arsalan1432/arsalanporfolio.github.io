<?php
	use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    
    require '../autoload.php'; // Include PHPMailer autoloader
    
    $mail = new PHPMailer(true);
    
    try {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$subject = $_POST['subject'];
        // SMTP configuration
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'bitm-f19-024@superior.edu.pk';
        $mail->Password = 'arslan123';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
    
        // Sender and recipient
        $mail->setFrom('bitm-f19-024@superior.edu.pk', 'Arsalan Arif');
        $mail->addAddress($email, $name);
    
        // Email content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $message;
    
        // Send email
        $mail->send();
        echo 'Email sent successfully';
    } catch (Exception $e) {
        echo 'Email could not be sent. Error: ', $mail->ErrorInfo;
    }
?>