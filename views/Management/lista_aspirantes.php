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
        <li ><a href="gestion_aspirante">Aprobación</a></li>
        <li class="active"><a>Lista</a></li>
        
      </ul>
    </div>
  </nav>
                             <div class="col  s12  m12 l12 z-depth-1">


                            <div class="col l12 m12 s12 center-align ">
                                        <h5 class="blue-text text-darken-2">Aspirantes aprobados</h5>
                                    </div>
                            <br>
                            <br>
  <table id="myTable" class="tablesorter"> 
<thead> 
<tr> 
   <tr >
                                    <th data-field="id">#</th>
                                    <th data-field="id">Cédula</th>
                                    <th data-field="price">Nombres</th>
                                    <th data-field="price">Apellidos</th>
                                    <th data-field="name">Género</th>
                                    <th data-field="date">Fecha Nacimiento</th>
                                    <th data-field="date"></th>
                                   
</tr> 
</thead> 
<tbody> 
<?php

foreach ($this->data['Aspirantes'] as $key => $value) {
  
echo' 
<tr class="center-align">
<td>'.($key+1).'</td>
<td>'.$value[1].'</td>
<td>'.$value[2].' '.$value[3].'</td>
<td> '.$value[4].' '.$value[5].'</td>
<td>'.$value[7].'</td>
<td>'.$value[6].'</td>

<td></td><td>
&nbsp;&nbsp;&nbsp;&nbsp;
<a class="tooltipped" data-position="top" data-delay="50" data-tooltip="Visualizar C.V." onclick="ver_CV('.$value[0].')"> <i class="material-icons small">visibility</i></a>
&nbsp;&nbsp;&nbsp;&nbsp;
<a class="tooltipped " data-position="top" data-delay="50" data-tooltip="Visualizar perfil" onclick="ver_perfil('.$value[0].')"> <i class="material-icons small">assignment_ind</i></a>
&nbsp;&nbsp;&nbsp;&nbsp;
<a class="tooltipped " data-position="top" data-delay="50" data-tooltip="Desaprobar" onclick="daprobar('.$value[0].",'".$value[1]."'".')"><i class="material-icons red-text small" >clear</i></a>
</td></tr>';
}
?>   
</tbody> 
</table> 

   
                </div>
            </div>
        </div>

        <form action="<?php echo URL; ?>Management/creaconcurso" method="POST"> 
            <input type="hidden" name="IDCON_" id="IDCON_" value=""> 
            <input type="submit" id="ejecutar" style="display: none;"> 
        </form>

        <form action="<?php echo URL; ?>Management/reclutar" method="POST"> 
            <input type="hidden" name="IDCON_" id="IDCON_2" value=""> 
            <input type="hidden" name="CONTOKEN" id="token_" value=""> 
            <input type="submit" id="reclutar" style="display: none;"> 
        </form>

        <?php include_once SCRIPT_U; ?> 

      
        <script src="<?= URL . 'public/tablesorter/jquery.tablesorter.min.js' ?>"></script>
         <script src="<?= URL . 'public/tablesorter/jquery-latest.min.js' ?>"></script>
    </body>
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
<script > var URL="<?php echo URL; ?>";</script>

  <script src="<?php echo URL; ?>public/js/globalJS.js"></script>

    <script>
        
        $(document).ready(function() 
    { 
        $("#myTable").tablesorter( {sortList: [[0,0], [1,0]]} ); 
        
        $(".button-collapse").sideNav();
        $("#maspirante").attr("class","active");
    } 
); 

function daprobar(id,nombre){
    $("#accept").attr('onclick','daprobar_perfil('+id+')');
    $("#mensajeAlert").html('¿Esta seguro en desaprobar el aspirante con cédula <b>'+nombre+'</b>? ');
    $("#modalAPRO").openModal();
}

function daprobar_perfil(id){
fajax({'IDASP' : id}, URL+"Management/desaprobar_perfil", daprobar_perfil_response);
}

//Respuesta desppues de enviar a guardar los aspirantes
function daprobar_perfil_response(response){
  console.log(response);
  if(response==1)
   {
       $("#modalAPRO").closeModal();
     location.reload();
   }
  else
    Materialize.toast('Error en aprobación',2000);
}
   
    </script>
</html>


