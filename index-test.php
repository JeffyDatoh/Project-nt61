<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chart</title>

    <style>
        body{
            width: 700px;
            margin: 3rem auto;
        }

        .chart-container{
            width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    
    <div class="chart-container">
        <canvas id="graph"></canvas>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.0/chart.min.js"></script></script>

    <script>

        $(document).ready(function() {
            showGraph();
        });

        function showGraph() {
            $.post('pulldata.php', function(data) {
                console.log(data);
                let Total_Accesses = [];
                let Total_kBytes= [];
                let CPU_System= [];
                let CPU_Load= [];
                let Uptime= [];
                let Req_PerSec= [];
                let Bytes_PerSec= [];
                let Bytes_PerReq= [];
                let Duration_PerReq= [];

                for(let i in data) {
                    Total_Accesses.push(data[i].Total_Accesses);
                    Total_kBytes.push(data[i].Total_kBytes);
                    CPU_System.push(data[i].CPU_System);
                    CPU_Load.push(data[i].CPU_Load);
                    Uptime.push(data[i].Uptime);
                    Req_PerSec.push(data[i].Req_PerSec);
                    Bytes_PerSec.push(data[i].Bytes_PerSec);
                    Bytes_PerReq.push(data[i].Bytes_PerReq);
                    Duration_PerReq.push(data[i].Duration_PerReq); 
                }
                var times = [0,5,10,15,20,25,30,35,40,45,50,55,60];
                let chart_Total_Accesses = {
                    labels: times,
                    datasets: [{
                            label: 'Total Accesses',
                            backgroundColor: '#49e2ff',
                            borderColor: '#46d5f1',
                            hoverBackgroundColor: '#CCCCCC',
                            hoverBorderColor: '#666666',
                            data: Total_Accesses
                    }]
                };
                let graphTarget = $('#graph');
                let barGraph = new Chart(graphTarget,{
                    type: 'line',
                    data: chart_Total_Accesses
                })
            })
        }

    </script>
</body>
</html>