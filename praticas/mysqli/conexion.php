<?php 
$conexion = new mysqli('localhost','bruno','bruno123','prueba_datos');
if ($conexion->connect_errno){
  die('lo siento');
} else{
  $sql = 'select * from usuarios';
  $resultado = $conexion->query($sql);
  echo $resultado->num_rows;
}

?>