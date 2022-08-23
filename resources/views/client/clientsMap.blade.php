@extends('common-layout/master')
@section('data-content')
    {{-- <link rel="stylesheet" href="https://cdn.rawgit.com/openlayers/openlayers.github.io/master/en/v5.3.0/css/ol.css"
        type="text/css">
    <script src="https://cdn.rawgit.com/openlayers/openlayers.github.io/master/en/v5.3.0/build/ol.js"></script> --}}

    <!-- row -->
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
                        <a href="{{ route('clientsList') }}">
                            <img src="{{ asset('public/assets/img/icons/list2.png') }}" />
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
                    <a href="/ClientExport" class="btn-white-blue float-right px-4">
                        Exporter
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-2">
        <div class="col-lg-9">
            <div id="map" style="height: 100%;width: 100%"></div>
        </div>

        <div class="col-lg-3" style="margin-top:-60px">
            <div class="col-white12-col">
                <div class="search-group">
                    <input class="search-input mr-2" type="text" placeholder="Recherche de filtres…." />
                    <button class="button button-brand-primary button-search"><i class="fas fa-redo"></i></button>
                </div>
                <div class="card custom-card overflow-hidden search-filter-options">

                    <div class="card-body px-0 py-5">
                        <!-- accordion -->
                        <div aria-multiselectable="true" class="accordion" id="accordion" role="tablist">
                            <div class="card">
                                <div class="card-header" id="headingOneHIW" role="tab">
                                    <a aria-controls="collapseOneHIW" aria-expanded="true" data-toggle="collapse"
                                        href="#collapseOneHIW">Filtre</a>
                                </div>
                                <div aria-labelledby="headingOneHIW" class="collapse show" data-parent="#accordion"
                                    id="collapseOneHIW" role="tabpanel">
                                    <div class="card-body">
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwoHIW" role="tab">
                                    <a aria-controls="collapseTwoHIW" aria-expanded="false" class="collapsed"
                                        data-toggle="collapse" href="#collapseTwoHIW">Filter</a>
                                </div>
                                <div aria-labelledby="headingTwoHIW" class="collapse" data-parent="#accordion"
                                    id="collapseTwoHIW" role="tabpanel">
                                    <div class="card-body">
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThreeHIW" role="tab">
                                    <a aria-controls="collapseThreeHIW" aria-expanded="false" class="collapsed"
                                        data-toggle="collapse" href="#collapseThreeHIW">Filter</a>
                                </div>
                                <div aria-labelledby="headingThreeHIW" class="collapse" data-parent="#accordion"
                                    id="collapseThreeHIW" role="tabpanel">
                                    <div class="card-body">
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                    </div>
                                </div><!-- collapse -->
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingfourHIW" role="tab">
                                    <a aria-controls="collapsefourHIW" aria-expanded="false" class="collapsed"
                                        data-toggle="collapse" href="#collapsefourHIW">Filter</a>
                                </div>
                                <div aria-labelledby="headingfourHIW" class="collapse" data-parent="#accordion"
                                    id="collapsefourHIW" role="tabpanel">
                                    <div class="card-body">
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                    </div>
                                </div><!-- collapse -->
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingTwoHIW" role="tab">
                                    <a aria-controls="collapseTwoHIW" aria-expanded="false" class="collapsed"
                                        data-toggle="collapse" href="#collapseTwoHIW">Filter</a>
                                </div>
                                <div aria-labelledby="headingTwoHIW" class="collapse" data-parent="#accordion"
                                    id="collapseTwoHIW" role="tabpanel">
                                    <div class="card-body">
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThreeHIW" role="tab">
                                    <a aria-controls="collapseThreeHIW" aria-expanded="false" class="collapsed"
                                        data-toggle="collapse" href="#collapseThreeHIW">Filter</a>
                                </div>
                                <div aria-labelledby="headingThreeHIW" class="collapse" data-parent="#accordion"
                                    id="collapseThreeHIW" role="tabpanel">
                                    <div class="card-body">
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                    </div>
                                </div><!-- collapse -->
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingfourHIW" role="tab">
                                    <a aria-controls="collapsefourHIW" aria-expanded="false" class="collapsed"
                                        data-toggle="collapse" href="#collapsefourHIW">Filter</a>
                                </div>
                                <div aria-labelledby="headingfourHIW" class="collapse" data-parent="#accordion"
                                    id="collapsefourHIW" role="tabpanel">
                                    <div class="card-body">
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                    </div>
                                </div><!-- collapse -->
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwoHIW" role="tab">
                                    <a aria-controls="collapseTwoHIW" aria-expanded="false" class="collapsed"
                                        data-toggle="collapse" href="#collapseTwoHIW">Filter</a>
                                </div>
                                <div aria-labelledby="headingTwoHIW" class="collapse" data-parent="#accordion"
                                    id="collapseTwoHIW" role="tabpanel">
                                    <div class="card-body">
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThreeHIW" role="tab">
                                    <a aria-controls="collapseThreeHIW" aria-expanded="false" class="collapsed"
                                        data-toggle="collapse" href="#collapseThreeHIW">Filter</a>
                                </div>
                                <div aria-labelledby="headingThreeHIW" class="collapse" data-parent="#accordion"
                                    id="collapseThreeHIW" role="tabpanel">
                                    <div class="card-body">
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                    </div>
                                </div><!-- collapse -->
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingfourHIW" role="tab">
                                    <a aria-controls="collapsefourHIW" aria-expanded="false" class="collapsed"
                                        data-toggle="collapse" href="#collapsefourHIW">Filter</a>
                                </div>
                                <div aria-labelledby="headingfourHIW" class="collapse" data-parent="#accordion"
                                    id="collapsefourHIW" role="tabpanel">
                                    <div class="card-body">
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                    </div>
                                </div><!-- collapse -->
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading6" role="tab">
                                    <a aria-controls="collapse6" aria-expanded="false" class="collapsed"
                                        data-toggle="collapse" href="#collapse6">Filter</a>
                                </div>
                                <div aria-labelledby="heading6" class="collapse" data-parent="#accordion"
                                    id="collapse6" role="tabpanel">
                                    <div class="card-body">
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                    </div>
                                </div><!-- collapse -->
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading7" role="tab">
                                    <a aria-controls="collapse7" aria-expanded="false" class="collapsed"
                                        data-toggle="collapse" href="#collapse7">Filter</a>
                                </div>
                                <div aria-labelledby="heading7" class="collapse" data-parent="#accordion"
                                    id="collapse7" role="tabpanel">
                                    <div class="card-body">
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                    </div>
                                </div><!-- collapse -->
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading8" role="tab">
                                    <a aria-controls="collapse8" aria-expanded="false" class="collapsed"
                                        data-toggle="collapse" href="#collapse8">Filter</a>
                                </div>
                                <div aria-labelledby="heading8" class="collapse" data-parent="#accordion"
                                    id="collapse8" role="tabpanel">
                                    <div class="card-body">
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                    </div>
                                </div><!-- collapse -->
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading9" role="tab">
                                    <a aria-controls="collapse9" aria-expanded="false" class="collapsed"
                                        data-toggle="collapse" href="#collapse9">Filter</a>
                                </div>
                                <div aria-labelledby="heading9" class="collapse" data-parent="#accordion"
                                    id="collapse6" role="tabpanel">
                                    <div class="card-body">
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                    </div>
                                </div><!-- collapse -->
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading10" role="tab">
                                    <a aria-controls="collapse10" aria-expanded="false" class="collapsed"
                                        data-toggle="collapse" href="#collapse10">Filter</a>
                                </div>
                                <div aria-labelledby="heading10" class="collapse" data-parent="#accordion"
                                    id="collapse7" role="tabpanel">
                                    <div class="card-body">
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                    </div>
                                </div><!-- collapse -->
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading11" role="tab">
                                    <a aria-controls="collapse11" aria-expanded="false" class="collapsed"
                                        data-toggle="collapse" href="#collapse11">Filter</a>
                                </div>
                                <div aria-labelledby="heading11" class="collapse" data-parent="#accordion"
                                    id="collapse8" role="tabpanel">
                                    <div class="card-body">
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                    </div>
                                </div><!-- collapse -->
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading9" role="tab">
                                    <a aria-controls="collapse9" aria-expanded="false" class="collapsed"
                                        data-toggle="collapse" href="#collapse9">Filter</a>
                                </div>
                                <div aria-labelledby="heading9" class="collapse" data-parent="#accordion"
                                    id="collapse6" role="tabpanel">
                                    <div class="card-body">
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                    </div>
                                </div><!-- collapse -->
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading10" role="tab">
                                    <a aria-controls="collapse10" aria-expanded="false" class="collapsed"
                                        data-toggle="collapse" href="#collapse10">Filter</a>
                                </div>
                                <div aria-labelledby="heading10" class="collapse" data-parent="#accordion"
                                    id="collapse7" role="tabpanel">
                                    <div class="card-body">
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                    </div>
                                </div><!-- collapse -->
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading11" role="tab">
                                    <a aria-controls="collapse11" aria-expanded="false" class="collapsed"
                                        data-toggle="collapse" href="#collapse11">Filter</a>
                                </div>
                                <div aria-labelledby="heading11" class="collapse" data-parent="#accordion"
                                    id="collapse8" role="tabpanel">
                                    <div class="card-body">
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                    </div>
                                </div><!-- collapse -->
                            </div>

                            <div class="card">
                                <div class="card-header" id="heading11" role="tab">
                                    <a aria-controls="collapse11" aria-expanded="false" class="collapsed"
                                        data-toggle="collapse" href="#collapse11">Filter</a>
                                </div>
                                <div aria-labelledby="heading11" class="collapse" data-parent="#accordion"
                                    id="collapse8" role="tabpanel">
                                    <div class="card-body">
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                        <label class="ckbox my-2"><input type="checkbox"><span>Sos
                                                filtre</span></label>
                                    </div>
                                </div><!-- collapse -->
                            </div>
                        </div>
                        <!-- accordion -->
                    </div>
                </div>
            </div>

        </div>
    </div>


    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBHqmol9ZCmFqyUVzbcbgOtCrvx78gl12g&callback=initMap&v=weekly&channel=2"
        async>
    </script>

    <script type="text/javascript">
        $('.tour-switch').click(function() {
            var tourSwitches = $('.tour-switch');

            $.each(tourSwitches, function() {
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
            if ($('.tour-calendar-div').is(':visible'))
                $('.tour-calendar-div').hide();
            else
                $('.tour-calendar-div').show();
        });

        $('#tour-id').click(function() {
            var imgSrc = $('#tour-id img').attr('src');

            if (imgSrc == 'assets/img/icons/blue-plus-white.png') {
                imgSrc = 'assets/img/icons/white-plus-blue.png';
                $('.tour-gray-icons').show();
            } else {
                imgSrc = 'assets/img/icons/blue-plus-white.png';
                $('.tour-gray-icons').hide();
            }

            $('#tour-id img').attr('src', imgSrc);
        });

        // var marker = new google.maps.Marker({
        //   position: coordinates,
        //   map: map,
        //   icon: {
        //     url: "http://maps.google.com/mapfiles/ms/icons/red-dot.png",
        //     labelOrigin: new google.maps.Point(75, 32),
        //     size: new google.maps.Size(32,32),
        //     anchor: new google.maps.Point(16,32)
        //   },
        //   label: {
        //     text: "5409 Madison St",
        //     color: "#C70E20",
        //     fontWeight: "bold"
        //   }
        // });

        function initMap() {
            const myLatLng = {
                lat: 48.86194,
                lng: 2.33871
            };
            const myLatLng2 = {
                lat: 48.8608027,
                lng: 2.3411235
            };
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 17,
                center: myLatLng,
            });

            new google.maps.Marker({
                position: myLatLng,
                map,
                title: "label 8",
                sName: "8",
                icon: {
                    path: google.maps.SymbolPath.CIRCLE,
                    scale: 25,
                    fillColor: "#009cde",
                    fillOpacity: 1,
                    strokeWeight: 0
                },
                label: {
                    text: "8",
                    color: "#FFF",
                    fontWeight: "bold",
                    fontSize: "20px"
                }
            });

            new google.maps.Marker({
                position: myLatLng2,
                map,
                title: "label 25",
                sName: "25",
                icon: {
                    path: google.maps.SymbolPath.CIRCLE,
                    scale: 25,
                    fillColor: "#009cde",
                    fillOpacity: 1,
                    strokeWeight: 0
                },
                label: {
                    text: "25",
                    color: "#FFF",
                    fontWeight: "bold",
                    fontSize: "20px"
                }
            });
        }
    </script>

    <div class="modal fade" id="ImportClientData" tabindex="-1" role="dialog" aria-labelledby="technicien-modal"
        aria-hidden="true">
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
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
