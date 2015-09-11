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
						<h3><span class="icon-location"></span> <strong>SEDE PRINCIPAL</strong></h3>
						<div><p>Calle 28 # 7-34 Edificio SOMEC 7894147 – 7894165- Montería- Córdoba</p></div>
						<div class="my-gallery">
				            <figure>
				                <a href="images/galeria/sede28.jpg" itemprop="contentUrl" data-size="785x490">
				                <img src="images/galeria/min/sede28.jpg" itemprop="thumbnail" alt="Image description" />
				                </a>							  
				            </figure>
				            <figure>
				                <a href="images/galeria/somec.jpg" itemprop="contentUrl" data-size="823x617">
				                <img src="images/galeria/min/somec.jpg" itemprop="thumbnail" alt="Image description" />
				                </a>
				            </figure>
				        </div>
					</div>
				</div>
			</div>
		</section>
		<section id="sedeayudas">
			<div id="map-canvasdos"></div>
			<div class="container">
				<div class="row">
					<div id="ayudas-info" class="col-xs-12 col-sm-5 col-sm-offset-2 col-sm-5 col-sm-offset-2 col-md-5 col-md-offset-2 col-lg-5 col-lg-offset-2">
						<h3><span class="icon-location"></span> <strong>SEDE AYUDAS DIAGNOSTICAS</strong></h3>
						<div><p>Calle 29 N° 5 – 23 - Montería - Córdoba</p></div>
						<div class="my-gallery">
				            <figure>
				                <a href="images/galeria/sede29.jpg" itemprop="contentUrl" data-size="611x620">
				                <img src="images/galeria/min/sede29.jpg" itemprop="thumbnail" alt="Image description" />
				                </a>							  
				            </figure>
				        </div>						
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