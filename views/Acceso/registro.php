<!DOCTYPE html>
<html lang="es">
   
    
<?php include_once HEAD_U;?>

<body>

<main>
    <div class="center-align blue darken-4 z-depth-1">
      <img src="<?php echo URL;?>public/images/logo.png" alt="" class="circle responsive-img">
      <h5 class="center-align white-text light">SELECCIÓN PERSONAL - CNEL</h5>
    </div>

<div class="row">
    <div class="container"></div>
</div>


<div class="row">
    <div class="col  s12 offset-m1 m10 offset-l3 l6 z-depth-1">
    <div class="container" style="padding-bottom:100px;">
      <p class="center-align"><i class="material-icons large">account_circle</i></p>
      	
        <div class="col l6 m6 s6">
              <div class="input-field">
		  
		    <input id="nom1asp" type="text" class="validate">
		    <label for="nom1asp">Nombre</label>
		</div>
			        
        </div>
        <div class="col l6 m6 s6">
              <div class="input-field">
		  
		    <input id="ape1asp" type="text" class="validate">
		    <label for="ape1asp">Apellido</label>
		</div>
			        
        </div>
        <div class="col l6 m6 s6">
              <div class="input-field">
		  
		    <input id="ceduasp" type="number" class="validate">
		    <label for="ceduasp">Cédula</label>
		</div>
			        
        </div>
        <div class="col l6 m6 s6">
              <div class="input-field">
		  
		    <input id="emaiasp" type="email" class="validate">
		    <label for="emaiasp">Email</label>
		</div>
			        
        </div>
        <div class="col l6 m6 s6">
              <div class="input-field">
		  
                  <input id="passasp" type="password" class="validate">
		  <label for="passasp">Contraseña</label>
                </div>
			        
        </div>
        <div class="col l6 m6 s6">
              <div class="input-field">
		  
		    <input id="passasp_" type="password" class="validate">
		    <label for="passasp_">Repita contraseña</label>
		</div>
			        
        </div>
        <div class="center-align col l12 m12 s12">
                
                    <a class="waves-effect waves-light btn blue">Registrarse</a>
              <br><br><br>

        </div>
    
        <div class="col l12 m12 s12">
                <div class="row">
                    <div class="divider"></div>
                </div>
                 <a href="<?php echo URL.'acceso/login'; ?>"><h6 class="center-align">Inicia sesión</h6></a>        
        </div>
			  

          
			    

	</div>


	</div>
 </div>

</main>


<?php include_once SCRIPT_U;?>	
</body>
</html>
        


