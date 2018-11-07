<?php
session_start();
$nombre="";
$descripcion="";
$db = mysqli_connect('localhost', 'root', '254088Ma!', 'mandra');
if (isset($_POST['submit'])) {
$nombre="";
$descripcion="";
 $nombre = mysqli_real_escape_string($db, $_POST['nombre']);
  $descripcion = mysqli_real_escape_string($db, $_POST['descripcion']);
    $query = "Insert into categoria (nombre, descripcion) values ('$nombre','$descripcion')";
  	$results = mysqli_query($db, $query);
      	  header('location: ../../index-admin.php#!/Usuarios');
}
if (isset($_GET['dcategoria'])) {
     $delete = mysqli_real_escape_string($db, $_GET['dcategoria']);
    $query = "Delete from categoria where idcategoria='$delete'";
      	$results = mysqli_query($db, $query);
    if($results){
    header('location: ../../index-admin.php#!/Usuarios');
    echo "<br/><br/><span>Borrado exitosamente...!!</span>";    
    }else{
        echo "ERROR";
    }   
}
if (isset($_GET['ecategoria'])) {
         $edit = mysqli_real_escape_string($db, $_GET['ecategoria']);
  	  $_SESSION['id'] = $edit;
        header('location: ../../index-admin.php#!/Categoria-editar');
}
?>