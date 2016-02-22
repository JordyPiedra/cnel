<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include_once HEAD_U; ?>
    </head>
    <body>
    
          <br>
      <div class="row ">
            <div class="container ">

                <div class="col  s12  m12 l12 z-depth-1">
                 
                        <div class="col l12 m12 s12 center-align ">
                            <h5 class="blue-text text-darken-2">Report de aspirantes</h5>
                        </div>
                        
                        <div class="col l12 m12 s12 center-align ">
                            <input type="text"> 
                            <input type="checkbok">
                        </div>
                        <br>
                        <br>

                        <!--Reporte PDF-->
<div class="col l12 " id="REPORTE">  
<<<<<<< HEAD
  
=======
  <table id="myTable" class="tablesorter"> 
<thead> 
<tr> 
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
<tbody> 
<?php

foreach ($this->data['Aspirantes'] as $key => $value) {
  
echo' 
<tr class="center-align">
<td><i class="material-icons light-blue-text text-accent-3 small ">person</i></td>
<td>'.$value[1].'</td>
<td>'.$value[2].' '.$value[3].'</td>
<td> '.$value[4].' '.$value[5].'</td>
<td>'.$value[7].'</td>
<td>'.$value[6].'</td>

<td></td>


</tr>';
}
?>   
</tbody> 
</table> 
>>>>>>> 4bf3e985e4abf77c7da03dee1de5094154da19e1
</div>
   
                </div>
            </div>
        </div>

        <form action="<?php echo URL; ?>management/creaconcurso" method="POST"> 
            <input type="hidden" name="IDCON_" id="IDCON_" value=""> 
            <input type="submit" id="ejecutar" style="display: none;"> 
        </form>

        <form action="<?php echo URL; ?>management/reclutar" method="POST"> 
            <input type="hidden" name="IDCON_" id="IDCON_2" value=""> 
            <input type="hidden" name="CONTOKEN" id="token_" value=""> 
            <input type="submit" id="reclutar" style="display: none;"> 
        </form>

        <?php include_once SCRIPT_U; ?> 

<<<<<<< HEAD
        <?php include_once JSPDF ?>
        <script src="<?= URL . 'public/js/controllerReportes.js' ?>"></script>
    </body>

=======
      
        <script src="<?= URL . 'public/tablesorter/jquery.tablesorter.min.js' ?>"></script>
         <script src="<?= URL . 'public/tablesorter/jquery-latest.min.js' ?>"></script>
    </body>

    <script>
        
        $(document).ready(function() 
    { 
        $("#myTable").tablesorter( {sortList: [[0,0], [1,0]]} ); 
    } 
); 
   
    </script>
>>>>>>> 4bf3e985e4abf77c7da03dee1de5094154da19e1
</html>


