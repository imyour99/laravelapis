<div class="col-lg-3" style="margin-top:-60px">
    <div class="col-white12-col" >
        <div class="search-group">
            <input class="search-input mr-2" type="text" placeholder="Recherche de filtres…."/>
            <button class="button button-brand-primary button-search"><i class="fas fa-redo"></i></button>
        
        </div>
        <div class="card custom-card overflow-hidden search-filter-options">

            <div class="card-body px-0 py-5">

                <form action="{{ url('clientsList') }}" method="POST">
                    @csrf
                    <!-- accordion -->
                    <div aria-multiselectable="true" class="accordion" id="accordion" role="tablist">

                       
                        <div class="card 1" id="customer-details-div">
                            <div class="card-header" id="headingTwoHIW" role="tab">
                                <a aria-controls="collapseTwoHIW" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapseTwoHIW">Customer Details</a>
                            </div>
                            <div aria-labelledby="headingTwoHIW" class="collapse" data-parent="#accordion" id="collapseTwoHIW" role="tabpanel">
                                <div class="card-body px-2">
                                    <div class="form-group">
                                        <label>Nom client</label>
                                        <input type="text" name="nom_name" class="form-control" value="{{ !empty($requests['nom_name']) ? $requests['nom_name']:'' }}" />
                                    </div>
                                    <div class="form-group">
                                        <label>N*PDL</label>
                                        <input type="text" name="npdl" class="form-control" value="{{ !empty($requests['npdl']) ? $requests['npdl']:'' }}" />
                                    </div>
                                    <div class="form-group">
                                        <label>Matricule ou téléphone</label>
                                        <input type="text" name="telephone" class="form-control" value="{{ !empty($requests['telephone']) ? $requests['telephone']:'' }}" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card 2" id="market-div">
                            <div class="card-header" id="headingTwoHIW" role="tab">
                                <a aria-controls="collapseThreeHIW" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapseThreeHIW">Marchés</a>
                            </div>
                            <div aria-labelledby="headingThreeHIW" class="collapse" data-parent="#accordion" id="collapseThreeHIW" role="tabpanel">
                                <div class="card-body px-2">
                                    <div class="form-group">
                                        <label>Marchés</label>
                                        <select class="form-control" name="market">
                                            <option value=""></option>
                                            <?php


                                                $selections = $filters['markets'];
                                                $selected = !empty($requests['market']) ? $requests['market']:'';

                                                foreach($selections as $selection){
                                                    echo '<option value="'.$selection->id.'"';
                                                    if($selected == $selection->id) echo ' selected ';
                                                    echo '>'.$selection->name.'</option>';
                                                }
                                                
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="card 3" id="commune-div">
                            <div class="card-header" id="headingfourHIW" role="tab">
                                <a aria-controls="collapsefourHIW" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapsefourHIW">Commune</a>
                            </div>
                            <div aria-labelledby="headingfourHIW" class="collapse" data-parent="#accordion" id="collapsefourHIW" role="tabpanel">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Commune</label>
                                        <input type="text" name="commune" class="form-control" value="{{ !empty($requests['commune']) ? $requests['commune']:'' }}" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                        <div class="card 4" id="address-div">
                            <div class="card-header" id="headingfiveHIW" role="tab">
                                <a aria-controls="collapsefiveHIW" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapsefiveHIW">Adresse client</a>
                            </div>
                            <div aria-labelledby="headingfiveHIW" class="collapse" data-parent="#accordion" id="collapsefiveHIW" role="tabpanel">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Adresse client</label>
                                        <input type="text" name="address" class="form-control" value="{{ !empty($requests['address']) ? $requests['address']:'' }}" />
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        
                        <div class="card 5" id="client-type-div">
                            <div class="card-header" id="heading6" role="tab">
                                <a aria-controls="collapse6" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapse6">Type de client</a>
                            </div>
                            <div aria-labelledby="heading6" class="collapse" data-parent="#accordion" id="collapse6" role="tabpanel">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Type de client</label>
                                        <select class="form-control" name="client_type">
                                            <option value=""></option>
                                            <?php
                                                
                                                $selections = $filters['client_types'];
                                                $selected = !empty($requests['client_type']) ? $requests['client_type']:'';

                                                foreach($selections as $selection){
                                                    echo '<option value="'.$selection->id.'"';
                                                    if($selected == $selection->id) echo ' selected ';
                                                    echo '>'.$selection->name.'</option>';
                                                }
                                                
                                            ?>                                   
                                        </select>
                                    </div>
                                </div>
                            </div><!-- collapse -->
                        </div>
                        <div class="card 6" id="intervention-status-div">
                            <div class="card-header" id="heading7" role="tab">
                                <a aria-controls="collapse7" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapse7">Statut de l'intervention</a>
                            </div>
                            <div aria-labelledby="heading7" class="collapse" data-parent="#accordion" id="collapse7" role="tabpanel">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Statut de l'intervention</label>
                                        <select name="intervention_status" class="form-control">
                                            <option value=""></option>
                                            <?php

                                                $selections = $filters['intervention_statuses'];
                                                $selected = !empty($requests['intervention_status']) ? $requests['intervention_status']:'';

                                                foreach($selections as $selection){
                                                    echo '<option value="'.$selection->id.'"';
                                                    if($selected == $selection->id) echo ' selected ';
                                                    echo '>'.$selection->name.'</option>';
                                                }

                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div><!-- collapse -->
                        </div>
                        <div class="card 7" id="contract-status-div">
                            <div class="card-header" id="heading8" role="tab">
                                <a aria-controls="collapse8" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapse8">Statut du contrat</a>
                            </div>
                            <div aria-labelledby="heading8" class="collapse" data-parent="#accordion" id="collapse8" role="tabpanel">
                                <div class="card-body">
                                    <label>Statut du contrat</label>
                                    <select class="form-control" name="contract_status">
                                        <option value=""></option>
                                        <?php

                                            $selections = $filters['contract_status'];
                                            $selected = !empty($requests['contract_status']) ? $requests['contract_status']:'';

                                            foreach($selections as $selection){
                                                echo '<option value="'.$selection->id.'"';
                                                if($selected == $selection->id) echo ' selected ';
                                                echo '>'.$selection->name.'</option>';
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div><!-- collapse -->
                        </div>
                        <div class="card 8" id="producers-div">
                            <div class="card-header" id="heading9" role="tab">
                                <a aria-controls="collapse9" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapse9">Producteurs</a>
                            </div>
                            <div aria-labelledby="heading9" class="collapse" data-parent="#accordion" id="collapse9" role="tabpanel">
                                <div class="card-body">
                                    <label>Producteurs</label>
                                    <select class="form-control" name="producers">
                                        <option value=""></option>
                                        <?php

                                            $selections = $filters['producers'];
                                            $selected = !empty($requests['producers']) ? $requests['producers']:'';

                                            foreach($selections as $selection){
                                                echo '<option value="'.$selection->id.'"';
                                                if($selected == $selection->id) echo ' selected ';
                                                echo '>'.$selection->name.'</option>';
                                            }

                                        ?>
                                    </select>
                                </div>
                            </div><!-- collapse -->
                        </div>
                        <div class="card 9" id="meter-accessibility-div">
                            <div class="card-header" id="heading10" role="tab">
                                <a aria-controls="collapse10" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapse10">Accessibilité compteur</a>
                            </div>
                            <div aria-labelledby="heading10" class="collapse" data-parent="#accordion" id="collapse10" role="tabpanel">
                                <div class="card-body">
                                    <label>Accessibilité compteur</label>
                                    <select class="form-control" name="meter_accessibility">
                                        <option value=""></option>
                                        <?php

                                            $selections = $filters['meter_accessibility'];
                                            $selected = !empty($requests['meter_accessibility']) ? $requests['meter_accessibility']:'';

                                            foreach($selections as $selection){
                                                echo '<option value="'.$selection->id.'"';
                                                if($selected == $selection->id) echo ' selected ';
                                                echo '>'.$selection->name.'</option>';
                                            }

                                        ?>                                    
                                    </select>
                                </div>
                            </div><!-- collapse -->
                        </div>
                        <div class="card 10" id="appointment-need-div">
                            <div class="card-header" id="heading11" role="tab">
                                <a aria-controls="collapse11" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapse11">Nécessité de RDV</a>
                            </div>
                            <div aria-labelledby="heading11" class="collapse" data-parent="#accordion" id="collapse11" role="tabpanel">
                                <div class="card-body">
                                    <label>Nécessité de RDV</label>
                                    <select class="form-control" name="appointment_need">    
                                        <option value=""></option>                                
                                        <?php

                                            $selections = $filters['appointment_need'];
                                            $selected = !empty($requests['appointment_need']) ? $requests['appointment_need']:'';

                                            foreach($selections as $selection){
                                                echo '<option value="'.$selection->id.'"';
                                                if($selected == $selection->id) echo ' selected ';
                                                echo '>'.$selection->name.'</option>';
                                            }

                                        ?>
                                    </select>
                                </div>
                            </div><!-- collapse -->
                        </div>
                        <div class="card 11" id="technicien">
                            <div class="card-header" id="heading12" role="tab">
                                <a aria-controls="collapse12" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapse12">Technicien en charge</a>
                            </div>
                            <div aria-labelledby="heading12" class="collapse" data-parent="#accordion" id="collapse12" role="tabpanel">
                                <div class="card-body">
                                    <label>Technicien en charge</label>
                                    <select class="form-control" name="technicien">
                                        <?php $selected = !empty($requests['technicien']) ? $requests['technicien']:''; ?>
                                        <option value=""></option>
                                        <option value="Tous" <?php if($selected = 'Tous') echo ' selected '; ?>>Tous</option>
                                        <option value="Aucun technicien" <?php if($selected = 'Aucun technicien') echo ' selected '; ?>>Aucun technicien</option>
                                        <?php

                                            $selections = $filters['inactive_techniciens'];
                                            

                                            foreach($selections as $selection){
                                                echo '<option value="'.$selection->id.'"';
                                                if($selected == $selection->id) echo ' selected ';
                                                echo '>'.$selection->prenom.' '.$selection->nom.'</option>';
                                                
                                            }

                                        ?>
                                    </select>
                                </div>
                            </div><!-- collapse -->
                        </div>
                        <div class="card 12" id="unsuccessful-contact-div">
                            <div class="card-header" id="heading13" role="tab">
                                <a aria-controls="collapse13" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapse13">Motif contact infructueux</a>
                            </div>
                            <div aria-labelledby="heading13" class="collapse" data-parent="#accordion" id="collapse13" role="tabpanel">
                                <div class="card-body">
                                    <label>Motif contact infructueux</label>
                                    <select class="form-control" name="unsuccessful_contact">
                                        <option value=""></option>
                                        <?php $selected = !empty($requests['unsuccessful_contact']) ? $requests['unsuccessful_contact']:''; ?>

                                        <option value="Tous" <?php if($selected == 'Tous') echo ' selected '; ?>>Tous</option>
                                        <option value="Aucun contact" <?php if($selected == 'Aucun contact') echo ' selected '; ?>>Aucun contact</option>
                                        <?php

                                            $selections = $filters['inactive_techniciens'];

                                            foreach($selections as $selection){
                                                echo '<option value="'.$selection->id.'"';
                                                if($selected == $selection->id) echo ' selected ';
                                                echo '>'.$selection->prenom.' '.$selection->nom.'</option>';
                                            }

                                        ?>
                                        <option value="Porte à porte" <?php if($selected == 'Porte à porte') echo ' selected '; ?>>Porte à porte</option>
                                        <option value="Injoignable définitif" <?php if($selected == 'Injoignable définitif') echo ' selected '; ?>>Injoignable définitif</option>
                                        <option value="Echange d'informations" <?php if($selected == 'Echange d\'informations') echo ' selected '; ?>>Echange d'informations</option>
                                        <option value="Refus client" <?php if($selected == 'Refus client') echo ' selected '; ?>>Refus client</option>
                                        <option value="Refus réitéré" <?php if($selected == 'Refus réitéré') echo ' selected '; ?>>Refus réitéré</option>
                                        <option value="Refus définitif" <?php if($selected == 'Refus définitif') echo ' selected '; ?>>Refus définitif</option>
                                        <option value="Anomalies coordonnées" <?php if($selected == 'Anomalies coordonnées') echo ' selected '; ?>>Anomalies coordonnées</option> 
                                    </select>
                                </div>
                            </div><!-- collapse -->
                        </div>
                        <div class="card 13" id="intervention-specifity-div">
                            <div class="card-header" id="heading14" role="tab">
                                <a aria-controls="collapse14" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapse14">Spécificité d'intervention</a>
                            </div>
                            <div aria-labelledby="heading14" class="collapse" data-parent="#accordion" id="collapse14" role="tabpanel">
                                <div class="card-body">
                                    <label>Spécificité d'intervention</label>
                                    <select class="form-control" name="intervention_specifity">
                                        <option value=""></option>
                                        <?php

                                            $selections = $filters['intervention_specifities'];
                                            $selected = !empty($requests['intervention_specifity']) ? $requests['intervention_specifity']:'';
                                            foreach($selections as $selection){
                                                echo '<option value="'.$selection->id.'"';
                                                if($selected == $selection->id) echo ' selected ';
                                                echo '>'.$selection->name.'</option>';
                                                
                                            }

                                        ?>
                                        
                                    </select>
                                </div>
                            </div><!-- collapse -->
                        </div>

                        <div class="card 14" id="notification-criticalities-div">
                            <div class="card-header" id="heading16" role="tab">
                                <a aria-controls="collapse16" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapse16">Criticité de notification</a>
                            </div>
                            <div aria-labelledby="heading16" class="collapse" data-parent="#accordion" id="collapse16" role="tabpanel">
                                <div class="card-body">
                                    <label>Criticité de notification</label>
                                    <select class="form-control" name="notification_criticalities">
                                        <option value=""></option>
                                        <?php

                                            $selections = $filters['notification_criticalities'];
                                            $selected = !empty($requests['notification_criticalities']) ? $requests['notification_criticalities']:'';
                                            foreach($selections as $selection){
                                                echo '<option value="'.$selection->id.'"';
                                                if($selected == $selection->id) echo ' selected ';
                                                echo '>'.$selection->name.'</option>';
                                            }

                                        ?>
                                    </select>
                                </div>
                            </div><!-- collapse -->
                        </div>

                        <div class="card 15" id="notification-types-div">
                            <div class="card-header" id="heading17" role="tab">
                                <a aria-controls="collapse17" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapse17">Nature de notification</a>
                            </div>
                            <div aria-labelledby="heading17" class="collapse" data-parent="#accordion" id="collapse17" role="tabpanel">
                                <div class="card-body">
                                    <label>Nature de notification</label>
                                    <select class="form-control" name="notification_types">
                                        <option value=""></option>
                                        <?php

                                            $selections = $filters['notification_types'];
                                            $selected = !empty($requests['notification_types']) ? $requests['notification_types']:'';
                                            foreach($selections as $selection){
                                                echo '<option value="'.$selection->id.'"';
                                                if($selected == $selection->id) echo ' selected ';
                                                echo '>'.$selection->name.'</option>';
                                            }

                                        ?>
                                        
                                    </select>
                                </div>
                            </div><!-- collapse -->
                        </div>

                        <div class="card 16" id="notification-status-div">
                            <div class="card-header" id="heading17" role="tab">
                                <a aria-controls="collapse17-" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapse17-">Etat de notification</a>
                            </div>
                            <div aria-labelledby="heading17-" class="collapse" data-parent="#accordion" id="collapse17-" role="tabpanel">
                                <div class="card-body">
                                    <label>Etat de notification</label>
                                    <select class="form-control" name="notification_status">
                                        <option value=""></option>
                                        <?php

                                            $selections = $filters['notification_status'];
                                            $selected = !empty($requests['notification_status']) ? $requests['notification_status']:'';
                                            foreach($selections as $selection){
                                                echo '<option value="'.$selection->id.'"';
                                                if($selected == $selection->id) echo ' selected ';
                                                echo '>'.$selection->name.'</option>';
                                            }

                                        ?>

                                    </select>
                                </div>
                            </div><!-- collapse -->
                        </div>

                        <!-- <div class="card">
                            <div class="card-header" id="heading18" role="tab">
                                <a aria-controls="collapse18" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapse18">Reminder date</a>
                            </div>
                            <div aria-labelledby="heading18" class="collapse" data-parent="#accordion" id="collapse18" role="tabpanel">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <label>Start date</label>
                                            <input type="text" name="reminder_date_from" class="form-control client-date" value="" />        
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <label>End date</label>
                                            <input type="text" name="reminder_date_to" class="form-control client-date" value="" />       
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div> -->

                        <div class="card 17" id="rappel-date-div">
                            <div class="card-header" id="heading19" role="tab">
                                <a aria-controls="collapse19" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapse19">Date de rappel</a>
                            </div>
                            <div aria-labelledby="heading19" class="collapse" data-parent="#accordion" id="collapse19" role="tabpanel">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <label>Start date</label>
                                            <input type="text" name="rappel_date_from" class="form-control client-date" value="" />        
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <label>End date</label>
                                            <input type="text" name="rappel_date_to" class="form-control client-date" value="" />        
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="card 18" id="intervention-date-div">
                            <div class="card-header" id="heading20" role="tab">
                                <a aria-controls="collapse20" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapse20">Date d'intervention</a>
                            </div>
                            <div aria-labelledby="heading20" class="collapse" data-parent="#accordion" id="collapse20" role="tabpanel">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <label>Start date</label>
                                            <input type="text" name="intervention_date_from" class="form-control client-date" value="" />        
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <label>End date</label>
                                            <input type="text" name="intervention_date_to" class="form-control client-date" value="" />        
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="card 19" id="last-customer-date-div">
                            <div class="card-header" id="heading21" role="tab">
                                <a aria-controls="collapse21" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapse21">Dernière mise en service client</a>
                            </div>
                            <div aria-labelledby="heading21" class="collapse" data-parent="#accordion" id="collapse21" role="tabpanel">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <label>Start date</label>
                                            <input type="text" name="last_customer_date_from" class="form-control client-date" value="" />        
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <label>End date</label>
                                            <input type="text" name="last_customer_date_to" class="form-control client-date" value="" />        
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="card 20" id="termination-date-div">
                            <div class="card-header" id="heading22" role="tab">
                                <a aria-controls="collapse22" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapse22">Date de résiliation contrat inactif</a>
                            </div>
                            <div aria-labelledby="heading22" class="collapse" data-parent="#accordion" id="collapse22" role="tabpanel">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <label>Start date</label>
                                            <input type="text" name="termination_date_from" class="form-control client-date" value="" />        
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <label>End date</label>
                                            <input type="text" name="termination_date_to" class="form-control client-date" value="" />        
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="card 21" id="theoretical-date-div">
                            <div class="card-header" id="heading23" role="tab">
                                <a aria-controls="collapse23" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapse23">Date théorique de relevé</a>
                            </div>
                            <div aria-labelledby="heading23" class="collapse" data-parent="#accordion" id="collapse23" role="tabpanel">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <label>Start date</label>
                                            <input type="text" name="theoretical_date_from" class="form-control client-date" value="" />        
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <label>End date</label>
                                            <input type="text" name="theoretical_date_to" class="form-control client-date" value="" />        
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- accordion -->
                    <input type="submit" hidden />
                </form>
            </div>
        </div>
    </div>

</div>

<script type="text/javascript">
    $('.client-date').datepicker({ 
        format: 'dd/mm/yyyy' 
    }).on("keydown", function(e){
        if (e.which == 13) {
            $(this).closest('form').submit();          
        }
    });

    $('.search-input').keyup(function(){
        var search = $(this).val();
        search = search.toString();
        
        if(search != ''){
            var x = ["","Customer Details", "Marchés", "Commune", "Adresse client", "Type de client", "Statut de l'intervention", "Statut du contrat", "Producteurs", "Accessibilité compteur", "Accessibilité compteur", "Nécessité de RDV", "Technicien en charge", "Motif contact infructueux","Spécificité d'intervention","Criticité de notification","Nature de notification","Etat de notification","Etat de notification","Date de rappel","Date d'intervention","Dernière mise en service client","Date de résiliation contrat inactif","Date théorique de relevé"];
            
            $('.card-body form .card').hide();
            for (var i in x) {
                if (x[i].indexOf(search) > -1) {
                    $('.'+i).show();
                }
            }    
        }else{

            $('.card-body form .card').show();
    
        }
    });
    
</script>