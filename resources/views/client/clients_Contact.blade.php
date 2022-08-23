<div class="modal ContactModal" id="ContactModal_{{ $client->id }}">
    <div class="modal-dialog modal-dialog-centered modal-wd-768" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">CONTACT CLIENT</h6>
                <!-- <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">×</span></button> -->
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-xs-12 col-sm-4">
                        <h6 class="text-blue">Informations clients</h6>
                        <div class="my-3">
                            <span>{{$client->nom}} {{$client->prenom}}</span>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <h6 class="text-blue">Adresse PDL</h6>
                        <div class="my-3">
                            <span>{{$client->adress}}</span>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <h6 class="text-blue">Numéro du PDL</h6>
                        <div class="my-3">
                            <span>{{$client->pdl}}</span>
                        </div>
                    </div>

                </div>
                <div class="row row-sm mt-3">
                    <div class="col-md-5">
                        <div class="form-group">
                            <p class="mg-b-10">Action à effectuer</p>
                            <select name="country" class="form-control">
                                <option value="">Test</option>
                                <option value="Test1">Test1</option>
                                <option value="Test2">Test2</option>
                                <option value="Test3">Test3</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-5">

                        <div class="form-group">
                            <p class="mg-b-10">Date de rappel</p>
                            {{-- <input type="text" name="Consigne_Date" id="Consigne_Date" class="form-control bar-from"/> --}}

                            <div class="datepicker-container">
                                <i class="date-icon date-icon1 float-left" aria-hidden="true"></i>
                                <input class="form-control bar-from" type="text" placeholder="00/00/0000" name="Consigne_Date">
                            </div>
                        </div>
                    </div>

                </div>

                <div class="form-group">
                    <p class="mg-b-10">Commentaire</p>
                    <textarea class="form-control" name="example-textarea-input" rows="4" placeholder="Texte..."></textarea>
                </div>
            </div>
            <div class="modal-footer m-auto">
                <button class="validerbtn" type="submit"  type="button">Valider</button>
                <button class="annulerbtn close-btn" data-dismiss="modal" type="button">Annuler</button>
            </div>
        </div>
    </div>
</div>


<script>
    $('.bar-from,.bar-to').datepicker({
                dateFormat: 'dd-M-yy',
                minDate: 1
            });
</script>
