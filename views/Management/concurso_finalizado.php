<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include_once HEAD_U; ?>
    </head>
    <body>
        <?php include_once MENU_F; ?>
          <br>
        <div class="row ">
                <div class="col  s12  m12 l12 ">
                    <div class="container z-depth-1" style="padding: 10px;">
                        <div class="col l12 m12 s12 center-align ">
<<<<<<< HEAD
                            <h5 class="blue-text text-darken-2">Poceso de Reclutamiento</h5>
=======
                            <h5 class="blue-text text-darken-2">Concursos Finalizados</h5>
>>>>>>> 4bf3e985e4abf77c7da03dee1de5094154da19e1
                        </div>
                        <br>
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
<<<<<<< HEAD
<td><i class="material-icons light-green-text text-accent-3 small ">label</i></td>
=======
<td><i class="material-icons red-text text-darkred-4 small ">label</i></td>
>>>>>>> 4bf3e985e4abf77c7da03dee1de5094154da19e1
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

