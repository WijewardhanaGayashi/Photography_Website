<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include('../db/connect.php'); // Database connection
if (session_status() == PHP_SESSION_NONE) {
    session_start(); // Start session if not already started
}

if(isset($_POST['btn-now-login'])) {
    if(!empty(trim($_POST['email'])) && !empty(trim($_POST['password']))) {
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = $_POST['password']; // Password not escaped

        // Use prepared statements to prevent SQL injection
        $select_query = "SELECT * FROM user WHERE email = ?";
        $stmt = $conn->prepare($select_query);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            // Verify hashed password if applicable (password_verify())
            if($row['verify_status'] == "1") {

                    if($email==='gayashiwijewardhana@gmail.com'){
                        $update_role_query = "UPDATE user SET role = ? WHERE email = ?";
                        $stmt = $conn->prepare($update_role_query);
                        $admin_role = 1;
                        $stmt->bind_param("is", $admin_role, $email);
                        $stmt->execute();


                        $_SESSION['auth_user']['role'] = $admin_role;
                    }

                $_SESSION['authenticated'] = TRUE;
                $_SESSION['auth_user'] = [
                    'firstname' => $row['firstname'],
                    'lastname' => $row['lastname'],
                    'email' => $row['email'],
                    'role'=>$row['role']
                ];
                $_SESSION['loggedin'] = TRUE; // Set login status
                $_SESSION['status'] = "You are logged in successfully!";
                header('Location: starter-page.php');
                exit(0);
            } else {
                $_SESSION['status'] = "Please verify your email address to login!";
                header('Location: login.php');
                exit(0);
            }
        } else {
            $_SESSION['status'] = "Invalid email or password";
            header('Location: login.php');
            exit(0);
        }
    } else {
        $_SESSION['status'] = "All fields are required";
        header('Location: login.php');
        exit(0);
    }
}
?>
