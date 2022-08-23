<meta name="csrf-token" content="{{ csrf_token() }}">
@php
    $url_get = Request::segment(3);

    $url = "données_personelles";
    $url1 = "formations";
    $url2 = "general";
    $url3 = "contact";
    $url4 = "dotation";

    $collaboration_id = Request::segment(2);
@endphp

@if ($url_get == $url || $url_get == $url1 || $url_get == $url2 || $url_get == $url3 || $url_get == $url4)
    <script type="text/javascript">
        $(window).on('load', function() {
            $('#add-technician-modal').modal('show');
        });
    </script>
@endif

<div class="modal fade add-technician-modal" id="add-technician-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <ul class="nav nav-tabs text-center" id="myTab" role="tablist">


            <li class="nav-item">
                <a class="nav-link {{$url_get == NULL ? 'active' : ''}} {{$url_get == 'general' ? 'active' : ''}}" id="general-tab" data-toggle="tab" href="#general" role="tab" aria-controls="general" aria-selected="false">Général</a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{$url_get == 'données_personelles' ? 'active' : ''}}" id="personal-date-tab" data-toggle="tab" href="#personal-data" role="tab" aria-controls="personal-data" aria-selected="false">Données personelles</a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{$url_get == 'formations' ? 'active' : ''}}" id="training-tab" data-toggle="tab" href="#training" role="tab" aria-controls="training" aria-selected="false">Formations</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{$url_get == 'dotation' ? 'active' : ''}}" id="endowment-tab" data-toggle="tab" href="#endowment" role="tab" aria-controls="endowment" aria-selected="true">Dotation</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="statistics-tab" data-toggle="tab" href="#statistics" role="tab" aria-controls="statistics" aria-selected="false">Statistiques</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="absences-and-deviations-tab" data-toggle="tab" href="#absences-and-deviations" role="tab" aria-controls="absences-and-deviations" aria-selected="true">Absences &amp; Ecarts</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{$url_get == 'contact' ? 'active' : ''}}" id="contract-tab" data-toggle="tab" href="#contract" role="tab" aria-controls="contract" aria-selected="false">Contrat</a>
            </li>
          </ul>
        </div>
        <div class="modal-body">
              <div class="tab-content">

                {{-- General Tab start --}}
                <div class="tab-pane {{$url_get == NULL ? 'active' : ''}} {{$url_get == 'general' ? 'active' : ''}}" id="general" role="tabpanel" aria-labelledby="general-tab">

                    @if (!empty($general->id))
                        <form method="post" action="{{route('collabotation.general_edit')}}" enctype="multipart/form-data">
                            <input type="hidden" name="collaboration_id" value="{{$general->id}}">
                    @else
                        <form method="post" action="{{route('collabotation.general')}}" enctype="multipart/form-data">
                    @endif

                    @csrf
                        <div class="row min-height-scroll">
                            <div class="col-lg-4 col-sm-4 px-4">
                                <div class="form-group">
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
                                                <img id="imgPreview" src="{{ asset('public/uploads/profile_images/'.$general->profile_img)}}">
                                                <input type="hidden" value="{{$general->profile_img}}" name="profile_img">
                                            @else
                                                <img id="imgPreview" src="{{ asset('public/assets/img/icons/file-upload.png')}}">
                                            @endif
                                        </i>
                                 </div>
                                <input type="file" name="profile_img" id="photo" class="hide-file-input">
                                </div>
                                <div class="form-group">
                                <label>Nom</label>
                                <input type="text" name="nom" class="form-control" placeholder="Nom" value="{{ (!empty($general->nom)) ? $general->nom:''; }}">
                            </div>
                            <div class="form-group">
                                <label>Prénom</label>
                                <input type="text" name="prénom" class="form-control" placeholder="Prénom" value="{{ (!empty($general->prenom)) ? $general->prenom:''; }}">
                            </div>
                            <div class="form-group">
                                <label>Login</label>
                                <input type="text" name="login" class="form-control" placeholder="Login" value="{{ (!empty($general->login)) ? $general->login:'';  }}">
                            </div>
                            </div>
                            <div class="col-lg-4 col-sm-4 px-4">
                                <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control" placeholder="xxxxxxxxxxxx@xxxxxxxx.xx" value="{{ (!empty($general->email)) ? $general->email:''; }}">
                            </div>
                            <div class="form-group">
                                <label>Mot de passe</label>
                                <input type="password" name="mot_de_passe" class="form-control" value="{{ (!empty($general->mot_de_passe)) ? $general->mot_de_passe:''; }}">
                            </div>
                            <div class="form-group">
                                <label>Confirmer mot de passe</label>
                                <input type="password" name="confirmer_mot_de_passe" class="form-control" value="{{ (!empty($general->confirmer_mot_de_passe)) ? $general->confirmer_mot_de_passe:''; }}">
                            </div>
                            <div class="form-group">
                                <label>Adresse</label>
                                <input type="text" name="adresse" class="form-control" placeholder="Adresse" value="{{ (!empty($general->adresse)) ? $general->adresse:'';  }}">
                            </div>
                            <div class="form-group">
                                <label>Complément d'adresse</label>
                                <input type="text" name="complément_d_adresse" class="form-control" placeholder="Complément d'adresse" value="{{ (!empty($general->complément_d_adresse)) ? $general->complément_d_adresse:''; }}">
                            </div>
                            <div class="row">
                                <div class="col-lg-5 col-sm-5">
                                    <div class="form-group">
                                        <label>Code postal</label>
                                        <input type="text" name="code_postal" class="form-control" placeholder="Code postal" value="{{ (!empty($general->code_postal)) ? $general->code_postal:''; }}">
                                    </div>
                                </div>
                                <div class="col-lg-7 col-sm-7">
                                    <div class="form-group">
                                        <label>Ville</label>
                                        <select class="form-control" name="ville">
                                            @if (!empty($general->id))
                                                <option value="" {{ $general->ville == '' ? 'selected':'' }}>SELECT</option>
                                                <option value="Ville" {{ $general->ville == 'Ville' ? 'selected':'' }}>Ville</option>
                                                <option value="Ville1" {{ $general->ville == 'Ville1' ? 'selected':'' }}>Ville1</option>
                                            @else
                                                <option value="">SELECT</option>
                                                <option value="Ville">Ville</option>
                                                <option value="Ville1">Ville1</option>
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
                                        <input type="text" name="téléphone" class="form-control" placeholder="telephone" value="{{ (!empty($general->telephone)) ? $general->code_postal:'';  }}">
                                    </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                        <label>Portable</label>
                                        <input type="text" name="portable" class="form-control" placeholder="Portable" value="{{ (!empty($general->portable)) ? $general->portable:''; }}">
                                    </div>
                                    </div>
                                </div>
                            <div class="form-group">
                                <label>Numéro de sécurilé sociale</label>
                                <input type="text" name="numero_de_securile_sociale" class="form-control" placeholder="Numéro de sécurilé sociale" value="{{ (!empty($general->numero_de_securile_sociale)) ? $general->numero_de_securile_sociale:'';  }}">
                            </div>
                            <div class="form-group">
                                <label>Lorem Ipsum</label>
                                <input type="text" name="" class="form-control" placeholder="Lorem Ipsum">
                            </div>
                            <div class="form-group">
                                <label>Lorem Ipsum</label>
                                <input type="text" name="" class="form-control" placeholder="Lorem Ipsum">
                            </div>
                            <div class="form-group">
                                <label>Lorem Ipsum</label>
                                <input type="text" name="" class="form-control" placeholder="Lorem Ipsum">
                            </div>
                            <div class="form-group">
                                <label>Lorem Ipsum</label>
                                <input type="text" name="" class="form-control" placeholder="Lorem Ipsum">
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-sm-12 mt-2">
                                @if (!empty($general->id))
                                    <button class="btn btn-lightblue float-right" type="submit">Éditer</button>
                                @else
                                    <button class="btn btn-lightblue float-right" type="submit">Enregistrer</button>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
                {{-- General Tab End --}}

                {{-- Personal Data Tab start --}}
                <div class="tab-pane {{$url_get == 'données_personelles' ? 'active' : ''}}" id="personal-data" role="tabpanel" aria-labelledby="personal-date-tab">
                    @if (!empty($personal_data->id))
                        <form method="post" action="{{route('collabotation.donnees_personelles_edit')}}" enctype="multipart/form-data">
                    @else
                        <form method="post" action="{{route('collabotation.donnees_personelles')}}" enctype="multipart/form-data">
                    @endif
                    @csrf

                        <input type="hidden" name="collaboration_id" value="{{$collaboration_id}}">
                        <div class="row min-height-scroll">
                            <div class="col-lg-4 col-sm-4 px-4">
                                <div class="form-group">
                                    <label>Numéro INSEE/ Sécurité sociale</label>
                                    <input type="text" name="social_security_number" class="form-control" placeholder="Social security number " value="{{ (!empty($personal_data->social_security_number)) ? $personal_data->social_security_number:'';  }}">
                                </div>
                            </div>

                            <div class="col-lg-4 col-sm-4 px-4">
                                <div class="form-group">
                                    <label>Groupe Sanguin</label>


                                    <select class="form-control" name="groupe_sanguin">
                                        @if (!empty($personal_data->id))
                                            <option value="" {{ $personal_data->groupe_sanguin == '' ? 'selected':'' }}>SELECT</option>
                                            <option value="A+" {{ $personal_data->groupe_sanguin == 'A+' ? 'selected':'' }}>A+</option>
                                            <option value="A-" {{ $personal_data->groupe_sanguin == 'A-' ? 'selected':'' }}>A-</option>

                                            <option value="B+" {{ $personal_data->groupe_sanguin == 'B+' ? 'selected':'' }}>B+</option>
                                            <option value="B-" {{ $personal_data->groupe_sanguin == 'B-' ? 'selected':'' }}>B-</option>

                                            <option value="O+" {{ $personal_data->groupe_sanguin == 'O+' ? 'selected':'' }}>O+</option>
                                            <option value="O-" {{ $personal_data->groupe_sanguin == 'O-' ? 'selected':'' }}>O-</option>

                                            <option value="AB+" {{ $personal_data->groupe_sanguin == 'AB+' ? 'selected':'' }}>AB+</option>
                                            <option value="AB-" {{ $personal_data->groupe_sanguin == 'AB-' ? 'selected':'' }}>AB-</option>

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
                                    <input type="text" name="nom" class="form-control" placeholder="Nom personne à joindre en cas de pb" value="{{ (!empty($personal_data->nom)) ? $personal_data->nom:'';  }}">
                                </div>
                            </div>

                            <div class="col-lg-4 col-sm-4 px-4">
                                <div class="form-group">
                                    <label>Prénom personne à joindre en cas de pb</label>
                                    <input type="text" name="prenom" class="form-control" placeholder="Prénom personne à joindre en cas de pb" value="{{ (!empty($personal_data->prenom)) ? $personal_data->prenom:'';  }}">
                                </div>
                            </div>

                            <div class="col-lg-4 col-sm-4 px-4">
                                <div class="form-group">
                                    <label>Contact personne à joindre en cas de pb</label>
                                    <input type="text" name="contact" class="form-control" placeholder="Contact personne à joindre en cas de pb" value="{{ (!empty($personal_data->contact)) ? $personal_data->contact:'';  }}">
                                </div>
                            </div>

                            <div class="col-lg-4 col-sm-4 px-4">
                                <div class="form-group">
                                    <label>Mutuelle Statut</label>
                                    <select class="form-control" name="mutuelle_status">
                                        @if (!empty($personal_data->id))
                                            <option value="" {{ $personal_data->mutuelle_status == '' ? 'selected':'' }}>SELECT</option>
                                            <option value="Isolé" {{ $personal_data->mutuelle_status == 'Isolé' ? 'selected':'' }}>Isolé</option>
                                            <option value="Couple" {{ $personal_data->mutuelle_status == 'Couple' ? 'selected':'' }}>Couple</option>
                                            <option value="Famille" {{ $personal_data->mutuelle_status == 'Famille' ? 'selected':'' }}>Famille</option>
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
                                            <option value="" {{ $personal_data->adults_insurance == '' ? 'selected':'' }}>SELECT</option>
                                            <option value="1" {{ $personal_data->adults_insurance == '1' ? 'selected':'' }}>1</option>
                                            <option value="2" {{ $personal_data->adults_insurance == '2' ? 'selected':'' }}>2</option>
                                            <option value="3" {{ $personal_data->adults_insurance == '3' ? 'selected':'' }}>3</option>
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
                                            <option value="" {{ $personal_data->children_insurance == '' ? 'selected':'' }}>SELECT</option>
                                            <option value="1" {{ $personal_data->children_insurance == '1' ? 'selected':'' }}>1</option>
                                            <option value="2" {{ $personal_data->children_insurance == '2' ? 'selected':'' }}>2</option>
                                            <option value="3" {{ $personal_data->children_insurance == '3' ? 'selected':'' }}>3</option>
                                            <option value="4" {{ $personal_data->children_insurance == '4' ? 'selected':'' }}>4</option>
                                            <option value="5" {{ $personal_data->children_insurance == '5' ? 'selected':'' }}>5</option>
                                            <option value="6" {{ $personal_data->children_insurance == '6' ? 'selected':'' }}>6</option>
                                            <option value="7" {{ $personal_data->children_insurance == '7' ? 'selected':'' }}>7</option>
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
                                    <input type="text" name="antecedent_medicaux" class="form-control" placeholder="Antecedent Medicaux" value="{{ (!empty($personal_data->antecedent_medicaux)) ? $personal_data->antecedent_medicaux:'';  }}">
                                </div>
                            </div>

                            <div class="col-lg-4 col-sm-4 px-4">
                                <div class="form-group">
                                    <label>Taille T-Shirt</label>
                                    <select class="form-control" name="taille_tShirt">
                                        @if (!empty($personal_data->id))
                                            <option value="" {{ $personal_data->taille_tShirt == '' ? 'selected':'' }}>SELECT</option>
                                            <option value="S" {{ $personal_data->taille_tShirt == 'S' ? 'selected':'' }}>S</option>
                                            <option value="M" {{ $personal_data->taille_tShirt == 'M' ? 'selected':'' }}>M</option>
                                            <option value="L" {{ $personal_data->taille_tShirt == 'L' ? 'selected':'' }}>L</option>
                                            <option value="XL" {{ $personal_data->taille_tShirt == 'XL' ? 'selected':'' }}>XL</option>
                                            <option value="XXL" {{ $personal_data->taille_tShirt == 'XXL' ? 'selected':'' }}>XXL</option>
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
                                            <option value="" {{ $personal_data->taille_pantalon == '' ? 'selected':'' }}>SELECT</option>
                                            <option value="S" {{ $personal_data->taille_pantalon == 'S' ? 'selected':'' }}>S</option>
                                            <option value="M" {{ $personal_data->taille_pantalon == 'M' ? 'selected':'' }}>M</option>
                                            <option value="L" {{ $personal_data->taille_pantalon == 'L' ? 'selected':'' }}>L</option>
                                            <option value="XL" {{ $personal_data->taille_pantalon == 'XL' ? 'selected':'' }}>XL</option>
                                            <option value="XXL" {{ $personal_data->taille_pantalon == 'XXL' ? 'selected':'' }}>XXL</option>
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
                                            <option value="" {{ $personal_data->taille_chaussures == '' ? 'selected':'' }}>SELECT</option>
                                            <option value="41" {{ $personal_data->taille_chaussures == '41' ? 'selected':'' }}>41</option>
                                            <option value="42" {{ $personal_data->taille_chaussures == '42' ? 'selected':'' }}>42</option>
                                            <option value="43" {{ $personal_data->taille_chaussures == '43' ? 'selected':'' }}>43</option>
                                            <option value="44" {{ $personal_data->taille_chaussures == '44' ? 'selected':'' }}>44</option>
                                            <option value="45" {{ $personal_data->taille_chaussures == '45' ? 'selected':'' }}>45</option>
                                            <option value="46" {{ $personal_data->taille_chaussures == '46' ? 'selected':'' }}>46</option>
                                            <option value="47" {{ $personal_data->taille_chaussures == '47' ? 'selected':'' }}>47</option>

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
                                            <option value="" {{ $personal_data->taille_veste == '' ? 'selected':'' }}>SELECT</option>
                                            <option value="S" {{ $personal_data->taille_veste == 'S' ? 'selected':'' }}>S</option>
                                            <option value="M" {{ $personal_data->taille_veste == 'M' ? 'selected':'' }}>M</option>
                                            <option value="L" {{ $personal_data->taille_veste == 'L' ? 'selected':'' }}>L</option>
                                            <option value="XL" {{ $personal_data->taille_veste == 'XL' ? 'selected':'' }}>XL</option>
                                            <option value="XXL" {{ $personal_data->taille_veste == 'XXL' ? 'selected':'' }}>XXL</option>
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
                                            <option value="" {{ $personal_data->taille_parka == '' ? 'selected':'' }}>SELECT</option>
                                            <option value="S" {{ $personal_data->taille_parka == 'S' ? 'selected':'' }}>S</option>
                                            <option value="M" {{ $personal_data->taille_parka == 'M' ? 'selected':'' }}>M</option>
                                            <option value="L" {{ $personal_data->taille_parka == 'L' ? 'selected':'' }}>L</option>
                                            <option value="XL" {{ $personal_data->taille_parka == 'XL' ? 'selected':'' }}>XL</option>
                                            <option value="XXL" {{ $personal_data->taille_parka == 'XXL' ? 'selected':'' }}>XXL</option>
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
                                        <option value="" {{ $personal_data->taille_casque == '' ? 'selected':'' }}>SELECT</option>
                                            <option value="S" {{ $personal_data->taille_casque == 'S' ? 'selected':'' }}>S</option>
                                            <option value="M" {{ $personal_data->taille_casque == 'M' ? 'selected':'' }}>M</option>
                                            <option value="L" {{ $personal_data->taille_casque == 'L' ? 'selected':'' }}>L</option>
                                            <option value="XL" {{ $personal_data->taille_casque == 'XL' ? 'selected':'' }}>XL</option>
                                            <option value="XXL" {{ $personal_data->taille_casque == 'XXL' ? 'selected':'' }}>XXL</option>
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
                                    <button class="btn btn-lightblue float-right" type="submit">Éditer</button>
                                @else
                                    <button class="btn btn-lightblue float-right" type="submit">Enregistrer</button>
                                @endif

                            </div>
                        </div>
                    </form>
                </div>
                {{-- Personal Data Tab End --}}

                {{-- Trainign tab Start --}}
                <div class="tab-pane {{$url_get == 'formations' ? 'active' : ''}}" id="training" role="tabpanel" aria-labelledby="training-tab">


                    <div class="row">
                        <div class="col-lg-7 col-sm-7">
                            <div class="table-responsive box-shadow-border-radius">
                                <table class="table table-striped w-100 data-table" id="clientDataTable" style="width:100%">
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
                                    <tbody id="todo-list">

                                    @foreach ($formations as $formation)
                                        @php
                                            $img1 = (!empty($formation->img1)) ? '1':'0';
                                            $img2 = (!empty($formation->img2)) ? '1':'0';
                                            $img3 = (!empty($formation->img3)) ? '1':'0';
                                            $img4 = (!empty($formation->img4)) ? '1':'0';

                                            $img_count = $img1 +$img2 + $img3 + $img4;
                                        @endphp
                                        <tr>
                                            <td>
                                                <i class="fa fa-bell"></i>
                                            </td>
                                            <td>{{$formation->formation_name}}</td>
                                            <td>{{$img_count}}</td>
                                            <td>{{$formation->date_obtention}}</td>
                                            <td class="red-font-color">{{$formation->end_date}}</td>
                                            <td>
                                                <a href="javascript:void(0)" data-toggle="modal" data-target="#view-formation-modal_{{$formation->id}}">
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
                            {{-- <form method="post" action="{{route('collabotation.formations')}}" enctype="multipart/form-data" class="bs-form-wrapper"> --}}
                            <form id="postForm" enctype="multipart/form-data" class="bs-form-wrapper">
                                @csrf
                                <input type="hidden" name="collaboration_id" value="{{$collaboration_id}}">
                                <strong class="black-text font-weight-bold">Ajouter une formation</strong>

                                <div class="box-shadow-border-radius login-input" style="margin-top: 10px" id="skiller">
                                    <div class="row">
                                        <div class="col-lg-12 col-sm-12">
                                            <div class="form-group">
                                            <label>Nom de la formation</label>
                                            <select class="form-control" name="formation_name" id="formation_name">
                                                <option>LOREMPSUS</option>
                                                <option>LOREMPSUS2</option>
                                            </select>
                                        </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-6">
                                            <div class="form-group">
                                                <label>Date d'obtention</label>
                                                <div class="datepicker-container">
                                                    <i class="date-icon date-icon1 float-left" aria-hidden="true"></i>
                                                    <input class="form-control bar-from" type="text" placeholder="00/00/0000"  name="date_obtention" id="date_obtention"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-6">
                                            <div class="form-group">
                                                <label>Date de fin d'habilitation</label>
                                                <div class="datepicker-container">
                                                    <i class="date-icon date-icon2 float-left" aria-hidden="true"></i>
                                                    <input class="form-control bar-to" type="text" placeholder="00/00/0000"  name="end_date" id="end_date"/>
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
                                                                        <div  class="upload-bx lightgray-upload-bx">
                                                                        <img id="imgPreview1" src="{{ asset('public/assets/img/icons/plus_grey.png')}}" />

                                                                    </div>
                                                                    <input type="file" name="img1" id="img1" class="hide-file-input">
                                                                    </div>
                                                            </div>
                                                            <div class="col-lg-8 col-sm-8">
                                                                <div class="form-group mt-1">
                                                                    <label>Nom</label>
                                                                    <input type="text" class="form-control" placeholder="NOM PHOTO" name="img1_name">
                                                                    </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-4 col-sm-4">
                                                                <div class="form-group">
                                                                        <div  class="upload-bx lightgray-upload-bx">
                                                                        <img id="imgPreview2" src="{{ asset('public/assets/img/icons/plus_grey.png')}}" />
                                                                    </div>
                                                                    <input type="file" id="img2" name="img2" class="hide-file-input">
                                                                    </div>
                                                            </div>
                                                            <div class="col-lg-8 col-sm-8">
                                                                <div class="form-group mt-1">
                                                                    <label>Nom</label>
                                                                    <input type="text" class="form-control" placeholder="NOM PHOTO" name="img2_name">
                                                                    </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-4 col-sm-4">
                                                                <div class="form-group">
                                                                        <div class="upload-bx lightgray-upload-bx">
                                                                        <img id="imgPreview3" src="{{ asset('public/assets/img/icons/plus_grey.png')}}" />
                                                                    </div>
                                                                    <input type="file" id="img3" name="img3" class="hide-file-input">
                                                                    </div>
                                                            </div>
                                                            <div class="col-lg-8 col-sm-8">
                                                                <div class="form-group mt-1">
                                                                    <label>Nom</label>
                                                                    <input type="text" class="form-control" placeholder="NOM PHOTO" name="img3_name">
                                                                    </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-4 col-sm-4">
                                                                <div class="form-group">
                                                                        <div class="upload-bx lightgray-upload-bx">
                                                                        <img id="imgPreview4" src="{{ asset('public/assets/img/icons/plus_grey.png')}}" />
                                                                    </div>
                                                                    <input type="file" id="img4" name="img4" class="hide-file-input">
                                                                    </div>
                                                            </div>
                                                            <div class="col-lg-8 col-sm-8">
                                                                <div class="form-group mt-1">
                                                                    <label>Nom</label>
                                                                    <input type="text" class="form-control" placeholder="NOM PHOTO" name="img4_name">
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
                                        <button class="btn btn-lightblue float-right mr-5" id="savedata" type="submit">Ajouter la formation</button>


                                        {{-- <span class="btn btn-lightblue mr-2 btn-lightblue-another box-shadow-border-radius float-right" id="addSkill">Ajouter la formation</span> --}}
                                    </div>
                                </div>
                            </form>
                        </div>



                    </div>


                </div>
                {{-- Trainign tab End --}}


                <div class="tab-pane {{$url_get == 'dotation' ? 'active' : ''}}" id="endowment" role="tabpanel" aria-labelledby="endowment-tab">
                    <div class="row">
                        <div class="col-lg-7 col-sm-7">
                            <div class="box-shadow-border-radius another-nav-container">
                                <nav>
                                    <div class="nav nav-tabs text-center" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-equipment-tab" data-toggle="tab" href="#nav-equipment_{{$collaboration_id}}" role="tab" aria-controls="nav-equipment" aria-selected="true">Matériel</a>

                                    <a class="nav-item nav-link text-center" id="nav-profile-tab" data-toggle="tab" href="#nav-profile_{{$collaboration_id}}" role="tab" aria-controls="nav-profile" aria-selected="false">Informatique</a>

                                    <a class="nav-item nav-link text-center" id="nav-contact-tab" data-toggle="tab" href="#nav-contact_{{$collaboration_id}}" role="tab" aria-controls="nav-contact" aria-selected="false">Véhicule</a>
                                    </div>
                                    <button class="btn btn-lightblue float-right" type="submit">Exporter PDF</button>
                                </nav>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="nav-equipment_{{$collaboration_id}}" role="tabpanel" aria-labelledby="nav-equipment-tab">
                                        <div class="table-responsive">
                                            <table class="table table-striped w-100" id="clientDataTable" style="width:100%">
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
                                                    @foreach ($donation_materiels as $materiel )
                                                        @php
                                                            $img1 = (!empty($materiel->img1)) ? '1':'0';
                                                            $img2 = (!empty($materiel->img2)) ? '1':'0';
                                                            $img3 = (!empty($materiel->img3)) ? '1':'0';
                                                            $img4 = (!empty($materiel->img4)) ? '1':'0';

                                                            $img_count = $img1 +$img2 + $img3 + $img4;
                                                        @endphp
                                                        <tr>
                                                            <td>
                                                                <input type="checkbox" checked />
                                                            </td>
                                                            <td>{{$materiel->materiel_name}}</td>
                                                            <td>{{$materiel->obtained}}</td>
                                                            <td>{{$img_count}}</td>
                                                            <td>Supprimer</td>
                                                            <td>
                                                                <a href="javascript:void(0)" data-toggle="modal" data-target="#view-dotation-modal_{{$materiel->id}}">
                                                                <span class="view-color">
                                                                <i class="fa fa-eye mr-1"></i>Voir
                                                                </span>
                                                                </a>
                                                            </td>
                                                        </tr>

                                                    @include('collaboration.collaboration_dotation_materiel_list_popup')
                                                    @endforeach


                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-profile_{{$collaboration_id}}" role="tabpanel" aria-labelledby="nav-profile-tab">
                                        <div class="table-responsive">
                                            <table class="table table-striped w-100" id="clientDataTable" style="width:100%">
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
                                                    @foreach ($donation_informatique as $informatique )

                                                        @php
                                                            $img1 = (!empty($informatique->img1)) ? '1':'0';
                                                            $img2 = (!empty($informatique->img2)) ? '1':'0';
                                                            $img3 = (!empty($informatique->img3)) ? '1':'0';
                                                            $img4 = (!empty($informatique->img4)) ? '1':'0';

                                                            $img_count = $img1 +$img2 + $img3 + $img4;
                                                        @endphp
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" checked />
                                                        </td>
                                                        <td>{{$informatique->materiel_name}}</td>
                                                        <td>{{$informatique->obtained}}</td>
                                                        <td>{{$img_count}}</td>
                                                        <td>Supprimer</td>
                                                        <td>
                                                            <a href="javascript:void(0)" data-toggle="modal" data-target="#view-informatique-modal_{{$informatique->id}}">
                                                            <span class="view-color">
                                                            <i class="fa fa-eye mr-1"></i>Voir
                                                            </span>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    @include('collaboration.collaboration_dotation_informatique_list_popup')
                                                    @endforeach

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-contact_{{$collaboration_id}}" role="tabpanel" aria-labelledby="nav-contact-tab">
                                        <div class="table-responsive">
                                            <table class="table table-striped w-100" id="clientDataTable" style="width:100%">
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
                                                            $img1 = (!empty($vehicle->img1)) ? '1':'0';
                                                            $img2 = (!empty($vehicle->img2)) ? '1':'0';
                                                            $img3 = (!empty($vehicle->img3)) ? '1':'0';
                                                            $img4 = (!empty($vehicle->img4)) ? '1':'0';

                                                            $img_count = $img1 +$img2 + $img3 + $img4;
                                                        @endphp
                                                        <tr>
                                                            <td>
                                                                <input type="checkbox" checked />
                                                            </td>
                                                            <td>{{$vehicle->type_vehicle}}</td>
                                                            <td>{{$vehicle->model}}</td>
                                                            <td>{{$vehicle->obtained}}</td>
                                                            <td>{{$img_count}}</td>
                                                            <td>Supprimer</td>
                                                            <td>
                                                                <a href="javascript:void(0)" data-toggle="modal" data-target="#view-vehicle-modal_{{$vehicle->id}}">
                                                                <span class="view-color">
                                                                <i class="fa fa-eye mr-1"></i>Voir
                                                                </span>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        @include('collaboration.collaboration_dotation_vehicle_list_popup')
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-5 col-sm-5">
                                @include('collaboration.collaboration_dotation_materiel')
                        </div>

                    </div>


                </div>


                <div class="tab-pane" id="statistics" role="tabpanel" aria-labelledby="statistics-tab">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
                            <div class="row mt-3">
                                <div class="col-lg-12 col-sm-12">
                                  <label class="tx-16 black-text font-weight-bold">Satistiques d'échecs et de réussite</label>
                              </div>
                          </div>
                          <div class="row mt-3">
                              <div class="col-lg-6 col-sm-6">
                                  <label class="tx-16 font-weight-bold gray-font-color">Pas de chiffres</label>
                              </div>
                              <div class="col-lg-3 col-sm-3" style="padding: 0px 10px;">
                                  <div class="form-group mb-0" style="margin-top: -10px">
                                      <select class="form-control round-dropdown">
                                          <option>Par mois</option>
                                      </select>
                                  </div>
                              </div>
                              <div class="col-lg-3 col-sm-3" style="padding: 0px 10px;">
                                  <div class="form-group mb-0" style="margin-top: -10px">
                                      <select class="form-control round-dropdown">
                                          <option>Catte année</option>
                                      </select>
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                              <canvas id="nombre-agence" class=""></canvas>
                          </div>
                          <div class="row">
                              <div class="col-lg-12 col-sm-12">
                                  <div class="top10Legend">
                                      <ul class="1-legend">
                                          <li class="mb-2">
                                              <span style="background-color: #93f393;"></span>
                                              INTERVENTIONS REUSSITES
                                          </li>
                                          <li>
                                              <span style="background-color: #ff8282;"></span>INTERVENTIONS NON REUSSITES
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
                                              <div class="col-lg-12 col-sm-12 pr-5 mb-2 login-input login-input-green">
                                                  <p class="mb-1"><strong>13 août 2021 à 19:23 | EDO IMC-TELECOM_MISSAMOU</strong></p>
                                                  <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                              </div>
                                              <div class="col-lg-12 col-sm-12 pr-5 mb-2 login-input login-input-coffee">
                                                  <p class="mb-1"><strong>13 août 2021 à 19:23 | EDO IMC-TELECOM_MISSAMOU</strong></p>
                                                  <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                              </div>
                                              <div class="col-lg-12 col-sm-12 pr-5 mb-2 login-input login-input-red">
                                                  <p class="mb-1"><strong>13 août 2021 à 19:23 | EDO IMC-TELECOM_MISSAMOU</strong></p>
                                                  <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                              </div>
                                              <div class="col-lg-12 col-sm-12 pr-5 mb-2 login-input login-input-green">
                                                  <p class="mb-1"><strong>13 août 2021 à 19:23 | EDO IMC-TELECOM_MISSAMOU</strong></p>
                                                  <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                              </div>
                                              <div class="col-lg-12 col-sm-12 pr-5 mb-2 login-input login-input-green">
                                                  <p class="mb-1"><strong>13 août 2021 à 19:23 | EDO IMC-TELECOM_MISSAMOU</strong></p>
                                                  <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                              </div>
                                              <div class="col-lg-12 col-sm-12 pr-5 mb-2 login-input login-input-green">
                                                  <p class="mb-1"><strong>13 août 2021 à 19:23 | EDO IMC-TELECOM_MISSAMOU</strong></p>
                                                  <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                              </div>
                                              <div class="col-lg-12 col-sm-12 pr-5 mb-2 login-input login-input-green">
                                                  <p class="mb-1"><strong>13 août 2021 à 19:23 | EDO IMC-TELECOM_MISSAMOU</strong></p>
                                                  <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                              </div>
                                              <div class="col-lg-12 col-sm-12 pr-5 mb-2 login-input login-input-green">
                                                  <p class="mb-1"><strong>13 août 2021 à 19:23 | EDO IMC-TELECOM_MISSAMOU</strong></p>
                                                  <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                              </div>
                                              <div class="col-lg-12 col-sm-12 pr-5 mb-2 login-input login-input-green">
                                                  <p class="mb-1"><strong>13 août 2021 à 19:23 | EDO IMC-TELECOM_MISSAMOU</strong></p>
                                                  <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-12 col-sm-12 mt-3">
                                  <div class="box-shadow-border-radius" id="editor">
                                  </div>
                              </div>
                              <div class="col-lg-12 col-sm-12 mt-3 text-center">
                                  <button class="btn btn-lightblue mr-2 btn-lightblue-another box-shadow-border-radius" type="submit">Publier la note</button>
                                  <button class="btn btn-lightblue" type="submit">Enregistrer</button>
                              </div>
                          </div>
                      </div>
                    </div>
                </div>
                <div class="tab-pane" id="absences-and-deviations" role="tabpanel" aria-labelledby="absences-and-deviations-tab">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6 absences-and-deviations-left">
                          <div class="row">
                              <div class="col-lg-12 col-sm-12 pl-1 pr-2">
                                  <div class="row mb-3">
                                      <div class="col-lg-2 col-sm-2 pr-0">
                                          <div class="datepicker-container">
                                              <i class="date-icon date-icon1 float-left" aria-hidden="true"></i>
                                              <input class="form-control bar-from" type="text" placeholder="00/00/0000">
                                          </div>
                                      </div>
                                      <div class="col-lg-1 col-sm-1 text-center">
                                          <p class="mt-2 mb-0">au</p>
                                      </div>
                                      <div class="col-lg-2 col-sm-2 pl-0">
                                          <div class="datepicker-container">
                                              <i class="date-icon date-icon1 float-left" aria-hidden="true"></i>
                                              <input class="form-control bar-from" type="text" placeholder="00/00/0000">
                                          </div>
                                      </div>
                                      <div class="col-lg-3 col-sm-3 p-0">
                                          <select class="form-control">
                                              <option>tous les motifs</option>
                                          </select>
                                      </div>
                                      <div class="col-lg-3 col-sm-3 pr-0">
                                          <a href="javascript:void(0);" id="novelle-btn" class="btn-blue-white" style="margin-left: unset;" data-toggle="modal" data-target="#absence-modal">
                                          Novelle absence
                                          </a>
                                      </div>
                                      <div class="col-lg-1 col-sm-1 p-2">
                                          <a href="javascript:void(0);" class="calender-task-btn">
                                              <img src="{{ asset('public/assets/img/icons/blue-calendar-white.png')}}" style="margin-top: -3px;">
                                          </a>
                                      </div>
                                  </div>
                              </div>
                          </div>
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
                                              <input class="form-control bar-from" type="text" placeholder="00/00/0000">
                                          </div>
                                      </div>
                                      <div class="col-lg-3 col-sm-3 pl-0">
                                          <select class="form-control">
                                              <option>tous les motifs</option>
                                          </select>
                                      </div>
                                      <div class="col-lg-3 col-sm-3 pl-0">
                                          <a href="javascript:void(0);" class="btn-blue-white" style="margin-left: unset;" data-toggle="modal" data-target="#ecarts-modal">
                                          Nouvel écart
                                          </a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-6 col-sm-6 pl-1 pr-1 absences-and-deviations-left">
                          <div class="calendar-container" style="display: none;">
                              <div id='calendar'></div>
                              <div style='clear:both'></div>
                          </div>
                          <div class="task-container">
                              <p class="mb-1"><strong class="black-text font-weight-bold">Liste d'absences</strong></p>
                              <div class="min-height-scroll-container fill-background">
                                  <div class="min-height-scroll">
                                      <div class="row pl-4 pr-4">
                                          <a href="javascript:void(0);" data-toggle="modal" data-target="#edit-absence-modal">
                                              <div class="col-lg-12 col-sm-12 pr-5 mb-2 login-input">
                                                  <div class="row">
                                                      <div class="col-lg-5 col-sm-5">
                                                          <p class="mb-1"><strong>Congés Payés</strong></p>
                                                      </div>
                                                      <div class="col-lg-7 col-sm-7 text-right">
                                                          <p class="mb-1 view-color"><strong>8 Octobre 2021 - 16 Octobre 2021 <i class="fa fa-eye mr-1"></i></strong></p>
                                                      </div>
                                                  </div>
                                                  <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                              </div>
                                          </a>
                                          <a href="javascript:void(0);" data-toggle="modal" data-target="#edit-absence-modal">
                                              <div class="col-lg-12 col-sm-12 pr-5 mb-2 login-input">
                                                  <div class="row">
                                                      <div class="col-lg-5 col-sm-5">
                                                          <p class="mb-1"><strong>Congés Payés</strong></p>
                                                      </div>
                                                      <div class="col-lg-7 col-sm-7 text-right">
                                                          <p class="mb-1 view-color"><strong>8 Octobre 2021 - 16 Octobre 2021 <i class="fa fa-eye mr-1"></i></strong></p>
                                                      </div>
                                                  </div>
                                                  <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                              </div>
                                          </a>
                                          <a href="javascript:void(0);" data-toggle="modal" data-target="#edit-absence-modal">
                                              <div class="col-lg-12 col-sm-12 pr-5 mb-2 login-input">
                                                  <div class="row">
                                                      <div class="col-lg-5 col-sm-5">
                                                          <p class="mb-1"><strong>Congés Payés</strong></p>
                                                      </div>
                                                      <div class="col-lg-7 col-sm-7 text-right">
                                                          <p class="mb-1 view-color"><strong>8 Octobre 2021 - 16 Octobre 2021 <i class="fa fa-eye mr-1"></i></strong></p>
                                                      </div>
                                                  </div>
                                                  <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                              </div>
                                          </a>
                                          <a href="javascript:void(0);" data-toggle="modal" data-target="#edit-absence-modal">
                                              <div class="col-lg-12 col-sm-12 pr-5 mb-2 login-input">
                                                  <div class="row">
                                                      <div class="col-lg-5 col-sm-5">
                                                          <p class="mb-1"><strong>Congés Payés</strong></p>
                                                      </div>
                                                      <div class="col-lg-7 col-sm-7 text-right">
                                                          <p class="mb-1 view-color"><strong>8 Octobre 2021 - 16 Octobre 2021 <i class="fa fa-eye mr-1"></i></strong></p>
                                                      </div>
                                                  </div>
                                                  <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                              </div>
                                          </a>
                                          <a href="javascript:void(0);" data-toggle="modal" data-target="#edit-absence-modal">
                                              <div class="col-lg-12 col-sm-12 pr-5 mb-2 login-input">
                                                  <div class="row">
                                                      <div class="col-lg-5 col-sm-5">
                                                          <p class="mb-1"><strong>Congés Payés</strong></p>
                                                      </div>
                                                      <div class="col-lg-7 col-sm-7 text-right">
                                                          <p class="mb-1 view-color"><strong>8 Octobre 2021 - 16 Octobre 2021 <i class="fa fa-eye mr-1"></i></strong></p>
                                                      </div>
                                                  </div>
                                                  <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                              </div>
                                          </a>
                                          <a href="javascript:void(0);" data-toggle="modal" data-target="#edit-absence-modal">
                                              <div class="col-lg-12 col-sm-12 pr-5 mb-2 login-input">
                                                  <div class="row">
                                                      <div class="col-lg-5 col-sm-5">
                                                          <p class="mb-1"><strong>Congés Payés</strong></p>
                                                      </div>
                                                      <div class="col-lg-7 col-sm-7 text-right">
                                                          <p class="mb-1 view-color"><strong>8 Octobre 2021 - 16 Octobre 2021 <i class="fa fa-eye mr-1"></i></strong></p>
                                                      </div>
                                                  </div>
                                                  <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                              </div>
                                          </a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-6 col-sm-6 pr-1 absences-and-deviations-right">
                          <p class="mb-1"><strong class="black-text font-weight-bold">List des écarts</strong></p>
                          <div class="min-height-scroll-container fill-background">
                              <div class="min-height-scroll">
                                  <div class="row pl-4 pr-4">
                                      <a href="javascript:void(0);" data-toggle="modal" data-target="#edit-ecart-modal">
                                          <div class="col-lg-12 col-sm-12 pr-5 mb-2 login-input">
                                              <div class="row">
                                                  <div class="col-lg-5 col-sm-5">
                                                      <p class="mb-1"><strong>Ecart</strong></p>
                                                  </div>
                                                  <div class="col-lg-7 col-sm-7 text-right">
                                                      <p class="mb-1 view-color"><strong>16 Octobre 2021 <i class="fa fa-eye mr-1"></i></strong></p>
                                                  </div>
                                              </div>
                                              <p class="mb-0"><strong>Objet:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                          </div>
                                      </a>
                                      <a href="javascript:void(0);" data-toggle="modal" data-target="#edit-ecart-modal">
                                          <div class="col-lg-12 col-sm-12 pr-5 mb-2 login-input">
                                              <div class="row">
                                                  <div class="col-lg-5 col-sm-5">
                                                      <p class="mb-1"><strong>Ecart</strong></p>
                                                  </div>
                                                  <div class="col-lg-7 col-sm-7 text-right">
                                                      <p class="mb-1 view-color"><strong>16 Octobre 2021 <i class="fa fa-eye mr-1"></i></strong></p>
                                                  </div>
                                              </div>
                                              <p class="mb-0"><strong>Objet:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                          </div>
                                      </a>
                                      <a href="javascript:void(0);" data-toggle="modal" data-target="#edit-ecart-modal">
                                          <div class="col-lg-12 col-sm-12 pr-5 mb-2 login-input">
                                              <div class="row">
                                                  <div class="col-lg-5 col-sm-5">
                                                      <p class="mb-1"><strong>Ecart</strong></p>
                                                  </div>
                                                  <div class="col-lg-7 col-sm-7 text-right">
                                                      <p class="mb-1 view-color"><strong>16 Octobre 2021 <i class="fa fa-eye mr-1"></i></strong></p>
                                                  </div>
                                              </div>
                                              <p class="mb-0"><strong>Objet:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                          </div>
                                      </a>
                                      <a href="javascript:void(0);" data-toggle="modal" data-target="#edit-ecart-modal">
                                          <div class="col-lg-12 col-sm-12 pr-5 mb-2 login-input">
                                              <div class="row">
                                                  <div class="col-lg-5 col-sm-5">
                                                      <p class="mb-1"><strong>Ecart</strong></p>
                                                  </div>
                                                  <div class="col-lg-7 col-sm-7 text-right">
                                                      <p class="mb-1 view-color"><strong>16 Octobre 2021 <i class="fa fa-eye mr-1"></i></strong></p>
                                                  </div>
                                              </div>
                                              <p class="mb-0"><strong>Objet:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                          </div>
                                      </a>
                                      <a href="javascript:void(0);" data-toggle="modal" data-target="#edit-ecart-modal">
                                          <div class="col-lg-12 col-sm-12 pr-5 mb-2 login-input">
                                              <div class="row">
                                                  <div class="col-lg-5 col-sm-5">
                                                      <p class="mb-1"><strong>Ecart</strong></p>
                                                  </div>
                                                  <div class="col-lg-7 col-sm-7 text-right">
                                                      <p class="mb-1 view-color"><strong>16 Octobre 2021 <i class="fa fa-eye mr-1"></i></strong></p>
                                                  </div>
                                              </div>
                                              <p class="mb-0"><strong>Objet:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                          </div>
                                      </a>
                                      <a href="javascript:void(0);" data-toggle="modal" data-target="#edit-ecart-modal">
                                          <div class="col-lg-12 col-sm-12 pr-5 mb-2 login-input">
                                              <div class="row">
                                                  <div class="col-lg-5 col-sm-5">
                                                      <p class="mb-1"><strong>Ecart</strong></p>
                                                  </div>
                                                  <div class="col-lg-7 col-sm-7 text-right">
                                                      <p class="mb-1 view-color"><strong>16 Octobre 2021 <i class="fa fa-eye mr-1"></i></strong></p>
                                                  </div>
                                              </div>
                                              <p class="mb-0"><strong>Objet:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                          </div>
                                      </a>
                                  </div>
                              </div>
                          </div>
                      </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 mt-3 pr-0">
                            <button class="btn btn-lightblue float-right" type="submit">Enregistrer</button>
                        </div>
                    </div>
                </div>
                <div class="tab-pane {{$url_get == 'contact' ? 'active' : ''}}" id="contract" role="tabpanel" aria-labelledby="contract-tab">
                    @if (!empty($contacts->id))
                        <form method="post" action="{{route('collabotation.contact_edit')}}" enctype="multipart/form-data">
                    @else
                        <form method="post" action="{{route('collabotation.contact')}}" enctype="multipart/form-data">
                    @endif

                    @csrf

                    <input type="hidden" name="collaboration_id" value="{{$collaboration_id}}">


                    <div class="row min-height-scroll">
                        <div class="col-lg-4 col-sm-4 px-4">
                            <div class="form-group">
                                <label>Poste</label>
                                <select class="form-control" name="poste">
                                    @if (!empty($contacts->id))
                                        <option {{ $contacts->poste == 'LOREM' ? 'selected':'' }} value="LOREM">LOREM</option>
                                        <option {{ $contacts->poste == 'LOREM2' ? 'selected':'' }} value="LOREM2">LOREM2</option>
                                        <option {{ $contacts->poste == 'LOREM3' ? 'selected':'' }} value="LOREM3">LOREM3</option>
                                    @else
                                        <option  value="LOREM">LOREM</option>
                                        <option  value="LOREM2">LOREM2</option>
                                        <option  value="LOREM3">LOREM3</option>
                                    @endif

                                </select>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-6 col-sm-6">
                                        <label>Agence</label>
                                        <select class="form-control" name="agence">

                                            @foreach ($contact_agencies as $agency)

                                                @if (!empty($contacts->id))
                                                    <option {{ $contacts->agence == $agency->agencenom ? 'selected':'' }} value="{{$agency->agencenom}}">{{$agency->agencenom}}</option>
                                                @else
                                                    <option value="{{$agency->agencenom}}">{{$agency->agencenom}}</option>
                                                @endif

                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <label>NNI</label>
                                        <input type="text" name="nni" class="form-control" value="{{ (!empty($contacts->nni)) ? $contacts->nni:''; }}" placeholder="0000000">
                                    </div>
                                </div>
                          </div>
                          <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-6 col-sm-6">
                                        <label>Habilitation</label>
                                        <select class="form-control" name="habilitation">

                                            @if (!empty($contacts->id))
                                                <option {{ $contacts->habilitation == 'HABILITATION' ? 'selected':'' }} value="HABILITATION">HABILITATION</option>
                                                <option {{ $contacts->habilitation == 'HABILITATION2' ? 'selected':'' }} value="HABILITATION2">HABILITATION2</option>
                                            @else
                                                <option  value="HABILITATION">HABILITATION</option>
                                                <option  value="HABILITATION2">HABILITATION2</option>
                                            @endif

                                        </select>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <label>Date de fin d'habilitation</label>
                                        <div class="datepicker-container">
                                          <i class="date-icon date-icon1 float-left" aria-hidden="true"></i>
                                          <input class="form-control bar-from" type="text" name="end_date_authorization"  value="{{ (!empty($contacts->end_date_authorization)) ? $contacts->end_date_authorization:''; }}" />
                                      </div>
                                    </div>
                                </div>
                          </div>
                          <div class="form-group">
                              <label>Lorem Ipsum</label>
                              <input type="text" name="" class="form-control" placeholder="Lorem Ipsum">
                          </div>
                          <div class="form-group">
                              <label>Lorem Ipsum</label>
                              <input type="text" name="" class="form-control" placeholder="Lorem Ipsum">
                          </div>
                          <div class="form-group">
                              <label>Lorem Ipsum</label>
                              <input type="text" name="" class="form-control" placeholder="Lorem Ipsum">
                          </div>
                          <div class="form-group">
                              <label>Lorem Ipsum</label>
                              <input type="text" name="" class="form-control" placeholder="Lorem Ipsum">
                          </div>
                        </div>
                        <div class="col-lg-4 col-sm-4 px-4">
                            <div class="form-group">
                              <label>Lorem Ipsum</label>
                              <input type="text" name="" class="form-control" placeholder="Lorem Ipsum">
                          </div>
                          <div class="form-group">
                              <label>Lorem Ipsum</label>
                              <input type="text" name="" class="form-control" placeholder="Lorem Ipsum">
                          </div>
                          <div class="form-group">
                              <label>Lorem Ipsum</label>
                              <input type="text" name="" class="form-control" placeholder="Lorem Ipsum">
                          </div>
                          <div class="form-group">
                              <label>Lorem Ipsum</label>
                              <input type="text" name="" class="form-control" placeholder="Lorem Ipsum">
                          </div>
                          <div class="form-group">
                              <label>Lorem Ipsum</label>
                              <input type="text" name="" class="form-control" placeholder="Lorem Ipsum">
                          </div>
                          <div class="form-group">
                              <label>Lorem Ipsum</label>
                              <input type="text" name="" class="form-control" placeholder="Lorem Ipsum">
                          </div>
                          <div class="form-group">
                              <label>Lorem Ipsum</label>
                              <input type="text" name="" class="form-control" placeholder="Lorem Ipsum">
                          </div>
                        </div>
                        <div class="col-lg-4 col-sm-4 px-4">
                            <div class="form-group">
                              <label>Lorem Ipsum</label>
                              <input type="text" name="" class="form-control" placeholder="Lorem Ipsum">
                          </div>
                          <div class="form-group">
                              <label>Lorem Ipsum</label>
                              <input type="text" name="" class="form-control" placeholder="Lorem Ipsum">
                          </div>
                          <div class="form-group">
                              <label>Lorem Ipsum</label>
                              <input type="text" name="" class="form-control" placeholder="Lorem Ipsum">
                          </div>
                          <div class="form-group">
                              <label>Lorem Ipsum</label>
                              <input type="text" name="" class="form-control" placeholder="Lorem Ipsum">
                          </div>
                          <div class="form-group">
                              <label>Lorem Ipsum</label>
                              <input type="text" name="" class="form-control" placeholder="Lorem Ipsum">
                          </div>
                          <div class="form-group">
                              <label>Lorem Ipsum</label>
                              <input type="text" name="" class="form-control" placeholder="Lorem Ipsum">
                          </div>
                          <div class="form-group">
                              <label>Lorem Ipsum</label>
                              <input type="text" name="" class="form-control" placeholder="Lorem Ipsum">
                          </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-lg-12 col-sm-12 mt-2">

                            @if (!empty($contacts->id))
                                <button class="btn btn-lightblue float-right" type="submit">Éditer</button>
                            @else
                                <button class="btn btn-lightblue float-right" type="submit">Enregistrer</button>
                            @endif

                            <button class="btn btn-lightblue mr-2 float-right btn-lightblue-another box-shadow-border-radius" type="submit">Générer le contrat</button>
                        </div>
                    </div>
                    </form>
                </div>
              </div>
        </div>

      </div>
    </div>
  </div>



    <script>
        $(document).ready(()=>{
        $('#photo').change(function(){
            const file = this.files[0];
            console.log(file);
            if (file){
            let reader = new FileReader();
            reader.onload = function(event){
                console.log(event.target.result);
                $('#imgPreview').attr('src', event.target.result);
            }
            reader.readAsDataURL(file);
            }
        });
        });
    </script>


    <script>
        $(document).ready(()=>{
            $('#img1').change(function(){
                const file = this.files[0];
                console.log(file);
                if (file){
                let reader = new FileReader();
                reader.onload = function(event){
                    console.log(event.target.result);
                    $('#imgPreview1').attr('src', event.target.result);
                }
                reader.readAsDataURL(file);
                }
            });

            $('#img2').change(function(){
                const file = this.files[0];
                console.log(file);
                if (file){
                let reader = new FileReader();
                reader.onload = function(event){
                    console.log(event.target.result);
                    $('#imgPreview2').attr('src', event.target.result);
                }
                reader.readAsDataURL(file);
                }
            });

            $('#img3').change(function(){
                const file = this.files[0];
                console.log(file);
                if (file){
                let reader = new FileReader();
                reader.onload = function(event){
                    console.log(event.target.result);
                    $('#imgPreview3').attr('src', event.target.result);
                }
                reader.readAsDataURL(file);
                }
            });

            $('#img4').change(function(){
                const file = this.files[0];
                console.log(file);
                if (file){
                let reader = new FileReader();
                reader.onload = function(event){
                    console.log(event.target.result);
                    $('#imgPreview4').attr('src', event.target.result);
                }
                reader.readAsDataURL(file);
                }
            });
        });
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

$(function () {

    $.ajaxSetup({
         headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         }
    });





    $('#savedata').click(function (e) {
        e.preventDefault();


        $.ajax({

          url: "{{ route('collabotation.formations') }}",
          type: "POST",
          data: $('#postForm').serialize(),
          dataType: 'json',
          success: function (data) {

            var todo = '<tr><td></td><td>' + data.success.formation_name + '</td><td></td><td>' + data.success.date_obtention + '</td><td>' + data.success.end_date + '</td><td>'+"<a href='javascript:void(0)' data-toggle='modal' data-target='#view-formation-modal_"+data.success.id+"'><span class='view-color'><i class='fa fa-eye mr-1'></i>Voir</span></a>"+'</td>';

            jQuery('#todo-list').append(todo);
              $('#postForm').trigger("reset");


          },
          error: function (data) {
              console.log('Error:', data);
              $('#savedata').html('Save Changes');
          }
      });
    });
});
</script>
