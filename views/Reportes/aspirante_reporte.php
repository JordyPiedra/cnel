<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include_once HEAD_U; ?>
    </head>
    <body>

            <?php include_once MENU_F; ?>

 <script src="<?= URL . 'public/js/highcharts.js' ?>"></script>

           
              <div class="row ">
     
 <div class="container">


   <nav class="blue darken-1">
    <div class="nav-wrapper">
     
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li ><a href="<?= URL ?>Management/reportes">Reportes</a></li>
        <li class="active"><a href="<?= URL ?>Reportes/aspirante_reporte">Aspirantes</a></li>
        <li><a href="<?= URL ?>Management/concurso_finalizado">Concursos finalizados</a></li>
       
      </ul>
    </div>
  </nav>
            
                             <div class="col  s12  m12 l12 z-depth-1">


                            <div class="col l12 m12 s12 center-align ">
                                        <h5 class="blue-text text-darken-2">Filtro de reportes</h5>
                                    </div>
                            <br>
                            <br>
 
<div class="col l12 m12 s12 center-align ">
<form name="parametros" target="_blank" id="parametros" method="POST" action="<?php echo URL; ?>Reportes/chart">
       
    <div class="col l6 m6 s6 left-align">
      <input name="CHKAPRA" type="checkbox" value="CVA" id="CHKAPRA" />
      <label for="CHKAPRA">Perfiles Aprobados</label>
    </div>
    
    <div class="col l6 m6 s6 left-align">
      <input name="CHKSEXH" type="checkbox" value="SXH" id="CHKSEXH" />
      <label for="CHKSEXH">Género</label>
    </div>
    
   <input type="submit" id="ver_c" style="">   </form>
</div>
<br>



   
                </div>
            </div>
        </div>

     <form target="_blank"  method="POST"> 
            <input type="hidden" name="IDCON_" id="par" value=""> 
           
        </form>


        <?php include_once SCRIPT_U; ?> 
         <script>var URL = '<?= URL ?>';</script>
         <script src="<?= URL . 'public/js/charts.js' ?>"></script>
    </body>
<script src="<?php echo URL; ?>/public/js/globalJS.js"></script>
<script src="<?php echo URL; ?>/public/js/controllerReporte.js"></script>
    <script>

$(document).ready(function() {
  $('table.highchart').highchartTable();
});
   
    </script>
</html>


