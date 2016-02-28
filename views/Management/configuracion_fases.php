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
        <li><a href="configuracion">Configuraciones</a></li>
        <li ><a href="configuracion_departamentos">Departamentos</a></li>
        <li class="active"><a href="configuracion_fases">Fases</a></li>
      </ul>
    </div>
  </nav>
                <div id="formContainer">

                  
                        <div class="col  s12  m12 l12 z-depth-1">
                                <div class="col l12 m12 s12 center-align ">
                                    <h5 class="blue-text text-darken-2">Fases del Sistema</h5>
                                </div>

                                 <form id="form_fases">

                                <div class="col l6 m4 s12">
                                    <div class="input-field">

                                        <input name="IFNOMB" id="IFNOMB" type="text" Did="" required class="validate">
                                        <label id="lblIFNOMB" for="IFNOMB">Nombre</label>
                                    </div>

                                </div>
                                <div class="input-field col l2 m4 s12">

                                    <select name="IFTFAS" id="IFTFAS" class="browser-default" required >
                                        <option value="" selected>Seleccione opción</option>
                                        <option value="M" >Mérito</option>
                                        <option value="O">Oposición</option>

                                    </select>
                                </div>
                                <div class="input-field col l4 m4 s12">

                                    <select name="IFTDES"  id="IFTDES" class="browser-default" required >
                                        <option value="" selected disabled>Seleccione opción</option>
                                        <option value="E" >Entrevista</option>
                                        <option value="P">Prueba</option>
                                        <option value="R">Requerimiento</option>

                                    </select>
                                </div>
                                
                                 <div class="input-field col l12 center-align">
  <a  id="fas_guardar" onclick="create_fase();" class="btn tooltipped btn-large blue darken-3 center-align" data-position="bottom" data-delay="50" data-tooltip="Agregar fase" style="margin-top: 15px;height: 45px;"> <i class="large material-icons">save</i> </a>
  <a  id="fas_create" onclick="nueva_fase();" class="btn tooltipped btn-large blue darken-3 center-align" data-position="bottom" data-delay="50" data-tooltip="Agregar fase" style="margin-top: 15px;height: 45px;"> <i class="large material-icons">add</i> </a>
  <input type="submit" id="subFORM" style="display:none;">                            
                                   
                                </div>
     </form>

                                </div>
                       
 <div class="col  s12  m12 l12 z-depth-1">
                            <div class="container " style="padding-bottom:100px;">


                                <table class="striped highlight ">
                                    <thead>

                                        <tr>
                                            <th data-field="id">N#.</th>
                                            <th data-field="price">Nombre</th>
                                            <th data-field="name">Merito/Oposicion</th>
                                            <th data-field="name">Tipo</th>
                                             <th data-field="name">Acciones</th>

                                        </tr>
                                    </thead>

                                    <tbody id="FASES">
  <?php 
  foreach ($this->data as $key => $value) {
      $tipo="";
      switch ($value[3]) {
          case 'P':
             $tipo="Prueba";
              break;
          case 'E':
             $tipo="Entrevista";
              break;
          case 'R':
             $tipo="Requerimiento";
              break;

      }
  echo '<tr><td>'.($key+1).'</td><td>'.$value[1].'</td><td>'.$value[2].'</td><td>'.$tipo.'</td><td>
  <a class="tooltipped" data-position="top" data-delay="50" data-tooltip="Editar fase" onclick="actualizar_fase('.$value[0].",'".$value[1]."','".$value[2]."','".$value[3]."'".')"> <i class="material-icons small">edit</i></a>
  <a class="tooltipped" data-position="top" data-delay="50" data-tooltip="Elimina fase" onclick="elimina_fase('.$value[0].",'".$value[1]."'".')"> <i class="material-icons small">delete</i></a></td></tr>
  </td></tr>';
  }
  ?>

                                    </tbody>
                                </table>

                            </div>


                        </div>
                        </div>
               

                </div>  
            </div>
        </div>

<!-- Modal Alerta-->
<div id="mensaje_fase" class="modal">
<div class="modal-content center-align">
<h5>Seguro desea eliminar la fase</h5>
<h5 id="nombfase"></h5>
</div>
<div class="modal-content center-align">
<div class="row ">
<div class="col  s12  m12 l12 ">
<form id="frmCargo">
<div class="center-align col l12 m6 s6">
<div class="center-align col l6 m12 s12">
<a class=" center-align waves-effect waves-light btn blue" id="elimina_F" >Guardar</a>
</div> 
<div class="center-align col l6 m12 s12">
<a class=" center-align waves-effect waves-light btn blue" onclick=" $('mensaje_fase').closeModal()">Cancelar</a>
</div>
</div>
</form> 
</div>
</div>
</div>
</div>        

 <div id="modalAPRO" class="modal" style="z-index: 1003; display: none; opacity: 0; transform: scaleX(0.7); top: 4%;">
  <div class="modal-content center-align">
    <p><i class="material-icons medium red-text">info</i></p>
    <h5 id="mensajeAlert"></h5>
  </div>
  <div class="modal-footer">
    <a href="javascript:"  onclick=" $('#modalAPRO').closeModal();" class="modal-action modal-close waves-effect waves-green blue-text btn-flat" id="cancel">Cancelar</a>
    <a href="javascript:" class="modal-action modal-close waves-effect waves-red  red-text  btn-flat" id="accept">Aceptar</a>
  </div>
</div>

    </body>
<?php include_once SCRIPT_U; ?> 

    <script src="<?php echo URL; ?>/public/js/globalJS.js"></script>
    <script src="<?php echo URL; ?>/public/js/controllerConfiguracion.js"></script>
    <script>var URL = '<?= URL ?>';</script>





</html>

