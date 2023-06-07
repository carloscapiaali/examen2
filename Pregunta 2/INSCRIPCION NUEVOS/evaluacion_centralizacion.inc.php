<?php
    include "cabecera.php";
?>

  
<div class="container" style="background:#FCFBEA;" >
    <div class="row" style="background:#ECEAC5;">
        <div class="col-md-2">
         <h5>Datos Completos</h5> 
        </div>
    </div>
    <?php
    $sw = 1;
   foreach( $filaR as $clave => $valor){
    if($sw==1){
    echo "<div class='row justify-content-md-center '>";
    echo    "<div class='col-md-3'>";
    echo    $clave;  
    echo    "</div>";
    echo    "<div class='col-md-3'>";
    echo    '<h6><input type="text" name="'.$clave.'" value="'.$valor.'"></h6>';
    echo    "</div>";
    $sw=0;
    }else{
    echo "    <div class='col-md-3'>";
    echo         $clave;
    echo "    </div>";
    echo "    <div class='col-md-3'>";
    echo     '<h6><input type="text" name="'.$clave.'" value="'.$valor.'"></h6>';
    echo "    </div>";
    echo "</div>"; 
    $sw=1;
    }  
    }
  ?> 
</div>
<br>

<div class="container" >
    <div class="row justify-content-md-center">
        <img width="700px" height="1000px" padding="1em" src="data:image/jpg;base64,<?php echo base64_encode($filaAdj["cert_nacimiento"]);?>">
        <input type="file" name="cert_nacimiento" value="">
    </div>

    <div class="row justify-content-md-center">
        <img width="700px" height="1000px" padding="1em" src="data:image/jpg;base64,<?php echo base64_encode($filaAdj["carnet"]);?>">
        <input type="file" name="carnet" value="">
    </div>
    <div class="row justify-content-md-center">
        <img width="700px" height="1000px" padding="1em" src="data:image/jpg;base64,<?php echo base64_encode($filaAdj["dipl_bachiller_anverso"]);?>">
        <input type="file" name="dipl_bachiller_anverso" value="">
    </div>
    <div class="row justify-content-md-center">
        <img width="700px" height="1000px" padding="1em"src="data:image/jpg;base64,<?php echo base64_encode($filaAdj["dipl_bachiller_reverso"]);?>">
        <input type="file"  name="dipl_bachiller_reverso" value="">
   
    </div> 
    <div class="row justify-content-md-center">
        <img width="700px" height="1000px" padding="1em" src="data:image/jpg;base64,<?php echo base64_encode($filaAdj["cert_habilitacion"]);?>">
        <input type="file"  name="cert_habilitacion" value="">
    
    </div>
</div>

