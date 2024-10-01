<?php 
include('../controllers/registercontroller.php');

?>


<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registration with Form Transition</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    /* Basic reset to remove default margin and padding */
    body, html {
      margin: 0;
      padding: 0;
      height: 100%;
      overflow: hidden; /* Prevent scrollbars */
    }

    /* Container for the animated background */
    .background-container {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: url('Wedding.jpg') no-repeat center center/cover;
      z-index: -1; /* Make sure it stays behind the content */
    }

    /* Registration form container */
    .registration-container {
      position: relative;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      overflow: hidden; /* Prevent scrollbars */
    }

    /* Form Box */
    .form-box {
      background-color: rgba(255, 255, 255, 0.9); /* Slight transparency */
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
      width: 400px;
      text-align: center;
      position: relative;
      left: 50%; /* Start in the center */
      transform: translateX(-50%); /* Center the form */
      animation: moveToLeft 2s ease forwards; /* Animation to move form */
    }

    /* Keyframes for the form animation */
    @keyframes moveToLeft {
      0% {
        left: 50%;
        transform: translateX(-50%);
      }
      100% {
        left: 10%; /* Move to 10% from the left */
        transform: translateX(0); /* Reset translate */
      }
    }
    label{
        font-weight: 500;
    }
  </style>
</head>
<body>

  <!-- Background Image with Animation -->
  <div class="background-container"></div>
    <?php 
    if(isset($_SESSION['status'])){

        ?>
        <div class="alert alert-success">
            <h5><?=$_SESSION['status'];?></h5>     
        </div>
        <?php 

        unset($_SESSION['status']);
    }
        ?>
    
  <!-- Registration Form Container -->
  <div class="registration-container">
    <div class="form-box">
      <h2 class="fw-bold mb-3 pb-3">Sign In</h2>
      <form method="POST">
        <div class="form-outline mb-4">
          <label class="fs-6" for="firstname">First Name</label>
          <input type="text" id="firstname" name="firstname" class="form-control" />
        </div>
        <div class="form-outline mb-4">
          <label class="fs-6" for="lastname">Last Name</label>
          <input type="text" id="lastname" name="lastname" class="form-control" />
        </div>
        <div class="form-outline mb-4">
          <label class="fs-6" for="email">Email</label>
          <input type="email" id="email" name="email" class="form-control" />
        </div>
        <div class="form-outline mb-4">
          <label class="fs-6" for="password">Password</label>
          <input type="password" id="password" name="password" class="form-control" />
        </div>
        <button type="submit" name="register-btn" class="btn btn-lg w-100" style="background: #938f84;">Sign In</button>
        <p>Already have an account? <a href="login.php" class="link-info"  >Sign In</a></p>
      </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
