<?php include('header.php'); ?>
<link rel="stylesheet" href="assets/plugins/prettify/prettify.css">
<script src="assets/plugins/slim-scroll/jquery.slimscroll.min.js"></script>
<script src="assets/plugins/prettify/prettify.js"></script>
<link rel="stylesheet" href="https://cdn.rawgit.com/openlayers/openlayers.github.io/master/en/v5.3.0/css/ol.css" type="text/css">
<script src="https://cdn.rawgit.com/openlayers/openlayers.github.io/master/en/v5.3.0/build/ol.js"></script>

<style type="text/css">
	html,body{
		overflow: hidden;
	}
	.card.custom-card.overflow-hidden.search-filter-options{
		height: 498px;
		margin-bottom: unset;
	}
</style>

<div class="row row-sm mt-4">
	<div class="col-lg-5 col-sm-5">
		<strong class="tx-16 black-text font-weight-bold mr-4">RECHERCHE DE COLLABORATEURS</strong>
		<strong class="text-blue tx-11">500 collaborateurs trouvès</strong>
	</div>
	<div class="col-lg-4 col-sm-4 mb-2" style="margin-top:-8px">
		<div class="float-right">
			<div class="circle-icon mt-1">
				<a href="collaborateurs-map.php">
				<img src="assets/img/icons/blue-map-white.png" />
				</a>
			</div>
			<a href="javascript:void(0);" class="btn-blue-white mr-2 open-add-technician-popup-modal" data-toggle="modal" data-target="#add-technician-modal">Ajouter collaborateur</a>
			<a href="javascript:void(0);" class="btn-white-blue ml-2 px-4" style="height: 32px;">Exporter</a>
		</div>
	</div>
</div>
<div class="row mt-2 collaborateur-list-container">
	<div class="col-lg-9">
		<div class="rounded-corner bg-white px-2">
			<div class="table-responsive">
				<table class="table table-striped w-100" id="clientDataTable1" style="width:100%">
					<thead>
						<tr>
							<th class="wd-15p">Nom</th>
							<th class="wd-15p">Prenom</th>
							<th class="wd-15p">Type</th>
							<th class="wd-15p">Poste</th>
							<th class="wd-15p">Planificateur</th>
							<th class="wd-15p">Agence</th>
							<th class="wd-15p">&emsp;&emsp;&emsp;&emsp;&emsp;</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>DURANT</td>
							<td>MARCEL</td>
							<td>INSTALLATION</td>
							<td>TECHNICIEN</td>
							<td>JOHNY DOE</td>
							<td>LA ROCHELLE</td>
							<td>
								<a href="javascript:void(0)" data-toggle="modal" data-target="#technicien-modal">
								<span class="active-green font-weight-bold">
								<i class="fa fa-circle"></i>
								</span>
								</a>
							</td>
						</tr>
						<tr>
							<td>DURANT</td>
							<td>MARCEL</td>
							<td>INSTALLATION</td>
							<td>TECHNICIEN</td>
							<td>JOHNY DOE</td>
							<td>LA ROCHELLE</td>
							<td>
								<a href="javascript:void(0)" data-toggle="modal" data-target="#technicien-modal">
								<span class="inactive-gray font-weight-bold">
								<i class="fa fa-circle"></i>
								</span>
								</a>
							</td>
						</tr>
						<tr>
							<td>DURANT</td>
							<td>MARCEL</td>
							<td>INSTALLATION</td>
							<td>TECHNICIEN</td>
							<td>JOHNY DOE</td>
							<td>LA ROCHELLE</td>
							<td>
								<a href="javascript:void(0)" data-toggle="modal" data-target="#technicien-modal">
								<span class="active-green font-weight-bold">
								<i class="fa fa-circle"></i>
								</span>
								</a>
							</td>
						</tr>
						<tr>
							<td>DURANT</td>
							<td>MARCEL</td>
							<td>INSTALLATION</td>
							<td>TECHNICIEN</td>
							<td>JOHNY DOE</td>
							<td>LA ROCHELLE</td>
							<td>
								<a href="javascript:void(0)" data-toggle="modal" data-target="#technicien-modal">
								<span class="inactive-gray font-weight-bold">
								<i class="fa fa-circle"></i>
								</span>
								</a>
							</td>
						</tr>
						<tr>
							<td>DURANT</td>
							<td>MARCEL</td>
							<td>INSTALLATION</td>
							<td>TECHNICIEN</td>
							<td>JOHNY DOE</td>
							<td>LA ROCHELLE</td>
							<td>
								<a href="javascript:void(0)" data-toggle="modal" data-target="#technicien-modal">
								<span class="active-green font-weight-bold">
								<i class="fa fa-circle"></i>
								</span>
								</a>
							</td>
						</tr>
						<tr>
							<td>DURANT</td>
							<td>MARCEL</td>
							<td>INSTALLATION</td>
							<td>TECHNICIEN</td>
							<td>JOHNY DOE</td>
							<td>LA ROCHELLE</td>
							<td>
								<a href="javascript:void(0)" data-toggle="modal" data-target="#technicien-modal">
								<span class="inactive-gray font-weight-bold">
								<i class="fa fa-circle"></i>
								</span>
								</a>
							</td>
						</tr>
						<tr>
							<td>DURANT</td>
							<td>MARCEL</td>
							<td>INSTALLATION</td>
							<td>TECHNICIEN</td>
							<td>JOHNY DOE</td>
							<td>LA ROCHELLE</td>
							<td>
								<a href="javascript:void(0)" data-toggle="modal" data-target="#technicien-modal">
								<span class="active-green font-weight-bold">
								<i class="fa fa-circle"></i>
								</span>
								</a>
							</td>
						</tr>
						<tr>
							<td>DURANT</td>
							<td>MARCEL</td>
							<td>INSTALLATION</td>
							<td>TECHNICIEN</td>
							<td>JOHNY DOE</td>
							<td>LA ROCHELLE</td>
							<td>
								<a href="javascript:void(0)" data-toggle="modal" data-target="#technicien-modal">
								<span class="inactive-gray font-weight-bold">
								<i class="fa fa-circle"></i>
								</span>
								</a>
							</td>
						</tr>
						<tr>
							<td>DURANT</td>
							<td>MARCEL</td>
							<td>INSTALLATION</td>
							<td>TECHNICIEN</td>
							<td>JOHNY DOE</td>
							<td>LA ROCHELLE</td>
							<td>
								<a href="javascript:void(0)" data-toggle="modal" data-target="#technicien-modal">
								<span class="active-green font-weight-bold">
								<i class="fa fa-circle"></i>
								</span>
								</a>
							</td>
						</tr>
						<tr>
							<td>DURANT</td>
							<td>MARCEL</td>
							<td>INSTALLATION</td>
							<td>TECHNICIEN</td>
							<td>JOHNY DOE</td>
							<td>LA ROCHELLE</td>
							<td>
								<a href="javascript:void(0)" data-toggle="modal" data-target="#technicien-modal">
								<span class="inactive-gray font-weight-bold">
								<i class="fa fa-circle"></i>
								</span>
								</a>
							</td>
						</tr>
						<tr>
							<td>DURANT</td>
							<td>MARCEL</td>
							<td>INSTALLATION</td>
							<td>TECHNICIEN</td>
							<td>JOHNY DOE</td>
							<td>LA ROCHELLE</td>
							<td>
								<a href="javascript:void(0)" data-toggle="modal" data-target="#technicien-modal">
								<span class="active-green font-weight-bold">
								<i class="fa fa-circle"></i>
								</span>
								</a>
							</td>
						</tr>
						<tr>
							<td>DURANT</td>
							<td>MARCEL</td>
							<td>INSTALLATION</td>
							<td>TECHNICIEN</td>
							<td>JOHNY DOE</td>
							<td>LA ROCHELLE</td>
							<td>
								<a href="javascript:void(0)" data-toggle="modal" data-target="#technicien-modal">
								<span class="inactive-gray font-weight-bold">
								<i class="fa fa-circle"></i>
								</span>
								</a>
							</td>
						</tr>
						<tr>
							<td>DURANT</td>
							<td>MARCEL</td>
							<td>INSTALLATION</td>
							<td>TECHNICIEN</td>
							<td>JOHNY DOE</td>
							<td>LA ROCHELLE</td>
							<td>
								<a href="javascript:void(0)" data-toggle="modal" data-target="#technicien-modal">
								<span class="active-green font-weight-bold">
								<i class="fa fa-circle"></i>
								</span>
								</a>
							</td>
						</tr>
						<tr>
							<td>DURANT</td>
							<td>MARCEL</td>
							<td>INSTALLATION</td>
							<td>TECHNICIEN</td>
							<td>JOHNY DOE</td>
							<td>LA ROCHELLE</td>
							<td>
								<a href="javascript:void(0)" data-toggle="modal" data-target="#technicien-modal">
								<span class="inactive-gray font-weight-bold">
								<i class="fa fa-circle"></i>
								</span>
								</a>
							</td>
						</tr>
						<tr>
							<td>DURANT</td>
							<td>MARCEL</td>
							<td>INSTALLATION</td>
							<td>TECHNICIEN</td>
							<td>JOHNY DOE</td>
							<td>LA ROCHELLE</td>
							<td>
								<a href="javascript:void(0)" data-toggle="modal" data-target="#technicien-modal">
								<span class="active-green font-weight-bold">
								<i class="fa fa-circle"></i>
								</span>
								</a>
							</td>
						</tr>
						<tr>
							<td>DURANT</td>
							<td>MARCEL</td>
							<td>INSTALLATION</td>
							<td>TECHNICIEN</td>
							<td>JOHNY DOE</td>
							<td>LA ROCHELLE</td>
							<td>
								<a href="javascript:void(0)" data-toggle="modal" data-target="#technicien-modal">
								<span class="inactive-gray font-weight-bold">
								<i class="fa fa-circle"></i>
								</span>
								</a>
							</td>
						</tr>
						<tr>
							<td>DURANT</td>
							<td>MARCEL</td>
							<td>INSTALLATION</td>
							<td>TECHNICIEN</td>
							<td>JOHNY DOE</td>
							<td>LA ROCHELLE</td>
							<td>
								<a href="javascript:void(0)" data-toggle="modal" data-target="#technicien-modal">
								<span class="active-green font-weight-bold">
								<i class="fa fa-circle"></i>
								</span>
								</a>
							</td>
						</tr>
						<tr>
							<td>DURANT</td>
							<td>MARCEL</td>
							<td>INSTALLATION</td>
							<td>TECHNICIEN</td>
							<td>JOHNY DOE</td>
							<td>LA ROCHELLE</td>
							<td>
								<a href="javascript:void(0)" data-toggle="modal" data-target="#technicien-modal">
								<span class="inactive-gray font-weight-bold">
								<i class="fa fa-circle"></i>
								</span>
								</a>
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
			<div class="card custom-card search-filter-options">
				<div class="card-body px-0 py-5">
					<div aria-multiselectable="true" class="accordion" id="accordion" role="tablist">
						<div class="card">
							<div class="card-header" id="headingOneHIW" role="tab">
								<a aria-controls="collapseOneHIW" aria-expanded="true" data-toggle="collapse" href="#collapseOneHIW">Filtre</a>
							</div>
							<div aria-labelledby="headingOneHIW" class="collapse show" data-parent="#accordion" id="collapseOneHIW" role="tabpanel">
								<div class="card-body">
									<label class="ckbox my-2"><input type="checkbox"><span>Sous filtre</span></label>
									<label class="ckbox my-2 active"><input type="checkbox" checked><span>Sous filtre</span></label>
									<label class="ckbox my-2"><input type="checkbox"><span>Sous filtre</span></label>
									<label class="ckbox my-2 active"><input type="checkbox" checked><span>Sous filtre</span></label>
									<label class="ckbox my-2"><input type="checkbox"><span>Sous filtre</span></label>
									<label class="ckbox my-2"><input type="checkbox"><span>Sous filtre</span></label>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingTwoHIW" role="tab">
								<a aria-controls="collapseTwoHIW" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapseTwoHIW">Filtre</a>
							</div>
							<div aria-labelledby="headingTwoHIW" class="collapse" data-parent="#accordion" id="collapseTwoHIW" role="tabpanel">
								<div class="card-body">
									<label class="ckbox my-2"><input type="checkbox"><span>Sous filtre</span></label>
									<label class="ckbox my-2"><input type="checkbox"><span>Sous filtre</span></label>
									<label class="ckbox my-2"><input type="checkbox"><span>Sous filtre</span></label>
									<label class="ckbox my-2"><input type="checkbox"><span>Sous filtre</span></label>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingThreeHIW" role="tab">
								<a aria-controls="collapseThreeHIW" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapseThreeHIW">Filtre</a>
							</div>
							<div aria-labelledby="headingThreeHIW" class="collapse" data-parent="#accordion" id="collapseThreeHIW" role="tabpanel">
								<div class="card-body">
									<label class="ckbox my-2"><input type="checkbox"><span>Sous filtre</span></label>
									<label class="ckbox my-2"><input type="checkbox"><span>Sous filtre</span></label>
									<label class="ckbox my-2"><input type="checkbox"><span>Sous filtre</span></label>
									<label class="ckbox my-2"><input type="checkbox"><span>Sous filtre</span></label>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingfourHIW" role="tab">
								<a aria-controls="collapsefourHIW" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapsefourHIW">Filtre</a>
							</div>
							<div aria-labelledby="headingfourHIW" class="collapse" data-parent="#accordion" id="collapsefourHIW" role="tabpanel">
								<div class="card-body">
									<label class="ckbox my-2"><input type="checkbox"><span>Sous filtre</span></label>
									<label class="ckbox my-2"><input type="checkbox"><span>Sous filtre</span></label>
									<label class="ckbox my-2"><input type="checkbox"><span>Sous filtre</span></label>
									<label class="ckbox my-2"><input type="checkbox"><span>Sous filtre</span></label>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingTwoHIW" role="tab">
								<a aria-controls="collapseTwoHIW" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapseTwoHIW">Filtre</a>
							</div>
							<div aria-labelledby="headingTwoHIW" class="collapse" data-parent="#accordion" id="collapseTwoHIW" role="tabpanel">
								<div class="card-body">
									<label class="ckbox my-2"><input type="checkbox"><span>Sous filtre</span></label>
									<label class="ckbox my-2"><input type="checkbox"><span>Sous filtre</span></label>
									<label class="ckbox my-2"><input type="checkbox"><span>Sous filtre</span></label>
									<label class="ckbox my-2"><input type="checkbox"><span>Sous filtre</span></label>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingThreeHIW" role="tab">
								<a aria-controls="collapseThreeHIW" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapseThreeHIW">Filtre</a>
							</div>
							<div aria-labelledby="headingThreeHIW" class="collapse" data-parent="#accordion" id="collapseThreeHIW" role="tabpanel">
								<div class="card-body">
									<label class="ckbox my-2"><input type="checkbox"><span>Sous filtre</span></label>
									<label class="ckbox my-2"><input type="checkbox"><span>Sous filtre</span></label>
									<label class="ckbox my-2"><input type="checkbox"><span>Sous filtre</span></label>
									<label class="ckbox my-2"><input type="checkbox"><span>Sous filtre</span></label>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingfourHIW" role="tab">
								<a aria-controls="collapsefourHIW" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapsefourHIW">Filtre</a>
							</div>
							<div aria-labelledby="headingfourHIW" class="collapse" data-parent="#accordion" id="collapsefourHIW" role="tabpanel">
								<div class="card-body">
									<label class="ckbox my-2"><input type="checkbox"><span>Sous filtre</span></label>
									<label class="ckbox my-2"><input type="checkbox"><span>Sous filtre</span></label>
									<label class="ckbox my-2"><input type="checkbox"><span>Sous filtre</span></label>
									<label class="ckbox my-2"><input type="checkbox"><span>Sous filtre</span></label>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingTwoHIW" role="tab">
								<a aria-controls="collapseTwoHIW" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapseTwoHIW">Filtre</a>
							</div>
							<div aria-labelledby="headingTwoHIW" class="collapse" data-parent="#accordion" id="collapseTwoHIW" role="tabpanel">
								<div class="card-body">
									<label class="ckbox my-2"><input type="checkbox"><span>Sous filtre</span></label>
									<label class="ckbox my-2"><input type="checkbox"><span>Sous filtre</span></label>
									<label class="ckbox my-2"><input type="checkbox"><span>Sous filtre</span></label>
									<label class="ckbox my-2"><input type="checkbox"><span>Sous filtre</span></label>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingThreeHIW" role="tab">
								<a aria-controls="collapseThreeHIW" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapseThreeHIW">Filtre</a>
							</div>
							<div aria-labelledby="headingThreeHIW" class="collapse" data-parent="#accordion" id="collapseThreeHIW" role="tabpanel">
								<div class="card-body">
									<label class="ckbox my-2"><input type="checkbox"><span>Sous filtre</span></label>
									<label class="ckbox my-2"><input type="checkbox"><span>Sous filtre</span></label>
									<label class="ckbox my-2"><input type="checkbox"><span>Sous filtre</span></label>
									<label class="ckbox my-2"><input type="checkbox"><span>Sous filtre</span></label>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingfourHIW" role="tab">
								<a aria-controls="collapsefourHIW" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapsefourHIW">Filtre</a>
							</div>
							<div aria-labelledby="headingfourHIW" class="collapse" data-parent="#accordion" id="collapsefourHIW" role="tabpanel">
								<div class="card-body">
									<label class="ckbox my-2"><input type="checkbox"><span>Sous filtre</span></label>
									<label class="ckbox my-2"><input type="checkbox"><span>Sous filtre</span></label>
									<label class="ckbox my-2"><input type="checkbox"><span>Sous filtre</span></label>
									<label class="ckbox my-2"><input type="checkbox"><span>Sous filtre</span></label>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="heading6" role="tab">
								<a aria-controls="collapse6" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapse6">Filtre</a>
							</div>
							<div aria-labelledby="heading6" class="collapse" data-parent="#accordion" id="collapse6" role="tabpanel">
								<div class="card-body">
									<label class="ckbox my-2"><input type="checkbox"><span>Sous filtre</span></label>
									<label class="ckbox my-2"><input type="checkbox"><span>Sous filtre</span></label>
									<label class="ckbox my-2"><input type="checkbox"><span>Sous filtre</span></label>
									<label class="ckbox my-2"><input type="checkbox"><span>Sous filtre</span></label>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="heading7" role="tab">
								<a aria-controls="collapse7" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapse7">Filtre</a>
							</div>
							<div aria-labelledby="heading7" class="collapse" data-parent="#accordion" id="collapse7" role="tabpanel">
								<div class="card-body">
									<label class="ckbox my-2"><input type="checkbox"><span>Sous filtre</span></label>
									<label class="ckbox my-2"><input type="checkbox"><span>Sous filtre</span></label>
									<label class="ckbox my-2"><input type="checkbox"><span>Sous filtre</span></label>
									<label class="ckbox my-2"><input type="checkbox"><span>Sous filtre</span></label>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="heading8" role="tab">
								<a aria-controls="collapse8" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapse8">Filtre</a>
							</div>
							<div aria-labelledby="heading8" class="collapse" data-parent="#accordion" id="collapse8" role="tabpanel">
								<div class="card-body">
									<label class="ckbox my-2"><input type="checkbox"><span>Sous filtre</span></label>
									<label class="ckbox my-2"><input type="checkbox"><span>Sous filtre</span></label>
									<label class="ckbox my-2"><input type="checkbox"><span>Sous filtre</span></label>
									<label class="ckbox my-2"><input type="checkbox"><span>Sous filtre</span></label>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="heading9" role="tab">
								<a aria-controls="collapse9" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapse9">Filtre</a>
							</div>
							<div aria-labelledby="heading9" class="collapse" data-parent="#accordion" id="collapse6" role="tabpanel">
								<div class="card-body">
									<label class="ckbox my-2"><input type="checkbox"><span>Sous filtre</span></label>
									<label class="ckbox my-2"><input type="checkbox"><span>Sous filtre</span></label>
									<label class="ckbox my-2"><input type="checkbox"><span>Sous filtre</span></label>
									<label class="ckbox my-2"><input type="checkbox"><span>Sous filtre</span></label>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="heading10" role="tab">
								<a aria-controls="collapse10" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapse10">Filtre</a>
							</div>
							<div aria-labelledby="heading10" class="collapse" data-parent="#accordion" id="collapse7" role="tabpanel">
								<div class="card-body">
									<label class="ckbox my-2"><input type="checkbox"><span>Sous filtre</span></label>
									<label class="ckbox my-2"><input type="checkbox"><span>Sous filtre</span></label>
									<label class="ckbox my-2"><input type="checkbox"><span>Sous filtre</span></label>
									<label class="ckbox my-2"><input type="checkbox"><span>Sous filtre</span></label>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="heading11" role="tab">
								<a aria-controls="collapse11" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapse11">Filtre</a>
							</div>
							<div aria-labelledby="heading11" class="collapse" data-parent="#accordion" id="collapse8" role="tabpanel">
								<div class="card-body">
									<label class="ckbox my-2"><input type="checkbox"><span>Sous filtre</span></label>
									<label class="ckbox my-2"><input type="checkbox"><span>Sous filtre</span></label>
									<label class="ckbox my-2"><input type="checkbox"><span>Sous filtre</span></label>
									<label class="ckbox my-2"><input type="checkbox"><span>Sous filtre</span></label>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="heading9" role="tab">
								<a aria-controls="collapse9" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapse9">Filtre</a>
							</div>
							<div aria-labelledby="heading9" class="collapse" data-parent="#accordion" id="collapse6" role="tabpanel">
								<div class="card-body">
									<label class="ckbox my-2"><input type="checkbox"><span>Sous filtre</span></label>
									<label class="ckbox my-2"><input type="checkbox"><span>Sous filtre</span></label>
									<label class="ckbox my-2"><input type="checkbox"><span>Sous filtre</span></label>
									<label class="ckbox my-2"><input type="checkbox"><span>Sous filtre</span></label>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="heading10" role="tab">
								<a aria-controls="collapse10" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapse10">Filtre</a>
							</div>
							<div aria-labelledby="heading10" class="collapse" data-parent="#accordion" id="collapse7" role="tabpanel">
								<div class="card-body">
									<label class="ckbox my-2"><input type="checkbox"><span>Sous filtre</span></label>
									<label class="ckbox my-2"><input type="checkbox"><span>Sous filtre</span></label>
									<label class="ckbox my-2"><input type="checkbox"><span>Sous filtre</span></label>
									<label class="ckbox my-2"><input type="checkbox"><span>Sous filtre</span></label>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="heading11" role="tab">
								<a aria-controls="collapse11" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapse11">Filtre</a>
							</div>
							<div aria-labelledby="heading11" class="collapse" data-parent="#accordion" id="collapse8" role="tabpanel">
								<div class="card-body">
									<label class="ckbox my-2"><input type="checkbox"><span>Sous filtre</span></label>
									<label class="ckbox my-2"><input type="checkbox"><span>Sous filtre</span></label>
									<label class="ckbox my-2"><input type="checkbox"><span>Sous filtre</span></label>
									<label class="ckbox my-2"><input type="checkbox"><span>Sous filtre</span></label>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="heading11" role="tab">
								<a aria-controls="collapse11" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapse11">Filtre</a>
							</div>
							<div aria-labelledby="heading11" class="collapse" data-parent="#accordion" id="collapse8" role="tabpanel">
								<div class="card-body">
									<label class="ckbox my-2"><input type="checkbox"><span>Sous filtre</span></label>
									<label class="ckbox my-2"><input type="checkbox"><span>Sous filtre</span></label>
									<label class="ckbox my-2"><input type="checkbox"><span>Sous filtre</span></label>
									<label class="ckbox my-2"><input type="checkbox"><span>Sous filtre</span></label>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="modal fullmodal fade technicien-modal" id="technicien-modal" tabindex="-1" role="dialog" aria-labelledby="technicien-modal
	" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<div class="row">
					<div class="col-lg-8 col-md-8 col-sm-12">
						&nbsp;
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6 bg-lightgray py-2 px-2 tour-employee-modal-right">
						<div class="tour-employee-modal-arrow">
							<a href="javascript:void(0)"><img src="assets/img/icons/gray-left-arrow.png" class="tour-employee-left-arrow" data-dismiss="modal"></a>
						</div>
						<div class="row">
							<div class="col-lg-11 col-md-11 col-sm-12 p-0">
								<div class="card-body px-0 pt-0 pb-3" >
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-6">
											<div class="tour-employee-name-title">
												<span class="tour-name-title">John Doe</span>
												<span class="tour-name-email mt-1">johndoe@gmail.com</span>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6 m-auto" style="">
											<div class="employee-tour-switch-cust">
												<span class="tour-switch-modal mr-3">
												<label class="switch mb-0">
												<input type="checkbox" checked onclick="opentest()" id="employee-active-chck">
												<span class="cslider round"></span>
												</label>
												</span>
												<span class="tour-modal-button">
												<a href="javascript:void(0)" class="btn-editer" data-toggle="modal" data-target="#add-technician-modal">Editer la fiche</a>
												</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-11 col-md-11 col-sm-12 tour-modal-details-row">
								<span class="tour-modal-label mb-2">Addresse</span>
								<span class="tour-modal-normal-text tour-details-content-cust">56 avenue victor wallart 17000 La Rochelle</span>
							</div>
						</div>
						<div class="row pt-3">
							<div class="col-lg-11 col-md-11 col-sm-12">
								<div class="row">
									<div class="col-xs-12 col-sm-4 tour-modal-fields-row-div">
										<div class="bg-white rounded-corner tour-modal-fields-row">
											<span class="tour-modal-label mb-2">Nº téléphone</span>
											<span class="tour-modal-normal-text tour-details-content-cust">+33 0000000</span>
										</div>
									</div>
									<div class="col-xs-12 col-sm-4  tour-modal-fields-row-div">
										<div class="bg-white rounded-corner tour-modal-fields-row">
											<span class="tour-modal-label mb-2">NNI</span>
											<span class="tour-modal-normal-text tour-details-content-cust">PCA510AIM</span>
										</div>
									</div>
									<div class="col-xs-12 col-sm-4 tour-modal-fields-row-div " style="margin-right:0 !important">
										<div class="bg-white rounded-corner tour-modal-fields-row mr-0">
											<span class="tour-modal-label mb-2">Planificateur</span>
											<span class="tour-modal-normal-text tour-details-content-cust">Arnaud Durand</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row pt-3">
							<div class="col-lg-12 col-sm-12 p-0 pr-5">
								<div class="tour-modal-tabs">
									<nav>
										<div class="nav nav-tabs tour-navs" id="nav-tour-modal-tab" role="tablist">
											<a class="nav-item nav-link active" id="nav-perimetre-tab" data-toggle="tab" href="#nav-perimetre" role="tab" aria-controls="nav-tour" aria-selected="true">
											<span class="tab-label">Pèrimètre de travail</span>
											</a>
											<a class="nav-item nav-link" id="nav-absences-tab" data-toggle="tab" href="#nav-absences" role="tab" aria-controls="nav-absences" aria-selected="true">
											<span class="tab-label">Liste des absences</span>
											</a>
											<a class="nav-item nav-link" id="nav-notifications-tab" data-toggle="tab" href="#nav-notifications" role="tab" aria-controls="nav-notifications" aria-selected="true">
											<span class="tab-label">Notifications</span>
											</a>
										</div>
									</nav>
									<div class="tab-content tour-right-content bg-white" id="nav-tabContent" style="border-radius: 0 10px 10px 10px; height: 520px;">
										<div class="tab-pane fade show active" id="nav-perimetre" role="tabpanel" aria-labelledby="nav-perimetre-tab">
											<?php include('employee-tour/perimetre.php'); ?>
										</div>
										<div class="tab-pane fade" id="nav-absences" role="tabpanel" aria-labelledby="nav-absences-tab">
											<?php include('employee-tour/absences.php'); ?>
										</div>
										<div class="tab-pane fade" id="nav-notifications" role="tabpanel" aria-labelledby="nav-notifications-tab">
											<?php include('employee-tour/notifications.php'); ?>
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
<div class="modal fade view-formation-modal" id="view-formation-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" style="width: 600px;">
		<div class="modal-content">
			<div class="modal-header pb-0">
				<h5 class="modal-title">EDITER UNE FORMATION</h5>
				<a href="javascript:void(0)" class="btn btn-lightblue" data-toggle="modal" data-target="#employee-confirmation-absence-modal" style="right: 16%;">Enregistrer</a>
				<a class="modal-close" style="float:right;margin-top: -6px;" data-dismiss="modal" aria-label="Close" href="javascript:void(0)">
					<img src="assets/img/icons/Exit_1.png">
				</a>
				<!--<a href="javascript:void(0);" class="btn-blue-white float-right mt-0" data-toggle="modal" data-target="#employee-confirmation-absence-modal">Enregistrer</a>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">
				<img src="assets/img/icons/Exit_1.png">
				</span>
				</button>-->
			</div>
			<div class="modal-body">
				<div class="row pr-5">
					<div class="col-lg-10 col-sm-10">
						<div class="form-group">
							<label>Nom de la formation</label>
							<p class="lightgray-font-color">LOREMPSUS</p>
						</div>
					</div>
					<div class="col-lg-6 col-sm-6 pr-2">
						<div class="form-group">
							<label>Date d'obtention</label>
							<div class="datepicker-container">
								<i class="date-icon date-icon1 float-left" aria-hidden="true"></i>
								<input class="form-control bar-from" type="text" placeholder="00/00/0000" />
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-sm-6 pl-2">
						<div class="form-group">
							<label>Date de fin d'habilitation</label>
							<div class="datepicker-container">
								<i class="date-icon date-icon2 float-left" aria-hidden="true"></i>
								<input class="form-control bar-to" type="text" placeholder="00/00/0000" />
							</div>
						</div>
					</div>
					<div class="col-lg-12 col-sm-12">
						<div class="form-group">
							<label>Ajouter des justificatifs</label>
							<div class="row">
								<div class="col-lg-3 col-sm-3 pr-2">
									<div class="form-group box-with-icon">
										<div class="upload-bx view-color">
											<i>
											<img src="assets/img/document-thumbnail.png">
											</i>
										</div>
										<p class="text-center view-color" style="bottom: -32%;">
											<img src="assets/img/icons/eye-round-blue.png" style="margin-right: -10%; width: 30%; margin-top: 3%;">
											<img src="assets/img/icons/Exit_1.png" style="width: 28%; margin-top: 2px;">
										</p>
									</div>
								</div>
								<div class="col-lg-3 col-sm-3 pr-2">
									<div class="form-group box-with-icon">
										<div class="upload-bx view-color">
											<i>
											<img src="assets/img/document-thumbnail.png">
											</i>
										</div>
										<p class="text-center view-color" style="bottom: -32%;">
											<img src="assets/img/icons/eye-round-blue.png" style="margin-right: -10%; width: 30%; margin-top: 3%;">
											<img src="assets/img/icons/Exit_1.png" style="width: 28%; margin-top: 2px;">
										</p>
									</div>
								</div>
								<div class="col-lg-3 col-sm-3 pr-2">
									<div class="form-group">
										<div class="upload-bx lightgray-upload-bx">
											<i class="fa fa-plus fa-2x"></i>
										</div>
										<input type="file" name="" class="hide-file-input">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12 col-sm-12">
						<p class="mt-3 text-bold"><a href="javascript:void(0);" class="text-blue"><img src="assets/img/icons/delete.png"> Supprimer la formation</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade absence-modal" id="absence-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-xl">
		<div class="modal-content">
			<div class="modal-header pb-0">
				<h5 class="modal-title">AJOUTER UNE ABSENCE</h5>
				<a href="javascript:void(0)" class="btn btn-lightblue" data-toggle="modal" data-target="#employee-confirmation-absence-modal">Ajouter</a>
				<a class="modal-close" style="float:right;margin-top: -6px;" data-dismiss="modal" aria-label="Close" href="javascript:void(0)">
					<img src="assets/img/icons/Exit_1.png">
				</a>
				<!--<a href="javascript:void(0);" class="btn-blue-white float-right mt-0" data-toggle="modal" data-target="#employee-confirmation-absence-modal">Ajouter</a>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">
				<img src="assets/img/icons/Exit_1.png">
				</span>
				</button>-->
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-lg-4 col-sm-4 pl-3">
						<div class="form-group">
							<label>Motif</label>
							<select class="form-control">
								<option>CONGÉS PAYÉS</option>
							</select>
						</div>
						<div class="form-group">
							<label>Début</label>
							<div class="row">
								<div class="col-lg-7 col-sm-7">
									<div class="datepicker-container">
										<i class="date-icon date-icon1 float-left" aria-hidden="true"></i>
										<input class="form-control bar-from" type="text" placeholder="00/00/0000" />
									</div>
								</div>
								<div class="col-lg-5 col-sm-5">
									<select class="form-control">
										<option>10:00</option>
									</select>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Fin</label>
							<div class="row">
								<div class="col-lg-7 col-sm-7">
									<div class="datepicker-container">
										<i class="date-icon date-icon1 float-left" aria-hidden="true"></i>
										<input class="form-control bar-from" type="text" placeholder="00/00/0000" />
									</div>
								</div>
								<div class="col-lg-5 col-sm-5">
									<select class="form-control">
										<option>10:00</option>
									</select>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Description</label>
							<textarea class="form-control" rows="12" placeholder="Texte..."></textarea>
						</div>
					</div>
					<div class="col-lg-4 col-sm-4">
						<div class="form-group fill-background-checkbox-container" style="position: relative;">
							<input type="checkbox" class="form-control" style="display: inline-block;" checked>
							<label style="margin-top: 0px; position: absolute; margin-left: 5px;">Répéter</label>
							<select class="form-control">
								<option>PAR SEMAINE</option>
							</select>
						</div>
						<div class="form-group">
							<label>Notifier à:</label>
							<div class="search-container">
								<i class="fa" aria-hidden="true">
									<img src="assets/img/icons/search-blue.png">
								</i>
								<input type="text" name="" class="form-control" placeholder="Recherche collaborateurs...">
							</div>
							<div class="pt-2 pb-2 pr-2 mt-1" style="border: 1px solid #e5e5e5;border-radius: 10px;">
								<div class="min-height-scroll-table-container">
									<div class="card-body p-0 px-2">
										<label class="ckbox my-2"><input type="checkbox"><span>Nom Prénom</span></label>
										<label class="ckbox my-2 active"><input type="checkbox" checked><span>Nom Prénom</span></label>
										<label class="ckbox my-2"><input type="checkbox"><span>Nom Prénom</span></label>
										<label class="ckbox my-2 active"><input type="checkbox" checked><span>Nom Prénom</span></label>
										<label class="ckbox my-2"><input type="checkbox"><span>Nom Prénom</span></label>
										<label class="ckbox my-2 active"><input type="checkbox" checked><span>Nom Prénom</span></label>
										<label class="ckbox my-2"><input type="checkbox"><span>Nom Prénom</span></label>
										<label class="ckbox my-2 active"><input type="checkbox" checked><span>Nom Prénom</span></label>
										<label class="ckbox my-2"><input type="checkbox"><span>Nom Prénom</span></label>
										<label class="ckbox my-2 active"><input type="checkbox" checked><span>Nom Prénom</span></label>
										<label class="ckbox my-2"><input type="checkbox"><span>Nom Prénom</span></label>
										<label class="ckbox my-2 active"><input type="checkbox" checked><span>Nom Prénom</span></label>
										<label class="ckbox my-2"><input type="checkbox"><span>Nom Prénom</span></label>
										<label class="ckbox my-2 active"><input type="checkbox" checked><span>Nom Prénom</span></label>
										<label class="ckbox my-2"><input type="checkbox"><span>Nom Prénom</span></label>
										<label class="ckbox my-2 active"><input type="checkbox" checked><span>Nom Prénom</span></label>
										<label class="ckbox my-2"><input type="checkbox"><span>Nom Prénom</span></label>
										<label class="ckbox my-2 active"><input type="checkbox" checked><span>Nom Prénom</span></label>
										<label class="ckbox my-2"><input type="checkbox"><span>Nom Prénom</span></label>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-4">
						<div class="form-group">
							<label>Ajouter des photos</label>
							<div class="min-height-scroll-container pt-2 pb-2 pr-2">
								<div class="min-height-scroll pt-0">
									<div class="row">
										<div class="col-lg-5 col-sm-5">
											<div class="form-group">
												<div class="upload-bx lightgray-upload-bx">
													<i class="fa fa-plus fa-3x"></i>
												</div>
												<input type="file" name="" class="hide-file-input">
											</div>
										</div>
										<div class="col-lg-7 col-sm-7">
											<div class="form-group mt-3">
												<label>Nom</label>
												<input type="text" class="form-control" placeholder="NOM PHOTO">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-5 col-sm-5">
											<div class="form-group">
												<div class="upload-bx lightgray-upload-bx">
													<i class="fa fa-plus fa-3x"></i>
												</div>
												<input type="file" name="" class="hide-file-input">
											</div>
										</div>
										<div class="col-lg-7 col-sm-7">
											<div class="form-group mt-3">
												<label>Nom</label>
												<input type="text" class="form-control" placeholder="NOM PHOTO">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-5 col-sm-5">
											<div class="form-group">
												<div class="upload-bx lightgray-upload-bx">
													<i class="fa fa-plus fa-3x"></i>
												</div>
												<input type="file" name="" class="hide-file-input">
											</div>
										</div>
										<div class="col-lg-7 col-sm-7">
											<div class="form-group mt-3">
												<label>Nom</label>
												<input type="text" class="form-control" placeholder="NOM PHOTO">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-5 col-sm-5">
											<div class="form-group">
												<div class="upload-bx lightgray-upload-bx">
													<i class="fa fa-plus fa-3x"></i>
												</div>
												<input type="file" name="" class="hide-file-input">
											</div>
										</div>
										<div class="col-lg-7 col-sm-7">
											<div class="form-group mt-3">
												<label>Nom</label>
												<input type="text" class="form-control" placeholder="NOM PHOTO">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-5 col-sm-5">
											<div class="form-group">
												<div class="upload-bx lightgray-upload-bx">
													<i class="fa fa-plus fa-3x"></i>
												</div>
												<input type="file" name="" class="hide-file-input">
											</div>
										</div>
										<div class="col-lg-7 col-sm-7">
											<div class="form-group mt-3">
												<label>Nom</label>
												<input type="text" class="form-control" placeholder="NOM PHOTO">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-5 col-sm-5">
											<div class="form-group">
												<div class="upload-bx lightgray-upload-bx">
													<i class="fa fa-plus fa-3x"></i>
												</div>
												<input type="file" name="" class="hide-file-input">
											</div>
										</div>
										<div class="col-lg-7 col-sm-7">
											<div class="form-group mt-3">
												<label>Nom</label>
												<input type="text" class="form-control" placeholder="NOM PHOTO">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-5 col-sm-5">
											<div class="form-group mb-0">
												<div class="upload-bx lightgray-upload-bx">
													<i class="fa fa-plus fa-3x"></i>
												</div>
												<input type="file" name="" class="hide-file-input">
											</div>
										</div>
										<div class="col-lg-7 col-sm-7">
											<div class="form-group mt-3">
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
</div>
<div class="modal fade ecarts-modal" id="ecarts-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-xl">
		<div class="modal-content">
			<div class="modal-header pb-0">
				<h5 class="modal-title">AJOUTER UN ECART</h5>
				<a href="javascript:void(0)" class="btn btn-lightblue" data-toggle="modal" data-target="#employee-confirmation-ecart-modal">Ajouter</a>
				<a class="modal-close" style="float:right;margin-top: -6px;" data-dismiss="modal" aria-label="Close" href="javascript:void(0)">
					<img src="assets/img/icons/Exit_1.png">
				</a>
				<!--<a href="javascript:void(0);" class="btn-blue-white float-right mt-0" data-toggle="modal" data-target="#employee-confirmation-ecart-modal">
				Ajouter
				</a>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">
				<img src="assets/img/icons/Exit_1.png">
				</span>
				</button>-->
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-lg-4 col-sm-4 pl-3">
						<div class="form-group">
							<label>Motif</label>
							<select class="form-control">
								<option>CONGÉS PAYÉS</option>
							</select>
						</div>
						<div class="form-group">
							<label>Début</label>
							<div class="row">
								<div class="col-lg-7 col-sm-7">
									<div class="datepicker-container">
										<i class="date-icon date-icon1 float-left" aria-hidden="true"></i>
										<input class="form-control bar-from" type="text" placeholder="00/00/0000" />
									</div>
								</div>
								<div class="col-lg-5 col-sm-5">
									<select class="form-control">
										<option>10:00</option>
									</select>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Fin</label>
							<div class="row">
								<div class="col-lg-7 col-sm-7">
									<div class="datepicker-container">
										<i class="date-icon date-icon1 float-left" aria-hidden="true"></i>
										<input class="form-control bar-from" type="text" placeholder="00/00/0000" />
									</div>
								</div>
								<div class="col-lg-5 col-sm-5">
									<select class="form-control">
										<option>10:00</option>
									</select>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Description</label>
							<textarea class="form-control" rows="12" placeholder="Texte..."></textarea>
						</div>
					</div>
					<div class="col-lg-4 col-sm-4">
						<div class="form-group" style="position: relative;">
							<input type="checkbox" class="form-control" style="display: inline-block;">
							<label style="margin-top: 0px; position: absolute; margin-left: 5px;">Répéter</label>
							<select class="form-control">
								<option>PAR SEMAINE</option>
							</select>
						</div>
						<div class="form-group">
							<label>Notifier à:</label>
							<div class="search-container">
								<i class="fa" aria-hidden="true">
									<img src="assets/img/icons/search-orange.png">
								</i>
								<input type="text" name="" class="form-control" placeholder="Recherche collaborateurs...">
							</div>
							<div class="pt-2 pb-2 pr-2 mt-1" style="border: 1px solid #e5e5e5;border-radius: 10px;">
								<div class="min-height-scroll-table-container">
									<div class="card-body p-0 px-2">
										<label class="ckbox my-2"><input type="checkbox"><span>Nom Prénom</span></label>
										<label class="ckbox my-2 active"><input type="checkbox" checked><span>Nom Prénom</span></label>
										<label class="ckbox my-2"><input type="checkbox"><span>Nom Prénom</span></label>
										<label class="ckbox my-2 active"><input type="checkbox" checked><span>Nom Prénom</span></label>
										<label class="ckbox my-2"><input type="checkbox"><span>Nom Prénom</span></label>
										<label class="ckbox my-2 active"><input type="checkbox" checked><span>Nom Prénom</span></label>
										<label class="ckbox my-2"><input type="checkbox"><span>Nom Prénom</span></label>
										<label class="ckbox my-2 active"><input type="checkbox" checked><span>Nom Prénom</span></label>
										<label class="ckbox my-2"><input type="checkbox"><span>Nom Prénom</span></label>
										<label class="ckbox my-2 active"><input type="checkbox" checked><span>Nom Prénom</span></label>
										<label class="ckbox my-2"><input type="checkbox"><span>Nom Prénom</span></label>
										<label class="ckbox my-2 active"><input type="checkbox" checked><span>Nom Prénom</span></label>
										<label class="ckbox my-2"><input type="checkbox"><span>Nom Prénom</span></label>
										<label class="ckbox my-2 active"><input type="checkbox" checked><span>Nom Prénom</span></label>
										<label class="ckbox my-2"><input type="checkbox"><span>Nom Prénom</span></label>
										<label class="ckbox my-2 active"><input type="checkbox" checked><span>Nom Prénom</span></label>
										<label class="ckbox my-2"><input type="checkbox"><span>Nom Prénom</span></label>
										<label class="ckbox my-2 active"><input type="checkbox" checked><span>Nom Prénom</span></label>
										<label class="ckbox my-2"><input type="checkbox"><span>Nom Prénom</span></label>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-4">
						<div class="form-group">
							<label>Ajouter des photos</label>
							<div class="min-height-scroll-container pt-2 pb-2 pr-2">
								<div class="min-height-scroll pt-0">
									<div class="row">
										<div class="col-lg-5 col-sm-5">
											<div class="form-group">
												<div class="upload-bx lightgray-upload-bx">
													<i class="fa fa-plus fa-3x"></i>
												</div>
												<input type="file" name="" class="hide-file-input">
											</div>
										</div>
										<div class="col-lg-7 col-sm-7">
											<div class="form-group mt-3">
												<label>Nom</label>
												<input type="text" class="form-control" placeholder="NOM PHOTO">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-5 col-sm-5">
											<div class="form-group">
												<div class="upload-bx lightgray-upload-bx">
													<i class="fa fa-plus fa-3x"></i>
												</div>
												<input type="file" name="" class="hide-file-input">
											</div>
										</div>
										<div class="col-lg-7 col-sm-7">
											<div class="form-group mt-3">
												<label>Nom</label>
												<input type="text" class="form-control" placeholder="NOM PHOTO">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-5 col-sm-5">
											<div class="form-group">
												<div class="upload-bx lightgray-upload-bx">
													<i class="fa fa-plus fa-3x"></i>
												</div>
												<input type="file" name="" class="hide-file-input">
											</div>
										</div>
										<div class="col-lg-7 col-sm-7">
											<div class="form-group mt-3">
												<label>Nom</label>
												<input type="text" class="form-control" placeholder="NOM PHOTO">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-5 col-sm-5">
											<div class="form-group">
												<div class="upload-bx lightgray-upload-bx">
													<i class="fa fa-plus fa-3x"></i>
												</div>
												<input type="file" name="" class="hide-file-input">
											</div>
										</div>
										<div class="col-lg-7 col-sm-7">
											<div class="form-group mt-3">
												<label>Nom</label>
												<input type="text" class="form-control" placeholder="NOM PHOTO">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-5 col-sm-5">
											<div class="form-group">
												<div class="upload-bx lightgray-upload-bx">
													<i class="fa fa-plus fa-3x"></i>
												</div>
												<input type="file" name="" class="hide-file-input">
											</div>
										</div>
										<div class="col-lg-7 col-sm-7">
											<div class="form-group mt-3">
												<label>Nom</label>
												<input type="text" class="form-control" placeholder="NOM PHOTO">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-5 col-sm-5">
											<div class="form-group">
												<div class="upload-bx lightgray-upload-bx">
													<i class="fa fa-plus fa-3x"></i>
												</div>
												<input type="file" name="" class="hide-file-input">
											</div>
										</div>
										<div class="col-lg-7 col-sm-7">
											<div class="form-group mt-3">
												<label>Nom</label>
												<input type="text" class="form-control" placeholder="NOM PHOTO">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-5 col-sm-5">
											<div class="form-group mb-0">
												<div class="upload-bx lightgray-upload-bx">
													<i class="fa fa-plus fa-3x"></i>
												</div>
												<input type="file" name="" class="hide-file-input">
											</div>
										</div>
										<div class="col-lg-7 col-sm-7">
											<div class="form-group mt-3">
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
</div>
<div class="modal fade edit-absence-modal" id="edit-absence-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-header pb-0">
				<h5 class="modal-title">EDITER UNE ABSENCE</h5>
				<a href="javascript:void(0)" class="btn btn-lightblue">Enregistrer</a>
				<a class="modal-close" style="float:right;margin-top: -6px;" data-dismiss="modal" aria-label="Close" href="javascript:void(0)"><img src="assets/img/icons/Exit_1.png"></a>
				<!--<a href="javascript:void(0);" class="btn-blue-white float-right mt-0">Enregistrer</a>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">
				<img src="assets/img/icons/Exit_1.png">
				</span>
				</button>-->
			</div>
			<div class="modal-body pl-0 pr-0">
				<div class="row">
					<div class="col-lg-12 col-sm-12">
						<div class="another-nav-container une-absence-nav-bg">
							<nav>
								<div class="nav nav-tabs" id="nav-tab" role="tablist">
									<a class="nav-item nav-link active" id="absence-informations-tab" data-toggle="tab" href="#absence-informations" role="tab" aria-controls="absence-informations" aria-selected="true">Informations</a>
									<a class="nav-item nav-link" id="absence-piece-joints-tab" data-toggle="tab" href="#absence-piece-joints" role="tab" aria-controls="absence-piece-joints" aria-selected="false">Piéce jointes</a>
								</div>
							</nav>
							<div class="tab-content pt-4 pl-4 pr-4">
								<div class="tab-pane fade show active" id="absence-informations" role="tabpanel" aria-labelledby="absence-informations-tab">
									<div class="row">
										<div class="col-lg-5 col-sm-5">
											<div class="form-group">
												<label>Motif</label>
												<input type="text" name="" class="form-control motif-in-field" value="Congés Payés">
											</div>
											<div class="form-group">
												<label>Début</label>
												<div class="row">
													<div class="col-lg-6 col-sm-6">
														<div class="datepicker-container">
															<i class="date-icon date-icon1 float-left" aria-hidden="true"></i>
															<input class="form-control bar-from Debut-Fld-Input" type="text" placeholder="01/10/2021" />
														</div>
													</div>
													<div class="col-lg-4 col-sm-4 pl-0">
														<select class="form-control Debut-Fld-Select">
															<option>07:00</option>
														</select>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-6 col-sm-6">
											<div class="form-group">
												<label>Notifier à:</label>
												<div class="autofill-container">
													<input type="text" name="" class="form-control">
													<div class="autofill-span-container">
														<span>
														Nom Prénom
														</span>
														<span>
														Nom Prénom
														</span>
														<span>
														Nom Prénom
														</span>
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
																	<i class="date-icon date-icon1 float-left" aria-hidden="true"></i>
																	<input class="form-control bar-from Debut-Fld-Input" type="text" placeholder="31/10/2021" />
																</div>
															</div>
															<div class="col-lg-4 col-sm-4 pl-0">
																<select class="form-control Debut-Fld-Select">
																	<option>18:00</option>
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
												<textarea class="form-control desc-textarea-cust" rows="7" placeholder="Texte...">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</textarea>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="absence-piece-joints" role="tabpanel" aria-labelledby="absence-piece-joints-tab">
									<div class="row">
										<div class="col-lg-12 col-sm-12">
											<div class="form-group">
												<label class="mb-4">Ajouter des justificatifs</label>
												<div class="row">
													<div class="col-lg-3 col-sm-3">
														<div class="form-group box-with-icon">
															<div class="upload-bx view-color">
																<i>
																<img src="assets/img/document-thumbnail.png">
																</i>
															</div>
															<p class="text-center view-color" style="bottom: -21%;">
																<img src="assets/img/icons/eye-round-blue.png" style="margin-right: -7%; width: 23%; margin-top: 2%;">
																<img src="assets/img/icons/Exit_1.png" style="width: 20%;">
															</p>
														</div>
														<div class="form-group">
															<input type="text" class="form-control" placeholder="NOM PHOTO">
														</div>
													</div>
													<div class="col-lg-3 col-sm-3">
														<div class="form-group box-with-icon">
															<div class="upload-bx view-color">
																<i>
																<img src="assets/img/document-thumbnail.png">
																</i>
															</div>
															<p class="text-center view-color" style="bottom: -21%;">
																<img src="assets/img/icons/eye-round-blue.png" style="margin-right: -7%; width: 23%; margin-top: 2%;">
																<img src="assets/img/icons/Exit_1.png" style="width: 20%;">
															</p>
														</div>
														<div class="form-group">
															<input type="text" class="form-control" placeholder="NOM PHOTO">
														</div>
													</div>
													<div class="col-lg-3 col-sm-3">
														<div class="form-group">
															<div class="upload-bx lightgray-upload-bx">
																<i class="fa fa-plus fa-3x"></i>
															</div>
															<input type="file" name="" class="hide-file-input">
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
</div>
<div class="modal fade edit-ecart-modal" id="edit-ecart-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-header pb-0">
				<h5 class="modal-title">EDITER UN ECART</h5>
				<a href="javascript:void(0)" class="btn btn-lightblue">Enregistrer</a>
				<a class="modal-close" style="float:right;margin-top: -6px;" data-dismiss="modal" aria-label="Close" href="javascript:void(0)"><img src="assets/img/icons/Exit_1.png"></a>
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
									<a class="nav-item nav-link active" id="ecart-informations-tab" data-toggle="tab" href="#ecart-informations" role="tab" aria-controls="ecart-informations" aria-selected="true">Informations</a>
									<a class="nav-item nav-link" id="ecart-piece-joints-tab" data-toggle="tab" href="#ecart-piece-joints" role="tab" aria-controls="ecart-piece-joints" aria-selected="false">Piéce jointes</a>
								</div>
							</nav>
							<div class="tab-content pt-4 pl-4 pr-4">
								<div class="tab-pane fade show active" id="ecart-informations" role="tabpanel" aria-labelledby="ecart-informations-tab">
									<div class="row">
										<div class="col-lg-5 col-sm-5">
											<div class="form-group">
												<label class="ecart-lbl-cust">Motif</label>
												<input type="text" name="" class="form-control motif-in-field" value="Congés Payés">
											</div>
											<div class="form-group">
												<label class="ecart-lbl-cust">Début</label>
												<div class="row">
													<div class="col-lg-6 col-sm-6">
														<div class="datepicker-container">
															<i class="date-icon date-icon1 float-left" aria-hidden="true"></i>
															<input class="form-control bar-from Debut-Fld-Input" type="text" placeholder="01/10/2021" />
														</div>
													</div>
													<div class="col-lg-4 col-sm-4 pl-0">
														<select class="form-control Debut-Fld-Select">
															<option>07:00</option>
														</select>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-6 col-sm-6">
											<div class="form-group">
												<label class="ecart-lbl-cust">Notifier à:</label>
												<div class="autofill-container">
													<input type="text" name="" class="form-control">
													<div class="autofill-span-container">
														<span>
														Nom Prénom
														</span>
														<span>
														Nom Prénom
														</span>
														<span>
														Nom Prénom
														</span>
													</div>
												</div>
											</div>
											<div class="form-group">
												<label class="ecart-lbl-cust">Fin</label>
												<div class="row">
													<div class="col-lg-9 col-sm-9">
														<div class="row">
															<div class="col-lg-6 col-sm-6">
																<div class="datepicker-container">
																	<i class="date-icon date-icon1 float-left" aria-hidden="true"></i>
																	<input class="form-control bar-from Debut-Fld-Input" type="text" placeholder="31/10/2021" />
																</div>
															</div>
															<div class="col-lg-4 col-sm-4 pl-0">
																<select class="form-control Debut-Fld-Select">
																	<option>18:00</option>
																</select>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-12 col-sm-12">
											<div class="form-group">
												<label class="ecart-lbl-cust">Description</label>
												<textarea class="form-control desc-textarea-cust" rows="7" placeholder="Texte...">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</textarea>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="ecart-piece-joints" role="tabpanel" aria-labelledby="ecart-piece-joints-tab">
									<div class="row">
										<div class="col-lg-12 col-sm-12">
											<div class="form-group">
												<label class="mb-4">Ajouter des justificatifs</label>
												<div class="row">
													<div class="col-lg-3 col-sm-3">
														<div class="form-group box-with-icon">
															<div class="upload-bx view-color">
																<i>
																<img src="assets/img/document-thumbnail.png">
																</i>
															</div>
															<p class="text-center view-color" style="bottom: -22%;">
																<img src="assets/img/icons/eye-round-orange.png" style="margin-right: -7%; width: 25%; margin-top: 2%;">
																<img src="assets/img/icons/exit-orange.png" style="width: 24%;">
															</p>
														</div>
														<div class="form-group">
															<input type="text" class="form-control" placeholder="NOM PHOTO">
														</div>
													</div>
													<div class="col-lg-3 col-sm-3">
														<div class="form-group box-with-icon">
															<div class="upload-bx view-color">
																<i>
																<img src="assets/img/document-thumbnail.png">
																</i>
															</div>
															<p class="text-center view-color" style="bottom: -22%;">
																<img src="assets/img/icons/eye-round-orange.png" style="margin-right: -7%; width: 25%; margin-top: 2%;">
																<img src="assets/img/icons/exit-orange.png" style="width: 24%">
															</p>
														</div>
														<div class="form-group">
															<input type="text" class="form-control" placeholder="NOM PHOTO">
														</div>
													</div>
													<div class="col-lg-3 col-sm-3">
														<div class="form-group">
															<div class="upload-bx lightgray-upload-bx">
																<i class="fa fa-plus fa-3x"></i>
															</div>
															<input type="file" name="" class="hide-file-input">
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
</div>
<div class="modal fade view-dotation-modal" id="view-dotation-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header pb-0">
				<h5 class="modal-title">VOIR UNE DOTATION</h5>
				<a class="modal-close text-right" style="float:right;margin-top: -6px;" data-dismiss="modal" aria-label="Close" href="javascript:void(0)"><img src="assets/img/icons/Exit_1.png" style="width: 75%;"></a>
				<!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">
				<img src="assets/img/icons/Exit_1.png">
				</span>
				</button>-->
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-lg-4 col-sm-4">
						<div class="form-group">
							<label>Nom de matériel</label>
							<p class="lightgray-font-color">LOREMPSUS</p>
						</div>
					</div>
					<div class="col-lg-5 col-sm-5">
						<div class="form-group">
							<label>Date de fin d'habilitation</label>
							<div class="datepicker-container">
								<i class="date-icon date-icon2 float-left" aria-hidden="true"></i>
								<input class="form-control bar-to" type="text" placeholder="00/00/0000" />
							</div>
						</div>
					</div>
					<div class="col-lg-11 col-sm-11">
						<div class="form-group">
							<label>Photos</label>
							<div class="row">
								<div class="col-lg-4 col-sm-4">
									<div class="form-group box-with-icon">
										<div class="upload-bx view-color">
											<i>
											<img src="assets/img/Dotation_image2.png">
											</i>
										</div>
										<p class="text-center view-color" style="bottom: -32%;">
											<img src="assets/img/icons/eye-round-blue.png" style="margin-right: -10%; width: 35%; margin-top: 1%;">
											<img src="assets/img/icons/Exit_1.png" style="width: 30%; margin-top: -2px;">
										</p>
									</div>
									<div class="form-group">
										<input type="text" class="form-control" placeholder="NOM PHOTO">
									</div>
								</div>
								<div class="col-lg-4 col-sm-4">
									<div class="form-group box-with-icon">
										<div class="upload-bx view-color">
											<i>
											<img src="assets/img/Dotation_image2.png">
											</i>
										</div>
										<p class="text-center view-color" style="bottom: -32%;">
											<img src="assets/img/icons/eye-round-blue.png" style="margin-right: -10%; width: 35%; margin-top: 1%;">
											<img src="assets/img/icons/Exit_1.png" style="width: 30%; margin-top: -2px;">
										</p>
									</div>
									<div class="form-group">
										<input type="text" class="form-control" placeholder="NOM PHOTO">
									</div>
								</div>
								<div class="col-lg-4 col-sm-4">
									<div class="form-group">
										<div class="upload-bx lightgray-upload-bx">
											<i class="fa fa-plus fa-3x"></i>
										</div>
										<input type="file" name="" class="hide-file-input">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12 col-sm-12">
						<!--<button class="btn btn-lightblue btn-lightgreen" type="submit">OK</button>-->
						<p class="mt-3 text-bold"><a href="javascript:void(0);" class="text-blue"><img src="assets/img/icons/delete.png"> Supprimer la formation</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade employee-confirmation-absence-modal" id="employee-confirmation-absence-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-body">
				<div class="row">
					<div class="col-lg-12 col-sm-12 text-center">
						<p class="employee-confirmation-profile-container">
							<img src="assets/img/employee-confirmation-profile.png">
							<i class="fa fa-check fa-3x" aria-hidden="true"></i>
						</p>
						<p class="tx-16 black-text font-weight-bold">Absence ajoutée !</p>
						<p>Absence du 00/00/00 au 00/00/00 a bien été ajouté</p>
						<button class="btn btn-lightblue" type="submit">OK</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade employee-confirmation-ecart-modal" id="employee-confirmation-ecart-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-body">
				<div class="row">
					<div class="col-lg-12 col-sm-12 text-center">
						<p class="employee-confirmation-profile-container">
							<img src="assets/img/employee-confirmation-profile.png">
							<i class="fa fa-check fa-3x" aria-hidden="true"></i>
						</p>
						<p class="tx-16 black-text font-weight-bold">Ecart ajouté !</p>
						<p>Ecart du 00/00/00 au 00/00/00 a bien été ajouté</p>
						<button class="btn btn-lightblue" type="submit">OK</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade add-technician-modal" id="add-technician-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<!--test-->
	<div class="modal-dialog modal-dialog-centered modal-xl" style="">
	<!-- <div class="modal-dialog modal-dialog-centered modal-xl"> -->
		<div class="modal-content">
			<div class="modal-header">
				<ul class="nav nav-tabs text-center" id="myTab" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" id="general-tab" data-toggle="tab" href="#general" role="tab" aria-controls="general" aria-selected="false">Général</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="personal-date-tab" data-toggle="tab" href="#personal-data" role="tab" aria-controls="personal-data" aria-selected="false">Données personelles</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="training-tab" data-toggle="tab" href="#training" role="tab" aria-controls="training" aria-selected="false">Formations</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="endowment-tab" data-toggle="tab" href="#endowment" role="tab" aria-controls="endowment" aria-selected="true">Dotation</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="statistics-tab" data-toggle="tab" href="#statistics" role="tab" aria-controls="statistics" aria-selected="false">Statistiques</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="absences-and-deviations-tab" data-toggle="tab" href="#absences-and-deviations" role="tab" aria-controls="absences-and-deviations" aria-selected="true">Absences &amp; Ecarts</a>
					</li>
					<li class="nav-item mr-0" style="width: 184px;">
						<a class="nav-link" id="contract-tab" data-toggle="tab" href="#contract" role="tab" aria-controls="contract" aria-selected="false">Contrat</a>
					</li>
				</ul>
			</div>
			<div class="modal-body">
				<div class="tab-content">
					<div class="tab-pane active" id="general" role="tabpanel" aria-labelledby="general-tab">
						<div class="row min-height-scroll">
							<div class="col-lg-4 col-sm-4 px-4">
								<div class="form-group">
									<div class="row general-tab-profile-image-container">
										<div class="col-lg-8 col-sm-8">
											<div class="form-group box-with-icon">
												<img src="assets/img/employee-confirmation-profile.png">
												<p class="text-center view-color" style="bottom: -20%">
													<a href="javascript:void(0);"><img src="assets/img/icons/edit-pen.png" style="width: 25%;margin-right: -5%;"></a>
													<a href="javascript:void(0);"><img src="assets/img/icons/Exit_1.png" style="width: 20%;"></a>
												</p>
											</div>
										</div>
									</div>
									<div class="upload-bx view-color">
										<p>Télécharger une photo</p>
										<i>
										<img src="assets/img/icons/file-upload.png">
										</i>
									</div>
									<input type="file" name="" class="hide-file-input">
								</div>
								<div class="form-group">
									<label>Nom</label>
									<input type="text" name="" class="form-control" placeholder="LASTNAME">
								</div>
								<div class="form-group">
									<label>Prénom</label>
									<input type="text" name="" class="form-control" placeholder="FIRSTNAME">
								</div>
								<div class="form-group">
									<label>Login</label>
									<input type="text" name="" class="form-control" placeholder="LOGIN">
								</div>
							</div>
							<div class="col-lg-4 col-sm-4 px-4">
								<div class="form-group">
									<label>Email</label>
									<input type="text" name="" class="form-control" placeholder="xxxxxxxxxxxx@xxxxxxxx.xx">
								</div>
								<div class="form-group">
									<label>Mot de passe</label>
									<input type="password" name="" class="form-control" placeholder="Mot de passe" value="placeholder">
								</div>
								<div class="form-group">
									<label>Confirmer mot de passe</label>
									<input type="password" name="" class="form-control" placeholder="Confirmer mot de passe" value="placeholder">
								</div>
								<div class="form-group">
									<label>Adresse</label>
									<input type="text" name="" class="form-control" placeholder="RUE1">
								</div>
								<div class="form-group">
									<label>Complément d'adresse</label>
									<input type="text" name="" class="form-control" placeholder="LOREM">
								</div>
								<div class="row">
									<div class="col-lg-5 col-sm-5">
										<div class="form-group">
											<label>Code postal</label>
											<input type="text" name="" class="form-control" placeholder="000000">
										</div>
									</div>
									<div class="col-lg-7 col-sm-7">
										<div class="form-group">
											<label>Ville</label>
											<select class="form-control">
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
											<input type="text" name="" class="form-control" placeholder="00 00 00 00 00">
										</div>
									</div>
									<div class="col-lg-6 col-sm-6">
										<div class="form-group">
											<label>Portable</label>
											<input type="text" name="" class="form-control" placeholder="00 00 00 00 00">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label>Numéro de sécurilé sociale</label>
									<input type="text" name="" class="form-control" placeholder="00000000">
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
								<button class="btn btn-lightblue float-right enregistrerBtn" type="submit">Enregistrer</button>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="personal-data" role="tabpanel" aria-labelledby="personal-date-tab">
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
								<button class="btn btn-lightblue float-right enregistrerBtn" type="submit">Enregistrer</button>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="training" role="tabpanel" aria-labelledby="training-tab">
						<div class="row">
							<div class="col-lg-7 col-sm-7">
								<div class="table-responsive box-shadow-border-radius">
									<table class="table table-striped w-100" id="clientDataTable" style="width:100%">
										<thead>
											<tr>
												<th class="wd-10p"></th>
												<th class="wd-15p">Formation</th>
												<th class="wd-15p">Documents</th>
												<th class="wd-25p">Date d'obtention</th>
												<th class="wd-15p">Date de fin</th>
												<th class="wd-15p">Actions</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													<a href="javascript:void(0);"><img src="assets/img/icons/bell.png"></a>
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
											</tr>
											<tr>
												<td>
													<a href="javascript:void(0);"><img src="assets/img/icons/bell.png"></a>
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
											</tr>
											<tr>
												<td>
													<a href="javascript:void(0);"><img src="assets/img/icons/right-green.png"></a>
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
											</tr>
											<tr>
												<td>
													<a href="javascript:void(0);"><img src="assets/img/icons/right-green.png"></a>
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
											</tr>
											<tr>
												<td>
													<a href="javascript:void(0);"><img src="assets/img/icons/right-green.png"></a>
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
											</tr>
											<tr>
												<td>
													<a href="javascript:void(0);"><img src="assets/img/icons/right-green.png"></a>
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
											</tr>
											<tr>
												<td>
													<a href="javascript:void(0);"><img src="assets/img/icons/right-green.png"></a>
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
											</tr>
										</tbody>
									</table>
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
																<div class="form-group mt-4">
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
																<div class="form-group mt-4">
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
																<div class="form-group mt-4">
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
																<div class="form-group mt-4">
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
																<div class="form-group mt-4">
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
																<div class="form-group mt-4">
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
																<div class="form-group mt-4">
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
							<div class="col-lg-12 col-sm-12" style="margin-top: -40px;">
								<button class="btn btn-lightblue float-right mr-5 enregistrerBtn" type="submit">Enregistrer</button>
								<button class="btn btn-lightblue mr-2 btn-lightblue-another box-shadow-border-radius float-right" type="submit">Ajouter la formation</button>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="endowment" role="tabpanel" aria-labelledby="endowment-tab">
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
												<table class="table table-striped w-100" id="clientDataTable" style="width:100%">
													<thead>
														<tr>
															<th class="wd-10p"></th>
															<th class="wd-15p">Nom</th>
															<th class="wd-15p">Date</th>
															<th class="wd-15p">Photos</th>
															<th class="wd-15p">Actions</th>
															<th class="wd-10p"></th>
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
																<a href="javascript:void(0)" data-toggle="modal" data-target="#view-dotation-modal">
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
																<a href="javascript:void(0)" data-toggle="modal" data-target="#view-dotation-modal">
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
																<a href="javascript:void(0)" data-toggle="modal" data-target="#view-dotation-modal">
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
																<a href="javascript:void(0)" data-toggle="modal" data-target="#view-dotation-modal">
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
																<a href="javascript:void(0)" data-toggle="modal" data-target="#view-dotation-modal">
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
																<a href="javascript:void(0)" data-toggle="modal" data-target="#view-dotation-modal">
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
																<a href="javascript:void(0)" data-toggle="modal" data-target="#view-dotation-modal">
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
																<a href="javascript:void(0)" data-toggle="modal" data-target="#view-dotation-modal">
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
																<a href="javascript:void(0)" data-toggle="modal" data-target="#view-dotation-modal">
																<span class="view-color">
																<i class="fa fa-eye mr-1"></i>Voir
																</span>
																</a>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
										<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
											<div class="table-responsive">
												<table class="table table-striped w-100" id="clientDataTable" style="width:100%">
													<thead>
														<tr>
															<th class="wd-10p"></th>
															<th class="wd-15p">Nom</th>
															<th class="wd-15p">Date</th>
															<th class="wd-15p">Photos</th>
															<th class="wd-15p">Actions</th>
															<th class="wd-10p"></th>
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
																<a href="javascript:void(0)" data-toggle="modal" data-target="#view-dotation-modal">
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
																<a href="javascript:void(0)" data-toggle="modal" data-target="#view-dotation-modal">
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
																<a href="javascript:void(0)" data-toggle="modal" data-target="#view-dotation-modal">
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
																<a href="javascript:void(0)" data-toggle="modal" data-target="#view-dotation-modal">
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
																<a href="javascript:void(0)" data-toggle="modal" data-target="#view-dotation-modal">
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
																<a href="javascript:void(0)" data-toggle="modal" data-target="#view-dotation-modal">
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
																<a href="javascript:void(0)" data-toggle="modal" data-target="#view-dotation-modal">
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
																<a href="javascript:void(0)" data-toggle="modal" data-target="#view-dotation-modal">
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
																<a href="javascript:void(0)" data-toggle="modal" data-target="#view-dotation-modal">
																<span class="view-color">
																<i class="fa fa-eye mr-1"></i>Voir
																</span>
																</a>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
										<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
											<div class="table-responsive">
												<table class="table table-striped w-100" id="clientDataTable" style="width:100%">
													<thead>
														<tr>
															<th class="wd-10p"></th>
															<th class="wd-15p">Nom</th>
															<th class="wd-15p">Modele</th>
															<th class="wd-15p">Date</th>
															<th class="wd-10p">Photos</th>
															<th class="wd-15p">Actions</th>
															<th class="wd-15p"></th>
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
																<a href="javascript:void(0)" data-toggle="modal" data-target="#view-dotation-modal">
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
																<a href="javascript:void(0)" data-toggle="modal" data-target="#view-dotation-modal">
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
																<a href="javascript:void(0)" data-toggle="modal" data-target="#view-dotation-modal">
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
																<a href="javascript:void(0)" data-toggle="modal" data-target="#view-dotation-modal">
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
																<a href="javascript:void(0)" data-toggle="modal" data-target="#view-dotation-modal">
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
																<a href="javascript:void(0)" data-toggle="modal" data-target="#view-dotation-modal">
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
																<a href="javascript:void(0)" data-toggle="modal" data-target="#view-dotation-modal">
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
																<a href="javascript:void(0)" data-toggle="modal" data-target="#view-dotation-modal">
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
																<a href="javascript:void(0)" data-toggle="modal" data-target="#view-dotation-modal">
																<span class="view-color">
																<i class="fa fa-eye mr-1"></i>Voir
																</span>
																</a>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-5 col-sm-5">
								<strong class="black-text font-weight-bold">Ajouter une dotation </strong>
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
														<img src="assets/img/vehicle.png">
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
							<div class="col-lg-12 col-sm-12" style="margin-top: -25px;">
								<button class="btn btn-lightblue float-right mr-5 enregistrerBtn" type="submit">Enregistrer</button>
								<button class="btn btn-lightblue mr-2 btn-lightblue-another box-shadow-border-radius float-right" type="submit">Ajouter la dotation</button>
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
										<button class="btn btn-lightblue enregistrerBtn" type="submit">Enregistrer</button>
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
											<div class="col-lg-1 col-sm-1 p-1">
												<a href="javascript:void(0);" class="calender-task-btn">
												<img src="assets/img/icons/calendar_cercle_blue.png" style="">
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
									<p class="mb-1 tx-16"><strong class="text-blue font-weight-bold">Liste d'absences</strong></p>
									<div class="min-height-scroll-container fill-background">
										<div class="min-height-scroll">
											<div class="row pl-4 pr-4">
												<a href="javascript:void(0);" data-toggle="modal" data-target="#edit-absence-modal">
													<div class="col-lg-12 col-sm-12 pr-5 mb-2 login-input">
														<div class="row">
															<div class="col-lg-5 col-sm-5">
																<p class="mb-1" style="color: #585858;"><strong>Congés Payés</strong></p>
															</div>
															<div class="col-lg-7 col-sm-7 text-right">
																<p class="mb-1 view-color"><strong>8 Octobre 2021 - 16 Octobre 2021 <i class="fa fa-eye mr-1"></i></strong></p>
															</div>
														</div>
														<p class="mb-0" style="color: #585858;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
													</div>
												</a>
												<a href="javascript:void(0);" data-toggle="modal" data-target="#edit-absence-modal">
													<div class="col-lg-12 col-sm-12 pr-5 mb-2 login-input">
														<div class="row">
															<div class="col-lg-5 col-sm-5">
																<p class="mb-1" style="color: #585858;"><strong>Congés Payés</strong></p>
															</div>
															<div class="col-lg-7 col-sm-7 text-right">
																<p class="mb-1 view-color"><strong>8 Octobre 2021 - 16 Octobre 2021 <i class="fa fa-eye mr-1"></i></strong></p>
															</div>
														</div>
														<p class="mb-0" style="color: #585858;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
													</div>
												</a>
												<a href="javascript:void(0);" data-toggle="modal" data-target="#edit-absence-modal">
													<div class="col-lg-12 col-sm-12 pr-5 mb-2 login-input">
														<div class="row">
															<div class="col-lg-5 col-sm-5">
																<p class="mb-1" style="color: #585858;"><strong>Congés Payés</strong></p>
															</div>
															<div class="col-lg-7 col-sm-7 text-right">
																<p class="mb-1 view-color"><strong>8 Octobre 2021 - 16 Octobre 2021 <i class="fa fa-eye mr-1"></i></strong></p>
															</div>
														</div>
														<p class="mb-0" style="color: #585858;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
													</div>
												</a>
												<a href="javascript:void(0);" data-toggle="modal" data-target="#edit-absence-modal">
													<div class="col-lg-12 col-sm-12 pr-5 mb-2 login-input">
														<div class="row">
															<div class="col-lg-5 col-sm-5">
																<p class="mb-1" style="color: #585858;"><strong>Congés Payés</strong></p>
															</div>
															<div class="col-lg-7 col-sm-7 text-right">
																<p class="mb-1 view-color"><strong>8 Octobre 2021 - 16 Octobre 2021 <i class="fa fa-eye mr-1"></i></strong></p>
															</div>
														</div>
														<p class="mb-0" style="color: #585858;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
													</div>
												</a>
												<a href="javascript:void(0);" data-toggle="modal" data-target="#edit-absence-modal">
													<div class="col-lg-12 col-sm-12 pr-5 mb-2 login-input">
														<div class="row">
															<div class="col-lg-5 col-sm-5">
																<p class="mb-1" style="color: #585858;"><strong>Congés Payés</strong></p>
															</div>
															<div class="col-lg-7 col-sm-7 text-right">
																<p class="mb-1 view-color"><strong>8 Octobre 2021 - 16 Octobre 2021 <i class="fa fa-eye mr-1"></i></strong></p>
															</div>
														</div>
														<p class="mb-0" style="color: #585858;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
													</div>
												</a>
												<a href="javascript:void(0);" data-toggle="modal" data-target="#edit-absence-modal">
													<div class="col-lg-12 col-sm-12 pr-5 mb-2 login-input">
														<div class="row">
															<div class="col-lg-5 col-sm-5">
																<p class="mb-1" style="color: #585858;"><strong>Congés Payés</strong></p>
															</div>
															<div class="col-lg-7 col-sm-7 text-right">
																<p class="mb-1 view-color"><strong>8 Octobre 2021 - 16 Octobre 2021 <i class="fa fa-eye mr-1"></i></strong></p>
															</div>
														</div>
														<p class="mb-0" style="color: #585858;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
													</div>
												</a>
												<a href="javascript:void(0);" data-toggle="modal" data-target="#edit-absence-modal">
													<div class="col-lg-12 col-sm-12 pr-5 mb-2 login-input">
														<div class="row">
															<div class="col-lg-5 col-sm-5">
																<p class="mb-1" style="color: #585858;"><strong>Congés Payés</strong></p>
															</div>
															<div class="col-lg-7 col-sm-7 text-right">
																<p class="mb-1 view-color"><strong>8 Octobre 2021 - 16 Octobre 2021 <i class="fa fa-eye mr-1"></i></strong></p>
															</div>
														</div>
														<p class="mb-0" style="color: #585858;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
													</div>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-sm-6 pr-1 absences-and-deviations-right">
								<p class="mb-1 tx-16" style="color: #FFA569;"><strong class=" font-weight-bold" >List des écarts</strong></p>
								<div class="min-height-scroll-container fill-background">
									<div class="min-height-scroll">
										<div class="row pl-4 pr-4">
											<a href="javascript:void(0);" data-toggle="modal" data-target="#edit-ecart-modal">
												<div class="col-lg-12 col-sm-12 pr-5 mb-2 login-input">
													<div class="row">
														<div class="col-lg-5 col-sm-5">
															<p class="mb-1" style="color: #585858;"><strong class="" style="color: #585858;">Ecart</strong></p>
														</div>
														<div class="col-lg-7 col-sm-7 text-right">
															<p class="mb-1 view-color"><strong>16 Octobre 2021 <i class="fa fa-eye mr-1"></i></strong></p>
														</div>
													</div>
													<p class="mb-0"  style="color: #585858;"><strong>Objet:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
												</div>
											</a>

											<a href="javascript:void(0);" data-toggle="modal" data-target="#edit-ecart-modal">
												<div class="col-lg-12 col-sm-12 pr-5 mb-2 login-input">
													<div class="row">
														<div class="col-lg-5 col-sm-5">
															<p class="mb-1" style="color: #585858;"><strong class="" style="color: #585858;">Ecart</strong></p>
														</div>
														<div class="col-lg-7 col-sm-7 text-right">
															<p class="mb-1 view-color"><strong>16 Octobre 2021 <i class="fa fa-eye mr-1"></i></strong></p>
														</div>
													</div>
													<p class="mb-0"  style="color: #585858;"><strong>Objet:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
												</div>
											</a>
											<a href="javascript:void(0);" data-toggle="modal" data-target="#edit-ecart-modal">
												<div class="col-lg-12 col-sm-12 pr-5 mb-2 login-input">
													<div class="row">
														<div class="col-lg-5 col-sm-5">
															<p class="mb-1" style="color: #585858;"><strong class="" style="color: #585858;">Ecart</strong></p>
														</div>
														<div class="col-lg-7 col-sm-7 text-right">
															<p class="mb-1 view-color"><strong>16 Octobre 2021 <i class="fa fa-eye mr-1"></i></strong></p>
														</div>
													</div>
													<p class="mb-0"  style="color: #585858;"><strong>Objet:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
												</div>
											</a>
											<a href="javascript:void(0);" data-toggle="modal" data-target="#edit-ecart-modal">
												<div class="col-lg-12 col-sm-12 pr-5 mb-2 login-input">
													<div class="row">
														<div class="col-lg-5 col-sm-5">
															<p class="mb-1" style="color: #585858;"><strong class="" style="color: #585858;">Ecart</strong></p>
														</div>
														<div class="col-lg-7 col-sm-7 text-right">
															<p class="mb-1 view-color"><strong>16 Octobre 2021 <i class="fa fa-eye mr-1"></i></strong></p>
														</div>
													</div>
													<p class="mb-0"  style="color: #585858;"><strong>Objet:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
												</div>
											</a>
											<a href="javascript:void(0);" data-toggle="modal" data-target="#edit-ecart-modal">
												<div class="col-lg-12 col-sm-12 pr-5 mb-2 login-input">
													<div class="row">
														<div class="col-lg-5 col-sm-5">
															<p class="mb-1" style="color: #585858;"><strong class="" style="color: #585858;">Ecart</strong></p>
														</div>
														<div class="col-lg-7 col-sm-7 text-right">
															<p class="mb-1 view-color"><strong>16 Octobre 2021 <i class="fa fa-eye mr-1"></i></strong></p>
														</div>
													</div>
													<p class="mb-0"  style="color: #585858;"><strong>Objet:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
												</div>
											</a>
											<a href="javascript:void(0);" data-toggle="modal" data-target="#edit-ecart-modal">
												<div class="col-lg-12 col-sm-12 pr-5 mb-2 login-input">
													<div class="row">
														<div class="col-lg-5 col-sm-5">
															<p class="mb-1" style="color: #585858;"><strong class="" style="color: #585858;">Ecart</strong></p>
														</div>
														<div class="col-lg-7 col-sm-7 text-right">
															<p class="mb-1 view-color"><strong>16 Octobre 2021 <i class="fa fa-eye mr-1"></i></strong></p>
														</div>
													</div>
													<p class="mb-0"  style="color: #585858;"><strong>Objet:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
												</div>
											</a>
											<a href="javascript:void(0);" data-toggle="modal" data-target="#edit-ecart-modal">
												<div class="col-lg-12 col-sm-12 pr-5 mb-2 login-input">
													<div class="row">
														<div class="col-lg-5 col-sm-5">
															<p class="mb-1" style="color: #585858;"><strong class="" style="color: #585858;">Ecart</strong></p>
														</div>
														<div class="col-lg-7 col-sm-7 text-right">
															<p class="mb-1 view-color"><strong>16 Octobre 2021 <i class="fa fa-eye mr-1"></i></strong></p>
														</div>
													</div>
													<p class="mb-0"  style="color: #585858;"><strong>Objet:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
												</div>
											</a>
											<a href="javascript:void(0);" data-toggle="modal" data-target="#edit-ecart-modal">
												<div class="col-lg-12 col-sm-12 pr-5 mb-2 login-input">
													<div class="row">
														<div class="col-lg-5 col-sm-5">
															<p class="mb-1" style="color: #585858;"><strong class="" style="color: #585858;">Ecart</strong></p>
														</div>
														<div class="col-lg-7 col-sm-7 text-right">
															<p class="mb-1 view-color"><strong>16 Octobre 2021 <i class="fa fa-eye mr-1"></i></strong></p>
														</div>
													</div>
													<p class="mb-0"  style="color: #585858;"><strong>Objet:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
												</div>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12 col-sm-12 mt-3 pr-0">
								<button class="btn btn-lightblue float-right enregistrerBtn" type="submit">Enregistrer</button>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="contract" role="tabpanel" aria-labelledby="contract-tab">
						<div class="row min-height-scroll">
							<div class="col-lg-4 col-sm-4 px-4">
								<div class="form-group">
									<label>Poste</label>
									<select class="form-control">
										<option>LOREM</option>
									</select>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-lg-6 col-sm-6">
											<label>Agence</label>
											<select class="form-control">
												<option>AGENCE NAME</option>
											</select>
										</div>
										<div class="col-lg-6 col-sm-6">
											<label>Agence</label>
											<input type="text" name="" class="form-control" placeholder="0000000">
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-lg-6 col-sm-6">
											<label>Habilitation</label>
											<select class="form-control">
												<option>HABILITATION</option>
											</select>
										</div>
										<div class="col-lg-6 col-sm-6">
											<label>Date de fin d'habilitation</label>
											<div class="datepicker-container">
												<i class="date-icon date-icon1 float-left" aria-hidden="true"></i>
												<input class="form-control bar-from" type="text" placeholder="00/00/0000" />
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
								<button class="btn btn-lightblue float-right enregistrerBtn" type="submit">Enregistrer</button>
								<button class="btn btn-lightblue mr-2 float-right btn-lightblue-another box-shadow-border-radius" type="submit">Générer le contrat</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade notifications-modal" id="notifications-modal" tabindex="-1" role="dialog" aria-labelledby="technicien-modal" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document" style="min-width: 580px;">
		<div class="modal-content">
			<div class="modal-header pb-0">
				<h6 class="modal-title">AJOUTER UNE NOTIFICATION A JOHN DOE</h6>
				<a href="javascript:void(0);" class="btn-blue-white float-right mt-0" data-toggle="modal" data-target="#add-technician-modal">Ajouter</a>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close" class="close-modal" rel="notifications-modal">
				<span aria-hidden="true">
				<img src="assets/img/icons/Exit_1.png">
				</span>
				</button>
			</div>
			<div class="modal-body pt-3">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 pl-4 pr-5">
						<div class=" row mt-2">
							<div class="col-lg-6 col-md-6 col-sm-6 tour-modal-fields-row-div">
								<div class="bg-white rounded-corner tour-modal-fields-row">
									<label>Nature</label>
									<select class="form-control">
										<option>NATURE</option>
									</select>
								</div>
								<div class="bg-white rounded-corner tour-modal-fields-row">
									<label>Commentaire/Probléme</label>
									<textarea class="form-control" rows="8">
									</textarea>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6  tour-modal-fields-row-div">
								<div class="bg-white rounded-corner tour-modal-fields-row">
									<label>Ajouter des piéces jointes</label>
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-6">
											<div class="tour-upload-box">
												<img src="assets/img/icons/plus-gray.png">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6">
											<div class="tour-upload-box">
												<img src="assets/img/icons/plus-gray.png">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6 mt-4">
											<div class="tour-upload-box">
												<img src="assets/img/icons/plus-gray.png">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6 mt-4">
											<div class="tour-upload-box">
												<img src="assets/img/icons/plus-gray.png">
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

<div class="modal fade admin-details-employee-confirmation-modal show" id="admin-details-employee-confirmation-modal" tabindex="-1" role="dialog" aria-labelledby="admin-details-employee-confirmation-modal" aria-modal="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 35rem;">
        <div class="modal-content">

            <div class="modal-body">

                <div class="row text-center">

                    <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                        <img src="assets/img/icons/agence-ajoute.png">

                        <h2 class="w-full text-center mt-4 mb-4 employee-confirmation-title-cust">Informations enregistré !</h2>
                        <p class="mb-4 employee-confirm-para-cust">Les informations de John Doe ont bien été enregistrées.</p>

                        <a href="javascript:void(0)" class="btn btn-lightblue px-4 mr-2 text-center mb-4" style="line-height: 2;border-radius: 7rem !important;height: 45px;width: 180px;">OK</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="modal fade employee-confirmation-register-modal" id="employee-confirmation-register-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-modal="true" role="dialog">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-body">
				<div class="row">
					<div class="col-lg-12 col-sm-12 text-center">
						<p class="employee-confirmation-profile-container">
							<img src="assets/img/employee-confirmation-profile.png">
							<i class="fa fa-check fa-3x" aria-hidden="true"></i>
						</p>
						<p class="tx-16 black-text font-weight-bold employee-confirmation-title-cust">Informations enregistré !</p>
						<p class="employee-confirm-para-cust">Les informations de John Doe ont bien été enregistrées.</p>
						<button class="btn btn-lightblue mt-3" type="submit" data-dismiss="modal">OK</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade admin-employee-inative-modal" id="admin-employee-inative-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-modal="true" role="dialog">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-body">
				<div class="row">
					<div class="col-lg-12 col-sm-12 text-center admin-employee-inative-img mt-2">
						
							<img src="assets/img/employee-confirmation-profile.png">
							
						<p class="tx-16 black-text font-weight-bold employee-confirmation-title-cust mt-3">John Doe</p>
						<p class="employee-confirm-para-cust ">Etes-vous sûr de désactiver ce technicien ?</p>
						<div class="col-sm-12 mt-4 mb-4 admin-employee-inative-modal-btns">
							<button class="btn btn-lightblue" type="submit" data-dismiss="modal">Desactiver</button>
							<button class="btn btn-lightblue mr-2 btn-lightblue-another box-shadow-border-radius float-right" type="submit" data-dismiss="modal">Annuler</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$('#clientDataTable1').dataTable({
		"pageLength": 25,
		"columnDefs": [{
			"targets": [1,6],
			"orderable": false,
	    }],
		"scrollY": "70vh",
		"scrollX": true,
		"scroller": true,
		"scrollCollapse": true,
		"bPaginate": false,
		"bInfo": false
	});
	$('#clientDataTable1_length').hide();
	$('#clientDataTable1_filter').hide();
	$(document).ready(function(){
		$(".upload-bx").click(function(){
			$(this).next().trigger("click");
		});

		$('#view-formation-modal').on('shown.bs.modal', function () {
			$('#add-technician-modal').modal('hide');
			$('#technicien-modal').modal('hide');
		});

		$('#view-dotation-modal').on('shown.bs.modal', function () {
			$('#add-technician-modal').modal('hide');
		});

		//$("#add-technician-modal").modal("show");

		$('#absence-modal').on('shown.bs.modal', function () {
			$('#add-technician-modal').modal('hide');
		});

		$('#edit-absence-modal').on('shown.bs.modal', function () {
			$('#add-technician-modal').modal('hide');
		});

		$('#edit-ecart-modal').on('shown.bs.modal', function () {
			$('#add-technician-modal').modal('hide');
		});

		$('#ecarts-modal').on('shown.bs.modal', function () {
			$('#add-technician-modal').modal('hide');
		});

		$("#employee-confirmation-absence-modal .btn-lightblue").click(function(){
			$("#employee-confirmation-absence-modal").modal('hide');
		});

		$("#employee-confirmation-ecart-modal .btn-lightblue").click(function(){
			$("#employee-confirmation-ecart-modal").modal('hide');
		});

		$(".collaborateur-list-container .table.dataTable tbody tr").click(function(){
			$("#technicien-modal").modal('show');
		});

		$(".add-technician-modal .enregistrerBtn").click(function(){
			$(".add-technician-modal").modal('hide');
			$(".employee-confirmation-register-modal").modal('show');
		});

		$(".add-technician-modal .contractEnregistrerBtn").click(function(){
			$(".add-technician-modal").modal('hide');
			$(".employee-confirmation-absence-modal").modal('show');
		});

		$('.bar-from,.bar-to').datepicker({
			dateFormat: 'dd-M-yy',
			minDate: 1,
			todayHighlight: true
		});

		$('.date-icon1').on('click', function() {
			$(this).next().focus();
		});

		$('.date-icon2').on('click', function() {
			$(this).next().focus();
		});

		$(".calender-task-btn").click(function(){
			if($(".calendar-container:visible").length){
				$(".calendar-container").hide();
				$(".task-container").show();
				$(".calender-task-btn img").attr("src","assets/img/icons/calendar_cercle_blue.png");
				$("#novelle-btn").show();
				$("#absences-and-deviations .min-height-scroll").height(300);
			}else{
				$(".calendar-container").show();
				$(".task-container").hide();
				$(".calender-task-btn img").attr("src","assets/img/icons/list.png");
				$("#novelle-btn").hide();
				$("#absences-and-deviations .min-height-scroll").height(427);

				$("#calendar").html('');
				var date = new Date();
				var d = date.getDate();
				var m = date.getMonth();
				var y = date.getFullYear();

				/*  className colors

				className: default(transparent), important(red), chill(pink), success(green), info(blue)

				*/


				/* initialize the external events
				-----------------------------------------------------------------*/

				/*$('#external-events div.external-event').each(function() {

					// create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
					// it doesn't need to have a start or end
					var eventObject = {
						title: $.trim($(this).text()) // use the element's text as the event title
					};

					// store the Event Object in the DOM element so we can get to it later
					$(this).data('eventObject', eventObject);

					// make the event draggable using jQuery UI
					$(this).draggable({
						zIndex: 999,
						revert: true,      // will cause the event to go back to its
						revertDuration: 0  //  original position after the drag
					});

				});*/


				/* initialize the calendar
				-----------------------------------------------------------------*/

				var calendar =  $('#calendar').fullCalendar({
					header: {
						left: 'title',
						center: 'agendaDay,agendaWeek,month',
						right: 'prev,next today'
					},
					editable: true,
					firstDay: 1, //  1(Monday) this can be changed to 0(Sunday) for the USA system
					selectable: true,
					defaultView: 'month',

					axisFormat: 'h:mm',
					columnFormat: {
			               month: 'ddd',    // Mon
			               week: 'ddd d', // Mon 7
			               day: 'dddd M/d',  // Monday 9/7
			               agendaDay: 'dddd d'
			           },
			           titleFormat: {
			               month: 'MMMM yyyy', // September 2009
			               week: "MMMM yyyy", // September 2009
			               day: 'MMMM yyyy'                  // Tuesday, Sep 8, 2009
			           },
					allDaySlot: false,
					selectHelper: true,
					select: function(start, end, allDay) {
						var title = prompt('Event Title:');
						if (title) {
							calendar.fullCalendar('renderEvent',
								{
									title: title,
									start: start,
									end: end,
									allDay: allDay
								},
								true // make the event "stick"
							);
						}
						calendar.fullCalendar('unselect');
					},
					droppable: true, // this allows things to be dropped onto the calendar !!!
					drop: function(date, allDay) { // this function is called when something is dropped

						// retrieve the dropped element's stored Event Object
						var originalEventObject = $(this).data('eventObject');

						// we need to copy it, so that multiple events don't have a reference to the same object
						var copiedEventObject = $.extend({}, originalEventObject);

						// assign it the date that was reported
						copiedEventObject.start = date;
						copiedEventObject.allDay = allDay;

						// render the event on the calendar
						// the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
						$('#calendar').fullCalendar('renderEvent', copiedEventObject, true);

						// is the "remove after drop" checkbox checked?
						if ($('#drop-remove').is(':checked')) {
							// if so, remove the element from the "Draggable Events" list
							$(this).remove();
						}

					},

					events: [
						{
							title: 'All Day Event',
							start: new Date(y, m, 1)
						},
						{
							id: 999,
							title: 'Repeating Event',
							start: new Date(y, m, d-3, 16, 0),
							allDay: false,
							className: 'info'
						},
						{
							id: 999,
							title: 'Repeating Event',
							start: new Date(y, m, d+4, 16, 0),
							allDay: false,
							className: 'info'
						},
						{
							title: 'Meeting',
							start: new Date(y, m, d, 10, 30),
							allDay: false,
							className: 'important'
						},
						{
							title: 'Lunch',
							start: new Date(y, m, d, 12, 0),
							end: new Date(y, m, d, 14, 0),
							allDay: false,
							className: 'important'
						},
						{
							title: 'Birthday Party',
							start: new Date(y, m, d+1, 19, 0),
							end: new Date(y, m, d+1, 22, 30),
							allDay: false,
						},
						{
							title: 'Click for Google',
							start: new Date(y, m, 28),
							end: new Date(y, m, 29),
							url: 'https://ccp.cloudaccess.net/aff.php?aff=5188',
							className: 'success'
						}
					],
				});
			}
		});
		$(".btn-editer").click(function(){
			$(".general-tab-profile-image-container").show();
			$(".general-tab-profile-image-container").next().hide();
		});
		$(".open-add-technician-popup-modal").click(function(){
			$(".general-tab-profile-image-container").hide();
			$(".general-tab-profile-image-container").next().show();
		});
		$("input[type='radio'][name='dotation-type']").change(function(){
			$(".material-container").hide();
			$(".information-container").hide();
			$(".vehicle-container").hide();
			if($(this).is(':checked')){
				var dotation_type_value = $(this).val();
				if(dotation_type_value == "material"){
					$(".material-container").show();
				}else if(dotation_type_value == "information"){
					$(".information-container").show();
				}else if(dotation_type_value == "vehicle"){
					$(".vehicle-container").show();
				}
			}
		});
		//$("input[type='radio'][name='dotation-type']").trigger("click");
		$('.modal').on('hidden.bs.modal', function (e) {
			$('body').addClass('modal-open');
		});
		$('.slimscroll-tour-modal').slimscroll({
	        color: '#000000',
	        size: '5px',
	        width: '100%',
	        height: '300px',
	        alwaysVisible: true
	    });
		initSample();
	});

	var ctx10 = document.getElementById("nombre-agence").getContext("2d");

	var data = {
	    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
	    datasets: [
	        {
	            label: "INTERVENTIONS REUSSITES",
	            backgroundColor: "#93f393",
	            data: [7524,3598,1002,2100,6541,2541,3573],
	            borderWidth: 0
	        },
	        {
	            label: "INTERVENTIONS NON REUSSITES",
	            backgroundColor: "#ff8282",
	            data: [-10,1190,1100,1100,1350,1200,1250],
	            borderWidth: 0
	        }
	    ]
	};

	var myBarChart = new Chart(ctx10, {
	    type: 'bar',
	    data: data,
	    options: {
	    	layout: {
		        padding: {
		            left: 20,
		            right: 20,
		            top: 40,
		            bottom: 20
		        }
		    },
	    	plugins: {
	    		legend: false,
		        datalabels: {
		        anchor: 'end',
		        align: 'top',
		        formatter: Math.round,
		        font: {
		          weight: 'bold'
		        }
		      }
		    },
	        scales: {
	            yAxes: [{
	                ticks: {
	                    min: 0
	                }
	            }],
	            xAxes: [{
		            barPercentage: 0.45,
		            gridLines: {
			          display: false
			        },
		        }]
	        }
	    }
	});


	function opentest() {
		var chckboxval = document.getElementById("employee-active-chck").checked
		if(chckboxval == false ){
			$(".admin-employee-inative-modal").modal('show');
			$(".technicien-modal").modal('hide');
			
		}else{
			$(".admin-employee-inative-modal").modal('hide');
		}
	} 


</script>
<?php include('sidebar-footer.php'); ?>
