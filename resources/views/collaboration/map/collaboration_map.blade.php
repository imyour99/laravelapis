@extends('common-layout/master')
@section('data-content')
    <link rel="stylesheet" href="https://cdn.rawgit.com/openlayers/openlayers.github.io/master/en/v5.3.0/css/ol.css"
        type="text/css">
    <script src="https://cdn.rawgit.com/openlayers/openlayers.github.io/master/en/v5.3.0/build/ol.js"></script>

    <div class="row row-sm mt-4">

        <div class="col-lg-2 col-sm-2">
            <strong class="tx-16 black-text font-weight-bold user-fullname">RECHERCHE DE COLLABORATEURS</strong>
        </div>

        <div class="col-lg-3 col-sm-3">
            <strong class="text-blue tx-11">{{ count($collabotations) }} collaborateurs trouvès</strong>
        </div>

        <div class="col-lg-4 col-sm-4 mb-2" style="margin-top:-8px">
            <div class="row mr-1">
                <div class="col-lg-3">
                    <div class="circle-icon float-right">
                        <a href="{{ route('collaboration') }}">
                            <img src="{{ asset('public/assets/img/icons/list2.png') }}" />
                        </a>
                    </div>
                </div>
                <div class="col-lg-6" style="margin-top:-3px">
                    <a href="javascript:void(0);" class="btn-blue-white float-right" style="margin-left: unset;"
                        data-toggle="modal" data-target="#add-technician-modal">
                        Ajouter collaborateur
                    </a>

                </div>
                <div class="col-lg-3" style="margin-top:-3px">
                    <a class="btn-white-blue float-right px-4">
                        Exporter
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-2">
        <div class="col-lg-9">
            <div id="map" style="height: 100%;width: 100%"></div>
        </div>

        @include('collaboration.filter.collaboration_filter')
    </div>

    {{-- @include('collaboration.collaboration_add') --}}




    <div class="modal fade" id="ImportClientData" tabindex="-1" role="dialog" aria-labelledby="technicien-modal"
        aria-hidden="true">
        <div class="modal-dialog" role="document" style="min-width: 90%;">
            <div class="modal-content">

                <div class="modal-body">
                    <h1>Veuillez choisir le fichier pour l'importation</h1>
                    <div class="row">
                        <button type="button" class="close-modal" rel="notifications-modal"><span
                                aria-hidden="true">&times;</span></button>
                        <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                            <div class="col-lg-12">
                                @csrf
                                <input type="file" name="file" class="form-control">
                            </div>
                            <br />
                            <div class="col-lg-12">
                                <button class="btn btn-success">Importer</button>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('admin-js')
    ;

    <script type="text/javascript">
        $('#clientDataTable').dataTable({
            "pageLength": 25
        });
        $('#clientDataTable_length').hide();
        $('#clientDataTable_filter').hide();
        $(document).ready(function() {
            $(".upload-bx").click(function() {
                $(this).next().trigger("click");
            });

            $('#view-formation-modal').on('shown.bs.modal', function() {
                $('#add-technician-modal').modal('hide');
            });

            $('#view-dotation-modal').on('shown.bs.modal', function() {
                $('#add-technician-modal').modal('hide');
            });

            //$("#add-technician-modal").modal("show");

            $('#absence-modal').on('shown.bs.modal', function() {
                $('#add-technician-modal').modal('hide');
            });

            $('#edit-absence-modal').on('shown.bs.modal', function() {
                $('#add-technician-modal').modal('hide');
            });

            $('#edit-ecart-modal').on('shown.bs.modal', function() {
                $('#add-technician-modal').modal('hide');
            });

            $('#ecarts-modal').on('shown.bs.modal', function() {
                $('#add-technician-modal').modal('hide');
            });

            $("#employee-confirmation-absence-modal .btn-lightblue").click(function() {
                $("#employee-confirmation-absence-modal").modal('hide');
            });

            $("#employee-confirmation-ecart-modal .btn-lightblue").click(function() {
                $("#employee-confirmation-ecart-modal").modal('hide');
            });

            $(".collaborateur-list-container .table.dataTable tr").click(function() {
                $("#technicien-modal").modal('show');
            });

            $('.bar-from,.bar-to').datepicker({
                dateFormat: 'dd-M-yy',
                minDate: 1
            });

            $('.date-icon1').on('click', function() {
                $(this).next().focus();
            });

            $('.date-icon2').on('click', function() {
                $(this).next().focus();
            });

            $(".calender-task-btn").click(function() {
                if ($(".calendar-container:visible").length) {
                    $(".calendar-container").hide();
                    $(".task-container").show();
                    $(".calender-task-btn img").attr("src", "assets/img/icons/blue-calendar-white.png");
                    $("#novelle-btn").show();
                    $("#absences-and-deviations .min-height-scroll").height(300);
                } else {
                    $(".calendar-container").show();
                    $(".task-container").hide();
                    $(".calender-task-btn img").attr("src", "assets/img/icons/list.png");
                    $("#novelle-btn").hide();
                    $("#absences-and-deviations .min-height-scroll").height(427);

                    $("#calendar").html('');
                    var date = new Date();
                    var d = date.getDate();
                    var m = date.getMonth();
                    var y = date.getFullYear();

                    /*  className colors

                     className: default(transparent), important(red), chill(pink), success(green), info(blue)

                     */


                    /* initialize the external events
                     -----------------------------------------------------------------*/

                    /*$('#external-events div.external-event').each(function() {

                     // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
                     // it doesn't need to have a start or end
                     var eventObject = {
                     title: $.trim($(this).text()) // use the element's text as the event title
                     };

                     // store the Event Object in the DOM element so we can get to it later
                     $(this).data('eventObject', eventObject);

                     // make the event draggable using jQuery UI
                     $(this).draggable({
                     zIndex: 999,
                     revert: true,      // will cause the event to go back to its
                     revertDuration: 0  //  original position after the drag
                     });

                     });*/


                    /* initialize the calendar
                     -----------------------------------------------------------------*/

                    var calendar = $('#calendar').fullCalendar({
                        header: {
                            left: 'title',
                            center: 'agendaDay,agendaWeek,month',
                            right: 'prev,next today'
                        },
                        editable: true,
                        firstDay: 1, //  1(Monday) this can be changed to 0(Sunday) for the USA system
                        selectable: true,
                        defaultView: 'month',

                        axisFormat: 'h:mm',
                        columnFormat: {
                            month: 'ddd', // Mon
                            week: 'ddd d', // Mon 7
                            day: 'dddd M/d', // Monday 9/7
                            agendaDay: 'dddd d'
                        },
                        titleFormat: {
                            month: 'MMMM yyyy', // September 2009
                            week: "MMMM yyyy", // September 2009
                            day: 'MMMM yyyy' // Tuesday, Sep 8, 2009
                        },
                        allDaySlot: false,
                        selectHelper: true,
                        select: function(start, end, allDay) {
                            var title = prompt('Event Title:');
                            if (title) {
                                calendar.fullCalendar('renderEvent', {
                                        title: title,
                                        start: start,
                                        end: end,
                                        allDay: allDay
                                    },
                                    true // make the event "stick"
                                );
                            }
                            calendar.fullCalendar('unselect');
                        },
                        droppable: true, // this allows things to be dropped onto the calendar !!!
                        drop: function(date,
                            allDay) { // this function is called when something is dropped

                            // retrieve the dropped element's stored Event Object
                            var originalEventObject = $(this).data('eventObject');

                            // we need to copy it, so that multiple events don't have a reference to the same object
                            var copiedEventObject = $.extend({}, originalEventObject);

                            // assign it the date that was reported
                            copiedEventObject.start = date;
                            copiedEventObject.allDay = allDay;

                            // render the event on the calendar
                            // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
                            $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);

                            // is the "remove after drop" checkbox checked?
                            if ($('#drop-remove').is(':checked')) {
                                // if so, remove the element from the "Draggable Events" list
                                $(this).remove();
                            }

                        },

                        events: [{
                                title: 'All Day Event',
                                start: new Date(y, m, 1)
                            },
                            {
                                id: 999,
                                title: 'Repeating Event',
                                start: new Date(y, m, d - 3, 16, 0),
                                allDay: false,
                                className: 'info'
                            },
                            {
                                id: 999,
                                title: 'Repeating Event',
                                start: new Date(y, m, d + 4, 16, 0),
                                allDay: false,
                                className: 'info'
                            },
                            {
                                title: 'Meeting',
                                start: new Date(y, m, d, 10, 30),
                                allDay: false,
                                className: 'important'
                            },
                            {
                                title: 'Lunch',
                                start: new Date(y, m, d, 12, 0),
                                end: new Date(y, m, d, 14, 0),
                                allDay: false,
                                className: 'important'
                            },
                            {
                                title: 'Birthday Party',
                                start: new Date(y, m, d + 1, 19, 0),
                                end: new Date(y, m, d + 1, 22, 30),
                                allDay: false,
                            },
                            {
                                title: 'Click for Google',
                                start: new Date(y, m, 28),
                                end: new Date(y, m, 29),
                                url: 'https://ccp.cloudaccess.net/aff.php?aff=5188',
                                className: 'success'
                            }
                        ],
                    });
                }
            });
            $(".btn-editer").click(function() {
                $(".general-tab-profile-image-container").show();
                $(".general-tab-profile-image-container").next().hide();
            });
            $(".open-add-technician-popup-modal").click(function() {
                $(".general-tab-profile-image-container").hide();
                $(".general-tab-profile-image-container").next().show();
            });
            $("input[type='radio'][name='dotation-type']").change(function() {
                $(".material-container").hide();
                $(".information-container").hide();
                $(".vehicle-container").hide();
                if ($(this).is(':checked')) {
                    var dotation_type_value = $(this).val();
                    if (dotation_type_value == "material") {
                        $(".material-container").show();
                    } else if (dotation_type_value == "information") {
                        $(".information-container").show();
                    } else if (dotation_type_value == "vehicle") {
                        $(".vehicle-container").show();
                    }
                }
            });
            //$("input[type='radio'][name='dotation-type']").trigger("click");
            initSample();
        });

        var ctx10 = document.getElementById("nombre-agence").getContext("2d");

        var data = {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
            datasets: [{
                    label: "INTERVENTIONS REUSSITES",
                    backgroundColor: "#93f393",
                    data: [7524, 3598, 1002, 2100, 6541, 2541, 3573],
                    borderWidth: 0
                },
                {
                    label: "INTERVENTIONS NON REUSSITES",
                    backgroundColor: "#ff8282",
                    data: [1450, 1190, 1100, 1100, 1350, 1200, 1250],
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



    {{-- <script
        src="https://maps.googleapis.com/maps/api/js?callback=initMap&v=weekly&channel=2"
        async>
    </script> --}}
    @php
        $key =  \UserHelper::$google_map_key;
    @endphp
    <script src="https://maps.googleapis.com/maps/api/js?key=@php echo $key  @endphp&callback=initMap&v=weekly" async ></script>


    <script>

        function initMap() {
                    const myLatLng00 = {
                        lat: 48.861104,
                        lng: 2.338775
                    };

                    const map = new google.maps.Map(document.getElementById("map"), {
                        zoom: 17,
                        center: myLatLng00,

                        styles : [
                            {
                                "featureType": "administrative.land_parcel",
                                "elementType": "labels",
                                "stylers": [
                                {
                                    "visibility": "off"
                                }
                                ]
                            },
                            {
                                "featureType": "poi",
                                "elementType": "labels.text",
                                "stylers": [
                                {
                                    "visibility": "off"
                                }
                                ]
                            },
                            {
                                "featureType": "poi.business",
                                "stylers": [
                                {
                                    "visibility": "off"
                                }
                                ]
                            },
                            {
                                "featureType": "road",
                                "elementType": "labels.icon",
                                "stylers": [
                                {
                                    "visibility": "off"
                                }
                                ]
                            },
                            {
                                "featureType": "road.local",
                                "elementType": "labels",
                                "stylers": [
                                {
                                    "visibility": "off"
                                }
                                ]
                            },
                            {
                                "featureType": "transit",
                                "stylers": [
                                {
                                    "visibility": "off"
                                }
                                ]
                            }
                            ]
                    });


            @php
                foreach($collabotations_maps as $map)
                {
                    @endphp
                    const myLatLng@php echo $map->id @endphp = {
                        lat: @php echo $map->lat @endphp,
                        lng: @php echo $map->lng @endphp
                    };


            /* \uef4a material icon circle */


                        var red@php echo $map->id @endphp = new google.maps.Marker({
                            position: myLatLng@php echo $map->id @endphp,
                            map,
                            title: "label 8",
                            icon: {
                                url: "assets/pin.png"
                            }
                        });

                        var data = "@php echo $map->collaboration->nom; @endphp @php echo $map->collaboration->prenom; @endphp";
                        var infowindow_@php echo $map->id @endphp = new google.maps.InfoWindow({
                            content: data
                        });
                        google.maps.event.addDomListener(red@php echo $map->id @endphp, 'click', function() {
                            infowindow_@php echo $map->id @endphp.open(map, red@php echo $map->id @endphp);
                        });
                    @php
                }
            @endphp



        }
    </script>
@endsection
