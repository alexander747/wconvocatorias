<?php
include '../conexion/conexion.php';
//include('../conexion/conexion.php');


$informacion = [];
$accion;
if(isset($_POST['accion'])){
  $accion=$_POST['accion'];
}
else{
  $accion=1;
}
 $accion=$_POST['accion'];

switch($accion){

    case 1://listar todos los deptos

    $arreglo = array();
    //$query = Conexion::conectar()->prepare("SELECT * FROM departamento");
    $query ="SELECT * FROM departamento";
    $resultado = mysqli_query($conexion,$query);
    if (!$resultado) {
      die("error");
    }else{
      $arreglo["data"] = []; 
      while ($data=mysqli_fetch_assoc($resultado)) {
      //$arreglo["data"][] = array_map("utf8_encode",$data);
        $arreglo["data"][] = $data;
      }
      echo json_encode($arreglo);
    }
    mysqli_free_result($resultado);  

    break;


    case 2: //borrar un departamento
    $id_departamento = $_POST['idborrar'];
    $query = "DELETE from departamento where dep_id = '$id_departamento'";
    $resultado = mysqli_query($conexion, $query);
    if (!$resultado)
      $informacion["respuesta"] = "ERROR";
    else
      $informacion["respuesta"] = "BIEN";
    echo json_encode($informacion);
    break;


    case 3: //Actualizar
    $departamento = $_POST['nombredepto2'];
    $codigo = $_POST['codigodepto2'];
    $id = $_POST['id'];
    $query = "UPDATE departamento SET dep_codigo = '$codigo', dep_nombre = '$departamento' WHERE dep_id = '$id'";
    $resultado = mysqli_query($conexion, $query);
    if (!$resultado)
      $informacion["respuesta"] = "ERROR";
    else
      $informacion["respuesta"] = "BIEN";
    echo json_encode($informacion);
    break;

    case 4: //buscar departamento
    $id = $_POST['id'];
    $query = "SELECT * from departamento where dep_id = '$id'";
    $resultado = mysqli_query($conexion, $query);
    if (!$resultado) {
     die("Error");
   }else{
     while ($data=mysqli_fetch_assoc($resultado)) {
       $arreglo["data"][] = $data;
     }
     echo json_encode($arreglo);
   }
   mysqli_free_result($resultado);
   break;

   case 5: //guardar un departamento

   $departamento = $_POST['nombredepto'];
   $codigo = $_POST['codigodepto'];
   $query = "SELECT depto.dep_id, depto.dep_codigo, depto.dep_nombre FROM departamento depto where  depto.dep_nombre= '$departamento'";
   $resultado = mysqli_query($conexion, $query);
   $existe = mysqli_num_rows($resultado);
   if($existe > 0){
   $informacion["respuesta"] = "EXISTE";
    echo json_encode($informacion);
  }else{
    $query2 = "INSERT INTO departamento (dep_codigo,dep_nombre) values ('$codigo','$departamento')";
      //el id no lo ponemos ya que es autoincremental
    $resultado = mysqli_query($conexion, $query2);
    if (!$resultado)
      $informacion["respuesta"] = "ERROR";
    else
      $informacion["respuesta"] = "BIEN";
    echo json_encode($informacion);
  }
  break;


}

mysqli_close($conexion);
?>
