<form  method="post" enctype="multipart/form-data"  id="dotation_form" data-parsley-validate>
    @csrf
    {{-- action="{{ route('collabotation.dotation_materiel') }}" --}}
    <input type="hidden" name="collaboration_id" id="collaboration_id_{{$collaboration_id}}" value="{{ $collaboration_id }}">
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
                                <input type="radio" name="dotation_type" value="material" checked> Matériel
                            </label>
                        </div>
                        <div class="col-lg-4 col-sm-4">
                            <label class="radio-inline">
                                <input type="radio" name="dotation_type" value="information"> Informatique
                            </label>
                        </div>
                        <div class="col-lg-4 col-sm-4">
                            <label class="radio-inline">
                                <input type="radio" name="dotation_type" value="vehicle"> Véhicule
                            </label>
                        </div>
                    </div>
                </div>
            </div>


            {{-- material TAB --}}
            <div class="material-container">
                <div class="col-lg-12 col-sm-12">
                    <div class="row">
                        <div class="col-lg-5 col-sm-5">
                            <div class="form-group">
                                <label>Nom du matériel</label>
                                <select class="form-control" name="materiel_name" id="materiel_name_{{$collaboration_id}}">
                                    <option value="CAP. ISOLANT BT LG60 D.10">CAP. ISOLANT BT LG60 D.10</option>
                                    <option value="CAP. ISOLANT BT LG100 D.15">CAP. ISOLANT BT LG100 D.15</option>
                                    <option value="COUTEAU ISOLE LAME COURBEE">COUTEAU ISOLE LAME COURBEE</option>
                                    <option value="CLE MALE DROITE AVEC MANCHE BOULE">CLE MALE DROITE AVEC MANCHE BOULE</option>
                                    <option value="CLE MULTIPLE PLIABLE">CLE MULTIPLE PLIABLE</option>
                                    <option value="CLE TUB.ISO.BEQ.6P10X17">CLE TUB.ISO.BEQ.6P10X17</option>
                                    <option value="PINCE COUPE CABLE COMPOSITE">PINCE COUPE CABLE COMPOSITE</option>
                                    <option value="PINCE DEMI RONDE DROITE COMPOSITE">PINCE DEMI RONDE DROITE COMPOSITE</option>
                                    <option value="DISQUE APPAREIL CONDAMNE PVC">DISQUE APPAREIL CONDAMNE PVC</option>
                                    <option value="MULTICONTROLEUR VAT AVEC ROTATION A LED+SACCOCHE">MULTICONTROLEUR VAT AVEC ROTATION A LED+SACCOCHE</option>
                                    <option value="TOURNEVIS ISOLE EMBOUT POZIDRIVE 4X75">TOURNEVIS ISOLE EMBOUT POZIDRIVE 4X75</option>
                                    <option value="TOURNEVIS ISOLE EMBOUT POZIDRIVE 6X125">TOURNEVIS ISOLE EMBOUT POZIDRIVE 6X125</option>
                                    <option value="MATC0 - TAPIS ISOLANT CLASSE 0 0.6X1">MATC0 - TAPIS ISOLANT CLASSE 0 0.6X1</option>
                                    <option value="TOURNEVIS ISOLE EMBOUT PLAT TYPE B 3.5X100">TOURNEVIS ISOLE EMBOUT PLAT TYPE B 3.5X100</option>
                                    <option value="TOURNEVIS ISOLE EMBOUT PLAT TYPE B 5.5X150">TOURNEVIS ISOLE EMBOUT PLAT TYPE B 5.5X150</option>
                                    <option value="TOURNEVIS ISOLE EMBOUT PLAT TYPE B 8X150">TOURNEVIS ISOLE EMBOUT PLAT TYPE B 8X150</option>
                                    <option value="TROUSSE TD4">TROUSSE TD4</option>
                                    <option value="LAMPE FRONTALE 3 LEDS">LAMPE FRONTALE 3 LEDS</option>
                                    <option value="CLE MALE DROITE AVEC MANCHE">CLE MALE DROITE AVEC MANCHE</option>
                                    <option value="PINCE DEMI RONDE COUDEE COMPOSITE">PINCE DEMI RONDE COUDEE COMPOSITE</option>
                                    <option value="SAC A DOS ELECTRICIEN ">SAC A DOS ELECTRICIEN </option>
                                    <option value="TOURNEVIS ISOLE EMBOUT PLAT TYPE B 4X100">TOURNEVIS ISOLE EMBOUT PLAT TYPE B 4X100</option>
                                    <option value="TOURNEVIS ISOLE EMBOUT PLAT TYPE B 6.5X150">TOURNEVIS ISOLE EMBOUT PLAT TYPE B 6.5X150</option>
                                    <option value="TOURNEVIS BOULE PLAT 6.5X40 DECOLLETE">TOURNEVIS BOULE PLAT 6.5X40 DECOLLETE</option>
                                    <option value="CHAUSSURE SECURITE">CHAUSSURE SECURITE</option>
                                    <option value="VISSEUSE">VISSEUSE</option>
                                    <option value="MECHE  12">MECHE  12</option>
                                    <option value="EMBOUT VISSEUSE ">EMBOUT VISSEUSE </option>
                                    <option value="ESCABEAU">ESCABEAU</option>
                                    <option value="SMARTCOFFEE">SMARTCOFFEE</option>
                                    <option value="BLUETOOTH">BLUETOOTH</option>
                                    <option value="BADGE VIGICK ">BADGE VIGICK </option>
                                    <option value="CLE PTT">CLE PTT</option>
                                    <option value="GANS DE MANUTENTION ">GANS DE MANUTENTION </option>
                                    <option value="PINCE ARRACHE FUSIBLE POUR AD COUTEAU ">PINCE ARRACHE FUSIBLE POUR AD COUTEAU </option>
                                    <option value="PINCE ARRACHE FUSIBLE POUR AD CYLINDRIQUE ">PINCE ARRACHE FUSIBLE POUR AD CYLINDRIQUE </option>
                                    <option value="BANDEROLE DANDER">BANDEROLE DANDER</option>
                                    <option value="CONNE DE BALISAGE">CONNE DE BALISAGE</option>
                                    <option value="ACCESSOIRE DE CONSIGNATION ">ACCESSOIRE DE CONSIGNATION </option>
                                    <option value="GABARIT DE POSE">GABARIT DE POSE</option>


                                </select>
                            </div>
                            <div class="form-group">
                                <label>Date d'obtention <span class="red_color">*</span></label>
                                <div class="datepicker-container">
                                    <i class="date-icon date-icon1 float-left" aria-hidden="true"></i>
                                    <input class="form-control bar-from" type="text" placeholder="00/00/0000"
                                        name="obtained_material" id="obtained_material" />
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
                                                        <img id="img_material_Preview1"
                                                            src="{{ asset('public/assets/img/icons/plus_grey.png') }}" />
                                                    </div>
                                                    <input type="file" class="hide-file-input" id="img1_material"
                                                        name="img1_material">
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-sm-8">
                                                <div class="form-group">
                                                    <label>Nom</label>
                                                    <input type="text" class="form-control" placeholder="NOM PHOTO"
                                                        name="img1_material_name" id="img1_material_name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 col-sm-4 pr-0">
                                                <div class="form-group">
                                                    <div class="upload-bx lightgray-upload-bx">
                                                        <img id="img_material_Preview2"
                                                            src="{{ asset('public/assets/img/icons/plus_grey.png') }}" />
                                                    </div>
                                                    <input type="file" class="hide-file-input" id="img2_material"
                                                        name="img2_material">
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-sm-8">
                                                <div class="form-group">
                                                    <label>Nom</label>
                                                    <input type="text" class="form-control" placeholder="NOM PHOTO"
                                                        name="img2_material_name" id="img2_material_name">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-4 col-sm-4 pr-0">
                                                <div class="form-group">
                                                    <div class="upload-bx lightgray-upload-bx">
                                                        <img id="img_material_Preview3"
                                                            src="{{ asset('public/assets/img/icons/plus_grey.png') }}" />
                                                    </div>
                                                    <input type="file" class="hide-file-input" id="img3_material"
                                                        name="img3_material">
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-sm-8">
                                                <div class="form-group">
                                                    <label>Nom</label>
                                                    <input type="text" class="form-control" placeholder="NOM PHOTO"
                                                        name="img3_material_name" id="img3_material_name">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-lg-4 col-sm-4 pr-0">
                                                <div class="form-group">
                                                    <div class="upload-bx lightgray-upload-bx">
                                                        <img id="img_material_Preview4"
                                                            src="{{ asset('public/assets/img/icons/plus_grey.png') }}" />
                                                    </div>
                                                    <input type="file" class="hide-file-input" id="img4_material"
                                                        name="img4_material">
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-sm-8">
                                                <div class="form-group">
                                                    <label>Nom</label>
                                                    <input type="text" class="form-control" placeholder="NOM PHOTO"
                                                        name="img4_material_name" id="img4_material_name">
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
            {{-- material TAB --}}

            {{-- information TAB --}}
            <div class="information-container" style="display: none;">
                <div class="col-lg-12 col-sm-12">
                    <div class="row">
                        <div class="col-lg-5 col-sm-5">
                            <div class="form-group">
                                <label>Nom du matériel informatique</label>
                                <select class="form-control" name="materiel_name_information" id="materiel_name_information_{{$collaboration_id}}">
                                    <option value="lorempsus">lorempsus</option>
                                    <option value="lorempsus1">lorempsus1</option>
                                    <option value="lorempsus2">lorempsus2</option>
                                    <option value="lorempsus3">lorempsus3</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Date d'obtention <span class="red_color">*</span></label>
                                <div class="datepicker-container">
                                    <i class="date-icon date-icon1 float-left" aria-hidden="true"></i>
                                    <input class="form-control bar-from" type="text" name="obtained_information"
                                        placeholder="00/00/0000" id="obtained_information" />
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
                                                        <img id="img_information_Preview1"
                                                            src="{{ asset('public/assets/img/icons/plus_grey.png') }}" />
                                                    </div>
                                                    <input type="file" id="img1_information" name="img1_information"
                                                        class="hide-file-input">
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-sm-8">
                                                <div class="form-group">
                                                    <label>Nom</label>
                                                    <input type="text" name="img1_information_name"
                                                        class="form-control" id="img1_information_name" placeholder="NOM PHOTO">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 col-sm-4 pr-0">
                                                <div class="form-group">
                                                    <div class="upload-bx lightgray-upload-bx">
                                                        <img id="img_information_Preview2"
                                                            src="{{ asset('public/assets/img/icons/plus_grey.png') }}" />
                                                    </div>
                                                    <input type="file" id="img2_information" name="img2_information"
                                                        class="hide-file-input">
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-sm-8">
                                                <div class="form-group">
                                                    <label>Nom</label>
                                                    <input type="text" name="img2_information_name"
                                                        class="form-control" id="img2_information_name" placeholder="NOM PHOTO">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-lg-4 col-sm-4 pr-0">
                                                <div class="form-group">
                                                    <div class="upload-bx lightgray-upload-bx">
                                                        <img id="img_information_Preview3"
                                                            src="{{ asset('public/assets/img/icons/plus_grey.png') }}" />
                                                    </div>
                                                    <input type="file" id="img3_information" name="img3_information"
                                                        class="hide-file-input">
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-sm-8">
                                                <div class="form-group">
                                                    <label>Nom</label>
                                                    <input type="text" name="img3_information_name"
                                                        class="form-control" id="img3_information_name" placeholder="NOM PHOTO">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-lg-4 col-sm-4 pr-0">
                                                <div class="form-group">
                                                    <div class="upload-bx lightgray-upload-bx">
                                                        <img id="img_information_Preview4"
                                                            src="{{ asset('public/assets/img/icons/plus_grey.png') }}" />
                                                    </div>
                                                    <input type="file" id="img4_information" name="img4_information"
                                                        class="hide-file-input">
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-sm-8">
                                                <div class="form-group">
                                                    <label>Nom</label>
                                                    <input type="text" name="img4_information_name"
                                                        class="form-control" id="img4_information_name" placeholder="NOM PHOTO">
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
            {{-- information TAB --}}

            {{-- Vehicle TAB --}}
            <div class="vehicle-container min-height-scroll" style="display: none;">
                <div class="col-lg-12 col-sm-12">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>Type du véhicule</label>
                                <select class="form-control" name="type_vehicle" id="type_vehicle_{{$collaboration_id}}">
                                    <option value="Camion1">Camion1</option>
                                    <option value="Camion2">Camion2</option>
                                    <option value="Camion3">Camion3</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Date d'obtention <span class="red_color">*</span></label>
                                <div class="datepicker-container">
                                    <i class="date-icon date-icon1 float-left" aria-hidden="true"></i>
                                    <input class="form-control bar-from" type="text" name="obtained_vehicle"
                                        placeholder="00/00/0000" id="obtained_vehicle"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Plaque d'immatriculation</label>
                                <input class="form-control" type="text" name="number_plate" id="number_plate"
                                    placeholder="Plaque d'immatriculation" />
                            </div>
                            <div class="form-group">
                                <label>Médele du véhicule</label>
                                <input class="form-control" type="text" placeholder="Médele" name="model" id="model" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <img src="{{ asset('public/assets/img/vehicle.png') }}">
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
                                        <img id="img1_vehicle_Preview1"
                                            src="{{ asset('public/assets/img/icons/plus_grey.png') }}" />
                                    </div>
                                    <input type="file" class="hide-file-input" id="img1_vehicle" name="img1_vehicle">
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-4">
                                <div class="form-group">
                                    <label>Face</label>
                                    <input type="text" class="form-control" name="img1_vehicle_name"
                                        placeholder="Face" id="img1_vehicle_name">
                                </div>
                            </div>



                            <div class="col-lg-2 col-sm-2 pr-0">
                                <div class="form-group">
                                    <div class="upload-bx lightgray-upload-bx">
                                        <img id="img2_vehicle_Preview2"
                                            src="{{ asset('public/assets/img/icons/plus_grey.png') }}" />
                                    </div>
                                    <input type="file" id="img2_vehicle" name="img2_vehicle" class="hide-file-input">
                                </div>
                            </div>



                            <div class="col-lg-4 col-sm-4">
                                <div class="form-group">
                                    <label>Derrière</label>
                                    <input type="text" class="form-control" name="img2_vehicle_name"
                                        placeholder="Derrière" id="img2_vehicle_name">
                                </div>
                            </div>
                        </div>



                        <div class="row">
                            <div class="col-lg-2 col-sm-2 pr-0">
                                <div class="form-group">
                                    <div class="upload-bx lightgray-upload-bx">
                                        <img id="img3_vehicle_Preview3"
                                            src="{{ asset('public/assets/img/icons/plus_grey.png') }}" />
                                    </div>
                                    <input type="file" id="img3_vehicle" name="img3_vehicle" class="hide-file-input">
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-4">
                                <div class="form-group">
                                    <label>Côté droit</label>
                                    <input type="text" class="form-control" name="img3_vehicle_name"
                                        placeholder="Côté droit" id="img3_vehicle_name">
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-2 pr-0">
                                <div class="form-group">
                                    <div class="upload-bx lightgray-upload-bx">
                                        <img id="img4_vehicle_Preview4"
                                            src="{{ asset('public/assets/img/icons/plus_grey.png') }}" />
                                    </div>
                                    <input type="file" id="img4_vehicle" name="img4_vehicle" class="hide-file-input">
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-4">
                                <div class="form-group">
                                    <label>Côté gauche</label>
                                    <input type="text" class="form-control" name="img4_vehicle_name"
                                        placeholder="Côté gauche" id="img4_vehicle_name">
                                </div>
                            </div>
                        </div>

                    </div>
                    <!--</div>
                        </div>-->
                </div>
            </div>
            {{-- Vehicle TAB Close --}}
            <!--</div>-->
            <!--<div class="col-lg-12 col-sm-12 mt-2 text-center">
                <button class="btn btn-lightblue btn-lightgreen" type="submit">Ajouter</button>
            </div>-->
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 col-sm-12" style="margin-top: 40px;">
            <button class="btn btn-lightblue float-right mr-5 btn_dotation_edit_{{$collaboration_id}}">Enregistrer</button>
            <button class="btn btn-lightblue mr-2 btn-lightblue-another box-shadow-border-radius float-right"
                type="submit">Ajouter la formation</button>
        </div>
    </div>
</form>


<script>
    $(document).ready(() => {

        $('#img1_material').change(function() {
            const file = this.files[0];
            console.log(file);
            if (file) {
                let reader = new FileReader();
                reader.onload = function(event) {
                    console.log(event.target.result);
                    $('#img_material_Preview1').attr('src', event.target.result);
                }
                reader.readAsDataURL(file);
            }
        });


        $('#img2_material').change(function() {
            const file = this.files[0];
            console.log(file);
            if (file) {
                let reader = new FileReader();
                reader.onload = function(event) {
                    console.log(event.target.result);
                    $('#img_material_Preview2').attr('src', event.target.result);
                }
                reader.readAsDataURL(file);
            }
        });

        $('#img3_material').change(function() {
            const file = this.files[0];
            console.log(file);
            if (file) {
                let reader = new FileReader();
                reader.onload = function(event) {
                    console.log(event.target.result);
                    $('#img_material_Preview3').attr('src', event.target.result);
                }
                reader.readAsDataURL(file);
            }
        });

        $('#img4_material').change(function() {
            const file = this.files[0];
            console.log(file);
            if (file) {
                let reader = new FileReader();
                reader.onload = function(event) {
                    console.log(event.target.result);
                    $('#img_material_Preview4').attr('src', event.target.result);
                }
                reader.readAsDataURL(file);
            }
        });



        $('#img1_information').change(function() {
            const file = this.files[0];
            console.log(file);
            if (file) {
                let reader = new FileReader();
                reader.onload = function(event) {
                    console.log(event.target.result);
                    $('#img_information_Preview1').attr('src', event.target.result);
                }
                reader.readAsDataURL(file);
            }
        });


        $('#img2_information').change(function() {
            const file = this.files[0];
            console.log(file);
            if (file) {
                let reader = new FileReader();
                reader.onload = function(event) {
                    console.log(event.target.result);
                    $('#img_information_Preview2').attr('src', event.target.result);
                }
                reader.readAsDataURL(file);
            }
        });


        $('#img3_information').change(function() {
            const file = this.files[0];
            console.log(file);
            if (file) {
                let reader = new FileReader();
                reader.onload = function(event) {
                    console.log(event.target.result);
                    $('#img_information_Preview3').attr('src', event.target.result);
                }
                reader.readAsDataURL(file);
            }
        });

        $('#img4_information').change(function() {
            const file = this.files[0];
            console.log(file);
            if (file) {
                let reader = new FileReader();
                reader.onload = function(event) {
                    console.log(event.target.result);
                    $('#img_information_Preview4').attr('src', event.target.result);
                }
                reader.readAsDataURL(file);
            }
        });

        $('#img1_vehicle').change(function() {
            const file = this.files[0];
            console.log(file);
            if (file) {
                let reader = new FileReader();
                reader.onload = function(event) {
                    console.log(event.target.result);
                    $('#img1_vehicle_Preview1').attr('src', event.target.result);
                }
                reader.readAsDataURL(file);
            }
        });

        $('#img2_vehicle').change(function() {
            const file = this.files[0];
            console.log(file);
            if (file) {
                let reader = new FileReader();
                reader.onload = function(event) {
                    console.log(event.target.result);
                    $('#img2_vehicle_Preview2').attr('src', event.target.result);
                }
                reader.readAsDataURL(file);
            }
        });

        $('#img3_vehicle').change(function() {
            const file = this.files[0];
            console.log(file);
            if (file) {
                let reader = new FileReader();
                reader.onload = function(event) {
                    console.log(event.target.result);
                    $('#img3_vehicle_Preview3').attr('src', event.target.result);
                }
                reader.readAsDataURL(file);
            }
        });

        $('#img4_vehicle').change(function() {
            const file = this.files[0];
            console.log(file);
            if (file) {
                let reader = new FileReader();
                reader.onload = function(event) {
                    console.log(event.target.result);
                    $('#img4_vehicle_Preview4').attr('src', event.target.result);
                }
                reader.readAsDataURL(file);
            }
        });


    });
</script>


<script>
    $(".btn_dotation_edit_{{$collaboration_id}}").click(function(e){

        e.preventDefault();
        var collaboration_id = $('#collaboration_id_{{$collaboration_id}}').val();
        var materiel_name = $('#materiel_name_{{$collaboration_id}}').val();
        var obtained_material = $('#obtained_material').val();

        var img1_material_name = $('#img1_material_name').val();
        var img1_material = $('#img1_material').prop('files')[0];

        var img2_material_name = $('#img2_material_name').val();
        var img2_material = $('#img2_material').prop('files')[0];

        var img3_material_name = $('#img3_material_name').val();
        var img3_material = $('#img3_material').prop('files')[0];

        var img4_material_name = $('#img4_material_name').val();
        var img4_material = $('#img4_material').prop('files')[0];

        var materiel_name_information = $('#materiel_name_information_{{$collaboration_id}}').val();
        var obtained_information = $('#obtained_information').val();


        var img1_information_name = $('#img1_information_name').val();
        var img1_information= $('#img1_information').prop('files')[0];

        var img2_information_name = $('#img2_information_name').val();
        var img2_information= $('#img2_information').prop('files')[0];

        var img3_information_name = $('#img3_information_name').val();
        var img3_information= $('#img3_information').prop('files')[0];

        var img4_information_name = $('#img4_information_name').val();
        var img4_information= $('#img4_information').prop('files')[0];

        var type_vehicle = $('#type_vehicle_{{$collaboration_id}}').val();
        var obtained_vehicle = $('#obtained_vehicle').val();
        var number_plate = $('#number_plate').val();
        var model = $('#model').val();

        var img1_vehicle_name = $('#img1_vehicle_name').val();
        var img1_vehicle = $('#img1_vehicle').prop('files')[0];

        var img2_vehicle_name = $('#img2_vehicle_name').val();
        var img2_vehicle = $('#img2_vehicle').prop('files')[0];

        var img3_vehicle_name = $('#img3_vehicle_name').val();
        var img3_vehicle = $('#img3_vehicle').prop('files')[0];

        var img4_vehicle_name = $('#img4_vehicle_name').val();
        var img4_vehicle = $('#img4_vehicle').prop('files')[0];

        var dotation_type = $('input[name="dotation_type"]:checked', '#dotation_form').val();


        var form_data = new FormData();

        form_data.append('collaboration_id', collaboration_id);
        form_data.append('dotation_type', dotation_type);
        form_data.append('materiel_name', materiel_name);
        form_data.append('obtained_material', obtained_material);
        form_data.append('img1_material_name', img1_material_name);
        form_data.append('img1_material', img1_material);
        form_data.append('img2_material_name', img2_material_name);
        form_data.append('img2_material', img2_material);
        form_data.append('img3_material_name', img3_material_name);
        form_data.append('img3_material', img3_material);
        form_data.append('img4_material_name', img4_material_name);
        form_data.append('img4_material', img4_material);

        form_data.append('materiel_name_information', materiel_name_information);
        form_data.append('obtained_information', obtained_information);
        form_data.append('img1_information_name', img1_information_name);
        form_data.append('img1_information', img1_information);

        form_data.append('img2_information_name', img2_information_name);
        form_data.append('img2_information', img2_information);

        form_data.append('img3_information_name', img3_information_name);
        form_data.append('img3_information', img3_information);

        form_data.append('img4_information_name', img4_information_name);
        form_data.append('img4_information', img4_information);


        form_data.append('type_vehicle', type_vehicle);
        form_data.append('obtained_vehicle', obtained_vehicle);
        form_data.append('number_plate', number_plate);
        form_data.append('model', model);
        form_data.append('img1_vehicle', img1_vehicle);
        form_data.append('img1_vehicle_name', img1_vehicle_name);

        form_data.append('img2_vehicle', img2_vehicle);
        form_data.append('img2_vehicle_name', img2_vehicle_name);

        form_data.append('img3_vehicle', img3_vehicle);
        form_data.append('img3_vehicle_name', img3_vehicle_name);

        form_data.append('img4_vehicle', img4_vehicle);
        form_data.append('img4_vehicle_name', img4_vehicle_name);

                $.ajax({
                    type:'POST',
                    url: "{{  route('collabotation.dotation_materiel')}}",
                    // data: $('#absences_form_{{$collaboration_id}}').serialize(),
                    data:  form_data,
                    cache:false,
                    contentType: false,
                    processData: false,
                    dataType:'json',
                    success: function(data){


                        $("#dotation_employee-confirmation-register-modal_{{ $collaboration_id }}").modal('show');

                        $('.dotation_noms_{{$collaboration_id}}').html(data.dates);

                    },
                    error: function(data){
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

    });
</script>
