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
        <li><a href="configuracion">General</a></li>
        <li class="active"><a href="configuracion_departamentos">Departamentos</a></li>
        <li><a href="configuracion_fases">Fases</a></li>
      </ul>
    </div>
  </nav>
                <div id="formContainer">
                    
                    <form id="cabeceraConcurso" style="display: hide;">
                        <div class="col  s12  m12 l12 z-depth-1">
                                  <div class="col l12 m12 s12 center-align ">
                                    <h5 class="blue-text text-darken-2">Departamentos del Sistema</h5>
                                </div>
                                    <div class="input-field col l6 m11 s11">
                                        <select id="PUESTO" name="PUESTO" class="browser-default" required onchange ="dep_selected();" require>
                                            <option value="NULL" selected>Elija Departamento</option>

                                            <?php
                                            //echo var_dump($this->data['departamentos']);
                                            foreach ($this->data['departamentos'] as $key => $value) {
                                                echo '<option estado="'.$value[3].'" value="' . $value[0] . '">' . $value[1] . '</option>';
                                             }
                                            ?>
                                        </select>

                                   </div>
                                   <div class="col l6 m6 s12">  
                                     <a  id="dep_edit" onclick="edit_departamento();" class="btn tooltipped btn-large blue darken-3" data-position="bottom" data-delay="50" data-tooltip="Editar departamento" style="margin-top: 15px;height: 45px; display:none;"> <i class="large material-icons">edit</i> </a> 
                                     <a  id="dep_create" onclick="create_departamento();" class="btn tooltipped btn-large blue darken-3" data-position="bottom" data-delay="50" data-tooltip="Crear departamento" style="margin-top: 15px;height: 45px;"> <i class="large material-icons">add</i> </a>
                                     <a  id="dep_create" onclick="create_cargo();" class="btn tooltipped btn-large blue darken-3 right" data-position="bottom" data-delay="50" data-tooltip="Agregar cargo" style="margin-top: 15px;height: 45px;"> <i class="large material-icons">playlist_add</i> </a>
                                   </div>
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
                                            <th data-field="name">Estado</th>
                                            <th data-field="name">Editar</th>


                                        </tr>
                                    </thead>

                                    <tbody id="CARGO">
  

                                    </tbody>
                                </table>

                            </div>


                        </div>
                    </form>

                </div>  
            </div>
        </div>


 
   <!-- Modal Departamento -->
        <div id="departamento_modal" class="modal">
            <div class="modal-content center-align">
                <h5>Configuración Departamento</h5>
            </div>
            <div class="modal-content center-align">
                <div class="row ">

                    <div class="col  s12  m12 l12 ">
                        <form id="frmDepartamento">
                          
                                    <div class="col l8 m4 s12">
                                        <div class="input-field">

                                            <input id="DNOMB" Did="" name="DNOMB" type="text" class="validate valid">
                                            <label id= "lDNOMB" for="DNOMB" class="active" >Nombre Departamento</label>
                                        </div>

                                    </div>
                                   
                                    <div class="input-field col l4 m4 s12">

                                        <input type="checkbox" class="filled-in" id="DESTA" name="DESTA" checked="checked" />
                                        <label for="DESTA">Habilitado</label>
                                    </div>

                                    <div class="center-align col l12 m6 s6">
                                        <div class="center-align col l6 m12 s12">
                                            <a class=" center-align waves-effect waves-light btn blue" id="guardar_D" >Guardar</a>

                                        </div> 
                                        <div class="center-align col l6 m12 s12">
                                            <a class=" center-align waves-effect waves-light btn blue" onclick=" $('#departamento_modal').closeModal()">Cancelar</a>

                                        </div>


                                        <br><br><br>

                                
                                </div>
                          
                        </form>

                    </div>

                </div>

            </div>
        </div>
        
        
<!-- Modal Trabajo -->
<div id="cargo_trabajo" class="modal">
<div class="modal-content center-align">
<h5>Puesto de Trabajo</h5>
</div>
<div class="modal-content center-align">
<div class="row ">


<div class="col  s12  m12 l12 ">
<form id="frmCargo">

<div class="col l8 m4 s12">
<div class="input-field">

<input id="CNOMB" Did="" name="CNOMB" type="text" class="validate valid">
<label id= "lDNOMB2" for="CNOMB" class="active" >Nombre Cargo</label>
</div>

</div>
<div class="input-field col l4 s12 l4">

<select name="CPADR" id="CPADR" class="browser-default" required="">
   <option value="NULL" selected>Elija Departamento</option>

<?php
//echo var_dump($this->data['departamentos']);
foreach ($this->data['departamentos'] as $key => $value) {
   
echo '<option estado="'.$value[3].'" value="' . $value[0] . '">' . $value[1] . '</option>';
}
?>
</select>
</div>


<div class="center-align col l12 m6 s6">
<div class="center-align col l6 m12 s12">
<a class=" center-align waves-effect waves-light btn blue" id="guardar_C" >Guardar</a>

</div> 
<div class="center-align col l6 m12 s12">
<a class=" center-align waves-effect waves-light btn blue" onclick=" $('#cargo_trabajo').closeModal()">Cancelar</a>

</div>



<br><br><br>

</div>



</form> 


</div>

</div>

</div>
</div>        


<!-- Modal Alerta-->
<div id="mensaje_cargo" class="modal">
<div class="modal-content center-align">
<h5>Seguro desea eliminar el cargo</h5>
<h5 id="nombcargmsj"></h5>
</div>
<div class="modal-content center-align">
<div class="row ">
<div class="col  s12  m12 l12 ">
<form id="frmCargo">

<div class="center-align col l12 m6 s6">
<div class="center-align col l6 m12 s12">
<a class=" center-align waves-effect waves-light btn blue" id="elimina_C" >Guardar</a>

</div> 
<div class="center-align col l6 m12 s12">
<a class=" center-align waves-effect waves-light btn blue" onclick=" $('#mensaje_cargo').closeModal()">Cancelar</a>

</div>



<br><br><br>

</div>



</form> 


</div>

</div>

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

