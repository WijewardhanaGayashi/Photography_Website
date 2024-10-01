

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar-nav {
    flex: 1;
    display: flex;
    justify-content: center;
  }
  .navbar-nav .nav-item {
    margin: 0 10px;
  }
  .navbar {
    justify-content: center;
  }
  .navbar-collapse {
    justify-content: center;
  }
  .form-inline {
    display: flex;
    justify-content: center;
  }
  .btn:hover {
    background-color:#e3f2fd;
  }
  .nav-item{
    font-weight: bold;
  }
  .circle-container {
      width: 40px; /* Adjust the size as needed */
      height: 40px; /* Adjust the size as needed */
      border-radius: 50%;
      border: 2px solid #000; /* Border color and width */
      display: flex;
      align-items: center;
      justify-content: center;
      background-color: #fff; /* Background color, optional */
    }
    .circle-container svg {
      width: 30px; /* Adjust the size as needed */
      height: 30px; /* Adjust the size as needed */
    }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg" style="background-color: #e3f2fd;">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="home.php">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">GALLERY</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">CONTACT US</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">ENQUIRIES</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control w-500 me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-info me-2" type="submit">Search</button>
          </form>
        </div>
        <div class="me-4"> 
               <button type="button" class="btn btn-outline-info me-2">Log In</button>
                <button type="button" class="btn btn-outline-info">Register</button>
      </div>
      <div class="circle-container me-4 ">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
        </svg>
      </div>
      </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
