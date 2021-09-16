<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type:application/json; charset=UTF-8");
$curl = curl_init();

// post token and message
//$token = isset($_POST['token']) ? $_POST['token'] : "";
$json_str = file_get_contents('php://input');
$json_obj = json_decode($json_str, true);
$message = $json_obj['message'];
echo $message;


// เปลี่ยน token
$token = '7iZD4VDa5Fyh7aJmKTq5VAsQYUDHtSyHFhCuIdtEshG';


/*
// token

$token_test1 = 'SfnqkiB0S7187xvsbdEvwZKfQcNYvcpm603DQhAwxyh';
7iZD4VDa5Fyh7aJmKTq5VAsQYUDHtSyHFhCuIdtEshG
// message
$message_test = 'Hello gg';
*/

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://notify-api.line.me/api/notify',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => 'message='. $message,
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/x-www-form-urlencoded',
    'Authorization: Bearer '. $token
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;

/*
function function_alert($response) {
      
  // Display the alert box 
  echo "<script>alert('$response');</script>";
}


// Function call
function_alert($response);
*/
?>