<style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>

<div class="container" id="search-container">
    <input id="search-input" type="text" required autofocus/>
    <button id="search-get" type="submit" onclick='onSearchClick()'>Search For Homes</button>
</div>

<div class="container" id="search-result-container">
    <script>
        var map;
        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                zoom: 18,
                center: new google.maps.LatLng(37.7, 122.5),
                mapTypeId: 'terrain'
            });

            //create a script
            var script = document.createElement('script');
            // This example uses a local copy of the GeoJSON stored at
            // http://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/2.5_week.geojsonp
            script.src = 'https://developers.google.com/maps/documentation/javascript/examples/json/earthquake_GeoJSONP.js';
            document.getElementsByTagName('head')[0].appendChild(script);

        }

        // Loop through the results array and place a marker for each
        // set of coordinates.
        window.eqfeed_callback = function (results) {
            for (var i = 0; i < results.features.length; i++) {
                var coords = results.features[i].geometry.coordinates;
                var latLng = new google.maps.LatLng(coords[1], coords[0]);
                var marker = new google.maps.Marker({
                    position: latLng,
                    map: map
                });
            }
        }

    </script>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWOv3nHrDtvumbxi2wfyzUCLJBiV3ax4k&callback=initMap"
    type="text/javascript"></script>


</div>
