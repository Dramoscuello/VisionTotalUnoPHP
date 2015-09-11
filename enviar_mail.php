<?php 
	$remitente_nombre = $_POST["nombre_remitente"];
	$remitente_email = $_POST["email_remitente"];
	$telefono = $_POST["telefono_remitente"];
	$asunto = $_POST["asunto_remitente"];
	$mensaje = $_POST["mensaje_remitente"];
	$destinatario = "dramoscuello1@gmail.com";
	$cabeceras = "MIME-Version: 1.0\r\n";
	$cabeceras .= "Content-type: text/html; charset=iso-8859-1 \r\n";
	$cabeceras .= "From $remitente_nombre \r\n";

	include_once("class.phpmailer.php");
	include_once("class.smtp.php");
	include_once("PHPMailerAutoload.php");
	

	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = "ssl";
	$mail->Host = "ssl://smtp.gmail.com";
	$mail->Port = 465;
	$mail->SetFrom  ("dramos.cuello@gmail.com", "deimer ramos");
	$mail->AddAddress ("dramoscuello1@gmail.com","deimer cuello");
	$mail->Username = "dramos.cuello@gmail.com";
	$mail->Password = "deimer030293";
	$mail->Subject = $asunto;
	$mail->Body = $mensaje;
	$mail->wordwrap = 50;
	$mail->MsgHTML($mensaje);

	if ($mail->Send()) {
		$respuesta = "El mensaje se ha enviado conrrectamente";		
	}else{
		$respuesta = "Ocurrio un problema ";
		$respuesta .= "Error: ".$mail->ErrorInfo;
	}
	
	header("location: contacto.php?respuesta=$respuesta")
?>