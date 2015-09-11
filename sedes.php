<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Vision Total</title>
	<?php include 'includes/head_common.php'; ?>
	<link rel="stylesheet" type="text/css" href="css/sedes.css">
</head>
<body>
	<?php include 'includes/header.php'; ?>
	<div class="body_sedes">
		<div class="container">
	        	<div class="row">
	        		<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 titulo_sedes">
	        			<h2>sedes de visión total</h2>	
	        		</div>
	        	</div>       	
	    </div>
	    <section id="sedeprincipal">
			<div id="map-canvasuno"></div>
			<div class="container">
				<div class="row">
					<div id="principal-info" class="col-xs-12 col-sm-5 col-sm-offset-2 col-md-5 col-md-offset-2 col-lg-5 col-lg-offset-2">
						<h3><span class="icon-location"></span> SEDE PRINCIPAL</h3>
						<div><p>Calle 28 # 7-34 Edificio SOMEC 7894147 – 7894165- Montería- Córdoba</p></div>
						
					</div>
				</div>
			</div>
		</section>
		<section id="sedeayudas">
			<div id="map-canvasdos"></div>
			<div class="container">
				<div class="row">
					<div id="ayudas-info" class="col-xs-12 col-sm-5 col-sm-offset-2 col-sm-5 col-sm-offset-2 col-md-5 col-md-offset-2 col-lg-5 col-lg-offset-2">
						<h3><span class="icon-location"></span> SEDE AYUDAS DIAGNOSTICAS</h3>
						<div><p>Calle 29 N° 5 – 23 - Montería - Córdoba</p></div>
						
					</div>
				</div>
			</div>
		</section>
    </div>
	<?php include 'includes/footer.php'; ?>     
    <?php include 'includes/foot_common.php'; ?>
    <script src="//maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
	<script>
		var map;
		function initialize() 
		{
			var mapOptions = {
				zoom: 19,
				scrollwheel: false,
				center: new google.maps.LatLng(8.763711, -75.897191)
			};
			map = new google.maps.Map(document.getElementById('map-canvasuno'),
			mapOptions);
		}
		google.maps.event.addDomListener(window, 'load', initialize);
	</script>
	<script>
		var map1;
		function initialize() 
		{
			var mapOptions = {
				zoom: 19,
				scrollwheel: false,
				center: new google.maps.LatLng(8.7643206, -75.8966327)
			};
			map1 = new google.maps.Map(document.getElementById('map-canvasdos'),
			mapOptions);
		}
		google.maps.event.addDomListener(window, 'load', initialize);
	</script>
</body>
</html>