<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Vision Total</title>
	<?php include 'includes/head_common.php'; ?>
	<link rel="stylesheet" type="text/css" href="css/indicaciones_pacientes.css">
</head>
<body>
	<?php include 'includes/header.php'; ?>
	
	<div class="body_indicaciones">
		<div class="container">
			<div class="row">
				<div class="col-md-12 titulo_indicaciones">
					<h2>indicaciones pre y post operatorias</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div>
					  <!-- Nav tabs -->
					  <ul class="nav nav-tabs" role="tablist">
					    <li role="presentation" class="active"><a href="#pre" aria-controls="pre" role="tab" data-toggle="tab"><strong>PRE OPERATORIAS</strong></a></li>
					    <li role="presentation"><a href="#post" aria-controls="post" role="tab" data-toggle="tab"><strong>POST OPERATORIAS</strong></a></li>
					  </ul>

					  <!-- Tab panes -->
					  <div class="tab-content">
					    <div role="tabpanel" class="tab-pane active" id="pre">
					    	<h3>PARA SER ATENDIDO USTED NECESITA:</h3>
					    	<p>Al momento del ingreso usted debe identificarse ante el personal de salud con su nombre  completo, cedula  presentar los siguientes documentos:</p>
					    	<ul>
					    		<li>Documento de identidad: cedula de ciudadanía, tarjeta de identidad o registro civil.</li>
					    		<li>Autorizaciones de servicio </li>
					    		<li>Orden medica</li>
					    		<li>Recuerde venir siempre con acompañante responsable de usted. </li>
					    		<li>Venir   20 minutos antes de su cita</li>
					    		<li>No olvide firmar el recibido de entrega de historia clínica y el recibido de satisfacción del servicio.</li>
					    		<li>Traer valor de cuota moderadora o copagos  si aplica</li>
					    	</ul>
						</div>
					    <div role="tabpanel" class="tab-pane" id="post">
					    	<h3>PARA SU EGRESO  USTED NECESITA:</h3>
					    	<ul>
					    		<li>Formula Médica</li>
					    		<li>Orden de cita de revisión y exámenes de control</li>
					    		<li>Recibo de pago de sus obligaciones por copagos y  cuotas moderadoras</li>
								<li>Recomendaciones PRE Y POST Operatorias.</li>
					    	</ul>
					    </div>
					  </div>

					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include 'includes/footer.php'; ?>
	<?php include 'includes/foot_common.php'; ?>
	
</body>
</html>