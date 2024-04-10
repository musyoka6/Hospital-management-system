<?php
include("header.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

  <link rel="stylesheet" type="text/css" href="style2.css">


  <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<style type="text/css">
  #inputbtn:hover {
    cursor: pointer;
  }

  .card {
    background: #f8f9fa;
    padding: 2rem;
    border-top-left-radius: 5% 5%;
    border-bottom-left-radius: 5% 5%;
    border-top-right-radius: 5% 5%;
    border-bottom-right-radius: 5% 5%;
  }

  body {
    /* background: -webkit-linear-gradient(left, #3931af, #00c6ff); */
    background-size: cover;
    background-image: url(images/ku.avif);
  }
</style>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top  bg-info text-white" id="mainNav">
    <div class="container">

      <a class="navbar-brand js-scroll-trigger text-white" href="index.php" style="margin-top: 10px;margin-left:-65px;font-family: 'IBM Plex Sans', sans-serif;">
        <h4 style="margin-left: 4rem;">JAMY HOSPITAL</h4>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item" style="margin-right: 40px;">
            <a class="nav-link js-scroll-trigger text-white" href="index.php" style="color: white;font-family: 'IBM Plex Sans', sans-serif;">
              <h6>HOME</h6>
            </a>
          </li>

          <li class="nav-item" style="margin-right: 40px;">
            <a class="nav-link js-scroll-trigger text-white" href="index.php#aboutl" style="color: white;font-family: 'IBM Plex Sans', sans-serif;">
              <h6>ABOUT US</h6>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link js-scroll-trigger text-white" href="contact.html" style="color: white;font-family: 'IBM Plex Sans', sans-serif;">
              <h6>CONTACT</h6>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container-fluid" style="margin-top:100px;margin-bottom:60px;color:#34495E;">
    <div class="row col-5 d-flex" style="margin:auto">
      <div class="card" style="font-family: 'IBM Plex Sans', sans-serif;">
        <div class="card-body">
          <center>
            <i class="fa fa-hospital-o fa-3x" aria-hidden="true" style="color:#0062cc"></i>
            <br><br><br>
            <h3 style="margin-top: 10%">Login as Admin</h3><br>
            <form method="post" action="func3.php">
              <div class="row register-form">
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="User Name *" name="username1" onkeydown="return alphaOnly(event);" required />
                  </div>



                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password *" name="password2" required />
                  </div>

                  <input type="submit" class="btnRegister" name="adsub" value="Login" />
                </div>
              </div>
            </form>
        </div>

      </div>
    </div>
  </div>
  <footer class="footer bg-secondary text-white">
    <br>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h4>Vision</h4>
          <p>To provide accessible and high-quality healthcare services to every individual, regardless of their background or location.</p>
        </div>
        <div class="col-md-4">
          <h4>Mission</h4>
          <p>Our mission is to deliver compassionate care, innovate healthcare solutions, and empower communities to lead healthier lives.</p>
        </div>
        <div class="col-md-4">
          <h4>Follow Us</h4>
          <ul class="list-unstyled">
            <li><a href="https://www.facebook.com/james.nzoka.9/" target="_blank"><i class="fa fa-facebook"></i> Facebook</a></li>
            <li><a href="https://twitter.com/home?lang=en" target="_blank"><i class="fa fa-twitter"></i> Twitter</a></li>
            <li><a href="https://www.instagram.com/musyokanzoka8020/" target="_blank"><i class="fa fa-instagram"></i> Instagram</a></li>
          </ul>
        </div>
      </div>
      <hr class="my-4">
      <div class="row">
        <div class="col-md-12 text-center">
          <p>&copy; 2024 Your Health Inc. All rights reserved. | "Your health is your wealth. Take care of it."</p>
        </div>
      </div>
    </div>
  </footer>





  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>

</html>