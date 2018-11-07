<?php include('../../admin/session-admin.php') ?>

<?php if (isset($_SESSION['success'])) : ?>
  	<?php endif ?>
    <!-- logged in user information -->
<div class="fondo">
     <div class="jumbotron">
               <form method="post" action="register.php">
      <?php  if (isset($_SESSION['admin_name'])) : ?>
   <h1>Nueva oferta de trabajo</h1>
                      <?php
            $db = mysqli_connect('localhost', 'root', '254088Ma!', 'mandra');
      mysqli_set_charset($db, 'utf8')
          ?>
       <div class="labelac">Nombre de la vacante</div>
 <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="text" class="form-control" name="nombre" ria-describedby="sizing-addon1" value="">
      </div>
   <div class="labelac">Salario</div>
 <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="nombre" class="form-control" name="apellido_paterno" ria-describedby="sizing-addon1" value="">
      </div>
   <div class="labelac">Empresa</div>
    <select class="form-control dropd">
    <option>
        Selecciona el correspondiente
        </option>           
        <?php
        $query="select * from empresa";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['idempresa'].'">'.$row['nombre'].'</option>';
            }
        }
        ?>
     </select>
   <div class="labelac">Fecha</div>
  <input type="date" class="form-control dropd" name="edad"value="">
   <div class="labelac">Teléfono</div>
 <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="nombre" class="form-control" name="telefono" ria-describedby="sizing-addon1" value="">
      </div>
         <div class="labelac">Correo</div>
 <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="nombre" class="form-control" name="telefono" ria-describedby="sizing-addon1" value="">
      </div>
         <div class="labelac">Años de experiencia</div>
 <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="nombre" class="form-control" name="telefono" ria-describedby="sizing-addon1" value="">
      </div>
         <div class="labelac">Horario</div>
  <select class="form-control dropd">
    <option>
        Selecciona el correspondiente
        </option>           
        <?php
      $query="select * from horario";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['idhorario'].'">'.$row['tipo'].'</option>';
            }
        }
        ?>
     </select>
         <div class="labelac">Categoría</div>
  <select class="form-control dropd">
    <option>
        Selecciona el correspondiente
        </option>           
        <?php
        $query="select * from categoria";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['idcategoria'].'">'.$row['nombre'].'</option>';
            }
        }
        ?>
     </select>
         <div class="labelac">Subcategoría</div>
  <select class="form-control dropd">
    <option>
        Selecciona el correspondiente
        </option>           
        <?php
        $query="select * from subcategoria";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['idsubcategoria'].'">'.$row['nombre'].'</option>';
            }
        }
        ?>
     </select>
                    <div class="labelac">Competencia técnica 1</div>
  <select class="form-control dropd">
    <option>
        Selecciona el correspondiente
        </option>           
        <?php
        $query="select * from tecnica";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['idcompetencia'].'">'.$row['nombre'].'</option>';
            }
        }
        ?>
     </select>
                    <div class="labelac">Competencia técnica 2</div>
  <select class="form-control dropd">
    <option>
        Selecciona el correspondiente
        </option>           
        <?php
        $query="select * from tecnica";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['idcompetencia'].'">'.$row['nombre'].'</option>';
            }
        }
        ?>
     </select>
                    <div class="labelac">Competencia técnica 3</div>
  <select class="form-control dropd">
    <option>
        Selecciona el correspondiente
        </option>           
        <?php
        $query="select * from tecnica";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['idcompetencia'].'">'.$row['nombre'].'</option>';
            }
        }
        ?>
     </select>
                    <div class="labelac">Competencia técnica 4</div>
  <select class="form-control dropd">
    <option>
        Selecciona el correspondiente
        </option>           
        <?php
        $query="select * from tecnica";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['idcompetencia'].'">'.$row['nombre'].'</option>';
            }
        }
        ?>
     </select>
                    <div class="labelac">Competencia técnica 5</div>
  <select class="form-control dropd">
    <option>
        Selecciona el correspondiente
        </option>           
        <?php
        $query="select * from tecnica";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['idcompetencia'].'">'.$row['nombre'].'</option>';
            }
        }
        ?>
     </select>
                    <div class="labelac">Habilidad 1</div>
  <select class="form-control dropd">
    <option>
        Selecciona el correspondiente
        </option>           
        <?php
        $query="select * from habilidad";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['idhabilidad'].'">'.$row['nombre'].'</option>';
            }
        }
        ?>
     </select>
                   <div class="labelac">Habilidad 2</div>
  <select class="form-control dropd">
    <option>
        Selecciona el correspondiente
        </option>           
        <?php
        $query="select * from habilidad";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['idhabilidad'].'">'.$row['nombre'].'</option>';
            }
        }
        ?>
     </select>
                   <div class="labelac">Habilidad 3</div>
  <select class="form-control dropd">
    <option>
        Selecciona el correspondiente
        </option>           
        <?php
        $query="select * from habilidad";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['idhabilidad'].'">'.$row['nombre'].'</option>';
            }
        }
        ?>
     </select>
                   <div class="labelac">Habilidad 4</div>
  <select class="form-control dropd">
    <option>
        Selecciona el correspondiente
        </option>           
        <?php
        $query="select * from habilidad";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['idhabilidad'].'">'.$row['nombre'].'</option>';
            }
        }
        ?>
     </select>
                   <div class="labelac">Habilidad 5</div>
  <select class="form-control dropd">
    <option>
        Selecciona el correspondiente
        </option>           
        <?php
        $query="select * from habilidad";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['idhabilidad'].'">'.$row['nombre'].'</option>';
            }
        }
        ?>
     </select> 
              <div class="labelac">Localidad</div>
  <select class="form-control dropd">
    <option>
        Selecciona el correspondiente
        </option>           
        <?php
        $query="select * from localidad";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['idlocalidad'].'">'.$row['nombre'].'</option>';
            }
        }
        ?>
     </select>
         <div class="labelac">Nivel de inglés</div>
 <select class="form-control dropd">
    <option>
        Selecciona el correspondiente
        </option>           
        <?php
        $query="select * from ingles";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['idingles'].'">'.$row['nivel'].'</option>';
            }
        }
        ?>
     </select>
     <div class="labelac">Edad requerida</div>
 <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="nombre" class="form-control" name="telefono" ria-describedby="sizing-addon1" value="">
                   </div>
                  <div class="labelac">Activo</div>
 <select class="form-control dropd">
    <option>
        Selecciona el correspondiente
        </option>  
     <option value="si" name="activo">Sí</option> 
     <option value="no" name="activo">No</option> 
                   </select>
    <div class="input-group">
    <button type="submit" class="btn btn2" name="reg_user_register">Registrar</button>
  	</div>
    
         </form>
   <!-- <script>
   $("select[name='competencia']").change(function(){
       var competenciaID = $(this).val();
       if(competenciaID){
                  $.ajax({
            url: "ajax.php",
            dataType: 'Json',
            data: {'id':competenciaID},
            success: function(data) {
                $('select[name="tecnica"]').empty();
                $.each(data, function(key, value) {
                    $('select[name="tecnica"]').append('<option value="'+ key +'">'+ value +'</option>');
                });
            }
        });
    }else{
        $('select[name="tecnica"]').empty();
    }
});                      }
                   </script>-->
         
      </div>
    <div class="cuerpo">
</div>
    </div>
    
<!--<a role="button" class="btn btn-success btn-lg btn-block" href="#!Registro">Registrar Alumno</a>-->
    <?php endif ?>

