<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css"
    integrity="sha512-xmGTNt20S0t62wHLmQec2DauG9T+owP9e6VU8GigI0anN7OXLip9i7IwEhelasml2osdxX71XcYm6BQunTQeQg=="
    crossorigin="anonymous" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js"
integrity="sha512-VvWznBcyBJK71YKEKDMpZ0pCVxjNuKwApp4zLF3ul+CiflQi6aIJR+aZCP/qWsoFBA28avL5T5HA+RE+zrGQYg=="
crossorigin="anonymous"></script>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput-angular.min.js"
integrity="sha512-KT0oYlhnDf0XQfjuCS/QIw4sjTHdkefv8rOJY5HHdNEZ6AmOh1DW/ZdSqpipe+2AEXym5D0khNu95Mtmw9VNKg=="
crossorigin="anonymous"></script> --}}

<style type="text/css">
    .bootstrap-tagsinput {
        width: 100%;
        padding: 0 6px;
        border-radius: 10px;
        border: 1px solid #e8e8f7;
        height: 45px;
        padding-top: 5px;
    }

    .label-info {
        background-color: #17a2b8;

    }

    .bootstrap-tagsinput .tag {
        margin-right: 2px;
        color: #000;
        background: #f3fbff;
        padding: 10px;
        font-size: 0.85rem;
        min-width: 9.9rem;
        text-align: left;
        font-weight: normal;
        border-radius: 10px;
    }

    .bootstrap-tagsinput .tag [data-role="remove"] {
        content: "";
        display: none !important;
    }

    .label {
        display: inline-block;
        padding: .25em .4em;
        font-size: 75%;
        font-weight: 700;
        line-height: 1;
        text-align: center;
        white-space: nowrap;
        vertical-align: baseline;
        border-radius: .25rem;
        transition: color .15s ease-in-out, background-color .15s ease-in-out,
            border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    }

</style>

@php
    $notificatons = DB::table('llx_notification')->where('client_id',$client->id)->get();
@endphp


@foreach ($notificatons as $noti)


<div class="row">
    <div class="col-lg-12 col-md-12 notification-row-div">

        <div class="blue-white-card-div">
            <strong class="small-blue-text">113 août 2021 á 19:23|EDO IMC-TELECOM_MISSAMOU</strong>
            <p>{{$noti->description}}</p>
        </div>

    </div>
</div>
@endforeach

<div class="modal fade" id="notification-row-modal" tabindex="-1" role="dialog" aria-labelledby="technicien-modal
" aria-hidden="true">
    <div class="modal-dialog" role="document" style="max-width: 60rem;">
        <div class="modal-content">

            <div class="modal-body">

                <div class="row">

                    <div class="col-lg-9 col-md-9 col-sm-9">
                        <strong style="font-size: 1rem;">NOTIFICATION</strong>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <a class="modal-close close" data-dismiss="modal" aria-label="Close"
                            style="float:right;margin-top: -11px;" href="javascript:void(0)"><img
                                src="assets/img/media/bigger-close.png" style="width:70px" /></a>
                    </div>

                </div>

                <div class="row">

                    <nav class="light-blue-bg" style="float:left;width: 100%;">
                        <div class="nav nav-tabs" id="nav-notifications-row-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-historique-tab" data-toggle="tab"
                                href="#nav-informations" role="tab" aria-controls="nav-informations"
                                aria-selected="true">
                                <span class="tab-label">Informations</span>
                            </a>
                            <a class="nav-item nav-link" id="nav-notification-historique-tab" data-toggle="tab"
                                href="#nav-notification-historique" role="tab"
                                aria-controls="nav-notification-historique" aria-selected="true">
                                <span class="tab-label">Historique</span>
                            </a>
                            <a class="nav-item nav-link" id="nav-piece-tab" data-toggle="tab" href="#nav-piece"
                                role="tab" aria-controls="nav-piece" aria-selected="true">
                                <span class="tab-label">Pièce Jointes</span>
                            </a>

                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabNotifications">
                        <div class="tab-pane fade show active" id="nav-informations" role="tabpanel"
                            aria-labelledby="nav-informations-tab">

                            <div class="row">
                                <div class="col-lg-5 col-md-5">

                                    <div class="row mb-3">
                                        <div class="col-lg-12 col-md-12">
                                            <label class="small-dark-text">Nature</label>
                                            <input type="text" placeholder="" name="" class="form-control"
                                                value="Nature" />
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-lg-12 col-md-12">
                                            <label class="small-dark-text">Numéro de PDL</label>
                                            <input type="text" placeholder="" name="" class="form-control"
                                                value="2516594124321" />
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-lg-12 col-md-12">
                                            <label class="small-dark-text">Criticé</label>
                                            <input type="text" placeholder="NATURE" name="" class="form-control"
                                                value="2516594124321" />
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-lg-12 col-md-12">
                                            <label class="small-dark-text">État</label>
                                            <input type="text" placeholder="NATURE" name="" class="form-control"
                                                value="00/00/0000" />
                                        </div>
                                    </div>

                                </div>

                                <div class="col-lg-7 col-md-7">

                                    <div class="row mb-3">
                                        <div class="col-lg-12 col-md-12">
                                            <label class="small-dark-text">Assigner á</label>
                                            <input type="text" placeholder="" data-role="tagsinput" name="tags"
                                                class="form-control" value="Nom Prénom1,Nom Prénom2,Nom Prénom3" />
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-lg-12 col-md-12">
                                            <label class="small-dark-text">Date</label>
                                            <input type="text" placeholder="" name="" class="form-control"
                                                value="2516594124321" />
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-lg-12 col-md-12">
                                            <label class="small-dark-text">Commentaire/Probléme</label>
                                            <textarea class="form-control" rows="6">

														</textarea>
                                        </div>
                                    </div>



                                </div>
                            </div>

                            <div class="row mb-3 mt-4">
                                <div class="col-lg-12 col-md-12 justify-content-center text-center">
                                    <a href="javascript:void(0)" class="btn btn-lightblue px-4 mr-2"
                                        style="line-height: 2;border-radius: 7rem !important">Ajouter une demde de
                                        levée</a>
                                </div>
                            </div>

                        </div>

                        <div class="tab-pane fade" id="nav-notification-historique" role="tabpanel"
                            aria-labelledby="nav-notification-historique-tab">

                            <div class="row">
                                <div class="col-lg-12 col-md-12">

                                    <div class="blue-white-card-div">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12">
                                                <strong class="small-blue-text w100 float-left mb-1">13 août 2021 á
                                                    19:23|EDO IMC-TELECOM_MISSAMOU</strong>
                                                <strong class="text-bold w100 float-left mb-1">Creation d'une
                                                    notification</strong>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <span class="mb-1 w100 float-left">Nature: CR KO hors GRIP</span>
                                                <span class="mb-1 w100 float-left">Criticitè: Normale</span>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <span class="mb-1 w100 float-left">Etat: A traiter par l'extreme</span>
                                                <span class="mb-1 w100 float-left">Commentaire: Rè-intervention
                                                    nècessaire</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                        <div class="tab-pane fade" id="nav-piece" role="tabpanel" aria-labelledby="nav-piece-tab">
                            <div id="carouselExampleControls" class="carousel slide mt-4" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-90" src="assets/img/media/slider1.png"
                                            alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-90" src="assets/img/media/slider1.png"
                                            alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-90" src="assets/img/media/slider1.png"
                                            alt="Third slide">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>


@include('client.Add_notifications')

<script type="text/javascript">
    $('.modal-close').click(function() {
        $('#notification-modal_{{ $client->id }}').modal('hide');
    });

    $('.notification-row-div').click(function() {
        $('#notification-row-modal').modal('show');
    });
</script>
