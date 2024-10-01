<!-- /*
* Template Name: Snap
* Template Author: Untree.co
* Tempalte URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<?php 
session_start();
include('../Views/nav-bar.php');
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
  

  <link href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600, 700,900|Oswald:400,700" rel="stylesheet">


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
     <!-- Additional Styles for Sidebar Layout -->
      <style>
        .photo-item img {
            width: 100%; /* Make image take full width of its container */
            height: 400px; /* Set a fixed height for all images */
            object-fit: cover; /* Ensure the image covers the container without stretching */
        }
        .product-info{
          padding-top: 5px;
          padding-bottom: 10px;
        }
      </style>
</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="200">

      <!-- <div class="container-fluid site-section">
        <div class="row mb-3">
          <div class="col-12 text-center">
            <h2 class="heading">Photos</h2>
          </div>
        </div> -->
          <!-- <p>I freeze special moments in just the right time on your big day so that you can pass them down and cherish them in generations to come. Unlike typical wedding photographers in Sri Lanka, I capture the most natural moments through my wedding photography in Sri Lanka. I love to delight my clients with beautiful portraits using natural lighting so that they can recall every moment of their wedding photoshoot with genuine happiness.</p> -->
        <section class="row align-items-stretch photos" id="section-photos">
          <div class="col-12">
            <div class="row align-items-stretch">


                         <!-- Product 7 -->
        <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <a href="img_album_01/img_01.jpeg" class="d-block photo-item" data-fancybox="gallery">
            <img src="img_album_01/img_01.jpeg" alt="Image" class="img-fluid mb-0">
          </a>
          <div class="product-info">
            <h4>Anuradha & Emali</h4>
            <p class="description">Hold my hand forever, as we walk through every moment together, building a love that will never fade...</p>
            <div class="reviews">
              ★★★★☆ (50 Reviews)
            </div>
            <button class="btn btn-primary">View More</button>
          </div>
        </div>
                    <!-- Product 8 -->
        <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <a href="img_album_2/img_01.jpeg" class="d-block photo-item" data-fancybox="gallery">
            <img src="img_album_2/img_01.jpeg" alt="Image" class="img-fluid mb-0">
          </a>
          <div class="product-info">
            <h4>Sadun & Gimhani</h4>
            <p class="price">Hold my hand forever, as we walk through every moment together, building a love that will never fade...</p>
            <div class="reviews">
              ★★★★☆ (50 Reviews)
            </div>
            <button class="btn btn-primary">View More</button>
          </div>
        </div>
                     <!-- Product 9 -->
        <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <a href="img_album_3/img_01.jpeg" class="d-block photo-item" data-fancybox="gallery">
            <img src="img_album_3/img_01.jpeg" alt="Image" class="img-fluid mb-0">
          </a>
          <div class="product-info">
            <h4>Sashini & Amatha</h4>
            <p class="price">Hold my hand forever, as we walk through every moment together, building a love that will never fade...</p>
            <div class="reviews">
              ★★★★☆ (50 Reviews)
            </div>
            <button class="btn btn-primary">View More</button>
          </div>
        </div>

                <!-- Product 1 -->
        <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up">
          <a href="img/img_16.jpg" class="d-block photo-item" data-fancybox="gallery">
            <img src="img/img_16.jpg" alt="Image" class="img-fluid mb-0">
          </a>
          <div class="product-info">
            <h4>Product Name 1</h4>
            <p class="price">$45.00</p>
            <div class="reviews">
              ★★★★☆ (20 Reviews)
            </div>
            <button class="btn btn-primary">View More</button>
          </div>
        </div>
                <!-- Product 2 -->
        <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <a href="img/img_17.jpg" class="d-block photo-item" data-fancybox="gallery">
            <img src="img/img_17.jpg" alt="Image" class="img-fluid mb-0">
          </a>
          <div class="product-info">
            <h4>Product Name 2</h4>
            <p class="price">$60.00</p>
            <div class="reviews">
              ★★★★☆ (35 Reviews)
            </div>
            <button class="btn btn-primary">View More</button>
          </div>
        </div>
                      <!-- Product 3 -->
        <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <a href="img/img_18.jpg" class="d-block photo-item" data-fancybox="gallery">
            <img src="img/img_18.jpg" alt="Image" class="img-fluid mb-0">
          </a>
          <div class="product-info">
            <h4>Product Name 3</h4>
            <p class="price">$75.00</p>
            <div class="reviews">
              ★★★★☆ (50 Reviews)
            </div>
            <button class="btn btn-primary">View More</button>
          </div>
        </div>

                   <!-- Product 4-->
        <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <a href="img/img_19.jpg" class="d-block photo-item" data-fancybox="gallery">
            <img src="img/img_19.jpg" alt="Image" class="img-fluid mb-0">
          </a>
          <div class="product-info">
            <h4>Product Name 3</h4>
            <p class="price">$75.00</p>
            <div class="reviews">
              ★★★★☆ (50 Reviews)
            </div>
            <button class="btn btn-primary">View More</button>
          </div>
        </div>
                   <!-- Product 5 -->
        <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <a href="img/img_20.jpg" class="d-block photo-item" data-fancybox="gallery">
            <img src="img/img_20.jpg" alt="Image" class="img-fluid mb-0">
          </a>
          <div class="product-info">
            <h4>Product Name 3</h4>
            <p class="price">$75.00</p>
            <div class="reviews">
              ★★★★☆ (50 Reviews)
            </div>
            <button class="btn btn-primary">View More</button>
          </div>
        </div>
                   <!-- Product 6 -->
        <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <a href="img\img_1.jpg" class="d-block photo-item" data-fancybox="gallery">
            <img src="img\img_1.jpg" alt="Image" class="img-fluid mb-0">
          </a>
          <div class="product-info">
            <h4>Product Name 3</h4>
            <p class="price">$75.00</p>
            <div class="reviews">
              ★★★★☆ (50 Reviews)
            </div>
            <button class="btn btn-primary">View More</button>
          </div>
        </div>

       
            </div>
          </div>
        </section> <!-- #section-photos -->

  </div> <!-- .site-wrap -->

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
  

  <script src="js/jquery.fancybox.min.js"></script>

  <script src="js/main.js"></script>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  </body>
</html>
