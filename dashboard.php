<html>
<head>
	<title>HMS</title>
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
<link rel="stylesheet" type="text/css" href="style1.css">
<link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous"> -->

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<style >
     .form-control {
    border-radius: 0.75rem;
}
.enlarge-button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            background-color: #007bff; /* Blue button color */
            color: #ffffff; /* White text color */
            border-radius: 50%; /* Rounded border */
            transition: transform 0.3s ease-in-out; /* Transition for smooth effect */
        }

        .enlarge-button:hover {
            transform: scale(1.1); /* Enlarge the button on hover */
        }

        .pulsate {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            background-color: #007bff; /* Blue button color */
            color: #ffffff; /* White text color */
            border-radius: 50%; /* Rounded border */
            animation: pulsate 2s infinite; /* Pulsating animation */
        }

        @keyframes pulsate {
            0% { transform: scale(1); }
            50% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }
</style>

<script>
    var check = function() {
  if (document.getElementById('password').value ==
    document.getElementById('cpassword').value) {
    document.getElementById('message').style.color = '#5dd05d';
    document.getElementById('message').innerHTML = 'Matched';
  } else {
    document.getElementById('message').style.color = '#f55252';
    document.getElementById('message').innerHTML = 'Not Matching';
  }
}

function alphaOnly(event) {
  var key = event.keyCode;
  return ((key >= 65 && key <= 90) || key == 8 || key == 32);
};

function checklen()
{
    var pass1 = document.getElementById("password");  
    if(pass1.value.length<6){  
        alert("Password must be at least 6 characters long. Try again!");  
        return false;  
  }  
}

</script>
<style>
  .navbar-nav .nav-link {
    position: relative;
    color: white;
    font-family: 'IBM Plex Sans', sans-serif;
    transition: color 0.3s, text-decoration-color 0.3s;
  }

  .navbar-nav .nav-link:hover {
    text-decoration-color: #ff6347; /* Change to the color you prefer */
  }

  .navbar-nav .nav-link::after {
    content: '';
    position: absolute;
    left: 0;
    bottom: -2px;
    width: 0;
    height: 2px;
    background-color: #ff6347; /* Change to the color you prefer */
    transition: width 0.3s;
  }

  .navbar-nav .nav-link:hover::after {
    width: 100%;
  }
</style>
<style>
  .navbar-nav .nav-link {
    position: relative;
    color: white;
    font-family: 'IBM Plex Sans', sans-serif;
    transition: color 0.3s;
  }

  .navbar-nav .nav-link:hover {
    color: #ff6347; /* Change to the color you prefer */
  }

  .navbar-nav .nav-link::after {
    content: '';
    position: absolute;
    left: 0;
    bottom: -2px;
    width: 0;
    height: 2px;
    background-color: transparent; /* Change to transparent */
    transition: width 0.3s, background-color 0.3s; /* Added background-color transition */
  }

  .navbar-nav .nav-link:hover::after {
    width: 100%;
    background-color: #ff6347; /* Change to the color you prefer */
  }


  /* CSS for Navbar with bg-info */
.navbar {
    background-color: #17a2b8; /* Darker shade of bg-info */
}

.navbar-brand,
.navbar-nav .nav-link {
    color: #fff; /* White text for better contrast */
}

/* Active link color */
.navbar-nav .nav-item.active .nav-link {
    color: #ffd700; /* Yellow color for active link */
}

/* Hover link color */
.navbar-nav .nav-link:hover {
    color: #fff; /* White color on hover */
}

/* About Section */
#about .section-heading {
    color: #17a2b8; /* Darker shade of bg-info for section heading */
}

#about .about-line {
    border-top-color: #17a2b8; /* Darker shade of bg-info for line */
}

/* Services Section */
#services .section-heading {
    color: #17a2b8; /* Darker shade of bg-info for section heading */
}

#services .service-icon {
    color: #17a2b8; /* Darker shade of bg-info for icon */
}

/* Gallery Section */
#gallery .section-heading {
    color: #17a2b8; /* Darker shade of bg-info for section heading */
}

#gallery .gallery-icon {
    color: #17a2b8; /* Darker shade of bg-info for icon */
}

/* Footer Section (if applicable) */
#footer {
    background-color: #17a2b8; /* Darker shade of bg-info for footer background */
    color: #fff; /* White text for better contrast */
}

</style>



</head>

<!------ Include the above in your HEAD tag ---------->
<body>
<nav class="navbar navbar-expand-lg navbar-dark fixed-top text-white" id="mainNav" >
    <div class="container">

      <a class="navbar-brand js-scroll-trigger text-white" href="#" style="margin-top: 10px;margin-left:-65px;font-family: 'IBM Plex Sans', sans-serif;"><h4><i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp Jamy Hospital</h4></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a href="index1.php"><button class="pulsate bg-success">Book Appointment</button></a>

      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active" style="margin-right: 40px;">
            <a class="nav-link js-scroll-trigger text-white" href="index.php" style="color: white;font-family: 'IBM Plex Sans', sans-serif;"><h6>Home</h6></a>
          </li>
  
          <li class="nav-item" style="margin-right: 40px;">
            <a class="nav-link js-scroll-trigger text-white" href="#about" style="color: white;font-family: 'IBM Plex Sans', sans-serif;"><h6>About Us</h6></a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger text-white" href="contact.html" style="color: white;font-family: 'IBM Plex Sans', sans-serif;"><h6>Contact</h6></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

	

<div class="container register" style="font-family: 'IBM Plex Sans', sans-serif;">
                <div class="row">
    <div class="col-md-3 register-left" style="margin-top: 10%; right: 5%">
        <h3>Welcome</h3>
        <p class="text-info">Jamy Hospital</p>

        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap JavaScript and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<!-- Carousel -->
<div id="wordImageCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="images/hsptl.jpg" height="250vh" width="100%" class="d-block w-100" alt="Image 1">
            <div class="carousel-caption">
                <h4 class="text-warning">Quality</h4>
            </div>
        </div>
        <div class="carousel-item">
            <img src="images/ps.jpg" height="250vh" width="100%" class="d-block w-100" alt="Image 2">
            <div class="carousel-caption">
                <h4 class="text-warning">Compassion</h4>
            </div>
        </div>
        <div class="carousel-item">
            <img src="images/hu.webp" height="250vh" width="100%" class="d-block w-100" alt="Image 3">
            <div class="carousel-caption">
                <h4 class="text-warning">Excellence</h4>
            </div>
        </div>
        <!-- Add more items as needed -->
    </div>

    <!-- Previous and Next buttons -->
    <a class="carousel-control-prev" href="#wordImageCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#wordImageCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
    </div>

                    <div class="col-md-9 register-right" style="margin-top: 40px;left: 80px;">
                        <ul class="nav nav-tabs nav-justified bg-info" id="myTab" role="tablist" style="width: 40%;">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Patient</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Doctor</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#admin" role="tab" aria-controls="admin" aria-selected="false">Receptionist</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Register as Patient</h3>
                                <form method="post" action="func2.php">
                                <div class="row register-form">
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control"  placeholder="First Name *" name="fname"  onkeydown="return alphaOnly(event);" required/>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Your Email *" name="email"  />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password *" id="password" name="password" onkeyup='check();' required/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="maxl">
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="Male" checked>
                                                    <span> Male </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="Female">
                                                    <span>Female </span> 
                                                </label>
                                            </div>
                                            <a href="index1.php">Already have an account?</a>
                                        </div>
                                    </div>
                                
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Last Name *" name="lname" onkeydown="return alphaOnly(event);" required/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <input type="tel" minlength="10" maxlength="10" name="contact" class="form-control" placeholder="Your Phone *"  />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control"  id="cpassword" placeholder="Confirm Password *" name="cpassword"  onkeyup='check();' required/><span id='message'></span>
                                        </div>
                                        <input type="submit" class="btnRegister" name="patsub1" onclick="return checklen();" value="Register"/>
                                    </div>

                                </div>
                            </form>
                            </div>

                            
                            <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <h3  class="register-heading">Login as Doctor</h3>
                                <form method="post" action="func1.php">
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="User Name *" name="username3" onkeydown="return alphaOnly(event);" required/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password *" name="password3" required/>
                                        </div>
                                        
                                        <input type="submit" class="btnRegister" name="docsub1" value="Login"/>
                                    </div>
                                </div>
                            </form>
                            </div>


                            <div class="tab-pane fade show" id="admin" role="tabpanel" aria-labelledby="profile-tab">
                                <h3  class="register-heading">Login as Admin</h3>
                                <form method="post" action="func3.php">
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="User Name *" name="username1" onkeydown="return alphaOnly(event);" required/>
                                        </div>
                                        


                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password *" name="password2" required/>
                                        </div>
                                        
                                        <input type="submit" class="btnRegister" name="adsub" value="Login"/>
                                    </div>
                                </div>
                            </form>
                            </div>
                        </div>

                    </div>
                </div>

            </div>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-jpRj5+5VPLfi6qs9eP4IYJmaOfnq8dG86c0v1f8+uKDi53ZwPgg5nqZaE6UJ+j6uI5EGk1dzlXPCa17zMPRqEw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        /* Custom CSS */
        .about-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 30px;
        }

        .about-line {
            flex-grow: 1;
            border: none;
            border-top: 2px solid #007bff; /* Blue color for line */
            margin: 0 10px;
        }

        .card {
            transition: all 0.3s ease;
            border-radius: 15px;
            border: none;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .card:hover {
            box-shadow: 0 6px 8px rgba(0, 0, 0, 0.15);
        }

        .card-title {
            color: #007bff;
        }

        .section-subheading {
            font-size: 1.2rem;
            font-style: italic;
            margin-bottom: 40px;
        }

        /* Media Query for smaller devices */
        @media (max-width: 768px) {
            .about-icon {
                margin-bottom: 20px;
            }
        }
    </style>

    <section id="about" class="section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">About Us</h2>
                    <div class="about-icon">
                        <hr class="about-line">
                        <i class="fas fa-info-circle fa-2x h1 text-warning"></i> <!-- Updated icon class -->
                        <hr class="about-line">
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Our Mission</h5>
                                    <p class="card-text">To provide accessible and high-quality healthcare services to every individual, regardless of their background or location.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Our Vision</h5>
                                    <p class="card-text">To be a leader in healthcare innovation, delivering compassionate care and empowering communities to lead healthier lives.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Our Values</h5>
                                    <ul class="list-unstyled">
                                        <li>Compassion</li>
                                        <li>Excellence</li>
                                        <li>Integrity</li>
                                        <!-- Add more values as needed -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Testimonials -->
<h3 class="section-subheading text-muted">What Our Patients Say</h3>
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <img src="img/dummy/img-1.png"  class="card-img-top rounded-circle" alt="John Doe">
            <div class="card-body">
                <h5 class="card-title">John Doe</h5>
                <p class="card-text">"The care I received at Jamy Hospital was exceptional. The staff went above and beyond to ensure my comfort and recovery."</p>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <img src="img/dummy/img-3.png" class="card-img-top rounded-circle" alt="Jane Smith">
            <div class="card-body">
                <h5 class="card-title">Jane Smith</h5>
                <p class="card-text">"I'm grateful for the professionalism and kindness shown by the doctors and nurses during my stay. Highly recommended!"</p>
            </div>
        </div>
    </div>
</div>

                    <br>
                </div>
            </div>
        </div>
    </section>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-jpRj5+5VPLfi6qs9eP4IYJmaOfnq8dG86c0v1f8+uKDi53ZwPgg5nqZaE6UJ+j6uI5EGk1dzlXPCa17zMPRqEw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        
        /* Custom CSS */
        .gallery-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }

        .gallery-line {
            flex-grow: 1;
            border: none;
            border-top: 2px solid black;
            margin: 0 10px;
        }

        .gallery-img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            transition: transform 0.3s ease;
        }

        .gallery-img:hover {
            transform: scale(1.05);
        }

        .gallery-item {
            margin-bottom: 20px;
        }

        /* Media Query for smaller devices */
        @media (max-width: 768px) {
            .gallery-img {
                height: 40vh; /* Adjusted height for smaller screens */
            }
        }
    </style>
    <!-- Gallery Section -->
    <section id="gallery" class="section">
        <br>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase text-white">Gallery</h2>
                    <div class="gallery-icon">
                        <hr class="gallery-line">
                        <i class="fa fa-picture-o fa-2x text-warning"></i>
                        <hr class="gallery-line">
                    </div>
                </div>
            </div>
            <!-- Image Gallery -->
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="gallery-item">
                        <img src="img/dummy/img-1.png" class="img-fluid gallery-img" alt="Gallery Image 1">
                    </div>
                    <div class="gallery-item">
                        <img src="img/dummy/img-5.png" class="img-fluid gallery-img" alt="Gallery Image 2">
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="gallery-item">
                        <img src="img/dummy/img-3.png" class="img-fluid gallery-img" alt="Gallery Image 3">
                    </div>
                    <div class="gallery-item">
                        <img src="img/dummy/img-4.png" class="img-fluid gallery-img" alt="Gallery Image 4">
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="gallery-item">
                        <img src="img/dummy/img-1.png" class="img-fluid gallery-img" alt="Gallery Image 5">
                    </div>
                    <div class="gallery-item">
                        <img src="img/dummy/img-6.png" class="img-fluid gallery-img" alt="Gallery Image 6">
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="gallery-item">
                        <img src="images/fu.jpg" class="img-fluid gallery-img" alt="Gallery Image 5">
                    </div>
                    <div class="gallery-item">
                        <img src="images/da.jpg" class="img-fluid gallery-img" alt="Gallery Image 6">
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="gallery-item">
                        <img src="images/gu.webp" class="img-fluid gallery-img" alt="Gallery Image 5">
                    </div>
                    <div class="gallery-item">
                        <img src="images/hsptl.jpg" class="img-fluid gallery-img" alt="Gallery Image 6">
                    </div>
                    <div class="gallery-item">
                        <img src="images/ps2.jpg" class="img-fluid gallery-img" alt="Gallery Image 5">
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="gallery-item">
                        <img src="images/ps2.jpg" class="img-fluid gallery-img" alt="Gallery Image 5">
                    </div>
                    <div class="gallery-item">
                        <img src="images/ps1.jpg" class="img-fluid gallery-img" alt="Gallery Image 6">
                    </div>
                    <div class="gallery-item">
                        <img src="images/ps2.jpg" class="img-fluid gallery-img" alt="Gallery Image 5">
                    </div>
                    <div class="gallery-item">
                        <img src="images/ps2.jpg" class="img-fluid gallery-img" alt="Gallery Image 5">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <style>
    .services-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 20px;
    }

    .services-line {
        flex-grow: 1;
        border: none;
        border-top: 2px solid black;
        margin: 0 10px;
    }

    .service-card {
        background-color: #f8f9fa;
        border-radius: 10px;
        padding: 20px;
        margin-bottom: 20px;
        transition: transform 0.3s ease-in-out;
    }

    .service-card:hover {
        transform: translateY(-5px);
    }

    .service-card .card-title {
        font-size: 20px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .service-card .card-text {
        font-size: 16px;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }
</style>

<section id="services" class="section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">Our Services</h2>
                <div class="services-icon">
                    <hr class="services-line">
                    <i class="fa fa-heartbeat fa-2x text-warning"></i>
                    <hr class="services-line">
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="service-card">
                            <h5 class="card-title">Medical Consultation</h5>
                            <p class="card-text">Expert medical consultation with experienced physicians.</p>
                            <a href="#" class="btn btn-primary">Book Now</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-card">
                            <h5 class="card-title">Diagnostic Imaging</h5>
                            <p class="card-text">State-of-the-art diagnostic imaging services for accurate diagnosis.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-card">
                            <h5 class="card-title">Surgical Procedures</h5>
                            <p class="card-text">Advanced surgical procedures performed by skilled surgeons.</p>
                            <a href="#" class="btn btn-primary">Explore Now</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-card">
                            <h5 class="card-title">Pediatric Care</h5>
                            <p class="card-text">Specialized medical care for infants, children, and adolescents.</p>
                            <a href="#" class="btn btn-primary">Book Now</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-card">
                            <h5 class="card-title">Physical Therapy</h5>
                            <p class="card-text">Personalized rehabilitation and physical therapy services.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-card">
                            <h5 class="card-title">Nutritional Counseling</h5>
                            <p class="card-text">Expert guidance on nutrition and healthy eating habits.</p>
                            <a href="#" class="btn btn-primary">Explore Now</a>
                        </div>
                    </div>
                    <!-- Add more service cards as needed -->
                </div>
            </div>
        </div>
    </div>
</section>



<style>
  .team-member {
    position: relative;
    overflow: hidden;
}

.team-img {
    width: 100%;
    height: auto;
    transition: transform 0.3s ease-in-out;
}

.overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    opacity: 0;
    transition: opacity 0.3s ease-in-out;
    display: flex;
    align-items: center;
    justify-content: center;
}

.social-icons a {
    color: #fff;
    margin: 0 5px;
    font-size: 24px;
    transition: transform 0.3s ease-in-out;
}

.social-icons a:hover {
    transform: scale(1.2);
}

.team-member:hover .overlay {
    opacity: 1;
}

.team-member:hover .team-img {
    transform: scale(1.1);
}

</style>

<!-- Team Section -->
<!-- Team Section -->
<section id="team" class="section">
  <br><br>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase text-white">Our Team</h2>
                <div class="gallery-icon">
                    <hr class="gallery-line">
                    <i class="fa fa-users fa-2x text-warning"></i>
                    <hr class="gallery-line text-warning">
                </div>
            </div>
        </div>
        <!-- Add team members here -->
        <div class="row">
            <div class="col-md-4">
                <div class="team-member">
                    <img src="img/dummy/img-6.png" class="img-fluid team-img" alt="Team Member 1" style="height: 60vh;width:100%;">
                    <div class="overlay">
                        <div class="social-icons">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="team-member">
                    <img src="img/dummy/img-1.png" class="img-fluid team-img" alt="Team Member 1" style="height: 60vh;width:100%;">
                    <div class="overlay">
                        <div class="social-icons">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Add more team members here -->
            <div class="col-md-4">
                <div class="team-member">
                    <img src="img/dummy/img-4.png" class="img-fluid team-img" alt="Team Member 2" style="height: 60vh;width:100%;">
                    <div class="overlay">
                        <div class="social-icons">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>





            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

    <script>
        // Activate the carousel
        $(document).ready(function () {
            $('#wordImageCarousel').carousel();
        });
    </script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>




    
        <style>
            .card {
  transition: transform 0.3s ease-in-out;
}

.card:hover {
  transform: translateY(-5px);
}

        </style>
       
<footer class="footer bg-secondary text-white">
<br><br>
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
          <li><a href="#"><i class="fa fa-facebook"></i> Facebook</a></li>
          <li><a href="#"><i class="fa fa-twitter"></i> Twitter</a></li>
          <li><a href="#"><i class="fa fa-instagram"></i> Instagram</a></li>
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


    </body>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    </html>