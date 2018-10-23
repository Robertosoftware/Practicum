<?php include('../admin/session.php') ?>
  	<?php if (isset($_SESSION['success'])) : ?>
  	<?php endif ?>
    <!-- logged in user information -->
<div class="fondo">
     <div class="jumbotron">
        <h1><?php  if (isset($_SESSION['correo'])) : ?>
    	<p>Bienvenido usuario <strong><?php echo $_SESSION['correo']; ?></strong></p> </h1>
      </div>
    <div class="cuerpo">
      <div class="alert alert-success" role="alert">
        <strong>Ahora estás en el sistema de Mandra Soluciones</strong>
      </div>
</div>
    </div>
<!--<a role="button" class="btn btn-success btn-lg btn-block" href="#!Registro">Registrar Alumno</a>-->
    <?php endif ?>
