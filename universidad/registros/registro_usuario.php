<?php
// include '../conexion/conexion.php';
require_once __DIR__.'/../conexion/pass_crypt.php';


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

switch($accion){

    case 1://listar todos los usuarios

    $arreglo = array();
    $query ="SELECT usu_id,ciudad_nacimiento,Programas_pro_id,tipo_usuario_tipu_id,ciudad_residencia,usu_nombres,
    usu_apellidos,usu_identificacion,usu_tipo_identificacion,usu_fecha_nacimiento,usu_direccion,usu_barrio,usu_telefono,usu_correo,usu_nivel_formacion,usu_profesion,
    usu_password,tipu_id,tipu_nombre,pro_id,pro_codigo,pro_nombre,cn.departamento_dep_id as idDeptoNacimiento,cr.departamento_dep_id as idDeptoResidencia from usuarios inner join tipo_usuario on(tipo_usuario_tipu_id=tipu_id) inner join programas on(pro_id=Programas_pro_id) inner join ciudad cn on(cn.ciu_id=ciudad_nacimiento) inner join ciudad cr on(cr.ciu_id=ciudad_residencia)";
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



  //   case 2: //borrar un departamento
  //   $id_usuario = $_POST['idborrar'];
  //   $query = "DELETE from usuarios where usu_id = '$id_usuario'";
  //   $resultado = mysqli_query($conexion, $query);
  //   if (!$resultado)
  //     $informacion["respuesta"] = "ERROR";
  //   else
  //     $informacion["respuesta"] = "BIEN";
  //   echo json_encode($informacion);
  //   break;


    case 3: //Actualizar usuario
    $idusuario=$_POST['actidusuario'];
    $nombres = $_POST['actnombreUsuario'];
    $apellidos = $_POST['actapellidoUsuario'];
    $tipoIdentificacion = $_POST['acttipoIdentificacionUsuario'];
    $numeroIdentificacion = $_POST['actidentificacionUsuario'];
    $ciudadNacimiento = $_POST['actciudadNacimiento'];
    $ciudadResidencia = $_POST['actciudadResidencia'];
    $fechaNacimiento = $_POST['actfechaNacimiento'];
    $direccion = $_POST['actdireccion'];
    $barrio = $_POST['actbarrio'];
    $telefono = $_POST['acttelefono'];
    $correo = $_POST['actcorreoUsuario'];
    $nivelFormacion=$_POST['actformacionUsuario'];
    $programa=$_POST['actprogramas'];
    $tipoUsuario=$_POST['acttipousuario'];
    $profesion = $_POST['actprofesion'];

    $q = "UPDATE `usuarios` SET `usu_nombres`='$nombres',`usu_apellidos`='$apellidos',`usu_identificacion`='$numeroIdentificacion',`usu_tipo_identificacion`='$tipoIdentificacion',`usu_fecha_nacimiento`='$fechaNacimiento',`usu_direccion`='$direccion',`usu_barrio`='$barrio',`usu_telefono`='$telefono',`usu_correo`='$correo',`usu_nivel_formacion`='$nivelFormacion',`usu_profesion`='$profesion',`Programas_pro_id`='$programa',`tipo_usuario_tipu_id`='$tipoUsuario',`ciudad_nacimiento`='$ciudadNacimiento',`ciudad_residencia`='$ciudadResidencia' WHERE usu_id='$idusuario'";
    $r=mysqli_query($conexion,$q);
    if($r){
      $informacion["respuesta"]="BIEN";
    }else{
      $informacion["respuesta"]="ERROR";
    }
    echo json_encode($informacion);

    break;
  //   $nombres = $_POST['nombreUsuario2'];
  //   $apellidos = $_POST['apellidosUsuario2'];
  //   $identificacion = $_POST['identificacionUsuario2'];
  //   $Tidentificacion = $_POST['tipoIdusuario2'];
  //   $Fnacimiento = $_POST['nacimientoUsuario2'];
  //   $Cnacimiento = $_POST['ciudadNUsuario2'];
  //   $Cresidencia = $_POST['ciudadRUsuario2'];
  //   $direccion = $_POST['direccionusuario2'];
  //   $barrio = $_POST['barrioUsuario2'];
  //   $telefono = $_POST['telefonoUsuario2'];
  //   $correo = $_POST['correoUsuario2'];
  //   $Nformacion = $_POST['formacionUsuario2'];
  //   $profesion = $_POST['Profesionusuario2'];
  //   $Tusuario = $_POST['tipoUsuario2'];
  //   // $password = $_POST['passwordUsuario2'];
  //   $id = $_POST['id'];
  //   $query = "UPDATE usuarios SET usu_nombres = '$nombres', usu_apellidos = '$apellidos',usu_identificacion = '$identificacion',
  //   usu_tipoidentificacion = '$Tidentificacion', usu_fechaNacimiento = '$Fnacimiento', usu_ciudadNacimiento = '$Cnacimiento',
  //   usu_ciudadResidencia = '$Cresidencia',usu_direccion = '$direccion', usu_telefono = '$telefono', usu_correo = '$correo',
  //   usu_nivelFormacion = '$Nformacion', usu_profesion = '$profesion', usu_tipoUsuario = '$Tusuario'  WHERE usu_id = '$id'";
  //   $resultado = mysqli_query($conexion, $query);
  //   if (!$resultado)
  //     $informacion["respuesta"] = "ERROR";
  //   else
  //     $informacion["respuesta"] = "BIEN";
  //   echo json_encode($informacion);
  //   break;

  //   case 4: //buscar departamento
  //   $id = $_POST['id'];
  //   $query = "SELECT * from usuarios usu where usu.usu_id = '$id'";
  //   $resultado = mysqli_query($conexion, $query);
  //   if (!$resultado) {
  //    die("Error");
  //  }else{
  //    while ($data=mysqli_fetch_assoc($resultado)) {
  //      $arreglo["data"][] = $data;
  //    }
  //    echo json_encode($arreglo);
  //  }
  //  mysqli_free_result($resultado);
   // break;

   case 5: //guardar 

   $nombres = $_POST['nombreUsuario'];
   $apellidos = $_POST['apellidoUsuario'];
   $tipoIdentificacion = $_POST['tipoIdentificacionUsuario'];
   $numeroIdentificacion = $_POST['identificacionUsuario'];
   $ciudadNacimiento = $_POST['ciudadNacimiento'];
   $ciudadResidencia = $_POST['ciudadResidencia'];
   $fechaNacimiento = $_POST['fechaNacimiento'];
   $direccion = $_POST['direccion'];
   $barrio = $_POST['barrio'];
   $telefono = $_POST['telefono'];
   $correo = $_POST['correoUsuario'];
   $nivelFormacion=$_POST['formacionUsuario'];
   $programa=$_POST['programas'];
   $tipoUsuario=$_POST['tipousuario'];
   $profesion = $_POST['profesion'];
   $password = $_POST['password'];

   $query = "SELECT * FROM usuarios where usu_identificacion= '$numeroIdentificacion'";
   $resultado = mysqli_query($conexion, $query);
   $existe = mysqli_num_rows($resultado);
   if($existe > 0){
     $informacion["respuesta"] = "EXISTE";
     echo json_encode($informacion);
   }
   else{
    $encriptarpass = new Pass_crypt();
    $passencriptada=$encriptarpass->create_hash($password);

    $query2 = "INSERT INTO `usuarios`(`usu_nombres`, `usu_apellidos`, `usu_identificacion`, `usu_tipo_identificacion`, `usu_fecha_nacimiento`, `usu_direccion`, `usu_barrio`, `usu_telefono`, `usu_correo`, `usu_nivel_formacion`, `usu_profesion`, `usu_password`, `Programas_pro_id`, `tipo_usuario_tipu_id`, `ciudad_nacimiento`, `ciudad_residencia`) VALUES ('$nombres','$apellidos','$numeroIdentificacion','$tipoIdentificacion','$fechaNacimiento','$direccion','$barrio','$telefono','$correo','$nivelFormacion','$profesion','$passencriptada','$programa','$tipoUsuario','$ciudadNacimiento','$ciudadResidencia')";

  //     //el id no lo ponemos ya que es autoincremental
    $resultado = mysqli_query($conexion, $query2);
    if (!$resultado)
      $informacion["respuesta"] = "ERROR";
    else
      $informacion["respuesta"] = "BIEN";
    echo json_encode($informacion);
  }
  break;

  case 6://listar programas
  $cad='';
  $q="SELECT * from programas";
  $r=mysqli_query($conexion,$q);
  while ($data=mysqli_fetch_assoc($r)) {
    $cad.='<option value="'.$data["pro_id"].'">'.$data["pro_nombre"]."</option>";
  }
  echo $cad;
  break;

 case 7://listar tipo usuario
 $cad='';
 $q="SELECT * FROM tipo_usuario";
 $r=mysqli_query($conexion,$q);
 while ($data=mysqli_fetch_assoc($r)) {
   $cad.='<option value="'.$data["tipu_id"].'">'.$data["tipu_nombre"]."</option>";
 }
 echo $cad;
 break;

  case 8://listar departamentos de nacimiento y residencia
  $cad='';
  $q="SELECT * FROM departamento";
  $r=mysqli_query($conexion,$q);
  while ($data=mysqli_fetch_assoc($r)) {
   $cad.='<option value="'.$data["dep_id"].'">'.$data["dep_nombre"]."</option>";
 }
 echo $cad;
 break;

   case 9://listar ciudades de nacimiento y residencia
   $cad='';
   $iddepartamento=$_POST['idDepto'];
   $q="SELECT * FROM ciudad WHERE departamento_dep_id='$iddepartamento'";
   $r=mysqli_query($conexion,$q);
   while ($data=mysqli_fetch_assoc($r)) {
     $cad.='<option value="'.$data["ciu_id"].'">'.$data["ciu_nombre"]."</option>";
   }
   echo $cad;
   break;

   case 10://cargar combo ciudad de nacimiento en actualizar
   $idCiudad=$_POST['ciudad'];
   $depto=$_POST['depto'];
   $cad='';
   $q="SELECT * FROM ciudad where departamento_dep_id='$depto'";
   $r=mysqli_query($conexion,$q);
   while ($data=mysqli_fetch_assoc($r)) {
    if($data["ciu_id"]==$idCiudad){
      $cad.='<option value="'.$data["ciu_id"].'" selected>'.$data["ciu_nombre"]."</option>";
    }else{
      $cad.='<option value="'.$data["ciu_id"].'">'.$data["ciu_nombre"]."</option>";
    }
  }
  echo $cad;
  break;

  case 11://cargar departamento nacimiento en actualizar 
  $departamento=$_POST['depto'];
  $cad='';
  $q="SELECT * FROM departamento";
  $r=mysqli_query($conexion,$q);
  while ($data=mysqli_fetch_assoc($r)) {
    if($data["dep_id"]==$departamento){
      $cad.='<option value="'.$data["dep_id"].'" selected>'.$data["dep_nombre"]."</option>";
    }else{
      $cad.='<option value="'.$data["dep_id"].'">'.$data["dep_nombre"]."</option>";
    }
  }
  echo $cad;
  break;

   case 12://cargar combo ciudad de residencia en actualizar
   $idCiudad=$_POST['ciudad'];
   $depto=$_POST['depto'];
   $cad='';
   $q="SELECT * FROM ciudad where departamento_dep_id='$depto'";
   $r=mysqli_query($conexion,$q);
   while ($data=mysqli_fetch_assoc($r)) {
    if($data["ciu_id"]==$idCiudad){
      $cad.='<option value="'.$data["ciu_id"].'" selected>'.$data["ciu_nombre"]."</option>";
    }else{
      $cad.='<option value="'.$data["ciu_id"].'">'.$data["ciu_nombre"]."</option>";
    }
  }
  echo $cad;
  break;

  case 13://cargar departamento residencia en actualizar 
  $departamento=$_POST['depto'];
  $cad='';
  $q="SELECT * FROM departamento";
  $r=mysqli_query($conexion,$q);
  while ($data=mysqli_fetch_assoc($r)) {
    if($data["dep_id"]==$departamento){
      $cad.='<option value="'.$data["dep_id"].'" selected>'.$data["dep_nombre"]."</option>";
    }else{
      $cad.='<option value="'.$data["dep_id"].'">'.$data["dep_nombre"]."</option>";
    }
  }
  echo $cad;
  break;

  case 14://cargar combo programas en actualizar
  $idprograma=$_POST['idprograma'];
  $q="SELECT * FROM programas";
  $r=mysqli_query($conexion,$q);
  while ($data=mysqli_fetch_assoc($r)) {
    if($data["pro_id"]==$idprograma){
      $cad.='<option value="'.$data["pro_id"].'" selected>'.$data["pro_nombre"]."</option>";
    }else{
      $cad.='<option value="'.$data["pro_id"].'">'.$data["pro_nombre"]."</option>";
    }
  }
  echo $cad;
  break;

 case 15://cargar combo tipo usuario en actualizar
 $id=$_POST['idtipousuario'];
 $q="SELECT * FROM tipo_usuario";
 $r=mysqli_query($conexion,$q);
 while ($data=mysqli_fetch_assoc($r)) {
  if($data["tipu_id"]==$id){
    $cad.='<option value="'.$data["tipu_id"].'" selected>'.$data["tipu_nombre"]."</option>";
  }else{
    $cad.='<option value="'.$data["tipu_id"].'">'.$data["tipu_nombre"]."</option>";
  }
}
echo $cad;
break;




}

mysqli_close($conexion);
?>
