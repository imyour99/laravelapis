@extends('common-layout/master')
@section('data-content')

<?php
//die('hey');
//$data = session()->all();
//echo '<pre>';print_r($data);
?>
<div class="row row-sm mt-lg-4">
    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
        <div class="card custom-card overflow-hidden">
            <div class="card-body">
                <div class="row">
                    <div class="col-xs-12 col-sm-8 my-auto">
                        <h6 class="mb-3 font-weight-bold">NOMBRE D’INSTALLATIONS </h6>
                        <div class="text-left">
                            <h3 class="font-weight-bold mr-3 mb-2 text-blue"> 205 425</h3>
                            <p class="tx-13 my-auto text-muted ">Total du mois</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 my-auto">
                        <svg class="circle-chart" viewbox="0 0 33.83098862 33.83098862" width="100" height="100" xmlns="http://www.w3.org/2000/svg">
                            <circle class="circle-chart__background" stroke="#F1F1F1" stroke-width="2" fill="none" cx="16.91549431" cy="16.91549431" r="15.91549431" />
                            <circle class="circle-chart__circle" stroke="#009CDE" stroke-width="2" stroke-dasharray="50,100" stroke-linecap="round" fill="none" cx="16.91549431" cy="16.91549431" r="15.91549431" />
                            <span class="tx-16 font-weight-bold badage-text-value blue-badge-text">65</span>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
        <div class="card custom-card overflow-hidden">
            <div class="card-body">
                <div class="row">
                    <div class="col-xs-12 col-sm-8 my-auto">
                        <h6 class="mb-3 font-weight-bold">NOMBRE DE RDV PRIS</h6>
                        <div class="text-left">
                            <h3 class="font-weight-bold mr-3 mb-2" style="color: #F7617D;"> 205 425</h3>
                            <p class="tx-13 my-auto text-muted ">Total du mois</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 my-auto">
                        <svg class="circle-chart" viewbox="0 0 33.83098862 33.83098862" width="100" height="100" xmlns="http://www.w3.org/2000/svg">
                            <circle class="circle-chart__background" stroke="#F1F1F1" stroke-width="2" fill="none" cx="16.91549431" cy="16.91549431" r="15.91549431" />

                            <circle class="circle-chart__circle" stroke="#F7617D" stroke-width="2" stroke-dasharray="50,100" stroke-linecap="round" fill="none" cx="16.91549431" cy="16.91549431" r="15.91549431" />
                            <span class="tx-16 font-weight-bold badage-text-value red-badge-text">65</span>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
        <div class="card custom-card overflow-hidden">
            <div class="card-body">
                <div class="row">
                    <div class="col-xs-12 col-sm-8 my-auto">
                        <h6 class="mb-3 font-weight-bold">TAUX DE RDV PLANIFIÉS</h6>
                        <div class="text-left">
                            <h3 class="font-weight-bold mr-3 mb-2" style="color: #FFA569;"> 205 425</h3>
                            <p class="tx-13 my-auto text-muted ">Total du mois</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 my-auto">

                        <!-- <div class="forth circle">
                                <div class="chart-circle-value circle-style "><div class="tx-16 font-weight-bold">10%</div></div>
                        </div>	 -->

                        <svg class="circle-chart" viewbox="0 0 33.83098862 33.83098862" width="100" height="100" xmlns="http://www.w3.org/2000/svg">
                            <circle class="circle-chart__background" stroke="#F1F1F1" stroke-width="2" fill="none" cx="16.91549431" cy="16.91549431" r="15.91549431" />

                            <circle class="circle-chart__circle" stroke="#ffa569" stroke-width="2" stroke-dasharray="50,100" stroke-linecap="round" fill="none" cx="16.91549431" cy="16.91549431" r="15.91549431" />
                            <span class="tx-16 font-weight-bold badage-text-value orange-badge-text">65</span>
                        </svg>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->

<div class="row row-sm mt-lg-4">
    <div class="col-sm-12 col-md-8">
        <div class="card custom-card overflow-hidden">
            <div class="card-header border-bottom-0" style="min-height:490px">
                <div class="d-flex row">
                    <div class="col-md-6 float-left">
                        <label class="main-content-label mb-2">NOMBRE DE INTERVENTIONS PAR AGENCE</label>
                    </div>

                    <div class="col-md-6 float-right">
                        <div class="row">
                            <div class="col-md-12">
                                <strong class="float-left" style="width: 77px;">Période du </strong>
                                <div class="float-left" style="width: 120px;">
                                    <i class="date-icon date-icon1 float-left" aria-hidden="true"></i>
                                    <input id="bar-from" type="text" />

                                </div>
                                <strong class="float-left" style="width: 32px;text-align: center;"> au </strong>
                                <div class="float-left" style="width: 120px;">
                                    <i class="date-icon date-icon2 float-left" aria-hidden="true"></i>
                                    <input id="bar-to" type="text" />

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body pl-0">
                    <div class="container">

                        <div class="top10Legend">
                            <ul class="1-legend">
                                <li>
                                    <span style="background-color:#A3A1FB"></span>
                                    Interventions
                                </li>
                                <li>
                                    <span style="background-color:#009CDE"></span>Collaborateurs
                                </li>
                            </ul>
                        </div>
                        <canvas id="nombre-agence" class=""></canvas>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-4">
        <div class="card custom-card overflow-hidden">
            <div class="card-body">
                <div class="">
                    <label class="main-content-label mb-2">TYPES DES CLIENTS</label>
                </div>
                <div class="chartjs-wrapper-demo">
                    <div style="width:235px;height: 150px;margin: 10px auto 30px auto;">
                        <canvas id="chartPie"></canvas>

                    </div>
                    <div class="top10Legend" id="top10Legend"></div>

                </div>
            </div>
        </div>

        <div class="card custom-card overflow-hidden mt-3">
            <div class="card-body">
                <div class="">
                    <label class="main-content-label mb-2">INTERVENTIONS DU JOUR</label>
                </div>
                <div class="my-3">
                    <div class="d-inline-block w-100">
                        <span class="my-auto float-left">INTERVENTIONS REALISÉES</span>
                        <span class="ml-auto float-right" style="color:#27C291;">15 00000</span>
                    </div>
                    <div class="progress mg-b-10">

                        <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" class="progress-bar progress-bar-lg wd-25p" role="progressbar" style="background-color: #27C291;"></div>
                    </div>
                </div>

                <div class="mt-3">
                    <div class="d-inline-block w-100">
                        <span class="my-auto float-left">INTERVENTIONS A FAIRE</span>
                        <span class="ml-auto float-right" style="color: #FFA569;">2 0000</span>
                    </div>
                    <div class="progress mg-b-10">
                        <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="35" class="progress-bar progress-bar-lg wd-35p" role="progressbar" style="background-color: #FFA569;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
    $(document).ready(function(){
            $('#bar-from,#bar-to').datepicker({
                dateFormat: 'dd-M-yy',
                minDate: 1
            });

            $('.date-icon1').on('click', function () {
                $('#bar-from').focus();
            });

            $('.date-icon2').on('click', function () {
                $('#bar-to').focus();
            });


        /* ********* Type of client chart display js ********* */

        var datapie = {
            labels: ['ACCESSIBLE / PARTICULIER', 'ACCESSIBLE / PROFESSIONNEL', 'INACCESSIBLE / PARTICULIER', 'INACCESSIBLE / PROFESSIONNEL'],
            datasets: [{
                    data: [20, 20, 30, 25],
                    backgroundColor: ['#A3A1FB', '#27C291', '#009CDE', '#F7617D']
                }],
            labels: ['ACCESSIBLE / PARTICULIER', 'ACCESSIBLE / PROFESSIONNEL', 'INACCESSIBLE / PARTICULIER', 'INACCESSIBLE / PROFESSIONNEL'],
        };
        var optionpie = {
            maintainAspectRatio: false,
            responsive: true,
            legend: {
                display: false,
            },
            animation: {
                animateScale: true,
                animateRotate: true
            }
        };

        /* Doughbut Chart*/
        var ctx6 = document.getElementById('chartPie');

        var myPieChart6 = new Chart(ctx6, {
            type: 'doughnut',
            data: datapie,
            options: {
                layout: {
                    padding: {
                        left: 20,
                        right: 20,
                        top: 10,
                        bottom: 10
                    }
                },
                cutoutPercentage: 85,
                responsive: true,
                maintainAspectRatio: false,
                legend: {
                    labels: {
                        fontColor: "#53caed",
                        fontSize: 9,
                    },
                    position: 'bottom',
                    display: false
                },
                legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>",
                plugins: {
                    datalabels: {
                        formatter: (value, ctx) => {
                            let sum = 0;
                            let dataArr = ctx.chart.data.datasets[0].data;
                            dataArr.map(data => {
                                sum += data;
                            });
                            let percentage = (value * 100 / sum).toFixed(2) + "%";
                            //return percentage;
                            return '';
                        },
                        color: '#009CDE'
                    },
                    outlabels: {
                        text: '%p',
                        color: '#009CDE',
                        backgroundColor: 'white',
                        lineColor: 'white',
                        stretch: 15,
                        font: {
                            resizable: true,
                            minSize: 16,
                            maxSize: 20
                        }
                    }
                }
            },

        });

        $("#top10Legend").html(myPieChart6.generateLegend());

        // ctx6.height = 300;
        // ctx6.width = 100;

    });


    @php
//       $colls  =  DB::table('llx_collaboration_contract as u')--}}
 //          ->select('u.agence',DB::raw('COUNT(agence) as total_c'))--}}
 //         ->groupBy('agence')->orderBy('id','ASC')--}}
  //        ->get();

            $colls  =  DB::table('llx_collaboration_contract as u')
                ->select('u.agence',DB::raw('COUNT(agence) as total_c'))
                ->groupBy('agence')
                ->get();
        $intervenations  = DB::table('llx_collaboration_contract as u')
            ->select('b.assignee_id',DB::raw('COUNT(assignee_id) as total_cs'))


            ->join('interventions as b', 'b.assignee_id', 'u.collaboration_id')
            ->groupBy('b.assignee_id')

            ->get();


    //     $intervenations  = DB::table('llx_collaboration_contract as u')
    //         ->select('b.assignee_id',DB::raw('COUNT(assignee_id) as total_cs'))
    //         ->join('interventions as b', 'b.assignee_id', 'u.collaboration_id')
    //         ->groupBy('b.assignee_id')
    //         ->get();


    @endphp

    // @php
    //     $agent_name = App\Models\CollaborationContact::all();
    //     foreach ($agent_name as $agent_names){
    //        echo $agent_names->agency->agencenom;
    //     }
    //     // $collabotations = DB::table('llx_collaboration_contract')

    //     //         ->join('llx_collaboration', 'llx_collaboration.id', 'llx_collaboration_contract.collaboration_id')
    //     //         ->select('llx_collaboration_contract.collaboration_id','llx_collaboration_contract.agence','llx_collaboration.*')
    //     //         ->get();

    //     //         dd($collabotations);

    //     $intervations  = DB::table('llx_collaboration_contract as u')
    //         ->join('interventions as b', 'b.assignee_id', 'u.collaboration_id')
    //         ->join('llx_agency as c', 'c.id', 'u.agence')


    //         // ->select('b.assignee_id','u.*', DB::raw('COUNT(b.assignee_id) as total'))

    //         ->select(
    //             DB::raw("(COUNT(*)) as count"),
    //             DB::raw('COUNT(b.assignee_id) as total')
    //         )
    //         ->groupBy('b.assignee_id')
    //         ->get();
    //     dd($intervations);



    // @endphp

    var ctx10 = document.getElementById("nombre-agence").getContext("2d");

    var data = {
        labels: [
            @php
            foreach ($colls as $coll)
            {
                $agency = DB::table('llx_agency')->where('id',$coll->agence)->first();

                echo '"';
                echo $agency->agencenom;
                echo '"';
                echo ",";
            }
            @endphp




            ],
        datasets: [
            {
                label: "Interventions",
                backgroundColor: "#009cde",
                data: [@php
                        foreach ($intervenations as $intervenation)
                        {
                            echo $intervenation->total_cs;
                            echo ",";
                        }
                    @endphp],
                borderWidth: 0
            },
            {
                label: "Collaborateurs",
                backgroundColor: "#a4a2fb",
                data: [
                    @php
                        foreach ($colls as $coll)
                        {
                            echo $coll->total_c;
                            echo ",";
                        }
                    @endphp
                    ],
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
                legend: false,
                datalabels: {
                    anchor: 'end',
                    align: 'top',
                    formatter: Math.round,
                    font: {
                        weight: 'bold'
                    }
                }
            },
            scales: {
                yAxes: [{
                        ticks: {
                            min: 0
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


</script>
@endsection


