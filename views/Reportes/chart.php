<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include_once HEAD_U; ?>
    </head>
    <body>

           

 <script src="<?= URL . 'public/js/highcharts.js' ?>"></script>

           
              <div class="row ">
     
 <div class="container">


            
                             <div class="col  s12  m12 l12 z-depth-1">


                            <div class="col l12 m12 s12 center-align ">
                                        <h5 class="blue-text text-darken-2">Filtro de reportes</h5>
                                    </div>
                            <br>
                            <br>
 
<div class="col l12 m12 s12 center-align ">
      <div class="col l12 m12 s12 center-align ">
      <table class="highchart" data-graph-container-before="1" data-graph-type="pie" style="display:none" data-graph-datalabels-enabled="1">
    <thead id="option">
           
    <?php
         $cab="";
         foreach ($this->data['R'] as $key => $value) {
            
             if($value[1]=='M' || $value[1]=='F')
            $cab='<tr> <th>Género</th> <th>Cantidad</th></tr>';
             else if($value[1]=='S' || $value[1]=='N')
            $cab='<tr> <th>Perfil</th> <th>Cantidad</th></tr>';
         }
         echo $cab;
         ?>
                                                
           
            
        
     </thead>
     <tbody id="detalle">
         <?php
         
         foreach ($this->data['R'] as $key => $value) {
             //var_dump($value);
             if(isset($value[3])){
                 
             
             if($value[1]=='S' && $value[3]=='F')
             echo'
             <tr>
            <td>Aprobado Femenino</td>
            <td data-graph-name="Aprobado Femenino" data-graph-item-highlight="1">'.$value[2].'</td>
            </tr>
             ';
              else if($value[1]=='S' && $value[3]=='M')
             echo'
             <tr>
           <td>Aprobado Masculino</td>
            <td data-graph-name="Aprobado Masculino" data-graph-item-highlight="1">'.$value[2].'</td>
            </tr>
             ';
            
            
             else if($value[1]=='N' && $value[3]=='F')
             echo'
             <tr>
            <td>No Aprobado Femenino</td>
            <td data-graph-name="No Aprobado Femenino" data-graph-item-highlight="1">'.$value[2].'</td>
            </tr>
             ';
              else if($value[1]=='N' && $value[3]=='M')
             echo'
             <tr>
           <td>No Aprobado Masculino</td>
            <td data-graph-name="No Aprobado Masculino" data-graph-item-highlight="1">'.$value[2].'</td>
            </tr>
             ';
             }else {
            
              if($value[1]=='M')
             echo'
             <tr>
            <td>Masculino</td>
            <td data-graph-name="Maculino" data-graph-item-highlight="1">'.$value[2].'</td>
            </tr>
             ';
             else if($value[1]=='F')
             echo'
             <tr>
            <td>Femenino</td>
            <td data-graph-name="Femenino" data-graph-item-highlight="1">'.$value[2].'</td>
            </tr>
             ';
             else if($value[1]=='S')
             echo'
             <tr>
            <td>Aprobado</td>
            <td data-graph-name="Aprobado" data-graph-item-highlight="1">'.$value[2].'</td>
            </tr>
             ';
             else if($value[1]=='N')
             echo'
             <tr>
            <td>No Aprobado</td>
            <td data-graph-name="No Aprobado" data-graph-item-highlight="1">'.$value[2].'</td>
            </tr>
             ';
         }
         }
         ?>
        
       
    </tbody>
</table>
    </div>  
</div>
<br>



   
                </div>
            </div>
        </div>



<!-- Modal Trigger -->
 

  <!-- Modal Structure -->
  <div id="modal1" class="modal modal-fixed-footer">
    <div class="modal-content">

    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Agree</a>
    </div>
  </div>

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


