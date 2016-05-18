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
        <li><a href="reportes">Reportes</a></li>
        <li class="active"><a href="<?= URL ?>/Reportes/aspirante_reporte">Aspirantes</a></li>
        <li><a href="concurso_finalizado">Concursos finalizados</a></li>
       
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
<form name="parametros" id="parametros">
    <div class="col l6 m6 s6 z-depth-1">           
    <div class="col l6 m6 s6 left-align">
      <input name="CHKAPRA" type="checkbox" value="CVA" id="CHKAPRA" />
      <label for="CHKAPRA">Aprobados</label>
    </div>
    <div class="col l6 m6 s6 left-align">
      <input name="CHKAPRN" type="checkbox" value="CVN" id="CHKAPRN" />
      <label for="CHKAPRN">No Aprobados</label>
    </div>
    </div>
        <div class="col l6 m6 s6 z-depth-1">           
    <div class="col l6 m6 s6 left-align">
      <input name="CHKSEXH" type="checkbox" value="SXH" id="CHKSEXH" />
      <label for="CHKSEXH">Hombre</label>
    </div>
    <div class="col l6 m6 s6 left-align">
      <input name="CHKSEXM" type="checkbox" value="SXM" id="CHKSEXM" />
      <label for="CHKSEXM">Mujer</label>
    </div>
    </div>
        <div class="col l6 m6 s6 z-depth-1">           
    <div class="col l6 m6 s6 left-align">
      <input name="RDBTAPR" type="checkbox" id="RDBTAPRA" />
      <label for="RDBTAPRA">Discapacidad</label>
    </div>
    <div class="col l6 m6 s6 left-align">
      <input name="RDBTAPR" type="checkbox" id="RDBTAPRN" />
      <label for="RDBTAPRN">Extrangeros</label>
    </div>
    </div>
       
    <a class="waves-effect waves-light btn" onclick=" genera_chart();">Modal</a>
  </form>
</div>
<br>



   
                </div>
            </div>
        </div>



<!-- Modal Trigger -->
 

  <!-- Modal Structure -->
  <div id="modal1" class="modal modal-fixed-footer">
    <div class="modal-content">
      <div class="col l12 m12 s12 center-align ">
      <table class="highchart" data-graph-container-before="1" data-graph-type="pie" style="display:none" data-graph-datalabels-enabled="1">
    <thead id="option">
        <tr>                                  
            <th>Month</th>
            <th>Sales</th>
        </tr>
     </thead>
     <tbody id="detalle">
        <tr>
            <td>January</td>
            <td data-graph-name="January" data-graph-item-highlight="1">8000</td>
        </tr>
        <tr>
            <td>February</td>
            <td data-graph-name="February">12000</td>
        </tr>
        <tr>
            <td>March</td>
            <td data-graph-name="March">18000</td>
        </tr>
    </tbody>
</table>
    </div>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Agree</a>
    </div>
  </div>

        <?php include_once SCRIPT_U; ?> 
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


