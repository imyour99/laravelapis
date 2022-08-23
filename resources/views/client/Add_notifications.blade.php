<div class="modal fade" id="notification-modal_{{ $client->id }}" tabindex="-1" role="dialog"
    aria-labelledby="notification-modal_{{ $client->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document" style="max-width: 70rem;">
        <div class="modal-content">
            <div class="modal-body">
                <form method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{$client->id}}" name="client_id_{{$client->id}}" id="client_id_{{$client->id}}">
                    <div class="row mb-5">
                        <div class="col-lg-9 col-md-9 col-sm-9">
                            <strong>AJOUTER UNE NOTIFICATION</strong>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <!--                            <a href="javascript:void(0)" class="btn btn-lightblue px-4" data-toggle="modal" data-target="#notification-ajouter-modal" style="line-height: 2;">Ajouter</a>
                            <a class="modal-close" style="float:right;margin-top: -11px;" href="javascript:void(0)"><img src="assets/img/media/bigger-close.png" style="width:70px" /></a>-->

                            <button class="btn btn-lightblue px-4"
                                id='SubmitAgencyData_{{ $client->id }}'>Ajouter</button>
                            <button type="button" class="close btn-blue-white" data-dismiss="modal" aria-label="Close"
                                style="color:#009CDE !important; padding:8px;font-weight:normal;"><span
                                    aria-hidden="true">&times;</span></button>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-4 col-md-4">
                            <div class="row mb-3">
                                <div class="col-lg-12 col-md-12">
                                    <label>Nature</label>
                                    <select name="NatureNotfctn_{{ $client->id }}"
                                        id="NatureNotfctn_{{ $client->id }}" class="form-control">
                                        <option>Notification1</option>
                                        <option>Notification2</option>
                                        <option>Notification3</option>
                                        <option>Notification4</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-lg-12 col-md-12">
                                    <label>Criticité</label>
                                    <select name="criticality_{{ $client->id }}" id="criticality_{{ $client->id }}"
                                        class="form-control">
                                        <option>Criticité1</option>
                                        <option>Criticité2</option>
                                        <option>Criticité3</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-lg-12 col-md-12">
                                    <label>Commentaire/Probléme</label>
                                    <textarea placeholder="Texte..." id="notificatnDes_{{ $client->id }}" name="notificatnDes_{{ $client->id }}"
                                        class="form-control" rows="5"></textarea>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-4 col-md-4">
                            <div class="form-group">
                                <label>Notifier à: <span class="red_color">*</span></label>
                                <div class="search-container">
                                    <i class="fa" aria-hidden="true">
                                        <img src="{{ asset('public/assets/img/icons/search-blue.png') }}">
                                    </i>
                                    <input type="text" name="search" class="form-control search_{{ $client->id }}"
                                        placeholder="Recherche collaborateurs..."
                                        data-parsley-required-message="Veuillez entrer Notifier à">
                                </div>
                                <div class="pt-2 pb-2 pr-2 mt-1" style="border: 1px solid #e5e5e5;border-radius: 10px;">
                                    <div class="min-height-scroll-table-container">
                                        <div class="card-body p-0 px-2 collaborator_check_{{ $client->id }}">

                                            @php
                                                $collaborations = DB::table('llx_collaboration')
                                                    ->orderBy('id', 'DESC')
                                                    ->get();
                                            @endphp

                                            @foreach ($collaborations as $collaboration)
                                                <label class="ckbox my-2">
                                                    <input type="checkbox" class="notier_{{ $client->id }}"
                                                        name="notier_{{ $client->id }}[]"
                                                        id="notier_{{ $client->id }}"
                                                        value="{{ $collaboration->nom }} {{ $collaboration->prenom }}"><span>{{ $collaboration->nom }}
                                                        {{ $collaboration->prenom }}</span></label>
                                            @endforeach
                                        </div>
                                        <textarea name="" id="notier_values_{{ $client->id }}" style="display: none"></textarea>



                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4">
                            <p>Ajouter des piéces jointes</p>

                            <div class="row mb-4">

                                <div class="col-lg-6 col-md-6 upload-bx1_{{ $client->id }}">
                                    <div class="add-notification ">
                                        <img id="imgPreview1_{{ $client->id }}" name="imgPreview1"
                                            src="assets/img/icons/plus_gray-2.png" />
                                    </div>
                                </div>
                                <input type="file" name="img1_{{ $client->id }}" id="img1_{{ $client->id }}"
                                    onchange="UploadClientImage1({{ $client->id }});" class="hide-file-input img11">

                                <div class="col-lg-6 col-md-6 upload-bx2_{{ $client->id }}">
                                    <div class="add-notification ">
                                        <img id="imgPreview2_{{ $client->id }}"
                                            src="assets/img/icons/plus_gray-2.png" />
                                    </div>
                                </div>
                                <input type="file" name="img2_{{ $client->id }}" name="imgPreview2"
                                    id="img2_{{ $client->id }}" onchange="UploadClientImage2({{ $client->id }});"
                                    class="hide-file-input img11">


                            </div>

                            <div class="row">

                                <div class="col-lg-6 col-md-6 upload-bx3_{{ $client->id }}">
                                    <div class="add-notification ">
                                        <img id="imgPreview3_{{ $client->id }}" name="imgPreview3"
                                            src="assets/img/icons/plus_gray-2.png" />
                                    </div>
                                </div>
                                <input type="file" name="img3_{{ $client->id }}" id="img3_{{ $client->id }}"
                                    onchange="UploadClientImage3({{ $client->id }});" class="hide-file-input img11">


                                <div class="col-lg-6 col-md-6 upload-bx4_{{ $client->id }}">
                                    <div class="add-notification ">
                                        <img id="imgPreview4_{{ $client->id }}"
                                            src="assets/img/icons/plus_gray-2.png" />
                                    </div>
                                </div>
                                <input type="file" name="img4_{{ $client->id }}" id="img4_{{ $client->id }}"
                                    onchange="UploadClientImage4({{ $client->id }});" class="hide-file-input img11">


                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="notification-ajouter-modal" tabindex="-1" role="dialog"
    aria-labelledby="technicien-modal" aria-hidden="true">
    <div class="modal-dialog" role="document" style="max-width: 32rem;">
        <div class="modal-content">

            <div class="modal-body">

                <div class="row">

                    <div class="col-lg-12 col-md-12 col-sm-12 d-flex justify-content-center mt-3">
                        <img src="assets/img/icons/checkblue.png" />
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 d-flex justify-content-center mt-5">
                        <h2 class="ajoutee-title"><strong class="">Notification ajoutée!</strong></h2>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 d-flex justify-content-center mt-5 mb-4">
                        <a href="javascript:void(0)" class="btn btn-lightblue px-4" style="line-height: 2;">OK</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>


<script>
    $(document).ready(function() {
        $(".upload-bx1_{{ $client->id }}").click(function() {
            var image_id = $(this).data('file-id');
            $(this).next().trigger("click");
        });
        $(".upload-bx2_{{ $client->id }}").click(function() {
            var image_id = $(this).data('file-id');
            $(this).next().trigger("click");
        });
        $(".upload-bx3_{{ $client->id }}").click(function() {
            var image_id = $(this).data('file-id');
            $(this).next().trigger("click");
        });
        $(".upload-bx4_{{ $client->id }}").click(function() {
            var image_id = $(this).data('file-id');
            $(this).next().trigger("click");
        });
    });
    $(document).ready(function() {
        $(".search").keyup(function() {
            var queries = $(this).val();
            var _token = $('input[name="_token"]').val();

            $.ajax({

                url: "{{ route('collaboration.absence.collaboration_search') }}",
                method: 'POST',
                data: {
                    queries: queries,
                    _token: _token
                },
                dataType: 'json',
                success: function(data) {
                    console.log(data.records);
                    $('.collaborator_check').html(data.records);
                }

            });
        });
    });

    function UploadClientImage1(id) {
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
            reader.onload = function(event) {
                $('#imgPreview1_' + id).attr('src', event.target.result);
                //                    $('#imgPreview1_' + id).removeClass("plus-img");
                $('#imgPreview1_' + id).css("max-width", "125px");
                $('#imgPreview1_' + id).css("width", "125px");
                $('#imgPreview1_' + id).css("margin-left", "-50px");
                //                    $('#imgPreview1_' + id).css("height", "100%");
            }
            reader.readAsDataURL(file);
        }
    }

    function UploadClientImage2(id) {
        //console.log($('#img11_' + id));
        var file = $('#img2_' + id)[0].files[0];
        var file_data = $('#img2_' + id).prop('files')[0];
        var form_data = new FormData();
        form_data.append('Firstagencyfile', file_data);
        form_data.append('id', id);
        form_data.append('_token', $("input[name=_token]").val());
        //formData.append("file", );
        if (file) {
            let reader = new FileReader();
            reader.onload = function(event) {
                $('#imgPreview2_' + id).attr('src', event.target.result);
                //                    $('#imgPreview1_' + id).removeClass("plus-img");
                $('#imgPreview2_' + id).css("max-width", "125px");
                $('#imgPreview2_' + id).css("width", "125px");
                $('#imgPreview2_' + id).css("margin-left", "-50px");
                //                    $('#imgPreview1_' + id).css("height", "100%");
            }
            reader.readAsDataURL(file);
        }
    }

    function UploadClientImage3(id) {
        //console.log($('#img11_' + id));
        var file = $('#img3_' + id)[0].files[0];
        var file_data = $('#img3_' + id).prop('files')[0];
        var form_data = new FormData();
        form_data.append('Firstagencyfile', file_data);
        form_data.append('id', id);
        form_data.append('_token', $("input[name=_token]").val());
        //formData.append("file", );
        if (file) {
            let reader = new FileReader();
            reader.onload = function(event) {
                $('#imgPreview3_' + id).attr('src', event.target.result);
                //                    $('#imgPreview1_' + id).removeClass("plus-img");
                $('#imgPreview3_' + id).css("max-width", "125px");
                $('#imgPreview3_' + id).css("width", "125px");
                $('#imgPreview3_' + id).css("margin-left", "-50px");
                //                    $('#imgPreview1_' + id).css("height", "100%");
            }
            reader.readAsDataURL(file);
        }
    }

    function UploadClientImage4(id) {
        //console.log($('#img11_' + id));
        var file = $('#img4_' + id)[0].files[0];
        var file_data = $('#img4_' + id).prop('files')[0];
        var form_data = new FormData();
        form_data.append('Firstagencyfile', file_data);
        form_data.append('id', id);
        form_data.append('_token', $("input[name=_token]").val());
        //formData.append("file", );
        if (file) {
            let reader = new FileReader();
            reader.onload = function(event) {
                $('#imgPreview4_' + id).attr('src', event.target.result);
                //                    $('#imgPreview1_' + id).removeClass("plus-img");
                $('#imgPreview4_' + id).css("max-width", "125px");
                $('#imgPreview4_' + id).css("width", "125px");
                $('#imgPreview4_' + id).css("margin-left", "-50px");
                //                    $('#imgPreview1_' + id).css("height", "100%");
            }
            reader.readAsDataURL(file);
        }
    }


    $('#SubmitAgencyData_{{ $client->id }}').click(function(event) {



        event.preventDefault();
        var data = new FormData();


        var _token = $('input[name="_token"]').val();

        var client_id = $("#client_id_{{ $client->id }}").val();
        var criticality = $("#criticality_{{ $client->id }}").val();
        var Nature = $("#NatureNotfctn_{{ $client->id }}").val();
        var notificatnDes = $("#notificatnDes_{{ $client->id }}").val();
        var notier = $('#notier_values_{{ $client->id }}').val();

        var file_dataimg1 = $('#img1_{{ $client->id }}').prop('files')[0];
        data.append('Notificationimg1', file_dataimg1);

        var file_dataimg2 = $('#img2_{{ $client->id }}').prop('files')[0];
        data.append('Notificationimg2', file_dataimg2);

        var file_dataimg3 = $('#img3_{{ $client->id }}').prop('files')[0];
        data.append('Notificationimg3', file_dataimg3);

        var file_dataimg3 = $('#img4_{{ $client->id }}').prop('files')[0];
        data.append('Notificationimg4', file_dataimg3);
        data.append('criticality', criticality);
        data.append('Nature', Nature);
        data.append('notificatnDes', notificatnDes);
        data.append('notier', notier);
        data.append('client_id',client_id);
        data.append('_token', _token);

        $.ajax({
            url: "{{ route('AddNotification') }}",
            type: 'POST',
            data: data,
            cache: false,
            processData: false,
            contentType: false,
            success: function(result) {
                if (result == 1) {

                    $.confirm({
                        title: 'Alerte !',
                        content: 'Notification envoyée avec succès',
                        buttons: {
                            cancel: function() {
                                //$.alert('You are safe!');
                            }
                        }
                    });

                    location.reload();
                }

            },
            error: function(data) {
                console.log(data);
            }
        });

    });
</script>

<script>
    fetch_collaboration_data();

    function fetch_collaboration_data(queries = '') {

    }

    $(document).ready(function() {

        $(".search_{{ $client->id }}").keyup(function() {
            var queries = $(this).val();
            var _token = $('input[name="_token"]').val();
            $.ajax({

                url: "{{ route('collaboration.absence.collaboration_search') }}",
                method: 'POST',
                data: {
                    queries: queries,
                    _token: _token
                },
                dataType: 'json',

                success: function(data) {
                    console.log(data.records);

                    $('.collaborator_check_{{ $client->id }}').html(data.records);
                }

            });
        });
    });
</script>
<script>
    $('.notier_{{ $client->id }}').click(function() {

        values = "";
        $('input.notier_{{ $client->id }}:checked').each(function() {
            values += $(this).val() + ", ";
        });
        if (values) {
            $('#notier_values_{{ $client->id }}').html(values);
        } else {
            $('#notier_values_{{ $client->id }}').html("None");
        }

    });
</script>
