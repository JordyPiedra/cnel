
<header> 
  <div class="row" style="margin-bottom: 0px;">
  <nav class="blue darken-4 z-depth-1" >
    <div class="nav-wrapper">
      <a href="<?php echo URL; ?>Management/index" class="brand-logo">&nbsp;&nbsp;<img src="<?php echo URL; ?>public/images/logo.png" alt="" class=" responsive-img"></a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <div class="col l10">
      <ul class="right hide-on-med-and-down">
        <?php
        if(Session::getValue("TIP-ADMIN")=='D'){
            echo '
        <li id="mconfiguracion" ><a href="'.URL.'Management/configuracion">&nbsp;&nbsp;Configuración&nbsp;&nbsp;</a></li>
        <li id="mconcursos" ><a href="'.URL.'Management/concursos">&nbsp;&nbsp;Concursos&nbsp;&nbsp;</a></li> ';
        }
          ?>
        <li id="maspirante"><a href="<?php echo URL; ?>Management/gestion_aspirante">&nbsp;&nbsp;&nbsp;&nbsp;Aspirantes</a></li>
       
        <li id="mprocess"><a href="<?php echo URL; ?>Management/procesos">&nbsp;&nbsp;&nbsp;&nbsp;Procesos</a></li>
        <!--<li id="mreclutamiento"><a href="<?php echo URL; ?>Management/reclutamiento">&nbsp;&nbsp;&nbsp;&nbsp;Reclutamiento</a></li>
        <li id="mcalificaciones"><a href="<?php echo URL; ?>Management/calificaciones">&nbsp;&nbsp;&nbsp;&nbsp;Calificaciones</a></li>-->
        <li id="mreportes"><a href="<?php echo URL; ?>Management/reportes">&nbsp;&nbsp;&nbsp;&nbsp;Reportes&nbsp;&nbsp;</a></li>
        <li><a class="dropdown-button subMA" href="javascript:" data-activates="user"><i class="material-icons wite-text text-wite">more_vert</i></a></li>
      </ul>

      </div>
     
    </div>
  </nav>
</div>
</header>
    <ul id="user" class="dropdown-content">
  <li><a href="<?=URL.'Management/change_password'?>">Cambiar contraseña</a></li>
  <li class="divider"></li>
  <li><a href="<?=URL.'Management/logout'?>">Cerrar sessión</a></li>
</ul>
<main>
  <div class="center-align blue darken-4 z-depth-1" style="margin-top: 0px;">
    <h5 class="center-align white-text light" style="margin-top: 0px;">ADMINISTRADOR - CNEL</h5>
  </div>
</main>   
