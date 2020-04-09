<html>
	<head>
  <title>leaflet-kmz</title>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <style> html, body, #map { height: 100%; width: 100%; padding: 0; margin: 0; } </style>
		<link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css" />
		<script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
		<!-- embedd library jquery
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> -->
    <!-- Leaflet-KMZ -->
    <script src="https://unpkg.com/leaflet-kmz@latest/dist/leaflet-kmz.js"></script>
		<style>
			#map {position: absolute;top: 0;bottom: 0;left: 0;right: 0;}
		</style>
	</head>

	<body>
		<div id="map"></div>
		<script>
            var map = L.map('map');
            map.setView(new L.LatLng(-8.455383, 115.192969), 10);
          
            var OpenTopoMap = L.tileLayer('https://api.maptiler.com/maps/streets/{z}/{x}/{y}.png?key=4oECnlCscQSAbtknotNK', {
              maxZoom: 17,
              attribution: 'Map data: &copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>, <a href="http://viewfinderpanoramas.org">SRTM</a> | Map style: &copy; <a href="https://opentopomap.org">OpenTopoMap</a> (<a href="https://creativecommons.org/licenses/by-sa/3.0/">CC-BY-SA</a>)',
              opacity: 0.90
            });
            OpenTopoMap.addTo(map);
          
            // Instantiate KMZ parser (async)
            var kmzParser = new L.KMZParser({
              onKMZLoaded: function(layer, name) {
                control.addOverlay(layer, name);

                layer.addTo(map);
              }
            });
                
            // Add remote KMZ files as layers (NB if they are 3rd-party servers, they MUST have CORS enabled)
            kmzParser.load('bali-kabupaten.kmz');
            // kmzParser.load('regions.kmz');
            // kmzParser.load('capitals.kmz', { interactive: true });
            // kmzParser.load('globe.kmz', { ballon: false });
            // kmzParser.load('multigeometry.kmz', { pointable: false });
            
            var control = L.control.layers(null, null, { collapsed:false }).addTo(map);
          </script>
	</body>
</html>