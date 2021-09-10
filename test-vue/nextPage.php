<?php

session_start();
$message= $_SESSION['message'];
$token= $_SESSION['token'];
echo 'message: '.$message;
echo "<br>";
echo 'token: '.$token;
echo "<br>";
echo 'Session_id: '.session_id();
?>