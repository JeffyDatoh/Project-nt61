<!DOCTYPE html>
<html lang="th">

<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
<script src="https://unpkg.com/vue-chartjs/dist/vue-chartjs.min.js"></script>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test </title>
</head>

<body>
    <p>veu</p>
    <div id="app">
        <p>{{ message }} </p>
        <p>{{ data_TA }} </p>
        <p>{{ data_TA.Total_Accesses }} </p>
        <p>{{ data_TA.Total_kBytes }} </p>
        <p>{{ data_TA.CPU_System }} </p>
        <p>{{ data_TA.CPU_Load }} </p>
        <p>{{ data_TA.Uptime }} </p>
        <p>{{ data_TA.Req_PerSec }} </p>
        <p>{{ data_TA.Bytes_PerSec }} </p>
        <p>{{ data_TA.Bytes_PerReq }} </p>
        <p>{{ data_TA.Duration_PerReq }} </p>
        <p>{{ data_TA.Duration_PerReq }} </p>
        
    </div>
    <script type="text/javascript">
        var times = [0,5,10,15,20,25,30,35,40,45,50,55,60];
        //veu
        new Vue({
            el: '#app',
            extends: VueChartJs.Bar,
            data: {
                message: 'show data',
                data_TA: []
            },
            methods: {
                getData: function() {
                    setInterval(() => {
                        axios.get("data3.php").then((response)=>{
                            //console.log(response.data);
                            this.data_TA = response.data;
                            console.log(this.data_TA);
                        })
                        .catch((err) => console.log(err));
                    }, 1000); // 1000 =  1 วินาที
                },
                
            },
            beforeMount() {
                this.getData()
                this.renderChart({
                    labels: times,
                    datasets: [
                        {
                            label: 'Total_Accesses',
                            backgroundColor: '#f87979',
                            data: this.data.Total_Accesses
                        }
                    ]
                },{responsive: true, maintainAspectRatio: false})
            }
        })
    </script>


</body>

</html>
