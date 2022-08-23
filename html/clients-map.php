<?php include('header.php'); ?>

<link rel="stylesheet" href="https://cdn.rawgit.com/openlayers/openlayers.github.io/master/en/v5.3.0/css/ol.css" type="text/css">
<script src="https://cdn.rawgit.com/openlayers/openlayers.github.io/master/en/v5.3.0/build/ol.js"></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"    />
<style type="text/css">
    .gm-style-iw-d{
        overflow: hidden !important;
    }
</style>

<!-- row -->
<div class="row row-sm mt-4">
	
	<div class="col-lg-4 col-sm-4">
		<strong class="tx-16 black-text font-weight-bold mr-4 user-fullname">RECHERCHE PAR CLIENTS</strong>
        <strong class="text-blue tx-11">500 clients trouvès</strong>
	</div>
    <div class="col-lg-5 col-sm-5 mb-2" style="margin-top:-8px">
        <div class="float-right">
            <div class="circle-icon circle-icon1 mt-1 ml-1">
                <a href="clients.php">
                    <img src="assets/img/icons/menu2.png" />
                </a>
            </div>
            <a href="javascript:void(0);" class="btn-blue-white mr-2">Importer client</a>
            <a href="javascript:void(0);" class="btn-white-blue ml-2 px-4">Exporter</a>
        </div>
    </div>
</div>

<div class="row mt-2">
	<div class="col-lg-9">
		<div id="map" style="height: 100%;width: 100%"></div>
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



<div id="marker">8</div>
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

	$('#tour-id').click(function(){
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

    // var marker = new google.maps.Marker({
    //   position: coordinates,
    //   map: map,
    //   icon: {
    //     url: "http://maps.google.com/mapfiles/ms/icons/red-dot.png",
    //     labelOrigin: new google.maps.Point(75, 32),
    //     size: new google.maps.Size(32,32),
    //     anchor: new google.maps.Point(16,32)
    //   },
    //   label: {
    //     text: "5409 Madison St",
    //     color: "#C70E20",
    //     fontWeight: "bold"
    //   }
    // });

    function initMap() {
      const myLatLng = { lat: 48.86194, lng: 2.33871 };
      const myLatLng2 = { lat: 48.8608027, lng: 2.3411235 };
      const myLatLng3 = { lat: 48.86171411510604, lng: 2.3368646370285164 };
      const myLatLng4 = { lat: 48.861431779419185, lng: 2.3377443909834166 };
      const myLatLng5 = { lat: 48.86125532506425, lng: 2.3375727276207225 };
      const myLatLng6 = { lat: 48.86155880260119, lng: 2.33921423570126 };
      const myLatLng7 = { lat: 48.86134705334673, lng: 2.339289325666643 };
      const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 17,
        center: myLatLng,
      });

      /* \uef4a material icon circle */
      var red1 = new google.maps.Marker({
        position: myLatLng,
        map,
        title: "label 8",
        icon: {                             
             url: "assets/img/icons/red-map-marker.png"                           
        }
      });

      var red2 = new google.maps.Marker({
        position: myLatLng2,
        map,
        title: "label 25",
        icon: {                             
             url: "assets/img/icons/red-map-marker.png"                           
        }
      });

      var green1 = new google.maps.Marker({
        position: myLatLng3,
        map,
        title: "label 25",
        icon: {                             
             url: "assets/img/icons/green-map-marker.png"                           
        }
      });

      var green2 = new google.maps.Marker({
        position: myLatLng4,
        map,
        title: "label 25",
        icon: {                             
             url: "assets/img/icons/green-map-marker.png"                           
        }
      });

      var green3 = new google.maps.Marker({
        position: myLatLng5,
        map,
        title: "label 25",
        icon: {                             
             url: "assets/img/icons/green-map-marker.png"                           
        }
      });

      var orange1 = new google.maps.Marker({
        position: myLatLng6,
        map,
        title: "label 25",
        icon: {                             
             url: "assets/img/icons/orange-map-marker.png"                           
        }
      });

      var red3 = new google.maps.Marker({
        position: myLatLng7,
        map,
        title: "label 25",
        icon: {                             
             url: "assets/img/icons/red-map-marker.png"                           
        }
      });

        var contentString = '<div style="width:314px"><div class="row ml-1" style="overflow:hidden;font-size:0.75rem;padding:0;width:310px;background:#c8efe3;overflow:hidden">\
                        <div class="col-lg-3" style="padding:5px;background:#FFFFFF;max-width:60px;padding-top:10px"><img src="assets/img/mapid.png" /></div>\
                        <div class="col-lg-5" style="padding:5px;background:#FFFFFF;padding-top:10px">\
                        <p style="font-weight:bold;margin-bottom:0.5rem;">MARCEL DURANT</p>\
                        <p style="margin-bottom:0.5rem;">PDL 1256458665</p>\
                        <p style="color:#27c291;margin-bottom:0.5rem;">05/10/2021</p>\
                        </div>\
                        <div class="col-lg-2" style="padding:5px;background:#FFFFFF;padding-top:10px;position:relative;">\
                        <div style="position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);">\
                        <span style="background: #27c291;border-radius: 50%;padding: 6px 5px;color: #FFF;font-weight: bold;display:inline-block;">G3</span>\
                        <span style="background: #27c291;border-radius: 50%;padding: 6px 9px;color: #FFF;font-weight: bold;margin-top: 12px;float: left;display:inline-block;">P</span>\
                        <br/></div>\
                        </div>\
                        <div class="col-lg-2" style="background:#c8efe3;color:#27c291;text-align:center;padding-top:10px;margin-left:7px;font-weight:bold;position:relative;">\
                        <div style="position: absolute;top: 50%;left: 55%;transform: translate(-50%, -50%);">\
                        <img src="assets/img/circle-check.png" style="margin-bottom: 3px;"/>\
                        08:10<br/>\
                        -<br/>\
                        08:10<br/>\
                        </div>\
                        </div>\
                        </div></div>';
        var infowindow = new google.maps.InfoWindow({
          content: contentString
        });
       
       google.maps.event.addDomListener(red1, 'click', function() {
            infowindow.open(map,red1);
        });

       google.maps.event.addDomListener(red2, 'click', function() {
            infowindow.open(map,red2);
        });

       google.maps.event.addDomListener(red3, 'click', function() {
            infowindow.open(map,red3);
        });

       google.maps.event.addDomListener(green1, 'click', function() {
            infowindow.open(map,green1);
        });

       google.maps.event.addDomListener(green2, 'click', function() {
            infowindow.open(map,green2);
        });

       google.maps.event.addDomListener(green3, 'click', function() {
            infowindow.open(map,green3);
        });

       google.maps.event.addDomListener(orange1, 'click', function() {
            infowindow.open(map,orange1);
        });

       $(".gm-style-iw").next("div").hide();
    }

</script>

<style type="text/css">
    .gm-style .gm-style-iw-c{
        padding: 0;
        overflow: hidden;
    }

    .gm-ui-hover-effect{
        display: none !important;
    }
</style>

<?php include('sidebar-footer.php'); ?>