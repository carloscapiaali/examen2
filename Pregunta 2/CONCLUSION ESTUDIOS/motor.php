<?php
$sw=false;
//el motor busca al proceso sig o anterior del proceso actual, para formar un parametro que indique cual es su sig proceso
$flujo=$_POST["flujo"];
$proceso=$_POST["proceso"];
$procesoAnt=$_POST["proceso"];
$pantalla=$_POST["pantalla"];
include "conexion.inc.php";
//antes de pasar al siguiente proceso este grabar los datos del proceso actual
include $pantalla.".grabar.inc.php";
if(isset($_POST["Siguiente"])){
    $sql="select flujo, proceso_sig as proceso_selecionado from flujo_procesos ";
    $sql.="where flujo='".$flujo."' and ";
    $sql.="proceso='".$proceso."'";
    
}

if(isset($_POST["Anterior"])){
    $sql="select proceso as proceso_selecionado from procesos_condicionales ";
    $sql.="where flujo='".$flujo."' and ";
    $sql.="( xsi='".$proceso."' or ";
    $sql.="xno='".$proceso."')";
    $resultado=mysqli_query($con,$sql);
    $fila=mysqli_fetch_array($resultado);
    echo isset($fila["proceso_selecionado"]);
    if(isset($fila["proceso_selecionado"])){
        $sw=true;
    }else{
    $sql="select flujo, proceso as proceso_selecionado  from flujo_procesos ";
    $sql.="where flujo='".$flujo."' and ";
    $sql.="proceso_sig='".$proceso."'";
    }
}
if(isset($_POST["si"])){
    $sql="select flujo, xsi as proceso_selecionado  from procesos_condicionales ";
    $sql.="where flujo='".$flujo."' and ";
    $sql.="proceso='".$proceso."'";
    
}

if(isset($_POST["no"])){
    $sql="select flujo, xno as proceso_selecionado  from procesos_condicionales ";
    $sql.="where flujo='".$flujo."' and ";
    $sql.="proceso='".$proceso."'";

}
if(!$sw){
$resultado=mysqli_query($con,$sql);
$fila=mysqli_fetch_array($resultado);
}

$proceso=$fila["proceso_selecionado"];

$sql="select rol from flujo_procesos ";
$sql.="where flujo='".$flujo."' and ";
$sql.="proceso='".$proceso."'";
$resultado=mysqli_query($con,$sql);
$fila=mysqli_fetch_array($resultado);
session_start();
$rol=$_SESSION["rol"];

print("hola mundod");
echo '<script>console.log("hola");</script>';
if($rol!=$fila["rol"]){
    $proceso=$procesoAnt;
    
}

$parametros="?flujo=".$flujo;
$parametros.="&proceso=".$proceso;
header("Location: flujo.php".$parametros); 
?>
