<?php 
include('../conexion/conexion.php');
// if($conexion)
// 	die("hay conexion");

if(isset($_POST['accion'])){
	$accion=$_POST['accion'];
}else{
	$accion=1;
}

switch($accion){

	case 1://listar todos las convocatorias
	$query = "SELECT tipc_id,tipc_nombre,tipc_descripcion,tipc_estado,tipc_estado as estado,tipc_url,tipc_sigla from tipo_convocatoria";
	$resp = mysqli_query($conexion,$query);
	if (!$resp) {
		die("error en la consulta de Ciudad");
	}else{
		$arreglo["data"]=[];
		while($data=mysqli_fetch_assoc($resp)){
			switch ($data['tipc_estado']) {
				case 1:
				$data['tipc_estado']='<i class="icon-check"></i>';
				break;
				case 0:
				$data['tipc_estado']='<i class="icon-close"></i>';
				break;
			}
			$arreglo["data"][]=$data;
		}
		echo json_encode($arreglo);
	}
	mysqli_free_result($resp);
	break;

	case 2://cargar combo departamentos en modal registrar ciudades
	$cad="";
	$query="SELECT * from departamento";
	$resultado=mysqli_query($conexion,$query);
	if (!$resultado) {
		die("error consulta departamentos");
	}else{
		while($data=mysqli_fetch_assoc($resultado)){
			$cad.='<option value="'.$data['dep_id']. '">'.$data['dep_nombre']."</option>";
		}
		echo $cad;
	}	
	mysqli_free_result($resultado);
	break;

	case 3://guardar convocatorias
	$nombre=$_POST['nombreconvocatoria'];
	$descripcion=$_POST['descripcion'];
	$estado=$_POST['estado'];
	$sigla=$_POST['sigla'];
	$url=$_POST['url'];
	
	$query="INSERT into tipo_convocatoria(tipc_nombre,tipc_descripcion,tipc_estado,tipc_url,tipc_sigla) values('$nombre','$descripcion','$estado','$url','$sigla')";
	$resp=mysqli_query($conexion,$query);
	if(!$resp){
		$informacion["respuesta"] = "ERROR";
	}else{
		$informacion["respuesta"] = "BIEN";
	}
	echo json_encode($informacion);
	// mysqli_free_result($resp);
	break;	

	case 4://borrar convocatoria
	$idborrar=$_POST['idborrar'];
	$q="DELETE FROM tipo_convocatoria where tipc_id='$idborrar'";
	$r=mysqli_query($conexion,$q);
	if (!$r) {
		$informacion["respuesta"]="ERROR";
	}else{
		$informacion["respuesta"]="BIEN";
	}
	echo json_encode($informacion);
	break;

	case 5://llenar combo actualizar ciudades
	$seleccionado=$_POST['seleccionado'];
	$q="SELECT * FROM tipo_convocatoria";
	$r=mysqli_query($conexion,$q);
	$cad='';
	if(!$r){
		die("error");
	}else{
		while ($data=mysqli_fetch_assoc($r)) {
			if ($data['tipc_id'] == $seleccionado)
				$cad.='<option value="'.$data['tipc_estado'].'" selected>'.$data['tipc_estado']."</option>";
			else
				$cad.='<option value="'.$data['tipc_estado']. '">'.$data['tipc_estado']."</option>";
		}
		echo $cad;
	}
	break;

	case 6://actualizar convocatorias
	$nombre=$_POST['actnombre'];
	$descripcion=$_POST['actdescripcion'];
	$estado=$_POST['actestado'];
	$sigla=$_POST['actsigla'];
	$url=$_POST['acturl'];
	$id=$_POST['id'];

	$q="UPDATE tipo_convocatoria SET tipc_nombre='$nombre',tipc_descripcion='$descripcion',tipc_estado='$estado',tipc_url='$url',tipc_sigla='$sigla' where tipc_id='$id'";
	$r=mysqli_query($conexion,$q);
	if (!$r) {
		$informacion['respuesta']="ERROR";
	}else{
		$informacion['respuesta']="BIEN";
	}
	echo json_encode($informacion);
	break;

	








}//fin del switch

?>