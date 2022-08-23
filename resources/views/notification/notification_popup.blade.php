<div class="modal fullmodal fade" id="notification-modal_{{$notifi->id}}" tabindex="-1" role="dialog" aria-labelledby="notification-modal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-body">
                <div class="notificationsDetails" style="display: block;">
                    <div class="">
                        <div class="leftarrow">
                            <!--<button class="leftarrowBtn"><i class="fas fa-chevron-left"></i></button>-->
                            <a href="javascript:void(0)"><img src="{{ asset('public/assets/img/icons/gray-left-arrow.png')}}" class="tour-employee-left-arrow" data-dismiss="modal"></a>
                        </div>
                        <div class="">
                            <div class="detailsNotification">
                                <div class="header">
                                    <h6 class="" style="color: #009CDE; font-weight: bold;">Détail notification</h6>
                                </div>
                                <div class="row row-sm">
                                    <div class="col-xs-12 col-sm-5">
                                        <div class="card custom-card overflow-hidden ">
                                            <div class="card-body">
                                                <h6 class="text-muted" style="font-weight: bold;">NATURE</h6>
                                                <hr>
                                                <p>{{$notifi->nature}}</p>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-xs-12 col-sm-7">
                                        <div class="row-sm row">
                                            <div class="col-xs-12 col-sm-6">
                                                <div class="card custom-card overflow-hidden ">
                                                    <div class="card-body">
                                                        <h6 class="text-muted" style="font-weight: bold;">DATE DE CREATION</h6>
                                                        <hr>
                                                        <p>{{$notifi->created_at}}</p>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-xs-12 col-sm-6">
                                                <div class="card custom-card overflow-hidden ">
                                                    <div class="card-body ">
                                                        <h6 class="text-muted" style="font-weight: bold;">NUMERO PDL</h6>
                                                        <hr>
                                                        <p>{{$notifi->pdl}}</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row-sm row">
                                    <div class="col-xs-12 col-sm-5">
                                        <div class="card custom-card overflow-hidden ">
                                            <div class="card-body">
                                                <h6 class="text-muted" style="font-weight: bold;">ASSIGNEE A</h6>
                                                <hr>
                                                <p>{{$notifi->description}}</p>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-xs-12 col-sm-7">
                                        <div class="row-sm row">
                                            <div class="col-xs-12 col-sm-6">
                                                <div class="card custom-card overflow-hidden ">
                                                    <div class="card-body">
                                                        <h6 class="text-muted" style="font-weight: bold;">CRITICITÉ</h6>
                                                        <hr>
                                                        <p style="color: #009CDE;"><i class="fa fa-circle mr-2"></i>Normale</p>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-xs-12 col-sm-6">
                                                <div class="card custom-card overflow-hidden ">
                                                    <div class="card-body ">
                                                        <h6 class="text-muted" style="font-weight: bold;">ETAT</h6>
                                                        <hr>
                                                        <p style="color: #27C291;"><i class="fa fa-circle mr-2"></i>Levée</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>




                        </div>

                        <div class="notificationHistory">
                            <div class="header">
                                <h6 class="" style="color: #009CDE; font-weight: bold;">Historique</h6>
                            </div>

                            <div class="card custom-card overflow-hidden ">

                                <div class="card-body px-2">
                                    <div class="notificationHistoryItems">
                                        <div class="items">
                                            <h6 class="mb-1">13 août 2021 à 19:23 | EDO IMC-TELECOM_MISSAMOU</h6>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                            </p>
                                        </div>
                                        <div class="items">
                                            <h6 class="mb-1">13 août 2021 à 19:23 | EDO IMC-TELECOM_MISSAMOU</h6>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                            </p>
                                        </div>
                                        <div class="items">
                                            <h6 class="mb-1">13 août 2021 à 19:23 | EDO IMC-TELECOM_MISSAMOU</h6>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                            </p>
                                        </div>
                                        <div class="items">
                                            <h6 class="mb-1">13 août 2021 à 19:23 | EDO IMC-TELECOM_MISSAMOU</h6>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                            </p>
                                        </div>
                                        <div class="items">
                                            <h6 class="mb-1">13 août 2021 à 19:23 | EDO IMC-TELECOM_MISSAMOU</h6>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                            </p>
                                        </div>
                                        <div class="items">
                                            <h6 class="mb-1">13 août 2021 à 19:23 | EDO IMC-TELECOM_MISSAMOU</h6>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                            </p>
                                        </div>
                                        <div class="items">
                                            <h6 class="mb-1">13 août 2021 à 19:23 | EDO IMC-TELECOM_MISSAMOU</h6>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                            </p>
                                        </div>
                                        <div class="items">
                                            <h6 class="mb-1">13 août 2021 à 19:23 | EDO IMC-TELECOM_MISSAMOU</h6>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                            </p>
                                        </div>
                                        <div class="items">
                                            <h6 class="mb-1">13 août 2021 à 19:23 | EDO IMC-TELECOM_MISSAMOU</h6>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div> -->
        </div>
    </div>
</div>
