@extends('common-layout/master')


@section('data-content')
    <?php
    setlocale(LC_TIME, 'fr_FR');
    ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datejs/1.0/date.min.js"></script>

    <div class="row row-sm mt-4">
        <div class="col-lg-2 col-sm-2">
            <strong class="tx-16 black-text font-weight-bold user-fullname">RECHERCHE PAR CLIENTS</strong>
        </div>

        <div class="col-lg-4 col-sm-4">
            <strong class="text-blue tx-11">{{ count($data) }} clients trouvès</strong>
        </div>

        <div class="col-lg-3 col-sm-3 mb-2" style="margin-top:-8px">
            <div class="row mr-1">
                <div class="col-lg-3">
                    <div class="circle-icon ">
                        <a href="{{ route('ClientsMap') }}">
                            <img src="{{ asset('public/assets/img/icons/blue-map-white.png') }}" />
                        </a>
                    </div>
                </div>
                <div class="col-lg-4" style="margin-top:-3px">
                    <a class="btn-blue-white float-right px-4" href="javascript:void(0)" data-toggle="modal"
                        data-target="#ImportClientData">
                        Importer
                    </a>

                </div>
                <div class="col-lg-5" style="margin-top:-3px">
                    <a href="ClientExport" class="btn-white-blue float-right px-4">
                        Exporter
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-2">
        <div class="col-lg-9">
            <div class="table-responsive">
                <div class="rounded-corner bg-white px-2">
                    <table class="table table-striped w-100" id="clientDataTable" style="width:100%">
                        <thead>
                            <tr>
                                <th class="wd-15p">Nom</th>
                                <th class="wd-15p">PDL</th>
                                <th class="wd-20p">Téléphone</th>
                                <th class="wd-25p">Adresse</th>
                                <th class="wd-15p">Ville</th>
                                <th class="wd-15p">Code</th>
                                <th class="wd-15p">Statut</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $client)
                                <tr data-toggle="modal" data-target="#planifier-modal_{{ $client->id }}">
                                    <td>{{ $client->nom }}</td>
                                    <td>{{ $client->pdl }}</td>
                                    <td>{{ $client->telephone }}</td>
                                    <td>{{ substr($client->adress,0,20) }}</td>
                                    <td>{{ $client->villa }}</td>
                                    <td>{{ $client->code }}</td>

                                    @if ($client->status == 'active')
                                        <td class="active-green font-weight-bold"><i class="fa fa-circle mr-2"></i>A
                                            planifier</td>
                                    @else
                                        <td class="active-green font-weight-bold"><i class="fa fa-circle mr-2"></i>Ne pas
                                            realiser</td>
                                    @endif

                                </tr>

                                @include('client.clientsList_popup')
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>

        @include('client.clientsList_filter')

    </div>


    <div class="modal fade" id="ImportClientData" tabindex="-1" role="dialog" aria-labelledby="technicien-modal_{{ $client->id }}" aria-hidden="true">
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
                                <a href="{{ asset('public/uploads/client_sample_Report.csv') }}" class="btn btn-success"
                                    download>Exemple</a>
                            </div>
                        </form>
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
                            <input type="hidden" value="" id="interventionDateDb" />
                            <input type="hidden" value="" id="interventionTimeDb" />
                            <input type="hidden" value="" id="clientID" />

                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="justify-content-center text-center">
                                        <div class="smallest-bluetext mb-2 mt-4">Vue de la semaine</div>
                                        <div class="weekdate-div" style="width: 15rem;">
                                            <div class="weekdate-div-nav weekdate-div-prev justify-content-center text-center revnormal"
                                                onclick="prevWeek('<?php echo date('Y-m-d', strtotime('monday this week')); ?>')">
                                                <img src="assets/img/icons/prev-nav.png" />
                                            </div>

                                            <div class="weekdate-div-week justify-content-center text-center">
                                                <strong class="normals">
                                                    <span id="intervention-current-monday"><?php echo date('M d', strtotime('monday this week')); ?>
                                                    </span>
                                                    -
                                                    <span
                                                        id="intervention-current-saturday"><?php echo date('M d', strtotime('saturday this week')); ?>
                                                    </span>
                                                </strong>




                                            </div>
                                            <div class="weekdate-div-nav weekdate-div-next justify-content-center text-center normal"
                                                onclick="nextWeek('<?php echo date('Y-m-d', strtotime('monday this week')); ?>')">
                                                <img src="assets/img/icons/next-nav.png" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-5">
                                <div class="col-lg-6 col-md-6 col-sm-6">

                                    <div class="smallest-bluetext mb-2 mt-4">Date de l'intervention</div>
                                    <div id="schedules">
                                        <div class="text-dark-black" id="lintervention"><?php echo date('l d F'); ?><br />
                                            <?php
                                            $currentTime = date('H:00 A');
                                            $nextTime = date('H:00 A', strtotime('+2 hours'));
                                            echo $currentTime . '-' . $nextTime;
                                            ?>
                                        </div>
                                    </div>


                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">

                                    <div class="smallest-bluetext mb-2 mt-4">Intervention assignee á</div>
                                    <select class="form-control text-dark-black" id="collaborateurs-select">
                                        <?php

                                        foreach ($collaborateurs as $collaborateur) {
                                            echo '<option value="' . $collaborateur->id . '">' . strtoupper($collaborateur->prenom . ' ' . $collaborateur->nom) . '</option>';
                                        }

                                        ?>

                                    </select>

                                </div>
                            </div>


                            <div class="row mt-5 btn-light-lightblue rounded-corner p-2">

                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6">

                                            <div class="smallest-bluetext mb-2 mt-4">Informations du client</div>
                                            <div class="text-dark-black"><span id="intervention-client-fullname">Mr John
                                                    Doe</span><br />Particulier</div>

                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6">

                                            <div class="smallest-bluetext mb-2 mt-4">Address PDL</div>
                                            <div class="text-dark-black"><span id="intervention-client-address">DU FAUBOURG
                                                    POISSONNIERE</span><br /><span id="intervention-client-villa">750009
                                                    PARIS 9E ARRONDISSEMENT</span></div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6">

                                            <div class="smallest-bluetext mb-2 mt-4">Coordonnées</div>
                                            <div class="text-dark-black"><span
                                                    id="intervention-client-telephone">000000000</span><br /><span
                                                    id="intervention-client-email">johndoe@gmail.com</span></div>

                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6">

                                            <div class="smallest-bluetext mb-2 mt-4">Numéro du PDL</div>
                                            <div class="text-dark-black"><span
                                                    id="intervention-client-pdl">123456789798</span></div>

                                        </div>
                                    </div>


                                </div>


                            </div>

                            <div class="row mt-5 mb-4">
                                <div class="col-lg-12 col-md-12 col-sm-12 justify-content-center text-center">

                                    <a href="javascript:void(0)" id="intervention-plan" class="btn btn-lightblue px-4 mr-2"
                                        style="line-height: 2;border-radius: 7rem !important">Plannifier</a>
                                    <a href="javascript:void(0)" class="btn bg-white px-5 text-blue text-bold btn-shadow"
                                        style="line-height: 2;border-radius:  7rem !important"
                                        id="intevention-cancel">Annuler</a>

                                </div>

                            </div>

                        </div>

                        <div class="col-lg-7 col-md-7 col-sm-7">
                            <table style="width:100%" id="plannifier-table">
                                <tr>
                                    <td class="no-border"></td>
                                    <td class="no-border td-margin-top">
                                        <span class="td-percentage green-td-label monday-percentage"
                                            style="padding-bottom: 7px">10%</span>
                                        <span class="td-percentage-div gray-td-bg" style="height:70px">
                                            <span class="common-td-bg green-bg-td monday-inner-container"
                                                style="height:7px">
                                                &nbsp;
                                            </span>
                                        </span>
                                    </td>
                                    <td class="no-border td-margin-top">
                                        <span class="td-percentage orange-td-label tuesday-percentage"
                                            style="padding-bottom: 49px">70%</span>
                                        <span class="td-percentage-div gray-td-bg" style="height:70px">
                                            <span class="common-td-bg orange-bg-td tuesday-inner-container"
                                                style="height:49px">
                                                &nbsp;
                                            </span>
                                        </span>
                                    </td>
                                    <td class="no-border td-margin-top">
                                        <span class="td-percentage red-td-label wednesday-percentage"
                                            style="padding-bottom: 66.5px">95%</span>
                                        <span class="td-percentage-div gray-td-bg" style="height:70px">
                                            <span class="common-td-bg red-bg-td wednesday-inner-container"
                                                style="height:66.5px">
                                                &nbsp;
                                            </span>
                                        </span>
                                    </td>
                                    <td class="no-border td-margin-top">
                                        <span class="td-percentage orange-td-label thursday-percentage"
                                            style="padding-bottom: 49px">95%</span>
                                        <span class="td-percentage-div gray-td-bg" style="height:70px">
                                            <span class="common-td-bg orange-bg-td thursday-inner-container"
                                                style="height:49px">
                                                &nbsp;
                                            </span>
                                        </span>
                                    </td>
                                    <td class="no-border td-margin-top">
                                        <span class="td-percentage green-td-label friday-percentage"
                                            style="padding-bottom: 7px">10%</span>
                                        <span class="td-percentage-div gray-td-bg" style="height:70px">
                                            <span class="common-td-bg green-bg-td friday-inner-container"
                                                style="height:7px">
                                                &nbsp;
                                            </span>
                                        </span>
                                    </td>
                                    <td class="no-border td-margin-top">
                                        <span class="td-percentage green-td-label saturday-percentage"
                                            style="padding-bottom: 7px">10%</span>
                                        <span class="td-percentage-div gray-td-bg" style="height:70px">
                                            <span class="common-td-bg green-bg-td saturday-inner-container"
                                                style="height:7px">
                                                &nbsp;
                                            </span>
                                        </span>
                                    </td>
                                </tr>

                                <tr style="background-color:#009cde;color: #FFFFFF;">
                                    <th style="border-top-left-radius: 10px">&nbsp;</th>
                                    <th>lun. <span id="monday-day"><?php echo date('d', strtotime('monday this week')); ?></span></th>
                                    <th>mar. <span id="tuesday-day"><?php echo date('d', strtotime('tuesday this week')); ?></span></th>
                                    <th>mer. <span id="wednesday-day"><?php echo date('d', strtotime('wednesday this week')); ?></span></th>
                                    <th>jeu. <span id="thursday-day"><?php echo date('d', strtotime('thursday this week')); ?></span></th>
                                    <th>ven. <span id="friday-day"><?php echo date('d', strtotime('friday this week')); ?></span></th>
                                    <th style="border-top-right-radius: 10px">sam. <span
                                            id="saturday-day"><?php echo date('d', strtotime('saturday this week')); ?></span></th>
                                </tr>
                                <tr>
                                    <td>12:00</td>
                                    <td class="hour-td monday-td" data-time="0" data-time-ampm="AM"
                                        data-date="<?php echo date('Y-m-d', strtotime('monday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('monday this week')); ?>"></td>
                                    <td class="hour-td tuesday-td green-td-divider" data-time="0" data-time-ampm="AM"
                                        data-date="<?php echo date('Y-m-d', strtotime('tuesday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('tuesday this week')); ?>"></td>
                                    <td class="hour-td wednesday-td td-lightshade" data-time="0" data-time-ampm="AM"
                                        data-date="<?php echo date('Y-m-d', strtotime('wednesday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('wednesday this week')); ?>"></td>
                                    <td class="hour-td thursday-td" data-time="0" data-time-ampm="AM"
                                        data-date="<?php echo date('Y-m-d', strtotime('thursday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('thursday this week')); ?>"></td>
                                    <td class="hour-td friday-td" data-time="0" data-time-ampm="AM"
                                        data-date="<?php echo date('Y-m-d', strtotime('friday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('friday this week')); ?>"></td>
                                    <td class="hour-td saturday-td" data-time="0" data-time-ampm="AM"
                                        data-date="<?php echo date('Y-m-d', strtotime('saturday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('saturday this week')); ?>"></td>
                                </tr>
                                <tr>
                                    <td>2:00</td>
                                    <td class="hour-td monday-td" data-time="2" data-time-ampm="AM"
                                        data-date="<?php echo date('Y-m-d', strtotime('monday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('monday this week')); ?>"></td>
                                    <td class="hour-td tuesday-td green-td-divider" data-time="2" data-time-ampm="AM"
                                        data-date="<?php echo date('Y-m-d', strtotime('tuesday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('tuesday this week')); ?>"></td>
                                    <td class="hour-td wednesday-td td-lightshade" data-time="2" data-time-ampm="AM"
                                        data-date="<?php echo date('Y-m-d', strtotime('wednesday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('wednesday this week')); ?>"></td>
                                    <td class="hour-td thursday-td" data-time="2" data-time-ampm="AM"
                                        data-date="<?php echo date('Y-m-d', strtotime('thursday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('thursday this week')); ?>"></td>
                                    <td class="hour-td friday-td" data-time="2" data-time-ampm="AM"
                                        data-date="<?php echo date('Y-m-d', strtotime('friday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('friday this week')); ?>"></td>
                                    <td class="hour-td saturday-td" data-time="2" data-time-ampm="AM"
                                        data-date="<?php echo date('Y-m-d', strtotime('saturday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('saturday this week')); ?>"></td>
                                </tr>
                                <tr>
                                    <td>4:00</td>
                                    <td class="hour-td monday-td" data-time="4" data-time-ampm="AM"
                                        data-date="<?php echo date('Y-m-d', strtotime('monday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('monday this week')); ?>"></td>
                                    <td class="hour-td tuesday-td  green-td-divider" data-time="4" data-time-ampm="AM"
                                        data-date="<?php echo date('Y-m-d', strtotime('tuesday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('tuesday this week')); ?>"></td>
                                    <td class="hour-td wednesday-td td-lightshade" data-time="4" data-time-ampm="AM"
                                        data-date="<?php echo date('Y-m-d', strtotime('wednesday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('wednesday this week')); ?>"></td>
                                    <td class="hour-td thursday-td td-green" data-time="4" data-time-ampm="AM"
                                        data-date="<?php echo date('Y-m-d', strtotime('thursday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('thursday this week')); ?>">2:00 - 4:00
                                    </td>
                                    <td class="hour-td friday-td" data-time="4" data-time-ampm="AM"
                                        data-date="<?php echo date('Y-m-d', strtotime('friday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('friday this week')); ?>"></td>
                                    <td class="hour-td saturday-td" data-time="4" data-time-ampm="AM"
                                        data-date="<?php echo date('Y-m-d', strtotime('saturday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('saturday this week')); ?>"></td>
                                </tr>
                                <tr>
                                    <td>6:00</td>
                                    <td class="hour-td monday-td " data-time="6" data-time-ampm="AM"
                                        data-date="<?php echo date('Y-m-d', strtotime('monday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('monday this week')); ?>"></td>
                                    <td class="hour-td tuesday-td  green-td-divider td-lightshade" data-time="6"
                                        data-time-ampm="AM" data-date="<?php echo date('Y-m-d', strtotime('tuesday this week')); ?>"
                                        data-date-label="<?php echo date('l d F', strtotime('tuesday this week')); ?>"></td>
                                    <td class="hour-td wednesday-td  td-lightshade" data-time="6" data-time-ampm="AM"
                                        data-date="<?php echo date('Y-m-d', strtotime('wednesday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('wednesday this week')); ?>"></td>
                                    <td class="hour-td thursday-td " data-time="6" data-time-ampm="AM"
                                        data-date="<?php echo date('Y-m-d', strtotime('thursday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('thursday this week')); ?>"></td>
                                    <td class="hour-td friday-td " data-time="6" data-time-ampm="AM"
                                        data-date="<?php echo date('Y-m-d', strtotime('friday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('friday this week')); ?>"></td>
                                    <td class="hour-td saturday-td " data-time="6" data-time-ampm="AM"
                                        data-date="<?php echo date('Y-m-d', strtotime('saturday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('saturday this week')); ?>"></td>
                                </tr>
                                <tr>
                                    <td>8:00</td>
                                    <td class="hour-td monday-td " data-time="8" data-time-ampm="AM"
                                        data-date="<?php echo date('Y-m-d', strtotime('monday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('monday this week')); ?>"></td>
                                    <td class="hour-td tuesday-td  green-td-divider td-lightshade" data-time="8"
                                        data-date="<?php echo date('Y-m-d', strtotime('tuesday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('tuesday this week')); ?>"></td>
                                    <td class="hour-td wednesday-td  td-lightshade" data-time="8" data-time-ampm="AM"
                                        data-date="<?php echo date('Y-m-d', strtotime('wednesday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('wednesday this week')); ?>"></td>
                                    <td class="hour-td thursday-td " data-time="8" data-time-ampm="AM"
                                        data-date="<?php echo date('Y-m-d', strtotime('thursday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('thursday this week')); ?>"></td>
                                    <td class="hour-td friday-td " data-time="8" data-time-ampm="AM"
                                        data-date="<?php echo date('Y-m-d', strtotime('friday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('friday this week')); ?>"></td>
                                    <td class="hour-td saturday-td " data-time="8" data-time-ampm="AM"
                                        data-date="<?php echo date('Y-m-d', strtotime('saturday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('saturday this week')); ?>"></td>
                                </tr>
                                <tr>
                                    <td>10:00</td>
                                    <td class="hour-td monday-td  td-lightshade" data-time="10" data-time-ampm="AM"
                                        data-date="<?php echo date('Y-m-d', strtotime('monday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('monday this week')); ?>"></td>
                                    <td class="hour-td tuesday-td  green-td-divider" data-time="10" data-time-ampm="AM"
                                        data-date="<?php echo date('Y-m-d', strtotime('tuesday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('tuesday this week')); ?>"></td>
                                    <td class="hour-td wednesday-td  td-lightshade" data-time="10" data-time-ampm="AM"
                                        data-date="<?php echo date('Y-m-d', strtotime('wednesday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('wednesday this week')); ?>"></td>
                                    <td class="hour-td thursday-td " data-time="10" data-time-ampm="AM"
                                        data-date="<?php echo date('Y-m-d', strtotime('thursday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('thursday this week')); ?>"></td>
                                    <td class="hour-td friday-td " data-time="10" data-time-ampm="AM"
                                        data-date="<?php echo date('Y-m-d', strtotime('friday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('friday this week')); ?>"></td>
                                    <td class="hour-td saturday-td " data-time="10" data-time-ampm="AM"
                                        data-date="<?php echo date('Y-m-d', strtotime('saturday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('saturday this week')); ?>"></td>
                                </tr>
                                <tr>
                                    <td>12:00</td>
                                    <td class="hour-td monday-td  td-lightshade" data-time="12" data-time-ampm="PM"
                                        data-date="<?php echo date('Y-m-d', strtotime('monday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('monday this week')); ?>"></td>
                                    <td class="hour-td tuesday-td  green-td-divider" data-time="12" data-time-ampm="PM"
                                        data-date="<?php echo date('Y-m-d', strtotime('tuesday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('tuesday this week')); ?>"></td>
                                    <td class="hour-td wednesday-td  td-lightshade" data-time="12" data-time-ampm="PM"
                                        data-date="<?php echo date('Y-m-d', strtotime('wednesday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('wednesday this week')); ?>"></td>
                                    <td class="hour-td thursday-td  td-lightshade" data-time="12" data-time-ampm="PM"
                                        data-date="<?php echo date('Y-m-d', strtotime('thursday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('thursday this week')); ?>"></td>
                                    <td class="hour-td friday-td " data-time="12" data-time-ampm="PM"
                                        data-date="<?php echo date('Y-m-d', strtotime('friday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('friday this week')); ?>"></td>
                                    <td class="hour-td saturday-td " data-time="12" data-time-ampm="PM"
                                        data-date="<?php echo date('Y-m-d', strtotime('saturday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('saturday this week')); ?>"></td>
                                </tr>
                                <tr>
                                    <td>14:00</td>
                                    <td class="hour-td monday-td " data-time="14" data-time-ampm="PM"
                                        data-date="<?php echo date('Y-m-d', strtotime('monday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('monday this week')); ?>"></td>
                                    <td class="hour-td tuesday-td  green-td-divider td-lightshade" data-time="14"
                                        data-time-ampm="PM" data-date="<?php echo date('m-d-Y', strtotime('tuesday this week')); ?>"
                                        data-date-label="<?php echo date('l d F', strtotime('tuesday this week')); ?>"></td>
                                    <td class="hour-td wednesday-td  td-lightshade" data-time="14" data-time-ampm="PM"
                                        data-date="<?php echo date('Y-m-d', strtotime('wednesday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('wednesday this week')); ?>"></td>
                                    <td class="hour-td thursday-td  td-lightshade" data-time="14" data-time-ampm="PM"
                                        data-date="<?php echo date('Y-m-d', strtotime('thursday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('thursday this week')); ?>"></td>
                                    <td class="hour-td friday-td " data-time="14" data-time-ampm="PM"
                                        data-date="<?php echo date('Y-m-d', strtotime('friday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('friday this week')); ?>"></td>
                                    <td class="hour-td saturday-td " data-time="14" data-time-ampm="PM"
                                        data-date="<?php echo date('Y-m-d', strtotime('saturday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('saturday this week')); ?>"></td>
                                </tr>
                                <tr>
                                    <td>16:00</td>
                                    <td class="hour-td monday-td " data-time="16" data-time-ampm="PM"
                                        data-date="<?php echo date('Y-m-d', strtotime('monday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('monday this week')); ?>"></td>
                                    <td class="hour-td tuesday-td  green-td-divider" data-time="16" data-time-ampm="PM"
                                        data-date="<?php echo date('Y-m-d', strtotime('tuesday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('tuesday this week')); ?>"></td>
                                    <td class="hour-td wednesday-td  td-lightshade" data-time="16" data-time-ampm="PM"
                                        data-date="<?php echo date('Y-m-d', strtotime('wednesday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('wednesday this week')); ?>"></td>
                                    <td class="hour-td thursday-td  td-lightshade" data-time="16" data-time-ampm="PM"
                                        data-date="<?php echo date('Y-m-d', strtotime('thursday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('thursday this week')); ?>"></td>
                                    <td class="hour-td friday-td " data-time="16" data-time-ampm="PM"
                                        data-date="<?php echo date('Y-m-d', strtotime('friday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('friday this week')); ?>"></td>
                                    <td class="hour-td saturday-td " data-time="16" data-time-ampm="PM"
                                        data-date="<?php echo date('Y-m-d', strtotime('saturday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('saturday this week')); ?>"></td>
                                </tr>
                                <tr>
                                    <td>18:00</td>
                                    <td class="hour-td monday-td " data-time="18" data-time-ampm="PM"
                                        data-date="<?php echo date('Y-m-d', strtotime('monday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('monday this week')); ?>"></td>
                                    <td class="hour-td tuesday-td  green-td-divider" data-time="18" data-time-ampm="PM"
                                        data-date="<?php echo date('Y-m-d', strtotime('tuesday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('tuesday this week')); ?>"></td>
                                    <td class="hour-td wednesday-td  td-lightshade" data-time="18" data-time-ampm="PM"
                                        data-date="<?php echo date('Y-m-d', strtotime('wednesday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('wednesday this week')); ?>"></td>
                                    <td class="hour-td thursday-td  td-lightshade" data-time="18" data-time-ampm="PM"
                                        data-date="<?php echo date('Y-m-d', strtotime('thursday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('thursday this week')); ?>"></td>
                                    <td class="hour-td friday-td " data-time="18" data-time-ampm="PM"
                                        data-date="<?php echo date('Y-m-d', strtotime('friday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('friday this week')); ?>"></td>
                                    <td class="hour-td saturday-td " data-time="18" data-time-ampm="PM"
                                        data-date="<?php echo date('Y-m-d', strtotime('saturday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('saturday this week')); ?>"></td>
                                </tr>
                                <tr>
                                    <td>20:00</td>
                                    <td class="hour-td monday-td " data-time="20" data-time-ampm="PM"
                                        data-date="<?php echo date('Y-m-d', strtotime('monday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('monday this week')); ?>"></td>
                                    <td class="hour-td tuesday-td  green-td-divider" data-time="20" data-time-ampm="PM"
                                        data-date="<?php echo date('Y-m-d', strtotime('tuesday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('tuesday this week')); ?>"></td>
                                    <td class="hour-td wednesday-td  td-lightshade" data-time="20" data-time-ampm="PM"
                                        data-date="<?php echo date('Y-m-d', strtotime('wednesday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('wednesday this week')); ?>"></td>
                                    <td class="hour-td thursday-td  td-lightshade" data-time="20" data-time-ampm="PM"
                                        data-date="<?php echo date('Y-m-d', strtotime('thursday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('thursday this week')); ?>"></td>
                                    <td class="hour-td friday-td " data-time="20" data-time-ampm="PM"
                                        data-date="<?php echo date('Y-m-d', strtotime('friday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('friday this week')); ?>"></td>
                                    <td class="hour-td saturday-td " data-time="20" data-time-ampm="PM"
                                        data-date="<?php echo date('Y-m-d', strtotime('saturday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('saturday this week')); ?>"></td>
                                </tr>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="visite-modal" tabindex="-1" role="dialog" aria-labelledby="visite-modal
            " aria-hidden="true">
        <div class="modal-dialog" role="document" style="max-width: 90rem;">
            <div class="modal-content">

                <div class="modal-body">

                    <div class="row">

                        <div class="col-lg-5 col-md-5 col-sm-5">
                            <strong>PLANNIFIER UNE VISITE</strong>
                            <input type="hidden" value="" id="visiteDateDb" />
                            <input type="hidden" value="" id="visiteTimeDb" />
                            <input type="hidden" value="" id="visiteClientID" />
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="justify-content-center text-center">
                                        <div class="smallest-bluetext mb-2 mt-4">Vue de la semaine</div>
                                        <div class="weekdate-div" style="width: 15rem;">
                                            <div class="weekdate-div-nav weekdate-visite-div-prev justify-content-center text-center"
                                                onclick="visitePrevWeek('<?php echo date('Y-m-d', strtotime('monday this week')); ?>')">
                                                <img src="assets/img/icons/prev-nav.png" />
                                            </div>
                                            <div class="weekdate-div-week justify-content-center text-center">
                                                <strong><span id="visite-current-monday"><?php echo date('M d', strtotime('monday this week')); ?></span> -
                                                    <span id="visite-current-saturday"><?php echo date('M d', strtotime('saturday this week')); ?></span></strong>
                                            </div>
                                            <div class="weekdate-div-nav weekdate-visite-div-next justify-content-center text-center"
                                                onclick="visiteNextWeek('<?php echo date('Y-m-d', strtotime('monday this week')); ?>')">
                                                <img src="assets/img/icons/next-nav.png" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-5">
                                <div class="col-lg-6 col-md-6 col-sm-6">

                                    <div class="smallest-bluetext mb-2 mt-4">Date de l'intervention</div>
                                    <div id="schedules">
                                        <div class="text-dark-black" id="lvisite"><?php echo date('l d F'); ?><br />
                                            <?php
                                            $currentTime = date('H:00 A');
                                            $nextTime = date('H:00 A', strtotime('+2 hours'));
                                            echo $currentTime . '-' . $nextTime;
                                            ?>
                                        </div>
                                    </div>


                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">

                                    <div class="smallest-bluetext mb-2 mt-4">Intervention assignee á</div>
                                    <select class="form-control text-dark-black" id="collaborateurs-visite-select">
                                        <?php

                                        foreach ($collaborateurs as $collaborateur) {
                                            echo '<option value="' . $collaborateur->id . '">' . strtoupper($collaborateur->prenom . ' ' . $collaborateur->nom) . '</option>';
                                        }

                                        ?>

                                    </select>

                                </div>
                            </div>


                            <div class="row mt-5 btn-light-lightblue rounded-corner p-2">

                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6">

                                            <div class="smallest-bluetext mb-2 mt-4">Informations du client</div>
                                            <div class="text-dark-black"><span id="visite-client-fullname">Mr John
                                                    Doe</span><br />Particulier</div>

                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6">

                                            <div class="smallest-bluetext mb-2 mt-4">Address PDL</div>
                                            <div class="text-dark-black"><span id="visite-client-address">DU FAUBOURG
                                                    POISSONNIERE</span><br /><span id="intervention-client-villa">750009
                                                    PARIS 9E ARRONDISSEMENT</span></div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6">

                                            <div class="smallest-bluetext mb-2 mt-4">Coordonnées</div>
                                            <div class="text-dark-black">
                                                <span id="visite-client-telephone">000000000</span><br />
                                                <span id="visite-client-email">johndoe@gmail.com</span>
                                            </div>

                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6">

                                            <div class="smallest-bluetext mb-2 mt-4">Numéro du PDL</div>
                                            <div class="text-dark-black"><span id="visite-client-pdl">123456789798</span>
                                            </div>

                                        </div>
                                    </div>


                                </div>


                            </div>

                            <div class="row mt-5 mb-4">
                                <div class="col-lg-12 col-md-12 col-sm-12 justify-content-center text-center">

                                    <a href="javascript:void(0)" id="visite-plan" class="btn btn-lightblue px-4 mr-2"
                                        style="line-height: 2;border-radius: 7rem !important">Plannifier</a>
                                    <a href="javascript:void(0)" class="btn bg-white px-5 text-blue text-bold btn-shadow"
                                        style="line-height: 2;border-radius:  7rem !important"
                                        id="visite-cancel">Annuler</a>

                                </div>

                            </div>

                        </div>

                        <div class="col-lg-7 col-md-7 col-sm-7">
                            <table style="width:100%" id="plannifier-visite-table">
                                <tr>
                                    <td class="no-border"></td>
                                    <td class="no-border td-margin-top">
                                        <span class="td-percentage green-td-label monday-visite-percentage"
                                            style="padding-bottom: 7px">10%</span>
                                        <span class="td-percentage-div gray-td-bg" style="height:70px">
                                            <span class="common-td-bg green-bg-td monday-visite-inner-container"
                                                style="height:7px">
                                                &nbsp;
                                            </span>
                                        </span>
                                    </td>
                                    <td class="no-border td-margin-top">
                                        <span class="td-percentage orange-td-label tuesday-visite-percentage"
                                            style="padding-bottom: 49px">70%</span>
                                        <span class="td-percentage-div gray-td-bg" style="height:70px">
                                            <span class="common-td-bg orange-bg-td tuesday-visite-inner-container"
                                                style="height:49px">
                                                &nbsp;
                                            </span>
                                        </span>
                                    </td>
                                    <td class="no-border td-margin-top">
                                        <span class="td-percentage red-td-label wednesday-visite-percentage"
                                            style="padding-bottom: 66.5px">95%</span>
                                        <span class="td-percentage-div gray-td-bg" style="height:70px">
                                            <span class="common-td-bg red-bg-td wednesday-visite-inner-container"
                                                style="height:66.5px">
                                                &nbsp;
                                            </span>
                                        </span>
                                    </td>
                                    <td class="no-border td-margin-top">
                                        <span class="td-percentage orange-td-label thursday-visite-percentage"
                                            style="padding-bottom: 49px">95%</span>
                                        <span class="td-percentage-div gray-td-bg" style="height:70px">
                                            <span class="common-td-bg orange-bg-td thursday-visite-inner-container"
                                                style="height:49px">
                                                &nbsp;
                                            </span>
                                        </span>
                                    </td>
                                    <td class="no-border td-margin-top">
                                        <span class="td-percentage green-td-label friday-visite-percentage"
                                            style="padding-bottom: 7px">10%</span>
                                        <span class="td-percentage-div gray-td-bg" style="height:70px">
                                            <span class="common-td-bg green-bg-td friday-visite-inner-container"
                                                style="height:7px">
                                                &nbsp;
                                            </span>
                                        </span>
                                    </td>
                                    <td class="no-border td-margin-top">
                                        <span class="td-percentage green-td-label saturday-visite-percentage"
                                            style="padding-bottom: 7px">10%</span>
                                        <span class="td-percentage-div gray-td-bg" style="height:70px">
                                            <span class="common-td-bg green-bg-td saturday-visite-inner-container"
                                                style="height:7px">
                                                &nbsp;
                                            </span>
                                        </span>
                                    </td>
                                </tr>

                                <tr style="background-color:#009cde;color: #FFFFFF;">
                                    <th style="border-top-left-radius: 10px">&nbsp;</th>
                                    <th>lun. <span id="monday-visite-day"><?php echo date('d', strtotime('monday this week')); ?></span></th>
                                    <th>mar. <span id="tuesday-visite-day"><?php echo date('d', strtotime('tuesday this week')); ?></span></th>
                                    <th>mer. <span id="wednesday-visite-day"><?php echo date('d', strtotime('wednesday this week')); ?></span></th>
                                    <th>jeu. <span id="thursday-visite-day"><?php echo date('d', strtotime('thursday this week')); ?></span></th>
                                    <th>ven. <span id="friday-visite-day"><?php echo date('d', strtotime('friday this week')); ?></span></th>
                                    <th style="border-top-right-radius: 10px">sam. <span
                                            id="saturday-visite-day"><?php echo date('d', strtotime('saturday this week')); ?></span></th>
                                </tr>
                                <tr>
                                    <td>12:00</td>
                                    <td class="hour-visite-td monday-visite-td" data-time="0" data-time-ampm="AM"
                                        data-date="<?php echo date('Y-m-d', strtotime('monday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('monday this week')); ?>"></td>
                                    <td class="hour-visite-td tuesday-visite-td green-td-divider" data-time="0"
                                        data-time-ampm="AM" data-date="<?php echo date('Y-m-d', strtotime('tuesday this week')); ?>"
                                        data-date-label="<?php echo date('l d F', strtotime('tuesday this week')); ?>"></td>
                                    <td class="hour-visite-td wednesday-visite-td" data-time="0" data-time-ampm="AM"
                                        data-date="<?php echo date('Y-m-d', strtotime('wednesday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('wednesday this week')); ?>"></td>
                                    <td class="hour-visite-td thursday-visite-td" data-time="0" data-time-ampm="AM"
                                        data-date="<?php echo date('Y-m-d', strtotime('thursday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('thursday this week')); ?>"></td>
                                    <td class="hour-visite-td friday-visite-td" data-time="0" data-time-ampm="AM"
                                        data-date="<?php echo date('Y-m-d', strtotime('friday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('friday this week')); ?>"></td>
                                    <td class="hour-visite-td saturday-visite-td" data-time="0" data-time-ampm="AM"
                                        data-date="<?php echo date('Y-m-d', strtotime('saturday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('saturday this week')); ?>"></td>
                                </tr>
                                <tr>
                                    <td>2:00</td>
                                    <td class="hour-visite-td monday-visite-td" data-time="2" data-time-ampm="AM"
                                        data-date="<?php echo date('Y-m-d', strtotime('monday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('monday this week')); ?>"></td>
                                    <td class="hour-visite-td tuesday-visite-td green-td-divider" data-time="2"
                                        data-time-ampm="AM" data-date="<?php echo date('Y-m-d', strtotime('tuesday this week')); ?>"
                                        data-date-label="<?php echo date('l d F', strtotime('tuesday this week')); ?>"></td>
                                    <td class="hour-visite-td wednesday-visite-td" data-time="2" data-time-ampm="AM"
                                        data-date="<?php echo date('Y-m-d', strtotime('wednesday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('wednesday this week')); ?>"></td>
                                    <td class="hour-visite-td thursday-visite-td" data-time="2" data-time-ampm="AM"
                                        data-date="<?php echo date('Y-m-d', strtotime('thursday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('thursday this week')); ?>"></td>
                                    <td class="hour-visite-td friday-visite-td" data-time="2" data-time-ampm="AM"
                                        data-date="<?php echo date('Y-m-d', strtotime('friday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('friday this week')); ?>"></td>
                                    <td class="hour-visite-td saturday-visite-td" data-time="2" data-time-ampm="AM"
                                        data-date="<?php echo date('Y-m-d', strtotime('saturday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('saturday this week')); ?>"></td>
                                </tr>
                                <tr>
                                    <td>4:00</td>
                                    <td class="hour-visite-td monday-visite-td" data-time="4" data-time-ampm="AM"
                                        data-date="<?php echo date('Y-m-d', strtotime('monday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('monday this week')); ?>"></td>
                                    <td class="hour-visite-td tuesday-visite-td  green-td-divider" data-time="4"
                                        data-time-ampm="AM" data-date="<?php echo date('Y-m-d', strtotime('tuesday this week')); ?>"
                                        data-date-label="<?php echo date('l d F', strtotime('tuesday this week')); ?>"></td>
                                    <td class="hour-visite-td wednesday-visite-td" data-time="4" data-time-ampm="AM"
                                        data-date="<?php echo date('Y-m-d', strtotime('wednesday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('wednesday this week')); ?>"></td>
                                    <td class="hour-visite-td thursday-visite-td td-green" data-time="4"
                                        data-time-ampm="AM" data-date="<?php echo date('Y-m-d', strtotime('thursday this week')); ?>"
                                        data-date-label="<?php echo date('l d F', strtotime('thursday this week')); ?>">2:00 - 4:00</td>
                                    <td class="hour-visite-td friday-visite-td" data-time="4" data-time-ampm="AM"
                                        data-date="<?php echo date('Y-m-d', strtotime('friday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('friday this week')); ?>"></td>
                                    <td class="hour-visite-td saturday-visite-td" data-time="4" data-time-ampm="AM"
                                        data-date="<?php echo date('Y-m-d', strtotime('saturday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('saturday this week')); ?>"></td>
                                </tr>
                                <tr>
                                    <td>6:00</td>
                                    <td class="hour-visite-td monday-visite-td" data-time="6" data-time-ampm="AM"
                                        data-date="<?php echo date('Y-m-d', strtotime('monday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('monday this week')); ?>"></td>
                                    <td class="hour-visite-td tuesday-visite-td green-td-divider" data-time="6"
                                        data-time-ampm="AM" data-date="<?php echo date('Y-m-d', strtotime('tuesday this week')); ?>"
                                        data-date-label="<?php echo date('l d F', strtotime('tuesday this week')); ?>"></td>
                                    <td class="hour-visite-td wednesday-visite-td" data-time="6" data-time-ampm="AM"
                                        data-date="<?php echo date('Y-m-d', strtotime('wednesday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('wednesday this week')); ?>"></td>
                                    <td class="hour-visite-td thursday-visite-td " data-time="6" data-time-ampm="AM"
                                        data-date="<?php echo date('Y-m-d', strtotime('thursday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('thursday this week')); ?>"></td>
                                    <td class="hour-visite-td friday-visite-td " data-time="6" data-time-ampm="AM"
                                        data-date="<?php echo date('Y-m-d', strtotime('friday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('friday this week')); ?>"></td>
                                    <td class="hour-visite-td saturday-visite-td " data-time="6" data-time-ampm="AM"
                                        data-date="<?php echo date('Y-m-d', strtotime('saturday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('saturday this week')); ?>"></td>
                                </tr>
                                <tr>
                                    <td>8:00</td>
                                    <td class="hour-visite-td monday-visite-td" data-time="8" data-time-ampm="AM"
                                        data-date="<?php echo date('Y-m-d', strtotime('monday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('monday this week')); ?>"></td>
                                    <td class="hour-visite-td tuesday-visite-td green-td-divider" data-time="8"
                                        data-date="<?php echo date('Y-m-d', strtotime('tuesday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('tuesday this week')); ?>"></td>
                                    <td class="hour-visite-td wednesday-visite-td" data-time="8" data-time-ampm="AM"
                                        data-date="<?php echo date('Y-m-d', strtotime('wednesday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('wednesday this week')); ?>"></td>
                                    <td class="hour-visite-td thursday-visite-td " data-time="8" data-time-ampm="AM"
                                        data-date="<?php echo date('Y-m-d', strtotime('thursday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('thursday this week')); ?>"></td>
                                    <td class="hour-visite-td friday-visite-td " data-time="8" data-time-ampm="AM"
                                        data-date="<?php echo date('Y-m-d', strtotime('friday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('friday this week')); ?>"></td>
                                    <td class="hour-visite-td saturday-visite-td " data-time="8" data-time-ampm="AM"
                                        data-date="<?php echo date('Y-m-d', strtotime('saturday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('saturday this week')); ?>"></td>
                                </tr>
                                <tr>
                                    <td>10:00</td>
                                    <td class="hour-visite-td monday-visite-td" data-time="10" data-time-ampm="AM"
                                        data-date="<?php echo date('Y-m-d', strtotime('monday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('monday this week')); ?>"></td>
                                    <td class="hour-visite-td tuesday-visite-td  green-td-divider" data-time="10"
                                        data-time-ampm="AM" data-date="<?php echo date('Y-m-d', strtotime('tuesday this week')); ?>"
                                        data-date-label="<?php echo date('l d F', strtotime('tuesday this week')); ?>"></td>
                                    <td class="hour-visite-td wednesday-visite-td" data-time="10" data-time-ampm="AM"
                                        data-date="<?php echo date('Y-m-d', strtotime('wednesday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('wednesday this week')); ?>"></td>
                                    <td class="hour-visite-td thursday-visite-td " data-time="10" data-time-ampm="AM"
                                        data-date="<?php echo date('Y-m-d', strtotime('thursday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('thursday this week')); ?>"></td>
                                    <td class="hour-visite-td friday-visite-td " data-time="10" data-time-ampm="AM"
                                        data-date="<?php echo date('Y-m-d', strtotime('friday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('friday this week')); ?>"></td>
                                    <td class="hour-visite-td saturday-visite-td " data-time="10" data-time-ampm="AM"
                                        data-date="<?php echo date('Y-m-d', strtotime('saturday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('saturday this week')); ?>"></td>
                                </tr>
                                <tr>
                                    <td>12:00</td>
                                    <td class="hour-visite-td monday-visite-td" data-time="12" data-time-ampm="NN"
                                        data-date="<?php echo date('Y-m-d', strtotime('monday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('monday this week')); ?>"></td>
                                    <td class="hour-visite-td tuesday-visite-td  green-td-divider" data-time="12"
                                        data-time-ampm="NN" data-date="<?php echo date('Y-m-d', strtotime('tuesday this week')); ?>"
                                        data-date-label="<?php echo date('l d F', strtotime('tuesday this week')); ?>"></td>
                                    <td class="hour-visite-td wednesday-visite-td" data-time="12" data-time-ampm="NN"
                                        data-date="<?php echo date('Y-m-d', strtotime('wednesday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('wednesday this week')); ?>"></td>
                                    <td class="hour-visite-td thursday-visite-td" data-time="12" data-time-ampm="NN"
                                        data-date="<?php echo date('Y-m-d', strtotime('thursday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('thursday this week')); ?>"></td>
                                    <td class="hour-visite-td friday-visite-td " data-time="12" data-time-ampm="NN"
                                        data-date="<?php echo date('Y-m-d', strtotime('friday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('friday this week')); ?>"></td>
                                    <td class="hour-visite-td saturday-visite-td " data-time="12" data-time-ampm="NN"
                                        data-date="<?php echo date('Y-m-d', strtotime('saturday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('saturday this week')); ?>"></td>
                                </tr>
                                <tr>
                                    <td>14:00</td>
                                    <td class="hour-visite-td monday-visite-td" data-time="14" data-time-ampm="PM"
                                        data-date="<?php echo date('Y-m-d', strtotime('monday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('monday this week')); ?>"></td>
                                    <td class="hour-visite-td tuesday-visite-td  green-td-divider td-lightshade"
                                        data-time="14" data-time-ampm="PM" data-date="<?php echo date('m-d-Y', strtotime('tuesday this week')); ?>"
                                        data-date-label="<?php echo date('l d F', strtotime('tuesday this week')); ?>"></td>
                                    <td class="hour-visite-td wednesday-visite-td" data-time="14" data-time-ampm="PM"
                                        data-date="<?php echo date('Y-m-d', strtotime('wednesday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('wednesday this week')); ?>"></td>
                                    <td class="hour-visite-td thursday-visite-td" data-time="14" data-time-ampm="PM"
                                        data-date="<?php echo date('Y-m-d', strtotime('thursday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('thursday this week')); ?>"></td>
                                    <td class="hour-visite-td friday-visite-td " data-time="14" data-time-ampm="PM"
                                        data-date="<?php echo date('Y-m-d', strtotime('friday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('friday this week')); ?>"></td>
                                    <td class="hour-visite-td saturday-visite-td " data-time="14" data-time-ampm="PM"
                                        data-date="<?php echo date('Y-m-d', strtotime('saturday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('saturday this week')); ?>"></td>
                                </tr>
                                <tr>
                                    <td>16:00</td>
                                    <td class="hour-visite-td monday-visite-td" data-time="16" data-time-ampm="PM"
                                        data-date="<?php echo date('Y-m-d', strtotime('monday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('monday this week')); ?>"></td>
                                    <td class="hour-visite-td tuesday-visite-td  green-td-divider" data-time="16"
                                        data-time-ampm="PM" data-date="<?php echo date('Y-m-d', strtotime('tuesday this week')); ?>"
                                        data-date-label="<?php echo date('l d F', strtotime('tuesday this week')); ?>"></td>
                                    <td class="hour-visite-td wednesday-visite-td" data-time="16" data-time-ampm="PM"
                                        data-date="<?php echo date('Y-m-d', strtotime('wednesday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('wednesday this week')); ?>"></td>
                                    <td class="hour-visite-td thursday-visite-td" data-time="16" data-time-ampm="PM"
                                        data-date="<?php echo date('Y-m-d', strtotime('thursday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('thursday this week')); ?>"></td>
                                    <td class="hour-visite-td friday-visite-td " data-time="16" data-time-ampm="PM"
                                        data-date="<?php echo date('Y-m-d', strtotime('friday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('friday this week')); ?>"></td>
                                    <td class="hour-visite-td saturday-visite-td " data-time="16" data-time-ampm="PM"
                                        data-date="<?php echo date('Y-m-d', strtotime('saturday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('saturday this week')); ?>"></td>
                                </tr>
                                <tr>
                                    <td>18:00</td>
                                    <td class="hour-visite-td monday-visite-td" data-time="18" data-time-ampm="PM"
                                        data-date="<?php echo date('Y-m-d', strtotime('monday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('monday this week')); ?>"></td>
                                    <td class="hour-visite-td tuesday-visite-td  green-td-divider" data-time="18"
                                        data-time-ampm="PM" data-date="<?php echo date('Y-m-d', strtotime('tuesday this week')); ?>"
                                        data-date-label="<?php echo date('l d F', strtotime('tuesday this week')); ?>"></td>
                                    <td class="hour-visite-td wednesday-visite-td" data-time="18" data-time-ampm="PM"
                                        data-date="<?php echo date('Y-m-d', strtotime('wednesday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('wednesday this week')); ?>"></td>
                                    <td class="hour-visite-td thursday-visite-td" data-time="18" data-time-ampm="PM"
                                        data-date="<?php echo date('Y-m-d', strtotime('thursday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('thursday this week')); ?>"></td>
                                    <td class="hour-visite-td friday-visite-td " data-time="18" data-time-ampm="PM"
                                        data-date="<?php echo date('Y-m-d', strtotime('friday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('friday this week')); ?>"></td>
                                    <td class="hour-visite-td saturday-visite-td " data-time="18" data-time-ampm="PM"
                                        data-date="<?php echo date('Y-m-d', strtotime('saturday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('saturday this week')); ?>"></td>
                                </tr>
                                <tr>
                                    <td>20:00</td>
                                    <td class="hour-visite-td monday-visite-td" data-time="20" data-time-ampm="PM"
                                        data-date="<?php echo date('Y-m-d', strtotime('monday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('monday this week')); ?>"></td>
                                    <td class="hour-visite-td tuesday-visite-td  green-td-divider" data-time="20"
                                        data-time-ampm="PM" data-date="<?php echo date('Y-m-d', strtotime('tuesday this week')); ?>"
                                        data-date-label="<?php echo date('l d F', strtotime('tuesday this week')); ?>"></td>
                                    <td class="hour-visite-td wednesday-visite-td" data-time="20" data-time-ampm="PM"
                                        data-date="<?php echo date('Y-m-d', strtotime('wednesday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('wednesday this week')); ?>"></td>
                                    <td class="hour-visite-td thursday-visite-td" data-time="20" data-time-ampm="PM"
                                        data-date="<?php echo date('Y-m-d', strtotime('thursday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('thursday this week')); ?>"></td>
                                    <td class="hour-visite-td friday-visite-td " data-time="20" data-time-ampm="PM"
                                        data-date="<?php echo date('Y-m-d', strtotime('friday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('friday this week')); ?>"></td>
                                    <td class="hour-visite-td saturday-visite-td " data-time="20" data-time-ampm="PM"
                                        data-date="<?php echo date('Y-m-d', strtotime('saturday this week')); ?>" data-date-label="<?php echo date('l d F', strtotime('saturday this week')); ?>"></td>
                                </tr>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="intervention-confirmation" tabindex="-1" role="dialog"
        aria-labelledby="technicien-modal" aria-hidden="true">
        <div class="modal-dialog" role="document" style="max-width: 33rem;">
            <div class="modal-content">

                <div class="modal-body">

                    <div class="row">

                        <div class="col-lg-12 col-md-12 col-sm-12 px-5 mt-4">

                            <div class="row">
                                <div class="col-lg-5">
                                    <img src="{{ asset('public/assets/img/media/collab.png')}}" class="rounded-circle client-circle-image">
                                </div>

                                <div class="col-lg-7">
                                    <h2 class="text-dark-black client-title-planifier client-name-planifier">John Doe</h2>
                                    <p class="text-blue client-p-planifier mt-4">Jeudi 21 Decembre<br />10:00 - 12:00 AM
                                    </p>
                                </div>
                            </div>

                            <div class="row mt-4">

                                <div class="col-lg-12 text-center">
                                    <h2 class="text-dark-black client-title-planifier">Intervention planifée !</h2>
                                </div>
                            </div>

                            <div class="row mt-4 mb-4">

                                <div class="col-lg-12 text-center">
                                    <a href="javascript:void(0)" class="btn btn-lightblue px-4 mr-2" id="ok-intervention"
                                        style="line-height: 2;border-radius: 7rem !important">OK</a>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="visite-confirmation" tabindex="-1" role="dialog" aria-labelledby="technicien-modal"
        aria-hidden="true">
        <div class="modal-dialog" role="document" style="max-width: 33rem;">
            <div class="modal-content">

                <div class="modal-body">

                    <div class="row">

                        <div class="col-lg-12 col-md-12 col-sm-12 px-5 mt-4">

                            <div class="row">
                                <div class="col-lg-5">
                                    <img src="{{ asset('public/assets/img/media/collab.png')}}" class="rounded-circle client-circle-image">
                                </div>

                                <div class="col-lg-7">
                                    <h2 class="text-dark-black client-title-planifier client-name-planifier">John Doe</h2>
                                    <p class="text-blue client-p-planifier mt-4">Jeudi 21 Decembre<br />10:00 - 12:00
                                    </p>
                                </div>
                            </div>

                            <div class="row mt-4">

                                <div class="col-lg-12 text-center">
                                    <h2 class="text-dark-black client-title-planifier">Visite planifée !</h2>
                                </div>
                            </div>

                            <div class="row mt-4 mb-4">

                                <div class="col-lg-12 text-center">
                                    <a href="javascript:void(0)" class="btn btn-lightblue px-4 mr-2" id="ok-visite"
                                        style="line-height: 2;border-radius: 7rem !important">OK</a>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="modal" id="planifee-status-intervention-modal" style="padding-right: 3px;" aria-modal="true"
        role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document" style="width: 27rem">
            <div class="modal-content modal-content-demo">

                <div class="modal-body">
                    <input type="hidden" name="intervention_client_id" id="intervention_client_id" value="0">

                    <script>

                        function openInterventionStatusModal(clientID)
                        {

                            $('#planifee-status-intervention-modal').modal('show');
                            $('#intervention_client_id').val(clientID);


                            $.ajax({
                                url: siteUrl + '/get-intervention-status',
                                method: 'GET',
                                success: function(data) {
                                    var options = '';
                                    $.each(data, function(k, v) {
                                        options += '<option value="' + v.id + '">' + v.name + '</option>';
                                    });

                                    $('#intervention-status').find('option')
                                        .remove()
                                        .end()
                                        .append(options);
                                }
                            });


                            $.ajax({
                                url: siteUrl + '/get-intervention-schedule?client_id='+clientID,
                                method: 'GET',
                                success: function(data) {
                                    var options = '';
                                    $.each(data, function(k, v) {
                                        options += '<option value="' + v.schedule + '">' + v.schedule + '</option>';
                                    });

                                    $('#intervention-schedule').find('option')
                                        .remove()
                                        .end()
                                        .append(options);
                                }
                            });


                        }


                        </script>







                    @php
                        $interventions = DB::table('interventions')
                            ->select('schedule', DB::raw('count(*) as total'))
                            ->groupBy('schedule')->get();
                    @endphp

                    <div class="">
                        <div class="card-body">
                            <div class="text-center mb-4">
                                <h5 class="modal-title text-dark-black">CHANGER LE STATUT DE L'INTERVENTION</h5>
                            </div>
                            <div class="form-group">
                                <p class="mg-b-10">Statut</p>
                                <select class="form-control" id="intervention-status">
                                    <option label="Statut">
                                    </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <p class="mg-b-10">Créneau horaire</p>
                                <select class="form-control" id="intervention-schedule">

                                </select>
                            </div>
                            <div class="form-group">
                                <p class="mg-b-10">Commentaire</p>
                                <textarea class="form-control" id="intervention-comment" placeholder="Texte..."
                                    rows="5"></textarea>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer m-auto">
                    <!-- <button class="validerbtn btn" type="button">Valider</button>
                            <button class="annulerBtn btn" data-dismiss="modal" type="button">Annuler</button> -->
                    <a href="javascript:void(0)" class="btn btn-lightblue px-4 mr-2"
                        style="line-height: 2;border-radius: 7rem !important" id="status-intervention-valider">Valider</a>
                    <a href="javascript:void(0)" class="btn bg-white px-5 text-blue text-bold btn-shadow"
                        style="line-height: 2;border-radius:  7rem !important">Annuler</a>
                </div>
            </div>
        </div>
    </div>


    <div class="modal" id="modified-status-intervention-modal" style="padding-right: 3px;" aria-modal="true"
        role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document" style="width: 30rem">
            <div class="modal-content modal-content-demo">

                <div class="modal-body pt-5">

                    <div class="row text-center">
                        <img src="{{ asset('public/assets/img/media/check-circle.png') }}"
                            style="margin:0 auto;max-width: 5rem;" />

                        <h2 style="font-size:1.6rem;width:100%;" class="mt-4">Statut de l'intervention modifié !
                        </h2>
                    </div>

                </div>
                <div class="modal-footer m-auto pb-5">
                    <a href="javascript:void(0)" class="btn btn-lightblue px-4 mr-2"
                        style="line-height: 2;border-radius: 7rem !important"
                        id="modified-status-intervention-ok-btn">OK</a>

                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="planifee-status-visite-modal" style="padding-right: 3px;" aria-modal="true"
        role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document" style="width: 27rem">
            <div class="modal-content modal-content-demo">

                <div class="modal-body">
                    <input type="hidden" name="" id="visite-client-id" value="0">
                    @php
                        $visites = DB::table('visites')
                            ->select('schedule', DB::raw('count(*) as total'))
                            ->groupBy('schedule')->get();
                    @endphp
                    <div class="">
                        <div class="card-body">
                            <div class="text-center mb-4">
                                <h5 class="modal-title text-dark-black">CHANGER LE STATUT DE L'INTERVENTION</h5>
                            </div>
                            <div class="form-group">
                                <p class="mg-b-10">Statut</p>
                                <select class="form-control" id="visite-status">
                                    <option label="Statut">
                                    </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <p class="mg-b-10">Créneau horaire</p>
                                <select class="form-control" id="visite-schedule">
                                   @foreach ($visites as $visite)
                                    <option value="{{$visite->schedule}}">{{$visite->schedule}}</option>
                                   @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <p class="mg-b-10">Commentaire</p>
                                <textarea class="form-control" id="visite-comment" placeholder="Texte..."
                                    rows="5"></textarea>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer m-auto">
                    <!-- <button class="validerbtn btn" type="button">Valider</button>
                            <button class="annulerBtn btn" data-dismiss="modal" type="button">Annuler</button> -->
                    <a href="javascript:void(0)" class="btn btn-lightblue px-4 mr-2"
                        style="line-height: 2;border-radius: 7rem !important" id="status-visite-valider">Valider</a>
                    <a href="javascript:void(0)" class="btn bg-white px-5 text-blue text-bold btn-shadow"
                        style="line-height: 2;border-radius:  7rem !important">Annuler</a>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="modified-status-visite-modal" style="padding-right: 3px;" aria-modal="true"
        role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document" style="width: 30rem">
            <div class="modal-content modal-content-demo">

                <div class="modal-body pt-5">

                    <div class="row text-center">
                        <img src="{{ asset('public/assets/img/media/check-circle.png') }}"
                            style="margin:0 auto;max-width: 5rem;" />

                        <h2 style="font-size:1.6rem;width:100%;" class="mt-4">Statut de la visite modifié !</h2>
                    </div>

                </div>
                <div class="modal-footer m-auto pb-5">
                    <a href="javascript:void(0)" class="btn btn-lightblue px-4 mr-2"
                        style="line-height: 2;border-radius: 7rem !important" id="modified-status-visite-ok-btn">OK</a>

                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">

        $('#clientDataTable').dataTable({
            "pageLength": 10
        });
        $('#clientDataTable_length').hide();
        $('#clientDataTable_filter').hide();

        $('.close-modal').click(function() {
            $('.modal').modal('hide');
        });

        $("#clientDataTable tbody tr").click(function(event) {
            $("#planifier-modal").modal('show');
        });

        var currentMonday = '<?php echo date('Y-m-d', strtotime('monday this week')); ?>';
        var currentClientID = $('#clientID').val();

        function nextWeek(monday) {

            var prevMondayRaw = new Date(monday);
            prevMondayRaw.setDate(prevMondayRaw.getDate() - 7);
            var prevMonday = prevMondayRaw.toISOString().split('T')[0];

            var nextMondayRaw = new Date(monday);
            nextMondayRaw.setDate(nextMondayRaw.getDate() + 7);
            nextMonday = nextMondayRaw.toISOString().split('T')[0];
            var nextMondayVal = new Date(nextMonday).toString('MMM dd');
            var nextMondayLabel = 'Monday ' + new Date(nextMonday).toString('dd') + ' ' + nextMondayRaw.toLocaleString(
                'en-US', {
                    month: 'long'
                });;
            var nextMondayDayVal = new Date(nextMonday).getDate();

            currentMonday = nextMonday;
            var nextTuesdayRaw = new Date(monday);
            nextTuesdayRaw.setDate(nextTuesdayRaw.getDate() + 8);
            var nextTuesday = nextTuesdayRaw.toISOString().split('T')[0];
            var nextTuesdayVal = new Date(nextTuesday).toString('MMM dd');
            var nextTuesdayLabel = 'Tuesday ' + new Date(nextTuesday).toString('dd') + ' ' + nextTuesdayRaw.toLocaleString(
                'en-US', {
                    month: 'long'
                });;
            var nextTuesdayDayVal = new Date(nextTuesday).getDate();

            var nextWednesdayRaw = new Date(monday);
            nextWednesdayRaw.setDate(nextWednesdayRaw.getDate() + 9);
            var nextWednesday = nextWednesdayRaw.toISOString().split('T')[0];
            var nextWednesdayVal = new Date(nextWednesday).toString('MMM dd');
            var nextWednesdayLabel = 'Wednesday ' + new Date(nextWednesday).toString('dd') + ' ' + nextWednesdayRaw
                .toLocaleString('en-US', {
                    month: 'long'
                });;
            var nextWednesdayDayVal = new Date(nextWednesday).getDate();

            var nextThursdayRaw = new Date(monday);
            nextThursdayRaw.setDate(nextThursdayRaw.getDate() + 10);
            var nextThursday = nextThursdayRaw.toISOString().split('T')[0];
            var nextThursdayVal = new Date(nextThursday).toString('MMM dd');
            var nextThursdayLabel = 'Thursday ' + new Date(nextThursday).toString('dd') + ' ' + nextThursdayRaw
                .toLocaleString('en-US', {
                    month: 'long'
                });;
            var nextThursdayDayVal = new Date(nextThursday).getDate();

            var nextFridayRaw = new Date(monday);
            nextFridayRaw.setDate(nextFridayRaw.getDate() + 11);
            var nextFriday = nextFridayRaw.toISOString().split('T')[0];
            var nextFridayVal = new Date(nextFriday).toString('MMM dd');
            var nextFridayLabel = 'Friday ' + new Date(nextFriday).toString('dd') + ' ' + nextMondayRaw.toLocaleString(
                'en-US', {
                    month: 'long'
                });;
            var nextFridayDayVal = new Date(nextFriday).getDate();

            var nextSaturdayRaw = new Date(monday);
            nextSaturdayRaw.setDate(nextSaturdayRaw.getDate() + 12);
            var nextSaturday = nextSaturdayRaw.toISOString().split('T')[0];
            var nextSaturdayVal = new Date(nextSaturday).toString('MMM dd');
            var nextSaturdayLabel = 'Saturday ' + new Date(nextSaturday).toString('dd') + ' ' + nextSaturdayRaw
                .toLocaleString('en-US', {
                    month: 'long'
                });;
            var nextSaturdayDayVal = new Date(nextSaturday).getDate();

            $('#intervention-current-monday').text(nextMondayVal);
            $('#intervention-current-saturday').text(nextSaturdayVal);

            $('#monday-day').text(nextMondayDayVal);
            $('#tuesday-day').text(nextTuesdayDayVal);
            $('#wednesday-day').text(nextWednesdayDayVal);
            $('#thursday-day').text(nextThursdayDayVal);
            $('#friday-day').text(nextFridayDayVal);
            $('#saturday-day').text(nextSaturdayDayVal);

            $('.monday-td').attr('data-date', nextMonday);
            $('.tuesday-td').attr('data-date', nextTuesday);
            $('.wednesday-td').attr('data-date', nextWednesday);
            $('.thursday-td').attr('data-date', nextThursday);
            $('.friday-td').attr('data-date', nextFriday);
            $('.saturday-td').attr('data-date', nextSaturday);

            $('.monday-td').attr('data-date-label', nextMondayLabel);
            $('.tuesday-td').attr('data-date-label', nextTuesdayLabel);
            $('.wednesday-td').attr('data-date-label', nextWednesdayLabel);
            $('.thursday-td').attr('data-date-label', nextThursdayLabel);
            $('.friday-td').attr('data-date-label', nextFridayLabel);
            $('.saturday-td').attr('data-date-label', nextSaturdayLabel);

            $('.weekdate-div-next').attr('onClick', 'nextWeek(\'' + nextMonday + '\')');
            $('.weekdate-div-prev').attr('onClick', 'prevWeek(\'' + nextMonday + '\')');

            getInterventionData(clientID, nextMonday);
        }

        function prevWeek(monday) {


            var nextMondayRaw = new Date(monday);
            nextMondayRaw.setDate(nextMondayRaw.getDate() + 7);
            nextMonday = nextMondayRaw.toISOString().split('T')[0];




            var prevMondayRaw = new Date(monday);

            prevMondayRaw.setDate(prevMondayRaw.getDate() - 7);
            var prevMonday = prevMondayRaw.toISOString().split('T')[0];

            var prevMondayVal = new Date(prevMonday).toString('MMM dd');
            var prevMondayDayVal = new Date(prevMonday).getDate();
            var prevMondayLabel = 'Monday ' + new Date(prevMonday).toString('dd') + ' ' + prevMondayRaw.toLocaleString(
                'en-US', {
                    month: 'long'
                });

            currentMonday = prevMonday;
            var prevTuesdayRaw = new Date(monday);
            prevTuesdayRaw.setDate(prevTuesdayRaw.getDate() - 6);
            var prevTuesday = prevTuesdayRaw.toISOString().split('T')[0];
            var prevTuesdayVal = new Date(prevTuesday).toString('MMM dd');
            var prevTuesdayDayVal = new Date(prevTuesday).getDate();
            var prevTuesdayLabel = 'Tuesday ' + new Date(prevTuesday).toString('dd') + ' ' + prevTuesdayRaw.toLocaleString(
                'en-US', {
                    month: 'long'
                });;

            var prevWednesdayRaw = new Date(monday);
            prevWednesdayRaw.setDate(prevWednesdayRaw.getDate() - 5);
            var prevWednesday = prevWednesdayRaw.toISOString().split('T')[0];
            var prevWednesdayVal = new Date(prevWednesday).toString('MMM dd');
            var prevWednesdayDayVal = new Date(prevWednesday).getDate();
            var prevWednesdayLabel = 'Wednesday ' + new Date(prevWednesday).toString('dd') + ' ' + prevWednesdayRaw
                .toLocaleString('en-US', {
                    month: 'long'
                });;

            var prevThursdayRaw = new Date(monday);
            prevThursdayRaw.setDate(prevThursdayRaw.getDate() - 4);
            var prevThursday = prevThursdayRaw.toISOString().split('T')[0];
            var prevThursdayVal = new Date(prevThursday).toString('MMM dd');
            var prevThursdayDayVal = new Date(prevThursday).getDate();
            var prevThursdayLabel = 'Thursday ' + new Date(prevThursday).toString('dd') + ' ' + prevThursdayRaw
                .toLocaleString('en-US', {
                    month: 'long'
                });;


            var prevFridayRaw = new Date(monday);
            prevFridayRaw.setDate(prevFridayRaw.getDate() - 3);
            var prevFriday = prevFridayRaw.toISOString().split('T')[0];
            var prevFridayVal = new Date(prevFriday).toString('MMM dd');
            var prevFridayDayVal = new Date(prevFriday).getDate();
            var prevFridayLabel = 'Friday ' + new Date(prevFriday).toString('dd') + ' ' + prevFridayRaw.toLocaleString(
                'en-US', {
                    month: 'long'
                });;

            var prevSaturdayRaw = new Date(monday);
            prevSaturdayRaw.setDate(prevSaturdayRaw.getDate() - 2);
            var prevSaturday = prevSaturdayRaw.toISOString().split('T')[0];
            var prevSaturdayVal = new Date(prevSaturday).toString('MMM dd');
            var prevSaturdayDayVal = new Date(prevSaturday).getDate();
            var prevSaturdayLabel = 'Saturday ' + new Date(prevSaturday).toString('dd') + ' ' + prevSaturdayRaw
                .toLocaleString('en-US', {
                    month: 'long'
                });;


            $('#intervention-current-monday').text(prevMondayVal);
            $('#intervention-current-saturday').text(prevSaturdayVal);

            $('#monday-day').text(prevMondayDayVal);
            $('#tuesday-day').text(prevTuesdayDayVal);
            $('#wednesday-day').text(prevWednesdayDayVal);
            $('#thursday-day').text(prevThursdayDayVal);
            $('#friday-day').text(prevFridayDayVal);
            $('#saturday-day').text(prevSaturdayDayVal);

            $('.monday-td').attr('data-date', prevMonday);
            $('.tuesday-td').attr('data-date', prevTuesday);
            $('.wednesday-td').attr('data-date', prevWednesday);
            $('.thursday-td').attr('data-date', prevThursday);
            $('.friday-td').attr('data-date', prevFriday);
            $('.saturday-td').attr('data-date', prevSaturday);

            $('.monday-td').attr('data-date-label', prevMondayLabel);
            $('.tuesday-td').attr('data-date-label', prevTuesdayLabel);
            $('.wednesday-td').attr('data-date-label', prevWednesdayLabel);
            $('.thursday-td').attr('data-date-label', prevThursdayLabel);
            $('.friday-td').attr('data-date-label', prevFridayLabel);
            $('.saturday-td').attr('data-date-label', prevSaturdayLabel);

            // $('#monday-day').text(prevSaturdayDayVal);
            // $('#tuesday-day').text(prevFridayDayVal);
            // $('#wednesday-day').text(prevThursdayDayVal);
            // $('#thursday-day').text(prevWednesdayDayVal);
            // $('#friday-day').text(prevTuesdayDayVal);
            // $('#saturday-day').text(prevMondayDayVal);


            // $('.monday-td').attr('data-date', prevSaturday);
            // $('.tuesday-td').attr('data-date', prevFriday);
            // $('.wednesday-td').attr('data-date', prevThursday);
            // $('.thursday-td').attr('data-date', prevWednesday);
            // $('.friday-td').attr('data-date', prevTuesday);
            // $('.saturday-td').attr('data-date', prevMonday);

            // $('.monday-td').attr('data-date-label', prevSaturdayLabel);
            // $('.tuesday-td').attr('data-date-label', prevFridayLabel);
            // $('.wednesday-td').attr('data-date-label', prevThursdayLabel);
            // $('.thursday-td').attr('data-date-label', prevWednesdayLabel);
            // $('.friday-td').attr('data-date-label', prevTuesdayLabel);
            // $('.saturday-td').attr('data-date-label', prevMondayLabel);






            $('.weekdate-div-next').attr('onClick', 'nextWeek(\'' + nextMonday + '\')');
            $('.weekdate-div-prev').attr('onClick', 'prevWeek(\'' + prevMonday + '\')');

            getInterventionData(clientID, prevMonday);
        }

        function openInterventionModal(clientID, monday = '') {

            $('#clientID').val(clientID);
            currentClientID = clientID;
            if (monday == '')
                monday = currentMonday;

            getInterventionData(clientID, monday);

        }

        function getInterventionData(clientID, monday = '') {

            $.ajax({
                url: siteUrl + '/get-intervention',
                method: 'POST',
                data: {
                    clientID: clientID,
                    "_token": "{{ csrf_token() }}",
                    monday: monday
                },
                success: function(data) {

                    $('#intervention-modal').modal('show');

                    var clientData = data.clientData;
                    var interventions = data.interventions;
                    var schedules = data.schedules;
                    var tds = $('.hour-td');

                    $('#intervention-client-fullname').text(clientData.prenom + ' ' + clientData.nom);
                    $('#intervention-client-address').text(clientData.address);
                    $('#intervention-client-villa').text(clientData.villa);
                    $('#intervention-client-telephone').text(clientData.telephone);
                    $('#intervention-client-email').text(clientData.email);

                    var mondayCount = 0;
                    var tuesdayCount = 0;
                    var wednesdayCount = 0;
                    var thursdayCount = 0;
                    var fridayCount = 0;
                    var saturdayCount = 0;

                    $('.hour-td').removeClass('td-lightshade');
                    $.each(tds, function() {

                        var date = $(this).attr('data-date');
                        var time = $(this).attr('data-time');
                        var ampm = $(this).attr('data-time-ampm');

                        // if (ampm == 'NN')
                        //     time = '00';

                        // if (ampm == 'PM')
                        //     time = parseInt(time) + 12;

                        if (time < 10 && time != '00') {
                            time = '0' + time;
                        }

                        var combinedDateTime = date + ' ' + time + ':00:00';

                        if (schedules.indexOf(combinedDateTime) != -1) {

                            if ($(this).hasClass('monday-td')) {
                                mondayCount++;
                            }

                            if ($(this).hasClass('tuesday-td')) {
                                tuesdayCount++;
                            }

                            if ($(this).hasClass('wednesday-td')) {
                                wednesdayCount++;
                            }

                            if ($(this).hasClass('thursday-td')) {
                                thursdayCount++;
                            }

                            if ($(this).hasClass('friday-td')) {
                                fridayCount++;
                            }

                            if ($(this).hasClass('saturday-td')) {
                                saturdayCount++;
                            }

                            $(this).addClass('td-lightshade');
                        }

                    });


                    var mondayPercentage = mondayCount / 11;
                    var tuesdayPercentage = tuesdayCount / 11;
                    var wednesdayPercentage = wednesdayCount / 11;
                    var thursdayPercentage = thursdayCount / 11;
                    var fridayPercentage = fridayCount / 11;
                    var saturdayPercentage = saturdayCount / 11;

                    // mondayPercentage = mondayPercentage.toFixed(2);
                    // tuesdayPercentage = tuesdayPercentage.toFixed(2);
                    // wednesdayPercentage = wednesdayPercentage.toFixed(2);
                    // thursdayPercentage = thursdayPercentage.toFixed(2);
                    // fridayPercentage = fridayPercentage.toFixed(2);
                    // saturdayPercentage = saturdayPercentage.toFixed(2);

                    $('.monday-percentage').text((mondayPercentage.toFixed(2) * 100).toFixed() + '%');
                    $('.tuesday-percentage').text((tuesdayPercentage.toFixed(2) * 100).toFixed() + '%');
                    $('.wednesday-percentage').text((wednesdayPercentage.toFixed(2) * 100).toFixed() + '%');
                    $('.thursday-percentage').text((thursdayPercentage.toFixed(2) * 100).toFixed() + '%');
                    $('.friday-percentage').text((fridayPercentage.toFixed(2) * 100).toFixed() + '%');
                    $('.saturday-percentage').text((saturdayPercentage.toFixed(2) * 100).toFixed() + '%');

                    $('.monday-percentage').css('padding-bottom', (mondayPercentage * 7).toFixed());
                    $('.tuesday-percentage').css('padding-bottom', (tuesdayPercentage * 7).toFixed());
                    $('.wednesday-percentage').css('padding-bottom', (wednesdayPercentage * 7).toFixed());
                    $('.thursday-percentage').css('padding-bottom', (thursdayPercentage * 7).toFixed());
                    $('.friday-percentage').css('padding-bottom', (fridayPercentage * 7).toFixed());
                    $('.saturday-percentage').css('padding-bottom', (saturdayPercentage * 7).toFixed());

                    $('.monday-inner-container').css('height', (mondayPercentage * 70).toFixed());
                    $('.tuesday-inner-container').css('height', (tuesdayPercentage * 70).toFixed());
                    $('.wednesday-inner-container').css('height', (wednesdayPercentage * 70).toFixed());
                    $('.thursday-inner-container').css('height', (thursdayPercentage * 70).toFixed());
                    $('.friday-inner-container').css('height', (fridayPercentage * 70).toFixed());
                    $('.saturday-inner-container').css('height', (saturdayPercentage * 70).toFixed());

                }
            });
        }

        $('.hour-td').click(function() {

            $('.hour-td').text('');
            $('.hour-td').removeClass('td-green');

            if ($(this).hasClass('td-green')) {

                $(this).text('');
                $(this).removeClass('td-green');
            } else {

                var time = parseInt($(this).attr('data-time'));
                var endTime = time + 2;
                if (time == 12)
                    endTime = 14;

                var dateValue = $(this).attr('data-date');
                var dateLabel = $(this).attr('data-date-label');
                var dateLabelAmPm = $(this).attr('data-time-ampm');
                var milTime = time;
                // if (dateLabelAmPm == 'PM')
                //     milTime = time + 12;

                var dbTime = milTime + ':00';
                var linterventionLabel = dateLabel + '<br/>' + time + ':00 - ' + endTime + ':00 ';
                //var linterventionLabel = dateLabel + '<br/>' + time + ':00 - ' + endTime + ':00 ' + dateLabelAmPm;
                $('#lintervention').html(linterventionLabel);
                $('#interventionTimeDb').val(milTime);
                $('#interventionDateDb').val(dateValue);
                $(this).text(time + ':00 - ' + endTime + ':00');
                $(this).addClass('td-green');


            }

            getInterventionData(currentClientID, currentMonday);
        });

        $('#intervention-plan').click(function() {
            $.ajax({
                url: siteUrl + '/save-intervention-plan',
                method: 'POST',
                data: {
                    dateVal: $('#interventionDateDb').val(),
                    dateTimeVal: $('#interventionTimeDb').val(),
                    clientID: $('#clientID').val(),
                    assigneeID: $('#collaborateurs-select').val(),
                    "_token": "{{ csrf_token() }}"
                },
                success: function(response) {

                    $('.client-circle-image').attr('src', response.image);
                    $('.client-name-planifier').text(response.client.prenom + ' ' + response.client
                        .nom);
                    $('.client-p-planifier').html(response.schedule_label + '<br/>' + response
                        .schedule_time);
                    $('#intervention-confirmation').modal('show');
                }
            });
        });

        $('#intevention-cancel').click(function() {
            $('#intervention-modal').modal('hide');
        });

        $('#ok-intervention').click(function() {
            $('#intervention-confirmation').modal('hide');
        });

        var currentVisiteMonday = '<?php echo date('Y-m-d', strtotime('monday this week')); ?>';
        var currentVisiteClientID = $('#visiteClientID').val();

        function visiteNextWeek(monday) {
            alert('aa');
            var prevMondayRaw = new Date(monday);
    prevMondayRaw.setDate(prevMondayRaw.getDate() - 7);
    var prevMonday = prevMondayRaw.toISOString().split('T')[0];

    var nextMondayRaw = new Date(monday);
    nextMondayRaw.setDate(nextMondayRaw.getDate() + 7);
    nextMonday = nextMondayRaw.toISOString().split('T')[0];
    var nextMondayVal = new Date(nextMonday).toString('MMM dd');
    var nextMondayLabel = 'Monday ' + new Date(nextMonday).toString('dd') + ' ' + nextMondayRaw.toLocaleString(
        'en-US', {
            month: 'long'
        });;
    var nextMondayDayVal = new Date(nextMonday).getDate();

    currentMonday = nextMonday;
    var nextTuesdayRaw = new Date(monday);
    nextTuesdayRaw.setDate(nextTuesdayRaw.getDate() + 8);
    var nextTuesday = nextTuesdayRaw.toISOString().split('T')[0];
    var nextTuesdayVal = new Date(nextTuesday).toString('MMM dd');
    var nextTuesdayLabel = 'Tuesday ' + new Date(nextTuesday).toString('dd') + ' ' + nextTuesdayRaw.toLocaleString(
        'en-US', {
            month: 'long'
        });;
    var nextTuesdayDayVal = new Date(nextTuesday).getDate();

    var nextWednesdayRaw = new Date(monday);
    nextWednesdayRaw.setDate(nextWednesdayRaw.getDate() + 9);
    var nextWednesday = nextWednesdayRaw.toISOString().split('T')[0];
    var nextWednesdayVal = new Date(nextWednesday).toString('MMM dd');
    var nextWednesdayLabel = 'Wednesday ' + new Date(nextWednesday).toString('dd') + ' ' + nextWednesdayRaw
        .toLocaleString('en-US', {
            month: 'long'
        });;
    var nextWednesdayDayVal = new Date(nextWednesday).getDate();

    var nextThursdayRaw = new Date(monday);
    nextThursdayRaw.setDate(nextThursdayRaw.getDate() + 10);
    var nextThursday = nextThursdayRaw.toISOString().split('T')[0];
    var nextThursdayVal = new Date(nextThursday).toString('MMM dd');
    var nextThursdayLabel = 'Thursday ' + new Date(nextThursday).toString('dd') + ' ' + nextThursdayRaw
        .toLocaleString('en-US', {
            month: 'long'
        });;
    var nextThursdayDayVal = new Date(nextThursday).getDate();

    var nextFridayRaw = new Date(monday);
    nextFridayRaw.setDate(nextFridayRaw.getDate() + 11);
    var nextFriday = nextFridayRaw.toISOString().split('T')[0];
    var nextFridayVal = new Date(nextFriday).toString('MMM dd');
    var nextFridayLabel = 'Friday ' + new Date(nextFriday).toString('dd') + ' ' + nextMondayRaw.toLocaleString(
        'en-US', {
            month: 'long'
        });;
    var nextFridayDayVal = new Date(nextFriday).getDate();

    var nextSaturdayRaw = new Date(monday);
    nextSaturdayRaw.setDate(nextSaturdayRaw.getDate() + 12);
    var nextSaturday = nextSaturdayRaw.toISOString().split('T')[0];
    var nextSaturdayVal = new Date(nextSaturday).toString('MMM dd');
    var nextSaturdayLabel = 'Saturday ' + new Date(nextSaturday).toString('dd') + ' ' + nextSaturdayRaw
        .toLocaleString('en-US', {
            month: 'long'
        });;
    var nextSaturdayDayVal = new Date(nextSaturday).getDate();

            $('#visite-current-monday').text(nextMondayVal);
            $('#visite-current-saturday').text(nextSaturdayVal);

            $('#monday-visite-day').text(nextMondayDayVal);
            $('#tuesday-visite-day').text(nextTuesdayDayVal);
            $('#wednesday-visite-day').text(nextWednesdayDayVal);
            $('#thursday-visite-day').text(nextThursdayDayVal);
            $('#friday-visite-day').text(nextFridayDayVal);
            $('#saturday-visite-day').text(nextSaturdayDayVal);

            $('.monday-visite-td').attr('data-date', nextMonday);
            $('.tuesday-visite-td').attr('data-date', nextTuesday);
            $('.wednesday-visite-td').attr('data-date', nextWednesday);
            $('.thursday-visite-td').attr('data-date', nextThursday);
            $('.friday-visite-td').attr('data-date', nextFriday);
            $('.saturday-visite-td').attr('data-date', nextSaturday);

            $('.monday-visite-td').attr('data-date-label', nextMondayLabel);
            $('.tuesday-visite-td').attr('data-date-label', nextTuesdayLabel);
            $('.wednesday-visite-td').attr('data-date-label', nextWednesdayLabel);
            $('.thursday-visite-td').attr('data-date-label', nextThursdayLabel);
            $('.friday-visite-td').attr('data-date-label', nextFridayLabel);
            $('.saturday-visite-td').attr('data-date-label', nextSaturdayLabel);

            $('.weekdate-visite-div-next').attr('onClick', 'visiteNextWeek(\'' + nextMonday + '\')');
            $('.weekdate-visite-div-prev').attr('onClick', 'visitePrevWeek(\'' + prevMonday + '\')');


            getVisiteData(clientID, nextMonday);
        }

        function visitePrevWeek(monday) {

            var nextMondayRaw = new Date(monday);
            nextMondayRaw.setDate(nextMondayRaw.getDate() + 7);
            nextMonday = nextMondayRaw.toISOString().split('T')[0];

            var prevMondayRaw = new Date(monday);
            prevMondayRaw.setDate(prevMondayRaw.getDate() - 7);
            var prevMonday = prevMondayRaw.toISOString().split('T')[0];
            var prevMondayVal = new Date(prevMonday).toString('MMM dd');
            var prevMondayDayVal = new Date(prevMonday).getDate();
            var prevMondayLabel = 'Monday ' + new Date(prevMonday).toString('dd') + ' ' + prevMondayRaw.toLocaleString(
        'en-US', {
            month: 'long'
        });

            currentMonday = prevMonday;
            var prevTuesdayRaw = new Date(monday);
            prevTuesdayRaw.setDate(prevTuesdayRaw.getDate() - 6);
            var prevTuesday = prevTuesdayRaw.toISOString().split('T')[0];
            var prevTuesdayVal = new Date(prevTuesday).toString('MMM dd');
            var prevTuesdayDayVal = new Date(prevTuesday).getDate();
            var prevTuesdayLabel = 'Tuesday ' + new Date(prevTuesday).toString('dd') + ' ' + prevTuesdayRaw.toLocaleString(
        'en-US', {
            month: 'long'
        });;

            var prevWednesdayRaw = new Date(monday);
            prevWednesdayRaw.setDate(prevWednesdayRaw.getDate() - 5);
            var prevWednesday = prevWednesdayRaw.toISOString().split('T')[0];
            var prevWednesdayVal = new Date(prevWednesday).toString('MMM dd');
            var prevWednesdayDayVal = new Date(prevWednesday).getDate();
            var prevWednesdayLabel = 'Wednesday ' + new Date(prevWednesday).toString('dd') + ' ' + prevWednesdayRaw
        .toLocaleString('en-US', {
            month: 'long'
        });;


            var prevThursdayRaw = new Date(monday);
            prevThursdayRaw.setDate(prevThursdayRaw.getDate() - 4);
            var prevThursday = prevThursdayRaw.toISOString().split('T')[0];
            var prevThursdayVal = new Date(prevThursday).toString('MMM dd');
            var prevThursdayDayVal = new Date(prevThursday).getDate();
            var prevThursdayLabel = 'Thursday ' + new Date(prevThursday).toString('dd') + ' ' + prevThursdayRaw
        .toLocaleString('en-US', {
            month: 'long'
        });;

            var prevFridayRaw = new Date(monday);
            prevFridayRaw.setDate(prevFridayRaw.getDate() - 3);
            var prevFriday = prevFridayRaw.toISOString().split('T')[0];
            var prevFridayVal = new Date(prevFriday).toString('MMM dd');
            var prevFridayDayVal = new Date(prevFriday).getDate();
            var prevFridayLabel = 'Friday ' + new Date(prevFriday).toString('dd') + ' ' + prevFridayRaw.toLocaleString(
        'en-US', {
            month: 'long'
        });;


            var prevSaturdayRaw = new Date(monday);
            prevSaturdayRaw.setDate(prevSaturdayRaw.getDate() - 2);
            var prevSaturday = prevSaturdayRaw.toISOString().split('T')[0];
            var prevSaturdayVal = new Date(prevSaturday).toString('MMM dd');
            var prevSaturdayDayVal = new Date(prevSaturday).getDate();
            var prevSaturdayLabel = 'Saturday ' + new Date(prevSaturday).toString('dd') + ' ' + prevSaturdayRaw
        .toLocaleString('en-US', {
            month: 'long'
        });;

            $('#visite-current-monday').text(prevMondayVal);
            $('#visite-current-saturday').text(prevSaturdayVal);

            $('#monday-visite-day').text(prevMondayDayVal);
            $('#tuesday-visite-day').text(prevTuesdayDayVal);
            $('#wednesday-visite-day').text(prevWednesdayDayVal);
            $('#thursday-visite-day').text(prevThursdayDayVal);
            $('#friday-visite-day').text(prevFridayDayVal);
            $('#saturday-visite-day').text(prevSaturdayDayVal);


            $('.monday-visite-td').attr('data-date', prevMonday);
            $('.tuesday-visite-td').attr('data-date', prevTuesday);
            $('.wednesday-visite-td').attr('data-date', prevWednesday);
            $('.thursday-visite-td').attr('data-date', prevThursday);
            $('.friday-visite-td').attr('data-date', prevFriday);
            $('.saturday-visite-td').attr('data-date', prevSaturday);

            $('.monday-visite-td').attr('data-date-label', prevMondayLabel);
            $('.tuesday-visite-td').attr('data-date-label', prevTuesdayLabel);
            $('.wednesday-visite-td').attr('data-date-label', prevWednesdayLabel);
            $('.thursday-visite-td').attr('data-date-label', prevThursdayLabel);
            $('.friday-visite-td').attr('data-date-label', prevFridayLabel);
            $('.saturday-visite-td').attr('data-date-label', prevSaturdayLabel);

            $('.weekdate-visite-div-next').attr('onClick', 'visiteNextWeek(\'' + nextMonday + '\')');
            $('.weekdate-visite-div-prev').attr('onClick', 'visitePrevWeek(\'' + prevMonday + '\')');

            getVisiteData(clientID, prevMonday);
        }

        function openVisiteModal(clientID, monday = '') {

            $('#visiteClientID').val(clientID);
            currentClientID = clientID;
            if (monday == '')
                monday = currentVisiteMonday;

            getVisiteData(clientID, monday);

        }

        function getVisiteData(clientID, monday = '') {

            $.ajax({
                url: siteUrl + '/get-visite',
                method: 'POST',
                data: {
                    clientID: clientID,
                    "_token": "{{ csrf_token() }}",
                    monday: monday
                },
                success: function(data) {

                    $('#visite-modal').modal('show');

                    var clientData = data.clientData;
                    var visites = data.visites;
                    var schedules = data.schedules;
                    var tds = $('.hour-visite-td');

                    $('#visite-client-fullname').text(clientData.prenom + ' ' + clientData.nom);
                    $('#visite-client-address').text(clientData.address);
                    $('#visite-client-villa').text(clientData.villa);
                    $('#visite-client-telephone').text(clientData.telephone);
                    $('#visite-client-email').text(clientData.email);

                    var mondayCount = 0;
                    var tuesdayCount = 0;
                    var wednesdayCount = 0;
                    var thursdayCount = 0;
                    var fridayCount = 0;
                    var saturdayCount = 0;

                    $('.hour-visite-td').removeClass('td-lightshade');
                    $.each(tds, function() {

                        var date = $(this).attr('data-date');
                        var time = $(this).attr('data-time');
                        var ampm = $(this).attr('data-time-ampm');

                        // if (ampm == 'NN')
                        //     time = '00';

                        // if (ampm == 'PM')
                        //     time = parseInt(time) + 12;

                        if (time < 10 && time != '00') {
                            time = '0' + time;
                        }

                        var combinedDateTime = date + ' ' + time + ':00:00';

                        if (schedules.indexOf(combinedDateTime) != -1) {

                            if ($(this).hasClass('monday-visite-td')) {
                                mondayCount++;
                            }

                            if ($(this).hasClass('tuesday-visite-td')) {
                                tuesdayCount++;
                            }

                            if ($(this).hasClass('wednesday-visite-td')) {
                                wednesdayCount++;
                            }

                            if ($(this).hasClass('thursday-visite-td')) {
                                thursdayCount++;
                            }

                            if ($(this).hasClass('friday-visite-td')) {
                                fridayCount++;
                            }

                            if ($(this).hasClass('saturday-visite-td')) {
                                saturdayCount++;
                            }

                            $(this).addClass('td-lightshade');
                        }

                    });


                    var mondayPercentage = mondayCount / 11;
                    var tuesdayPercentage = tuesdayCount / 11;
                    var wednesdayPercentage = wednesdayCount / 11;
                    var thursdayPercentage = thursdayCount / 11;
                    var fridayPercentage = fridayCount / 11;
                    var saturdayPercentage = saturdayCount / 11;

                    $('.monday-visite-percentage').text((mondayPercentage.toFixed(2) * 100).toFixed() + '%');
                    $('.tuesday-visite-percentage').text((tuesdayPercentage.toFixed(2) * 100).toFixed() + '%');
                    $('.wednesday-visite-percentage').text((wednesdayPercentage.toFixed(2) * 100).toFixed() +
                        '%');
                    $('.thursday-visite-percentage').text((thursdayPercentage.toFixed(2) * 100).toFixed() +
                        '%');
                    $('.friday-visite-percentage').text((fridayPercentage.toFixed(2) * 100).toFixed() + '%');
                    $('.saturday-visite-percentage').text((saturdayPercentage.toFixed(2) * 100).toFixed() +
                        '%');

                    $('.monday-visite-percentage').css('padding-bottom', (mondayPercentage * 7).toFixed());
                    $('.tuesday-visite-percentage').css('padding-bottom', (tuesdayPercentage * 7).toFixed());
                    $('.wednesday-visite-percentage').css('padding-bottom', (wednesdayPercentage * 7)
                        .toFixed());
                    $('.thursday-visite-percentage').css('padding-bottom', (thursdayPercentage * 7).toFixed());
                    $('.friday-visite-percentage').css('padding-bottom', (fridayPercentage * 7).toFixed());
                    $('.saturday-visite-percentage').css('padding-bottom', (saturdayPercentage * 7).toFixed());

                    $('.monday-visite-inner-container').css('height', (mondayPercentage * 70).toFixed());
                    $('.tuesday-visite-inner-container').css('height', (tuesdayPercentage * 70).toFixed());
                    $('.wednesday-visite-inner-container').css('height', (wednesdayPercentage * 70).toFixed());
                    $('.thursday-visite-inner-container').css('height', (thursdayPercentage * 70).toFixed());
                    $('.friday-visite-inner-container').css('height', (fridayPercentage * 70).toFixed());
                    $('.saturday-visite-inner-container').css('height', (saturdayPercentage * 70).toFixed());

                }
            });
        }

        $('.hour-visite-td').click(function() {

            $('.hour-visite-td').text('');
            $('.hour-visite-td').removeClass('td-green');

            if ($(this).hasClass('td-green')) {

                $(this).text('');
                $(this).removeClass('td-green');
            } else {

                var time = parseInt($(this).attr('data-time'));

                var endTime = time + 2;
                if (time == 12)
                    endTime = 14;

                var dateValue = $(this).attr('data-date');
                var dateLabel = $(this).attr('data-date-label');
                var dateLabelAmPm = $(this).attr('data-time-ampm');
                var milTime = time;
                // if (dateLabelAmPm == 'PM')
                //     milTime = time + 12;

                var dbTime = milTime + ':00';
               // var linterventionLabel = dateLabel + '<br/>' + time + ':00 - ' + endTime + ':00 ' + dateLabelAmPm;
                var linterventionLabel = dateLabel + '<br/>' + time + ':00 - ' + endTime + ':00 ' ;
                $('#lvisite').html(linterventionLabel);
                $('#visiteTimeDb').val(milTime);
                $('#visiteDateDb').val(dateValue);
                $(this).text(time + ':00 - ' + endTime + ':00');
                $(this).addClass('td-green');


            }

            getVisiteData(currentClientID, currentMonday);
        });

        $('#visite-plan').click(function() {
            $.ajax({
                url: siteUrl + '/save-visite-plan',
                method: 'POST',
                data: {
                    dateVal: $('#visiteDateDb').val(),
                    dateTimeVal: $('#visiteTimeDb').val(),
                    clientID: $('#visiteClientID').val(),
                    assigneeID: $('#collaborateurs-visite-select').val(),
                    "_token": "{{ csrf_token() }}"
                },
                success: function(response) {
                    $('.client-circle-image').attr('src', response.image);
                    $('.client-name-planifier').text(response.client.prenom + ' ' + response.client
                        .nom);
                    $('.client-p-planifier').html(response.schedule_label + '<br/>' + response
                        .schedule_time);
                    $('#visite-confirmation').modal('show');
                }
            });
        });

        $('#visite-cancel').click(function() {
            $('#visite-modal').modal('hide');
        });

        $('#ok-visite').click(function() {
            $('#visite-confirmation').modal('hide');
        });



        $('#status-intervention-valider').click(function() {
            var clientID = $('#intervention_client_id').val();
            var interventionstatus = $('#intervention-status').val();
            var interventionComment = $('#intervention-comment').val();
            var interventionschedule =  $('#intervention-schedule').val();
            $.ajax({
                url: siteUrl + '/save-client-status',
                method: 'POST',
                data: {
                    client_id: clientID,
                    interventionstatus: interventionstatus,
                    interventionComment: interventionComment,
                    interventionschedule: interventionschedule,
                    type: 'intervention',
                    "_token": "{{ csrf_token() }}"
                },
                success: function(data) {
                    var obj = jQuery.parseJSON(data);


                    if(obj.cenas == 'true')
                    {
                        $.confirm({
                        title: 'Alerte !',
                        content: 'Statut mis à jour avec succès !',
                        buttons: {
                            cancel: function () {
                                $('#planifee-status-intervention-modal').modal('hide');
                                $('#modified-status-intervention-modal').modal('show');
                                // $('#intervention-status-confirmation').modal('show');
                            }
                        }
                        });
                    }
                    else
                    {
                        $.confirm({
                        title: 'Alerte !',
                        content: 'Oups, vous avez sélectionné un mauvais horaire !',
                        buttons: {
                            cancel: function () {
                                $('#planifee-status-intervention-modal').modal('hide');
                                $('#modified-status-intervention-modal').modal('show');
                                // $('#intervention-status-confirmation').modal('show');
                            }
                        }
                        });
                    }

                }
            });

            $('#modified-status-intervention-ok-btn').click(function() {
                $('#modified-status-intervention-modal').modal('hide');
                $('#planifee-status-intervention-modal').modal('hide');
            });
        });

        $('#modified-status-intervention-ok-btn').click(function() {
            $('#modified-status-intervention-modal').modal('hide');
            $('#planifee-status-intervention-modal').modal('hide');
        });

        function openVisiteStatusModal(clientID) {

            $('#planifee-status-visite-modal').modal('show');
            $('#visite-client-id').val(clientID);

            $.ajax({
                url: siteUrl + '/get-visite-status',
                method: 'GET',
                success: function(data) {
                    var options = '';
                    $.each(data, function(k, v) {
                        options += '<option value="' + v.id + '">' + v.name + '</option>';
                    });

                    $('#visite-status').find('option')
                        .remove()
                        .end()
                        .append(options);
                }
            });

        }

        $('#status-visite-valider').click(function() {
            var clientID = $('#visite-client-id').val();
            var visitestatus = $('#visite-status').val();
            var visiteComment = $('#visite-comment').val();
            var visiteschedule =  $('#visite-schedule').val();
            $.ajax({
                url: siteUrl + '/save-client-status',
                method: 'POST',
                data: {
                    client_id: clientID,
                    visitestatus: visitestatus,
                    visiteComment: visiteComment,
                    visiteschedule: visiteschedule,
                    type: 'visite',
                    "_token": "{{ csrf_token() }}"
                },


                success: function(data) {
                    var obj = jQuery.parseJSON(data);


                    if(obj.cenas == 'true')
                    {
                        $.confirm({
                        title: 'Alerte !',
                        content: 'Statut mis à jour avec succès !',
                        buttons: {
                            cancel: function () {
                                $('#planifee-status-visite-modal').modal('hide');
                                $('#modified-status-visite-modal').modal('show');
                            }
                        }
                        });
                    }
                    else
                    {
                        $.confirm({
                        title: 'Alerte !',
                        content: 'Oups, vous avez sélectionné un mauvais horaire !',
                        buttons: {
                            cancel: function () {
                                $('#planifee-status-visite-modal').modal('hide');
                                $('#modified-status-visite-modal').modal('show');
                            }
                        }
                        });
                    }

                }
                // success: function(data) {
                //     $('#planifee-status-visite-modal').modal('hide');
                //     $('#modified-status-visite-modal').modal('show');
                // }
            });

            $('#modified-status-visite-ok-btn').click(function() {
                $('#modified-status-visite-modal').modal('hide');
                $('#planifee-status-visite-modal').modal('hide');
            });
        });

        $('#modified-status-visite-ok-btn').click(function() {
            $('#modified-status-visite-modal').modal('hide');
            $('#planifee-status-visite-modal').modal('hide');
        });
    </script>




@endsection

