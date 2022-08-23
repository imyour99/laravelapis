@extends('common-layout/master')
@section('data-content')
    <div class="row row-sm mt-4">

        <div class="col-lg-12 col-sm-12 mb-4 ml-2">
            <strong class="tx-16 black-text font-weight-bold">STATISTIQUES</strong>
        </div>

        <div class="col-lg-12 col-sm-12 mb-5 ml-2">

            <div class="statistics-tab-div row">

                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="rounded-corner bg-white p-4">
                        <strong class="mb-4 stats-title">Filtres</strong>

                        <div class="row mb-4 mt-4">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <label class="small-dark-gray-text">Du</label>
                                <span class="blue-round-span">
                                    <img class="mt-1 ml-1 float-left" src="assets/img/icons/blue-calendar.png">
                                    <input type="text" placeholder="" name="" value="1/1/2021"
                                        class="mt-1 ml-2 input-no-border date stat-date" style="width:80%">
                                </span>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <label class="small-dark-gray-text">Au</label>
                                <span class="blue-round-span">
                                    <img class="mt-1 ml-1 float-left" src="assets/img/icons/blue-calendar.png">
                                    <input type="text" placeholder="" name="" value="1/1/2021"
                                        class="mt-1 ml-2 input-no-border date stat-date" style="width:80%">
                                </span>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <label class="small-dark-gray-text">Categorie</label>
                                <select class="blue-round-span">
                                    <option value="">Collaborateurs</option>
                                </select>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <label class="small-dark-gray-text">Mesure</label>
                                <select class="blue-round-span">
                                    <option value="">Performance</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <label class="small-dark-gray-text">Mesure</label>
                                <div class="row stat-pills">
                                    <div class="col-lg-6 col-md-6 col-sm-6 padding-right-pills">
                                        <div class="pure-blue-pill">
                                            Toutes interventions
                                            <img src="assets/img/icons/blue-white-x.png" class="close-pill">
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-3 padding-right-pills">
                                        <div class="gray-circle-pill">
                                            <span class="green-pill-circle-icon mr-2"></span>
                                            Succés

                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                        <div class="gray-circle-pill">
                                            <span class="orange-pill-circle-icon mr-2"></span>
                                            Semi KO

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="row stat-pills">

                                    <div class="col-lg-2 col-md-2 col-sm-2 padding-right-pills">
                                        <div class="gray-circle-pill">
                                            <span class="red-pill-circle-icon mr-2"></span>
                                            KO

                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-sm-4 padding-right-pills">
                                        <div class="gray-circle-pill">
                                            <span class="blue-pill-circle-icon mr-2"></span>
                                            Accessible

                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-sm-4 padding-right-pills">
                                        <div class="gray-circle-pill">
                                            <span class="gray-pill-circle-icon mr-2"></span>
                                            Inaccessible

                                        </div>
                                    </div>

                                    <div class="col-lg-2 col-md-2 col-sm-2 padding-right-pills">
                                        <span class="text-blue">+ 10 voir</span>
                                    </div>

                                </div>
                            </div>
                        </div>



                    </div>

                    <div class="row mb-4 mt-4 justify-content-center text-center">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <a href="javascript:void(0)" class="btn btn-lightblue px-4 mr-2"
                                style="line-height: 2;border-radius: 7rem !important">Lancer Ma Recherche</a>
                            <a href="javascript:void(0)" class="btn bg-white px-5 text-blue text-bold btn-shadow"
                                style="line-height: 2;border-radius:  7rem !important">Effacer</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 col-md-8 col-sm-12">
                    <div class="rounded-corner bg-white p-4">
                        <div class="row">
                            <div class="col-lg-10 col-md-10 col-sm-10">
                                <strong class="mb-4 stats-title">Stats</strong>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 text-right">
                                <select class="chart-select">
                                    <option value="mois">Mois</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <canvas id="stats"></canvas>
                                <canvas id="pie_c" style="display: none"></canvas>
                                <canvas id="line_c" style="display: none">as</canvas>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 justify-content-center">
                                <div class="row justify-content-center text-center">
                                    <div class="col-lg-5 padding-right-pills">
                                        <a href="javascript:void(0)" id="bar" class="btn-lightlightblue">
                                            <img src="assets/img/icons/bar-chart.png" class="chart-icon" />
                                            Bar Chart
                                        </a>

                                        <a href="javascript:void(0)" id="pie" class="btn-transparent">
                                            <img src="assets/img/icons/pie-chart.png" class="chart-icon" />
                                            Pie Chart
                                        </a>

                                        <a href="javascript:void(0)" id="line" class="btn-transparent">
                                            <img src="assets/img/icons/line-chart.png" class="chart-icon" />
                                            Line Chart
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
@endsection


@section('admin-js')
    <script>
        $("#bar").click(function() {

            $("#stats").show();
            $("#pie_c").hide();
            $("#line_c").hide();

            $("#bar").addClass("btn-lightlightblue");
            $("#pie").addClass("btn-transparent");
            $("#line").addClass("btn-transparent");


            $("#line").removeClass("btn-lightlightblue");
            $("#pie").removeClass("btn-lightlightblue");

        });

        $("#pie").click(function() {

            $("#stats").hide();
            $("#pie_c").show();
            $("#line_c").hide();

            $("#bar").addClass("btn-transparent");
            $("#pie").addClass("btn-lightlightblue");
            $("#line").addClass("btn-transparent");

            $("#bar").removeClass("btn-lightlightblue");
            $("#line").removeClass("btn-lightlightblue");


        });

        $("#line").click(function() {

            $("#stats").hide();
            $("#pie_c").hide();
            $("#line_c").show();

            $("#bar").addClass("btn-transparent");
            $("#pie").addClass("btn-transparent");
            $("#line").addClass("btn-lightlightblue");

            $("#pie").removeClass("btn-lightlightblue");
            $("#bar").removeClass("btn-lightlightblue");
        });
    </script>







    <script type="text/javascript">
        $(function() {
            var ctx10 = document.getElementById("stats").getContext("2d");

            var data = {
                labels: ["January 2021", "February 2021", "March 2021", "April 2021"],
                datasets: [{
                        label: "Bar 1",
                        backgroundColor: "#65c0fc",
                        data: [35, 29, 21, 21],
                        borderWidth: 0
                    },
                    {
                        label: "Bar 2",
                        backgroundColor: "#f58e23",
                        data: [29, 24, 18, 18],
                        borderWidth: 0
                    },
                    {
                        label: "Bar 3",
                        backgroundColor: "#5c4aff",
                        data: [24, 22, 13, 13],
                        borderWidth: 0
                    },
                    {
                        label: "Bar 4",
                        backgroundColor: "#ffc800",
                        data: [19, 15, 11, 11],
                        borderWidth: 0
                    },
                    {
                        label: "Bar 5",
                        backgroundColor: "#474747",
                        data: [24, 22, 13, 13],
                        borderWidth: 0
                    },
                    {
                        label: "Bar 6",
                        backgroundColor: "#ff61f4",
                        data: [35, 30, 22, 22],
                        borderWidth: 0
                    },
                    {
                        label: "Bar 7",
                        backgroundColor: "#87de22",
                        data: [37, 33, 23.3, 23.3],
                        borderWidth: 0
                    },
                    {
                        label: "Bar 8",
                        backgroundColor: "#69e5ca",
                        data: [35, 29, 21, 21],
                        borderWidth: 0
                    },
                    {
                        label: "Bar 9",
                        backgroundColor: "#1c7eff",
                        data: [32, 25, 18, 15],
                        borderWidth: 0
                    },
                    {
                        label: "Bar 10",
                        backgroundColor: "#ff4a60",
                        data: [35, 8, 20, 20],
                        borderWidth: 0
                    },
                    {
                        label: "Bar 11",
                        backgroundColor: "#b67c49",
                        data: [38, 18, 22, 22],
                        borderWidth: 0
                    },
                    {
                        label: "Bar 12",
                        backgroundColor: "#bbabff",
                        data: [34, 2, 20, 20],
                        borderWidth: 0
                    }
                ]
            };

            var myBarChart = new Chart(ctx10, {
                type: 'bar',
                data: data,
                options: {
                    layout: {
                        padding: {
                            left: 20,
                            right: 20,
                            top: 40,
                            bottom: 20
                        }
                    },
                    plugins: {
                        datalabels: {
                            display: false
                        }
                    },
                    legend: {
                        display: false
                    },
                    scales: {
                        yAxes: [{
                            ticks: {
                                min: 0
                            },
                            scaleLabel: {
                                display: true,
                                labelString: 'No. of Incidents'
                            }
                        }],
                        xAxes: [{
                            barPercentage: 0.45,
                            gridLines: {
                                display: false
                            },
                        }]
                    }
                }
            });

            $('.tour-switch').click(function() {
                var tourSwitches = $('.tour-switch');

                $.each(tourSwitches, function() {
                    $(this).removeClass('tour-switch-active');
                });

                $(this).addClass('tour-switch-active');
            });

            $('#clientDataTable').dataTable({
                "pageLength": 25
            });
            $('#clientDataTable_length').hide();
            $('#clientDataTable_filter').hide();

            $('.right-slim-div').slimscroll({
                color: '#000000',
                size: '5px',
                height: '650px',
                alwaysVisible: true
            });

            $('.content-slim-div').slimscroll({
                color: '#000000',
                size: '5px',
                height: '650px',
                alwaysVisible: true
            });


        });

        $('.stat-date').datepicker({

            dateFormat: 'dd-M-yy',
            minDate: 1,
            todayHighlight: true
        });
    </script>




    <script>
        var oilCanvas = document.getElementById("pie_c");

        Chart.defaults.global.defaultFontFamily = "Lato";
        Chart.defaults.global.defaultFontSize = 18;

        var oilData = {
            labels: [
                "Jan 2022",
                "Feb 2022",
                "March 2022",
                "April 2022",

            ],
            datasets: [{
                data: [133.3, 86.2, 52.2, 51.2],
                backgroundColor: [
                    "#FF6384",
                    "#63FF84",
                    "#CDF216",
                    "#F216CD",

                ]
            }]
        };

        var pieChart = new Chart(oilCanvas, {
            type: 'pie',
            data: oilData
        });
    </script>



    <script>
        var ctx = document.getElementById("line_c");

        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ["Jan 2022", "Feb 2022", "March 2022", "April 2022"
                ],
                datasets: [{
                        label: 'Series 1', // Name the series
                        data: [10, 12, 10,14], // Specify the data values array
                        fill: false,
                        borderColor: '#2196f3', // Add custom color border (Line)
                        backgroundColor: '#2196f3', // Add custom color background (Points and Fill)
                        borderWidth: 1 // Specify bar border width
                    },
                    {
                        label: 'Series 2', // Name the series
                        data: [12, 15, 8,16], // Specify the data values array
                        fill: false,
                        borderColor: '#4CAF50', // Add custom color border (Line)
                        backgroundColor: '#4CAF50', // Add custom color background (Points and Fill)
                        borderWidth: 1 // Specify bar border width
                    }
                ]
            },
            options: {
                responsive: true, // Instruct chart js to respond nicely.
                maintainAspectRatio: true, // Add to prevent default behaviour of full-width/height
            }
        });
    </script>
@endsection
