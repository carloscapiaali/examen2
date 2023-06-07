
<?php
//es te archivo unicamente verifica datos de inicio de sesion
include "conexion.inc.php";
$usuario=$_GET["usuario"];
$contraseña=$_GET["contraseña"];

$sql="select * from asignacion_roles ";
$sql.="where usuario='".$usuario."' and ";
$sql.="contraseña='".$contraseña."'";
$resultado=mysqli_query($con,$sql);
$fila=mysqli_fetch_array($resultado);
if($fila!=null){
    session_start();
    $_SESSION["usuario"]=$usuario;
    $_SESSION["rol"]=$fila['rol'];
    $_SESSION["cod"]=$fila['cod'];
    
    header("Location: bentrada.php");
    exit;
}
else{
    header("Location: index.php");
}

?>