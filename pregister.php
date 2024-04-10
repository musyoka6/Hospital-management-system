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

    <style>
        body {
            /* background: -webkit-linear-gradient(left, #3931af, #00c6ff); */
            background-size: cover;
            background-image: url(images/ku.avif);
        }

        .form-control {
            border-radius: 0.75rem;
        }

        .enlarge-button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            background-color: #007bff;
            /* Blue button color */
            color: #ffffff;
            /* White text color */
            border-radius: 50%;
            /* Rounded border */
            transition: transform 0.3s ease-in-out;
            /* Transition for smooth effect */
        }

        .enlarge-button:hover {
            transform: scale(1.1);
            /* Enlarge the button on hover */
        }

        .pulsate {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            background-color: #007bff;
            /* Blue button color */
            color: #ffffff;
            /* White text color */
            border-radius: 50%;
            /* Rounded border */
            animation: pulsate 2s infinite;
            /* Pulsating animation */
        }

        @keyframes pulsate {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.1);
            }

            100% {
                transform: scale(1);
            }
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

        function checklen() {
            var pass1 = document.getElementById("password");
            if (pass1.value.length < 6) {
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
            text-decoration-color: #ff6347;
            /* Change to the color you prefer */
        }

        .navbar-nav .nav-link::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -2px;
            width: 0;
            height: 2px;
            background-color: #ff6347;
            /* Change to the color you prefer */
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
            color: #ff6347;
            /* Change to the color you prefer */
        }

        .navbar-nav .nav-link::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -2px;
            width: 0;
            height: 2px;
            background-color: transparent;
            /* Change to transparent */
            transition: width 0.3s, background-color 0.3s;
            /* Added background-color transition */
        }

        .navbar-nav .nav-link:hover::after {
            width: 100%;
            background-color: #ff6347;
            /* Change to the color you prefer */
        }


        /* CSS for Navbar with bg-info */
        .navbar {
            background-color: maroon;
            /* Darker shade of bg-info */
        }

        .navbar-brand,
        .navbar-nav .nav-link {
            color: white;
            /* White text for better contrast */
        }

        /* Active link color */
        .navbar-nav .nav-item.active .nav-link {
            color: #ffd700;
            /* Yellow color for active link */
        }

        /* Hover link color */
        .navbar-nav .nav-link:hover {
            color: #fffb;
            /* White color on hover */
        }

        /* About Section */
        #about .section-heading {
            color: #17a2b8;
            /* Darker shade of bg-info for section heading */
        }

        #about .about-line {
            border-top-color: #17a2b8;
            /* Darker shade of bg-info for line */
        }

        /* Services Section */
        #services .section-heading {
            color: #17a2b8;
            /* Darker shade of bg-info for section heading */
        }

        #services .service-icon {
            color: #17a2b8;
            /* Darker shade of bg-info for icon */
        }

        /* Gallery Section */
        #gallery .section-heading {
            color: #17a2b8;
            /* Darker shade of bg-info for section heading */
        }

        #gallery .gallery-icon {
            color: #17a2b8;
            /* Darker shade of bg-info for icon */
        }

        /* Footer Section (if applicable) */
        #footer {
            background-color: #17a2b8;
            /* Darker shade of bg-info for footer background */
            color: #fff;
            /* White text for better contrast */
        }

        .visiting {

            text-align: left;
            margin: 0.5rem;
            border-radius: 0.5rem;
            color: white;
            padding: 0.2rem;
            height: fit-content;
            font-size: 25px;
        }
    </style>



</head>

<!------ Include the above in your HEAD tag ---------->

<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top text-white" id="mainNav">
        <div class="container">

            <h1 class="logo me-auto visiting "><a class="text-white" href="index.php">
                    <img src="./images/logo.png" style="width:5rem;" /> <br>JAMY HOSPITAL
                </a></h1>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a href="index1.php"><button class="pulsate bg-success">Book Appointment</button></a>

            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active" style="margin-right: 40px;">
                        <a class="nav-link js-scroll-trigger text-white" href="index.php" style="color: white;font-family: 'IBM Plex Sans', sans-serif;">
                            <h6>Home</h6>
                        </a>
                    </li>

                    <li class="nav-item" style="margin-right: 40px;">
                        <a class="nav-link js-scroll-trigger text-white" href="index.php#about" style="color: white;font-family: 'IBM Plex Sans', sans-serif;">
                            <h6>About Us</h6>
                        </a>
                    </li>
                    <li class="nav-item" style="margin-right: 40px;">
                        <a class="nav-link js-scroll-trigger text-white" href="index.php#gallery" style="color: white;font-family: 'IBM Plex Sans', sans-serif;">
                            <h6>Gallery</h6>
                        </a>
                    </li>
                    <li class="nav-item" style="margin-right: 40px;">
                        <a class="nav-link js-scroll-trigger text-white" href="index.php#services" style="color: white;font-family: 'IBM Plex Sans', sans-serif;">
                            <h6>Services</h6>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger text-white" href="contact.html" style="color: white;font-family: 'IBM Plex Sans', sans-serif;">
                            <h6>Contact</h6>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <div class="container register" style="font-family: 'IBM Plex Sans', sans-serif;">
        <div class="row">
            <div class="col-md-3 register-left" style="margin-top: 10%; right: 5%">
                <h3>Welcome</h3>
                <p class="text-info" style="text-decoration-color: #ff6347;">Jamy Hospital</p>

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

            <div class="col-md-8 register-right" style="margin-top: 100px;left: 80px;">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">Register as Patient</h3>
                        <form method="post" action="func2.php">
                            <div class="row register-form">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="First Name *" name="fname" onkeydown="return alphaOnly(event);" required />
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Your Email *" name="email" />
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password *" id="password" name="password" onkeyup='check();' required />
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
                                        <input type="text" class="form-control" placeholder="Last Name *" name="lname" onkeydown="return alphaOnly(event);" required />
                                    </div>

                                    <div class="form-group">
                                        <input type="tel" minlength="10" maxlength="10" name="contact" class="form-control" placeholder="Your Phone *" />
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="cpassword" placeholder="Confirm Password *" name="cpassword" onkeyup='check();' required /><span id='message'></span>
                                    </div>
                                    <input type="submit" class="btnRegister" name="patsub1" onclick="return checklen();" value="Register" />
                                </div>

                            </div>
                        </form>
                    </div>


                    <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <h3 class="register-heading">Login as Doctor</h3>
                        <form method="post" action="func1.php">
                            <div class="row register-form">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="User Name *" name="username3" onkeydown="return alphaOnly(event);" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password *" name="password3" required />
                                    </div>

                                    <input type="submit" class="btnRegister" name="docsub1" value="Login" />
                                </div>
                            </div>
                        </form>
                    </div>


                    <div class="tab-pane fade show" id="admin" role="tabpanel" aria-labelledby="profile-tab">
                        <h3 class="register-heading">Login as Admin</h3>
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

    </div>



    </section>





    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

    <script>
        // Activate the carousel
        $(document).ready(function() {
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
    <!-- 
<?php
// Define your database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hms";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle payment request
function pay($id, $phone, $price)
{
    // Get necessary payment details from the form
    $amount = $price;

    // Make the Mpesa API request
    $access_token = "YOUR_ACCESS_TOKEN";
    $api_url = "https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest";
    $headers = array(
        "Authorization: Bearer $access_token",
        "Content-Type: application/json"
    );
    $payload = json_encode(array(
        "BusinessShortCode" => "LipanaMpesaPassword.Business_short_code",
        "Password" => "LipanaMpesaPassword.decode_password",
        "Timestamp" => date('YmdHis'),
        "TransactionType" => "CustomerPayBillOnline",
        "Amount" => $amount,
        "PartyA" => $phone,
        "PartyB" => "174379",
        "PhoneNumber" => $phone,
        "CallBackURL" => "https://example.com/mpesa/callback",
        "AccountReference" => "PAYMENT001",
        "TransactionDesc" => "School fees"
    ));

    $ch = curl_init($api_url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $response = curl_exec($ch);
    curl_close($ch);

    // Process the response
    if ($response !== false) {
        // Payment request successful, redirect to download URL
        // echo "Payment Successfull";
        exit();
    } else {
        echo "Payment request failed";
    }
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get necessary payment details from the form
    $phone = $_POST['phone'];
    $price = $_POST['price'];
    $id = $_POST['id'];

    // Call the payment function
    pay($id, $phone, $price);
}
?>
<!-- HTML Form -->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="mb-4">Pay for PDF Download</h2>
                <form method="post" action="">
                    <div class="form-group">
                        <label for="amount">Total Amount:</label>
                        <input name="price" value="<?php echo $price['price']; ?>" class="form-control" readonly type="text">
                        <input type="hidden" name="id" value="<?php echo $price['id']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number:</label>
                        <input type="text" name="phone" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-info mt-4">Pay and Download</button>
                </form>
            </div>
        </div>
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

</html>