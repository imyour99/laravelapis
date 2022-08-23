@extends('common-layout/master')
@section('data-content')
<link rel="stylesheet" href="{{ asset('public/assets/plugins/prettify/prettify.css') }}">
<script src="{{ asset('public/assets/plugins/slim-scroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('public/assets/plugins/prettify/prettify.js') }}"></script>
<?php
    $currentDate = date('Y-m-d');
    $requestedDate = $currentDate;

    $bgToday = 'btn-white-blue';
    if(!empty($_GET['date'])){
        $requestedDate = $_GET['date'];

        if($requestedDate == $currentDate){
            $bgToday = 'btn-today-blue';
        }
    }

    $type = session('schedule_type');

?>
<div class="row row-sm mt-4">

    <div class="col-lg-11 col-md-11 col-sm-12">
        <div class="visits-intervensions-div row">
            <div class="col-lg-6 tour-switch <?php if($type == 'visite') echo 'tour-switch-active'; ?>">
                <a href="{{ url('AdminPlanning/visite?date='.$requestedDate) }}" class="">
                    Visites
                </a>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 tour-switch <?php if($type == 'intervention') echo 'tour-switch-active'; ?>">
                <a href="{{ url('AdminPlanning/intervention?date='.$requestedDate) }}" class="">
                    Interventions
                </a>
            </div>
        </div>

        <div class="circle-icon ml-4 mt-1">
            <a href="{{route('AdminPlanning')}}" class="map-btn">
                <img src="{{ asset('public/assets/img/icons/menu2.png') }}" class="map-img-btn" onmouseover="this.src='{{ asset("public/assets/img/icons/menu-blue2.png") }}'" onmouseout="this.src='{{ asset("public/assets/img/icons/menu2.png") }}'"/>
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

        <div class="tour-gray-icons" style="display:none;">
            <div class="row">
                <div class="col-lg-1 col-sm-4" style="max-width: 4rem;">
                    <span class="tour-gray-text" onclick="setCollaborateurCalendarStatus('Valider')">Valider</span>
                </div>
                <div class="col-lg-1 col-sm-4" style="max-width: 4rem;">
                    <span class="tour-gray-text" onclick="setCollaborateurCalendarStatus('Figer')">Figer</span>
                </div>
                <div class="col-lg-2 col-sm-4" style="max-width: 5rem">
                    <span class="tour-gray-text" onclick="setCollaborateurCalendarStatus('Enchanger')">Enchanger</span>
                </div>
                <div class="col-lg-2 col-sm-6" style="max-width: 5rem">
                    <span class="tour-gray-text" onclick="setCollaborateurCalendarStatus('Optimiser')">Optimiser</span>
                </div>
                <div class="col-lg-2 col-sm-6" style="max-width: 5rem">
                    <span class="tour-gray-text" onclick="setCollaborateurCalendarStatus('Rafraichir')">Rafraichir</span>
                </div>
                <div class="col-lg-3 col-sm-8" style="min-width: 11rem">
                    <span class="tour-gray-text" onclick="setCollaborateurCalendarStatus('Afficher les tra jets')">Afficher les trajets</span>
                </div>
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
    <div class="mt-3" style="width:75%; float: left;">
        <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

        @include('admin_planning.map.map_route')

    </div>

    <div class="" style="width: 25%;min-width: 15%;margin-top: 13px;">
        <div class="col-white12-col">
            <div class="rounded-corner bg-white col-white12">
                <nav>
                    <div class="nav nav-tabs tour-navs" id="nav-tour-details-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-non-affectes-tab" data-toggle="tab" href="#nav-non-affectes" role="tab" aria-controls="nav-tour" aria-selected="true">
                            <span class="tab-icon icon-chead"></span><span class="tab-label">Non affectés</span>
                        </a>
                        <a class="nav-item nav-link" id="nav-collaborateurs-tab" data-toggle="tab" href="#nav-collaborateurs" role="tab" aria-controls="nav-collaborateurs" aria-selected="true">
                            <span class="tab-icon icon-vente"></span><span class="tab-label">Collaborateurs</span>
                        </a>
                    </div>
                </nav>
                <div class="tab-content tour-right-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-non-affectes" role="tabpanel" aria-labelledby="nav-non-affectes-tab">

                        @include('admin_planning.employee-tour.non-affectes')


                    </div>
                    <div class="tab-pane fade" id="nav-collaborateurs" role="tabpanel" aria-labelledby="nav-collaborateurs-tab">
                        @include('admin_planning.employee-tour.collaborateurs')
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="modal fullmodal fade" id="technicien-modal" tabindex="-1" role="dialog" aria-labelledby="technicien-modal
" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-body">
        <div class="row">

            <div class="col-lg-8 col-md-8 col-sm-12">
                &nbsp;
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6 bg-lightgray py-2 px-2 tour-employee-modal-right">
                <div class="tour-employee-modal-arrow">
                    <a href="javascript:void(0)"><img src="assets/img/icons/gray-left-arrow.png" class="tour-employee-left-arrow" data-dismiss="modal"></a>
                </div>
                <div class="tour-employee-modal-right-inner row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <span class="tour-name-title">John Doe</span>
                        <span class="tour-name-email">johndoe@gmail.com</span>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 text-right">
                        <span class="tour-switch-modal">
                            <label class="switch">
                              <input type="checkbox" checked>
                              <span class="cslider round"></span>
                            </label>
                        </span>
                        <span class="tour-modal-button">
                            <a href="javascript:void(0)" class="btn bg-white px-3 text-blue text-bold btn-shadow" style="line-height: 2;border-radius:  7rem !important" >Editer la fiche</a>
                        </span>
                    </div>
                </div>

                <div class=" row">
                    <div class="col-lg-11 col-md-11 col-sm-12 tour-modal-details-row">
                        <span class="tour-modal-label">Addresse</span>
                        <span class="tour-modal-normal-text">56 avenue victor wallart 17000 La Rochelle</span>
                    </div>
                </div>

                <div class=" row mt-2">
                    <div class="col-lg-4 col-md-4 col-sm-6 tour-modal-fields-row-div">
                        <div class="bg-white rounded-corner tour-modal-fields-row">
                            <span class="tour-modal-label">Mobile</span>
                            <span class="tour-modal-normal-text">+33 0000000</span>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-6  tour-modal-fields-row-div">
                        <div class="bg-white rounded-corner tour-modal-fields-row">
                            <span class="tour-modal-label">NNI</span>
                            <span class="tour-modal-normal-text text-blue">PCA510AIM</span>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6  tour-modal-fields-row-div " style="margin-right:0 !important">
                        <div class="bg-white rounded-corner tour-modal-fields-row">
                            <span class="tour-modal-label">Planificateur</span>
                            <span class="tour-modal-normal-text">Arnaud Durand</span>
                        </div>
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="tour-modal-tabs">
                        <nav>
                            <div class="nav nav-tabs tour-navs" id="nav-tour-modal-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-perimetre-tab" data-toggle="tab" href="#nav-perimetre" role="tab" aria-controls="nav-tour" aria-selected="true">
                                    <span class="tab-label">Pèrimètre de travail</span>
                                </a>
                                <a class="nav-item nav-link" id="nav-absences-tab" data-toggle="tab" href="#nav-absences" role="tab" aria-controls="nav-absences" aria-selected="true">
                                    <span class="tab-label">Liste des absences</span>
                                </a>

                                <a class="nav-item nav-link" id="nav-notifications-tab" data-toggle="tab" href="#nav-notifications" role="tab" aria-controls="nav-notifications" aria-selected="true">
                                    <span class="tab-label">Notifications</span>
                                </a>
                            </div>
                        </nav>
                        <div class="tab-content tour-right-content bg-white" id="nav-tabContent">

                            <div class="tab-pane fade show active" id="nav-perimetre" role="tabpanel" aria-labelledby="nav-perimetre-tab">
                                @include('admin_planning.employee-tour.perimetre')

                            </div>

                            <div class="tab-pane fade" id="nav-absences" role="tabpanel" aria-labelledby="nav-absences-tab">
                                @include('admin_planning.employee-tour.absences')

                            </div>

                            <div class="tab-pane fade" id="nav-notifications" role="tabpanel" aria-labelledby="nav-notifications-tab">
                                @include('admin_planning.employee-tour.notifications')

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
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
                            <div class="float-left date-input-div mr-1" >
                                <i class="date-icon date-icon1 float-left" aria-hidden="true"></i>
                                <input id="bar-from" type="text" placeholder="00/00/0000" class="input-no-border" />
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
                            <div class="float-left date-input-div mr-1" >
                                <i class="date-icon date-icon1 float-left" aria-hidden="true"></i>
                                <input id="bar-from" type="text" placeholder="00/00/0000" class="input-no-border" />
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
                                            <input type="text" name="" class="input-no-border" placeholder="Recherce collaborateurs..." />
                                        </div>
                                    </div>
                            </div>

                            <div class="slimscroll-assigner-a w100">
                                <div class="row">

                                    <div class="col-lg-12 mt-2">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <input type="radio" class="radio-blue-circle" name="status-assigner" checked />
                                                <strong class="text-black">Actifs</strong>
                                            </div>
                                            <div class="col-lg-6">
                                                <input type="radio"  class="radio-blue-circle mr-2" name="status-assigner" />
                                                <span class="text-black text-tour-collaborateurs">Inactifs</span>
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
                        <a href="javascript:void(0)" class="btn-green" data-toggle="modal" data-target="#absence-modal" data-backdrop="false"><strong class="tour-row-text text-white">Ajouter</strong></a>
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
                        <a href="javascript:void(0)" class="btn-green" data-toggle="modal" data-target="#absence-modal" data-backdrop="false"><strong class="tour-row-text text-white">Ajouter</strong></a>
                    </div>
                </div>
            </div>

        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade Admin_Tournées_Valider-modal show" id="admin-tournees-valider-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-modal="true" role="dialog">
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

    $.each(tourBoxFull1,function(){
        var left = 0;
        $(this).parent().css('left',left);
    });

    $.each(tourBoxFull2,function(){
        var left = '13.5%';
        $(this).parent().css('left',left);
    });

    $.each(tourBoxFull3,function(){
        var left = '27%';
        $(this).parent().css('left',left);
    });

    $.each(tourBoxFull4,function(){
        var left = '40.5%';
        $(this).parent().css('left',left);
    });

    $.each(tourBoxFull5,function(){
        var left = '54%';
        $(this).parent().css('left',left);
    });

    $.each(tourBoxFull6,function(){
        var left = '67.5%';
        $(this).parent().css('left',left);
    });

    $.each(tourBoxFull7,function(){
        var left = '81%';
        $(this).parent().css('left',left);
    });



    $('.close-modal').click(function(){
        var target = $(this).attr('rel');
        $('#'+target).modal('hide');
    });

    $('.tour-switch').click(function(){
        var tourSwitches = $('.tour-switch');

        $.each(tourSwitches,function(){
            $(this).removeClass('tour-switch-active');
        });

        $(this).addClass('tour-switch-active');
    });

    $('#calendar').datepicker({
        dateFormat: 'dd-M-yy',
        minDate: 1
    }).on(
    "changeDate", function (e) {
        //console.log(e);
        var dteraw = e.format();
        var dtearr = dteraw.split('/');
        var dte = dtearr[1] + '/' + dtearr[0] + '/' + dtearr[2];
        var dbDate = dtearr[2] + '-' + dtearr[0] + '-' + dtearr[1];
        //alert(dbDate);

        url =  window.location.href.split('?')[0];
        window.location = url + '?date='+dbDate;
    });

    $('.calendar-icon').on('click', function() {
    //$('#calendar').focus();
    if($('.tour-calendar-div').is(':visible'))
        $('.tour-calendar-div').hide();
    else
        $('.tour-calendar-div').show();
    });

    // $(".calendar-icon").mouseenter(function(){
    //     $('.tour-calendar-div').show();
    // }).mouseleave(function(){
    //     $('.tour-calendar-div').hide();
    // });

    $('#tour-id').click(function(){
        var imgSrc = $('#tour-id img').attr('src');

        if(imgSrc == "{{ asset('public/assets/img/icons/blue-plus-white.png') }}"){
            imgSrc = "{{ asset('public/assets/img/icons/white-plus-blue.png') }}";
            $('.tour-gray-icons').show();
        }else{
            imgSrc = "{{ asset('public/assets/img/icons/blue-plus-white.png') }}";
            $('.tour-gray-icons').hide();
        }

        $('#tour-id img').attr('src',imgSrc);
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



    function setCollaborateurCalendarStatus(status){
        var collabNames = '';
        $('#calendar-status').val(status);

        $('.tour-checkbox-userinput').each(function () {
            if($(this).is(':checked'))
                collabNames += $(this).data('name') + ',';
        });
        collabNames = collabNames.substring(0, collabNames.length - 1);
        $('#collab-names').html(collabNames);
        $('#admin-tournees-valider-modal').modal('show');
    }

    $('.validerBtn').click(function(){

        var collabIds = '';
        var status = $('#calendar-status').val();

        $('.tour-checkbox-userinput').each(function () {
            if($(this).is(':checked'))
                collabIds += $(this).val() + ',';
        });

        $.ajax({
            url: siteUrl + '/set-collaborateur-calendar-status',
            method: 'POST',
            data:{
                collab_ids: collabIds,
                status: status,
                "_token": "{{csrf_token()}}"
            },
            success: function(){
                $('#admin-tournees-valider-modal').modal('hide');
            }
        });
    });

    $('#today-btn').click(function(){
        var d = new Date();
        var today = d.getDate();
        if(today < 10) today = '0' + today;
        var tmonth = d.getMonth() + 1;
        if(tmonth < 10) tmonth = '0' + tmonth;
        var nTodayFormatted = d.getFullYear() + '-' + tmonth + '-' + today;

        url =  window.location.href.split('?')[0];
        window.location = url + '?date='+nTodayFormatted;
    });
</script>


@endsection





