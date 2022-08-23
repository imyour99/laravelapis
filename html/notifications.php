<?php include('header.php'); ?>

<link rel="stylesheet" href="https://cdn.rawgit.com/openlayers/openlayers.github.io/master/en/v5.3.0/css/ol.css" type="text/css">
<script src="https://cdn.rawgit.com/openlayers/openlayers.github.io/master/en/v5.3.0/build/ol.js"></script>

<!-- row -->
<div class="row row-sm mt-4">
	
	<div class="col-lg-3 col-sm-2">
		<strong class="tx-16 black-text font-weight-bold">RECHERCHE PAR NOTIFICATIONS</strong>
	</div>

	
	<div class="col-lg-6 col-sm-3 mb-2" style="margin-top:-8px">
		<a href="javascript:void(0);" class="btn-white-blue float-right px-4" style="height: 32px;">
			Exporter
		</a>
	</div>	
</div>

<div class="row mt-2">
	<div class="col-lg-9">
		<div class="rounded-corner bg-white px-2">
		<div class="table-responsive">
			<table class="table table-striped w-100 notificationDataTable" id="notificationDataTable">
				<thead>
					<tr>
						<th class="">Nature</th>
						<th class="">Date de création</th>
						<th class="">Date échéance</th>
						<th class="">Technicien</th>
						<th class="">PDL</th>
						<th class="">Criticité</th>
						<th class="">Etat</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Nature</td>
						<td>00/00/0000</td>
						<td>00/00/0000</td>
						<td>JOHN DOE</td>
						<td>0000000000000</td>
						<td>Criticité</td>
						<td>
							<a href="javascript:void(0)" class="active-green font-weight-bold" data-toggle="modal" data-target="#notification-modal">
							<span class="active-green font-weight-bold">
							<i class="fa fa-circle"></i>
							</span>A planifier
							</a>
						</td>
					</tr>
					<tr>
						<td>Nature</td>
						<td>00/00/0000</td>
						<td>00/00/0000</td>
						<td>JOHN DOE</td>
						<td>0000000000000</td>
						<td>Criticité</td>
						<td>
							<a href="javascript:void(0)" class="active-green font-weight-bold" data-toggle="modal" data-target="#notification-modal">
							<span class="active-green font-weight-bold">
							<i class="fa fa-circle"></i>
							</span>A planifier
							</a>
						</td>
					</tr>
					<tr>
						<td>Nature</td>
						<td>00/00/0000</td>
						<td>00/00/0000</td>
						<td>JOHN DOE</td>
						<td>0000000000000</td>
						<td>Criticité</td>
						<td>
							<a href="javascript:void(0)" class="active-green font-weight-bold" data-toggle="modal" data-target="#notification-modal">
							<span class="active-green font-weight-bold">
							<i class="fa fa-circle"></i>
							</span>A planifier
							</a>
						</td>
					</tr>
					<tr>
						<td>Nature</td>
						<td>00/00/0000</td>
						<td>00/00/0000</td>
						<td>JOHN DOE</td>
						<td>0000000000000</td>
						<td>Criticité</td>
						<td>
							<a href="javascript:void(0)" class="active-green font-weight-bold" data-toggle="modal" data-target="#notification-modal">
							<span class="active-green font-weight-bold">
							<i class="fa fa-circle"></i>
							</span>A planifier
							</a>
						</td>
					</tr>
					<tr>
						<td>Nature</td>
						<td>00/00/0000</td>
						<td>00/00/0000</td>
						<td>JOHN DOE</td>
						<td>0000000000000</td>
						<td>Criticité</td>
						<td>
							<a href="javascript:void(0)" class="active-green font-weight-bold" data-toggle="modal" data-target="#notification-modal">
							<span class="active-green font-weight-bold">
							<i class="fa fa-circle"></i>
							</span>A planifier
							</a>
						</td>
					</tr>
					<tr>
						<td>Nature</td>
						<td>00/00/0000</td>
						<td>00/00/0000</td>
						<td>JOHN DOE</td>
						<td>0000000000000</td>
						<td>Criticité</td>
						<td>
							<a href="javascript:void(0)" class="active-green font-weight-bold" data-toggle="modal" data-target="#notification-modal">
							<span class="active-green font-weight-bold">
							<i class="fa fa-circle"></i>
							</span>A planifier
							</a>
						</td>
					</tr>
					<tr>
						<td>Nature</td>
						<td>00/00/0000</td>
						<td>00/00/0000</td>
						<td>JOHN DOE</td>
						<td>0000000000000</td>
						<td>Criticité</td>
						<td>
							<a href="javascript:void(0)" class="active-green font-weight-bold" data-toggle="modal" data-target="#notification-modal">
							<span class="active-green font-weight-bold">
							<i class="fa fa-circle"></i>
							</span>A planifier
							</a>
						</td>
					</tr>
					<tr>
						<td>Nature</td>
						<td>00/00/0000</td>
						<td>00/00/0000</td>
						<td>JOHN DOE</td>
						<td>0000000000000</td>
						<td>Criticité</td>
						<td>
							<a href="javascript:void(0)" class="active-green font-weight-bold" data-toggle="modal" data-target="#notification-modal">
							<span class="active-green font-weight-bold">
							<i class="fa fa-circle"></i>
							</span>A planifier
							</a>
						</td>
					</tr>
					<tr>
						<td>Nature</td>
						<td>00/00/0000</td>
						<td>00/00/0000</td>
						<td>JOHN DOE</td>
						<td>0000000000000</td>
						<td>Criticité</td>
						<td>
							<a href="javascript:void(0)" class="active-green font-weight-bold" data-toggle="modal" data-target="#notification-modal">
							<span class="active-green font-weight-bold">
							<i class="fa fa-circle"></i>
							</span>A planifier
							</a>
						</td>
					</tr>
					<tr>
						<td>Nature</td>
						<td>00/00/0000</td>
						<td>00/00/0000</td>
						<td>JOHN DOE</td>
						<td>0000000000000</td>
						<td>Criticité</td>
						<td>
							<a href="javascript:void(0)" class="active-green font-weight-bold" data-toggle="modal" data-target="#notification-modal">
							<span class="active-green font-weight-bold">
							<i class="fa fa-circle"></i>
							</span>A planifier
							</a>
						</td>
					</tr>
					<tr>
						<td>Nature</td>
						<td>00/00/0000</td>
						<td>00/00/0000</td>
						<td>JOHN DOE</td>
						<td>0000000000000</td>
						<td>Criticité</td>
						<td>
							<a href="javascript:void(0)" class="active-green font-weight-bold" data-toggle="modal" data-target="#notification-modal">
							<span class="active-green font-weight-bold">
							<i class="fa fa-circle"></i>
							</span>A planifier
							</a>
						</td>
					</tr>
					<tr>
						<td>Nature</td>
						<td>00/00/0000</td>
						<td>00/00/0000</td>
						<td>JOHN DOE</td>
						<td>0000000000000</td>
						<td>Criticité</td>
						<td>
							<a href="javascript:void(0)" class="active-green font-weight-bold" data-toggle="modal" data-target="#notification-modal">
							<span class="active-green font-weight-bold">
							<i class="fa fa-circle"></i>
							</span>A planifier
							</a>
						</td>
					</tr>
					<tr>
						<td>Nature</td>
						<td>00/00/0000</td>
						<td>00/00/0000</td>
						<td>JOHN DOE</td>
						<td>0000000000000</td>
						<td>Criticité</td>
						<td>
							<a href="javascript:void(0)" class="active-green font-weight-bold" data-toggle="modal" data-target="#notification-modal">
							<span class="active-green font-weight-bold">
							<i class="fa fa-circle"></i>
							</span>A planifier
							</a>
						</td>
					</tr>
					<tr>
						<td>Nature</td>
						<td>00/00/0000</td>
						<td>00/00/0000</td>
						<td>JOHN DOE</td>
						<td>0000000000000</td>
						<td>Criticité</td>
						<td>
							<a href="javascript:void(0)" class="active-green font-weight-bold" data-toggle="modal" data-target="#notification-modal">
							<span class="active-green font-weight-bold">
							<i class="fa fa-circle"></i>
							</span>A planifier
							</a>
						</td>
					</tr>
					<tr>
						<td>Nature</td>
						<td>00/00/0000</td>
						<td>00/00/0000</td>
						<td>JOHN DOE</td>
						<td>0000000000000</td>
						<td>Criticité</td>
						<td>
							<a href="javascript:void(0)" class="active-green font-weight-bold" data-toggle="modal" data-target="#notification-modal">
							<span class="active-green font-weight-bold">
							<i class="fa fa-circle"></i>
							</span>A planifier
							</a>
						</td>
					</tr>

					<tr>
						<td>Nature</td>
						<td>00/00/0000</td>
						<td>00/00/0000</td>
						<td>JOHN DOE</td>
						<td>0000000000000</td>
						<td>Criticité</td>
						<td>
							<a href="javascript:void(0)" class="active-green font-weight-bold" data-toggle="modal" data-target="#notification-modal">
							<span class="active-green font-weight-bold">
							<i class="fa fa-circle"></i>
							</span>A planifier
							</a>
						</td>
					</tr>
					<tr>
						<td>Nature</td>
						<td>00/00/0000</td>
						<td>00/00/0000</td>
						<td>JOHN DOE</td>
						<td>0000000000000</td>
						<td>Criticité</td>
						<td>
							<a href="javascript:void(0)" class="active-green font-weight-bold" data-toggle="modal" data-target="#notification-modal">
							<span class="active-green font-weight-bold">
							<i class="fa fa-circle"></i>
							</span>A planifier
							</a>
						</td>
					</tr>
					<tr>
						<td>Nature</td>
						<td>00/00/0000</td>
						<td>00/00/0000</td>
						<td>JOHN DOE</td>
						<td>0000000000000</td>
						<td>Criticité</td>
						<td>
							<a href="javascript:void(0)" class="active-green font-weight-bold" data-toggle="modal" data-target="#notification-modal">
							<span class="active-green font-weight-bold">
							<i class="fa fa-circle"></i>
							</span>A planifier
							</a>
						</td>
					</tr>
					<tr>
						<td>Nature</td>
						<td>00/00/0000</td>
						<td>00/00/0000</td>
						<td>JOHN DOE</td>
						<td>0000000000000</td>
						<td>Criticité</td>
						<td>
							<a href="javascript:void(0)" class="active-green font-weight-bold" data-toggle="modal" data-target="#notification-modal">
							<span class="active-green font-weight-bold">
							<i class="fa fa-circle"></i>
							</span>A planifier
							</a>
						</td>
					</tr>
					<tr>
						<td>Nature</td>
						<td>00/00/0000</td>
						<td>00/00/0000</td>
						<td>JOHN DOE</td>
						<td>0000000000000</td>
						<td>Criticité</td>
						<td>
							<a href="javascript:void(0)" class="active-green font-weight-bold" data-toggle="modal" data-target="#notification-modal">
							<span class="active-green font-weight-bold">
							<i class="fa fa-circle"></i>
							</span>A planifier
							</a>
						</td>
					</tr>
					<tr>
						<td>Nature</td>
						<td>00/00/0000</td>
						<td>00/00/0000</td>
						<td>JOHN DOE</td>
						<td>0000000000000</td>
						<td>Criticité</td>
						<td>
							<a href="javascript:void(0)" class="active-green font-weight-bold" data-toggle="modal" data-target="#notification-modal">
							<span class="active-green font-weight-bold">
							<i class="fa fa-circle"></i>
							</span>A planifier
							</a>
						</td>
					</tr>
					<tr>
						<td>Nature</td>
						<td>00/00/0000</td>
						<td>00/00/0000</td>
						<td>JOHN DOE</td>
						<td>0000000000000</td>
						<td>Criticité</td>
						<td>
							<a href="javascript:void(0)" class="active-green font-weight-bold" data-toggle="modal" data-target="#notification-modal">
							<span class="active-green font-weight-bold">
							<i class="fa fa-circle"></i>
							</span>A planifier
							</a>
						</td>
					</tr>
					<tr>
						<td>Nature</td>
						<td>00/00/0000</td>
						<td>00/00/0000</td>
						<td>JOHN DOE</td>
						<td>0000000000000</td>
						<td>Criticité</td>
						<td>
							<a href="javascript:void(0)" class="active-green font-weight-bold" data-toggle="modal" data-target="#notification-modal">
							<span class="active-green font-weight-bold">
							<i class="fa fa-circle"></i>
							</span>A planifier
							</a>
						</td>
					</tr>
					<tr>
						<td>Nature</td>
						<td>00/00/0000</td>
						<td>00/00/0000</td>
						<td>JOHN DOE</td>
						<td>0000000000000</td>
						<td>Criticité</td>
						<td>
							<a href="javascript:void(0)" class="active-green font-weight-bold" data-toggle="modal" data-target="#notification-modal">
							<span class="active-green font-weight-bold">
							<i class="fa fa-circle"></i>
							</span>A planifier
							</a>
						</td>
					</tr>
					<tr>
						<td>Nature</td>
						<td>00/00/0000</td>
						<td>00/00/0000</td>
						<td>JOHN DOE</td>
						<td>0000000000000</td>
						<td>Criticité</td>
						<td>
							<a href="javascript:void(0)" class="active-green font-weight-bold" data-toggle="modal" data-target="#notification-modal">
							<span class="active-green font-weight-bold">
							<i class="fa fa-circle"></i>
							</span>A planifier
							</a>
						</td>
					</tr>
					<tr>
						<td>Nature</td>
						<td>00/00/0000</td>
						<td>00/00/0000</td>
						<td>JOHN DOE</td>
						<td>0000000000000</td>
						<td>Criticité</td>
						<td>
							<a href="javascript:void(0)" class="active-green font-weight-bold" data-toggle="modal" data-target="#notification-modal">
							<span class="active-green font-weight-bold">
							<i class="fa fa-circle"></i>
							</span>A planifier
							</a>
						</td>
					</tr>
					<tr>
						<td>Nature</td>
						<td>00/00/0000</td>
						<td>00/00/0000</td>
						<td>JOHN DOE</td>
						<td>0000000000000</td>
						<td>Criticité</td>
						<td>
							<a href="javascript:void(0)" class="active-green font-weight-bold" data-toggle="modal" data-target="#notification-modal">
							<span class="active-green font-weight-bold">
							<i class="fa fa-circle"></i>
							</span>A planifier
							</a>
						</td>
					</tr>
					<tr>
						<td>Nature</td>
						<td>00/00/0000</td>
						<td>00/00/0000</td>
						<td>JOHN DOE</td>
						<td>0000000000000</td>
						<td>Criticité</td>
						<td>
							<a href="javascript:void(0)" class="active-green font-weight-bold" data-toggle="modal" data-target="#notification-modal">
							<span class="active-green font-weight-bold">
							<i class="fa fa-circle"></i>
							</span>A planifier
							</a>
						</td>
					</tr>
					<tr>
						<td>Nature</td>
						<td>00/00/0000</td>
						<td>00/00/0000</td>
						<td>JOHN DOE</td>
						<td>0000000000000</td>
						<td>Criticité</td>
						<td>
							<a href="javascript:void(0)" class="active-green font-weight-bold" data-toggle="modal" data-target="#notification-modal">
							<span class="active-green font-weight-bold">
							<i class="fa fa-circle"></i>
							</span>A planifier
							</a>
						</td>
					</tr>
					<tr>
						<td>Nature</td>
						<td>00/00/0000</td>
						<td>00/00/0000</td>
						<td>JOHN DOE</td>
						<td>0000000000000</td>
						<td>Criticité</td>
						<td>
							<a href="javascript:void(0)" class="active-green font-weight-bold" data-toggle="modal" data-target="#notification-modal">
							<span class="active-green font-weight-bold">
							<i class="fa fa-circle"></i>
							</span>A planifier
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
                                <label class="ckbox my-2"><input type="checkbox"><span>Sous filtre</span></label>
                                <label class="ckbox my-2 active"><input type="checkbox" checked><span>Sous filtre</span></label>
                                <label class="ckbox my-2"><input type="checkbox"><span>Sous filtre</span></label>
                                <label class="ckbox my-2 active"><input type="checkbox" checked><span>Sous filtre</span></label>
                                <label class="ckbox my-2"><input type="checkbox"><span>Sous filtre</span></label>
                                <label class="ckbox my-2 active"><input type="checkbox" checked><span>Sous filtre</span></label>
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
                        </div><!-- collapse -->
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
                        </div><!-- collapse -->
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
                        </div><!-- collapse -->
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
                        </div><!-- collapse -->
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
                        </div><!-- collapse -->
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
                        </div><!-- collapse -->
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
                        </div><!-- collapse -->
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
                        </div><!-- collapse -->
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
                        </div><!-- collapse -->
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
                        </div><!-- collapse -->
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
                        </div><!-- collapse -->
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
                        </div><!-- collapse -->
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
                        </div><!-- collapse -->
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
                        </div><!-- collapse -->
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
                        </div><!-- collapse -->
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
                        </div><!-- collapse -->
                    </div>
                </div>
                <!-- accordion -->
			</div>
		</div>
		</div>
		
	</div>

</div>

<!-- <div class="notificationsDetails">
	<div class="">
		<div class="leftarrow">
			<button class="leftarrowBtn"><i class="fas fa-chevron-left"></i></button>
		</div>
		<div class="">
			<div class="detailsNotification">
				<div class="header">
					<h6 class="" style="color: #009CDE; font-weight: bold;">Détail notification</h6>
				</div>
				<div class="row row-sm">
					<div class="col-xs-12 col-sm-5">
						<div class="card custom-card overflow-hidden ">
							<div class="card-body">
								<h6 class="text-muted" style="font-weight: bold;">NATURE</h6>
								<hr>
								<p>CR KO hors GRIP</p>
							</div>
						</div>
						
					</div>
					<div class="col-xs-12 col-sm-7">
						<div class="row-sm row">
							<div class="col-xs-12 col-sm-6">
								<div class="card custom-card overflow-hidden ">
									<div class="card-body">
										<h6 class="text-muted" style="font-weight: bold;">DATE DE CREATION</h6>
										<hr>
										<p>00/00/0000 à 00:00</p>
									</div>	
								</div>
									
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="card custom-card overflow-hidden ">
									<div class="card-body ">
										<h6 class="text-muted" style="font-weight: bold;">NUMERO PDL</h6>
										<hr>
										<p>07190882744449</p>
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>

				<div class="row-sm row">
					<div class="col-xs-12 col-sm-5">
						<div class="card custom-card overflow-hidden ">
							<div class="card-body">
								<h6 class="text-muted" style="font-weight: bold;">NATURE</h6>
								<hr>
								<p>CR KO hors GRIP</p>
							</div>
						</div>
						
					</div>
					<div class="col-xs-12 col-sm-7">
						<div class="row-sm row">
							<div class="col-xs-12 col-sm-6">
								<div class="card custom-card overflow-hidden ">
									<div class="card-body">
										<h6 class="text-muted" style="font-weight: bold;">CRITICITÉ</h6>
										<hr>
										<p style="color: #009CDE;"><i class="fa fa-circle mr-2" ></i>Normale</p>
									</div>	
								</div>
									
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="card custom-card overflow-hidden ">
									<div class="card-body ">
										<h6 class="text-muted" style="font-weight: bold;">ETAT</h6>
										<hr>
										<p style="color: #27C291;"><i class="fa fa-circle mr-2"></i>Levée</p>
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>

			
					
				
		</div>

		<div class="notificationHistory">
			<div class="header">
				<h6 class="" style="color: #009CDE; font-weight: bold;">Historique</h6>
			</div>

			<div class="card custom-card overflow-hidden ">
				
				<div class="card-body px-2">
					<div class="notificationHistoryItems">
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
			</div>
		</div>
		
	</div>
</div> -->
<div class="modal fullmodal fade" id="notification-modal" tabindex="-1" aria-labelledby="notification-modal" aria-modal="true" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-body">
                <div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12">
						&nbsp;
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 bg-lightgray px-4 tour-employee-modal-right">
                        <!-- <div class="leftarrow">
                            <a href="javascript:void(0)"><img src="https://demo2.itfaq.cloud/imc/public/assets/img/icons/gray-left-arrow.png" class="tour-employee-left-arrow" data-dismiss="modal"></a>
                        </div> -->
                        <div class="notification-modal-arrow">
							<a href="javascript:void(0)"><img src="assets/img/icons/gray-left-arrow.png" class="tour-employee-left-arrow" data-dismiss="modal"></a>
						</div>
                        <div class="p-3">
                            <div class="detailsNotification">
                                <div class="header">
                                    <h6 class="" style="color: #009CDE; font-weight: bold;">Détail notification</h6>
                                </div>
                                <div class="row row-sm">
                                    <div class="col-xs-12 col-sm-5">
                                        <div class="card custom-card overflow-hidden ">
                                            <div class="card-body">
                                                <h6 class="text-muted" style="font-weight: bold;">NATURE</h6>
                                                <hr>
                                                <p>Nature</p>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-xs-12 col-sm-7">
                                        <div class="row-sm row">
                                            <div class="col-xs-12 col-sm-6">
                                                <div class="card custom-card overflow-hidden ">
                                                    <div class="card-body">
                                                        <h6 class="text-muted" style="font-weight: bold;">DATE DE CREATION</h6>
                                                        <hr>
                                                        <p>2022-02-16</p>
                                                    </div>	
                                                </div>

                                            </div>
                                            <div class="col-xs-12 col-sm-6">
                                                <div class="card custom-card overflow-hidden ">
                                                    <div class="card-body ">
                                                        <h6 class="text-muted" style="font-weight: bold;">NUMERO PDL</h6>
                                                        <hr>
                                                        <p>address</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row-sm row">
                                    <div class="col-xs-12 col-sm-5">
                                        <div class="card custom-card overflow-hidden ">
                                            <div class="card-body">
                                                <h6 class="text-muted" style="font-weight: bold;">ASSIGNEE A</h6>
                                                <hr>
                                                <p>John doe</p>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-xs-12 col-sm-7">
                                        <div class="row-sm row">
                                            <div class="col-xs-12 col-sm-6">
                                                <div class="card custom-card overflow-hidden ">
                                                    <div class="card-body">
                                                        <h6 class="text-muted" style="font-weight: bold;">CRITICITÉ</h6>
                                                        <hr>
                                                        <p style="color: #009CDE;"><i class="fa fa-circle mr-2"></i>Normale</p>
                                                    </div>	
                                                </div>

                                            </div>
                                            <div class="col-xs-12 col-sm-6">
                                                <div class="card custom-card overflow-hidden ">
                                                    <div class="card-body ">
                                                        <h6 class="text-muted" style="font-weight: bold;">ETAT</h6>
                                                        <hr>
                                                        <p style="color: #27C291;"><i class="fa fa-circle mr-2"></i>Levée</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>




                        </div>

                        <div class="notificationHistory p-3">
                            <div class="header">
                                <h6 class="" style="color: #009CDE; font-weight: bold;">Historique</h6>
                            </div>

                            <div class="card custom-card overflow-hidden ">

                                <div class="card-body px-2">
                                    <div class="notificationHistoryItems">
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
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div> -->
        </div>
    </div>
</div>

<script type="text/javascript">
	$('#notificationDataTable').dataTable({
		"order": [],
		"pageLength": 25,
		"columnDefs": [{
			"targets": [0,1,2,3,4,5],
			"orderable": false,
	    }],
		"scrollY": "70vh",
		"scrollCollapse": true,
		"bPaginate": false,
		"bInfo": false
	});
	$('#notificationDataTable_length').hide();
	$('#notificationDataTable_filter').hide();

	// $("#notificationDataTable tbody tr").click(function (event) {
 //        $(".notificationsDetails").show();
 //    });

 //    $("button.leftarrowBtn").click(function (event) {
 //        $(".notificationsDetails").hide();

 //    });
</script>

<?php include('sidebar-footer.php'); ?>