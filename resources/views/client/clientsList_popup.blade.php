<div class="modal fade" id="planifier-modal_{{ $client->id }}" tabindex="-1" role="dialog" aria-labelledby="technicien-modal
    " aria-hidden="true">
  <div class="modal-dialog" role="document" style="min-width: 90%;">
    <div class="modal-content">

      <div class="modal-body">

        <div class="row">

            <div class="col-lg-12 col-md-12 col-sm-12">
                <button type="button" class="close-modal" rel="notifications-modal">
                  <span aria-hidden="true">&times;</span>
                </button>

                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4" style="flex: 0 0 30.33333%; max-width: 30.33333%;">
                        <div class="w-100 blue-box-modal">
                            <div class="row">
                                <div class="col-lg-5 col-md-5 col-sm-5">
                                    <strong class="text-white">INTERVENTION</strong>
                                </div>
                                <div class="col-lg-7 col-md-7 col-sm-7">
                                    <select class="form-control tx-green select-modal float-right" onClick="openInterventionStatusModal({{ $client->id }})">
                                        <option>Plannifèe</option>
                                    </select>
                                </div>
                            </div>

                            <hr class="white-line" />

                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <span class="text-white">18/09/21</span>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <span class="text-white">C. Durant</span>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <span class="text-white">PJFDHUF9</span>
                                </div>
                            </div>
                        </div>

                        <div class="w-100 blue-box-modal mt-3">
                            <div class="row">
                                <div class="col-lg-5 col-md-5 col-sm-5">
                                    <strong class="text-white">VISITE</strong>
                                </div>
                                <div class="col-lg-7 col-md-7 col-sm-7">
                                    <select class="form-control tx-black select-modal float-right" onClick="openVisiteStatusModal({{ $client->id }})">
                                        <option>Plannifèe</option>
                                    </select>
                                </div>
                            </div>

                            <hr class="white-line" />

                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <span class="text-white">18/09/21</span>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <span class="text-white">C. Durant</span>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <span class="text-white">PJFDHUF9</span>
                                </div>
                            </div>
                        </div>

                        <div class="w-100 right-blue-div mt-3 informations-pld-div">

                            <div class="right-slim-div">
                                <span class="client-information-title">INFORMATIONS PDL</span>
                                <form id="information_pdl_form_{{$client->id}}" method="post">
                                    <input type="hidden" value="{{$client->id}}" name="client_id">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <label>Numéro du PDL</label>
                                            <input type="text" class="form-control" name="pdl" value="{{$client->pdl}}"  onkeyup="myPdl_{{$client->id}}()"/>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <label>Type de client</label>
                                            <input type="text" class="form-control" value="{{$client->id}}" />
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <label>Nom client</label>
                                            <input type="text" class="form-control" name="nom" onkeyup="myPdl_{{$client->id}}()" value="{{$client->nom}}" />
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <label>Prénom client</label>
                                            <input type="text" class="form-control" name="prenom" value="{{$client->prenom}}"  onkeyup="myPdl_{{$client->id}}()"/>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <label>Tél. fixe</label>
                                            <input type="text" class="form-control" value="{{$client->telephone_fixe}}" placeholder="00 00 00 00 00" name="telephone_fixe" onkeyup="myPdl_{{$client->id}}()"/>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <label>Tél. portable</label>
                                            <input type="text" class="form-control" name="telephone" value="{{$client->telephone}}" value="00 00 00 00 00" onkeyup="myPdl_{{$client->id}}()" />
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <label>Tél. pro</label>
                                            <input type="text" class="form-control" value="{{$client->telephone_pro}}" name="telephone_pro" placeholder="00 00 00 00 00" onkeyup="myPdl_{{$client->id}}()"/>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <label>Tél. portable 2</label>
                                            <input type="text" class="form-control" value="{{$client->telephone_portable2}}" name="telephone_portable2" placeholder="00 00 00 00 00" onkeyup="myPdl_{{$client->id}}()"/>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <label>Email</label>
                                            <input type="text" class="form-control" value="{{$client->email}}" placeholder="xxxxxxxxxxxx@xxxxxxxxx.xx" name="email" onkeyup="myPdl_{{$client->id}}()" />
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <label>Addresse contact</label>
                                            <input type="text" class="form-control" value="{{$client->adress}}" placeholder="RUE" name="adress" onkeyup="myPdl_{{$client->id}}()"/>
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4">
                                                    <input type="text" class="form-control" value="{{$client->code}}" placeholder="0000" name="code" onkeyup="myPdl_{{$client->id}}()"/>
                                                </div>
                                                <div class="col-lg-8 col-md-8">
                                                    <input type="text" class="form-control" value="{{$client->villa}}" placeholder="CITY" name="villa" onkeyup="myPdl_{{$client->id}}()" />
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <span class="client-information-title mt-4">INFORMATIONS COMPLÉMENTAIRES</span>

                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <label>Addresse 2</label>
                                            <input type="text" class="form-control" value="{{$client->adress2}}" name="adress2" placeholder="RUE" onkeyup="myPdl_{{$client->id}}()" />
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4">
                                                    <input type="text" value="{{$client->code2}}" name="code2" class="form-control"  placeholder="0000" onkeyup="myPdl_{{$client->id}}()"/>
                                                </div>
                                                <div class="col-lg-8 col-md-8">
                                                    <input type="text" class="form-control" value="{{$client->villa2}}" name="villa2" placholder="CITY" onkeyup="myPdl_{{$client->id}}()"/>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <label>Tél. 2</label>
                                            <input type="text" class="form-control" value="{{$client->telephone2}}" name="telephone2" placeholder="00 00 00 00 00" onkeyup="myPdl_{{$client->id}}()"/>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            &nbsp;
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <label>Email 2</label>
                                            <input type="text" class="form-control" name="email2"  value="{{$client->email2}}" placeholder="xxxxxxxxxxxx@xxxxxxxxx.xx" onkeyup="myPdl_{{$client->id}}()" />
                                        </div>

                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-lg-12 col-md-12">
                                            <label>Observations</label>
                                            <textarea class="form-control" onkeyup="myPdl_{{$client->id}}()" name="observations" rows="7" placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit">{{$client->observations}}</textarea>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-8 col-md-8 col-sm-8  tour-modal-fields-row-div" style="flex: 0 0 69.66666%; max-width: 69.66666%;">
                        <div class="row">
                            <div class="col-lg-9 col-md-9" style="flex: 0 0 57%; max-width: 61%;">
                                <div class="white-card-div white-card-div-height">
                                    <span class="client-information-title-gray">CONSIGNE POSE EDP</span>
                                    <p class="text-gray">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                                    <span class="consigne-close"><img src="assets/img/icons/white-blue-close.png" /></span>
                                </div>
                            </div>
                            <div class="col-lg-1 col-md-1" style="flex: 0 0 14%;margin-top:-20px; max-width: 14%;">
                             <button class="w-100 white-card-div box-div-height mt-4 contact-btn" data-toggle="modal" data-target="#ContactModal_{{ $client->id }}">Contact</button>
                            </div>
                             @include('client.clients_Contact')
                            <div class="col-lg-1 col-md-1" style="flex: 0 0 14%; max-width: 14%;">

                                <div class="w-full white-card-div box-div-height text-center bg-green text-white" style="padding-top: 34%;">
                                    <a href="javascript:void(0)" class="text-white mt-4 text-bold" onclick="openInterventionModal({{ $client->id }})" >Planifier une intervention</a>
                                </div>

                            </div>
                            <div class="col-lg-1 col-md-" style="flex: 0 0 14%; max-width: 14%;">

                                <div class="w-full white-card-div box-div-height text-center bg-orange text-white" style="padding-top: 34%;">
                                    <a href="javascript:void(0)"  class="text-white mt-4 text-bold" onclick="openVisiteModal({{ $client->id }})">Planifier une visite</a>
                                </div>

                            </div>
                        </div>

                        <div class="row mt-4">

                            <div class="col-lg-12 col-md-12">
                                <nav>
                                    <div class="nav nav-tabs pose-navs" id="nav-client-details-tab" role="tablist">
                                        <a class="nav-item nav-link active" id="nav-historique-tab" data-toggle="tab" href="#nav-historique_{{ $client->id }}" role="tab" aria-controls="nav-historique" aria-selected="true">
                                            <span class="tab-label">Historique</span>
                                        </a>
                                        <a class="nav-item nav-link" id="nav-deploiement-tab" data-toggle="tab" href="#nav-deploiement_{{ $client->id }}" role="tab" aria-controls="nav-deploiement" aria-selected="true">
                                            <span class="tab-label">Déploiement</span>
                                        </a>
                                        <a class="nav-item nav-link" id="nav-technique-tab" data-toggle="tab" href="#nav-technique_{{ $client->id }}" role="tab" aria-controls="nav-technique" aria-selected="true">
                                            <span class="tab-label">Technique</span>
                                        </a>
                                        <a class="nav-item nav-link" id="nav-notifications-tab" data-toggle="tab" href="#nav-notifications_{{ $client->id }}" role="tab" aria-controls="nav-notifications" aria-selected="true">
                                            <span class="tab-label">Notifications <span class="counter-span">2</span></span>
                                        </a>
                                        <a class="nav-item nav-link" id="nav-rc-tab" data-toggle="tab" href="#nav-rc_{{ $client->id }}" role="tab" aria-controls="nav-rc_{{ $client->id }}" aria-selected="true">
                                            <span class="tab-label">RC <span class="counter-span">2</span></span>
                                        </a>


                                        <div class="switch-div">

                                            <label class="switch-green-div">
                                              <input type="checkbox" checked>
                                              <span class="slider round"></span>
                                            </label>
                                            <strong class="switch-green-label">Rendez-vouz<br/>necessaire</strong>
                                        </div>

                                    </div>
                                </nav>
                                <div class="tab-content" id="nav-tabContentClient">
                                    <div class="tab-pane fade show active" id="nav-historique_{{ $client->id }}" role="tabpanel" aria-labelledby="nav-historique-tab">
                                        <div class="content-slim-div">
                                            @include('client.historieque')
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="nav-deploiement_{{ $client->id }}" role="tabpanel" aria-labelledby="nav-deploiement-tab">
                                        <div class="content-slim-div deploiement-div">

                                            @include('client.deploiement')

                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="nav-technique_{{ $client->id }}" role="tabpanel" aria-labelledby="nav-technique-tab">

                                        <div class="content-slim-div deploiement-div">

                                            @include('client.technique')

                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="nav-notifications_{{ $client->id }}" role="tabpanel" aria-labelledby="nav-notifications-tab">
                                        <div class="content-slim-div">
                                            @include('client.notifications')
                                        </div>

                                        <div class="row mt-4">
                                            <div class="col-lg-12 col-md-12 justify-content-center text-center">

                                                <a href="javascript:void(0)" class="btn btn-lightblue px-4" style="line-height: 2;" data-toggle="modal" data-target="#notification-modal_{{ $client->id }}">Ajouter une notification</a>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="nav-rc_{{ $client->id }}" role="tabpanel" aria-labelledby="nav-rc-tab">
                                        <div class="content-slim-div">
                                            @include('client.rc')
                                        </div>

                                        <div class="row mt-4">
                                            <div class="col-lg-12 col-md-12 justify-content-center text-center">


                                                <a href="javascript:void(0)" class="btn btn-lightblue px-4" style="line-height: 2;" data-toggle="modal" data-target="#rc-modal">Ajouter une RC</a>

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
  </div>
</div>


<meta name="csrf-token" content="{{ csrf_token() }}" />

<script>
    function myPdl_{{$client->id}}()
    {
        var dataString = $("#information_pdl_form_{{$client->id}}").serialize();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });


        $.ajax({
            url: '{{route("client.myPdl")}}',
            method: 'POST',
            dataType: 'json',
            data: dataString,
        });
    }
</script>
