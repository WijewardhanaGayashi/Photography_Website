<!-- /*
* Template Name: Snap
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<?php 
include '../controllers/logincontroller.php';
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">

  <meta name="description" content="" />
  <meta name="keywords" content="" />

  <link href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,900|Oswald:400,700" rel="stylesheet">

  <link rel="stylesheet" href="fonts/icomoon/style.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="css/aos.css">
  <link rel="stylesheet" href="css/fancybox.min.css">
  <link rel="stylesheet" href="css/style.css">

  <title>Snap &mdash; Free Photography Website Template by Untree.co</title>

  <style>
    /* Custom styles for the navbar */
    .navbar {
        margin-bottom: 20px; /* Space below the navbar */
    }

    .dropdown-menu {
        display: none; /* Initially hide the dropdown */
        position: absolute; /* Position relative to its parent */
        z-index: 1000; /* Ensure it appears above other elements */
    }

    .dropdown.open .dropdown-menu {
        display: block; /* Show dropdown when open */
    }
  </style>
</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="200">
<?php
// Check if the user is logged in
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    $role = isset($_SESSION['auth_user']['role']) ? $_SESSION['auth_user']['role'] : null;
?>
    <!-- Navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="home.php">Limosore</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <!-- Admin Icons -->
                <?php if ((int)$role === 1) { ?>
                    <li class="nav-item"><a class="nav-link" href="dashboard.php">Dashboard</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="settingsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Settings</a>
                        <div class="dropdown-menu" id="settingsDropdownMenu" aria-labelledby="settingsDropdown">
                            <a class="dropdown-item" href="add_photos.php">Add Photos</a>
                        </div>
                    </li>
                <?php } ?>
                <li class="nav-item"><a class="nav-link" href="home.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="photo.php">Photos</a></li>
                <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                <li class="nav-item"><a class="nav-link" href="testimonials.php">Testimonials</a></li>
                <li class="nav-item"><a class="nav-link" href="blog.php">Blog</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
            </ul>
            <ul class="navbar-nav social">
                <li class="nav-item"><a class="nav-link" href="#"><span class="icon-instagram"></span></a></li>
                <li class="nav-item"><a class="nav-link" href="#"><span class="icon-facebook"></span></a></li>
                <li class="nav-item"><a class="nav-link" href="#"><span class="icon-twitter"></span></a></li>
                <li class="nav-item"><a class="nav-link" href="#"><span class="icon-linkedin"></span></a></li>
            </ul>
        </div>
    </nav>
<?php } ?>

<!-- Scripts -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/lozad.min.js"></script>
<script src="js/fancybox.min.js"></script>
<script src="js/main.js"></script>

<!-- Script Section for Dropdown Functionality -->
<script>
$(document).ready(function() {
    // Dropdown toggle functionality
    $('#settingsDropdown').on('click', function(e) {
        e.preventDefault(); 
        $('#settingsDropdown').parent().toggleClass('open'); 
        $('#settingsDropdownMenu').toggle(); 
    });

    // Hide dropdown if clicked outside
    $(document).on('click', function(e) {
        if (!$(e.target).closest('#settingsDropdown').length) {
            $('#settingsDropdownMenu').hide(); 
            $('#settingsDropdown').parent().removeClass('open'); // Keep the icons in place when closed
        }
    });
});
</script>
</body>
</html>
