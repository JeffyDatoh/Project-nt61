<!DOCTYPE html>
<html lang="en">

<script src="https://cdn.jsdelivr.net/npm/vue@2.6.12"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
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
    <chart_ta></chart_ta>
    </div>


    <script>

    var times = [0, 5, 10, 15, 20, 25, 30, 35, 40, 45, 50, 55, 60];
    Vue.component('chart_ta', {
        extends: VueChartJs.Line,
        data: () => ({
            chartdata: {
                labels: times,
                datasets: [{
                    label: 'Total_Accesses',
                    backgroundColor: '#f87979',
                    data: this.pulldata
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false
            }
        }),
        mounted() {
            this.renderChart(this.chartdata, this.options)
        }
       
    })
    var vm = new Vue({
            el: '#app',
            data: () => {
                return{
                    pulldata: []
                }
                    
            },
            methods: {
            getData: function() {
                setInterval(() => {
                    axios.get("data3.php").then((response) => {
                        
                        console.log(response.data.Total_Accesses);

                        //parseInt from response.data
                        var Total_Accesses = parseInt(response.data.Total_Accesses);

                        //update data
                        var index = 0;
                        if(this.pulldata.length < 13) {
                            //push data
                            this.pulldata.push(Total_Accesses);
                        }else{
                            //romove data index 0
                            this.pulldata.splice(index, 1);
                            //push data
                            this.pulldata.push(Total_Accesses);
                        }
                        //show data
                        console.log(this.pulldata)

                        //render chart update
                        this.chart_ta.renderChart(this.chartdata, this.options)

                    }).catch((err) => console.log(err));
                }, 5000); // 5000 =  5 วินาที
            }
        },mounted() {
            this.getData()
            this.chart_ta.renderChart(this.chartdata, this.options)
        }
    })
    </script>


</body>

</html>