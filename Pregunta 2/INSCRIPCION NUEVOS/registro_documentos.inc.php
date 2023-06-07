<?php
    include "cabecera.php";

?>

<div class="container">
    <div class="row justify-content-md-center">
        <div class="col col-md-2">
            <h3>Bienvenido</h3> 
        </div>
    </div>
    <div class="row justify-content-md-center">
        <div class="col-md-auto">
            <img src="..." class="img-thumbnail" alt="...">
        </div>
    </div>
    <div class="row justify-content-md-center">
        <div class="col-md-auto">
            <h2><?php echo $nombre; ?></h2> 
        </div>
    </div>
</div>
<div class="container" style="background:#FCFBEA;" >
    <div class="row" style="background:#ECEAC5;">
        <div class="col-md-2">
         <h5>Datos Generales</h5> 
        </div>
    </div>
    <?php
    $sw = 1;
   foreach( $filaDUniv as $clave => $valor){
    if($sw==1){
    echo "<div class='row justify-content-md-center '>";
    echo    "<div class='col-md-2'>";
    echo    $clave;  
    echo    "</div>";
    echo    "<div class='col-md-2'>";
    echo    "<h6>".$valor."</h6>";
    echo    "</div>";
    $sw=0;
    }else{
    echo "    <div class='col-md-2'>";
    echo         $clave;
    echo "    </div>";
    echo "    <div class='col-md-2'>";
    echo "        <h6>".$valor."</h6>";
    echo "    </div>";
    echo "</div>"; 
    $sw=1;
    }  
    }
  ?> 
</div>
<br>

<div class="container" style="background:#FCFBEA;" >
    <div class="row" style="background:#ECEAC5;">
        <div class="col-md-2">
         <h5>Datos Personales</h5> 
        </div>
    </div>
    <?php
    $sw = 1;
   foreach( $filaDEst as $clave => $valor){
    if($sw==1){
    echo "<div class='row justify-content-md-center '>";
    echo    "<div class='col-md-2'>";
    echo    $clave;  
    echo    "</div>";
    echo    "<div class='col-md-2'>";
    echo    '<input type="text" name="'.$clave.'" value="'.$valor.'">';
    echo    "</div>";
    $sw=0;
    }else{
    echo "    <div class='col-md-2'>";
    echo         $clave;
    echo "    </div>";
    echo "    <div class='col-md-2'>";
    echo     '<input type="text" name="'.$clave.'" value="'.$valor.'">';
    echo "    </div>";
    echo "</div>"; 
    $sw=1;
    }  
    }
    ?> 
        <div class="col col-md-2">
        </div>
        <div class="col col-md-2">
        </div>
       </div>
</div>
<br>
<div class="container" >
    <div class="row justify-content-md-center">
    <div class="col-md-5" style="border:1px solid black;width:350px;height:350px; padding:1em">
        <img width="300px" height="300px" src="data:image/jpg;base64,<?php echo base64_encode($filaAdj["cert_nacimiento"]);?>">
        <input type="file" <?php echo (!isset($filaAdj["cert_nacimiento"])? "REQUIRED" :  "")?> name="cert_nacimiento" value="">
    </div>
    <div class="col-md-4"  style="border:1px solid black;width:350px;height:350px;padding:1em">
        <img width="300px" height="300px" src="data:image/jpg;base64,<?php echo base64_encode($filaAdj["carnet"]);?>">
        <input type="file" <?php echo (!isset($filaAdj["carnet"])? "REQUIRED" :  "")?> name="carnet" value="">
    </div>
    <div class="col-md-4"  style="border:1px solid black;width:350px;height:350px;padding:1em">
        <img width="300px" height="300px" src="data:image/jpg;base64,<?php echo base64_encode($filaAdj["dipl_bachiller_anverso"]);?>">
        <input type="file"<?php echo (!isset($filaAdj["dipl_bachiller_anverso"])? "REQUIRED" :  "")?> name="dipl_bachiller_anverso" value="">
    </div>
    <div class="col-md-4" style="border:1px solid black;width:350px;height:350px;padding:1em">
        <img width="300px" height="300px" src="data:image/jpg;base64,<?php echo base64_encode($filaAdj["dipl_bachiller_reverso"]);?>">
        <input type="file" <?php echo (!isset($filaAdj["dipl_bachiller_reverso"])? "REQUIRED" :  "")?> name="dipl_bachiller_reverso" value="">
    </div>
    <div class="col-md-4" style="border:1px solid black;width:350px;height:350px;padding:1em">
        <img width="300px" height="300px" src="data:image/jpg;base64,<?php echo base64_encode($filaAdj["cert_habilitacion"]);?>">
        <input type="file"  <?php echo (!isset($filaAdj["cert_habilitacion"])? "REQUIRED" :  "")?> name="cert_habilitacion" value="">
    </div>
    </div>
</div>







