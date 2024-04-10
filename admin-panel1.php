<!DOCTYPE html>
<?php
$con = mysqli_connect("localhost", "root", "", "myhmsdb");

// include('newfunc.php');

if (isset($_POST['docsub'])) {
  $doctor = $_POST['doctor'];
  $dpassword = $_POST['dpassword'];
  $demail = $_POST['demail'];
  $spec = $_POST['special'];
  $docFees = $_POST['docFees'];

  $query = "insert into doctb(username,password,email,spec,docFees)values('$doctor','$dpassword','$demail','$spec','$docFees')";
  $result = mysqli_query($con, $query);
  if ($result) {
    echo "<script>alert('Doctor added successfully!');</script>";
  }
}


if (isset($_POST['docsub1'])) {
  $demail = $_POST['demail'];
  $query = "delete from doctb where email='$demail';";
  $result = mysqli_query($con, $query);
  if ($result) {
    echo "<script>alert('Doctor removed successfully!');</script>";
  } else {
    echo "<script>alert('Unable to delete!');</script>";
  }
}


?>
<html lang="en">

<head>


  <!-- Required meta tags -->
  <meta charset="utf-8">
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

</head>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Jamy</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets1/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets1/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets1/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets1/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets1/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets1/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets1/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets1/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets1/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets1/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medilab
  * Updated: Jan 29 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <style>
    body {
      /* background: -webkit-linear-gradient(left, #3931af, #00c6ff); */
      background-size: cover;
      background-image: url(images/ku.avif);
    }
  </style>

</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope"></i> <a href="mailto:contact@example.com">contact@example.com</a>
        <i class="bi bi-phone"></i> +254 700000000
      </div>
      <div class="d-none d-lg-flex social-links align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top" style="background-color:maroon;">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a class="text-white" href="index.html">JAMY HOSPTAL</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active text-white" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto text-white" href="index1.php">Patient</a></li>
          <li><a class="nav-link scrollto text-white" href="doctorslogin.php">Doctor</a></li>
          <li><a class="nav-link scrollto text-white" href="#">Receptionist</a></li>
          <li><a class="btn btn-danger text-white text-white" href="logout1.php">Logout</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <style type="text/css">
    button:hover {
      cursor: pointer;
    }

    #inputbtn:hover {
      cursor: pointer;
    }
  </style>
  <br><br>

  <body style="padding-top:50px;">
    <div class="container-fluid" style="margin-top:50px;"><br><br><br>
      <h3 class="text-white" style="margin-left: 40%; padding-bottom: 20px;font-family: 'IBM Plex Sans', sans-serif;"> WELCOME RECEPTIONIST </h3>
      <div class="row">
        <div class="col-md-4" style="max-width:25%;margin-top: 3%;">
          <div class="list-group" id="list-tab" role="tablist">
            <a class="list-group-item list-group-item-action active" id="list-dash-list" data-toggle="list" href="#list-dash" role="tab" aria-controls="home">Dashboard</a>
            <a class="list-group-item list-group-item-action" href="#list-doc" id="list-doc-list" role="tab" aria-controls="home" data-toggle="list">Doctor List</a>
            <a class="list-group-item list-group-item-action" href="#list-pat" id="list-pat-list" role="tab" data-toggle="list" aria-controls="home">Patient List</a>
            <a class="list-group-item list-group-item-action" href="#list-app" id="list-app-list" role="tab" data-toggle="list" aria-controls="home">Appointment Details</a>
            <a class="list-group-item list-group-item-action" href="#list-pres" id="list-pres-list" role="tab" data-toggle="list" aria-controls="home">Prescription List</a>
            <a class="list-group-item list-group-item-action" href="#list-settings" id="list-adoc-list" role="tab" data-toggle="list" aria-controls="home">Add Doctor</a>
            <a class="list-group-item list-group-item-action" href="#list-settings1" id="list-ddoc-list" role="tab" data-toggle="list" aria-controls="home">Delete Doctor</a>
            <a class="list-group-item list-group-item-action" href="#list-mes" id="list-mes-list" role="tab" data-toggle="list" aria-controls="home">Queries</a>

          </div><br>
        </div>

        <div class="col-md-8" style="margin-top: 3%;">
          <div class="tab-content" id="nav-tabContent" style="width: 950px;">



            <div class="tab-pane fade show active" id="list-dash" role="tabpanel" aria-labelledby="list-dash-list">
              <div class="container-fluid container-fullw bg-white">
                <br><br><br><br>
                <div class="row">
                  <div class="col-sm-4">
                    <div class="panel panel-white no-radius text-center">
                      <div class="panel-body">
                        <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-users fa-stack-1x fa-inverse"></i> </span>
                        <h4 class="StepTitle" style="margin-top: 5%;">Doctor List</h4>
                        <script>
                          function clickDiv(id) {
                            document.querySelector(id).click();
                          }
                        </script>
                        <p class="links cl-effect-1">
                          <a href="#list-doc" onclick="clickDiv('#list-doc-list')">
                            View Doctors
                          </a>
                        </p>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-4" style="left: -3%">
                    <div class="panel panel-white no-radius text-center">
                      <div class="panel-body">
                        <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-users fa-stack-1x fa-inverse"></i> </span>
                        <h4 class="StepTitle" style="margin-top: 5%;">Patient List</h4>

                        <p class="cl-effect-1">
                          <a href="#app-hist" onclick="clickDiv('#list-pat-list')">
                            View Patients
                          </a>
                        </p>
                      </div>
                    </div>
                  </div>


                  <div class="col-sm-4">
                    <div class="panel panel-white no-radius text-center">
                      <div class="panel-body">
                        <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-paperclip fa-stack-1x fa-inverse"></i> </span>
                        <h4 class="StepTitle" style="margin-top: 5%;">Appointment Details</h4>

                        <p class="cl-effect-1">
                          <a href="#app-hist" onclick="clickDiv('#list-app-list')">
                            View Appointments
                          </a>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-4" style="left: 13%;margin-top: 5%;">
                    <div class="panel panel-white no-radius text-center">
                      <div class="panel-body">
                        <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-list-ul fa-stack-1x fa-inverse"></i> </span>
                        <h4 class="StepTitle" style="margin-top: 5%;">Prescription List</h4>

                        <p class="cl-effect-1">
                          <a href="#list-pres" onclick="clickDiv('#list-pres-list')">
                            View Prescriptions
                          </a>
                        </p>
                      </div>
                    </div>
                  </div>


                  <div class="col-sm-4" style="left: 18%;margin-top: 5%">
                    <div class="panel panel-white no-radius text-center">
                      <div class="panel-body">
                        <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-plus fa-stack-1x fa-inverse"></i> </span>
                        <h4 class="StepTitle" style="margin-top: 5%;">Manage Doctors</h4>

                        <p class="cl-effect-1">
                          <a href="#app-hist" onclick="clickDiv('#list-adoc-list')">Add Doctors</a>
                          &nbsp|
                          <a href="#app-hist" onclick="clickDiv('#list-ddoc-list')">
                            Delete Doctors
                          </a>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>




              </div>
            </div>



            <br><br><br><br>





            <div class="tab-pane fade" id="list-doc" role="tabpanel" aria-labelledby="list-home-list">


              <div class="col-md-8">
                <form class="form-group" action="doctorsearch.php" method="post">
                  <div class="row">
                    <div class="col-md-10"><input type="text" name="doctor_contact" placeholder="Enter Email ID" class="form-control"></div>
                    <div class="col-md-2"><input type="submit" name="doctor_search_submit" class="btn btn-primary" value="Search"></div>
                  </div>
                </form>
              </div>
              <style>
                table {
                  width: 100%;
                  border-collapse: collapse;
                }

                th,
                td {
                  padding: 10px;
                  text-align: left;
                  border-bottom: 1px solid #ddd;
                  /* Subtle border for rows */
                }

                th {
                  background-color: #f2f2f2;
                  /* Light background color for header */
                }

                tr:nth-child(even) {
                  background-color: #f9f9f9;
                  /* Alternating row colors */
                }
              </style>
              <table class="table table-hover text-success">
                <thead>
                  <tr>
                    <th scope="col">Doctor Name</th>
                    <th scope="col">Specialization</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Fees</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $con = mysqli_connect("localhost", "root", "", "myhmsdb");
                  global $con;
                  $query = "select * from doctb";
                  $result = mysqli_query($con, $query);
                  while ($row = mysqli_fetch_array($result)) {
                    $username = $row['username'];
                    $spec = $row['spec'];
                    $email = $row['email'];
                    $password = $row['password'];
                    $docFees = $row['docFees'];

                    echo "<tr>
                        <td>$username</td>
                        <td>$spec</td>
                        <td>$email</td>
                        <td>$password</td>
                        <td>$docFees</td>
                      </tr>";
                  }

                  ?>
                </tbody>
              </table>
              <br>
            </div>


            <div class="tab-pane fade" id="list-pat" role="tabpanel" aria-labelledby="list-pat-list">

              <div class="col-md-8">
                <form class="form-group" action="patientsearch.php" method="post">
                  <div class="row">
                    <div class="col-md-10"><input type="text" name="patient_contact" placeholder="Enter Contact" class="form-control"></div>
                    <div class="col-md-2"><input type="submit" name="patient_search_submit" class="btn btn-primary" value="Search"></div>
                  </div>
                </form>
              </div>

              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">Patient ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Password</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $con = mysqli_connect("localhost", "root", "", "myhmsdb");
                  global $con;
                  $query = "select * from patreg";
                  $result = mysqli_query($con, $query);
                  while ($row = mysqli_fetch_array($result)) {
                    $pid = $row['pid'];
                    $fname = $row['fname'];
                    $lname = $row['lname'];
                    $gender = $row['gender'];
                    $email = $row['email'];
                    $contact = $row['contact'];
                    $password = $row['password'];

                    echo "<tr>
                        <td>$pid</td>
                        <td>$fname</td>
                        <td>$lname</td>
                        <td>$gender</td>
                        <td>$email</td>
                        <td>$contact</td>
                        <td>$password</td>
                      </tr>";
                  }

                  ?>
                </tbody>
              </table>
              <br>
            </div>


            <div class="tab-pane fade" id="list-pres" role="tabpanel" aria-labelledby="list-pres-list">

              <div class="col-md-8">

                <div class="row">



                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">Doctor</th>
                        <th scope="col">Patient ID</th>
                        <th scope="col">Appointment ID</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Appointment Date</th>
                        <th scope="col">Appointment Time</th>
                        <th scope="col">Disease</th>
                        <th scope="col">Allergy</th>
                        <th scope="col">Prescription</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $con = mysqli_connect("localhost", "root", "", "myhmsdb");
                      global $con;
                      $query = "select * from prestb";
                      $result = mysqli_query($con, $query);
                      while ($row = mysqli_fetch_array($result)) {
                        $doctor = $row['doctor'];
                        $pid = $row['pid'];
                        $ID = $row['ID'];
                        $fname = $row['fname'];
                        $lname = $row['lname'];
                        $appdate = $row['appdate'];
                        $apptime = $row['apptime'];
                        $disease = $row['disease'];
                        $allergy = $row['allergy'];
                        $pres = $row['prescription'];


                        echo "<tr>
                        <td>$doctor</td>
                        <td>$pid</td>
                        <td>$ID</td>
                        <td>$fname</td>
                        <td>$lname</td>
                        <td>$appdate</td>
                        <td>$apptime</td>
                        <td>$disease</td>
                        <td>$allergy</td>
                        <td>$pres</td>
                      </tr>";
                      }

                      ?>
                    </tbody>
                  </table>
                  <br>
                </div>
              </div>
            </div>




            <div class="tab-pane fade" id="list-app" role="tabpanel" aria-labelledby="list-pat-list">

              <div class="col-md-8">
                <form class="form-group" action="appsearch.php" method="post">
                  <div class="row">
                    <div class="col-md-10"><input type="text" name="app_contact" placeholder="Enter Contact" class="form-control"></div>
                    <div class="col-md-2"><input type="submit" name="app_search_submit" class="btn btn-primary" value="Search"></div>
                  </div>
                </form>
              </div>

              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">Appointment ID</th>
                    <th scope="col">Patient ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Doctor Name</th>
                    <th scope="col">Consultancy Fees</th>
                    <th scope="col">Appointment Date</th>
                    <th scope="col">Appointment Time</th>
                    <th scope="col">Appointment Status</th>
                  </tr>
                </thead>
                <tbody>
                  <?php

                  $con = mysqli_connect("localhost", "root", "", "myhmsdb");
                  global $con;

                  $query = "select * from appointmenttb;";
                  $result = mysqli_query($con, $query);
                  while ($row = mysqli_fetch_array($result)) {
                  ?>
                    <tr>
                      <td><?php echo $row['ID']; ?></td>
                      <td><?php echo $row['pid']; ?></td>
                      <td><?php echo $row['fname']; ?></td>
                      <td><?php echo $row['lname']; ?></td>
                      <td><?php echo $row['gender']; ?></td>
                      <td><?php echo $row['email']; ?></td>
                      <td><?php echo $row['contact']; ?></td>
                      <td><?php echo $row['doctor']; ?></td>
                      <td><?php echo $row['docFees']; ?></td>
                      <td><?php echo $row['appdate']; ?></td>
                      <td><?php echo $row['apptime']; ?></td>
                      <td>
                        <?php if (($row['userStatus'] == 1) && ($row['doctorStatus'] == 1)) {
                          echo "Active";
                        }
                        if (($row['userStatus'] == 0) && ($row['doctorStatus'] == 1)) {
                          echo "Cancelled by Patient";
                        }

                        if (($row['userStatus'] == 1) && ($row['doctorStatus'] == 0)) {
                          echo "Cancelled by Doctor";
                        }
                        ?></td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
              <br>
            </div>

            <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">...</div>

            <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
              <form class="form-group" method="post" action="admin-panel1.php">
                <div class="row">
                  <div class="col-md-4"><label style="color: white;">Doctor Name:</label></div>
                  <div class="col-md-8"><input type="text" class="form-control" name="doctor" onkeydown="return alphaOnly(event);" required></div><br><br>
                  <div class="col-md-4"><label style="color: white;">Specialization:</label></div>
                  <div class="col-md-8">
                    <select name="special" class="form-control" id="special" required="required">
                      <option value="head" name="spec" disabled selected>Select Specialization</option>
                      <option value="General" name="spec">General</option>
                      <option value="Cardiologist" name="spec">Cardiologist</option>
                      <option value="Neurologist" name="spec">Neurologist</option>
                      <option value="Pediatrician" name="spec">Pediatrician</option>
                    </select>
                  </div><br><br>
                  <div class="col-md-4"><label style="color: white;">Email ID:</label></div>
                  <div class="col-md-8"><input type="email" class="form-control" name="demail" required></div><br><br>
                  <div class="col-md-4" style="color: white;"><label>Password:</label></div>
                  <div class="col-md-8"><input type="password" class="form-control" onkeyup='check();' name="dpassword" id="dpassword" required></div><br><br>
                  <div class="col-md-4"><label style="color: white;">Confirm Password:</label></div>
                  <div class="col-md-8" id='cpass'><input type="password" class="form-control" onkeyup='check();' name="cdpassword" id="cdpassword" required>&nbsp &nbsp<span id='message'></span> </div><br><br>


                  <div class="col-md-4"><label style="color: white;">Consultancy Fees:</label></div>
                  <div class="col-md-8"><input type="text" class="form-control" name="docFees" required></div><br><br>
                </div>
                <input type="submit" name="docsub" value="Add Doctor" class="btn btn-primary">
              </form>
            </div>

            <div class="tab-pane fade" id="list-settings1" role="tabpanel" aria-labelledby="list-settings1-list">
              <form class="form-group" method="post" action="admin-panel1.php">
                <div class="row">

                  <div class="col-md-4"><label>Email ID:</label></div>
                  <div class="col-md-8"><input type="email" class="form-control" name="demail" required></div><br><br>

                </div>
                <input type="submit" name="docsub1" value="Delete Doctor" class="btn btn-primary" onclick="confirm('do you really want to delete?')">
              </form>
            </div>


            <div class="tab-pane fade" id="list-attend" role="tabpanel" aria-labelledby="list-attend-list">...</div>

            <div class="tab-pane fade" id="list-mes" role="tabpanel" aria-labelledby="list-mes-list">

              <div class="col-md-8">
                <form class="form-group" action="messearch.php" method="post">
                  <div class="row">
                    <div class="col-md-10"><input type="text" name="mes_contact" placeholder="Enter Contact" class="form-control"></div>
                    <div class="col-md-2"><input type="submit" name="mes_search_submit" class="btn btn-primary" value="Search"></div>
                  </div>
                </form>
              </div>

              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">User Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Message</th>
                  </tr>
                </thead>
                <tbody>
                  <?php

                  $con = mysqli_connect("localhost", "root", "", "myhmsdb");
                  global $con;

                  $query = "select * from contact;";
                  $result = mysqli_query($con, $query);
                  while ($row = mysqli_fetch_array($result)) {

                    #$fname = $row['fname'];
                    #$lname = $row['lname'];
                    #$email = $row['email'];
                    #$contact = $row['contact'];
                  ?>
                    <tr>
                      <td><?php echo $row['name']; ?></td>
                      <td><?php echo $row['email']; ?></td>
                      <td><?php echo $row['contact']; ?></td>
                      <td><?php echo $row['message']; ?></td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
              <br>
            </div>



          </div>
        </div>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.1/sweetalert2.all.min.js"></script>


    <!-- ======= Footer ======= -->
    <footer id="footer" style="background-color:maroon;">

      <div class="footer-top">
        <div class="container">
          <div class="row">

            <div class="col-lg-3 col-md-6 footer-contact">
              <h3>Jamy</h3>
              <p>
                Nairobi <br>
                Kenya<br>
                <strong>Phone:</strong> +254 70000000<br>
                <strong>Email:</strong> info@example.com<br>
              </p>
            </div>

            <div class="col-lg-2 col-md-6 footer-links">
              <h4>Useful Links</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
              </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Our Services</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Medical Surgary</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Opticals</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Baby Care</a></li>
              </ul>
            </div>

            <div class="col-lg-4 col-md-6 footer-newsletter">
              <h4>Join Our Newsletter</h4>
              <form action="" method="post">
                <input type="email" name="email"><input type="submit" value="Subscribe">
              </form>
            </div>

          </div>
        </div>
      </div>

      <div class="container d-md-flex py-4">

        <div class="me-md-auto text-center text-md-start">
          <div class="copyright text-white">
            &copy; Copyright <strong><span>Jamy</span></strong>. All Rights Reserved
          </div>
          <div class="credits text-white">

            Designed by <a href="#">Jamy Hospital</a>
          </div>
        </div>
        <div class="social-links text-center text-md-right pt-3 pt-md-0">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets1/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets1/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets1/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets1/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets1/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets1/js/main.js"></script>

  </body>

</html>

</body>

</html>