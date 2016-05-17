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
        <li><a onclick="Materialize.toast('Seleccione un concurso.',2000);">Reclutamiento</a></li>
        <li><a onclick="Materialize.toast('Seleccione un concurso.',2000);">Calificacion</a></li>
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
&nbsp;<a class="tooltipped" data-position="top" data-delay="50" data-tooltip="'.$estado2.' aspirantes" onclick="proceso_concurso(' . $value[0] .",'".$value[13]."'".');"><i class="material-icons small" >settings</i></a></td>

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
         <form target="_blank" action="<?php echo URL; ?>Reportes/base_concurso" method="POST"> 
            <input type="hidden" name="IDCON_" id="IDCON_3" value=""> 
            <input type="hidden" name="CONTOKEN" id="token_3" value=""> 
            <input type="submit" id="ver_c" style="display: none;"> 
        </form>


        <?php include_once SCRIPT_U; ?> 

        <?php include_once JSPDF ?>
       
    </body>

</html>
  <script src="<?php echo URL; ?>public/js/globalJS.js"></script>
  <script src="<?php echo URL; ?>public/js/controllerConcurso.js"></script>
<script type="text/javascript">
    $( document ).ready(function(){
        $(".button-collapse").sideNav();
        $("#mprocess").attr("class","active");
    })

    function proceso_concurso(id,token)
  {
    console.log(token);
    $("#IDCON_2").val(id); 
    $("#token_").val(token); 
    $("#proceso").trigger("click");
  }

</script>

