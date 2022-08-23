<!--edit Agence-->
<style>

    div.btn-add-img img.plus-img
    {
        position: absolute;
        top: 35%;
        left: 45%;
    }
    .form-control{
        border:1px solid #ced4da!important
    }
    .img_top{
        margin-top: -22px;
    }
    .td{
        color: #747474 !important;
    }
    .th{
        color: #009cde !important;
    }


</style>

<div class="modal view-formation-modal agencesDetailsModal"  id="agencesDetailsModal_{{$agent->id}}" tabindex="-1" aria-labelledby="agencesDetailsModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">EDITER UNE AGENCE</h6>
                <button class="btn btn-lightblue float-right mr-5">Enregistrer</button>
                <button type="button" class="close btn-blue-white mt-3" data-dismiss="modal" aria-label="Close" style="color:#009CDE !important; padding:8px;font-weight:normal;"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="tab-header agencesTabs nav-bg mt-4">
                <nav class="nav nav-tabs">
                    <a class="nav-link active" data-toggle="tab" id="agencesInformationBtn_{{$agent->id}}" href="#agencesInformation_{{$agent->id}}">Informations</a>
                    <a class="nav-link" data-toggle="tab" id="agencesHistoriqueBtn_{{$agent->id}}" href="#agencesHistorique_{{$agent->id}}">Historique</a>
                    <a class="nav-link" data-toggle="tab" id="agencesPieceJointesBtn_{{$agent->id}}" href="#agencesPieceJointes_{{$agent->id}}">Pièce jointes</a>
                    <a class="nav-link" data-toggle="tab" id="agencesEtatStockBtn_{{$agent->id}}" href="#agencesEtatStock_{{$agent->id}}">Etat de stock</a>
                    <button class="export-pdf-brn btn-white-blue border-0">Exporter PDF</button>
                </nav>
            </div>
            <div class="modal-body p-0">

                <div class="card-body tab-content px-0">
                    <div class="tab-pane active show agencesInformation" id="agencesInformation_{{$agent->id}}">
                        <div class="card-body">
                            <form action="" method="post" id="agence_from_{{$agent->id}}">
                                @csrf
                                <input type="hidden" value="{{$agent->id}}" name="agent_id">
                                <div class="row min-height-scroll">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Nom de l’agence</label>
                                            <input type="text" class="form-control" value="{{$agent->agencenom}}" name="agencenom" id="agencenom_{{$agent->id}}" placeholder="AGENCE">
                                        </div>
                                        <div class="form-group">
                                            <label>Adresse de l'agence</label>
                                            <input type="text" name="agenceaddress" id="agenceaddress_{{$agent->id}}" value="{{$agent->agenceaddress}}"  class="form-control mb-1" placeholder="RUE">

                                            <input type="text" name="agencebat" id="agencebat_{{$agent->id}}" value="{{$agent->agencebat}}"  class="form-control mb-1" placeholder="BAT">

                                            <div class="row">
                                                <div class="col-lg-5 col-sm-5">
                                                    <input type="text" name="postal_code" id="postal_code_{{$agent->id}}" value="{{$agent->postal_code}}"  class="form-control mb-1" placeholder="0000">
                                                </div>
                                                <div class="col-lg-7 col-sm-7">
                                                    <select class="form-control mb-1" name="agencecity" id="agencecity_{{$agent->id}}">

                                                        <option {{ $agent->agencecity == 'Dubai' ? 'selected' : '' }} value="Dubai"> Dubai </option>
                                                        <option {{ $agent->agencecity == 'Paris' ? 'selected' : '' }} value="Paris"> Paris </option>
                                                        <option {{ $agent->agencecity == 'city' ? 'selected' : '' }} value="city"> City </option>

                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Nom du responsable</label>
                                            <input type="text" name="responsible" id="responsible_{{$agent->id}}" value="{{$agent->responsible}}" class="form-control" placeholder="RESPONSABLE">
                                        </div>

                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Tél. agence</label>
                                            <input type="text" name="telagency" id="telagency_{{$agent->id}}" class="form-control" value="{{$agent->telagency}}" placeholder="00 00 00 00 00">
                                        </div>

                                        <div class="form-group">
                                            <label>Tél. service client</label>
                                            <input type="text" name="telServiceclient" id="telServiceclient_{{$agent->id}}" value="{{$agent->telServiceclient}}" class="form-control" placeholder="00 00 00 00 00">
                                        </div>

                                        <div class="form-group">
                                            <label>Email de l'agence</label>
                                            <input type="text" name="emailagence" id="emailagence_{{$agent->id}}" value="{{$agent->emailagence}}" class="form-control" placeholder="xxxxxxxxxxxx@xxxxxxxx.xxx">
                                        </div>
                                        <div class="form-group mt-4">
                                            <div class="row">
                                                <div class="col-lg-5 col-sm-5">
                                                    <label>Tél. responsable</label>
                                                    <input type="text" name="telresponsible" id="telresponsible" value="{{$agent->telresponsible}}" class="form-control mb-1" placeholder="00 00 00 00 00">
                                                </div>
                                                <div class="col-lg-7 col-sm-7">
                                                    <label>Email responsable</label>
                                                    <input type="text" name="emailesponsible" id="emailesponsible_{{$agent->id}}" value="{{$agent->emailesponsible}}" class="form-control mb-1" placeholder="xxxxxxxxxxxx@xxxxxxxx.xxx">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>

                    <div class="tab-pane agencesHistorique" id="agencesHistorique_{{$agent->id}}">
                        <div class="historique-custom-scroll">
                            <div class="card-body py-0">
                                @if(count($agent->agencycomments)>0)
                                    @foreach ($agent->agencycomments as $agencycomments)

                                    <div class="items">
                                        <h6 class="mb-2 text-blue font-weight-bold">{{$agencycomments->topic}}</h6>
                                        <p class="font-weight-bold mb-2">{{$agencycomments->topic}}</p>
                                        <div class="">
                                            <p>{{$agencycomments->description}}</p>
                                        </div>

                                    </div>


                                    @endforeach

                                @endif
                            </div>
                        </div>
                        <div class="card-body d-inline-block w-100" style="float: unset;text-align:center;margin: 0 auto;">
                            <a href="javascript:void(0);" class="btn-blue-white" data-toggle="modal" data-target="#ajouterCommentaireAgenceModal_{{$agent->id}}" style="float: unset;text-align: center;margin: 0 auto;">Ajouter un commentaire</a>
                        </div>
                        @include('agences.Add_comment_agency')
                    </div>

                    <div class="tab-pane" class="agencesPieceJointes" id="agencesPieceJointes_{{$agent->id}}">
                        <form method="post" action="{{route('StoreAgencyPieceJoints')}}" enctype="multipart/form-data">
                            @csrf
                            @php
                                $agencyPhoto1=DB::table('agency_images')->where('agency_id',$agent->id)->where('pic_pos',1)->first();
                            @endphp

                            @php
                                $agencyPhoto2=DB::table('agency_images')->where('agency_id',$agent->id)->where('pic_pos',2)->first();
                            @endphp

                            @php
                                $agencyPhoto3=DB::table('agency_images')->where('agency_id',$agent->id)->where('pic_pos',3)->first();
                            @endphp
                            <div class="card-body px-0 text-center">
                                <div class="items d-inline-block mx-2 my-4">
                                    <label class="d-block text-center">Nom Photo</label>
                                    <div class="d-inline-block pos-relative" >
                                        <div  class="upload-bx1  border-0 btn-add-img"  id="{{$agent->id}}" style="width: 200px;height: 200px;background: #f4f4f4;border-radius: 25px;">
                                            @if ($agencyPhoto1!=NULL)

                                                @php
                                                    $ext = explode('.',$agencyPhoto1->pic_url);

                                                @endphp
                                                @if ($ext[1] == 'png' || $ext[1] == 'jpg' || $ext[1] == 'jpeg')
                                                    <img id="imgPreview1_{{$agent->id}}" src="{{ asset('public/uploads/Agency_images/'.$agencyPhoto1->pic_url)}}" name="img1" style="width:100%;height:100%;border-radius: 25px;" >

                                                @elseif($ext[1] == 'pdf' )
                                                    <i id="imgPreview1_pdf_{{$agent->id}}" class="fa fa-file-pdf-o" aria-hidden="true" style="font-size: 90px;margin-top: 25%;color: #009cde;"></i>

                                                @elseif($ext[1] == 'docx' )
                                                    <i id="imgPreview1_word_{{$agent->id}}" class="fa fa-file-text" aria-hidden="true" style="font-size: 90px;margin-top: 25%;color: #009cde;"></i>
                                                @endif

                                            @else
                                                <img id="imgPreview1_{{$agent->id}}" src="{{ asset('public/assets/img/icons/plus_grey.png')}}" class="plus-img" />
                                            @endif
                                        </div>

                                        <input type="file" name="img1_{{$agent->id}}" id="img1_{{$agent->id}}" onchange="UploadAgencyImage1({{$agent->id}});" class="hide-file-input img11{{$agent->id}}">
                                        <img class="btn-view-blue img_top" src="{{ asset('public/assets/img/icons/eye-round-blue.png')}}" data-toggle="modal" data-target="#img1_previews1{{$agent->id}}">
                                        <img class="img-close img_top img1_delete_{{!empty($agencyPhoto1->id) ? $agencyPhoto1->id : ''}}"  style="width: 25%;" src="{{ asset('public/assets/img/icons/Exit_1.png')}}"  data-img1-id="{{!empty($agencyPhoto1->id) ? $agencyPhoto1->id : ''}}"  id="agencyPhoto_delete">


                                        {{-- Img Preview Popup --}}
                                        <div id="img1_previews1{{$agent->id}}" class="modal fade" role="dialog">
                                            <div class="modal-dialog modal-dialog-centered">

                                                <div class="modal-content model_margin">
                                                    <div class="modal-body">

                                                        @if ($agencyPhoto1!=NULL)
                                                        <img src="{{asset('public/uploads/Agency_images/'.$agencyPhoto1->pic_url)}}"/>
                                                        @else
                                                        <img src=""/>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Img Preview Popup --}}





                                    </div>
                                </div>

                                <div class="items d-inline-block mx-2 my-4">
                                    <label class="d-block text-center">Nom Photo</label>
                                    <div class="d-inline-block pos-relative" >
                                        <div  class="upload-bx2  border-0 btn-add-img"  id="{{$agent->id}}" style="width: 200px;height: 200px; background: #f4f4f4;border-radius: 25px;">
                                            @if ($agencyPhoto2!=NULL)

                                                @php
                                                    $ext2 = explode('.',$agencyPhoto2->pic_url);
                                                @endphp
                                                @if ($ext2[1] == 'png' || $ext2[1] == 'jpg' || $ext2[1] == 'jpeg')
                                                    <img id="imgPreview2_{{$agent->id}}"  src="{{ asset('public/uploads/Agency_images/'.$agencyPhoto2->pic_url)}}" name="img1"  style="width:100%;height:100%; border-radius: 25px;" >

                                                @elseif($ext2[1] == 'pdf' )
                                                    <i id="imgPreview2_pdf_{{$agent->id}}" class="fa fa-file-pdf-o" aria-hidden="true" style="font-size: 90px;margin-top: 25%;color: #009cde;"></i>

                                                @elseif($ext2[1] == 'docx' )
                                                    <i id="imgPreview2_word_{{$agent->id}}" class="fa fa-file-text" aria-hidden="true" style="font-size: 90px;margin-top: 25%;color: #009cde;"></i>
                                                @endif



                                            @else
                                                <img id="imgPreview2_{{$agent->id}}" src="{{ asset('public/assets/img/icons/plus_grey.png')}}" class="plus-img" />
                                            @endif
                                        </div>
                                        <input type="file" name="img2_{{$agent->id}}" id="img2_{{$agent->id}}" onchange="UploadAgencyImage2({{$agent->id}});" class="hide-file-input img11{{$agent->id}}">
                    <!--                                    <button class="btn-view-blue"><img src="./assets/img/svgs/view.svg"></button>
                                        <button type="button" class="img-close" style=""><span aria-hidden="tru-e">&times;</span></button>-->
                                        <img class="btn-view-blue img_top" src="{{ asset('public/assets/img/icons/eye-round-blue.png')}}" data-toggle="modal" data-target="#img1_previews2{{$agent->id}}">
                                        <img class="img-close img_top img2_delete_{{!empty($agencyPhoto2->id) ? $agencyPhoto2->id : ''}}"  style="width: 25%;"  src="{{ asset('public/assets/img/icons/Exit_1.png')}}" data-img2-id="{{!empty($agencyPhoto2->id) ? $agencyPhoto2->id : ''}}"  data-formation-id="" id="agencyPhoto_delete">



                                        {{-- Img Preview Popup --}}

                                        <div id="img1_previews2{{$agent->id}}" class="modal fade" role="dialog">
                                            <div class="modal-dialog modal-dialog-centered">

                                                <div class="modal-content model_margin">
                                                    <div class="modal-body">

                                                        @if ($agencyPhoto2!=NULL)
                                                        <img src="{{asset('public/uploads/Agency_images/'.$agencyPhoto2->pic_url)}}"/>
                                                        @else
                                                        <img src=""/>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        {{-- Img Preview Popup --}}

                                    </div>
                                </div>

                                <div class="items d-inline-block mx-2 my-3" id="photoModle_{{$agent->id}}">
                                    <label class="d-block text-center">Nom Photo</label>
                                    <div class="d-inline-block pos-relative" >
                                        <div  class="upload-bx3  border-0 btn-add-img"  id="{{$agent->id}}" style="width: 200px;height: 200px; background: #f4f4f4;border-radius: 25px;">
                                            @if ($agencyPhoto3!=NULL)


                                                @php
                                                    $ext3 = explode('.',$agencyPhoto3->pic_url);
                                                @endphp
                                                @if ($ext3[1] == 'png' || $ext3[1] == 'jpg' || $ext3[1] == 'jpeg')
                                                    <img id="imgPreview11_{{$agent->id}}"  src="{{ asset('public/uploads/Agency_images/'.$agencyPhoto3->pic_url)}}" name="img1" style="width:100%;height:100%;border-radius: 25px;" >

                                                @elseif($ext3[1] == 'pdf' )
                                                    <i id="imgPreview11_pdf_{{$agent->id}}" class="fa fa-file-pdf-o" aria-hidden="true" style="font-size: 90px;margin-top: 25%;color: #009cde;"></i>

                                                @elseif($ext3[1] == 'docx' )
                                                    <i id="imgPreview11_word_{{$agent->id}}" class="fa fa-file-text" aria-hidden="true" style="font-size: 90px;margin-top: 25%;color: #009cde;"></i>
                                                @endif



                                            @else
                                                <img id="imgPreview11_{{$agent->id}}" src="{{ asset('public/assets/img/icons/plus_grey.png')}}" class="plus-img"  />
                                            @endif
                                        </div>
                                        <input type="file" name="img11_{{$agent->id}}" id="img11_{{$agent->id}}"  onchange="UploadAgencyImage3({{$agent->id}});" class="hide-file-input img11{{$agent->id}}">
                                        <img class="btn-view-blue img_top" src="{{ asset('public/assets/img/icons/eye-round-blue.png')}}" data-toggle="modal" data-target="#img1_previews3{{$agent->id}}">
                                        <img class="img-close img_top img3_delete_{{!empty($agencyPhoto3->id) ? $agencyPhoto3->id : ''}}"  style="width: 25%;" src="{{ asset('public/assets/img/icons/Exit_1.png')}}"  data-img3-id="{{!empty($agencyPhoto3->id) ? $agencyPhoto3->id : ''}}"  data-formation-id="" id="agencyPhoto_delete">


                                        {{-- Img Preview Popup --}}

                                        <div id="img1_previews3{{$agent->id}}" class="modal fade" role="dialog">
                                            <div class="modal-dialog modal-dialog-centered">

                                                <div class="modal-content model_margin">
                                                    <div class="modal-body">

                                                        @if ($agencyPhoto3!=NULL)
                                                        <img src="{{asset('public/uploads/Agency_images/'.$agencyPhoto3->pic_url)}}"/>
                                                        @else
                                                        <img src=""/>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Img Preview Popup --}}
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>


                    <div class="tab-pane" class="agencesEtatStock" id="agencesEtatStock_{{$agent->id}}">
                        <div class="historique-custom-scroll">
                            <div class="table-responsive">
                                <table class="table w-100" id="agaencesDataTable" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th class="th">Nom</th>
                                            <th class="th">Date</th>
                                            <th class="th">Photos</th>
                                            <th class="th">Actions</th>
                                            <th class="th"></th>

                                        </tr>
                                        @if(count($agent->agencyevents)>0)
                                        @foreach ($agent->agencyevents as $agencyevents)
                                        <tr data-toggle="modal" data-target="#planifier-modal_{{ $agencyevents->id }}">
                                            <td style="color: #747474 !important;">{{$agencyevents->nom}}</td>
                                            <td style="color: #747474 !important;">{{$agencyevents->date_created}}</td>
                                            <td style="color: #747474 !important;">{{$agencyevents->telephone}}</td>
                                            <td style="color: #747474 !important;">Supprimer</td>
                                            <td><a href="#" style="color: #27C291;"><img src="{{ asset('public/assets/img/icons/eye-green.png')}}" class="mr-2"> Voir</a></td>
                                        </tr>

                                        @endforeach
                                        @else
                                        <tr>No data found</tr>
                                        @endif
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>




<script>
            $("#agencesEtatStockBtn_{{$agent->id}}").click(function () {
                $(".export-pdf-brn").show();
            });
            $("#agencesInformationBtn_{{$agent->id}},#agencesHistoriqueBtn_{{$agent->id}},#agencesPieceJointesBtn_{{$agent->id}}").click(function () {
                $(".export-pdf-brn").hide();
            });



        $('.img1_delete_{{!empty($agencyPhoto1->id) ? $agencyPhoto1->id : ''}}').click(function (e) {
            e.preventDefault();

            var img1_id = $(".img1_delete_{{!empty($agencyPhoto1->id) ? $agencyPhoto1->id : ''}}").data('img1-id');
            $.ajax({
                type: "post",
                url: "{{route('agency.photo_img_delete')}}",
                data: {

                    'pic_name': img1_id,
                    "_token": "{{ csrf_token() }}"
                },
                cache: false,
                success: function (data) {
                    location.reload();
                }
            });
        });


        $('.img2_delete_{{!empty($agencyPhoto2->id) ? $agencyPhoto2->id : ''}}').click(function (e) {
            e.preventDefault();

            var img2_id = $(".img2_delete_{{!empty($agencyPhoto2->id) ? $agencyPhoto2->id : ''}}").data('img2-id');
            $.ajax({
                type: "post",
                url: "{{route('agency.photo_img_delete')}}",
                data: {

                    'pic_name': img2_id,
                    "_token": "{{ csrf_token() }}"
                },
                cache: false,
                success: function (data) {
                    location.reload();
                }
            });
        });


        $('.img3_delete_{{!empty($agencyPhoto3->id) ? $agencyPhoto3->id : ''}}').click(function (e) {
            e.preventDefault();

            var img3_id = $(".img3_delete_{{!empty($agencyPhoto3->id) ? $agencyPhoto3->id : ''}}").data('img3-id');
            $.ajax({
                type: "post",
                url: "{{route('agency.photo_img_delete')}}",
                data: {

                    'pic_name': img3_id,
                    "_token": "{{ csrf_token() }}"
                },
                cache: false,
                success: function (data) {
                    location.reload();
                }
            });
        });
</script>






<script>
    $('#agencenom_{{$agent->id}}').on('keyup', function(e) {
            e.preventDefault();
            var dataString = $("#agence_from_{{$agent->id}}").serialize();
            var agencenom = $('#agencenom_{{$agent->id}}').val();
            $.ajax({
                url: '{{ route("agence.edit") }}',
                method: 'POST',
                dataType: 'json',
                data: dataString+"&"+"agencenom=" + agencenom,
            }).done(function (data) {

            }).fail(function () {
                    //alert('Search result not found!');
            });
    });


    $('#agenceaddress_{{$agent->id}}').on('keyup', function(e) {
            e.preventDefault();
            var dataString = $("#agence_from_{{$agent->id}}").serialize();
            $.ajax({
                url: '{{ route("agence.edit") }}',
                method: 'POST',
                dataType: 'json',
                data: dataString,
            }).done(function (data) {

            }).fail(function () {
                    //alert('Search result not found!');
            });
    });


    $('#agencebat_{{$agent->id}}').on('keyup', function(e) {
            e.preventDefault();
            var dataString = $("#agence_from_{{$agent->id}}").serialize();
            $.ajax({
                url: '{{ route("agence.edit") }}',
                method: 'POST',
                dataType: 'json',
                data: dataString,
            }).done(function (data) {

            }).fail(function () {
                    //alert('Search result not found!');
            });
    });


    $('#postal_code_{{$agent->id}}').on('keyup', function(e) {
            e.preventDefault();
            var dataString = $("#agence_from_{{$agent->id}}").serialize();
            $.ajax({
                url: '{{ route("agence.edit") }}',
                method: 'POST',
                dataType: 'json',
                data: dataString,
            }).done(function (data) {

            }).fail(function () {
                    //alert('Search result not found!');
            });
    });
    $("#agencecity_{{$agent->id}}").change(function(e){
            e.preventDefault();
            var dataString = $("#agence_from_{{$agent->id}}").serialize();
            $.ajax({
                url: '{{ route("agence.edit") }}',
                method: 'POST',
                dataType: 'json',
                data: dataString,
            }).done(function (data) {

            }).fail(function () {
                    //alert('Search result not found!');
            });
    });

    $('#responsible_{{$agent->id}}').on('keyup', function(e) {
            e.preventDefault();
            var dataString = $("#agence_from_{{$agent->id}}").serialize();
            $.ajax({
                url: '{{ route("agence.edit") }}',
                method: 'POST',
                dataType: 'json',
                data: dataString,
            }).done(function (data) {

            }).fail(function () {
                    //alert('Search result not found!');
            });
    });
    $('#telagency_{{$agent->id}}').on('keyup', function(e) {
            e.preventDefault();
            var dataString = $("#agence_from_{{$agent->id}}").serialize();
            $.ajax({
                url: '{{ route("agence.edit") }}',
                method: 'POST',
                dataType: 'json',
                data: dataString,
            }).done(function (data) {

            }).fail(function () {
                    //alert('Search result not found!');
            });
    });

    $('#telServiceclient_{{$agent->id}}').on('keyup', function(e) {
            e.preventDefault();
            var dataString = $("#agence_from_{{$agent->id}}").serialize();
            $.ajax({
                url: '{{ route("agence.edit") }}',
                method: 'POST',
                dataType: 'json',
                data: dataString,
            }).done(function (data) {

            }).fail(function () {
                    //alert('Search result not found!');
            });
    });

    $('#emailagence_{{$agent->id}}').on('keyup', function(e) {
            e.preventDefault();
            var dataString = $("#agence_from_{{$agent->id}}").serialize();
            $.ajax({
                url: '{{ route("agence.edit") }}',
                method: 'POST',
                dataType: 'json',
                data: dataString,
            }).done(function (data) {

            }).fail(function () {
                    //alert('Search result not found!');
            });
    });

    $('#emailagence_{{$agent->id}}').on('keyup', function(e) {
            e.preventDefault();
            var dataString = $("#agence_from_{{$agent->id}}").serialize();
            $.ajax({
                url: '{{ route("agence.edit") }}',
                method: 'POST',
                dataType: 'json',
                data: dataString,
            }).done(function (data) {

            }).fail(function () {
                    //alert('Search result not found!');
            });
    });

    $('#emailesponsible_{{$agent->id}}').on('keyup', function(e) {
            e.preventDefault();
            var dataString = $("#agence_from_{{$agent->id}}").serialize();
            $.ajax({
                url: '{{ route("agence.edit") }}',
                method: 'POST',
                dataType: 'json',
                data: dataString,
            }).done(function (data) {

            }).fail(function () {
                    //alert('Search result not found!');
            });
    });







</script>


<!-- comment -->
<!--edit Agence-->
