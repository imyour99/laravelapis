<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
     <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
        <!-- Icons css-->
        <link href="{{ asset('public/assets/plugins/web-fonts/icons.css') }}" rel="stylesheet"/>
        <link href="{{ asset('public/assets/plugins/web-fonts/font-awesome/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('public/assets/plugins/web-fonts/plugin.css" rel="stylesheet') }}"/>

        <!-- Style css-->
        <link href="{{ asset('public/assets/css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('public/assets/css/custom.css') }}" rel="stylesheet">
        <link href="{{ asset('public/assets/css/skins.css') }}" rel="stylesheet">
        <link href="{{ asset('public/assets/css/dark-style.css') }}" rel="stylesheet">
        <link href="{{ asset('public/assets/css/colors/default.css') }}" rel="stylesheet">
        <link href="{{ asset('public/assets/scss/style.css') }}" rel="stylesheet">

        <!-- Color css-->
        <link id="theme" rel="stylesheet" type="text/css" media="all" href="{{ asset('assets/css/colors/color.css') }}">

        <!-- Select2 css-->
        <link href="{{ asset('public/assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">

        <!-- Mutipleselect css-->
        <!-- <link rel="stylesheet" href="assets/plugins/multipleselect/multiple-select.css"> -->

        <!-- Sidemenu css-->
        <link href="{{ asset('public/assets/css/sidemenu/sidemenu.css')}}" rel="stylesheet">

        <!-- Internal DataTables css-->
        <link href="{{ asset('public/assets/plugins/datatable/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
        <link href="{{ asset('public/assets/plugins/datatable/responsivebootstrap4.min.css')}}" rel="stylesheet" />
        <link href="{{ asset('public/assets/plugins/datatable/fileexport/buttons.bootstrap4.min.css')}}" rel="stylesheet" />

        <!-- Jquery js-->
        <script src="{{ asset('public/assets/plugins/jquery/jquery.min.js')}}"></script>

        <!-- Bootstrap js-->
        <script src="{{ asset('public/assets/plugins/bootstrap/js/popper.min.js')}}"></script>
        <script src="{{ asset('public/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

        <!-- Internal Data Table js -->
        <script src="{{ asset('public/assets/plugins/datatable/jquery.dataTables.min.js')}}"></script>
        <script src="{{ asset('public/assets/plugins/datatable/dataTables.bootstrap4.min.js')}}"></script>
        <script src="{{ asset('public/assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
        <script src="{{ asset('public/assets/plugins/datatable/fileexport/dataTables.buttons.min.js')}}"></script>
        <script src="{{ asset('public/assets/plugins/datatable/fileexport/buttons.bootstrap4.min.js')}}"></script>
        <script src="{{ asset('public/assets/plugins/datatable/fileexport/jszip.min.js')}}"></script>
        <script src="{{ asset('public/assets/plugins/datatable/fileexport/pdfmake.min.js')}}"></script>
        <script src="{{ asset('public/assets/plugins/datatable/fileexport/vfs_fonts.js')}}"></script>
        <script src="{{ asset('public/assets/plugins/datatable/fileexport/buttons.html5.min.js')}}"></script>
        <script src="{{ asset('public/assets/plugins/datatable/fileexport/buttons.print.min.js')}}"></script>
        <script src="{{ asset('public/assets/plugins/datatable/fileexport/buttons.colVis.min.js')}}"></script>
        <script src="{{ asset('public/assets/js/table-data.js')}}"></script>

        <!-- Internal Chart.Bundle js-->
        <!-- <script src="assets/plugins/chart.js/Chart.bundle.min.js"></script> -->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
        <script src="{{ asset('public/assets/plugins/chart.js/chartjs-plugin-datalabels.min.js')}}"></script>
        <script src="{{ asset('public/assets/plugins/chart.js/chartjs-plugin-piechart-outlabels.js')}}"></script>
        <!-- <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@0.2.0/dist/chartjs-plugin-datalabels.min.js"></script> -->

        <!-- Peity js-->
        <script src="{{ asset('public/assets/plugins/peity/jquery.peity.min.js')}}"></script>

        <!-- Select2 js-->
        <script src="{{ asset('public/assets/plugins/select2/js/select2.min.js')}}"></script>

        <!-- Perfect-scrollbar js -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.3/perfect-scrollbar.min.js" integrity="sha512-X41/A5OSxoi5uqtS6Krhqz8QyyD8E/ZbN7B4IaBSgqPLRbWVuXJXr9UwOujstj71SoVxh5vxgy7kmtd17xrJRw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-piechart-outlabels"></script> -->

        <!-- Sidemenu js -->
        <script src="{{ asset('public/assets/plugins/sidemenu/sidemenu.js')}}"></script>

        <!-- Sidebar js -->
        <script src="{{ asset('public/assets/plugins/sidebar/sidebar.js')}}"></script>

        <!-- Internal Dashboard js-->
        <script src="{{ asset('public/assets/js/index.js')}}"></script>

        <!-- Sticky js -->
        <script src="{{ asset('public/assets/js/sticky.js')}}"></script>

        <!-- Custom js -->
        <script src="{{ asset('public/assets/js/custom.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.js"></script>
</head>
<body>

<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" style="display:none">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="">
            @yield('content')
        </main>

</div>

</body>
</html>
