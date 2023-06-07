<?php
  session_start();
  $sql="select * from workflow2.datosUniv ";
  $sql.="where Ci=".$_SESSION['cod'];
  $resultadoDUniv=mysqli_query($con,$sql);
  $filaDUniv=mysqli_fetch_array($resultadoDUniv,MYSQLI_ASSOC);

  $sql="select * from workflow2.datosEst ";
  $sql.="where Ci=".$_SESSION['cod'];
  $resultadoDEst=mysqli_query($con,$sql);
  $filaDEst=mysqli_fetch_array($resultadoDEst,MYSQLI_ASSOC);
  $nombre=$filaDEst["Nombre"];

  $sql="select * from workflow2.archivosAdj ";
  $sql.="where Ci=".$_SESSION['cod'];
  $resultadoAdj=mysqli_query($con,$sql);
  $filaAdj=mysqli_fetch_array($resultadoAdj);
?>