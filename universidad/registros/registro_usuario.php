<?php
// include '../conexion/conexion.php';
// require_once __DIR_. '/../conexion/pass_crypt.php';


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

    case 1://listar todos los usuarios

    $arreglo = array();
    $query ="SELECT * FROM usuarios";
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
    $id_usuario = $_POST['idborrar'];
    $query = "DELETE from usuarios where usu_id = '$id_usuario'";
    $resultado = mysqli_query($conexion, $query);
    if (!$resultado)
      $informacion["respuesta"] = "ERROR";
    else
      $informacion["respuesta"] = "BIEN";
    echo json_encode($informacion);
    break;


    case 3: //Actualizar
    $nombres = $_POST['nombreUsuario2'];
    $apellidos = $_POST['apellidosUsuario2'];
    $identificacion = $_POST['identificacionUsuario2'];
    $Tidentificacion = $_POST['tipoIdusuario2'];
    $Fnacimiento = $_POST['nacimientoUsuario2'];
    $Cnacimiento = $_POST['ciudadNUsuario2'];
    $Cresidencia = $_POST['ciudadRUsuario2'];
    $direccion = $_POST['direccionusuario2'];
    $barrio = $_POST['barrioUsuario2'];
    $telefono = $_POST['telefonoUsuario2'];
    $correo = $_POST['correoUsuario2'];
    $Nformacion = $_POST['formacionUsuario2'];
    $profesion = $_POST['Profesionusuario2'];
    $Tusuario = $_POST['tipoUsuario2'];
    // $password = $_POST['passwordUsuario2'];
    $id = $_POST['id'];
    $query = "UPDATE usuarios SET usu_nombres = '$nombres', usu_apellidos = '$apellidos',usu_identificacion = '$identificacion',
    usu_tipoidentificacion = '$Tidentificacion', usu_fechaNacimiento = '$Fnacimiento', usu_ciudadNacimiento = '$Cnacimiento',
    usu_ciudadResidencia = '$Cresidencia',usu_direccion = '$direccion', usu_telefono = '$telefono', usu_correo = '$correo',
    usu_nivelFormacion = '$Nformacion', usu_profesion = '$profesion', usu_tipoUsuario = '$Tusuario'  WHERE usu_id = '$id'";
    $resultado = mysqli_query($conexion, $query);
    if (!$resultado)
      $informacion["respuesta"] = "ERROR";
    else
      $informacion["respuesta"] = "BIEN";
    echo json_encode($informacion);
    break;

    case 4: //buscar departamento
    $id = $_POST['id'];
    $query = "SELECT * from usuarios usu where usu.usu_id = '$id'";
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

   $nombres = $_POST['nombreUsuario'];
   $apellidos = $_POST['apellidosUsuario'];
   $identificacion = $_POST['identificacionUsuario'];
   $Tidentificacion = $_POST['tipoIdusuario'];
   $Fnacimiento = $_POST['nacimientoUsuario'];
   $Cnacimiento = $_POST['ciudadNUsuario'];
   $Cresidencia = $_POST['ciudadRUsuario'];
   $direccion = $_POST['direccionusuario'];
   $barrio = $_POST['barrioUsuario'];
   $telefono = $_POST['telefonoUsuario'];
   $correo = $_POST['correoUsuario'];
   $Nformacion = $_POST['formacionUsuario'];
   $profesion = $_POST['Profesionusuario'];
   $Tusuario = $_POST['tipoUsuario'];
   $password = $_POST['passwordUsuario'];
   $query = "SELECT usu.usu_id, usu.usu_nombres, usu.usu_apellidos, usu.usu_identificacion, usu.usu_tipoidentificacion, usu.usu_fechaNacimiento,
   usu.usu_ciudadNacimiento, usu.usu_ciudadResidencia, usu.usu_direccion, usu.usu_barrio, usu.usu_telefono, usu.usu_correo,
   usu.usu_nivelFormacion, usu.usu_profesion, usu.usu_tipoUsuario, usu.usu_password FROM usuarios usu where  usu.usu_nombres= '$nombres'";
   $resultado = mysqli_query($conexion, $query);
   $existe = mysqli_num_rows($resultado);
   if($existe > 0){
   $informacion["respuesta"] = "EXISTE";
    echo json_encode($informacion);
  }else{
    // $encriptarpass = new Pass_crypt();
    // $passencriptada=$encriptarpass->create_hash($password);

    $query2 = "INSERT INTO usuarios (usu_nombres,usu_apellidos,usu_identificacion,usu_tipoidentificacion,usu_fechaNacimiento,
    usu_ciudadNacimiento,usu_ciudadResidencia,usu_direccion,usu_barrio,usu_telefono,usu_correo,usu_nivelFormacion,
  usu_profesion,usu_tipoUsuario,usu_password) values ('$nombres','$apellidos','$identificacion','$Tidentificacion','$Fnacimiento',
  '$Cnacimiento','$Cresidencia','$direccion','$barrio','$telefono','$correo','$Nformacion','$profesion','$Tusuario','$password')";
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
