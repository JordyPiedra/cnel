<!DOCTYPE html>
<html lang="en">
    <head>
            <!-- Bootstrap Core CSS -->
    <link href="<?php echo URL; ?>public/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->

    <!-- DataTables CSS -->
    <link href="<?php echo URL; ?>public/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

        <?php include_once HEAD_U; ?>
    </head>
    <body>

            <?php include_once MENU_F; ?>

<div class="row ">
    <div class="container">
<nav class="blue darken-1">
    <div class="nav-wrapper">
     
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li class="active"><a>Aprobación</a></li>
        <li><a href="lista_aspirantes">Lista</a></li>
        
      </ul>
    </div>
  </nav>
  
  </div> 
  </div>   
            <div class="row ">
        <div class="col  s12  m12 l12 z-depth-1">

        <div class="col l4 m12 s12 center-align ">
          
                     <!-- Opciones de filtro -->
        <ul class="collapsible" data-collapsible="expandable">
            <li class="blue-text text-darken-2"><i>Buscar resultados por:</i>
            <a class="waves-effect waves-light btn  light-blue darken-3" onclick="get_aspirantes_filtro();"><i class="material-icons left">search</i></a>
            </li>

            <li>
                <div class="collapsible-header left-align"><i class="material-icons">keyboard_arrow_down
</i>
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
                <div class="collapsible-header left-align"><i class="material-icons">keyboard_arrow_down</i>
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
                <div class="collapsible-header left-align"><i class="material-icons">keyboard_arrow_down</i>
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
                <div class="collapsible-header left-align"><i class="material-icons">keyboard_arrow_down</i>
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

        <p class="blue-text text-darken-2">Lista de Registrados</p>
           
<div class="panel-body ">
                            <div class="dataTable_wrapper ">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Cédula</th>
                                            <th>Nombres</th>
                                            <th>Apellidos</th>
                                            <th>Género</th>
                                            <th>Fecha Nacimiento</th>
                                            <th></th>
                                             
                                    </thead>


                                <tbody id="aprobaciontable">
<?php

foreach ($this->data['Aspirantes'] as $key => $value) {
  
echo' 
<tr class="center-align">
<td>'.($key+1).'</td>
<td>'.$value[1].'</td>
<td style="width: 220px;">'.$value[2].' '.$value[3].'</td>
<td> '.$value[4].' '.$value[5].'</td>
<td>'.$value[7].'</td>
<td>'.$value[6].'</td>

<td class="center"><a class="tooltipped" data-position="top" data-delay="50" data-tooltip="Visualizar C.V." onclick="ver_CV('.$value[0].')"> <i class="material-icons small">visibility</i></a>
<a class="tooltipped " data-position="top" data-delay="50" data-tooltip="Visualizar perfil" onclick="ver_perfil('.$value[0].')"> <i class="material-icons small">assignment_ind</i></a>
<a class="tooltipped " data-position="top" data-delay="50" data-tooltip="Aprobar" onclick="aprobar('.$value[0].",'".$value[1]."'".')"><i class="material-icons light-orange-text text-accent-3 small" >check</i></a>
</td></tr>';
}
?>   
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                           
                        </div>
                        
                        
                        
                    </div>  
                </div>
        </div> 


<!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content center-align">
      <h4>Perfil Aprobado</h4>
       </div>
    <div class="modal-footer  center-align">
     <a class="center-align waves-effect waves-light btn blue" onclick="location.reload();">Aceptar</a>

   
    </div>
  </div>
<iframe id="applicantResume" class="modal" frameborder="0" style="width=100%;"></iframe>
<form action="<?php echo URL; ?>Management/creaconcurso_1" method="POST"> 
<input type="hidden" name="IDCON_" id="IDCON_" value=""> 
<input type="submit" id="ejecutar" style="display: none;"> 
</form>

<form action="<?php echo URL; ?>Management/reclutamiento" method="POST"> 
<input type="hidden" name="IDCON_" id="IDCON_" value=""> 
<input type="submit" id="reclutar" style="display: none;"> 
</form>

<div id="modalAPRO" class="modal" style="z-index: 1003; display: none; opacity: 0; transform: scaleX(0.7); top: 4%;">
  <div class="modal-content center-align">
    <p><i class="material-icons medium red-text">info</i></p>
    <h5 id="mensajeAlert"></h5>
  </div>
  <div class="modal-footer">
    <a href="javascript:" class="modal-action modal-close waves-effect waves-green blue-text btn-flat" id="cancel">Cancelar</a>
    <a href="javascript:" class="modal-action modal-close waves-effect waves-red  red-text  btn-flat" id="accept">Aceptar</a>
  </div>
</div>


<?php include_once JSPDF ?>

<script > var URL="<?php echo URL; ?>";</script>
  <script src="<?php echo URL; ?>public/js/globalJS.js"></script>

 

    <!-- Metis Menu Plugin JavaScript -->
<?php include_once SCRIPT_U; ?>  
    <!-- DataTables JavaScript -->
    <script src="<?php echo URL; ?>public/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    
    <script src="<?php echo URL; ?>public/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
    </body>
   
    <script src="<?php echo URL; ?>public/js/controllerApplicantResume.js"></script>
  <script src="<?php echo URL; ?>public/js/controlleraprobarAspirante.js"></script>
  <script src="<?php echo URL; ?>public/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
</html>

    <style>
        li.paginate_button.active{
            background-color:#337ab7;
        }
    </style>

<script>
    $('document').ready(function(){
  $(".button-collapse").sideNav();
  $("#maspirante").attr("class","active");
     $('#dataTables-example').DataTable({
                responsive: true
        });
  });
  
</script>