<?php
  session_start();
error_reporting(E_ERROR | E_WARNING | E_PARSE);?>
<html lang="en">
<head>
	<title>Registro</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="../resources/registro.css">
	
  <link rel="icon" href="../resources/fav.ico.jpg">
        <!-- Bootstrap core CSS -->
    <link href="../resources/bootstrap.min.css" rel="stylesheet">
   <!-- Bootstrap theme -->
    <link href="../resources/bootstrap-theme.min.css" rel="stylesheet">
</head>
<body>

    <div class="header">
  	<h2>Formulario del Usuario</h2>
  </div>
<div>
  <form action="#" method="post">
      <label for="nombre">Nombre</label><br>
      <input class="form-control" type="text" name="nombre" placeholder="Nombre"/><br>
    
      <label for="apellidop">Apellido Paterno</label><br>
      <input class="form-control" type="text" name="apellidop" placeholder="Apellido paterno"/><br>
    
      <label for="apellidom">Apellido Materno</label><br>
      <input class="form-control" type="text" name="apellidom" placeholder="Apellido materno"/><br>
    
      <label for="edad">Edad</label><br>
      <input class="form-control" type="number" name="edad" placeholder="Edad"/><br>
    
      <label for="telefono">Teléfono</label><br>
      <input class="form-control" type="text" name="telefono" placeholder="Teléfono"/><br>

      <label for="celular">Celular</label><br>
      <input class="form-control" type="text" name="celular" placeholder="Celular"/><br>
    
      <label for="linkedin">LinkedIn</label><br>
      <input class="form-control" type="text" name="linkedin" placeholder="LinkedIn"/><br>
    
      <label for="sueldoac">Sueldo Actual</label><br>
      <input class="form-control" type="number" name="sueldoac" placeholder="Sueldo actual"/><br>
    
      <label for="salariodes">Salario deseado</label><br>
      <input class="form-control" type="number" name="salariodes" placeholder="Salario deseado"/><br>
        
      <label for="descripcionhab">Descripción habilidades</label><br>
      <input class="form-control" type="text" name="descripcionhab" placeholder="Descipción habilidades"/><br>
        
        <label for="descripcionper">Descripción personal</label><br>
      <input class="form-control" type="text" name="descripcionper" placeholder="Descipción personal"/><br>
        
        <label for="horario">Horario</label><br>
      <input class="form-control" type="radio" name="horario" value="1"/>Medio tiempo matutino<br>
        <input class="form-control" type="radio" name="horario" value="2"/>Medio tiempo vespertino<br>
        <input class="form-control" type="radio" name="horario" value="3"/>Medio tiempo<br>
        <input class="form-control" type="radio" name="horario" value="4"/>Tiempo completo<br>
        <input class="form-control" type="radio" name="horario" value="5"/>Cualquier horario<br>
        
         <label for="categoria">Categoría</label><br>
        <select name="categoria">
            <option value="1">Ingeniería</option><br>
  
        </select><br>
        
        <label for="subcategoria">subcategoría</label><br>
        <select name="subcategoria">
            <option value="1">Ingenieria en sistemas y tecnologías de información</option><br>
  
        </select><br>
      
        <label for="localidad">Localidad</label><br>
        <select name="localidad">
            <option value="1">Ciudad de México</option><br>
            <option value="2">Estado de México</option><br>
  
        </select><br>
        
         <label for="ingles">Nivel de inglés</label><br>
      <input class="form-control" type="radio" name="ingles" value="1"/>Nada<br>
        <input class="form-control" type="radio" name="ingles" value="2"/>Basico<br>
        <input class="form-control" type="radio" name="ingles" value="3"/>Intermedio<br>
        <input class="form-control" type="radio" name="ingles" value="4"/>Avanzado<br>
        
        
         <label for="sexo">Sexo</label><br>
      <input class="form-control" type="radio" name="sexo" value="1"/>Femenino<br>
        <input class="form-control" type="radio" name="sexo" value="2"/>Masculino<br>
        <input class="form-control" type="radio" name="sexo" value="3"/>Prefiero no especificar<br>
        
             <label for="educacion">Educación</label><br>
      <input class="form-control" type="radio" name="educacion" value="1"/>Doctorado<br>
        <input class="form-control" type="radio" name="educacion" value="2"/>Maestría o especialidad<br>
        <input class="form-control" type="radio" name="educacion" value="3"/>Licenciatura<br>
        <input class="form-control" type="radio" name="educacion" value="4"/>Bachillerato<br>
        <input class="form-control" type="radio" name="educacion" value="5"/>Secundaria<br>
             
        
  
    
          <input class="btn btn--form" type="submit" value="Registrar" /><br>
        
  </form>
    

<?php

    $con=mysqli_connect("localhost", "root", "254088Ma!", "mandra");

    // Check connection
  if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    // escape variables for security
    $nombre = mysqli_real_escape_string($con, $_POST['nombre']);
    $apellidop = mysqli_real_escape_string($con, $_POST['apellidop']);
    $apellidom = mysqli_real_escape_string($con, $_POST['apellidom']);
    $edad = mysqli_real_escape_string($con, $_POST['edad']);
    $telefono = mysqli_real_escape_string($con, $_POST['telefono']);
    $celular = mysqli_real_escape_string($con, $_POST['celular']);
	$linkedin = mysqli_real_escape_string($con, $_POST['linkedin']);
	$sueldoac = mysqli_real_escape_string($con, $_POST['sueldoac']);
	$salariodes = mysqli_real_escape_string($con, $_POST['salariodes']);
	$descripcionhab = mysqli_real_escape_string($con, $_POST['descripcionhab']);
	$descripcionper = mysqli_real_escape_string($con, $_POST['descripcionper']);
	$horario = mysqli_real_escape_string($con, $_POST['horario']);
	$categoria = mysqli_real_escape_string($con, $_POST['categoria']);
	$subcategoria = mysqli_real_escape_string($con, $_POST['subcategoria']);
	$localidad = mysqli_real_escape_string($con, $_POST['localidad']);
	$ingles = mysqli_real_escape_string($con, $_POST['ingles']);
	$sexo = mysqli_real_escape_string($con, $_POST['sexo']);
	$educacion = mysqli_real_escape_string($con, $_POST['educacion']);
	
    $sql="INSERT INTO usuario ('nombre', 'apellido_paterno', 'apellido_materno', 'edad', 'telefono', 'celular', 'linkedin', 'sueldo_actual', 
    'salario_deseado', 'descripción_habilidad', 'descripcion_persona', 'horario_id_horario',
    'subcategoria_idsubcategoria', 'categoria_idcategoria', 'localidad_idlocalidad', 'ingles_idingles', 'sexo_idsexo',
    'educacion_ideducacion')
      VALUES ('$nombre', '$apellidop', '$apellidom', '$edad', '$telefono', '$celular', '$linkedin', '$sueldoac', '$salariodes', '$descripcionhab',
      '$descripcionper', '$horario','$subcategoria', '$categoria','$localidad', '$ingles', '$sexo', '$educacion');";
?>
    <?php


$result = mysqli_query($con,"SELECT * FROM usuario where nombre='$nombre';");



if($result->num_rows > 0){
$row = mysqli_fetch_array($result);
//if($pw==$row['password']){
//$_SESSION['loggedin'] = true;

//$_SESSION['username'] = $email;

// $_SESSION['start'] = time();


//$_SESSION['expire'] = $_SESSION['start'] + (5 * 60);

//}}
//}
  mysqli_close($con);

//if(!$_SESSION['username']==NULL){
  //echo "Sesión iniciada como: " . $_SESSION['username'];
//}

  ?>
    </div>

</body>
</html>
