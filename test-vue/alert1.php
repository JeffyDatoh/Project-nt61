<?php

session_start();
$message= $_SESSION['message'];
$token= $_SESSION['token'];

$curl = curl_init();
/*
$token_test = isset($_POST['token_test']) ? $_POST['token_test'] : "";
$message_test = isset($_POST['message_test']) ? $_POST['message_test'] : "";
// token
$token = '7iZD4VDa5Fyh7aJmKTq5VAsQYUDHtSyHFhCuIdtEshG';
// message
$message = 'Hello gg';
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