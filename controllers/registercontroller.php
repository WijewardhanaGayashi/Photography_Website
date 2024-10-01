 <?php
// include '../db/connect.php';

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
//     $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
//     $email = mysqli_real_escape_string($conn, $_POST['email']);
//     $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password

//     // Save data in the database
//     $query = "INSERT INTO user (firstname, lastname, email, password) VALUES ('$firstname', '$lastname', '$email', '$password')";

//     if ($conn->query($query) === TRUE) {
//         header("Location: login.php");
//         exit();
//     } else {
//         echo "Error: " . $query . "<br>" . $conn->error;
//     }
// }

// $conn->close();

include '../db/connect.php';
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}



//Php Mailer

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require "../PhpMailer/vendor/autoload.php";

function sendemail_verify($name, $email,$verify_token){
    $mail = new PHPMailer(true)
    ;
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'gayashiwijewardhana@gmail.com';                     //SMTP username
    $mail->Password   = 'gxindzopjzfnrwvv';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;                                    //Enable implicit TLS 
    $mail->Port       = 587;      


    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true,
        ),
    );

    $mail->setFrom('gayashiwijewardhana@gmail.com');
    $mail->addAddress($email);  

    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Verify Your Email';
    $mail->Body    = "<h2>you have successfully Registered !</h2>
    <p>Verify your email using the following link to complete your registration to Malcom Web.</p>
    <br/><br/>
    <a href ='http://localhost/MalcomPhoto/PhotoFolio/verify-email.php?token= $verify_token'>Click Me</a>";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
};

if(isset($_POST["register-btn"])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'],PASSWORD_DEFAULT) ;
    $verify_token= md5(rand());

    // sendemail_verify("$firstname","$email","$verify_token") ;
    // echo "sent or not ?";

    // Check Whether email already exist or not
    $check_email_query = "SELECT email from user where email= '$email' LIMIT 1";
    $check_email_query_run =mysqli_query($conn, $check_email_query);

    if(mysqli_num_rows($check_email_query_run)>0){
        $_SESSION['status'] = "Email already exist !";
        header("Location:login.php");
    }
    else{
        //Insert data to the table
        $query = "INSERT INTO user (firstname, lastname, email, password, verify_token) VALUES ('$firstname', '$lastname', '$email', '$password', '$verify_token')";
        $query_run = mysqli_query($conn, $query);

        if($query_run){

            sendemail_verify("$firstname", "$email","$verify_token");
            $_SESSION['status'] = "Registration Successful  ! Verify Your Email Address";
            header("Location:Register.php");
            exit(0);
        }
        else{
            $_SESSION['status'] = "Registration Failed !";
            header("Location:Register.php");
            exit(0);
           
        }
    }

}


?> 
