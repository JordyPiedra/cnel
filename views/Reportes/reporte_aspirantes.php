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

        <?php include_once JSPDF ?>
        <script src="<?= URL . 'public/js/controllerReportes.js' ?>"></script>
    </body>

</html>


