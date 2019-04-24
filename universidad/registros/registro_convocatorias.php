<?php
include '../conexion/conexion.php';
	
$informacion= [];
$accion;

if(isset($_POST['accion'])){
	$accion=$_POST['accion'];
}else{
	$accion=1;
}

switch ($accion) {
	case 1:
		$arreglo=array();
		$q="SELECT * FROM tipo_convocatoria";
		$r = mysqli_query($conexion,$q);
		if(!$r){
			die("error en la consulta");
		}else{
			while($datos=mysqli_fetch_assoc($r)){
				$arreglo["data"][]=$datos;
			}
			echo json_encode($arreglo);
		} 
		break;
	







}//fin switch
?>