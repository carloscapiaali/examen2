<?php
    include "cabecera.php";

?>

<div class="container">
    <div class="row justify-content-md-center">
        <div class="col col-md-3">
            <br><h3>ELABORACION DE LA CARTA DE SOLICITUD</h3> 
        </div>
    </div>
    <div class='row'>
        <div class="col col-md-6">
        La Paz,<input type="text" name='fecha' value='<?php echo  date("d") . " de " . date("m") . " del " . date("Y");?>'>
        </div>
    </div>
    <div class='row'>
         <br><br> Señor(a)
    </div>
    <div class='row'> <b>
        <br> DECANO DE LA FACULTAD DE CIENCIAS PURAS Y NATURALES
        <br> UNIVERSIDAD MAYOR DE SAN ANDRES</b> 
    </div>
    <div class='row'>
         <br> Presente.- 
         <br><br>
    </div>
    <div class='row'>
         <br> De mi consideracion:<br><br>
    </div>
    <div class='row'>
         Mediante la presente, tengo el agrado de dirigirme a su autoridad muy respetuosamente, para
           solicitar autorice a quien corresponda se me extienda el CERTIFICADO DE
            CONCLUSION DE ESTUDIOS, habiendo concluido el Pensum vigente<input type="text" name='pensum' value="" style="width : 150px;">
            . asimismo, adjunto a la presente toda la documentación requerida.
          
    </div>
    <div class='row'>
        <br> Con este motivo, saludo atentamente.
        <br><br><br>
    </div>
    <div class="row justify-content-md-center">
        <div class="col col-md-3">
            .................................................................................. <br> Firma
        </div>
    </div>
    <div class="row justify-content-md-center">
        <div class="col col-md-4">
            Univ. <input type="text" name='universitario' value="" style="width : 300px;">
        </div>
    </div>
    <div class="row justify-content-md-center">
        <div class="col col-md-4">
        C.I. <input type="text" name='ci' value="" style="width : 300px;">
        </div>
    </div>
    <div class="row justify-content-md-center">
        <div class="col col-md-4">
        Tel. Cel. <input type="text" name='celular' value="" style="width : 300px;">
        </div>
    </div>
    <div class="row justify-content-md-center">
        <div class="col col-md-1" >
           <br><br> <input type="button" value="Imprimir" name="imprimir" class="btn btn-secondary"/><br><br>
        </div>
    </div>
</div>







