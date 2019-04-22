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

	case 1://listar todos las ciudades
	$query = "SELECT c.ciu_id idC,c.ciu_codigo coC,c.ciu_nombre nomC, d.dep_nombre nomD, d.dep_id idD from ciudad c INNER JOIN departamento d on(d.dep_id=c.departamento_dep_id)";
	$resp = mysqli_query($conexion,$query);
	if (!$resp) {
		die("error en la consulta de Ciudad");
	}else{
		$arreglo["data"]=[];
		while($data=mysqli_fetch_assoc($resp)){
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

	case 3:
	$nombre=$_POST['nombreciudad'];
	$codigo=$_POST['codigociudad'];
	$codigodepto=$_POST['selectDepto'];
	
	$query="INSERT into ciudad(departamento_dep_id,ciu_codigo,ciu_nombre) values('$codigodepto','$codigo','$nombre')";
	$resp=mysqli_query($conexion,$query);
	if(!$resp){
		$informacion["respuesta"] = "ERROR";
	}else{
		$informacion["respuesta"] = "BIEN";
	}
	echo json_encode($informacion);
	// mysqli_free_result($resp);
	break;	

	case 4:
	$idborrar=$_POST['idborrar'];
	$q="DELETE FROM ciudad where ciu_id='$idborrar'";
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
	$q="SELECT * FROM departamento";
	$r=mysqli_query($conexion,$q);
	$cad='';
	if(!$r){
		die("error");
	}else{
		while ($data=mysqli_fetch_assoc($r)) {
			if ($data['dep_id'] == $seleccionado)
				$cad.='<option value="'.$data['dep_id'].'" selected>'.$data['dep_nombre']."</option>";
			else
				$cad.='<option value="'.$data['dep_id']. '">'.$data['dep_nombre']."</option>";
		}
		echo $cad;
	}
	break;

	case 6://actualizar ciudades
	$ciudad=$_POST['nombreciudad2'];
	$codigo=$_POST['cogidociudad2'];
	$departamento=$_POST['selectDepto2'];
	$id=$_POST['id'];

	$q="UPDATE ciudad SET departamento_dep_id='$departamento',ciu_codigo='$codigo',ciu_nombre='$ciudad' where ciu_id='$id'";
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