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
    $query ="SELECT * FROM tipo_usuario";
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
    $id_Tusuario = $_POST['idborrar'];
    $query = "DELETE from tipo_usuario where tipu_id = '$id_Tusuario'";
    $resultado = mysqli_query($conexion, $query);
    if (!$resultado)
      $informacion["respuesta"] = "ERROR";
    else
      $informacion["respuesta"] = "BIEN";
    echo json_encode($informacion);
    break;


    case 3: //Actualizar
    $NombreTusuario = $_POST['nombreTusuario2'];
    //$codigo = $_POST['codigodepto2'];
    $id = $_POST['id'];
    $query = "UPDATE tipo_usuario SET tipu_nombre = '$NombreTusuario' WHERE tipu_id = '$id'";
    $resultado = mysqli_query($conexion, $query);
    if (!$resultado)
      $informacion["respuesta"] = "ERROR";
    else
      $informacion["respuesta"] = "BIEN";
    echo json_encode($informacion);
    break;

    case 4: //buscar departamento
    $id = $_POST['id'];
    $query = "SELECT * from tipo_usuario tusu where tusu.tipu_id = '$id'";
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

   $NombreTusuario = $_POST['nombreTusuario'];
   //$codigo = $_POST['codigodepto'];
   $query = "SELECT tusu.tipu_id FROM tipo_usuario tusu where  tusu.tipu_nombre= '$NombreTusuario'";
   $resultado = mysqli_query($conexion, $query);
   $existe = mysqli_num_rows($resultado);
   if($existe > 0){
   $informacion["respuesta"] = "EXISTE";
    echo json_encode($informacion);
  }else{
    $query2 = "INSERT INTO tipo_usuario (tipu_nombre) values ('$NombreTusuario')";
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
