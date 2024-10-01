<?php 

include '../db/connect.php';

session_start();

if (isset($_GET['token'])) {
    // Decode and trim the token
    $token = trim(urldecode($_GET['token']));
    
    // Print token for debugging
    echo "Token from URL: " . htmlspecialchars($token) . "<br>";

    // Prepare statement to prevent SQL injection
    $stmt = $conn->prepare("SELECT verify_token, verify_status FROM user WHERE verify_token = ? LIMIT 1");
    $stmt->bind_param("s", $token);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        
        // Print token from database for debugging
        echo "Token from Database: " . htmlspecialchars($row['verify_token']) . "<br>";

        if ($row['verify_status'] == "0") {
            // Update query
            $update_stmt = $conn->prepare("UPDATE user SET verify_status = '1' WHERE verify_token = ? LIMIT 1");
            $update_stmt->bind_param("s", $token);
            $update_success = $update_stmt->execute();

            if ($update_success) {
                $_SESSION['status'] = "Account Verified Successfully";
                header("Location: login.php");
                exit(0);
            } else {
                $_SESSION['status'] = "Verification failed";
                header("Location: login.php");
                exit(0);
            }
        } else {
            $_SESSION['status'] = "Token has already been used";
            header("Location: login.php");
            exit(0);
        }
    } else {
        $_SESSION['status'] = "Invalid token";
        header("Location: login.php");
        exit(0);
    }
} else {
    $_SESSION['status'] = "Token is missing";
    header("Location: login.php");
    exit(0);
}
?>
