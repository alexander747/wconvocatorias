<?php
include '../conexion/conexion.php';
$informacion=[];
$accion;

if(isset($_POST['accion'])){
	$accion=$_POST['accion'];
}

switch ($accion) {
	case 1:
		$q="SELECT * from usuarios where usu_correo='$correo' and usu_password='$pass'";
		
		break;
	
	







}//fin del switch
?>