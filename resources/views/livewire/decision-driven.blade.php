<div class="details">
    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-4 mb-20 ">
            <div class="box">
                <div class="box-body">
                    <p class="txt">Net profit</p>
                    <p class="number">{{ $this->net_income }}</p>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4 mb-20 ">
            <div class="box">
                <div class="box-header">
                    <p>Market share</p>
                </div>
                <div class="box-body">
                    <canvas id="PieChartDicisionDriven" class="canvas_400X400"></canvas>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4 mb-20 ">
            <div class="box">
                <div class="box-header dd">
                    <p class="dd_revenue">Revenue / 914</p>
                    <select class="custom-select dd_revenue_select" id="marketPlace" onchange="updateRevenueChart()">
                        <option value="0" selected>Marketplace...</option>
                        @foreach ($marketPlaces as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                        <option value="0">All</option>
                    </select>
                </div>
                <div class="box-body">
                    <canvas id="BoundaryDicisionDriven" class="canvas_400X400"></canvas>
                </div>
            </div>
        </div>


        <div class="col-sm-12 col-md-6 col-lg-4 mb-20 ">
            <div class="box">
                <div class="box-header">
                    <p>Cost</p>
                </div>
                <div class="box-body">
                    <canvas id="myChart" class="canvas_400X400"></canvas>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4 mb-20 ">
            <div class="box">
                <div class="box-header">
                    <p>Unit sales in countries</p>
                </div>
                <div class="box-body">
                    <canvas id="unitSales" class="canvas_400X400"></canvas>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4 mb-20 ">
            <div class="box">
                <div class="box-header">
                    <p>Pricing vs. Competition</p>
                </div>
                <div class="box-body">
                    <canvas id="pricingvscompetition_line" class="canvas_400X400"></canvas>
                </div>
            </div>
        </div>


        <div class="col-md-6">
            <div class="box">
                <div class="box-header">
                    <p>Bangladesh: <span class="pc">Pricing vs. Competition</span></p>
                </div>
                <div class="box-body">
                    <canvas id="pricingvscompetition_bd_bar"></canvas>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="box">
                <div class="box-header">
                    <p>Nepal: <span class="pc">Pricing vs. Competition</span></p>
                </div>
                <div class="box-body">
                    <canvas id="pricingvscompetition_np_bar"></canvas>
                </div>
            </div>
        </div>

    </div>


    <div class="row">
        <div class="col-12">
            <a href="" class="btn btn-submit">Submit</a>
        </div>
    </div>



</div>

<div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Finish The Game</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-2">
                            <img src="https://freedesignfile.com/upload/2017/12/Alert-Icon.jpg" class="alert_img"
                                alt="">
                        </div>
                        <div class="col-sm-10">
                            After Submit your result you'll <b>redirect to dashboard</b>. <br>
                            And you <b>can not edit</b> this game ans.
                        </div>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a href="{{ route('submitGame') }}">
                        <button type="button" class="btn btn-primary">Confirm</button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script>
        function popup() {
            $('#exampleModal').modal('show');
        }

    </script>


    <script>
        var piechartdicision = document.getElementById('PieChartDicisionDriven').getContext('2d');
        var myPieChart = new Chart(piechartdicision, {
            type: 'pie',
            data: {
                datasets: [{
                    data: [{{ $marketShareValues[0] }}, {{ $marketShareValues[1] }},
                        {{ $marketShareValues[2] }}
                    ],
                    backgroundColor: [
                        'rgba(54, 162, 235, 0.8)',
                        'rgba(255, 99, 132, 0.8)',
                        'rgba(255, 206, 86, 0.8)',
                        'rgba(75, 192, 192, 0.8)',
                        'rgba(153, 102, 255, 0.8)',
                        'rgba(255, 159, 64, 0.8)'
                    ],
                    borderColor: [
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                }],

                // These labels appear in the legend and in the tooltips when hovering different arcs
                labels: [
                    "{{ $marketShareLabels[0] }}",
                    "{{ $marketShareLabels[1] }}",
                    "{{ $marketShareLabels[2] }}",
                ]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            // beginAtZero: false,
                            min: 1,
                            max: {{ $MARKET_TOTAL_SELL_VALUE }},
                        },
                        gridLines: {
                            // display: true,
                            // drawOnChartArea: false,
                            // drawTicks: false,
                        }
                    }],


                },

            }
        });

    </script>


    <script>
        /******************* revenue Decision Driven *****************/
        var bchart = document.getElementById('BoundaryDicisionDriven').getContext('2d');
        var mylineChart = new Chart(bchart, {
            type: 'bar',
            data: {
                labels: ['Bangladesh', 'Nepal'],
                datasets: [{
                    label: 'Total Revenue',
                    data: [{{ $bn_total_revenue }}, {{ $np_total_revenue }}],
                    // barThickness: 50,
                    backgroundColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true,
                            display: false
                        },
                        gridLines: {
                            display: true
                        }
                    }]
                },
                title: {
                    display: false,
                    text: 'Custom Chart Title',
                    position: 'bottom'
                }
            },

        });
        /******************* revenue Decision Driven *****************/


        /******************* cost graph Decision Driven *****************/
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Bangladesh', 'Nepal'],
                datasets: [{
                        label: 'Total Production Cost',
                        data: [{{ $bn_total_cost }}, {{ $np_total_cost }}],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.8)',
                            'rgba(54, 162, 235, 0.8)',

                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',

                        ],
                        borderWidth: 1
                    },


                ],

            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        },
                        gridLines: {
                            // display: true,
                            drawOnChartArea: false,
                            // drawTicks: false,
                        }

                    }],
                    xAxes: [{
                        ticks: {
                            beginAtZero: true
                        },
                        gridLines: {
                            // display: true,
                            drawOnChartArea: false,
                            // drawTicks: false,
                        }

                    }],

                },
            }
        });
        /******************* cost graph Decision Driven-end *****************/


        /******************* unitSales graph Decision Driven *****************/
        var unitSales = document.getElementById('unitSales').getContext('2d');
        let compitision = new Chart(unitSales, {
            type: 'line',
            data: {
                datasets: [{
                        label: 'Bangladesh',
                        data: [{{ $bn_unit_sales }}],
                        type: 'line',
                        backgroundColor: "transparent",
                        borderColor: "green"

                    },
                    {
                        label: 'Nepal',
                        data: [{{ $np_unit_sales }}],
                        type: 'line',
                        backgroundColor: "transparent",
                        borderColor: "blue"

                    }
                ],
                labels: {!! $unitSalesLabel !!}
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            suggestedMin: 50,
                            suggestedMax: 100
                        }
                    }]
                }
            }
        });
        /******************* unitSales graph Decision Driven *****************/


        /******************* Competitors Vs Price graph Decision Driven *****************/
        var pricingvscompetition_line = document.getElementById('pricingvscompetition_line').getContext('2d');
        let price_compitision_line = new Chart(pricingvscompetition_line, {
            type: 'line',
            data: {
                datasets: [{
                        label: 'Price',
                        data: [{{ $price }}],
                        type: 'line',
                        backgroundColor: "transparent",
                        borderColor: "green"

                    },
                    {
                        label: 'Competitors price',
                        data: [{{ $competitor }}],
                        type: 'line',
                        backgroundColor: "transparent",
                        borderColor: "blue"

                    }
                ],
                labels: {!! $pricelabel !!}

            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            suggestedMin: 50,
                            suggestedMax: 100
                        }
                    }]
                }
            }
        });
        /******************* Competitors Vs Price graph Decision Driven-end *****************/

        // console.log({{ $price }});
        /******************* cost graph Decision Driven *****************/




        // Test
        var pricingvscompetition_bd_bar = document.getElementById('pricingvscompetition_bd_bar').getContext('2d');
        var price_compitision_bd_bar = new Chart(pricingvscompetition_bd_bar, {
            type: 'bar',
            data: {
                labels: ['A', 'B'],
                datasets: [{
                        label: "Price",
                        barThickness: 25,
                        backgroundColor: "rgba(54, 162, 235, 0.8)",
                        data: [{{ $price_bd }}]
                    },
                    {
                        label: "Comp Price",
                        barThickness: 20,
                        backgroundColor: "rgba(255, 99, 132, 0.8)",
                        data: [{{ $compt_bd }}]
                    },
                ]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }],
                    xAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

        // nepal
        var pricingvscompetition_np_bar = document.getElementById('pricingvscompetition_np_bar').getContext('2d');
        var price_compitision_np_bar = new Chart(pricingvscompetition_np_bar, {
            type: 'bar',
            data: {
                labels: ['A', 'B'],
                datasets: [{
                        label: "Price",
                        barThickness: 25,
                        backgroundColor: "rgba(54, 162, 235, 0.8)",
                        data: [{{ $price_np }}]
                    },
                    {
                        label: "Comp Price",
                        barThickness: 25,
                        backgroundColor: "rgba(255, 99, 132, 0.8)",
                        data: [{{ $compt_np }}]
                    },
                ]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }],
                    xAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

    </script>

    <script>
        function updateRevenueChart() {
            $.ajax({
                url: "/update-revenue-chart/" + $("#marketPlace").val() + "/" + 1 + "/" + 1,
                success: function(result) {
                    console.log(result.data);
                    mylineChart.data = {
                        labels: result.data.labels,
                        datasets: [{
                            label: result.data.chart_label,
                            data: result.data.values,
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.8)',
                                'rgba(54, 162, 235, 0.8)',

                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',

                            ],
                            borderWidth: 2
                        }]
                    }
                    mylineChart.update();
                }
            });
        };

    </script>


</div>
