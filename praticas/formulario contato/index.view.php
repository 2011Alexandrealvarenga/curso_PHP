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
		<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> "><!--$_SERVER PHP_SELF RETORNA OS DADOS PARA A PROPRIA PAGINA -->
			<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre:" value="<?php if(!$enviado && isset($nombre)) echo $nombre ?>"> <!--se a variavel enviado é falso  e a variavel nombre foi preenchida entao mantem o que foi escrito -->
			<input type="text" class="form-control" id="correo" name="correo" placeholder="Correo:" value="<?php if(!$enviado && isset($correo)) echo $correo ?>">
			<textarea  class="form-control" id="mensaje" name="mensaje" placeholder="Mensagem"><?php if(!$enviado && isset($mensaje)) echo $mensaje ?></textarea>
				<?php if (!empty($errores)): ?>	<!--variavel errores esta vazia, se esta vazia entao exibe a mensagem de alerta -->
					<div class="alert error">
						<?php echo $errores; ?>	<!-- CHAMA A VARIAVEL ERRORES QUE ESTA EM INDEX -->				
					</div>
				<?php elseif ($enviado): ?><!-- SE TODOS OS DADOS ESTAO CORRETOS-->
					<div class="alert success">
						<p>enviado corretamente</p>
					</div>
				<?php endif ?>


			<input type="submit" name="submit" class="btn btn-primary" value="Enviar Correo">
		</form>
	</div>	

</body>
</html>
<!-- -->
