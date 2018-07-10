<?php
	require 'mail.config.php';

	# Configuracion del envio
	$mail->setFrom('mi@correo.com', 'Yo Mismo');			// ◄ Emisor
	$mail->addAddress('##########@#####.###', '#####');		// ◄ Destinatario
	//$mail->addReplyTo('info@example.com', 'Information');	// ◄ E-Mail de respuesta (opcional)
	//$mail->addCC('cc@example.com');						// ◄ E-Mail adicional en Copia Compartida (opcional)
    //$mail->addBCC('bcc@example.com');						// ◄ E-Mail adicional en Copia Compartida Oculta (opcional)
	
	# Configuracion del email
	$mail->isHTML(true);									// ◄ Soporte para HTML (true/false)
	$mail->Subject = "#####";								// ◄ Asunto del E-Mail
	$mail->Body = "*******";								// ◄ Cuerpo del E-Mail
	$mail->SMTPDebug = 2;									// ◄ Visualizador para testeo (0: apagado | 1: mensajes del cliente | 2: mensajes del cliente y servidor)

	$mail->send();
?>