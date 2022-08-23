<div class="bg-lightblue px-1 py-2 text-tour-collaborateurs">
	<div class="row">
		<div class="col-lg-12">
			<div class="bg-white tour-search-div">

                <form>
					<input type="image" src="{{ asset('public/assets/img/icons/iconsearch.png') }}" class="tour-search-image" />
					<input type="text" name="search" class="input-no-border" id="search"  placeholder="Recherce collaborateurs..." value="" />
				</form>
			</div>
		</div>

		<div class="col-lg-12 mt-2">
			<div class="row">
				<div class="col-lg-6">
					<input type="radio" class="radio-blue-circle collaborateurs-status" checked name="collaborateurs-status" rel="Actif" />
					<strong class="text-black">Actifs</strong>
				</div>
				<div class="col-lg-6">
					<input type="radio"  class="radio-blue-circle mr-2 collaborateurs-status" name="collaborateurs-status" rel="Inactif" />
					<span class="text-black text-tour-collaborateurs">Inactifs</span>
				</div>
			</div>

		</div>

		<div class="col-lg-12 mt-2">

			<div class="active-status">
                @if ($type == 'visite')
                    <input type="hidden" value="visite" id="type">
                @elseif($type == '' || $type == 'intervention')
                    <input type="hidden" value="intervention" id="type">
                @endif




                @php

                    $currentDate = date('Y-m-d');
                    $selected_date = isset($_GET['date']);

                @endphp

                    @if ($selected_date == false)
                        <input type="hidden" value="{{$currentDate}}" id="date">
                    @else
                        @php $selected_date = $_GET['date']; @endphp
                        <input type="hidden" value="{{$selected_date}}" id="date">
                    @endif





				<?php

					$records = session('records');



                   	$collabIds = [];
                   	if(!empty($records)){
                   		$collabIds = array_keys($records);
                   	}

	                foreach($collaborateurs as $collaborateur){
	                	if($collaborateur->status == 'active'){
	                		echo '<div class="bg-white px-2 py-2 collaborateur-span">
	                            <input type="checkbox" class="checkbox-blue mr-2 collaborateur-checkbox chk" data-id="'.$collaborateur->id.'" value="'.$collaborateur->id.'"';

	                        if(in_array($collaborateur->id, $collabIds)){
	                        	echo ' checked ';
	                        }

	                        echo ' value="'.$collaborateur->id.'">
	                            '.$collaborateur->nom.' '.$collaborateur->prenom.'
	                        </div>';
	                	}

	                }
	            ?>
			</div>

			<div class="inactive-status" style="display:none">
				<?php
	                foreach($collaborateurs as $collaborateur){
	                	if($collaborateur->status == 'inactive'){
	                		echo '<div class="bg-white px-2 py-2 collaborateur-span">
	                            <input type="checkbox" class="checkbox-blue mr-2 collaborateur-checkbox chk" data-id="'.$collaborateur->id.'" value="'.$collaborateur->id.'">
	                            '.$collaborateur->nom.' '.$collaborateur->prenom.'
	                        </div>';
	                	}
	                }
	            ?>
			</div>
	</div>
</div>

<script type="text/javascript">

	$('.collaborateurs-status').click(function(){
		var status = $(this).attr('rel');

		if(status == 'Inactif'){
			$('.inactive-status').show();
			$('.active-status').hide();
		}else{
			$('.inactive-status').hide();
			$('.active-status').show();
		}
	});

	$('.collaborateur-checkbox').click(function(){

        var collab_id = $(this).val();

        var type = $('#type').val();
        var date = $('#date').val();

        var allVals = [];
            $(".chk:checked").each(function() {
                allVals.push($(this).attr('data-id'));
            });

        var join_selected_values = allVals.join(",");
        if($(this).is(':checked')){

            $.ajax({
                url: siteUrl + '/set-collab-session?date=' + date,
                method: 'post',
                data: {
                    'collab_id': join_selected_values,
                    'type': type,
                    'date': date,
                    "_token": "{{ csrf_token() }}"
                },
                success: function(data){

                    if(type == 'intervention' || type == '' )
                    {
                        $('#original_intervention').hide();
                        $('#module_section').html(data);
                    }
                    else
                    {
                        $('#original_visite').hide();
                        $('#module_section2').html(data);
                    }

                }
            });
        }else{
        	$.ajax({
                url: siteUrl + '/set-collab-session?date=' + date,
                method: 'post',
                data: {
                    'collab_id': join_selected_values,
                    'type': type,
                    'date': date,
                    "_token": "{{ csrf_token() }}"
                },
                success: function(data){

                    if(type == 'intervention' || type == '' )
                    {
                        $('#original_intervention').hide();
                        $('#module_section').html(data);
                    }
                    else
                    {
                        $('#original_visite').hide();
                        $('#module_section2').html(data);
                    }

                }
            });
        }
    });



    $('#search').keypress(function (e) {
            var keycode = (e.keyCode ? e.keyCode : e.which);
            if (keycode == '13') {
                var search = $('#search').val();
                var type = $('#type').val();
                var date = $('#date').val();
                e.preventDefault();



                $.ajax({
                    url:siteUrl + '/search?date=' + date,
                    method: 'POST',

                    data: {
                    'search': search,
                    'type': type,
                    'date': date,
                    "_token": "{{ csrf_token() }}"
                    },
                }).done(function (data) {

                    if(type == 'intervention' || type == '' )
                    {
                        $('#original_intervention').hide();
                        $('#module_section').html(data);
                    }
                    else
                    {
                        $('#original_visite').hide();
                        $('#module_section2').html(data);
                    }

                }).fail(function () {
                    //alert('Search result not found!');
                });
            }
            e.stopPropagation();
        });

</script>
