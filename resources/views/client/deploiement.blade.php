<form action="" id="deploi_form_{{$client->id}}" method="post">
<div class="row">
    <div class="col-lg-6 col-md-12">

        <input type="hidden" value="{{$client->id}}" name="client_id" >
        <div class="row mb-3">
            <div class="col-lg-12 col-md-12">
                <span class="text-blue">Intervention</span>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-lg-8 col-md-8">
                <label>Type d'Intervention</label>
                <input type="text" class="form-control" value="{{$client->type_intervention}}" name="type_intervention" placeholder="POSE COMPUTEUR LINKY" onkeyup="myDeploiement_{{$client->id}}()">
            </div>
            <div class="col-lg-4 col-md-4">
                <label>Durée (Min)</label>
                <input type="time" class="form-control"  value="{{$client->dev_duree}}" name="dev_duree" placeholder="60" onchange="myDeploiement_{{$client->id}}()">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-lg-12 col-md-12">
                <span class="text-blue">Emplacement du PDL</span>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-lg-7 col-md-7">
                <label>Type</label>
                <input type="text" class="form-control" value="{{$client->dev_typed}}"  name="dev_typed" placeholder="RESIDENTIEL" onkeyup="myDeploiement_{{$client->id}}()">
            </div>
            <div class="col-lg-5 col-md-5">
                <label>Contrat</label>
                <input type="text" class="form-control" value="{{$client->dev_contrat}}" name="dev_contrat" placeholder="ACTIF" onkeyup="myDeploiement_{{$client->id}}()">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-lg-4 col-md-4">
                <label>Numero</label>
                <input type="text" class="form-control" value="{{$client->dev_numero}}" name="dev_numero" placeholder="ACTIF" onkeyup="myDeploiement_{{$client->id}}()">
            </div>
            <div class="col-lg-8 col-md-8">
                <label>Voie</label>
                <input type="text" class="form-control" value="{{$client->dev_r_voie}}" name="dev_r_voie" placeholder="RESIDENTIEL" onkeyup="myDeploiement_{{$client->id}}()">
            </div>
            <div class="col-lg-12 col-md-12 mt-2">
                <input type="text" class="form-control" value="{{$client->dev_complement}}" name="dev_complement" placeholder="complement" onkeyup="myDeploiement_{{$client->id}}()">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-lg-4 col-md-4">
                <label>Code Postal</label>
                <input type="text" class="form-control" value="{{$client->dev_code}}"  name="dev_code" placeholder="0000" onkeyup="myDeploiement_{{$client->id}}()">
            </div>
            <div class="col-lg-8 col-md-8">
                <label>Commune</label>
                <input type="text" class="form-control" value="{{$client->dev_commune}}"   name="dev_commune" placeholder="CITY" onkeyup="myDeploiement_{{$client->id}}()">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-lg-4 col-md-4">
                <label>Computeur Accessible</label>
                <input type="text" class="form-control" value="{{$client->tech_categorie}}"  name="tech_categorie" placeholder="NON" onkeyup="myDeploiement_{{$client->id}}()">
            </div>
            <div class="col-lg-8 col-md-8">
                <label>Voie</label>
                <input type="text" class="form-control" value="{{$client->dev_l_voie}}" name="dev_l_voie" placeholder="LOCAL" onkeyup="myDeploiement_{{$client->id}}()">
            </div>
        </div>

    </div>

    <div class="col-lg-6 col-md-12">

        <div class="row mb-3">
            <div class="col-lg-12 col-md-12">
                <span class="text-blue">Maille et ZDD</span>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-lg-12 col-md-12">
                <label>Maille</label>
                <input type="text" class="form-control" value="{{$client->dev_maille}}" name="dev_maille" placeholder="POSE COMPUTEUR LINKY" onkeyup="myDeploiement_{{$client->id}}()">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-lg-6 col-md-6">
                <label>Du</label>
                <input type="text" class="form-control bar-from" name="dev_du"  value="{{$client->dev_du}}"  placeholder="00 . 00 . 00" onchange="myDeploiement_{{$client->id}}()">
            </div>
            <div class="col-lg-6 col-md-6">
                <label>Au</label>
                <input type="text" class="form-control bar-from" value="{{$client->dev_au}}"  name="dev_au" placeholder="00 . 00 . 00" onchange="myDeploiement_{{$client->id}}()">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-lg-12 col-md-12">
                <label>Zdd</label>
                <input type="text" class="form-control" name="dev_zdd" value="{{$client->dev_zdd}}" placeholder="AUGUST" onchange="myDeploiement_{{$client->id}}()">
            </div>

        </div>

        <div class="row mb-3">
            <div class="col-lg-12 col-md-12">
                <span class="text-blue">Consigne d'Intervention</span>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-lg-12 col-md-12">
                <label>Note</label>
                <textarea class="form-control" rows="6" name="dev_note" onchange="myDeploiement_{{$client->id}}()">{{$client->dev_note}}</textarea>
            </div>

        </div>


    </div>
</div>
</form>



<meta name="csrf-token" content="{{ csrf_token() }}" />



<script>
    function myDeploiement_{{$client->id}}()
    {
        var dataString = $("#deploi_form_{{$client->id}}").serialize();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });


        $.ajax({
            url: '{{route("client.deploiement")}}',
            method: 'POST',
            dataType: 'json',
            data: dataString,
        });
    }
</script>

