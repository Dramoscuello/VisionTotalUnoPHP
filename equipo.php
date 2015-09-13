<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Vision Total</title>
	<?php include 'includes/head_common.php'; ?>
	<link rel="stylesheet" type="text/css" href="css/equipo.css">
	<link rel="stylesheet" href="css/camera.css">
</head>
<body>
	<?php include 'includes/header.php'; ?>
		<div class="body_equipo">
			<div class="container">
				<div class="row">
					<div class="col-md-12 titulo_equipo">
						<h2>Nuestros equipos de trabajo</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-10">
						<div class="camera_wrap camera_emboss" id="camera_wrap_3">
				            <div data-thumb="images/slides_equipos/min/1.jpg" data-src="images/slides_equipos/1.jpg" width="100%">
				            	<div class="camera_caption fadeFromBottom">
				                    Campimetro
				                </div>
				            </div>
				            <div data-thumb="images/slides_equipos/min/3.JPG" data-src="images/slides_equipos/3.JPG">
				            </div>
				            <div data-thumb="images/slides_equipos/min/4.JPG" data-src="images/slides_equipos/4.JPG">
				            	<div class="camera_caption fadeFromBottom">
				                    Microscopio especular
				                </div>
				            </div>
				            <div data-thumb="images/slides_equipos/min/5.JPG" data-src="images/slides_equipos/5.JPG">
				            	<div class="camera_caption fadeFromBottom">
				                    YAG Láser NIDEK
				                </div>
				            </div>
				            <div data-thumb="images/slides_equipos/min/6.JPG" data-src="images/slides_equipos/6.JPG">
				            	<div class="camera_caption fadeFromBottom">
				                    Angiagrafo
				                </div>
				            </div>
				            <div data-thumb="images/slides_equipos/min/8.JPG" data-src="images/slides_equipos/8.JPG">
				            	<div class="camera_caption fadeFromBottom">
				                    Paquimetro
				                </div>
				            </div>
				            <div data-thumb="images/slides_equipos/min/9.JPG" data-src="images/slides_equipos/9.JPG">
				            </div>
				            <div data-thumb="images/slides_equipos/min/10.JPG" data-src="images/slides_equipos/10.JPG">
				            </div>
				            <div data-thumb="images/slides_equipos/min/11.JPG" data-src="images/slides_equipos/11.jpg">
				            	<div class="camera_caption fadeFromBottom">
				                    Tomógrafo
				                </div>
				            </div>
				        </div>
					</div>
				</div>
			</div>
		</div>
	<?php include 'includes/footer.php'; ?>
	<?php include 'includes/foot_common.php'; ?>
	<script src="js/camera.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.mobile.customized.min.js"></script>
    <script>
		jQuery(function(){
			
			jQuery('#camera_wrap_3').camera({
				height: '56%',
				pagination: false,
				thumbnails: true				
			});

		});
	</script>
</body>
</html>