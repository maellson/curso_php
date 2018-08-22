<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src='https://api.mapbox.com/mapbox-gl-js/v0.47.0/mapbox-gl.js'></script>
	<link href='https://api.mapbox.com/mapbox-gl-js/v0.47.0/mapbox-gl.css' rel='stylesheet' />
</head>
<body>
<div id='map' style='width: 400px; height: 300px;'></div>
<script>
mapboxgl.accessToken = 'pk.eyJ1IjoibWFlbHNvbiIsImEiOiJjamwxMHVhaXYwYjc2M3FucW5qazhrN2tkIn0.WKEolLCDjxwC2aHj2-BHhQ';
var map = new mapboxgl.Map({
container: 'map',
style: 'mapbox://styles/mapbox/streets-v10'
});
</script>
</body>
</html>