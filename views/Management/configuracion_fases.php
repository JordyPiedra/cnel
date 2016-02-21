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
        <li ><a href="configuracion_departamentos">Departamentos</a></li>
        <li class="active"><a href="configuracion_fases">Fases</a></li>
      </ul>
    </div>
  </nav>
                <div id="formContainer">
                    
                   <form id="parametrosConcurso" >
                        <div class="col  s12  m12 l12 z-depth-1">
                            <div class="container " style="padding-bottom:100px;">

                                <div class="col l12 m12 s12 center-align ">
                                    <h5 class="blue-text text-darken-2">Fases del concurso</h5>
                                </div>

                                <div class="input-field col l4 m4 s12">


                                    <select id="TDES" name="TDES"  class="browser-default" required >
                                        <option value="NULL" selected>Tipo Parámetro</option>
                                        <option value="E" >Entrevista</option>
                                        <option value="P">Prueba</option>
                                        <option value="R">Requerimiento</option>


                                    </select>

                                </div>

                                <div class="input-field col l4 m1 s12">

                                    <select id="CFASE" name="CFASE" class="browser-default" required onchange ="SelectController3($('option:selected', this));" >
                                        <option value="NULL" selected >Fase</option>


                                        <option value="NULL" >Crear - Editar</option>

                                    </select>
                                </div>

                                <div class="input-field col l4 m1 s1"  >
                                    <a id="logo_param" onclick=""><i class="material-icons small" >open_in_new</i></a>  
                                </div>

                                <div class="input-field col l12 m12 s12">
                                    <div class="input-field col l4 m4 s12">
                                        <input id="BFINI" name="BFINI"  type="date" class="datepicker">
                                        <label class="active" for="BFINI">Fecha Inicial</label>
                                    </div>
                                    <div class="input-field col l4 m4 s12">
                                        <input id="BFFIN" name="BFFIN" type="date" class="datepicker">
                                        <label class="active" for="BFFIN">Fecha Final</label>
                                    </div>

                                    <div class="input-field col l3 m4 s12">
                                        <input id="BVALO" name="BVALO" type="number" class="validate">
                                        <label for="last_name">Valor</label>
                                    </div>

                                    <div  class="input-field col l1 m1 s1"  >
                                        <a id="G_fase" class="center-align" ><i class="material-icons small" >playlist_add</i></a>  
                                    </div>
                                </div>
                            </div>


                        </div>
                     </form>

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

