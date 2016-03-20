<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include_once HEAD_U; ?>
    </head>
    <body>
        <?php include_once MENU_F; ?>
        <?php isset($this->DATA['Concurso']) ? $concurso = $this->DATA['Concurso'] : $concurso = ""; ?>
        <div class="row ">
            <div class="container">

   <nav class="blue darken-1">
    <div class="nav-wrapper">
     
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><a href="configuracion">Configuraciones</a></li>
        <li ><a href="configuracion_departamentos">Departamentos</a></li>
        <li><a href="configuracion_fases">Fases</a></li>
        <li class="active"><a href="configuracion_usuarios">Usuarios</a></li>
      </ul>
    </div>
  </nav>
                <div id="formContainer">
                    
                    <form id="usuarios" style="display: hide;">
                        <div class="col  s12  m12 l12 z-depth-1">
                                  <div class="col l12 m12 s12 center-align ">
                                    <h5 class="blue-text text-darken-2">Usuarios del Sistema</h5>
                                </div>
                                  <div class="input-field col l6 m11 s11"> 
                                   <input type="text" id="UNOMB" name="UNOMB">   
                                      <label for="UNOMB">Nombre de usuario</label>
                                   </div>  
                                    <div class="input-field col l4 m11 s11">
                                        
                                        <select id="UTIPO" name="UTIPO" class="browser-default" required onchange ="dep_selected();" >
                                            <option value="" disabled selected>Elija Nivel</option>
                                            <option value="D" >Director</option>
                                            <option value="D" >Administrativo</option>
                                            
                                        </select>
</div>  
                                  
                                   <div class="input-field col l2 m11 s11">
                                     <a  id="dep_create" onclick="create_user();" class="btn tooltipped btn-large blue darken-3 right" data-position="bottom" data-delay="50" data-tooltip="Crear usuario" style="margin-top: 15px;height: 45px;"> <i class="large material-icons">person_add</i> </a>
                                   </div>
                                   <input type="submit" style="display:none;">
                        </div>
                    </form>
                <br><br><br><br>
                        <div class="col  s12  m12 l12 z-depth-1">
                            <div class="container " style="padding-bottom:100px;">


                                <table class="striped highlight ">
                                    <thead>

                                        <tr>
                                            <th data-field="id">N#.</th>
                                            <th data-field="price">Nombre</th>
                                            <th data-field="name">Tipo</th>
                                            <th data-field="name"></th>


                                        </tr>
                                    </thead>

                                    <tbody id="CARGO">
  
<?php 
var_dump($this->datos);
foreach ($this->datos['Usuarios'] as $key => $value) {
    if($value[3]=='H')
    {
        $color="green";
        $estado='checked';
    }
    else {
        $estado='';
        $color="red";
    }
echo '<tr>
<td data-field="id"> <i id="icon_'.$value[0].'" class="material-icons '.$color.'-text small" >face</i></td>
<td data-field="price">'.$value[1].'</td>';
if($value[2]=='D')
echo '<td data-field="name">Director</td>';
else 
echo '<td data-field="name">Adminstrador</td>';
echo '<td data-field="name">
 <a class="tooltipped " data-position="top" data-delay="50" data-tooltip="Reestablecer contraseña" onclick="restore_password_('.$value[0].",'".$value[1]."'".')"><i class="material-icons red-text small" >autorenew</i></a>
 <input onchange="user_estado(this,'.$value[0].",'".$value[1]."'".');" type="checkbox" '.$estado.' id="habilitado"><label for="habilitado" class="tooltipped " data-position="top" data-delay="50" data-tooltip="Habilitar"></label>
 </td></tr>';
}
?>
                                    </tbody>
                                </table>

                            </div>


                        </div>
                    </form>

                </div>  
            </div>
        </div>


     

 <div id="modalAPRO" class="modal" style="z-index: 1003; display: none; opacity: 0; transform: scaleX(0.7); top: 4%;">
  <div class="modal-content center-align">
    <p><i class="material-icons medium red-text">info</i></p>
    <h5 id="mensajeAlert"></h5>
  </div>
  <div class="modal-footer">
    <a href="javascript:" onclick=" $('#modalAPRO').closeModal();" class="modal-action modal-close waves-effect waves-green blue-text btn-flat" id="cancel">Cancelar</a>
    <a href="javascript:" class="modal-action modal-close waves-effect waves-red  red-text  btn-flat" id="accept">Aceptar</a>
  </div>
</div>

    </body>
<?php include_once SCRIPT_U; ?> 

    <script src="<?php echo URL; ?>/public/js/globalJS.js"></script>
    <script src="<?php echo URL; ?>/public/js/controllerConfiguracion.js"></script>
    <script>var URL = '<?= URL ?>';</script>
    <script>
        var opdepartamento = '<?php if ($concurso != "") echo $concurso[0][6]; else echo ""; ?>';
        var opdepartamentopadr = '<?php if ($concurso != "") echo $concurso[0][13]; else echo ""; ?>';
        var CONCID_ = '<?php if ($concurso != "") echo $concurso[0][0]; else echo ""; ?>'
    </script>




</html>

