<?php 
$conexion = mysqli_connect('localhost', 'bruno', 'bruno123') or die('no se pudo conectar a la bd');
mysql_select_db('prueba_dados',$conexion);
mysql_query('select * from usuarios');
// mysqli('prueba_dados',$conexion);
// $resultados = mysql_query('select * from usuarios');
// $fila = mysql_fetch_object($resultados);
// echo $fila->nome;
 ?>