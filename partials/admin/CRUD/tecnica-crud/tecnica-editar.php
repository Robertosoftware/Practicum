<?php session_start();?>
<div class="jumbotron labelac">
<form method="post" action="partials/admin/action.php">
<?php
        $db = mysqli_connect('localhost', 'root', '254088Ma!', 'mandra');
        mysqli_set_charset($db, 'utf8');
        $numero = $_SESSION['id'];
        $query="select * from tecnica where idtecnica='$numero'";
        $result= mysqli_query($db, $query);
        $nombre="";
        $number="";
     if($result)
        {
            while($row=mysqli_fetch_array($result)){
                $nombre= $row['nombre'];            }
        }
          ?>
           <label>Id</label>
 <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="text" class="form-control" name="id" ria-describedby="sizing-addon1" value="<?php 
echo $_SESSION['id'];
?>" placeholder="" readonly>
</div>
                <label>Nombre</label>
      <div class="input-group input-group-lg">
 <span class="input-group-addon" id="sizing-addon1"></span>
  <input type="text" class="form-control" name="nombre" aria-describedby="sizing-addon1" value="<?php
echo $nombre;                                                                                                
?>">
</div>
                    <label>Competencia</label>
  <select name="competencia4" class="form-control dropd">
    <?php
        $query="select idcompetencia, competencia.nombre from competencia, tecnica where idcompetencia=competencia_idcompetencia and idtecnica='$numero'";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                $number=$row['idcompetencia'];
                echo'<option value="'.$row['idcompetencia'].'">'.$row['nombre'].'</option>';
            }
        }
        ?>      
        <?php
        $query="select * from competencia where idcompetencia!='$number'";
        $result= mysqli_query($db, $query);
        if($result)
        {
            while($row=mysqli_fetch_array($result)){
                echo'<option value="'.$row['idcompetencia'].'">'.$row['nombre'].'</option>';
            }
        }
        ?>
     </select>
  	<div class="input-group">
  		<button type="submit" class="btn btn-info btn-lg" name="tecnica_editar">Cambiar datos</button>
  	</div>
      	<p>
         <a href="index-admin.php#!/Tecnica">¿Deseas regresar?</a>
  	</p>
  </form>
</div>