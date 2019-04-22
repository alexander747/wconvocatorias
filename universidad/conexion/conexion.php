<?php

$server='localhost';
$user='root';
$password='';
$database='convocatorias';

$conexion = mysqli_connect($server, $user, $password, $database);
mysqli_set_charset($conexion,"utf8");
if (!$conexion){
  die('Error de Conexi��n: ' . mysqli_connect_errno());
}

//return $conexion;

