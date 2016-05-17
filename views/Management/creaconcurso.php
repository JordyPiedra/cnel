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
        <li><a href="concursos">Concursos</a></li>
        <li  class="active" ><a href="creaconcurso" onclick="">Crear concurso</a></li>
      </ul>
    </div>
  </nav>
  <br>
 <nav class="blue darken-2">
    <div class="nav-wrapper">
     
      <ul id="nav-mobile" class="left hide-on-med-and-down">
         <li id="tabCC" class="tab active"><a section="cabecera_concurso" onclick="seccionS('CC');" class="active" >General</a></li>
         <li id="tabPC" class="tab" style="<?php if ($concurso != "") echo''; else echo 'display:none;'; ?>"><a id="ltabPC" section="parametros" onclick="seccionS('PC');" class="">Parámetros</a></li>
      </ul>
    </div>
  </nav>
                <div id="formContainer">
                    <form id="cabeceraConcurso" style="display: hide;">
                        <div class="col  s12  m12 l12 z-depth-1">

                            <div  style="padding-bottom:100px;">

                                <div class="col l12 m12 s12 center-align ">
                                    <h5 class="blue-text text-darken-2">Bases del concurso</h5>
                                </div>

                                <div class="input-field col l4 m4 s12">
                                    <input id="CODI"  name="CODI" type="text" class="validate red-text" <?php if ($concurso != "") echo'value="' . $concurso[0][5] . '"'; else if(isset($this->codicon)) echo 'value="'.$this->codicon.'"';?>  required>
                                    <label for="CODI" class="active">Código </label>
                                </div>
                                <div class="input-field col l6 m4 s12">
                                    <input id="NOMB" name="NOMB" type="text" class="validate" <?php if ($concurso != "") echo'value="' . $concurso[0][1] . '"'; ?> required> 
                                    <label for="NOMB" <?php if ($concurso != "") echo'class="active"'; ?> >Nombre</label>

                                </div>
                                <div class="input-field col l2 m4 s7">
                                    <input id="NVAC" name="NVAC" type="number" value="1"  class="validate " <?php if ($concurso != "") echo'value="' . $concurso[0][5] . '"'; ?> required>
                                    <label for="NVAC" class="active" >N# Vacantes</label>

                                </div>

                                <div class="col l6 m6 s12">


                                    <div class="input-field col l12 m11 s11">


                                        <select id="PUESTO" name="PUESTO" class="browser-default"  required>
                                            <option  value="" selected disable>Elija Departamento</option>

                                            <?php
                                            //echo var_dump($this->data['departamentos']);
                                            foreach ($this->data['departamentos'] as $key => $value) {
                                                echo '<option value="' . $value[0] . '">' . $value[1] . '</option>';
                                             }
                                            ?>

                                       
                                        </select>

                                    </div>
                                    <div class="input-field col l12 m11 s11">

                                        <select id="CARGO" name="CARGO" class="browser-default" required >
                                            <option  value="" selected disable >Puesto de Trabajo</option>
                                            <div id="CARGOcontainer">
                                            </div>
                                        
                                        </select>
                                    </div>
                                </div>

                                <div class="col l6 m6 s12">
                                    <div class="input-field col l6 m6 s6">
                                        <input id="VALM" required  name="VALM" type="number" <?php if ($concurso != "") echo'value="' . $concurso[0][3] . '"';
                                            else echo'value="50"'; ?>  class="validate">
                                        <label for="VALM" class="active">% Mérito</label>

                                    </div>
                                    <div class="input-field col l6 m6 s6">
                                        <input id="VALO" required name="VALO" type="number" <?php if ($concurso != "") echo'value="' . $concurso[0][4] . '"';
                                            else echo'value="50"'; ?>  class="validate">
                                        <label for="VALO" class="active">% Oposición</label>

                                    </div>
                                    <div class="input-field col l6 m6 s12">
                                        <input id="CFINI" required  name="CFINI"  type="date" class="datepicker" <?php if ($concurso != "") echo'value="' . $concurso[0][10] . '"'; ?> >
                                        <label class="active" for="CFINI">Fecha Inicial</label>
                                    </div>
                                    <div class="input-field col l6 m6 s12">
                                        <input id="CFFIN" required name="CFFIN" type="date" class="datepicker" <?php if ($concurso != "") echo'value="' . $concurso[0][11] . '"'; ?> >
                                        <label class="active" for="CFFIN">Fecha Final</label>
                                    </div>
                                </div>

                                <div class="input-field col l12 m6 s12">

                                    <textarea  id="DESC" name="DESC"  class="materialize-textarea" max="200" required><?php if ($concurso != "") echo $concurso[0][2]; ?></textarea>
                                    <label for="DESC">Descripción</label>
                                    
                                </div>
                                
                                <input type="submit" style="display:none;">
                            </div>
                            

                        </div>
                    </form>
                    <div id="seccion2">
                    <form id="parametrosConcurso" >
                        <div class="col  s12  m12 l12 z-depth-1">
                            <div class=" " style="padding-bottom:100px;">

                                <div class="col l12 m12 s12 center-align ">
                                    <h5 class="blue-text text-darken-2">Fases del concurso</h5>
                                </div>

                                <div class="input-field col l6 m4 s12">


                                    <select id="TDES" name="TDES"  class="browser-default" required >
                                        <option value="NULL" selected>Tipo Parámetro</option>
                                        <option value="E" >Entrevista</option>
                                        <option value="P">Prueba</option>
                                        <option value="R">Requerimiento</option>


                                    </select>

                                </div>

                                <div class="input-field col l6 m1 s12">

                                    <select id="CFASE" name="CFASE" class="browser-default" required >
                                        <option value="" selected disabled >Elija Fase</option>
                                    </select>
                                </div>
                                <div class="input-field col l12 m12 s12">
                                    <div class="input-field col l3 m4 s12">
                                        <input id="BFINI" name="BFINI"  type="date" class="datepicker " required>
                                        <label class="active" for="BFINI">Fecha Inicial</label>
                                    </div>
                                    <div class="input-field col l3 m4 s12">
                                        <input id="BFFIN" name="BFFIN" type="date" class="datepicker" required>
                                        <label class="active" for="BFFIN">Fecha Final</label>
                                    </div>

                                    <div class="input-field col l3 m4 s12">
                                        <input id="BVALO" name="BVALO" type="number" class="validate" required>
                                        <label for="last_name">Valor</label>
                                    </div>

                                    <div  class="input-field col l3 m3 s3"  >
                                         <a  id="G_fase" onclick="insert_base_concurso();" class="btn tooltipped btn-large blue darken-3 right" data-position="bottom" data-delay="50" data-tooltip="Agregar fase" > <i class="large material-icons">playlist_add</i> </a>
                                    </div>
                                    <div class="input-field col l12 m12 s12">
                                        <textarea name="BDESC" id="BDESC" cols="" rows=""></textarea>
                                        <label for="last_name">Descipción</label>
                                    </div>
                                       <input type="submit" style="display:none;">
                                </div>
                            </div>


                        </div>
                     
  </form>



                        <div class="col  s12  m12 l12 z-depth-1">
                            <div class="container " style="padding-bottom:100px;">


                                <table class="striped highlight ">
                                    <thead>

                                        <tr>
                                            <th data-field="id">Fase</th>

                                            <th data-field="price">Fecha Inicio</th>
                                            <th data-field="name">Fecha Fin</th>
                                            <th data-field="name">Mérito <?php if ($concurso != "") echo $concurso[0][3]; else echo "50"; ?>%</th>
                                            <th data-field="name">Oposición <?php if ($concurso != "") echo $concurso[0][4]; else echo "50"; ?>%</th>
                                            <th data-field="name"></th>


                                        </tr>
                                    </thead>

                                    <tbody id="detalle_fases">
<?php
if ($concurso != "") {
    $merito=0;
    $oposicion=0;
    foreach ($this->DATA['fasesConcurso'] as $key => $value) {
        echo '
        <tr class="center-align"><td>' . $value[7] . '</td>
        <td>' . $value[4] . '</td><td>' . $value[5] . '</td>';
        if($value[8]=="M")
        {
            echo '<td>' . $value[3] . '</td><td></td>';
            $merito+=$value[3];
        }
        else
        {
            echo '<td></td><td>' . $value[3] . '</td>';
            $oposicion+=$value[3];
        }
        echo '<td><a onclick="eliminar_fase_concurso(' . $value[2] . ')"><i class="material-icons small red-text" >delete</i></a></td>
        </tr>';
    }
    echo '<tr><td></td><td></td><th>Totales</th><th>'.$merito .'</th><th> '.$oposicion.'</th><td></td></tr>';
}
?>  

                                    </tbody>
                                </table>

                            </div>


                        </div>
                 </div><!--Seccion 2-->

                </div>  
            </div>
        </div>


        <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
            <a class="btn-floating btn-large red" onclick="<?php if ($concurso != "") echo 'actualizar_concurso();'; else echo "creaconcurso();"; ?>"  id="save_all">
                <i class="large material-icons">save</i>
            </a>
        </div>

 




    </body>
<?php include_once SCRIPT_U; ?> 

    <script src="<?php echo URL; ?>/public/js/globalJS.js"></script>
    <script src="<?php echo URL; ?>/public/js/controllerConcurso.js"></script>
    <script>var URL = '<?= URL ?>';</script>
    <script>
        var opdepartamento = '<?php if ($concurso != "") echo $concurso[0][6]; else echo ""; ?>';
        var opdepartamentopadr = '<?php if ($concurso != "") echo $concurso[0][13]; else echo ""; ?>';
        var CONCID_ = '<?php if ($concurso != "") echo $concurso[0][0]; else echo ""; ?>';
        var CONTOKEN= '<?php if ($concurso != "") echo $concurso[0][14]; else echo ""; ?>';
    </script>


    <script type="text/javascript">
    $( document ).ready(function(){
        $(".button-collapse").sideNav();
        $("#mconcursos").attr("class","active");
    })

//_________________CONSURSOENCABEZADO____________________________


//_________________FASE CONCURSO____________________________
//Tabla Fases_concurso
 

       

//ELIMINAR FASE CONCURSO
        function eliminar_fase_concurso(ID) {
            param = {'CONID': CONCID_, "FASE": ID};
            Materialize.toast('<i class="small material-icons" >done_all</i>Fase eliminada exitosamente', 2000);
            fajax(param, '<?php echo URL; ?>Management/delete_faseConcurso', actualiza_tabla_fases);
        }

//CREA FASE
        function guardar_fase(response) {
            $('#departamento_modal').closeModal();
            var obj = JSON.parse(response);
            Materialize.toast(obj['Mensaje'], 2000);

        }
//Actualiza todos fases
        function actualiza_allfases(response) {
            var obj = JSON.parse(response);

            $("#CFASE").empty();
            $("#CFASE").append('<option value="" selected disabled>Elija Fase</option>');

            $("#CFASE").append('fila');
            console.log(obj);
            $.each(obj, function (key, value) {

                var fila = '<option value= "' + value[0] + '">' + value[1] + '</option>';

                $("#CFASE").append(fila);

            });
        }

//Actualiza fases
        $("#TDES").change(function () {

            if ($('#TDES').val() != "NULL")
            {

                fajax($('#TDES').serialize(), '<?php echo URL; ?>Management/getall_fase', actualiza_allfases);
            }
        });



        $("#logo_param").click(function () {
            if ($('#CFASE').val() != "NULL")
            {
                var carg = $('#CFASE').serialize();

                fajax(carg, '<?php echo URL; ?>Management/busca_departamento', buscar_cargo);

                $('#logo_param').openModal();
            }
        });





//event heandler click guardar fase
        $("#guardar_F").click(function () {
            var frmser = $('#form_fases :input').serialize();

            if ($('#IFNOMB').attr('Did') == "") //Actualiza
            {

                console.log(frmser);
                fajax(frmser, '<?php echo URL; ?>Management/crea_fase', guardar_fase);

            }
            else
            {
                frmdep += "&DID=" + $('#DNOMB').attr('Did'); //AGREGAMOS EL ID PARA SU EDICION

                fajax(frmser, '<?php echo URL; ?>Management/actualiza_departamento', actualiza_departamento);

            }



        });

        $(document).ready(function () {
            seccionS('CC');

            $('#logo_departamento').hide();
            $('#logo_oferta').hide();
            if (opdepartamento != "" && opdepartamentopadr != "")
            {
                $('#PUESTO').val(opdepartamentopadr);
                $("#PUESTO").trigger("change");



            }



        });

//Actualiza Departamento
        function actualiza_departamento(response) {
            $('#departamento_modal').closeModal();
            var obj = JSON.parse(response);
            fajax($('#frmDepartamento :input').serialize(), '<?php echo URL; ?>Management/get_allDepartamentosjson', actualiza_alldepartamentos);
            Materialize.toast(obj['Mensaje'], 2000);

        }

//Actualiza Cargo
        function actualiza_cargo(response) {
            $('#departamento_modal').closeModal();
            var obj = JSON.parse(response);
            if ($('#PUESTO').val() != "NULL")
                fajax($('#PUESTO').serialize(), '<?php echo URL; ?>Management/get_allCargos', cargar_puestos_trabajo);
            Materialize.toast(obj['Mensaje'], 2000);

        }

//Actualiza todos los Departamentos 
        function actualiza_alldepartamentos(response) {
            var obj = JSON.parse(response);
            $("#PUESTO").empty();
            $("#PUESTO").append('<option value="" selected>Elija Departamento</option>');

            $("#PUESTO").append('fila');
            $.each(obj['departamentos'], function (key, value) {

                var fila = '<option value= "' + value[0] + '">' + value[1] + '</option>';

                $("#PUESTO").append(fila);

            });
            $("#CPADR").html($("#PUESTO").html());
        }

//Actualiza todos los Puestos de trabajo
        function cargar_puestos_trabajo(response) {

            var obj = JSON.parse(response);
            $("#CARGO").empty();
            $("#CARGO").append('<option value="" selected>Puesto de Trabajo</option>');


            $.each(obj['puestos'], function (key, value) {

                var fila = '<option value= "' + value[0] + '">' + value[1] + '</option>';

                $("#CARGO").append(fila);

            });
            if (opdepartamento != "")
                $("#CARGO").val(opdepartamento);
        }



//Actualiza los cargos
        $("#PUESTO").change(function () {
            $('#CPADR').val($('#PUESTO').val());
            if ($('#PUESTO').val() != "NULL")
            {
                fajax($('#PUESTO').serialize(), '<?php echo URL; ?>Management/get_allCargos', cargar_puestos_trabajo);


            }


        });



        function limpiaForm(miForm) {
// recorremos todos los campos que tiene el formulario
            $('#DNOMB').attr('Did', "");
            $('#CNOMB').attr('Did', "");
            $(':input', miForm).each(function () {
                var type = this.type;
                var tag = this.tagName.toLowerCase();
//limpiamos los valores de los campos…
                if (type == 'text' || type == 'password' || tag == 'textarea')
                    this.value = "";
// excepto de los checkboxes y radios, le quitamos el checked
// pero su valor no debe ser cambiado
                else if (type == 'checkbox' || type == 'radio')
                    this.checked = true;
// los selects le ponesmos el indice a -
                else if (tag == 'select')
                    this.selectedIndex = 0;
            });
        }


    </script>

</html>

