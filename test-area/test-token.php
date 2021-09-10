

<?php
session_start();
session_id();
$message = '';
$token = '';
/*
$message = 'jfkdsdf';
$token = '7iZD4VDa5Fyh7aJmKTq5VAsQYUDHtSyHFhCuIdtEshG';
*/
$message = '';
$token = '';
$_SESSION['message']= $message;
$_SESSION['token']= $token;
echo 'message: '.$message;
echo "<br>";
echo 'token: '.$token;
echo "<br>";
echo 'Session_id: '.session_id();
?>
<form action="alert1.php" method="POST">
    message: <input type="text" name="message" value="<?php echo $message;?>">
    token:   <input type="text" name="token" value="<?php echo $token;?>">
    <input type="submit" name="submit">
</form>