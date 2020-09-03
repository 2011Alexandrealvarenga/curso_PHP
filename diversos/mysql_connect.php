<?php 
$conexion = mysql_connect('locahost', 'root', 'A258789a+') or die('nao ha conexao');
mysql_select_db('bd_conexao',$conexion);
$resultados = mysql_query('select * from nome');
echo $resultados;
?>