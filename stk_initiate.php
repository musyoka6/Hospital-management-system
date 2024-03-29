<?php
if(isset($_POST['submit'])){

  date_default_timezone_set('Africa/Nairobi');

  # access token
  $consumerKey = 'gmi4NeIJbafHnIBkKzbfYKsj64qgH54wOpgmsDoYzA1eecQb'; //Fill with your app Consumer Key
  $consumerSecret = 'LqdrENt28ZTIS69I67M87XT3WQG2q2unYXPfK0gX95HA60NAqGVFwgXVU0wHohew'; // Fill with your app Secret

  # define the variales
  # provide the following details, this part is found on your test credentials on the developer account
  $BusinessShortCode = '174379';
  $Passkey = 'bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919';  
  
  /*
    This are your info, for
    $PartyA should be the ACTUAL clients phone number or your phone number, format 2547********
    $AccountRefference, it maybe invoice number, account number etc on production systems, but for test just put anything
    TransactionDesc can be anything, probably a better description of or the transaction
    $Amount this is the total invoiced amount, Any amount here will be 
    actually deducted from a clients side/your test phone number once the PIN has been entered to authorize the transaction. 
    for developer/test accounts, this money will be reversed automatically by midnight.
  */
  
  $PartyA = $_POST['phone']; // This is your phone number, 
  $AccountReference = 'JamyHospital';
  $TransactionDesc = 'Test Payment';
  $Amount = $_POST['amount'];
 
  # Get the timestamp, format YYYYmmddhms -> 20181004151020
  $Timestamp = date('YmdHis');    
  
  # Get the base64 encoded string -> $password. The passkey is the M-PESA Public Key
  $Password = base64_encode($BusinessShortCode.$Passkey.$Timestamp);

  # header for access token
  $headers = ['Content-Type:application/json; charset=utf8'];

  # M-PESA endpoint urls
  $access_token_url = 'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';
  $initiate_url = 'https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest';

  # callback url
  $CallBackURL = 'https://darajampesa.herokuapp.com/callback_url.php';  

  $curl = curl_init($access_token_url);
  curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
  curl_setopt($curl, CURLOPT_HEADER, FALSE);
  curl_setopt($curl, CURLOPT_USERPWD, $consumerKey.':'.$consumerSecret);
  $result = curl_exec($curl);
  $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
  $result = json_decode($result);
  $access_token = $result->access_token;  
  curl_close($curl);

  # header for stk push
  $stkheader = ['Content-Type:application/json','Authorization:Bearer '.$access_token];

  # initiating the transaction
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL, $initiate_url);
  curl_setopt($curl, CURLOPT_HTTPHEADER, $stkheader); //setting custom header

  $curl_post_data = array(
    //Fill in the request parameters with valid values
    'BusinessShortCode' => $BusinessShortCode,
    'Password' => $Password,
    'Timestamp' => $Timestamp,
    'TransactionType' => 'CustomerPayBillOnline',
    'Amount' => $Amount,
    'PartyA' => $PartyA,
    'PartyB' => $BusinessShortCode,
    'PhoneNumber' => $PartyA,
    'CallBackURL' => $CallBackURL,
    'AccountReference' => $AccountReference,
    'TransactionDesc' => $TransactionDesc
  );

  $data_string = json_encode($curl_post_data);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($curl, CURLOPT_POST, true);
  curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
  $curl_response = curl_exec($curl);

  $response = json_decode($curl_response);
  if ($response->ResponseDescription == 'Success. Request accepted for processing') {
    // Save transaction details to CSV file
    $csv_data = array($_POST['phone'], date('Y-m-d H:i:s'), $_POST['amount']);
    $file = 'transactions.csv';
    $handle = fopen($file, 'a');
    fputcsv($handle, $csv_data);
    fclose($handle);

    // Display success message
    echo "Successfully paid. Transaction details saved.";

    // Provide link to homepage
    echo '<br><a class="text-center" href="admin-panel.php">Go to homepage</a>';
  } else {
    echo "Error";
  }

  curl_close($curl);
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Paid Transactions</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <style>
    body {
    /* background: -webkit-linear-gradient(left, #3931af, #00c6ff); */
    background-size: cover;
    background-image: url(images/ku.avif);
}

    .container {
      background-color: #fff;
      border-radius: 10px;
      padding: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    h2 {
      color: #007bff;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Paid Transactions</h2>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Phone Number</th>
          <th scope="col">Date</th>
          <th scope="col">Amount</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $file = 'transactions.csv';
        if (file_exists($file)) {
          $handle = fopen($file, 'r');
          while (($data = fgetcsv($handle)) !== false) {
            echo '<tr>';
            foreach ($data as $value) {
              echo '<td>' . htmlspecialchars($value) . '</td>';
            }
            echo '</tr>';
          }
          fclose($handle);
        } else {
          echo '<tr><td colspan="3">No transactions found.</td></tr>';
        }
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>
