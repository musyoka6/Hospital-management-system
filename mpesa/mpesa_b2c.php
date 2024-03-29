// Check if cURL extension is enabled
if (!function_exists('curl_version')) {
    die('cURL extension is not enabled');
}

// SETTINGS
define('CONSUMER_KEY', '7hTlwkBRALcORP3YJljleGX5Vfdwryzv'); // Consumer key
define('CONSUMER_SECRET', 'D2OSfpG2MVmLA7b'); // Consumer secret
define('B2C_SHORTCODE', '174379'); // Paybill number
define('B2C_INITIATOR', 'Jamy Hospital'); // Initiator name
define('SECURITY_CREDENTIAL', ''); // Set the correct security credential

function get_access_token()
{
    $credentials = base64_encode(CONSUMER_KEY . ':' . CONSUMER_SECRET);
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://api.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Basic ' . $credentials, 'Content-Type: application/json'));
    $response = curl_exec($ch);
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE); // Get HTTP status code
    curl_close($ch);

    if ($http_code == 200) {
        $response_data = json_decode($response);
        return $response_data->access_token;
    } else {
        throw new Exception("Failed to retrieve access token. HTTP status code: " . $http_code);
    }
}

function submit_request($endpoint_url, $json_body)
{
    $access_token = get_access_token();

    if ($access_token) {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $endpoint_url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $json_body);
        $response = curl_exec($curl);
        $http_code = curl_getinfo($curl, CURLINFO_HTTP_CODE); // Get HTTP status code
        curl_close($curl);

        if ($http_code == 200) {
            return $response;
        } else {
            throw new Exception("Request failed. HTTP status code: " . $http_code);
        }
    } else {
        throw new Exception("Access token is invalid");
    }
}

function b2c_request($amount = 100, $msisdn = 254745842774, $remarks = 'payemployees')
{
    $data = array(
        'InitiatorName' => B2C_INITIATOR,
        'SecurityCredential' => SECURITY_CREDENTIAL,
        'CommandID' => 'SalaryPayment',
        'Amount' => $amount,
        'PartyA' => B2C_SHORTCODE,
        'PartyB' => $msisdn,
        'Remarks' => $remarks, // mandatory
        'QueueTimeOutURL' => 'https://example.com/callback1',
        'ResultURL' => 'https://example.com/callback2',
        'Occasion' => '', //optional
    );

    $data = json_encode($data);
    $url = 'https://api.safaricom.co.ke/mpesa/b2c/v1/paymentrequest';
    $response = submit_request($url, $data);
    return $response;
}

try {
    $response = b2c_request(100, 254745842774, 'payemployees');
    print_r($response);
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}
