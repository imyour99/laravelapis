@extends('common-layout/master')
@section('data-content')
    <?php
    if(isset($_GET['openmodal'])){
    $id = $_GET['openmodal'];
    ?>
    <script>
        $(function () {
            var newid = "{{ $id }}"
            $('#agencesDetailsModal_' + newid).modal('show');
        });
    </script>
    <?php
    }
    ?>
    <link rel="stylesheet" href="https://cdn.rawgit.com/openlayers/openlayers.github.io/master/en/v5.3.0/css/ol.css"
          type="text/css">
    <script src="https://cdn.rawgit.com/openlayers/openlayers.github.io/master/en/v5.3.0/build/ol.js"></script>
    <!-- row -->
    <div class="row row-sm mt-4">
        <div class="col-lg-2 col-sm-2">
            <strong class="tx-16 black-text font-weight-bold user-fullname">AGENCES</strong>
        </div>
        <div class="col-lg-3 col-sm-3">
        </div>
        <!--
                                                            <div class="col-lg-4 col-sm-4 mb-2" style="margin-top:-8px">
                                                                    <div class="row mr-1">
                                                                        <div class="col-lg-2">
                                                                        </div>
                                                                        <div class="col-lg-5" style="margin-top:-3px">
                                                                            <a href="javascript:void(0);" class="btn-blue-white float-right" style="margin-left: unset;" data-toggle="modal" data-target="#add-agency-modal">
                                                                                Ajouter agence
                                                                            </a>
                                                                        </div>
                                                                        <div class="col-lg-5" style="margin-top:-3px">
                                                                            <a href="AgencyExport" class="btn-white-blue float-right px-4">Exporter agence</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                    -->
        <div class="col-lg-4 col-sm-6 mb-2" style="margin-top:-8px">
            <div class="float-right">
                <a href="javascript:void(0);" class="btn-blue-white mr-2" style="margin-left: unset;"
                   data-toggle="modal"
                   data-target="#add-agency-modal">Ajouter agence</a>
                <a href="AgencyExport" class="btn-white-blue ml-2 px-4" style="height: 32px;">Exporter agence</a>
            </div>
        </div>
    </div>

    <div class="row mt-2">
        <div class="col-lg-9">
            <div class="rounded-corner bg-white px-2">
                <div class="table-responsive">
                    <table class="table table-striped w-100" id="clientDataTable" style="width:100%">
                        <thead>
                        <tr>
                            <th class="wd-15p">Nom</th>
                            <th class="wd-15p">Address</th>
                            <th class="wd-20p">Code Postal</th>
                            <th class="wd-25p">N Agency</th>
                            <th class="wd-15p">Responsable</th>
                            <th class="wd-15p">N Responsable</th>
                            <th class="wd-15p">Status</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach ($data as $agent)
                            <tr data-toggle="modal" data-target="#planifier-modal_{{ $agent->id }}">
                                <td>{{ $agent->agencenom }}</td>
                                <td>{{ $agent->agenceaddress }}</td>
                                <td>{{ $agent->postal_code }}</td>
                                <td>{{ $agent->telagency }}</td>
                                <td>{{ $agent->responsible }}</td>
                                <td>{{ $agent->telresponsible }}</td>
                                <td>
                                    <a data-toggle="modal" data-target="#agencesDetailsModal_{{ $agent->id }}">
                                            <span class="active-green font-weight-bold">
                                                <i class="fa fa-circle"></i>
                                            </span>
                                    </a>
                                    @include('agences.Edit_agency')

                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        @include('agences.agences_filter')
    </div>

    <!--model-->
    <!--model-->
    <div class="modal fade view-formation-modal" id="add-agency-modal" tabindex="-1" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <form method="post" id="FsubmitAgency" name="FsubmitAgency" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header pb-0">
                        <h5 class="modal-title">AJOUTER UNE AGENCE</h5>
                        <button class="btn btn-lightblue float-right mr-5" id='SubmitAgencyData'>Ajouter agence</button>
                        <button type="button" class="close btn-blue-white" data-dismiss="modal" aria-label="Close"
                                style="color:#009CDE !important; padding:8px;font-weight:normal;"><span
                                aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Nom de l’agence</label>
                                    <input type="text" name="nomDeagency" id="nomDeagency" class="form-control"
                                           placeholder="AGENCE">
                                </div>

                                <div class="form-group">
                                    <label>Adresse de l'agence</label>
                                    <input type="text" name="agenceaddress" id="agenceaddress" class="form-control mb-1"
                                           placeholder="RUE">
                                    <input type="text" name="agencebat" id="agencebat" class="form-control mb-1"
                                           placeholder="BAT">
                                    <div class="row">
                                        <div class="col-lg-5 col-sm-5">
                                            <input type="text" name="postalCode" id="postalCode"
                                                   class="form-control mb-1"
                                                   placeholder="0000">
                                        </div>
                                        <div class="col-lg-7 col-sm-7">
                                            <select class="form-control mb-1" name="agencyCity" id="agencyCity">
                                                <option>City</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Nom du responsable</label>
                                    <input type="text" name="NomDuresponsable" id="NomDuresponsable"
                                           class="form-control"
                                           placeholder="RESPONSABLE">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Tél. agence</label>
                                    <input type="text" name="TelAgency" id="TelAgency" class="form-control"
                                           placeholder="00 00 00 00 00">
                                </div>

                                <div class="form-group">
                                    <label>Tél. service client</label>
                                    <input type="text" name="TelServiceClinet" id="TelServiceClinet"
                                           class="form-control"
                                           placeholder="00 00 00 00 00">
                                </div>

                                <div class="form-group">
                                    <label>Email de l'agence</label>
                                    <input type="text" name="agnecyEmail" id="agnecyEmail" class="form-control"
                                           placeholder="xxxxxxxxxxxx@xxxxxxxx.xxx">
                                </div>
                                <div class="form-group mt-4">
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-6 ">
                                            <label>Tél. responsable</label>
                                            <input type="text" name="ResponsbleTel" id="ResponsbleTel"
                                                   class="form-control mb-1" placeholder="00 00 00 00 00">
                                        </div>
                                        <div class="col-lg-6 col-sm-6">
                                            <label>Email responsable</label>
                                            <input type="text" name="emailResponsble" id="emailResponsble"
                                                   class="form-control mb-1" placeholder="xxxxxxxxxxxx@xxxxxxxx.xxx">
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Ajouter des photos</label>
                                    <div
                                        style="border: 1px solid #e5e5e5;height: 100%;padding: 5px;border-radius: 10px;">
                                        <div class="add-agances-custom-scrollbar">
                                            <div class="row">
                                                <div class="col-lg-5 col-sm-5">
                                                    <div class="form-group">
                                                        <div class="upload-bx lightgray-upload-bx">
                                                            <img id="imgPreview1" name="imgPreview1"
                                                                 src="{{ asset('public/assets/img/icons/plus_grey.png') }}"/>
                                                        </div>
                                                        <input type="file" id="agencyImage1" name="agencyImage1"
                                                               class="hide-file-input">
                                                    </div>
                                                </div>
                                                <div class="col-lg-7 col-sm-7 pl-0 pr-4">
                                                    <div class="form-group mt-3">
                                                        <label>Nom</label>
                                                        <input type="text" name="agencyName1" id="agencyName1"
                                                               class="form-control" placeholder="AGENCE">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-5 col-sm-5">
                                                    <div class="form-group">
                                                        <div class="upload-bx lightgray-upload-bx">
                                                            <img id="imgPreview2" name="imgPreview2"
                                                                 src="{{ asset('public/assets/img/icons/plus_grey.png') }}"/>
                                                        </div>
                                                        <input type="file" id="agencyImage2" name="agencyImage2"
                                                               class="hide-file-input">
                                                    </div>
                                                </div>
                                                <div class="col-lg-7 col-sm-7 pl-0 pr-4">
                                                    <div class="form-group mt-3">
                                                        <label>Nom</label>
                                                        <input type="text" name="agencyName2" id="agencyName2"
                                                               class="form-control" placeholder="AGENCE">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-5 col-sm-5">
                                                    <div class="form-group">
                                                        <div class="upload-bx lightgray-upload-bx">
                                                            <img id="imgPreview3" name="imgPreview3"
                                                                 src="{{ asset('public/assets/img/icons/plus_grey.png') }}"/>
                                                        </div>
                                                        <input type="file" id="agencyImage3" name="agencyImage3"
                                                               class="hide-file-input">
                                                    </div>
                                                </div>
                                                <div class="col-lg-7 col-sm-7 pl-0 pr-4">
                                                    <div class="form-group mt-3">
                                                        <label>Nom</label>
                                                        <input type="text" name="agencyName3" id="agencyName3"
                                                               class="form-control" placeholder="AGENCE">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>

    </div>
    </div>
    <!--model-->


    <script type="text/javascript">
        $(document).ready(function () {
            $(".upload-bx").click(function () {
                $(this).next().trigger("click");
            });

            $('#view-formation-modal').on('shown.bs.modal', function () {
                $('#add-technician-modal').modal('hide');
            });

            $('.bar-from,.bar-to').datepicker({
                dateFormat: 'dd-M-yy',
                minDate: 1,
                todayHighlight: true
            });

            $('.date-icon1').on('click', function () {
                $('.bar-from').focus();
            });

            $('.date-icon2').on('click', function () {
                $('.bar-to').focus();
            });



            $('#agencyImage1').change(function () {
                const file = this.files[0];
                console.log(file);
                if (file) {
                    let reader = new FileReader();
                    reader.onload = function (event) {
                        console.log(event.target.result);
                        $('#imgPreview1').attr('src', event.target.result);
                    }
                    reader.readAsDataURL(file);
                }
            });


            $('#agencyImage2').change(function () {
                const file = this.files[0];
                console.log(file);
                if (file) {
                    let reader = new FileReader();
                    reader.onload = function (event) {
                        console.log(event.target.result);
                        $('#imgPreview2').attr('src', event.target.result);
                    }
                    reader.readAsDataURL(file);
                }
            });

            $('#agencyImage3').change(function () {
                const file = this.files[0];
                console.log(file);
                if (file) {
                    let reader = new FileReader();
                    reader.onload = function (event) {
                        console.log(event.target.result);
                        $('#imgPreview3').attr('src', event.target.result);
                    }
                    reader.readAsDataURL(file);
                }
            });

        });


        $('#clientDataTable').dataTable({
            "pageLength": 25
        });
        $('#clientDataTable_length').hide();
        $('#clientDataTable_filter').hide();

        $(document).ready(function () {

            $(".upload-bx1").click(function () {
                var image_id = $(this).data('file-id');
                $(this).next().trigger("click");
            });

            $(".upload-bx2").click(function () {
                var image_id = $(this).data('file-id');
                $(this).next().trigger("click");
            });
            $(".upload-bx3").click(function () {
                var image_id = $(this).data('file-id');
                $(this).next().trigger("click");
            });

            $('#view-formation-modal').on('shown.bs.modal', function () {
                $('#add-technician-modal').modal('hide');
            });

            $('.bar-from,.bar-to').datepicker({
                dateFormat: 'dd-M-yy',
                minDate: 1
            });

            $('.date-icon1').on('click', function () {
                $('.bar-from').focus();
            });

            $('.date-icon2').on('click', function () {
                $('.bar-to').focus();
            });
        });


        $('#FsubmitAgency').submit(function (event) {
            event.preventDefault();
            //    var formData = $("#FsubmitAgency").serialize();
            var data = new FormData();
            $.each($(':input', FsubmitAgency), function (i, fileds) {
                data.append($(fileds).attr('name'), $(fileds).val());
            });

            var file_dataimg1 = $('#agencyImage1').prop('files')[0];
            data.append('agencyImage1', file_dataimg1);

            var file_dataimg2 = $('#agencyImage2').prop('files')[0];
            data.append('agencyImage2', file_dataimg2);

            var file_dataimg3 = $('#agencyImage3').prop('files')[0];
            data.append('agencyImage3', file_dataimg3);

            $.ajax({
                url: "{{ url('SubmitAgency') }}",
                type: 'POST',
                data: data,
                cache: false,
                processData: false,
                contentType: false,
                success: function (result) {
                    if (result == 1) {

                        alert("Agency submitted succesfully");
                        location.reload();
                    }

                },
                error: function (data) {
                    console.log(data);
                }
            });

        });
    </script>
    <script>
        function AgencyCommentData(id) {
            var formData = {
                "_token": "{{ csrf_token() }}",
                agencyCmmtid: id,
                agencyTitle: $("#agencyTitlecommnet_" + id).val(),
                CommentDescription: $("#CommentDescription_" + id).val()
            };
            console.log(formData);
            $.ajax({
                url: "{{ url('/SubmitAgencyCmments') }}",
                type: 'POST',
                data: formData,
                success: function (result) {
                    var url = "{{ url('/agences') }}";
                    window.location = url + "?openmodal=" + result.modal_id;
                },
                error: function (data) {
                    console.log(data);
                }
            });
        }
    </script>


    <script>
        function UploadAgencyImage1(id) {
            //console.log($('#img11_' + id));
            var file = $('#img1_' + id)[0].files[0];
            var file_data = $('#img1_' + id).prop('files')[0];
            var form_data = new FormData();
            form_data.append('Firstagencyfile', file_data);
            form_data.append('id', id);
            form_data.append('_token', $("input[name=_token]").val());
            //formData.append("file", );
            if (file) {
                let reader = new FileReader();
                reader.onload = function (event) {
                    if(file.type == "image/png" || file.type == "image/jpg" || file.type == "image/jpeg")
                    {
                        $('#imgPreview1_' + id).attr('src', event.target.result);
                        $('#imgPreview1_' + id).removeClass("plus-img");
                        $('#imgPreview1_' + id).css("width", "100%");
                        $('#imgPreview1_' + id).css("height", "100%");
                    }
                }
                reader.readAsDataURL(file);
                $.ajax({
                    url: "{{ url('StoreAgencyFirstPiece') }}",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    method: 'POST',
                    data: form_data,
                    processData: false,
                    contentType: false,
                    //dataType: 'json',
                    success: function (response) {
                        // alert("Agency submitted succesfully");
                        var url = "{{ url('/agences') }}";
                        window.location = url + "?openmodal=" + response.modal_id;
                    }
                })

            }
        }


        function UploadAgencyImage2(id) {
            //console.log($('#img11_' + id));
            var file = $('#img2_' + id)[0].files[0];
            var file_data = $('#img2_' + id).prop('files')[0];
            var form_data = new FormData();
            form_data.append('Secondagencyfile', file_data);
            form_data.append('id', id);
            form_data.append('_token', $("input[name=_token]").val());
            if (file) {
                let reader = new FileReader();
                reader.onload = function (event) {

                    if(file.type == "image/png" || file.type == "image/jpg" || file.type == "image/jpeg")
                    {
                        $('#imgPreview2_' + id).attr('src', event.target.result);
                        $('#imgPreview2_' + id).removeClass("plus-img");
                        $('#imgPreview2_' + id).css("width", "100%");
                        $('#imgPreview2_' + id).css("height", "100%");
                    }
                }
                reader.readAsDataURL(file);

                $.ajax({
                    url: "{{ url('StoreAgencySecondPiece') }}",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    method: 'POST',
                    //                data: {"_token": "{{ csrf_token() }}","AgencyId":id,"file":$('#img11_' + id)[0].files},
                    data: form_data,
                    processData: false,
                    contentType: false,
                    //dataType: 'json',

                    success: function (response) {
                        // alert("Agency submitted succesfully");
                        var url = "{{ url('/agences') }}";
                        window.location = url + "?openmodal=" + response.modal_id;
                    }
                })

            }
        }

        function UploadAgencyImage3(id) {
            var file = $('#img11_' + id)[0].files[0];
            var file_data = $('#img11_' + id).prop('files')[0];
            var form_data = new FormData();
            form_data.append('Thirdagencyfile', file_data);
            form_data.append('id', id);
            form_data.append('_token', $("input[name=_token]").val());
            //formData.append("file", );
            if (file) {
                let reader = new FileReader();
                reader.onload = function (event) {

                    if(file.type == "image/png" || file.type == "image/jpg" || file.type == "image/jpeg")
                    {
                        $('#imgPreview11_' + id).attr('src', event.target.result);
                        $('#imgPreview11_' + id).removeClass("plus-img");
                        $('#imgPreview11_' + id).css("width", "100%");
                        $('#imgPreview11_' + id).css("height", "100%");
                    }


                }
                reader.readAsDataURL(file);

                $.ajax({
                    url: "{{ url('StoreAgencyPieceJoints') }}",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    method: 'POST',
                    data: form_data,
                    processData: false,
                    contentType: false,
                    success: function (response) {
                        // alert("Agency submitted succesfully");
                        var url = "{{ url('/agences') }}";
                        window.location = url + "?openmodal=" + response.modal_id;
                    }
                })

            }
        }
    </script>
@endsection
