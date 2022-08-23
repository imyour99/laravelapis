<?php include('header.php'); ?>

<link rel="stylesheet" href="https://cdn.rawgit.com/openlayers/openlayers.github.io/master/en/v5.3.0/css/ol.css" type="text/css">
<script src="https://cdn.rawgit.com/openlayers/openlayers.github.io/master/en/v5.3.0/build/ol.js"></script>

<!-- row -->
<div class="row row-sm mt-4">
	
	<div class="col-lg-2 col-sm-2">
		<strong class="tx-16 black-text font-weight-bold user-fullname">RECHERCHE PAR CLIENTS</strong>
	</div>

	<div class="col-lg-4 col-sm-4">
		<strong class="text-blue tx-11">500 clients trouvès</strong>
	</div>

	<div class="col-lg-3 col-sm-3 mb-2" style="margin-top:-8px">
		<div class="row mr-1">
			<div class="col-lg-3">
				<div class="circle-icon ">
					<a href="clients-map.php">
						<img src="assets/img/icons/list2.png" />
					</a>
				</div>
			</div>
			<div class="col-lg-4" style="margin-top:-3px">
				<a class="btn-blue-white float-right px-4">
					Importer
				</a>
				
			</div>
			<div class="col-lg-5" style="margin-top:-3px">
				<a class="btn-white-blue float-right px-4">
					Exporter
				</a>
			</div>
		</div>
	</div>	
</div>

<div class="row mt-2">
	<div class="col-lg-9">
		<div id="map-poseur" style="height: 100%;width: 100%"></div>
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
                                <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                                <label class="ckbox my-2"><input type="checkbox"><span>Sos filtre</span></label>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwoHIW" role="tab">
                            <a aria-controls="collapseTwoHIW" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapseTwoHIW">Filter</a>
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
                            <a aria-controls="collapseThreeHIW" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapseThreeHIW">Filter</a>
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
                            <a aria-controls="collapsefourHIW" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapsefourHIW">Filter</a>
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
                            <a aria-controls="collapseTwoHIW" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapseTwoHIW">Filter</a>
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
                            <a aria-controls="collapseThreeHIW" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapseThreeHIW">Filter</a>
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
                            <a aria-controls="collapsefourHIW" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapsefourHIW">Filter</a>
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
                            <a aria-controls="collapseTwoHIW" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapseTwoHIW">Filter</a>
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
                            <a aria-controls="collapseThreeHIW" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapseThreeHIW">Filter</a>
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
                            <a aria-controls="collapsefourHIW" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapsefourHIW">Filter</a>
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
                            <a aria-controls="collapse6" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapse6">Filter</a>
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
                            <a aria-controls="collapse7" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapse7">Filter</a>
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
                            <a aria-controls="collapse8" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapse8">Filter</a>
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
                            <a aria-controls="collapse9" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapse9">Filter</a>
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
                            <a aria-controls="collapse10" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapse10">Filter</a>
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
                            <a aria-controls="collapse11" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapse11">Filter</a>
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
                            <a aria-controls="collapse9" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapse9">Filter</a>
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
                            <a aria-controls="collapse10" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapse10">Filter</a>
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
                            <a aria-controls="collapse11" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapse11">Filter</a>
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
                            <a aria-controls="collapse11" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapse11">Filter</a>
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

<div id="marker">8</div>

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

var attribution = new ol.control.Attribution({
     collapsible: false
 });

// var osmSource = new ol.source.OSM();
// var rasterSource = new ol.source.Raster({
//   sources: [osmSource],
//   operation: function(pixels,data) {
//         var pixel = pixels[0];

//         var r = pixel[0];
//         var g = pixel[1];
//         var b = pixel[2];

//         // CIE luminance for the RGB
//         var v = 0.2126 * r + 0.7152 * g + 0.0722 * b;

//         pixel[0] = v; // Red
//         pixel[1] = v; // Green
//         pixel[2] = v; // Blue
//         //pixel[3] = 255;

//         return pixel;
//     }
// });
// var mapLayer = new ol.layer.Image({
//   source: rasterSource
// });

var map = new ol.Map({
    controls: ol.control.defaults({attribution: false}).extend([attribution]),
    //layers: [mapLayer],
    layers: [
        new ol.layer.Tile({
            source: new ol.source.OSM({
                url: 'https://tile.openstreetmap.org/{z}/{x}/{y}.png',
                attributions: [ ol.source.OSM.ATTRIBUTION, 'Tiles courtesy of <a href="https://geo6.be/">GEO-6</a>' ],
                maxZoom: 18
            })
        })
    ],
    target: 'map-poseur',
    view: new ol.View({
     center: ol.proj.fromLonLat([2.33871,48.86194]),
     maxZoom: 25,
     zoom: 17
    })
});

var purple = new ol.style.Style({
    fill: new ol.style.Fill({
        color: 'rgba(128, 0, 128, 0.3)'
    }),
    stroke: new ol.style.Stroke({
        width: 6,
        color: 'rgba(128, 0, 128, 0.8)'
    }),
    image: new ol.style.Circle({
        F: new ol.style.Stroke({
            width: 6,
            color: 'rgba(128, 0, 128, 0.8)'
        }),
        radius: 7
    })
});

// var blue = new ol.style.Style({
//     fill: new ol.style.Fill({
//         color: 'rgba(0, 156, 222, 1.0)'
//     }),
//     text: new ol.style.Text({
//       text: '8',
//       font: '20px sans-serif',
//       fill: new ol.style.Fill({
//         color: "#fff"
//       }),
//       stroke: new ol.style.Stroke({
//         color: "#009cde",
//         width: 3
//       }),
//     }),
//     image: new ol.style.Circle({
//         fill: new ol.style.Stroke({
//             width: 25,
//             color: 'rgba(0, 156, 222, 1.0)'
//         }),
//         radius: 26
//     }),
// });

// var blue2 = new ol.style.Style({
//     fill: new ol.style.Fill({
//         color: 'rgba(0, 156, 222, 1.0)'
//     }),
//     text: new ol.style.Text({
//       text: '25',
//       font: '20px sans-serif',
//       fill: new ol.style.Fill({
//         color: "#fff"
//       }),
//       stroke: new ol.style.Stroke({
//         color: "#009cde",
//         width: 3
//       }),
//     }),
//     image: new ol.style.Circle({
//         fill: new ol.style.Stroke({
//             width: 25,
//             color: 'rgba(0, 156, 222, 1.0)'
//         }),
//         radius: 26
//     }),
// });

var black = new ol.style.Style({
    fill: new ol.style.Fill({
        color: 'rgba(0, 156, 222, 1.0)'
    }),
    text: new ol.style.Text({
      text: 'Paris',
      font: '30px sans-serif',
      fill: new ol.style.Fill({
        color: "#fff"
      }),
      stroke: new ol.style.Stroke({
        color: "#009cde",
        width: 3
      }),
    }),
    image: new ol.style.Circle({
        fill: new ol.style.Stroke({
            width: 25,
            color: 'rgba(0, 156, 222, 1.0)'
        }),
        radius: 26
    }),
});

// var orange = new ol.style.Style({
//     fill: new ol.style.Fill({
//         color: 'rgba(255, 165, 105, 1.0)'
//     }),
//     stroke: new ol.style.Stroke({
//         width: 6,
//         color: 'rgba(255, 165, 105, 1.0)'
//     }),
//     image: new ol.style.Circle({
//         stroke: new ol.style.Stroke({
//             width: 6,
//             color: 'rgba(255, 165, 105, 1.0)'
//         }),
//         radius: 7
//     }),
// });


var markedPlace = new ol.Feature({
     geometry: new ol.geom.Point(ol.proj.fromLonLat([2.33871,48.86194]))
 });

// var markedPlaceLayer = new ol.layer.Vector({
//  source: new ol.source.Vector({
//      features: [markedPlace]
//  }),
//  style: blue
// });


// var markedPlace2 = new ol.Feature({
//      geometry: new ol.geom.Point(ol.proj.fromLonLat([2.3411235,48.8608027]))
//  });

// var markedPlaceLayer2 = new ol.layer.Vector({
//  source: new ol.source.Vector({
//      features: [markedPlace2]
//  }),
//  style: blue2
// });


// const marker = new Overlay({
//   position: pos,
//   positioning: 'center-center',
//   element: document.getElementById('marker'),
//   stopEvent: false,
// });

// map.addLayer(markedPlaceLayer);
// map.addLayer(markedPlaceLayer2);

</script>

<?php include('sidebar-footer.php'); ?>