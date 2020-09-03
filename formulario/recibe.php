<?php 

//print_r($_POST);//variavel que recebe os valores do formulario

$nombre = $_POST['nombre'];
$sexo = $_POST['sexo'];
$year = $_POST['year'];
$terminos = $_POST['terminos'];

echo 'Oi,' . $nombre . ' es ' . $sexo;


 ?>