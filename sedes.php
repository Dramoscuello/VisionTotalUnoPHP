<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Vision Total</title>
	<?php include 'includes/head_common.php'; ?>
	<link rel="stylesheet" type="text/css" href="css/sedes.css">
	<link rel="stylesheet" type="text/css" href="css/default-skin/default-skin.css">
	<link rel="stylesheet" type="text/css" href="css/photoswipe.css">
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
						<span class="icon-minus hidden-xs" id="principal_icon"></span>
						<h3 id="principal_titulo"><span class="icon-location"></span> <strong>SEDE PRINCIPAL</strong></h3>
						<div id="principal_text"><p>Calle 28 # 7-34 Edificio SOMEC 7894147 – 7894165- Montería- Córdoba</p></div>
						<div class="my-gallery" id="principal_galeria">
				            <figure>
				                <a href="images/galeria/sede28.jpg"  class="img_min" itemprop="contentUrl" data-size="823x549">
				                <img src="images/galeria/min/sede28.jpg" itemprop="thumbnail" alt="sede 28, vision total" />
				                </a>							  
				            </figure>
				            <figure>
				                <a href="images/galeria/somec.jpg"  class="img_min" itemprop="contentUrl" data-size="823x617">
				                <img src="images/galeria/min/somec.jpg" itemprop="thumbnail" alt="edificio somec, vision total" />
				                </a>
				            </figure>
				        </div>
				        <h4 id="titulo_ul_principalp1">Piso 1</h4>
					       <ul id="ul_principalp1">
					       		<li>Recepción central de citas</li>
					       		<li>2 consultorios oftalmología</li>
					       		<li>Caja</li>
								<li>Servicio Farmacéutico</li>
								<li>Programación de cirugías</li>
					       </ul>
					    <h4 id="titulo_ul_principalp2">Piso 2</h4>
					    <ul id="ul_principalp2">
					    	<li>4 Consultorios oftalmología</li>
					    	<li>1 consultorio de Optometría</li>
					    	<li>Administración</li>
					    	<li>2 Recepciones</li>
					    	<li>Gestión de Calidad</li>
					    	<li>Gestión de Recursos Humanos y Seguridad y Salud en el Trabajo</li>
					    	<li>Oficina de SIAU</li>
					    </ul>
					    <h4 id="titulo_ul_principalp3">Piso 3</h4>
					    <ul id="ul_principalp3">2 salas Cirugía</ul>
					</div>
				</div>
			</div>
		</section>
		<section id="sedeayudas">
			<div id="map-canvasdos"></div>
			<div class="container">
				<div class="row">
					<div id="ayudas-info" class="col-xs-12 col-sm-5 col-sm-offset-2 col-sm-5 col-sm-offset-2 col-md-5 col-md-offset-2 col-lg-5 col-lg-offset-2">
						<span class="icon-minus hidden-xs" id="ayudas_icon"></span>
						<h3 id="ayudas_titulo"><span class="icon-location"></span> <strong>SEDE AYUDAS DIAGNOSTICAS</strong></h3>
						<div id="ayudas_text"><p>Calle 29 N° 5 – 23 - Montería - Córdoba</p></div>
						<div class="my-gallery" id="ayudas_galeria">
				            <figure>
				                <a href="images/galeria/sede29.jpg"  class="img_min" itemprop="contentUrl" data-size="611x620">
				                <img src="images/galeria/min/sede29.jpg" itemprop="thumbnail" alt="sede 29, vision total" />
				                </a>							  
				            </figure>
				        </div>
				        <h4 id="titulo_ayuda">Sede ayudas diagnósticas</h4>
				        <ul id="ul_ayuda">
				        	<li>Sala de  Exámenes y ayudas Diagnosticas</li>
				        	<li>2 Consultorios oftalmológicos</li>
				        	<li>Facturación</li>
				        	<li>Call Center</li>
				        </ul>			
					</div>
				</div>
			</div>
		</section>
		<section id="sedeapartado">
			<div id="map-canvastres"></div>
			<div class="container">
				<div class="row">
					<div id="apartado-info" class="col-xs-12 col-sm-5 col-sm-offset-2 col-md-5 col-md-offset-2 col-lg-5 col-lg-offset-2">
						<span class="icon-minus hidden-xs" id="apartado_icon"></span>
						<h3 id="apartado_titulo"><span class="icon-location"></span> <strong>APARTADO – ANTIOQUIA</strong></h3>
						<div id="apartado_text"><p>Carrera 103 N° 107-20 PISO 2 Barrio Vélez - 094-8281716 – 3215443600</p></div>
						<h4 id="titulo_apartadop2">Piso 2</h4>
						<ul id="ul_p2">
							<li>Consultorios  Oftalmológicos</li>
							<li>Recepción</li>
							<li>Oficina de SIAU</li>
							<li>Administración</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
    </div>
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">    
    <div class="pswp__bg"></div>    
    <div class="pswp__scroll-wrap">        
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>        
        <div class="pswp__ui pswp__ui--hidden">
            <div class="pswp__top-bar">                
                <div class="pswp__counter"></div>
                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>                
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                      <div class="pswp__preloader__cut">
                        <div class="pswp__preloader__donut"></div>
                      </div>
                    </div>
                </div>
            </div>
            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div> 
            </div>
            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
            </button>
            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
            </button>
            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>
          </div>
    	</div>
	</div>
	<?php include 'includes/footer.php'; ?>     
    <?php include 'includes/foot_common.php'; ?>
    <script type="text/javascript" src="js/photoswipe.min.js"></script>
    <script type="text/javascript" src="js/photoswipe-galeria.js"></script>
    <script src="//maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script type="text/javascript" src="js/photoswipe-ui-default.min.js"></script>
	<script>
		var map;
		function initialize(){
			var mapOptions = {
				zoom: 19,
				scrollwheel: false,
				center: new google.maps.LatLng(8.753823, -75.883724)
			};
			map = new google.maps.Map(document.getElementById('map-canvasuno'),
			mapOptions);
		}
		google.maps.event.addDomListener(window, 'load', initialize);
	</script>
	<script>
		var map2;
		function initialize(){
			var mapOptions = {
				zoom: 19,
				scrollwheel: false,
				center: new google.maps.LatLng(7.8828061, -76.6339467)
			};
			map2 = new google.maps.Map(document.getElementById('map-canvastres'),
			mapOptions);
		}
		google.maps.event.addDomListener(window, 'load', initialize);
	</script>
	<script>
		var map1;
		function initialize(){
			var mapOptions = {
				zoom: 19,
				scrollwheel: false,
				center: new google.maps.LatLng(8.7553605, -75.8847878)
			};
			map1 = new google.maps.Map(document.getElementById('map-canvasdos'),
			mapOptions);
		}
		google.maps.event.addDomListener(window, 'load', initialize);
	</script>
	<script type="text/javascript">
		$(document).ready(function(){
			var menos = true;
			function main(){
				if (menos == true) {
					$('#principal_icon').removeClass('icon-minus');
					$('#principal_icon').addClass('icon-plus');
					document.getElementById('principal-info').style.height = "20px";
					document.getElementById('principal_titulo').style.display = "none";
					document.getElementById('titulo_ul_principalp1').style.display = "none";
					document.getElementById('ul_principalp1').style.display = "none";
					document.getElementById('titulo_ul_principalp2').style.display = "none";
					document.getElementById('ul_principalp2').style.display = "none";
					document.getElementById('titulo_ul_principalp3').style.display = "none";
					document.getElementById('ul_principalp3').style.display = "none";
					document.getElementById('principal_text').style.display = "none";
					document.getElementById('principal_galeria').style.display = "none";
					menos = false;
				}else{
					$('#principal_icon').removeClass('icon-plus');
					$('#principal_icon').addClass('icon-minus');
					document.getElementById('principal-info').style.height = "300px";
					document.getElementById('principal-info').overflow = "auto";
					document.getElementById('principal_titulo').style.display = "block";
					document.getElementById('titulo_ul_principalp1').style.display = "block";
					document.getElementById('ul_principalp1').style.display = "block";
					document.getElementById('titulo_ul_principalp2').style.display = "block";
					document.getElementById('ul_principalp2').style.display = "block";
					document.getElementById('titulo_ul_principalp3').style.display = "block";
					document.getElementById('ul_principalp3').style.display = "block";
					document.getElementById('principal_text').style.display = "block";
					document.getElementById('principal_galeria').style.display = "block";
					menos = true;
				}
				
			}
			var ayuda = true;
			function ayudasf(){
				if (ayuda == true) {
					$('#ayudas_icon').removeClass('icon-minus');
					$('#ayudas_icon').addClass('icon-plus');
					document.getElementById('ayudas-info').style.height = "20px";
					document.getElementById('ayudas-info').style.overflow = "auto";
					document.getElementById('ayudas_titulo').style.display = "none";
					document.getElementById('ayudas_text').style.display = "none";
					document.getElementById('titulo_ayuda').style.display = "none";
					document.getElementById('ul_ayuda').style.display = "none";
					document.getElementById('ayudas_galeria').style.display = "none";
					ayuda = false;
				}else{
					$('#ayudas_icon').removeClass('icon-plus');
					$('#ayudas_icon').addClass('icon-minus');
					document.getElementById('ayudas-info').style.height = "300px";
					document.getElementById('ayudas-info').style.overflow = "auto";
					document.getElementById('ayudas_titulo').style.display = "block";
					document.getElementById('ayudas_text').style.display = "block";
					document.getElementById('titulo_ayuda').style.display = "block";
					document.getElementById('ul_ayuda').style.display = "block";
					document.getElementById('ayudas_galeria').style.display = "block";
					ayuda = true;
				}
				
			}
			var apartv = true;
			function apartadofunc(){
				if (apartv == true) {
					$('#apartado_icon').removeClass('icon-minus');
					$('#apartado_icon').addClass('icon-plus');
					document.getElementById('apartado-info').style.height = "20px";
					document.getElementById('apartado_titulo').style.display = "none";
					document.getElementById('apartado_text').style.display = "none";
					document.getElementById('titulo_apartadop2').style.display = "none";
					document.getElementById('ul_p2').style.display = "none";
					apartv = false;
				}else{
					$('#apartado_icon').removeClass('icon-plus');
					$('#apartado_icon').addClass('icon-minus');
					document.getElementById('apartado-info').style.height = "300px";
					document.getElementById('apartado_titulo').style.display = "block";
					document.getElementById('apartado_text').style.display = "block";
					document.getElementById('titulo_apartadop2').style.display = "block";
					document.getElementById('ul_p2').style.display = "block";
					apartv = true;
				}
				
			}

			$('#principal_icon').on('click', main);
			$('#ayudas_icon').on('click', ayudasf);
			$('#apartado_icon').on('click', apartadofunc);
		});
	</script>
	

</body>
</html>