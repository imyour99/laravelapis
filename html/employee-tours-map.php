<?php include('header.php'); ?>

<link rel="stylesheet" href="https://cdn.rawgit.com/openlayers/openlayers.github.io/master/en/v5.3.0/css/ol.css" type="text/css">
<script src="https://cdn.rawgit.com/openlayers/openlayers.github.io/master/en/v5.3.0/build/ol.js"></script>

<?php

if(empty($_GET['logitude']))
    $clientDetail['logitude'] = -0.8846;
else
    $clientDetail['logitude'] = $_GET['logitude'];

if(empty($_GET['latitude']))
    $clientDetail['latitude'] = 45.9576;
else
    $clientDetail['latitude'] = $_GET['latitude'];
?>

<!-- row -->
<div class="row row-sm mt-4">
	
	<div class="col-lg-11 col-sm-12">
		<div class="visits-intervensions-div row">
			<div class="col-lg-6 tour-switch tour-switch-active">
				Visites
			</div>

			<div class="col-lg-6 tour-switch">
				Interventions
			</div>
		</div>

		<div class="circle-icon circle-icon1 ml-4 mt-1">
			<a href="employee-tours.php">
				<img src="assets/img/icons/menu.png" class="" onmouseover="this.src='assets/img/icons/Menu_blue.png'" onmouseout="this.src='assets/img/icons/menu.png'" style="max-width: 48px !important;position: absolute;top: 0;"/>
			</a>
		</div>

		<div class="circle-icon ml-3 mt-1">
			<a href="javascript:void(0)" class="calendar-icon">
				<img src="assets/img/icons/blue-calendar-white.png" />
			</a>
			<div class="tour-calendar-div" style="display:none">
				<div id="calendar"></div>
			</div>
		</div>

		<div class="tour-today ">
			<!-- <a href="javascript:void(0)" class="btn-white-blue" style="padding-top: 5px;">Aujourd'hui</a> -->
			<a href="javascript:void(0)" class="btn-white-blue">Aujourd'hui</a>
		</div>

		<div class="circle-icon ml-3 mt-1">
			<a href="javascript:void(0)" id="tour-id">
				<img src="assets/img/icons/blue-plus-white.png" />
			</a>
		</div>

		<div class="tour-gray-icons text-center" style="display:none;">
			<div class="row">
				<div class="mx-2">
					<button data-toggle="modal" data-target="#Admin_Tournées_Valider-modal"  class="tour-gray-text border-0"><img src="assets/img/icons/right-sign.png" style="margin-top: -3px;"> Valider</button>
				</div>
				<div class="mx-2">
					<button data-toggle="modal" data-target="#Admin_Tournées_Figer-modal" class="tour-gray-text border-0"><img src="assets/img/icons/lock_black.png" style="margin-top: -5px;"> Figer</button>
				</div>
				<div class="mx-2">
					<button data-toggle="modal" data-target="#Admin_Tournées_Echanger-modal" class="tour-gray-text border-0"><img src="assets/img/icons/arrow-change.png" style="margin-top: -1px;"> Enchanger</button>
				</div>
				<div class="mx-2">
					<button data-toggle="modal" data-target="#Admin_Tournées_Optimiser-modal" class="tour-gray-text border-0"><img src="assets/img/icons/settings.png" style="margin-top: -2px;"> Optimiser</button>
				</div>
				<div class="mx-2">
					<button class="tour-gray-text border-0 hide-tour-gray-icons"><img src="assets/img/icons/refresh.png" style="margin-top: -2px;"> Rafraichir</button>
				</div>
				<!--<div class="col-lg-3 col-sm-8" style="min-width: 80px;">
					<span class="tour-gray-text">Afficher les trajets</span>
				</div>-->
			</div>
		</div>

	</div>

	<div class="col-lg-1">
		<div class="row">
			<a class="btn-white-blue float-right">
				Exporter
			</a>
		</div>	
	</div>
</div>

<div class="row mt-4">
	<div class="col-lg-9">
		<div id="map" style="height: 100%;width: 100%"></div>
	</div>

	<div class="col-lg-3" >
		<div class="col-white12-col">
			<div class="rounded-corner bg-white col-white12">
				<nav>
                    <div class="nav nav-tabs tour-navs" id="nav-tour-details-tab" role="tablist">
                        <a class="nav-item nav-link w-50 active" id="nav-non-affectes-tab" data-toggle="tab" href="#nav-non-affectes" role="tab" aria-controls="nav-tour" aria-selected="true">
                            <span class="tab-icon icon-chead"></span><span class="tab-label">Non affectés</span>
                        </a>
                        <a class="nav-item nav-link w-50" id="nav-collaborateurs-tab" data-toggle="tab" href="#nav-collaborateurs" role="tab" aria-controls="nav-collaborateurs" aria-selected="true">
                            <span class="tab-icon icon-vente"></span><span class="tab-label">Collaborateurs</span>
                        </a>                      
                    </div>
                </nav>
                <div class="tab-content tour-right-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-non-affectes" role="tabpanel" aria-labelledby="nav-non-affectes-tab">
                        <?php include('employee-tour/non-affectes.php'); ?>
                    </div>
                    <div class="tab-pane fade" id="nav-collaborateurs" role="tabpanel" aria-labelledby="nav-collaborateurs-tab">
                        <?php include('employee-tour/collaborateurs.php'); ?>
                    </div>
                </div>
			</div>
		</div>
		
	</div>
</div>

<div id="marker">8</div>



<div class="modal fade Admin_Tournées_Valider-modal" id="Admin_Tournées_Valider-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-modal="true" role="dialog">
  	<div class="modal-dialog modal-dialog-centered modal-md">
	    <div class="modal-content">
	      <div class="modal-header pt-5" style="margin:0 auto;">
	      	<h5 class="modal-title" style="text-align: center">John Doe, John Doe 2</h5>
	      </div>
	      <div class="modal-body">
	      	
	        <div class="Panel">
	          <div class="Panel__body text-center text-black">
	            <p class="px-5 m-0" style="color: #1E1D1D;line-height: 2;">
	                Etes-vous sur de valider les tournées pour ces techniciens ?
	            </p>
	          </div>
	        </div>
	      </div>
	      <div class="modal-footer m-auto pb-5">
	          <button class="validerBtn">Valider</button>
	          <button class="annulerBtn" data-dismiss="modal">Annuler</button>
	      </div>
	    </div>
  	</div>
</div>

<div class="modal fade Admin_Tournées_Figer-modal" id="Admin_Tournées_Figer-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-modal="true" role="dialog">
  	<div class="modal-dialog modal-dialog-centered modal-md">
	    <div class="modal-content">
	      <div class="modal-header pt-5" style="margin:0 auto;">
	      	<h5 class="modal-title" style="text-align: center">John Doe, John Doe 2</h5>
	      </div>
	      <div class="modal-body">
	      	
	        <div class="Panel">
	          <div class="Panel__body text-center text-black">
	            <p class="px-5 m-0" style="color: #1E1D1D;line-height: 2;">
	                Etes-vous sur de valider les tournées pour ces techniciens ?
	            </p>
	          </div>
	        </div>
	      </div>
	      <div class="modal-footer m-auto pb-5">
	          <button class="figerBtn">Figer</button>
	          <button class="annulerBtn" data-dismiss="modal">Annuler</button>
	      </div>
	    </div>
  	</div>
</div>

<div class="modal fade Admin_Tournées_Echanger-modal" id="Admin_Tournées_Echanger-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-modal="true" role="dialog">
  	<div class="modal-dialog modal-dialog-centered modal-md">
	    <div class="modal-content">
	      <div class="modal-header pt-5" style="margin:0 auto;">
	      	<h5 class="modal-title" style="text-align: center">John Doe, John Doe 2</h5>
	      </div>
	      <div class="modal-body">
	      	
	        <div class="Panel">
	          <div class="Panel__body text-center text-black">
	            <p class="px-5 m-0" style="color: #1E1D1D;line-height: 2;">
	                Etes-vous sur de valider les tournées pour ces techniciens ?
	            </p>
	          </div>
	        </div>
	      </div>
	      <div class="modal-footer m-auto pb-5">
	          <button class="echangerBtn">Valider</button>
	          <button class="annulerBtn" data-dismiss="modal">Annuler</button>
	      </div>
	    </div>
  	</div>
</div>

<div class="modal fade Admin_Tournées_Optimiser-modal" id="Admin_Tournées_Optimiser-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-modal="true" role="dialog">
  	<div class="modal-dialog modal-dialog-centered modal-md">
	    <div class="modal-content">
	      <div class="modal-header pt-5" style="margin:0 auto;">
	      	<h5 class="modal-title" style="text-align: center">John Doe, John Doe 2</h5>
	      </div>
	      <div class="modal-body">
	      	
	        <div class="Panel">
	          <div class="Panel__body text-center text-black">
	            <p class="px-5 m-0" style="color: #1E1D1D;line-height: 2;">
	                Etes-vous sur de valider les tournées pour ces techniciens ?
	            </p>
	          </div>
	        </div>
	      </div>
	      <div class="modal-footer m-auto pb-5">
	          <button class="optimiserBtn">Optimiser</button>
	          <button class="annulerBtn" data-dismiss="modal">Annuler</button>
	      </div>
	    </div>
  	</div>
</div>


<script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBHqmol9ZCmFqyUVzbcbgOtCrvx78gl12g&callback=initMap&v=weekly&channel=2"
      async
    >
</script>

<script type="text/javascript">
	$('.tour-switch').click(function(){
		var tourSwitches = $('.tour-switch');

		$.each(tourSwitches,function(){
			$(this).removeClass('tour-switch-active');			
		});

		$(this).addClass('tour-switch-active');			

	});

	$('#calendar').datepicker({
	    dateFormat: 'dd-M-yy',
	    minDate: 1,
	    todayHighlight: true
	});
	  
	$('.calendar-icon').on('click', function() {
	//$('#calendar').focus();
	if($('.tour-calendar-div').is(':visible'))
		$('.tour-calendar-div').hide();
	else
		$('.tour-calendar-div').show();
	});

	$('#tour-id,.hide-tour-gray-icons').click(function(){
		var imgSrc = $('#tour-id img').attr('src');

		if(imgSrc == 'assets/img/icons/blue-plus-white.png'){
			imgSrc = 'assets/img/icons/white-plus-blue.png';
			$('.tour-gray-icons').show();
		}else{
			imgSrc = 'assets/img/icons/blue-plus-white.png';			
			$('.tour-gray-icons').hide();
		}

		$('#tour-id img').attr('src',imgSrc);	
	});


function initMap() {
  const myLatLng = { lat: 48.86194, lng: 2.33871 };
  const myLatLng2 = { lat: 48.8608027, lng: 2.3411235 };
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 17,
    center: myLatLng,
  });

  new google.maps.Marker({
    position: myLatLng,
    map,
    title: "label 8",
    sName: "8",
    icon: {
        path: google.maps.SymbolPath.CIRCLE,
        scale: 25,
        fillColor: "#009cde",
        fillOpacity: 1,
        strokeWeight: 0
    },
      label: {
        text: "8",
        color: "#FFF",
        fontWeight: "bold",
        fontSize: "20px"
      }
  });

  new google.maps.Marker({
    position: myLatLng2,
    map,
    title: "label 25",
    sName: "25",
    icon: {
        path: google.maps.SymbolPath.CIRCLE,
        scale: 25,
        fillColor: "#009cde",
        fillOpacity: 1,
        strokeWeight: 0
    },
      label: {
        text: "25",
        color: "#FFF",
        fontWeight: "bold",
        fontSize: "20px"
      }
  });
}

$('.text-tour-collaborateurs input[type=checkbox]').click(function() {
	$(this.parentNode).removeClass("bg-white");
	$(this.parentNode).addClass("bg-lightdarkerblue");
});
</script>

<?php include('sidebar-footer.php'); ?>