<!DOCTYPE html>
<html lang="en">
<script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"></script>
<script src="https://unpkg.com/vue-chartjs/dist/vue-chartjs.min.js"></script>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test </title>
</head>

<body>
    <p>veu</p>

    <div id="chart"></div>


    <script>
    var times = [0, 5, 10, 15, 20, 25, 30, 35, 40, 45, 50, 55, 60];
    new Vue({
        el: '#chart',
        extends: VueChartJs.Bar,
        data: () => ({
            chartdata: {
                labels: times,
                datasets: [{
                    label: 'Total_Accesses',
                    backgroundColor: '#f87979',
                    data: []
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

                        //upades data
                        var index = 0;
                        if(this.chartdata.datasets[0].data.length < 13) {
                            //push data
                            this.chartdata.datasets[0].data.push(Total_Accesses);
                        }else{
                            //romove data index 0
                            this.chartdata.datasets[0].data.splice(index, 1);
                            //push data
                            this.chartdata.datasets[0].data.push(Total_Accesses);
                        }

                        //show data
                        console.log(this.chartdata.datasets[0].data)

                        //render chart update
                        this.renderChart(this.chartdata, this.options)

                    }).catch((err) => console.log(err));
                }, 1000*2); // 1000 =  1 วินาที
            },
        },

        mounted() {
            this.renderChart(this.chartdata, this.options)
            this.getData()
        }
    })
    </script>


</body>

</html>