<div class="modal" id="ajouterCommentaireAgenceModal_{{$agent->id}}" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content modal-content-demo">
            <!--            <form  action="#" method="post" id="SubmitAgencyCmments" name="SubmitAgencyCmments"> 
                            @csrf-->
            <div class="modal-header">
                <h6 class="modal-title">AJOUTER UN COMMENTAIRE AGENCE</h6>
                <!-- <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">×</span></button> -->
            </div>
            <div class="modal-body">
                <div class="">


                    <div class="card-body p-0">
                        <div class="form-group">
                            <label>Sujet</label>
                            <!-- <select class="form-control mb-1">
                                <option>City</option>
                            </select>-->
                            <input type="text" id="agencyTitlecommnet_{{ $agent->id }}" name="agencyTitlecommnet" class="form-control" placeholder="Title">
                        </div>
                        <div class="form-group">
                            <p class="mg-b-10">Commentaire</p>
                            <textarea class="form-control" id="CommentDescription_{{ $agent->id }}" name="CommentDescription" placeholder="Texte..." rows="5"></textarea>
                        </div>
                    </div>

                </div>
            </div>
            <div class="modal-footer" style="float: unset;margin: 0 auto;">
                <button class="btn-blue-white valider-btn" onclick="AgencyCommentData({{$agent->id}});" id="SubmitAgencyCmmentsBtn">Valider</button>
                <button class="btn-white-blue annuler-btn" data-dismiss="modal" type="button">Annuler</button>
            </div>
            <!--</form>-->
        </div>

    </div>
</div>


