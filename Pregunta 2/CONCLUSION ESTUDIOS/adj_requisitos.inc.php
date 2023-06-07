<?php
    include "cabecera.php";
?>

<div class="container">
    <div class="row justify-content-md-center">
        <div class="col col-md-7">
            <br><h3>SOLICITUD DE CERTIFICADO DE CONCLUSION</h3> 
        </div>
    </div>
    <div class="row justify-content-md-center">
        <div class="col col-md-3">
            <br><h4>Datos Generales</h4> 
        </div>
    </div>
    
    <div class="row">
            <br><h5>Correo </h5>
            <input class="form-control" type="text" name='correo'  requered ><br>
    </div>
    <div class="row">
            <br><h5>Celular </h5>
            <input class="form-control" type="text" name='celular'  requered > <br>
    </div>
    <div class="row">
            <br><h5>Apellido Paterno </h5>
            <input class="form-control" type="text" name='paterno' requered >  <br>
    </div>
    <div class="row">
            <br><h5>Apellido Materno </h5>
            <input class="form-control" type="text" name='materno'  requered > <br>
    </div>
    <div class="row">
            <br><h5>Nombres</h5>
            <input  class="form-control" type="text" name='nombre' requered ><br>
    </div>
    <div class="row">
            <br><h5>Cedula de identidad </h5>
            <input class="form-control" type="text" name='ci'  requered ><br>
    </div>
    <div class="row">
            <br><h5>Registro universitario </h5>
            <input class="form-control" type="text" name='regUniv'  requered > <br>
    </div>
    <div class="row">
            <br><h5>Año de ingreso a la carrera </h5>
            <input class="form-control" type="text" name='anioIng' requered > <br>
    </div>
    <div class="row">
            <br><h5>Modalidad de ingreso a la carrera </h5>
            <select  name="modalidad_ing" class="form-control" >
            <option value="prefas">Curso de pre-universitario</option>
            <option value="prueba">Prueba de suficiencia academica</option>
            <option value="traspaso">Traspaso</option>
            <option value="carr_paralela">Carrera paralela</option>
            <option value="profesional">Profesional</option>
            <option value="convenio">Convenio municipio</option>
            <option value="ing_libre">Ingreso libre</option>
            </select><br>
    </div>
    <div class="row">
            <br><h5>Docente Tutor </h5>
            <input class="form-control" type="text" name='tutor'  requered > <br>
    </div>
    <div class="row">
            <br><h5>Docente Asesor </h5>
            <input class="form-control" type="text" name='asesor'  requered > <br>
    </div>
    <div class="row">
            <br><h5>Modalidad de graduacion </h5>
            <select name="mod_graduacion" class="form-control" >
            <option value="tesis">Tesis de grado</option>
            <option value="proyecto">Proyecto de grado</option>
            <option value="excelencia">Excelencia</option>
            </select>  <br>
    </div>
    <div class="row">
            <br><h5>Mencion</h5>
            <select name="mencion" class="form-control" >
            <option value="ing_sist">Ingenieria de sistemas informaticos</option>
            <option value="cienc_compu">Ciencias de la computacion</option>
            </select>  <br>
    </div>
    <div class="row">
            <h5>Titulo de trabajo de grado (debe ser tal cual se aprobo en la resolucion)</h5>
            <input class="form-control" type="text" name='titulo_grado'  requered > <br>
    </div>
</div>

<div class="container">
    <div class="row justify-content-md-center">
        <div class="col col-md-3">
            <br><h4>Datos Generales</h4> <br>
        </div>
    </div>
    <div class="row">
            <h5>Carta firmada y dirigida al (la) señor (a) Decano (a) de la Facultad, solicitando la emisión del Certificado de Conclusión de Estudios</h5>
            <input class="form-control" type="file" name="carta" /><br>
    </div>
    <div class="row">
            <h5>Cédula de Identidad anverso/reverso </h5>
            <input class="form-control" type="file" name="ci" id="file" /><br>
    </div>
    <div class="row">
            <h5>Certificado Único de Calificaciones,  CON APROBACIÓN DE TALLER DE LICENCIATURA II</h5>
            <input class="form-control" type="file" name="calificaciones" id="file" /><br>
    </div>
    <div class="row">
            <h5>Carátula del Trabajo de Grado</h5>
            <input class="form-control" type="file" name="caratula" id="file" /><br>
    </div>
    <div class="row">
            <h5>Resolución de aprobación de Perfil de Grado, con el nombre del tutor y asesor vigente</h5>
            <input class="form-control" type="file" name="perfil" id="file" /><br>
    </div>
    <div class="row">
            <h5>Resolución Decanal o Informe de Convalidación, SOLO EN CASO de haber realizado algún tramite de convalidacion de materias</h5>
            <input class="form-control" type="file" name="convalidacion" id="file" /><br>
    </div>
</div>
