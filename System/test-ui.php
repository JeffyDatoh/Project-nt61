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
      <v-app-bar
        color="deep-purple accent-4"
        dense
        dark
      >
        <v-app-bar-nav-icon @click="drawer = true"></v-app-bar-nav-icon>
  
        <v-toolbar-title>Web Server Performance Monitoring System</v-toolbar-title>
  
        <v-spacer></v-spacer>
  
        <v-btn icon>
          <v-icon>mdi-magnify</v-icon>
        </v-btn>
  
        <v-menu
          left
          bottom
        >
          <template v-slot:activator="{ on, attrs }">
            <v-btn
              icon
              v-bind="attrs"
              v-on="on"
            >
              <v-icon>mdi-dots-vertical</v-icon>
            </v-btn>
          </template>
  
          <v-list>
            <v-list-item
              v-for="n in 5"
              :key="n"
              @click="() => {}"
            >
              <v-list-item-title>Option {{ n }}</v-list-item-title>
            </v-list-item>
          </v-list>
        </v-menu>
      </v-app-bar>

      <v-navigation-drawer
        v-model="drawer"
        absolute
        temporary
      >
        <v-list
          nav
          dense
        >
          <v-list-item-group
            v-model="group"
            active-class="deep-purple--text text--accent-4"
          >
          <v-list-item
            v-for="item in items"
            :key="item.title"
            link
          >
            <v-list-item-icon>
              <v-icon>{{ item.icon }}</v-icon>
            </v-list-item-icon>

            <v-list-item-content>
              <v-list-item-title>{{ item.title }}</v-list-item-title>
            </v-list-item-content>
          </v-list-item>
          </v-list-item-group>
        </v-list>
      </v-navigation-drawer>
    </div>

    <v-main>
      <v-row>
        <v-col cols="6">
          <v-card
            class="mt-4 mx-auto"
            max-width="600"
          >
          <v-card-text class="pt-0">
            <div class="container">
              <div class="layout">
                  <div class="items">
                      <chart_ta :data_ta="data_ta" />
                  </div>
              </div>
            </div>
            <v-card-title>
              Total Accesses
            </v-card-title>
            <v-card-subtitle>
              Last Campaign Performance
            </v-card-subtitle>
            <v-divider class="my-2"></v-divider>
            <v-icon
              class="mr-2"
              small
            >
              mdi-clock
            </v-icon>
              <span class="text-caption grey--text font-weight-light">last registration 26 minutes ago</span>
          </v-card-text>
          </v-card>
        </v-col>
        <v-col cols="6">
          <v-card
            class="mt-4 mx-auto"
            max-width="600"
          >
          <v-card-text class="pt-0">
            <div class="container">
              <div class="layout">
                  <div class="items">
                      <chart_tk :data_tk="data_tk" />
                  </div>
              </div>
            </div>
            <div class="text-h6 font-weight-light mb-2">
              Total kBytes
            </div>
            <div class="subheading font-weight-light grey--text">
              Last Campaign Performance
            </div>
            <v-divider class="my-2"></v-divider>
            <v-icon
              class="mr-2"
              small
            >
              mdi-clock
            </v-icon>
              <span class="text-caption grey--text font-weight-light">last registration 26 minutes ago</span>
          </v-card-text>
          </v-card>
        </v-col>
      </v-row>
    </v-main>

    <v-footer app>
        <!-- -->
    </v-footer>
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
            data_tk: []
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