<div class="px-1 py-2 text-tour-collaborateurs slimscroll-tour-modal">
	<div class="row">

		<div class="col-lg-12 mt-2">


			<div class="row mt-2">

                @php
                    $markets = DB::table('markets')->get();

                    $marketIds = [];
                    if(!empty($records)){
                        $marketIds = array_keys($records);
                    }


                    $markets_assigne = DB::table('markets_assigne')
                        ->where('collaboration_id',$collaboration->id)
                        ->first();

                    if($markets_assigne)
                    {
                        $markets_val = $markets_assigne->markets;
                        $markets_assigne = explode(",",$markets_val);
                    }
                    else {
                        $markets_assigne = [];
                    }


                @endphp

                <input type="hidden" value="{{$collaboration->id}}" name="collaboration_id" id="collaboration_id_{{$collaboration->id}}">

                @if(isset($contacts_right->agence) != '')
                    <input type="hidden" value="{{$contacts_right->agence}}" name="agency_id" id="agency_id_{{$collaboration->id}}">
                @else
                    <input type="hidden" value="" name="agency_id" id="agency_id_{{$collaboration->id}}">
                @endif


                @foreach ($markets as $market)


                        <div class="col-lg-6  mt-3">
                            <input type="checkbox" class="radio-blue-circle marketchk_{{ $collaboration->id }}" name="market" value="{{$market->name}}" data-id="{{$market->name}}"


                            @if(in_array($market->name, $markets_assigne))


                            checked
                            @endif


                            />
                            <strong class="text-blue">{{$market->name}}</strong>
                        </div>



                @endforeach


			</div>



		</div>

	</div>
</div>

<meta name="csrf-token" content="{{ csrf_token() }}" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>

<script>
    $(".marketchk_{{ $collaboration->id }}").click(function(){
        var allmarketVals = [];
            $(".marketchk_{{ $collaboration->id }}:checked").each(function() {
                allmarketVals.push($(this).attr('data-id'));
            });



            var agency_id = $('#agency_id_{{$collaboration->id}}').val();
            var collaboration_id = $('#collaboration_id_{{$collaboration->id}}').val();
            var join_market_selected_values = allmarketVals.join(",");



            if(agency_id != '')
            {
                $.ajax({
                url: '{{route("markets_assigne_insert")}}',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                method: 'POST',
                dataType: 'json',
                data: "join_market_selected_values=" + join_market_selected_values+"&"+"collaboration_id=" + collaboration_id+"&"+"agency_id=" + agency_id,
                }).done(function (data) {
                    // $('#module_section').html(data);
                }).fail(function () {
                    // alert('Search result not found!');
                });
            }
            else
            {
                $(".marketchk_{{ $collaboration->id }}").prop("checked", false);
                $.confirm({
                    title: 'Avertissement !',
                    content: 'Veuillez attribuer la première agence, puis après vous pouvez sélectionner le contrat.',
                    buttons: {
                        cancel: function () {
                            //$.alert('You are safe!');
                        }
                    }
                });
            }









    });
</script>

