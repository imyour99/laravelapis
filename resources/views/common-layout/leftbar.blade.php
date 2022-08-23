<div class="main-sidebar main-sidebar-sticky side-menu">
    <div class="main-sidebar-body">
        <ul class="nav">
                <!-- <li class="nav-header"><span class="nav-label">Dashboard</span></li> -->
            <li class="nav-item">
                <a class="nav-link" href="{{route('dashboard')}}"><span class="shape1"></span><span class="shape2"></span><i class="sidemenu-icon"><span class="side-home-icon"></span></i><span class="sidemenu-label">Dashboard</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('AdminPlanning')}}"><span class="shape1"></span><span class="shape2"></span><i class="sidemenu-icon"><span class="side-map-icon"></span></i><span class="sidemenu-label">Employee Tours</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link with-sub" href="#"><span class="shape1"></span><span class="shape2"></span><i class="sidemenu-icon"><span class="side-target-icon"></span></i><span class="sidemenu-label">Clients</span><i class="angle fe fe-chevron-right"></i></a>
                <ul class="nav-sub">
                    <li class="nav-sub-item">
                        <a class="nav-sub-link " href="{{route('clientsList')}}">
                            <img src="{{ asset('public/assets/img/icons/nav-client.png')}}" class="mr-3" />
                            Clients
                        </a><hr>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link " href="{{route('collaboration')}}">
                            <img src="{{ asset('public/assets/img/icons/nav-collaborateurs.png')}}" class="mr-3" />
                            Collaborateurs
                        </a><hr>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link " href="{{route('agences')}}">
                            <img src="{{ asset('public/assets/img/icons/nav-agence.png')}}" class="mr-3" />
                            Agences
                        </a><hr>
                    </li>

                </ul>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link" href="collaborateurs.php"><span class="shape1"></span><span class="shape2"></span><i class="sidemenu-icon"><span class="side-people-icon"></span></i><span class="sidemenu-label">Collaborateurs</span></a>
            </li> -->
            <li class="nav-item">
                <a class="nav-link" href="{{route('statistiques')}}"><span class="shape1"></span><span class="shape2"></span><i class="fas sidemenu-icon" style="background-image: url(https://demo2.itfaq.cloud/imc/public/assets/img/icons/statistics.png) !important;
                    background-repeat: no-repeat !important;
                    background-position: center !important;
                    background-size: 50% !important;"></i><span class="sidemenu-label">Statistiques</span></a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link" href="#"><span class="shape1"></span><span class="shape2"></span><i class="fas fa-users sidemenu-icon"></i><span class="sidemenu-label">Techniciens</span></a>
            </li> --}}

            <li class="nav-item">
                <a class="nav-link" href="{{route('AdministrationList')}}"><span class="shape1"></span><span class="shape2"></span><i class="sidemenu-icon"><span class="side-gear-icon"></span></i><span class="sidemenu-label">Administration</span></a>
            </li>

        </ul>
    </div>
</div>

<!-- new update today
<div class="main-sidebar main-sidebar-sticky side-menu">
    <div class="main-sidebar-body">
        <ul class="nav">
                 <li class="nav-header"><span class="nav-label">Dashboard</span></li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('dashboard')}}"><span class="shape1"></span><span class="shape2"></span><i class="sidemenu-icon"><span class="side-home-icon"></span></i><span class="sidemenu-label">Dashboard</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('AdminPlanning')}}"><span class="shape1"></span><span class="shape2"></span><i class="sidemenu-icon"><span class="side-map-icon"></span></i><span class="sidemenu-label">Employee Tours</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link with-sub" href="#"><span class="shape1"></span><span class="shape2"></span><i class="sidemenu-icon"><span class="side-people-icon"></span></i><span class="sidemenu-label">Clients</span><i class="angle fe fe-chevron-right"></i></a>
                <ul class="nav-sub">
                    <li class="nav-sub-item client">
                        <a class="nav-sub-link " href="{{route('clientsList')}}">Clients</a><hr>
                    </li>
                    <li class="nav-sub-item notification" style="display:none">
                        <a class="nav-sub-link " href="{{route('notification')}}">Notifications</a><hr>
                    </li>
                    <li class="nav-sub-item notification">
                        <a class="nav-sub-link " href="{{route('collaboration')}}">Collaboration</a><hr>
                    </li>
                    <li class="nav-sub-item notification">
                        <a class="nav-sub-link " href="{{route('agences')}}">Agences</a><hr>
                    </li>
                </ul>
            </li>
            {{-- side-target-icon --}}
            <li class="nav-item">
                <a class="nav-link" href="{{route('Techniciens')}}"><span class="shape1"></span><span class="shape2"></span><i class="sidemenu-icon"><span class="side-target-icon"></span></i><span class="sidemenu-label">Collaborateurs</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="techniciens.html"><span class="shape1"></span><span class="shape2"></span><i class="fas fa-users sidemenu-icon"></i><span class="sidemenu-label">Techniciens</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="administration.html"><span class="shape1"></span><span class="shape2"></span><i class="sidemenu-icon"><span class="side-gear-icon"></span></i><span class="sidemenu-label">Administration</span></a>
            </li>

        </ul>
    </div>
</div>-->
