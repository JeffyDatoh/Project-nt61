<!DOCTYPE html>
<html>
<head>
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/@mdi/font@4.x/css/materialdesignicons.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.min.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
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
<div id="app">
  <v-app id="inspire">
    <div>
      <v-container
        v-for="align in alignments"
        :key="align"
        class="grey lighten-5 mb-6"
      >
        <v-row
          :align="align"
          no-gutters
          style="height: 150px;"
        >
          <v-col
            v-for="n in 3"
            :key="n"
          >
            <v-card
              class="pa-2"
              outlined
              tile
            >
              One of three columns
            </v-card>
          </v-col>
        </v-row>
      </v-container>
  
      <v-container class="grey lighten-5">
        <v-row
          no-gutters
          style="height: 150px;"
        >
          <v-col
            v-for="align in alignments"
            :key="align"
            :align-self="align"
          >
            <v-card
              class="pa-2"
              outlined
              tile
            >
              One of three columns
            </v-card>
          </v-col>
        </v-row>
      </v-container>
    </div>
  </v-app>
</div>

  
  <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12"></script>
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
  <script src="https://unpkg.com/vue-chartjs/dist/vue-chartjs.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.js"></script>
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
  </script>
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
  </script>

  <script>
    new Vue({
      el: '#app',
      vuetify: new Vuetify(),
      data: () => ({
            drawer: false,
            group: null,
            items: [
              { title: 'Home', icon: 'mdi-home', to:'/'},
              { title: 'Account', icon: 'mdi-account', to:'/account'}
            ],
            data_ta: [],
            data_tk: [],
            alignments: [
              'start',
              'center',
              'end',
            ],
    }),
      methods: {
            getData: function() {
                setInterval(() => {
                    axios.get("data.php").then((response) => {

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