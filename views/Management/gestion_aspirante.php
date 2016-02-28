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
        <li class="active"><a>Aprobación</a></li>
        <li><a href="lista_aspirantes">Lista</a></li>
        
      </ul>
    </div>
  </nav>
                             <div class="col  s12  m12 l12 z-depth-1">


                            <div class="col l12 m12 s12 center-align ">
                                        <h5 class="blue-text text-darken-2">Aprobación de Perfiles</h5>
                                    </div>
                            <br>
                            <table class="striped highlight ">
                                <thead>

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

                                <tbody id="">
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
<a class="tooltipped " data-position="top" data-delay="50" data-tooltip="Aprobar" onclick="aprobar('.$value[0].",'".$value[1]."'".')"><i class="material-icons light-orange-text text-accent-3 small" >check</i></a>
</td></tr>';
}
?>   

                                </tbody>
                            </table>
 
      
                           
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
<?php include_once SCRIPT_U; ?> 

<?php include_once JSPDF ?>
<script > var URL="<?php echo URL; ?>";</script>
  <script src="<?php echo URL; ?>public/js/globalJS.js"></script>
  <script src="<?php echo URL; ?>public/js/controllerApplicantResume.js"></script>
  <script src="<?php echo URL; ?>public/js/controlleraprobarAspirante.js"></script>

    </body>
    
</html>

<script>
    $('document').ready(function(){
  $(".button-collapse").sideNav();
  $("#maspirante").attr("class","active");
    
  });
</script>