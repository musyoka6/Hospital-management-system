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



</head>
<style type="text/css">
  #inputbtn:hover {
    cursor: pointer;
  }

  .card {
    background: #f8f9fa;
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

  @media (max-width: 770px) {
    .navbar-brand h4 {
      font-size: 2rem;

    }

    .container-fluid {
      margin-top: 100px;
      margin-bottom: 40px;

    }

    .col-md-7 {
      padding-left: 0;
      text-align: left;
    }

    .card {
      margin-top: 20px;
      margin-left: 6rem;
    }
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
            <a class="nav-link js-scroll-trigger text-white" href="index.php#about" style="color: white;font-family: 'IBM Plex Sans', sans-serif;">
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

  <div class="container-fluid" style="margin-top:60px;margin-bottom:60px;color:#34495E;">
    <div class="row">



      <div class="col-md-7" style="padding-left: 180px; ">
        <div style="-webkit-animation: mover 2s infinite alternate;
    animation: mover 1s infinite alternate;">
          <img src="images/ambulance1.png" alt="" style="width: 20%;padding-left: 40px;margin-top: 150px;margin-left: 45px;margin-bottom:15px">
        </div>

        <div style="color: white;">
          <h4 style="font-family: 'IBM Plex Sans', sans-serif;"><strong> We are here for you!</strong></h4>
        </div>

      </div>

      <div class="col-md-4" style="margin-top: 5%;right: 8%">
        <div class="card" style="font-family: 'IBM Plex Sans', sans-serif;">
          <div class="card-body">
            <center>
              <i class="fa fa-hospital-o fa-3x" aria-hidden="true" style="color:#0062cc"></i>
              <br>
              <h3 style="margin-top: 10%">Patient Login</h3><br>
              <form class="form-group" method="POST" action="func.php">
                <div class="row" style="margin-top: 10%">
                  <div class="col-md-4"><label>Email-ID: </label></div>
                  <div class="col-md-8"><input type="text" name="email" class="form-control" placeholder="enter email ID" required /></div><br><br>
                  <div class="col-md-4" style="margin-top: 8%"><label>Password: </label></div>
                  <div class="col-md-8" style="margin-top: 8%"><input type="password" class="form-control" name="password2" placeholder="enter password" required /></div><br><br><br>
                </div>
                <div class="row">
                  <div class="col-md-4" style="padding-left: 50px;margin-top: 6%;">
                    <center><input type="submit" id="inputbtn" name="patsub" value="Login" class="btn btn-primary"></center>
                  </div>
                  <section style="margin: 40px;"> <a href="pregister.php">Not Registered?</a></section>

                  <!--  <div class="col-md-8" style="margin-top: 10%">
                    <a href="index.php" class="btn btn-primary">Back</a></div> -->
                </div>

              </form>
            </center>
          </div>
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