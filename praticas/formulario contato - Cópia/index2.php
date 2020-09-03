<?php 
$errores='';
$enviado='';

if (isset($_POST['submit'])){
	$nombre = $_POST['nombre']; 
	$correo = $_POST['correo'];
	$mensaje = $_POST['mensaje'];
				//VALIDAÇÃO DO NOME
	if(!empty($nombre)){ //SE TEM ALGUM CONTEUDO SE ESTA VAZIO, VERIFICA SE TEM ALGUMA COISA DE ERRADO COM O NOME
		$nombre=trim($nombre); //TRIM EVITA QUE O USUARIO ESCREVA ALGO NO INICIO OU NO FINAL
		$nombre=filter_var($nombre, FILTER_SANITIZE_STRING); //ELIMINA CARACTERES QUE NÃO SERVEM
	}else{
		$errores .='Por favor ingresa un nombre <br />'; // concatena a mensagem de erro
	}
				// VALIDAÇÃO DO EMAIL
	if(!empty($correo)){
		$correo = filter_var ($correo, FILTER_SANITIZE_EMAIL);
		if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){
			$errores .= 'Por favor ingressa um email valido <br />';
		}
	}else{
		$errores .= 'Por favor ingressa um email <br /> ';
	}
	// VALIDAÇÃO DO TEXTO
	if(!empty($mensaje)){ 
		$mensaje = htmlspecialchars($mensaje); //VERIFICAR SE ESTA SENDO COLOCADO CODIGO HTML NO TEXTO
		$mensaje = trim($mensaje);
		$mensaje = stripslashes($mensaje);
	}else{
		$errores .= 'Por favor insira a mensagem <br />';
	}
	if (!$errores) {
		$enviar_a ='2011brunofernandes@gmail.com';
		$assunto = 'correo enviado desde mipagina.com';
		$mensaje_preparado = "de: $nombre \n";
		$mensaje_preparado .= "correo: $correo \n";
		$mensaje_preparado .= "Mensaje: " . $mensaje;

		//mail($enviar_a, $asunto, $mensaje_preparado);
		$enviado = 'true';
	}




}
require 'index.view.php';
 ?>