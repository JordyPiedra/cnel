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
        <li class="active"><a href="configuracion">Configuraciones</a></li>
        <li><a href="configuracion_departamentos">Departamentos</a></li>
        <li><a href="configuracion_fases">Fases</a></li>
        <li><a href="configuracion_usuarios">Usuarios</a></li>
      </ul>
    </div>
  </nav>
                <div id="formContainer">
                        <div class="col  s12  m12 l12 z-depth-1 center-align">
                            
 <div class="col l4 "> 
    <div class="card z-depth-2">
        <div class="card-image waves-effect waves-block waves-light center-align">
        <i class="large     material-icons ">work</i>
        </div>
        <div class="card-content" style="padding-top: 0px;">
        <a target="" href="configuracion_departamentos">Departamentos<i class="material-icons">open_in_new</i></a><span class="card-title activator grey-text text-darken-4"><i class="material-icons right">more_vert</i></span>
        <p>Departamentos y cargos</p>
        </div>
        <div class="card-reveal">
        <span class="card-title grey-text text-darken-4"><a target="" href="configuracion_departamentos">Configuración departamentos y cargos<i class="material-icons">open_in_new</i></a><i class="material-icons right">close</i></span>
        <p>Ventana de mantenimiento de departamentos y cargos</p>
        </div>
    </div>
</div>
<div class="col l4 "> 
    <div class="card z-depth-2">
        <div class="card-image waves-effect waves-block waves-light center-align">
        <i class="large     material-icons ">list</i>
        </div>
        <div class="card-content" style="padding-top: 0px;">
        <a target="" href="configuracion_fases">Fases<i class="material-icons">open_in_new</i></a><span class="card-title activator grey-text text-darken-4"><i class="material-icons right">more_vert</i></span>
        <p>Configuración de fases</p>
        </div>
        <div class="card-reveal">
        <span class="card-title grey-text text-darken-4"><a target="" href="configuracion_fases">Configuración de fases<i class="material-icons">open_in_new</i></a><i class="material-icons right">close</i></span>
        <p>Ventana de mantenimiento de las fases</p>
        </div>
    </div>
</div>
<div class="col l4 "> 
    <div class="card z-depth-2">
        <div class="card-image waves-effect waves-block waves-light center-align">
        <i class="large     material-icons ">face</i>
        </div>
        <div class="card-content" style="padding-top: 0px;">
        <a target="" href="configuracion_usuarios">Usuarios<i class="material-icons">open_in_new</i></a><span class="card-title activator grey-text text-darken-4"><i class="material-icons right">more_vert</i></span>
        <p>Configuración de usuarios</p>
        </div>
        <div class="card-reveal">
        <span class="card-title grey-text text-darken-4"><a target="" href="configuracion_usuarios">Configuración de fases<i class="material-icons">open_in_new</i></a><i class="material-icons right">close</i></span>
        <p>Creación de usuarios</p>
        <p>Habilitar - Des habilitar usuarios</p>
        <p>Restaurar contraseña</p>
        </div>
    </div>
</div>
                        </div>
                </div>  
            </div>
        </div>


     

        <!-- Modal Fases -->
        <div id="parametros" class="modal">
            <div class="modal-content center-align">
                <h5>Fases concurso</h5>

            </div>
            <div class="modal-footer">
                <div class="row ">


                    <div class="col  s12  m12 l12 ">
                        <div class="container " style="padding-bottom:100px;">
                            <form id="form_fases">

                                <div class="col l4 m4 s12">
                                    <div class="input-field">

                                        <input name="IFNOMB" id="IFNOMB" type="text" Did="" class="validate">
                                        <label for="IFNOMB">Nombre</label>
                                    </div>

                                </div>
                                <div class="input-field col l4 m4 s12">

                                    <select name="IFTFAS" id="IFTFAS" class="browser-default" required >
                                        <option value="">Seleccione opción</option>
                                        <option value="M" selected>Mérito</option>
                                        <option value="O">Oposición</option>

                                    </select>
                                </div>
                                <div class="input-field col l4 m4 s12">

                                    <select name="IFTDES"  id="IFTDES" class="browser-default" required >
                                        <option value="" selected>Seleccione opción</option>
                                        <option value="E" >Entrevista</option>
                                        <option value="P">Prueba</option>
                                        <option value="R">Requerimiento</option>

                                    </select>
                                </div>

                                <div class="center-align col l12 m6 s6">
                                    <div class="center-align col l6 m12 s12">
                                        <a class=" center-align waves-effect waves-light btn blue" id="guardar_F">Guardar</a>

                                    </div> 
                                    <div class="center-align col l6 m12 s12">
                                        <a class=" center-align waves-effect waves-light btn blue" onclick="$('#parametros').closeModal();">Cancelar</a>

                                    </div>


                                    <br><br><br>

                                </div>



                            </form>


                        </div>


                    </div>

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
                            <div class="col  s12  m12 l12 z-depth-1">

                                <div class="container " style="padding-bottom:100px;">






                                    <div class="col l4 m4 s12">
                                        <div class="input-field">

                                            <input id="DNOMB" Did="" name="DNOMB" type="text" class="validate">
                                            <label id= "lDNOMB" for="nombfmo">Nombre Departamento</label>
                                        </div>

                                    </div>
                                    <div class="input-field col l4 m4 s12">

                                        <select name="DPADR" id="DPADR" class="browser-default" required >
                                            <option value="NULL" >Departmanteo Padre</option>

                                            <?php
//echo var_dump($this->data['departamentos']);
                                            foreach ($this->data['departamentos'] as $key => $value) {
                                                echo '<option value="' . $value[0] . '">' . $value[1] . '</option>';
                                                // echo '<option value="'.$value[$key][0].'">'.$value[$key][1].'</option>';
                                            }
                                            ?>

                                            <option value="NULL" >Ninguno</option>


                                        </select>
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

                                </div>
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
                         


                                      <div class="input-field col s12 l4" class="ui-widget">
                                        <i class="mdi-action-search prefix"></i>
                                        <input id="CNOMB" Did="" name="CNOMB"  required >
                                        </div>  
                        
                          
                               <div class="input-field col s12 l4" class="ui-widget">

                                    <select name="CPADR" id="CPADR" class="browser-default" required class="ui-widget">


                                        <?php
//echo var_dump($this->data['departamentos']);
                                        foreach ($this->data['departamentos'] as $key => $value) {
                                            echo '<option value="' . $value[0] . '">' . $value[1] . '</option>';
                                            // echo '<option value="'.$value[$key][0].'">'.$value[$key][1].'</option>';
                                        }
                                        ?>



                                    </select>
                                </div>

                                <div class="input-field col l4 m4 s12">

                                    <input type="checkbox" class="filled-in" id="DESTA" name="DESTA" checked="checked" />
                                    <label for="CESTA">Habilitado</label>
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






    </body>
<?php include_once SCRIPT_U; ?> 
    <script src="<?php echo URL; ?>/public/js/controllerConfiguracion.js"></script>
  
</html>

