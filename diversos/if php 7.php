<?php 
$nombre = isset($_GET['nombre']) ? $_GET['nombre'] : 'anonimo';
// forma de IF PHP 7 SE TEM NOME ENTAO EXIBE NOME SENÃO EXIBE ANONIMO

// OU
$nombre = $_GET ['nombre'] ?? 'anonimo';
// forma de IF PHP 7 SE TEM NOME ENTAO EXIBE NOME SENÃO EXIBE ANONIMO
 ?>