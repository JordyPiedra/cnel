<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include_once HEAD_U; ?>
    </head>
    <body>
       <?php include_once MENU_F; ?>
           <?php $concurso = $this->data['Concurso']; ?>
    <div class="row ">
    <div class="container">
    <nav class="blue darken-1">
    <div class="nav-wrapper">
     
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li ><a href="procesos">Concursos</a></li>
        <li ><a onclick="Materialize.toast('No se puede volver hacia un estado anterior del concurso.',3000);">Reclutamiento</a></li>
        <li class="active"><a>Calificacion</a></li>
      </ul>
    </div>
  </nav>
  
  </div> 
  </div>
  
   <div class="col l12 m12 s12 center-align ">
      <p class="blue-text text-darken-2">Poceso de Reclutamiento del Concruso <?= $concurso[0][5]; ?> - <?= $concurso[0][1]; ?> Fecha de culminación <?= $concurso[0][11]; ?> </p>
    </div>
        <div class="row ">
            <div class="col  s12  m12 l12 z-depth-1">

                <div class="col l4 m12 s12 center-align ">

                  <ul class="collapsible" data-collapsible="accordion" style="font-size:12px;">
   
        
                        <p class="blue-text text-darken-2">Fases del concurso</p>


                        <?php
                        $BCO_IDinicial;
                        $IDBCONTOKENinicial;
                        foreach ($this->data['fasesConcurso'] as $key => $value) {
                     
                            if($key==0)
                            {
                                echo '<li class="active">
                                <div onclick="mostrar_menufa(' . $value[0] . ",'" . $value[11] ."','".$value[7]."'". ');" class="collapsible-header left-align active"><i class="material-icons">send</i>' . $value[7] .'</div>
                                 <div class="collapsible-body">
                                  Puntuación Máxima: ' . $value[3] . 
                                 '<p>Descripción:' . $value[12] . '</p></div>  </li>';
                                $BCO_IDinicial=$value[0];
                                $IDBCONTOKENinicial=$value[11];
                            }
                            else 
                            {
                                echo '<li>
                                <div onclick="mostrar_menufa(' . $value[0] . ",'".$value[11] ."','".$value[7]."'". ');" class="collapsible-header left-align"><i class="material-icons">send</i>' .  $value[7] . '</div>
                                 <div class="collapsible-body">
                                  Puntuación Máxima: ' . $value[3] . 
                                 '<p>Descripción:' . $value[12] . '</p></div>  </li>';
                            }
                            
                        }
                        ?>  

         
                    
  </ul>

                </div>
                <div class="col l8 m12 s12 center-align ">
                    <p class="blue-text text-darken-2">Poceso de Calificación</p>
                        <div class="col l12 m12 s12 right-align">
                                
                        <div class="col l6 m12 s12 left-align">
                        <a class="waves-effect waves-light btn  light-blue darken-3"  onclick="agregar_calificacion();"><i class="material-icons left">done</i>Calificar  </a>
                        <p id='TITULOFASE' class="blue-text"><?=$this->data['fasesConcurso'][0][7]?></p>
                        </div>
                         <div class="col l6 m12 s12 right-align">
                         <a id="terminabtn" class="waves-effect waves-light btn  light-blue darken-3 "   onclick="MSGfinFase();"><i class="material-icons left">exit_to_app</i>Terminar  </a>
                        </div>
           </div>   
<?php
// var_dump($this->data['AspirantesConcurso'] );
$this->ncal=0;
foreach ($this->data['fasesConcurso'] as $key1 => $value1) {
  if($key1==0)
        echo '<form  name="aspfas'.$value1[0].'" id="aspfas'.$value1[0].'" >';
        else
         echo '<form name="aspfas'.$value1[0].'" id="aspfas'.$value1[0].'" style="display:none;">';
         echo    '
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
         <tbody>
         ';
    foreach ($value1['AspirantesConcurso'] as $key => $value) {
    echo' 
    <tr class="center-align">
    <td id="A_CODE" style="display:none;">' . $value[0] . '</td>
    <td><i class="material-icons light-green-text text-accent-3 small ">label</i></td>
    <td>' . $value[1] . '</td>
    <td>' . $value[2] .' ' . $value[3] .' ' . $value[4] .' '. $value[5] . '</td>
    <td>'. $value[6] .'</td>
    <td>
    <div  class="input-field col S2"  class="ui-widget valign-wrapper " class="browser-default">
    <input style="height: 20px; padding-top: 10px;" value="'. $value[8] .'" id="VALOR" max="'. $value1[3] .'" name="' . $value[0] . '" type="number" class="valign-wrapper valign"  >
    </div >
    <div id="base" style="padding-top: 20px;">/'. $value1[3] .'</div>
    </td>
    </tr>
  
    ';

    }
    echo '  </tbody>
    </table>
    </form>';
}
 if($value[8]==0 )
    $this->ncal +=1;
?>   

                            
                        

                </div>
            </div>

        </div>
        
        <!-- Modal Departamento -->
        <div id="final_fase" class="modal">
            <div class="modal-content center-align">
                <h5>Finalizar Fase</h5>
            </div>
            <div class="modal-content center-align">
               
                                    <div class="center-align col l12 m6 s6">
                                        <div class="center-align col l6 m12 s12">
                                            <a class=" center-align waves-effect waves-light btn blue" onclick="finaliza_fase();" id="guardar_D" >Guardar</a>

                                        </div> 
                                        <div class="center-align col l6 m12 s12">
                                            <a class=" center-align waves-effect waves-light btn blue" onclick=" $('#final_fase').closeModal()">Cancelar</a>

                                        </div>


                                    </div>
            </div>
        </div>  
         <div id="modalAPRO" class="modal" style="z-index: 1003; display: none; opacity: 0; transform: scaleX(0.7); top: 4%;">
  <div class="modal-content center-align">
    <p><i class="material-icons medium red-text">info</i></p>
    <h5 id="mensajeAlert" class=" red-text"></h5>
  </div>
  <div class="modal-footer">
    <a href="javascript:" class="modal-action modal-close waves-effect waves-green blue-text btn-flat" id="cancel">Cancelar</a>
    <a href="javascript:" class="modal-action modal-close waves-effect waves-red  red-text  btn-flat" id="accept">Aceptar</a>
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
         <script>
  var Ncalcero=<?php echo $this->ncal; ?> ;
  var IDBCON=<?php echo $BCO_IDinicial; ?> ;
  var IDBCONTOKEN="<?php echo $IDBCONTOKENinicial; ?>";
  </script>
        <script src="<?= URL . 'public/js/controllerCalificacion.js' ?>"></script>
        <script>
                $( document ).ready(function(){
        $(".button-collapse").sideNav();
        $("#mprocess").attr("class","active");
    })

        </script>
    </body>

</html>

