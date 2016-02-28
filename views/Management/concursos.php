<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include_once HEAD_U; ?>
    </head>
    <body>
        <?php include_once MENU_F; ?>
        <div class="row ">
            <div class="container">

   <nav class="blue darken-1">
    <div class="nav-wrapper">
     
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li class="active"><a>Concursos</a></li>
        <li><a href="creaconcurso" onclick="">Crear concurso</a></li>
      </ul>
    </div>
  </nav>
     <div class="col  s12  m12 l12 z-depth-1 center-align">
                            
                            <h5 class="blue-text text-darken-2">Concursos</h5>
                        
                <div id="formContainer">
                     
                     
                        <br>
                        <table class="striped highlight ">
                            <thead>

                                <tr >
                                    <th data-field="id">#</th>
                                    <th data-field="id">Código</th>
                                    <th data-field="price">Nombre</th>
                                    <th data-field="name">Estado</th>
                                    <th data-field="date">Fecha Inicio</th>
                                    <th data-field="date">Fecha Fin</th>
                                    <th data-field="name"></th>


                                </tr>
                            </thead>

                            <tbody >
<?php

foreach ($this->data['Concursos'] as $key => $value) {
if( $value[12]=='I')
{
    $estado='Reclultamiento';
    $estado2='Reclultar';
    $color='teal-text text-darken-3';
}
else if($value[12]=='P')
{
    $estado = 'Calificación';
     $estado2='Calificar';
     $color='orange-text text-accent-4';  
}else if($value[12]=='C')
{
    $estado = 'Creado';
     $estado2='Iniciar concurso';
     $color='blue-text text-accent-4';  
}

 
echo' 
<tr class="center-align">
<td><i class="material-icons '.$color.' small ">label</i></td>
<td>' . $value[5] . '</td>
<td>' . $value[1] . '</td>
<td>'.$estado.'</td>
<td>' . $value[10] . '</td>
<td>' . $value[11] . '</td>
<td>
<a class="tooltipped" data-position="top" data-delay="50" data-tooltip="Visualizar concurso" onclick="ver_concurso(' . $value[0] . ')"> <i class="material-icons small">visibility</i></a>
&nbsp;<a class="tooltipped" data-position="top" data-delay="50" data-tooltip="'.$estado2.'" onclick="alerta_iniciar(' . $value[0] .",'". $value[5] ."','". $value[1] ."','".$value[13]."'".');"><i class="material-icons small" >play_circle_filled</i></a></td>

</tr>';
}
?>   

                            </tbody>
                        </table>
                    </div>   </div>  
                </div>
        </div> 

        <form action="<?php echo URL; ?>Management/creaconcurso" method="POST"> 
            <input type="hidden" name="IDCON_" id="IDCON_" value=""> 
            <input type="submit" id="ejecutar" style="display: none;"> 
        </form>

        <form action="<?php echo URL; ?>Management/proceso_concurso" method="POST"> 
            <input type="hidden" name="IDCON_" id="IDCON_2" value=""> 
            <input type="hidden" name="CONTOKEN" id="token_" value=""> 
            <input type="submit" id="proceso" style="display: none;"> 
        </form>

        <?php include_once SCRIPT_U; ?> 

        <?php include_once JSPDF ?>
       
    </body>

</html>
<!-- Modal Structure -->
<div id="modalalert" class="modal" style="z-index: 1003; display: none; opacity: 0; transform: scaleX(0.7); top: 4%;">
  <div class="modal-content center-align">
    <p><i class="material-icons medium red-text">info</i></p>
    <h5 id="mensajeAlert"></h5>
  </div>
  <div class="modal-footer">
    <a href="javascript:" class="modal-action modal-close waves-effect waves-green blue-text btn-flat" id="cancel">Cancelar</a>
    <a href="javascript:" class="modal-action modal-close waves-effect waves-red  red-text  btn-flat" id="accept">Aceptar</a>
  </div>
</div>
<script > var URL="<?php echo URL; ?>";</script>
  <script src="<?php echo URL; ?>public/js/globalJS.js"></script>
  <script src="<?php echo URL; ?>public/js/controllerConcurso.js"></script>



