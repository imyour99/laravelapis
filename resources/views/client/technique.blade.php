<div class="row">
    <div class="col-lg-12 col-md-12">

        <div class="row mb-3">
            <div class="col-lg-12 col-md-12">
                <span class="text-blue"><strong>INFORMATIONS APRÉS INTERVENTION</strong></span>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-lg-12 col-md-12">
                <div class="bg-lightblue row p-3">
                    <div class="col-lg-4 col-md-4 px-5">
                        <span class="small-blue-text-normal">
                            DATE DE L'INTERVENTION:
                        </span>
                        <span class="small-blue-text-normal ml-4">{{$client->created_at}}</span>
                    </div>

                    <div class="col-lg-4 col-md-4 px-5 border-blue-right-left">
                        <span class="small-blue-text-normal">
                            TECHNICIEN:
                        </span>
                        <span class="small-blue-text-normal ml-4">
                            {{$client->nom}}
                        </span>
                    </div>

                    <div class="col-lg-4 col-md-4 px-5">
                        <span class="small-blue-text-normal">
                            MARCHÉ:
                        </span>
                        <span class="small-blue-text-normal ml-4">
                            <div class="form-group">
                                @php
                                    $markets_tbl= DB::table('markets')->get();
                                @endphp
                                <form action="" id="market_form_{{$client->id}}">
                                <input style=" width: 70%; !important" type="hidden" value="{{$client->id}}" id="client_id_{{$client->id}}" name="client_id" >
                                    <select class="form-control" name="market_id" onchange="market_function_{{$client->id}}(this)" data-clientid="{{$client->id}}">
                                        <option value="">SELECT</option>
                                        @foreach ($markets_tbl as $market)
                                            <option {{ $market->id == $client->market ? 'selected' : '' }} value="{{$market->id}}">{{$market->name}}</option>
                                        @endforeach

                                    </select>
                                </form>

                            </div>

                            {{-- @php
                                $market = DB::table('llx_client')->where('market',$client->market)->first();
                                $market_id = $market->market;
                                $market_tbl = DB::table('markets')->where('id',$market_id)->first();
                                $market_name = !empty($market_tbl->name) ? $market_tbl->name : '' ;
                            @endphp
                            {{$market_name}} --}}
                        </span>
                        <a href="" data-toggle="modal" data-target="#exampleModal_{{$client->id}}">
                            Nouveau marché
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>



<div class="modal fade" id="exampleModal_{{$client->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ajouter un nouveau marché</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('client.marche_add')}}" method="post">
            @csrf
            <div class="modal-body">
                    <div class="mb-3 mt-3">
                        <label for="email" class="form-label">Nom du marché :</label>
                        <input type="text" class="form-control" placeholder="Entrez le nom du marché" name="market">
                    </div>
            </div>
            <div class="modal-footer">
            <button type="submit" class="btn btn-lightblue float-right">Enregistrer</button>
            </div>
        </form>
      </div>
    </div>
  </div>




<form action="" method="post" id="technique_form_{{$client->id}}">

    <input type="hidden" value="{{$client->id}}" id="client_id_{{$client->id}}" name="client_id" >
    <div class="row">
        <div class="col-lg-12 col-md-12">


            <div class="row mb-3">
                <div class="col-lg-12 col-md-12">
                    <span class="text-blue">Contrat</span>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-lg-5 col-md-5">
                    <label>Catégorie d'abonné</label>
                    <input type="text" class="form-control"  value="{{$client->tech_categorie}}" name="tech_categorie" placeholder="DOMESTIQUE OU AGRICOLE"  onkeyup="mytechnique_{{$client->id}}()">
                </div>
                <div class="col-lg-1 col-md-1">
                    <label>Tarif</label>
                    <input type="text" class="form-control"  value="{{$client->tech_tarif}}" name="tech_tarif" placeholder="HC" onkeyup="mytechnique_{{$client->id}}()">
                </div>
                <div class="col-lg-2 col-md-2">
                    <label>Puissance Souscrite</label>
                    <input type="text" class="form-control"  value="{{$client->tech_puissance_souscrite}}" name="tech_puissance_souscrite" placeholder="6KVA" onkeyup="mytechnique_{{$client->id}}()">
                </div>
                <div class="col-lg-2 col-md-2">
                    <label>Organe de Coupure</label>
                    <input type="text" class="form-control"  value="{{$client->tech_organe_de_coupure}}" name="tech_organe_de_coupure" placeholder="6KVA" onkeyup="mytechnique_{{$client->id}}()">
                </div>

                <div class="col-lg-2 col-md-2">
                    <label>Produkteur</label>
                    <input type="text" class="form-control"  value="{{$client->tech_produkteur}}" name="tech_produkteur" placeholder="NON" onkeyup="mytechnique_{{$client->id}}()">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-lg-12 col-md-12">
                    <span class="text-blue">Compteurs</span>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-lg-8 col-md-8">
                    <label>Type</label>
                    <input type="text" class="form-control" name="tech_type"  value="{{$client->tech_type}}" placeholder="SAGEM ELECTRONIQUE MONO, PALIER 2007, MULTARIF TAUX PLEIN OU 1/2 TAUX" onkeyup="mytechnique_{{$client->id}}()">
                </div>
                <div class="col-lg-2 col-md-2">
                    <label>Matricule</label>
                    <input type="text" class="form-control"  value="{{$client->tech_matricule}}" name="tech_matricule" placeholder="910" onkeyup="mytechnique_{{$client->id}}()">
                </div>
                <div class="col-lg-2 col-md-2">
                    <label>NB Fils</label>
                    <input type="text" class="form-control"  value="{{$client->tech_nbfils}}" name="tech_nbfils" placeholder="MONOPHASE 230/400V" onkeyup="mytechnique_{{$client->id}}()">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-lg-12 col-md-12">
                    <span class="text-blue">Disjoncteurs</span>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-lg-4 col-md-4">
                    <label>Num de Série</label>
                    <input type="text" class="form-control"  value="{{$client->tech_num_de_serie}}"  name="tech_num_de_serie" placeholder="DB0066407606" onkeyup="mytechnique_{{$client->id}}()">
                </div>
                <div class="col-lg-4 col-md-4">
                    <label>Nature</label>
                    <input type="text" class="form-control"  value="{{$client->tech_nature}}"  name="tech_nature" placeholder="DIFF. ORDINAIRE" onkeyup="mytechnique_{{$client->id}}()">
                </div>
                <div class="col-lg-4 col-md-4">
                    <label>Marque</label>
                    <input type="text" class="form-control" value="{{$client->tech_marque}}"   name="tech_marque" placeholder="LOREM IPSUM" onkeyup="mytechnique_{{$client->id}}()">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-lg-2 col-md-2">
                    <label>Intensité</label>
                    <input type="text" class="form-control" value="{{$client->tech_intensite}}"  name="tech_intensite" placeholder="0000" onkeyup="mytechnique_{{$client->id}}()">
                </div>
                <div class="col-lg-4 col-md-4">
                    <label>NB Fils</label>
                    <input type="text" class="form-control" value="{{$client->tech_nbfils}}"  name="tech_nbfils" placeholder="NON" onkeyup="mytechnique_{{$client->id}}()">
                </div>
                <div class="col-lg-4 col-md-4">
                    <label>Plage</label>
                    <input type="text" class="form-control" value="{{$client->tech_plage}}"  name="tech_plage" placeholder="MULTICALIBRE 15 - 45 A." onkeyup="mytechnique_{{$client->id}}()">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-lg-12 col-md-12">
                    <span class="text-blue">Photos</span>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-lg-12 col-md-12">

                    <div class="row">
                        <div class="col-lg-2 col-md-2">
                            <div class="photo-div">
                                <img src="assets/img/media/yellow-switch.jpg" />
                                <span class="view-icon"><i class="fas fa-eye"></i></span>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-2">
                            <div class="photo-div">
                                <img src="assets/img/media/yellow-switch.jpg" />
                                <span class="view-icon"><i class="fas fa-eye"></i></span>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-2">
                            <div class="photo-div">
                                <img src="assets/img/media/yellow-switch.jpg" />
                                <span class="view-icon"><i class="fas fa-eye"></i></span>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-2">
                            <div class="photo-div">
                                <img src="assets/img/media/yellow-switch.jpg" />
                                <span class="view-icon"><i class="fas fa-eye"></i></span>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-2">
                            <div class="photo-div">
                                <img src="assets/img/media/yellow-switch.jpg" />
                                <span class="view-icon"><i class="fas fa-eye"></i></span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row mb-3">
                <div class="col-lg-12 col-md-12">
                    <hr class="gray-line mt-5 mb-5" />
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-lg-12 col-md-12">
                    <span class="text-blue"><strong>INFORMATIONS DU 00/00/0000</strong></span>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-lg-12 col-md-12">
                    <span class="text-blue">Contrat</span>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-lg-5 col-md-5">
                    <label>Catégorie d'abonné</label>
                    <input type="text" class="form-control" name="" placeholder="DOMESTIQUE OU AGRICOLE">
                </div>
                <div class="col-lg-1 col-md-1">
                    <label>Tarif</label>
                    <input type="text" class="form-control" name="" placeholder="HC">
                </div>
                <div class="col-lg-2 col-md-2">
                    <label>Puissance Souscrite</label>
                    <input type="text" class="form-control" name="" placeholder="6KVA">
                </div>
                <div class="col-lg-2 col-md-2">
                    <label>Organe de Coupure</label>
                    <input type="text" class="form-control" name="" placeholder="6KVA">
                </div>

                <div class="col-lg-2 col-md-2">
                    <label>Produkteur</label>
                    <input type="text" class="form-control" name="" placeholder="NON">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-lg-12 col-md-12">
                    <span class="text-blue">Compteurs</span>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-lg-8 col-md-8">
                    <label>Type</label>
                    <input type="text" class="form-control" name="" placeholder="SAGEM ELECTRONIQUE MONO, PALIER 2007, MULTARIF TAUX PLEIN OU 1/2 TAUX">
                </div>
                <div class="col-lg-2 col-md-2">
                    <label>Matricule</label>
                    <input type="text" class="form-control" name="" placeholder="910">
                </div>
                <div class="col-lg-2 col-md-2">
                    <label>NB Fils</label>
                    <input type="text" class="form-control" name="" placeholder="MONOPHASE 230/400V">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-lg-12 col-md-12">
                    <span class="text-blue">Disjoncteurs</span>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-lg-4 col-md-4">
                    <label>Num de Série</label>
                    <input type="text" class="form-control" name="" placeholder="DB0066407606">
                </div>
                <div class="col-lg-4 col-md-4">
                    <label>Nature</label>
                    <input type="text" class="form-control" name="" placeholder="DIFF. ORDINAIRE">
                </div>
                <div class="col-lg-4 col-md-4">
                    <label>Marque</label>
                    <input type="text" class="form-control" name="" placeholder="LOREM IPSUM">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-lg-2 col-md-2">
                    <label>Intensité</label>
                    <input type="text" class="form-control" name="" placeholder="0000">
                </div>
                <div class="col-lg-4 col-md-4">
                    <label>NB Fils</label>
                    <input type="text" class="form-control" name="" placeholder="NON">
                </div>
                <div class="col-lg-4 col-md-4">
                    <label>Plage</label>
                    <input type="text" class="form-control" name="" placeholder="MULTICALIBRE 15 - 45 A.">
                </div>
            </div>
        </div>
    </div>
</form>



<meta name="csrf-token" content="{{ csrf_token() }}" />


<script>

    function mytechnique_{{$client->id}}()
    {

        var dataString = $("#technique_form_{{$client->id}}").serialize();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });


        $.ajax({
            url: '{{route("client.technique")}}',
            method: 'POST',
            dataType: 'json',
            data: dataString,
        });
    }



    function market_function_{{$client->id}}(sel)
    {
        var market_id = sel.value;
        var dataString = $("#market_form_{{$client->id}}").serialize();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: '{{route("client.market_function")}}',
            method: 'POST',
            dataType: 'json',
            data: dataString,
        });



    }
</script>



