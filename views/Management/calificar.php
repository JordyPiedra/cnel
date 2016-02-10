<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include_once HEAD_U; ?>
    </head>
    <body>
       <?php include_once MENU_F; ?>
           <?php $concurso = $this->data['Concurso']; ?>
   <div class="col l12 m12 s12 center-align ">
     <p class="blue-text text-darken-2">Poceso de Calificaciones del Concruso <?= $concurso[0][5]; ?> Fecha de culminación <?= $concurso[0][11]; ?> </p>
    </div>
        <div class="row ">
            <div class="col  s12  m12 l12 z-depth-1">

                <div class="col l4 m12 s12 center-align ">

                  <ul class="collapsible" data-collapsible="accordion">
   
        
                        <p class="blue-text text-darken-2">Fases</p>


                        <?php
                        foreach ($this->data['fasesConcurso'] as $key => $value) {
                            echo '
                             <li><div onclick="valores_maximo(' . $value[0] . ',' . $value[3] . ');" class="collapsible-header left-align"><i class="material-icons">send</i>' . $value[7] . '</div>
                              <div class="collapsible-body"><p>Puntuación Máxima: ' . $value[3] . '</p></div>
                            </li>
    

                            ';
                        }
                        ?>  

         
                    
  </ul>

                </div>
                <div class="col l8 m12 s12 center-align ">
                    <p class="blue-text text-darken-2">Poceso de Calificación</p>
                        <div class="col l12 m12 s12 right-align">
                        <div class="col l6 m12 s12 left-align">
                        <a class="waves-effect waves-light btn  light-blue darken-3"  onclick="agregar_calificacion();"><i class="material-icons left">done</i>Calificar  </a>
                        </div>
                         <div class="col l6 m12 s12 right-align">
                         <a class="waves-effect waves-light btn  light-blue darken-3"  onclick=""><i class="material-icons left">exit_to_app</i>Terminar  </a>
                        </div>
           </div>   
                      <table class="striped highlight " >
                          
 
                            <thead>

                                <tr >
                                    <th data-field="id" id="A_CODE" style="display:none;">#</th>
                                    <th data-field="id">#</th>
                                    <th data-field="id">Cédula</th>
                                    <th data-field="price">Nombre</th>
                                    <th data-field="name">Fecha Nacimiento</th>
                                    <th data-field="name"></th>


                                </tr>
                            </thead>

                            <tbody id="aspiranteConcruso_reclutado" >
<form >
<?php
// var_dump($this->data['AspirantesConcurso'] );
foreach ($this->data['AspirantesConcurso'] as $key => $value) {

echo' 

<tr class="center-align">
<td id="A_CODE" style="display:none;">' . $value[0] . '</td>
<td><i class="material-icons light-green-text text-accent-3 small ">label</i></td>
<td>' . $value[1] . '</td>
<td>' . $value[2] .' ' . $value[3] .' ' . $value[4] .' '. $value[5] . '</td>
<td>'. $value[6] .'</td>

<td>
<div  class="input-field col S2" class="ui-widget valign-wrapper " class="browser-default">
<input id="VALOR" name="' . $value[0] . '"  class="valign-wrapper valign"  >

</div >
<a id="base">0</a>
</td>
</tr>

';

}

?>   
</form>
                            </tbody>
                        </table>

                </div>
            </div>

        </div>
        <?php include_once SCRIPT_U; ?> 
        <?php include_once JSPDF ?>
        <script type="text/javascript">
                var IDCONC=<?=  $concurso[0][0];?>;
                var CONTOKEN="<?=  $concurso[0][14];?>";
        </script>
         <script type="text/javascript">var URL='<?=  URL;?>';</script>
 
         <script src="<?php echo URL; ?>/public/js/globalJS.js"></script>
        <script src="<?= URL . 'public/js/controllerCalificacion.js' ?>"></script>
    </body>

</html>

