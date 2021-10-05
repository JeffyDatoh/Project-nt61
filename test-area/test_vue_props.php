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
<style>
    .container{
        width: 1224px;
        margin: 0 auto;
    }
    .layout{
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 2rem;
    }
    .items{
        width: 500px;
    }
</style>
<body>
    <div id="app" class="container">
        <div>
            {{message}}
        </div>
        <div class="layout">
            <div class="items">
                <chart_ta :data_ta="data_ta" />
            </div>
            <div class="items">
                <chart_tk :data_tk="data_tk" />
            </div>
        </div>


        <div>okok</div>
    </div>


    <script>
    var times = [0, 5, 10, 15, 20, 25, 30, 35, 40, 45, 50, 55, 60];
    //Component Total_Accesses ****************************************************
    Vue.component('chart_ta', {
        extends: VueChartJs.Line,
        props: {
            data_ta: {
                type: Array,
            },
        },
        data() {
            return {
                chartdata: {
                    labels: times,
                    datasets: [{
                        label: 'Total_Accesses',
                        backgroundColor: '#f87979',
                        data: this.data_ta
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false
                }
            }
        },
        methods: {
            refresh_chart: function() {
                setInterval(() => {
                    this.renderChart(this.chartdata, this.options)
                }, 2000)
            }
        },
        mounted() {
            this.renderChart(this.chartdata, this.options)
            this.refresh_chart();
        },
        template: '<div>{{chartdata}}</div>'

    })
    //component Total_kBytes ********************************************************************
    Vue.component('chart_tk', {
        extends: VueChartJs.Line,
        props: {
            data_tk: {
                type: Array,
            },
        },
        data() {
            return {
                chartdata: {
                    labels: times,
                    datasets: [{
                        label: 'Total_kBytes',
                        backgroundColor: '#f87979',
                        data: this.data_tk
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false
                }
            }

        },
        methods: {
            refresh_chart: function() {
                setInterval(() => {
                    this.renderChart(this.chartdata, this.options)
                }, 2000)
            }
        },
        mounted() {
            this.renderChart(this.chartdata, this.options)
            this.refresh_chart();
        },
        template: '<div>{{chartdata}}</div>'

    })

    //Main *************************************************
    var vm = new Vue({
        el: '#app',
        data: {
            message: 'Web Server Performance Monitoring System',
            data_ta: [],
            data_tk: []
        },

        methods: {
            getData: function() {
                setInterval(() => {
                    axios.get("data2.php").then((response) => {

                        console.log('Total_Accesses:', response.data.Total_Accesses);
                        console.log('Total_kBytes:', response.data.Total_kBytes);

                        //parseInt from response.data
                        var Total_Accesses = parseFloat(response.data.Total_Accesses);
                        var Total_kBytes = parseFloat(response.data.Total_kBytes);

                        //update data
                        var index = 0;
                        if (this.data_ta.length < 13) {
                            //push data
                            this.data_ta.push(Total_Accesses);
                            this.data_tk.push(Total_kBytes);
                        } else {
                            //romove data index 0
                            this.data_ta.splice(index, 1);
                            this.data_tk.splice(index, 1);
                            //push data
                            this.data_ta.push(Total_Accesses);
                            this.data_tk.push(Total_kBytes);
                        }

                        //show data
                        console.log('data_ta', this.data_ta)
                        console.log('data_tk', this.data_tk)

                    }).catch((err) => console.log(err));
                }, 2000); // 5000 =  5 วินาที
            }
        },
        mounted() {
            this.getData()
        }


    })
    </script>


</body>

</html>