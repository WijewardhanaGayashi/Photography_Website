<?php
include '../db/connect.php';
session_start(); // Start the session

// Php Mailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require "../PhpMailer/vendor/autoload.php";

// Send password reset email
function send_password_reset($get_email, $token) {
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username   = 'gayashiwijewardhana@gmail.com';                     //SMTP username
        $mail->Password   = 'gxindzopjzfnrwvv';  
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        $mail->setFrom('gayashiwijewardhana@gmail.com');
        $mail->addAddress($get_email);

        $mail->isHTML(true);
        $mail->Subject = 'Password Reset Request';
        $mail->Body = "<h2>Password Reset</h2>
                       <p>Click the link below to reset your password:</p>
                       <a href='http://localhost/MalcomPhoto/PhotoFolio/ForgotPassword.php?token=$token&email=$get_email'>Reset Password</a>";
        
        $mail->send();
    } catch (Exception $e) {
        // Log or handle the error
    }
}

// Handle password reset request
if (isset($_POST['password-reset-btn'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $token = md5(rand());

    $check_email = "SELECT email FROM user WHERE email='$email' LIMIT 1";
    $check_email_run = mysqli_query($conn, $check_email);

    if (mysqli_num_rows($check_email_run) > 0) {
        $row = mysqli_fetch_array($check_email_run);
        $get_email = $row['email'];

        $update_token = "UPDATE user SET verify_token = '$token' WHERE email = '$get_email' LIMIT 1";
        $update_run = mysqli_query($conn, $update_token);

        if ($update_run) {
            send_password_reset($get_email, $token);
            $_SESSION['status'] = "Password reset link sent to your email!";
            header("Location:PasswordReset.php");
            exit(0);
        } else {
            $_SESSION['status'] = "Failed to update token!";
            header("Location:PasswordReset.php");
            exit(0);
        }
    } else {
        $_SESSION['status'] = "No email found!";
        header("Location:PasswordReset.php");
        exit(0);
    }
}

// Handle password update
if (isset($_POST['update-password-btn'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['password'];
    $token = mysqli_real_escape_string($conn, $_POST['password_token']);

    if (!empty($email) && !empty($new_password) && !empty($confirm_password)) {
        if ($new_password === $confirm_password) {
            $hashedPassword = password_hash($new_password, PASSWORD_DEFAULT);

            $check_verify_token = "SELECT verify_token FROM user WHERE verify_token= '$token' LIMIT 1";
            $check_token_run = mysqli_query($conn, $check_verify_token);

            if (mysqli_num_rows($check_token_run) > 0) {
                $update_password = "UPDATE user SET password = '$hashedPassword' WHERE verify_token = '$token' LIMIT 1";
                $update_password_run = mysqli_query($conn, $update_password);

                if ($update_password_run) {
                    $new_token = md5(rand()) . 'funda';
                    $update_to_new_token = "UPDATE user SET verify_token = '$new_token' WHERE verify_token = '$token' LIMIT 1";
                    mysqli_query($conn, $update_to_new_token);

                    $_SESSION['status'] = "Password updated successfully!";
                    header("Location:login.php");
                    exit(0);
                } else {
                    $_SESSION['status'] = "Failed to update password!";
                    header("Location:ForgotPassword.php?token=$token&email=$email");
                    exit(0);
                }
            } else {
                $_SESSION['status'] = "Invalid token!";
                header("Location:ForgotPassword.php?token=$token&email=$email");
                exit(0);
            }
        } else {
            $_SESSION['status'] = "Passwords do not match!";
            header("Location:ForgotPassword.php?token=$token&email=$email");
            exit(0);
        }
    } else {
        $_SESSION['status'] = "All fields are required!";
        header("Location:ForgotPassword.php?token=$token&email=$email");
        exit(0);
    }
}
?>
