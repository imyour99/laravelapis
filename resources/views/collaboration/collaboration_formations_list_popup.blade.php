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
    .min_img_value{
        width: 100px;
        height: 100px;
    }
    .img_size {
        width: 80px !important;
    }
</style>

<div class="modal fade" id="view-formation-modal_{{$formation->id}}" tabindex="-1" >
    <div class="modal-dialog">
        <div class="modal-content">
            <form  method="post" action="{{route('collabotation.formation_popup_edit')}}"  enctype="multipart/form-data">
                @csrf

                @php
                $collaboration_formation = DB::table('llx_collaboration_formations')->where('id',$formation->id)->first();
                @endphp

                <input type="hidden" id="formation_id" name="formation_id" value="{{$formation->id}}">
                <input type="hidden" name="collaboration_id" value="{{$collaboration_id}}">

                <div class="modal-header pb-0" style="padding: 20px 25px;background: white;">
                    <h5 class="modal-title">EDITER UNE FORMATION</h5>
                    {{-- <a href="javascript:void(0);" class="btn-blue-white float-right mt-0" data-toggle="modal" data-target="#employee-confirmation-absence-modal">
                        Enregistrer
                    </a> --}}
                    <button class="btn-blue-white float-right mt-0 contactForm_{{$formation->id}}" type="submit">Enregistrer</button>


                    <span aria-hidden="true" class="close1_{{$formation->id}}" style="width: 10%;">
                        <img src="{{ asset('public/assets/img/icons/Exit_1.png')}}">
                    </span>

                </div>
                <div class="modal-body shadow">
                    <div class="row">
                        <div class="col-lg-10 col-sm-10">
                            <div class="form-group">
                                <label>Nom de la formation</label>
                                <input type="text" name="formation_name" class="form-control"  id="formation_name" value="{{$collaboration_formation->formation_name}}">
                                {{-- <p class="lightgray-font-color" name="formation_name" id="formation_name">{{$collaboration_formation->formation_name}}</p> --}}
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>Date d'obtention</label>

                                @php
                                    $date_obtention = \Carbon\Carbon::parse($collaboration_formation->date_obtention)->format('m/d/Y')
                                @endphp
                                <div class="datepicker-container">
                                    <i class="date-icon date-icon1 float-left" aria-hidden="true"></i>
                                    <input class="form-control bar-from" name="date_obtention" id="date_obtention" type="text" placeholder="00/00/0000" value="{{$date_obtention}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>Date de fin d'habilitation</label>
                                @php
                                    $end_date = \Carbon\Carbon::parse($collaboration_formation->end_date)->format('m/d/Y')
                                @endphp
                                <div class="datepicker-container">
                                    <i class="date-icon date-icon2 float-left" aria-hidden="true"></i>
                                    <input class="form-control bar-to" name="end_date" id="end_date" type="text" placeholder="00/00/0000" value="{{$end_date}}">
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
                                                    @if ($collaboration_formation->img1)
                                                        @if ( strrchr($collaboration_formation->img1, ".") == '.pdf')
                                                            <i  class="fa fa-file-pdf-o" aria-hidden="true" style="font-size: 45px;color: #009cde;    padding: 35px 0px 35px 25px;"></i>


                                                        @elseif (strrchr($collaboration_formation->img1, ".") == '.png' || strrchr($collaboration_formation->img1, ".") == '.jpg' || strrchr($collaboration_formation->img1, ".") == '.jpeg')


                                                            <img src="{{ asset('public/uploads/formation/'.$collaboration_formation->img1)}}" name="img1" class="min_img_value">


                                                        @else
                                                            <i  class="fa fa-file-text" aria-hidden="true" style="font-size: 45px;color: #009cde;    padding: 35px 0px 35px 25px;"></i>


                                                        @endif

                                                        <input type="hidden" name="img1" value="{{$collaboration_formation->img1}}">

                                                    @else

                                                        <div class="upload-bx lightgray-upload-bx">

                                                            <i id="imgPreview1form_pdf_{{$formation->id}}" class="fa fa-file-pdf-o" aria-hidden="true" style="display: none;font-size: 45px;color: #009cde;"></i>

                                                            <i id="imgPreview1form_word_{{$formation->id}}" class="fa fa-file-text" aria-hidden="true" style="display: none;font-size: 45px;color: #009cde;"></i>


                                                            <img id="imgPreview1form_{{$formation->id}}" src="{{ asset('public/assets/img/icons/plus_grey.png')}}"/>
                                                        </div>
                                                        <input type="file" name="img1" id="imgform1_{{$formation->id}}" class="hide-file-input">
                                                    @endif
                                                </i>
                                            </div>
                                            <p class="text-center view-color" style="bottom: -40%;">

                                                @if ( strrchr($collaboration_formation->img1, ".") == '.pdf')
                                                    <a href="{{ asset('public/uploads/formation/'.$collaboration_formation->img1)}}" target="_blank">
                                                        <img src="{{ asset('public/assets/img/icons/eye-round-blue.png')}}" style="margin-right: -10%; width: 40%; margin-top: 3%;">
                                                    </a>

                                                @elseif (strrchr($collaboration_formation->img1, ".") == '.png' || strrchr($collaboration_formation->img1, ".") == '.jpg' || strrchr($collaboration_formation->img1, ".") == '.jpeg')

                                                    <img src="{{ asset('public/assets/img/icons/eye-round-blue.png')}}" style="margin-right: -10%; width: 40%; margin-top: 3%;" data-toggle="modal" data-target="#img1_previews_{{$formation->id}}" >

                                                @else
                                                    <a href="{{ asset('public/uploads/formation/'.$collaboration_formation->img1)}}" target="_blank">
                                                        <img src="{{ asset('public/assets/img/icons/eye-round-blue.png')}}" style="margin-right: -10%; width: 40%; margin-top: 3%;">
                                                    </a>
                                                @endif
                                                <img src="{{ asset('public/assets/img/icons/Exit_1.png')}}" style="width: 35%;" class="img1_delete_{{$formation->id}}" data-img1-id="{{$collaboration_formation->img1}}" id="img1_delete" data-formation-id="{{$formation->id}}" id="formation_delete_{{$formation->id}}">
                                            </p>
                                        </div>
                                    </div>


                                    {{-- Img2 --}}
                                    <div class="col-lg-3 col-sm-3 pr-2">
                                        <div class="form-group box-with-icon">
                                            <div class="">
                                                <i>
                                                    @if ($collaboration_formation->img2)
                                                        @if ( strrchr($collaboration_formation->img2, ".") == '.pdf')
                                                            <i  class="fa fa-file-pdf-o" aria-hidden="true" style="font-size: 45px;color: #009cde;    padding: 35px 0px 35px 25px;"></i>



                                                        @elseif (strrchr($collaboration_formation->img2, ".") == '.png' || strrchr($collaboration_formation->img2, ".") == '.jpg' || strrchr($collaboration_formation->img2, ".") == '.jpeg')


                                                            <img src="{{ asset('public/uploads/formation/'.$collaboration_formation->img2)}}" name="img2" class="min_img_value">


                                                        @else
                                                            <i  class="fa fa-file-text" aria-hidden="true" style="font-size: 45px;color: #009cde;    padding: 35px 0px 35px 25px;"></i>



                                                        @endif

                                                        <input type="hidden" name="img2" value="{{$collaboration_formation->img2}}">

                                                    @else

                                                        <div class="upload-bx lightgray-upload-bx">

                                                            <i id="imgPreview2form_pdf_{{$formation->id}}" class="fa fa-file-pdf-o" aria-hidden="true" style="display: none;font-size: 45px;color: #009cde;"></i>

                                                            <i id="imgPreview2form_word_{{$formation->id}}" class="fa fa-file-text" aria-hidden="true" style="display: none;font-size: 45px;color: #009cde;"></i>


                                                            <img id="imgPreview2form_{{$formation->id}}" src="{{ asset('public/assets/img/icons/plus_grey.png')}}" />
                                                        </div>
                                                        <input type="file" name="img2" id="imgform2_{{$formation->id}}" class="hide-file-input">
                                                    @endif
                                                </i>
                                            </div>
                                            <p class="text-center view-color" style="bottom: -40%;">

                                                @if ( strrchr($collaboration_formation->img2, ".") == '.pdf')
                                                    <a href="{{ asset('public/uploads/formation/'.$collaboration_formation->img2)}}" target="_blank">
                                                        <img src="{{ asset('public/assets/img/icons/eye-round-blue.png')}}" style="margin-right: -10%; width: 40%; margin-top: 3%;">
                                                    </a>

                                                @elseif (strrchr($collaboration_formation->img2, ".") == '.png' || strrchr($collaboration_formation->img2, ".") == '.jpg' || strrchr($collaboration_formation->img2, ".") == '.jpeg')

                                                    <img src="{{ asset('public/assets/img/icons/eye-round-blue.png')}}" style="margin-right: -10%; width: 40%; margin-top: 3%;" data-toggle="modal" data-target="#img2_previews_{{$formation->id}}" >

                                                @else
                                                    <a href="{{ asset('public/uploads/formation/'.$collaboration_formation->img2)}}" target="_blank">
                                                        <img src="{{ asset('public/assets/img/icons/eye-round-blue.png')}}" style="margin-right: -10%; width: 40%; margin-top: 3%;">
                                                    </a>
                                                @endif
                                                <img src="{{ asset('public/assets/img/icons/Exit_1.png')}}" style="width: 35%;" class="img2_delete_{{$formation->id}}" data-img2-id="{{$collaboration_formation->img2}}" id="img2_delete" data-formation-id="{{$formation->id}}" id="formation_delete_{{$formation->id}}">
                                            </p>
                                        </div>
                                    </div>

                                    {{-- Img3 --}}
                                    <div class="col-lg-3 col-sm-3 pr-2">
                                        <div class="form-group box-with-icon">
                                            <div class="">
                                                <i>
                                                    @if ($collaboration_formation->img3)
                                                        @if ( strrchr($collaboration_formation->img3, ".") == '.pdf')
                                                            <i  class="fa fa-file-pdf-o" aria-hidden="true" style="font-size: 45px;color: #009cde;    padding: 35px 0px 35px 25px;"></i>

                                                            <input type="hidden" name="img3" value="{{$collaboration_formation->img3}}">

                                                        @elseif (strrchr($collaboration_formation->img3, ".") == '.png' || strrchr($collaboration_formation->img3, ".") == '.jpg' || strrchr($collaboration_formation->img3, ".") == '.jpeg')


                                                            <img src="{{ asset('public/uploads/formation/'.$collaboration_formation->img3)}}" name="img3">
                                                            <input type="hidden" name="img3" value="{{$collaboration_formation->img3}}" class="min_img_value">

                                                        @else
                                                            <i  class="fa fa-file-text" aria-hidden="true" style="font-size: 45px;color: #009cde;    padding: 35px 0px 35px 25px;"></i>

                                                            <input type="hidden" name="img3" value="{{$collaboration_formation->img3}}">

                                                        @endif

                                                    @else

                                                        <div class="upload-bx lightgray-upload-bx">

                                                            <i id="imgPreview3form_pdf_{{$formation->id}}" class="fa fa-file-pdf-o" aria-hidden="true" style="display: none;font-size: 45px;color: #009cde;"></i>

                                                            <i id="imgPreview3form_word_{{$formation->id}}" class="fa fa-file-text" aria-hidden="true" style="display: none;font-size: 45px;color: #009cde;"></i>


                                                            <img id="imgPreview3form_{{$formation->id}}" src="{{ asset('public/assets/img/icons/plus_grey.png')}}" />
                                                        </div>
                                                        <input type="file" name="img3" id="imgform3_{{$formation->id}}" class="hide-file-input">
                                                    @endif
                                                </i>
                                            </div>
                                            <p class="text-center view-color" style="bottom: -40%;">

                                                @if ( strrchr($collaboration_formation->img3, ".") == '.pdf')
                                                    <a href="{{ asset('public/uploads/formation/'.$collaboration_formation->img3)}}" target="_blank">
                                                        <img src="{{ asset('public/assets/img/icons/eye-round-blue.png')}}" style="margin-right: -10%; width: 40%; margin-top: 3%;">
                                                    </a>

                                                @elseif (strrchr($collaboration_formation->img3, ".") == '.png' || strrchr($collaboration_formation->img3, ".") == '.jpg' || strrchr($collaboration_formation->img3, ".") == '.jpeg')

                                                    <img src="{{ asset('public/assets/img/icons/eye-round-blue.png')}}" style="margin-right: -10%; width: 40%; margin-top: 3%;" data-toggle="modal" data-target="#img3_previews_{{$formation->id}}">

                                                @else
                                                    <a href="{{ asset('public/uploads/formation/'.$collaboration_formation->img3)}}" target="_blank">
                                                        <img src="{{ asset('public/assets/img/icons/eye-round-blue.png')}}" style="margin-right: -10%; width: 40%; margin-top: 3%;">
                                                    </a>
                                                @endif
                                                <img src="{{ asset('public/assets/img/icons/Exit_1.png')}}" style="width: 35%;" class="img3_delete_{{$formation->id}}" data-img3-id="{{$collaboration_formation->img3}}" id="img3_delete" data-formation-id="{{$formation->id}}" id="formation_delete_{{$formation->id}}">
                                            </p>
                                        </div>
                                    </div>

                                    {{-- Img4 --}}
                                    <div class="col-lg-3 col-sm-3 pr-2">
                                        <div class="form-group box-with-icon">
                                            <div class="">
                                                <i>
                                                    @if ($collaboration_formation->img4)
                                                        @if ( strrchr($collaboration_formation->img4, ".") == '.pdf')
                                                            <i  class="fa fa-file-pdf-o" aria-hidden="true" style="font-size: 45px;color: #009cde;    padding: 35px 0px 35px 25px;"></i>



                                                        @elseif (strrchr($collaboration_formation->img4, ".") == '.png' || strrchr($collaboration_formation->img4, ".") == '.jpg' || strrchr($collaboration_formation->img4, ".") == '.jpeg')


                                                            <img src="{{ asset('public/uploads/formation/'.$collaboration_formation->img4)}}" name="img4" class="min_img_value">



                                                        @else
                                                            <i  class="fa fa-file-text" aria-hidden="true" style="font-size: 45px;color: #009cde;    padding: 35px 0px 35px 25px;"></i>



                                                        @endif

                                                        <input type="hidden" name="img4" value="{{$collaboration_formation->img4}}">

                                                    @else

                                                        <div class="upload-bx lightgray-upload-bx">

                                                            <i id="imgPreview4form_pdf_{{$formation->id}}" class="fa fa-file-pdf-o" aria-hidden="true" style="display: none;font-size: 45px;color: #009cde;"></i>

                                                            <i id="imgPreview4form_word_{{$formation->id}}" class="fa fa-file-text" aria-hidden="true" style="display: none;font-size: 45px;color: #009cde;"></i>


                                                            <img id="imgPreview4form_{{$formation->id}}" src="{{ asset('public/assets/img/icons/plus_grey.png')}}" />
                                                        </div>
                                                        <input type="file" name="img4" id="imgform4_{{$formation->id}}" class="hide-file-input">
                                                    @endif
                                                </i>
                                            </div>
                                            <p class="text-center view-color" style="bottom: -40%;">

                                                @if ( strrchr($collaboration_formation->img4, ".") == '.pdf')
                                                    <a href="{{ asset('public/uploads/formation/'.$collaboration_formation->img4)}}" target="_blank">
                                                        <img src="{{ asset('public/assets/img/icons/eye-round-blue.png')}}" style="margin-right: -10%; width: 40%; margin-top: 3%;">
                                                    </a>

                                                @elseif (strrchr($collaboration_formation->img4, ".") == '.png' || strrchr($collaboration_formation->img4, ".") == '.jpg' || strrchr($collaboration_formation->img4, ".") == '.jpeg')

                                                    <img src="{{ asset('public/assets/img/icons/eye-round-blue.png')}}" style="margin-right: -10%; width: 40%; margin-top: 3%;" data-toggle="modal" data-target="#img4_previews_{{$formation->id}}">

                                                @else
                                                    <a href="{{ asset('public/uploads/formation/'.$collaboration_formation->img4)}}" target="_blank">
                                                        <img src="{{ asset('public/assets/img/icons/eye-round-blue.png')}}" style="margin-right: -10%; width: 40%; margin-top: 3%;">
                                                    </a>
                                                @endif
                                                <img src="{{ asset('public/assets/img/icons/Exit_1.png')}}" style="width: 35%;" class="img4_delete_{{$formation->id}}" data-img4-id="{{$collaboration_formation->img4}}" id="img4_delete" data-formation-id="{{$formation->id}}" id="formation_delete_{{$formation->id}}">
                                            </p>
                                        </div>
                                    </div>

                                    {{-- <div class="col-lg-3 col-sm-3 pr-2">
                                        <div class="form-group box-with-icon">
                                            <div class="">
                                                <i>
                                                    @if ($collaboration_formation->img2)
                                                        <img src="{{ asset('public/uploads/formation/'.$collaboration_formation->img2)}}" name="img2">
                                                        <input type="hidden" name="img2" value="{{$collaboration_formation->img2}}">
                                                    @else
                                                        <div class="upload-bx lightgray-upload-bx">
                                                            <img id="imgPreview2form_{{$formation->id}}" src="{{ asset('public/assets/img/icons/plus_grey.png')}}" />
                                                        </div>
                                                        <input type="file" name="img2" id="imgform2_{{$formation->id}}" class="hide-file-input">
                                                    @endif

                                                </i>
                                            </div>
                                            <p class="text-center view-color" style="bottom: -40%;">
                                                <img src="{{ asset('public/assets/img/icons/eye-round-blue.png')}}" style="margin-right: -10%; width: 40%; margin-top: 3%;" data-toggle="modal" data-target="#img2_previews_{{$formation->id}}">

                                                <img src="{{ asset('public/assets/img/icons/Exit_1.png')}}" style="width: 35%;" class="img2_delete_{{$formation->id}}" data-img2-id="{{$collaboration_formation->img2}}" id="img2_delete" data-formation-id="{{$formation->id}}" id="formation_delete_{{$formation->id}}">
                                            </p>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-sm-3 pr-2">
                                        <div class="form-group box-with-icon">
                                            <div class="">
                                                <i>
                                                    @if ($collaboration_formation->img3)
                                                        <img src="{{ asset('public/uploads/formation/'.$collaboration_formation->img3)}}" name="img3">
                                                        <input type="hidden" name="img3" value="{{$collaboration_formation->img3}}">

                                                    @else
                                                        <div class="upload-bx lightgray-upload-bx">
                                                            <img id="imgPreview3form_{{$formation->id}}" src="{{ asset('public/assets/img/icons/plus_grey.png')}}" />
                                                        </div>
                                                        <input type="file" name="img3" id="imgform3_{{$formation->id}}" class="hide-file-input">
                                                    @endif

                                                </i>
                                            </div>
                                            <p class="text-center view-color" style="bottom: -40%;">
                                                <img src="{{ asset('public/assets/img/icons/eye-round-blue.png')}}" style="margin-right: -10%; width: 40%; margin-top: 3%;" data-toggle="modal" data-target="#img3_previews_{{$formation->id}}">

                                                <img src="{{ asset('public/assets/img/icons/Exit_1.png')}}" style="width: 35%;" class="img3_delete_{{$formation->id}}" data-img3-id="{{$collaboration_formation->img3}}" id="img3_delete" data-formation-id="{{$formation->id}}" id="formation_delete_{{$formation->id}}">
                                            </p>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-sm-3 pr-2">
                                        <div class="form-group box-with-icon">
                                            <div class="">
                                                <i>
                                                    @if ($collaboration_formation->img4)
                                                        <img src="{{ asset('public/uploads/formation/'.$collaboration_formation->img4)}}" name="img4">

                                                        <input type="hidden" name="img4" value="{{$collaboration_formation->img4}}">

                                                    @else
                                                        <div class="upload-bx lightgray-upload-bx">
                                                            <img id="imgPreview4form_{{$formation->id}}" src="{{ asset('public/assets/img/icons/plus_grey.png')}}" />
                                                        </div>
                                                        <input type="file" name="img4" id="imgform4_{{$formation->id}}"  class="hide-file-input">
                                                    @endif

                                                </i>
                                            </div>
                                            <p class="text-center view-color" style="bottom: -40%;">
                                                <img src="{{ asset('public/assets/img/icons/eye-round-blue.png')}}" style="margin-right: -10%; width: 40%; margin-top: 3%;" data-toggle="modal" data-target="#img4_previews_{{$formation->id}}">

                                                <img src="{{ asset('public/assets/img/icons/Exit_1.png')}}" style="width: 35%;" class="img4_delete_{{$formation->id}}" data-img4-id="{{$collaboration_formation->img4}}" id="img4_delete" data-formation-id="{{$formation->id}}" id="formation_delete_{{$formation->id}}">
                                            </p>
                                        </div>
                                    </div> --}}



                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-sm-12">

                            <!--<button class="btn btn-lightblue btn-lightgreen" type="submit">Enregistrer</button>-->
                            <p class="mt-3 text-bold"><a href="javascript:void(0);" data-toggle="modal" data-target="#formation-delete-modal_{{$formation->id}}"  class="text-blue mark_read_{{$formation->id}}" data-formation-id="{{$formation->id}}" id="formation_delete_{{$formation->id}}"><img src="{{ asset('public/assets/img/icons/delete.png')}}"> Supprimer la formation</a></p>
                        </div>


                    </div>
                </div>
            </form>
        </div>
    </div>
</div>




<div class="modal fade" id="formation-delete-modal_{{ $formation->id }}" role="dialog">
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
						<p class="tx-16 black-text font-weight-bold">"{{$collaboration_formation->formation_name}}"</p>
						<p>Eles-vous sur de supprimer la formation "{{$collaboration_formation->formation_name}}" pour {{$collaboration->prenom}} {{$collaboration->nom}}  ?</p>
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




<div id="img1_previews_{{$formation->id}}" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content model_margin">
            <div class="modal-body">
                <img src="{{ asset('public/uploads/formation/'.$collaboration_formation->img1)}}" class="img_previews">
            </div>
        </div>
    </div>
</div>

<div id="img2_previews_{{$formation->id}}" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content model_margin">
            <div class="modal-body">
                <img src="{{ asset('public/uploads/formation/'.$collaboration_formation->img2)}}" class="img_previews">
            </div>
        </div>
    </div>
</div>

<div id="img3_previews_{{$formation->id}}" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content model_margin">
            <div class="modal-body">
                <img src="{{ asset('public/uploads/formation/'.$collaboration_formation->img3)}}" class="img_previews">
            </div>
        </div>
    </div>
</div>

<div id="img4_previews_{{$formation->id}}" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content model_margin">
            <div class="modal-body">
                <img src="{{ asset('public/uploads/formation/'.$collaboration_formation->img4)}}" class="img_previews">
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        // Open modal on page load
        // Close modal on button click
        $(".close1_{{$formation->id}}").click(function () {
            location.reload();
        });

        $('#view-formation-modal').on('shown.bs.modal', function () {
            $('#add-technician-modal').modal('hide');
        });

    });


    // $("#sendmemessage_{{$formation->id}}").submit(function(stay){
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


    $(document).ready(function () {





        $('.mark_read_{{$formation->id}}').click(function (e) {
            e.preventDefault();


            var formation_id = $("#formation_delete_{{$formation->id}}").data('formation-id');


            $.ajax({
                type: "post",
                url: "{{route('collabotation.formation_delete')}}",
                data: {
                    'formation_id': formation_id,
                    "_token": "{{ csrf_token() }}"
                },
                cache: false,
                success: function (data) {
                    $("#view-formation-modal_"+formation_id).hide();
                    $(".data-formation-id_"+formation_id).remove();
                    console.log(data);
                }
            });
        });
    });


    $(document).ready(function () {
        $('.img1_delete_{{$formation->id}}').click(function (e) {
            e.preventDefault();

            var formation_id = $("#formation_delete_{{$formation->id}}").data('formation-id');
            var img1 = $("#img1_delete").data('img1-id');

            $.ajax({
                type: "post",
                url: "{{route('collabotation.formation_img_delete')}}",
                data: {
                    'img1': img1,
                    'formation_id': formation_id,
                    "_token": "{{ csrf_token() }}"
                },
                cache: false,
                success: function (data) {
                    location.reload();
                }
            });
        });

        $('.img2_delete_{{$formation->id}}').click(function (e) {
            e.preventDefault();

            var formation_id = $("#formation_delete_{{$formation->id}}").data('formation-id');
            var img2 = $("#img2_delete").data('img2-id');

            $.ajax({
                type: "post",
                url: "{{route('collabotation.formation_img_delete')}}",
                data: {
                    'img2': img2,
                    'formation_id': formation_id,
                    "_token": "{{ csrf_token() }}"
                },
                cache: false,
                success: function (data) {
                    location.reload();
                }
            });
        });

        $('.img3_delete_{{$formation->id}}').click(function (e) {
            e.preventDefault();


            var formation_id = $("#formation_delete_{{$formation->id}}").data('formation-id');
            var img3 = $("#img3_delete").data('img3-id');

            $.ajax({
                type: "post",
                url: "{{route('collabotation.formation_img_delete')}}",
                data: {
                    'img3': img3,
                    'formation_id': formation_id,
                    "_token": "{{ csrf_token() }}"
                },
                cache: false,
                success: function (data) {
                    location.reload();
                }
            });
        });

        $('.img4_delete_{{$formation->id}}').click(function (e) {
            e.preventDefault();

            var formation_id = $("#formation_delete_{{$formation->id}}").data('formation-id');
            var img4 = $("#img4_delete").data('img4-id');

            $.ajax({
                type: "post",
                url: "{{route('collabotation.formation_img_delete')}}",
                data: {
                    'img4': img4,
                    'formation_id': formation_id,
                    "_token": "{{ csrf_token() }}"
                },
                cache: false,
                success: function (data) {
                    location.reload();
                }
            });
        });




    });

    $(document).ready(()=>{
            $('#imgform1_{{$formation->id}}').change(function(){
                const file = this.files[0];
                console.log(file);
                if (file){
                let reader = new FileReader();
                reader.onload = function(event){
                    console.log(event.target.result);
                    if(file.type == "application/pdf")
                    {
                        console.log(event.target.result);
                        $('#imgPreview1form_pdf_{{$formation->id}}').show();
                        $('#imgPreview1form_{{$formation->id}}').hide();
                        $('#imgPreview1form_word_{{$formation->id}}').hide();
                    }
                    else if(file.type == "image/png" || file.type == "image/jpg" || file.type == "image/jpeg")
                    {
                        console.log(event.target.result);
                        $('#imgPreview1form_pdf_{{$formation->id}}').hide();
                        $('#imgPreview1form_word_{{$formation->id}}').hide();
                        $('#imgPreview1form_{{$formation->id}}').show();
                        $('#imgPreview1form_{{$formation->id}}').attr('src', event.target.result);
                    }
                    else
                    {
                        $('#imgPreview1form_pdf_{{$formation->id}}').hide();
                        $('#imgPreview1form_{{$formation->id}}').hide();
                        $('#imgPreview1form_word_{{$formation->id}}').show();
                    }

                }
                reader.readAsDataURL(file);
                }
            });

            $('#imgform2_{{$formation->id}}').change(function(){
                const file = this.files[0];
                console.log(file);
                if (file){
                let reader = new FileReader();
                reader.onload = function(event){
                    console.log(event.target.result);
                    if(file.type == "application/pdf")
                    {
                        console.log(event.target.result);
                        $('#imgPreview2form_pdf_{{$formation->id}}').show();
                        $('#imgPreview2form_{{$formation->id}}').hide();
                        $('#imgPreview2form_word_{{$formation->id}}').hide();
                    }
                    else if(file.type == "image/png" || file.type == "image/jpg" || file.type == "image/jpeg")
                    {
                        console.log(event.target.result);
                        $('#imgPreview2form_pdf_{{$formation->id}}').hide();
                        $('#imgPreview2form_word_{{$formation->id}}').hide();
                        $('#imgPreview2form_{{$formation->id}}').show();
                        $('#imgPreview2form_{{$formation->id}}').attr('src', event.target.result);
                    }
                    else
                    {
                        $('#imgPreview2form_pdf_{{$formation->id}}').hide();
                        $('#imgPreview2form_{{$formation->id}}').hide();
                        $('#imgPreview2form_word_{{$formation->id}}').show();
                    }

                }
                reader.readAsDataURL(file);
                }
            });

            $('#imgform3_{{$formation->id}}').change(function(){
                const file = this.files[0];
                console.log(file);
                if (file){
                let reader = new FileReader();
                reader.onload = function(event){
                    console.log(event.target.result);
                    if(file.type == "application/pdf")
                    {
                        console.log(event.target.result);
                        $('#imgPreview3form_pdf_{{$formation->id}}').show();
                        $('#imgPreview3form_{{$formation->id}}').hide();
                        $('#imgPreview3form_word_{{$formation->id}}').hide();
                    }
                    else if(file.type == "image/png" || file.type == "image/jpg" || file.type == "image/jpeg")
                    {
                        console.log(event.target.result);
                        $('#imgPreview3form_pdf_{{$formation->id}}').hide();
                        $('#imgPreview3form_word_{{$formation->id}}').hide();
                        $('#imgPreview3form_{{$formation->id}}').show();
                        $('#imgPreview3form_{{$formation->id}}').attr('src', event.target.result);
                    }
                    else
                    {
                        $('#imgPreview3form_pdf_{{$formation->id}}').hide();
                        $('#imgPreview3form_{{$formation->id}}').hide();
                        $('#imgPreview3form_word_{{$formation->id}}').show();
                    }

                }
                reader.readAsDataURL(file);
                }
            });

            $('#imgform4_{{$formation->id}}').change(function(){
                const file = this.files[0];
                console.log(file);
                if (file){
                let reader = new FileReader();
                reader.onload = function(event){
                    console.log(event.target.result);
                    if(file.type == "application/pdf")
                    {
                        console.log(event.target.result);
                        $('#imgPreview4form_pdf_{{$formation->id}}').show();
                        $('#imgPreview4form_{{$formation->id}}').hide();
                        $('#imgPreview4form_word_{{$formation->id}}').hide();
                    }
                    else if(file.type == "image/png" || file.type == "image/jpg" || file.type == "image/jpeg")
                    {
                        console.log(event.target.result);
                        $('#imgPreview4form_pdf_{{$formation->id}}').hide();
                        $('#imgPreview4form_word_{{$formation->id}}').hide();
                        $('#imgPreview4form_{{$formation->id}}').show();
                        $('#imgPreview4form_{{$formation->id}}').attr('src', event.target.result);
                    }
                    else
                    {
                        $('#imgPreview4form_pdf_{{$formation->id}}').hide();
                        $('#imgPreview4form_{{$formation->id}}').hide();
                        $('#imgPreview4form_word_{{$formation->id}}').show();
                    }
                    $('#imgPreview4form_{{$formation->id}}').attr('src', event.target.result);
                }
                reader.readAsDataURL(file);
                }
            });

    });
</script>




