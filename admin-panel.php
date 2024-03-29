<?php
include('func.php');
include('newfunc.php');

require_once('config.php');

global $con;

$pid = $_SESSION['pid'];
$username = $_SESSION['username'];
$email = $_SESSION['email'];
$fname = $_SESSION['fname'];
$gender = $_SESSION['gender'];
$lname = $_SESSION['lname'];
$contact = $_SESSION['contact'];

if (isset($_POST['app-submit'])) {
	$pid = $_SESSION['pid'];
	$username = $_SESSION['username'];
	$email = $_SESSION['email'];
	$fname = $_SESSION['fname'];
	$lname = $_SESSION['lname'];
	$gender = $_SESSION['gender'];
	$contact = $_SESSION['contact'];
	$doctor = $_POST['doctor'];
	$email = $_SESSION['email'];
	# $fees=$_POST['fees'];
	$docFees = $_POST['docFees'];

	$appdate = $_POST['appdate'];
	$apptime = $_POST['apptime'];
	$cur_date = date("Y-m-d");
	date_default_timezone_set('Asia/Kolkata');
	$cur_time = date("H:i:s");
	$apptime1 = strtotime($apptime);
	$appdate1 = strtotime($appdate);

	if (date("Y-m-d", $appdate1) >= $cur_date) {
		if ((date("Y-m-d", $appdate1) == $cur_date and date("H:i:s", $apptime1) > $cur_time) or date("Y-m-d", $appdate1) > $cur_date) {
			$check_query = mysqli_query($con, "select apptime from appointmenttb where doctor='$doctor' and appdate='$appdate' and apptime='$apptime'");

			if (mysqli_num_rows($check_query) == 0) {
				$query = mysqli_query($con, "insert into appointmenttb(pid,fname,lname,gender,email,contact,doctor,docFees,appdate,apptime,userStatus,doctorStatus) values($pid,'$fname','$lname','$gender','$email','$contact','$doctor','$docFees','$appdate','$apptime','1','1')");

				if ($query) {
					echo "<script>alert('Your appointment successfully booked');</script>";
				} else {
					echo "<script>alert('Unable to process your request. Please try again!');</script>";
				}
			} else {
				echo "<script>alert('We are sorry to inform that the doctor is not available in this time or date. Please choose different time or date!');</script>";
			}
		} else {
			echo "<script>alert('Select a time or date in the future!');</script>";
		}
	} else {
		echo "<script>alert('Select a time or date in the future!');</script>";
	}
}

if (isset($_GET['cancel'])) {
	$query = mysqli_query($con, "update appointmenttb set userStatus='0' where ID = '" . $_GET['ID'] . "'");
	if ($query) {
		echo "<script>alert('Your appointment successfully cancelled');</script>";
	}
}


function generate_bill(): string
{
	$con = mysqli_connect("localhost", "root", "", "myhmsdb");
	$pid = $_SESSION['pid'];
	$output = '';
	$query = mysqli_query($con, "select p.pid,p.ID,p.fname,p.lname,p.doctor,p.appdate,p.apptime,p.disease,p.allergy,p.prescription,a.docFees from prestb p inner join appointmenttb a on p.ID=a.ID and p.pid = '$pid' and p.ID = '" . $_GET['ID'] . "'");
	while ($row = mysqli_fetch_array($query)) {
		$output .= '
    <label> Patient ID : </label>' . $row["pid"] . '<br/><br/>
    <label> Appointment ID : </label>' . $row["ID"] . '<br/><br/>
    <label> Patient Name : </label>' . $row["fname"] . ' ' . $row["lname"] . '<br/><br/>
    <label> Doctor Name : </label>' . $row["doctor"] . '<br/><br/>
    <label> Appointment Date : </label>' . $row["appdate"] . '<br/><br/>
    <label> Appointment Time : </label>' . $row["apptime"] . '<br/><br/>
    <label> Disease : </label>' . $row["disease"] . '<br/><br/>
    <label> Allergies : </label>' . $row["allergy"] . '<br/><br/>
    <label> Prescription : </label>' . $row["prescription"] . '<br/><br/>
    <label> Fees Paid : </label>' . $row["docFees"] . '<br/>
    ';
	}
	return $output;
}


if (isset($_GET["generate_bill"])) {
	require_once("TCPDF/tcpdf.php");
	$obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
	$obj_pdf->SetCreator(PDF_CREATOR);
	$obj_pdf->SetTitle("Generate Bill");
	$obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);
	$obj_pdf->SetHeaderFont(array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
	$obj_pdf->SetFooterFont(array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
	$obj_pdf->SetDefaultMonospacedFont('helvetica');
	$obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
	$obj_pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT);
	$obj_pdf->SetPrintHeader(false);
	$obj_pdf->SetPrintFooter(false);
	$obj_pdf->SetAutoPageBreak(TRUE, 10);
	$obj_pdf->SetFont('helvetica', '', 12);
	$obj_pdf->AddPage();

	$content = '';

	$content .= '
      <br/>
      <h2 align ="center"> Jamy Hospitals</h2></br>
      <h3 align ="center"> Bill</h3>
  ';

	$content .= generate_bill();
	$obj_pdf->writeHTML($content);
	ob_end_clean();
	$obj_pdf->Output("bill.pdf", 'I');

}

function get_specs()
{
	$con = mysqli_connect("localhost", "root", "", "myhmsdb");
	$query = mysqli_query($con, "select username,spec from doctb");
	$docarray = array();
	while ($row = mysqli_fetch_assoc($query)) {
		$docarray[] = $row;
	}
	return json_encode($docarray);
}

?>

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
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
          rel="stylesheet">
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
    <style>
        body {
            /* background: -webkit-linear-gradient(left, #3931af, #00c6ff); */
            background-size: cover;
            background-image: url(images/ku.avif);
        }

        button:hover {
            cursor: pointer;
        }

        #inputbtn:hover {
            cursor: pointer;
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

        <h1 class="logo me-auto"><a class="text-white" href="index.php">Jamy Hospital</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="nav-link scrollto active text-white" href="#hero">Home</a></li>
                <li><a class="nav-link scrollto text-white" href="#about">About</a></li>
                <li><a class="nav-link scrollto text-white" href="#services">Services</a></li>
                <li><a class="nav-link scrollto text-white" href="index1.php">Patient</a></li>
                <li><a class="nav-link scrollto text-white" href="contact.html">Contact</a></li>
                <li><a class="btn btn-danger text-white" href="index.php">Logout</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        <a href="#appointment" class="appointment-btn scrollto"><span class="d-none d-md-inline">Make an</span>
            Appointment</a>

    </div>
</header><!-- End Header -->

<body style="padding-top:50px;">
<br><br><br>
<div class="container-fluid" style="margin-top:50px;">
    <h2 class="text-white" style="margin-left: 40%; padding-bottom: 20px; font-family: 'IBM Plex Sans', sans-serif;">
        Welcome&nbsp;<span class="text-white" id="username"><?php echo $username ?></span>
    </h2>

    <div class="row">
        <div class="col-md-4" style="max-width:25%; margin-top: 3%;height:60vh">
            <div class="list-group" id="list-tab" role="tablist">
                <a class="list-group-item list-group-item-action active" id="list-dash-list" data-toggle="list"
                   href="#list-dash" role="tab" aria-controls="home">Dashboard</a>
                <a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list"
                   href="#list-home" role="tab" aria-controls="home">Book Appointment</a>
                <a class="list-group-item list-group-item-action" href="#app-hist" id="list-pat-list" role="tab"
                   data-toggle="list" aria-controls="home">Appointment History</a>
                <a class="list-group-item list-group-item-action" href="#list-pres" id="list-pres-list" role="tab"
                   data-toggle="list" aria-controls="home">Prescriptions</a>
            </div>
            <br>
        </div>
        <div class="col-md-8" style="margin-top: 3%;">
            <div class="tab-content" id="nav-tabContent" style="width: 950px;">
                <div class="tab-pane fade  show active" id="list-dash" role="tabpanel" aria-labelledby="list-dash-list">
                    <div class="container-fluid container-fullw bg-white">
                        <br><br>
                        <div class="row">
                            <div class="col-sm-4" style="left: 5%">
                                <div class="panel panel-white no-radius text-center">
                                    <div class="panel-body">
                                        <span class="fa-stack fa-2x">
                                            <i class="fa fa-square fa-stack-2x text-primary"></i>
                                            <i class="fa fa-terminal fa-stack-1x fa-inverse"></i>
                                        </span>
                                        <h4 class="StepTitle" style="margin-top: 5%;"> Book My Appointment</h4>
                                        <script>
                                            function clickDiv(id) {
                                                document.querySelector(id).click();
                                                alert("test")
                                            }
                                        </script>
                                        <p class="links cl-effect-1">
                                            <a href="#list-home" onclick="clickDiv('#list-home-list')">
                                                Book Appointment
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4" style="left: 10%">
                                <div class="panel panel-white no-radius text-center">
                                    <div class="panel-body">
                                        <span class="fa-stack fa-2x"> <i
                                                    class="fa fa-square fa-stack-2x text-primary"></i> <i
                                                    class="fa fa-paperclip fa-stack-1x fa-inverse"></i> </span>
                                        <h4 class="StepTitle" style="margin-top: 5%;">My Appointments</h4>

                                        <p class="cl-effect-1">
                                            <a href="#app-hist" onclick="clickDiv('#list-pat-list')">
                                                View Appointment History
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4" style="left: 20%;margin-top:5%">
                            <div class="panel panel-white no-radius text-center">
                                <div class="panel-body">
                                    <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i
                                                class="fa fa-list-ul fa-stack-1x fa-inverse"></i> </span>
                                    <h4 class="StepTitle" style="margin-top: 5%;">Prescriptions</h4>

                                    <p class="cl-effect-1">
                                        <a href="#list-pres" onclick="clickDiv('#list-pres-list')">
                                            View Prescription List
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <br><br>
                    </div>
                </div>

                <br><br><br><br>

                <div class="tab-pane fade" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                    <div class="container-fluid">
                        <div class="card">
                            <div class="card-body">
                                <center><h4>Create an appointment</h4></center>
                                <br>
                                <form class="form-group" method="post" action="admin-panel.php">
                                    <div class="row">
										<?php
										$query = mysqli_query($con, "SELECT username, spec FROM doctb");
										$docarray = array();
										while ($row = mysqli_fetch_assoc($query)) {
											$docarray[] = $row;
										}
										echo json_encode($docarray);
										?>


                                        <div class="col-md-4">
                                            <label for="spec">Specialization:</label>
                                        </div>
                                        <div class="col-md-8">
                                            <select name="spec" class="form-control" id="spec">
                                                <option value="" disabled selected>Select Specialization</option>
												<?php display_specs(); ?>
                                            </select>
                                        </div>

                                        <br><br>

                                        <script>
                                            document.getElementById('spec').onchange = function foo() {
                                                let spec = this.value;
                                                console.log(spec)
                                                let docs = [...document.getElementById('doctor').options];

                                                docs.forEach((el, ind, arr) => {
                                                    arr[ind].setAttribute("style", "");
                                                    if (el.getAttribute("data-spec") != spec) {
                                                        arr[ind].setAttribute("style", "display: none");
                                                    }
                                                });
                                            };

                                        </script>

                                        <div class="col-md-4"><label for="doctor">Doctors:</label></div>
                                        <div class="col-md-8">
                                            <select name="doctor" class="form-control" id="doctor" required="required">
                                                <option value="" disabled selected>Select Doctor</option>
												<?php display_docs(); ?>
                                            </select>
                                        </div>
                                        <br/><br/>


                                        <script>
                                            document.getElementById('doctor').onchange = function updateFees(e) {
                                                document.getElementById('docFees').value = document.querySelector(`[value=${this.value}]`).getAttribute('data-value');
                                            };
                                        </script>


                                        <!-- <div class="col-md-4"><label for="doctor">Doctors:</label></div>
												<div class="col-md-8">
													<select name="doctor" class="form-control" id="doctor1" required="required">
													  <option value="" disabled selected>Select Doctor</option>

													</select>
												</div>
												<br><br> -->

                                        <!-- <script>
										  document.getElementById("spec").onchange = function updateSpecs(event) {
											  var selected = document.querySelector(`[data-value=${this.value}]`).getAttribute("value");
											  console.log(selected);

											  var options = document.getElementById("doctor1").querySelectorAll("option");

											  for (i = 0; i < options.length; i++) {
												var currentOption = options[i];
												var category = options[i].getAttribute("data-spec");

												if (category == selected) {
												  currentOption.style.display = "block";
												} else {
												  currentOption.style.display = "none";
												}
											  }
											}
										</script> -->


                                        <!-- <script>
										let data =

								  document.getElementById('spec').onchange = function updateSpecs(e) {
									let values = data.filter(obj => obj.spec == this.value).map(o => o.username);
									document.getElementById('doctor1').value = document.querySelector(`[value=${values}]`).getAttribute('data-value');
								  };
								</script> -->


                                        <div class="col-md-4">
                                            <label for="consultancyfees">Consultancy Fees</label>
                                        </div>
                                        <div class="col-md-8">
                                            <!-- <div id="docFees">Select a doctor</div> -->
                                            <input class="form-control" type="text" name="docFees" id="docFees"
                                                   readonly="readonly"/>
                                        </div>
                                        <br><br>

                                        <div class="col-md-4"><label>Appointment Date</label></div>
                                        <div class="col-md-8"><input type="date" class="form-control datepicker"
                                                                     name="appdate"></div>
                                        <br><br>

                                        <div class="col-md-4"><label>Appointment Time</label></div>
                                        <div class="col-md-8">
                                            <!-- <input type="time" class="form-control" name="apptime"> -->
                                            <select name="apptime" class="form-control" id="apptime"
                                                    required="required">
                                                <option value="" disabled selected>Select Time</option>
                                                <option value="08:00:00">8:00 AM</option>
                                                <option value="10:00:00">10:00 AM</option>
                                                <option value="12:00:00">12:00 PM</option>
                                                <option value="14:00:00">2:00 PM</option>
                                                <option value="16:00:00">4:00 PM</option>
                                            </select>

                                        </div>
                                        <br><br>

                                        <div class="col-md-4">
                                            <input type="submit" name="app-submit" value="Create new entry"
                                                   class="btn btn-primary" id="inputbtn">
                                        </div>
                                        <div class="col-md-8">


                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <br>
                </div>

                <div class="tab-pane fade" id="app-hist" role="tabpanel" aria-labelledby="list-pat-list">

                    <table class="table table-hover rounded">
                        <thead>
                        <tr>

                            <th scope="col">Doctor Name</th>
                            <th scope="col">Consultancy Fees</th>
                            <th scope="col">Appointment Date</th>
                            <th scope="col">Appointment Time</th>
                            <th scope="col">Current Status</th>
                            <th scope="col">Action</th>
                            <th scope="col">M-pesa</th>
                        </tr>
                        </thead>
                        <tbody>
						<?php
						global $con;

						$query = "select ID,doctor,docFees,appdate,apptime,userStatus,doctorStatus from appointmenttb where fname ='$fname' and lname='$lname';";
						$result = mysqli_query($con, $query);
						while ($row = mysqli_fetch_array($result)) {

							#$fname = $row['fname'];
							#$lname = $row['lname'];
							#$email = $row['email'];
							#$contact = $row['contact'];
							?>
                            <tr>
                                <td><?php echo $row['doctor']; ?></td>
                                <td><?php echo $row['docFees']; ?></td>
                                <td><?php echo $row['appdate']; ?></td>
                                <td><?php echo $row['apptime']; ?></td>

                                <td>
									<?php if (($row['userStatus'] == 1) && ($row['doctorStatus'] == 1)) {
										echo "Active";
									}
									if (($row['userStatus'] == 0) && ($row['doctorStatus'] == 1)) {
										echo "Cancelled by You";
									}

									if (($row['userStatus'] == 1) && ($row['doctorStatus'] == 0)) {
										echo "Cancelled by Doctor";
									}
									?></td>

                                <td>
									<?php if (($row['userStatus'] == 1) && ($row['doctorStatus'] == 1)) { ?>


                                        <a href="admin-panel.php?ID=<?php echo $row['ID'] ?>&cancel=update"
                                           onClick="return confirm('Are you sure you want to cancel this appointment ?')"
                                           title="Cancel Appointment" tooltip-placement="top" tooltip="Remove">
                                            <button class="btn btn-danger">Cancel</button>
                                        </a>
									<?php } else {

										echo "Cancelled";
									} ?>

                                </td>
                                <td><a href="about.php">
                                        <button class="btn btn-success">Pay With M-pesa</button>
                                    </a></td>
                            </tr>
						<?php } ?>
                        </tbody>
                    </table>
                    <br>
                </div>


                <div class="tab-pane fade" id="list-pres" role="tabpanel" aria-labelledby="list-pres-list">

                    <table class="table table-hover rounded">
                        <thead>
                        <tr>

                            <th scope="col">Doctor Name</th>
                            <th scope="col">Appointment ID</th>
                            <th scope="col">Appointment Date</th>
                            <th scope="col">Appointment Time</th>
                            <th scope="col">Diseases</th>
                            <th scope="col">Allergies</th>
                            <th scope="col">Prescriptions</th>
                            <th scope="col">Bill Payment</th>
                        </tr>
                        </thead>
                        <tbody>
						<?php

						$con = mysqli_connect("localhost", "root", "", "myhmsdb");
						global $con;

						$query = "select doctor,ID,appdate,apptime,disease,allergy,prescription from prestb where pid='$pid';";

						$result = mysqli_query($con, $query);
						if (!$result) {
							echo mysqli_error($con);
						}


						while ($row = mysqli_fetch_array($result)) {
							?>
                            <tr>
                                <td><?php echo $row['doctor']; ?></td>
                                <td><?php echo $row['ID']; ?></td>
                                <td><?php echo $row['appdate']; ?></td>
                                <td><?php echo $row['apptime']; ?></td>
                                <td><?php echo $row['disease']; ?></td>
                                <td><?php echo $row['allergy']; ?></td>
                                <td><?php echo $row['prescription']; ?></td>
                                <td>
                                    <form method="get">
                                        <!-- <a href="admin-panel.php?ID="
											onClick=""
											title="Pay Bill" tooltip-placement="top" tooltip="Remove"><button class="btn btn-success">Pay</button>
											</a></td> -->

                                        <a href="admin-panel.php?ID=<?php echo $row['ID'] ?>">
                                            <input type="hidden" name="ID" value="<?php echo $row['ID'] ?>"/>
                                            <input type="submit" onclick="alert('Bill Paid Successfully');"
                                                   name="generate_bill" class="btn btn-success"
                                                   value="Download Receipt"/>
                                        </a>
                                </td>
                                </form>
                            </tr>
						<?php }
						?>
                        </tbody>
                    </table>
                    <br>
                </div>


                <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">...
                </div>
                <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
                    <form class="form-group" method="post" action="func.php">
                        <label>Doctors name: </label>
                        <input type="text" name="name" placeholder="Enter doctors name" class="form-control">
                        <br>
                        <input type="submit" name="doc_sub" value="Add Doctor" class="btn btn-primary">
                    </form>
                </div>
                <div class="tab-pane fade" id="list-attend" role="tabpanel" aria-labelledby="list-attend-list">...</div>
            </div>
        </div>
    </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
        integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"
        integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.1/sweetalert2.all.min.js">
</script>

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
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

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