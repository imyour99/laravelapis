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
            <a href="{{route('AdminPlanning_map')}}" class="map-btn">
                <img src="{{ asset('public/assets/img/icons/blue-map-white.png') }}" class="map-img-btn" onmouseover="this.src='{{ asset("public/assets/img/icons/white-map-blue.png") }}'" onmouseout="this.src='{{ asset("public/assets/img/icons/blue-map-white.png") }}'"/>
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
    <div class="" style="width:75%; float: left;">

        <?php
            $time = intval(date('H'));
            $timeVal = date('H:i');

        ?>

        <div class="in-between">

            <?php
                $collabRecords = session('records');
                $totalStatusPastFuture = 0;

                if(!empty($collabRecords)){
                    $c = 0;
                    foreach($collabRecords as $collabRecord){

                        $marginTop = '';
                        if($c == 0)
                            $marginTop = 'margin-top:6vh;';

                        echo '<div class="" style="height:20vh;padding-top: 1vh;'.$marginTop.'
                            margin-bottom: 1vh;">
                                        <div class="tour-num-top-div tour-num-top1" style="margin-bottom: 8vh;">
                                            <span class="tour-num-top text-blue">'.$collabRecord['statusPastFuture'].'</span>
                                        </div>
                                        <div class="tour-num-top-div tour-num-top1-green1">
                                            <span class="tour-num-top tour-num-top-green text-white">'.$collabRecord['statusRealised'].'</span>
                                        </div>
                                        <div class="tour-num-top-div tour-num-top1-orange1">
                                            <span class="tour-num-top tour-num-top-orange text-white">'.$collabRecord['statusKOCLient'].'</span>
                                        </div>

                                        <div class="tour-num-top-div tour-num-top1-red1">
                                        <span class="tour-num-top tour-num-top-red text-white">'.$collabRecord['statusKONotRealise'].'</span>
                                    </div>

                                    </div>';

                        $totalStatusPastFuture += $collabRecord['statusPastFuture'];
                        $c++;

                        if($c == 3) break;
                    }
                }

            ?>

            <div class="" style="height:20vh">

            <!-- <div class="tour-num-top-div tour-num-top3">
                <span class="tour-num-top text-blue">0</span>
            </div> -->

            <div class="tour-num-top-div tour-num-top3 d-flex" style="position: absolute;bottom: 0;">
                <span class="tour-num-top text-blue" style="position: absolute;bottom: 15px;"><?php echo $totalStatusPastFuture; ?></span>
            </div>

            </div>

        </div>

        <div class="col-white1-col">
            <div class="rounded-corner bg-white col-white1">
                <hr class="tour-gray-hr" />

                <?php
                    $records = session('records');
                    if($type == 'intervention')
                        $collabRecords = session('interventions_collabs');
                    else
                        $collabRecords = session('visites_collabs');

                    if(!empty($records)){
                        $c = 0;
                        foreach($records as $collabRecord){
                            $c++;
                            $done = 0;
                            $collab = $collabRecord['collaborateurs'];
                            $disabled = '';
                            if($collab['status'] == 'inactive'){

                                $disabled = 'tour-disabled-bg-user';
                            }

                            $records = session('records');
                            $collabData = $records[$collab['id']];
                            if($type == 'intervention'){
                                $scheduleRecords = count($collabData['interventions']);
                                $scheduleRecordsArr = $collabData['interventions'];
                                if(!$scheduleRecordsArr)
                                {
                                    foreach($scheduleRecordsArr as $scheduleRecord){
                                    if($scheduleRecord['interventions_status'] == 4)
                                        $done++;
                                    }
                                }

                            }
                            else{
                                $scheduleRecords = count($collabData['visites']);
                                $scheduleRecordsArr = $collabData['visites'];

                                foreach($scheduleRecordsArr as $scheduleRecord){
                                    if($scheduleRecord['visite_status'] == 4)
                                        $done++;
                                }

                            }

                            $percentageCount = 0;
                            $percentageCountMinus = 0;
                            if($scheduleRecords > 0)
                            {
                                $percentageCount = intval($done/$scheduleRecords*100);
                                $percentageCountMinus = 100 - $percentageCount;
                            }

                            $image = asset('assets/img/media/profile-img.png');
                            $clientImg = asset('collab/'.$collab['profile_img']);
                            if(file_exists(public_path('collab/'.$collab['profile_img'])) && !empty($collab['profile_img']))
                                $image = $clientImg;

                            echo '<div class="tour-row mt-3 '.$disabled.'">
                                <input type="checkbox" name="" class="tour-checkbox-userinput" value="'.$collab['id'].'" data-name="'.$collab['prenom'].' '.$collab['nom'].'" />
                                <strong class="tour-row-text text-black">Panificateur</strong>
                                <strong class="tour-row-text text-blue">'.$percentageCount.'%</strong>
                                <div class="circle-chart-div">
                                    <div class="circle-chart-inner-div">
                                        <svg class="circle-chart" viewbox="0 0 33.83098862 33.83098862" width="50" height="50" xmlns="http://www.w3.org/2000/svg">
                                          <circle class="circle-chart__background" stroke="#009cde" stroke-width="2" fill="none" cx="16.91549431" cy="16.91549431" r="15.91549431" />

                                          <circle class="circle-chart__circle" stroke="#FFF" stroke-width="2" stroke-dasharray="'.$percentageCountMinus.',100" stroke-linecap="round" fill="none" cx="16.91549431" cy="16.91549431" r="15.91549431" />
                                          <img src="'.$image.'" class="tour-image" />
                                        </svg>
                                    </div>
                                    <div class="clear"></div>
                                </div>

                                <strong class="tour-row-text text-gray">'.$collab['prenom'].' '.$collab['nom'].'</strong>
                                <a href="javascript:void(0)" data-toggle="modal" data-target="#technicien-modal"><strong class="tour-row-text text-blue">
                                    <img src="'.asset('assets/img/media/smallhouse.png').'" class="small-house"> '.$collab['adresse'].'
                                </strong></a>
                            </div>';
                            if($c == 3) break;
                        }


                    }

                ?>

            </div>

        </div>

        <div class="col-white7-col">
            <div class="rounded-corner bg-white col-white7 mt-3" style="width: 100%;">

                <div class="slimscroll-hours" style="border-bottom: 1px solid #ececec;height: 38px;padding-top: 0 !important;">


                        <span class="tour-gray-text-hour tour-gray-text-hour1 text-left">6:00</span>
                        <?php
                            if($time > 6 && $time < 8){
                                echo '<span class="tour-green text-left" style="position: absolute; z-index: 999; left: 3.5vw; font-size: 0.75rem;font-weight: bold;top: 1.5rem;color: #27c291;">'.$timeVal.'</span>';
                            }
                        ?>

                        <span class="tour-gray-text-hour tour-gray-text-hour2 text-left">8:00</span>
                        <?php

                            if($time > 8 && $time < 10){
                                echo '<span class="tour-green text-left" style="position: absolute; z-index: 999; left: 12.5vw; font-size: 0.75rem;font-weight: bold;top: 1.5rem;color: #27c291;">'.$timeVal.'</span>';
                            }
                        ?>

                        <span class="tour-gray-text-hour tour-gray-text-hour3 text-left">10:00</span>
                        <?php
                            if($time > 10 && $time < 12){
                                echo '<span class="tour-green text-left" style="position: absolute; z-index: 999; left: 20.5vw; font-size: 0.75rem;font-weight: bold;top: 1.5rem;color: #27c291;">'.$timeVal.'</span>';
                            }
                        ?>

                        <span class="tour-gray-text-hour tour-gray-text-hour4 text-left">12:00</span>
                        <?php
                            if($time > 12 && $time < 14){
                                echo '<span class="tour-green text-left" style="position: absolute; z-index: 999; left: 32.5vw; font-size: 0.75rem;font-weight: bold;top: 1.5rem;color: #27c291;">'.$timeVal.'</span>';
                            }
                        ?>

                        <span class="tour-gray-text-hour tour-gray-text-hour5 text-left">14:00</span>
                        <?php
                            if($time > 14 && $time < 16){

                                echo '<span class="tour-green text-left" style="position: absolute; z-index: 999; left: 47.5vw; font-size: 0.75rem;font-weight: bold;top: 1.5rem;color: #27c291;">'.$timeVal.'</span>';
                            }
                        ?>
                        <span class="tour-gray-text-hour tour-gray-text-hour6 text-left">16:00</span>
                        <?php
                            if($time > 16 && $time < 18){
                                echo '<span class="tour-green text-right" style="position: absolute; z-index: 999; left: 61.5vw; font-size: 0.75rem;font-weight: bold;top: 1.5rem;color: #27c291;">'.$timeVal.'</span>';
                            }
                        ?>
                        <span class="tour-gray-text-hour tour-gray-text-hour7 text-left">18:00</span>
                        <?php
                            if($time > 18 && $time < 20){
                                echo '<span class="tour-green text-right" style="position: absolute; z-index: 999; left: 75.5vw; font-size: 0.75rem;font-weight: bold;top: 1.5rem;color: #27c291;">'.$timeVal.'</span>';
                            }
                        ?>
                        <span class="tour-gray-text-hour tour-gray-text-hour8 text-left">20:00</span>
                        <?php
                            if($time > 18 && $time < 20){
                                echo '<span class="tour-green text-right" style="position: absolute; z-index: 999; left: 89.5vw; font-size: 0.75rem;font-weight: bold;top: 1.5rem;color: #27c291;">'.$timeVal.'</span>';
                            }
                        ?>
                    </div>



                    <div class="tour-right-row-div">
                        @if(!empty($collabRecords))
                            @if(count($collabRecords) > 1)
                                <img src="{{ asset('assets/img/media/tournees-icon.png') }}" style="position: absolute;top: 8.3rem;left: 2.5vw;z-index: 9;">
                            @endif

                            <!-- @if(count($collabRecords) > 2)
                                <img src="{{ asset('assets/img/media/tournees-icon.png') }}" style="position: absolute;top: 26rem;left: 10.5vw;z-index: 9;">
                            @endif

                            @if(count($collabRecords) > 3)
                                <img src="{{ asset('assets/img/media/tournees-icon.png') }}" style="position: absolute;top: 42.2rem;left: 10.5vw;z-index: 9;">
                            @endif -->
                        @endif



                        <?php
                            if($time > 6 && $time < 8){
                                echo '<div class="green-vl" style="border-left: 2px solid green;height: 76vh;width: 2px;position: absolute;left: 4.2vw;z-index: 999;"></div>';
                            }
                        ?>

                        <?php
                            if($time > 8 && $time < 10){
                                echo '<div class="green-vl" style="border-left: 2px solid green;height: 76vh;width: 2px;position: absolute;left: 13.2vw;z-index: 999;"></div>';
                            }
                        ?>
                        <?php
                            if($time > 10 && $time < 12){
                                echo '<div class="green-vl" style="border-left: 2px solid green;height: 76vh;width: 2px;position: absolute;left: 21.2vw;z-index: 999;"></div>';
                            }
                        ?>
                        <?php

                            if($time > 12 && $time < 14){

                                echo '<div class="green-vl" style="border-left: 2px solid green;height: 76vh;width: 2px;position: absolute;left: 34.2vw;z-index: 999;"></div>';
                            }
                        ?>
                        <?php
                            if($time > 14 && $time < 16){
                                echo '<div class="green-vl" style="border-left: 2px solid green;height: 76vh;width: 2px;position: absolute;left: 48.2vw;z-index: 999;"></div>';
                            }
                        ?>
                         <?php
                            if($time > 16 && $time < 18){
                                echo '<div class="green-vl" style="border-left: 2px solid green;height: 76vh;width: 2px;position: absolute;left: 62.2vw;z-index: 999;"></div>';
                            }
                        ?>


                        <!-- <div class="bg-blue-slanted" style="background: url(assets/img/media/blueslanted.png);width: 10rem;height: 10rem;position: absolute;left: 43.5rem;top: 15.6rem;z-index: 0;height: 21.5vh;background-size: 100% 100%;"></div> -->

                        <?php
                            $records = session('records');
                            if($type == 'intervention')
                                $collabRecords = session('interventions_collabs');
                            else
                                $collabRecords = session('visites_collabs');

                            // print_r($collabRecords);
                            // exit;

                            $collabIdsRecords = [];
                            foreach($collabRecords as $collabOrig){

                            if(!empty($collabRecords)){
                                $c = 0;
                                echo '<div class="tour-right-row">';
                                foreach($collabRecords as $collab){
                                    if($collabOrig['id'] != $collab['id']) continue;

                                    $c++;
                                    $collab_id = $collab['id'];
                                    if(empty($records[$collab_id])) continue;
                                    $collabDataRecord = $records[$collab_id];

                                    if($type == 'intervention')
                                        $collabDataArr = $collabDataRecord['interventions'];
                                    else
                                        $collabDataArr = $collabDataRecord['visites'];

                                    $disabledRow = '';
                                    if($collab['status'] == 'inactive'){

                                        $disabledRow = 'tour-disabled-bg-row tour-disabled-bg-row'.$c;
                                    }

                                    $blueborder = "";
                                    if($c%2 != 0)
                                        $blueborder = "blue-border";


                                    foreach($collabDataArr as $k => $collabData){

                                        $scheduleDate = date('Y-m-d',strtotime($collabData['schedule']));

                                        if($scheduleDate != $requestedDate) continue;

                                        if($collabData['assignee_id'] != $collab_id) continue;
                                        if($collabData['client_id'] != $collab['client_id']) continue;

                                        // if($type == 'intervention'){
                                        //     if($collabData['intervention_status'] == 2 || $collabData['intervention_status'] == 3 || $collabData['intervention_status'] == 4)
                                        //     {
                                        //         continue;
                                        //     }

                                        // }else{
                                        //     if($collabData['visite_status'] == 2 || $collabData['visite_status'] == 3 || $collabData['visite_status'] == 4)
                                        //     {
                                        //         continue;
                                        //     }
                                        // }

                                        $currentTime = date('Y-m-d H');
                                        $schedule = date('Y-m-d H',strtotime($collabData['schedule']));

                                        //if($collabDataArr[0]['schedule'] == $collabData['schedule']);
                                        $hour = date('H',strtotime($collabData['schedule']));

                                        $tourCol = 'tour-col-1';
                                        if($hour == '0' || $hour == '00' || $hour == '2' || $hour == '02' || $hour == '4' || $hour == '04' || $hour == '20'){
                                            continue;
                                        }

                                        if($hour == '8' || $hour == '08' && $collabDataArr[0]['schedule'] == $collabData['schedule']){
                                            $tourCol = 'tour-col-2';
                                        }

                                        if($hour == '10'  && $collabDataArr[0]['schedule'] == $collabData['schedule']){
                                            $tourCol = 'tour-col-3';
                                        }

                                        if($hour == '12' && $collabDataArr[0]['schedule'] == $collabData['schedule']){
                                            $tourCol = 'tour-col-4';
                                        }

                                        if($hour == '14' && $collabDataArr[0]['schedule'] == $collabData['schedule']){
                                            $tourCol = 'tour-col-5';
                                        }

                                        if($hour == '16' && $collabDataArr[0]['schedule'] == $collabData['schedule']){
                                            $tourCol = 'tour-col-5';
                                        }

                                        if($hour == '18' && $collabDataArr[0]['schedule'] == $collabData['schedule']){
                                            $tourCol = 'tour-col-5';
                                        }

                                        if($collabDataArr[0]['schedule'] != $collabData['schedule']){

                                            $hourPrev = date('H',strtotime($collabDataArr[$k-1]['schedule']));
                                            $hourCurrent = date('H',strtotime($collabDataArr[$k]['schedule']));

                                            $hourDiff = $hourCurrent - $hourPrev;

                                            if($hourDiff == 2){
                                                $tourCol = 'tour-col-1';
                                            }

                                            if($hourDiff == 4){
                                                $tourCol = 'tour-col-2';
                                            }

                                            if($hourDiff == 6){
                                                $tourCol = 'tour-col-3';
                                            }

                                            if($hourDiff == 8){
                                                $tourCol = 'tour-col-4';
                                            }

                                            if($hourDiff == 10){
                                                $tourCol = 'tour-col-5';
                                            }

                                            if($hourDiff == 12){
                                                $tourCol = 'tour-col-6';
                                            }

                                            if($hourDiff == 14){
                                                $tourCol = 'tour-col-8';
                                            }

                                        }

                                        $endhour = $hour+2;

                                        if($schedule <= $currentTime){

                                            echo '<div class="tour-box">
                                                <div class="tour-box-blue tour-box-full '.$tourCol.'">
                                                    <strong class="tour-left-row-text text-black"> '.strtoupper($collabData['nom']).'</strong>
                                                    <strong class="tour-left-row-text text-blue"> '.strtoupper($collabData['adress']).'</strong>
                                                    <div class="tour-circle-icons-div">
                                                        <span class="tour-left-white-circle">G3</span>
                                                        <span class="tour-left-white-circle">P</span>
                                                    </div>
                                                </div>

                                                <div class="notificationPopUp">
                                                    <div class=" card-body p-0" style="">
                                                        <div style="float:left;background: #fff;border-radius: 10px 0 0 10px !important;padding: 10px;">
                                                            <h6>'.strtoupper($collabData['nom']).'</h6>
                                                            <p class="tx-10 mb-1" style="color: #7F7F7F">PDL '.strtoupper($collabData['pdl']).'</p>
                                                            <p style="color:  #7F7F7F">TYPE '.strtoupper($type).'</p>
                                                            <p class="tx-12 mb-1 text-blue font-weight-bold d-inline-block float-left p-2">'.strtoupper($collabData['adress']).'</p>
                                                            <div class="d-flex float-right">
                                                                <a class="nav-link icon" href="">
                                                                    <span class="blue-bg" style="border-radius: 50%;padding: 4px;color: #fff;font-weight: 600;">G3</span>
                                                                </a>
                                                                <a class="nav-link icon" href="">
                                                                    <span class="blue-bg" style="border-radius: 50%;padding: 4px 7px;color: #fff;font-weight: 600;">p</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div style="float:right;background: #C9EFFF;padding: 10px;border-radius: 0 10px 10px 0;">
                                                            <p class="time-show">'.$hour.':00<br/>'.$endhour.':00</p>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>


                                            ';
                                        }
                                        else
                                        {

                                            echo '<div class="tour-box">
                                                <div class="tour-box-gray tour-box-full  '.$tourCol.'">
                                                    <strong class="tour-left-row-text text-black"> '.strtoupper($collabData['nom']).'</strong>
                                                    <strong class="tour-left-row-text text-blue"> '.strtoupper($collabData['adress']).'</strong>
                                                    <div class="tour-circle-icons-div">
                                                        <span class="tour-left-white-circle">G3</span>
                                                        <span class="tour-left-white-circle">P</span>
                                                    </div>
                                                </div>

                                                <div class="notificationPopUp">
                                                    <div class=" card-body p-0" style="">
                                                        <div class="w-75" style="background: #fff;border-radius: 10px 0 0 10px !important;padding: 10px;">
                                                            <h6>'.strtoupper($collabData['nom']).'</h6>
                                                            <p class="tx-10 mb-1" style="color: #7F7F7F">PDL '.strtoupper($collabData['pdl']).'</p>
                                                            <p style="color:  #7F7F7F">TYPE '.strtoupper($type).'</p>
                                                            <p class="tx-12 mb-1 text-blue font-weight-bold d-inline-block float-left p-2">'.strtoupper($collabData['adress']).'</p>
                                                            <div class="d-flex float-right">
                                                                <a class="nav-link icon" href="">
                                                                    <span class="blue-bg" style="border-radius: 50%;padding: 4px;color: #fff;font-weight: 600;">G3</span>
                                                                </a>
                                                                <a class="nav-link icon" href="">
                                                                    <span class="blue-bg" style="border-radius: 50%;padding: 4px 7px;color: #fff;font-weight: 600;">p</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="w-25" style="background: #C9EFFF;padding: 10px;border-radius: 0 10px 10px 0;">
                                                            <p class="time-show">'.$hour.':00<br/>'.$endhour.':00</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>';

                                        }

                                    }


                                    }
                                }
                                echo '</div>';

                                echo '<div class="tour-right-row">';
                                if(!empty($collabRecords)){
                                $c = 0;

                                foreach($collabRecords as $collab){
                                    if($collabOrig['id'] != $collab['id']) continue;
                                    $c++;
                                    $collab_id = $collab['id'];
                                    if(empty($records[$collab_id])) continue;
                                    $collabDataRecord = $records[$collab_id];

                                    if($type == 'intervention')
                                        $collabDataArr = $collabDataRecord['interventions'];
                                    else
                                        $collabDataArr = $collabDataRecord['visites'];

                                    $disabledRow = '';
                                    if($collab['status'] == 'inactive'){

                                        $disabledRow = 'tour-disabled-bg-row tour-disabled-bg-row'.$c;
                                    }

                                    $blueborder = "";
                                    if($c%2 != 0)
                                        $blueborder = "blue-border";

                                    foreach($collabDataArr as $k => $collabData){

                                        if($collabData['assignee_id'] != $collab_id) continue;
                                        if($collabData['client_id'] != $collab['client_id']) continue;

                                        $scheduleDate = date('Y-m-d',strtotime($collabData['schedule']));
                                        if($scheduleDate != $requestedDate) continue;

                                        $color = 'orange';
                                        if($type == 'intervention'){
                                            // if($collabData['intervention_status'] != 2 && $collabData['intervention_status'] != 3 && $collabData['intervention_status'] != 4)
                                            // {
                                            //     continue;
                                            // }

                                            if($collabData['intervention_status'] == 2)
                                                $color = 'red';
                                            if($collabData['intervention_status'] == 3)
                                                $color = 'orange';
                                            if($collabData['intervention_status'] == 4)
                                                $color = 'green';
                                        }else{
                                            // if($collabData['visite_status'] != 2 && $collabData['visite_status'] != 3 && $collabData['visite_status'] != 4)
                                            // {
                                            //     continue;
                                            // }

                                            if($collabData['visite_status'] == 2)
                                                $color = 'red';
                                            if($collabData['visite_status'] == 3)
                                                $color = 'orange';
                                            if($collabData['visite_status'] == 4)
                                                $color = 'green';
                                        }

                                        $currentTime = date('Y-m-d H');
                                        $schedule = date('Y-m-d H',strtotime($collabData['schedule']));

                                        //if($collabDataArr[0]['schedule'] == $collabData['schedule']);
                                        $hour = date('H',strtotime($collabData['schedule']));

                                        $tourCol = 'tour-col-1';
                                        if($hour == '0' || $hour == '00' || $hour == '2' || $hour == '02' || $hour == '4' || $hour == '04' || $hour == '20'){
                                            continue;
                                        }

                                        if($hour == '8' || $hour == '08' && $collabDataArr[0]['schedule'] == $collabData['schedule']){
                                            $tourCol = 'tour-col-2';
                                        }

                                        if($hour == '10'  && $collabDataArr[0]['schedule'] == $collabData['schedule']){
                                            $tourCol = 'tour-col-3';
                                        }

                                        if($hour == '12' && $collabDataArr[0]['schedule'] == $collabData['schedule']){
                                            $tourCol = 'tour-col-4';
                                        }

                                        if($hour == '14' && $collabDataArr[0]['schedule'] == $collabData['schedule']){
                                            $tourCol = 'tour-col-5';
                                        }

                                        if($hour == '16' && $collabDataArr[0]['schedule'] == $collabData['schedule']){
                                            $tourCol = 'tour-col-5';
                                        }

                                        if($hour == '18' && $collabDataArr[0]['schedule'] == $collabData['schedule']){
                                            $tourCol = 'tour-col-5';
                                        }

                                        if($collabDataArr[0]['schedule'] != $collabData['schedule']){

                                            $hourPrev = date('H',strtotime($collabDataArr[$k-1]['schedule']));
                                            $hourCurrent = date('H',strtotime($collabDataArr[$k]['schedule']));

                                            $hourDiff = $hourCurrent - $hourPrev;

                                            if($hourDiff == 2){
                                                $tourCol = 'tour-col-1';
                                            }

                                            if($hourDiff == 4){
                                                $tourCol = 'tour-col-2';
                                            }

                                            if($hourDiff == 6){
                                                $tourCol = 'tour-col-3';
                                            }

                                            if($hourDiff == 8){
                                                $tourCol = 'tour-col-4';
                                            }

                                            if($hourDiff == 10){
                                                $tourCol = 'tour-col-5';
                                            }

                                            if($hourDiff == 12){
                                                $tourCol = 'tour-col-6';
                                            }

                                            if($hourDiff == 14){
                                                $tourCol = 'tour-col-8';
                                            }

                                        }

                                        $endhour = $hour+2;

                                        if($schedule <= $currentTime){
                                            echo '<div class="tour-box">
                                                <div class="tour-box-'.$color.' tour-box-full '.$tourCol.'">
                                                    <strong class="tour-left-row-text text-black"> '.strtoupper($collabData['nom']).'</strong>
                                                    <strong class="tour-left-row-text text-blue"> '.strtoupper($collabData['adress']).'</strong>
                                                    <div class="tour-circle-icons-div">
                                                        <span class="tour-left-white-circle">G3</span>
                                                        <span class="tour-left-white-circle">P</span>
                                                    </div>
                                                </div>
                                                <div class="notificationPopUp">
                                                    <div class=" card-body p-0" style="">
                                                        <div class="w-75" style="background: #fff;border-radius: 10px 0 0 10px !important;padding: 10px;">
                                                            <h6>'.strtoupper($collabData['nom']).'</h6>
                                                            <p class="tx-10 mb-1" style="color: #7F7F7F">PDL '.strtoupper($collabData['pdl']).'</p>
                                                            <p style="color:  #7F7F7F">TYPE '.strtoupper($type).'</p>
                                                            <p class="tx-12 mb-1 text-blue font-weight-bold d-inline-block float-left p-2">'.strtoupper($collabData['adress']).'</p>
                                                            <div class="d-flex float-right">
                                                                <a class="nav-link icon" href="">
                                                                    <span class="blue-bg" style="border-radius: 50%;padding: 4px;color: #fff;font-weight: 600;">G3</span>
                                                                </a>
                                                                <a class="nav-link icon" href="">
                                                                    <span class="blue-bg" style="border-radius: 50%;padding: 4px 7px;color: #fff;font-weight: 600;">p</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="w-25" style="background: #C9EFFF;padding: 10px;border-radius: 0 10px 10px 0;">
                                                            <p class="time-show">'.$hour.':00<br/>'.$endhour.':00</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>';
                                        }else{

                                            echo '<div class="tour-box">
                                                <div class="tour-box-'.$color.' tour-box-full '.$tourCol.'">
                                                    <strong class="tour-left-row-text text-black"> '.strtoupper($collabData['nom']).'</strong>
                                                    <strong class="tour-left-row-text text-blue"> '.strtoupper($collabData['adress']).'</strong>
                                                    <div class="tour-circle-icons-div">
                                                        <span class="tour-left-white-circle">G3</span>
                                                        <span class="tour-left-white-circle">P</span>
                                                    </div>
                                                </div>
                                                <div class="notificationPopUp">
                                                    <div class=" card-body p-0" style="">
                                                        <div class="w-75" style="background: #fff;border-radius: 10px 0 0 10px !important;padding: 10px;">
                                                            <h6>'.strtoupper($collabData['nom']).'</h6>
                                                            <p class="tx-10 mb-1" style="color: #7F7F7F">PDL '.strtoupper($collabData['pdl']).'</p>
                                                            <p style="color:  #7F7F7F">TYPE '.strtoupper($type).'</p>
                                                            <p class="tx-12 mb-1 text-blue font-weight-bold d-inline-block float-left p-2">'.strtoupper($collabData['adress']).'</p>
                                                            <div class="d-flex float-right">
                                                                <a class="nav-link icon" href="">
                                                                    <span class="blue-bg" style="border-radius: 50%;padding: 4px;color: #fff;font-weight: 600;">G3</span>
                                                                </a>
                                                                <a class="nav-link icon" href="">
                                                                    <span class="blue-bg" style="border-radius: 50%;padding: 4px 7px;color: #fff;font-weight: 600;">p</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="w-25" style="background: #C9EFFF;padding: 10px;border-radius: 0 10px 10px 0;">
                                                            <p class="time-show">'.$hour.':00<br/>'.$endhour.':00</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>';
                                        }

                                    }


                                    if(!empty($disabledRow)){
                                        echo '<div class="'.$disabledRow.'" style="float:left">';
                                        echo '</div>';
                                    }


                                }
                                echo '</div>';
                            }

                            }

                        ?>

                    </div>

                    <div class="text-right float-right" style="position:absolute;bottom:20px;right:20px;margin-right:20px">
                        <span class="bottom-small-text green-text">Succés </span><span class="bottom-circle bottom-green-circle-count">{{ $success }}</span>
                        <span class="bottom-small-text orange-text">Semi KO </span><span class="bottom-circle bottom-orange-circle-count">{{ $semiKO }}</span>
                        <span class="bottom-small-text red-text">KO </span><span class="bottom-circle bottom-green-red-count">{{ $KO }}</span>
                    </div>
                </div>

        </div>


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
        var left = '10.5%';
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




