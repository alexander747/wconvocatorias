<?php
include '../conexion/conexion.php';
require_once __DIR__.'/../conexion/pass_crypt.php';
$pass = new Pass_crypt();


$informacion=[];
$accion;

if(isset($_POST['accion'])){
	$accion=$_POST['accion'];
}


switch ($accion) {
	case 1:
	$contraseña = $_POST['password'];
	$user = $_POST['email'];

	$q="SELECT * from usuarios where usu_correo='$user'";
	$r=mysqli_query($conexion,$q);
	
	if (!$r){
		die("no se realizo la consulta");
	}else{
		$respuesta = mysqli_fetch_array($r);
		if ($respuesta>0) {
			$old=$respuesta[12];
			$respass = $pass->check_value($contraseña,$old);
			if ($respass) {
				session_start();
				$_SESSION['id']=$respuesta[0];
				$_SESSION['nombre']=$respuesta[1];
				$_SESSION['apellido']=$respuesta[2];
				echo "done";
			}
		}else{
			echo "bad";
		}
	}
	break;
	
	







}//fin del switch
?>