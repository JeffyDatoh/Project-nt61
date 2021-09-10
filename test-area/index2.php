<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ดึงข้อมูล Real time </title>
</head>

<body>
    <div class="Total_Accesse"></div>
    <div class="Total_kBytes"></div>
    <div class="CPU_System"></div>
    <div class="CPU_Load"></div>
    <div class="Uptime"></div>
    <div class="Req_PerSec"></div>
    <div class="Bytes_PerSec"></div>
    <div class="Bytes_PerReq"></div>
    <div class="Duration_PerReq"></div>

    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    
    <script type="text/javascript">
        let Total_Accesse = document.querySelector('.Total_Accesse');
        let Total_kBytes = document.querySelector('.Total_kBytes');
        let CPU_System = document.querySelector('.CPU_System');
        let CPU_Load = document.querySelector('.CPU_Load');
        let Uptime = document.querySelector('.Uptime');
        let Req_PerSec = document.querySelector('.Req_PerSec');
        let Bytes_PerSec = document.querySelector('.Bytes_PerSec');
        let Bytes_PerReq = document.querySelector('.Bytes_PerReq');
        let Duration_PerReq = document.querySelector('.Duration_PerReq');

        setInterval(() => {
            axios.get("data2.php").then(function(response) {
                Total_Accesse.innerHTML = response.data.Total_Accesses;
                Total_kBytes.innerHTML = response.data.Total_kBytes;
                CPU_System.innerHTML = response.data.CPU_System;
                CPU_Load.innerHTML = response.data.CPU_Load;
                Uptime.innerHTML = response.data.Uptime;
                Req_PerSec.innerHTML = response.data.Req_PerSec;
                Bytes_PerSec.innerHTML = response.data.Bytes_PerSec;
                Bytes_PerReq.innerHTML = response.data.Bytes_PerReq;
                Duration_PerReq.innerHTML = response.data.Duration_PerReq;
            }).catch((err) => console.log(err));

        }, 1000); // 1000 =  1 วินาที
    </script>



</body>

</html>