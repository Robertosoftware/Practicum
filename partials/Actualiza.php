<?php include('../usuario/session.php') ?>
  	<?php if (isset($_SESSION['success'])) : ?>
  	<?php endif ?>
    <!-- logged in user information -->
<div class="fondo">
     <div class="jumbotron">
        <h1><?php  if (isset($_SESSION['correo'])) : ?>
    	<p>Hola <strong><?php echo $_SESSION['correo']; ?></strong></p> </h1>
       <div class="labelac">Nombre</div>
 <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="nombre" class="form-control" name="nombre" ria-describedby="sizing-addon1" value="">
      </div>
   <div class="labelac">Apellido Paterno</div>
 <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="nombre" class="form-control" name="apellido_paterno" ria-describedby="sizing-addon1" value="">
      </div>
   <div class="labelac">Apellido Materno</div>
 <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="nombre" class="form-control" name="apellido_materno" ria-describedby="sizing-addon1" value="">
      </div>
   <div class="labelac">Edad</div>
 <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="nombre" class="form-control" name="edad" ria-describedby="sizing-addon1" value="">
      </div>
   <div class="labelac">Teléfono</div>
 <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="nombre" class="form-control" name="telefono" ria-describedby="sizing-addon1" value="">
      </div>
      </div>
    <div class="cuerpo">
</div>
    </div>
<!--<a role="button" class="btn btn-success btn-lg btn-block" href="#!Registro">Registrar Alumno</a>-->
    <?php endif ?>
