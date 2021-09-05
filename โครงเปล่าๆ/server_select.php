<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" href="index.css">
<title>SERVER SELECT</title>
</head>

<body>
<script>
    function changeServer(){
     var a = document.getElementById("a").value;
     alert(a);
       //ยังไม่เสร็จและไม่สามารถทำต่อได้
    }
</script>
<center><h1>Server Select</h1></center>


<h1>ป้อนServerที่ต้องการ</h1>
<form>
    Server <input type="url" id ="a"> <br><br>
<input type="button" value="เลือกServer" onclick="changeServer()"><br><br>
</form>

<p><a href="#a">#########</a></p>

<button><a href="home.php">BACK TO HOME</a></button>    

</body>
</html>
