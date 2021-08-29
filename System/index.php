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
        <chart_tkb></chart_tkb>
        <chart_cpus></chart_cpus>
        <chart_cpul></chart_cpul>
        <chart_ut></chart_ut>
        <chart_rps></chart_rps>
        <chart_bps></chart_bps>
        <chart_bpr></chart_bpr>
        <chart_dpr></chart_dpr>
    </div>


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
                    axios.get("data.php").then((response) => {
                        
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
                }, 5000); // 5000 =  5 วินาที
            },
        },

        mounted() {
            this.renderChart(this.chartdata, this.options)
            this.getData()
        }
    })

    //chart Total_kBytes
    Vue.component('chart_tkb', {
        extends: VueChartJs.Line,
        data: () => ({
            chartdata: {
                labels: times,
                datasets: [{
                    label: 'Total_kBytes',
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
                    axios.get("data.php").then((response) => {
                        
                        console.log(response.data.Total_kBytes);

                        //parseInt from response.data
                        var Total_kBytes = parseInt(response.data.Total_kBytes);

                        //upades data
                        var index = 0;
                        if(this.chartdata.datasets[0].data.length < 13) {
                            //push data
                            this.chartdata.datasets[0].data.push(Total_kBytes);
                        }else{
                            //romove data index 0
                            this.chartdata.datasets[0].data.splice(index, 1);
                            //push data
                            this.chartdata.datasets[0].data.push(Total_kBytes);
                        }

                        //show data
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
    //chart CPU_System
    Vue.component('chart_cpus', {
        extends: VueChartJs.Line,
        data: () => ({
            chartdata: {
                labels: times,
                datasets: [{
                    label: 'CPU_System',
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
                    axios.get("data.php").then((response) => {
                        
                        console.log(response.data.CPU_System);

                        //parseInt from response.data
                        var CPU_System = parseFloat(response.data.CPU_System);

                        //upades data
                        var index = 0;
                        if(this.chartdata.datasets[0].data.length < 13) {
                            //push data
                            this.chartdata.datasets[0].data.push(CPU_System);
                        }else{
                            //romove data index 0
                            this.chartdata.datasets[0].data.splice(index, 1);
                            //push data
                            this.chartdata.datasets[0].data.push(CPU_System);
                        }

                        //show data
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
    //CPU_Load
    Vue.component('chart_cpul', {
        extends: VueChartJs.Line,
        data: () => ({
            chartdata: {
                labels: times,
                datasets: [{
                    label: 'CPU_Load',
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
                    axios.get("data.php").then((response) => {
                        
                        console.log(response.data.CPU_Load);

                        //parseInt from response.data
                        var CPU_Load = parseFloat(response.data.CPU_Load);

                        //upades data
                        var index = 0;
                        if(this.chartdata.datasets[0].data.length < 13) {
                            //push data
                            this.chartdata.datasets[0].data.push(CPU_Load);
                        }else{
                            //romove data index 0
                            this.chartdata.datasets[0].data.splice(index, 1);
                            //push data
                            this.chartdata.datasets[0].data.push(CPU_Load);
                        }

                        //show data
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

    //chart Uptime
    Vue.component('chart_ut', {
        extends: VueChartJs.Line,
        data: () => ({
            chartdata: {
                labels: times,
                datasets: [{
                    label: 'Uptime',
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
                    axios.get("data.php").then((response) => {
                        
                        console.log(response.data.Uptime);

                        //parseInt from response.data
                        var Uptime = parseInt(response.data.Uptime);

                        //upades data
                        var index = 0;
                        if(this.chartdata.datasets[0].data.length < 13) {
                            //push data
                            this.chartdata.datasets[0].data.push(Uptime);
                        }else{
                            //romove data index 0
                            this.chartdata.datasets[0].data.splice(index, 1);
                            //push data
                            this.chartdata.datasets[0].data.push(Uptime);
                        }

                        //show data
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

    // chart Req_PerSec
    Vue.component('chart_rps', {
        extends: VueChartJs.Line,
        data: () => ({
            chartdata: {
                labels: times,
                datasets: [{
                    label: 'Req_PerSec',
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
                    axios.get("data.php").then((response) => {
                        
                        console.log(response.data.Req_PerSec);

                        //parseInt from response.data
                        var Req_PerSec = parseFloat(response.data.Req_PerSec);

                        //upades data
                        var index = 0;
                        if(this.chartdata.datasets[0].data.length < 13) {
                            //push data
                            this.chartdata.datasets[0].data.push(Req_PerSec);
                        }else{
                            //romove data index 0
                            this.chartdata.datasets[0].data.splice(index, 1);
                            //push data
                            this.chartdata.datasets[0].data.push(Req_PerSec);
                        }

                        //show data
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

    // chart Bytes_PerSec
    Vue.component('chart_bps', {
        extends: VueChartJs.Line,
        data: () => ({
            chartdata: {
                labels: times,
                datasets: [{
                    label: 'Bytes_PerSec',
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
                    axios.get("data.php").then((response) => {
                        
                        console.log(response.data.Bytes_PerSec);

                        //parseInt from response.data
                        var Bytes_PerSec = parseFloat(response.data.Bytes_PerSec);

                        //upades data
                        var index = 0;
                        if(this.chartdata.datasets[0].data.length < 13) {
                            //push data
                            this.chartdata.datasets[0].data.push(Bytes_PerSec);
                        }else{
                            //romove data index 0
                            this.chartdata.datasets[0].data.splice(index, 1);
                            //push data
                            this.chartdata.datasets[0].data.push(Bytes_PerSec);
                        }

                        //show data
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

    //chart Bytes_PerReq
    Vue.component('chart_bpr', {
        extends: VueChartJs.Line,
        data: () => ({
            chartdata: {
                labels: times,
                datasets: [{
                    label: 'Bytes_PerReq',
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
                    axios.get("data.php").then((response) => {
                        
                        console.log(response.data.Bytes_PerReq);

                        //parseInt from response.data
                        var Bytes_PerReq = parseFloat(response.data.Bytes_PerReq);

                        //upades data
                        var index = 0;
                        if(this.chartdata.datasets[0].data.length < 13) {
                            //push data
                            this.chartdata.datasets[0].data.push(Bytes_PerReq);
                        }else{
                            //romove data index 0
                            this.chartdata.datasets[0].data.splice(index, 1);
                            //push data
                            this.chartdata.datasets[0].data.push(Bytes_PerReq);
                        }

                        //show data
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

    // chart Duration_PerReq
    Vue.component('chart_dpr', {
        extends: VueChartJs.Line,
        data: () => ({
            chartdata: {
                labels: times,
                datasets: [{
                    label: 'Duration_PerReq',
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
                    axios.get("data.php").then((response) => {
                        
                        console.log(response.data.Duration_PerReq);

                        //parseInt from response.data
                        var Duration_PerReq = parseFloat(response.data.Duration_PerReq);

                        //upades data
                        var index = 0;
                        if(this.chartdata.datasets[0].data.length < 13) {
                            //push data
                            this.chartdata.datasets[0].data.push(Duration_PerReq);
                        }else{
                            //romove data index 0
                            this.chartdata.datasets[0].data.splice(index, 1);
                            //push data
                            this.chartdata.datasets[0].data.push(Duration_PerReq);
                        }

                        //show data
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
            }
    })
    </script>


</body>

</html>