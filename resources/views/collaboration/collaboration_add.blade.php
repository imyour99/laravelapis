<link href="{{ asset('public/assets/plugins/calendar/calendar.css')}}" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.js"></script>
<style>
    .red_color{
        color: red;
    }
</style>


@php
    $url_get = Request::segment(3);

    $url = 'données_personelles';
    $url1 = 'formations';
    $url2 = 'general';
    $url3 = 'contact';
    $url4 = 'dotation';
    $url5 = 'absences_ecarts';

    $collaboration_id = Request::segment(2);
@endphp

@if ($url_get == $url || $url_get == $url1 || $url_get == $url2 || $url_get == $url3 || $url_get == $url4 || $url_get == $url5)
    <script type="text/javascript">
        $(window).on('load', function () {
            $('#add-technician-modal').modal('show');
        });
    </script>
@endif

<div class="modal fade add-technician-modal" id="add-technician-modal" tabindex="-1" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header" style="width: 1312px;">
                <ul class="nav nav-tabs text-center" id="myTab" role="tablist">


                    <li class="nav-item">
                        <a class="nav-link {{ $url_get == null ? 'active' : '' }} {{ $url_get == 'general' ? 'active' : '' }}"
                           id="general-tab" data-toggle="tab" href="#general" role="tab" aria-controls="general"
                           aria-selected="false">Général</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ $url_get == 'données_personelles' ? 'active' : '' }}"
                           id="personal-date-tab" data-toggle="tab" href="#personal-data" role="tab"
                           aria-controls="personal-data" aria-selected="false">Données personelles</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ $url_get == 'formations' ? 'active' : '' }}" id="training-tab"
                           data-toggle="tab" href="#training" role="tab" aria-controls="training"
                           aria-selected="false">Formations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $url_get == 'dotation' ? 'active' : '' }}" id="endowment-tab"
                           data-toggle="tab" href="#endowment" role="tab" aria-controls="endowment"
                           aria-selected="true">Dotation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="statistics-tab" data-toggle="tab" href="#statistics" role="tab"
                           aria-controls="statistics" aria-selected="false">Statistiques</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $url_get == 'absences_ecarts' ? 'active' : '' }}"
                           id="absences-and-deviations-tab" data-toggle="tab"
                           href="#absences-and-deviations" role="tab" aria-controls="absences-and-deviations"
                           aria-selected="true">Absences &amp; Ecarts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $url_get == 'contact' ? 'active' : '' }}" id="contract-tab"
                           data-toggle="tab" href="#contract" role="tab" aria-controls="contract"
                           aria-selected="false">Contrat</a>
                    </li>
                </ul>
            </div>
            <div class="modal-body">
                <div class="tab-content">


                    @if (session('errors'))
                        <div class="alert alert-danger border-left-danger" role="alert">
                            <ul class="pl-4 my-2">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    {{-- General Tab start --}}
                    <div
                        class="tab-pane {{ $url_get == null ? 'active' : '' }} {{ $url_get == 'general' ? 'active' : '' }}"
                        id="general" role="tabpanel" aria-labelledby="general-tab">

                        @if (!empty($general->id))
                            <form method="post" action="{{ route('collabotation.general_edit') }}"
                                  enctype="multipart/form-data" data-parsley-validate>
                                <input type="hidden" name="collaboration_id" value="{{ $general->id }}">
                                @else
                                    <form method="post" action="{{ route('collabotation.general') }}"
                                          enctype="multipart/form-data" data-parsley-validate>
                                        @endif

                                        @csrf
                                        <div class="row min-height-scroll">
                                            <div class="col-lg-4 col-sm-4 px-4">
                                                <div class="form-group ">
                                                    {{-- <div class="row general-tab-profile-image-container">
                                                        <div class="col-lg-8 col-sm-8">
                                                            <div class="form-group box-with-icon">

                                                                <p class="text-center view-color">
                                                                <i class="fas fa-eye"></i>
                                                                <i class="fas fa-times-circle"></i>
                                                                </p>
                                                        </div>
                                                        </div>
                                                    </div> --}}
                                                    <div class="upload-bx view-color">
                                                        <p>Télécharger une photo</p>
                                                        <i>
                                                            @if (!empty($general->profile_img))
                                                                <img id="imgPreview" style="width: 125px;height: 140px;"
                                                                     src="{{ asset('public/uploads/profile_images/' . $general->profile_img) }}">
                                                                <input type="hidden" value="{{ $general->profile_img }}"
                                                                       name="profile_img">
                                                            @else
                                                                <img id="imgPreview"
                                                                     src="{{ asset('public/assets/img/icons/file-upload.png') }}">
                                                            @endif
                                                        </i>
                                                    </div>
                                                    <input type="file" name="profile_img" id="photo"
                                                           class="hide-file-input"  accept="image/*"  data-parsley-filemimetypes ='image/jpeg, image/png'  data-parsley-trigger ='change'>

                                                        @if (!empty($general->profile_img))
                                                            <p class="view-color" style="margin-top: -22px;bottom: -29%;margin-left: 16%;position: relative;"  >
                                                                <a href="javascript:void(0);" onclick="$('#photo').trigger('click'); return false;"><img src="{{ asset('public/assets/img/icons/edit-pen.png')}}" style="width: 18%;margin-right: -5%;"></a>

                                                                <a href="javascript:void(0);" class="remove"><img src="{{ asset('public/assets/img/icons/Exit_1.png')}}" style="width: 16%;"></a>
                                                            </p>
                                                        @endif

                                                </div>

                                                <div class="form-group">
                                                    <label>Nom</label>
                                                    <input type="text" name="nom" class="form-control" placeholder="Nom"
                                                           value="{{ !empty($general->nom) ? $general->nom : '' }}">
                                                </div>
                                                <div class="form-group">
                                                    <label>Prénom</label>
                                                    <input type="text" name="prénom" class="form-control"
                                                           placeholder="Prénom"
                                                           value="{{ !empty($general->prenom) ? $general->prenom : '' }}">
                                                </div>
                                                <div class="form-group">
                                                    <label>Login <span class="red_color">*</span></label>
                                                    <input type="text" name="login" class="form-control"
                                                           placeholder="Login"
                                                           value="{{ !empty($general->login) ? $general->login : '' }}" required
                                                           data-parsley-required-message="Veuillez entrer l'identifiant de connexion">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-sm-4 px-4">
                                                <div class="form-group">
                                                    <label>Email <span class="red_color">*</span></label>
                                                    <input type="email" name="email" class="form-control"
                                                           placeholder="xxxxxxxxxxxx@xxxxxxxx.xx"
                                                           value="{{ !empty($general->email) ? $general->email : '' }}" required
                                                           data-parsley-required-message="Veuillez saisir l'identifiant e-mail">
                                                </div>
                                                <div class="form-group">
                                                    <label>Mot de passe <span class="red_color">*</span></label>
                                                    <input type="password" id="password1" name="mot_de_passe" class="form-control"
                                                           value="{{ !empty($general->mot_de_passe) ? $general->mot_de_passe : '' }}" required
                                                           data-parsley-required-message="Renseignez votre mot de passe"
                                   data-parsley-pattern="^(?=.{8,}$)(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$"
                                   data-parsley-pattern-message="La longueur minimale du mot de passe est de 8 caractères et doit contenir au moins 1 lettre minuscule, 1 lettre majuscule, 1 chiffre et 1 caractère spécial.">
                                                </div>
                                                <div class="form-group">
                                                    <label>Confirmer mot de passe <span class="red_color">*</span></label>
                                                    <input type="password" name="confirmer_mot_de_passe"
                                                           class="form-control"
                                                           value="{{ !empty($general->mot_de_passe) ? $general->mot_de_passe : '' }}" required
                                                           data-parsley-equalto="#password1" data-parsley-required-message="veuillez saisir le mot de passe de confirmation" data-parsley-pattern="^(?=.{8,}$)(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$"
                                                           data-parsley-pattern-message="La longueur minimale du mot de passe est de 8 caractères et doit contenir au moins 1 lettre minuscule, 1 lettre majuscule, 1 chiffre et 1 caractère spécial.">
                                                </div>
                                                <div class="form-group">
                                                    <label>Adresse</label>
                                                    <input type="text" name="adresse" class="form-control"
                                                           placeholder="Adresse"
                                                           value="{{ !empty($general->adresse) ? $general->adresse : '' }}">
                                                </div>
                                                <div class="form-group">
                                                    <label>Complément d'adresse</label>
                                                    <input type="text" name="complément_d_adresse" class="form-control"
                                                           placeholder="Complément d'adresse"
                                                           value="{{ !empty($general->complément_d_adresse) ? $general->complément_d_adresse : '' }}">
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-5 col-sm-5">
                                                        <div class="form-group">
                                                            <label>Code postal</label>
                                                            <input type="text" name="code_postal" class="form-control"
                                                                   placeholder="Code postal"
                                                                   value="{{ !empty($general->code_postal) ? $general->code_postal : '' }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-7 col-sm-7">
                                                        <div class="form-group">
                                                            <label>Ville</label>
                                                            <select class="form-control" name="ville">

                                                                @php
                                                                    $cities = DB::table('city')->get();
                                                                @endphp



                                                                @if (!empty($general->id))
                                                                    <option
                                                                        value="" {{ $general->ville == '' ? 'selected' : '' }}>
                                                                        SELECT
                                                                    </option>

                                                                    @foreach ($cities as $city)
                                                                        <option value="{{$city->city_name}}" {{ $general->ville == $city->city_name ? 'selected' : '' }}>{{$city->city_name}}</option>

                                                                    @endforeach

                                                                @else
                                                                    <option value="">SELECT</option>

                                                                    @foreach ($cities as $city)
                                                                        <option value="{{$city->city_name}}">{{$city->city_name}}</option>
                                                                    @endforeach

                                                                @endif


                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-sm-4 px-4">
                                                <div class="row">
                                                    <div class="col-lg-6 col-sm-6">
                                                        <div class="form-group">
                                                            <label>Téléphone</label>
                                                            <input type="text" name="telephone" class="form-control"
                                                            data-parsley-validation-threshold="1" data-parsley-trigger="keyup"
                                                            data-parsley-type="number"
                                                            data-parsley-minlength="10" data-parsley-maxlength="10"
                                                            data-parsley-pattern-message="veuillez saisir uniquement des valeurs de chaîne"
                                                            data-parsley-minlength-message="le numéro de téléphone doit comporter au moins 10 chiffres"
                                                            data-parsley-maxlength-message="le numéro de téléphone doit comporter au moins 10 chiffres"

                                                                   placeholder="Téléphone"
                                                                   value="{{ !empty($general->telephone) ? $general->telephone : '' }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-sm-6">
                                                        <div class="form-group">
                                                            <label>Portable</label>
                                                            <input type="text" name="portable" class="form-control"
                                                                   placeholder="Portable"
                                                                   value="{{ !empty($general->portable) ? $general->portable : '' }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Numéro de sécurilé sociale</label>
                                                    <input type="text" name="numero_de_securile_sociale"
                                                           class="form-control"
                                                           placeholder="Numéro de sécurilé sociale"
                                                           value="{{ !empty($general->numero_de_securile_sociale) ? $general->numero_de_securile_sociale : '' }}">
                                                </div>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-sm-12 mt-2">
                                                @if (!empty($general->id))
                                                    <button class="btn btn-lightblue float-right" type="submit">Éditer
                                                    </button>
                                                @else
                                                    <button class="btn btn-lightblue float-right" type="submit">
                                                        Enregistrer
                                                    </button>
                                                @endif
                                            </div>
                                        </div>
                                    </form>


                    </div>
                    {{-- General Tab End --}}

                    {{-- Personal Data Tab start --}}
                    <div class="tab-pane {{ $url_get == 'données_personelles' ? 'active' : '' }}" id="personal-data"
                         role="tabpanel" aria-labelledby="personal-date-tab">
                        @if (!empty($personal_data->id))
                            <form method="post" action="{{ route('collabotation.donnees_personelles_edit') }}"
                                  enctype="multipart/form-data" data-parsley-validate>
                                @else
                                    <form method="post" action="{{ route('collabotation.donnees_personelles') }}"
                                          enctype="multipart/form-data" data-parsley-validate>
                                        @endif
                                        @csrf

                                        <input type="hidden" name="collaboration_id" value="{{ $collaboration_id }}">
                                        <div class="row min-height-scroll">
                                            <div class="col-lg-4 col-sm-4 px-4">
                                                <div class="form-group">
                                                    <label>Numéro INSEE/ Sécurité sociale</label>
                                                    <input type="text" name="social_security_number"
                                                           class="form-control"
                                                           placeholder="Social security number "
                                                           value="{{ !empty($personal_data->social_security_number) ? $personal_data->social_security_number : '' }}">
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-sm-4 px-4">
                                                <div class="form-group">
                                                    <label>Groupe Sanguin</label>


                                                    <select class="form-control" name="groupe_sanguin">
                                                        @if (!empty($personal_data->id))
                                                            <option value=""
                                                                {{ $personal_data->groupe_sanguin == '' ? 'selected' : '' }}>
                                                                SELECT
                                                            </option>
                                                            <option value="A+"
                                                                {{ $personal_data->groupe_sanguin == 'A+' ? 'selected' : '' }}>
                                                                A+
                                                            </option>
                                                            <option value="A-"
                                                                {{ $personal_data->groupe_sanguin == 'A-' ? 'selected' : '' }}>
                                                                A-
                                                            </option>

                                                            <option value="B+"
                                                                {{ $personal_data->groupe_sanguin == 'B+' ? 'selected' : '' }}>
                                                                B+
                                                            </option>
                                                            <option value="B-"
                                                                {{ $personal_data->groupe_sanguin == 'B-' ? 'selected' : '' }}>
                                                                B-
                                                            </option>

                                                            <option value="O+"
                                                                {{ $personal_data->groupe_sanguin == 'O+' ? 'selected' : '' }}>
                                                                O+
                                                            </option>
                                                            <option value="O-"
                                                                {{ $personal_data->groupe_sanguin == 'O-' ? 'selected' : '' }}>
                                                                O-
                                                            </option>

                                                            <option value="AB+"
                                                                {{ $personal_data->groupe_sanguin == 'AB+' ? 'selected' : '' }}>
                                                                AB+
                                                            </option>
                                                            <option value="AB-"
                                                                {{ $personal_data->groupe_sanguin == 'AB-' ? 'selected' : '' }}>
                                                                AB-
                                                            </option>

                                                        @else
                                                            <option value="">SELECT</option>
                                                            <option value="A+">A+</option>
                                                            <option value="A-">A-</option>
                                                            <option value="B+">B+</option>
                                                            <option value="B-">B-</option>
                                                            <option value="O+">O+</option>
                                                            <option value="O-">O-</option>
                                                            <option value="AB+">AB+</option>
                                                            <option value="AB-">AB-</option>
                                                        @endif
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-sm-4 px-4">
                                                <div class="form-group">
                                                    <label>Nom personne à joindre en cas de pb</label>
                                                    <input type="text" name="nom" class="form-control"
                                                           placeholder="Nom personne à joindre en cas de pb"
                                                           value="{{ !empty($personal_data->nom) ? $personal_data->nom : '' }}">
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-sm-4 px-4">
                                                <div class="form-group">
                                                    <label>Prénom personne à joindre en cas de pb </label>
                                                    <input type="text" name="prenom" class="form-control"
                                                           placeholder="Prénom personne à joindre en cas de pb"
                                                           value="{{ !empty($personal_data->prenom) ? $personal_data->prenom : '' }}"    data-parsley-pattern="/^[a-zA-Z\s]*$/g" data-parsley-pattern-message="veuillez saisir uniquement des valeurs de chaîne" data-parsley-trigger="keyup">
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-sm-4 px-4">
                                                <div class="form-group">
                                                    <label>Contact personne à joindre en cas de pb</label>
                                                    <input type="text" name="contact" class="form-control"
                                                           placeholder="Contact personne à joindre en cas de pb"
                                                           value="{{ !empty($personal_data->contact) ? $personal_data->contact : '' }}" data-parsley-pattern="/^[a-zA-Z\s]*$/g" data-parsley-pattern-message="veuillez saisir uniquement des valeurs de chaîne" data-parsley-trigger="keyup">
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-sm-4 px-4">
                                                <div class="form-group">
                                                    <label>Mutuelle Statut</label>
                                                    <select class="form-control" name="mutuelle_status">
                                                        @if (!empty($personal_data->id))
                                                            <option value=""
                                                                {{ $personal_data->mutuelle_status == '' ? 'selected' : '' }}>
                                                                SELECT
                                                            </option>
                                                            <option value="Isolé"
                                                                {{ $personal_data->mutuelle_status == 'Isolé' ? 'selected' : '' }}>
                                                                Isolé
                                                            </option>
                                                            <option value="Couple"
                                                                {{ $personal_data->mutuelle_status == 'Couple' ? 'selected' : '' }}>
                                                                Couple
                                                            </option>
                                                            <option value="Famille"
                                                                {{ $personal_data->mutuelle_status == 'Famille' ? 'selected' : '' }}>
                                                                Famille
                                                            </option>
                                                        @else
                                                            <option value="">SELECT</option>
                                                            <option value="Isolé">Isolé</option>
                                                            <option value="Couple">Couple</option>
                                                            <option value="Famille">Famille</option>
                                                        @endif


                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-sm-4 px-4">
                                                <div class="form-group">
                                                    <label>Nb adulte ayant droit mutuelle</label>
                                                    <select class="form-control" name="adults_insurance">
                                                        @if (!empty($personal_data->id))
                                                            <option value=""
                                                                {{ $personal_data->adults_insurance == '' ? 'selected' : '' }}>
                                                                SELECT
                                                            </option>
                                                            <option value="1"
                                                                {{ $personal_data->adults_insurance == '1' ? 'selected' : '' }}>
                                                                1
                                                            </option>
                                                            <option value="2"
                                                                {{ $personal_data->adults_insurance == '2' ? 'selected' : '' }}>
                                                                2
                                                            </option>
                                                            <option value="3"
                                                                {{ $personal_data->adults_insurance == '3' ? 'selected' : '' }}>
                                                                3
                                                            </option>
                                                        @else
                                                            <option value="">SELECT</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                        @endif
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-sm-4 px-4">
                                                <div class="form-group">
                                                    <label>Nb enfant ayant droit mutuelle</label>
                                                    <select class="form-control" name="children_insurance">
                                                        @if (!empty($personal_data->id))
                                                            <option value=""
                                                                {{ $personal_data->children_insurance == '' ? 'selected' : '' }}>
                                                                SELECT
                                                            </option>
                                                            <option value="1"
                                                                {{ $personal_data->children_insurance == '1' ? 'selected' : '' }}>
                                                                1
                                                            </option>
                                                            <option value="2"
                                                                {{ $personal_data->children_insurance == '2' ? 'selected' : '' }}>
                                                                2
                                                            </option>
                                                            <option value="3"
                                                                {{ $personal_data->children_insurance == '3' ? 'selected' : '' }}>
                                                                3
                                                            </option>
                                                            <option value="4"
                                                                {{ $personal_data->children_insurance == '4' ? 'selected' : '' }}>
                                                                4
                                                            </option>
                                                            <option value="5"
                                                                {{ $personal_data->children_insurance == '5' ? 'selected' : '' }}>
                                                                5
                                                            </option>
                                                            <option value="6"
                                                                {{ $personal_data->children_insurance == '6' ? 'selected' : '' }}>
                                                                6
                                                            </option>
                                                            <option value="7"
                                                                {{ $personal_data->children_insurance == '7' ? 'selected' : '' }}>
                                                                7
                                                            </option>
                                                        @else
                                                            <option value="">SELECT</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="7">7</option>
                                                        @endif
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-sm-4 px-4">
                                                <div class="form-group">
                                                    <label>Antécédent médicaux</label>
                                                    <input type="text" name="antecedent_medicaux" class="form-control"
                                                           placeholder="Antecedent Medicaux"
                                                           value="{{ !empty($personal_data->antecedent_medicaux) ? $personal_data->antecedent_medicaux : '' }}">
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-sm-4 px-4">
                                                <div class="form-group">
                                                    <label>Taille T-Shirt</label>
                                                    <select class="form-control" name="taille_tShirt">
                                                        @if (!empty($personal_data->id))
                                                            <option value=""
                                                                {{ $personal_data->taille_tShirt == '' ? 'selected' : '' }}>
                                                                SELECT
                                                            </option>
                                                            <option value="S"
                                                                {{ $personal_data->taille_tShirt == 'S' ? 'selected' : '' }}>
                                                                S
                                                            </option>
                                                            <option value="M"
                                                                {{ $personal_data->taille_tShirt == 'M' ? 'selected' : '' }}>
                                                                M
                                                            </option>
                                                            <option value="L"
                                                                {{ $personal_data->taille_tShirt == 'L' ? 'selected' : '' }}>
                                                                L
                                                            </option>
                                                            <option value="XL"
                                                                {{ $personal_data->taille_tShirt == 'XL' ? 'selected' : '' }}>
                                                                XL
                                                            </option>
                                                            <option value="XXL"
                                                                {{ $personal_data->taille_tShirt == 'XXL' ? 'selected' : '' }}>
                                                                XXL
                                                            </option>
                                                        @else
                                                            <option value="">SELECT</option>
                                                            <option value="S">S</option>
                                                            <option value="M">M</option>
                                                            <option value="L">L</option>
                                                            <option value="XL">XL</option>
                                                            <option value="XXL">XXL</option>
                                                        @endif
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-sm-4 px-4">
                                                <div class="form-group">
                                                    <label>Taille Pantalon</label>
                                                    {{-- <input type="text" name="taille_pantalon" class="form-control" placeholder="Taille pantalon" value="{{ (!empty($personal_data->taille_pantalon)) ? $personal_data->taille_pantalon:'';  }}"> --}}

                                                    <select class="form-control" name="taille_pantalon">
                                                        @if (!empty($personal_data->id))
                                                            <option value=""
                                                                {{ $personal_data->taille_pantalon == '' ? 'selected' : '' }}>
                                                                SELECT
                                                            </option>
                                                            <option value="S"
                                                                {{ $personal_data->taille_pantalon == 'S' ? 'selected' : '' }}>
                                                                S
                                                            </option>
                                                            <option value="M"
                                                                {{ $personal_data->taille_pantalon == 'M' ? 'selected' : '' }}>
                                                                M
                                                            </option>
                                                            <option value="L"
                                                                {{ $personal_data->taille_pantalon == 'L' ? 'selected' : '' }}>
                                                                L
                                                            </option>
                                                            <option value="XL"
                                                                {{ $personal_data->taille_pantalon == 'XL' ? 'selected' : '' }}>
                                                                XL
                                                            </option>
                                                            <option value="XXL"
                                                                {{ $personal_data->taille_pantalon == 'XXL' ? 'selected' : '' }}>
                                                                XXL
                                                            </option>
                                                        @else
                                                            <option value="">SELECT</option>
                                                            <option value="S">S</option>
                                                            <option value="M">M</option>
                                                            <option value="L">L</option>
                                                            <option value="XL">XL</option>
                                                            <option value="XXL">XXL</option>
                                                        @endif
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-sm-4 px-4">
                                                <div class="form-group">
                                                    <label>Taille Chaussures</label>
                                                    <select class="form-control" name="taille_chaussures">
                                                        @if (!empty($personal_data->id))
                                                            <option value=""
                                                                {{ $personal_data->taille_chaussures == '' ? 'selected' : '' }}>
                                                                SELECT
                                                            </option>
                                                            <option value="41"
                                                                {{ $personal_data->taille_chaussures == '41' ? 'selected' : '' }}>
                                                                41
                                                            </option>
                                                            <option value="42"
                                                                {{ $personal_data->taille_chaussures == '42' ? 'selected' : '' }}>
                                                                42
                                                            </option>
                                                            <option value="43"
                                                                {{ $personal_data->taille_chaussures == '43' ? 'selected' : '' }}>
                                                                43
                                                            </option>
                                                            <option value="44"
                                                                {{ $personal_data->taille_chaussures == '44' ? 'selected' : '' }}>
                                                                44
                                                            </option>
                                                            <option value="45"
                                                                {{ $personal_data->taille_chaussures == '45' ? 'selected' : '' }}>
                                                                45
                                                            </option>
                                                            <option value="46"
                                                                {{ $personal_data->taille_chaussures == '46' ? 'selected' : '' }}>
                                                                46
                                                            </option>
                                                            <option value="47"
                                                                {{ $personal_data->taille_chaussures == '47' ? 'selected' : '' }}>
                                                                47
                                                            </option>

                                                        @else
                                                            <option value="">SELECT</option>
                                                            <option value="41">41</option>
                                                            <option value="42">42</option>
                                                            <option value="43">43</option>
                                                            <option value="44">44</option>
                                                            <option value="45">45</option>
                                                            <option value="46">46</option>
                                                            <option value="47">47</option>
                                                        @endif
                                                    </select>
                                                </div>
                                            </div>


                                            <div class="col-lg-4 col-sm-4 px-4">
                                                <div class="form-group">
                                                    <label>Taille Veste</label>
                                                    <select class="form-control" name="taille_veste">
                                                        @if (!empty($personal_data->id))
                                                            <option value=""
                                                                {{ $personal_data->taille_veste == '' ? 'selected' : '' }}>
                                                                SELECT
                                                            </option>
                                                            <option value="S"
                                                                {{ $personal_data->taille_veste == 'S' ? 'selected' : '' }}>
                                                                S
                                                            </option>
                                                            <option value="M"
                                                                {{ $personal_data->taille_veste == 'M' ? 'selected' : '' }}>
                                                                M
                                                            </option>
                                                            <option value="L"
                                                                {{ $personal_data->taille_veste == 'L' ? 'selected' : '' }}>
                                                                L
                                                            </option>
                                                            <option value="XL"
                                                                {{ $personal_data->taille_veste == 'XL' ? 'selected' : '' }}>
                                                                XL
                                                            </option>
                                                            <option value="XXL"
                                                                {{ $personal_data->taille_veste == 'XXL' ? 'selected' : '' }}>
                                                                XXL
                                                            </option>
                                                        @else
                                                            <option value="">SELECT</option>
                                                            <option value="S">S</option>
                                                            <option value="M">M</option>
                                                            <option value="L">L</option>
                                                            <option value="XL">XL</option>
                                                            <option value="XXL">XXL</option>
                                                        @endif
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-sm-4 px-4">
                                                <div class="form-group">
                                                    <label>Taille Parka</label>
                                                    <select class="form-control" name="taille_parka">
                                                        @if (!empty($personal_data->id))
                                                            <option value=""
                                                                {{ $personal_data->taille_parka == '' ? 'selected' : '' }}>
                                                                SELECT
                                                            </option>
                                                            <option value="S"
                                                                {{ $personal_data->taille_parka == 'S' ? 'selected' : '' }}>
                                                                S
                                                            </option>
                                                            <option value="M"
                                                                {{ $personal_data->taille_parka == 'M' ? 'selected' : '' }}>
                                                                M
                                                            </option>
                                                            <option value="L"
                                                                {{ $personal_data->taille_parka == 'L' ? 'selected' : '' }}>
                                                                L
                                                            </option>
                                                            <option value="XL"
                                                                {{ $personal_data->taille_parka == 'XL' ? 'selected' : '' }}>
                                                                XL
                                                            </option>
                                                            <option value="XXL"
                                                                {{ $personal_data->taille_parka == 'XXL' ? 'selected' : '' }}>
                                                                XXL
                                                            </option>
                                                        @else
                                                            <option value="">SELECT</option>
                                                            <option value="S">S</option>
                                                            <option value="M">M</option>
                                                            <option value="L">L</option>
                                                            <option value="XL">XL</option>
                                                            <option value="XXL">XXL</option>
                                                        @endif
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-sm-4 px-4">
                                                <div class="form-group">
                                                    <label>Taille Casque</label>
                                                    <select class="form-control" name="taille_casque">
                                                        @if (!empty($personal_data->id))
                                                            <option value=""
                                                                {{ $personal_data->taille_casque == '' ? 'selected' : '' }}>
                                                                SELECT
                                                            </option>
                                                            <option value="S"
                                                                {{ $personal_data->taille_casque == 'S' ? 'selected' : '' }}>
                                                                S
                                                            </option>
                                                            <option value="M"
                                                                {{ $personal_data->taille_casque == 'M' ? 'selected' : '' }}>
                                                                M
                                                            </option>
                                                            <option value="L"
                                                                {{ $personal_data->taille_casque == 'L' ? 'selected' : '' }}>
                                                                L
                                                            </option>
                                                            <option value="XL"
                                                                {{ $personal_data->taille_casque == 'XL' ? 'selected' : '' }}>
                                                                XL
                                                            </option>
                                                            <option value="XXL"
                                                                {{ $personal_data->taille_casque == 'XXL' ? 'selected' : '' }}>
                                                                XXL
                                                            </option>
                                                        @else
                                                            <option value="">SELECT</option>
                                                            <option value="S">S</option>
                                                            <option value="M">M</option>
                                                            <option value="L">L</option>
                                                            <option value="XL">XL</option>
                                                            <option value="XXL">XXL</option>
                                                        @endif
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12 col-sm-12 mt-2">

                                                @if (!empty($personal_data->id))
                                                    <button class="btn btn-lightblue float-right" type="submit">Éditer
                                                    </button>
                                                @else
                                                    <button class="btn btn-lightblue float-right" type="submit">
                                                        Enregistrer
                                                    </button>
                                                @endif

                                            </div>
                                        </div>
                                    </form>
                    </div>
                    {{-- Personal Data Tab End --}}

                    {{-- Trainign tab Start --}}
                    <div class="tab-pane {{ $url_get == 'formations' ? 'active' : '' }}" id="training"
                         role="tabpanel" aria-labelledby="training-tab">


                        <div class="row">
                            <div class="col-lg-7 col-sm-7">
                                <div class="table-responsive box-shadow-border-radius">
                                    <table class="table table-striped w-100" id="clientDataTable" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th></th>
                                            <th class="wd-25p">Formation</th>
                                            <th class="wd-15p">Documents</th>
                                            <th class="wd-25p">Date d'obtention</th>
                                            <th class="wd-15p">Date de fin</th>
                                            <th class="wd-15p">Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach ($formations as $formation)
                                            @php
                                                $img1 = !empty($formation->img1) ? '1' : '0';
                                                $img2 = !empty($formation->img2) ? '1' : '0';
                                                $img3 = !empty($formation->img3) ? '1' : '0';
                                                $img4 = !empty($formation->img4) ? '1' : '0';

                                                $img_count = $img1 + $img2 + $img3 + $img4;
                                            @endphp
                                            <tr class="data-formation-id_{{ $formation->id }}">
                                                <td>
                                                    <i class="fa fa-bell"></i>
                                                </td>
                                                <td>{{ $formation->formation_name }}</td>
                                                <td>{{ $img_count }}</td>
                                                <td>{{ $formation->date_obtention }}</td>
                                                <td class="red-font-color">{{ $formation->end_date }}</td>
                                                <td>
                                                    <a href="javascript:void(0)" data-toggle="modal"
                                                       data-target="#view-formation-modal_{{ $formation->id }}">
                                                            <span class="view-color">
                                                                <i class="fa fa-eye mr-1"></i>Voir
                                                            </span>
                                                    </a>
                                                </td>
                                            </tr>

                                            @include('collaboration.collaboration_formations_list_popup')
                                        @endforeach


                                        {{-- <tr>
                                        <td>
                                            <i class="fa fa-check green-font-color"></i>
                                        </td>
                                        <td>FORMATION</td>
                                        <td>5</td>
                                        <td>00/00/0000</td>
                                        <td class="red-font-color">00/00/0000</td>
                                        <td>
                                            <a href="javascript:void(0)" data-toggle="modal" data-target="#view-formation-modal">
                                                <span class="view-color">
                                                    <i class="fa fa-eye mr-1"></i>Voir
                                                </span>
                                            </a>
                                        </td>
                                    </tr> --}}

                                        </tbody>
                                    </table>
                                </div>
                            </div>


                            <div class="col-lg-5 col-sm-5">
                                <form method="post" id="formation_form"
                                      enctype="multipart/form-data" class="bs-form-wrapper" data-parsley-validate>
                                    @csrf
                                    <input type="hidden" id="collaboration_id_{{$collaboration_id}}" name="collaboration_id" value="{{ $collaboration_id }}">
                                    <strong class="black-text font-weight-bold">Ajouter une formation</strong>

                                    <div class="box-shadow-border-radius login-input" style="margin-top: 10px"
                                         id="skiller">
                                        <div class="row">
                                            <div class="col-lg-12 col-sm-12">
                                                <div class="form-group">
                                                    <label>Nom de la formation</label>
                                                    <select class="form-control" name="formation_name" id="formation_name_{{$collaboration_id}}">
                                                        <option value="ISFME - Module de base TST RD31">ISFME - Module de base TST RD31</option>
                                                        <option value="ISFME - Module TST brt aériene t aéro sout - RA33">ISFME - Module TST brt aériene t aéro sout - RA33</option>
                                                        <option value="ISFME - Date de renouvèlement recyclage - RA41">ISFME - Date de renouvèlement recyclage - RA41</option>
                                                        <option value="Recyclage TST à prévoir">Recyclage TST à prévoir</option>
                                                        <option value="ISFME - Accessoire souterrains CIS BT - RS81">ISFME - Accessoire souterrains CIS BT - RS81</option>
                                                        <option value="ISME - Raccordements sur émergences en câble>35mm² - RS33">ISME - Raccordements sur émergences en câble>35mm² - RS33</option>
                                                        <option value="ISFME - Réseaux souterrains CIS - RS34">ISFME - Réseaux souterrains CIS - RS34</option>
                                                        <option value="ISFME - Date de renouvèlement accessoire souterrain - RS71">ISFME - Date de renouvèlement accessoire souterrain - RS71</option>
                                                        <option value="Recyclage boite papier">Recyclage boite papier</option>
                                                        <option value="Prévention sécurité">Prévention sécurité</option>
                                                        <option value="Recyclage prévention sécurité">Recyclage prévention sécurité</option>
                                                        <option value="Balisage chantier">Balisage chantier</option>
                                                        <option value="Recyclage balisage chantier">Recyclage balisage chantier</option>
                                                        <option value="AIPR">AIPR</option>
                                                        <option value="Recyclage AIPR (5 ans)">Recyclage AIPR (5 ans)</option>
                                                        <option value="Formation éco conduite">Formation éco conduite</option>
                                                        <option value="Recyclage éco conduite">Recyclage éco conduite</option>
                                                        <option value="Formation Initiale SST">Formation Initiale SST</option>

                                                        <option value="MAC SST">MAC SST</option>
                                                        <option value="Recyclage SST">Recyclage SST</option>
                                                        <option value="Formation PRAP">Formation PRAP</option>
                                                        <option value="Recyclage PRAP">Recyclage PRAP</option>
                                                        <option value="Formation Plantation d'appuis">Formation Plantation d'appuis</option>
                                                        <option value="Recyclage Plantation d'appuis">Recyclage Plantation d'appuis</option>
                                                        <option value="Fomation appareils de mesures">Fomation appareils de mesures</option>
                                                        <option value="Recyclage appareils de mesures">Recyclage appareils de mesures</option>
                                                        <option value="Formation Base raccordement et game de couleur">Formation Base raccordement et game de couleur</option>
                                                        <option value="recyclage Base raccordement et game de couleur">recyclage Base raccordement et game de couleur</option>
                                                        <option value="Formation Client attitude">Formation Client attitude</option>
                                                        <option value="Recyclage Client attitude">Recyclage Client attitude</option>
                                                        <option value="CACES Nacelle">CACES Nacelle</option>
                                                        <option value="Recyclage CACES Nacelle">Recyclage CACES Nacelle</option>
                                                        <option value="CACES Grues Auxiliaire">CACES Grues Auxiliaire</option>
                                                        <option value="Recyclage CACES Grues Auxiliaire ">Recyclage CACES Grues Auxiliaire </option>
                                                        <option value="CACES AMPLI ROLL">CACES AMPLI ROLL</option>
                                                        <option value="Recyclage CACES AMPLI ROLL">Recyclage CACES AMPLI ROLL</option>
                                                        <option value="CACES Engin de chantier 1">CACES Engin de chantier 1</option>
                                                        <option value="CACES Engin de chantier 2">CACES Engin de chantier 2</option>
                                                        <option value="CACES Engin de chantier 3">CACES Engin de chantier 3</option>
                                                        <option value="CACES Engin de chantier 4">CACES Engin de chantier 4</option>
                                                        <option value="CACES Engin de chantier 5">CACES Engin de chantier 5</option>
                                                        <option value="CACES Engin de chantier 6">CACES Engin de chantier 6</option>
                                                        <option value="CACES Engin de chantier 7">CACES Engin de chantier 7</option>
                                                        <option value="CACES Engin de chantier 8">CACES Engin de chantier 8</option>
                                                        <option value="CACES Engin de chantier 9">CACES Engin de chantier 9</option>
                                                        <option value="CACES Engin de chantier 10">CACES Engin de chantier 10</option>
                                                        <option value="Recyclage CACES Engin de chantier">Recyclage CACES Engin de chantier</option>
                                                        <option value="Amiante sous section 4">Amiante sous section 4</option>
                                                        <option value="Recyclage Amiante sous section 4 (3 ans)">Recyclage Amiante sous section 4 (3 ans)</option>
                                                        <option value="Formation Prévention risque GAZ GRDF">Formation Prévention risque GAZ GRDF</option>
                                                        <option value="Recyclage Formation Prévention risque GAZ GRDF (2 ans)">Recyclage Formation Prévention risque GAZ GRDF (2 ans)</option>
                                                        <option value="Formation IRVE P1">Formation IRVE P1</option>
                                                        <option value="Recyclage IRVE P1">Recyclage IRVE P1</option>
                                                        <option value="Formation IRVE P2">Formation IRVE P2</option>
                                                        <option value="Recyclage IRVE P2">Recyclage IRVE P2</option>
                                                        <option value="Formation IRVE P3">Formation IRVE P3</option>
                                                        <option value="Recyclage IRVE P3">Recyclage IRVE P3</option>
                                                        <option value="Formation COL 10">Formation COL 10</option>
                                                        <option value="Recyclage formation COL 10">Recyclage formation COL 10</option>
                                                        <option value="Formation COL 20">Formation COL 20</option>
                                                        <option value="Recyclage formation COL 20">Recyclage formation COL 20</option>

                                                    </select>
                                                </div>
                                            </div>


                                            <div class="col-lg-6 col-sm-6">
                                                <div class="form-group">
                                                <label>Permis B</label><br>
                                                <style>
                                                    .margin_rig{
                                                                       margin-right: 15%;
                                                                   }
                                                </style>
                                                <label class="radio-inline margin_rig">
                                                    <input type="radio" name="permis_b"  value="Oui" data-parsley-multiple="permis_b"> Oui
                                                </label>
                                                <label class="radio-inline ">
                                                    <input type="radio" name="permis_b" value="Non" data-parsley-multiple="permis_b"> Non
                                                </label>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-sm-6">
                                                <div class="form-group">
                                                <label>Permis EB</label><br>
                                                <style>
                                                    .margin_rig{
                                                                       margin-right: 15%;
                                                                   }
                                                </style>
                                                <label class="radio-inline margin_rig">
                                                    <input type="radio" name="permis_eb" value="Oui" data-parsley-multiple="permis_eb"> Oui
                                                </label>
                                                <label class="radio-inline ">
                                                    <input type="radio" name="permis_eb" value="Non" data-parsley-multiple="permis_eb"> Non
                                                </label>
                                                </div>
                                            </div>


                                            <div class="col-lg-6 col-sm-6">
                                                <div class="form-group">
                                                <label>Permis C</label><br>
                                                <style>
                                                    .margin_rig{
                                                                       margin-right: 15%;
                                                                   }
                                                </style>
                                                <label class="radio-inline margin_rig">
                                                    <input type="radio" name="permis_c" value="Oui" data-parsley-multiple="permis_c"> Oui
                                                </label>
                                                <label class="radio-inline ">
                                                    <input type="radio" name="permis_c" value="Non" data-parsley-multiple="permis_c"> Non
                                                </label>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-sm-6">
                                                <div class="form-group">
                                                <label>Permis EC</label><br>
                                                <style>
                                                    .margin_rig{
                                                                       margin-right: 15%;
                                                                   }
                                                </style>
                                                <label class="radio-inline margin_rig">
                                                    <input type="radio" name="permis_ec" value="Oui" data-parsley-multiple="permis_ec"> Oui
                                                </label>
                                                <label class="radio-inline ">
                                                    <input type="radio" name="permis_ec" value="Non" data-parsley-multiple="permis_ec"> Non
                                                </label>
                                                </div>
                                            </div>


                                            <div class="col-lg-6 col-sm-6">
                                                <div class="form-group">
                                                    <label>Date d'obtention <span class="red_color">*</span></label>
                                                    <div class="datepicker-container">
                                                        <i class="date-icon date-icon1 float-left"
                                                           aria-hidden="true"></i>
                                                        <input class="form-control bar-from" type="text"
                                                               placeholder="00/00/0000" id="date_obtention_{{$collaboration_id}}" name="date_obtention" required data-parsley-required-message="veuillez saisir la date d'obtention"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-sm-6">
                                                <div class="form-group">
                                                    <label>Date de fin d'habilitation <span class="red_color">*</span></label>
                                                    <div class="datepicker-container">
                                                        <i class="date-icon date-icon2 float-left"
                                                           aria-hidden="true"></i>
                                                        <input class="form-control bar-to" type="text"
                                                               placeholder="00/00/0000" id="end_date_{{$collaboration_id}}" name="end_date" required data-parsley-required-message="veuillez saisir la Date de fin d'habilitation"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-sm-12">
                                                <div class="form-group">
                                                    <label>Justificatifs</label>
                                                    <div class="min-height-scroll">
                                                        <div class="pr-3">
                                                            <div class="row">
                                                                <div class="col-lg-4 col-sm-4">
                                                                    <div class="form-group">
                                                                        <div class="upload-bx lightgray-upload-bx">

                                                                            <i id="imgPreview1_pdf_{{$collaboration_id}}"
                                                                               class="fa fa-file-pdf-o"
                                                                               aria-hidden="true"
                                                                               style="display: none;font-size: 45px;color: #009cde;"></i>

                                                                            <i id="imgPreview1_word_{{$collaboration_id}}"
                                                                               class="fa fa-file-text"
                                                                               aria-hidden="true"
                                                                               style="display: none;font-size: 45px;color: #009cde;"></i>

                                                                            <img id="imgPreview1_{{$collaboration_id}}"
                                                                                 src="{{ asset('public/assets/img/icons/plus_grey.png') }}"/>

                                                                        </div>
                                                                        <input type="file" name="img1" id="img1"
                                                                               class="hide-file-input">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-8 col-sm-8">
                                                                    <div class="form-group mt-1">
                                                                        <label>Nom</label>
                                                                        <input type="text" class="form-control"
                                                                               placeholder="NOM PHOTO" name="img1_name" id="img1_name">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-4 col-sm-4">
                                                                    <div class="form-group">
                                                                        <div class="upload-bx lightgray-upload-bx">

                                                                            <i id="imgPreview2_pdf_{{$collaboration_id}}"
                                                                               class="fa fa-file-pdf-o"
                                                                               aria-hidden="true"
                                                                               style="display: none;font-size: 45px;color: #009cde;"></i>

                                                                            <i id="imgPreview2_word_{{$collaboration_id}}"
                                                                               class="fa fa-file-text"
                                                                               aria-hidden="true"
                                                                               style="display: none;font-size: 45px;color: #009cde;"></i>


                                                                            <img id="imgPreviews2_{{$collaboration_id}}"
                                                                                 src="{{ asset('public/assets/img/icons/plus_grey.png') }}"/>
                                                                        </div>
                                                                        <input type="file" id="img2" name="img2"
                                                                               class="hide-file-input">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-8 col-sm-8">
                                                                    <div class="form-group mt-1">
                                                                        <label>Nom</label>
                                                                        <input type="text" class="form-control"
                                                                               placeholder="NOM PHOTO" name="img2_name" id="img2_name">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-4 col-sm-4">
                                                                    <div class="form-group">
                                                                        <div class="upload-bx lightgray-upload-bx">

                                                                            <i id="imgPreview3_pdf_{{$collaboration_id}}"
                                                                               class="fa fa-file-pdf-o"
                                                                               aria-hidden="true"
                                                                               style="display: none;font-size: 45px;color: #009cde;"></i>

                                                                            <i id="imgPreview3_word_{{$collaboration_id}}"
                                                                               class="fa fa-file-text"
                                                                               aria-hidden="true"
                                                                               style="display: none;font-size: 45px;color: #009cde;"></i>

                                                                            <img id="imgPreview3_{{$collaboration_id}}"
                                                                                 src="{{ asset('public/assets/img/icons/plus_grey.png') }}"/>
                                                                        </div>
                                                                        <input type="file" id="img3" name="img3"
                                                                               class="hide-file-input">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-8 col-sm-8">
                                                                    <div class="form-group mt-1">
                                                                        <label>Nom</label>
                                                                        <input type="text" class="form-control"
                                                                               placeholder="NOM PHOTO" name="img3_name" id="img3_name">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-4 col-sm-4">
                                                                    <div class="form-group">
                                                                        <div class="upload-bx lightgray-upload-bx">

                                                                            <i id="imgPreview4_pdf_{{$collaboration_id}}"
                                                                               class="fa fa-file-pdf-o"
                                                                               aria-hidden="true"
                                                                               style="display: none;font-size: 45px;color: #009cde;"></i>

                                                                            <i id="imgPreview4_word_{{$collaboration_id}}"
                                                                               class="fa fa-file-text"
                                                                               aria-hidden="true"
                                                                               style="display: none;font-size: 45px;color: #009cde;"></i>

                                                                            <img id="imgPreview4_{{$collaboration_id}}"
                                                                                 src="{{ asset('public/assets/img/icons/plus_grey.png') }}"/>
                                                                        </div>
                                                                        <input type="file" id="img4" name="img4"
                                                                               class="hide-file-input">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-8 col-sm-8">
                                                                    <div class="form-group mt-1">
                                                                        <label>Nom</label>
                                                                        <input type="text" class="form-control"
                                                                               placeholder="NOM PHOTO" name="img4_name" id="img4_name">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-sm-12" style="margin-top: 40px;">
                                            <button class="btn btn-lightblue float-right mr-5 btn_formation_edit_{{$collaboration_id}}">Ajouter la
                                                formation
                                            </button>
                                            {{-- <span class="btn btn-lightblue mr-2 btn-lightblue-another box-shadow-border-radius float-right" id="addSkill">Ajouter la formation</span> --}}
                                        </div>
                                    </div>
                                </form>
                            </div>


                        </div>


                    </div>
                    {{-- Trainign tab End --}}

                    {{-- Dotation Tab Start --}}
                    <div class="tab-pane {{ $url_get == 'dotation' ? 'active' : '' }}" id="endowment" role="tabpanel"
                         aria-labelledby="endowment-tab">
                        <div class="row">
                            <div class="col-lg-7 col-sm-7">
                                <div class="box-shadow-border-radius another-nav-container">
                                    <nav>
                                        <div class="nav nav-tabs text-center" id="nav-tab" role="tablist">
                                            <a class="nav-item nav-link active"
                                               id="nav-equipment-tab_{{ $collaboration_id }}" data-toggle="tab"
                                               href="#nav-equipment_{{ $collaboration_id }}" role="tab"
                                               aria-controls="nav-equipment" aria-selected="true">Matériel</a>

                                            <a class="nav-item nav-link text-center"
                                               id="nav-profile-tab_{{ $collaboration_id }}" data-toggle="tab"
                                               href="#nav-profile_{{ $collaboration_id }}" role="tab"
                                               aria-controls="nav-profile" aria-selected="false">Informatique</a>

                                            <a class="nav-item nav-link text-center"
                                               id="nav-contact-tab_{{ $collaboration_id }}" data-toggle="tab"
                                               href="#nav-contact_{{ $collaboration_id }}" role="tab"
                                               aria-controls="nav-contact" aria-selected="false">Véhicule</a>
                                        </div>


                                        <a class="btn btn-lightblue float-right materiel_{{ $collaboration_id }}"
                                           href="#">Exporter PDF</a>

                                        <a class="btn btn-lightblue float-right informatique_{{ $collaboration_id }}"
                                           href="#"
                                           style="display: none">Exporter PDF</a>

                                        <a class="btn btn-lightblue float-right vehicule_{{ $collaboration_id }}"
                                           href="#"
                                           style="display: none">Exporter PDF</a>


                                    </nav>
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active"
                                             id="nav-equipment_{{ $collaboration_id }}" role="tabpanel"
                                             aria-labelledby="nav-equipment-tab">
                                            <div class="table-responsive">
                                                <table class="table table-striped w-100" id="clientDataTable"
                                                       style="width:100%">
                                                    <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th class="wd-25p">Nom</th>
                                                        <th class="wd-25p">Date</th>
                                                        <th class="wd-15p">Photos</th>
                                                        <th class="wd-15p">Actions</th>
                                                        <th></th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach ($donation_materiels as $materiel)
                                                        @php
                                                            $img1 = !empty($materiel->img1) ? '1' : '0';
                                                            $img2 = !empty($materiel->img2) ? '1' : '0';
                                                            $img3 = !empty($materiel->img3) ? '1' : '0';
                                                            $img4 = !empty($materiel->img4) ? '1' : '0';

                                                            $img_count = $img1 + $img2 + $img3 + $img4;
                                                        @endphp
                                                        <tr class="data-materiel-id_{{ $materiel->id }}">
                                                            <td><input type="checkbox" name="selected_materiel"  value="{{$materiel->id}}">
                                                            </td>
                                                            <td>{{ $materiel->materiel_name }}</td>
                                                            <td>{{ $materiel->obtained }}</td>
                                                            <td>{{ $img_count }}</td>
                                                            <td>Supprimer</td>
                                                            <td>
                                                                <a href="javascript:void(0)" data-toggle="modal"
                                                                   data-target="#view-dotation-modal_{{ $materiel->id }}">
                                                                        <span class="view-color">
                                                                            <i class="fa fa-eye mr-1"></i>Voir
                                                                        </span>
                                                                </a>
                                                            </td>
                                                        </tr>

                                                        @include('collaboration.dotation_list.collaboration_dotation_materiel_list_popup')
                                                    @endforeach


                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="nav-profile_{{ $collaboration_id }}"
                                             role="tabpanel" aria-labelledby="nav-profile-tab">
                                            <div class="table-responsive">
                                                <table class="table table-striped w-100" id="clientDataTable"
                                                       style="width:100%">
                                                    <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th class="wd-25p">Nom</th>
                                                        <th class="wd-25p">Date</th>
                                                        <th class="wd-15p">Photos</th>
                                                        <th class="wd-15p">Actions</th>
                                                        <th></th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach ($donation_informatique as $informatique)
                                                        @php
                                                            $img1 = !empty($informatique->img1) ? '1' : '0';
                                                            $img2 = !empty($informatique->img2) ? '1' : '0';
                                                            $img3 = !empty($informatique->img3) ? '1' : '0';
                                                            $img4 = !empty($informatique->img4) ? '1' : '0';

                                                            $img_count = $img1 + $img2 + $img3 + $img4;
                                                        @endphp
                                                        <tr class="data-informatique-id_{{ $informatique->id }}">
                                                            <td><input type="checkbox" name="selected_informatique"  value="{{$informatique->id}}">
                                                            <td>{{ $informatique->materiel_name }}</td>
                                                            <td>{{ $informatique->obtained }}</td>
                                                            <td>{{ $img_count }}</td>
                                                            <td>Supprimer</td>
                                                            <td>
                                                                <a href="javascript:void(0)" data-toggle="modal"
                                                                   data-target="#view-informatique-modal_{{ $informatique->id }}">
                                                                        <span class="view-color">
                                                                            <i class="fa fa-eye mr-1"></i>Voir
                                                                        </span>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        @include('collaboration.dotation_list.collaboration_dotation_informatique_list_popup')
                                                    @endforeach

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="nav-contact_{{ $collaboration_id }}"
                                             role="tabpanel" aria-labelledby="nav-contact-tab">
                                            <div class="table-responsive">
                                                <table class="table table-striped w-100" id="clientDataTable"
                                                       style="width:100%">
                                                    <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th class="wd-25p">Nom</th>
                                                        <th class="wd-15p">Modele</th>
                                                        <th class="wd-25p">Date</th>
                                                        <th class="wd-15p">Photos</th>
                                                        <th class="wd-15p">Actions</th>
                                                        <th></th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach ($donation_vehicle as $vehicle)
                                                        @php
                                                            $img1 = !empty($vehicle->face) ? '1' : '0';
                                                            $img2 = !empty($vehicle->derriere) ? '1' : '0';
                                                            $img3 = !empty($vehicle->cote_droit) ? '1' : '0';
                                                            $img4 = !empty($vehicle->cote_gauche) ? '1' : '0';

                                                            $img_count = $img1 + $img2 + $img3 + $img4;
                                                        @endphp
                                                        <tr class="data-vehicle-id_{{ $vehicle->id }}">
                                                            <td><input type="checkbox" name="selected_vehicle"  value="{{$vehicle->id}}"> </td>
                                                            <td>{{ $vehicle->type_vehicle }}</td>
                                                            <td>{{ $vehicle->model }}</td>
                                                            <td>{{ $vehicle->obtained }}</td>
                                                            <td>{{ $img_count }}</td>
                                                            <td>Supprimer</td>
                                                            <td>
                                                                <a href="javascript:void(0)" data-toggle="modal"
                                                                   data-target="#view-vehicle-modal_{{ $vehicle->id }}">
                                                                        <span class="view-color">
                                                                            <i class="fa fa-eye mr-1"></i>Voir
                                                                        </span>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        @include('collaboration.dotation_list.collaboration_dotation_vehicle_list_popup')
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-5 col-sm-5">
                                @include('collaboration.collaboration_dotation_add')
                            </div>

                        </div>


                    </div>




                    {{-- Dotation Tab End --}}

                    {{-- statistics Tab Start --}}
                    <div class="tab-pane" id="statistics" role="tabpanel" aria-labelledby="statistics-tab">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <div class="row mt-3">
                                    <div class="col-lg-12 col-sm-12">
                                        <label class="tx-16 black-text font-weight-bold">Satistiques d'échecs et de
                                            réussite</label>
                                    </div>
                                </div>
                                <form action="post" id="satistiques_from_{{$collaboration_id}}">
                                    @csrf
                                    <div class="row mt-3">

                                            <div class="col-lg-6 col-sm-6">
                                                <label class="tx-16 font-weight-bold gray-font-color">Pas de chiffres</label>
                                            </div>
                                            <div class="col-lg-3 col-sm-3" style="padding: 0px 10px;">
                                                <div class="form-group mb-0" style="margin-top: -10px">
                                                    <select class="form-control round-dropdown"  name="satistiques_month" id="satistiques_month_{{$collaboration_id}}">
                                                        <option value="01">Par mois</option>
                                                        <option value="1">January</option>
                                                        <option value="2">February</option>
                                                        <option value="3">March</option>
                                                        <option value="4">April</option>
                                                        <option value="5">May</option>
                                                        <option value="6">June</option>
                                                        <option value="7">July</option>
                                                        <option value="8">August</option>
                                                        <option value="9">September</option>
                                                        <option value="10">October</option>
                                                        <option value="11">November</option>
                                                        <option value="12">December</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-sm-3" style="padding: 0px 10px;">
                                                <div class="form-group mb-0" style="margin-top: -10px">
                                                    <select class="form-control round-dropdown"  name="satistiques_year"
                                                    id="satistiques_year_{{$collaboration_id}}">
                                                        {{-- <option value="2022">Catte année</option> --}}
                                                        @php
                                                            $starting_year = 2021;
                                                            $current_year = date('Y')*1;
                                                            do {
                                                                echo '<option value="'.$starting_year.'">'.$starting_year.'</option>';
                                                                $starting_year++;
                                                            }
                                                            while ($current_year >= $starting_year);
                                                        @endphp
                                                    </select>

                                                </div>
                                            </div>

                                    </div>
                                </form>


                                <div class="row" id="satistiques_section_{{$collaboration_id}}">
                                    <canvas id="nombre-agence_{{ $collaboration_id }}" class=""></canvas>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-sm-12">
                                        <div class="top10Legend">
                                            <ul class="1-legend">
                                                <li class="mb-2">
                                                    <span style="background-color: #27C291;"></span>
                                                    INTERVENTIONS REUSSITES
                                                </li>
                                                <li>
                                                    <span style="background-color: #F7617D;"></span>INTERVENTIONS NON
                                                    REUSSITES
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="row">
                                    <div class="col-lg-12 col-sm-12">
                                        <div class="min-height-scroll-container">
                                            <div class="min-height-scroll">
                                                <div class="row pl-4 pr-5 pt-1">
                                                    <div
                                                        class="col-lg-12 col-sm-12 pr-5 mb-2 login-input login-input-green">
                                                        <p class="mb-1"><strong>13 août 2021 à 19:23 | EDO
                                                                IMC-TELECOM_MISSAMOU</strong></p>
                                                        <p class="mb-0">Lorem ipsum dolor sit amet,
                                                            consectetur adipiscing elit, sed do eiusmod tempor
                                                            incididunt ut labore et dolore magna aliqua.</p>
                                                    </div>
                                                    <div
                                                        class="col-lg-12 col-sm-12 pr-5 mb-2 login-input login-input-coffee">
                                                        <p class="mb-1"><strong>13 août 2021 à 19:23 | EDO
                                                                IMC-TELECOM_MISSAMOU</strong></p>
                                                        <p class="mb-0">Lorem ipsum dolor sit amet,
                                                            consectetur adipiscing elit, sed do eiusmod tempor
                                                            incididunt ut labore et dolore magna aliqua.</p>
                                                    </div>
                                                    <div
                                                        class="col-lg-12 col-sm-12 pr-5 mb-2 login-input login-input-red">
                                                        <p class="mb-1"><strong>13 août 2021 à 19:23 | EDO
                                                                IMC-TELECOM_MISSAMOU</strong></p>
                                                        <p class="mb-0">Lorem ipsum dolor sit amet,
                                                            consectetur adipiscing elit, sed do eiusmod tempor
                                                            incididunt ut labore et dolore magna aliqua.</p>
                                                    </div>
                                                    <div
                                                        class="col-lg-12 col-sm-12 pr-5 mb-2 login-input login-input-green">
                                                        <p class="mb-1"><strong>13 août 2021 à 19:23 | EDO
                                                                IMC-TELECOM_MISSAMOU</strong></p>
                                                        <p class="mb-0">Lorem ipsum dolor sit amet,
                                                            consectetur adipiscing elit, sed do eiusmod tempor
                                                            incididunt ut labore et dolore magna aliqua.</p>
                                                    </div>
                                                    <div
                                                        class="col-lg-12 col-sm-12 pr-5 mb-2 login-input login-input-green">
                                                        <p class="mb-1"><strong>13 août 2021 à 19:23 | EDO
                                                                IMC-TELECOM_MISSAMOU</strong></p>
                                                        <p class="mb-0">Lorem ipsum dolor sit amet,
                                                            consectetur adipiscing elit, sed do eiusmod tempor
                                                            incididunt ut labore et dolore magna aliqua.</p>
                                                    </div>
                                                    <div
                                                        class="col-lg-12 col-sm-12 pr-5 mb-2 login-input login-input-green">
                                                        <p class="mb-1"><strong>13 août 2021 à 19:23 | EDO
                                                                IMC-TELECOM_MISSAMOU</strong></p>
                                                        <p class="mb-0">Lorem ipsum dolor sit amet,
                                                            consectetur adipiscing elit, sed do eiusmod tempor
                                                            incididunt ut labore et dolore magna aliqua.</p>
                                                    </div>
                                                    <div
                                                        class="col-lg-12 col-sm-12 pr-5 mb-2 login-input login-input-green">
                                                        <p class="mb-1"><strong>13 août 2021 à 19:23 | EDO
                                                                IMC-TELECOM_MISSAMOU</strong></p>
                                                        <p class="mb-0">Lorem ipsum dolor sit amet,
                                                            consectetur adipiscing elit, sed do eiusmod tempor
                                                            incididunt ut labore et dolore magna aliqua.</p>
                                                    </div>
                                                    <div
                                                        class="col-lg-12 col-sm-12 pr-5 mb-2 login-input login-input-green">
                                                        <p class="mb-1"><strong>13 août 2021 à 19:23 | EDO
                                                                IMC-TELECOM_MISSAMOU</strong></p>
                                                        <p class="mb-0">Lorem ipsum dolor sit amet,
                                                            consectetur adipiscing elit, sed do eiusmod tempor
                                                            incididunt ut labore et dolore magna aliqua.</p>
                                                    </div>
                                                    <div
                                                        class="col-lg-12 col-sm-12 pr-5 mb-2 login-input login-input-green">
                                                        <p class="mb-1"><strong>13 août 2021 à 19:23 | EDO
                                                                IMC-TELECOM_MISSAMOU</strong></p>
                                                        <p class="mb-0">Lorem ipsum dolor sit amet,
                                                            consectetur adipiscing elit, sed do eiusmod tempor
                                                            incididunt ut labore et dolore magna aliqua.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-12 mt-3">
                                        <div class="box-shadow-border-radius" id="editor_{{$collaboration_id}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-12 mt-3 text-center">
                                        <button
                                            class="btn btn-lightblue mr-2 btn-lightblue-another box-shadow-border-radius"
                                            type="submit">Publier la note
                                        </button>
                                        <button class="btn btn-lightblue" type="submit">Enregistrer</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- statistics Tab Start --}}

                    {{-- absences-and-deviations Tab Start --}}
                    <div class="tab-pane {{ $url_get == 'absences_ecarts' ? 'active' : '' }}" id="absences-and-deviations" role="tabpanel"
                    aria-labelledby="absences-and-deviations-tab">
                        <div class="row">
                            <input type="hidden" id="collaboration_id_{{$collaboration_id}}" value="{{$collaboration_id}}">
                            <div class="col-lg-6 col-sm-6 absences-and-deviations-left">
                                <form class="absences_forms_{{$collaboration_id}}" method="post">
                                    <div class="row">
                                        <div class="col-lg-12 col-sm-12 pl-1 pr-2">
                                            <div class="row mb-3">
                                                <div class="col-lg-2 col-sm-2 pr-0 ">
                                                    <div class="datepicker-container">
                                                        <i class="date-icon date-icon1 float-left" aria-hidden="true"></i>
                                                        <input class="form-control bar-from list_abs_{{$collaboration_id}} absences_click_from_{{$collaboration_id}}" type="text"
                                                            placeholder="00/00/0000" id="absences_from_{{$collaboration_id}}">


                                                        <input class="form-control bar-from cale_abs_{{$collaboration_id}} absences_click_from_{{$collaboration_id}}" type="text"
                                                            placeholder="00/00/0000" id="absences_from_calc_{{$collaboration_id}}" style="display: none">


                                                    </div>
                                                </div>
                                                <div class="col-lg-1 col-sm-1 text-center">
                                                    <p class="mt-2 mb-0">au</p>
                                                </div>
                                                <div class="col-lg-2 col-sm-2 pl-0">
                                                    <div class="datepicker-container">
                                                        <i class="date-icon date-icon1 float-left" aria-hidden="true"></i>
                                                        <input class="form-control bar-from list_abs_{{$collaboration_id}} absences_click_to_{{$collaboration_id}}" type="text"
                                                            placeholder="00/00/0000" id="absences_to_{{$collaboration_id}}">

                                                        <input class="form-control bar-from cale_abs_{{$collaboration_id}} absences_cale_click_to_{{$collaboration_id}}" type="text"
                                                            placeholder="00/00/0000" id="absences_to_calc_{{$collaboration_id}}" style="display: none">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-3 p-0 ">
                                                    <select class="form-control list_abs_{{$collaboration_id}}" id="motifs_{{$collaboration_id}}">
                                                        <option value="all">tous les motifs</option>
                                                        <option value="CONGÉS PAYÉS">CONGÉS PAYÉS</option>
                                                        <option value="CONGÉS PAYÉS123">CONGÉS PAYÉS123</option>
                                                    </select>


                                                    <select class="form-control cale_abs_{{$collaboration_id}}" id="motifs_calc_{{$collaboration_id}}" style="display: none">
                                                        <option value="all">tous les motifs</option>
                                                        <option value="CONGÉS PAYÉS">CONGÉS PAYÉS</option>
                                                        <option value="CONGÉS PAYÉS123">CONGÉS PAYÉS123</option>
                                                    </select>
                                                </div>






                                                <div class="col-lg-3 col-sm-3 pr-0">
                                                    <a href="javascript:void(0);" id="novelle-btn_{{ $collaboration_id }}" class="btn-blue-white"
                                                        style="margin-left: unset;" data-toggle="modal"
                                                        data-target="#absence-modal_{{ $collaboration_id }}">
                                                        Novelle absence
                                                    </a>

                                                    @include('collaboration.absences_ecarts_popup.absences_popup')


                                                </div>
                                                <div class="col-lg-1 col-sm-1 p-2">
                                                    <a href="javascript:void(0);" class="calender-task-btn_{{ $collaboration_id }}">
                                                        <img src="{{ asset('public/assets/img/icons/blue-calendar-white.png') }}"
                                                            style="margin-top: -3px;">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                                <div class="col-lg-6 col-sm-6 absences-and-deviations-right">
                                    <div class="row">
                                        <div class="col-lg-12 col-sm-12 pl-2 pr-1">
                                            <div class="row mb-3">
                                                <div class="col-lg-4 col-sm-4 pr-0">
                                                </div>
                                                <div class="col-lg-2 col-sm-2 pl-0">
                                                    <div class="datepicker-container">
                                                        <i class="date-icon date-icon1 float-left" aria-hidden="true"></i>
                                                        <input class="form-control bar-from ecarts_click_from_{{$collaboration_id}}" type="text"
                                                            placeholder="00/00/0000" id="ecarts_from_{{$collaboration_id}}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-3 pl-0">
                                                    <select class="form-control" id="motifs_ecarts_{{$collaboration_id}}">
                                                        <option value="all">tous les motifs</option>
                                                        <option value="CONGÉS PAYÉS">CONGÉS PAYÉS</option>
                                                        <option value="CONGÉS PAYÉS11">CONGÉS PAYÉS11</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-3 col-sm-3 pl-0">
                                                    <a href="javascript:void(0);" class="btn-blue-white"
                                                        style="margin-left: unset;" data-toggle="modal"
                                                        data-target="#ecarts-modal_{{ $collaboration_id }}">
                                                        Nouvel écart
                                                    </a>

                                                    @include('collaboration.absences_ecarts_popup.ecarts_popup')
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>




                                <div class="col-lg-6 col-sm-6 pl-1 pr-1 absences-and-deviations-left">
                                    <div class="calendar-container_{{$collaboration_id}}" style="display: none;">
                                        <div id='calendar_{{$collaboration_id}}'></div>
                                        <div style='clear:both'></div>
                                    </div>
                                    <div class="task-container_{{$collaboration_id}}">
                                        <p class="mb-1"><strong class="black-text font-weight-bold">Liste d'absences</strong></p>
                                        <div class="min-height-scroll-container fill-background">
                                            <div class="min-height-scroll">
                                                {{-- <div class="row pl-4 pr-4 absences_ajax_{{ $collaboration_id }}"></div> --}}
                                                <div class="row pl-4 pr-4 absences_ajax_to_{{ $collaboration_id }}"></div>
                                                <div class="row pl-4 pr-4 absences_main_{{ $collaboration_id }}">
                                                    @foreach ($absences as $abs)
                                                        <a href="javascript:void(0);" data-toggle="modal"
                                                            data-target="#edit-absence-modal_{{$abs->id}}_{{ $collaboration_id }}">
                                                            <div class="col-lg-12 col-sm-12 pr-5 mb-2 login-input">
                                                                <div class="row">
                                                                    <div class="col-lg-5 col-sm-5">
                                                                        <p class="mb-1"><strong>{{$abs->motif}}</strong>
                                                                        </p>
                                                                    </div>
                                                                    <div class="col-lg-7 col-sm-7 text-right">
                                                                        @php
                                                                            $debut_date_old = $abs->debut_date;
                                                                            $debut_date = Carbon\Carbon::parse($debut_date_old)->format('d F Y');

                                                                            $fin_date_old = $abs->fin_date;
                                                                            $fin_date = Carbon\Carbon::parse($fin_date_old)->format('d F Y');
                                                                        @endphp


                                                                        <p class="mb-1 view-color"><strong>{{$debut_date}} - {{$fin_date}} <i
                                                                                    class="fa fa-eye mr-1"></i></strong></p>
                                                                    </div>
                                                                </div>
                                                                <p class="mb-0">{{$abs->description}}</p>
                                                            </div>
                                                        </a>
                                                        @include('collaboration.absences_ecarts_popup.edit_absences')
                                                    @endforeach

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>


                            {{-- List of Ecarts Strt --}}
                            <div class="col-lg-6 col-sm-6 pr-1 absences-and-deviations-right">
                                <p class="mb-1"><strong class="black-text font-weight-bold">List des
                                        écarts</strong></p>
                                <div class="min-height-scroll-container fill-background">
                                    <div class="min-height-scroll">

                                        <div class="row pl-4 pr-4 ecarts_ajax_to_{{ $collaboration_id }}"></div>
                                        <div class="row pl-4 pr-4 ecarts_main_{{ $collaboration_id }}">
                                            @foreach ($ecarts as $ecart)
                                                <a href="javascript:void(0);" data-toggle="modal"
                                                data-target="#edit-ecart-modal_{{$ecart->id}}_{{ $collaboration_id }}">
                                                    <div class="col-lg-12 col-sm-12 pr-5 mb-2 login-input">
                                                        <div class="row">
                                                            <div class="col-lg-5 col-sm-5">
                                                                <p class="mb-1"><strong>{{$ecart->motif}}</strong></p>
                                                            </div>
                                                            <div class="col-lg-7 col-sm-7 text-right">
                                                                @php
                                                                    $debut_date_old_e = $ecart->debut_date;
                                                                    $debut_date_e = Carbon\Carbon::parse($debut_date_old_e)->format('d F Y');

                                                                    $fin_date_old_e = $ecart->fin_date;
                                                                    $fin_date_e = Carbon\Carbon::parse($fin_date_old_e)->format('d F Y');
                                                                @endphp
                                                                <p class="mb-1 view-color"><strong>{{$debut_date_e}} <i
                                                                            class="fa fa-eye mr-1"></i></strong></p>
                                                            </div>
                                                        </div>
                                                        <p class="mb-0"><strong>Objet:</strong> {{$ecart->description}}</p>
                                                    </div>
                                                </a>

                                                @include('collaboration.absences_ecarts_popup.edit_ecart')
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- List of Ecarts End --}}
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-sm-12 mt-3 pr-0">
                                <button class="btn btn-lightblue float-right" type="submit">Enregistrer</button>
                            </div>
                        </div>
                    </div>
                    {{-- absences-and-deviations Tab Start --}}

                    {{-- contact Tab Start --}}
                    <div class="tab-pane {{ $url_get == 'contact' ? 'active' : '' }}" id="contract" role="tabpanel"
                        aria-labelledby="contract-tab">
                        @if (!empty($contacts->id))
                            <form method="post"  action="{{ route('collabotation.contact_edit') }}" enctype="multipart/form-data" data-parsley-validate>
                        @else
                            <form method="post" id="contact_form" enctype="multipart/form-data" data-parsley-validate>
                        @endif

                        @csrf

                                        <input type="hidden" name="collaboration_id" id="collaboration_id_{{$collaboration_id}}" value="{{ $collaboration_id }}">


                                        <div class="row min-height-scroll">
                                            <div class="col-lg-6 col-sm-6 px-4">
                                                <div class="form-group">
                                                    <label>Poste</label>
                                                    <select class="form-control" name="poste" id="poste_{{$collaboration_id}}">
                                                        @if (!empty($contacts->id))
                                                            <option
                                                                {{ $contacts->poste == 'Jr. Technicien' ? 'selected' : '' }} value="Jr. Technicien">
                                                                Jr. Technicien
                                                            </option>
                                                            <option {{ $contacts->poste == 'Sr. Technicien' ? 'selected' : '' }}
                                                                    value="Sr. Technicien">Sr. Technicien
                                                            </option>
                                                            <option {{ $contacts->poste == 'Assistant' ? 'selected' : '' }}
                                                                    value="Assistant">Assistant
                                                            </option>
                                                        @else
                                                            <option value="">Sélectionner Poste</option>
                                                            <option value="Jr. Technicien">Jr. Technicien</option>
                                                            <option value="Sr. Technicien">Sr. Technicien</option>
                                                            <option value="Assistant">Assistant</option>
                                                        @endif

                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-sm-6">
                                                            <label>Type de contrat</label>
                                                            <select class="form-control" name="contract_type" id="contract_type">
                                                                @if (!empty($contacts->id))
                                                                    <option
                                                                        {{ $contacts->contract_type == 'Temporaire' ? 'selected' : '' }} value="Temporaire">
                                                                        Temporaire
                                                                    </option>
                                                                    <option {{ $contacts->contract_type == 'Permanente' ? 'selected' : '' }}
                                                                            value="Permanente">Permanente
                                                                    </option>

                                                                @else
                                                                    <option value="">Sélectionnez le type de contrat</option>
                                                                    <option value="Temporaire">Temporaire</option>
                                                                    <option value="Permanente">Permanente</option>
                                                                @endif

                                                            </select>
                                                        </div>
                                                        <div class="col-lg-6 col-sm-6">
                                                            <label>Type de sous contrat</label>
                                                            <select class="form-control" name="sub_contract_type" id="sub_contracts">
                                                                @if (!empty($contacts->id))
                                                                    <option
                                                                        {{ $contacts->sub_contract_type == 'CDD' ? 'selected' : '' }} value="CDD">
                                                                        CDD
                                                                    </option>

                                                                    <option {{ $contacts->sub_contract_type == 'Alternance' ? 'selected' : '' }}
                                                                            value="Alternance">Alternance
                                                                    </option>

                                                                    <option {{ $contacts->sub_contract_type == 'Professionnalisation' ? 'selected' : '' }}
                                                                        value="Professionnalisation">Professionnalisation
                                                                    </option>

                                                                @else
                                                                    <option value="Non">Non</option>
                                                                @endif

                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-sm-6">
                                                            <label>Agence <span class="red_color">*</span></label>
                                                            <select class="form-control" name="agence" id="agence_{{$collaboration_id}}" required data-parsley-required-message="veuillez entrer un ange valide">
                                                                <option value="">Select</option>
                                                                @foreach ($contact_agencies as $agency)
                                                                    @if (!empty($contacts->id))
                                                                        <option
                                                                            {{ $contacts->agence == $agency->id ? 'selected' : '' }}
                                                                            value="{{ $agency->id }}">
                                                                            {{ $agency->agencenom }}</option>
                                                                    @else
                                                                        <option value="{{ $agency->id }}">
                                                                            {{ $agency->agencenom }}</option>
                                                                    @endif
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-6 col-sm-6">
                                                            <label>NNI <span class="red_color">*</span></label>
                                                            <input type="text" name="nni" id="nni_{{$collaboration_id}}" class="form-control"
                                                                value="{{ !empty($contacts->nni) ? $contacts->nni : '' }}"
                                                                placeholder="0000000" required data-parsley-required-message="veuillez entrer un NNI valide" >
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-sm-6">
                                                            <label>Habilitation</label>
                                                            <select class="form-control" name="habilitation" id="habilitation_{{$collaboration_id}}">

                                                                @if (!empty($contacts->id))
                                                                    <option
                                                                        {{ $contacts->habilitation == 'HABILITATION' ? 'selected' : '' }}
                                                                        value="HABILITATION">HABILITATION
                                                                    </option>
                                                                    <option
                                                                        {{ $contacts->habilitation == 'HABILITATION2' ? 'selected' : '' }}
                                                                        value="HABILITATION2">HABILITATION2
                                                                    </option>
                                                                @else
                                                                    <option value="HABILITATION">HABILITATION</option>
                                                                    <option value="HABILITATION2">HABILITATION2</option>
                                                                @endif

                                                            </select>
                                                        </div>
                                                        <div class="col-lg-6 col-sm-6">
                                                            <label>Date de fin d'habilitation</label>
                                                            @php
                                                                if(!empty($contacts->end_date_authorization))
                                                                {
                                                                    $end_date_authorization = \Carbon\Carbon::parse($contacts->end_date_authorization)->format('m/d/Y');
                                                                }
                                                                else {
                                                                    $end_date_authorization = '';
                                                                }
                                                            @endphp
                                                            <div class="datepicker-container">
                                                                <i class="date-icon date-icon1 float-left"
                                                                aria-hidden="true"></i>
                                                                <input class="form-control bar-from" type="text"
                                                                    name="end_date_authorization" id="end_date_authorization_{{$collaboration_id}}"
                                                                    value="{{ !empty($end_date_authorization) ? $end_date_authorization : '' }}"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Taux horaire brut (€/h)</label>
                                                    <input type="text" name="gross_hourly_rate" class="form-control" id="gross_hourly_rate_{{$collaboration_id}}"
                                                        placeholder="Taux horaire brut" value="{{ !empty($contacts->gross_hourly_rate) ? $contacts->gross_hourly_rate : '' }}">
                                                </div>


                                                <div class="form-group">
                                                    <label>Salaire mensuel brut avant impôt</label>
                                                    <input type="text" name="gross_monthly_salary" id="gross_monthly_salary_{{$collaboration_id}}" class="form-control"
                                                        placeholder="Salaire mensuel brut avant impôt" value="{{ !empty($contacts->gross_monthly_salary) ? $contacts->gross_monthly_salary : '' }}">
                                                </div>



                                            </div>
                                            <div class="col-lg-6 col-sm-6 px-4">
                                                <div class="form-group">
                                                    <label>Carte de construction</label>

                                                    <style>
                                                        .margin_rig{
                                                            margin-right: 15%;
                                                        }
                                                    </style>
                                                    <br>
                                                    <label class="radio-inline margin_rig">
                                                        <input type="radio" name="construction_card" value="True" {{ !empty($contacts->construction_card) == 'True' ? 'checked' : '' }}> Vrai
                                                    </label>
                                                    <label class="radio-inline ">
                                                        <input type="radio" name="construction_card" value="False"{{ !empty($contacts->construction_card) == 'False' ? 'checked' : '' }}> Faux
                                                    </label>

                                                </div>
                                                <div class="form-group">
                                                    <label>Avantages en nature</label>
                                                    <input type="text" name="benefits_kind" id="benefits_kind_{{$collaboration_id}}" class="form-control"
                                                        placeholder="Avantages en nature" value="{{ !empty($contacts->benefits_kind) ? $contacts->benefits_kind : '' }}">
                                                </div>
                                                <div class="form-group">
                                                    <label>Situation avant embauche</label>
                                                    <input type="text" name="situation_before_hiring" id="situation_before_hiring_{{$collaboration_id}}" class="form-control"
                                                        placeholder="Situation avant embauche" value="{{ !empty($contacts->situation_before_hiring) ? $contacts->situation_before_hiring : '' }}">
                                                </div>
                                                <div class="form-group">
                                                    <label>Diplôme / Niveau</label>
                                                    <select class="form-control" name="diploma" id="diploma_{{$collaboration_id}}">
                                                        @if (!empty($contacts->id))
                                                            <option
                                                                {{ $contacts->diploma == 'Diplôme 1' ? 'selected' : '' }} value="Diplôme 1">
                                                                Diplôme 1
                                                            </option>
                                                            <option {{ $contacts->diploma == 'Diplôme 2' ? 'selected' : '' }}
                                                                    value="Diplôme 2">Diplôme 2
                                                            </option>
                                                            <option {{ $contacts->diploma == 'Diplôme 3' ? 'selected' : '' }}
                                                                    value="Diplôme 3">Diplôme 3
                                                            </option>
                                                        @else
                                                            <option value="">Sélectionner Diplôme</option>
                                                            <option value="Diplôme 1">Diplôme 1</option>
                                                            <option value="Diplôme 2">Diplôme 2</option>
                                                            <option value="Diplôme 3">Diplôme 3</option>
                                                        @endif

                                                    </select>
                                                </div>

                                                <style>
                                                    .form-select{
                                                        display: block;
                                                        width: 100%;
                                                        padding: 0.375rem 2.25rem 0.375rem 0.75rem;
                                                        -moz-padding-start: calc(0.75rem - 3px);
                                                        font-size: 0.9rem;
                                                        font-weight: 400;
                                                        line-height: 1.5;
                                                        color: #bcc1d3;
                                                        background-color: #fff;
                                                        background:  url("{{ asset('public/assets/img/icons/down-arrow.png')}}") no-repeat;
                                                        background-repeat: no-repeat;
                                                        background-position: right 0.75rem center;

                                                        border: 1px solid #ced4da;
                                                        border-radius: 0.25rem;
                                                        transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
                                                        -webkit-appearance: none;
                                                        -moz-appearance: none;
                                                        appearance: none;
                                                    }
                                                </style>
                                                @php
                                                    $users = DB::table('users')->where('role_id','5')->get();
                                                @endphp
                                                <div class="form-group">
                                                    <label>Chef d'équipe</label>
                                                    <select class="" name="team_lead_id" id="team_lead_id_{{$collaboration_id}}">
                                                        @if (!empty($contacts->id))
                                                            @foreach ($users as $user)
                                                                <option {{ $contacts->team_lead_id == $user->id ? 'selected' : '' }} value="{{$user->id}}">{{$user->name}}</option>
                                                            @endforeach
                                                        @else
                                                            <option value="">Select</option>
                                                            @foreach ($users as $user)
                                                                <option value="{{$user->id}}">{{$user->name}}</option>
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                </div>

                                            </div>

                                        </div>
                                        <div class="row">

                                            <div class="col-lg-12 col-sm-12 mt-2" >

                                                @if (!empty($contacts->id))
                                                    <button class="btn btn-lightblue float-right" type="submit">Éditer
                                                    </button>
                                                @else
                                                    <button class="btn btn-lightblue float-right btn_contact_edit_{{$collaboration_id}}" >
                                                        Enregistrer
                                                    </button>
                                                @endif

                                                <button
                                                    class="btn btn-lightblue mr-2 float-right btn-lightblue-another box-shadow-border-radius"
                                                    type="submit">Générer le contrat
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                    </div>
                    {{-- contact Tab Start --}}
            </div>
        </div>

    </div>
</div>
</div>


<script>
    $(document).ready(() => {
        $('#photo').change(function () {
            const file = this.files[0];
            console.log(file);
            if (file) {
                let reader = new FileReader();
                reader.onload = function (event) {
                    console.log(event.target.result);
                    $('#imgPreview').attr('src', event.target.result);

                    $('#imgPreview').css("max-width", "125px");
                    $('#imgPreview').css("width", "125px");
                    $('#imgPreview').css("height", "140px");
                    $('#imgPreview').css("padding-right", "5% !important");
                }
                reader.readAsDataURL(file);
            }


            $(".remove").click(function(){
                $('#imgPreview').prop('src',"{{ asset('public/assets/img/icons/file-upload.png') }}");
                $('#imgPreview').css("max-width", "125px");
                $('#imgPreview').css("width", "35px");
                $('#imgPreview').css("height", "35px");
            });
        });


    });
</script>


<script>
    $(document).ready(() => {
        $('#img1').change(function () {

            const file = this.files[0];
            console.log(file);
            if (file) {
                let reader = new FileReader();
                reader.onload = function (event) {

                    if (file.type == "application/pdf") {
                        $('#imgPreview1_pdf_{{$collaboration_id}}').show();
                        $('#imgPreview1_{{$collaboration_id}}').hide();
                        $('#imgPreview1_word_{{$collaboration_id}}').hide();
                    } else if (file.type == "image/png" || file.type == "image/jpg" || file.type == "image/jpeg") {

                        $('#imgPreview1_{{$collaboration_id}}').css("max-width", "100px");
                        $('#imgPreview1_{{$collaboration_id}}').css("width", "100px");
                        $('#imgPreview1_{{$collaboration_id}}').css("height", "100px");
                        console.log(event.target.result);
                        $('#imgPreview1_pdf_{{$collaboration_id}}').hide();
                        $('#imgPreview1_word_{{$collaboration_id}}').hide();
                        $('#imgPreview1_{{$collaboration_id}}').show();
                        $('#imgPreview1_{{$collaboration_id}}').attr('src', event.target.result);
                    } else {
                        $('#imgPreview1_pdf_{{$collaboration_id}}').hide();
                        $('#imgPreview1_{{$collaboration_id}}').hide();
                        $('#imgPreview1_word_{{$collaboration_id}}').show();
                    }

                }
                reader.readAsDataURL(file);
            }
        });

        $('#img2').change(function () {

            const file = this.files[0];
            console.log(file);
            if (file) {
                let reader = new FileReader();
                reader.onload = function (event) {
                    if (file.type == "application/pdf") {
                        console.log(event.target.result);
                        $('#imgPreview2_pdf_{{$collaboration_id}}').show();
                        $('#imgPreviews2_{{$collaboration_id}}').hide();
                        $('#imgPreview2_word_{{$collaboration_id}}').hide();
                    } else if (file.type == "image/png" || file.type == "image/jpg" || file.type == "image/jpeg") {
                        $('#imgPreview2_{{$collaboration_id}}').css("max-width", "100px");
                        $('#imgPreview2_{{$collaboration_id}}').css("width", "100px");
                        $('#imgPreview2_{{$collaboration_id}}').css("height", "100px");
                        console.log(event.target.result);
                        $('#imgPreview2_pdf_{{$collaboration_id}}').hide();
                        $('#imgPreview2_word_{{$collaboration_id}}').hide();
                        $('#imgPreviews2_{{$collaboration_id}}').show();
                        $('#imgPreviews2_{{$collaboration_id}}').attr('src', event.target.result);
                    } else {
                        $('#imgPreview2_pdf_{{$collaboration_id}}').hide();
                        $('#imgPreviews2_{{$collaboration_id}}').hide();
                        $('#imgPreview2_word_{{$collaboration_id}}').show();
                    }

                }
                reader.readAsDataURL(file);
            }
        });

        $('#img3').change(function () {
            const file = this.files[0];
            console.log(file);
            if (file) {
                let reader = new FileReader();
                reader.onload = function (event) {
                    if (file.type == "application/pdf") {
                        $('#imgPreview3_pdf_{{$collaboration_id}}').show();
                        $('#imgPreview3_{{$collaboration_id}}').hide();
                        $('#imgPreview3_word_{{$collaboration_id}}').hide();
                    } else if (file.type == "image/png" || file.type == "image/jpg" || file.type == "image/jpeg") {
                        $('#imgPreview3_{{$collaboration_id}}').css("max-width", "100px");
                        $('#imgPreview3_{{$collaboration_id}}').css("width", "100px");
                        $('#imgPreview3_{{$collaboration_id}}').css("height", "100px");
                        console.log(event.target.result);
                        $('#imgPreview3_pdf_{{$collaboration_id}}').hide();
                        $('#imgPreview3_word_{{$collaboration_id}}').hide();
                        $('#imgPreview3_{{$collaboration_id}}').show();
                        $('#imgPreview3_{{$collaboration_id}}').attr('src', event.target.result);
                    } else {
                        $('#imgPreview3_pdf_{{$collaboration_id}}').hide();
                        $('#imgPreview3_{{$collaboration_id}}').hide();
                        $('#imgPreview3_word_{{$collaboration_id}}').show();
                    }
                }
                reader.readAsDataURL(file);
            }
        });

        $('#img4').change(function () {
            const file = this.files[0];
            console.log(file);
            if (file) {
                let reader = new FileReader();
                reader.onload = function (event) {
                    if (file.type == "application/pdf") {
                        $('#imgPreview4_pdf_{{$collaboration_id}}').show();
                        $('#imgPreview4_{{$collaboration_id}}').hide();
                        $('#imgPreview4_word_{{$collaboration_id}}').hide();
                    } else if (file.type == "image/png" || file.type == "image/jpg" || file.type == "image/jpeg") {
                        $('#imgPreview4_{{$collaboration_id}}').css("max-width", "100px");
                        $('#imgPreview4_{{$collaboration_id}}').css("width", "100px");
                        $('#imgPreview4_{{$collaboration_id}}').css("height", "100px");
                        console.log(event.target.result);
                        $('#imgPreview4_pdf_{{$collaboration_id}}').hide();
                        $('#imgPreview4_word_{{$collaboration_id}}').hide();
                        $('#imgPreview4_{{$collaboration_id}}').show();
                        $('#imgPreview4_{{$collaboration_id}}').attr('src', event.target.result);
                    } else {
                        $('#imgPreview4_pdf_{{$collaboration_id}}').hide();
                        $('#imgPreview4_{{$collaboration_id}}').hide();
                        $('#imgPreview4_word_{{$collaboration_id}}').show();
                    }
                }
                reader.readAsDataURL(file);
            }
        });
    });
</script>


<script>
    $("#nav-equipment-tab_{{ $collaboration_id }}").on("click", function () {
        $(".materiel_{{ $collaboration_id }}").show();
        $(".informatique_{{ $collaboration_id }}").hide();
        $(".vehicule_{{ $collaboration_id }}").hide();

        $(".material-container").show();
        $(".information-container").hide();
        $(".vehicle-container").hide();

        $("input[value='material']").prop("checked", true);



    });

    $("#nav-profile-tab_{{ $collaboration_id }}").on("click", function () {
        $(".materiel_{{ $collaboration_id }}").hide();
        $(".informatique_{{ $collaboration_id }}").show();
        $(".vehicule_{{ $collaboration_id }}").hide();

        $(".material-container").hide();
        $(".information-container").show();
        $(".vehicle-container").hide();

        $("input[value='information']").prop("checked", true);
    });

    $("#nav-contact-tab_{{ $collaboration_id }}").on("click", function () {
        $(".materiel_{{ $collaboration_id }}").hide();
        $(".informatique_{{ $collaboration_id }}").hide();
        $(".vehicule_{{ $collaboration_id }}").show();

        $(".material-container").hide();
        $(".information-container").hide();
        $(".vehicle-container").show();

        $("input[value='vehicle']").prop("checked", true);

    });
</script>
<script>


</script>

{{-- <script>

        var count = 1;
        // var appendHTML = ;

        $(document).ready(function(){
            $(document).on('click','#addSkill', function(){

                // $( ".bs-form-wrapper" ).append( '<div class="input-group control-group input-wrapper mt-2"><input type="text" name="name_'+count+'[]" class="form-control" placeholder="Enter value here"><div class="input-group-btn"><button class="btn btn-danger bs-remove-button" type="button"><i class="fa fa-minus"></i> Remove</button></div></div>' );


                $(".bs-form-wrapper").append('<div class="col-lg-5 col-sm-5"><strong class="black-text font-weight-bold">Ajouter une formation</strong>   <div class="box-shadow-border-radius login-input" style="margin-top: 10px" id="skiller">     <div class="row"><div class="col-lg-12 col-sm-12"><div class="form-group"><label>Nom de la formation</label><select class="form-control"><option>LOREMPSUS</option></select></div></div>      <div class="col-lg-6 col-sm-6"><div class="form-group"><label>Date dobtention</label><div class="datepicker-container"><i class="date-icon date-icon1 float-left" aria-hidden="true"></i><input class="form-control bar-from" type="text" placeholder="00/00/0000" /></div></div></div>')




                $(".bs-form-wrapper").append('</div></div></div>')

                count++;
            });


        });


    </script> --}}





<script>

    $(document).ready(function () {


        $(".absences_click_to_{{$collaboration_id}}").change(function (e) {

            e.preventDefault();
            var collaboration_id = $("#collaboration_id_{{$collaboration_id}}").val();
            var absences_from = $("#absences_from_{{$collaboration_id}}").val();
            var absences_to = $("#absences_to_{{$collaboration_id}}").val();
            var motifs = $("#motifs_{{$collaboration_id}}").val();
            $.ajax({
                url: '{{ route("absences.datefilter_to") }}',
                method: 'POST',
                dataType: 'json',
                data: {
                    'collaboration_id': collaboration_id,
                    'absences_from': absences_from,
                    'absences_to': absences_to,
                    'motifs': motifs,
                    "_token": "{{ csrf_token() }}"
                },
            }).done(function (data) {
                console.log(data);
                $('.absences_main_{{ $collaboration_id }}').hide();
                // $('.absences_ajax_{{ $collaboration_id }}').hide();
                $('.absences_ajax_to_{{ $collaboration_id }}').html(data);
            }).fail(function () {
                //alert('Search result not found!');
            });
        });

        $(".absences_cale_click_to_{{$collaboration_id}}").change(function(e){

            e.preventDefault();
            var collaboration_id = $("#collaboration_id_{{$collaboration_id}}").val();
            var absences_from = $("#absences_from_calc_{{$collaboration_id}}").val();
            var absences_to = $("#absences_to_calc_{{$collaboration_id}}").val();
            var motifs = $("#motifs_calc_{{$collaboration_id}}").val();
            $.ajax({
                url: '{{ route("absences.datefilter_to_calc") }}',
                method: 'POST',
                dataType: 'json',
                data: {
                    'collaboration_id': collaboration_id,
                    'absences_from': absences_from,
                    'absences_to': absences_to,
                    'motifs': motifs,
                    "_token": "{{ csrf_token() }}"
                },
            }).done(function (data) {

                console.log(data);
                $('.absences_main_{{ $collaboration_id }}').hide();
                    // $('.absences_ajax_{{ $collaboration_id }}').hide();

                $("#calendar_{{$collaboration_id}}").html(data);

                $("table.fc-header").attr("style", "display:inline");
                $("span.fc-button").attr("style", "color: #000000 !important;")

            }).fail(function () {
                    //alert('Search result not found!');
            });
        });



        $("#motifs_{{$collaboration_id}}").change(function(e){

            e.preventDefault();
            var collaboration_id = $("#collaboration_id_{{$collaboration_id}}").val();
            var absences_from = $("#absences_from_{{$collaboration_id}}").val();
            var absences_to = $("#absences_to_{{$collaboration_id}}").val();
            var motifs = $("#motifs_{{$collaboration_id}}").val();
            $.ajax({
                url: '{{ route("absences.datefilter_to") }}',
                method: 'POST',
                dataType: 'json',
                data: {
                    'collaboration_id': collaboration_id,
                    'absences_from': absences_from,
                    'absences_to': absences_to,
                    'motifs': motifs,
                    "_token": "{{ csrf_token() }}"
                },
            }).done(function (data) {
                console.log(data);
                $('.absences_main_{{ $collaboration_id }}').hide();
                $('.absences_ajax_to_{{ $collaboration_id }}').html(data);
            }).fail(function () {
                    //alert('Search result not found!');
            });
        });

        $("#motifs_calc_{{$collaboration_id}}").change(function(e){

            e.preventDefault();
            var collaboration_id = $("#collaboration_id_{{$collaboration_id}}").val();
            var absences_from = $("#absences_from_calc_{{$collaboration_id}}").val();
            var absences_to = $("#absences_to_calc_{{$collaboration_id}}").val();
            var motifs = $("#motifs_calc_{{$collaboration_id}}").val();
            $.ajax({
                url: '{{ route("absences.datefilter_to_calc") }}',
                method: 'POST',
                dataType: 'json',
                data: {
                    'collaboration_id': collaboration_id,
                    'absences_from': absences_from,
                    'absences_to': absences_to,
                    'motifs': motifs,
                    "_token": "{{ csrf_token() }}"
                },
            }).done(function (data) {

                console.log(data);
                $('.absences_main_{{ $collaboration_id }}').hide();
                    // $('.absences_ajax_{{ $collaboration_id }}').hide();

                $("#calendar_{{$collaboration_id}}").html(data);

                $("table.fc-header").attr("style", "display:inline");
                $("span.fc-button").attr("style", "color: #000000 !important;")

            }).fail(function () {
                    //alert('Search result not found!');
            });
        });

    });


        $(".ecarts_click_from_{{$collaboration_id}}").change(function(e){

            e.preventDefault();
            var collaboration_id = $("#collaboration_id_{{$collaboration_id}}").val();
            var ecarts_from = $("#ecarts_from_{{$collaboration_id}}").val();
            var motifs = $("#motifs_ecarts_{{$collaboration_id}}").val();
            $.ajax({
                url: '{{ route("ecarts.datefilter_to") }}',
                method: 'POST',
                dataType: 'json',
                data: {
                    'collaboration_id': collaboration_id,
                    'ecarts_from': ecarts_from,
                    'motifs': motifs,
                    "_token": "{{ csrf_token() }}"
                },
            }).done(function (data) {

                $('.ecarts_main_{{ $collaboration_id }}').hide();
                    // $('.absences_ajax_{{ $collaboration_id }}').hide();
                $('.ecarts_ajax_to_{{ $collaboration_id }}').html(data);
            }).fail(function () {
                    //alert('Search result not found!');
            });
        });

        $("#motifs_ecarts_{{$collaboration_id}}").change(function(e){

            e.preventDefault();
            var collaboration_id = $("#collaboration_id_{{$collaboration_id}}").val();
            var ecarts_from = $("#ecarts_from_{{$collaboration_id}}").val();
            var motifs = $("#motifs_ecarts_{{$collaboration_id}}").val();
            $.ajax({
                url: '{{ route("ecarts.datefilter_to") }}',
                method: 'POST',
                dataType: 'json',
                data: {
                    'collaboration_id': collaboration_id,
                    'ecarts_from': ecarts_from,

                    'motifs': motifs,
                    "_token": "{{ csrf_token() }}"
                },
            }).done(function (data) {

                $('.ecarts_main_{{ $collaboration_id }}').hide();
                $('.ecarts_ajax_to_{{ $collaboration_id }}').html(data);
            }).fail(function () {
                    //alert('Search result not found!');
            });
        });


</script>


<script>
        $(".calender-task-btn_{{ $collaboration_id }}").click(function () {
            if ($(".calendar-container_{{$collaboration_id}}:visible").length) {
                $(".calendar-container_{{$collaboration_id}}").hide();
                $(".task-container_{{$collaboration_id}}").show();
                $(".calender-task-btn_{{ $collaboration_id }} img").attr("src", "{{ asset('public/assets/img/icons/blue-calendar-white.png')}}");
                $("#novelle-btn_{{ $collaboration_id }}").show();
                $("#absences-and-deviations .min-height-scroll").height(300);


                $(".list_abs_{{$collaboration_id}}").show();
                $(".cale_abs_{{$collaboration_id}}").hide();

            } else {
                $(".calendar-container_{{$collaboration_id}}").show();
                $(".task-container_{{$collaboration_id}}").hide();
                $(".calender-task-btn_{{ $collaboration_id }} img").attr("src", "{{ asset('public/assets/img/icons/list.png')}}");
                $("#novelle-btn_{{ $collaboration_id }}").hide();
                $("#absences-and-deviations .min-height-scroll").height(427);

                $(".cale_abs_{{$collaboration_id}}").show();
                $(".list_abs_{{$collaboration_id}}").hide();

                $("#calendar_{{$collaboration_id}}").html('');
                var date = new Date();
                var d = date.getDate();
                var m = date.getMonth();
                var y = date.getFullYear();




                /* initialize the calendar
                -----------------------------------------------------------------*/

                var calendar = $('#calendar_{{$collaboration_id}}').fullCalendar({
                    headerToolbar: {
                        left: 'title',
                        center: 'agendaDay,agendaWeek,month',
                        right: 'prev,next today'
                    },

                    eventRender: function (event, element, view) {
                        event.allDay = true;

                    },
                    nowIndicator: true,
                    editable: true,
                    firstDay: 1, //  1(Monday) this can be changed to 0(Sunday) for the USA system
                    selectable: true,
                    defaultView: 'month',
                    initialView: 'dayGridMonth',
                    dayMaxEvents: true,
                    navLinks: true,
                    editable: true,
                    droppable: true,
                    selectable: true,


                    events: [
                        @php
                            foreach ($absences as $abs)
                            {
                                @endphp
                                {
                                    title: '<?php echo $abs->motif; ?>',
                                    start: '<?php echo $abs->debut_date;?>',
                                    end: '<?php echo $abs->fin_date; ?>',

                                    allDay: true,
                                    className: 'important'
                                },
                                @php
                            }
                        @endphp
                    ],
                });

            }
        });
        calendar.render();
</script>
<script>
    $(document).ready(function() {

        $("#contract_type").change(function() {

        var el =this.value;

        if(el === "Permanente" )
        {
            $("#sub_contracts").append("   <option value='CDD'>CDD</option>");
            $("#sub_contracts").append("   <option value='Alternance'>Alternance</option>");
            $("#sub_contracts").append("   <option value='Professionnalisation'>Professionnalisation</option>");
        }
        else if(el === "Temporaire" )
        {
            $("#sub_contracts option:last-child").remove() ;
            $("#sub_contracts option:last-child").remove() ;
            $("#sub_contracts option:last-child").remove() ;
        }
    });

});
</script>





<script>
CKEDITOR.replace( 'editor_{{$collaboration_id}}' );
</script>




<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js"></script>


<script>
    // setup

    const data = {

        labels: [
                @php
                    foreach ($interventions_success as $inter_success)
                    {
                    @endphp
                        '<?php echo $inter_success->month_name;?>',
                    @php
                    }
                @endphp
        ],

        datasets: [{

            label: 'INTERVENTIONS REUSSITES',
            data: [
                    @php
                        foreach ($interventions_success as $inter_success)
                        {
                        @endphp
                            '<?php echo $inter_success->count;?>',
                        @php
                        }
                    @endphp
            ],
            backgroundColor: ['rgba(39,194,145,1)'],
            borderColor: ['rgba(75, 192, 192, 1)'],

            borderWidth: 1,
            borderSkipped :false
        },
        {
            label: 'INTERVENTIONS NON REUSSITES',
            data: [
                    @php
                        foreach ($interventions_ko as $inter_ko)
                        {
                        @endphp
                            '<?php echo "-";echo $inter_ko->count;?>',
                        @php
                        }
                    @endphp
            ],
            backgroundColor: ['rgba(247, 97, 125, 1)' ],
            borderColor: ['rgba(255, 26, 104, 1)' ],
            borderWidth: 1,
            borderSkipped :false
        }]
    };

    // config
    const config = {
      type: 'bar',
      data,
      options: {

        scales: {
          x: {
            stacked:true,
            position: 'bottom'
          },
          y: {
            beginAtZero: true
          }
        }
      }
    };

    // render init block
    const myChart = new Chart(
      document.getElementById('nombre-agence_{{ $collaboration_id }}'),
      config
    );

</script>

<script type="text/javascript">

$(document).ready(function() {
    var d = new Date();
    var month = d.getMonth() + 1;

    var year = d.getFullYear();

    // $("#satistiques_month_{{$collaboration_id}}").val(month);
    $("#satistiques_year_{{$collaboration_id}}").val(year);

});
        $(document).on('change', '#satistiques_year_{{$collaboration_id}}', function (e) {


            var year = $('#satistiques_year_{{$collaboration_id}}').val();

            var dataString = $("#satistiques_from_{{$collaboration_id}}").serialize();

            var collaboration_id = $("#collaboration_id_{{$collaboration_id}}").val();
            e.preventDefault();
            $.ajax({
                    url: '{{route("collabotation.satistiques_search")}}',
                    method: 'GET',
                    dataType: 'json',
                    data: dataString+"&"+"year=" + year+ "&" +"collaboration_id=" + collaboration_id,
                }).done(function (data) {

                    updateChart(data);


                }).fail(function () {
                    alert('Search result not found!');
                });

            });

        $("#satistiques_month_{{$collaboration_id}}").change(function(e) {
            var dataString = $("#satistiques_from_{{$collaboration_id}}").serialize();

            var month = $('#satistiques_month_{{$collaboration_id}}').val();

            var collaboration_id = $("#collaboration_id_{{$collaboration_id}}").val();
            e.preventDefault();
            $.ajax({
                    url: '{{route("collabotation.satistiques_search")}}',
                    method: 'GET',
                    dataType: 'json',
                    data: dataString+"&"+"month=" + month+ "&" +"collaboration_id=" + collaboration_id,
                }).done(function (data) {
                    updateChart(data);
                }).fail(function () {
                    alert('Search result not found!');
                });

        });

        function removeDataset(chart) {
             chart.data.labels = [];
             chart.data.datasets = [];
        };
        function updateChart(data){

            removeDataset(myChart);

            myChart.data.labels.pop();
            myChart.data.datasets.pop();

            var success_counts = data.data.interventions_success.map(d => d.count);
            var ko_counts = data.data.interventions_ko.map(d => '-'+d.count);

            var success_months = data.data.interventions_success.map(d => d.month_name);

            myChart.data.labels.push(success_months);

            myChart.data.datasets.push({

                label: 'INTERVENTIONS REUSSITES',
                data: success_counts,
                backgroundColor: ['rgba(39,194,145,1)'],
                borderColor: ['rgba(75, 192, 192, 1)'],

                borderWidth: 1,
                borderSkipped :false

                },{
                label: 'INTERVENTIONS NON REUSSITES',
                data: ko_counts,
                backgroundColor: ['rgba(247, 97, 125, 1)' ],
                borderColor: ['rgba(255, 26, 104, 1)' ],
                borderWidth: 1,
                borderSkipped :false

            });




            myChart.update();

        }
</script>


<script>


    $(".materiel_{{ $collaboration_id }}").click(function () {
        var users = [];
        $.each($("input[name='selected_materiel']:checked"), function () {
            users.push($(this).val());
        });
        var selected_materiel = users.join(",");
        var collaboration_id = '{{$collaboration_id}}';


        var url = "{{url('collaboration/dotation/materielExport/' . $collaboration_id .'?ids=')}}"+selected_materiel;

        if (selected_materiel.length > 0) {
                    //Send ajax request for showing emails.
                    $.ajax({
                        url: "{{url('collaboration/dotation/materielExport/' . $collaboration_id)}}",
                        method: 'GET',
                        data: {
                            'ids': selected_materiel,

                        },
                    }).done(function (data) {
                        window.open(url, '_blank');
                    }).fail(function () {

                    });
                } else {
                    $.alert({
                        title: 'Alert!',
                        content: 'Please check at least one Matériel',
                    });
                }
    });

    $(".informatique_{{ $collaboration_id }}").click(function () {
        var users = [];
        $.each($("input[name='selected_informatique']:checked"), function () {
            users.push($(this).val());
        });
        var selected_informatique = users.join(",");
        var collaboration_id = '{{$collaboration_id}}';


        var url = "{{url('collaboration/dotation/vehiculeExport/' . $collaboration_id .'?ids=')}}"+selected_informatique;

        if (selected_informatique.length > 0) {
                    //Send ajax request for showing emails.
                    $.ajax({
                        url: "{{ url('collaboration/dotation/vehiculeExport/' . $collaboration_id) }}",
                        method: 'GET',
                        data: {
                            'ids': selected_informatique,

                        },
                    }).done(function (data) {
                        window.open(url, '_blank');
                    }).fail(function () {

                    });
                } else {
                    $.alert({
                        title: 'Alert!',
                        content: 'Please check at least one Informatique',
                    });
                }
    });


    $(".vehicule_{{ $collaboration_id }}").click(function () {
        var users = [];
        $.each($("input[name='selected_vehicle']:checked"), function () {
            users.push($(this).val());
        });
        var selected_vehicle = users.join(",");
        var collaboration_id = '{{$collaboration_id}}';


        var url = "{{url('collaboration/dotation/vehiculeExport/' . $collaboration_id .'?ids=')}}"+selected_vehicle;

        if (selected_vehicle.length > 0) {
                    //Send ajax request for showing emails.
                    $.ajax({
                        url: "{{ url('collaboration/dotation/vehiculeExport/' . $collaboration_id) }}",
                        method: 'GET',
                        data: {
                            'ids': selected_vehicle,

                        },
                    }).done(function (data) {
                        window.open(url, '_blank');
                    }).fail(function () {

                    });
                } else {
                    $.alert({
                        title: 'Alert!',
                        content: 'Please check at least one Informatique',
                    });
                }
    });
</script>


<script>
    $(".btn_formation_edit_{{$collaboration_id}}").click(function(e){


        e.preventDefault();

        var collaboration_id = $('#collaboration_id_{{$collaboration_id}}').val();
        var formation_name = $('#formation_name_{{$collaboration_id}}').val();
        var date_obtention = $('#date_obtention_{{$collaboration_id}}').val();
        var end_date = $('#end_date_{{$collaboration_id}}').val();

        var permis_b = $('input[name="permis_b"]:checked', '#formation_form').val();
        var permis_eb = $('input[name="permis_eb"]:checked', '#formation_form').val();
        var permis_c = $('input[name="permis_c"]:checked', '#formation_form').val();
        var permis_ec = $('input[name="permis_ec"]:checked', '#formation_form').val();

        var img1_name = $('#img1_name').val();
        var img1 = $('#img1').prop('files')[0];

        var img2_name = $('#img2_name').val();
        var img2 = $('#img2').prop('files')[0];

        var img3_name = $('#img3_name').val();
        var img3 = $('#img3').prop('files')[0];

        var img4_name = $('#img4_name').val();
        var img4 = $('#img4').prop('files')[0];

        if(formation_name !='' && date_obtention !='' &&  end_date !='')
        {
            var form_data = new FormData();

            form_data.append('collaboration_id', collaboration_id);
            form_data.append('formation_name', formation_name);
            form_data.append('date_obtention', date_obtention);
            form_data.append('end_date', end_date);
            form_data.append('permis_b', permis_b);
            form_data.append('permis_eb', permis_eb);
            form_data.append('permis_c', permis_c);
            form_data.append('permis_ec', permis_ec);

            form_data.append('img1', img1);
            form_data.append('img1_name', img1_name);

            form_data.append('img2', img2);
            form_data.append('img2_name', img2_name);

            form_data.append('img3', img3);
            form_data.append('img3_name', img3_name);

            form_data.append('img4', img4);
            form_data.append('img4_name', img4_name);



                $.ajax({
                    type:'POST',
                    url: "{{  route('collabotation.formations')}}",
                    // data: $('#absences_form_{{$collaboration_id}}').serialize(),
                    data:  form_data,
                    cache:false,
                    contentType: false,
                    processData: false,
                    dataType:'json',
                    success: function(data){


                        $("#formation_employee-confirmation-register-modal_{{ $collaboration_id }}").modal('show');
                        $('.formation_noms_{{$collaboration_id}}').html(data.dates);

                    },
                    error: function(data){
                        console.log(data);
                        $("#formation_employee-confirmation-register-modal_{{ $collaboration_id }}").modal('show');
                        $('.formation_noms_{{$collaboration_id}}').html(data.dates);
                    }
                });
        }
        else
        {
            $.confirm({
                    title: 'Avertissement !',
                    content: 'veuillez entrer des entrées valides',
                    buttons: {
                        cancel: function () {
                            //$.alert('You are safe!');
                        }
                    }
                });
        }


    });

    $(".close2_{{$collaboration_id}}").click(function(){
            $("#employee-confirmation-register-modal_{{ $collaboration_id }}").modal('hide');
            $('.modal-backdrop').remove();
            window.location.reload();

        });
</script>



<script>

$('#nni_{{$collaboration_id}}').on('input', function () {
  if (!/[a-z]$/.test(this.value)) {
    this.value = this.value.slice(0, -1);
  }
});


            $(".btn_contact_edit_{{$collaboration_id}}").click(function(e){

                e.preventDefault();

                var collaboration_id = $('#collaboration_id_{{$collaboration_id}}').val();
                var poste = $('#poste_{{$collaboration_id}}').val();
                var contract_type = $('#contract_type').val();
                var sub_contract_type = $('#sub_contracts').val();
                var habilitation = $('#habilitation_{{$collaboration_id}}').val();

                var agence = $('#agence_{{$collaboration_id}}').val();
                var nni = $('#nni_{{$collaboration_id}}').val();

                var end_date_authorization = $('#end_date_authorization_{{$collaboration_id}}').val();
                var gross_hourly_rate = $('#gross_hourly_rate_{{$collaboration_id}}').val();
                var gross_monthly_salary = $('#gross_monthly_salary_{{$collaboration_id}}').val();
                var benefits_kind = $('#benefits_kind_{{$collaboration_id}}').val();
                var situation_before_hiring = $('#situation_before_hiring_{{$collaboration_id}}').val();
                var diploma = $('#diploma_{{$collaboration_id}}').val();
                var team_lead_id = $('#team_lead_id_{{$collaboration_id}}').val();

                var construction_card = $('input[name="construction_card"]:checked', '#contact_form').val();




                if(agence !='' && nni !='')
                {


                        var form_data = new FormData();

                        form_data.append('collaboration_id', collaboration_id);
                        form_data.append('poste', poste);
                        form_data.append('contract_type', contract_type);
                        form_data.append('sub_contract_type', sub_contract_type);
                        form_data.append('habilitation', habilitation);
                        form_data.append('agence', agence);
                        form_data.append('nni', nni);

                        form_data.append('end_date_authorization', end_date_authorization);
                        form_data.append('gross_hourly_rate', gross_hourly_rate);
                        form_data.append('gross_monthly_salary', gross_monthly_salary);
                        form_data.append('benefits_kind', benefits_kind);
                        form_data.append('situation_before_hiring', situation_before_hiring);
                        form_data.append('diploma', diploma);
                        form_data.append('team_lead_id', team_lead_id);
                        form_data.append('construction_card', construction_card);


                        $.ajax({
                            type:'POST',
                            url: "{{  route('collabotation.contact')}}",
                            // data: $('#absences_form_{{$collaboration_id}}').serialize(),
                            data:  form_data,
                            cache:false,
                            contentType: false,
                            processData: false,
                            dataType:'json',
                            success: function(data){


                                $("#employee-confirmation-register-modal_{{ $collaboration_id }}").modal('show');


                            },
                            error: function(data){
                                $("#employee-confirmation-register-modal_{{ $collaboration_id }}").modal('show');
                            }
                        });
                }else
                {
                        $.confirm({
                            title: 'Avertissement !',
                            content: 'veuillez entrer des entrées valides',
                            buttons: {
                                cancel: function () {
                                    //$.alert('You are safe!');
                                }
                            }
                        });
                }

            });


</script>

<div class="modal fade employee-confirmation-register-modal show" id="formation_employee-confirmation-register-modal_{{ $collaboration_id }}" tabindex="-1" aria-labelledby="exampleModalLabel" style="padding-left: 5px;" aria-modal="true" role="dialog" >
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12 col-sm-12 text-center">
                        <p class="employee-confirmation-profile-container">
                            <img src="{{ asset('public/assets/img/employee-confirmation-profile.png')}}">
                            <i class="fa fa-check fa-3x" aria-hidden="true"></i>
                        </p>
                        <p class="tx-16 black-text font-weight-bold employee-confirmation-title-cust ">"<span class="formation_noms_{{$collaboration_id}}"> </span> " !</p>
                        <p class="employee-confirm-para-cust">Etes-vous sûr de supprimer la formation "<span class="formation_noms_{{$collaboration_id}}"> </span>" pour John Doe ?</p>
                        <button class="btn btn-lightblue mt-3 close2_{{$collaboration_id}}"  data-dismiss="modal">OK</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="modal fade employee-confirmation-register-modal show" id="employee-confirmation-register-modal_{{ $collaboration_id }}" tabindex="-1" aria-labelledby="exampleModalLabel" style="padding-left: 5px;" aria-modal="true" role="dialog" >
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12 col-sm-12 text-center">
                        <p class="employee-confirmation-profile-container">
                            <img src="{{ asset('public/assets/img/employee-confirmation-profile.png')}}">
                            <i class="fa fa-check fa-3x" aria-hidden="true"></i>
                        </p>

                        <p class="employee-confirm-para-cust">Contract Modifie !</p>
                        <button class="btn btn-lightblue mt-3 close2_{{$collaboration_id}}"  data-dismiss="modal">OK</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade employee-confirmation-register-modal show" id="dotation_employee-confirmation-register-modal_{{ $collaboration_id }}" tabindex="-1" aria-labelledby="exampleModalLabel" style="padding-left: 5px;" aria-modal="true" role="dialog" >
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12 col-sm-12 text-center">
                        <p class="employee-confirmation-profile-container">
                            <img src="{{ asset('public/assets/img/employee-confirmation-profile.png')}}">
                            <i class="fa fa-check fa-3x" aria-hidden="true"></i>
                        </p>
                        <p class="tx-16 black-text font-weight-bold employee-confirmation-title-cust">"<span class="dotation_noms_{{$collaboration_id}}"></span>" !</p>
                        <p class="employee-confirm-para-cust">Etes-vous sûr de supprimer la dotation "<span class="dotation_noms_{{$collaboration_id}}"></span>" pour John Doe ?</p>
                        <button class="btn btn-lightblue mt-3 close2_{{$collaboration_id}}"  data-dismiss="modal">OK</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<script src="https://unpkg.com/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // basic


    // search
    dselect(document.querySelector('#team_lead_id_{{$collaboration_id}}'), {
      search: true
    })

    // Validation
    // Enable dselect on all '.dselect'
    for (const el of document.querySelectorAll('.dselect')) {
      dselect(el)
    }
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    void (function() {
      document.querySelectorAll('.needs-validation').forEach(form => {
        form.addEventListener('submit', event => {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }

          form.classList.add('was-validated')
        })
      })
    })()

  </script>

