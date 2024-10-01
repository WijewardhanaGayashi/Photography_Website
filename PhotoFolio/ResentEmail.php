<?php 
// session_start();
include '../controllers/sendCode.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      /* Reset margins and padding */
      body, html {
        margin: 0;
        padding: 0;
        height: 100%;
        overflow: hidden; /* Prevent scrollbars */
      }

      /* Background container */
      .background-container {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: url('Wedding.jpg') no-repeat center center/cover;
        z-index: -1; /* Keep behind content */
      }

      /* Form container */
      .login-container {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        overflow: hidden;
      }

      /* Form box with animation */
      .form-box {
        background-color: rgba(255, 255, 255, 0.9); /* Slight transparency */
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
        width: 400px;
        text-align: center;
        position: relative;
        left: 50%; /* Start centered */
        transform: translateX(-50%);
        animation: moveToLeft 2s ease forwards; /* Animation to move form */
      }

      /* Keyframes for form animation */
      @keyframes moveToLeft {
        0% {
          left: 50%;
          transform: translateX(-50%);
        }
        100% {
          left: 10%; /* Move to the left */
          transform: translateX(0); /* No more centering */
        }
      }

      /* Custom font size for labels and inputs */
      label {
        font-size: 0.9rem;
        font-weight: 500;
        margin-left: -30px;
      }
      .form-control {
        font-size: 0.9rem;
      }
    </style>
  </head>
  <body>

    <!-- Background Image -->
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
    <!-- Login Form Container -->
    <div class="login-container">
      <div class="form-box">
        <h3 class="fw-bold mb-3 pb-3 fs-3">Resend Verification Link</h3>
        <form method="POST">
          <!-- Email Input -->
          <div class="form-outline mb-4">
            <label class="fs-6" for="email">Email</label>
            <input type="email" id="email" name="email" class="form-control form-control-lg" />
          </div>
          
          <!-- Submit Button -->
          <div class="pt-1 mb-4">
            <button class="btn  btn-lg w-100" type="submit" style="background: #938f84;" name="resend-email-btn">Resend The Link</button>
          </div>
          
          <!-- Forgot password and registration link -->
          <p>Don't have an account? <a href="Register.php" class="link-info">Register here</a></p>
        </form>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
