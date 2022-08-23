@php
    $time = intval(date('H'));
    $timeVal = date('H:i');

@endphp
<span class="tour-gray-text-hour tour-gray-text-hour1 text-right">6:00</span>

@php
    if ($time >= 8 && $time < 10) {
        echo '<span class="tour-green text-right" style="position: absolute; z-index: 999; left: 21.5vw; font-size: 0.75rem;font-weight: bold;top: 1.5rem;color: #27c291;">' . $timeVal . '</span>';
    } elseif ($time >= 10 && $time < 12) {
        echo '<span class="tour-green text-right" style="position: absolute; z-index: 999; left: 28.5vw; font-size: 0.75rem;font-weight: bold;top: 1.5rem;color: #27c291;">' . $timeVal . '</span>';
    } elseif ($time >= 12 && $time < 14) {
        echo '<span class="tour-green text-right" style="position: absolute; z-index: 999; left: 35.5vw; font-size: 0.75rem;font-weight: bold;top: 1.5rem;color: #27c291;">' . $timeVal . '</span>';
    } elseif ($time >= 14 && $time < 16) {
        echo '<span class="tour-green text-right" style="position: absolute; z-index: 999; left: 42.5vw; font-size: 0.75rem;font-weight: bold;top: 1.5rem;color: #27c291;">' . $timeVal . '</span>';
    } elseif ($time >= 16 && $time < 18) {
        echo '<span class="tour-green text-right" style="position: absolute; z-index: 999; left: 50.5vw; font-size: 0.75rem;font-weight: bold;top: 1.5rem;color: #27c291;">' . $timeVal . '</span>';
    } elseif ($time >= 18 && $time < 20) {
        echo '<span class="tour-green text-right" style="position: absolute; z-index: 999; left: 57.5vw; font-size: 0.75rem;font-weight: bold;top: 1.5rem;color: #27c291;">' . $timeVal . '</span>';
    }
@endphp

<span class="tour-gray-text-hour tour-gray-text-hour2 text-right">8:00</span>
<span class="tour-gray-text-hour tour-gray-text-hour3 text-right">10:00</span>
<span class="tour-gray-text-hour tour-gray-text-hour4 text-right">12:00</span>
<span class="tour-gray-text-hour tour-gray-text-hour5 text-right">14:00</span>
<span class="tour-gray-text-hour tour-gray-text-hour6 text-right">16:00</span>
<span class="tour-gray-text-hour tour-gray-text-hour7 text-right">18:00</span>
<span class="tour-gray-text-hour tour-gray-text-hour8 text-right">20:00</span>
@php
    if ($time >= 8 && $time < 10) {
        echo '<div class="green-vl" style="left: 22.5vw;"></div>';
    } elseif ($time >= 10 && $time < 12) {
        echo '<div class="green-vl" style="left: 29.5vw;"></div>';
    } elseif ($time >= 12 && $time < 14) {
        echo '<div class="green-vl" style="left: 36.5vw;"></div>';
    } elseif ($time >= 14 && $time < 16) {
        echo '<div class="green-vl" style="left: 43.5vw;"></div>';
    } elseif ($time >= 16 && $time < 18) {
        echo '<div class="green-vl" style="left: 51.5vw;"></div>';
    } elseif ($time >= 18 && $time < 20) {
        echo '<div class="green-vl" style="left: 58.5vw;"></div>';
    }
@endphp


@php

@endphp


<div class="rounded-corner bg-white col-white1" id="original_visite">
    <hr class="tour-gray-hr" />

@php
    $visites_total = [];
    $visites_success_array = [];
    $visites_semi_ko_array = [];
    $visites_ko_array = [];
@endphp

    @foreach ($collaborations as $collaboration)
        <div class="tour-row">
            <input type="checkbox" name="" class="tour-checkbox-userinput" />
            <div class="sub-tour-row-container">
                <a href="javascript:void(0);" data-toggle="modal" data-target="#technicien-modal_{{$collaboration->id}}">
                    <strong class="tour-row-text text-black">Panificateur</strong>
                    <strong class="tour-row-text text-blue">80%</strong>
                    <div class="circle-chart-div">
                        <div class="circle-chart-inner-div">
                            <svg class="circle-chart" viewbox="0 0 33.83098862 33.83098862" width="50" height="50"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle class="circle-chart__background" stroke="#009cde" stroke-width="2" fill="none"
                                    cx="16.91549431" cy="16.91549431" r="15.91549431" />

                                <circle class="circle-chart__circle" stroke="#FFF" stroke-width="2"
                                    stroke-dasharray="20,100" stroke-linecap="round" fill="none" cx="16.91549431"
                                    cy="16.91549431" r="15.91549431" />
                                <img src="{{ asset('public/assets/img/media/profile-img.png') }}"
                                    class="tour-image" />
                            </svg>
                        </div>
                        <div class="clear"></div>
                    </div>

                    <strong class="tour-row-text text-gray">{{ $collaboration->prenom }}
                        {{ $collaboration->nom }}</strong>
                    <strong class="tour-row-text text-blue">
                        <img src="{{ asset('public/assets/img/media/smallhouse.png') }}" class="small-house"> Paris
                        02
                    </strong>
                </a>
            </div>

            {{-- in-between --}}
            @php

                $currentDate = date('Y-m-d');
                $type = Request::segment(2);

                if (isset($_GET['date'])) {
                    $selected_date = $_GET['date'];
                    $visites_count = DB::table('visites')
                        ->select('visites.user_id', 'visites.client_id', 'visites.assignee_id', 'visites.schedule', 'visites.status as statusv', DB::raw('llx_client.id as client_id'), 'llx_client.nom', 'llx_client.prenom', 'llx_client.pdl', 'llx_client.adress', 'llx_client.status', 'llx_client.intervention_status', 'llx_client.visite_status', 'llx_client.image')
                        ->leftJoin('llx_client', 'llx_client.id', 'visites.client_id')
                        ->whereRaw('assignee_id = ' . $collaboration->id . " and date_format(schedule,'%Y-%m-%d') = '" . $selected_date . "' and schedule > '" . $selected_date . " 06:00:00'")
                        ->orderBy('schedule', 'asc')

                        ->count();

                    $visites_success = DB::table('visites')
                        ->select('visites.user_id', 'visites.client_id', 'visites.assignee_id', 'visites.schedule', 'visites.status as statusv', DB::raw('llx_client.id as client_id'), 'llx_client.nom', 'llx_client.prenom', 'llx_client.pdl', 'llx_client.adress', 'llx_client.status', 'llx_client.intervention_status', 'llx_client.visite_status', 'llx_client.image')
                        ->leftJoin('llx_client', 'llx_client.id', 'visites.client_id')
                        ->whereRaw('assignee_id = ' . $collaboration->id . " and date_format(schedule,'%Y-%m-%d') = '" . $selected_date . "' and schedule > '" . $selected_date . " 06:00:00'")
                        ->orderBy('schedule', 'asc')
                        ->where('visites.status','4')
                        ->count();
                    $visites_semi_ko = DB::table('visites')
                        ->select('visites.user_id', 'visites.client_id', 'visites.assignee_id', 'visites.schedule', 'visites.status as statusv', DB::raw('llx_client.id as client_id'), 'llx_client.nom', 'llx_client.prenom', 'llx_client.pdl', 'llx_client.adress', 'llx_client.status', 'llx_client.intervention_status', 'llx_client.visite_status', 'llx_client.image')
                        ->leftJoin('llx_client', 'llx_client.id', 'visites.client_id')
                        ->whereRaw('assignee_id = ' . $collaboration->id . " and date_format(schedule,'%Y-%m-%d') = '" . $selected_date . "' and schedule > '" . $selected_date . " 06:00:00'")
                        ->orderBy('schedule', 'asc')
                        ->where('visites.status','3')
                        ->count();
                    $visites_ko = DB::table('visites')
                        ->select('visites.user_id', 'visites.client_id', 'visites.assignee_id', 'visites.schedule', 'visites.status as statusv', DB::raw('llx_client.id as client_id'), 'llx_client.nom', 'llx_client.prenom', 'llx_client.pdl', 'llx_client.adress', 'llx_client.status', 'llx_client.intervention_status', 'llx_client.visite_status', 'llx_client.image')
                        ->leftJoin('llx_client', 'llx_client.id', 'visites.client_id')
                        ->whereRaw('assignee_id = ' . $collaboration->id . " and date_format(schedule,'%Y-%m-%d') = '" . $selected_date . "' and schedule > '" . $selected_date . " 06:00:00'")
                        ->orderBy('schedule', 'asc')
                        ->where('visites.status','3')
                        ->count();

                    echo '<div class="in-between" style="z-index: 9;">
                            <div class="tour-num-top-div tour-num-top1 d-flex">
                                <span class="tour-num-top text-blue">'.$visites_count.'</span>
                                <span class="ml-3 text-blue font-weight-bold tour-label">Prévisionel</span>
                            </div>
                            <div class="tour-num-top-div tour-num-top1-green1 d-flex">
                                <span class="tour-num-top tour-num-top-green text-white">'.$visites_success.'</span>
                                <span class="ml-3 text-green font-weight-bold tour-label">Succès</span>
                            </div>
                            <div class="tour-num-top-div tour-num-top1-orange1 d-flex">
                                <span class="tour-num-top tour-num-top-orange text-white">'.$visites_semi_ko.'</span>
                                <span class="ml-3 text-orange font-weight-bold tour-label">Semi KO</span>
                            </div>

                            <div class="tour-num-top-div tour-num-top1-red1 d-flex">
                                <span class="tour-num-top tour-num-top-red text-white">'.$visites_ko.'</span>
                                <span class="ml-3 text-red font-weight-bold tour-label">KO</span>
                            </div>
                        </div>';
                } else {
                    $visites_count = DB::table('visites')
                        ->select('visites.user_id', 'visites.client_id', 'visites.assignee_id', 'visites.schedule', 'visites.status as statusv', DB::raw('llx_client.id as client_id'), 'llx_client.nom', 'llx_client.prenom', 'llx_client.pdl', 'llx_client.adress', 'llx_client.status', 'llx_client.intervention_status', 'llx_client.visite_status', 'llx_client.image')
                        ->leftJoin('llx_client', 'llx_client.id', 'visites.client_id')
                        ->whereRaw('assignee_id = ' . $collaboration->id . " and date_format(schedule,'%Y-%m-%d') = '" . $currentDate . "' and schedule > '" . $currentDate . " 06:00:00'")
                        ->orderBy('schedule', 'asc')

                        ->count();



                    $visites_success = DB::table('visites')
                        ->select('visites.user_id', 'visites.client_id', 'visites.assignee_id', 'visites.schedule', 'visites.status as statusv', DB::raw('llx_client.id as client_id'), 'llx_client.nom', 'llx_client.prenom', 'llx_client.pdl', 'llx_client.adress', 'llx_client.status', 'llx_client.intervention_status', 'llx_client.visite_status', 'llx_client.image')
                        ->leftJoin('llx_client', 'llx_client.id', 'visites.client_id')
                        ->whereRaw('assignee_id = ' . $collaboration->id . " and date_format(schedule,'%Y-%m-%d') = '" . $currentDate . "' and schedule > '" . $currentDate . " 06:00:00'")
                        ->orderBy('schedule', 'asc')
                        ->where('visites.status','4')
                        ->count();
                    $visites_semi_ko = DB::table('visites')
                        ->select('visites.user_id', 'visites.client_id', 'visites.assignee_id', 'visites.schedule', 'visites.status as statusv', DB::raw('llx_client.id as client_id'), 'llx_client.nom', 'llx_client.prenom', 'llx_client.pdl', 'llx_client.adress', 'llx_client.status', 'llx_client.intervention_status', 'llx_client.visite_status', 'llx_client.image')
                        ->leftJoin('llx_client', 'llx_client.id', 'visites.client_id')
                        ->whereRaw('assignee_id = ' . $collaboration->id . " and date_format(schedule,'%Y-%m-%d') = '" . $currentDate . "' and schedule > '" . $currentDate . " 06:00:00'")
                        ->orderBy('schedule', 'asc')
                        ->where('visites.status','3')
                        ->count();
                    $visites_ko = DB::table('visites')
                        ->select('visites.user_id', 'visites.client_id', 'visites.assignee_id', 'visites.schedule', 'visites.status as statusv', DB::raw('llx_client.id as client_id'), 'llx_client.nom', 'llx_client.prenom', 'llx_client.pdl', 'llx_client.adress', 'llx_client.status', 'llx_client.intervention_status', 'llx_client.visite_status', 'llx_client.image')
                        ->leftJoin('llx_client', 'llx_client.id', 'visites.client_id')
                        ->whereRaw('assignee_id = ' . $collaboration->id . " and date_format(schedule,'%Y-%m-%d') = '" . $currentDate . "' and schedule > '" . $currentDate . " 06:00:00'")
                        ->orderBy('schedule', 'asc')
                        ->where('visites.status','3')
                        ->count();

                        echo '<div class="in-between" style="z-index: 9;">
                            <div class="tour-num-top-div tour-num-top1 d-flex">
                                <span class="tour-num-top text-blue">'.$visites_count.'</span>
                                <span class="ml-3 text-blue font-weight-bold tour-label">Prévisionel</span>
                            </div>
                            <div class="tour-num-top-div tour-num-top1-green1 d-flex">
                                <span class="tour-num-top tour-num-top-green text-white">'.$visites_success.'</span>
                                <span class="ml-3 text-green font-weight-bold tour-label">Succès</span>
                            </div>
                            <div class="tour-num-top-div tour-num-top1-orange1 d-flex">
                                <span class="tour-num-top tour-num-top-orange text-white">'.$visites_semi_ko.'</span>
                                <span class="ml-3 text-orange font-weight-bold tour-label">Semi KO</span>
                            </div>

                            <div class="tour-num-top-div tour-num-top1-red1 d-flex">
                                <span class="tour-num-top tour-num-top-red text-white">'.$visites_ko.'</span>
                                <span class="ml-3 text-red font-weight-bold tour-label">KO</span>
                            </div>
                        </div>';
                }

            @endphp
            {{-- in-between --}}




            <div class="col-white7-col" style="    margin-left: 15%;">
                <div class="">


                    <div class="tour-right-row-div">

                        @php

                            $currentDate = date('Y-m-d');
                            $type = Request::segment(2);

                            if (isset($_GET['date'])) {
                                $selected_date = $_GET['date'];
                                $visites = DB::table('visites')
                                    ->select('visites.user_id', 'visites.client_id', 'visites.assignee_id', 'visites.schedule', 'visites.status as statusv', DB::raw('llx_client.id as client_id'), 'llx_client.nom', 'llx_client.prenom', 'llx_client.pdl', 'llx_client.adress', 'llx_client.status', 'llx_client.intervention_status', 'llx_client.visite_status', 'llx_client.image')
                                    ->leftJoin('llx_client', 'llx_client.id', 'visites.client_id')
                                    ->whereRaw('assignee_id = ' . $collaboration->id . " and date_format(schedule,'%Y-%m-%d') = '" . $selected_date . "' and schedule > '" . $selected_date . " 06:00:00'")
                                    ->orderBy('schedule', 'asc')

                                    ->get();
                            } else {
                                $visites = DB::table('visites')
                                    ->select('visites.user_id', 'visites.client_id', 'visites.assignee_id', 'visites.schedule', 'visites.status as statusv', DB::raw('llx_client.id as client_id'), 'llx_client.nom', 'llx_client.prenom', 'llx_client.pdl', 'llx_client.adress', 'llx_client.status', 'llx_client.intervention_status', 'llx_client.visite_status', 'llx_client.image')
                                    ->leftJoin('llx_client', 'llx_client.id', 'visites.client_id')
                                    ->whereRaw('assignee_id = ' . $collaboration->id . " and date_format(schedule,'%Y-%m-%d') = '" . $currentDate . "' and schedule > '" . $currentDate . " 06:00:00'")
                                    ->orderBy('schedule', 'asc')

                                    ->get();
                            }

                        @endphp





                        {{-- 1st Position --}}
                        <div class="tour-right-row  blue-border">
                            <img src="{{ asset('public/assets/img/media/tournees-icon.png') }}"
                                style="position: absolute;bottom: -10px;left: 2.5vw;z-index: 9;">


                            @foreach ($visites as $visite)
                                @php
                                    $hour = date('H', strtotime($visite->schedule));
                                    $endhour = $hour + 2;

                                    $currentTime = date('Y-m-d H');
                                    $schedule = date('Y-m-d H', strtotime($visite->schedule));
                                @endphp

                                @if ($schedule <= $currentTime)
                                    <div class="tour-box">
                                        <div class="tour-box-blue tour-box-half tour-col-9">
                                            <strong class="tour-left-row-text text-black">{{ $visite->prenom }}
                                                {{ $visite->nom }}</strong>
                                            <strong class="tour-left-row-text text-blue"> LIEU</strong>
                                            <div class="tour-circle-icons-div">
                                                <span class="tour-left-white-circle">G3</span>
                                                <span class="tour-left-white-circle">P</span>
                                                <span class="tour-left-white-circle text-blue">1</span>
                                            </div>
                                        </div>
                                        <div class="notificationPopUp">
                                            <div class=" card-body p-0" style="">
                                                <div class="w-75"
                                                    style="background: #fff;border-radius: 10px 0 0 10px !important;padding: 10px;">
                                                    <h6>{{ $visite->prenom }} {{ $visite->nom }}</h6>
                                                    <p class="tx-10 mb-1" style="color: #7F7F7F">PDL 1256458665</p>
                                                    <p style="color:  #7F7F7F">TYPE INTERVENTION</p>
                                                    <p
                                                        class="tx-12 mb-1 text-blue font-weight-bold d-inline-block float-left p-2">
                                                        LIEU</p>
                                                    <div class="d-flex float-right">
                                                        <a class="nav-link icon" href="">
                                                            <span class="blue-bg"
                                                                style="border-radius: 50%;padding: 4px;color: #fff;font-weight: 600;">G3</span>
                                                        </a>
                                                        <a class="nav-link icon" href="">
                                                            <span class="blue-bg"
                                                                style="border-radius: 50%;padding: 4px 7px;color: #fff;font-weight: 600;">p</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="w-25"
                                                    style="background: #C9EFFF;padding: 10px;border-radius: 0 10px 10px 0;position: relative;">
                                                    <p class="time-show text-blue">{{ $hour }}:00
                                                        {{ $endhour }}:00</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="tour-box">
                                        <div class="tour-box-half tour-box-gray tour-col-9">
                                            <strong class="tour-left-row-text text-black">{{ $visite->prenom }}
                                                {{ $visite->nom }}</strong>
                                            <strong class="tour-left-row-text text-blue"> LIEU</strong>
                                            <div class="tour-circle-icons-div">
                                                <span class="tour-left-white-circle">G3</span>
                                                <span class="tour-left-white-circle">P</span>
                                                <span class="tour-left-white-circle text-blue">1</span>
                                            </div>
                                        </div>
                                        <div class="notificationPopUp">
                                            <div class=" card-body p-0" style="">
                                                <div class="w-75"
                                                    style="background: #fff;border-radius: 10px 0 0 10px !important;padding: 10px;">
                                                    <h6>{{ $visite->prenom }} {{ $visite->nom }}</h6>
                                                    <p class="tx-10 mb-1" style="color: #7F7F7F">PDL 1256458665</p>
                                                    <p style="color:  #7F7F7F">TYPE INTERVENTION</p>
                                                    <p
                                                        class="tx-12 mb-1 text-blue font-weight-bold d-inline-block float-left p-2">
                                                        LIEU</p>
                                                    <div class="d-flex float-right">
                                                        <a class="nav-link icon" href="">
                                                            <span class="blue-bg"
                                                                style="border-radius: 50%;padding: 4px;color: #fff;font-weight: 600;">G3</span>
                                                        </a>
                                                        <a class="nav-link icon" href="">
                                                            <span class="blue-bg"
                                                                style="border-radius: 50%;padding: 4px 7px;color: #fff;font-weight: 600;">p</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="w-25"
                                                    style="background: #C9EFFF;padding: 10px;border-radius: 0 10px 10px 0;position: relative;">
                                                    <p class="time-show text-blue">{{ $hour }}:00
                                                        {{ $endhour }}:00</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif

                            @endforeach
                        </div>





                        {{-- 2nd Position --}}
                        <div class="tour-right-row">
                            @foreach ($visites as $visite)
                                @php
                                    $hour = date('H', strtotime($visite->schedule));
                                    $endhour = $hour + 2;

                                    $currentTime = date('Y-m-d H');
                                    $schedule = date('Y-m-d H', strtotime($visite->schedule));
                                @endphp


                                @if ($visite->statusv == '2')
                                    <div class="tour-box">
                                        <div class="tour-box-red tour-box-half tour-col-9">
                                            <img src="{{ asset('public/assets/img/icons/bell.png') }}">
                                            <strong class="tour-left-row-text text-black"> {{ $visite->prenom }}
                                                {{ $visite->nom }}</strong>
                                            <strong class="tour-left-row-text text-red"> LIEU</strong>
                                            <div class="tour-circle-icons-div">
                                                <span class="tour-left-white-circle text-red">G3</span>
                                                <span class="tour-left-white-circle text-red">P</span>
                                            </div>
                                        </div>
                                        <div class="notificationPopUp">
                                            <div class=" card-body p-0" style="">
                                                <div class="w-75"
                                                    style="background: #fff;border-radius: 10px 0 0 10px !important;padding: 10px;">
                                                    <h6>{{ $visite->prenom }} {{ $visite->nom }}</h6>
                                                    <p class="tx-10 mb-1" style="color: #7F7F7F">PDL 1256458665</p>
                                                    <p style="color:  #7F7F7F">TYPE INTERVENTION</p>
                                                    <p
                                                        class="tx-12 mb-1 text-red font-weight-bold d-inline-block float-left p-2">
                                                        LIEU</p>
                                                    <div class="d-flex float-right">
                                                        <a class="nav-link icon" href="">
                                                            <span class="blue-bg"
                                                                style="border-radius: 50%;padding: 4px;color: #fff;font-weight: 600;background-color: #ed0423 !important;">G3</span>
                                                        </a>
                                                        <a class="nav-link icon" href="">
                                                            <span class="blue-bg"
                                                                style="border-radius: 50%;padding: 4px 7px;color: #fff;font-weight: 600;background-color: #ed0423 !important;">p</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="w-25"
                                                    style="background: #ffe6ea;padding: 10px;border-radius: 0 10px 10px 0;position: relative;">
                                                    <p class="time-show text-red"><i
                                                            class="fas fa-minus-circle mb-1"></i>{{ $hour }}:00
                                                        {{ $endhour }}:00</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @elseif($visite->statusv == '3')
                                    <div class="tour-box">
                                        <div class="tour-box-orange tour-box-half tour-col-9">
                                            <strong class="tour-left-row-text text-black"> {{ $visite->prenom }}
                                                {{ $visite->nom }}</strong>
                                            <strong class="tour-left-row-text text-orange"> LIEU</strong>
                                            <div class="tour-circle-icons-div">
                                                <span class="tour-left-white-circle text-orange">G3</span>
                                                <span class="tour-left-white-circle text-orange">P</span>
                                            </div>
                                        </div>
                                        <div class="notificationPopUp">
                                            <div class=" card-body p-0" style="">
                                                <div class="w-75"
                                                    style="background: #fff;border-radius: 10px 0 0 10px !important;padding: 10px;">
                                                    <h6>{{ $visite->prenom }} {{ $visite->nom }}</h6>
                                                    <p class="tx-10 mb-1" style="color: #7F7F7F">PDL 1256458665</p>
                                                    <p style="color:  #7F7F7F">TYPE INTERVENTION</p>
                                                    <p
                                                        class="tx-12 mb-1 font-weight-bold d-inline-block float-left p-2 text-orange">
                                                        LIEU</p>
                                                    <div class="d-flex float-right">
                                                        <a class="nav-link icon" href="">
                                                            <span class="blue-bg"
                                                                style="border-radius: 50%;padding: 4px;color: #fff;font-weight: 600;background-color: #ffab73 !important;">G3</span>
                                                        </a>
                                                        <a class="nav-link icon" href="">
                                                            <span class="blue-bg"
                                                                style="border-radius: 50%;padding: 4px 7px;color: #fff;font-weight: 600;background-color: #ffab73 !important;">p</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="w-25"
                                                    style="background: #ffede1;padding: 10px;border-radius: 0 10px 10px 0;position: relative;">
                                                    <p class="time-show text-orange"><i
                                                            class="fas fa-check-circle mb-1"></i>{{ $hour }}:00
                                                        {{ $endhour }}:00</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @elseif($visite->statusv == '4')
                                    <div class="tour-box">
                                        <div class="tour-box-green tour-box-half tour-col-9">
                                            <strong class="tour-left-row-text text-black"> {{ $visite->prenom }}
                                                {{ $visite->nom }}</strong>
                                            <strong class="tour-left-row-text text-green"> LIEU</strong>
                                            <div class="tour-circle-icons-div">
                                                <span class="tour-left-white-circle text-green">G3</span>
                                                <span class="tour-left-white-circle text-green">P</span>
                                            </div>
                                        </div>
                                        <div class="notificationPopUp">
                                            <div class=" card-body p-0" style="">
                                                <div class="w-75"
                                                    style="background: #fff;border-radius: 10px 0 0 10px !important;padding: 10px;">
                                                    <h6>{{ $visite->prenom }} {{ $visite->nom }}</h6>
                                                    <p class="tx-10 mb-1" style="color: #7F7F7F">PDL 1256458665</p>
                                                    <p style="color:  #7F7F7F">TYPE INTERVENTION</p>
                                                    <p
                                                        class="tx-12 mb-1 font-weight-bold d-inline-block float-left p-2 text-green">
                                                        LIEU</p>
                                                    <div class="d-flex float-right">
                                                        <a class="nav-link icon" href="">
                                                            <span class="blue-bg"
                                                                style="border-radius: 50%;padding: 4px;color: #fff;font-weight: 600;background-color: #2fc495 !important;">G3</span>
                                                        </a>
                                                        <a class="nav-link icon" href="">
                                                            <span class="blue-bg"
                                                                style="border-radius: 50%;padding: 4px 7px;color: #fff;font-weight: 600;background-color: #2fc495 !important;">p</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="w-25"
                                                    style="background: #cdf1e5;padding: 10px;border-radius: 0 10px 10px 0;position: relative;">
                                                    <p class="time-show text-green"><img
                                                            src="{{ asset('public/assets/img/circle-check.png')}}"
                                                            class="mb-1">{{ $hour }}:00
                                                        {{ $endhour }}:00</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach

                        </div>

                    </div>



                </div>

            </div>



        </div>


    @php

        array_push($visites_total, $visites_count);
        array_push($visites_success_array, $visites_success);
        array_push($visites_semi_ko_array, $visites_semi_ko);
        array_push($visites_ko_array, $visites_ko);

    @endphp

    @include('admin_planning.admin_collaboration_rightside_popup')
    @endforeach





</div>

<div class="tour-num-top-div tour-num-top3 d-flex" style="position: absolute;bottom: 0;">
    <span class="tour-num-top text-blue" style="position: absolute;bottom: 15px; left: -5px;height: 30px;width: 30px;padding: 5px;">{{array_sum($visites_total)}}
    </span>
    <span class="ml-3 text-blue font-weight-bold tour-label" style="position: absolute;bottom: 20px;left: 20px;">Prévisionel</span>
</div>


<div class="text-right float-right" style="position:absolute;bottom:20px;right:20px">
    <span class="bottom-small-text green-text">Succés </span><span class="bottom-circle bottom-green-circle-count">{{array_sum($visites_success_array)}}</span>
    <span class="bottom-small-text orange-text">Semi KO </span><span class="bottom-circle bottom-orange-circle-count">{{array_sum($visites_semi_ko_array)}}</span>
    <span class="bottom-small-text red-text">KO </span><span class="bottom-circle bottom-green-red-count">{{array_sum($visites_ko_array)}}</span>
</div>
