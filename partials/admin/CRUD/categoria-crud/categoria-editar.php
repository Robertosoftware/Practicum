<?php session_start();?>
<?php
     $db = mysqli_connect('localhost', 'root', '254088Ma!', 'mandra');
      mysqli_set_charset($db, 'utf8')
          ?>
<div class="jumbotron labelac">
<form method="post" action="partials/admin/action.php">
  	<?php include('../errores/errors-admin.php'); ?>
           <label>Id</label>
 <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="text" class="form-control" name="id" ria-describedby="sizing-addon1" value="<?php 
echo $_SESSION['id'];
?>" readonly>
</div>
                <label>Nombre</label>
      <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="text" class="form-control" name="nombre" aria-describedby="sizing-addon1">
</div>
                    <label>Descripción</label>
      <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="text" class="form-control" name="descripcion" aria-describedby="sizing-addon1">
</div>
  	<div class="input-group">
  		<button type="submit" class="btn btn-info btn-lg" name="categoria_editar">Cambiar datos</button>
  	</div>
      	<p>
         <a href="index-admin.php#!/Categoria">¿Deseas regresar?</a>
  	</p>
  </form>
</div>