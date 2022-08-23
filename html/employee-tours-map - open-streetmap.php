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

		<div class="circle-icon ml-4 mt-1">
			<a href="employee-tours.php">
				<img src="assets/img/icons/list2.png" />
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

		<div class="tour-today btn-white-blue">
			<a href="javascript:void(0)">Aujourd'hui</a>
		</div>

		<div class="circle-icon ml-3 mt-1">
			<a href="javascript:void(0)" id="tour-id">
				<img src="assets/img/icons/blue-plus-white.png" />
			</a>
		</div>

		<div class="tour-gray-icons" style="display:none;">
			<div class="row">
				<div class="col-lg-1" style="max-width: 50px;">
					<span class="tour-gray-text">Valider</span>
				</div>
				<div class="col-lg-1" style="max-width: 60px;">
					<span class="tour-gray-text">Figer</span>
				</div>
				<div class="col-lg-2" style="max-width: 75px;">
					<span class="tour-gray-text">Enchanger</span>
				</div>
				<div class="col-lg-2" style="max-width: 75px;">
					<span class="tour-gray-text">Optimiser</span>
				</div>
				<div class="col-lg-2" style="max-width: 75px;">
					<span class="tour-gray-text">Rafraichir</span>
				</div>
				<div class="col-lg-3" style="min-width: 80px;">
					<span class="tour-gray-text">Afficher les trajets</span>
				</div>
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
		<div id="map-poseur" style="height: 100%;width: 100%"></div>
	</div>

	<div class="col-lg-3" >
		<div class="col-white12-col">
			<div class="rounded-corner bg-white col-white12">
				<nav>
                    <div class="nav nav-tabs tour-navs" id="nav-tour-details-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-non-affectes-tab" data-toggle="tab" href="#nav-non-affectes" role="tab" aria-controls="nav-tour" aria-selected="true">
                            <span class="tab-icon icon-chead"></span><span class="tab-label">Non affectés</span>
                        </a>
                        <a class="nav-item nav-link" id="nav-collaborateurs-tab" data-toggle="tab" href="#nav-collaborateurs" role="tab" aria-controls="nav-collaborateurs" aria-selected="true">
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

var blue = new ol.style.Style({
    fill: new ol.style.Fill({
        color: 'rgba(0, 156, 222, 1.0)'
    }),
    text: new ol.style.Text({
      text: '8',
      font: '20px sans-serif',
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

var blue2 = new ol.style.Style({
    fill: new ol.style.Fill({
        color: 'rgba(0, 156, 222, 1.0)'
    }),
    text: new ol.style.Text({
      text: '25',
      font: '20px sans-serif',
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

var markedPlaceLayer = new ol.layer.Vector({
 source: new ol.source.Vector({
     features: [markedPlace]
 }),
 style: blue
});


var markedPlace2 = new ol.Feature({
     geometry: new ol.geom.Point(ol.proj.fromLonLat([2.3411235,48.8608027]))
 });

var markedPlaceLayer2 = new ol.layer.Vector({
 source: new ol.source.Vector({
     features: [markedPlace2]
 }),
 style: blue2
});

// var pos = ol.proj.fromLonLat([<?php echo $clientDetail['logitude']; ?>,<?php echo $clientDetail['latitude']; ?>]);
// const marker = new Overlay({
//   position: pos,
//   positioning: 'center-center',
//   element: document.getElementById('marker'),
//   stopEvent: false,
// });

map.addLayer(markedPlaceLayer);
map.addLayer(markedPlaceLayer2);

</script>

<?php include('sidebar-footer.php'); ?>