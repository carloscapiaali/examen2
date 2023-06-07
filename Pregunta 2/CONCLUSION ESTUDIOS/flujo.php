<?php
include "cabecera.php";
//recibe el flujo y proceso del motor.php, para mostrar la pantalla correspondiente
$flujo=$_GET["flujo"];
$proceso=$_GET["proceso"];

include "conexion.inc.php";
$sql="select * from flujo_procesos ";
$sql.="where flujo='".$flujo."' and ";
$sql.="proceso='".$proceso."'";

$resultado=mysqli_query($con,$sql);
$fila=mysqli_fetch_array($resultado);
$pantalla=$fila["pantalla"];
$tipo=$fila["tipo"];
include $pantalla.".datos.inc.php";


//luego se contruye la pantalla correspondiente con un include y listo para enviar su peticion al motor de una sig proceso
?>

<form method="POST" action="motor.php" enctype="multipart/form-data" >
    <?php
    //se incluye la pantalla
    include $pantalla.".inc.php";
    ?>
    <input type="hidden" value="<?php echo $flujo;?>" name="flujo"/>
    <input type="hidden" value="<?php echo $proceso;?>" name="proceso"/>
    <input type="hidden" value="<?php echo $pantalla;?>" name="pantalla"/>
    <br>
    <?php
        if($tipo=="C")
        {
    ?>
    <div class="row justify-content-md-center">
        <div class="col col-md-1">
            <input type="submit" value="Si" name="si" class="btn btn-primary"/>
        </div>
        <div class="col col-md-1">
            <input type="submit" value="No" name="no" class="btn btn-primary"/>
        </div>
    </div>
    <?php
        }else{
    ?>
    <div class="row justify-content-md-center">
        <div class="col col-md-1">
            <input type="submit" value="Anterior" name="Anterior" class="btn btn-primary"/>
        </div>
        <div class="col col-md-1">
            <input type="submit" value="Siguiente" name="Siguiente" class="btn btn-primary"/>
        </div>
    </div>
    <?php
        }
    ?>
</form>