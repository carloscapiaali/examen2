<?php
    include "cabecera.php";

?>

<div class="container">
    <div class="row justify-content-md-center">
        <div class="col col-md-7" >
            <h3 > UNIVERSIDAD MAYOR DE SAN ANDRES</h3> 
            <h3>DIV DE GESTIONES ADMINISIONES Y REGISTRO</h3> 
            <h3>DIV DE SISTEMAS DE INFORMACION Y ESTADISTICA</h3> 
        </div>
    </div>
    <div class="row justify-content-md-center">
        <div class="col-md-3">
         Fecha Llenado: <?php echo  date("d") . " del " . date("m") . " de " . date("Y");
 ?>
        </div>
    </div>
</div>

<div class="container" style="background:#F6F6F6;" >
    <div class="row" style="background:#E2E2E2;">
        <div class="col-md-2">
         <h5>Datos Personales</h5> 
        </div>
    </div>
    <div class="row">
    <div class="col-md-8">
    <?php
   foreach( $filaDEst as $clave => $valor){
  
    echo "<div class='row'>";
    echo    "<div class='col-md-4'>";
    echo    $clave;  
    echo    "</div>";
    echo    "<div class='col-md-4'>";
    echo    $valor;
    echo    "</div>";
    echo "</div>"; 
    }
    ?> 
    </div>
    <div class="col-md-4">
    <table class="table table-bordered" stily="content:center">
      <thead>
        <tr>
          <th scope="col">CPT</th>
          <th colspan="4">3123-1263-1623</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td  colspan="5">
          General 27.0<br>
         <h6> TOTAL A PAGAR EN Bs 27.0<br></h6>
          </td>
        </tr>
        <tr>
          <th colspan="5">Valido hasta: <?php echo  (date("d")+2)." del " . date("m") . " de " . date("Y");?>
          </th>
        </tr>
      </tbody>
    </table>
    </div> 
    </div>
</div>
<br>
<div class="container" style="background:#F6F6F6;" >
    <div class="row" style="background:#E2E2E2;">
        <div class="col-md-4">
            <h5> Detalle de la Carrera que postula</h5>
        
        </div>
    </div>
    <?php
   
   foreach( $filaDUniv as $clave => $valor){
   
    echo "<div class='row'>";
    echo    "<div class='col-md-3'>";
    echo    $clave;  
    echo    "</div>";
    echo    "<div class='col-md-3'>";
    echo    $valor;
    echo    "</div>";
    echo "</div>"; 
    }  
    
  ?> 
</div>
<br>
<div class="container" >
    <div class="row justify-content-md-center">
        <div class="col col-md-7" >
            <h6 >El estudiante da fe de que las imagenes registradas en el sistema, son copias de los originales</h3> 
             
        </div>
    </div><br><br>
    <div class="row justify-content-md-center">
        <div class="col col-md-3" >
            <h5>____________________________</h5> 
            <h5>FIRMA DEL INTERESADO</h5> 
        </div>
    </div>
    <div class="row justify-content-md-center">
        <div class="col col-md-2" >
            <input type="button" value="Imprimir" name="imprimir" class="btn btn-secondary"/><br><br>
        </div>
    </div>
</div>


