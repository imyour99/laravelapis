<?php include('header.php'); ?>

<link type="text/css" rel="stylesheet" href="assets/lib/prettify/prettify.css" ></link>
<script src="assets/lib/slim-scroll/jquery.slimscroll.min.js"></script>
<script src="assets/lib/slim-scroll/prettify.js"></script>

<style type="text/css">
	html,body{
		overflow: hidden;
	}
	.card.custom-card.overflow-hidden.search-filter-options{
		height: 498px;
		margin-bottom: unset;
	}
	.table thead th, .table thead td{
	    font-size: 12px !important;
	}
	.table tbody td{
	    font-size: 12px !important;
	}
	.table tbody td span{
		position: relative;
	}
	.table tbody td span span{
		position: absolute;
	    display: none;
	    right: -15px;
	    top: 15px;
	}
	.table tbody td i{
		cursor: pointer;
	}
	.table tbody td i:hover+span{
		display: inline-block;
	}
</style>

<!-- row -->
<div class="row row-sm mt-4">

	<div class="col-lg-5 col-sm-5">
		<strong class="tx-16 black-text font-weight-bold mr-4">RECHERCHE PAR CLIENTS</strong>
		<strong class="text-blue tx-11">500 clients trouvès</strong>
	</div>

	<div class="col-lg-4 col-sm-4 mb-2" style="margin-top:-8px">
		<div class="float-right">
			<div class="circle-icon mt-1">
				<a href="clients-map.php">
					<img src="assets/img/icons/blue-map-white.png" />
				</a>
			</div>
			<a href="javascript:void(0);" class="btn-blue-white mr-2">Importer client</a>
			<a href="javascript:void(0);" class="btn-white-blue ml-2 px-4" style="height: 32px;">Exporter</a>
		</div>
	</div>
</div>

<div class="row mt-2">
	<div class="col-lg-9">
		<div class="rounded-corner bg-white pr-2">
		<div class="table-responsive">
			<table class="table table-striped w-100" id="clientDataTable" style="width:100%">
				<thead>
					<tr>
						<th>Nom</th>
						<th>PDL</th>
						<th>Téléphone</th>
						<th>Adresse</th>
						<th>Ville</th>
						<th>Code</th>
						<th>Statut</th>
					</tr>
				</thead>
				<tbody>
					<tr class="login-input">
						<td>MR JOHN DOE</td>
						<td>174403644212157</td>
						<td>+33 00000000</td>
						<td>20 rue DE PALINGES 1ER ETG</td>
						<td>RUEIL-MALMAISON</td>
						<td>92000</td>
						<td class="text-center">
							<a href="javascript:void(0)" data-toggle="modal" data-target="#planifier-modal">
								<span class="active-green font-weight-bold">
									<i class="fa fa-circle mr-2"></i>
									<span>A planifier</span>
								</span>
							</a>
						</td>
					</tr>
					<tr class="inactive-gray">
						<td>MR JOHN DOE</td>
						<td>174403644212157</td>
						<td>+33 00000000</td>
						<td>20 rue DE PALINGES 1ER ETG</td>
						<td>RUEIL-MALMAISON</td>
						<td>92000</td>
						<td class="inactive-gray font-weight-bold text-center">
							<span>
								<i class="fa fa-circle mr-2"></i>
								<span>No pas rèaliser</span>
							</span>
						</td>
					</tr>
					<tr>
						<td>MR JOHN DOE</td>
						<td>174403644212157</td>
						<td>+33 00000000</td>
						<td>20 rue DE PALINGES 1ER ETG</td>
						<td>RUEIL-MALMAISON</td>
						<td>92000</td>
						<td class="text-center">
							<a href="javascript:void(0)" data-toggle="modal" data-target="#planifier-modal">
								<span class="active-green font-weight-bold">
									<i class="fa fa-circle mr-2"></i><span>A planifier</span>
								</span>
							</a>
						</td>
					</tr>
					<tr class="inactive-gray">
						<td>MR JOHN DOE</td>
						<td>174403644212157</td>
						<td>+33 00000000</td>
						<td>20 rue DE PALINGES 1ER ETG</td>
						<td>RUEIL-MALMAISON</td>
						<td>92000</td>
						<td class="inactive-gray font-weight-bold text-center">
							<span>
								<i class="fa fa-circle mr-2"></i>
								<span>No pas rèaliser</span>
							</span>
						</td>
					</tr>
					<tr>
						<td>MR JOHN DOE</td>
						<td>174403644212157</td>
						<td>+33 00000000</td>
						<td>20 rue DE PALINGES 1ER ETG</td>
						<td>RUEIL-MALMAISON</td>
						<td>92000</td>
						<td class="text-center">
							<a href="javascript:void(0)" data-toggle="modal" data-target="#planifier-modal">
								<span class="active-green font-weight-bold">
									<i class="fa fa-circle mr-2"></i><span>A planifier</span>
								</span>
							</a>
						</td>
					</tr>
					<tr class="inactive-gray">
						<td>MR JOHN DOE</td>
						<td>174403644212157</td>
						<td>+33 00000000</td>
						<td>20 rue DE PALINGES 1ER ETG</td>
						<td>RUEIL-MALMAISON</td>
						<td>92000</td>
						<td class="inactive-gray font-weight-bold text-center">
							<span>
								<i class="fa fa-circle mr-2"></i>
								<span>No pas rèaliser</span>
							</span>
						</td>
					</tr>
					<tr>
						<td>MR JOHN DOE</td>
						<td>174403644212157</td>
						<td>+33 00000000</td>
						<td>20 rue DE PALINGES 1ER ETG</td>
						<td>RUEIL-MALMAISON</td>
						<td>92000</td>
						<td class="text-center">
							<a href="javascript:void(0)" data-toggle="modal" data-target="#planifier-modal">
								<span class="active-green font-weight-bold">
									<i class="fa fa-circle mr-2"></i><span>A planifier</span>
								</span>
							</a>
						</td>
					</tr>
					<tr class="inactive-gray">
						<td>MR JOHN DOE</td>
						<td>174403644212157</td>
						<td>+33 00000000</td>
						<td>20 rue DE PALINGES 1ER ETG</td>
						<td>RUEIL-MALMAISON</td>
						<td>92000</td>
						<td class="inactive-gray font-weight-bold text-center">
							<span>
								<i class="fa fa-circle mr-2"></i>
								<span>No pas rèaliser</span>
							</span>
						</td>
					</tr>
					<tr>
						<td>MR JOHN DOE</td>
						<td>174403644212157</td>
						<td>+33 00000000</td>
						<td>20 rue DE PALINGES 1ER ETG</td>
						<td>RUEIL-MALMAISON</td>
						<td>92000</td>
						<td class="text-center">
							<a href="javascript:void(0)" data-toggle="modal" data-target="#planifier-modal">
								<span class="active-green font-weight-bold">
									<i class="fa fa-circle mr-2"></i><span>A planifier</span>
								</span>
							</a>
						</td>
					</tr>
					<tr class="inactive-gray">
						<td>MR JOHN DOE</td>
						<td>174403644212157</td>
						<td>+33 00000000</td>
						<td>20 rue DE PALINGES 1ER ETG</td>
						<td>RUEIL-MALMAISON</td>
						<td>92000</td>
						<td class="inactive-gray font-weight-bold text-center">
							<span>
								<i class="fa fa-circle mr-2"></i>
								<span>No pas rèaliser</span>
							</span>
						</td>
					</tr>
					<tr>
						<td>MR JOHN DOE</td>
						<td>174403644212157</td>
						<td>+33 00000000</td>
						<td>20 rue DE PALINGES 1ER ETG</td>
						<td>RUEIL-MALMAISON</td>
						<td>92000</td>
						<td class="text-center">
							<a href="javascript:void(0)" data-toggle="modal" data-target="#planifier-modal">
								<span class="active-green font-weight-bold">
									<i class="fa fa-circle mr-2"></i><span>A planifier</span>
								</span>
							</a>
						</td>
					</tr>
					<tr class="inactive-gray">
						<td>MR JOHN DOE</td>
						<td>174403644212157</td>
						<td>+33 00000000</td>
						<td>20 rue DE PALINGES 1ER ETG</td>
						<td>RUEIL-MALMAISON</td>
						<td>92000</td>
						<td class="inactive-gray font-weight-bold text-center">
							<span>
								<i class="fa fa-circle mr-2"></i>
								<span>No pas rèaliser</span>
							</span>
						</td>
					</tr>
					<tr>
						<td>MR JOHN DOE</td>
						<td>174403644212157</td>
						<td>+33 00000000</td>
						<td>20 rue DE PALINGES 1ER ETG</td>
						<td>RUEIL-MALMAISON</td>
						<td>92000</td>
						<td class="text-center">
							<a href="javascript:void(0)" data-toggle="modal" data-target="#planifier-modal">
								<span class="active-green font-weight-bold">
									<i class="fa fa-circle mr-2"></i><span>A planifier</span>
								</span>
							</a>
						</td>
					</tr>
					<tr class="inactive-gray">
						<td>MR JOHN DOE</td>
						<td>174403644212157</td>
						<td>+33 00000000</td>
						<td>20 rue DE PALINGES 1ER ETG</td>
						<td>RUEIL-MALMAISON</td>
						<td>92000</td>
						<td class="inactive-gray font-weight-bold text-center">
							<span>
								<i class="fa fa-circle mr-2"></i>
								<span>No pas rèaliser</span>
							</span>
						</td>
					</tr>
					<tr>
						<td>MR JOHN DOE</td>
						<td>174403644212157</td>
						<td>+33 00000000</td>
						<td>20 rue DE PALINGES 1ER ETG</td>
						<td>RUEIL-MALMAISON</td>
						<td>92000</td>
						<td class="text-center">
							<a href="javascript:void(0)" data-toggle="modal" data-target="#planifier-modal">
								<span class="active-green font-weight-bold">
									<i class="fa fa-circle mr-2"></i><span>A planifier</span>
								</span>
							</a>
						</td>
					</tr>
					<tr class="inactive-gray">
						<td>MR JOHN DOE</td>
						<td>174403644212157</td>
						<td>+33 00000000</td>
						<td>20 rue DE PALINGES 1ER ETG</td>
						<td>RUEIL-MALMAISON</td>
						<td>92000</td>
						<td class="inactive-gray font-weight-bold text-center">
							<span>
								<i class="fa fa-circle mr-2"></i>
								<span>No pas rèaliser</span>
							</span>
						</td>
					</tr>
					<tr>
						<td>MR JOHN DOE</td>
						<td>174403644212157</td>
						<td>+33 00000000</td>
						<td>20 rue DE PALINGES 1ER ETG</td>
						<td>RUEIL-MALMAISON</td>
						<td>92000</td>
						<td class="text-center">
							<a href="javascript:void(0)" data-toggle="modal" data-target="#planifier-modal">
								<span class="active-green font-weight-bold">
									<i class="fa fa-circle mr-2"></i><span>A planifier</span>
								</span>
							</a>
						</td>
					</tr>
					<tr class="inactive-gray">
						<td>MR JOHN DOE</td>
						<td>174403644212157</td>
						<td>+33 00000000</td>
						<td>20 rue DE PALINGES 1ER ETG</td>
						<td>RUEIL-MALMAISON</td>
						<td>92000</td>
						<td class="inactive-gray font-weight-bold text-center">
							<span>
								<i class="fa fa-circle mr-2"></i>
								<span>No pas rèaliser</span>
							</span>
						</td>
					</tr>
					<tr>
						<td>MR JOHN DOE</td>
						<td>174403644212157</td>
						<td>+33 00000000</td>
						<td>20 rue DE PALINGES 1ER ETG</td>
						<td>RUEIL-MALMAISON</td>
						<td>92000</td>
						<td class="text-center">
							<a href="javascript:void(0)" data-toggle="modal" data-target="#planifier-modal">
								<span class="active-green font-weight-bold">
									<i class="fa fa-circle mr-2"></i><span>A planifier</span>
								</span>
							</a>
						</td>
					</tr>
					<tr class="inactive-gray">
						<td>MR JOHN DOE</td>
						<td>174403644212157</td>
						<td>+33 00000000</td>
						<td>20 rue DE PALINGES 1ER ETG</td>
						<td>RUEIL-MALMAISON</td>
						<td>92000</td>
						<td class="inactive-gray font-weight-bold text-center">
							<span>
								<i class="fa fa-circle mr-2"></i>
								<span>No pas rèaliser</span>
							</span>
						</td>
					</tr>
					<tr>
						<td>MR JOHN DOE</td>
						<td>174403644212157</td>
						<td>+33 00000000</td>
						<td>20 rue DE PALINGES 1ER ETG</td>
						<td>RUEIL-MALMAISON</td>
						<td>92000</td>
						<td class="text-center">
							<a href="javascript:void(0)" data-toggle="modal" data-target="#planifier-modal">
								<span class="active-green font-weight-bold">
									<i class="fa fa-circle mr-2"></i><span>A planifier</span>
								</span>
							</a>
						</td>
					</tr>
					<tr class="inactive-gray">
						<td>MR JOHN DOE</td>
						<td>174403644212157</td>
						<td>+33 00000000</td>
						<td>20 rue DE PALINGES 1ER ETG</td>
						<td>RUEIL-MALMAISON</td>
						<td>92000</td>
						<td class="inactive-gray font-weight-bold text-center">
							<span>
								<i class="fa fa-circle mr-2"></i>
								<span>No pas rèaliser</span>
							</span>
						</td>
					</tr>
					<tr>
						<td>MR JOHN DOE</td>
						<td>174403644212157</td>
						<td>+33 00000000</td>
						<td>20 rue DE PALINGES 1ER ETG</td>
						<td>RUEIL-MALMAISON</td>
						<td>92000</td>
						<td class="text-center">
							<a href="javascript:void(0)" data-toggle="modal" data-target="#planifier-modal">
								<span class="active-green font-weight-bold">
									<i class="fa fa-circle mr-2"></i><span>A planifier</span>
								</span>
							</a>
						</td>
					</tr>
					<tr class="inactive-gray">
						<td>MR JOHN DOE</td>
						<td>174403644212157</td>
						<td>+33 00000000</td>
						<td>20 rue DE PALINGES 1ER ETG</td>
						<td>RUEIL-MALMAISON</td>
						<td>92000</td>
						<td class="inactive-gray font-weight-bold text-center">
							<span>
								<i class="fa fa-circle mr-2"></i>
								<span>No pas rèaliser</span>
							</span>
						</td>
					</tr>
					<tr>
						<td>MR JOHN DOE</td>
						<td>174403644212157</td>
						<td>+33 00000000</td>
						<td>20 rue DE PALINGES 1ER ETG</td>
						<td>RUEIL-MALMAISON</td>
						<td>92000</td>
						<td class="text-center">
							<a href="javascript:void(0)" data-toggle="modal" data-target="#planifier-modal">
								<span class="active-green font-weight-bold">
									<i class="fa fa-circle mr-2"></i><span>A planifier</span>
								</span>
							</a>
						</td>
					</tr>
					<tr class="inactive-gray">
						<td>MR JOHN DOE</td>
						<td>174403644212157</td>
						<td>+33 00000000</td>
						<td>20 rue DE PALINGES 1ER ETG</td>
						<td>RUEIL-MALMAISON</td>
						<td>92000</td>
						<td class="inactive-gray font-weight-bold text-center">
							<span>
								<i class="fa fa-circle mr-2"></i>
								<span>No pas rèaliser</span>
							</span>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		</div>
	</div>

	<div class="col-lg-3" style="margin-top:-60px">
		<div class="col-white12-col" >
			<div class="search-group">
		    	<input class="search-input mr-2" type="text" placeholder="Recherche de filtres…."/>
		    	<button class="button button-brand-primary button-search"><i class="fas fa-redo"></i></button>
		  	</div>
			<div class="card custom-card overflow-hidden search-filter-options">

			<div class="card-body px-0 py-5">
                <!-- accordion -->
                <div aria-multiselectable="true" class="accordion" id="accordion" role="tablist">


                    <div class="card">
                        <div class="card-header" id="headingTwoHIW" role="tab">
                            <a aria-controls="collapseTwoHIW" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapseTwoHIW">Customer Details</a>
                        </div>
                        <div aria-labelledby="headingTwoHIW" class="collapse" data-parent="#accordion" id="collapseTwoHIW" role="tabpanel">
                            <div class="card-body px-2">
                                <div class="form-group">
                                    <label>Nom client</label>
                                    <input type="text" name="" class="form-control" value="" />
                                </div>
                                <div class="form-group">
                                    <label>N*PDL</label>
                                    <input type="text" name="" class="form-control" value="" />
                                </div>
                                <div class="form-group">
                                    <label>Matricule ou téléphone</label>
                                    <input type="text" name="" class="form-control" value="" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingTwoHIW" role="tab">
                            <a aria-controls="collapseThreeHIW" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapseThreeHIW">Marchés</a>
                        </div>
                        <div aria-labelledby="headingThreeHIW" class="collapse" data-parent="#accordion" id="collapseThreeHIW" role="tabpanel">
                            <div class="card-body px-2">
                                <div class="form-group">
                                    <label>Marchés</label>
                                    <select class="form-control">
                                        <option>Tous</option>
                                        <option>V3A Annecy Pays de Gex</option>
                                        <option>V3A H Savoie Nord</option>
                                        <option>V3A Paris RDN 9-18</option>
                                        <option>V3B 10 DR PYL SAT LANDES</option>
                                        <option>V3B PARIS SE1-4-5-12-13-14</option>
                                        <option>V3B SAT 5 Nievre</option>
                                        <option>V3B SAT 6 Yonne</option>
                                        <option>V3E CAZ AM DiffusR</option>
                                        <option>V3E CAZ VAR DiffusR Grip</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="card">
                        <div class="card-header" id="headingfourHIW" role="tab">
                            <a aria-controls="collapsefourHIW" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapsefourHIW">Commune</a>
                        </div>
                        <div aria-labelledby="headingfourHIW" class="collapse" data-parent="#accordion" id="collapsefourHIW" role="tabpanel">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Commune</label>
                                    <input type="text" name="" class="form-control" value="" />
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="card">
                        <div class="card-header" id="headingfiveHIW" role="tab">
                            <a aria-controls="collapsefiveHIW" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapsefiveHIW">Adresse client</a>
                        </div>
                        <div aria-labelledby="headingfiveHIW" class="collapse" data-parent="#accordion" id="collapsefiveHIW" role="tabpanel">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Adresse client</label>
                                    <input type="text" name="" class="form-control" value="" />
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="card">
                        <div class="card-header" id="heading6" role="tab">
                            <a aria-controls="collapse6" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapse6">Type de client</a>
                        </div>
                        <div aria-labelledby="heading6" class="collapse" data-parent="#accordion" id="collapse6" role="tabpanel">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Type de client</label>
                                    <select class="form-control">
                                        <option>Tous</option>
                                        <option>Particulier</option>
                                        <option>Professionnel</option>
                                    </select>
                                </div>
                            </div>
                        </div><!-- collapse -->
                    </div>
                    <div class="card">
                        <div class="card-header" id="heading7" role="tab">
                            <a aria-controls="collapse7" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapse7">Statut de l'intervention</a>
                        </div>
                        <div aria-labelledby="heading7" class="collapse" data-parent="#accordion" id="collapse7" role="tabpanel">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Statut de l'intervention</label>
                                    <select class="form-control">
                                        <option>Tous</option>
                                        <option>A ne pas réaliser</option>
                                        <option>A planifier</option>
                                        <option>Planifiée</option>
                                        <option>Réalisée</option>
                                        <option>Stand by</option>
                                    </select>
                                </div>
                            </div>
                        </div><!-- collapse -->
                    </div>
                    <div class="card">
                        <div class="card-header" id="heading8" role="tab">
                            <a aria-controls="collapse8" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapse8">Statut du contrat</a>
                        </div>
                        <div aria-labelledby="heading8" class="collapse" data-parent="#accordion" id="collapse8" role="tabpanel">
                            <div class="card-body">
                                <label>Statut du contrat</label>
                                <select class="form-control">
                                    <option>Actif</option>
                                    <option>Inactif</option>
                                </select>
                            </div>
                        </div><!-- collapse -->
                    </div>
                    <div class="card">
                        <div class="card-header" id="heading9" role="tab">
                            <a aria-controls="collapse9" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapse9">Producteurs</a>
                        </div>
                        <div aria-labelledby="heading9" class="collapse" data-parent="#accordion" id="collapse6" role="tabpanel">
                            <div class="card-body">
                                <label>Producteurs</label>
                                <select class="form-control">
                                    <option>Producteurs</option>
                                    <option>Consommateur</option>
                                </select>
                            </div>
                        </div><!-- collapse -->
                    </div>
                    <div class="card">
                        <div class="card-header" id="heading10" role="tab">
                            <a aria-controls="collapse10" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapse10">Accessibilité compteur</a>
                        </div>
                        <div aria-labelledby="heading10" class="collapse" data-parent="#accordion" id="collapse7" role="tabpanel">
                            <div class="card-body">
                                <label>Accessibilité compteur</label>
                                <select class="form-control">
                                    <option>Accessible</option>
                                    <option>Inaccessible</option>

                                </select>
                            </div>
                        </div><!-- collapse -->
                    </div>
                    <div class="card">
                        <div class="card-header" id="heading11" role="tab">
                            <a aria-controls="collapse11" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapse11">Nécessité de RDV</a>
                        </div>
                        <div aria-labelledby="heading11" class="collapse" data-parent="#accordion" id="collapse8" role="tabpanel">
                            <div class="card-body">
                                <label>Nécessité de RDV</label>
                                <select class="form-control">
                                    <option>Oui</option>
                                    <option>Non</option>
                                </select>
                            </div>
                        </div><!-- collapse -->
                    </div>
                    <div class="card">
                        <div class="card-header" id="heading12" role="tab">
                            <a aria-controls="collapse12" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapse12">Technicien en charge</a>
                        </div>
                        <div aria-labelledby="heading12" class="collapse" data-parent="#accordion" id="collapse12" role="tabpanel">
                            <div class="card-body">
                                <label>Technicien en charge</label>
                                <select class="form-control">
                                    <option>Tous</option>
                                    <option>Aucun technicien</option>
                                    <option>Nom technicien (NNI)</option>
                                </select>
                            </div>
                        </div><!-- collapse -->
                    </div>
                    <div class="card">
                        <div class="card-header" id="heading13" role="tab">
                            <a aria-controls="collapse13" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapse13">Motif contact infructueux</a>
                        </div>
                        <div aria-labelledby="heading13" class="collapse" data-parent="#accordion" id="collapse13" role="tabpanel">
                            <div class="card-body">
                                <label>Motif contact infructueux</label>
                                <select class="form-control">
                                    <option>Tous</option>
                                    <option>Aucun contact</option>
                                    <option>Injoignable 1</option>
                                    <option>Injoignable 2</option>
                                    <option>Injoignable 3</option>
                                    <option>Injoignable 4</option>
                                    <option>Injoignable 5</option>
                                    <option>Injoignable 6</option>
                                    <option>Injoignable 7</option>
                                    <option>Injoignable 8</option>
                                    <option>Injoignable 9</option>
                                    <option>Injoignable 10</option>
                                    <option>Injoignable 11</option>
                                    <option>Injoignable 12</option>
                                    <option>Porte à porte</option>
                                    <option>Injoignable définitif</option>
                                    <option>Echange d'informations</option>
                                    <option>Refus client</option>
                                    <option>Refus réitéré</option>
                                    <option>Refus définitif</option>
                                    <option>Anomalies coordonnées</option>

                                </select>
                            </div>
                        </div><!-- collapse -->
                    </div>
                    <div class="card">
                        <div class="card-header" id="heading14" role="tab">
                            <a aria-controls="collapse14" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapse14">Spécificité d'intervention</a>
                        </div>
                        <div aria-labelledby="heading14" class="collapse" data-parent="#accordion" id="collapse14" role="tabpanel">
                            <div class="card-body">
                                <label>Spécificité d'intervention</label>
                                <select class="form-control">
                                    <option>Tous</option>
                                    <option>Aucune</option>
                                    <option>GRIP-Manœuvre CCFC Bas</option>
                                    <option>GRIP-Manœuvre CCFC Haut</option>
                                    <option>GRIP-Manœuvre CCFC Très haut</option>
                                    <option>GRIP-Pose CCFC Bas</option>
                                    <option>GRIP-Pose CCFC Haut</option>
                                    <option>GRIP-Pose CCFC Très Haut</option>
                                    <option>GRIP- Tempo double contact sec</option>
                                    <option>GRIP-CCPI bois amiante</option>

                                </select>
                            </div>
                        </div><!-- collapse -->
                    </div>

                    <div class="card">
                        <div class="card-header" id="heading16" role="tab">
                            <a aria-controls="collapse16" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapse16">Criticité de notification</a>
                        </div>
                        <div aria-labelledby="heading16" class="collapse" data-parent="#accordion" id="collapse16" role="tabpanel">
                            <div class="card-body">
                                <label>Criticité de notification</label>
                                <select class="form-control">
                                    <option>U1</option>
                                    <option>U2</option>
                                    <option>U3</option>
                                    <option>U4</option>
                                    <option>Basse</option>
                                    <option>Normale</option>
                                    <option>Haute</option>
                                    <option>U2</option>
                                    <option>Critique</option>
                                </select>
                            </div>
                        </div><!-- collapse -->
                    </div>

                    <div class="card">
                        <div class="card-header" id="heading17" role="tab">
                            <a aria-controls="collapse17" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapse17">Nature de notification</a>
                        </div>
                        <div aria-labelledby="heading17" class="collapse" data-parent="#accordion" id="collapse17" role="tabpanel">
                            <div class="card-body">
                                <label>Nature de notification</label>
                                <select class="form-control">
                                    <option>Tous</option>
                                    <option>Aucune</option>
                                    <option>Autre demande</option>
                                    <option>Demande de remise en conformité</option>
                                    <option>Changement de commande</option>
                                    <option>Changement de nom de client</option>
                                    <option>CR KO GRIP</option>
                                    <option>CR KO hors GRIP</option>
                                    <option>Non-conformité</option>
                                    <option>Changement spécificité</option>
                                    <option>Demande d'action</option>
                                    <option>Annulation de rendez-vous</option>
                                    <option>Demande de modification de spécificité</option>
                                    <option>Demande de pose</option>
                                    <option>Réclamation client</option>
                                    <option>Accord client suite refuse de pose</option>
                                    <option>Demande de recevabilité</option>
                                    <option>Demande de complément d'information</option>

                                </select>
                            </div>
                        </div><!-- collapse -->
                    </div>

                    <div class="card">
                        <div class="card-header" id="heading17" role="tab">
                            <a aria-controls="collapse17-" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapse17-">Etat de notification</a>
                        </div>
                        <div aria-labelledby="heading17-" class="collapse" data-parent="#accordion" id="collapse17-" role="tabpanel">
                            <div class="card-body">
                                <label>Etat de notification</label>
                                <select class="form-control">
                                    <option>Tous</option>
                                    <option>Aucune</option>
                                    <option>A traiter par l'externe</option>
                                    <option>A traiter par l'interne</option>
                                    <option>Levée</option>

                                </select>
                            </div>
                        </div><!-- collapse -->
                    </div>

                    <div class="card">
                        <div class="card-header" id="heading18" role="tab">
                            <a aria-controls="collapse18" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapse18">Reminder date</a>
                        </div>
                        <div aria-labelledby="heading18" class="collapse" data-parent="#accordion" id="collapse18" role="tabpanel">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <label>Start date</label>
                                        <input type="text" name="" class="form-control" value="" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <label>End date</label>
                                        <input type="text" name="" class="form-control" value="" />
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="heading19" role="tab">
                            <a aria-controls="collapse19" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapse19">Date de rappel</a>
                        </div>
                        <div aria-labelledby="heading19" class="collapse" data-parent="#accordion" id="collapse19" role="tabpanel">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <label>Start date</label>
                                        <input type="text" name="" class="form-control" value="" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <label>End date</label>
                                        <input type="text" name="" class="form-control" value="" />
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="heading20" role="tab">
                            <a aria-controls="collapse20" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapse20">Date d'intervention</a>
                        </div>
                        <div aria-labelledby="heading20" class="collapse" data-parent="#accordion" id="collapse20" role="tabpanel">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <label>Start date</label>
                                        <input type="text" name="" class="form-control" value="" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <label>End date</label>
                                        <input type="text" name="" class="form-control" value="" />
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="heading21" role="tab">
                            <a aria-controls="collapse21" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapse21">Dernière mise en service client</a>
                        </div>
                        <div aria-labelledby="heading21" class="collapse" data-parent="#accordion" id="collapse21" role="tabpanel">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <label>Start date</label>
                                        <input type="text" name="" class="form-control" value="" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <label>End date</label>
                                        <input type="text" name="" class="form-control" value="" />
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="heading22" role="tab">
                            <a aria-controls="collapse22" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapse22">Date de résiliation contrat inactif</a>
                        </div>
                        <div aria-labelledby="heading22" class="collapse" data-parent="#accordion" id="collapse22" role="tabpanel">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <label>Start date</label>
                                        <input type="text" name="" class="form-control" value="" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <label>End date</label>
                                        <input type="text" name="" class="form-control" value="" />
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="heading23" role="tab">
                            <a aria-controls="collapse23" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapse23">Date théorique de relevé</a>
                        </div>
                        <div aria-labelledby="heading23" class="collapse" data-parent="#accordion" id="collapse23" role="tabpanel">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <label>Start date</label>
                                        <input type="text" name="" class="form-control" value="" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <label>End date</label>
                                        <input type="text" name="" class="form-control" value="" />
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <!-- accordion -->
            </div>
		</div>
		</div>

	</div>
</div>

<div class="modal fade planifier-modal" id="planifier-modal" tabindex="-1" role="dialog" aria-labelledby="technicien-modal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document" style="min-width: 90%;">
    <div class="modal-content">

      <div class="modal-body">

        <div class="row">

        	<div class="col-lg-12 col-md-12 col-sm-12">
        		<button type="button" class="close-modal" rel="notifications-modal">
		          <span aria-hidden="true">&times;</span>
		        </button>

        		<div class="row">
        			<div class="col-lg-4 col-md-4 col-sm-4" style="flex: 0 0 30.33333%; max-width: 30.33333%;">
        				<div class="w-100 blue-box-modal">
							<div class="row">
								<div class="col-lg-5 col-md-5 col-sm-5">
									<strong class="text-white">INTERVENTION</strong>
								</div>
								<div class="col-lg-7 col-md-7 col-sm-7">
									<select class="form-control tx-green select-modal float-right" onClick="openPlanifeeStatusModal()" style="color: #27C291 !important;font: normal normal bold 14px/20px Arial; ">
										<option>Plannifèe</option>
									</select>
								</div>
							</div>

							<hr class="white-line" />

							<div class="row">
								<div class="col-lg-4 col-md-4 col-sm-4">
									<span class="text-white">18/09/21</span>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4">
									<span class="text-white">C. Durant</span>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4">
									<span class="text-white">PJFDHUF9</span>
								</div>
							</div>
						</div>

						<div class="w-100 blue-box-modal mt-3">
							<div class="row">
								<div class="col-lg-5 col-md-5 col-sm-5">
									<strong class="text-white">VISITE</strong>
								</div>
								<div class="col-lg-7 col-md-7 col-sm-7">
									<select class="form-control tx-black select-modal float-right" onClick="openPlanifeeVisiteStatusModal()" style="font: normal normal bold 14px/20px Arial;color: #363535 !important;">
										<option>Plannifèe</option>
									</select>
								</div>
							</div>

							<hr class="white-line" />

							<div class="row">
								<div class="col-lg-4 col-md-4 col-sm-4">
									<span class="text-white">18/09/21</span>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4">
									<span class="text-white">C. Durant</span>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4">
									<!-- <span class="text-white">PJFDHUF9</span> -->
								</div>
							</div>
						</div>

						<div class="w-100 right-blue-div mt-3 informations-pld-div">

							<div class="right-slim-div" style="padding-right: 20px;">
								<span class="client-information-title">INFORMATIONS PDL</span>

								<div class="row">
									<div class="col-lg-6 col-md-6">
										<label>Numéro du PDL</label>
										<input type="text" class="form-control" />
									</div>
									<div class="col-lg-6 col-md-6">
										<label>Type de client</label>
										<input type="text" class="form-control" />
									</div>
								</div>

								<div class="row">
									<div class="col-lg-6 col-md-6">
										<label>Nom client</label>
										<input type="text" class="form-control" />
									</div>
									<div class="col-lg-6 col-md-6">
										<label>Prénom client</label>
										<input type="text" class="form-control" />
									</div>
								</div>

								<div class="row">
									<div class="col-lg-6 col-md-6">
										<label>Tél. fixe</label>
										<input type="text" class="form-control" value="00 00 00 00 00" />
									</div>
									<div class="col-lg-6 col-md-6">
										<label>Tél. portable</label>
										<input type="text" class="form-control" value="00 00 00 00 00" />
									</div>
								</div>

								<div class="row">
									<div class="col-lg-6 col-md-6">
										<label>Tél. pro</label>
										<input type="text" class="form-control" value="00 00 00 00 00" />
									</div>
									<div class="col-lg-6 col-md-6">
										<label>Tél. portable 2</label>
										<input type="text" class="form-control" value="00 00 00 00 00" />
									</div>
								</div>

								<div class="row">
									<div class="col-lg-12 col-md-12">
										<label>Email</label>
										<input type="text" class="form-control" value="xxxxxxxxxxxx@xxxxxxxxx.xx" />
									</div>

								</div>

								<div class="row">
									<div class="col-lg-12 col-md-12">
										<label>Addresse contact</label>
										<input type="text" class="form-control" value="RUE" />
										<div class="row">
											<div class="col-lg-4 col-md-4">
												<input type="text" class="form-control" value="0000" />
											</div>
											<div class="col-lg-8 col-md-8">
												<input type="text" class="form-control" value="CITY" />
											</div>
										</div>
									</div>

								</div>

								<span class="client-information-title mt-4">INFORMATIONS COMPLÉMENTAIRES</span>

								<div class="row">
									<div class="col-lg-12 col-md-12">
										<label>Addresse 2</label>
										<input type="text" class="form-control" value="RUE" />
										<div class="row">
											<div class="col-lg-4 col-md-4">
												<input type="text" class="form-control" value="0000" />
											</div>
											<div class="col-lg-8 col-md-8">
												<input type="text" class="form-control" value="CITY" />
											</div>
										</div>
									</div>

								</div>

								<div class="row">
									<div class="col-lg-6 col-md-6">
										<label>Tél. 2</label>
										<input type="text" class="form-control" value="00 00 00 00 00" />
									</div>
									<div class="col-lg-6 col-md-6">
										&nbsp;
									</div>
								</div>

								<div class="row">
									<div class="col-lg-12 col-md-12">
										<label>Email 2</label>
										<input type="text" class="form-control" value="xxxxxxxxxxxx@xxxxxxxxx.xx" />
									</div>

								</div>

								<div class="row mb-3">
									<div class="col-lg-12 col-md-12">
										<label>Observations</label>
										<textarea class="form-control" rows="7">Lorem ipsum dolor sit amet, consectetur adipiscing elit</textarea>
									</div>

								</div>
							</div>
						</div>

        			</div>

        			<div class="col-lg-8 col-md-8 col-sm-8 tour-modal-fields-row-div" style="flex: 0 0 69.66666%; max-width: 69.66666%;">
	        			<div class="row">
	        				<div class="col-lg-9 col-md-9" style="flex: 0 0 57%; max-width: 61%;">
	        					<div class="white-card-div white-card-div-height">
	        						<span class="client-information-title-gray">CONSIGNE POSE EDP</span>
	        						<p class="text-gray">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
	        						<span class="consigne-close"><img src="assets/img/icons/Exit_1.png" onmouseover="this.src='assets/img/icons/Exit_blue_1.png'" onmouseout="this.src='assets/img/icons/Exit_1.png'" width="40" /></span>
	        					</div>
	        				</div>
	        				<div class="col-lg-1 col-md-1" style="flex: 0 0 14%; max-width: 14%; margin: auto 0;">

	        					<button class="w-100 white-card-div box-div-height mt-4 contact-btn" data-toggle="modal" data-target="#ContactModal" >Contact</button>

	        				</div>
	        				<div class="col-lg-1 col-md-1" style="flex: 0 0 14%; max-width: 14%;margin: auto 0">

	        					<button class="w-100 white-card-div box-div-height mt-4 planifier-intervention-btn" data-toggle="modal" data-target="#intervention-modal" >Planifier une intervention</button>

	        				</div>
	        				<div class="col-lg-1 col-md-" style="flex: 0 0 14%; max-width: 14%;margin: auto 0">

	        					<button class="plannifier-visite-btn w-100 white-card-div box-div-height mt-4" data-toggle="modal" data-target="#visite-modal">Planifier une visite</button>

	        				</div>
	        			</div>

	        			<div class="row mt-4">

	        				<div class="col-lg-12 col-md-12">
			        			<nav>
			                        <div class="nav nav-tabs pose-navs" id="nav-client-details-tab" role="tablist">
			                            <a class="nav-item nav-link active" id="nav-historique-tab" data-toggle="tab" href="#nav-historique" role="tab" aria-controls="nav-historique" aria-selected="true">
			                                <span class="tab-label">Historique</span>
			                            </a>
			                            <a class="nav-item nav-link" id="nav-deploiement-tab" data-toggle="tab" href="#nav-deploiement" role="tab" aria-controls="nav-deploiement" aria-selected="true">
			                                <span class="tab-label">Déploiement</span>
			                            </a>
			                            <a class="nav-item nav-link" id="nav-technique-tab" data-toggle="tab" href="#nav-technique" role="tab" aria-controls="nav-technique" aria-selected="true">
			                                <span class="tab-label">Technique</span>
			                            </a>
			                            <a class="nav-item nav-link" id="nav-notifications-tab" data-toggle="tab" href="#nav-notifications" role="tab" aria-controls="nav-notifications" aria-selected="true">
			                                <span class="tab-label">Notifications <span class="counter-span">2</span></span>
			                            </a>
			                            <a class="nav-item nav-link" id="nav-rc-tab" data-toggle="tab" href="#nav-rc" role="tab" aria-controls="nav-rc" aria-selected="true">
			                                <span class="tab-label">RC <span class="counter-span">2</span></span>
			                            </a>


			                          	<div class="switch-div">

			                          		<label class="switch-green-div">
											  <input type="checkbox" checked>
											  <span class="slider round"></span>
											</label>
											<strong class="switch-green-label">Rendez-vouz<br/>necessaire</strong>
			                          	</div>

			                        </div>
			                    </nav>
			                    <div class="tab-content" id="nav-tabContentClient">
			                        <div class="tab-pane fade nav-historique-tab show active" id="nav-historique" role="tabpanel" aria-labelledby="nav-historique-tab">
			                        	<div class="content-slim-div">
				                            <?php include('client/historieque.php'); ?>
				                        </div>
			                        </div>

			                        <div class="tab-pane nav-deploiement-tab fade" id="nav-deploiement" role="tabpanel" aria-labelledby="nav-deploiement-tab">
			                        	<div class="content-slim-div deploiement-div">

			                        		<?php include('client/deploiement.php'); ?>

			                        	</div>
			                        </div>

			                        <div class="tab-pane nav-technique-tab fade" id="nav-technique" role="tabpanel" aria-labelledby="nav-technique-tab">

			                        	<div class="content-slim-div deploiement-div">

			                        		<?php include('client/technique.php'); ?>

			                        	</div>
			                        </div>

			                        <div class="tab-pane nav-notifications-tab fade" id="nav-notifications" role="tabpanel" aria-labelledby="nav-notifications-tab">
			                        	<div class="content-slim-div">
				                            <?php include('client/notifications.php'); ?>
				                        </div>

				                        <div class="row mt-4">
											<div class="col-lg-12 col-md-12 justify-content-center text-center">

												<a href="javascript:void(0)" class="btn btn-lightblue px-4" style="line-height: 2;" data-toggle="modal" data-target="#notification-modal">Ajouter une notification</a>

											</div>
										</div>
			                        </div>

			                        <div class="tab-pane nav-rc-tab fade" id="nav-rc" role="tabpanel" aria-labelledby="nav-rc-tab">
			                        	<div class="content-slim-div">
				                            <?php include('client/rc.php'); ?>
				                        </div>

				                        <div class="row mt-4">
											<div class="col-lg-12 col-md-12 justify-content-center text-center">


												<a href="javascript:void(0)" class="btn btn-lightblue px-4" style="line-height: 2;" data-toggle="modal" data-target="#rc-modal">Ajouter une RC</a>

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

<div class="modal ContactModal" id="ContactModal">
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
							<span>Mr John Doe Résidentiel</span>
						</div>
					</div>
					<div class="col-xs-12 col-sm-4">
						<h6 class="text-blue">Adresse PDL</h6>
						<div class="my-3">
							<span>DU FAUBOURG POISSONNIERE 75009 PARIS 9E ARRONDISSEMENT</span>
						</div>
					</div>
					<div class="col-xs-12 col-sm-4">
						<h6 class="text-blue">Numéro du PDL</h6>
						<div class="my-3">
							<span>07190882744449</span>
						</div>
					</div>

				</div>
				<div class="row row-sm">
					<div class="col-md-5">
						<div class="form-group">
							<p class="mg-b-10">Consigne</p>
							<select name="country" class="form-control select-lg select2">
								<option value="">Nature</option>
								<option value="cz">Czech Republic</option>
								<option value="de">Germany</option>
								<option value="pl">Poland</option>
							</select>
						</div>
					</div>
					<div class="col-md-5">
						<div class="form-group">
							<p class="mg-b-10">Date</p>
							<select name="country" class="form-control select-lg select2">
								<option value="">00/00/0000</option>
								<option value="">01/11/0000</option>
								<option value="">02/22/0000</option>
								<option value="">03/33/0000</option>
							</select>
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-group">
							<p class="mg-b-10"> </p>
							<div class="mg-b-20">
								<div class="input-group">
									<div class="input-group-prepend">
										<div class="input-group-text datepicker-div " id="INFRUCTUEUX-datepickerNoOfMonths">
											<!-- <i class=" fe fe-calendar lh--9 op-6">
												<input class="edit-item-date form-control" data-toggle="datepicker" placeholder="MM/DD/YYYY" name="editdueDate" id="edit_due_date" type="hidden">
											</i> -->
											<div>
												<img class="" src="assets/img/icons/Icon.png">
												<input class="edit-item-date form-control" data-toggle="datepicker" placeholder="MM/DD/YYYY" name="editdueDate" id="edit_due_date" type="hidden">
											</div>
										</div>

									</div>
								</div>
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
				<button class="validerbtn " type="button">Valider</button>
				<button class="annulerbtn close-btn" data-dismiss="modal" type="button">Annuler</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="intervention-modal" tabindex="-1" role="dialog" aria-labelledby="technicien-modal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 90rem;">
    <div class="modal-content">

      <div class="modal-body">

        <div class="row">

        	<div class="col-lg-5 col-md-5 col-sm-5">
        		<strong>PLANNIFIER UNE INTERVENTION</strong>
        		<div class="card-body">
	        		<div class="row">
	        			<div class="col-lg-12 col-md-12 col-sm-12">
	        				<div class="justify-content-center text-center">
	        					<div class="smallest-bluetext mb-2 mt-4">Vue de la semaine</div>
	        					<div class="weekdate-div" style="width: 15rem;">
	        						<div class="weekdate-div-nav weekdate-div-prev justify-content-center text-center">
	        							<img src="assets/img/icons/prev-nav.png" />
	        						</div>
	        						<div class="weekdate-div-week justify-content-center text-center">
	        							<strong>Dec 18 - Dec 23</strong>
	        						</div>
	        						<div class="weekdate-div-nav weekdate-div-next justify-content-center text-center">
	        							<img src="assets/img/icons/next-nav.png" />
	        						</div>
	        					</div>
	        				</div>
	        			</div>
	        		</div>

	        		<div class="row mt-2">
	        			<div class="col-lg-6 col-md-6 col-sm-6">

	    					<div class="smallest-bluetext mb-2 mt-4">Date de l'intervention</div>
	    					<div class="text-dark-black" style="font-size:1rem;">Jeudi 21 Decembre<br/>2:00 - 4:00 PM</div>

	        			</div>
	        			<div class="col-lg-6 col-md-6 col-sm-6">

	    					<div class="smallest-bluetext mb-2 mt-4">Intervention assignée à :</div>
	    					<select class="form-control text-dark-black">
	    						<option>JOHNY DOE</option>
	    					</select>

	        			</div>
	        		</div>


					<div class="row mt-5  btn-light-lightblue rounded-corner">

						<div class="col-lg-12 col-md-12 col-sm-12 p-3">
							<div class="row">
			        			<div class="col-lg-6 col-md-6 col-sm-6">

			    					<div class="smallest-bluetext mb-2">Informations du client</div>
			    					<div class="text-dark-black" style="font-size:0.85rem;">Mr John Doe<br/>Particulier</div>

			        			</div>
			        			<div class="col-lg-6 col-md-6 col-sm-6">

			    					<div class="smallest-bluetext mb-2">Address PDL</div>
			    					<div class="text-dark-black" style="font-size:0.85rem;">DU FAUBOURG POISSONNIERE<br/>750009 PARIS 9E ARRONDISSEMENT</div>

			        			</div>
		        			</div>

		        			<div class="row mt-4">
			        			<div class="col-lg-6 col-md-6 col-sm-6">

			    					<div class="smallest-bluetext mb-2">Coordonnées</div>
			    					<div class="text-dark-black" style="font-size:0.85rem;">000000000<br/>johndoe@gmail.com</div>

			        			</div>
			        			<div class="col-lg-6 col-md-6 col-sm-6">

			    					<div class="smallest-bluetext mb-2">Numéro du PDL</div>
			    					<div class="text-dark-black"  style="font-size:0.85rem;">123456789798</div>

			        			</div>
		        			</div>


	        			</div>


	        		</div>

	        		<div class="row mt-5 mb-4">
	        			<div class="col-lg-12 col-md-12 col-sm-12 justify-content-center text-center">

	    					<a href="javascript:void(0)" class="btn btn-lightblue px-4 mr-2" style="line-height: 2;border-radius: 7rem !important" data-toggle="modal" data-target="#intervention-confirmation">Plannifier</a>
	    					<!-- <a href="javascript:void(0)" class="btn bg-white px-5 text-blue text-bold btn-shadow annulerBtn" style="line-height: 2;border-radius:  7rem !important">Annuler</a> -->
	    					<a href="javascript:void(0)" class="btn px-5 text-bold annulerBtn" data-dismiss="modal" style="line-height: 2;border-radius:  7rem !important">Annuler</a>

	        			</div>

	    			</div>
        		</div>


        	</div>

        	<div class="col-lg-7 col-md-7 col-sm-7">
        		<table style="width:100%" id="plannifier-table">
        			<tr>
        				<td class="no-border"></td>
        				<td class="no-border td-margin-top">
        					<span class="td-percentage green-td-label" style="padding-bottom: 7px">10%</span>
        					<span class="td-percentage-div gray-td-bg" style="height:70px">
        						<span class="common-td-bg green-bg-td" style="height:7px">
        							&nbsp;
        						</span>
        					</span>
        				</td>
        				<td class="no-border td-margin-top">
        					<span class="td-percentage orange-td-label" style="padding-bottom: 49px">70%</span>
        					<span class="td-percentage-div gray-td-bg" style="height:70px">
        						<span class="common-td-bg orange-bg-td" style="height:49px">
        							&nbsp;
        						</span>
        					</span>
        				</td>
        				<td class="no-border td-margin-top">
        					<span class="td-percentage red-td-label" style="padding-bottom: 66.5px">95%</span>
        					<span class="td-percentage-div gray-td-bg" style="height:70px">
        						<span class="common-td-bg red-bg-td" style="height:66.5px">
        							&nbsp;
        						</span>
        					</span>
        				</td>
        				<td class="no-border td-margin-top">
        					<span class="td-percentage orange-td-label" style="padding-bottom: 49px">95%</span>
        					<span class="td-percentage-div gray-td-bg" style="height:70px">
        						<span class="common-td-bg orange-bg-td" style="height:49px">
        							&nbsp;
        						</span>
        					</span>
        				</td>
        				<td class="no-border td-margin-top">
        					<span class="td-percentage green-td-label" style="padding-bottom: 7px">10%</span>
        					<span class="td-percentage-div gray-td-bg" style="height:70px">
        						<span class="common-td-bg green-bg-td" style="height:7px">
        							&nbsp;
        						</span>
        					</span>
        				</td>
        				<td class="no-border td-margin-top">
        					<span class="td-percentage green-td-label" style="padding-bottom: 7px">10%</span>
        					<span class="td-percentage-div gray-td-bg" style="height:70px">
        						<span class="common-td-bg green-bg-td" style="height:7px">
        							&nbsp;
        						</span>
        					</span>
        				</td>
        			</tr>

        			<tr style="background-color:#009cde;color: #FFFFFF;">
        				<th style="border-top-left-radius: 10px">&nbsp;</th>
        				<th>lun. 18</th>
        				<th>mar. 19</th>
        				<th>mer. 20</th>
        				<th>jeu. 21</th>
        				<th>ven. 22</th>
        				<th style="border-top-right-radius: 10px">sam. 23</th>
        			</tr>
        			<tr>
        				<td>12:00 AM</td>
        				<td></td>
        				<td class="green-td-divider"></td>
        				<td class="td-grayshade"></td>
        				<td></td>
        				<td></td>
        				<td></td>
        			</tr>
        			<tr>
        				<td>2:00 AM</td>
        				<td></td>
        				<td class="green-td-divider"></td>
        				<td class="td-grayshade"></td>
        				<td></td>
        				<td></td>
        				<td></td>
        			</tr>
        			<tr>
        				<td>4:00 AM</td>
        				<td></td>
        				<td class="green-td-divider"></td>
        				<td class="td-grayshade"></td>
        				<td class="td-green">2:00 - 4:00</td>
        				<td></td>
        				<td></td>
        			</tr>
        			<tr>
        				<td>6:00 AM</td>
        				<td></td>
        				<td class="green-td-divider td-lightshade"></td>
        				<td class="td-grayshade"></td>
        				<td></td>
        				<td></td>
        				<td></td>
        			</tr>
        			<tr>
        				<td>8:00 AM</td>
        				<td></td>
        				<td class="green-td-divider td-lightshade"></td>
        				<td class="td-grayshade"></td>
        				<td></td>
        				<td></td>
        				<td></td>
        			</tr>
        			<tr>
        				<td>10:00 AM</td>
        				<td class="td-lightshade"></td>
        				<td class="green-td-divider"></td>
        				<td class="td-grayshade"></td>
        				<td></td>
        				<td></td>
        				<td></td>
        			</tr>
        			<tr>
        				<td>12:00 PM</td>
        				<td class="td-lightshade"></td>
        				<td class="green-td-divider"></td>
        				<td class="td-grayshade"></td>
        				<td class="td-lightshade"></td>
        				<td></td>
        				<td></td>
        			</tr>
        			<tr>
        				<td>2:00 PM</td>
        				<td></td>
        				<td class="green-td-divider td-lightshade"></td>
        				<td class="td-grayshade"></td>
        				<td class="td-lightshade"></td>
        				<td></td>
        				<td></td>
        			</tr>
        			<tr>
        				<td>4:00 PM</td>
        				<td></td>
        				<td class="green-td-divider"></td>
        				<td class="td-grayshade"></td>
        				<td class="td-lightshade"></td>
        				<td></td>
        				<td></td>
        			</tr>
        			<tr>
        				<td>6:00 PM</td>
        				<td></td>
        				<td class="green-td-divider"></td>
        				<td class="td-plaingray"></td>
        				<td class="td-lightshade"></td>
        				<td></td>
        				<td></td>
        			</tr>
        			<tr>
        				<td>8:00 PM</td>
        				<td></td>
        				<td class="green-td-divider"></td>
        				<td class="td-plaingray"></td>
        				<td class="td-lightshade"></td>
        				<td></td>
        				<td></td>
        			</tr>
        		</table>
        	</div>
        </div>

      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="visite-modal" tabindex="-1" role="dialog" aria-labelledby="technicien-modal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 90rem;">
    <div class="modal-content">

      <div class="modal-body">

        <div class="row">

        	<div class="col-lg-5 col-md-5 col-sm-5">
        		<strong>PLANNIFIER UNE VISITE</strong>
        		<div class="card-body">
        			<div class="row">
	        			<div class="col-lg-12 col-md-12 col-sm-12">
	        				<div class="justify-content-center text-center">
	        					<div class="smallest-bluetext mb-2 mt-4">Vue de la semaine</div>
	        					<div class="weekdate-div" style="width: 15rem;">
	        						<div class="weekdate-div-nav weekdate-div-prev justify-content-center text-center">
	        							<img src="assets/img/icons/prev-nav.png" />
	        						</div>
	        						<div class="weekdate-div-week justify-content-center text-center">
	        							<strong>Dec 18 - Dec 23</strong>
	        						</div>
	        						<div class="weekdate-div-nav weekdate-div-next justify-content-center text-center">
	        							<img src="assets/img/icons/next-nav.png" />
	        						</div>
	        					</div>
	        				</div>
	        			</div>
	        		</div>

	        		<div class="row mt-2">
	        			<div class="col-lg-6 col-md-6 col-sm-6">

	    					<div class="smallest-bluetext mb-2 mt-4">Date de la dernière intervention</div>
	    					<div class="text-dark-black" style="font-size:1rem;">Jeudi 21 Decembre<br/>2:00 - 4:00 PM</div>

	        			</div>
	        			<div class="col-lg-6 col-md-6 col-sm-6">
	    					<div class="smallest-bluetext mb-2 mt-4">Intervention assignée à :</div>
	    					<div class="text-dark-black" style="font-size:1rem;">JOHNY DOE</div>
	        			</div>
	        		</div>
	        		<div class="row mt-2">
	        			<div class="col-lg-6 col-md-6 col-sm-6">

	    					<div class="smallest-bluetext mb-2 mt-4">Date de la visite</div>
	    					<div class="text-dark-black"  style="font-size:1rem;">Jeudi 21 Decembre<br/>2:00 - 4:00 PM</div>

	        			</div>
	        		</div>


					<div class="row mt-2 btn-light-lightblue rounded-corner">

						<div class="col-lg-12 col-md-12 col-sm-12 p-3">
							<div class="row">
			        			<div class="col-lg-6 col-md-6 col-sm-6">

			    					<div class="smallest-bluetext mb-2">Informations du client</div>
			    					<div class="text-dark-black"  style="font-size:0.85rem;">Mr John Doe<br/>Particulier</div>

			        			</div>
			        			<div class="col-lg-6 col-md-6 col-sm-6">

			    					<div class="smallest-bluetext mb-2">Address PDL</div>
			    					<div class="text-dark-black"  style="font-size:0.85rem;">DU FAUBOURG POISSONNIERE<br/>750009 PARIS 9E ARRONDISSEMENT</div>

			        			</div>
		        			</div>

		        			<div class="row mt-4">
			        			<div class="col-lg-6 col-md-6 col-sm-6">

			    					<div class="smallest-bluetext mb-2">Coordonnées</div>
			    					<div class="text-dark-black"  style="font-size:0.85rem;">000000000<br/>johndoe@gmail.com</div>

			        			</div>
			        			<div class="col-lg-6 col-md-6 col-sm-6">

			    					<div class="smallest-bluetext mb-2">Numéro du PDL</div>
			    					<div class="text-dark-black"  style="font-size:0.85rem;">123456789798</div>

			        			</div>
		        			</div>


	        			</div>


	        		</div>

	        		<div class="row mt-5 mb-4">
	        			<div class="col-lg-12 col-md-12 col-sm-12 justify-content-center text-center">

	    					<a href="javascript:void(0)" class="btn btn-lightblue px-4 mr-2" style="line-height: 2;border-radius: 7rem !important"  data-toggle="modal" data-target="#visite-confirmation">Plannifier</a>
	    					<a href="javascript:void(0)" class="btn px-5 text-bold annulerBtn" data-dismiss="modal" style="line-height: 2;border-radius:  7rem !important" >Annuler</a>

	        			</div>

	    			</div>
        		</div>



        	</div>

        	<div class="col-lg-7 col-md-7 col-sm-7">
        		<table style="width:100%" id="plannifier-table">
        			<tr>
        				<td class="no-border"></td>
        				<td class="no-border td-margin-top">
        					<span class="td-percentage green-td-label" style="padding-bottom: 7px">10%</span>
        					<span class="td-percentage-div gray-td-bg" style="height:70px">
        						<span class="common-td-bg green-bg-td" style="height:7px">
        							&nbsp;
        						</span>
        					</span>
        				</td>
        				<td class="no-border td-margin-top">
        					<span class="td-percentage orange-td-label" style="padding-bottom: 49px">70%</span>
        					<span class="td-percentage-div gray-td-bg" style="height:70px">
        						<span class="common-td-bg orange-bg-td" style="height:49px">
        							&nbsp;
        						</span>
        					</span>
        				</td>
        				<td class="no-border td-margin-top">
        					<span class="td-percentage red-td-label" style="padding-bottom: 66.5px">95%</span>
        					<span class="td-percentage-div gray-td-bg" style="height:70px">
        						<span class="common-td-bg red-bg-td" style="height:66.5px">
        							&nbsp;
        						</span>
        					</span>
        				</td>
        				<td class="no-border td-margin-top">
        					<span class="td-percentage orange-td-label" style="padding-bottom: 49px">95%</span>
        					<span class="td-percentage-div gray-td-bg" style="height:70px">
        						<span class="common-td-bg orange-bg-td" style="height:49px">
        							&nbsp;
        						</span>
        					</span>
        				</td>
        				<td class="no-border td-margin-top">
        					<span class="td-percentage green-td-label" style="padding-bottom: 7px">10%</span>
        					<span class="td-percentage-div gray-td-bg" style="height:70px">
        						<span class="common-td-bg green-bg-td" style="height:7px">
        							&nbsp;
        						</span>
        					</span>
        				</td>
        				<td class="no-border td-margin-top">
        					<span class="td-percentage green-td-label" style="padding-bottom: 7px">10%</span>
        					<span class="td-percentage-div gray-td-bg" style="height:70px">
        						<span class="common-td-bg green-bg-td" style="height:7px">
        							&nbsp;
        						</span>
        					</span>
        				</td>
        			</tr>

        			<tr style="background-color:#009cde;color: #FFFFFF;">
        				<th style="border-top-left-radius: 10px">&nbsp;</th>
        				<th>lun. 18</th>
        				<th>mar. 19</th>
        				<th>mer. 20</th>
        				<th>jeu. 21</th>
        				<th>ven. 22</th>
        				<th style="border-top-right-radius: 10px">sam. 23</th>
        			</tr>
        			<tr>
        				<td>12:00 AM</td>
        				<td></td>
        				<td class="green-td-divider"></td>
        				<td class="td-grayshade"></td>
        				<td></td>
        				<td></td>
        				<td></td>
        			</tr>
        			<tr>
        				<td>2:00 AM</td>
        				<td></td>
        				<td class="green-td-divider"></td>
        				<td class="td-grayshade"></td>
        				<td></td>
        				<td></td>
        				<td></td>
        			</tr>
        			<tr>
        				<td>4:00 AM</td>
        				<td></td>
        				<td class="green-td-divider"></td>
        				<td class="td-grayshade"></td>
        				<td class="td-green">2:00 - 4:00</td>
        				<td></td>
        				<td></td>
        			</tr>
        			<tr>
        				<td>6:00 AM</td>
        				<td></td>
        				<td class="green-td-divider td-lightshade"></td>
        				<td class="td-grayshade"></td>
        				<td></td>
        				<td></td>
        				<td></td>
        			</tr>
        			<tr>
        				<td>8:00 AM</td>
        				<td></td>
        				<td class="green-td-divider td-lightshade"></td>
        				<td class="td-grayshade"></td>
        				<td></td>
        				<td></td>
        				<td></td>
        			</tr>
        			<tr>
        				<td>10:00 AM</td>
        				<td class="td-lightshade"></td>
        				<td class="green-td-divider"></td>
        				<td class="td-grayshade"></td>
        				<td></td>
        				<td></td>
        				<td></td>
        			</tr>
        			<tr>
        				<td>12:00 PM</td>
        				<td class="td-lightshade"></td>
        				<td class="green-td-divider"></td>
        				<td class="td-grayshade"></td>
        				<td class="td-lightshade"></td>
        				<td></td>
        				<td></td>
        			</tr>
        			<tr>
        				<td>2:00 PM</td>
        				<td></td>
        				<td class="green-td-divider td-lightshade"></td>
        				<td class="td-grayshade"></td>
        				<td class="td-lightshade"></td>
        				<td></td>
        				<td></td>
        			</tr>
        			<tr>
        				<td>4:00 PM</td>
        				<td></td>
        				<td class="green-td-divider"></td>
        				<td class="td-grayshade"></td>
        				<td class="td-lightshade"></td>
        				<td></td>
        				<td></td>
        			</tr>
        			<tr>
        				<td>6:00 PM</td>
        				<td></td>
        				<td class="green-td-divider"></td>
        				<td class="td-plaingray"></td>
        				<td class="td-lightshade"></td>
        				<td></td>
        				<td></td>
        			</tr>
        			<tr>
        				<td>8:00 PM</td>
        				<td></td>
        				<td class="green-td-divider"></td>
        				<td class="td-plaingray"></td>
        				<td class="td-lightshade"></td>
        				<td></td>
        				<td></td>
        			</tr>
        		</table>
        	</div>
        </div>

      </div>
    </div>
  </div>
</div>

<div class="modal" id="clientDetailsModal" aria-modal="true" role="dialog">

	<div class="modal-dialog modal-dialog-centered" role="document" style="max-width:90vw;">
		<div class="modal-content modal-content-demo ">
			<!-- <div class="modal-header">
				<h6 class="modal-title">AJOUTER UN COMMENTAIRE AGENCE</h6>
				<button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">×</span></button>
			</div> -->
			<div class="modal-body">
				<div class="row">
					<div class="col-lg-4">
						<div class="card custom-card overflow-hidden ">
							<div class="card-body blue-bg" style="color: #fff;">
								<table class="w-100">
									<tbody>
										<tr>
											<td>INTERVENTION</td>
											<!-- <th class="float-right active-green font-weight-bold"><i class="fa fa-circle mr-2 "></i>A planifier</th> -->
											<td colspan="2" class="active-green font-weight-bold interventionDropdown">
												<select class="form-control select2 w-100 " style="border-radius:30px;">
													<option label="Planifiée" value="#PlanifieeModal">Planifiée</option>
													<option label="Realise" value="#RealiseModal">Realise</option>

												</select>
											</td>
										</tr>
										<tr style="border-top: 1px solid #fff !important;">
											<td class="wd-35p">18/09/2021</td>
											<td class="wd-35p">C.Durant</td>
											<td class="wd-30p">PJFDHUF9</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="card custom-card overflow-hidden ">
							<div class="card-body blue-bg" style="color: #fff;">
								<table class="w-100">
									<tbody>
										<tr>
											<td>VISITE</td>
											<!-- <th class="float-right active-green font-weight-bold"><i class="fa fa-circle mr-2 "></i>Aucune</th> -->
											<td colspan="2" class="active-green font-weight-bold visiteDropdown">
												<select class="form-control select2 w-100" style="border-radius:30px;">
													<option label="Planifiée" value="#AccuneModal">Accune</option>
													<option label="Realise" value="#RealiseModal">Realise</option>

												</select>
											</td>
										</tr>
										<tr style="border-top: 1px solid #fff !important;">
											<td class="wd-35p">Aucune date</td>
											<td class="wd-65p">Aucun visiteur</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>

						<div class="card custom-card overflow-hidden " style="background: #F3FBFF 0% 0% no-repeat padding-box;box-shadow: 0px 5px 10px #f1f1f1;border-left: 4px solid #009CDE;">
							<div class="card-body client-details-scroller">
								<div class="header">
									<p class="text-uppercase" style="color: #009CDE;font-weight: bold;">INFORMATIONS PDL</p>
									<hr style="border: 2px solid #009CDE;border-radius: 7px;">
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="form-group">
											<label>Numéro du PDL</label>
											<input type="text" class="form-control" name="" placeholder="00000000">
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label>Type de client</label>
											<input type="text" class="form-control" name="" placeholder="LINKY">
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label>Nom client</label>
											<input type="text" class="form-control" name="" placeholder="NOM">
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label>Prénom client</label>
											<input type="text" class="form-control" name="" placeholder="PRENOM">
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label>Tél. fixe</label>
											<input type="text" class="form-control" name="" placeholder="00 00 00 00 00">
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label>Tél. portable</label>
											<input type="text" class="form-control" name="" placeholder="00 00 00 00 00">
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label>Tél. pro</label>
											<input type="text" class="form-control" name="" placeholder="00 00 00 00 00">
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label>Tél. portable 2</label>
											<input type="text" class="form-control" name="" placeholder="00 00 00 00 00">
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<label>Email</label>
											<input type="email" class="form-control" name="" placeholder="xxxxxxxxxxxx@xxxxxxxx.xxx">
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<label>Adresse Contact</label>
											<div class="row">
												<div class="col-lg-12 mb-2">
													<input type="text" class="form-control" name="" placeholder="RUE">
												</div>
												<div class="col-lg-4 mb-2">
													<input type="text" class="form-control" name="" placeholder="00000">
												</div>
												<div class="col-lg-8 mb-2">
													<input type="text" class="form-control" name="" placeholder="CITY">
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<label>Adresse fourisseur</label>
											<div class="row">
												<div class="col-lg-12 mb-2">
													<input type="text" class="form-control" name="" placeholder="STREET">
												</div>
												<div class="col-lg-4 mb-2">
													<input type="text" class="form-control" name="" placeholder="00000">
												</div>
												<div class="col-lg-8 mb-2">
													<input type="text" class="form-control" name="" placeholder="CITY">
												</div>
											</div>
										</div>
									</div>

								</div>
								<div class="header">
									<p class="text-uppercase" style="color: #009CDE;font-weight: bold;">INFORMATIONS COMPLEMENTARIES</p>
									<hr style="border: 2px solid #009CDE;border-radius: 7px;">
								</div>
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label>Adresse 2</label>
											<div class="row">
												<div class="col-lg-12 mb-2">
													<input type="text" class="form-control" name="" placeholder="RUE">
												</div>
												<div class="col-lg-4 mb-2">
													<input type="text" class="form-control" name="" placeholder="00000">
												</div>
												<div class="col-lg-8 mb-2">
													<input type="text" class="form-control" name="" placeholder="CITY">
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label>Tél. pro</label>
											<input type="text" class="form-control" name="" placeholder="00 00 00 00 00">
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<label>Email</label>
											<input type="email" class="form-control" name="" placeholder="xxxxxxxxxxxx@xxxxxxxx.xxx">
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<label>Observations</label>
											<textarea class="form-control" name="example-textarea-input" rows="7" placeholder="Lorem ipsum dolor sit amet"></textarea>
										</div>
									</div>

								</div>
							</div>

						</div>
					</div>
					<div class="col-lg-8">
						<div class="row">
							<div class="col-lg-8">
								<div class="card custom-card overflow-hidden ">
									<div class="card-body client-table-scroller">
										<div class="header">
											<p class="text-uppercase" style="color: #7F7F7F;font-weight: bold;">CONSIGNE POSE EDP</p>
											<hr>
										</div>
										<div class="paragraph-text">
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
										</div>
										<div class="d-flex float-right">
											<button class="btn apply-btn mx-2"><i class="fas fa-check"></i></button>
											<button class="btn cancel-btn mx-2"><i class="fas fa-times"></i></button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4" style="margin:auto 0;">
								<div class="card border-0 d-inline-block">
									<button class="btn-white-bg planifier-une-btn" style="vertical-align: top;">Contact</button>
									<button class="btn-green-bg planifier-une-btn">Planifier une intervention</button>
									<button class="btn-orange-bg planifier-une-btn">Planifier une visite</button>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12">
								<div class="nav-bg client-details-notification-tab">
									<nav class="nav nav-tabs">
										<a class="nav-link with-side-badge active" data-toggle="tab" href="#tabCont1">
											<span class="mr-3">Historique</span>
										</a>
										<a class="nav-link with-side-badge" data-toggle="tab" href="#tabCont4">
											<span class="mr-3">Déploiement</span>
										</a>
										<a class="nav-link with-side-badge" data-toggle="tab" href="#tabCont5">
											<span class="mr-3">Technique</span>
										</a>
										<a class="nav-link with-side-badge " data-toggle="tab" href="#tabCont2">
											<span class="mr-3">Notifications</span>
											<span class="badge badge-warning side-badge">2</span>
										</a>
										<a class="nav-link with-side-badge" data-toggle="tab" href="#tabCont3">
											<span class="mr-3">RC</span>
											<span class="badge badge-warning side-badge">2</span>
										</a>
									</nav>
								</div>
								<div class="card custom-card overflow-hidden " style="border-radius: 0 11px 11px 11px;">
									<div class="client-tabs">
										<div class=" tab-content">
											<div class="tab-pane active show" id="tabCont1">
												<div class="card-body historiqueTab p-0 px-2">
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
											<div class="tab-pane " id="tabCont2">
												<div class="card-body notificationTab p-0 px-2 mb-0">
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
												<div class="p-2 text-center">
													<button class="notificationModalbtn ">Ajouter notification</button>
												</div>
											</div>
											<div class="tab-pane " id="tabCont3">
												<div class="card-body rcTab p-0 px-2 mb-0">
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
												<div class="p-2 text-center">
													<button class="UNERCModalbtn ">Ajouter une RC</button>
												</div>
											</div>
											<div class="tab-pane " id="tabCont4">
												<div class="card-body delpoementTab p-0 px-2 mb-0">
													<div class="row">
														<div class="col-lg-6">
															<div>
																<h6 class="text-blue my-2">Intervention</h6>
																<div class="row">
																	<div class="col-lg-9">
																		<div class="form-group">
																			<label>TYPE D'INTERVENTION</label>
																			<input type="text" class="form-control" name="" placeholder="POSE COMPTEUR LINKY">
																		</div>
																	</div>
																	<div class="col-lg-3">
																		<div class="form-group">
																			<label>DURÉE (MIN)</label>
																			<input type="text" class="form-control" name="" placeholder="00">
																		</div>
																	</div>
																</div>
															</div>
															<div>
																<h6 class="text-blue my-2">Emplacement du PDL</h6>
																<div class="row">
																	<div class="col-lg-8">
																		<div class="form-group">
																			<label>TYPE</label>
																			<input type="text" class="form-control" name="" placeholder="RESIDENTIEL">
																		</div>
																	</div>
																	<div class="col-lg-4">
																		<div class="form-group">
																			<label>CONTRAT</label>
																			<input type="text" class="form-control" name="" placeholder="ACTIF">
																		</div>
																	</div>
																	<div class="col-lg-3">
																		<div class="form-group">
																			<label>NUMERO</label>
																			<input type="text" class="form-control" name="" placeholder="ACTIF">
																		</div>
																	</div>
																	<div class="col-lg-9">
																		<div class="form-group">
																			<label>VOIE</label>
																			<input type="text" class="form-control" name="" placeholder="RESIDENTIEL">
																		</div>
																	</div>
																	<div class="col-lg-12">
																		<div class="form-group">
																			<input type="text" class="form-control" name="" placeholder="COMPLEMENT">
																		</div>
																	</div>
																	<div class="col-lg-4">
																		<div class="form-group">
																			<label>CODE POSTAL</label>
																			<input type="text" class="form-control" name="" placeholder="00000">
																		</div>
																	</div>
																	<div class="col-lg-8">
																		<div class="form-group">
																			<label>COMMUNE</label>
																			<select class="form-control mb-1">
																				<option>City</option>
																			</select>
																		</div>
																	</div>


																</div>
															</div>

														</div>

														<div class="col-lg-6">
															<div>
																<h6 class="text-blue my-2">Maille et ZDD</h6>
																<div class="row">
																	<div class="col-lg-12">
																		<div class="form-group">
																			<label>MAILLE</label>
																			<input type="text" class="form-control" name="" placeholder="POSE COMPTEUR LINKY">
																		</div>
																	</div>
																	<div class="col-lg-6">
																		<div class="form-group">
																			<label>DU</label>
																			<input type="text" class="form-control" name="" placeholder="00 . 00 . 00">
																		</div>
																	</div>
																	<div class="col-lg-6">
																		<div class="form-group">
																			<label>AU</label>
																			<input type="text" class="form-control" name="" placeholder="00 . 00 . 00">
																		</div>
																	</div>
																	<div class="col-lg-12">
																		<div class="form-group">
																			<label>ZDD</label>
																			<input type="text" class="form-control" name="" placeholder="00 . 00 . 00">
																		</div>
																	</div>
																</div>
															</div>
															<div>
																<h6 class="text-blue my-2">Consigne d'intervention</h6>
																<div class="form-group">
																	<label>NOTE</label>
																	<textarea class="form-control" placeholder="Texte..." rows="5"></textarea>
																</div>
															</div>

														</div>
													</div>
												</div>
											</div>
											<div class="tab-pane " id="tabCont5">
												<div class="card-body techniqueTab p-0 px-2 mb-0">
													<h6 class="text-blue my-2">INFORMATIONS APRÈS INTERVENTION</h6>
													<div class="custom-card p-3 mb-5 ITM-section">
														<div class="row">
															<div class="col-lg-4 text-blue" style="border-right: 1px solid #009CDE;">
																<span>DATE DE L'INTERVENTION :</span> <span>00/00/0000</span>
															</div>
															<div class="col-lg-4 text-blue" style="border-right: 1px solid #009CDE;">
																<span>TECHNICIEN :</span> <span>John Doe</span>
															</div>
															<div class="col-lg-4 text-blue">
																<span>MARCHÉ :</span> <span>V3A 7+8 EST IDF</span>
															</div>
														</div>

													</div>

													<h6 class="text-blue my-4">Contrat</h6>
													<div class="row">
														<div class="col-lg-4">
															<div class="form-group">
																<label>CATÉGORIE D'ABONNÉ</label>
																<input type="text" class="form-control" name="" placeholder="DOMESTIQUE OU AGRICOLE">
															</div>
														</div>
														<div class="col-lg-1">
															<div class="form-group">
																<label>TARIF</label>
																<input type="text" class="form-control" name="" placeholder="HC">
															</div>
														</div>
														<div class="col-lg-3">
															<div class="form-group">
																<label>PUISSANCE SOUSCRITE</label>
																<input type="text" class="form-control" name="" placeholder="6KVA">
															</div>
														</div>
														<div class="col-lg-2">
															<div class="form-group">
																<label>ORGANE DE COUPURE</label>
																<input type="text" class="form-control" name="" placeholder="6KVA">
															</div>
														</div>
														<div class="col-lg-2">
															<div class="form-group">
																<label>PRODUCTEUR</label>
																<input type="text" class="form-control" name="" placeholder="NON">
															</div>
														</div>
													</div>

													<h6 class="text-blue my-4">Compteurs</h6>
													<div class="row">
														<div class="col-lg-8">
															<div class="form-group">
																<label>TYPE</label>
																<input type="text" class="form-control" name="" placeholder="SAGEM ELECTRONIQUE MONO, PALIER 2007, MULTITARIF TAUX PLEIN OU 1/2 TAUX">
															</div>
														</div>
														<div class="col-lg-2">
															<div class="form-group">
																<label>MATRICULE</label>
																<input type="text" class="form-control" name="" placeholder="910">
															</div>
														</div>
														<div class="col-lg-2">
															<div class="form-group">
																<label>NB FILS</label>
																<input type="text" class="form-control" name="" placeholder="MONOPHASÉ 230/400 V">
															</div>
														</div>
													</div>

													<h6 class="text-blue my-4">Disjoncteurs</h6>
													<div class="row">
														<div class="col-lg-4">
															<div class="form-group">
																<label>NUM. DE SÉRIE</label>
																<input type="text" class="form-control" name="" placeholder="DB0066407606">
															</div>
														</div>
														<div class="col-lg-4">
															<div class="form-group">
																<label>NATURE</label>
																<input type="text" class="form-control" name="" placeholder="DIFF. ORDINAIRE">
															</div>
														</div>
														<div class="col-lg-4">
															<div class="form-group">
																<label>MARQUE</label>
																<input type="text" class="form-control" name="" placeholder="LOREM IPSUM">
															</div>
														</div>
														<div class="col-lg-2">
															<div class="form-group">
																<label>INTENSITÉ</label>
																<input type="text" class="form-control" name="" placeholder="00000">
															</div>
														</div>
														<div class="col-lg-2">
															<div class="form-group">
																<label>NB FILS</label>
																<input type="text" class="form-control" name="" placeholder="NON">
															</div>
														</div>
														<div class="col-lg-4">
															<div class="form-group">
																<label>PLAGE</label>
																<input type="text" class="form-control" name="" placeholder="MULTICALIBRE 15 - 45 A.">
															</div>
														</div>
													</div>

													<h6 class="text-blue my-4">Photo</h6>
													<div class="row clientPhotoSection">
														<div class="col-lg-2">
															<div class="d-inline-block pos-relative">
																<img src="../assets/img/media/user.png" style="width: 150px;height: 150px;">
																<button class="border-0 btn-view-blue"><img src="./assets/img/svgs/view.svg"></button>
															</div>
														</div>
														<div class="col-lg-2">
															<div class="d-inline-block pos-relative">
																<img src="../assets/img/media/user.png" style="width: 150px;height: 150px;">
																<button class="border-0 btn-view-blue"><img src="./assets/img/svgs/view.svg"></button>
															</div>
														</div>
														<div class="col-lg-2">
															<div class="d-inline-block pos-relative">
																<img src="../assets/img/media/user.png" style="width: 150px;height: 150px;">
																<button class="border-0 btn-view-blue"><img src="./assets/img/svgs/view.svg"></button>
															</div>
														</div>
														<div class="col-lg-2">
															<div class="d-inline-block pos-relative">
																<img src="../assets/img/media/user.png" style="width: 150px;height: 150px;">
																<button class="border-0 btn-view-blue"><img src="./assets/img/svgs/view.svg"></button>
															</div>
														</div>
														<div class="col-lg-2">
															<div class="d-inline-block pos-relative">
																<img src="../assets/img/media/user.png" style="width: 150px;height: 150px;">
																<button class="border-0 btn-view-blue"><img src="./assets/img/svgs/view.svg"></button>
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
			<!-- <div class="modal-footer" style="float: unset;margin: 0 auto;">
				<button class="btn-blue-white valider-btn" type="button">Valider</button>
				<button class="btn-white-blue annuler-btn" data-dismiss="modal" type="button">Annuler</button>
			</div> -->
		</div>
	</div>
</div>

<div class="modal" id="INFRUCTUEUXModal">
	<div class="modal-dialog modal-dialog-centered modal-wd-768" role="document">
		<div class="modal-content modal-content-demo">
			<div class="card-body">
				<div class="modal-header">
					<h6 class="modal-title">CONTACT CLIENT</h6>
					<!-- <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">×</span></button> -->
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-xs-12 col-sm-3">
							<h6 class="text-blue">Informations clients</h6>
							<div class="my-3">
								<span style="word-spacing: 5px;">Mr John Doe Résidentiel</span>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6">
							<h6 class="text-blue">Adresse PDL</h6>
							<div class="my-3">
								<span style="word-spacing: 5px;">DU FAUBOURG POISSONNIERE 75009 PARIS 9E ARRONDISSEMENT</span>
							</div>
						</div>
						<div class="col-xs-12 col-sm-3">
							<h6 class="text-blue">Numéro du PDL</h6>
							<div class="my-3">
								<span>07190882744449</span>
							</div>
						</div>

					</div>
					<div class="row row-sm">
						<div class="col-md-5">
							<div class="form-group">
								<p class="mg-b-10">Consigne</p>
								<select name="country" class="form-control select-lg select2">
									<option value="">Nature</option>
									<option value="cz">Czech Republic</option>
									<option value="de">Germany</option>
									<option value="pl">Poland</option>
								</select>
							</div>
						</div>
						<div class="col-md-5">
							<div class="form-group">
								<p class="mg-b-10">Date</p>
								<select name="country" class="form-control select-lg select2">
									<option value="">00/00/0000</option>
									<option value="">01/11/0000</option>
									<option value="">02/22/0000</option>
									<option value="">03/33/0000</option>
								</select>
							</div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<p class="mg-b-10"> </p>
								<div class="mg-b-20">
									<div class="input-group">
										<div class="input-group-prepend">
											<div class="input-group-text datepicker-div " id="INFRUCTUEUX-datepickerNoOfMonths">
												<i class=" fe fe-calendar lh--9 op-6"></i>
												<!-- <input class="edit-item-date form-control" data-toggle="datepicker" placeholder="MM/DD/YYYY" name="editdueDate" id="edit_due_date"> -->
											</div>

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="form-group">
						<p class="mg-b-10">Commentaire</p>
						<textarea class="form-control" name="example-textarea-input" rows="4" placeholder="Texte..."></textarea>
					</div>
				</div>
				<div class="modal-footer" style="justify-content: center;">
					<button class="btn-blue-white" type="button">Valider</button>
					<button class="btn-white-blue close-btn" data-dismiss="modal" type="button">Annuler</button>
				</div>
			</div>

		</div>
	</div>
</div>

<div class="modal fade" id="intervention-confirmation" tabindex="-1" role="dialog" aria-labelledby="technicien-modal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 33rem;">
    <div class="modal-content">

      <div class="modal-body">

        <div class="row">

        	<div class="col-lg-12 col-md-12 col-sm-12 px-5 mt-4">

				<div class="row">
					<div class="col-lg-5">
						<img src="assets/img/media/collab.png" class="rounded-circle client-circle-image">
					</div>

					<div class="col-lg-7">
						<h2 class="text-dark-black client-title-planifier">John Doe</h2>
						<p class="text-blue client-p-planifier mt-4">Jeudi 21 Decembre<br/>10:00 - 12:00 AM</p>
					</div>
				</div>

				<div class="row mt-4">

					<div class="col-lg-12 text-center">
						<h2 class="text-dark-black client-title-planifier">Intervention planifée !</h2>
					</div>
				</div>

				<div class="row mt-4 mb-4">

					<div class="col-lg-12 text-center">
						<a href="javascript:void(0)" class="btn btn-lightblue px-4 mr-2" style="line-height: 2;border-radius: 7rem !important" >OK</a>
					</div>
				</div>

        	</div>

        </div>

      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="visite-confirmation" tabindex="-1" role="dialog" aria-labelledby="technicien-modal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 33rem;">
    <div class="modal-content">

      <div class="modal-body">

        <div class="row">

        	<div class="col-lg-12 col-md-12 col-sm-12 px-5 mt-4">

				<div class="row">
					<div class="col-lg-5">
						<img src="assets/img/media/collab.png" class="rounded-circle client-circle-image">
					</div>

					<div class="col-lg-7">
						<h2 class="text-dark-black client-title-planifier">John Doe</h2>
						<p class="text-blue client-p-planifier mt-4">Jeudi 21 Decembre<br/>10:00 - 12:00 AM</p>
					</div>
				</div>

				<div class="row mt-4">

					<div class="col-lg-12 text-center">
						<h2 class="text-dark-black client-title-planifier">Visite planifée !</h2>
					</div>
				</div>

				<div class="row mt-4 mb-4">

					<div class="col-lg-12 text-center">
						<a href="javascript:void(0)" class="btn btn-lightblue px-4 mr-2" style="line-height: 2;border-radius: 7rem !important" >OK</a>
					</div>
				</div>

        	</div>

        </div>

      </div>
    </div>
  </div>
</div>

<div class="modal" id="planifee-status-intervention-modal" style="padding-right: 3px;" aria-modal="true" role="dialog">
	<div class="modal-dialog modal-dialog-centered" role="document" style="width: 27rem">
		<div class="modal-content modal-content-demo">

				<div class="modal-body">

					<div class="">
						<div class="card-body">
							<div class="text-center mb-4">
								<h5 class="modal-title text-dark-black">CHANGER LE STATUT DE L'INTERVENTION</h5>
							</div>
							<div class="form-group">
								<p class="mg-b-10">Statut</p>
								<select class="form-control">
									<option label="Statut">
									</option>
									<option value="Firefox">
									Firefox
									</option>
									<option value="Chrome">
									Chrome
									</option>
									<option value="Safari">
									Safari
									</option>
									<option value="Opera">
									Opera
									</option>
									<option value="Internet Explorer">
									Internet Explorer
									</option>
								</select>
							</div>
							<div class="form-group">
							<p class="mg-b-10">Commentaire</p>
							<textarea class="form-control" placeholder="Texte..." rows="5"></textarea>
						</div>
					</div>
				</div>

				</div>
				<div class="modal-footer m-auto">
				<!-- <button class="validerbtn btn" type="button">Valider</button>
				<button class="annulerBtn btn" data-dismiss="modal" type="button">Annuler</button> -->
				<a href="javascript:void(0)" class="btn btn-lightblue px-4 mr-2" style="line-height: 2;border-radius: 7rem !important" data-toggle="modal" data-target="#modified-status-intervention-modal">Valider</a>
    			<a href="javascript:void(0)" class="btn bg-white px-5 text-blue text-bold btn-shadow" style="line-height: 2;border-radius:  7rem !important">Annuler</a>
			</div>
		</div>
	</div>
</div>

<div class="modal" id="modified-status-intervention-modal" style="padding-right: 3px;" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document" style="width: 30rem">
        <div class="modal-content modal-content-demo">

                <div class="modal-body pt-5">

                    <div class="row text-center">
                        <img src="assets/img/media/check-circle.png" style="margin:0 auto;max-width: 5rem;" />

                        <h2 style="font-size:1.6rem;width:100%;" class="mt-4">Statut de l'intervention modifié !</h2>
                    </div>

                </div>
                <div class="modal-footer m-auto pb-5">
                    <a href="javascript:void(0)" class="btn btn-lightblue px-4 mr-2" style="line-height: 2;border-radius: 7rem !important"  id="modified-status-intervention-ok-btn">OK</a>

                </div>
        </div>
    </div>
</div>

<div class="modal" id="planifee-status-visite-modal" style="padding-right: 3px;" aria-modal="true" role="dialog">
	<div class="modal-dialog modal-dialog-centered" role="document" style="width: 27rem">
		<div class="modal-content modal-content-demo">

				<div class="modal-body">

					<div class="">
						<div class="card-body">
							<div class="text-center mb-4">
								<h5 class="modal-title text-dark-black">CHANGER LE STATUT DE L'INTERVENTION</h5>
							</div>
							<div class="form-group">
								<p class="mg-b-10">Statut</p>
								<select class="form-control">
									<option label="Statut">
									</option>
									<option value="Firefox">
									Firefox
									</option>
									<option value="Chrome">
									Chrome
									</option>
									<option value="Safari">
									Safari
									</option>
									<option value="Opera">
									Opera
									</option>
									<option value="Internet Explorer">
									Internet Explorer
									</option>
								</select>
							</div>
							<div class="form-group">
							<p class="mg-b-10">Commentaire</p>
							<textarea class="form-control" placeholder="Texte..." rows="5"></textarea>
						</div>
					</div>
				</div>

				</div>
				<div class="modal-footer m-auto">
				<!-- <button class="validerbtn btn" type="button">Valider</button>
				<button class="annulerBtn btn" data-dismiss="modal" type="button">Annuler</button> -->
				<a href="javascript:void(0)" class="btn btn-lightblue px-4 mr-2" style="line-height: 2;border-radius: 7rem !important" data-toggle="modal" data-target="#modified-status-visite-modal">Valider</a>
    			<a href="javascript:void(0)" class="btn bg-white px-5 text-blue text-bold btn-shadow" style="line-height: 2;border-radius:  7rem !important">Annuler</a>
			</div>
		</div>
	</div>
</div>

<div class="modal" id="modified-status-visite-modal" style="padding-right: 3px;" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document" style="width: 30rem">
        <div class="modal-content modal-content-demo">

                <div class="modal-body pt-5">

                    <div class="row text-center">
                        <img src="assets/img/media/check-circle.png" style="margin:0 auto;max-width: 5rem;" />

                        <h2 style="font-size:1.6rem;width:100%;" class="mt-4">Statut la visite modifié !</h2>
                    </div>

                </div>
                <div class="modal-footer m-auto pb-5">
                    <a href="javascript:void(0)" class="btn btn-lightblue px-4 mr-2 tx-16" style="line-height: 2;border-radius: 7rem !important"  id="modified-status-visite-ok-btn">OK</a>

                </div>
        </div>
    </div>
</div>

<script type="text/javascript">
	$('#clientDataTable').dataTable({
		"order": [],
		"pageLength": 25,
		"columnDefs": [{
	        "targets": [0,1,2,3],
	        "orderable": false,
	     }],
	     "scrollY": "430px",
	     "scrollX": true,
         "scroller": true,
	     "scrollCollapse": true,
	     "bPaginate": false,
	     "bInfo": false
	});
	$('#clientDataTable_length').hide();
	$('#clientDataTable_filter').hide();

	$('.right-slim-div').slimscroll({
        color: '#000000',
        size: '5px',
        height: '50vh',
        alwaysVisible: true
    });

    $('.content-slim-div').slimscroll({
        color: '#000000',
        size: '5px',
        height: '50vh',
        alwaysVisible: true
    });

    $('.close-modal').click(function(){
		$('.modal').modal('hide');
	});


    $("#clientDataTable tbody tr td i").click(function (event) {
        $("#planifier-modal").modal('show');
    });

    function openPlanifeeStatusModal(){
    	$('#planifee-status-intervention-modal').modal('show');
    }

    $('#modified-status-intervention-ok-btn').click(function(){
		$('#modified-status-intervention-modal').modal('hide');
		$('#planifee-status-intervention-modal').modal('hide');
	});

	function openPlanifeeVisiteStatusModal(){
    	$('#planifee-status-visite-modal').modal('show');
    }

    $('#modified-status-visite-ok-btn').click(function(){
		$('#modified-status-visite-modal').modal('hide');
		$('#planifee-status-visite-modal').modal('hide');
	});

	function openPlanifeeVisiteStatusModal(){
    	$('#planifee-status-visite-modal').modal('show');
    }

    $('#modified-status-visite-ok-btn').click(function(){
		$('#modified-status-visite-modal').modal('hide');
		$('#planifee-status-visite-modal').modal('hide');
	});

	$('.employeeConfirmationOKBtn').click(function(){
		$('#planifier-modal').modal('hide');
		$('.modal-backdrop').remove();
	});


</script>

<?php include('sidebar-footer.php'); ?>
