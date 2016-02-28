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
        <li class="active"><a href="">Reclutamiento</a></li>
        <li disabled><a onclick="mensajecalificacion();">Calificacion</a></li>
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
                     <!-- Opciones de filtro -->
        <ul class="collapsible" data-collapsible="expandable">
            <li class="blue-text text-darken-2"><i>Buscar resultados por:</i></li>

            <li>
                <div class="collapsible-header left-align"><i class="material-icons">games</i>
                    <input type="checkbox" class="filled-in" id="instruccionF"  />
                    <label for="instruccionF" style="margin-top: 12px;">Instrucción Formal</label>
                </div>
                <div class="collapsible-body">
                    <div class="row">
                    <div  class="col l12">   
                    <form id="InstruccionFormal">
                    <?php 
                    foreach ($this->data['Instruccion'] as $key => $value) {
                            echo '
                            <div class="col l6 m12 s12 left-align  ">   
                            <input type="checkbox" name="instruccionF'.$value[0].'" class="filled-in" id="instruccionF'.$value[0].'" value="'.$value[0].'"  />
                            <label for="instruccionF'.$value[0].'" style="margin-top: 12px;">'.$value[1].'</label>
                            </div>';
                        }

                     ?>
                     </form>
                    </div>
                    </div>
                </div>
            </li>

            <li>
                <div class="collapsible-header left-align"><i class="material-icons">games</i>
                    <input type="checkbox" class="filled-in" id="area"  />
                    <label for="area" style="margin-top: 12px;">Areas de Estudio</label>
                </div>
                <div class="collapsible-body">
                    <div class="row">
                    <div class="col l12">   
                    <form id="AreaEstudio">
                    <?php 
                    foreach ($this->data['AreaEstudio'] as $key => $value) {
                            echo '
                            <div class="col l6 m12 s12 left-align  ">   
                            <input type="checkbox" name="ae'.$value[0].'" class="filled-in" id="ae'.$value[0].'" value="'.$value[0].'"  />
                            <label for="ae'.$value[0].'" style="margin-top: 12px;">'.$value[1].'</label>
                            </div>';
                        }

                     ?>
                     </form>
                    </div>
                    </div>
                </div>
            </li>

            <li>
                <div class="collapsible-header left-align"><i class="material-icons">games</i>
                    <input type="checkbox" class="filled-in" id="Experiencia"  />
                    <label for="Experiencia" style="margin-top: 12px;">Experiencia Laboral</label>
                </div>
                <div class="collapsible-body">
                    <div class="row">
                    <div class="col l12">   
                    <form id="ExperienciaLaboral">
                    <?php 
                    foreach ($this->data['Experiencia'] as $key => $value) {
                            echo '
                            <div class="col l6 m12 s12 left-align  ">   
                            <input type="checkbox" name ="el'.$value[0].'" class="filled-in" id="el'.$value[0].'" value="'.$value[0].'"  />
                            <label for="el'.$value[0].'" style="margin-top: 12px;">'.$value[1].'</label>
                            </div>';
                        }

                     ?>
                     </form>
                    </div>
                    </div>
                </div>
            </li>

            <li>
                <div class="collapsible-header left-align"><i class="material-icons">games</i>
                    <input type="checkbox" class="filled-in" id="discapacidad"  />
                    <label for="discapacidad" style="margin-top: 12px;">Discapacidad</label>
                </div>
                <div class="collapsible-body">
                    <div class="row">
                    <div class="col l12">   
                    <form id="DiscapacidadAspirante">
                    <?php 
                    foreach ($this->data['Discapacidad'] as $key => $value) {
                            echo '
                            <div class="col l6 m12 s12 left-align  ">   
                            <input type="checkbox" name="di'.$value[0].'" class="filled-in" id="di'.$value[0].'" value="'.$value[0].'"  />
                            <label for="di'.$value[0].'" style="margin-top: 12px;">'.$value[1].'</label>
                            </div>';
                        }

                     ?>
                     </form>
                    </div>
                    </div>
                </div>
            </li>
        </ul>
                        <!-- Fin de Opciones de filtro -->
        </div>

        <div class="col l8 m12 s12 center-align ">

        <p class="blue-text text-darken-2">Lista de Aspirantes Aceptados</p>
            <div class="col l12 m12 s12 left-align">
              <div class="col l3 m12 s12 left-align">
                <a class="waves-effect waves-light btn  light-blue darken-3"  onclick="get_aspirantes();"><i class="material-icons left">person_add</i>Agregar Aspirantes</a>
            </div>    
            <div class="col l6 m12 s12 left-align search">
            


       <div class="input-field col l12 s6">
          <input id="last_name" type="search" class="validate">
       

        </div>


           
            </div>    
            <div class="col l3 m12 s12 left-align">
                <a class="waves-effect waves-light btn  light-blue darken-3"  onclick="alerta_iniciar( <?= $concurso[0][0].",'".$concurso[0][5]."','".$concurso[0][1]."','".$concurso[0][13]."'";?>);"><i class="material-icons left">exit_to_app</i>Terminar  </a>
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
<td>
&nbsp;&nbsp;&nbsp;&nbsp;
<a class="tooltipped" data-position="top" data-delay="50" data-tooltip="Visualizar C.V." onclick="ver_CV('.$value[0].')"> <i class="material-icons small">visibility</i></a>
&nbsp;&nbsp;&nbsp;&nbsp;
<a class="tooltipped " data-position="top" data-delay="50" data-tooltip="Visualizar perfil" onclick="ver_perfil('.$value[0].')"> <i class="material-icons small">assignment_ind</i></a>
&nbsp;&nbsp;&nbsp;&nbsp;
<a class="tooltipped " data-position="top" data-delay="50" data-tooltip="Aprobar" onclick="aprobar('.$value[0].",'".$value[1]."'".')"><i class="material-icons light-orange-text text-accent-3 small" >check</i></a>
</td></tr>';
}
?>   

                            </tbody>
                        </table>

        </div>
        </div>

    </div>

<!-- Modal -->

        <div id="aspirantesModal" class="modal">
            <div class="modal-content center-align">
                  <form id="formResultadoAspirantes"> 
                    <table class="striped highlight ">
                          
                            <thead>

                                <tr >
                                    <th data-field="id" id="A_CODE" style="display:none;">#</th>
                                    <th data-field="id">#</th>
                                    <th data-field="id">Cédula</th>
                                    <th data-field="price">Nombre</th>
                                    <th data-field="name">Fecha Nacimiento</th>
                                    <th data-field="name">
                                    <input type="checkbox" id="selectAll" />
                                    <label for="selectAll">Todos</label></th>


                                </tr>
                            </thead>

                            <tbody id="ResultadoAspirantes_" >
                            
<?php

$hoy = date('yyy-mm-dd');
foreach ($this->data['Aspirantes'] as $key => $value) {

echo' <tr class="center-align">
    <td id="A_CODE" style="display:none;">' . $value[0] . '</td>
    <td><i class="material-icons light-green-text text-accent-3 small ">label</i></td>
    <td>' . $value[1] . '</td>
    <td>' . $value[2] .' ' . $value[3] .' ' . $value[4] .' '. $value[5] . '</td>
    <td>'. $value[6] .'</td>

    <td>
    <a onclick="getHojaVida(' . $value[0] . ')"> <i class="material-icons teal-text text-lighten-3  small">visibility</i></a>
    <input type="checkbox" id="ch' . $value[0] . '" name="ch' . $value[0] . '" value="'. $value[0] . '" />
          <label for="ch' . $value[0] . '"></label>
    </td>
    </tr>';
}
?>   
                           
                            </tbody>
                        </table>
                    </form>

            </div>


<div class="row ">
    <div class="col  s12  m12 l12 ">

        <form id="form_fases">
            <div class="center-align col l12 m6 s6">
                <div class="center-align col l6 m12 s12">
                    <a class=" center-align waves-effect waves-light btn blue" id="" onclick="saveAspiranteToConcurso();">Guardar</a>
                </div> 
                <div class="center-align col l6 m12 s12">
                    <a class=" center-align waves-effect waves-light btn blue" onclick="$('#aspirantesModal').closeModal();">Cancelar</a>
                </div>
            </div>
        </form>
   
    </div>
</div>

          
</div>

<!-- Modal de carga -->
<div class="modal" id="preload">
  <div class="modal-content center-align" style="padding-bottom: 50px;">
  <h5>Cargando...</h5>
    <div class="preloader-wrapper big active">
      <div class="spinner-layer spinner-blue">
        <div class="circle-clipper left">
          <div class="circle"></div>
        </div><div class="gap-patch">
          <div class="circle"></div>
        </div><div class="circle-clipper right">
          <div class="circle"></div>
        </div>
      </div>

      <div class="spinner-layer spinner-red">
        <div class="circle-clipper left">
          <div class="circle"></div>
        </div><div class="gap-patch">
          <div class="circle"></div>
        </div><div class="circle-clipper right">
          <div class="circle"></div>
        </div>
      </div>

      <div class="spinner-layer spinner-yellow">
        <div class="circle-clipper left">
          <div class="circle"></div>
        </div><div class="gap-patch">
          <div class="circle"></div>
        </div><div class="circle-clipper right">
          <div class="circle"></div>
        </div>
      </div>

      <div class="spinner-layer spinner-green">
        <div class="circle-clipper left">
          <div class="circle"></div>
        </div><div class="gap-patch">
          <div class="circle"></div>
        </div><div class="circle-clipper right">
          <div class="circle"></div>
        </div>
      </div>
    </div>
    </div>
</div>

<div id="modalalert" class="modal" style="z-index: 1003; display: none; opacity: 0; transform: scaleX(0.7); top: 4%;">
  <div class="modal-content center-align">
    <p><i class="material-icons medium red-text">info</i></p>
    <h5 id="mensajeAlert"></h5>
  </div>
  <div class="modal-footer">
    <a href="javascript:" onclick="$('#modalAPRO').closeModal();" class="modal-action modal-close waves-effect waves-green blue-text btn-flat" id="cancel">Cancelar</a>
    <a href="javascript:"  class="modal-action modal-close waves-effect waves-red  red-text  btn-flat" id="accept">Aceptar</a>
  </div>
</div>
<form style="display: none;" action="<?php echo URL; ?>Management/processStateConcurso" method="POST"> 
            <input type="hidden" name="IDCON_" id="IDCON_2" value="<?= $concurso[0][0]; ?>"> 
            <input type="hidden" name="CONTOKEN" id="token_" value="<?= $concurso[0][14]; ?>"> 
            <input type="submit" id="terminar_proceso" style="display: none;"> 
</form>
<iframe id="applicantResume" class="modal" frameborder="0" style="width=100%;"></iframe>

    <?php include_once SCRIPT_U; ?> 

    <?php include_once JSPDF ?>
    <script type="text/javascript">
    var IDCONC=<?=  $concurso[0][0];?>;
    var CONTOKEN="<?=  $concurso[0][14];?>";

    </script>
    <script type="text/javascript">var URL='<?=  URL;?>';</script>
    <script src="<?php echo URL; ?>/public/js/globalJS.js"></script>
    <script src="<?= URL . 'public/js/controllerGestionAspirante.js' ?>"></script>
     <script src="<?php echo URL; ?>public/js/controllerApplicantResume.js"></script>
  <script src="<?php echo URL; ?>public/js/controlleraprobarAspirante.js"></script>
   <script>
           $( document ).ready(function(){
        $(".button-collapse").sideNav();
        $("#mprocess").attr("class","active");
    })
function alerta_iniciar(id,nombre,codigo,token){
    $("#mensajeAlert").html('Seguro desea terminar el reclutamiento del concurso '+nombre+' - '+codigo+' ?');
    $("#IDCON_2").val(IDCONC);
    $("#token_").val(CONTOKEN);
     $("#accept").attr('onclick','$("#terminar_proceso").trigger("click");');
      $("#modalalert").openModal();
}


   </script>
    </body>

</html>

