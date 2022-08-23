<style>
    .modal-xl .modal-header .btn-blue-white{
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
    .min_img_value
    {
        width: 100px;
        height: 100px;
    }
    .padding_upload-box{
        padding: 39% 10% !important;
    }
</style>

<div class="modal fade" id="view-dotation-modal_{{$materiel->id}}" tabindex="-1" >
    <div class="modal-dialog">
        <div class="modal-content">
            <form  method="post" action="{{route('collabotation.dotation_materiel_popup_edit')}}"  enctype="multipart/form-data">
                @csrf

                @php
                    $collaboration_dotation_equipment = DB::table('llx_collaboration_dotation_equipment')->where('id',$materiel->id)->first();
                @endphp

                <input type="hidden" id="materiel_id" name="materiel_id" value="{{$materiel->id}}">
                <input type="hidden" name="collaboration_id" value="{{$collaboration_id}}">

                <div class="modal-header pb-0" style="padding: 20px 25px;background: white;">
                    <h5 class="modal-title">VOIR UNE DOTATION</h5>
                    {{-- <a href="javascript:void(0);" class="btn-blue-white float-right mt-0" data-toggle="modal" data-target="#employee-confirmation-absence-modal">
                        Enregistrer
                    </a> --}}
                    <button class="btn-blue-white float-right mt-0 contactForm_{{$materiel->id}}" type="submit">Enregistrer</button>


                        <span aria-hidden="true" class="close1_{{$materiel->id}}" style="width: 10%;">
                            <img src="{{ asset('public/assets/img/icons/Exit_1.png')}}">
                        </span>

                </div>
                <div class="modal-body shadow">
                    <div class="row">

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>Nom de matériel</label>
                                <input type="text" name="materiel_name" class="form-control"  id="materiel_name" value="{{$collaboration_dotation_equipment->materiel_name}}">
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>Date de fin d'habilitation</label>
                                @php
                                    $obtained = \Carbon\Carbon::parse($collaboration_dotation_equipment->obtained)->format('m/d/Y')
                                @endphp
                                <div class="datepicker-container">
                                    <i class="date-icon date-icon2 float-left" aria-hidden="true"></i>
                                    <input class="form-control bar-to" name="obtained" id="end_date" type="text" placeholder="00/00/0000" value="{{$obtained}}">
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
                                                        <img src="{{ asset('public/uploads/materiel/'.$collaboration_dotation_equipment->img1)}}" name="img1" class="min_img_value">
                                                        <input type="hidden" name="img1" value="{{$collaboration_dotation_equipment->img1}}">

                                                    @else
                                                        <div class="upload-bx lightgray-upload-bx padding_upload-box">
                                                            <img id="imgPreview1mate_{{$materiel->id}}" src="{{ asset('public/assets/img/icons/plus_grey.png')}}" />
                                                        </div>
                                                        <input type="file" name="img1" id="img1mate_{{$materiel->id}}" class="hide-file-input">
                                                    @endif

                                                </i>
                                            </div>
                                            <p class="text-center view-color" style="margin-bottom: 10px;">
                                                <img src="{{ asset('public/assets/img/icons/eye-round-blue.png')}}" style="margin-right: -10%; width: 40%; margin-top: 3%;" data-toggle="modal" data-target="#img1_materiel_previews_{{$materiel->id}}">

                                                <img src="{{ asset('public/assets/img/icons/Exit_1.png')}}" style="width: 35%;" class="img1_materiel_delete_{{$materiel->id}}" data-img1-id="{{$collaboration_dotation_equipment->img1}}" id="img1_materiel_delete_{{$materiel->id}}" data-materiel-id="{{$materiel->id}}" id="materiel_delete_{{$materiel->id}}">
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-3 pr-2">
                                        <div class="form-group box-with-icon">
                                            <div class="">
                                                <i>
                                                    @if ($collaboration_dotation_equipment->img2)
                                                        <img src="{{ asset('public/uploads/materiel/'.$collaboration_dotation_equipment->img2)}}" name="img2" class="min_img_value">
                                                        <input type="hidden" name="img2" value="{{$collaboration_dotation_equipment->img2}}">
                                                    @else
                                                        <div class="upload-bx lightgray-upload-bx padding_upload-box">
                                                            <img id="imgPreview2mate_{{$materiel->id}}" src="{{ asset('public/assets/img/icons/plus_grey.png')}}" />
                                                        </div>
                                                        <input type="file" name="img2" id="img2mate_{{$materiel->id}}" class="hide-file-input">
                                                    @endif

                                                </i>
                                            </div>
                                            <p class="text-center view-color" style="margin-bottom: 10px;">
                                                <img src="{{ asset('public/assets/img/icons/eye-round-blue.png')}}" style="margin-right: -10%; width: 40%; margin-top: 3%;" data-toggle="modal" data-target="#img2_materiel_previews_{{$materiel->id}}">

                                                <img src="{{ asset('public/assets/img/icons/Exit_1.png')}}" style="width: 35%;" class="img2_materiel_delete_{{$materiel->id}}" data-img2-id="{{$collaboration_dotation_equipment->img2}}" id="img2_materiel_delete_{{$materiel->id}}" data-materiel-id="{{$materiel->id}}" id="materiel_delete_{{$materiel->id}}">
                                            </p>
                                        </div>
                                    </div>


                                    <div class="col-lg-3 col-sm-3 pr-2">
                                        <div class="form-group box-with-icon">
                                            <div class="">
                                                <i>
                                                    @if ($collaboration_dotation_equipment->img3)
                                                        <img src="{{ asset('public/uploads/materiel/'.$collaboration_dotation_equipment->img3)}}" name="img3" class="min_img_value">
                                                        <input type="hidden" name="img3" value="{{$collaboration_dotation_equipment->img3}}">
                                                    @else
                                                        <div class="upload-bx lightgray-upload-bx padding_upload-box">
                                                            <img id="imgPreview3mate_{{$materiel->id}}" src="{{ asset('public/assets/img/icons/plus_grey.png')}}" />
                                                        </div>
                                                        <input type="file" name="img3" id="img3mate_{{$materiel->id}}" class="hide-file-input">
                                                    @endif

                                                </i>
                                            </div>
                                            <p class="text-center view-color" style="margin-bottom: 10px;">
                                                <img src="{{ asset('public/assets/img/icons/eye-round-blue.png')}}" style="margin-right: -10%; width: 40%; margin-top: 3%;" data-toggle="modal" data-target="#img3_materiel_previews_{{$materiel->id}}">

                                                <img src="{{ asset('public/assets/img/icons/Exit_1.png')}}" style="width: 35%;" class="img3_materiel_delete_{{$materiel->id}}" data-img3-id="{{$collaboration_dotation_equipment->img3}}" id="img3_materiel_delete_{{$materiel->id}}" data-materiel-id="{{$materiel->id}}" id="materiel_delete_{{$materiel->id}}">
                                            </p>
                                        </div>
                                    </div>


                                    <div class="col-lg-3 col-sm-3 pr-2">
                                        <div class="form-group box-with-icon">
                                            <div class="">
                                                <i>
                                                    @if ($collaboration_dotation_equipment->img4)
                                                        <img src="{{ asset('public/uploads/materiel/'.$collaboration_dotation_equipment->img4)}}" name="img4" class="min_img_value">
                                                        <input type="hidden" name="img4" value="{{$collaboration_dotation_equipment->img4}}">
                                                    @else
                                                        <div class="upload-bx lightgray-upload-bx padding_upload-box">
                                                            <img id="imgPreview4mate_{{$materiel->id}}" src="{{ asset('public/assets/img/icons/plus_grey.png')}}" />
                                                        </div>
                                                        <input type="file" name="img4" id="img4mate_{{$materiel->id}}" class="hide-file-input">
                                                    @endif

                                                </i>
                                            </div>
                                            <p class="text-center view-color" style="margin-bottom: 10px;">
                                                <img src="{{ asset('public/assets/img/icons/eye-round-blue.png')}}" style="margin-right: -10%; width: 40%; margin-top: 3%;" data-toggle="modal" data-target="#img4_materiel_previews_{{$materiel->id}}">

                                                <img src="{{ asset('public/assets/img/icons/Exit_1.png')}}" style="width: 35%;" class="img4_materiel_delete_{{$materiel->id}}" data-img4-id="{{$collaboration_dotation_equipment->img4}}" id="img4_materiel_delete_{{$materiel->id}}" data-materiel-id="{{$materiel->id}}" id="materiel_delete_{{$materiel->id}}">
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
                            <p class="mt-3 text-bold"><a href="javascript:void(0);" data-toggle="modal" data-target="#materiel-delete-modal_{{$materiel->id}}" class="text-blue mark_materiel_read_{{$materiel->id}}" data-materiel-id="{{$materiel->id}}" id="materiel_delete_{{$materiel->id}}"><img src="{{ asset('public/assets/img/icons/delete.png')}}"> Supprimer la formation</a></p>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>





<div class="modal fade" id="materiel-delete-modal_{{ $materiel->id }}" role="dialog">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-body">
				<div class="row">
					<div class="col-lg-12 col-sm-12 text-center">
						<p class="employee-confirmation-profile-container">
							<img src="{{ asset('public/assets/img/employee-confirmation-profile.png')}}">
							<i class="fa fa-check fa-3x" aria-hidden="true"></i>
						</p>
                        @php
                            $collaboration = DB::table('llx_collaboration')->where('id',$collaboration_id)->first();
                        @endphp
						<p class="tx-16 black-text font-weight-bold">"{{$collaboration_dotation_equipment->materiel_name}}"</p>
						<p>Eles-vous sur de supprimer la formation "{{$collaboration_dotation_equipment->materiel_name}}" pour {{$collaboration->prenom}} {{$collaboration->nom}}  ?</p>
						<span class="btn btn-lightblue " onClick="window.location.reload();">Supprimer</span>
                        <span class="btn btn-lightblue" onClick="window.location.reload();">Annuler</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<style>
    .img_previews
    {
        display: block;
        width: 60%;
        margin-left: auto;
        margin-right: auto;
    }
    .model_margin
    {
        margin-top: 20%;
    }

</style>

<div id="img1_materiel_previews_{{$materiel->id}}" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content model_margin">
        <div class="modal-body">
            <img src="{{ asset('public/uploads/materiel/'.$collaboration_dotation_equipment->img1)}}" class="img_previews">
        </div>
      </div>
    </div>
</div>

<div id="img2_materiel_previews_{{$materiel->id}}" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content model_margin">
        <div class="modal-body">
            <img src="{{ asset('public/uploads/materiel/'.$collaboration_dotation_equipment->img2)}}" class="img_previews">
        </div>
      </div>
    </div>
</div>

<div id="img3_materiel_previews_{{$materiel->id}}" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content model_margin">
        <div class="modal-body">
            <img src="{{ asset('public/uploads/materiel/'.$collaboration_dotation_equipment->img3)}}" class="img_previews">
        </div>
      </div>
    </div>
</div>


<div id="img4_materiel_previews_{{$materiel->id}}" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content model_margin">
        <div class="modal-body">
            <img src="{{ asset('public/uploads/materiel/'.$collaboration_dotation_equipment->img4)}}" class="img_previews">
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
        $(document).ready(function(){
            // Open modal on page load
            // Close modal on button click
            $(".close1_{{$materiel->id}}").click(function(){
                $("#view-dotation-modal_{{$materiel->id}}").modal('hide');
                $('.modal-backdrop').remove();
            });

            $('#view-dotation-modal').on('shown.bs.modal', function () {
			    $('#add-technician-modal').modal('hide');
		    });

        });


        // $("#sendmemessage_{{$materiel->id}}").submit(function(stay){
        // var formdata = $(this).serialize(); // here $(this) refere to the form its submitting
        //     $.ajax({

        //         type: "post",
        //         url: "{{route('collabotation.formation_popup_edit')}}",

        //         data: formdata, // here $(this) refers to the ajax object not form
        //         success: function (data) {
        //             alert(data);
        //         },
        //     });
        //     stay.preventDefault();
        // });


        $(document).ready(function() {

            $(".close_materiel_delete_{{ $materiel->id }}").click(function(){
                $("#materiel-delete-modal_{{ $materiel->id }}").hide();
                $('.modal-backdrop').remove();
            });

            $('.mark_materiel_read_{{$materiel->id}}').click(function(e) {
                e.preventDefault();


                var materiel_id = $("#materiel_delete_{{$materiel->id}}").data('materiel-id');

                $.ajax({
                    type: "post",
                    url: "{{route('collabotation.materiel_delete')}}",
                    data: {
                        'materiel_id': materiel_id,
                        "_token": "{{ csrf_token() }}"
                    },
                    cache: false,
                    success: function (data) {
                        $("#view-dotation-modal_"+materiel_id).hide();
                        $(".data-materiel-id_"+materiel_id).remove();
                    }
                });
            });
        });


        $(document).ready(function() {

            $('.img1_materiel_delete_{{$materiel->id}}').click(function(e) {

                e.preventDefault();

                var materiel_id = $("#materiel_delete_{{$materiel->id}}").data('materiel-id');
                var img1 = $("#img1_materiel_delete_{{$materiel->id}}").data('img1-id');

                $.ajax({
                    type: "post",
                     url: "{{route('collabotation.dotation_materiel_img_delete')}}",
                    data: {
                        'img1': img1,
                        'materiel_id': materiel_id,
                        "_token": "{{ csrf_token() }}"
                    },
                    cache: false,
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('.img2_materiel_delete_{{$materiel->id}}').click(function(e) {
                e.preventDefault();

                var materiel_id = $("#materiel_delete_{{$materiel->id}}").data('materiel-id');
                var img2 = $("#img2_materiel_delete_{{$materiel->id}}").data('img2-id');

                $.ajax({
                    type: "post",
                     url: "{{route('collabotation.dotation_materiel_img_delete')}}",
                    data: {
                        'img2': img2,
                        'materiel_id': materiel_id,
                        "_token": "{{ csrf_token() }}"
                    },
                    cache: false,
                    success: function (data) {
                        location.reload();
                    }
                });
            });

            $('.img3_materiel_delete_{{$materiel->id}}').click(function(e) {
                e.preventDefault();

                var materiel_id = $("#materiel_delete_{{$materiel->id}}").data('materiel-id');
                var img3 = $("#img3_materiel_delete_{{$materiel->id}}").data('img3-id');

                $.ajax({
                    type: "post",
                     url: "{{route('collabotation.dotation_materiel_img_delete')}}",
                    data: {
                        'img3': img3,
                        'materiel_id': materiel_id,
                        "_token": "{{ csrf_token() }}"
                    },
                    cache: false,
                    success: function (data) {
                        location.reload();
                    }
                });
            });


            $('.img4_materiel_delete_{{$materiel->id}}').click(function(e) {

                e.preventDefault();

                var materiel_id = $("#materiel_delete_{{$materiel->id}}").data('materiel-id');
                var img4 = $("#img4_materiel_delete_{{$materiel->id}}").data('img4-id');

                $.ajax({
                    type: "post",
                     url: "{{route('collabotation.dotation_materiel_img_delete')}}",
                    data: {
                        'img4': img4,
                        'materiel_id': materiel_id,
                        "_token": "{{ csrf_token() }}"
                    },
                    cache: false,
                    success: function (data) {
                        location.reload();
                    }
                });
            });






        });
    </script>




<script>
    $(document).ready(()=>{
            $('#img1mate_{{$materiel->id}}').change(function(){
                const file = this.files[0];
                console.log(file);
                if (file){
                let reader = new FileReader();
                reader.onload = function(event){
                    console.log(event.target.result);
                    $('#imgPreview1mate_{{$materiel->id}}').attr('src', event.target.result);
                }
                reader.readAsDataURL(file);
                }
            });

            $('#img2mate_{{$materiel->id}}').change(function(){

                const file = this.files[0];
                console.log(file);
                if (file){
                let reader = new FileReader();
                reader.onload = function(event){
                    console.log(event.target.result);
                    $('#imgPreview2mate_{{$materiel->id}}').attr('src', event.target.result);
                }
                reader.readAsDataURL(file);
                }
            });

    });
</script>
