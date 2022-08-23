
  <body>
    <div id="map"></div>

    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    <!-- <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCkdyai5-p_kXTroX-gSz_mz-xeQ8Ht1iY&callback=initMap&v=weekly&channel=2"
      async
    ></script> -->
        @php
            $key =  \UserHelper::$google_map_key;
        @endphp
        <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=@php echo $key  @endphp&sensor=false"></script>

<style>

    #map {
    height: 100%;
    }

    body {
    height: 100%;
    margin: 0;
    padding: 0;
    }
</style>



<script>
    var map;
    var mapOptions = { center: new google.maps.LatLng(46.631949,1.852307), zoom: 17,
    mapTypeId: google.maps.MapTypeId.ROADMAP };

    function initialize()
    {
        map = new google.maps.Map(document.getElementById("map"), mapOptions);

        var userCoor = [["a",46.630443, 1.850901],
                        ["b", 46.630872,1.851835],
                        ["c",46.631949,1.852307],
                        ["d",46.632069,1.853320]
                    ];

        var userCoorPath = [new google.maps.LatLng(46.630443, 1.850901),
                            new google.maps.LatLng(46.630872,1.851835),
                            new google.maps.LatLng(46.631949,1.852307),
                            new google.maps.LatLng(46.632069,1.853320)
                        ]

        var userCoordinate = new google.maps.Polyline({
        path: userCoorPath,
        strokeColor: "#FF0000",
        strokeOpacity: 1,
        strokeWeight: 2
        });
        userCoordinate.setMap(map);

        // var infowindow = new google.maps.InfoWindow();

        var marker, i;

        for (i = 0; i < userCoor.length; i++)
        {
            marker = new google.maps.Marker({
                position: new google.maps.LatLng(userCoor[i][1], userCoor[i][2]),
                map: map
            });


            // google.maps.event.addListener(marker, 'click', (function(marker, i) {
            //     return function() {
            //     infowindow.setContent(userCoor[i][0]);
            //     infowindow.open(map, marker);
            //     }
            // })(marker, i));
        }

    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>


<!-- <script>
    // This example creates a 2-pixel-wide red polyline showing the path of
// the first trans-Pacific flight between Oakland, CA, and Brisbane,
// Australia which was made by Charles Kingsford Smith.
function initMap() {
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 17,
    center: { lat: 46.437714, lng: -71.022094 },
    mapTypeId: "terrain",
  });
  const flightPlanCoordinates = [
    { lat:46.442508, lng: -71.017843},
    { lat:46.440744, lng:-71.020593 },
    { lat:46.438069, lng:-71.017221 },
    { lat:46.438894, lng:-71.015975},
  ];
  const flightPath = new google.maps.Polyline({
    path: flightPlanCoordinates,
    geodesic: true,
    strokeColor: "#FF0000",
    strokeOpacity: 1.0,
    strokeWeight: 2,
  });

  flightPath.setMap(map);
}
</script> -->
