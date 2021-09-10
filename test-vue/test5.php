<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
session_start();
session_id();

// define variables and set to empty values
$message = $token = "";
$messageErr = $tokenErr = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['message']= $message;
    $_SESSION['token']= $token;
  if (empty($_POST["message"])) {
    $messageErr = "message is required";
  } else {
    $message = test_input($_POST["message"]);
    // check if message only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-0-9' ]*$/",$message)) {
      $messageErr = "Only letters and white space allowed";
    }
  }
  if (empty($_POST["token"])) {
    $token = "";
  } else {
    $token = test_input($_POST["token"]);
    if (!preg_match("/^[a-zA-Z-0-9']*$/",$token)) {
        $tokenErr = "Only letters and white space allowed";
    }
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Message Token</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="alert1.php">
  message: <input type="text" name="message" value="<?php echo $message;?>">
  <span class="error">* <?php echo $messageErr;?></span>
  <br><br>
  token: <input type="text" name="token" value="<?php echo $token;?>">
  <span class="error">* <?php echo $tokenErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo 'message: '.$message;
echo "<br>";
echo 'token: '.$token;
echo "<br>";
echo 'Session_id: '.session_id();
?>

</body>
</html>