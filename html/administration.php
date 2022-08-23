<?php include('header.php'); ?>

<link type="text/css" rel="stylesheet" href="assets/lib/prettify/prettify.css" ></link>
<script src="assets/lib/slim-scroll/jquery.slimscroll.min.js"></script>
<script src="assets/lib/slim-scroll/prettify.js"></script>

<!-- row -->
<div class="row row-sm mt-4">

    <div class="col-lg-12 col-sm-12 mb-4 ml-2">
        <strong class="tx-16 black-text font-weight-bold">ADMINISTRATION</strong>
    </div>

    <div class="col-lg-12 col-sm-12 mb-5 ml-2">
        <div class="administrators-tab-div row">
            <div class="col-lg-3 col-md-3 tour-switch tour-switch-active">
                Utilisateurs
            </div>

            <div class="col-lg-3 col-md-3 col-sm-12 tour-switch">
                Paramétres
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 tour-switch">
                Optimisation des routes
            </div>
        </div>
    </div>

    <div class="col-lg-12 col-sm-12 mb-2">
        <div class="row">
            <div class="col-lg-1 col-sm-1" style="max-width:95px;padding-right: 0 !important;">
                <img src="assets/img/media/bigger-profile-img.png" class="rounded">
            </div>
            <div class="col-lg-6 col-sm-6 ml-2">
                <h2>Jane Doe</h2>
                <span class="text-blue mr-2 tx-16 font-weight-bold">Super Admin</span>
                <span class="text-dark-black ml-3 tx-16 font-weight-bold">janedoe@gmail.com</span>
            </div>
            <div class="col-lg-5 col-sm-5 justify-content-right">
                <div class="float-right">
                    <a href="javascript:void(0)" data-toggle="modal" data-target="#ajouter-modal" class="btn ajouter-btn px-4 mr-4 float-left btn-lightblue" style="" >Ajouter</a>
                    <span class="light-search-div">
                        <input type="image" class="light-search-icon" src="assets/img/media/search-icon.png" />
                        <input type="text" class="light-search-input"  value="Recherche d'utilisateur..." placeholder="Recherche d'utilisateur..." />	
                    </span>
                </div>
            </div>
        </div>

    </div>

</div>

<div class="row mt-2">
    <div class="col-lg-12 col-md-12">
        <div class="rounded-corner bg-white px-2">
            <div class="table-responsive">
                <table class="table table-striped w-100 administrators-table" id="clientDataTable" style="width:100%">
                    <thead>
                        <tr>
                            <th></th>
                            <th>ID Utilisateur</th>
                            <th>Nom</th>
                            <th>Emaile</th>
                            <th>Role</th>
                            <th>Dernière Connexion</th>
                            <th>N° Telephone</th>						
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>
                                <img src="assets/img/media/sample-img.png" class="circle float-left">
                            </td>
                            <td class="admin-user-td">
                                <strong class="text-block float-left">ALEXANDRADMIN</strong>
                            </td>
                            <td>ALEXANDER JOE</td>
                            <td>ALEXANDRADMIN@IMCTELECOM.COM</td>
                            <td>PLANIFICATEUR</td>
                            <td> <strong>00/00/0000</strong></td>
                            <td><strong>000000000000</strong></td>
                        </tr>
                        <tr>
                            <td>
                                <img src="assets/img/media/sample-img.png" class="circle float-left">
                            </td>
                            <td class="admin-user-td">
                                <strong class="text-block float-left">ALEXANDRADMIN</strong>
                            </td>
                            <td>ALEXANDER JOE</td>
                            <td>ALEXANDRADMIN@IMCTELECOM.COM</td>
                            <td>PLANIFICATEUR</td>
                            <td> <strong>00/00/0000</strong></td>
                            <td><strong>000000000000</strong></td>
                        </tr>
                        <tr>
                            <td>
                                <img src="assets/img/media/sample-img.png" class="circle float-left">
                            </td>
                            <td class="admin-user-td">
                                <strong class="text-block float-left">ALEXANDRADMIN</strong>
                            </td>
                            <td>ALEXANDER JOE</td>
                            <td>ALEXANDRADMIN@IMCTELECOM.COM</td>
                            <td>PLANIFICATEUR</td>
                            <td> <strong>00/00/0000</strong></td>
                            <td><strong>000000000000</strong></td>
                        </tr>
                        <tr>
                            <td>
                                <img src="assets/img/media/sample-img.png" class="circle float-left">
                            </td>
                            <td class="admin-user-td">
                                <strong class="text-block float-left">ALEXANDRADMIN</strong>
                            </td>
                            <td>ALEXANDER JOE</td>
                            <td>ALEXANDRADMIN@IMCTELECOM.COM</td>
                            <td>PLANIFICATEUR</td>
                            <td> <strong>00/00/0000</strong></td>
                            <td><strong>000000000000</strong></td>
                        </tr>
                        <tr>
                            <td>
                                <img src="assets/img/media/sample-img.png" class="circle float-left">
                            </td>
                            <td class="admin-user-td">
                                <strong class="text-block float-left">ALEXANDRADMIN</strong>
                            </td>
                            <td>ALEXANDER JOE</td>
                            <td>ALEXANDRADMIN@IMCTELECOM.COM</td>
                            <td>PLANIFICATEUR</td>
                            <td> <strong>00/00/0000</strong></td>
                            <td><strong>000000000000</strong></td>
                        </tr>
                        <tr>
                            <td>
                                <img src="assets/img/media/sample-img.png" class="circle float-left">
                            </td>
                            <td class="admin-user-td">
                                <strong class="text-block float-left">ALEXANDRADMIN</strong>
                            </td>
                            <td>ALEXANDER JOE</td>
                            <td>ALEXANDRADMIN@IMCTELECOM.COM</td>
                            <td>PLANIFICATEUR</td>
                            <td> <strong>00/00/0000</strong></td>
                            <td><strong>000000000000</strong></td>
                        </tr>
                        <tr>
                            <td>
                                <img src="assets/img/media/sample-img.png" class="circle float-left">
                            </td>
                            <td class="admin-user-td">
                                <strong class="text-block float-left">ALEXANDRADMIN</strong>
                            </td>
                            <td>ALEXANDER JOE</td>
                            <td>ALEXANDRADMIN@IMCTELECOM.COM</td>
                            <td>PLANIFICATEUR</td>
                            <td> <strong>00/00/0000</strong></td>
                            <td><strong>000000000000</strong></td>
                        </tr>
                        <tr>
                            <td>
                                <img src="assets/img/media/sample-img.png" class="circle float-left">
                            </td>
                            <td class="admin-user-td">
                                <strong class="text-block float-left">ALEXANDRADMIN</strong>
                            </td>
                            <td>ALEXANDER JOE</td>
                            <td>ALEXANDRADMIN@IMCTELECOM.COM</td>
                            <td>PLANIFICATEUR</td>
                            <td> <strong>00/00/0000</strong></td>
                            <td><strong>000000000000</strong></td>
                        </tr>
                        <tr>
                            <td>
                                <img src="assets/img/media/sample-img.png" class="circle float-left">
                            </td>
                            <td class="admin-user-td">
                                <strong class="text-block float-left">ALEXANDRADMIN</strong>
                            </td>
                            <td>ALEXANDER JOE</td>
                            <td>ALEXANDRADMIN@IMCTELECOM.COM</td>
                            <td>PLANIFICATEUR</td>
                            <td> <strong>00/00/0000</strong></td>
                            <td><strong>000000000000</strong></td>
                        </tr>
                        <tr>
                            <td>
                                <img src="assets/img/media/sample-img.png" class="circle float-left">
                            </td>
                            <td class="admin-user-td">
                                <strong class="text-block float-left">ALEXANDRADMIN</strong>
                            </td>
                            <td>ALEXANDER JOE</td>
                            <td>ALEXANDRADMIN@IMCTELECOM.COM</td>
                            <td>PLANIFICATEUR</td>
                            <td> <strong>00/00/0000</strong></td>
                            <td><strong>000000000000</strong></td>
                        </tr>
                        <tr>
                            <td>
                                <img src="assets/img/media/sample-img.png" class="circle float-left">
                            </td>
                            <td class="admin-user-td">
                                <strong class="text-block float-left">ALEXANDRADMIN</strong>
                            </td>
                            <td>ALEXANDER JOE</td>
                            <td>ALEXANDRADMIN@IMCTELECOM.COM</td>
                            <td>PLANIFICATEUR</td>
                            <td> <strong>00/00/0000</strong></td>
                            <td><strong>000000000000</strong></td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>


</div>

<div class="modal fade" id="planifier-modal" tabindex="-1" role="dialog" aria-labelledby="technicien-modal
     " aria-hidden="true">
    <div class="modal-dialog" role="document" style="min-width: 90%;">
        <div class="modal-content">

            <div class="modal-body">

                <div class="row">

                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <button type="button" class="close-modal" rel="notifications-modal">
                            <span aria-hidden="true">&times;</span>
                        </button>

                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4" style="flex: 0 0 30.33333%; max-width: 30.33333%;">
                                <div class="w-100 blue-box-modal">
                                    <div class="row">
                                        <div class="col-lg-5 col-md-5 col-sm-5">
                                            <strong class="text-white">INTERVENTION</strong>
                                        </div>
                                        <div class="col-lg-7 col-md-7 col-sm-7">
                                            <select class="form-control tx-green select-modal float-right">
                                                <option>Plannifèe</option>
                                            </select>
                                        </div>
                                    </div>

                                    <hr class="white-line" />

                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <span class="text-white">18/09/21</span>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <span class="text-white">C. Durant</span>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <span class="text-white">PJFDHUF9</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="w-100 blue-box-modal mt-3">
                                    <div class="row">
                                        <div class="col-lg-5 col-md-5 col-sm-5">
                                            <strong class="text-white">VISITE</strong>
                                        </div>
                                        <div class="col-lg-7 col-md-7 col-sm-7">
                                            <select class="form-control tx-black select-modal float-right">
                                                <option>Plannifèe</option>
                                            </select>
                                        </div>
                                    </div>

                                    <hr class="white-line" />

                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <span class="text-white">18/09/21</span>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <span class="text-white">C. Durant</span>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <span class="text-white">PJFDHUF9</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="w-100 right-blue-div mt-3 informations-pld-div">

                                    <div class="right-slim-div">
                                        <span class="client-information-title">INFORMATIONS PDL</span>

                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <label>Numéro du PDL</label>
                                                <input type="text" class="form-control" />
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <label>Type de client</label>
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <label>Nom client</label>
                                                <input type="text" class="form-control" />
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <label>Prénom client</label>
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <label>Tél. fixe</label>
                                                <input type="text" class="form-control" value="00 00 00 00 00" />
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <label>Tél. portable</label>
                                                <input type="text" class="form-control" value="00 00 00 00 00" />
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <label>Tél. pro</label>
                                                <input type="text" class="form-control" value="00 00 00 00 00" />
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <label>Tél. portable 2</label>
                                                <input type="text" class="form-control" value="00 00 00 00 00" />
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12 col-md-12">
                                                <label>Email</label>
                                                <input type="text" class="form-control" value="xxxxxxxxxxxx@xxxxxxxxx.xx" />
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12 col-md-12">
                                                <label>Addresse contact</label>
                                                <input type="text" class="form-control" value="RUE" />
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-4">
                                                        <input type="text" class="form-control" value="0000" />
                                                    </div>
                                                    <div class="col-lg-8 col-md-8">
                                                        <input type="text" class="form-control" value="CITY" />
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <span class="client-information-title mt-4">INFORMATIONS COMPLÉMENTAIRES</span>

                                        <div class="row">
                                            <div class="col-lg-12 col-md-12">
                                                <label>Addresse 2</label>
                                                <input type="text" class="form-control" value="RUE" />
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-4">
                                                        <input type="text" class="form-control" value="0000" />
                                                    </div>
                                                    <div class="col-lg-8 col-md-8">
                                                        <input type="text" class="form-control" value="CITY" />
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <label>Tél. 2</label>
                                                <input type="text" class="form-control" value="00 00 00 00 00" />
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                &nbsp;
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12 col-md-12">
                                                <label>Email 2</label>
                                                <input type="text" class="form-control" value="xxxxxxxxxxxx@xxxxxxxxx.xx" />
                                            </div>

                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-lg-12 col-md-12">
                                                <label>Observations</label>
                                                <textarea class="form-control" rows="7">Lorem ipsum dolor sit amet, consectetur adipiscing elit</textarea>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-lg-8 col-md-8 col-sm-8  tour-modal-fields-row-div" style="flex: 0 0 69.66666%; max-width: 69.66666%;">
                                <div class="row">
                                    <div class="col-lg-9 col-md-9" style="flex: 0 0 57%; max-width: 61%;">
                                        <div class="white-card-div white-card-div-height">
                                            <span class="client-information-title-gray">CONSIGNE POSE EDP</span>
                                            <p class="text-gray">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                                            <span class="consigne-close"><img src="assets/img/icons/white-blue-close.png" /></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-1 col-md-1" style="flex: 0 0 14%; max-width: 14%;">

                                        <div class="w-full white-card-div box-div-height pt50 text-center">
                                            <span class="text-blue mt-4 text-bold">Contact</span>
                                        </div>

                                    </div>
                                    <div class="col-lg-1 col-md-1" style="flex: 0 0 14%; max-width: 14%;">

                                        <div class="w-full white-card-div box-div-height text-center bg-green text-white" style="padding-top: 34%;">
                                            <a href="javascript:void(0)" class="text-white mt-4 text-bold" data-toggle="modal" data-target="#intervention-modal" >Planifier une intervention</a>
                                        </div>

                                    </div>
                                    <div class="col-lg-1 col-md-" style="flex: 0 0 14%; max-width: 14%;">

                                        <div class="w-full white-card-div box-div-height text-center bg-orange text-white" style="padding-top: 34%;">
                                            <a href="javascript:void(0)"  class="text-white mt-4 text-bold" data-toggle="modal" data-target="#visite-modal">Planifier une visite</a>
                                        </div>

                                    </div>
                                </div>

                                <div class="row mt-4">

                                    <div class="col-lg-12 col-md-12">
                                        <nav>
                                            <div class="nav nav-tabs pose-navs" id="nav-client-details-tab" role="tablist">
                                                <a class="nav-item nav-link active" id="nav-historique-tab" data-toggle="tab" href="#nav-historique" role="tab" aria-controls="nav-historique" aria-selected="true">
                                                    <span class="tab-label">Historique</span>
                                                </a>
                                                <a class="nav-item nav-link" id="nav-deploiement-tab" data-toggle="tab" href="#nav-deploiement" role="tab" aria-controls="nav-deploiement" aria-selected="true">
                                                    <span class="tab-label">Déploiement</span>
                                                </a>
                                                <a class="nav-item nav-link" id="nav-technique-tab" data-toggle="tab" href="#nav-technique" role="tab" aria-controls="nav-technique" aria-selected="true">
                                                    <span class="tab-label">Technique</span>
                                                </a>
                                                <a class="nav-item nav-link" id="nav-notifications-tab" data-toggle="tab" href="#nav-notifications" role="tab" aria-controls="nav-notifications" aria-selected="true">
                                                    <span class="tab-label">Notifications <span class="counter-span">2</span></span>
                                                </a>
                                                <a class="nav-item nav-link" id="nav-rc-tab" data-toggle="tab" href="#nav-rc" role="tab" aria-controls="nav-rc" aria-selected="true">
                                                    <span class="tab-label">RC <span class="counter-span">2</span></span>
                                                </a>


                                                <div class="switch-div">

                                                    <label class="switch-green-div">
                                                        <input type="checkbox" checked>
                                                        <span class="slider round"></span>
                                                    </label>
                                                    <strong class="switch-green-label">Rendez-vouz<br/>necessaire</strong>
                                                </div>  

                                            </div>
                                        </nav>
                                        <div class="tab-content" id="nav-tabContentClient">
                                            <div class="tab-pane fade show active" id="nav-historique" role="tabpanel" aria-labelledby="nav-historique-tab">
                                                <div class="content-slim-div">
                                                    <?php include('client/historieque.php'); ?>
                                                </div>
                                            </div>

                                            <div class="tab-pane fade" id="nav-deploiement" role="tabpanel" aria-labelledby="nav-deploiement-tab">
                                                <div class="content-slim-div deploiement-div">

                                                    <?php include('client/deploiement.php'); ?>

                                                </div>
                                            </div>

                                            <div class="tab-pane fade" id="nav-technique" role="tabpanel" aria-labelledby="nav-technique-tab">

                                                <div class="content-slim-div deploiement-div">

                                                    <?php include('client/technique.php'); ?>

                                                </div>
                                            </div>

                                            <div class="tab-pane fade" id="nav-notifications" role="tabpanel" aria-labelledby="nav-notifications-tab">
                                                <div class="content-slim-div">
                                                    <?php include('client/notifications.php'); ?>				                            
                                                </div>

                                                <div class="row mt-4">
                                                    <div class="col-lg-12 col-md-12 justify-content-center text-center">

                                                        <a href="javascript:void(0)" class="btn btn-lightblue px-4" style="line-height: 2;" data-toggle="modal" data-target="#notification-modal">Ajouter une notification</a>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tab-pane fade" id="nav-rc" role="tabpanel" aria-labelledby="nav-rc-tab">
                                                <div class="content-slim-div">
                                                    <?php include('client/rc.php'); ?>
                                                </div>

                                                <div class="row mt-4">
                                                    <div class="col-lg-12 col-md-12 justify-content-center text-center">


                                                        <a href="javascript:void(0)" class="btn btn-lightblue px-4" style="line-height: 2;" data-toggle="modal" data-target="#rc-modal">Ajouter une RC</a>

                                                    </div>
                                                </div>
                                            </div>			                        

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="intervention-modal" tabindex="-1" role="dialog" aria-labelledby="technicien-modal
     " aria-hidden="true">
    <div class="modal-dialog" role="document" style="max-width: 90rem;">
        <div class="modal-content">

            <div class="modal-body">

                <div class="row">

                    <div class="col-lg-5 col-md-5 col-sm-5">
                        <strong>PLANNIFIER UNE INTERVENTION</strong>

                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="justify-content-center text-center">
                                    <div class="smallest-bluetext mb-2 mt-4">Vue de la semaine</div>
                                    <div class="weekdate-div" style="width: 15rem;">
                                        <div class="weekdate-div-nav weekdate-div-prev justify-content-center text-center">
                                            <img src="assets/img/icons/prev-nav.png" />
                                        </div>
                                        <div class="weekdate-div-week justify-content-center text-center">
                                            <strong>Dec 18 - Dec 23</strong>
                                        </div>
                                        <div class="weekdate-div-nav weekdate-div-next justify-content-center text-center">
                                            <img src="assets/img/icons/next-nav.png" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-5">
                            <div class="col-lg-6 col-md-6 col-sm-6">

                                <div class="smallest-bluetext mb-2 mt-4">Vue de la semaine</div>
                                <div class="text-dark-black">Jeudi 21 Decembre<br/>2:00 - 4:00 PM</div>

                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">

                                <div class="smallest-bluetext mb-2 mt-4">Vue de la semaine</div>
                                <select class="form-control text-dark-black">
                                    <option>JOHNY DOE</option>
                                </select>

                            </div>
                        </div>


                        <div class="row mt-5 btn-light-lightblue rounded-corner p-2">

                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6">

                                        <div class="smallest-bluetext mb-2 mt-4">Informations du client</div>
                                        <div class="text-dark-black">Mr John Doe<br/>Particulier</div>

                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">

                                        <div class="smallest-bluetext mb-2 mt-4">Address PDL</div>
                                        <div class="text-dark-black">DU FAUBOURG POISSONNIERE<br/>750009 PARIS 9E ARRONDISSEMENT</div>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6">

                                        <div class="smallest-bluetext mb-2 mt-4">Coordonnées</div>
                                        <div class="text-dark-black">000000000<br/>johndoe@gmail.com</div>

                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">

                                        <div class="smallest-bluetext mb-2 mt-4">Numéro du PDL</div>
                                        <div class="text-dark-black">123456789798</div>

                                    </div>
                                </div>


                            </div>


                        </div>

                        <div class="row mt-5 mb-4">
                            <div class="col-lg-12 col-md-12 col-sm-12 justify-content-center text-center">

                                <a href="javascript:void(0)" class="btn btn-lightblue px-4 mr-2" style="line-height: 2;border-radius: 7rem !important" >Plannifier</a>
                                <a href="javascript:void(0)" class="btn bg-white px-5 text-blue text-bold btn-shadow" style="line-height: 2;border-radius:  7rem !important" >Annuler</a>

                            </div>

                        </div>

                    </div>

                    <div class="col-lg-7 col-md-7 col-sm-7">
                        <table style="width:100%" id="plannifier-table">
                            <tr>
                                <td class="no-border"></td>
                                <td class="no-border td-margin-top">
                                    <span class="td-percentage green-td-label" style="padding-bottom: 7px">10%</span>
                                    <span class="td-percentage-div gray-td-bg" style="height:70px">
                                        <span class="common-td-bg green-bg-td" style="height:7px">
                                            &nbsp;
                                        </span>
                                    </span>
                                </td>
                                <td class="no-border td-margin-top">
                                    <span class="td-percentage orange-td-label" style="padding-bottom: 49px">70%</span>
                                    <span class="td-percentage-div gray-td-bg" style="height:70px">
                                        <span class="common-td-bg orange-bg-td" style="height:49px">
                                            &nbsp;
                                        </span>
                                    </span>
                                </td>
                                <td class="no-border td-margin-top">
                                    <span class="td-percentage red-td-label" style="padding-bottom: 66.5px">95%</span>
                                    <span class="td-percentage-div gray-td-bg" style="height:70px">
                                        <span class="common-td-bg red-bg-td" style="height:66.5px">
                                            &nbsp;
                                        </span>
                                    </span>
                                </td>
                                <td class="no-border td-margin-top">
                                    <span class="td-percentage orange-td-label" style="padding-bottom: 49px">95%</span>
                                    <span class="td-percentage-div gray-td-bg" style="height:70px">
                                        <span class="common-td-bg orange-bg-td" style="height:49px">
                                            &nbsp;
                                        </span>
                                    </span>
                                </td>
                                <td class="no-border td-margin-top">
                                    <span class="td-percentage green-td-label" style="padding-bottom: 7px">10%</span>
                                    <span class="td-percentage-div gray-td-bg" style="height:70px">
                                        <span class="common-td-bg green-bg-td" style="height:7px">
                                            &nbsp;
                                        </span>
                                    </span>
                                </td>
                                <td class="no-border td-margin-top">
                                    <span class="td-percentage green-td-label" style="padding-bottom: 7px">10%</span>
                                    <span class="td-percentage-div gray-td-bg" style="height:70px">
                                        <span class="common-td-bg green-bg-td" style="height:7px">
                                            &nbsp;
                                        </span>
                                    </span>
                                </td>
                            </tr>

                            <tr style="background-color:#009cde;color: #FFFFFF;">
                                <th style="border-top-left-radius: 10px">&nbsp;</th>
                                <th>lun. 18</th>
                                <th>mar. 19</th>
                                <th>mer. 20</th>
                                <th>jeu. 21</th>
                                <th>ven. 22</th>
                                <th style="border-top-right-radius: 10px">sam. 23</th>
                            </tr>
                            <tr>
                                <td>12:00 AM</td>
                                <td></td>
                                <td class="green-td-divider"></td>
                                <td class="td-grayshade"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>2:00 AM</td>
                                <td></td>
                                <td class="green-td-divider"></td>
                                <td class="td-grayshade"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>4:00 AM</td>
                                <td></td>
                                <td class="green-td-divider"></td>
                                <td class="td-grayshade"></td>
                                <td class="td-green">2:00 - 4:00</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>6:00 AM</td>
                                <td></td>
                                <td class="green-td-divider td-lightshade"></td>
                                <td class="td-grayshade"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>8:00 AM</td>
                                <td></td>
                                <td class="green-td-divider td-lightshade"></td>
                                <td class="td-grayshade"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>10:00 AM</td>
                                <td class="td-lightshade"></td>
                                <td class="green-td-divider"></td>
                                <td class="td-grayshade"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>12:00 PM</td>
                                <td class="td-lightshade"></td>
                                <td class="green-td-divider"></td>
                                <td class="td-grayshade"></td>
                                <td class="td-lightshade"></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>2:00 PM</td>
                                <td></td>
                                <td class="green-td-divider td-lightshade"></td>
                                <td class="td-grayshade"></td>
                                <td class="td-lightshade"></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>4:00 PM</td>
                                <td></td>
                                <td class="green-td-divider"></td>
                                <td class="td-grayshade"></td>
                                <td class="td-lightshade"></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>6:00 PM</td>
                                <td></td>
                                <td class="green-td-divider"></td>
                                <td class="td-plaingray"></td>
                                <td class="td-lightshade"></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>8:00 PM</td>
                                <td></td>
                                <td class="green-td-divider"></td>
                                <td class="td-plaingray"></td>
                                <td class="td-lightshade"></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="visite-modal" tabindex="-1" role="dialog" aria-labelledby="technicien-modal
     " aria-hidden="true">
    <div class="modal-dialog" role="document" style="max-width: 90rem;">
        <div class="modal-content">

            <div class="modal-body">

                <div class="row">

                    <div class="col-lg-5 col-md-5 col-sm-5">
                        <strong>PLANNIFIER UNE VISITE</strong>

                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="justify-content-center text-center">
                                    <div class="smallest-bluetext mb-2 mt-4">Vue de la semaine</div>
                                    <div class="weekdate-div" style="width: 15rem;">
                                        <div class="weekdate-div-nav weekdate-div-prev justify-content-center text-center">
                                            <img src="assets/img/icons/prev-nav.png" />
                                        </div>
                                        <div class="weekdate-div-week justify-content-center text-center">
                                            <strong>Dec 18 - Dec 23</strong>
                                        </div>
                                        <div class="weekdate-div-nav weekdate-div-next justify-content-center text-center">
                                            <img src="assets/img/icons/next-nav.png" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-5">
                            <div class="col-lg-6 col-md-6 col-sm-6">

                                <div class="smallest-bluetext mb-2 mt-4">Vue de la semaine</div>
                                <div class="text-dark-black">Jeudi 21 Decembre<br/>2:00 - 4:00 PM</div>

                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">

                                <div class="smallest-bluetext mb-2 mt-4">Vue de la semaine</div>
                                <select class="form-control text-dark-black">
                                    <option>JOHNY DOE</option>
                                </select>

                            </div>
                        </div>


                        <div class="row mt-5 btn-light-lightblue rounded-corner p-2">

                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6">

                                        <div class="smallest-bluetext mb-2 mt-4">Informations du client</div>
                                        <div class="text-dark-black">Mr John Doe<br/>Particulier</div>

                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">

                                        <div class="smallest-bluetext mb-2 mt-4">Address PDL</div>
                                        <div class="text-dark-black">DU FAUBOURG POISSONNIERE<br/>750009 PARIS 9E ARRONDISSEMENT</div>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6">

                                        <div class="smallest-bluetext mb-2 mt-4">Coordonnées</div>
                                        <div class="text-dark-black">000000000<br/>johndoe@gmail.com</div>

                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">

                                        <div class="smallest-bluetext mb-2 mt-4">Numéro du PDL</div>
                                        <div class="text-dark-black">123456789798</div>

                                    </div>
                                </div>


                            </div>


                        </div>

                        <div class="row mt-5 mb-4">
                            <div class="col-lg-12 col-md-12 col-sm-12 justify-content-center text-center">

                                <a href="javascript:void(0)" class="btn btn-lightblue px-4 mr-2" style="line-height: 2;border-radius: 7rem !important" >Plannifier</a>
                                <a href="javascript:void(0)" class="btn bg-white px-5 text-blue text-bold btn-shadow" style="line-height: 2;border-radius:  7rem !important" >Annuler</a>

                            </div>

                        </div>

                    </div>

                    <div class="col-lg-7 col-md-7 col-sm-7">
                        <table style="width:100%" id="plannifier-table">
                            <tr>
                                <td class="no-border"></td>
                                <td class="no-border td-margin-top">
                                    <span class="td-percentage green-td-label" style="padding-bottom: 7px">10%</span>
                                    <span class="td-percentage-div gray-td-bg" style="height:70px">
                                        <span class="common-td-bg green-bg-td" style="height:7px">
                                            &nbsp;
                                        </span>
                                    </span>
                                </td>
                                <td class="no-border td-margin-top">
                                    <span class="td-percentage orange-td-label" style="padding-bottom: 49px">70%</span>
                                    <span class="td-percentage-div gray-td-bg" style="height:70px">
                                        <span class="common-td-bg orange-bg-td" style="height:49px">
                                            &nbsp;
                                        </span>
                                    </span>
                                </td>
                                <td class="no-border td-margin-top">
                                    <span class="td-percentage red-td-label" style="padding-bottom: 66.5px">95%</span>
                                    <span class="td-percentage-div gray-td-bg" style="height:70px">
                                        <span class="common-td-bg red-bg-td" style="height:66.5px">
                                            &nbsp;
                                        </span>
                                    </span>
                                </td>
                                <td class="no-border td-margin-top">
                                    <span class="td-percentage orange-td-label" style="padding-bottom: 49px">95%</span>
                                    <span class="td-percentage-div gray-td-bg" style="height:70px">
                                        <span class="common-td-bg orange-bg-td" style="height:49px">
                                            &nbsp;
                                        </span>
                                    </span>
                                </td>
                                <td class="no-border td-margin-top">
                                    <span class="td-percentage green-td-label" style="padding-bottom: 7px">10%</span>
                                    <span class="td-percentage-div gray-td-bg" style="height:70px">
                                        <span class="common-td-bg green-bg-td" style="height:7px">
                                            &nbsp;
                                        </span>
                                    </span>
                                </td>
                                <td class="no-border td-margin-top">
                                    <span class="td-percentage green-td-label" style="padding-bottom: 7px">10%</span>
                                    <span class="td-percentage-div gray-td-bg" style="height:70px">
                                        <span class="common-td-bg green-bg-td" style="height:7px">
                                            &nbsp;
                                        </span>
                                    </span>
                                </td>
                            </tr>

                            <tr style="background-color:#009cde;color: #FFFFFF;">
                                <th style="border-top-left-radius: 10px">&nbsp;</th>
                                <th>lun. 18</th>
                                <th>mar. 19</th>
                                <th>mer. 20</th>
                                <th>jeu. 21</th>
                                <th>ven. 22</th>
                                <th style="border-top-right-radius: 10px">sam. 23</th>
                            </tr>
                            <tr>
                                <td>12:00 AM</td>
                                <td></td>
                                <td class="green-td-divider"></td>
                                <td class="td-grayshade"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>2:00 AM</td>
                                <td></td>
                                <td class="green-td-divider"></td>
                                <td class="td-grayshade"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>4:00 AM</td>
                                <td></td>
                                <td class="green-td-divider"></td>
                                <td class="td-grayshade"></td>
                                <td class="td-green">2:00 - 4:00</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>6:00 AM</td>
                                <td></td>
                                <td class="green-td-divider td-lightshade"></td>
                                <td class="td-grayshade"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>8:00 AM</td>
                                <td></td>
                                <td class="green-td-divider td-lightshade"></td>
                                <td class="td-grayshade"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>10:00 AM</td>
                                <td class="td-lightshade"></td>
                                <td class="green-td-divider"></td>
                                <td class="td-grayshade"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>12:00 PM</td>
                                <td class="td-lightshade"></td>
                                <td class="green-td-divider"></td>
                                <td class="td-grayshade"></td>
                                <td class="td-lightshade"></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>2:00 PM</td>
                                <td></td>
                                <td class="green-td-divider td-lightshade"></td>
                                <td class="td-grayshade"></td>
                                <td class="td-lightshade"></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>4:00 PM</td>
                                <td></td>
                                <td class="green-td-divider"></td>
                                <td class="td-grayshade"></td>
                                <td class="td-lightshade"></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>6:00 PM</td>
                                <td></td>
                                <td class="green-td-divider"></td>
                                <td class="td-plaingray"></td>
                                <td class="td-lightshade"></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>8:00 PM</td>
                                <td></td>
                                <td class="green-td-divider"></td>
                                <td class="td-plaingray"></td>
                                <td class="td-lightshade"></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="ajouter-modal" tabindex="-1" role="dialog" aria-labelledby="ajouter-modal
     " aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 35rem;">
        <div class="modal-content">

            <div class="modal-body">

                <div class="row text-center">

                    <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                        <img src="assets/img/icons/agence-ajoute.png" />

                        <h2 class="w-full text-center mt-4 mb-4">Agence ajouté !</h2>
                        <p class="mb-4">"Nom agence" a bien été ajouté aux agences.</p>

                        <a href="javascript:void(0)" class="btn btn-lightblue px-4 mr-2 text-center mb-4" style="line-height: 2;border-radius: 7rem !important;height: 45px;width: 180px;" >OK</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

    $('.tour-switch').click(function () {
        var tourSwitches = $('.tour-switch');

        $.each(tourSwitches, function () {
            $(this).removeClass('tour-switch-active');
        });

        $(this).addClass('tour-switch-active');
    });

    $('#clientDataTable').dataTable({
        "pageLength": 25
                "ordering": false,
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
</script>

<?php include('sidebar-footer.php'); ?>
