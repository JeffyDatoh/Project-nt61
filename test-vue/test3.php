<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Web Server Performance Monitoring System </title>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script src="https://unpkg.com/vue-chartjs/dist/vue-chartjs.min.js"></script>

    <div id="app">
        <h2>{{ message }} </h2>
        <chart_ta></chart_ta>
    </div>

<?php
        $url = "https://nithi.cs.psu.ac.th/server-status?auto";

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HEADER, false);
    
        $data = curl_exec($curl);
    
        curl_close($curl);
        //print_r($data);
    
        $list = explode("\n",$data);
    
        $Total_Accesses= explode(": ",$list[13]);
        $Total_kBytes= explode(": ",$list[14]);
        $CPU_System= explode(": ",$list[17]);
        $CPU_Load= explode(": ",$list[20]);
        $Uptime= explode(": ",$list[21]);
        $Req_PerSec= explode(": ",$list[22]);
        $Bytes_PerSec= explode(": ",$list[23]);
        $Bytes_PerReq= explode(": ",$list[24]);
        $Duration_PerReq= explode(": ",$list[25]);

        echo $Total_Accesses[1];
?>

    <script>
    var times = [0, 5, 10, 15, 20, 25, 30, 35, 40, 45, 50, 55, 60];
    
    // chart Total_Accesses
    Vue.component('chart_ta', {
        extends: VueChartJs.Line,
        data: () => ({
            chartdata: {
                labels: times,
                datasets: [{
                    label: 'Total_Accesses',
                    backgroundColor: '#f87979',
                    data: [],
                    pulldata: []
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false
            }
        }),
        methods: {
            getData: function() {
                setInterval(() => {
                    axios.get("data3.php").then((response) => {
                        
                        console.log(response.data.Total_Accesses);

                        //parseInt from response.data
                        var Total_Accesses = parseInt(response.data.Total_Accesses);

                        //update data
                        var index = 0;
                        if(this.chartdata.datasets[0].pulldata.length < 13) {
                            //push data
                            this.chartdata.datasets[0].pulldata.push(Total_Accesses);
                            if(this.chartdata.datasets[0].data.length < 13){
                                if(this.chartdata.datasets[0].data.length == 0){
                                    this.chartdata.datasets[0].data.push(0);     
                                }else {
                                    this.chartdata.datasets[0].data.push((this.chartdata.datasets[0].pulldata[(this.chartdata.datasets[0].pulldata.length)-1]) - (this.chartdata.datasets[0].pulldata[(this.chartdata.datasets[0].pulldata.length)-2]));
                                }
                            }
                        }else{
                            //romove data index 0
                            this.chartdata.datasets[0].pulldata.splice(index, 1);
                            this.chartdata.datasets[0].data.splice(index, 1);
                            //push data
                            this.chartdata.datasets[0].pulldata.push(Total_Accesses);
                            this.chartdata.datasets[0].data.push((this.chartdata.datasets[0].pulldata[(this.chartdata.datasets[0].pulldata.length)-1]) - (this.chartdata.datasets[0].pulldata[(this.chartdata.datasets[0].pulldata.length)-2]));
                        }

                        //show data
                        console.log(this.chartdata.datasets[0].pulldata)
                        console.log(this.chartdata.datasets[0].data)

                        //render chart update
                        this.renderChart(this.chartdata, this.options)

                    }).catch((err) => console.log(err));
                }, 5000); // 5000 =  5 วินาที
            },
        },

        mounted() {
            this.renderChart(this.chartdata, this.options)
            this.getData()
        }
    })
    var vm = new Vue({
            el: '#app',
            data: {
                message: 'Web Server Performance Monitoring System'
            },
            
    })
    </script>


</body>

</html>