<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include_once HEAD_U; ?>
    </head>
    <body>
        <?php include_once MENU_F; ?>
      <div class="row ">
            <div class="container ">

   <nav class="blue darken-1">
    <div class="nav-wrapper">
     
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li ><a href="reportes">Reportes</a></li>
        <li class="active"><a href="concurso_finalizado">Concursos</a></li>
      </ul>
    </div>
  </nav>
                <div class="col  s12  m12 l12 ">
                        <div class="col l12 m12 s12 center-align ">
                            <h5 class="blue-text text-darken-2">Concursos Finalizados</h5>
                        </div>
                        <br>
                                  <div class="input-field col l3 m4 s12">
                                        <input id="BFINI" name="BFINI"  type="date" class="datepicker " required>
                                        <label class="active" for="BFINI">Fecha Inicial</label>
                                    </div>
                                    <div class="input-field col l3 m4 s12">
                                        <input id="BFFIN" name="BFFIN" type="date" class="datepicker" required>
                                        <label class="active" for="BFFIN">Fecha Final</label>
                                    </div>
                                    <div class="input-field col l3 m4 s12">
                                      <a class="waves-effect waves-light btn  light-blue darken-3"  onclick=""><i class="material-icons left">search</i>Buscar  </a>
                                    </div>
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

echo' 
<tr class="center-align">
<td><i class="material-icons red-text text-darkred-4 small ">label</i></td>
<td>' . $value[5] . '</td>
<td>' . $value[1] . '</td>
<td>Finalizado</td>
<td>' . $value[10] . '</td>
<td>' . $value[11] . '</td>
<td>
&nbsp;<a  class="tooltipped" data-position="top" data-delay="50" data-tooltip="Imprimir informe final" onclick="imprimir_informe(' . $value[0] .",'".$value[13]."'".');"><i class="material-icons small" >print</i></a></td>

</tr>';
}
?>   

                            </tbody>
                        </table>
                    </div>  
                </div>
        </div> 


        <form target="_blank" action="<?php echo URL; ?>reportes/informe_final" method="POST"> 
            <input type="hidden" name="IDCON_" id="IDCON_2" value=""> 
            <input type="hidden" name="CONTOKEN" id="CONTOKEN" value=""> 
            <input type="submit" id="informe" style="display: none;"> 
        </form>

        <?php include_once SCRIPT_U; ?> 

      
    </body>

</html>

<script type="text/javascript">
    $( document ).ready(function(){
        $(".button-collapse").sideNav();
        $("#mreporte").attr("class","active");
    })

function imprimir_informe (IDCONC,CONTOKEN){
    $('#IDCON_2').val(IDCONC);
    $('#CONTOKEN').val(CONTOKEN);
     $("#informe").trigger("click");
}
</script>

