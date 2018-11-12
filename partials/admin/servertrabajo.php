<?php
error_reporting(E_ALL ^ E_NOTICE);
//session_start();

// initializing variables
$nombre="";
$errors = array(); 
// connect to the database
$db = mysqli_connect('localhost', 'root', '254088Ma!', 'mandra');

    $nombre = mysqli_real_escape_string($db, $_POST['nombre']);
    $salario = mysqli_real_escape_string($db, $_POST['salario']);
    $empresa = mysqli_real_escape_string($db, $_POST['empresa']);
    $fecha = mysqli_real_escape_string($db, $_POST['fecha']);
    $telefono = mysqli_real_escape_string($db, $_POST['telefono']);
    $correo = mysqli_real_escape_string($db, $_POST['correo']);
    $experiencia = mysqli_real_escape_string($db, $_POST['experiencia']);
    $horario = mysqli_real_escape_string($db, $_POST['horario']);
    $categoria = mysqli_real_escape_string($db, $_POST['categoria']);
    $subcategoria = mysqli_real_escape_string($db, $_POST['subcategoria']);
    $localidad = mysqli_real_escape_string($db, $_POST['localidad']);
    $ingles = mysqli_real_escape_string($db, $_POST['ingles']);
    $edad_req = mysqli_real_escape_string($db, $_POST['edad_req']);
    $activo = mysqli_real_escape_string($db, $_POST['activo']);
    $sexo = mysqli_real_escape_string($db, $_POST['sexo']);
    $descripcion =mysqli_real_escape_string($db, $_POST['descripcion']);
    $educacion= mysqli_real_escape_string($db, $_POST['educacion']);
  
    
  	$query = "INSERT INTO trabajo (anos_exp, activo, nombre, salario, fecha_post, telefono, correo, horario_id_horario, categoria_idcategoria, subcategoria_idsubcategoria, localidad_idlocalidad, ingles_idingles, empresa_idempresa, sexo_idsexo, edad_req, educacion_ideducacion, descripcion) VALUES('$experiencia', '$activo', '$nombre','$salario','$fecha','$telefono','$correo','$horario','$categoria', '$subcategoria','$localidad','$ingles','$empresa', '$sexo', '$edad_req', '$educacion', '$descripcion');";

 	$insertado =mysqli_query($db, $query);

if($insertado){
    echo "Nuevo trabajo insertado";
}else{
    echo "Favor de llenar todos los campos";
}


?>
