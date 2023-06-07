<?php
  session_start();
  $sql="select DISTINCT x.Ci,y.*,z.* from  workflow.datosest y, workflow.datosuniv z, workflow.pagosrealizados x ";
  $sql.="where y.Ci=z.Ci AND z.Ci=x.Ci AND ";
  $sql.="y.Ci="."123456";
  $resultadoR=mysqli_query($con,$sql);
  $filaR=mysqli_fetch_array($resultadoR,MYSQLI_ASSOC);

  $sql="select * from workflow.archivosAdj ";
  $sql.="where Ci="."123456";
  $resultadoAdj=mysqli_query($con,$sql);
  $filaAdj=mysqli_fetch_array($resultadoAdj);
?>