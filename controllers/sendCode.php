<?php
session_start();
include '../db/connect.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require "../PhpMailer/vendor/autoload.php";

function resend_email_verify($email, $verify_token) {
    $mail = new PHPMailer(true);
    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER; // Enable verbose debug output
        $mail->isSMTP(); // Send using SMTP
        $mail->Host = 'smtp.gmail.com'; // Set the SMTP server to send through
        $mail->SMTPAuth = true; // Enable SMTP authentication
        $mail->Username = 'gayashiwijewardhana@gmail.com'; // SMTP username
        $mail->Password = 'gxindzopjzfnrwvv'; // SMTP password - use an App Password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption
        $mail->Port = 587; // TCP port to connect to

        // Optional settings to handle SSL verification issues
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true,
            ),
        );

        //Recipients
        $mail->setFrom('gayashiwijewardhana@gmail.com', 'Malcom Web');
        $mail->addAddress($email); // Add recipient

        // Content
        $mail->isHTML(true); // Set email format to HTML
        $mail->Subject = 'Verify Your Email';
        $mail->Body = "<h2>You have successfully registered!</h2>
            <p>Verify your email using the following link to complete your registration to Malcom Web.</p>
            <br/><br/>
            <a href='http://localhost/MalcomPhoto/PhotoFolio/verify-email.php?token=$verify_token'>Click Me</a>";
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

if (isset($_POST['resend-email-btn'])) {
    if (!empty(trim($_POST['email']))) {
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $checkemail_query = "SELECT * FROM user WHERE email ='$email' LIMIT 1";
        $checkemail_query_run = mysqli_query($conn, $checkemail_query);

        if (mysqli_num_rows($checkemail_query_run) > 0) {
            $row = mysqli_fetch_array($checkemail_query_run);
            if ($row['verify_status'] == "0") {
                $email = $row['email'];
                $verify_token = $row['verify_token'];
                
                resend_email_verify($email, $verify_token);
                $_SESSION['status'] = 'Verification Email Link has been sent.';
                header("Location: login.php");
                exit(0);
            } else {
                $_SESSION['status'] = 'Email already verified';
                header("Location: ResentEmail.php");
                exit(0);
            }
        } else {
            $_SESSION['status'] = 'Email is not registered';
            header("Location: Register.php");
            exit(0);
        }
    } else {
        $_SESSION['status'] = 'Please enter the email field';
        header("Location: ResentEmail.php");
        exit(0);
    }
}
?>
