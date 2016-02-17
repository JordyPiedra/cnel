<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include_once HEAD_U; ?>
    </head>
    <body>
        <?php include_once MENU_F; ?>
          <br>
      <div class="row ">
            <div class="container ">

                <div class="col  s12  m12 l12 z-depth-1">
                 
                        <div class="col l12 m12 s12 center-align ">
                            <h5 class="blue-text text-darken-2">Reportes del sistema</h5>
                        </div>
                        <br>
                        <br>

                        
<div class="col l4 "> 
    <div class="card z-depth-2">
        <div class="card-image waves-effect waves-block waves-light center-align">
        <i class="large     material-icons ">person</i>
        </div>
        <div class="card-content" style="padding-top: 0px;">
        <a target="_blank" href="<?= URL.'management/reporte_aspirantes' ?>">Reporte de aspirantes<i class="material-icons">open_in_new</i></a><span class="card-title activator grey-text text-darken-4"><i class="material-icons right">more_vert</i></span>
        <p>Aspirantes inscritos</p>
        </div>
        <div class="card-reveal">
        <span class="card-title grey-text text-darken-4"><a target="_blank" href="<?= URL.'management/reporte_aspirantes' ?>">Reporte de aspirantes<i class="material-icons">open_in_new</i></a><i class="material-icons right">close</i></span>
        <p>Listado de todos los aspirantes inscritos al sistema</p>
        </div>
    </div>
</div>

<div class="col l4 "> 
    <div class="card z-depth-2">
        <div class="card-image waves-effect waves-block waves-light center-align">
        <i class="large     material-icons ">person</i>
        </div>
        <div class="card-content" style="padding-top: 0px;">
        <a target="_blank" href="<?= URL.'management/reporte_aspirantes' ?>">Reporte de aspirantes<i class="material-icons">open_in_new</i></a><span class="card-title activator grey-text text-darken-4"><i class="material-icons right">more_vert</i></span>
        <p>Aspirantes inscritos</p>
        </div>
        <div class="card-reveal">
        <span class="card-title grey-text text-darken-4"><a target="_blank" href="<?= URL.'management/reporte_aspirantes' ?>">Reporte de aspirantes<i class="material-icons">open_in_new</i></a><i class="material-icons right">close</i></span>
        <p>Listado de todos los aspirantes inscritos al sistema</p>
        </div>
    </div>
</div>
<div class="col l4 "> 
    <div class="card z-depth-2">
        <div class="card-image waves-effect waves-block waves-light center-align">
        <i class="large     material-icons ">person</i>
        </div>
        <div class="card-content" style="padding-top: 0px;">
        <a target="_blank" href="<?= URL.'management/reporte_aspirantes' ?>">Reporte de aspirantes<i class="material-icons">open_in_new</i></a><span class="card-title activator grey-text text-darken-4"><i class="material-icons right">more_vert</i></span>
        <p>Aspirantes inscritos</p>
        </div>
        <div class="card-reveal">
        <span class="card-title grey-text text-darken-4"><a target="_blank" href="<?= URL.'management/reporte_aspirantes' ?>">Reporte de aspirantes<i class="material-icons">open_in_new</i></a><i class="material-icons right">close</i></span>
        <p>Listado de todos los aspirantes inscritos al sistema</p>
        </div>
    </div>
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


