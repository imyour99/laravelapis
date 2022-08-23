<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="description" content="Spruha -  Admin Panel HTML Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords"
        content="admin,dashboard,panel,bootstrap admin template,bootstrap dashboard,dashboard,themeforest admin dashboard,themeforest admin,themeforest dashboard,themeforest admin panel,themeforest admin template,themeforest admin dashboard,cool admin,it dashboard,admin design,dash templates,saas dashboard,dmin ui design">
    <!-- Favicon -->
    {{-- <link rel="icon" href="{{ asset('public/assets/img/logo/fav-ico.svg') }}" type="image/x-icon" /> --}}
    <!-- Favicon -->
    <!-- Title -->
    <title>IMC Telecom</title>


    <!-- Bootstrap css-->
    <link href="{{ asset('public/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <!-- Icons css-->
    <link href="{{ asset('public/assets/plugins/web-fonts/icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/assets/plugins/web-fonts/font-awesome/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/plugins/web-fonts/plugin.css') }}" rel="stylesheet" />

    <!-- Style css-->
    <link href="{{ asset('public/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/css/skins.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/css/dark-style.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/css/colors/default.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/scss/style.css') }}" rel="stylesheet">

    <!-- Color css-->
    <link id="theme" rel="stylesheet" type="text/css" media="all"
        href="{{ asset('public/assets/css/colors/color.css') }}">
    <!-- Select2 css-->
    <link href="{{ asset('public/assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
    <!-- Mutipleselect css-->
    <!-- <link rel="stylesheet" href="assets/plugins/multipleselect/multiple-select.css"> -->
    <!-- Sidemenu css-->
    <link href="{{ asset('public/assets/css/sidemenu/sidemenu.css') }}" rel="stylesheet">

    <!-- Internal DataTables css-->

    <link href="{{ asset('public/assets/plugins/datatable/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/assets/plugins/datatable/responsivebootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/assets/plugins/datatable/fileexport/buttons.bootstrap4.min.css') }}"
        rel="stylesheet" />




    <!-- Jquery js-->
    <script src="{{ asset('public/assets/plugins/jquery/jquery.min.js') }}"></script>


    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    {{-- <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" /> --}}


    <script src="{{ asset('public/assets/plugins/calendar/calendar.js') }}"></script>

    <!-- CKEditor js-->
    <script src="{{ asset('public/assets/plugins/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('public/assets/plugins/ckeditor/samples/js/sample.js') }}"></script>
    <!-- Bootstrap js-->
    <script src="{{ asset('public/assets/plugins/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('public/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- Internal Data Table js -->
    <script src="{{ asset('public/assets/plugins/datatable/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('public/assets/plugins/datatable/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('public/assets/plugins/datatable/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('public/assets/plugins/datatable/fileexport/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('public/assets/plugins/datatable/fileexport/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('public/assets/plugins/datatable/fileexport/jszip.min.js') }}"></script>
    <script src="{{ asset('public/assets/plugins/datatable/fileexport/pdfmake.min.js') }}"></script>
    <script src="{{ asset('public/assets/plugins/datatable/fileexport/vfs_fonts.js') }}"></script>
    <script src="{{ asset('public/assets/plugins/datatable/fileexport/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('public/assets/plugins/datatable/fileexport/buttons.print.min.js') }}"></script>
    <script src="{{ asset('public/assets/plugins/datatable/fileexport/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/table-data.js') }}"></script>


    <link href="{{ asset('public/assets/dselect.css') }}" rel="stylesheet">
    <script src="{{ asset('public/assets/dselect.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <script src="{{ asset('public/assets/plugins/chart.js/chartjs-plugin-datalabels.min.js') }}"></script>
    <script src="{{ asset('public/assets/plugins/chart.js/chartjs-plugin-piechart-outlabels.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@0.2.0/dist/chartjs-plugin-datalabels.min.js">
    </script>

    <!-- Peity js-->
    <script src="{{ asset('public/assets/plugins/peity/jquery.peity.min.js') }}"></script>

    <!-- Select2 js-->
    <script src="{{ asset('public/assets/plugins/select2/js/select2.min.js') }}"></script>

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css"
        integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"
        integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-piechart-outlabels"></script> -->

    <!-- Sidemenu js -->
    <script src="{{ asset('public/assets/plugins/sidemenu/sidemenu.js') }}"></script>
    <!-- Sidebar js -->
    <script src="{{ asset('public/assets/plugins/sidebar/sidebar.js') }}"></script>
    <!-- Internal Dashboard js-->
    <script src="{{ asset('public/assets/js/index.js') }}"></script>
    <!-- Sticky js -->
    <script src="{{ asset('public/assets/js/sticky.js') }}"></script>
    <!-- Custom js -->
    <script src="{{ asset('public/assets/js/custom.js') }}"></script>

    <script type="text/javascript">
        var siteUrl = "{{ url('/') }}";
    </script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>

</head>

<body class="main-body leftmenu main-sidebar-hide">
    <!-- Loader -->
    <div id="global-loader">
        <img src="{{ asset('public/assets/img/loader.svg') }}" class="loader-img" alt="Loader">
    </div>
    <!-- End Loader -->
    <!-- Page -->
    <div class="page pt-0">


        @include('common-layout.leftbar')
        <!-- End Sidemenu -->
        <!-- Main Header-->
        @include('common-layout.header')



        <div class="main-content side-content pt-5 dashboard-div">
            <div class="container-fluid">
                <div class="inner-body">
                    @yield('data-content')
                </div>
            </div>
        </div>

        <!-- Sidebar -->
        <div class="sidebar sidebar-right sidebar-animate">
            <div class="sidebar-icon sidebar-icon-right">
                <a href="#" class="text-right text-dark fs-20" data-toggle="sidebar-right" data-target=".sidebar-right">
                    <!-- <i class="fe fe-x"></i> -->
                    <img src="{{ asset('public/assets/img/media/arrow-left-circle-fill.png') }}">
                </a>
            </div>
            <div class="sidebar-body ">
                <div class="d-flex p-3">
                    <ul class="right-sidebar navigation">
                        <li><a href="#">ENEDIS LINKY</a>
                            <hr>
                        </li>
                        <li><a href="#">ENEDIS BRT</a>
                            <hr>
                        </li>
                        <li><a href="#">ENEDIS IP-TLR</a>
                            <hr>
                        </li>
                        <li><a href="#">ENEDIS COLONNES MONT.</a>
                            <hr>
                        </li>
                        <li><a href="#">IRVE</a>
                            <hr>
                        </li>
                        <li><a href="#">PARTICULIERS</a>
                            <hr>
                        </li>
                        <li><a href="#">PROFESSIONNELS</a>
                            <hr>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="sidebar-footer">
                <a href="{{ route('logout') }}" class="" data-toggle="sidebar-right"
                    data-target=".sidebar-right">
                    <img src="{{ asset('public/assets/img/media/ic_logout.png') }}" class="mr-2"> SE
                    DECONNECTER
                </a>
            </div>
        </div>


    </div>
    <!-- End Sidebar -->

    </div>
    <!-- End Page -->

    <!-- Back-to-top -->
    <a href="#top" id="back-to-top"><i class="fe fe-arrow-up"></i></a>
    <script type="text/javascript">
        $('.with-sub').click(function() {
            var navItems = $('.nav-item');

            $.each(navItems, function() {
                $(this).removeClass('active');
            });

            $(this).parent().addClass('active');
        });
    </script>
    @yield('admin-js')
</body>

</html>
