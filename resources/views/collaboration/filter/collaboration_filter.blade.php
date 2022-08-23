<div class="col-lg-3" style="margin-top:-60px">
    <div class="col-white12-col" >
        <form id="filter_from" method="post">
            <div class="search-group">
                <input class="search-input mr-2" name="search_filter_input" id="search_filter" type="text" placeholder="Recherche de filtres…."/>
                <span class="button button-brand-primary button-search"><i class="fas fa-redo"></i></span>
            </div>
            <div class="card custom-card overflow-hidden search-filter-options">
        </form>
        <div class="card-body px-0 py-5">
            <!-- accordion -->
            <div aria-multiselectable="true" class="accordion" id="accordion" role="tablist">
                <form id="filter_from2" method="post">
                    <div class="card">
                        <div class="card-header" id="headingOneHIW" role="tab">
                            <a aria-controls="collapseOneHIW" aria-expanded="true"  data-toggle="collapse" href="#collapseOneHIW">Statut</a>
                        </div>
                        <div aria-labelledby="headingOneHIW" class="collapse" data-parent="#accordion" id="collapseOneHIW" role="tabpanel">
                            <div class="card-body">
                                <label class="my-2 statut"><input type="radio" value="active" name="statut"><span class="ml-1">Actif</span></label>
                                <br>
                                <label class="my-2 statut"><input type="radio" value="inactive" name="statut"><span class="ml-1">Inactif</span></label>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="card">
                    <div class="card-header" id="headingTwoHIW" role="tab">
                        <a aria-controls="collapseTwoHIW" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapseTwoHIW">Agence</a>
                    </div>
                    <div aria-labelledby="headingTwoHIW" class="collapse" data-parent="#accordion" id="collapseTwoHIW" role="tabpanel">
                        @php
                            $agencies = DB::table('llx_agency')->get();
                        @endphp
                        <div class="card-body">
                            @php
                                $collabIds = [];
                                if(!empty($records)){
                                    $collabIds = array_keys($records);
                                }
                                foreach ($agencies as $agency)
                                {
                                    echo '<label class="ckbox my-2"><input type="checkbox" class="chk" value="'.$agency->agencenom.'" data-id="'.$agency->id.'"><span>'.$agency->agencenom.'</span>';

                                    if(in_array($agency->agencenom, $collabIds)){
	                        	        echo ' checked ';
	                                }

                                    echo '</label>';
                                }


                            @endphp




                        </div>
                    </div>
                </div>


            </div>
            <!-- accordion -->
        </div>
    </div>
    </div>

</div>
<script>
    $('#search_filter').keypress(function(e){
        var keycode = (e.keyCode ? e.keyCode : e.which);
        if(keycode == '13'){
            var search_filter = $('#search_filter').val();
            e.preventDefault();

            var dataString = $("#filter_from").serialize();

            console.log(dataString);
            $.ajax({
                url: '{{route("collaboration_search")}}',
                method: 'GET',
                dataType: 'json',
                data: dataString + "&" + "search_filter=" + search_filter,
            }).done(function (data) {
                $('#module_section').html(data);
            }).fail(function () {
                alert('Search result not found!');
            });
        }
        e.stopPropagation();
    });


    $(".statut").click(function(){

        var statut =  $('input[name=statut]:checked').val();
        $.ajax({
                url: '{{route("collaboration_search")}}',
                method: 'GET',
                dataType: 'json',
                data: "statut=" + statut,
            }).done(function (data) {

                $('#module_section').html(data);
            }).fail(function () {
                alert('Search result not found!');
            });
    });

    $(".button-search").click(function(){

        location.reload();

    });


    $(".chk").click(function(){
        var allVals = [];
            $(".chk:checked").each(function() {
                allVals.push($(this).attr('data-id'));
            });

        var join_selected_values = allVals.join(",");


            $.ajax({
                url: '{{route("collaboration_search")}}',
                method: 'GET',
                dataType: 'json',
                data: "join_selected_values=" + join_selected_values,
            }).done(function (data) {
                $('#module_section').html(data);
            }).fail(function () {
                alert('Search result not found!');
            });



    });

    $('.search-input').keyup(function(){
        var search = $(this).val();
        search = search.toString();

        if(search != ''){
            var x = ["","Statut", "Agence"];

            $('.card-body form .card').hide();
            for (var i in x) {
                if (x[i].indexOf(search) > -1) {
                    $('.'+i).show();
                }
            }
        }else{
            $('.card-body form .card').show();

        }
    });




</script>
