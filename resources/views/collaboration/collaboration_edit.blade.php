@php
    $url_get = Request::segment(4);
    $url_get_id = Request::segment(3);
    $url = "données_personelles";
    $url_id = $collabotation->id;
    $collaboration_id = Request::segment(2);

@endphp

@if ($url_get == $url && $url_get_id == $url_id)
    <script type="text/javascript">
        $(window).on('load', function() {
            $('#edit-technician-modal_{{$collabotation->id}}').modal('show');
        });
    </script>
@endif

<div class="modal fade add-technician-modal" id="edit-technician-modal_{{$collabotation->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
       <div class="modal-content">
          <div class="modal-header">
             <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">

                    <a class="nav-link {{$url_get == NULL ? 'active' : ''}}" id="general-tab" data-toggle="tab" href="#general_edit_{{$collabotation->id}}" role="tab" aria-controls="general" aria-selected="false">Général</a>

                </li>
                <li class="nav-item">

                    <a class="nav-link {{$url_get == 'données_personelles' ? 'active' : ''}}" id="personal-date-tab" data-toggle="tab" href="#personal-data_edit_{{$collabotation->id}}" role="tab" aria-controls="personal-data" aria-selected="false">Données personelles</a>

                </li>
                <li class="nav-item">
                   <a class="nav-link" id="training-tab" data-toggle="tab" href="#training_edit_{{$collabotation->id}}" role="tab" aria-controls="training" aria-selected="false">Formations</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link" id="endowment-tab" data-toggle="tab" href="#endowment_edit_{{$collabotation->id}}" role="tab" aria-controls="endowment" aria-selected="true">Dotation</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link" id="statistics-tab" data-toggle="tab" href="#statistics_edit_{{$collabotation->id}}" role="tab" aria-controls="statistics" aria-selected="false">Statistiques</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link" id="absences-and-deviations-tab" data-toggle="tab" href="#absences-and-deviations_edit_{{$collabotation->id}}" role="tab" aria-controls="absences-and-deviations" aria-selected="true">Absences &amp; Ecarts</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link" id="contract-tab_edit" data-toggle="tab" href="#contract_edit_{{$collabotation->id}}" role="tab" aria-controls="contract" aria-selected="false">Contrat</a>
                </li>
             </ul>
          </div>

          <div class="modal-body">
             <div class="tab-content">
                {{-- General Tab start --}}
                <div class="tab-pane {{$url_get == NULL ? 'active' : ''}}" id="general_edit_{{$collabotation->id}}" role="tabpanel" aria-labelledby="general-tab">


                    <form method="post" action="{{route('collabotation.general_edit')}}" enctype="multipart/form-data">
                      @csrf

                      <input type="hidden" name="collaboration_id" value="{{$collabotation->id}}">
                      <div class="row min-height-scroll">
                         <div class="col-lg-4 col-sm-4 px-4">
                            <div class="form-group">
                               {{--
                               <div class="row general-tab-profile-image-container">
                                  <div class="col-lg-8 col-sm-8">
                                     <div class="form-group box-with-icon">
                                        <p class="text-center view-color">
                                           <i class="fas fa-eye"></i>
                                           <i class="fas fa-times-circle"></i>
                                        </p>
                                     </div>
                                  </div>
                               </div>
                               --}}
                               <div class="upload-bx view-color">
                                  <p>Télécharger une photo</p>
                                  <i>
                                  <img id="imgPreview2_{{$collabotation->id}}" src="{{ asset('public/uploads/profile_images/'.$collabotation->profile_img)}}">
                                  </i>
                               </div>
                               <input type="file" id="photo2_{{$collabotation->id}}" name="profile_img" class="hide-file-input">
                            </div>
                            <div class="form-group">
                               <label>Nom</label>
                               <input type="text" name="nom" value="{{$collabotation->nom}}" class="form-control" placeholder="Nom">
                            </div>
                            <div class="form-group">
                               <label>Prénom</label>
                               <input type="text" name="prénom" class="form-control" value="{{$collabotation->prenom}}"  placeholder="Prénom">
                            </div>
                            <div class="form-group">
                               <label>Login</label>
                               <input type="text" name="login" value="{{$collabotation->login}}"  class="form-control" placeholder="Login">
                            </div>
                         </div>
                         <div class="col-lg-4 col-sm-4 px-4">
                            <div class="form-group">
                               <label>Email</label>
                               <input type="text" name="email" value="{{$collabotation->email}}"  class="form-control" placeholder="xxxxxxxxxxxx@xxxxxxxx.xx">
                            </div>
                            <div class="form-group">
                               <label>Mot de passe</label>
                               <input type="password" name="mot_de_passe" value="{{$collabotation->mot_de_passe}}"  class="form-control"  >
                            </div>
                            <div class="form-group">
                               <label>Confirmer mot de passe</label>
                               <input type="password" name="confirmer_mot_de_passe" value="{{$collabotation->confirmer_mot_de_passe}}"  class="form-control" >
                            </div>
                            <div class="form-group">
                               <label>Adresse</label>
                               <input type="text" name="adresse" class="form-control" value="{{$collabotation->adresse}}"  placeholder="Adresse">
                            </div>
                            <div class="form-group">
                               <label>Complément d'adresse</label>
                               <input type="text" name="complément_d_adresse" value="{{$collabotation->complément_d_adresse}}"  class="form-control" placeholder="Complément d'adresse">
                            </div>
                            <div class="row">
                               <div class="col-lg-5 col-sm-5">
                                  <div class="form-group">
                                     <label>Code postal</label>
                                     <input type="text" name="code_postal" value="{{$collabotation->code_postal}}"  class="form-control" placeholder="Code postal">
                                  </div>
                               </div>
                               <div class="col-lg-7 col-sm-7">
                                  <div class="form-group">
                                     <label>Ville</label>
                                     <select class="form-control" name="ville">
                                        <option>Ville</option>
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
                                     <input type="text" name="telephone" value="{{$collabotation->telephone}}"  class="form-control" placeholder="Téléphone">
                                  </div>
                               </div>
                               <div class="col-lg-6 col-sm-6">
                                  <div class="form-group">
                                     <label>Portable</label>
                                     <input type="text" name="portable" value="{{$collabotation->portable}}"  class="form-control" placeholder="Portable">
                                  </div>
                               </div>
                            </div>
                            <div class="form-group">
                               <label>Numéro de sécurilé sociale</label>
                               <input type="text" name="numero_de_securile_sociale" value="{{$collabotation->numero_de_securile_sociale}}"  class="form-control" placeholder="Numéro de sécurilé sociale">
                            </div>
                            <div class="form-group">
                               <label>Lorem Ipsum</label>
                               <input type="text" name=""  class="form-control" placeholder="Lorem Ipsum">
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
                            <button class="btn btn-lightblue float-right" type="submit">Enregistrer</button>
                         </div>
                      </div>
                   </form>
                </div>
                {{-- General Tab End --}}

                <div class="tab-pane {{$url_get == 'données_personelles' ? 'active' : ''}}" id="personal-data_edit_{{$collabotation->id}}" role="tabpanel" aria-labelledby="personal-date-tab">


                   <div class="row min-height-scroll">
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
                      </div>
                   </div>
                   <div class="row">
                      <div class="col-lg-12 col-sm-12 mt-2">
                         <button class="btn btn-lightblue float-right" type="submit">Enregistrer</button>
                      </div>
                   </div>
                </div>
                <div class="tab-pane" id="training_edit_{{$collabotation->id}}" role="tabpanel" aria-labelledby="training-tab">
                    <div class="row">
                      <div class="col-lg-7 col-sm-7">
                         <div class="table-responsive box-shadow-border-radius">
                             <style>
                                 .tr{

                                 }
                                 .th
                                 {
                                    border-bottom: 1px solid #e8e8f7 !important;
                                    color: #009CDE !important;
                                    text-transform: capitalize !important;
                                    font-weight: bold;
                                    padding: 11px;
                                    font-weight: 500;
                                    letter-spacing: .5px;
                                    font-size: 0.85rem !important;
                                    line-height: 1.462;
                                 }
                                 .td{
                                    font-size: 0.85rem;
                                    border-bottom: 1px solid #e8e8f7 !important;
                                    padding: 15px !important;
                                    padding: 0.75rem;
                                    vertical-align: middle;
                                    padding: 9px 15px;
                                    line-height: 1.462;
                                    border-top: 0;
                                 }

                             </style>
                            <div class="row col-md-12 table table-striped w-100" style="width: 100% !important;">
                                <div class="col-md-1 th"></div>
                                <div class="col-md-2 th">Formation</div>
                                <div class="col-md-2 th">Documents</div>
                                <div class="col-md-3 th">Date d'obtention</div>
                                <div class="col-md-2 th">Date de fin</div>
                                <div class="col-md-2 th">Actions</div>
                            </div>

                            <div class="row col-md-12 table table-striped w-100">
                                <div class="col-md-1 td">
                                    <i class="fa fa-bell"></i>
                                </div>
                                <div class="col-md-2 td">FORMATION</div>
                                <div class="col-md-2 td">5</div>
                                <div class="col-md-3 td">00/00/0000</div>
                                <div class="col-md-2 td red-font-color">00/00/0000</div>
                                <div class="col-md-2 td">
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#view-formation-modal">
                                        <span class="view-color">
                                        <i class="fa fa-eye mr-1"></i>Voir
                                        </span>
                                        </a>
                                </div>
                            </div>

                         </div>
                      </div>
                      <div class="col-lg-5 col-sm-5">
                         <strong class="black-text font-weight-bold">Ajouter une formation</strong>
                         <br />
                         <br />
                         <div class="box-shadow-border-radius login-input">
                            <div class="row">
                               <div class="col-lg-12 col-sm-12">
                                  <div class="form-group">
                                     <label>Nom de la formation</label>
                                     <select class="form-control">
                                        <option>LOREMPSUS</option>
                                     </select>
                                  </div>
                               </div>
                               <div class="col-lg-6 col-sm-6">
                                  <div class="form-group">
                                     <label>Date d'obtention</label>
                                     <div class="datepicker-container">
                                        <i class="date-icon date-icon1 float-left" aria-hidden="true"></i>
                                        <input class="form-control bar-from" type="text" placeholder="00/00/0000" />
                                     </div>
                                  </div>
                               </div>
                               <div class="col-lg-6 col-sm-6">
                                  <div class="form-group">
                                     <label>Date de fin d'habilitation</label>
                                     <div class="datepicker-container">
                                        <i class="date-icon date-icon2 float-left" aria-hidden="true"></i>
                                        <input class="form-control bar-to" type="text" placeholder="00/00/0000" />
                                     </div>
                                  </div>
                               </div>
                               <style>
                                    .upload-bx
                                    {
                                        background: lightgray;
                                        padding: 30% 10%;
                                        width: 100%;
                                    }
                               </style>

                               <div class="col-lg-12 col-sm-12">
                                  <div class="form-group">
                                     <label>Justificatifs</label>
                                     <div class="min-height-scroll">
                                        <div class="pr-3">
                                           <div class="row">
                                              <div class="col-lg-4 col-sm-4">
                                                 <div class="form-group">
                                                    <div class="upload-bx lightgray-upload-bx">
                                                       <i class="fa fa-plus fa-2x"></i>
                                                    </div>
                                                    <input type="file" name="" class="hide-file-input">
                                                 </div>
                                              </div>
                                              <div class="col-lg-8 col-sm-8">
                                                 <div class="form-group mt-1">
                                                    <label>Nom</label>
                                                    <input type="text" class="form-control" placeholder="NOM PHOTO">
                                                 </div>
                                              </div>
                                           </div>
                                           <div class="row">
                                              <div class="col-lg-4 col-sm-4">
                                                 <div class="form-group">
                                                    <div class="upload-bx lightgray-upload-bx">
                                                       <i class="fa fa-plus fa-2x"></i>
                                                    </div>
                                                    <input type="file" name="" class="hide-file-input">
                                                 </div>
                                              </div>
                                              <div class="col-lg-8 col-sm-8">
                                                 <div class="form-group mt-1">
                                                    <label>Nom</label>
                                                    <input type="text" class="form-control" placeholder="NOM PHOTO">
                                                 </div>
                                              </div>
                                           </div>
                                           <div class="row">
                                              <div class="col-lg-4 col-sm-4">
                                                 <div class="form-group">
                                                    <div class="upload-bx lightgray-upload-bx">
                                                       <i class="fa fa-plus fa-2x"></i>
                                                    </div>
                                                    <input type="file" name="" class="hide-file-input">
                                                 </div>
                                              </div>
                                              <div class="col-lg-8 col-sm-8">
                                                 <div class="form-group mt-1">
                                                    <label>Nom</label>
                                                    <input type="text" class="form-control" placeholder="NOM PHOTO">
                                                 </div>
                                              </div>
                                           </div>
                                           <div class="row">
                                              <div class="col-lg-4 col-sm-4">
                                                 <div class="form-group">
                                                    <div class="upload-bx lightgray-upload-bx">
                                                       <i class="fa fa-plus fa-2x"></i>
                                                    </div>
                                                    <input type="file" name="" class="hide-file-input">
                                                 </div>
                                              </div>
                                              <div class="col-lg-8 col-sm-8">
                                                 <div class="form-group mt-1">
                                                    <label>Nom</label>
                                                    <input type="text" class="form-control" placeholder="NOM PHOTO">
                                                 </div>
                                              </div>
                                           </div>
                                           <div class="row">
                                              <div class="col-lg-4 col-sm-4">
                                                 <div class="form-group">
                                                    <div class="upload-bx lightgray-upload-bx">
                                                       <i class="fa fa-plus fa-2x"></i>
                                                    </div>
                                                    <input type="file" name="" class="hide-file-input">
                                                 </div>
                                              </div>
                                              <div class="col-lg-8 col-sm-8">
                                                 <div class="form-group mt-1">
                                                    <label>Nom</label>
                                                    <input type="text" class="form-control" placeholder="NOM PHOTO">
                                                 </div>
                                              </div>
                                           </div>
                                           <div class="row">
                                              <div class="col-lg-4 col-sm-4">
                                                 <div class="form-group">
                                                    <div class="upload-bx lightgray-upload-bx">
                                                       <i class="fa fa-plus fa-2x"></i>
                                                    </div>
                                                    <input type="file" name="" class="hide-file-input">
                                                 </div>
                                              </div>
                                              <div class="col-lg-8 col-sm-8">
                                                 <div class="form-group mt-1">
                                                    <label>Nom</label>
                                                    <input type="text" class="form-control" placeholder="NOM PHOTO">
                                                 </div>
                                              </div>
                                           </div>
                                           <div class="row">
                                              <div class="col-lg-4 col-sm-4">
                                                 <div class="form-group mb-0">
                                                    <div class="upload-bx lightgray-upload-bx">
                                                       <i class="fa fa-plus fa-2x"></i>
                                                    </div>
                                                    <input type="file" name="" class="hide-file-input">
                                                 </div>
                                              </div>
                                              <div class="col-lg-8 col-sm-8">
                                                 <div class="form-group mt-1">
                                                    <label>Nom</label>
                                                    <input type="text" class="form-control" placeholder="NOM PHOTO">
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
                    <div class="row">
                        <div class="col-lg-12 col-sm-12" style="margin-top:20px;">
                            <button class="btn btn-lightblue float-right mr-5" type="submit">Enregistrer</button>
                            <button class="btn btn-lightblue mr-2 btn-lightblue-another box-shadow-border-radius float-right" type="submit">Ajouter la formation</button>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="endowment_edit_{{$collabotation->id}}" role="tabpanel" aria-labelledby="endowment-tab">
                   <div class="row">
                      <div class="col-lg-7 col-sm-7">
                         <div class="box-shadow-border-radius another-nav-container">
                            <nav>
                               <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                  <a class="nav-item nav-link active" id="nav-equipment-tab" data-toggle="tab" href="#nav-equipment" role="tab" aria-controls="nav-equipment" aria-selected="true">Matériel</a>
                                  <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Informatique</a>
                                  <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Véhicule</a>
                               </div>
                               <button class="btn btn-lightblue float-right" type="submit">Exporter PDF</button>
                            </nav>
                            <div class="tab-content">
                               <div class="tab-pane fade show active" id="nav-equipment" role="tabpanel" aria-labelledby="nav-equipment-tab">
                                  <div class="table-responsive">
                                     {{-- <table class="table table-striped w-100" id="clientDataTable" style="width:100%">
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
                                           <tr>
                                              <td>
                                                 <input type="checkbox" checked />
                                              </td>
                                              <td>MATRIEL</td>
                                              <td>00/00/0000</td>
                                              <td>5</td>
                                              <td>Supprimer</td>
                                              <td>
                                                 <a href="javascript:void(0)" data-toggle="modal" data-target="#view-formation-modal">
                                                 <span class="view-color">
                                                 <i class="fa fa-eye mr-1"></i>Voir
                                                 </span>
                                                 </a>
                                              </td>
                                           </tr>
                                           <tr>
                                              <td>
                                                 <input type="checkbox" />
                                              </td>
                                              <td>MATRIEL</td>
                                              <td>00/00/0000</td>
                                              <td>5</td>
                                              <td>Supprimer</td>
                                              <td>
                                                 <a href="javascript:void(0)" data-toggle="modal" data-target="#view-formation-modal">
                                                 <span class="view-color">
                                                 <i class="fa fa-eye mr-1"></i>Voir
                                                 </span>
                                                 </a>
                                              </td>
                                           </tr>
                                           <tr>
                                              <td>
                                                 <input type="checkbox" />
                                              </td>
                                              <td>MATRIEL</td>
                                              <td>00/00/0000</td>
                                              <td>5</td>
                                              <td>Supprimer</td>
                                              <td>
                                                 <a href="javascript:void(0)" data-toggle="modal" data-target="#view-formation-modal">
                                                 <span class="view-color">
                                                 <i class="fa fa-eye mr-1"></i>Voir
                                                 </span>
                                                 </a>
                                              </td>
                                           </tr>
                                           <tr>
                                              <td>
                                                 <input type="checkbox" />
                                              </td>
                                              <td>MATRIEL</td>
                                              <td>00/00/0000</td>
                                              <td>5</td>
                                              <td>Supprimer</td>
                                              <td>
                                                 <a href="javascript:void(0)" data-toggle="modal" data-target="#view-formation-modal">
                                                 <span class="view-color">
                                                 <i class="fa fa-eye mr-1"></i>Voir
                                                 </span>
                                                 </a>
                                              </td>
                                           </tr>
                                           <tr>
                                              <td>
                                                 <input type="checkbox" />
                                              </td>
                                              <td>MATRIEL</td>
                                              <td>00/00/0000</td>
                                              <td>5</td>
                                              <td>Supprimer</td>
                                              <td>
                                                 <a href="javascript:void(0)" data-toggle="modal" data-target="#view-formation-modal">
                                                 <span class="view-color">
                                                 <i class="fa fa-eye mr-1"></i>Voir
                                                 </span>
                                                 </a>
                                              </td>
                                           </tr>
                                           <tr>
                                              <td>
                                                 <input type="checkbox" />
                                              </td>
                                              <td>MATRIEL</td>
                                              <td>00/00/0000</td>
                                              <td>5</td>
                                              <td>Supprimer</td>
                                              <td>
                                                 <a href="javascript:void(0)" data-toggle="modal" data-target="#view-formation-modal">
                                                 <span class="view-color">
                                                 <i class="fa fa-eye mr-1"></i>Voir
                                                 </span>
                                                 </a>
                                              </td>
                                           </tr>
                                           <tr>
                                              <td>
                                                 <input type="checkbox" />
                                              </td>
                                              <td>MATRIEL</td>
                                              <td>00/00/0000</td>
                                              <td>5</td>
                                              <td>Supprimer</td>
                                              <td>
                                                 <a href="javascript:void(0)" data-toggle="modal" data-target="#view-formation-modal">
                                                 <span class="view-color">
                                                 <i class="fa fa-eye mr-1"></i>Voir
                                                 </span>
                                                 </a>
                                              </td>
                                           </tr>
                                           <tr>
                                              <td>
                                                 <input type="checkbox" />
                                              </td>
                                              <td>MATRIEL</td>
                                              <td>00/00/0000</td>
                                              <td>5</td>
                                              <td>Supprimer</td>
                                              <td>
                                                 <a href="javascript:void(0)" data-toggle="modal" data-target="#view-formation-modal">
                                                 <span class="view-color">
                                                 <i class="fa fa-eye mr-1"></i>Voir
                                                 </span>
                                                 </a>
                                              </td>
                                           </tr>
                                           <tr>
                                              <td>
                                                 <input type="checkbox" />
                                              </td>
                                              <td>MATRIEL</td>
                                              <td>00/00/0000</td>
                                              <td>5</td>
                                              <td>Supprimer</td>
                                              <td>
                                                 <a href="javascript:void(0)" data-toggle="modal" data-target="#view-formation-modal">
                                                 <span class="view-color">
                                                 <i class="fa fa-eye mr-1"></i>Voir
                                                 </span>
                                                 </a>
                                              </td>
                                           </tr>
                                        </tbody>
                                     </table> --}}
                                  </div>
                               </div>
                               <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                  <div class="table-responsive">
                                     {{-- <table class="table table-striped w-100" id="clientDataTable" style="width:100%">
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
                                           <tr>
                                              <td>
                                                 <input type="checkbox" checked />
                                              </td>
                                              <td>MATRIEL</td>
                                              <td>00/00/0000</td>
                                              <td>5</td>
                                              <td>Supprimer</td>
                                              <td>
                                                 <a href="javascript:void(0)" data-toggle="modal" data-target="#view-formation-modal">
                                                 <span class="view-color">
                                                 <i class="fa fa-eye mr-1"></i>Voir
                                                 </span>
                                                 </a>
                                              </td>
                                           </tr>
                                           <tr>
                                              <td>
                                                 <input type="checkbox" />
                                              </td>
                                              <td>MATRIEL</td>
                                              <td>00/00/0000</td>
                                              <td>5</td>
                                              <td>Supprimer</td>
                                              <td>
                                                 <a href="javascript:void(0)" data-toggle="modal" data-target="#view-formation-modal">
                                                 <span class="view-color">
                                                 <i class="fa fa-eye mr-1"></i>Voir
                                                 </span>
                                                 </a>
                                              </td>
                                           </tr>
                                           <tr>
                                              <td>
                                                 <input type="checkbox" />
                                              </td>
                                              <td>MATRIEL</td>
                                              <td>00/00/0000</td>
                                              <td>5</td>
                                              <td>Supprimer</td>
                                              <td>
                                                 <a href="javascript:void(0)" data-toggle="modal" data-target="#view-formation-modal">
                                                 <span class="view-color">
                                                 <i class="fa fa-eye mr-1"></i>Voir
                                                 </span>
                                                 </a>
                                              </td>
                                           </tr>
                                           <tr>
                                              <td>
                                                 <input type="checkbox" />
                                              </td>
                                              <td>MATRIEL</td>
                                              <td>00/00/0000</td>
                                              <td>5</td>
                                              <td>Supprimer</td>
                                              <td>
                                                 <a href="javascript:void(0)" data-toggle="modal" data-target="#view-formation-modal">
                                                 <span class="view-color">
                                                 <i class="fa fa-eye mr-1"></i>Voir
                                                 </span>
                                                 </a>
                                              </td>
                                           </tr>
                                           <tr>
                                              <td>
                                                 <input type="checkbox" />
                                              </td>
                                              <td>MATRIEL</td>
                                              <td>00/00/0000</td>
                                              <td>5</td>
                                              <td>Supprimer</td>
                                              <td>
                                                 <a href="javascript:void(0)" data-toggle="modal" data-target="#view-formation-modal">
                                                 <span class="view-color">
                                                 <i class="fa fa-eye mr-1"></i>Voir
                                                 </span>
                                                 </a>
                                              </td>
                                           </tr>
                                           <tr>
                                              <td>
                                                 <input type="checkbox" />
                                              </td>
                                              <td>MATRIEL</td>
                                              <td>00/00/0000</td>
                                              <td>5</td>
                                              <td>Supprimer</td>
                                              <td>
                                                 <a href="javascript:void(0)" data-toggle="modal" data-target="#view-formation-modal">
                                                 <span class="view-color">
                                                 <i class="fa fa-eye mr-1"></i>Voir
                                                 </span>
                                                 </a>
                                              </td>
                                           </tr>
                                           <tr>
                                              <td>
                                                 <input type="checkbox" />
                                              </td>
                                              <td>MATRIEL</td>
                                              <td>00/00/0000</td>
                                              <td>5</td>
                                              <td>Supprimer</td>
                                              <td>
                                                 <a href="javascript:void(0)" data-toggle="modal" data-target="#view-formation-modal">
                                                 <span class="view-color">
                                                 <i class="fa fa-eye mr-1"></i>Voir
                                                 </span>
                                                 </a>
                                              </td>
                                           </tr>
                                           <tr>
                                              <td>
                                                 <input type="checkbox" />
                                              </td>
                                              <td>MATRIEL</td>
                                              <td>00/00/0000</td>
                                              <td>5</td>
                                              <td>Supprimer</td>
                                              <td>
                                                 <a href="javascript:void(0)" data-toggle="modal" data-target="#view-formation-modal">
                                                 <span class="view-color">
                                                 <i class="fa fa-eye mr-1"></i>Voir
                                                 </span>
                                                 </a>
                                              </td>
                                           </tr>
                                           <tr>
                                              <td>
                                                 <input type="checkbox" />
                                              </td>
                                              <td>MATRIEL</td>
                                              <td>00/00/0000</td>
                                              <td>5</td>
                                              <td>Supprimer</td>
                                              <td>
                                                 <a href="javascript:void(0)" data-toggle="modal" data-target="#view-formation-modal">
                                                 <span class="view-color">
                                                 <i class="fa fa-eye mr-1"></i>Voir
                                                 </span>
                                                 </a>
                                              </td>
                                           </tr>
                                        </tbody>
                                     </table> --}}
                                  </div>
                               </div>
                               <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                  <div class="table-responsive">
                                     {{-- <table class="table table-striped w-100" id="clientDataTable" style="width:100%">
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
                                           <tr>
                                              <td>
                                                 <input type="checkbox" checked />
                                              </td>
                                              <td>Modele</td>
                                              <td>MATRIEL</td>
                                              <td>00/00/0000</td>
                                              <td>5</td>
                                              <td>Supprimer</td>
                                              <td>
                                                 <a href="javascript:void(0)" data-toggle="modal" data-target="#view-formation-modal">
                                                 <span class="view-color">
                                                 <i class="fa fa-eye mr-1"></i>Voir
                                                 </span>
                                                 </a>
                                              </td>
                                           </tr>
                                           <tr>
                                              <td>
                                                 <input type="checkbox" />
                                              </td>
                                              <td>Modele</td>
                                              <td>MATRIEL</td>
                                              <td>00/00/0000</td>
                                              <td>5</td>
                                              <td>Supprimer</td>
                                              <td>
                                                 <a href="javascript:void(0)" data-toggle="modal" data-target="#view-formation-modal">
                                                 <span class="view-color">
                                                 <i class="fa fa-eye mr-1"></i>Voir
                                                 </span>
                                                 </a>
                                              </td>
                                           </tr>
                                           <tr>
                                              <td>
                                                 <input type="checkbox" />
                                              </td>
                                              <td>Modele</td>
                                              <td>MATRIEL</td>
                                              <td>00/00/0000</td>
                                              <td>5</td>
                                              <td>Supprimer</td>
                                              <td>
                                                 <a href="javascript:void(0)" data-toggle="modal" data-target="#view-formation-modal">
                                                 <span class="view-color">
                                                 <i class="fa fa-eye mr-1"></i>Voir
                                                 </span>
                                                 </a>
                                              </td>
                                           </tr>
                                           <tr>
                                              <td>
                                                 <input type="checkbox" />
                                              </td>
                                              <td>Modele</td>
                                              <td>MATRIEL</td>
                                              <td>00/00/0000</td>
                                              <td>5</td>
                                              <td>Supprimer</td>
                                              <td>
                                                 <a href="javascript:void(0)" data-toggle="modal" data-target="#view-formation-modal">
                                                 <span class="view-color">
                                                 <i class="fa fa-eye mr-1"></i>Voir
                                                 </span>
                                                 </a>
                                              </td>
                                           </tr>
                                           <tr>
                                              <td>
                                                 <input type="checkbox" />
                                              </td>
                                              <td>Modele</td>
                                              <td>MATRIEL</td>
                                              <td>00/00/0000</td>
                                              <td>5</td>
                                              <td>Supprimer</td>
                                              <td>
                                                 <a href="javascript:void(0)" data-toggle="modal" data-target="#view-formation-modal">
                                                 <span class="view-color">
                                                 <i class="fa fa-eye mr-1"></i>Voir
                                                 </span>
                                                 </a>
                                              </td>
                                           </tr>
                                           <tr>
                                              <td>
                                                 <input type="checkbox" />
                                              </td>
                                              <td>Modele</td>
                                              <td>MATRIEL</td>
                                              <td>00/00/0000</td>
                                              <td>5</td>
                                              <td>Supprimer</td>
                                              <td>
                                                 <a href="javascript:void(0)" data-toggle="modal" data-target="#view-formation-modal">
                                                 <span class="view-color">
                                                 <i class="fa fa-eye mr-1"></i>Voir
                                                 </span>
                                                 </a>
                                              </td>
                                           </tr>
                                           <tr>
                                              <td>
                                                 <input type="checkbox" />
                                              </td>
                                              <td>Modele</td>
                                              <td>MATRIEL</td>
                                              <td>00/00/0000</td>
                                              <td>5</td>
                                              <td>Supprimer</td>
                                              <td>
                                                 <a href="javascript:void(0)" data-toggle="modal" data-target="#view-formation-modal">
                                                 <span class="view-color">
                                                 <i class="fa fa-eye mr-1"></i>Voir
                                                 </span>
                                                 </a>
                                              </td>
                                           </tr>
                                           <tr>
                                              <td>
                                                 <input type="checkbox" />
                                              </td>
                                              <td>Modele</td>
                                              <td>MATRIEL</td>
                                              <td>00/00/0000</td>
                                              <td>5</td>
                                              <td>Supprimer</td>
                                              <td>
                                                 <a href="javascript:void(0)" data-toggle="modal" data-target="#view-formation-modal">
                                                 <span class="view-color">
                                                 <i class="fa fa-eye mr-1"></i>Voir
                                                 </span>
                                                 </a>
                                              </td>
                                           </tr>
                                           <tr>
                                              <td>
                                                 <input type="checkbox" />
                                              </td>
                                              <td>Modele</td>
                                              <td>MATRIEL</td>
                                              <td>00/00/0000</td>
                                              <td>5</td>
                                              <td>Supprimer</td>
                                              <td>
                                                 <a href="javascript:void(0)" data-toggle="modal" data-target="#view-formation-modal">
                                                 <span class="view-color">
                                                 <i class="fa fa-eye mr-1"></i>Voir
                                                 </span>
                                                 </a>
                                              </td>
                                           </tr>
                                        </tbody>
                                     </table> --}}
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <div class="col-lg-5 col-sm-5">
                         <strong class="black-text font-weight-bold">Ajouter une formation</strong>
                         <br />
                         <br />
                         <div class="box-shadow-border-radius login-input pb-4">
                            <div class="row">
                               <!--<div class="min-height-scroll">-->
                               <div class="col-lg-12 col-sm-12 mb-3">
                                  <div class="form-group">
                                     <label>Type de dotation</label>
                                     <div class="row mt-2 pt-2 endowment-type-container">
                                        <div class="col-lg-4 col-sm-4">
                                           <label class="radio-inline">
                                           <input type="radio" name="dotation-type" value="material" checked> Matériel
                                           </label>
                                        </div>
                                        <div class="col-lg-4 col-sm-4">
                                           <label class="radio-inline">
                                           <input type="radio" name="dotation-type" value="information"> Informatique
                                           </label>
                                        </div>
                                        <div class="col-lg-4 col-sm-4">
                                           <label class="radio-inline">
                                           <input type="radio" name="dotation-type" value="vehicle"> Véhicule
                                           </label>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                               <div class="material-container">
                                  <div class="col-lg-12 col-sm-12">
                                     <div class="row">
                                        <div class="col-lg-5 col-sm-5">
                                           <div class="form-group">
                                              <label>Nom du matériel</label>
                                              <select class="form-control">
                                                 <option>lorempsus</option>
                                              </select>
                                           </div>
                                           <div class="form-group">
                                              <label>Date d'obtention</label>
                                              <div class="datepicker-container">
                                                 <i class="date-icon date-icon1 float-left" aria-hidden="true"></i>
                                                 <input class="form-control bar-from" type="text" placeholder="00/00/0000" />
                                              </div>
                                           </div>
                                           <div class="form-group">
                                              <label>Lorempsus</label>
                                              <input class="form-control" type="text" placeholder="Lorempsus" />
                                           </div>
                                           <div class="form-group">
                                              <label>Lorempsus</label>
                                              <input class="form-control" type="text" placeholder="Lorempsus" />
                                           </div>
                                        </div>
                                        <div class="col-lg-7 col-sm-7">
                                           <div class="form-group">
                                              <label>Ajouter des photos</label>
                                              <div class="min-height-scroll">
                                                 <div class="pr-3">
                                                    <div class="row">
                                                       <div class="col-lg-4 col-sm-4 pr-0">
                                                          <div class="form-group">
                                                             <div class="upload-bx lightgray-upload-bx">
                                                                <i class="fa fa-plus fa-2x"></i>
                                                             </div>
                                                             <input type="file" name="" class="hide-file-input">
                                                          </div>
                                                       </div>
                                                       <div class="col-lg-8 col-sm-8">
                                                          <div class="form-group">
                                                             <label>Nom</label>
                                                             <input type="text" class="form-control" placeholder="NOM PHOTO">
                                                          </div>
                                                       </div>
                                                    </div>
                                                    <div class="row">
                                                       <div class="col-lg-4 col-sm-4 pr-0">
                                                          <div class="form-group">
                                                             <div class="upload-bx lightgray-upload-bx">
                                                                <i class="fa fa-plus fa-2x"></i>
                                                             </div>
                                                             <input type="file" name="" class="hide-file-input">
                                                          </div>
                                                       </div>
                                                       <div class="col-lg-8 col-sm-8">
                                                          <div class="form-group">
                                                             <label>Nom</label>
                                                             <input type="text" class="form-control" placeholder="NOM PHOTO">
                                                          </div>
                                                       </div>
                                                    </div>
                                                    <div class="row">
                                                       <div class="col-lg-4 col-sm-4 pr-0">
                                                          <div class="form-group">
                                                             <div class="upload-bx lightgray-upload-bx">
                                                                <i class="fa fa-plus fa-2x"></i>
                                                             </div>
                                                             <input type="file" name="" class="hide-file-input">
                                                          </div>
                                                       </div>
                                                       <div class="col-lg-8 col-sm-8">
                                                          <div class="form-group">
                                                             <label>Nom</label>
                                                             <input type="text" class="form-control" placeholder="NOM PHOTO">
                                                          </div>
                                                       </div>
                                                    </div>
                                                    <div class="row">
                                                       <div class="col-lg-4 col-sm-4 pr-0">
                                                          <div class="form-group">
                                                             <div class="upload-bx lightgray-upload-bx">
                                                                <i class="fa fa-plus fa-2x"></i>
                                                             </div>
                                                             <input type="file" name="" class="hide-file-input">
                                                          </div>
                                                       </div>
                                                       <div class="col-lg-8 col-sm-8">
                                                          <div class="form-group">
                                                             <label>Nom</label>
                                                             <input type="text" class="form-control" placeholder="NOM PHOTO">
                                                          </div>
                                                       </div>
                                                    </div>
                                                    <div class="row">
                                                       <div class="col-lg-4 col-sm-4 pr-0">
                                                          <div class="form-group">
                                                             <div class="upload-bx lightgray-upload-bx">
                                                                <i class="fa fa-plus fa-2x"></i>
                                                             </div>
                                                             <input type="file" name="" class="hide-file-input">
                                                          </div>
                                                       </div>
                                                       <div class="col-lg-8 col-sm-8">
                                                          <div class="form-group">
                                                             <label>Nom</label>
                                                             <input type="text" class="form-control" placeholder="NOM PHOTO">
                                                          </div>
                                                       </div>
                                                    </div>
                                                    <div class="row">
                                                       <div class="col-lg-4 col-sm-4 pr-0">
                                                          <div class="form-group">
                                                             <div class="upload-bx lightgray-upload-bx">
                                                                <i class="fa fa-plus fa-2x"></i>
                                                             </div>
                                                             <input type="file" name="" class="hide-file-input">
                                                          </div>
                                                       </div>
                                                       <div class="col-lg-8 col-sm-8">
                                                          <div class="form-group">
                                                             <label>Nom</label>
                                                             <input type="text" class="form-control" placeholder="NOM PHOTO">
                                                          </div>
                                                       </div>
                                                    </div>
                                                    <div class="row">
                                                       <div class="col-lg-4 col-sm-4 pr-0">
                                                          <div class="form-group mb-0">
                                                             <div class="upload-bx lightgray-upload-bx">
                                                                <i class="fa fa-plus fa-2x"></i>
                                                             </div>
                                                             <input type="file" name="" class="hide-file-input">
                                                          </div>
                                                       </div>
                                                       <div class="col-lg-8 col-sm-8">
                                                          <div class="form-group">
                                                             <label>Nom</label>
                                                             <input type="text" class="form-control" placeholder="NOM PHOTO">
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
                               <div class="information-container" style="display: none;">
                                  <div class="col-lg-12 col-sm-12">
                                     <div class="row">
                                        <div class="col-lg-5 col-sm-5">
                                           <div class="form-group">
                                              <label>Nom du matériel informatique</label>
                                              <select class="form-control">
                                                 <option>lorempsus</option>
                                              </select>
                                           </div>
                                           <div class="form-group">
                                              <label>Date d'obtention</label>
                                              <div class="datepicker-container">
                                                 <i class="date-icon date-icon1 float-left" aria-hidden="true"></i>
                                                 <input class="form-control bar-from" type="text" placeholder="00/00/0000" />
                                              </div>
                                           </div>
                                           <div class="form-group">
                                              <label>Lorempsus</label>
                                              <input class="form-control" type="text" placeholder="Lorempsus" />
                                           </div>
                                           <div class="form-group">
                                              <label>Lorempsus</label>
                                              <input class="form-control" type="text" placeholder="Lorempsus" />
                                           </div>
                                        </div>
                                        <div class="col-lg-7 col-sm-7">
                                           <div class="form-group">
                                              <label>Ajouter des photos</label>
                                              <div class="min-height-scroll">
                                                 <div class="pr-3">
                                                    <div class="row">
                                                       <div class="col-lg-4 col-sm-4 pr-0">
                                                          <div class="form-group">
                                                             <div class="upload-bx lightgray-upload-bx">
                                                                <i class="fa fa-plus fa-2x"></i>
                                                             </div>
                                                             <input type="file" name="" class="hide-file-input">
                                                          </div>
                                                       </div>
                                                       <div class="col-lg-8 col-sm-8">
                                                          <div class="form-group">
                                                             <label>Nom</label>
                                                             <input type="text" class="form-control" placeholder="NOM PHOTO">
                                                          </div>
                                                       </div>
                                                    </div>
                                                    <div class="row">
                                                       <div class="col-lg-4 col-sm-4 pr-0">
                                                          <div class="form-group">
                                                             <div class="upload-bx lightgray-upload-bx">
                                                                <i class="fa fa-plus fa-2x"></i>
                                                             </div>
                                                             <input type="file" name="" class="hide-file-input">
                                                          </div>
                                                       </div>
                                                       <div class="col-lg-8 col-sm-8">
                                                          <div class="form-group">
                                                             <label>Nom</label>
                                                             <input type="text" class="form-control" placeholder="NOM PHOTO">
                                                          </div>
                                                       </div>
                                                    </div>
                                                    <div class="row">
                                                       <div class="col-lg-4 col-sm-4 pr-0">
                                                          <div class="form-group">
                                                             <div class="upload-bx lightgray-upload-bx">
                                                                <i class="fa fa-plus fa-2x"></i>
                                                             </div>
                                                             <input type="file" name="" class="hide-file-input">
                                                          </div>
                                                       </div>
                                                       <div class="col-lg-8 col-sm-8">
                                                          <div class="form-group">
                                                             <label>Nom</label>
                                                             <input type="text" class="form-control" placeholder="NOM PHOTO">
                                                          </div>
                                                       </div>
                                                    </div>
                                                    <div class="row">
                                                       <div class="col-lg-4 col-sm-4 pr-0">
                                                          <div class="form-group">
                                                             <div class="upload-bx lightgray-upload-bx">
                                                                <i class="fa fa-plus fa-2x"></i>
                                                             </div>
                                                             <input type="file" name="" class="hide-file-input">
                                                          </div>
                                                       </div>
                                                       <div class="col-lg-8 col-sm-8">
                                                          <div class="form-group">
                                                             <label>Nom</label>
                                                             <input type="text" class="form-control" placeholder="NOM PHOTO">
                                                          </div>
                                                       </div>
                                                    </div>
                                                    <div class="row">
                                                       <div class="col-lg-4 col-sm-4 pr-0">
                                                          <div class="form-group">
                                                             <div class="upload-bx lightgray-upload-bx">
                                                                <i class="fa fa-plus fa-2x"></i>
                                                             </div>
                                                             <input type="file" name="" class="hide-file-input">
                                                          </div>
                                                       </div>
                                                       <div class="col-lg-8 col-sm-8">
                                                          <div class="form-group">
                                                             <label>Nom</label>
                                                             <input type="text" class="form-control" placeholder="NOM PHOTO">
                                                          </div>
                                                       </div>
                                                    </div>
                                                    <div class="row">
                                                       <div class="col-lg-4 col-sm-4 pr-0">
                                                          <div class="form-group">
                                                             <div class="upload-bx lightgray-upload-bx">
                                                                <i class="fa fa-plus fa-2x"></i>
                                                             </div>
                                                             <input type="file" name="" class="hide-file-input">
                                                          </div>
                                                       </div>
                                                       <div class="col-lg-8 col-sm-8">
                                                          <div class="form-group">
                                                             <label>Nom</label>
                                                             <input type="text" class="form-control" placeholder="NOM PHOTO">
                                                          </div>
                                                       </div>
                                                    </div>
                                                    <div class="row">
                                                       <div class="col-lg-4 col-sm-4 pr-0">
                                                          <div class="form-group mb-0">
                                                             <div class="upload-bx lightgray-upload-bx">
                                                                <i class="fa fa-plus fa-2x"></i>
                                                             </div>
                                                             <input type="file" name="" class="hide-file-input">
                                                          </div>
                                                       </div>
                                                       <div class="col-lg-8 col-sm-8">
                                                          <div class="form-group">
                                                             <label>Nom</label>
                                                             <input type="text" class="form-control" placeholder="NOM PHOTO">
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
                               <div class="vehicle-container min-height-scroll" style="display: none;">
                                  <div class="col-lg-12 col-sm-12">
                                     <div class="row">
                                        <div class="col-lg-6 col-sm-6">
                                           <div class="form-group">
                                              <label>Type du véhicule</label>
                                              <select class="form-control">
                                                 <option>Camion</option>
                                              </select>
                                           </div>
                                           <div class="form-group">
                                              <label>Date d'obtention</label>
                                              <div class="datepicker-container">
                                                 <i class="date-icon date-icon1 float-left" aria-hidden="true"></i>
                                                 <input class="form-control bar-from" type="text" placeholder="00/00/0000" />
                                              </div>
                                           </div>
                                           <div class="form-group">
                                              <label>Plaque d'immatriculation</label>
                                              <div class="datepicker-container">
                                                 <i class="date-icon date-icon1 float-left" aria-hidden="true"></i>
                                                 <input class="form-control bar-to" type="text" placeholder="00/00/0000" />
                                              </div>
                                           </div>
                                           <div class="form-group">
                                              <label>Médele du véhicule</label>
                                              <input class="form-control" type="text" placeholder="Médele" />
                                           </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-6">
                                           <img src="{{ asset('public/assets/img/vehicle.png')}}">
                                        </div>
                                     </div>
                                  </div>
                                  <div class="col-lg-12 col-sm-12">
                                     <div class="form-group">
                                        <label>Ajouter des photos</label>
                                        <!--<div class="min-height-scroll">
                                           <div class="pr-3">-->
                                        <div class="row">
                                           <div class="col-lg-2 col-sm-2 pr-0">
                                              <div class="form-group">
                                                 <div class="upload-bx lightgray-upload-bx">
                                                    <i class="fa fa-plus fa-2x"></i>
                                                 </div>
                                                 <input type="file" name="" class="hide-file-input">
                                              </div>
                                           </div>
                                           <div class="col-lg-4 col-sm-4">
                                              <div class="form-group">
                                                 <label>Nom</label>
                                                 <input type="text" class="form-control" placeholder="NOM PHOTO">
                                              </div>
                                           </div>
                                           <div class="col-lg-2 col-sm-2 pr-0">
                                              <div class="form-group">
                                                 <div class="upload-bx lightgray-upload-bx">
                                                    <i class="fa fa-plus fa-2x"></i>
                                                 </div>
                                                 <input type="file" name="" class="hide-file-input">
                                              </div>
                                           </div>
                                           <div class="col-lg-4 col-sm-4">
                                              <div class="form-group">
                                                 <label>Nom</label>
                                                 <input type="text" class="form-control" placeholder="NOM PHOTO">
                                              </div>
                                           </div>
                                        </div>
                                        <div class="row">
                                           <div class="col-lg-2 col-sm-2 pr-0">
                                              <div class="form-group">
                                                 <div class="upload-bx lightgray-upload-bx">
                                                    <i class="fa fa-plus fa-2x"></i>
                                                 </div>
                                                 <input type="file" name="" class="hide-file-input">
                                              </div>
                                           </div>
                                           <div class="col-lg-4 col-sm-4">
                                              <div class="form-group">
                                                 <label>Nom</label>
                                                 <input type="text" class="form-control" placeholder="NOM PHOTO">
                                              </div>
                                           </div>
                                           <div class="col-lg-2 col-sm-2 pr-0">
                                              <div class="form-group">
                                                 <div class="upload-bx lightgray-upload-bx">
                                                    <i class="fa fa-plus fa-2x"></i>
                                                 </div>
                                                 <input type="file" name="" class="hide-file-input">
                                              </div>
                                           </div>
                                           <div class="col-lg-4 col-sm-4">
                                              <div class="form-group">
                                                 <label>Nom</label>
                                                 <input type="text" class="form-control" placeholder="NOM PHOTO">
                                              </div>
                                           </div>
                                        </div>
                                        <div class="row">
                                           <div class="col-lg-2 col-sm-2 pr-0">
                                              <div class="form-group">
                                                 <div class="upload-bx lightgray-upload-bx">
                                                    <i class="fa fa-plus fa-2x"></i>
                                                 </div>
                                                 <input type="file" name="" class="hide-file-input">
                                              </div>
                                           </div>
                                           <div class="col-lg-4 col-sm-4">
                                              <div class="form-group">
                                                 <label>Nom</label>
                                                 <input type="text" class="form-control" placeholder="NOM PHOTO">
                                              </div>
                                           </div>
                                           <div class="col-lg-2 col-sm-2 pr-0">
                                              <div class="form-group">
                                                 <div class="upload-bx lightgray-upload-bx">
                                                    <i class="fa fa-plus fa-2x"></i>
                                                 </div>
                                                 <input type="file" name="" class="hide-file-input">
                                              </div>
                                           </div>
                                           <div class="col-lg-4 col-sm-4">
                                              <div class="form-group">
                                                 <label>Nom</label>
                                                 <input type="text" class="form-control" placeholder="NOM PHOTO">
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                     <!--</div>
                                        </div>-->
                                  </div>
                               </div>
                               <!--</div>-->
                               <!--<div class="col-lg-12 col-sm-12 mt-2 text-center">
                                  <button class="btn btn-lightblue btn-lightgreen" type="submit">Ajouter</button>
                                  </div>-->
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="row">
                      <div class="col-lg-12 col-sm-12" style="margin-top: -40px;">
                         <button class="btn btn-lightblue float-right mr-5" type="submit">Enregistrer</button>
                         <button class="btn btn-lightblue mr-2 btn-lightblue-another box-shadow-border-radius float-right" type="submit">Ajouter la formation</button>
                      </div>
                   </div>
                </div>
                <div class="tab-pane" id="statistics_edit_{{$collabotation->id}}" role="tabpanel" aria-labelledby="statistics-tab">
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
                <div class="tab-pane" id="absences-and-deviations_edit_{{$collabotation->id}}" role="tabpanel" aria-labelledby="absences-and-deviations-tab">
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
                <div class="tab-pane" id="contract_edit_{{$collabotation->id}}" role="tabpanel" aria-labelledby="contract-tab">

                    @php
                        $collaboration_contact = DB::table('llx_collaboration_contract')->where('collaboration_id',$collabotation->id)->first();
                    @endphp




                    <form method="post" action="{{route('collabotation.contact_edit')}}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="collaboration_id" value="{{$collabotation->id}}">
                        <div class="row min-height-scroll">
                            <div class="col-lg-4 col-sm-4 px-4">
                                <div class="form-group">
                                    <label>Poste</label>
                                    <select class="form-control" name="poste">
                                        <option>LOREM</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-6">
                                            <label>Agence</label>
                                            <select class="form-control" name="agence">
                                                <option>AGENCE NAME</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6 col-sm-6">
                                            <label>NNI</label>
                                            <input type="text" name="nni" class="form-control"  value="{{!$collaboration_contact ? '' : $collaboration_contact->nni }}">
                                        </div>
                                    </div>
                            </div>
                            <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-6">
                                            <label>Habilitation</label>
                                            <select class="form-control" name="habilitation">
                                                <option>HABILITATION</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6 col-sm-6">
                                            <label>Date de fin d'habilitation</label>
                                            <div class="datepicker-container">
                                            <i class="date-icon date-icon1 float-left" aria-hidden="true"></i>
                                            <input class="form-control bar-from" type="text" name="end_date_authorization" placeholder="00/00/0000" />
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
                            <button class="btn btn-lightblue float-right" type="submit">Enregistrer</button>
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
      $('#photo2_{{$collabotation->id}}').change(function(){
        const file = this.files[0];
        console.log(file);
        if (file){
          let reader = new FileReader();
          reader.onload = function(event){
            console.log(event.target.result);
            $('#imgPreview2_{{$collabotation->id}}').attr('src', event.target.result);
          }
          reader.readAsDataURL(file);
        }
      });
    });
  </script>
