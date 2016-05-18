<!DOCTYPE html>
<html lang="en">
    <head>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo URL; ?>public/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->

    <!-- DataTables CSS -->
    <link href="<?php echo URL; ?>public/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
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
   
                        
<div class="panel-body ">
                            <div class="dataTable_wrapper ">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Código</th>
                                            <th>Nombre</th>
                                            <th>Estado</th>
                                            <th>Fecha Inicio</th>
                                            <th>Fecha Fin</th>
                                            <th></th>
                                             
                                    </thead>
                                    <tbody>
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
<a class="tooltipped" data-position="top" data-delay="50" data-tooltip="Visualizar concurso" onclick="ver_concurso(' . $value[0] . ')"> <i class="material-icons small">visibility</i></a>
<a  class="tooltipped" data-position="top" data-delay="50" data-tooltip="Imprimir informe final" onclick="imprimir_informe(' . $value[0] .",'".$value[13]."'".');"><i class="material-icons small" >print</i></a></td>

</tr>';
}
?>   
                                       
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                           
                        </div>
                        
                        
                        
                    </div>  
                </div>
        </div> 


        <form target="_blank" action="<?php echo URL; ?>reportes/informe_final" method="POST"> 
            <input type="hidden" name="IDCON_" id="IDCON_2" value=""> 
            <input type="hidden" name="CONTOKEN" id="CONTOKEN" value=""> 
            <input type="submit" id="informe" style="display: none;"> 
        </form>
     <form target="_blank" action="<?php echo URL; ?>Reportes/base_concurso" method="POST"> 
            <input type="hidden" name="IDCON_" id="IDCON_3" value=""> 
            <input type="hidden" name="CONTOKEN" id="token_3" value=""> 
            <input type="submit" id="ver_c" style="display: none;"> 
        </form>
       

      
    </body>



</html>
 <?php include_once SCRIPT_U; ?> 
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
<!-- Bootstrap Core JavaScript -->
    <script src="<?php echo URL; ?>public/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->

    <!-- DataTables JavaScript -->
    <script src="<?php echo URL; ?>public/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo URL; ?>public/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
       
    });



    </script>
    <script src="<?php echo URL; ?>public/js/controllerConcurso.js"></script>
    <style>
        li.paginate_button.active{
            background-color:#337ab7;
        }
    </style>