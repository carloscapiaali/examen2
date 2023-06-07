<?php
 
//mostramos el registro de actividades del usuario 
include "conexion.inc.php";
session_start();
$usuario=$_SESSION["usuario"];
$sql="select * from flujo_tramites ";
$sql.="where usuario='".$usuario."' and fechafin is null";

$resultado=mysqli_query($con,$sql);
?>
<table >
    <tr>
        <td>flujo</td>
        <td>proceso</td>
        <td>nro_tramite</td>
        <td>fechaini</td>
        <td>fechafin</td>
        <td>usuario</td>
    </tr>    

<?php

while($fila=mysqli_fetch_array($resultado)){

    echo "<tr>";
    echo "<td>".$fila["flujo"]."</td>";
    echo "<td>".$fila["proceso"]."</td>";
    echo "<td>".$fila["nro_tramite"]."</td>";
    echo "<td>".$fila["fechaini"]."</td>";
    echo "<td>".$fila["fechafin"]."</td>";
    echo "<td>".$fila["usuario"]."</td>";
    
    echo "<td><a href='flujo.php?flujo=".$fila["flujo"]."&proceso=".$fila["proceso"]."'>ir</td>";
    echo "</tr>"; 
}
?>
</table>

