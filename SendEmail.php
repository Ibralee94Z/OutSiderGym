<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if (isset($_POST['sendMessageButton'])) {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $Phone = htmlspecialchars(trim($_POST['Phone']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        // Server settings
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                     // Enable verbose debug output
        $mail->isSMTP();                                             // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                        // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                    // Enable SMTP authentication
        $mail->Username   = 'zungu396@gmail.com';                    // SMTP username
        $mail->Password   = 'ddfy ojwz bfar vrsf';                   // SMTP password (Use environment variable in production)
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;          // Enable TLS encryption, `PHPMailer::ENCRYPTION_SMTPS` also encouraged
        $mail->Port       = 587;                                     // TCP port to connect to; 587 is typically used with STARTTLS

        // Recipients
        $mail->setFrom('zungu396@gmail.com', 'zungu396');
        $mail->addAddress('zungu396@gmail.com', 'zungu396');         // Add a recipient

        // Content
        $mail->isHTML(true);                                         // Set email format to HTML
        $mail->Subject = 'New Message';
        $mail->Body    = '<h3>Hello, you got a new message</h3>
                          <h4>Name: ' . $name . ' </h4>
                          <h4>Email: ' . $email . '</h4>
                          <h4>Phone: ' . $Phone . '</h4>
                          <h4>Message: ' . $message . '</h4>';

        if ($mail->send()) {
            $_SESSION['status'] = 'Thank you for contacting us.';
        } else {
            $_SESSION['status'] = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    } catch (Exception $e) {
        $_SESSION['status'] = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

    header("Location: {$_SERVER['HTTP_REFERER']}");
    exit(0);

} else {
    header('Location: index.php');
    exit(0);
}
?>
