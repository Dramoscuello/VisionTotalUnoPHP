<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Vision Total</title>
	<?php include 'includes/head_common.php'; ?>
	<link rel="stylesheet" type="text/css" href="css/contacto.css">
</head>
<body>
	<?php include 'includes/header.php'; ?>
	<div class="body_contacto">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 titulo_contacto">
					<h2><span class="glyphicon glyphicon-envelope"></span> CONTACTO</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
					<form class="form-horizontal">
		              <div class="form-group">
		                <label for="nombre" class="col-md-4 control-label"><span class="glyphicon glyphicon-user"></span> Nombres y apellidos:</label>
		                <div class="col-md-8">
		                  <input type="text" class="form-control nombre_contacto" id="nombre" placeholder="Nombres y apellidos" required>
		                </div>
		              </div>
		              <div class="form-group">
		                <label for="email" class="col-md-4 control-label"><span class="glyphicon glyphicon-inbox"></span> Email:</label>
		                <div class="col-md-8">
		                  <input type="email" class="form-control" id="email" placeholder="Email" required>
		                </div>
		              </div>
		                <div class="form-group">
		                <label for="telefono" class="col-md-4 control-label"><span class="glyphicon glyphicon-earphone"></span> Telefono:</label>
		                <div class="col-md-8">
		                  <input type="tel" class="form-control" id="telefono" placeholder="Telefono (opcional)">
		                </div>
		              	</div>
		              	<div class="form-group">
		                <label for="asunto" class="col-md-4 control-label"><span class="glyphicon glyphicon-tag"></span> Asunto:</label>
		                <div class="col-md-8">
		                  <input type="text" class="form-control" id="asunto" placeholder="Asunto">
		                </div>
		              	</div>
		                <div class="form-group">
		                <label for="mensaje" class="col-md-4 control-label"><span class="glyphicon glyphicon-pencil"></span> Mensaje:</label>
		                <div class="col-md-8">
		                  <textarea class="form-control" rows="3" id="mensaje" placeholder="Escribemos algo..." required></textarea>
		                </div>
		              </div>
		              <div class="form-group">
		                <div class="col-sm-offset-2 col-sm-10">
		                  <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-send"></span> Enviar</button>
		                </div>
		              </div>
		            </form>
				</div>
				<div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
					<img src="images/contacto.jpg" alt="imagen contacto, vision total" class="imagen_contacto img-thumbnail">
				</div>
			</div>
		</div>
	</div>
	<?php include 'includes/footer.php'; ?>
	<?php include 'includes/foot_common.php'; ?>
</body>
</html>