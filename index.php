<!DOCTYPE html>
<html>
	<head>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>

		<script type="text/javascript"
      			src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD_M34eZg0zFUjwYltQ51lgZg3RqEkfqKc" sensor=true>
    	</script>

		<title>HAUT LOMAMI</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="style.css" type="text/css" />

	<script type="text/javascript">

		var map;
		
		function initialise(location) 
		{
			console.log(location);
			var mapOptions = {
  			center: new google.maps.LatLng(-8.1602567, 25.7435417,8),
  			zoom: 8
			};

			map = new google.maps.Map(document.getElementById("map-canvas"),
				mapOptions);
		}

		$(document).ready(function()
		{
			navigator.geolocation.getCurrentPosition(initialise);
		});


	</script>
	

	</head>

	<body>

		<div id="banner">
			<h1>Haut Lomami</h1>	
		</div>

		<div id="map-canvas">
					
		</div>

		<div id="foot">
				<p id="copyright">Copyright &copy; MBUYAMBA MUTOMBO BEATRICE ET NZEBA KABANGA OLGA</p>
		</div>

	</body>
</html>