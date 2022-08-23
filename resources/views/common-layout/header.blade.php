<div class="pb-4 header-sticky-container">
    <div class="main-header side-header sticky">
        <div class="container-fluid">
            <div class="main-header-left">
                <div>
                    <a class="main-logo" href="dashboard.php">
                        <img src="{{ asset('public/assets/img/brand/logo.svg')}}" class="header-brand-img desktop-logo" alt="logo">
                        <img src="{{ asset('public/assets/img/brand/logo.svg')}}" class="header-brand-img icon-logo" alt="logo">
                        <img src="{{ asset('public/assets/img/brand/logo.svg')}}" class="header-brand-img desktop-logo theme-logo" alt="logo">
                        <img src="{{ asset('public/assets/img/brand/logo.svg')}}" class="header-brand-img icon-logo theme-logo" alt="logo">
                    </a>
                </div>
                <!-- <a class="main-header-menu-icon" href="#" id="mainSidebarToggle"><span></span></a> -->
            </div>
            <div class="main-header-center">
                <ul class="top-nav navigation">
                    <li><a href="#" class="enedies">Enedies Linky</a></li>
                </ul>
            </div>
            <div class="main-header-right">
                <div class="dropdown main-profile-menu">
                    <a class="d-flex" href="">
                        <span class="text-right mr-2 mt-1">
                            <span class="tx-16  black-text font-weight-bold user-fullname">Jane Doe</span>
                            <span class="tx-13 d-flex font-weight-light text-blue">Super Admin</span>
                        </span>
                        <span class="main-img-user">
                            @if (Auth::user()->profile_img == '')
                                <img alt="avatar" src="{{ asset('public/assets/img/users/user.png')}}">
                            @else
                            <img alt="avatar" src="{{ asset('public/uploads/profile_images/'.Auth::user()->profile_img)}}">
                            @endif
                        </span>

                    </a>
                </div>
                <!--<div class="dropdown main-header-notification">-->
                <div class="main-header-notification">
                    <!--<a class="nav-link icon" href="">-->
                    <a class="nav-link icon" href="{{route('notification')}}">
                        <i class="far fa-bell header-icons"></i>
                        <span class="badge badge-danger nav-link-badge">4</span>
                    </a>
                    <!--<div class="dropdown-menu">
                        <div class="header-navheading">
                            <p class="main-notification-text">You have 1 unread notification <a href="notifications.php"><span class="badge badge-pill badge-primary ml-1">View all</span></a></p>
                        </div>
                        <div class="main-notification-list">
                            <div class="media new">
                                <div class="main-img-user online"><img alt="avatar" src="assets/img/users/5.jpg"></div>
                                <div class="media-body">
                                    <p>Congratulate <strong>Olivia James</strong> for New template start</p><span>Oct 15 12:32pm</span>
                                </div>
                            </div>
                            <div class="media">
                                <div class="main-img-user"><img alt="avatar" src="assets/img/users/2.jpg"></div>
                                <div class="media-body">
                                    <p><strong>Joshua Gray</strong> New Message Received</p><span>Oct 13 02:56am</span>
                                </div>
                            </div>
                            <div class="media">
                                <div class="main-img-user online"><img alt="avatar" src="assets/img/users/3.jpg"></div>
                                <div class="media-body">
                                    <p><strong>Elizabeth Lewis</strong> added new schedule realease</p><span>Oct 12 10:40pm</span>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-footer">
                            <a href="notifications.php">View All Notifications</a>
                        </div>
                        </div> -->
                </div>
                <div class="dropdown main-header-notification">
                    <a class="nav-link icon" href="">
                        <i class="fas fa-envelope header-icons"></i>
                        <span class="badge badge-danger nav-link-badge">4</span>
                    </a>
                    <div class="dropdown-menu">
                        <div class="header-navheading">
                            <p class="main-notification-text">You have 1 unread notification<span class="badge badge-pill badge-primary ml-3">View all</span></p>
                        </div>
                        <div class="main-notification-list">
                            <div class="media new">
                                <div class="main-img-user online"><img alt="avatar" src="assets/img/users/5.jpg"></div>
                                <div class="media-body">
                                    <p>Congratulate <strong>Olivia James</strong> for New template start</p>
                                    <span>Oct 15 12:32pm</span>
                                </div>
                            </div>
                            <div class="media">
                                <div class="main-img-user"><img alt="avatar" src="assets/img/users/2.jpg"></div>
                                <div class="media-body">
                                    <p><strong>Joshua Gray</strong> New Message Received</p>
                                    <span>Oct 13 02:56am</span>
                                </div>
                            </div>
                            <div class="media">
                                <div class="main-img-user online"><img alt="avatar" src="assets/img/users/3.jpg"></div>
                                <div class="media-body">
                                    <p><strong>Elizabeth Lewis</strong> added new schedule realease</p>
                                    <span>Oct 12 10:40pm</span>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-footer">
                            <a href="notifications.php">View All Notifications</a>
                        </div>
                    </div>
                </div>
                <!--<div class="dropdown main-header-notification">-->
                <div class="main-header-notification">
                    <!--<a class="nav-link icon" href="">-->
                    <a class="nav-link icon" href="{{route('clientsList')}}">
                        <!-- <i class="fe fe-bell header-icons"></i> -->
                        <i class="fa fa-phone header-icons"></i>
                        <span class="badge badge-danger nav-link-badge">4</span>
                    </a>
                </div>
                <div class="dropdown d-md-flex header-settings">
                    <a href="#" class="nav-link icon" data-toggle="sidebar-right" data-target=".sidebar-right">
                        <i class="fe fe-align-right header-icons"></i>
                    </a>
                </div>
                <button class="navbar-toggler navresponsive-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fe fe-more-vertical header-icons navbar-toggler-icon"></i>
                </button><!-- Navresponsive closed -->
            </div>
        </div>
    </div>
</div>
