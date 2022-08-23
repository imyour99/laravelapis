<?php include('header.php'); ?>

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

<!-- row -->
<div class="row row-sm mt-4">
	
	<!-- <div class="col-lg-2 col-sm-2"> -->
	<div class="col-lg-5 col-sm-6">
		<strong class="tx-16 black-text font-weight-bold">AGENCES</strong>
	</div>

    
	<div class="col-lg-4 col-sm-6 mb-2" style="margin-top:-8px">
		<!-- <div class="row mr-1">
            <div class="col-lg-2">
			</div>
			<div class="col-lg-5" style="margin-top:-3px; padding:0;">
				<a href="javascript:void(0);" class="btn-blue-white float-right" style="margin-left: unset;" data-toggle="modal" data-target="#add-agency-modal">
					Ajouter agence
				</a>
			</div>
			<div class="col-lg-5" style="margin-top:-3px; padding:0;">
				<a class="btn-white-blue float-right px-4">
					Exporter agence
				</a>
			</div>
		</div> -->
		
		<!--<div class="float-right header-btn-container">-->
		<div class="float-right">
			<a href="javascript:void(0);" class="btn-blue-white mr-2" style="margin-left: unset;" data-toggle="modal" data-target="#add-agency-modal">Ajouter agence</a>
			<a href="javascript:void(0);" class="btn-white-blue ml-2 px-4" style="height: 32px;">Exporter agence</a>
		</div>
	</div>	
</div>

<div class="row mt-2">
	<div class="col-lg-9">
		<div class="rounded-corner bg-white px-2">
		<div class="table-responsive">
			<table class="table table-striped w-100" id="clientDataTable" style="width:100%">
				<thead>
					<tr>
						<th class="wd-15p">Nom</th>
						<th class="wd-15p">Adresse</th>
						<th class="wd-20p">Code Postal</th>
						<th class="wd-25p">N° Agence</th>
						<th class="wd-15p">Responsable</th>
						<th class="wd-15p">N° Responsable</th>
						
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>AGENCE</td>
						<td>RUE DE PARIS</td>
						<td>750000</td>
						<td>000000</td>
						<td>MR JOHN DOE</td>
						<td>000000</td>
					</tr>
					<tr>
						<td>AGENCE</td>
						<td>RUE DE PARIS</td>
						<td>750000</td>
						<td>000000</td>
						<td>MR JOHN DOE</td>
						<td>000000</td>
					</tr>
                    <tr>
						<td>AGENCE</td>
						<td>RUE DE PARIS</td>
						<td>750000</td>
						<td>000000</td>
						<td>MR JOHN DOE</td>
						<td>000000</td>
					</tr>
                    <tr>
						<td>AGENCE</td>
						<td>RUE DE PARIS</td>
						<td>750000</td>
						<td>000000</td>
						<td>MR JOHN DOE</td>
						<td>000000</td>
					</tr><tr>
						<td>AGENCE</td>
						<td>RUE DE PARIS</td>
						<td>750000</td>
						<td>000000</td>
						<td>MR JOHN DOE</td>
						<td>000000</td>
					</tr><tr>
						<td>AGENCE</td>
						<td>RUE DE PARIS</td>
						<td>750000</td>
						<td>000000</td>
						<td>MR JOHN DOE</td>
						<td>000000</td>
					</tr><tr>
						<td>AGENCE</td>
						<td>RUE DE PARIS</td>
						<td>750000</td>
						<td>000000</td>
						<td>MR JOHN DOE</td>
						<td>000000</td>
					</tr><tr>
						<td>AGENCE</td>
						<td>RUE DE PARIS</td>
						<td>750000</td>
						<td>000000</td>
						<td>MR JOHN DOE</td>
						<td>000000</td>
					</tr><tr>
						<td>AGENCE</td>
						<td>RUE DE PARIS</td>
						<td>750000</td>
						<td>000000</td>
						<td>MR JOHN DOE</td>
						<td>000000</td>
					</tr><tr>
						<td>AGENCE</td>
						<td>RUE DE PARIS</td>
						<td>750000</td>
						<td>000000</td>
						<td>MR JOHN DOE</td>
						<td>000000</td>
					</tr><tr>
						<td>AGENCE</td>
						<td>RUE DE PARIS</td>
						<td>750000</td>
						<td>000000</td>
						<td>MR JOHN DOE</td>
						<td>000000</td>
					</tr><tr>
						<td>AGENCE</td>
						<td>RUE DE PARIS</td>
						<td>750000</td>
						<td>000000</td>
						<td>MR JOHN DOE</td>
						<td>000000</td>
					</tr><tr>
						<td>AGENCE</td>
						<td>RUE DE PARIS</td>
						<td>750000</td>
						<td>000000</td>
						<td>MR JOHN DOE</td>
						<td>000000</td>
					</tr><tr>
						<td>AGENCE</td>
						<td>RUE DE PARIS</td>
						<td>750000</td>
						<td>000000</td>
						<td>MR JOHN DOE</td>
						<td>000000</td>
					</tr><tr>
						<td>AGENCE</td>
						<td>RUE DE PARIS</td>
						<td>750000</td>
						<td>000000</td>
						<td>MR JOHN DOE</td>
						<td>000000</td>
					</tr><tr>
						<td>AGENCE</td>
						<td>RUE DE PARIS</td>
						<td>750000</td>
						<td>000000</td>
						<td>MR JOHN DOE</td>
						<td>000000</td>
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
                        <div class="card-header" id="headingOneHIW" role="tab">
                            <a aria-controls="collapseOneHIW" aria-expanded="true" data-toggle="collapse" href="#collapseOneHIW">Filtre</a>
                        </div>
                        <div aria-labelledby="headingOneHIW" class="collapse show" data-parent="#accordion" id="collapseOneHIW" role="tabpanel">
                            <div class="card-body">
                                <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                <label class="ckbox my-2 active"><input type="checkbox" checked><span>Sos filtre</span></label>
                                <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                <label class="ckbox my-2 active"><input type="checkbox" checked><span>Sos filtre</span></label>
                                <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwoHIW" role="tab">
                            <a aria-controls="collapseTwoHIW" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapseTwoHIW">Filtre</a>
                        </div>
                        <div aria-labelledby="headingTwoHIW" class="collapse" data-parent="#accordion" id="collapseTwoHIW" role="tabpanel">
                            <div class="card-body">
                                <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThreeHIW" role="tab">
                            <a aria-controls="collapseThreeHIW" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapseThreeHIW">Filtre</a>
                        </div>
                        <div aria-labelledby="headingThreeHIW" class="collapse" data-parent="#accordion" id="collapseThreeHIW" role="tabpanel">
                            <div class="card-body">
                                <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                            </div>
                        </div><!-- collapse -->
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingfourHIW" role="tab">
                            <a aria-controls="collapsefourHIW" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapsefourHIW">Filtre</a>
                        </div>
                        <div aria-labelledby="headingfourHIW" class="collapse" data-parent="#accordion" id="collapsefourHIW" role="tabpanel">
                            <div class="card-body">
                                <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                            </div>
                        </div><!-- collapse -->
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingTwoHIW" role="tab">
                            <a aria-controls="collapseTwoHIW" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapseTwoHIW">Filtre</a>
                        </div>
                        <div aria-labelledby="headingTwoHIW" class="collapse" data-parent="#accordion" id="collapseTwoHIW" role="tabpanel">
                            <div class="card-body">
                                <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThreeHIW" role="tab">
                            <a aria-controls="collapseThreeHIW" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapseThreeHIW">Filtre</a>
                        </div>
                        <div aria-labelledby="headingThreeHIW" class="collapse" data-parent="#accordion" id="collapseThreeHIW" role="tabpanel">
                            <div class="card-body">
                                <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                            </div>
                        </div><!-- collapse -->
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingfourHIW" role="tab">
                            <a aria-controls="collapsefourHIW" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapsefourHIW">Filtre</a>
                        </div>
                        <div aria-labelledby="headingfourHIW" class="collapse" data-parent="#accordion" id="collapsefourHIW" role="tabpanel">
                            <div class="card-body">
                                <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                            </div>
                        </div><!-- collapse -->
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwoHIW" role="tab">
                            <a aria-controls="collapseTwoHIW" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapseTwoHIW">Filtre</a>
                        </div>
                        <div aria-labelledby="headingTwoHIW" class="collapse" data-parent="#accordion" id="collapseTwoHIW" role="tabpanel">
                            <div class="card-body">
                                <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThreeHIW" role="tab">
                            <a aria-controls="collapseThreeHIW" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapseThreeHIW">Filtre</a>
                        </div>
                        <div aria-labelledby="headingThreeHIW" class="collapse" data-parent="#accordion" id="collapseThreeHIW" role="tabpanel">
                            <div class="card-body">
                                <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                            </div>
                        </div><!-- collapse -->
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingfourHIW" role="tab">
                            <a aria-controls="collapsefourHIW" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapsefourHIW">Filtre</a>
                        </div>
                        <div aria-labelledby="headingfourHIW" class="collapse" data-parent="#accordion" id="collapsefourHIW" role="tabpanel">
                            <div class="card-body">
                                <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                            </div>
                        </div><!-- collapse -->
                    </div>
                    <div class="card">
                        <div class="card-header" id="heading6" role="tab">
                            <a aria-controls="collapse6" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapse6">Filtre</a>
                        </div>
                        <div aria-labelledby="heading6" class="collapse" data-parent="#accordion" id="collapse6" role="tabpanel">
                            <div class="card-body">
                                <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                            </div>
                        </div><!-- collapse -->
                    </div>
                    <div class="card">
                        <div class="card-header" id="heading7" role="tab">
                            <a aria-controls="collapse7" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapse7">Filtre</a>
                        </div>
                        <div aria-labelledby="heading7" class="collapse" data-parent="#accordion" id="collapse7" role="tabpanel">
                            <div class="card-body">
                                <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                            </div>
                        </div><!-- collapse -->
                    </div>
                    <div class="card">
                        <div class="card-header" id="heading8" role="tab">
                            <a aria-controls="collapse8" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapse8">Filtre</a>
                        </div>
                        <div aria-labelledby="heading8" class="collapse" data-parent="#accordion" id="collapse8" role="tabpanel">
                            <div class="card-body">
                                <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                            </div>
                        </div><!-- collapse -->
                    </div>
                    <div class="card">
                        <div class="card-header" id="heading9" role="tab">
                            <a aria-controls="collapse9" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapse9">Filtre</a>
                        </div>
                        <div aria-labelledby="heading9" class="collapse" data-parent="#accordion" id="collapse6" role="tabpanel">
                            <div class="card-body">
                                <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                            </div>
                        </div><!-- collapse -->
                    </div>
                    <div class="card">
                        <div class="card-header" id="heading10" role="tab">
                            <a aria-controls="collapse10" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapse10">Filtre</a>
                        </div>
                        <div aria-labelledby="heading10" class="collapse" data-parent="#accordion" id="collapse7" role="tabpanel">
                            <div class="card-body">
                                <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                            </div>
                        </div><!-- collapse -->
                    </div>
                    <div class="card">
                        <div class="card-header" id="heading11" role="tab">
                            <a aria-controls="collapse11" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapse11">Filtre</a>
                        </div>
                        <div aria-labelledby="heading11" class="collapse" data-parent="#accordion" id="collapse8" role="tabpanel">
                            <div class="card-body">
                                <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                            </div>
                        </div><!-- collapse -->
                    </div>
                    <div class="card">
                        <div class="card-header" id="heading9" role="tab">
                            <a aria-controls="collapse9" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapse9">Filtre</a>
                        </div>
                        <div aria-labelledby="heading9" class="collapse" data-parent="#accordion" id="collapse6" role="tabpanel">
                            <div class="card-body">
                                <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                            </div>
                        </div><!-- collapse -->
                    </div>
                    <div class="card">
                        <div class="card-header" id="heading10" role="tab">
                            <a aria-controls="collapse10" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapse10">Filtre</a>
                        </div>
                        <div aria-labelledby="heading10" class="collapse" data-parent="#accordion" id="collapse7" role="tabpanel">
                            <div class="card-body">
                                <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                            </div>
                        </div><!-- collapse -->
                    </div>
                    <div class="card">
                        <div class="card-header" id="heading11" role="tab">
                            <a aria-controls="collapse11" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapse11">Filtre</a>
                        </div>
                        <div aria-labelledby="heading11" class="collapse" data-parent="#accordion" id="collapse8" role="tabpanel">
                            <div class="card-body">
                                <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                            </div>
                        </div><!-- collapse -->
                    </div>

                    <div class="card">
                        <div class="card-header" id="heading11" role="tab">
                            <a aria-controls="collapse11" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapse11">Filtre</a>
                        </div>
                        <div aria-labelledby="heading11" class="collapse" data-parent="#accordion" id="collapse8" role="tabpanel">
                            <div class="card-body">
                                <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                            </div>
                        </div><!-- collapse -->
                    </div>
                </div>
                <!-- accordion -->
			</div>
		</div>
		</div>
		
	</div>
</div>


<!-- <div class="modal fade view-formation-modal" id="add-agency-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header pb-0">
      	        <h5 class="modal-title">EDITER UNE AGENCE</h5>
      	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="Panel">
                    <nav>
                        <ul class="Tabs">
                            <li class="Tabs__tab active Tab"><a href="#">Tab item</a></li>
                            <li class="Tabs__tab Tab"><a href="#">Mega</a></li>
                            <li class="Tabs__tab Tab"><a href="#">Pane name</a></li>
                            <li class="Tabs__presentation-slider" role="presentation"></li>
                        </ul>
                    </nav>
                    <div class="Panel__body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis sint, facere aut, mollitia nihil tenetur sed vitae alias dolorum delectus.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, earum.</p>
                    </div>
                </div>
            </div>

            
                <div class="col-lg-12 col-sm-12 text-center">
                    <button class="btn btn-lightblue btn-lightgreen" type="submit">Enregistrer</button>
                    <p class="mt-3 text-bold"><a href="javascript:void(0);">Supprimer la formation</a></p>
                </div>
	        </div>
        </div>
     
    </div>
</div> -->

<div class="modal fade view-formation-modal add-agency-modal" id="add-agency-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header pb-0">
      	        <h5 class="modal-title">AJOUTER UNE AGENCE</h5>
      	        <a href="javascript:void(0)" class="btn btn-lightblue">Ajouter</a>
				<a class="modal-close" style="float:right;margin-top: -6px;" data-dismiss="modal" aria-label="Close" href="javascript:void(0)">
					<img src="assets/img/icons/Exit_1.png">
				</a>
            </div>
            <div class="modal-body">
            	<form>
            		<div class="row">
	                	<div class="col-lg-4">
	                		<div class="form-group">
								<label>Nom de l’agence</label>
								<input type="text" name="" class="form-control" placeholder="AGENCE">
							</div>

							<div class="form-group">
								<label>Adresse de l'agence</label>
								<input type="text" name="" class="form-control mb-1" placeholder="RUE">
								<input type="text" name="" class="form-control mb-1" placeholder="BAT">
								<div class="row">
									<div class="col-lg-5 col-sm-5 pr-1">
										<input type="text" name="" class="form-control mb-1" placeholder="0000">
									</div>
									<div class="col-lg-7 col-sm-7 pl-0">
										<select class="form-control mb-1">
											<option>City</option>
										</select>
									</div>
								</div>
							</div>

							<div class="form-group">
								<label>Nom du responsable</label>
								<input type="text" name="" class="form-control" placeholder="RESPONSABLE">
							</div>
	                	</div>
	                	<div class="col-lg-4">
	                		<div class="form-group">
								<label>Tél. agence</label>
								<input type="text" name="" class="form-control" placeholder="00 00 00 00 00">
							</div>

							<div class="form-group">
								<label>Tél. service client</label>
								<input type="text" name="" class="form-control" placeholder="00 00 00 00 00">
							</div>

							<div class="form-group">
								<label>Email de l'agence</label>
								<input type="text" name="" class="form-control" placeholder="xxxxxxxxxxxx@xxxxxxxx.xxx">
							</div>
							<div class="form-group mt-4">
								<div class="row">
									<div class="col-lg-6 col-sm-6 pr-1">
										<label>Tél. responsable</label>
										<input type="text" name="" class="form-control mb-1" placeholder="00 00 00 00 00">
									</div>
									<div class="col-lg-6 col-sm-6 pl-0">
										<label>Email responsable</label>
										<input type="text" name="" class="form-control mb-1" placeholder="xxxxxxxxxxxx@xxxxxxxx.xxx">
									</div>
								</div>
							</div>

	                	</div>
	                	<div class="col-lg-4">
	                		<div class="form-group">
								<label>Ajouter des photos</label>
								<div style="border: 1px solid #e5e5e5;height: 100%;padding: 5px;border-radius: 10px;">
									<div class="add-agances-custom-scrollbar">
										<div class="row">
											<div class="col-lg-5 col-sm-5">
												<div class="form-group">
													<div class="upload-bx lightgray-upload-bx">
														<i class="fa fa-plus fa-3x"></i>
													</div>
													<input type="file" name="" class="hide-file-input">
												</div>
											</div>
											<div class="col-lg-7 col-sm-7 pl-0 pr-4">
												<div class="form-group mt-3">
													<label>Nom</label>
													<input type="text" class="form-control" placeholder="AGENCE">
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
											<div class="col-lg-7 col-sm-7 pl-0 pr-4">
												<div class="form-group mt-3">
													<label>Nom</label>
													<input type="text" class="form-control" placeholder="AGENCE">
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
											<div class="col-lg-7 col-sm-7 pl-0 pr-4">
												<div class="form-group mt-3">
													<label>Nom</label>
													<input type="text" class="form-control" placeholder="AGENCE">
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
											<div class="col-lg-7 col-sm-7 pl-0 pr-4">
												<div class="form-group mt-3">
													<label>Nom</label>
													<input type="text" class="form-control" placeholder="AGENCE">
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
        </div>
    </div>
</div>

<div class="modal view-formation-modal" id="agencesDetailsModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content modal-content-demo">
			<div class="modal-header">
				<h6 class="modal-title">EDITER UNE AGENCE</h6>
				<button class="btn-blue-white enregister-btn" style="left:27%;">Enregistrer</button>
				<!-- <button type="button" class="close btn-blue-white" data-dismiss="modal" aria-label="Close" style="color:#009CDE !important; padding:8px;font-weight:normal;"><span aria-hidden="true">&times;</span></button> -->
				<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="opacity: 100%;">
					<img src="assets/img/icons/white-Exit_1.png" class="map-img-btn"  onmouseover="this.src='assets/img/media/Exit_blue.png'" onmouseout="this.src='assets/img/icons/white-Exit_1.png'"/>
				</button>
				
			</div>
			<div class="tab-header agencesTabs nav-bg">
				<nav class="nav nav-tabs">
					<a class="nav-link active" data-toggle="tab" id="agencesInformationBtn" href="#agencesInformation">Informations</a>
					<a class="nav-link" data-toggle="tab" id="agencesHistoriqueBtn" href="#agencesHistorique">Historique</a>
					<a class="nav-link" data-toggle="tab" id="agencesPieceJointesBtn" href="#agencesPieceJointes">Pièce jointes</a>
					<a class="nav-link" data-toggle="tab" id="agencesEtatStockBtn" href="#agencesEtatStock">Etat de stock</a>
					<button class="export-pdf-brn btn-white-blue border-0">Exporter PDF</button>
				</nav>
			</div>						
			<div class="modal-body py-0">
				<div class="card-body tab-content" style="padding-left: 0;">
					<div class="tab-pane active show" id="agencesInformation">
						<div class="card-body">
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<label>Nom de l’agence</label>
										<input type="text" class="form-control" name="example-text-input" placeholder="AGENCE">
									</div>
									<div class="form-group">
										<label>Adresse de l'agence</label>
										<input type="text" name="" class="form-control mb-1" placeholder="RUE">
										<input type="text" name="" class="form-control mb-1" placeholder="BAT">
										<div class="row">
											<div class="col-lg-5 col-sm-5">
												<input type="text" name="" class="form-control mb-1" placeholder="0000">
											</div>
											<div class="col-lg-7 col-sm-7">
												<select class="form-control mb-1">
													<option>City</option>
												</select>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label>Nom du responsable</label>
										<input type="text" name="" class="form-control" placeholder="RESPONSABLE">
									</div>

								</div>

								<div class="col-sm-6">
									<div class="form-group">
										<label>Tél. agence</label>
										<input type="text" name="" class="form-control" placeholder="00 00 00 00 00">
									</div>

									<div class="form-group">
										<label>Tél. service client</label>
										<input type="text" name="" class="form-control" placeholder="00 00 00 00 00">
									</div>

									<div class="form-group">
										<label>Email de l'agence</label>
										<input type="text" name="" class="form-control" placeholder="xxxxxxxxxxxx@xxxxxxxx.xxx">
									</div>
									<div class="form-group mt-4">
										<div class="row">
											<div class="col-lg-5 col-sm-5">
												<label>Tél. responsable</label>
												<input type="text" name="" class="form-control mb-1" placeholder="00 00 00 00 00">
											</div>
											<div class="col-lg-7 col-sm-7">
												<label>Email responsable</label>
												<input type="text" name="" class="form-control mb-1" placeholder="xxxxxxxxxxxx@xxxxxxxx.xxx">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
					<div class="tab-pane" id="agencesHistorique">
						<div class="historique-custom-scroll">
							<div class="card-body py-0">
								<div class="items">
									<h6 class="mb-2 text-blue font-weight-bold">13 août 2021 à 19:23 | EDO IMC-TELECOM_MISSAMOU</h6>
									<p class="font-weight-bold mb-2">Ouverture de l'agence</p>
									<div class="">
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus</p>
									</div>
								</div>
								<div class="items">
									<h6 class="mb-2 text-blue font-weight-bold">13 août 2021 à 19:23 | EDO IMC-TELECOM_MISSAMOU</h6>
									<p class="font-weight-bold mb-2">Ouverture de l'agence</p>
									<div class="">
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus</p>
									</div>
								</div>
								<div class="items">
									<h6 class="mb-2 text-blue font-weight-bold">13 août 2021 à 19:23 | EDO IMC-TELECOM_MISSAMOU</h6>
									<p class="font-weight-bold mb-2">Ouverture de l'agence</p>
									<div class="">
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus</p>
									</div>
								</div>
								<div class="items">
									<h6 class="mb-2 text-blue font-weight-bold">13 août 2021 à 19:23 | EDO IMC-TELECOM_MISSAMOU</h6>
									<p class="font-weight-bold mb-2">Ouverture de l'agence</p>
									<div class="">
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus</p>
									</div>
								</div>
								<div class="items">
									<h6 class="mb-2 text-blue font-weight-bold">13 août 2021 à 19:23 | EDO IMC-TELECOM_MISSAMOU</h6>
									<p class="font-weight-bold mb-2">Ouverture de l'agence</p>
									<div class="">
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus</p>
									</div>
								</div>
								<div class="items">
									<h6 class="mb-2 text-blue font-weight-bold">13 août 2021 à 19:23 | EDO IMC-TELECOM_MISSAMOU</h6>
									<p class="font-weight-bold mb-2">Ouverture de l'agence</p>
									<div class="">
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus</p>
									</div>
								</div>
								<div class="items">
									<h6 class="mb-2 text-blue font-weight-bold">13 août 2021 à 19:23 | EDO IMC-TELECOM_MISSAMOU</h6>
									<p class="font-weight-bold mb-2">Ouverture de l'agence</p>
									<div class="">
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus</p>
									</div>
								</div>
							</div>
						</div>
						<div class="card-body d-inline-block w-100" style="float: unset;text-align:center;margin: 0 auto;">
							<a href="javascript:void(0);" class="btn-white-blue" data-toggle="modal" data-target="#ajouterCommentaireAgenceModal" style="float: unset;text-align: center;margin: 0 auto;">Ajouter un commentaire</a>
						</div>
					</div>
					<div class="tab-pane" id="agencesPieceJointes">
						<div class="card-body pt-0 px-0">
							<div class="items d-inline-block mx-2 mt-0 mb-5">
								<label class="d-block text-center">Nom Photo</label>
								<div class="d-inline-block pos-relative">
									<img src="../assets/img/media/user.png" style="width: 200px;height: 200px;">
									<button class="border-0 btn-view-blue"><img src="./assets/img/icons/show.png"></button>
									<button type="button" class="img-close" style=""><img src="./assets/img/icons/cancel.png"></button>
								</div>
							</div>

							<div class="items d-inline-block mx-2 mt-0 mb-5">
								<label class="d-block text-center">Nom Photo</label>
								<div class="d-inline-block pos-relative">
									<img src="../assets/img/media/user.png" style="width: 200px;height: 200px;">
									<button class="border-0 btn-view-blue"><img src="./assets/img/icons/show.png"></button>
									<button type="button" class="img-close" style=""><img src="./assets/img/icons/cancel.png"></button>
								</div>
							</div>

							<div class="items d-inline-block mx-2 mt-0 mb-5" >
								<button class="border-0 btn-add-img" style="margin-left: 85px;"><i class="fas fa-plus"></i></button>
							</div>


						</div>
					</div>
					<div class="tab-pane" id="agencesEtatStock">
						<div class="historique-custom-scroll">
							<div class="table-responsive">
								<table class="table w-100" id="agaencesDataTable" style="width:100%">
									<thead>
										<tr>
											<th class="">Nom</th>
											<th class="">Date</th>
											<th class="">Photos</th>
											<th class="">Actions</th>
											<th class=""></th>
											
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>MATERIEL MATERIEL MATERIEL </td>
											<td>00/00/0000</td>
											<td>5</td>
											<td>Supprimer</td>
											<td><a href="#" style="color: #27C291;"><img src="./assets/img/icons/eye-green.png" class="mr-2"> Voir</a></td>
										</tr>
										<tr>
											<td>MATERIEL</td>
											<td>00/00/0000</td>
											<td>5</td>
											<td>Supprimer</td>
											<td><a href="#" style="color: #27C291;"><img src="./assets/img/icons/eye-green.png" class="mr-2"> Voir</a></td>
										</tr>
										<tr>
											<td>MATERIEL</td>
											<td>00/00/0000</td>
											<td>5</td>
											<td>Supprimer</td>
											<td><a href="#" style="color: #27C291;"><img src="./assets/img/icons/eye-green.png" class="mr-2"> Voir</a></td>
										</tr>
										<tr>
											<td>MATERIEL</td>
											<td>00/00/0000</td>
											<td>5</td>
											<td>Supprimer</td>
											<td><a href="#" style="color: #27C291;"><img src="./assets/img/icons/eye-green.png" class="mr-2"> Voir</a></td>
										</tr>
										<tr>
											<td>MATERIEL</td>
											<td>00/00/0000</td>
											<td>5</td>
											<td>Supprimer</td>
											<td><a href="#" style="color: #27C291;"><img src="./assets/img/icons/eye-green.png" class="mr-2"> Voir</a></td>
										</tr>
										<tr>
											<td>MATERIEL</td>
											<td>00/00/0000</td>
											<td>5</td>
											<td>Supprimer</td>
											<td><a href="#" style="color: #27C291;"><img src="./assets/img/icons/eye-green.png" class="mr-2"> Voir</a></td>
										</tr>
										<tr>
											<td>MATERIEL</td>
											<td>00/00/0000</td>
											<td>5</td>
											<td>Supprimer</td>
											<td><a href="#" style="color: #27C291;"><img src="./assets/img/icons/eye-green.png" class="mr-2"> Voir</a></td>
										</tr>
										<tr>
											<td>MATERIEL</td>
											<td>00/00/0000</td>
											<td>5</td>
											<td>Supprimer</td>
											<td><a href="#" style="color: #27C291;"><img src="./assets/img/icons/eye-green.png" class="mr-2"> Voir</a></td>
										</tr>
										<tr>
											<td>MATERIEL</td>
											<td>00/00/0000</td>
											<td>5</td>
											<td>Supprimer</td>
											<td><a href="#" style="color: #27C291;"><img src="./assets/img/icons/eye-green.png" class="mr-2"> Voir</a></td>
										</tr>
										<tr>
											<td>MATERIEL</td>
											<td>00/00/0000</td>
											<td>5</td>
											<td>Supprimer</td>
											<td><a href="#" style="color: #27C291;"><img src="./assets/img/icons/eye-green.png" class="mr-2"> Voir</a></td>
										</tr>
										<tr>
											<td>MATERIEL</td>
											<td>00/00/0000</td>
											<td>5</td>
											<td>Supprimer</td>
											<td><a href="#" style="color: #27C291;"><img src="./assets/img/icons/eye-green.png" class="mr-2"> Voir</a></td>
										</tr>
										<tr>
											<td>MATERIEL</td>
											<td>00/00/0000</td>
											<td>5</td>
											<td>Supprimer</td>
											<td><a href="#" style="color: #27C291;"><img src="./assets/img/icons/eye-green.png" class="mr-2"> Voir</a></td>
										</tr>
										<tr>
											<td>MATERIEL</td>
											<td>00/00/0000</td>
											<td>5</td>
											<td>Supprimer</td>
											<td><a href="#" style="color: #27C291;"><img src="./assets/img/icons/eye-green.png" class="mr-2"> Voir</a></td>
										</tr>
										<tr>
											<td>MATERIEL</td>
											<td>00/00/0000</td>
											<td>5</td>
											<td>Supprimer</td>
											<td><a href="#" style="color: #27C291;"><img src="./assets/img/icons/eye-green.png" class="mr-2"> Voir</a></td>
										</tr>
										<tr>
											<td>MATERIEL</td>
											<td>00/00/0000</td>
											<td>5</td>
											<td>Supprimer</td>
											<td><a href="#" style="color: #27C291;"><img src="./assets/img/icons/eye-green.png" class="mr-2"> Voir</a></td>
										</tr>
										<tr>
											<td>MATERIEL</td>
											<td>00/00/0000</td>
											<td>5</td>
											<td>Supprimer</td>
											<td><a href="#" style="color: #27C291;"><img src="./assets/img/icons/eye-green.png" class="mr-2"> Voir</a></td>
										</tr>
										<tr>
											<td>MATERIEL</td>
											<td>00/00/0000</td>
											<td>5</td>
											<td>Supprimer</td>
											<td><a href="#" style="color: #27C291;"><img src="./assets/img/icons/eye-green.png" class="mr-2"> Voir</a></td>
										</tr>
										<tr>
											<td>MATERIEL</td>
											<td>00/00/0000</td>
											<td>5</td>
											<td>Supprimer</td>
											<td><a href="#" style="color: #27C291;"><img src="./assets/img/icons/eye-green.png" class="mr-2"> Voir</a></td>
										</tr>
									</tbody>
								</table>
							</div>							
						</div>

					</div>
				</div>

			</div>
			<!-- <div class="modal-footer m-auto">
				<button class="btn-blue-bg validerbtn btn-wd-100" type="button">Ajouter une réponse</button>
			</div> -->
		</div>
	</div>
</div>

<div class="modal ajouterCommentaireAgenceModal" id="ajouterCommentaireAgenceModal" aria-modal="true" role="dialog">
	<div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 400px;">
		<div class="modal-content modal-content-demo p-3">
			<div class="modal-header">
				<h6 class="modal-title">AJOUTER UN COMMENTAIRE AGENCE</h6>
				<!-- <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">×</span></button> -->
			</div>
			<div class="modal-body pt-0 pb-0">
				<div class="">
					<div class="card-body p-0">
						<div class="form-group">
							<label>Sujet</label>
							<select class="form-control mb-1">
								<option>SUJET</option>
							</select>
						</div>
						<div class="form-group">
							<label>Commentaire</label>
							<textarea class="form-control" placeholder="Texte..." rows="8"></textarea>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer mt-2 mb-3" style="float: unset;margin: 0 auto;">
				<button class="btn-blue-white valider-btn mr-2" type="button">Valider</button>
				<button class="btn-white-blue annuler-btn" data-dismiss="modal" type="button">Annuler</button>
			</div>
		</div>
	</div>
</div>



<script type="text/javascript">
	$("#clientDataTable tbody tr").click(function (event) {
        $("#agencesDetailsModal").show();
    });

	$('#clientDataTable').dataTable({
		"pageLength": 25,
		"ordering": false,
		"scrollY": "430px",
		"scrollX": true,
		"scroller": true,
		"scrollCollapse": true,
		"bPaginate": false,
		"bInfo": false
	});
	$('#clientDataTable_length').hide();
	$('#clientDataTable_filter').hide();
	$(document).ready(function(){
		$(".upload-bx").click(function(){
			$(this).next().trigger("click");
		});

		$('#view-formation-modal').on('shown.bs.modal', function () {
			$('#add-technician-modal').modal('hide');
		});

		$('.bar-from,.bar-to').datepicker({
			dateFormat: 'dd-M-yy',
			minDate: 1,
			todayHighlight: true
		});

		$('.date-icon1').on('click', function() {
			$('.bar-from').focus();
		});

		$('.date-icon2').on('click', function() {
			$('.bar-to').focus();
		});
		$("#agencesEtatStockBtn").click(function(){
		    $(".export-pdf-brn").show();
		});
		$("#agencesInformationBtn,#agencesHistoriqueBtn,#agencesPieceJointesBtn").click(function(){
		    $(".export-pdf-brn").hide();
		});

		
	});

	
</script>

<?php include('sidebar-footer.php'); ?>