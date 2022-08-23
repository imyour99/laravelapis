<style>
    .modal-xl .modal-header .btn-blue-white {
        right: 16% !important;
    }

    .shadow {
        background: white;
        border-radius: -1px 5px 5px !important;
        box-shadow: 0 -5px 10px -5px #3330 !important;

    }

    .upload-bx {
        border: 1px solid #d3d3d3 !important;
    }

    .min_img_value {
        width: 100px;
        height: 100px;
    }

    .padding_upload-box {
        padding: 39% 10% !important;
    }
</style>

<div class="modal fade" id="view-informatique-modal_{{ $informatique->id }}" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" action="{{ route('collabotation.dotation_informatique_popup_edit') }}"
                enctype="multipart/form-data">
                @csrf

                @php
                    $collaboration_dotation_equipment = DB::table('llx_collaboration_dotation_computer')
                        ->where('id', $informatique->id)
                        ->first();
                @endphp

                <input type="hidden" id="informatique_id" name="informatique_id" value="{{ $informatique->id }}">
                <input type="hidden" name="collaboration_id" value="{{ $collaboration_id }}">

                <div class="modal-header pb-0" style="padding: 20px 25px;background: white;">
                    <h5 class="modal-title">VOIR UNE DOTATION</h5>
                    {{-- <a href="javascript:void(0);" class="btn-blue-white float-right mt-0" data-toggle="modal" data-target="#employee-confirmation-absence-modal">
                        Enregistrer
                    </a> --}}
                    <button class="btn-blue-white float-right mt-0 contactForm_{{ $informatique->id }}"
                        type="submit">Enregistrer</button>


                    <span aria-hidden="true" class="close1_{{ $informatique->id }}" style="width: 10%;">
                        <img src="{{ asset('public/assets/img/icons/Exit_1.png') }}">
                    </span>

                </div>
                <div class="modal-body shadow">
                    <div class="row">

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>Nom de matériel</label>
                                <input type="text" name="materiel_name" class="form-control" id="materiel_name"
                                    value="{{ $collaboration_dotation_equipment->materiel_name }}">
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>Date de fin d'habilitation</label>
                                @php
                                    $obtained = \Carbon\Carbon::parse($collaboration_dotation_equipment->obtained)->format('m/d/Y');
                                @endphp
                                <div class="datepicker-container">
                                    <i class="date-icon date-icon2 float-left" aria-hidden="true"></i>
                                    <input class="form-control bar-to" name="obtained" id="end_date" type="text"
                                        placeholder="00/00/0000" value="{{ $obtained }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-sm-12">
                            <div class="form-group">
                                <label>Ajouter des justificatifs</label>
                                <div class="row">
                                    <div class="col-lg-3 col-sm-3 pr-2">
                                        <div class="form-group box-with-icon">
                                            <div class="">
                                                <i>
                                                    @if ($collaboration_dotation_equipment->img1)
                                                        <img src="{{ asset('public/uploads/information/' . $collaboration_dotation_equipment->img1) }}"
                                                            name="img1" class="min_img_value">
                                                        <input type="hidden" name="img1"
                                                            value="{{ $collaboration_dotation_equipment->img1 }}">
                                                    @else
                                                        <div class="upload-bx lightgray-upload-bx padding_upload-box">
                                                            <img id="imgPreview1inform_{{ $informatique->id }}"
                                                                src="{{ asset('public/assets/img/icons/plus_grey.png') }}" />
                                                        </div>
                                                        <input type="file" name="img1"
                                                            id="img1inform_{{ $informatique->id }}"
                                                            class="hide-file-input">
                                                    @endif

                                                </i>
                                            </div>
                                            <p class="text-center view-color" style="margin-bottom: 10px;">
                                                <img src="{{ asset('public/assets/img/icons/eye-round-blue.png') }}"
                                                    style="margin-right: -10%; width: 40%; margin-top: 3%;"
                                                    data-toggle="modal"
                                                    data-target="#img1_informatique_previews_{{ $informatique->id }}">

                                                <img src="{{ asset('public/assets/img/icons/Exit_1.png') }}"
                                                    style="width: 35%;"
                                                    class="img1_informatique_delete_{{ $informatique->id }}"
                                                    data-img1-id="{{ $collaboration_dotation_equipment->img1 }}"
                                                    id="img1_informatique_delete_{{ $informatique->id }}"
                                                    data-informatique-id="{{ $informatique->id }}"
                                                    id="informatique_delete_{{ $informatique->id }}">
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-3 pr-2">
                                        <div class="form-group box-with-icon">
                                            <div class="">
                                                <i>
                                                    @if ($collaboration_dotation_equipment->img2)
                                                        <img src="{{ asset('public/uploads/information/' . $collaboration_dotation_equipment->img2) }}"
                                                            name="img2" class="min_img_value">
                                                        <input type="hidden" name="img2"
                                                            value="{{ $collaboration_dotation_equipment->img2 }}">
                                                    @else
                                                        <div class="upload-bx lightgray-upload-bx padding_upload-box">
                                                            <img id="imgPreview2inform_{{ $informatique->id }}"
                                                                src="{{ asset('public/assets/img/icons/plus_grey.png') }}" />
                                                        </div>
                                                        <input type="file" name="img2"
                                                            id="img2inform_{{ $informatique->id }}"
                                                            class="hide-file-input">
                                                    @endif

                                                </i>
                                            </div>
                                            <p class="text-center view-color" style="margin-bottom: 10px;">
                                                <img src="{{ asset('public/assets/img/icons/eye-round-blue.png') }}"
                                                    style="margin-right: -10%; width: 40%; margin-top: 3%;"
                                                    data-toggle="modal"
                                                    data-target="#img2_informatique_previews_{{ $informatique->id }}">

                                                <img src="{{ asset('public/assets/img/icons/Exit_1.png') }}"
                                                    style="width: 35%;"
                                                    class="img2_informatique_delete_{{ $informatique->id }}"
                                                    data-img2-id="{{ $collaboration_dotation_equipment->img2 }}"
                                                    id="img2_informatique_delete_{{ $informatique->id }}"
                                                    data-informatique-id="{{ $informatique->id }}"
                                                    id="informatique_delete_{{ $informatique->id }}">
                                            </p>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-sm-3 pr-2">
                                        <div class="form-group box-with-icon">
                                            <div class="">
                                                <i>
                                                    @if ($collaboration_dotation_equipment->img3)
                                                        <img src="{{ asset('public/uploads/information/' . $collaboration_dotation_equipment->img3) }}"
                                                            name="img3" class="min_img_value">
                                                        <input type="hidden" name="img3"
                                                            value="{{ $collaboration_dotation_equipment->img3 }}">
                                                    @else
                                                        <div class="upload-bx lightgray-upload-bx padding_upload-box">
                                                            <img id="imgPreview3inform_{{ $informatique->id }}"
                                                                src="{{ asset('public/assets/img/icons/plus_grey.png') }}" />
                                                        </div>
                                                        <input type="file" name="img3"
                                                            id="img3inform_{{ $informatique->id }}"
                                                            class="hide-file-input">
                                                    @endif

                                                </i>
                                            </div>
                                            <p class="text-center view-color" style="margin-bottom: 10px;">
                                                <img src="{{ asset('public/assets/img/icons/eye-round-blue.png') }}"
                                                    style="margin-right: -10%; width: 40%; margin-top: 3%;"
                                                    data-toggle="modal"
                                                    data-target="#img3_informatique_previews_{{ $informatique->id }}">

                                                <img src="{{ asset('public/assets/img/icons/Exit_1.png') }}"
                                                    style="width: 35%;"
                                                    class="img3_informatique_delete_{{ $informatique->id }}"
                                                    data-img3-id="{{ $collaboration_dotation_equipment->img3 }}"
                                                    id="img3_informatique_delete_{{ $informatique->id }}"
                                                    data-informatique-id="{{ $informatique->id }}"
                                                    id="informatique_delete_{{ $informatique->id }}">
                                            </p>
                                        </div>
                                    </div>



                                    <div class="col-lg-3 col-sm-3 pr-2">
                                        <div class="form-group box-with-icon">
                                            <div class="">
                                                <i>
                                                    @if ($collaboration_dotation_equipment->img4)
                                                        <img src="{{ asset('public/uploads/information/' . $collaboration_dotation_equipment->img4) }}"
                                                            name="img4" class="min_img_value">
                                                        <input type="hidden" name="img4"
                                                            value="{{ $collaboration_dotation_equipment->img4 }}">
                                                    @else
                                                        <div class="upload-bx lightgray-upload-bx padding_upload-box">
                                                            <img id="imgPreview4inform_{{ $informatique->id }}"
                                                                src="{{ asset('public/assets/img/icons/plus_grey.png') }}" />
                                                        </div>
                                                        <input type="file" name="img4"
                                                            id="img4inform_{{ $informatique->id }}"
                                                            class="hide-file-input">
                                                    @endif

                                                </i>
                                            </div>
                                            <p class="text-center view-color" style="margin-bottom: 10px;">
                                                <img src="{{ asset('public/assets/img/icons/eye-round-blue.png') }}"
                                                    style="margin-right: -10%; width: 40%; margin-top: 3%;"
                                                    data-toggle="modal"
                                                    data-target="#img4_informatique_previews_{{ $informatique->id }}">

                                                <img src="{{ asset('public/assets/img/icons/Exit_1.png') }}"
                                                    style="width: 35%;"
                                                    class="img4_informatique_delete_{{ $informatique->id }}"
                                                    data-img4-id="{{ $collaboration_dotation_equipment->img4 }}"
                                                    id="img4_informatique_delete_{{ $informatique->id }}"
                                                    data-informatique-id="{{ $informatique->id }}"
                                                    id="informatique_delete_{{ $informatique->id }}">
                                            </p>
                                        </div>
                                    </div>




                                    {{-- <div class="col-lg-3 col-sm-3">
                                        <div class="form-group box-with-icon">
                                            <div class="upload-bx view-color">
                                                <i>
                                                    @if ($collaboration_dotation_equipment->img3)
                                                        <img src="{{ asset('public/uploads/formation/'.$collaboration_dotation_equipment->img3)}}" name="img3">
                                                        <input type="hidden" name="img3" value="{{$collaboration_dotation_equipment->img3}}">

                                                    @else
                                                        <div class="upload-bx lightgray-upload-bx">
                                                            <i class="fa fa-plus fa-2x"></i>
                                                        </div>
                                                        <input type="file" name="img3" class="hide-file-input">
                                                    @endif

                                                </i>
                                            </div>
                                            <p class="text-center view-color" style="margin-bottom: 10px;">
                                                <img src="{{ asset('public/assets/img/icons/eye-round-blue.png')}}" style="margin-right: -10%; width: 40%; margin-top: 3%;" data-toggle="modal" data-target="#img3_previews">

                                                <img src="{{ asset('public/assets/img/icons/Exit_1.png')}}" style="width: 35%;" class="img3_delete_{{$materiel->id}}" data-img3-id="{{$collaboration_dotation_equipment->img3}}" id="img3_delete" data-formation-id="{{$materiel->id}}" id="formation_delete_{{$materiel->id}}">
                                            </p>
                                        </div>
                                    </div>


                                    <div class="col-lg-3 col-sm-3">
                                        <div class="form-group box-with-icon">
                                            <div class="upload-bx view-color">
                                                <i>
                                                    @if ($collaboration_dotation_equipment->img4)
                                                        <img src="{{ asset('public/uploads/formation/'.$collaboration_dotation_equipment->img4)}}" name="img4">

                                                        <input type="hidden" name="img4" value="{{$collaboration_dotation_equipment->img4}}">

                                                    @else
                                                        <div class="upload-bx lightgray-upload-bx">
                                                            <i class="fa fa-plus fa-2x"></i>
                                                        </div>
                                                        <input type="file" name="img4" class="hide-file-input">
                                                    @endif

                                                </i>
                                            </div>
                                            <p class="text-center view-color" style="margin-bottom: 10px;">
                                                <img src="{{ asset('public/assets/img/icons/eye-round-blue.png')}}" style="margin-right: -10%; width: 40%; margin-top: 3%;" data-toggle="modal" data-target="#img4_previews">

                                                <img src="{{ asset('public/assets/img/icons/Exit_1.png')}}" style="width: 35%;" class="img4_delete_{{$materiel->id}}" data-img4-id="{{$collaboration_dotation_equipment->img4}}" id="img4_delete" data-formation-id="{{$materiel->id}}" id="formation_delete_{{$materiel->id}}">
                                            </p>
                                        </div>
                                    </div> --}}



                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-sm-12">

                            <!--<button class="btn btn-lightblue btn-lightgreen" type="submit">Enregistrer</button>-->
                            <p class="mt-3 text-bold"><a href="javascript:void(0);" data-toggle="modal"
                                    data-target="#informatique-delete-modal_{{ $informatique->id }}"
                                    class="text-blue mark_informatique_read_{{ $informatique->id }}"
                                    data-informatique-id="{{ $informatique->id }}"
                                    id="informatique_delete_{{ $informatique->id }}"><img
                                        src="{{ asset('public/assets/img/icons/delete.png') }}"> Supprimer la
                                    formation</a></p>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>




<div class="modal fade" id="informatique-delete-modal_{{ $informatique->id }}" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12 col-sm-12 text-center">
                        <p class="employee-confirmation-profile-container">
                            <img src="{{ asset('public/assets/img/employee-confirmation-profile.png') }}">
                            <i class="fa fa-check fa-3x" aria-hidden="true"></i>
                        </p>
                        @php
                            $collaboration = DB::table('llx_collaboration')
                                ->where('id', $collaboration_id)
                                ->first();
                        @endphp
                        <p class="tx-16 black-text font-weight-bold">
                            "{{ $collaboration_dotation_equipment->materiel_name }}"</p>
                        <p>Eles-vous sur de supprimer la formation
                            "{{ $collaboration_dotation_equipment->materiel_name }}" pour
                            {{ $collaboration->prenom }}
                            {{ $collaboration->nom }} ?</p>
                        <span class="btn btn-lightblue " onClick="window.location.reload();">Supprimer</span>
                        <span class="btn btn-lightblue" onClick="window.location.reload();">Annuler</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .img_previews {
        display: block;
        width: 60%;
        margin-left: auto;
        margin-right: auto;
    }

    .model_margin {
        margin-top: 20%;
    }
</style>

<div id="img1_informatique_previews_{{ $informatique->id }}" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content model_margin">
            <div class="modal-body">
                <img src="{{ asset('public/uploads/information/' . $collaboration_dotation_equipment->img1) }}"
                    class="img_previews">
            </div>
        </div>
    </div>
</div>

<div id="img2_informatique_previews_{{ $informatique->id }}" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content model_margin">
            <div class="modal-body">
                <img src="{{ asset('public/uploads/information/' . $collaboration_dotation_equipment->img2) }}"
                    class="img_previews">
            </div>
        </div>
    </div>
</div>

<div id="img3_informatique_previews_{{ $informatique->id }}" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content model_margin">
            <div class="modal-body">
                <img src="{{ asset('public/uploads/information/' . $collaboration_dotation_equipment->img3) }}"
                    class="img_previews">
            </div>
        </div>
    </div>
</div>


<div id="img4_informatique_previews_{{ $informatique->id }}" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content model_margin">
            <div class="modal-body">
                <img src="{{ asset('public/uploads/information/' . $collaboration_dotation_equipment->img4) }}"
                    class="img_previews">
            </div>
        </div>
    </div>
</div>

{{-- <div id="img3_previews" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content model_margin">
        <div class="modal-body">
            <img src="{{ asset('public/uploads/formation/'.$collaboration_dotation_equipment->img3)}}" class="img_previews">
        </div>
      </div>
    </div>
</div>

<div id="img4_previews" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content model_margin">
        <div class="modal-body">
            <img src="{{ asset('public/uploads/formation/'.$collaboration_dotation_equipment->img4)}}" class="img_previews">
        </div>
      </div>
    </div>
</div> --}}

<script>
    $(document).ready(function() {
        // Open modal on page load
        // Close modal on button click
        $(".close1_{{ $informatique->id }}").click(function() {
            $("#view-informatique-modal_{{ $informatique->id }}").modal('hide');
            $('.modal-backdrop').remove();
        });

        $('#view-informatique-modal').on('shown.bs.modal', function() {
            $('#add-technician-modal').modal('hide');
        });

    });





    $(document).ready(function() {
        $('.mark_informatique_read_{{ $informatique->id }}').click(function(e) {
            e.preventDefault();


            var informatique_id = $("#informatique_delete_{{ $informatique->id }}").data(
                'informatique-id');

            $.ajax({
                type: "post",
                url: "{{ route('collabotation.informatique_delete') }}",
                data: {
                    'informatique_id': informatique_id,
                    "_token": "{{ csrf_token() }}"
                },
                cache: false,
                success: function(data) {
                    $("#view-informatique-modal_" + informatique_id).hide();
                    $(".data-informatique-id_" + informatique_id).remove();
                }
            });
        });
    });


    $(document).ready(function() {

        $('.img1_informatique_delete_{{ $informatique->id }}').click(function(e) {

            e.preventDefault();

            var informatique_id = $("#informatique_delete_{{ $informatique->id }}").data(
                'informatique-id');
            var img1 = $("#img1_informatique_delete_{{ $informatique->id }}").data('img1-id');

            $.ajax({
                type: "post",
                url: "{{ route('collabotation.dotation_informatique_img_delete') }}",
                data: {
                    'img1': img1,
                    'informatique_id': informatique_id,
                    "_token": "{{ csrf_token() }}"
                },
                cache: false,
                success: function(data) {
                    location.reload();
                }
            });
        });

        $('.img2_informatique_delete_{{ $informatique->id }}').click(function(e) {
            e.preventDefault();

            var informatique_id = $("#informatique_delete_{{ $informatique->id }}").data(
                'informatique-id');
            var img2 = $("#img2_informatique_delete_{{ $informatique->id }}").data('img2-id');

            $.ajax({
                type: "post",
                url: "{{ route('collabotation.dotation_informatique_img_delete') }}",
                data: {
                    'img2': img2,
                    'informatique_id': informatique_id,
                    "_token": "{{ csrf_token() }}"
                },
                cache: false,
                success: function(data) {
                    location.reload();
                }
            });
        });

        $('.img3_informatique_delete_{{ $informatique->id }}').click(function(e) {
            e.preventDefault();

            var informatique_id = $("#informatique_delete_{{ $informatique->id }}").data(
                'informatique-id');
            var img3 = $("#img3_informatique_delete_{{ $informatique->id }}").data('img3-id');

            $.ajax({
                type: "post",
                url: "{{ route('collabotation.dotation_informatique_img_delete') }}",
                data: {
                    'img3': img3,
                    'informatique_id': informatique_id,
                    "_token": "{{ csrf_token() }}"
                },
                cache: false,
                success: function(data) {
                    location.reload();
                }
            });
        });

        $('.img4_informatique_delete_{{ $informatique->id }}').click(function(e) {
            e.preventDefault();

            var informatique_id = $("#informatique_delete_{{ $informatique->id }}").data(
                'informatique-id');
            var img4 = $("#img4_informatique_delete_{{ $informatique->id }}").data('img4-id');

            $.ajax({
                type: "post",
                url: "{{ route('collabotation.dotation_informatique_img_delete') }}",
                data: {
                    'img4': img4,
                    'informatique_id': informatique_id,
                    "_token": "{{ csrf_token() }}"
                },
                cache: false,
                success: function(data) {
                    location.reload();
                }
            });
        });



    });
</script>





<script>
    $(document).ready(() => {
        $('#img1inform_{{ $informatique->id }}').change(function() {
            const file = this.files[0];
            console.log(file);
            if (file) {
                let reader = new FileReader();
                reader.onload = function(event) {
                    console.log(event.target.result);
                    $('#imgPreview1inform_{{ $informatique->id }}').attr('src', event.target
                        .result);
                }
                reader.readAsDataURL(file);
            }
        });

        $('#img2inform_{{ $informatique->id }}').change(function() {

            const file = this.files[0];
            console.log(file);
            if (file) {
                let reader = new FileReader();
                reader.onload = function(event) {
                    console.log(event.target.result);
                    $('#imgPreview2inform_{{ $informatique->id }}').attr('src', event.target
                        .result);
                }
                reader.readAsDataURL(file);
            }
        });


        $('#img3inform_{{ $informatique->id }}').change(function() {

            const file = this.files[0];
            console.log(file);
            if (file) {
                let reader = new FileReader();
                reader.onload = function(event) {
                    console.log(event.target.result);
                    $('#imgPreview3inform_{{ $informatique->id }}').attr('src', event.target
                        .result);
                }
                reader.readAsDataURL(file);
            }
        });


        $('#img4inform_{{ $informatique->id }}').change(function() {

            const file = this.files[0];
            console.log(file);
            if (file) {
                let reader = new FileReader();
                reader.onload = function(event) {
                    console.log(event.target.result);
                    $('#imgPreview4inform_{{ $informatique->id }}').attr('src', event.target
                        .result);
                }
                reader.readAsDataURL(file);
            }
        });


    });
</script>
