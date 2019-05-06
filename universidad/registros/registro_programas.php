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

    case 1://listar todos los programas

    $arreglo = array();
    $query ="SELECT * FROM programas";
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


    case 2: //borrar un programa
    $id_programa = $_POST['idborrar'];
    $query = "DELETE from programas where pro_id = '$id_programa'";
    $resultado = mysqli_query($conexion, $query);
    if (!$resultado)
      $informacion["respuesta"] = "ERROR";
    else
      $informacion["respuesta"] = "BIEN";
    echo json_encode($informacion);
    break;


    case 3: //Actualizar
    $codigo = $_POST['codigoprograma2'];
    $nombre = $_POST['nombreprograma2'];
    $id = $_POST['id'];
    $query = "UPDATE programas SET pro_codigo = '$codigo', pro_nombre = '$nombre' WHERE pro_id = '$id'";
    $resultado = mysqli_query($conexion, $query);
    if (!$resultado)
      $informacion["respuesta"] = "ERROR";
    else
      $informacion["respuesta"] = "BIEN";
    echo json_encode($informacion);
    break;

    case 4: //buscar programas
    $id = $_POST['id'];
    $query = "SELECT * from programas prog where prog.pro_id = '$id'";
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

   case 5: //guardar un programa
   $codigo = $_POST['codigoprograma'];
   $nombre = $_POST['nombreprograma'];

   $query = "SELECT prog.pro_id, prog.pro_codigo, prog.pro_nombre FROM programas prog where  prog.pro_nombre= '$nombre'";
   $resultado = mysqli_query($conexion, $query);
   $existe = mysqli_num_rows($resultado);
   if($existe > 0){
   $informacion["respuesta"] = "EXISTE";
    echo json_encode($informacion);
  }else{
    $query2 = "INSERT INTO programas (pro_codigo,pro_nombre) values ('$codigo','$nombre')";
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
