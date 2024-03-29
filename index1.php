<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
          integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="style2.css">
    <title>Patients - Login</title>
</head>
<style>
    #inputbtn:hover {
        cursor: pointer;
    }

    .card {
        background: #f8f9fa;
        border-radius: 5% 5%;
    }

    body {
        background-size: cover;
        background-image: url(images/ku.avif);
    }
</style>
<body>

<div class="container-fluid" style="margin-top:60px;margin-bottom:60px;color:#34495E;">
    <div class="row col-5 d-flex" style="margin:auto">
        <div class="card" style="font-family: 'IBM Plex Sans', sans-serif;">
            <div class="card-body">
                <center>
                    <i class="fa fa-hospital-o fa-3x" aria-hidden="true" style="color:#0062cc"></i>
                    <br><br><br>
                    <h3 style="margin-top: 10%">Patient Login</h3><br>
                    <form class="form-group" method="POST" action="func.php">
                        <div class="row" style="margin-top: 10%">
                            <div class="col-md-4">
                                <label>Email-ID: </label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="email" class="form-control" placeholder="enter email ID" required/>
                            </div>
                            <br><br>
                            <div class="col-md-4" style="margin-top: 8%">
                                <label>Password: </label>
                            </div>
                            <div class="col-md-8" style="margin-top: 8%">
                                <input type="password" class="form-control" name="password2" placeholder="enter password" required/>
                            </div>
                            <br><br><br>
                        </div>
                        <div class="row">
                            <div class="col-md-4" style="padding-left: 300px;margin-top: 10%">
                                <center>
                                    <input type="submit" id="inputbtn" name="patsub" value="Login" class="btn btn-primary">
                                </center>
                            </div>
                            <div class="col-md-8" style="margin-top: -10px">
                                <p><a href="index2.php">Not Registered?</a></p>
                            </div>
                    </form>
                </center>
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
</body>
</html>