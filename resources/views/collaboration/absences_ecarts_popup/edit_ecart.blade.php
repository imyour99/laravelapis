<div class="modal fade edit-ecart-modal" id="edit-ecart-modal_{{ $ecart->id }}_{{ $collaboration_id }}"
    tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form action="{{ route('collabotation.ecart_edit') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="ecart_id" value="{{ $ecart->id }}">
        <input type="hidden" name="collaboration_id" value="{{ $collaboration_id }}">

        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header pb-0" style="padding: 20px 10px;background: white;">
                    <h5 class="modal-title">EDITER UN ECART</h5>
                    <button class="btn btn-lightblue">Enregistrer</button>

                    <a class="close1_e_edit_{{ $ecart->id }}_{{ $collaboration_id }}"
                        style="float:right;margin-top: -6px;" href="javascript:void(0)"><img
                            src="{{ asset('public/assets/img/icons/Exit_1.png') }}"></a>
                    <!--<a href="javascript:void(0);" class="btn-blue-white float-right mt-0"></a>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">
                    <img src="assets/img/icons/Exit_1.png">
                    </span>
                    </button>-->
                </div>
                <div class="modal-body pl-0 pr-0">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12">
                            <div class="another-nav-container">
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <a class="nav-item nav-link active" id="ecart-informations-tab"
                                            data-toggle="tab" href="#ecart-informations_{{ $ecart->id }}" role="tab"
                                            aria-controls="ecart-informations" aria-selected="true">Informations</a>
                                        <a class="nav-item nav-link" id="ecart-piece-joints-tab" data-toggle="tab"
                                            href="#ecart-piece-joints_{{ $ecart->id }}" role="tab"
                                            aria-controls="ecart-piece-joints" aria-selected="false">Piéce jointes</a>
                                    </div>
                                </nav>
                                <div class="tab-content pt-4 pl-4 pr-4">
                                    <div class="tab-pane fade show active" id="ecart-informations_{{ $ecart->id }}"
                                        role="tabpanel" aria-labelledby="ecart-informations-tab">
                                        <div class="row">
                                            <div class="col-lg-5 col-sm-5">
                                                <div class="form-group">
                                                    <label>Motif</label>
                                                    <input type="text" name="motif" class="form-control"
                                                        value="{{ $ecart->motif }}">
                                                </div>
                                                <div class="form-group">
                                                    <label>Début</label>
                                                    <div class="row">
                                                        <div class="col-lg-6 col-sm-6">
                                                            <div class="datepicker-container">
                                                                <i class="date-icon date-icon1 float-left"
                                                                    aria-hidden="true"></i>
                                                                <input class="form-control bar-from" type="text"
                                                                    name="debut_date" value="{{ $ecart->debut_date }}"
                                                                    placeholder="{{ $ecart->debut_date }}" />
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-sm-4 pl-0">
                                                            <select class="form-control" name="debut_time">

                                                                <option value="10:00"
                                                                    {{ $ecart->debut_time == '10:00' ? 'selected' : '' }}>
                                                                    10:00</option>
                                                                <option value="11:00"
                                                                    {{ $ecart->debut_time == '11:00' ? 'selected' : '' }}>
                                                                    11:00</option>
                                                                <option value="12:00"
                                                                    {{ $ecart->debut_time == '12:00' ? 'selected' : '' }}>
                                                                    12:00</option>
                                                                <option value="13:00"
                                                                    {{ $ecart->debut_time == '13:00' ? 'selected' : '' }}>
                                                                    13:00</option>
                                                                <option value="14:00"
                                                                    {{ $ecart->debut_time == '14:00' ? 'selected' : '' }}>
                                                                    14:00</option>
                                                                <option value="15:00"
                                                                    {{ $ecart->debut_time == '15:00' ? 'selected' : '' }}>
                                                                    15:00</option>
                                                                <option value="16:00"
                                                                    {{ $ecart->debut_time == '16:00' ? 'selected' : '' }}>
                                                                    16:00</option>
                                                                <option value="17:00"
                                                                    {{ $ecart->debut_time == '17:00' ? 'selected' : '' }}>
                                                                    17:00</option>
                                                                <option value="18:00"
                                                                    {{ $ecart->debut_time == '18:00' ? 'selected' : '' }}>
                                                                    18:00</option>
                                                                <option value="19:00"
                                                                    {{ $ecart->debut_time == '19:00' ? 'selected' : '' }}>
                                                                    19:00</option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-sm-6">
                                                <div class="form-group">
                                                    <label>Notifier à:</label>
                                                    <div class="autofill-container">

                                                        <textarea name="notifier" id="" rows="2" class="form-control"> </textarea>
                                                        <div class="autofill-span-container">


                                                            @php
                                                                $noti_value = $ecart->notifier;

                                                                $noti = explode(',', $noti_value);

                                                                foreach ($noti as $value) {
                                                                    if ($value) {
                                                                        echo '<span>' . $value . '</span>';
                                                                    }
                                                                }

                                                            @endphp


                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Fin</label>
                                                    <div class="row">
                                                        <div class="col-lg-9 col-sm-9">
                                                            <div class="row">
                                                                <div class="col-lg-6 col-sm-6">
                                                                    <div class="datepicker-container">
                                                                        <i class="date-icon date-icon1 float-left"
                                                                            aria-hidden="true"></i>
                                                                        <input class="form-control bar-from"
                                                                            name="fin_date" type="text"
                                                                            value="{{ $ecart->fin_date }}"
                                                                            placeholder="{{ $ecart->fin_date }}" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4 col-sm-4 pl-0">
                                                                    <select class="form-control" name="fin_time">
                                                                        <option value="10:00"
                                                                            {{ $ecart->fin_time == '10:00' ? 'selected' : '' }}>
                                                                            10:00</option>
                                                                        <option value="11:00"
                                                                            {{ $ecart->fin_time == '11:00' ? 'selected' : '' }}>
                                                                            11:00</option>
                                                                        <option value="12:00"
                                                                            {{ $ecart->fin_time == '12:00' ? 'selected' : '' }}>
                                                                            12:00</option>
                                                                        <option value="13:00"
                                                                            {{ $ecart->debut_time == '13:00' ? 'selected' : '' }}>
                                                                            13:00</option>
                                                                        <option value="14:00"
                                                                            {{ $ecart->fin_time == '14:00' ? 'selected' : '' }}>
                                                                            14:00</option>
                                                                        <option value="15:00"
                                                                            {{ $ecart->fin_time == '15:00' ? 'selected' : '' }}>
                                                                            15:00</option>
                                                                        <option value="16:00"
                                                                            {{ $ecart->fin_time == '16:00' ? 'selected' : '' }}>
                                                                            16:00</option>
                                                                        <option value="17:00"
                                                                            {{ $ecart->fin_time == '17:00' ? 'selected' : '' }}>
                                                                            17:00</option>
                                                                        <option value="18:00"
                                                                            {{ $ecart->fin_time == '18:00' ? 'selected' : '' }}>
                                                                            18:00</option>
                                                                        <option value="19:00"
                                                                            {{ $ecart->fin_time == '19:00' ? 'selected' : '' }}>
                                                                            19:00</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-sm-12">
                                                <div class="form-group">
                                                    <label>Description</label>
                                                    <textarea class="form-control" rows="7" name="description">
                                                        {{ $ecart->description }}
                                                    </textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <style>
                                        .img_height{
                                            height: 160px !important;
                                            width: 160px !important;
                                        }
                                    </style>
                                    <div class="tab-pane fade" id="ecart-piece-joints_{{ $ecart->id }}"
                                        role="tabpanel" aria-labelledby="ecart-piece-joints-tab">
                                        <div class="row">
                                            <div class="col-lg-12 col-sm-12">
                                                <div class="form-group">
                                                    <label class="mb-4">Ajouter des justificatifs</label>
                                                    <div class="row">
                                                        <div class="col-lg-3 col-sm-3">
                                                            <div class="form-group box-with-icon">

                                                                @if ($ecart->img1)

                                                                    @if (strrchr($ecart->img1, '.') == '.pdf')
                                                                        <div class="upload-bx lightgray-upload-bx">
                                                                            <i class="fa fa-file-pdf-o"
                                                                                aria-hidden="true"
                                                                                style="font-size: 45px;color: #009cde;    padding: 35px 0px 35px 0px;"></i>
                                                                        </div>
                                                                    @elseif (strrchr($ecart->img1, '.') == '.png' || strrchr($ecart->img1, '.') == '.jpg' || strrchr($ecart->img1, '.') == '.jpeg')
                                                                        <div class="upload-bx view-color">
                                                                            <img src="{{ asset('public/uploads/ecart/' . $ecart->img1) }}"
                                                                                name="img1" class="img_height">
                                                                        </div>
                                                                    @else
                                                                        <div class="upload-bx lightgray-upload-bx">
                                                                            <i class="fa fa-file-text"
                                                                                aria-hidden="true"
                                                                                style="font-size: 45px;color: #009cde;    padding: 35px 0px 35px 0px;"></i>
                                                                        </div>
                                                                    @endif


                                                                    <input type="hidden" name="img1"
                                                                        value="{{ $ecart->img1 }}">
                                                                @else
                                                                    <div class="upload-bx lightgray-upload-bx">
                                                                        <i id="imgPreview1matee_pdf_{{ $ecart->id }}"
                                                                            class="fa fa-file-pdf-o" aria-hidden="true"
                                                                            style="display: none;font-size: 45px;color: #009cde;"></i>

                                                                        <i id="imgPreview1matee_word_{{ $ecart->id }}"
                                                                            class="fa fa-file-text" aria-hidden="true"
                                                                            style="display: none;font-size: 45px;color: #009cde;"></i>

                                                                        <img id="imgPreview1matee_{{ $ecart->id }}"
                                                                            src="{{ asset('public/assets/img/icons/plus_grey.png') }}" />
                                                                    </div>
                                                                    <input type="file" name="img1"
                                                                        id="img1matee_{{ $ecart->id }}"
                                                                        class="hide-file-input">
                                                                @endif

                                                                <p class="text-center view-color" style="bottom: -22%;">

                                                                    @if (strrchr($ecart->img1, '.') == '.pdf')
                                                                        <a href="{{ asset('public/uploads/ecart/' . $ecart->img1) }}"
                                                                            target="_blank">
                                                                            <img src="{{ asset('public/assets/img/icons/eye-round-orange.png') }}"
                                                                                style="margin-right: -4%; width: 20%; margin-top: 10%;">
                                                                        </a>
                                                                    @elseif (strrchr($ecart->img1, '.') == '.png' || strrchr($ecart->img1, '.') == '.jpg' || strrchr($ecart->img1, '.') == '.jpeg')
                                                                        <img src="{{ asset('public/assets/img/icons/eye-round-orange.png') }}"
                                                                            style="margin-right: -4%; width: 20%; margin-top: 10%;"
                                                                            data-toggle="modal"
                                                                            data-target="#img1_ecart_previews_{{ $ecart->id }}">
                                                                    @else
                                                                        <a href="{{ asset('public/uploads/ecart/' . $ecart->img1) }}"
                                                                            target="_blank">
                                                                            <img src="{{ asset('public/assets/img/icons/eye-round-orange.png') }}"
                                                                                style="margin-right: -4%; width: 20%; margin-top: 10%;">
                                                                        </a>
                                                                    @endif


                                                                    <img src="{{ asset('public/assets/img/icons/exit-orange.png') }}"
                                                                        style="width: 20%;margin-top: 10%;"
                                                                        class="img1_ecart_delete_{{ $ecart->id }}"
                                                                        data-img1-id="{{ $ecart->img1 }}"
                                                                        id="img1_ecart_delete_{{ $ecart->id }}"
                                                                        data-ecart-id="{{ $ecart->id }}"
                                                                        id="ecart_delete_{{ $ecart->id }}">

                                                                </p>
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" name="img1_name"
                                                                    value="{{ $ecart->img1_name }}"
                                                                    class="form-control" placeholder="NOM PHOTO">
                                                            </div>
                                                        </div>




                                                        <div class="col-lg-3 col-sm-3">
                                                            <div class="form-group box-with-icon">

                                                                @if ($ecart->img2)

                                                                    @if (strrchr($ecart->img2, '.') == '.pdf')
                                                                        <div class="upload-bx lightgray-upload-bx">
                                                                            <i class="fa fa-file-pdf-o"
                                                                                aria-hidden="true"
                                                                                style="font-size: 45px;color: #009cde;    padding: 35px 0px 35px 0px;"></i>
                                                                        </div>
                                                                    @elseif (strrchr($ecart->img2, '.') == '.png' || strrchr($ecart->img2, '.') == '.jpg' || strrchr($ecart->img2, '.') == '.jpeg')
                                                                        <div class="upload-bx view-color">
                                                                            <img src="{{ asset('public/uploads/ecart/' . $ecart->img2) }}"
                                                                                name="img2" class="img_height">
                                                                        </div>
                                                                    @else
                                                                        <div class="upload-bx lightgray-upload-bx">
                                                                            <i class="fa fa-file-text"
                                                                                aria-hidden="true"
                                                                                style="font-size: 45px;color: #009cde;    padding: 35px 0px 35px 0px;"></i>
                                                                        </div>
                                                                    @endif


                                                                    <input type="hidden" name="img2"
                                                                        value="{{ $ecart->img2 }}">
                                                                @else
                                                                    <div class="upload-bx lightgray-upload-bx">
                                                                        <i id="imgPreview2matee_pdf_{{ $ecart->id }}"
                                                                            class="fa fa-file-pdf-o" aria-hidden="true"
                                                                            style="display: none;font-size: 45px;color: #009cde;"></i>

                                                                        <i id="imgPreview2matee_word_{{ $ecart->id }}"
                                                                            class="fa fa-file-text" aria-hidden="true"
                                                                            style="display: none;font-size: 45px;color: #009cde;"></i>

                                                                        <img id="imgPreview2matee_{{ $ecart->id }}"
                                                                            src="{{ asset('public/assets/img/icons/plus_grey.png') }}" />
                                                                    </div>
                                                                    <input type="file" name="img2"
                                                                        id="img2matee_{{ $ecart->id }}"
                                                                        class="hide-file-input">
                                                                @endif

                                                                <p class="text-center view-color" style="bottom: -22%;">

                                                                    @if (strrchr($ecart->img2, '.') == '.pdf')
                                                                        <a href="{{ asset('public/uploads/ecart/' . $ecart->img2) }}"
                                                                            target="_blank">
                                                                            <img src="{{ asset('public/assets/img/icons/eye-round-orange.png') }}"
                                                                                style="margin-right: -4%; width: 20%; margin-top: 10%;">
                                                                        </a>
                                                                    @elseif (strrchr($ecart->img2, '.') == '.png' || strrchr($ecart->img2, '.') == '.jpg' || strrchr($ecart->img2, '.') == '.jpeg')
                                                                        <img src="{{ asset('public/assets/img/icons/eye-round-orange.png') }}"
                                                                            style="margin-right: -4%; width: 20%; margin-top: 10%;"
                                                                            data-toggle="modal"
                                                                            data-target="#img2_ecart_previews_{{ $ecart->id }}">
                                                                    @else
                                                                        <a href="{{ asset('public/uploads/ecart/' . $ecart->img2) }}"
                                                                            target="_blank">
                                                                            <img src="{{ asset('public/assets/img/icons/eye-round-orange.png') }}"
                                                                                style="margin-right: -4%; width: 20%; margin-top: 10%;">
                                                                        </a>
                                                                    @endif


                                                                    <img src="{{ asset('public/assets/img/icons/exit-orange.png') }}"
                                                                        style="width: 20%;margin-top: 10%;"
                                                                        class="img2_ecart_delete_{{ $ecart->id }}"
                                                                        data-img2-id="{{ $ecart->img2 }}"
                                                                        id="img2_ecart_delete_{{ $ecart->id }}"
                                                                        data-ecart-id="{{ $ecart->id }}"
                                                                        id="ecart_delete_{{ $ecart->id }}">

                                                                </p>
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" name="img2_name"
                                                                    value="{{ $ecart->img2_name }}"
                                                                    class="form-control" placeholder="NOM PHOTO">
                                                            </div>
                                                        </div>




                                                        <div class="col-lg-3 col-sm-3">
                                                            <div class="form-group box-with-icon">

                                                                @if ($ecart->img3)

                                                                    @if (strrchr($ecart->img3, '.') == '.pdf')
                                                                        <div class="upload-bx lightgray-upload-bx">
                                                                            <i class="fa fa-file-pdf-o"
                                                                                aria-hidden="true"
                                                                                style="font-size: 45px;color: #009cde;    padding: 35px 0px 35px 0px;"></i>
                                                                        </div>
                                                                    @elseif (strrchr($ecart->img3, '.') == '.png' || strrchr($ecart->img3, '.') == '.jpg' || strrchr($ecart->img3, '.') == '.jpeg')
                                                                        <div class="upload-bx view-color">
                                                                            <img src="{{ asset('public/uploads/ecart/' . $ecart->img3) }}"
                                                                                name="img3" class="img_height">
                                                                        </div>
                                                                    @else
                                                                        <div class="upload-bx lightgray-upload-bx">
                                                                            <i class="fa fa-file-text"
                                                                                aria-hidden="true"
                                                                                style="font-size: 45px;color: #009cde;    padding: 35px 0px 35px 0px;"></i>
                                                                        </div>
                                                                    @endif


                                                                    <input type="hidden" name="img2"
                                                                        value="{{ $ecart->img3 }}">
                                                                @else
                                                                    <div class="upload-bx lightgray-upload-bx">
                                                                        <i id="imgPreview3matee_pdf_{{ $ecart->id }}"
                                                                            class="fa fa-file-pdf-o" aria-hidden="true"
                                                                            style="display: none;font-size: 45px;color: #009cde;"></i>

                                                                        <i id="imgPreview3matee_word_{{ $ecart->id }}"
                                                                            class="fa fa-file-text" aria-hidden="true"
                                                                            style="display: none;font-size: 45px;color: #009cde;"></i>

                                                                        <img id="imgPreview3matee_{{ $ecart->id }}"
                                                                            src="{{ asset('public/assets/img/icons/plus_grey.png') }}" />
                                                                    </div>
                                                                    <input type="file" name="img3"
                                                                        id="img3matee_{{ $ecart->id }}"
                                                                        class="hide-file-input">
                                                                @endif

                                                                <p class="text-center view-color" style="bottom: -22%;">

                                                                    @if (strrchr($ecart->img3, '.') == '.pdf')
                                                                        <a href="{{ asset('public/uploads/ecart/' . $ecart->img3) }}"
                                                                            target="_blank">
                                                                            <img src="{{ asset('public/assets/img/icons/eye-round-orange.png') }}"
                                                                                style="margin-right: -4%; width: 20%; margin-top: 10%;">
                                                                        </a>
                                                                    @elseif (strrchr($ecart->img3, '.') == '.png' || strrchr($ecart->img3, '.') == '.jpg' || strrchr($ecart->img3, '.') == '.jpeg')
                                                                        <img src="{{ asset('public/assets/img/icons/eye-round-orange.png') }}"
                                                                            style="margin-right: -4%; width: 20%; margin-top: 10%;"
                                                                            data-toggle="modal"
                                                                            data-target="#img3_ecart_previews_{{ $ecart->id }}">
                                                                    @else
                                                                        <a href="{{ asset('public/uploads/ecart/' . $ecart->img3) }}"
                                                                            target="_blank">
                                                                            <img src="{{ asset('public/assets/img/icons/eye-round-orange.png') }}"
                                                                                style="margin-right: -4%; width: 20%; margin-top: 10%;">
                                                                        </a>
                                                                    @endif


                                                                    <img src="{{ asset('public/assets/img/icons/exit-orange.png') }}"
                                                                        style="width: 20%;margin-top: 10%;"
                                                                        class="img3_ecart_delete_{{ $ecart->id }}"
                                                                        data-img3-id="{{ $ecart->img3 }}"
                                                                        id="img3_ecart_delete_{{ $ecart->id }}"
                                                                        data-ecart-id="{{ $ecart->id }}"
                                                                        id="ecart_delete_{{ $ecart->id }}">

                                                                </p>
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" name="img3_name"
                                                                    value="{{ $ecart->img3_name }}"
                                                                    class="form-control" placeholder="NOM PHOTO">
                                                            </div>
                                                        </div>



                                                        <div class="col-lg-3 col-sm-3">
                                                            <div class="form-group box-with-icon">

                                                                @if ($ecart->img4)

                                                                    @if (strrchr($ecart->img4, '.') == '.pdf')
                                                                        <div class="upload-bx lightgray-upload-bx">
                                                                            <i class="fa fa-file-pdf-o"
                                                                                aria-hidden="true"
                                                                                style="font-size: 45px;color: #009cde;    padding: 35px 0px 35px 0px;"></i>
                                                                        </div>
                                                                    @elseif (strrchr($ecart->img4, '.') == '.png' || strrchr($ecart->img4, '.') == '.jpg' || strrchr($ecart->img4, '.') == '.jpeg')
                                                                        <div class="upload-bx view-color">
                                                                            <img src="{{ asset('public/uploads/ecart/' . $ecart->img4) }}"
                                                                                name="img4" class="img_height">
                                                                        </div>
                                                                    @else
                                                                        <div class="upload-bx lightgray-upload-bx">
                                                                            <i class="fa fa-file-text"
                                                                                aria-hidden="true"
                                                                                style="font-size: 45px;color: #009cde;    padding: 35px 0px 35px 0px;"></i>
                                                                        </div>
                                                                    @endif


                                                                    <input type="hidden" name="img2"
                                                                        value="{{ $ecart->img4 }}">
                                                                @else
                                                                    <div class="upload-bx lightgray-upload-bx">
                                                                        <i id="imgPreview4matee_pdf_{{ $ecart->id }}"
                                                                            class="fa fa-file-pdf-o" aria-hidden="true"
                                                                            style="display: none;font-size: 45px;color: #009cde;"></i>

                                                                        <i id="imgPreview4matee_word_{{ $ecart->id }}"
                                                                            class="fa fa-file-text" aria-hidden="true"
                                                                            style="display: none;font-size: 45px;color: #009cde;"></i>

                                                                        <img id="imgPreview4matee_{{ $ecart->id }}"
                                                                            src="{{ asset('public/assets/img/icons/plus_grey.png') }}" />
                                                                    </div>
                                                                    <input type="file" name="img4"
                                                                        id="img4matee_{{ $ecart->id }}"
                                                                        class="hide-file-input">
                                                                @endif

                                                                <p class="text-center view-color"
                                                                    style="bottom: -22%;">

                                                                    @if (strrchr($ecart->img4, '.') == '.pdf')
                                                                        <a href="{{ asset('public/uploads/ecart/' . $ecart->img4) }}"
                                                                            target="_blank">
                                                                            <img src="{{ asset('public/assets/img/icons/eye-round-orange.png') }}"
                                                                                style="margin-right: -4%; width: 20%; margin-top: 10%;">
                                                                        </a>
                                                                    @elseif (strrchr($ecart->img4, '.') == '.png' || strrchr($ecart->img4, '.') == '.jpg' || strrchr($ecart->img4, '.') == '.jpeg')
                                                                        <img src="{{ asset('public/assets/img/icons/eye-round-orange.png') }}"
                                                                            style="margin-right: -4%; width: 20%; margin-top: 10%;"
                                                                            data-toggle="modal"
                                                                            data-target="#img4_ecart_previews_{{ $ecart->id }}">
                                                                    @else
                                                                        <a href="{{ asset('public/uploads/ecart/' . $ecart->img4) }}"
                                                                            target="_blank">
                                                                            <img src="{{ asset('public/assets/img/icons/eye-round-orange.png') }}"
                                                                                style="margin-right: -4%; width: 20%; margin-top: 10%;">
                                                                        </a>
                                                                    @endif


                                                                    <img src="{{ asset('public/assets/img/icons/exit-orange.png') }}"
                                                                        style="width: 20%;margin-top: 10%;"
                                                                        class="img4_ecart_delete_{{ $ecart->id }}"
                                                                        data-img4-id="{{ $ecart->img4 }}"
                                                                        id="img4_ecart_delete_{{ $ecart->id }}"
                                                                        data-ecart-id="{{ $ecart->id }}"
                                                                        id="ecart_delete_{{ $ecart->id }}">

                                                                </p>
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" name="img4_name"
                                                                    value="{{ $ecart->img3_name }}"
                                                                    class="form-control" placeholder="NOM PHOTO">
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
    </form>
</div>



<style>
    .img_previews {
        display: block;
        width: 60%;
        margin-left: auto;
        margin-right: auto;
    }

    .model_margin {
        margin-top: 20%;
    }
</style>


<div id="img1_ecart_previews_{{ $ecart->id }}" class="modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <!-- Modal content-->
        <div class="modal-content model_margin">
            <div class="modal-body">
                <img src="{{ asset('public/uploads/ecart/' . $ecart->img1) }}" class="img_previews">
            </div>
        </div>
    </div>
</div>


<div id="img2_ecart_previews_{{ $ecart->id }}" class="modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <!-- Modal content-->
        <div class="modal-content model_margin">
            <div class="modal-body">
                <img src="{{ asset('public/uploads/ecart/' . $ecart->img2) }}" class="img_previews">
            </div>
        </div>
    </div>
</div>


<div id="img3_ecart_previews_{{ $ecart->id }}" class="modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <!-- Modal content-->
        <div class="modal-content model_margin">
            <div class="modal-body">
                <img src="{{ asset('public/uploads/ecart/' . $ecart->img3) }}" class="img_previews">
            </div>
        </div>
    </div>
</div>


<div id="img4_ecart_previews_{{ $ecart->id }}" class="modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <!-- Modal content-->
        <div class="modal-content model_margin">
            <div class="modal-body">
                <img src="{{ asset('public/uploads/ecart/' . $ecart->img4) }}" class="img_previews">
            </div>
        </div>
    </div>
</div>



<script>
    $(".close1_e_edit_{{ $ecart->id }}_{{ $collaboration_id }}").click(function() {
        $("#edit-ecart-modal_{{ $ecart->id }}_{{ $collaboration_id }}").modal('hide');
        $('.modal-backdrop').remove();
    });
</script>

<script>
    $(document).ready(function() {

        $('.img1_ecart_delete_{{ $ecart->id }}').click(function(e) {

            e.preventDefault();

            var ecart_id = $("#img1_ecart_delete_{{ $ecart->id }}").data('ecart-id');
            var img1 = $("#img1_ecart_delete_{{ $ecart->id }}").data('img1-id');

            $.ajax({
                type: "post",
                url: "{{ route('collabotation.dotation_ecart_img_delete') }}",
                data: {
                    'img1': img1,
                    'ecart_id': ecart_id,
                    "_token": "{{ csrf_token() }}"
                },
                cache: false,
                success: function(data) {
                    location.reload();
                }
            });
        });


        $('.img2_ecart_delete_{{ $ecart->id }}').click(function(e) {

            e.preventDefault();

            var ecart_id = $("#img2_ecart_delete_{{ $ecart->id }}").data('ecart-id');
            var img2 = $("#img2_ecart_delete_{{ $ecart->id }}").data('img2-id');

            $.ajax({
                type: "post",
                url: "{{ route('collabotation.dotation_ecart_img_delete') }}",
                data: {
                    'img2': img2,
                    'ecart_id': ecart_id,
                    "_token": "{{ csrf_token() }}"
                },
                cache: false,
                success: function(data) {
                    location.reload();
                }
            });
        });


        $('.img3_ecart_delete_{{ $ecart->id }}').click(function(e) {

            e.preventDefault();

            var ecart_id = $("#img3_ecart_delete_{{ $ecart->id }}").data('ecart-id');
            var img3 = $("#img3_ecart_delete_{{ $ecart->id }}").data('img3-id');

            $.ajax({
                type: "post",
                url: "{{ route('collabotation.dotation_ecart_img_delete') }}",
                data: {
                    'img3': img3,
                    'ecart_id': ecart_id,
                    "_token": "{{ csrf_token() }}"
                },
                cache: false,
                success: function(data) {
                    location.reload();
                }
            });
        });


        $('.img4_ecart_delete_{{ $ecart->id }}').click(function(e) {

            e.preventDefault();

            var ecart_id = $("#img4_ecart_delete_{{ $ecart->id }}").data('ecart-id');
            var img4 = $("#img4_ecart_delete_{{ $ecart->id }}").data('img4-id');

            $.ajax({
                type: "post",
                url: "{{ route('collabotation.dotation_ecart_img_delete') }}",
                data: {
                    'img4': img4,
                    'ecart_id': ecart_id,
                    "_token": "{{ csrf_token() }}"
                },
                cache: false,
                success: function(data) {
                    location.reload();
                }
            });
        });

    });
</script>

<script>
    $(document).ready(() => {
        $('#img1matee_{{ $ecart->id }}').change(function() {
            const file = this.files[0];
            console.log(file);
            if (file) {
                let reader = new FileReader();
                reader.onload = function(event) {
                    if (file.type == "application/pdf") {
                        console.log(event.target.result);
                        $('#imgPreview1matee_pdf_{{ $ecart->id }}').show();
                        $('#imgPreview1matee_{{ $ecart->id }}').hide();
                        $('#imgPreview1matee_word_{{ $ecart->id }}').hide();
                    } else if (file.type == "image/png" || file.type == "image/jpg" || file.type ==
                        "image/jpeg") {
                        console.log(event.target.result);
                        $('#imgPreview1matee_pdf_{{ $ecart->id }}').hide();
                        $('#imgPreview1matee_word_{{ $ecart->id }}').hide();
                        $('#imgPreview1matee_{{ $ecart->id }}').show();
                        $('#imgPreview1matee_{{ $ecart->id }}').attr('src', event.target
                            .result);
                    } else {
                        $('#imgPreview1matee_pdf_{{ $ecart->id }}').hide();
                        $('#imgPreview1matee_{{ $ecart->id }}').hide();
                        $('#imgPreview1matee_word_{{ $ecart->id }}').show();
                    }

                }
                reader.readAsDataURL(file);
            }
        });


        $('#img2matee_{{ $ecart->id }}').change(function() {
            const file = this.files[0];
            console.log(file);
            if (file) {
                let reader = new FileReader();
                reader.onload = function(event) {
                    if (file.type == "application/pdf") {
                        console.log(event.target.result);
                        $('#imgPreview2matee_pdf_{{ $ecart->id }}').show();
                        $('#imgPreview2matee_{{ $ecart->id }}').hide();
                        $('#imgPreview2matee_word_{{ $ecart->id }}').hide();
                    } else if (file.type == "image/png" || file.type == "image/jpg" || file.type ==
                        "image/jpeg") {
                        console.log(event.target.result);
                        $('#imgPreview2matee_pdf_{{ $ecart->id }}').hide();
                        $('#imgPreview2matee_word_{{ $ecart->id }}').hide();
                        $('#imgPreview2matee_{{ $ecart->id }}').show();
                        $('#imgPreview2matee_{{ $ecart->id }}').attr('src', event.target
                            .result);
                    } else {
                        $('#imgPreview2matee_pdf_{{ $ecart->id }}').hide();
                        $('#imgPreview2matee_{{ $ecart->id }}').hide();
                        $('#imgPreview2matee_word_{{ $ecart->id }}').show();
                    }

                }
                reader.readAsDataURL(file);
            }
        });

        $('#img3matee_{{ $ecart->id }}').change(function() {
            const file = this.files[0];
            console.log(file);
            if (file) {
                let reader = new FileReader();
                reader.onload = function(event) {
                    if (file.type == "application/pdf") {
                        console.log(event.target.result);
                        $('#imgPreview3matee_pdf_{{ $ecart->id }}').show();
                        $('#imgPreview3matee_{{ $ecart->id }}').hide();
                        $('#imgPreview3matee_word_{{ $ecart->id }}').hide();
                    } else if (file.type == "image/png" || file.type == "image/jpg" || file.type ==
                        "image/jpeg") {
                        console.log(event.target.result);
                        $('#imgPreview3matee_pdf_{{ $ecart->id }}').hide();
                        $('#imgPreview3matee_word_{{ $ecart->id }}').hide();
                        $('#imgPreview3matee_{{ $ecart->id }}').show();
                        $('#imgPreview3matee_{{ $ecart->id }}').attr('src', event.target
                            .result);
                    } else {
                        $('#imgPreview3matee_pdf_{{ $ecart->id }}').hide();
                        $('#imgPreview3matee_{{ $ecart->id }}').hide();
                        $('#imgPreview3matee_word_{{ $ecart->id }}').show();
                    }

                }
                reader.readAsDataURL(file);
            }
        });


        $('#img4matee_{{ $ecart->id }}').change(function() {
            const file = this.files[0];
            console.log(file);
            if (file) {
                let reader = new FileReader();
                reader.onload = function(event) {
                    if (file.type == "application/pdf") {
                        console.log(event.target.result);
                        $('#imgPreview4matee_pdf_{{ $ecart->id }}').show();
                        $('#imgPreview4matee_{{ $ecart->id }}').hide();
                        $('#imgPreview4matee_word_{{ $ecart->id }}').hide();
                    } else if (file.type == "image/png" || file.type == "image/jpg" || file.type ==
                        "image/jpeg") {
                        console.log(event.target.result);
                        $('#imgPreview4matee_pdf_{{ $ecart->id }}').hide();
                        $('#imgPreview4matee_word_{{ $ecart->id }}').hide();
                        $('#imgPreview4matee_{{ $ecart->id }}').show();
                        $('#imgPreview4matee_{{ $ecart->id }}').attr('src', event.target
                            .result);
                    } else {
                        $('#imgPreview4matee_pdf_{{ $ecart->id }}').hide();
                        $('#imgPreview4matee_{{ $ecart->id }}').hide();
                        $('#imgPreview4matee_word_{{ $ecart->id }}').show();
                    }

                }
                reader.readAsDataURL(file);
            }
        });
    });
</script>
