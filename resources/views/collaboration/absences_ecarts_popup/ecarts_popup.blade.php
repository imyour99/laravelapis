<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="modal fade ecarts-modal" id="ecarts-modal_{{ $collaboration_id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-xl">
		<div class="modal-content">
            <input type="hidden" name="collaboration_id" id="collaboration_id_{{$collaboration_id}}" value="{{ $collaboration_id }}">
			<div class="modal-header pb-0" style="padding: 20px 25px;background: white;">
				<h5 class="modal-title">AJOUTER UN ECART</h5>




                <a href="javascript:void(0)" class="btn btn-lightblue but_ecart_upload_{{$collaboration_id}}" data-toggle="modal"
                        data-target="">Ajouter</a>


				<a class="close1ecart_{{$collaboration_id}}" style="float:right;margin-top: -6px;" href="javascript:void(0)">
                    <img src="{{ asset('public/assets/img/icons/Exit_1.png')}}" style="width: 90%;">
                </a>
				<!--<a href="javascript:void(0);" class="btn-blue-white float-right mt-0" data-toggle="modal" data-target="#employee-confirmation-ecart-modal">
				Ajouter
				</a>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">
				<img src="assets/img/icons/Exit_1.png">
				</span>
				</button>-->
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-lg-4 col-sm-4 pl-3">
						<div class="form-group">
							<label>Motif</label>
							<select class="form-control" name="motif" id="motif_e_{{$collaboration_id}}">
								<option>CONGÉS PAYÉS</option>
							</select>
						</div>
						<div class="form-group">
							<label>Début</label>
							<div class="row">
								<div class="col-lg-7 col-sm-7">
									<div class="datepicker-container">
										<i class="date-icon date-icon1 float-left" aria-hidden="true"></i>
										<input class="form-control bar-from" type="text" placeholder="00/00/0000"  name="debut_date" id="debut_date_e_{{$collaboration_id}}"/>
									</div>
								</div>
								<div class="col-lg-5 col-sm-5">
									<select class="form-control" name="debut_time" id="debut_time_e_{{$collaboration_id}}">
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
							<label>Fin</label>
							<div class="row">
								<div class="col-lg-7 col-sm-7">
									<div class="datepicker-container">
										<i class="date-icon date-icon1 float-left" aria-hidden="true"></i>
										<input class="form-control bar-from" type="text" placeholder="00/00/0000" id="fin_date_e_{{$collaboration_id}}"/>
									</div>
								</div>
								<div class="col-lg-5 col-sm-5">
									<select class="form-control" name="fin_time" id="fin_time_e_{{$collaboration_id}}">
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
							<textarea class="form-control" rows="12" placeholder="Texte..." id="description_e_{{$collaboration_id}}" ></textarea>
						</div>
					</div>
                    <style>
                        .form input:checked + label:after, form input:checked + label:after {
                            display: none !important;
                        }
                    </style>
					<div class="col-lg-4 col-sm-4">
						<div class="form-group" style="position: relative;">
							<input type="checkbox" name="repeter_e" id="repeter_e_{{$collaboration_id}}" class="form-control" style="display: inline-block;">
							<label style="margin-top: 0px; position: absolute; margin-left: 5px;">Répéter</label>
							<select class="form-control" name="recurrence" id="recurrence_e_{{$collaboration_id}}">

                                <option value="">Sélectionner</option>
                                <option value="weekly">PAR SEMAINE</option>
                                <option value="monthly">PAR MOIS</option>
							</select>
						</div>
						<div class="form-group">
							<label>Notifier à:</label>
							<div class="search-container">
								<i class="fa" aria-hidden="true">
									<img src="{{ asset('public/assets/img/icons/search-orange.png')}}">
								</i>
                                <input type="text" name="search"  class="form-control search_e_{{$collaboration_id}}"
                                            placeholder="Recherche collaborateurs...">

							</div>
							<div class="pt-2 pb-2 pr-2 mt-1" style="border: 1px solid #e5e5e5;border-radius: 10px;">
								<div class="min-height-scroll-table-container">
									<div class="card-body p-0 px-2 collaborator_check_e_{{$collaboration_id}}"">
										@php
                                            $collaborations = DB::table('llx_collaboration')->orderBy('id', 'DESC')->get();
                                        @endphp
                                        <style>
                                            .notifier_class2 {
                                                    list-style-type: none;
                                                }
                                        </style>
                                        <ul class="notifier_class2">
                                            @foreach ($collaborations as $collaboration)
                                                <li>
                                                    <label class="ckbox my-2">
                                                    <input type="checkbox" class="notier_e_{{$collaboration_id}}"  name="notier_{{$collaboration_id}}[]" id="notier_{{$collaboration_id}}" value="{{$collaboration->nom}} {{$collaboration->prenom}}"><span>{{$collaboration->nom}} {{$collaboration->prenom}}</span></label>
                                                </li>
                                            @endforeach
                                        </ul>
									</div>
                                    <textarea name="" id="notier_e_values_{{$collaboration_id}}" style="display: none"></textarea>
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

                                                    <i id="img1ecart_preview_pdf_{{$collaboration_id}}" class="fa fa-file-pdf-o" aria-hidden="true" style="display: none;font-size: 45px;color: #009cde;"></i>

                                                    <i id="img1ecart_preview_word_{{$collaboration_id}}" class="fa fa-file-text" aria-hidden="true" style="display: none;font-size: 45px;color: #009cde;"></i>

													<img id="img1ecart_preview_{{$collaboration_id}}" src="{{ asset('public/assets/img/icons/plus_grey.png')}}" />
												</div>
												<input type="file" name="img1ecart" id="img1ecart_{{$collaboration_id}}"  class="hide-file-input">
											</div>
										</div>
										<div class="col-lg-7 col-sm-7">
											<div class="form-group mt-3">
												<label>Nom</label>
												<input type="text" name="img1ecart_name" id="img1ecart_name_{{$collaboration_id}}" class="form-control" placeholder="NOM PHOTO">
											</div>
										</div>
									</div>



                                    <div class="row">
										<div class="col-lg-5 col-sm-5">
											<div class="form-group">
												<div class="upload-bx lightgray-upload-bx">

                                                    <i id="img2ecart_preview_pdf_{{$collaboration_id}}" class="fa fa-file-pdf-o" aria-hidden="true" style="display: none;font-size: 45px;color: #009cde;"></i>

                                                    <i id="img2ecart_preview_word_{{$collaboration_id}}" class="fa fa-file-text" aria-hidden="true" style="display: none;font-size: 45px;color: #009cde;"></i>

													<img id="img2ecart_preview_{{$collaboration_id}}" src="{{ asset('public/assets/img/icons/plus_grey.png')}}" />
												</div>
												<input type="file" name="img2ecart" id="img2ecart_{{$collaboration_id}}"  class="hide-file-input">
											</div>
										</div>
										<div class="col-lg-7 col-sm-7">
											<div class="form-group mt-3">
												<label>Nom</label>
												<input type="text" name="img2ecart_name" id="img2ecart_name_{{$collaboration_id}}" class="form-control" placeholder="NOM PHOTO">
											</div>
										</div>
									</div>



                                    <div class="row">
										<div class="col-lg-5 col-sm-5">
											<div class="form-group">
												<div class="upload-bx lightgray-upload-bx">

                                                    <i id="img3ecart_preview_pdf_{{$collaboration_id}}" class="fa fa-file-pdf-o" aria-hidden="true" style="display: none;font-size: 45px;color: #009cde;"></i>

                                                    <i id="img3ecart_preview_word_{{$collaboration_id}}" class="fa fa-file-text" aria-hidden="true" style="display: none;font-size: 45px;color: #009cde;"></i>

													<img id="img3ecart_preview_{{$collaboration_id}}" src="{{ asset('public/assets/img/icons/plus_grey.png')}}" />
												</div>
												<input type="file" name="img3ecart" id="img3ecart_{{$collaboration_id}}"  class="hide-file-input">
											</div>
										</div>
										<div class="col-lg-7 col-sm-7">
											<div class="form-group mt-3">
												<label>Nom</label>
												<input type="text" name="img3ecart_name" id="img3ecart_name_{{$collaboration_id}}" class="form-control" placeholder="NOM PHOTO">
											</div>
										</div>
									</div>



                                    <div class="row">
										<div class="col-lg-5 col-sm-5">
											<div class="form-group">
												<div class="upload-bx lightgray-upload-bx">

                                                    <i id="img4ecart_preview_pdf_{{$collaboration_id}}" class="fa fa-file-pdf-o" aria-hidden="true" style="display: none;font-size: 45px;color: #009cde;"></i>

                                                    <i id="img4ecart_preview_word_{{$collaboration_id}}" class="fa fa-file-text" aria-hidden="true" style="display: none;font-size: 45px;color: #009cde;"></i>

													<img id="img4ecart_preview_{{$collaboration_id}}" src="{{ asset('public/assets/img/icons/plus_grey.png')}}" />
												</div>
												<input type="file" name="img4ecart" id="img4ecart_{{$collaboration_id}}"  class="hide-file-input">
											</div>
										</div>
										<div class="col-lg-7 col-sm-7">
											<div class="form-group mt-3">
												<label>Nom</label>
												<input type="text" name="img4ecart_name" id="img4ecart_name_{{$collaboration_id}}" class="form-control" placeholder="NOM PHOTO">
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="modal fade employee-confirmation-ecart-modal_{{ $collaboration_id }}" id="employee-confirmation-ecart-modal_{{ $collaboration_id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
						<p>Absence du <span class="ecarts_date_{{$collaboration_id}}"></span> a bien été ajouté</p>
						<span class="btn btn-lightblue close2ecart_{{$collaboration_id}}"  type="submit">OK</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>





<script>
    $(document).ready(()=>{
        $('#img1ecart_{{$collaboration_id}}').change(function(){
            const file = this.files[0];
            console.log(file);
            if (file){
            let reader = new FileReader();
            reader.onload = function(event){

                if(file.type == "application/pdf")
                {
                    $('#img1ecart_preview_pdf_{{$collaboration_id}}').show();
                    $('#img1ecart_preview_{{$collaboration_id}}').hide();
                    $('#img1ecart_preview_word_{{$collaboration_id}}').hide();
                }
                else if(file.type == "image/png" || file.type == "image/jpg" || file.type == "image/jpeg")
                {
                    console.log(event.target.result);
                    $('#img1ecart_preview_pdf_{{$collaboration_id}}').hide();
                    $('#img1ecart_preview_word_{{$collaboration_id}}').hide();
                    $('#img1ecart_preview_{{$collaboration_id}}').show();
                    $('#img1ecart_preview_{{$collaboration_id}}').attr('src', event.target.result);
                }
                else
                {
                    $('#img1ecart_preview_pdf_{{$collaboration_id}}').hide();
                    $('#img1ecart_preview_{{$collaboration_id}}').hide();
                    $('#img1ecart_preview_word_{{$collaboration_id}}').show();
                }
                console.log(event.target.result);

            }
            reader.readAsDataURL(file);
            }
        });


        $('#img2ecart_{{$collaboration_id}}').change(function(){
            const file = this.files[0];
            console.log(file);
            if (file){
            let reader = new FileReader();
            reader.onload = function(event){

                if(file.type == "application/pdf")
                {
                    $('#img2ecart_preview_pdf_{{$collaboration_id}}').show();
                    $('#img2ecart_preview_{{$collaboration_id}}').hide();
                    $('#img2ecart_preview_word_{{$collaboration_id}}').hide();
                }
                else if(file.type == "image/png" || file.type == "image/jpg" || file.type == "image/jpeg")
                {
                    console.log(event.target.result);
                    $('#img2ecart_preview_pdf_{{$collaboration_id}}').hide();
                    $('#img2ecart_preview_word_{{$collaboration_id}}').hide();
                    $('#img2ecart_preview_{{$collaboration_id}}').show();
                    $('#img2ecart_preview_{{$collaboration_id}}').attr('src', event.target.result);
                }
                else
                {
                    $('#img2ecart_preview_pdf_{{$collaboration_id}}').hide();
                    $('#img2ecart_preview_{{$collaboration_id}}').hide();
                    $('#img2ecart_preview_word_{{$collaboration_id}}').show();
                }
                console.log(event.target.result);

            }
            reader.readAsDataURL(file);
            }
        });



        $('#img3ecart_{{$collaboration_id}}').change(function(){
            const file = this.files[0];
            console.log(file);
            if (file){
            let reader = new FileReader();
            reader.onload = function(event){

                if(file.type == "application/pdf")
                {
                    $('#img3ecart_preview_pdf_{{$collaboration_id}}').show();
                    $('#img3ecart_preview_{{$collaboration_id}}').hide();
                    $('#img3ecart_preview_word_{{$collaboration_id}}').hide();
                }
                else if(file.type == "image/png" || file.type == "image/jpg" || file.type == "image/jpeg")
                {
                    console.log(event.target.result);
                    $('#img3ecart_preview_pdf_{{$collaboration_id}}').hide();
                    $('#img3ecart_preview_word_{{$collaboration_id}}').hide();
                    $('#img3ecart_preview_{{$collaboration_id}}').show();
                    $('#img3ecart_preview_{{$collaboration_id}}').attr('src', event.target.result);
                }
                else
                {
                    $('#img3ecart_preview_pdf_{{$collaboration_id}}').hide();
                    $('#img3ecart_preview_{{$collaboration_id}}').hide();
                    $('#img3ecart_preview_word_{{$collaboration_id}}').show();
                }
                console.log(event.target.result);

            }
            reader.readAsDataURL(file);
            }
        });



        $('#img4ecart_{{$collaboration_id}}').change(function(){
            const file = this.files[0];
            console.log(file);
            if (file){
            let reader = new FileReader();
            reader.onload = function(event){

                if(file.type == "application/pdf")
                {
                    $('#img4ecart_preview_pdf_{{$collaboration_id}}').show();
                    $('#img4ecart_preview_{{$collaboration_id}}').hide();
                    $('#img4ecart_preview_word_{{$collaboration_id}}').hide();
                }
                else if(file.type == "image/png" || file.type == "image/jpg" || file.type == "image/jpeg")
                {
                    console.log(event.target.result);
                    $('#img4ecart_preview_pdf_{{$collaboration_id}}').hide();
                    $('#img4ecart_preview_word_{{$collaboration_id}}').hide();
                    $('#img4ecart_preview_{{$collaboration_id}}').show();
                    $('#img4ecart_preview_{{$collaboration_id}}').attr('src', event.target.result);
                }
                else
                {
                    $('#img4ecart_preview_pdf_{{$collaboration_id}}').hide();
                    $('#img4ecart_preview_{{$collaboration_id}}').hide();
                    $('#img4ecart_preview_word_{{$collaboration_id}}').show();
                }
                console.log(event.target.result);

            }
            reader.readAsDataURL(file);
            }
        });


    });
</script>



<script>
    $(document).ready(function(){
        // Open modal on page load
        // Close modal on button click
        $(".close1ecart_{{$collaboration_id}}").click(function(){
            $("#ecarts-modal_{{ $collaboration_id }}").modal('hide');
            $('.modal-backdrop').remove();
        });

        $(".close2ecart_{{$collaboration_id}}").click(function(){
            $("#employee-confirmation-ecart-modal_{{ $collaboration_id }}").modal('hide');
            $('.modal-backdrop').remove();
            window.location.reload();

        });

        $('#view-informatique-modal').on('shown.bs.modal', function () {
            $('#add-technician-modal').modal('hide');
        });

    });

    $(document).ready(function(){
        (function($){
        $(".search_e_{{$collaboration_id}}").on('keyup', function(e) {

            var $this = $(this);
            var exp = new RegExp($this.val(), 'i');
            $(".collaborator_check_e_{{$collaboration_id}}  li label").each(function() {
            var $self = $(this);
            if(!exp.test($self.text())) {
                $self.parent().hide();
            } else {
                $self.parent().show();
            }
            });
        });
        })(jQuery);
        // $(".search_e_{{$collaboration_id}}").keyup(function() {
        //     var queries = $(this).val();
        //     var _token = $('input[name="_token"]').val();
        //     $.ajax({

        //         url : "{{ route('collaboration.absence.collaboration_search') }}",
        //         method: 'POST',
        //         data : {queries:queries, _token:_token},
        //         dataType:'json',

        //         success:function(data)
        //         {
        //             console.log(data.records);

        //             $('.collaborator_check_e_{{$collaboration_id}}').html(data.records);
        //         }

        //     });
        // });
    });

</script>

<script>
    $('.notier_e_{{$collaboration_id}}').click(function(){

        values = "";
        $('input.notier_e_{{$collaboration_id}}:checked').each(function(){
            values += $(this).val() + ", ";
        });
        if(values){
            $('#notier_e_values_{{$collaboration_id}}').html(values);
        }else{
            $('#notier_e_values_{{$collaboration_id}}').html("None");
        }

    });
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
        $(".but_ecart_upload_{{$collaboration_id}}").click(function(e){

            // $("#absences_form_{{$collaboration_id}}").on('submit',(function(e) {
                //alert("a");

            e.preventDefault();

            var collaboration_id = $('#collaboration_id_{{$collaboration_id}}').val();
            var motif = $('#motif_e_{{$collaboration_id}}').val();
            var debut_date = $('#debut_date_e_{{$collaboration_id}}').val();
            var debut_time = $('#debut_time_e_{{$collaboration_id}}').val();
            var fin_date = $('#fin_date_e_{{$collaboration_id}}').val();
            var fin_time = $('#fin_time_e_{{$collaboration_id}}').val();
            var description = $('#description_e_{{$collaboration_id}}').val();

            var repeter = $('input[name="repeter_e"]').is(':checked');

            var recurrence = $('#recurrence_e_{{$collaboration_id}}').val();

            var notier = $('#notier_e_values_{{$collaboration_id}}').val();

            var img1ecart_name = $('#img1ecart_name_{{$collaboration_id}}').val();
            var img1ecart = $('#img1ecart_{{$collaboration_id}}').prop('files')[0];

            var img2ecart_name = $('#img2ecart_name_{{$collaboration_id}}').val();
            var img2ecart = $('#img2ecart_{{$collaboration_id}}').prop('files')[0];

            var img3ecart_name = $('#img3ecart_name_{{$collaboration_id}}').val();
            var img3ecart = $('#img3ecart_{{$collaboration_id}}').prop('files')[0];

            var img4ecart_name = $('#img4ecart_name_{{$collaboration_id}}').val();
            var img4ecart = $('#img4ecart_{{$collaboration_id}}').prop('files')[0];

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
                form_data.append('img1ecart_name', img1ecart_name);
                form_data.append('img1ecart', img1ecart);

                form_data.append('img2ecart_name', img2ecart_name);
                form_data.append('img2ecart', img2ecart);

                form_data.append('img3ecart_name', img3ecart_name);
                form_data.append('img3ecart', img3ecart);

                form_data.append('img4ecart_name', img4ecart_name);
                form_data.append('img4ecart', img4ecart);

                console.log(form_data);



                $.ajax({
                    type:'POST',
                    url: "{{  route('collabotation.absences_ecarts.ecarts')}}",
                    // data: $('#absences_form_{{$collaboration_id}}').serialize(),
                    data:  form_data,
                    cache:false,
                    contentType: false,
                    processData: false,
                    dataType:'json',
                    success: function(data){
                        console.log(data.dates);

                        $("#employee-confirmation-ecart-modal_{{ $collaboration_id }}").modal('show');
                        $('.ecarts_date_{{$collaboration_id}}').html(data.dates);

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
