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
    <title>Test chart</title>
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
            <div class="items">
                <chart_cpus :data_cpus="data_cpus" />
            </div>
            <div class="items">
                <chart_cpul :data_cpul="data_cpul" />
            </div>
            <div class="items">
                <chart_ut :data_ut="data_ut" />
            </div>
            <div class="items">
                <chart_rps :data_rps="data_rps" />
            </div>
            <div class="items">
                <chart_bps :data_bps="data_bps" />
            </div>
            <div class="items">
                <chart_bpr :data_bpr="data_bpr" />
            </div>
            <div class="items">
                <chart_dpr :data_dpr="data_dpr" />
            </div>
        </div>


        <div>okok</div>
    </div>


    <script>
    var times = [0, 5, 10, 15, 20, 25, 30, 35, 40, 45, 50, 55, 60];
    //***** Component Total_Accesses ****************************************************
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
    //***** component Total_kBytes ********************************************************************
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
    //***** component CPU_System ********************************************************************
    Vue.component('chart_cpus', {
        extends: VueChartJs.Line,
        props: {
            data_cpus: {
                type: Array,
            },
        },
        data() {
            return {
                chartdata: {
                    labels: times,
                    datasets: [{
                        label: 'CPU_System',
                        backgroundColor: '#f87979',
                        data: this.data_cpus
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
    
    //***** component CPU_Load ********************************************************************
    Vue.component('chart_cpul', {
        extends: VueChartJs.Line,
        props: {
            data_cpul: {
                type: Array,
            },
        },
        data() {
            return {
                chartdata: {
                    labels: times,
                    datasets: [{
                        label: 'CPU_Load',
                        backgroundColor: '#f87979',
                        data: this.data_cpul
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
        
    //***** component Uptime ********************************************************************
    Vue.component('chart_ut', {
        extends: VueChartJs.Line,
        props: {
            data_ut: {
                type: Array,
            },
        },
        data() {
            return {
                chartdata: {
                    labels: times,
                    datasets: [{
                        label: 'Uptime',
                        backgroundColor: '#f87979',
                        data: this.data_ut
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
        
    //***** component Req_PerSec ********************************************************************
    Vue.component('chart_rps', {
        extends: VueChartJs.Line,
        props: {
            data_rps: {
                type: Array,
            },
        },
        data() {
            return {
                chartdata: {
                    labels: times,
                    datasets: [{
                        label: 'Req_PerSec',
                        backgroundColor: '#f87979',
                        data: this.data_rps
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
        
    //***** component Bytes_PerSec ********************************************************************
    Vue.component('chart_bps', {
        extends: VueChartJs.Line,
        props: {
            data_bps: {
                type: Array,
            },
        },
        data() {
            return {
                chartdata: {
                    labels: times,
                    datasets: [{
                        label: 'Bytes_PerSec',
                        backgroundColor: '#f87979',
                        data: this.data_bps
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
        
    //***** component Bytes_PerReq ********************************************************************
    Vue.component('chart_bpr', {
        extends: VueChartJs.Line,
        props: {
            data_bpr: {
                type: Array,
            },
        },
        data() {
            return {
                chartdata: {
                    labels: times,
                    datasets: [{
                        label: 'Bytes_PerReq',
                        backgroundColor: '#f87979',
                        data: this.data_bpr
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
        
    //***** component Duration_PerReq ********************************************************************
    Vue.component('chart_dpr', {
        extends: VueChartJs.Line,
        props: {
            data_dpr: {
                type: Array,
            },
        },
        data() {
            return {
                chartdata: {
                    labels: times,
                    datasets: [{
                        label: 'Duration_PerReq',
                        backgroundColor: '#f87979',
                        data: this.data_dpr
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
            pdata_ta: [],
            data_ta: [],
            pdata_tk: [],
            data_tk: [],
            pdata_cpus: [],
            data_cpus: [],
            pdata_cpul: [],
            data_cpul: [],
            pdata_ut: [],
            data_ut: [],
            pdata_rps: [],
            data_rps: [],
            pdata_bps: [],
            data_bps: [],
            pdata_bpr: [],
            data_bpr: [],
            pdata_dpr: [],
            data_dpr: [],
        },

        methods: {
            getData: function() {
                setInterval(() => {
                    axios.get("data.php").then((response) => {

                        console.log('Total_Accesses:', response.data.Total_Accesses);
                        console.log('Total_kBytes:', response.data.Total_kBytes);
                        console.log('CPU_System:', response.data.CPU_System);
                        console.log('CPU_Load:', response.data.CPU_Load);
                        console.log('Uptime:', response.data.Uptime);
                        console.log('Req_PerSec:', response.data.Req_PerSec);
                        console.log('Bytes_PerSec:', response.data.Bytes_PerSec);
                        console.log('Bytes_PerReq:', response.data.Bytes_PerReq);
                        console.log('Duration_PerReq:', response.data.Duration_PerReq);

                        //***** parseFloat from response.data *****
                        var Total_Accesses = parseFloat(response.data.Total_Accesses);
                        var Total_kBytes = parseFloat(response.data.Total_kBytes);
                        var CPU_System = parseFloat(response.data.CPU_System);
                        var CPU_Load = parseFloat(response.data.CPU_Load);
                        var Uptime = parseFloat(response.data.Uptime);
                        var Req_PerSec = parseFloat(response.data.Req_PerSec);
                        var Bytes_PerSec = parseFloat(response.data.Bytes_PerSec);
                        var Bytes_PerReq = parseFloat(response.data.Bytes_PerReq);
                        var Duration_PerReq = parseFloat(response.data.Duration_PerReq);

                        //***** update data ******
                        var index = 0;
                        if (this.pdata_ta.length < 13) {

                            //***** push data Total_Accesses*****
                            this.pdata_ta.push(Total_Accesses);
                            if(this.data_ta.length < 13){
                                if(this.data_ta.length == 0){
                                    this.data_ta.push(0);     
                                }else {
                                    this.data_ta.push((this.pdata_ta[(this.pdata_ta.length)-1]) - (this.pdata_ta[(this.pdata_ta.length)-2]));
                                }
                            }

                            //***** push data Total_kBytes *****
                            this.pdata_tk.push(Total_kBytes);
                            if(this.data_tk.length < 13){
                                if(this.data_tk.length == 0){
                                    this.data_tk.push(0);     
                                }else {
                                    this.data_tk.push((this.pdata_tk[(this.pdata_tk.length)-1]) - (this.pdata_tk[(this.pdata_tk.length)-2]));
                                }
                            }

                            //***** push data CPU_System *****
                            this.pdata_cpus.push(CPU_System);
                            if(this.data_cpus.length < 13){
                                if(this.data_cpus.length == 0){
                                    this.data_cpus.push(0);     
                                }else {
                                    this.data_cpus.push((this.pdata_cpus[(this.pdata_cpus.length)-1]) - (this.pdata_cpus[(this.pdata_cpus.length)-2]));
                                }
                            }

                            //***** push data CPU_Load *****
                            this.pdata_cpul.push(CPU_Load);
                            if(this.data_cpul.length < 13){
                                if(this.data_cpul.length == 0){
                                    this.data_cpul.push(0);     
                                }else {
                                    this.data_cpul.push((this.pdata_cpul[(this.pdata_cpul.length)-1]) - (this.pdata_cpul[(this.pdata_cpul.length)-2]));
                                }
                            }

                            //***** push data Uptime *****
                            this.pdata_ut.push(Uptime);
                            if(this.data_ut.length < 13){
                                if(this.data_ut.length == 0){
                                    this.data_ut.push(0);     
                                }else {
                                    this.data_ut.push((this.pdata_ut[(this.pdata_ut.length)-1]) - (this.pdata_ut[(this.pdata_ut.length)-2]));
                                }
                            }

                            //***** push data Req_PerSec *****
                            this.pdata_rps.push(Req_PerSec);
                            if(this.data_rps.length < 13){
                                if(this.data_rps.length == 0){
                                    this.data_rps.push(0);     
                                }else {
                                    this.data_rps.push((this.pdata_rps[(this.pdata_rps.length)-1]) - (this.pdata_rps[(this.pdata_rps.length)-2]));
                                }
                            }

                            //***** push data Bytes_PerSec *****
                            this.pdata_bps.push(Bytes_PerSec);
                            if(this.data_bps.length < 13){
                                if(this.data_bps.length == 0){
                                    this.data_bps.push(0);     
                                }else {
                                    this.data_bps.push((this.pdata_bps[(this.pdata_bps.length)-1]) - (this.pdata_bps[(this.pdata_bps.length)-2]));
                                }
                            }
                            //***** push data Bytes_PerReq *****
                            this.pdata_bpr.push(Bytes_PerReq);
                            if(this.data_bpr.length < 13){
                                if(this.data_bpr.length == 0){
                                    this.data_bpr.push(0);     
                                }else {
                                    this.data_bpr.push((this.pdata_bpr[(this.pdata_bpr.length)-1]) - (this.pdata_bpr[(this.pdata_bpr.length)-2]));
                                }
                            }

                            //***** push data Duration_PerReq *****
                            this.pdata_dpr.push(Duration_PerReq);
                            if(this.data_dpr.length < 13){
                                if(this.data_dpr.length == 0){
                                    this.data_dpr.push(0);     
                                }else {
                                    this.data_dpr.push((this.pdata_dpr[(this.pdata_dpr.length)-1]) - (this.pdata_dpr[(this.pdata_dpr.length)-2]));
                                }
                            }


                            
                        } else {
                            //***** romove data index 0 *****
                            this.pdata_ta.splice(index, 1);
                            this.data_ta.splice(index, 1);

                            this.pdata_tk.splice(index, 1);
                            this.data_tk.splice(index, 1);

                            this.pdata_cpus.splice(index, 1);
                            this.data_cpus.splice(index, 1);
                            
                            this.pdata_cpul.splice(index, 1);
                            this.data_cpul.splice(index, 1);

                            this.pdata_ut.splice(index, 1);
                            this.data_ut.splice(index, 1);

                            this.pdata_rps.splice(index, 1);
                            this.data_rps.splice(index, 1);

                            this.pdata_bps.splice(index, 1);
                            this.data_bps.splice(index, 1);

                            this.pdata_bpr.splice(index, 1);
                            this.data_bpr.splice(index, 1);

                            this.pdata_dpr.splice(index, 1);
                            this.data_dpr.splice(index, 1);



                            //***** push data *****
                            this.pdata_ta.push(Total_Accesses);
                            this.data_ta.push((this.pdata_ta[(this.pdata_ta.length)-1]) - (this.pdata_ta[(this.pdata_ta.length)-2]));

                            this.pdata_tk.push(Total_kBytes);
                            this.data_tk.push((this.pdata_tk[(this.pdata_tk.length)-1]) - (this.pdata_tk[(this.pdata_tk.length)-2]));

                            this.pdata_cpus.push(CPU_System);
                            this.data_cpus.push((this.pdata_cpus[(this.pdata_cpus.length)-1]) - (this.pdata_cpus[(this.pdata_cpus.length)-2]));

                            this.pdata_cpul.push(CPU_Load);
                            this.data_cpul.push((this.pdata_cpul[(this.pdata_cpul.length)-1]) - (this.pdata_cpul[(this.pdata_cpul.length)-2]));

                            this.pdata_ut.push(Uptime);
                            this.data_ut.push((this.pdata_ut[(this.pdata_ut.length)-1]) - (this.pdata_ut[(this.pdata_ut.length)-2]));

                            this.pdata_rps.push(Req_PerSec);
                            this.data_rps.push((this.pdata_rps[(this.pdata_rps.length)-1]) - (this.pdata_rps[(this.pdata_rps.length)-2]));

                            this.pdata_bps.push(Bytes_PerSec);
                            this.data_bps.push((this.pdata_bps[(this.pdata_bps.length)-1]) - (this.pdata_bps[(this.pdata_bps.length)-2]));

                            this.pdata_bpr.push(Bytes_PerReq);
                            this.data_bpr.push((this.pdata_bpr[(this.pdata_bpr.length)-1]) - (this.pdata_bpr[(this.pdata_bpr.length)-2]));

                            this.pdata_dpr.push(Duration_PerReq);
                            this.data_dpr.push((this.pdata_dpr[(this.pdata_dpr.length)-1]) - (this.pdata_dpr[(this.pdata_dpr.length)-2]));
                        }
                        
                    // ***** average data *****

                        // ***** average data Total_Accesses *****
                        var total_ta = 0,
                            length_ta = this.data_ta.length;

                        for (var i = 0; i < length_ta; i++) {
                            total_ta += parseFloat(this.data_ta[i]);
                        }
                        avg_ta = total_ta / ((length_ta)-1);



                        //**** show data ****
                        console.log('data_ta', this.data_ta)
                        console.log('data_tk', this.data_tk)
                        console.log('data_cpus', this.data_cpus)
                        console.log('data_cpul', this.data_cpul)
                        console.log('data_ut', this.data_ut)
                        console.log('data_rps', this.data_rps)
                        console.log('data_bps', this.data_bps)
                        console.log('data_bpr', this.data_bpr)
                        console.log('data_dpr', this.data_dpr)

                    //**** show avg****

                        //**** show avg Total_Accesses ****
                        console.log('newdata:',this.data_ta[this.data_ta.length - 1])
                        console.log('Total ta: ',total_ta)
                        console.log('avg ta: ',avg_ta)

                    }).catch((err) => console.log(err));
                }, 3000); // 3000 =  3 วินาที
            }
        },
        mounted() {
            this.getData()
        }


    })
    </script>


</body>

</html>