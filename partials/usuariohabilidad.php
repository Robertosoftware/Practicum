<?php include('../usuario/session.php');
error_reporting(E_ALL ^ E_WARNING);?>
<div class="jumbotron">
               <form method="post" action="usuario/serverusuario.php">
      <?php  if (isset($_SESSION['correo'])) : ?>
    <?php  $db = mysqli_connect('localhost', 'root', '254088Ma!', 'mandra');
      mysqli_set_charset($db, 'utf8') ?>
                   <h2>Habilidades del usuario.</h2>
                  <div class="labelac">Id del usuario</div>
  <input type="text" class="form-control" name="idusuario2" ria-describedby="sizing-addon1" value="<?php
echo $_SESSION['idusuario'];
?>" placeholder="" readonly>

                   <?php
                    $correo=$_SESSION['correo'];
         $q="select * from user_register where correo = '$correo';";
         $result =mysqli_query($db, $q);
         $row=mysqli_fetch_array($result);
         $id = $row['id_usuario'];



                   $qhabilidad="select * from usuario_has_habilidad where user_register_id_usuario = $id;";
$rhabilidad =mysqli_query($db,$qhabilidad);


                   $i=0;
                   $arreglo = array();
                   $otroarreglo = array();
                                 $arreglo2 = array();


                    while($res=mysqli_fetch_array($rhabilidad)){
                        $i++;
                        $arreglo2[$i] = $res['habilidad_idhabilidad'];

                           $cons=mysqli_query($db,"select * from habilidad where idhabilidad = $arreglo2[$i];");
                  // $resultado = mysqli_fetch_array($cons);





                                 while($resultado=mysqli_fetch_array($cons)){

                                     $arreglo[$i] = $resultado['nombre'];
                                     $otroarreglo[$i] = $resultado['idhabilidad'];


                                 }
                    }

                          ?>








                   <div class="labelac">Habilidad 1</div>
  <select name="habilidad1" required class="form-control dropd">
    <option value="<?php  echo $otroarreglo[1]; ?>">
        <?php  echo $arreglo[1]; ?>
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
  <select name="habilidad2" required class="form-control dropd">
    <option value="<?php  echo $otroarreglo[2]; ?>">
        <?php  echo $arreglo[2]; ?>
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
  <select name="habilidad3" required class="form-control dropd">
    <option value="<?php  echo $otroarreglo[3]; ?>">
        <?php  echo $arreglo[3]; ?>
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
                   <!-- <div class="labelac">Activo</div>
 <select required name="activo" class="form-control dropd">
    <option value="">
        Selecciona el correspondiente
        </option>
     <option value="Activar">Activar</option>
     <option value="Desactivar" >Desactivar</option>
                   </select> -->
                <div class="input-group">
    <button type="submit" class="btn btn-success btn-lg" name="usuario_habilidad" value="">Activación</button>
  	</div>
         </form>
        </div>
    <?php endif ?>
