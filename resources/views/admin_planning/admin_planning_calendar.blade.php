@extends('common-layout/master')

<style>

    .tour-row {
        height: 30.2% !important;
    }
    .tour-right-row
    {
        border-bottom :0px solid #ececec !important
    }
    .in-between {
        background: #f1f1f1 !important;
        position: absolute;
        width: 17px;
        height: 42vh !important;
        min-height: 0px !important;
        left: 7.9vw !important;

        z-index: 99;
        top: 1px !important;
    }
    .green-vl
    {
        height: 92% !important;
        top:54px !important;
    }

    .sub-tour-row-container{
        left: 7% !important;
    }

    .col-white7-col{
        height: 207px;
    }

    .col-white1 {
        min-height:660px !important;
        height: 0vh !important;
    }

    .tour-num-top1-green1{
        top:26% !important;
    }
    .tour-num-top1-orange1{
        top: 28% !important;
    }
    .tour-num-top1-red1{
        top: 30% !important;
    }
    .tour-num-top3
    {
        left: 12.5% !important;
        z-index:1000;
        top: 0px !important;
    }
    .tour-num-top-div{
        width : 0% !important;
    }
</style>
@section('data-content')
    <link rel="stylesheet" href="{{ asset('public/assets/plugins/prettify/prettify.css') }}">
    <script src="{{ asset('public/assets/plugins/slim-scroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('public/assets/plugins/prettify/prettify.js') }}"></script>
    <?php
    $currentDate = date('Y-m-d');
    $requestedDate = $currentDate;

    $bgToday = 'btn-white-blue';
    if (!empty($_GET['date'])) {
        $requestedDate = $_GET['date'];

        if ($requestedDate == $currentDate) {
            $bgToday = 'btn-today-blue';
        }
    }

    $type = Request::segment(2);

    ?>
    <div class="row row-sm mt-4">

        <div class="col-lg-11 col-md-11 col-sm-12">
            <div class="visits-intervensions-div row">
                <div class="col-lg-6 tour-switch <?php if ($type == 'visite') {
                    echo 'tour-switch-active';
                    } ?>">
                    <a href="{{ url('AdminPlanning/visite?date=' . $requestedDate) }}" class="">
                        Visites
                    </a>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 tour-switch <?php if ($type == 'intervention' || $type =='') {
    echo 'tour-switch-active';
} ?>">
                    <a href="{{ url('AdminPlanning/intervention?date=' . $requestedDate) }}" class="">
                        Interventions
                    </a>
                </div>
            </div>

            <div class="circle-icon ml-4 mt-1">
                <a href="{{ route('AdminPlanning_map') }}" class="map-btn">
                    <img src="{{ asset('public/assets/img/icons/blue-map-white.png') }}" class="map-img-btn"
                        onmouseover="this.src='{{ asset('public/assets/img/icons/white-map-blue.png') }}'"
                        onmouseout="this.src='{{ asset('public/assets/img/icons/blue-map-white.png') }}'" />
                </a>
            </div>

            <div class="circle-icon ml-3 mt-1">

                <a href="javascript:void(0)" class="calendar-icon">
                    <img src="{{ asset('public/assets/img/icons/blue-calendar-white.png') }}" />
                </a>

                <div class="tour-calendar-div" style="display:none">
                    <div id="calendar"></div>
                </div>

            </div>

            <div class="tour-today @php echo $bgToday; @endphp" style="height:35px">
                <a href="javascript:void(0)" id="today-btn">Aujourd'hui</a>
            </div>

            <div class="circle-icon ml-3 mt-1">
                <a href="javascript:void(0)" id="tour-id">
                    <img src="{{ asset('public/assets/img/icons/blue-plus-white.png') }}" />
                </a>
            </div>



            <div class="tour-gray-icons" style="display:none;margin-top: 16px !important;">
                <div class="row">
                    <div class="col-lg-2 col-sm-4" style="max-width: 6rem;">
                        <span class="tour-gray-text" onclick="setCollaborateurCalendarStatus('Valider')"><img src="{{ asset('public/assets/img/icons/right-sign.png')}}" style="margin-top: -3px;"> Valider</span>
                    </div>
                    <div class="col-lg-2 col-sm-4" style="max-width: 5rem;">
                        <span class="tour-gray-text" onclick="setCollaborateurCalendarStatus('Figer')"><img src="{{ asset('public/assets/img/icons/lock_black.png')}}" style="margin-top: -5px;"> Figer</span>
                    </div>
                    <div class="col-lg-2 col-sm-4" style="max-width: 7rem">
                        <span class="tour-gray-text" onclick="setCollaborateurCalendarStatus('Enchanger')"><img src="{{ asset('public/assets/img/icons/arrow-change.png')}}" style="margin-top: -1px;"> Enchanger</span>
                    </div>
                    <div class="col-lg-2 col-sm-6" style="max-width: 7rem">
                        <span class="tour-gray-text" onclick="setCollaborateurCalendarStatus('Optimiser')"><img src="{{ asset('public/assets/img/icons/settings.png')}}" style="margin-top: -2px;"> Optimiser</span>
                    </div>
                    <div class="col-lg-2 col-sm-6" style="max-width: 7rem">
                        <span class="tour-gray-text"
                            onclick="setCollaborateurCalendarStatus('Rafraichir')"><img src="{{ asset('public/assets/img/icons/refresh.png')}}" style="margin-top: -2px;"> Rafraichir</span>
                    </div>
                    {{-- <div class="col-lg-3 col-sm-8" style="min-width: 11rem">
                        <span class="tour-gray-text"
                            onclick="setCollaborateurCalendarStatus('Afficher les tra jets')">Afficher les trajets</span>
                    </div> --}}
                </div>
            </div>

        </div>

        <div class="col-lg-1">
            <div class="row">
                <a class="btn-white-blue float-right" href="{{ url('export-schedules') }}">
                    Exporter
                </a>
            </div>
        </div>
    </div>

    <div class="row row-sm mt-4">

        @php
            $type = Request::segment(2);
        @endphp
        @if ($type == 'visite')
            <div class="col-lg-9">
                <p id="module_section2"></p>
                @include('admin_planning.admin_planning_visite')
            </div>
        @elseif($type == '' || $type == 'intervention')
            <div class="col-lg-9">
                <p id="module_section"></p>
                @include('admin_planning.admin_planning_intervention')
            </div>
        @endif


        <div class="" style="width: 25%;min-width: 15%;margin-top: 13px;">
            <div class="col-white12-col">
                <div class="rounded-corner bg-white col-white12">
                    <nav>
                        <div class="nav nav-tabs tour-navs" id="nav-tour-details-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-non-affectes-tab" data-toggle="tab"
                                href="#nav-non-affectes" role="tab" aria-controls="nav-tour" aria-selected="true">
                                <span class="tab-icon icon-chead"></span><span class="tab-label">Non affectés</span>
                            </a>
                            <a class="nav-item nav-link" id="nav-collaborateurs-tab" data-toggle="tab"
                                href="#nav-collaborateurs" role="tab" aria-controls="nav-collaborateurs"
                                aria-selected="true">
                                <span class="tab-icon icon-vente"></span><span class="tab-label">Collaborateurs</span>
                            </a>
                        </div>
                    </nav>
                    <div class="tab-content tour-right-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-non-affectes" role="tabpanel"
                            aria-labelledby="nav-non-affectes-tab">

                            @include(
                                'admin_planning.employee-tour.non-affectes'
                            )


                        </div>
                        <div class="tab-pane fade" id="nav-collaborateurs" role="tabpanel"
                            aria-labelledby="nav-collaborateurs-tab">
                            @include(
                                'admin_planning.employee-tour.collaborateurs'
                            )
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="modal fade" id="absence-modal" tabindex="-1" role="dialog" aria-labelledby="technicien-modal
    " aria-hidden="true">
        <div class="modal-dialog" role="document" style="min-width: 580px;">
            <div class="modal-content">

                <div class="modal-body">

                    <div class="row">

                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <button type="button" class="close-modal" rel="absence-modal">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h6 class="text-black">AJOUTER UNE ABSENCE</h6>

                            <div class=" row mt-2">
                                <div class="col-lg-6 col-md-6 col-sm-6 tour-modal-fields-row-div">
                                    <div class="bg-white rounded-corner tour-modal-fields-row">
                                        <label class="tour-modal-label">Motif</label>
                                        <select class="form-control">
                                            <option>CONGES PAYES</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6  tour-modal-fields-row-div">
                                    <div class="bg-white rounded-corner tour-modal-fields-row">
                                        <label class="tour-modal-label">
                                            <input type="checkbox" class="modal-form-checkbox" checked />
                                            Répéter
                                        </label>
                                        <select class="form-control">
                                            <option>PAR SEMAINE</option>
                                        </select>
                                    </div>
                                </div>

                            </div>

                            <div class=" row mt-2">
                                <div class="col-lg-6 col-md-6 col-sm-6 tour-modal-fields-row-div">
                                    <div class="bg-white rounded-corner tour-modal-fields-row">
                                        <label class="tour-modal-label">Debut</label>
                                        <div class="float-left date-input-div mr-1">
                                            <i class="date-icon date-icon1 float-left" aria-hidden="true"></i>
                                            <input id="bar-from" type="text" placeholder="00/00/0000"
                                                class="input-no-border" />
                                        </div>
                                        <div class="float-left" style="width: 90px;">
                                            <select class="form-control">
                                                <option>10:00</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6 tour-modal-fields-row-div">
                                    <div class="bg-white rounded-corner tour-modal-fields-row">
                                        <label class="tour-modal-label">Fin</label>
                                        <div class="float-left date-input-div mr-1">
                                            <i class="date-icon date-icon1 float-left" aria-hidden="true"></i>
                                            <input id="bar-from" type="text" placeholder="00/00/0000"
                                                class="input-no-border" />
                                        </div>
                                        <div class="float-left" style="width: 90px;">
                                            <select class="form-control">
                                                <option>10:00</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class=" row mt-2">
                                <div class="col-lg-6 col-md-6 col-sm-6 tour-modal-fields-row-div">
                                    <div class="bg-white rounded-corner tour-modal-fields-row">
                                        <label class="tour-modal-label">Description</label>
                                        <textarea class="form-control" style="height:190px">

                            </textarea>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6  tour-modal-fields-row-div">
                                    <div class="bg-white rounded-corner tour-modal-fields-row">
                                        <label class="tour-modal-label">
                                            Assigner á:
                                        </label>

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="bg-white tour-search-div">
                                                    <img src="assets/img/icons/iconsearch.png" class="tour-search-image" />
                                                    <input type="text" name="" class="input-no-border"
                                                        placeholder="Recherce collaborateurs..." />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="slimscroll-assigner-a w100">
                                            <div class="row">

                                                <div class="col-lg-12 mt-2">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <input type="radio" class="radio-blue-circle"
                                                                name="status-assigner" checked />
                                                            <strong class="text-black">Actifs</strong>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <input type="radio" class="radio-blue-circle mr-2"
                                                                name="status-assigner" />
                                                            <span
                                                                class="text-black text-tour-collaborateurs">Inactifs</span>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-lg-12 mt-2">
                                                    <div class="bg-white px-2 py-2">
                                                        <input type="checkbox" class="checkbox-blue mr-2">
                                                        Nom Prénom
                                                    </div>

                                                    <div class="bg-lightdarkerblue px-2 py-2">
                                                        <input type="checkbox" class="checkbox-blue mr-2" checked>
                                                        Nom Prénom
                                                    </div>

                                                    <div class="bg-white px-2 py-2">
                                                        <input type="checkbox" class="checkbox-blue mr-2">
                                                        Nom Prénom
                                                    </div>

                                                    <div class="bg-lightdarkerblue px-2 py-2">
                                                        <input type="checkbox" class="checkbox-blue mr-2" checked>
                                                        Nom Prénom
                                                    </div>

                                                    <div class="bg-white px-2 py-2">
                                                        <input type="checkbox" class="checkbox-blue mr-2">
                                                        Nom Prénom
                                                    </div>

                                                    <div class="bg-lightdarkerblue px-2 py-2">
                                                        <input type="checkbox" class="checkbox-blue mr-2" checked>
                                                        Nom Prénom
                                                    </div>

                                                    <div class="bg-white px-2 py-2">
                                                        <input type="checkbox" class="checkbox-blue mr-2">
                                                        Nom Prénom
                                                    </div>

                                                    <div class="bg-lightdarkerblue px-2 py-2">
                                                        <input type="checkbox" class="checkbox-blue mr-2" checked>
                                                        Nom Prénom
                                                    </div>

                                                    <div class="bg-white px-2 py-2">
                                                        <input type="checkbox" class="checkbox-blue mr-2">
                                                        Nom Prénom
                                                    </div>

                                                    <div class="bg-lightdarkerblue px-2 py-2">
                                                        <input type="checkbox" class="checkbox-blue mr-2" checked>
                                                        Nom Prénom
                                                    </div>

                                                    <div class="bg-white px-2 py-2">
                                                        <input type="checkbox" class="checkbox-blue mr-2">
                                                        Nom Prénom
                                                    </div>

                                                    <div class="bg-lightdarkerblue px-2 py-2">
                                                        <input type="checkbox" class="checkbox-blue mr-2" checked>
                                                        Nom Prénom
                                                    </div>

                                                    <div class="bg-white px-2 py-2">
                                                        <input type="checkbox" class="checkbox-blue mr-2">
                                                        Nom Prénom
                                                    </div>

                                                    <div class="bg-lightdarkerblue px-2 py-2">
                                                        <input type="checkbox" class="checkbox-blue mr-2" checked>
                                                        Nom Prénom
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class=" row mt-2">
                                <div class="col text-center">
                                    <a href="javascript:void(0)" class="btn-green" data-toggle="modal"
                                        data-target="#absence-modal" data-backdrop="false"><strong
                                            class="tour-row-text text-white">Ajouter</strong></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="notifications-modal" tabindex="-1" role="dialog" aria-labelledby="technicien-modal
    " aria-hidden="true">
        <div class="modal-dialog" role="document" style="min-width: 580px;">
            <div class="modal-content">

                <div class="modal-body">

                    <div class="row">

                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <button type="button" class="close-modal" rel="notifications-modal">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h6 class="text-black">AJOUTER UNE NOTIFICATION A JOHN DOE</h6>

                            <div class=" row mt-2">
                                <div class="col-lg-6 col-md-6 col-sm-6 tour-modal-fields-row-div">
                                    <div class="bg-white rounded-corner tour-modal-fields-row">
                                        <label class="tour-modal-label">Nature</label>
                                        <select class="form-control">
                                            <option>NATURE</option>
                                        </select>
                                    </div>

                                    <div class="bg-white rounded-corner tour-modal-fields-row mt-2">
                                        <label class="tour-modal-label">Commentaire/Probléme</label>
                                        <textarea class="form-control" style="height:130px">

                            </textarea>
                                    </div>

                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6  tour-modal-fields-row-div">
                                    <div class="bg-white rounded-corner tour-modal-fields-row">
                                        <label class="tour-modal-label">
                                            Ajouter des piéces jointes
                                        </label>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6">
                                                <div class="tour-upload-box">
                                                    <img src="assets/img/icons/plus-gray.png">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6">
                                                <div class="tour-upload-box">
                                                    <img src="assets/img/icons/plus-gray.png">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6">
                                                <div class="tour-upload-box">
                                                    <img src="assets/img/icons/plus-gray.png">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6">
                                                <div class="tour-upload-box">
                                                    <img src="assets/img/icons/plus-gray.png">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class=" row mt-2">
                                <div class="col text-center">
                                    <a href="javascript:void(0)" class="btn-green" data-toggle="modal"
                                        data-target="#absence-modal" data-backdrop="false"><strong
                                            class="tour-row-text text-white">Ajouter</strong></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade Admin_Tournées_Valider-modal show" id="admin-tournees-valider-modal" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header pt-5" style="margin:0 auto;">
                    <h5 class="modal-title" style="text-align: center" id="collab-names">John Doe, John Doe 2</h5>
                </div>
                <div class="modal-body">

                    <div class="Panel">
                        <div class="Panel__body text-center text-black">
                            <p class="px-5 m-0" style="color: #1E1D1D;line-height: 2;">
                                Etes-vous sur de valider les tournées pour ces techniciens ?
                                <input type="hidden" id="calendar-status" value="" />
                            </p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer m-auto pb-5">
                    <button class="validerBtn">Valider</button>
                    <button class="annulerBtn" data-dismiss="modal">Annuler</button>
                </div>
            </div>
        </div>
    </div>

    <!-- <input type="hidden" name="" id="collab-status" value=""> -->
    <script type="text/javascript">
        var tourBoxFull1 = $('.tour-box .tour-col-1');
        var tourBoxFull2 = $('.tour-box .tour-col-2');
        var tourBoxFull3 = $('.tour-box .tour-col-3');
        var tourBoxFull4 = $('.tour-box .tour-col-4');
        var tourBoxFull5 = $('.tour-box .tour-col-5');
        var tourBoxFull6 = $('.tour-box .tour-col-6');
        var tourBoxFull7 = $('.tour-box .tour-col-7');

        $.each(tourBoxFull1, function() {
            var left = '11px';
            $(this).parent().css('left', left);
        });

        $.each(tourBoxFull2, function() {
            var left = '5px';
            $(this).parent().css('left', left);
        });

        $.each(tourBoxFull3, function() {
            var left = '5px';
            $(this).parent().css('left', left);
        });

        $.each(tourBoxFull4, function() {
            var left = '5px';
            $(this).parent().css('left', left);
        });

        $.each(tourBoxFull5, function() {
            var left = '5px';
            $(this).parent().css('left', left);
        });

        $.each(tourBoxFull6, function() {
            var left = '5px';
            $(this).parent().css('left', left);
        });

        $.each(tourBoxFull7, function() {
            var left = '5px';
            $(this).parent().css('left', left);
        });



        $('.close-modal').click(function() {
            var target = $(this).attr('rel');
            $('#' + target).modal('hide');
        });

        $('.tour-switch').click(function() {
            var tourSwitches = $('.tour-switch');

            $.each(tourSwitches, function() {
                $(this).removeClass('tour-switch-active');
            });

            $(this).addClass('tour-switch-active');
        });

        $('#calendar').datepicker({
            dateFormat: 'dd-M-yy',
            minDate: 1
        }).on(
            "changeDate",
            function(e) {
                //console.log(e);
                var dteraw = e.format();
                var dtearr = dteraw.split('/');
                var dte = dtearr[1] + '/' + dtearr[0] + '/' + dtearr[2];
                var dbDate = dtearr[2] + '-' + dtearr[0] + '-' + dtearr[1];
                //alert(dbDate);

                url = window.location.href.split('?')[0];
                window.location = url + '?date=' + dbDate;
            });

        $('.calendar-icon').on('click', function() {
            //$('#calendar').focus();
            if ($('.tour-calendar-div').is(':visible'))
                $('.tour-calendar-div').hide();
            else
                $('.tour-calendar-div').show();
        });

        // $(".calendar-icon").mouseenter(function(){
        //     $('.tour-calendar-div').show();
        // }).mouseleave(function(){
        //     $('.tour-calendar-div').hide();
        // });

        $('#tour-id').click(function() {
            var imgSrc = $('#tour-id img').attr('src');

            if (imgSrc == "{{ asset('public/assets/img/icons/blue-plus-white.png') }}") {
                imgSrc = "{{ asset('public/assets/img/icons/white-plus-blue.png') }}";
                $('.tour-gray-icons').show();
            } else {
                imgSrc = "{{ asset('public/assets/img/icons/blue-plus-white.png') }}";
                $('.tour-gray-icons').hide();
            }

            $('#tour-id img').attr('src', imgSrc);
        });

        $('.slimscroll-tour-modal').slimscroll({
            color: '#000000',
            size: '5px',
            width: '100%',
            height: '300px',
            alwaysVisible: true
        });


        $('.slimscroll-assigner-a').slimscroll({
            color: '#000000',
            size: '5px',
            width: '100%',
            height: '150px',
            alwaysVisible: true
        });



        function setCollaborateurCalendarStatus(status) {
            var collabNames = '';
            $('#calendar-status').val(status);

            $('.tour-checkbox-userinput').each(function() {
                if ($(this).is(':checked'))
                    collabNames += $(this).data('name') + ',';
            });
            collabNames = collabNames.substring(0, collabNames.length - 1);
            $('#collab-names').html(collabNames);
            $('#admin-tournees-valider-modal').modal('show');
        }

        $('.validerBtn').click(function() {

            var collabIds = '';
            var status = $('#calendar-status').val();

            $('.tour-checkbox-userinput').each(function() {
                if ($(this).is(':checked'))
                    collabIds += $(this).val() + ',';
            });

            $.ajax({
                url: siteUrl + '/set-collaborateur-calendar-status',
                method: 'POST',
                data: {
                    collab_ids: collabIds,
                    status: status,
                    "_token": "{{ csrf_token() }}"
                },
                success: function() {
                    $('#admin-tournees-valider-modal').modal('hide');
                }
            });
        });

        $('#today-btn').click(function() {
            var d = new Date();
            var today = d.getDate();
            if (today < 10) today = '0' + today;
            var tmonth = d.getMonth() + 1;
            if (tmonth < 10) tmonth = '0' + tmonth;
            var nTodayFormatted = d.getFullYear() + '-' + tmonth + '-' + today;

            url = window.location.href.split('?')[0];
            window.location = url + '?date=' + nTodayFormatted;
        });
    </script>
@endsection
