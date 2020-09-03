<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	 <link rel="stylesheet" href="estilo.css">
	
</head>
<body>
	

	<div class="wrap">
		<form method="post" action="contactform.php"><!--$_SERVER PHP_SELF RETORNA OS DADOS PARA A PROPRIA PAGINA -->
			<input type="text" class="form-control" id="nombre" name="name" placeholder="Nome:" value="<?php if(!$enviado && isset($name)) echo $name ?>"> <!--se a variavel enviado é falso  e a variavel nombre foi preenchida entao mantem o que foi escrito -->
			<input type="text" class="form-control" id="correo" name="mail" placeholder="Email:" value="<?php if(!$enviado && isset($mail)) echo $mail ?>">
			<textarea  class="form-control" id="mensaje" name="subject" placeholder="Mensagem"><?php if(!$enviado && isset($subject)) echo $subject ?></textarea>
				<?php if (!empty($errores)): ?>	<!--variavel errores esta vazia, se esta vazia entao exibe a mensagem de alerta -->
					<div class="alert error">
						<?php echo $errores; ?>	<!-- CHAMA A VARIAVEL ERRORES QUE ESTA EM INDEX -->				
					</div>
				<?php elseif ($enviado): ?><!-- SE TODOS OS DADOS ESTAO CORRETOS-->
					<div class="alert success">
						<p>enviado corretamente</p>
					</div>
				<?php endif ?>


			<input type="submit" name="submit" class="btn btn-primary" value="Enviar Email">
		</form>
	</div>	

</body>
</html>
<!-- -->
