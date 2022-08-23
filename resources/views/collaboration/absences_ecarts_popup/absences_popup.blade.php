<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="modal fade absence-modal" id="absence-modal_{{ $collaboration_id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <form  method="post" id="absences_form_{{$collaboration_id}}" enctype="multipart/form-data" data-parsley-validate>
                @csrf
                <input type="hidden" name="collaboration_id" id="collaboration_id_{{$collaboration_id}}" value="{{ $collaboration_id }}">
                <div class="modal-header pb-0" style="padding: 20px 25px;background: white;">
                    <h5 class="modal-title">AJOUTER UNE ABSENCE</h5>



                    <a href="javascript:void(0)" class="btn btn-lightblue but_upload_{{$collaboration_id}}" data-toggle="modal"
                        >Ajouter</a>


                    <a class="close1_{{$collaboration_id}}" style="float:right;margin-top: -6px;" href="javascript:void(0)">
                        <img src="{{ asset('public/assets/img/icons/Exit_1.png')}}" style="width: 90%;">
                    </a>
                </div>
                <div class="modal-body">


                        <div class="row">
                            <div class="col-lg-4 col-sm-4 pl-3">
                                <div class="form-group">
                                    <label>Motif</label>
                                    <select class="form-control" name="motif" id="motif_{{$collaboration_id}}">
                                        <option value="CONGÉS PAYÉS">CONGÉS PAYÉS</option>
                                        <option value="CONGÉS PAYÉS1">CONGÉS PAYÉS1</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Début <span class="red_color">*</span></label>
                                    <div class="row">
                                        <div class="col-lg-7 col-sm-7">
                                            <div class="datepicker-container">
                                                <i class="date-icon date-icon1 float-left" aria-hidden="true"></i>
                                                <input class="form-control bar-from" type="text" placeholder="00/00/0000" name="debut_date" id="debut_date_{{$collaboration_id}}" required
                                                data-parsley-required-message="Veuillez entrer Début Date"/>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-sm-5">
                                            <select class="form-control" name="debut_time" id="debut_time_{{$collaboration_id}}" required
                                            data-parsley-required-message="Veuillez entrer Début temps">
                                                <option value="10:00">10:00</option>
                                                <option value="11:00">11:00</option>
                                                <option value="12:00">12:00</option>
                                                <option value="13:00">13:00</option>
                                                <option value="14:00">14:00</option>
                                                <option value="15:00">15:00</option>
                                                <option value="16:00">16:00</option>
                                                <option value="17:00">17:00</option>
                                                <option value="18:00">18:00</option>
                                                <option value="19:00">19:00</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Fin <span class="red_color">*</span></label>
                                    <div class="row">
                                        <div class="col-lg-7 col-sm-7">
                                            <div class="datepicker-container">
                                                <i class="date-icon date-icon1 float-left" aria-hidden="true"></i>
                                                <input class="form-control bar-from" type="text" placeholder="00/00/0000" name="fin_date" id="fin_date_{{$collaboration_id}}" required
                                                data-parsley-required-message="Veuillez entrer fin Date"/>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-sm-5">
                                            <select class="form-control" name="fin_time" id="fin_time_{{$collaboration_id}}" required
                                            data-parsley-required-message="Veuillez entrer fin Date">
                                                <option value="10:00">10:00</option>
                                                <option value="11:00">11:00</option>
                                                <option value="12:00">12:00</option>
                                                <option value="13:00">13:00</option>
                                                <option value="14:00">14:00</option>
                                                <option value="15:00">15:00</option>
                                                <option value="16:00">16:00</option>
                                                <option value="17:00">17:00</option>
                                                <option value="18:00">18:00</option>
                                                <option value="19:00">19:00</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control" rows="12" name="description" id="description_{{$collaboration_id}}" placeholder="Texte..."></textarea>
                                </div>
                            </div>
                            <style>
                                .form input:checked + label:after, form input:checked + label:after {
                                    display: none !important;
                                }
                            </style>
                            <div class="col-lg-4 col-sm-4">
                                <div class="form-group fill-background-checkbox-container" style="position: relative;">
                                    <input type="checkbox" name="repeter" id="repeter_{{$collaboration_id}}" class="form-control" style="display: inline-block;" checked>
                                    <label >Répéter</label>
                                    <select class="form-control" name="recurrence" id="recurrence_{{$collaboration_id}}">
                                        <option value="">Sélectionner</option>
                                        <option value="weekly">PAR SEMAINE</option>
                                        <option value="monthly">PAR MOIS</option>

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Notifier à: <span class="red_color">*</span></label>
                                    <div class="search-container">
                                        <i class="fa" aria-hidden="true">
                                            <img src="{{ asset('public/assets/img/icons/search-blue.png')}}">
                                        </i>
                                        <input type="text" name="search"  class="form-control search_{{$collaboration_id}}"
                                            placeholder="Recherche collaborateurs..." required
                                            data-parsley-required-message="Veuillez entrer Notifier à">
                                    </div>
                                    <div class="pt-2 pb-2 pr-2 mt-1" style="border: 1px solid #e5e5e5;border-radius: 10px;">
                                        <div class="min-height-scroll-table-container">
                                            <div class="card-body p-0 px-2 collaborator_check_{{$collaboration_id}}" >

                                                @php
                                                    $collaborations = DB::table('llx_collaboration')->orderBy('id', 'DESC')->get();
                                                @endphp
                                                <style>
                                                    .notifier_class {
                                                            list-style-type: none;
                                                        }
                                                </style>
                                                <ul class="notifier_class">
                                                    @foreach ($collaborations as $collaboration)
                                                        <li>
                                                            <label class="ckbox my-2">
                                                            <input type="checkbox" class="notier_{{$collaboration_id}}"  name="notier_{{$collaboration_id}}[]" id="notier_{{$collaboration_id}}" value="{{$collaboration->nom}} {{$collaboration->prenom}}"><span>{{$collaboration->nom}} {{$collaboration->prenom}}</span></label>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            <textarea name="" id="notier_values_{{$collaboration_id}}" style="display: none"></textarea>



                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-4">
                                <div class="form-group">
                                    <label>Ajouter des photos</label>
                                    <div class="min-height-scroll-container pt-2 pb-2 pr-2">
                                        <div class="min-height-scroll pt-0">
                                            <div class="row">
                                                <div class="col-lg-5 col-sm-5">
                                                    <div class="form-group">
                                                        <div class="upload-bx lightgray-upload-bx">

                                                            <i id="img1absences_preview_pdf_{{$collaboration_id}}" class="fa fa-file-pdf-o" aria-hidden="true" style="display: none;font-size: 45px;color: #009cde;"></i>

                                                            <i id="img1absences_preview_word_{{$collaboration_id}}" class="fa fa-file-text" aria-hidden="true" style="display: none;font-size: 45px;color: #009cde;"></i>

                                                            <img id="img1absences_preview_{{$collaboration_id}}" src="{{ asset('public/assets/img/icons/plus_grey.png')}}" />
                                                        </div>
                                                        <input type="file" name="img1absences" id="img1absences_{{$collaboration_id}}"  class="hide-file-input">
                                                    </div>
                                                </div>
                                                <div class="col-lg-7 col-sm-7">
                                                    <div class="form-group mt-3">
                                                        <label>Nom</label>
                                                        <input type="text" name="img1absences_name" id="img1absences_name_{{$collaboration_id}}" class="form-control" placeholder="NOM PHOTO">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-5 col-sm-5">
                                                    <div class="form-group">
                                                        <div class="upload-bx lightgray-upload-bx">

                                                            <i id="img2absences_preview_pdf_{{$collaboration_id}}" class="fa fa-file-pdf-o" aria-hidden="true" style="display: none;font-size: 45px;color: #009cde;"></i>

                                                            <i id="img2absences_preview_word_{{$collaboration_id}}" class="fa fa-file-text" aria-hidden="true" style="display: none;font-size: 45px;color: #009cde;"></i>

                                                            <img id="img2absences_preview_{{$collaboration_id}}" src="{{ asset('public/assets/img/icons/plus_grey.png')}}" />
                                                        </div>
                                                        <input type="file" name="img2absences" id="img2absences_{{$collaboration_id}}"  class="hide-file-input">
                                                    </div>
                                                </div>
                                                <div class="col-lg-7 col-sm-7">
                                                    <div class="form-group mt-3">
                                                        <label>Nom</label>
                                                        <input type="text" name="img2absences_name" id="img2absences_name_{{$collaboration_id}}" class="form-control" placeholder="NOM PHOTO">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-5 col-sm-5">
                                                    <div class="form-group">
                                                        <div class="upload-bx lightgray-upload-bx">

                                                            <i id="img3absences_preview_pdf_{{$collaboration_id}}" class="fa fa-file-pdf-o" aria-hidden="true" style="display: none;font-size: 45px;color: #009cde;"></i>

                                                            <i id="img3absences_preview_word_{{$collaboration_id}}" class="fa fa-file-text" aria-hidden="true" style="display: none;font-size: 45px;color: #009cde;"></i>

                                                            <img id="img3absences_preview_{{$collaboration_id}}" src="{{ asset('public/assets/img/icons/plus_grey.png')}}" />
                                                        </div>
                                                        <input type="file" name="img3absences" id="img3absences_{{$collaboration_id}}"  class="hide-file-input">
                                                    </div>
                                                </div>
                                                <div class="col-lg-7 col-sm-7">
                                                    <div class="form-group mt-3">
                                                        <label>Nom</label>
                                                        <input type="text" name="img3absences_name" id="img3absences_name_{{$collaboration_id}}" class="form-control" placeholder="NOM PHOTO">
                                                    </div>
                                                </div>
                                            </div>





                                            <div class="row">
                                                <div class="col-lg-5 col-sm-5">
                                                    <div class="form-group">
                                                        <div class="upload-bx lightgray-upload-bx">

                                                            <i id="img4absences_preview_pdf_{{$collaboration_id}}" class="fa fa-file-pdf-o" aria-hidden="true" style="display: none;font-size: 45px;color: #009cde;"></i>

                                                            <i id="img4absences_preview_word_{{$collaboration_id}}" class="fa fa-file-text" aria-hidden="true" style="display: none;font-size: 45px;color: #009cde;"></i>

                                                            <img id="img4absences_preview_{{$collaboration_id}}" src="{{ asset('public/assets/img/icons/plus_grey.png')}}" />
                                                        </div>
                                                        <input type="file" name="img4absences" id="img4absences_{{$collaboration_id}}"  class="hide-file-input">
                                                    </div>
                                                </div>
                                                <div class="col-lg-7 col-sm-7">
                                                    <div class="form-group mt-3">
                                                        <label>Nom</label>
                                                        <input type="text" name="img4absences_name" id="img4absences_name_{{$collaboration_id}}" class="form-control" placeholder="NOM PHOTO">
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


<div class="modal fade employee-confirmation-absence-modal_{{ $collaboration_id }}" id="employee-confirmation-absence-modal_{{ $collaboration_id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-body">
				<div class="row">
					<div class="col-lg-12 col-sm-12 text-center">
						<p class="employee-confirmation-profile-container">
							<img src="{{ asset('public/assets/img/employee-confirmation-profile.png')}}">
							<i class="fa fa-check fa-3x" aria-hidden="true"></i>
						</p>
						<p class="tx-16 black-text font-weight-bold">Absence ajoutée !</p>
						<p>Absence du <span class="absence_date_{{$collaboration_id}}"></span> a bien été ajouté</p>
						<span class="btn btn-lightblue close2_{{$collaboration_id}}"  type="submit">OK</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
    $(document).ready(function(){
        // Open modal on page load
        // Close modal on button click
        $(".close1_{{$collaboration_id}}").click(function(){
            $("#absence-modal_{{ $collaboration_id }}").modal('hide');
            $('.modal-backdrop').remove();
        });

        $(".close2_{{$collaboration_id}}").click(function(){
            $("#employee-confirmation-absence-modal_{{ $collaboration_id }}").modal('hide');
            $('.modal-backdrop').remove();
            window.location.reload();

        });

        $('#view-informatique-modal').on('shown.bs.modal', function () {
            $('#add-technician-modal').modal('hide');
        });

    });

</script>



<script>
        $(document).ready(()=>{
            $('#img1absences_{{$collaboration_id}}').change(function(){
                const file = this.files[0];

                console.log(file);
                if (file)
                {
                    let reader = new FileReader();

                    reader.onload = function(event){


                    if(file.type == "application/pdf")
                    {
                        $('#img1absences_preview_pdf_{{$collaboration_id}}').show();
                        $('#img1absences_preview_{{$collaboration_id}}').hide();
                        $('#img1absences_preview_word_{{$collaboration_id}}').hide();
                    }
                    else if(file.type == "image/png" || file.type == "image/jpg" || file.type == "image/jpeg")
                    {
                        console.log(event.target.result);
                        $('#img1absences_preview_pdf_{{$collaboration_id}}').hide();
                        $('#img1absences_preview_word_{{$collaboration_id}}').hide();
                        $('#img1absences_preview_{{$collaboration_id}}').show();
                        $('#img1absences_preview_{{$collaboration_id}}').attr('src', event.target.result);
                    }
                    else
                    {
                        $('#img1absences_preview_pdf_{{$collaboration_id}}').hide();
                        $('#img1absences_preview_{{$collaboration_id}}').hide();
                        $('#img1absences_preview_word_{{$collaboration_id}}').show();
                    }

                }
                reader.readAsDataURL(file);

                }
            });


            $('#img2absences_{{$collaboration_id}}').change(function(){
                const file = this.files[0];

                console.log(file);
                if (file)
                {
                    let reader = new FileReader();

                    reader.onload = function(event){


                    if(file.type == "application/pdf")
                    {
                        $('#img2absences_preview_pdf_{{$collaboration_id}}').show();
                        $('#img2absences_preview_{{$collaboration_id}}').hide();
                        $('#img2absences_preview_word_{{$collaboration_id}}').hide();
                    }
                    else if(file.type == "image/png" || file.type == "image/jpg" || file.type == "image/jpeg")
                    {
                        console.log(event.target.result);
                        $('#img2absences_preview_pdf_{{$collaboration_id}}').hide();
                        $('#img2absences_preview_word_{{$collaboration_id}}').hide();
                        $('#img2absences_preview_{{$collaboration_id}}').show();
                        $('#img2absences_preview_{{$collaboration_id}}').attr('src', event.target.result);
                    }
                    else
                    {
                        $('#img2absences_preview_pdf_{{$collaboration_id}}').hide();
                        $('#img2absences_preview_{{$collaboration_id}}').hide();
                        $('#img2absences_preview_word_{{$collaboration_id}}').show();
                    }

                }
                reader.readAsDataURL(file);

                }
            });



            $('#img3absences_{{$collaboration_id}}').change(function(){
                const file = this.files[0];

                console.log(file);
                if (file)
                {
                    let reader = new FileReader();

                    reader.onload = function(event){


                    if(file.type == "application/pdf")
                    {
                        $('#img3absences_preview_pdf_{{$collaboration_id}}').show();
                        $('#img3absences_preview_{{$collaboration_id}}').hide();
                        $('#img3absences_preview_word_{{$collaboration_id}}').hide();
                    }
                    else if(file.type == "image/png" || file.type == "image/jpg" || file.type == "image/jpeg")
                    {
                        console.log(event.target.result);
                        $('#img3absences_preview_pdf_{{$collaboration_id}}').hide();
                        $('#img3absences_preview_word_{{$collaboration_id}}').hide();
                        $('#img3absences_preview_{{$collaboration_id}}').show();
                        $('#img3absences_preview_{{$collaboration_id}}').attr('src', event.target.result);
                    }
                    else
                    {
                        $('#img3absences_preview_pdf_{{$collaboration_id}}').hide();
                        $('#img3absences_preview_{{$collaboration_id}}').hide();
                        $('#img3absences_preview_word_{{$collaboration_id}}').show();
                    }

                }
                reader.readAsDataURL(file);

                }
            });

            $('#img4absences_{{$collaboration_id}}').change(function(){
                const file = this.files[0];

                console.log(file);
                if (file)
                {
                    let reader = new FileReader();

                    reader.onload = function(event){


                    if(file.type == "application/pdf")
                    {
                        $('#img4absences_preview_pdf_{{$collaboration_id}}').show();
                        $('#img4absences_preview_{{$collaboration_id}}').hide();
                        $('#img4absences_preview_word_{{$collaboration_id}}').hide();
                    }
                    else if(file.type == "image/png" || file.type == "image/jpg" || file.type == "image/jpeg")
                    {
                        console.log(event.target.result);
                        $('#img4absences_preview_pdf_{{$collaboration_id}}').hide();
                        $('#img4absences_preview_word_{{$collaboration_id}}').hide();
                        $('#img4absences_preview_{{$collaboration_id}}').show();
                        $('#img4absences_preview_{{$collaboration_id}}').attr('src', event.target.result);
                    }
                    else
                    {
                        $('#img4absences_preview_pdf_{{$collaboration_id}}').hide();
                        $('#img4absences_preview_{{$collaboration_id}}').hide();
                        $('#img4absences_preview_word_{{$collaboration_id}}').show();
                    }

                }
                reader.readAsDataURL(file);

                }
            });
        });
</script>


<script>
(function($){
  $(".search_{{$collaboration_id}}").on('keyup', function(e) {

    var $this = $(this);
    var exp = new RegExp($this.val(), 'i');
    $(".collaborator_check_{{$collaboration_id}}  li label").each(function() {
      var $self = $(this);
      if(!exp.test($self.text())) {
        $self.parent().hide();
      } else {
        $self.parent().show();
      }
    });
  });
})(jQuery);
    // fetch_collaboration_data();
    // function fetch_collaboration_data(queries = '')
    // {

    // }

    // $(document).ready(function(){

    //     $(".search_{{$collaboration_id}}").keyup(function() {
    //         var queries = $(this).val();
    //         var _token = $('input[name="_token"]').val();
    //         $.ajax({

    //             url : "{{ route('collaboration.absence.collaboration_search') }}",
    //             method: 'POST',
    //             data : {queries:queries, _token:_token},
    //             dataType:'json',

    //             success:function(data)
    //             {
    //                 console.log(data.records);

    //                 $('.collaborator_check_{{$collaboration_id}}').html(data.records);
    //             }

    //         });
    //     });
    // });
</script>
<script type="text/javascript">
    $(document).ready(function (e) {
        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        $('#image').change(function(){
            let reader = new FileReader();
            reader.onload = (e) => {
                $('#preview-image-before-upload').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        });

        // $('.add_{{$collaboration_id}}').click(function(e) {
        $(".but_upload_{{$collaboration_id}}").click(function(e){

            // $("#absences_form_{{$collaboration_id}}").on('submit',(function(e) {

            e.preventDefault();

            var collaboration_id = $('#collaboration_id_{{$collaboration_id}}').val();
            var motif = $('#motif_{{$collaboration_id}}').val();
            var debut_date = $('#debut_date_{{$collaboration_id}}').val();
            var debut_time = $('#debut_time_{{$collaboration_id}}').val();
            var fin_date = $('#fin_date_{{$collaboration_id}}').val();
            var fin_time = $('#fin_time_{{$collaboration_id}}').val();
            var description = $('#description_{{$collaboration_id}}').val();

            var repeter = $('input[name="repeter"]').is(':checked');

            var recurrence = $('#recurrence_{{$collaboration_id}}').val();
            var notier = $('#notier_values_{{$collaboration_id}}').val();

            var img1absences_name = $('#img1absences_name_{{$collaboration_id}}').val();
            var img1absences = $('#img1absences_{{$collaboration_id}}').prop('files')[0];

            var img2absences_name = $('#img2absences_name_{{$collaboration_id}}').val();
            var img2absences = $('#img2absences_{{$collaboration_id}}').prop('files')[0];

            var img3absences_name = $('#img3absences_name_{{$collaboration_id}}').val();
            var img3absences = $('#img3absences_{{$collaboration_id}}').prop('files')[0];

            var img4absences_name = $('#img4absences_name_{{$collaboration_id}}').val();
            var img4absences = $('#img4absences_{{$collaboration_id}}').prop('files')[0];

            if(debut_date !='' && debut_time !='' &&  fin_date !='' && fin_time!='' && notier!='')
            {
                var form_data = new FormData();

                form_data.append('collaboration_id', collaboration_id);
                form_data.append('motif', motif);
                form_data.append('debut_date', debut_date);
                form_data.append('debut_time', debut_time);
                form_data.append('fin_date', fin_date);
                form_data.append('fin_time', fin_time);
                form_data.append('description', description);
                form_data.append('repeter', repeter);
                form_data.append('recurrence', recurrence);
                form_data.append('notier', notier);
                form_data.append('img1absences_name', img1absences_name);
                form_data.append('img1absences', img1absences);

                form_data.append('img2absences_name', img2absences_name);
                form_data.append('img2absences', img2absences);

                form_data.append('img3absences_name', img3absences_name);
                form_data.append('img3absences', img3absences);

                form_data.append('img4absences_name', img4absences_name);
                form_data.append('img4absences', img4absences);

                console.log(form_data);



                $.ajax({
                    type:'POST',
                    url: "{{  route('collabotation.absences_ecarts.absences')}}",
                    // data: $('#absences_form_{{$collaboration_id}}').serialize(),
                    data:  form_data,
                    cache:false,
                    contentType: false,
                    processData: false,
                    dataType:'json',
                    success: function(data){
                        console.log(data.dates);

                        $("#employee-confirmation-absence-modal_{{ $collaboration_id }}").modal('show');

                        $('.absence_date_{{$collaboration_id}}').html(data.dates);

                        setTimeout(() => {
                            window.location.reload();
                        }, 5000)
                    },
                    error: function(data){
                        console.log(data);
                    }
                });

            }else
            {

                $.confirm({
                    title: 'Avertissement !',
                    content: 'veuillez entrer des entrées valides',
                    buttons: {
                        cancel: function () {
                            //$.alert('You are safe!');
                        }
                    }
                });

            }

        });
    });
</script>


<script>
    $('.notier_{{$collaboration_id}}').click(function(){

        values = "";
        $('input.notier_{{$collaboration_id}}:checked').each(function(){
            values += $(this).val() + ", ";
        });
        if(values){
            $('#notier_values_{{$collaboration_id}}').html(values);
        }else{
            $('#notier_values_{{$collaboration_id}}').html("None");
        }

    });
</script>
