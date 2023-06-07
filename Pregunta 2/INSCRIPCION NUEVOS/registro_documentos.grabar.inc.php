<?php
session_start();
$Sexo=$_POST["Sexo"];
$Nacionalidad=$_POST["Nacionalidad"];
$Estado_Civil=$_POST["Estado_Civil"];
$Pais_Origen=$_POST["Pais_Origen"];
$Fecha_de_Nacimiento=$_POST["Fecha_de_Nacimiento"];
$Departamento=$_POST["Departamento"];
$Provincia=$_POST["Provincia"];

$sql="update workflow.datosEst ";
$sql.="set Sexo='".$Sexo."',";
$sql.="Nacionalidad='".$Nacionalidad."',";
$sql.="Estado_Civil='".$Estado_Civil."',";
$sql.="Pais_Origen='".$Pais_Origen."',";
$sql.="Fecha_de_Nacimiento='".$Fecha_de_Nacimiento."',";
$sql.="Departamento='".$Departamento."',";
$sql.="Provincia='".$Provincia."' ";
$sql.="where Ci=".$_SESSION['cod'];
$resultadoG=mysqli_query($con,$sql);

$cert_nacimiento=addslashes(file_get_contents($_FILES["cert_nacimiento"]["tmp_name"]));
$carnet=addslashes(file_get_contents($_FILES["carnet"]["tmp_name"]));
$dipl_bachiller_anverso=addslashes(file_get_contents($_FILES["dipl_bachiller_anverso"]["tmp_name"]));
$dipl_bachiller_reverso=addslashes(file_get_contents($_FILES["dipl_bachiller_reverso"]["tmp_name"]));
$cert_habilitacion=addslashes(file_get_contents($_FILES["cert_habilitacion"]["tmp_name"]));

$sql="update workflow.archivosAdj ";
$sql.="set cert_nacimiento='".$cert_nacimiento."',";
$sql.="carnet='".$carnet."',";
$sql.="dipl_bachiller_anverso='".$dipl_bachiller_anverso."',";
$sql.="dipl_bachiller_reverso='".$dipl_bachiller_reverso."',";
$sql.="cert_habilitacion='".$cert_habilitacion."' ";
$sql.="where Ci=".$_SESSION['cod'];
$resultadoG=mysqli_query($con,$sql);

?>