@extends('common-layout/master')
@section('data-content')
<link rel="stylesheet" href="assets/plugins/prettify/prettify.css">
<script src="assets/plugins/slim-scroll/jquery.slimscroll.min.js"></script>
<script src="assets/plugins/prettify/prettify.js"></script>

<div class="row row-sm mt-4">
    
    <div class="col-lg-11 col-md-11 col-sm-12">
        <div class="visits-intervensions-div row">
            <div class="col-lg-6 tour-switch tour-switch-active">
                <a href="{{ url('AdminPlanning/visite') }}" class="text-white">
                    Visites
                </a>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 tour-switch">
                <a href="{{ url('AdminPlanning/intervention') }}" class="text-white">
                    Interventions
                </a>
            </div>
        </div>

        <div class="circle-icon ml-4 mt-1">
            <a href="employee-tours-map.php">
                <img src="assets/img/icons/blue-map-white.png" />
            </a>
        </div>

        <div class="circle-icon ml-3 mt-1">

            <a href="javascript:void(0)" class="calendar-icon">
                <img src="assets/img/icons/blue-calendar-white.png" />
            </a>

            <div class="tour-calendar-div" style="display:none">
                <div id="calendar"></div>
            </div>

        </div>

        <div class="tour-today btn-white-blue">
            <a href="javascript:void(0)">Aujourd'hui</a>
        </div>

        <div class="circle-icon ml-3 mt-1">
            <a href="javascript:void(0)" id="tour-id">
                <img src="assets/img/icons/blue-plus-white.png" />
            </a>
        </div>

        <div class="tour-gray-icons" style="display:none;">
            <div class="row">
                <div class="col-lg-1 col-sm-4" style="max-width: 50px;">
                    <span class="tour-gray-text">Valider</span>
                </div>
                <div class="col-lg-1 col-sm-4" style="max-width: 60px;">
                    <span class="tour-gray-text">Figer</span>
                </div>
                <div class="col-lg-2 col-sm-4" style="max-width: 75px;">
                    <span class="tour-gray-text">Enchanger</span>
                </div>
                <div class="col-lg-2 col-sm-6" style="max-width: 75px;">
                    <span class="tour-gray-text">Optimiser</span>
                </div>
                <div class="col-lg-2 col-sm-6" style="max-width: 75px;">
                    <span class="tour-gray-text">Rafraichir</span>
                </div>
                <div class="col-lg-3 col-sm-8" style="min-width: 80px;">
                    <span class="tour-gray-text">Afficher les trajets</span>
                </div>
            </div>
        </div>

    </div>

    <div class="col-lg-1">
        <div class="row">
            <a class="btn-white-blue float-right">
                Exporter
            </a>
        </div>  
    </div>
</div>

<div class="row row-sm mt-4">
    <div class="col-lg-10" style="margin-right: -60px;">
        
        <span class="tour-gray-text-hour tour-gray-text-hour2 text-right">8:00</span>
        <span class="tour-gray-text-hour tour-gray-text-hour3 text-right">10:00</span>
        <span class="tour-gray-text-hour tour-gray-text-hour4 text-right">12:00</span>
        <span class="tour-gray-text-hour tour-gray-text-hour5 text-right">14:00</span>
        <span class="tour-gray-text-hour tour-gray-text-hour6 text-right">16:00</span>
        <span class="tour-gray-text-hour tour-gray-text-hour7 text-right">18:00</span>
        <span class="tour-gray-text-hour tour-gray-text-hour8 text-right">20:00</span>
        <span class="tour-green text-right" style="position: absolute; z-index: 999; left: 48vw; font-size: 0.75rem;font-weight: bold;top: 1.5rem;color: #27c291;">15:15</span>



        <div class="in-between">
            <span class="tour-gray-text-hour tour-gray-text-hour1 text-right">6:00</span>

            <div class="" style="height:20vh;padding-top: 1vh;margin-top:10vh;margin-top: 6vh;
    margin-bottom: 1vh;">
                <div class="tour-num-top-div tour-num-top1" style="margin-bottom: 8vh;">
                    <span class="tour-num-top text-blue">4</span>
                </div>
                <div class="tour-num-top-div tour-num-top1-green1">
                    <span class="tour-num-top tour-num-top-green text-white">1</span>
                </div>
                <div class="tour-num-top-div tour-num-top1-orange1">
                    <span class="tour-num-top tour-num-top-orange text-white">1</span>
                </div>

                <div class="tour-num-top-div tour-num-top1-red1">
                <span class="tour-num-top tour-num-top-red text-white">1</span>
            </div>

            </div>

            <div class="" style="height:20vh;padding-top: 1vh;margin-bottom: 1vh;">
                <div class="tour-num-top-div tour-num-top1" style="margin-bottom: 8vh;">
                    <span class="tour-num-top text-blue">4</span>
                </div>

                <div class="tour-num-top-div tour-num-top1-green1">
                    <span class="tour-num-top tour-num-top-green text-white">1</span>
                </div>
                <div class="tour-num-top-div tour-num-top1-orange1">
                    <span class="tour-num-top tour-num-top-orange text-white">1</span>
                </div>

                <div class="tour-num-top-div tour-num-top1-red1">
                    <span class="tour-num-top tour-num-top-red text-white">1</span>
                </div>

            </div>

            <div class="" style="height:20vh">

            <div class="tour-num-top-div tour-num-top3">
                <span class="tour-num-top text-blue">0</span>
            </div>

            </div>

        </div>

        <div class="col-white1-col">
            <div class="rounded-corner bg-white col-white1">
                <hr class="tour-gray-hr" />

                <div class="tour-row mt-3">
                    <input type="checkbox" name="" class="tour-checkbox-userinput" />
                    <strong class="tour-row-text text-black">Panificateur</strong>
                    <strong class="tour-row-text text-blue">80%</strong>
                    <div class="circle-chart-div">
                        <div class="circle-chart-inner-div">
                            <svg class="circle-chart" viewbox="0 0 33.83098862 33.83098862" width="50" height="50" xmlns="http://www.w3.org/2000/svg">
                              <circle class="circle-chart__background" stroke="#009cde" stroke-width="2" fill="none" cx="16.91549431" cy="16.91549431" r="15.91549431" />

                              <circle class="circle-chart__circle" stroke="#FFF" stroke-width="2" stroke-dasharray="20,100" stroke-linecap="round" fill="none" cx="16.91549431" cy="16.91549431" r="15.91549431" />
                              <img src="assets/img/media/profile-img.png" class="tour-image" />
                            </svg>
                        </div>
                        <div class="clear"></div>
                    </div>

                    <strong class="tour-row-text text-gray">John Doe</strong>
                    <a href="javascript:void(0)" data-toggle="modal" data-target="#technicien-modal"><strong class="tour-row-text text-blue">
                        <img src="assets/img/media/smallhouse.png" class="small-house"> Paris 02
                    </strong></a>
                </div>
                <div class="tour-row mt-3">
                    <input type="checkbox" name="" class="tour-checkbox-userinput" />
                    <strong class="tour-row-text text-black">Panificateur</strong>
                    <strong class="tour-row-text text-blue">80%</strong>
                    <div class="circle-chart-div">
                        <div class="circle-chart-inner-div">
                            <svg class="circle-chart" viewbox="0 0 33.83098862 33.83098862" width="50" height="50" xmlns="http://www.w3.org/2000/svg">
                              <circle class="circle-chart__background" stroke="#009cde" stroke-width="2" fill="none" cx="16.91549431" cy="16.91549431" r="15.91549431" />

                              <circle class="circle-chart__circle" stroke="#FFF" stroke-width="2" stroke-dasharray="20,100" stroke-linecap="round" fill="none" cx="16.91549431" cy="16.91549431" r="15.91549431" />
                              <img src="assets/img/media/locked.png" class="tour-image" />
                            </svg>
                        </div>
                        <div class="clear"></div>
                    </div>

                    <strong class="tour-row-text text-gray">John Doe</strong>
                    <a href="javascript:void(0)" data-toggle="modal" data-target="#technicien-modal"><strong class="tour-row-text text-blue">
                        <img src="assets/img/media/smallhouse.png" class="small-house"> Rouen
                    </strong></a>
                </div>
                <div class="tour-row mt-3 tour-disabled-bg-user">
                    <input type="checkbox" name="" class="tour-checkbox-userinput" disabled />
                    <strong class="tour-row-text text-black">Panificateur</strong>
                    <strong class="tour-row-text text-blue">80%</strong>
                    <div class="circle-chart-div">
                        <div class="circle-chart-inner-div">
                            <svg class="circle-chart" viewbox="0 0 33.83098862 33.83098862" width="50" height="50" xmlns="http://www.w3.org/2000/svg">
                              <circle class="circle-chart__background" stroke="#009cde" stroke-width="2" fill="none" cx="16.91549431" cy="16.91549431" r="15.91549431" />

                              <circle class="circle-chart__circle" stroke="#FFF" stroke-width="2" stroke-dasharray="20,100" stroke-linecap="round" fill="none" cx="16.91549431" cy="16.91549431" r="15.91549431" />
                              <img src="assets/img/media/profile-img.png" class="tour-image" />
                            </svg>
                        </div>
                        <div class="clear"></div>
                    </div>

                    <strong class="tour-row-text text-gray">John Doe</strong>
                    <a href="javascript:void(0)" data-toggle="modal" data-target="#technicien-modal"><strong class="tour-row-text text-blue">
                        <img src="assets/img/media/smallhouse.png" class="small-house"> Paris 02
                    </strong></a>

                </div>
            </div>
            
        </div>

        <div class="col-white7-col">
            <div class="rounded-corner bg-white col-white7">
                <hr class="tour-gray-hr" />

                <div class="tour-right-row-div">
                    <img src="assets/img/media/tournees-icon.png" style="position: absolute;top: 13.95vh;left: 2.5vw;z-index: 9;">
                    <img src="assets/img/media/tournees-icon.png" style="position: absolute;top: 35.75vh;left: 10.5vw;z-index: 9;">
                    <div class="green-vl" style="border-left: 2px solid green;height: 76vh;width: 2px;position: absolute;left: 37vw;z-index: 1;"></div>
                    <div class="bg-blue-slanted" style="background: url(assets/img/media/blueslanted.png);width: 10rem;height: 10rem;position: absolute;left: 43.5rem;top: 15.6rem;z-index: 0;height: 21.5vh;background-size: 100% 100%;"></div>

                    <div class="tour-right-row  blue-border">
                        
                        <div class="tour-box">
                            &nbsp;
                        </div>

                        
                        
                        <div class="tour-box">
                            <div class="tour-box-blue tour-box-half tour-col-1">
                                <strong class="tour-left-row-text text-black"> DURANT</strong>
                                <strong class="tour-left-row-text text-blue"> LIEU</strong>
                                <div class="tour-circle-icons-div">
                                    <span class="tour-left-white-circle">G3</span>
                                    <span class="tour-left-white-circle">P</span>
                                </div>
                            </div>
                        </div>

                        <div class="tour-box">
                            <div class="tour-box-blue tour-box-half tour-col-1">
                                <strong class="tour-left-row-text text-black"> DURANT</strong>
                                <strong class="tour-left-row-text text-blue"> LIEU</strong>
                                <div class="tour-circle-icons-div">
                                    <span class="tour-left-white-circle">G3</span>
                                    <span class="tour-left-white-circle">P</span>
                                </div>
                            </div>
                        </div>

                        <div class="tour-box">
                            <div class="tour-box-blue tour-box-full tour-col-1">
                                <strong class="tour-left-row-text text-black"> DURANT</strong>
                                <strong class="tour-left-row-text text-blue"> LIEU</strong>
                                <div class="tour-circle-icons-div">
                                    <span class="tour-left-white-circle">G3</span>
                                    <span class="tour-left-white-circle">P</span>
                                </div>
                            </div>
                        </div>

                        <div class="tour-box">
                            <div class="tour-box-full">
                                &nbsp;
                            </div>
                        </div>

                        <div class="tour-box">
                            <div class="tour-box-full tour-box-gray tour-col-2">
                                <strong class="tour-left-row-text text-black"> DURANT</strong>
                                <strong class="tour-left-row-text text-blue"> LIEU</strong>
                                <div class="tour-circle-icons-div">
                                    <span class="tour-left-white-circle">G3</span>
                                    <span class="tour-left-white-circle">P</span>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="tour-right-row">
                        
                        <div class="tour-box">
                            <div class="tour-box-red tour-box-half tour-col-9">
                                <strong class="tour-left-row-text text-black"> DURANT</strong>
                                <strong class="tour-left-row-text text-red"> LIEU</strong>
                                <div class="tour-circle-icons-div">
                                    <span class="tour-left-white-circle">G3</span>
                                    <span class="tour-left-white-circle">P</span>
                                </div>
                            </div>
                        </div>

                        <div class="tour-box">
                            <div class="tour-box-orange tour-box-half tour-col-9">
                                <strong class="tour-left-row-text text-black"> DURANT</strong>
                                <strong class="tour-left-row-text text-orange"> LIEU</strong>
                                <div class="tour-circle-icons-div">
                                    <span class="tour-left-white-circle">G3</span>
                                    <span class="tour-left-white-circle">P</span>
                                </div>
                            </div>
                        </div>

                        <div class="tour-box">
                            <div class="tour-box-green tour-box-half tour-col-9">
                                <strong class="tour-left-row-text text-black"> DURANT</strong>
                                <strong class="tour-left-row-text text-green"> LIEU</strong>
                                <div class="tour-circle-icons-div">
                                    <span class="tour-left-white-circle">G3</span>
                                    <span class="tour-left-white-circle">P</span>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="tour-right-row  blue-border">
                        
                        <div class="tour-box">
                            &nbsp;
                        </div>

                        <div class="tour-box">
                            &nbsp;
                        </div>

                        <div class="tour-box">
                            <div class="tour-box-blue tour-box-half">
                                <strong class="tour-left-row-text text-black"> DURANT</strong>
                                <strong class="tour-left-row-text text-blue"> LIEU</strong>
                                <div class="tour-circle-icons-div">
                                    <span class="tour-left-white-circle">G3</span>
                                    <span class="tour-left-white-circle">P</span>
                                </div>
                            </div>
                        </div>

                        <div class="tour-box">
                            <div class="tour-box-blue tour-box-full">
                                <strong class="tour-left-row-text text-black"> DURANT</strong>
                                <strong class="tour-left-row-text text-blue"> LIEU</strong>
                                <div class="tour-circle-icons-div">
                                    <span class="tour-left-white-circle">G3</span>
                                    <span class="tour-left-white-circle">P</span>
                                </div>
                            </div>
                        </div>

                        <div class="tour-box">
                            <div class="tour-box">
                                <div class="tour-box-white-row" style="width: 8rem;margin-left: 4.2rem;padding: 10px;">
                                    <strong class="tour-left-row-text text-black float-left w100"> FORMATION</strong>
                                    <span class="text-blue text-bold float-left w100">15:00 - 17:00</span>
                                    
                                </div>
                            </div>
                        </div>


                        <div class="tour-box">
                            <div class="tour-box-gray tour-box-half tour-col-9">
                                <strong class="tour-left-row-text text-black"> DURANT</strong>
                                <strong class="tour-left-row-text text-blue"> LIEU</strong>
                                <div class="tour-circle-icons-div">
                                    <span class="tour-left-white-circle">G3</span>
                                    <span class="tour-left-white-circle">P</span>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="tour-right-row">
                        
                        <div class="tour-box">
                            &nbsp;
                        </div>

                        <div class="tour-box">
                            <div class="tour-box-green tour-box-half tour-col-7">
                                <strong class="tour-left-row-text text-black"> DURANT</strong>
                                <strong class="tour-left-row-text text-green"> LIEU</strong>
                                <div class="tour-circle-icons-div">
                                    <span class="tour-left-white-circle">G3</span>
                                    <span class="tour-left-white-circle">P</span>
                                </div>
                            </div>
                        </div>

                        <div class="tour-box">
                            &nbsp;
                        </div>

                        <div class="tour-box">
                            <div class="tour-box-orange tour-box-full tour-col-2">
                                <strong class="tour-left-row-text text-black"> DURANT</strong>
                                <strong class="tour-left-row-text text-orange"> LIEU</strong>
                                <div class="tour-circle-icons-div">
                                    <span class="tour-left-white-circle">G3</span>
                                    <span class="tour-left-white-circle">P</span>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="tour-right-row tour-disabled-bg">
                        
                        <div class="tour-box">
                            &nbsp;
                        </div>


                    </div>
                </div>

            </div>
            
        </div>

        
    </div>

    <div class="col-lg-2 col-md-2 col-sm-4" style="min-width: 15%;margin-top: 13px;">
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

<script type="text/javascript">

    $('.close-modal').click(function(){
        var target = $(this).attr('rel');
        //alert('#'+target);
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
    });
      
    $('.calendar-icon').on('click', function() {
    //$('#calendar').focus();
    if($('.tour-calendar-div').is(':visible'))
        $('.tour-calendar-div').hide();
    else
        $('.tour-calendar-div').show();
    });

    $('#tour-id').click(function(){
        var imgSrc = $('#tour-id img').attr('src');

        if(imgSrc == 'assets/img/icons/blue-plus-white.png'){
            imgSrc = 'assets/img/icons/white-plus-blue.png';
            $('.tour-gray-icons').show();
        }else{
            imgSrc = 'assets/img/icons/blue-plus-white.png';            
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
</script>
@endsection




