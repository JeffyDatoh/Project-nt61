<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Server Performance Monitoring System</title>
</head>
<body>
    <?php
    
        $item='example';
        $tmp = shell_exec("python test1.py .$item");
        echo $tmp;
    /*
        $sym = $_POST['symbols'];
        echo shell_exec("python test1.py .$sym");
    */
    ?>
</body>
</html>