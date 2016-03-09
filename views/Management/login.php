<!DOCTYPE html>
<html lang="es">
   
    
<?php include_once HEAD_U;?>


<body>

<main>
    <div class="center-align blue darken-4 z-depth-1">
      <img src="<?php echo URL;?>public/images/logo.png" alt="" class="circle responsive-img">
      <h5 class="center-align white-text light">ADMINISTRADOR - SELECCIÓN PERSONAL - CNEL</h5>
    </div>

<div class="row">
    <div class="container"></div>
</div>

<form action="" id="log">
<div class="row">
    <div class="col  s12 offset-m2 m8 offset-l4 l4 z-depth-1">
    <div class="container"  style="padding-bottom:100px;">
       <p class="center-align"><i class="material-icons large" id="accountCircle">account_circle</i></p>
      	<div id="contentLogin">
          <div class="input-field">
		    <i class="material-icons prefix">person</i>
		    <input id="USER" name="USER" type="text" class="validate" required>
		    <label for="USER">Usuario</label>
		</div>


        <div class="input-field">
		    <i class="material-icons prefix">vpn_key</i>
		    	<input id="PASS" name="PASS" type="password"  class="validate" required>
		        <label for="PASS">Password</label>
		</div>

		<div class="col l12 m12 s12 center-align">
			
			    <a onclick="login();" class="waves-effect waves-light btn blue">Login</a>
			<input type="submit" style="display:none;">
			<br><br><br>
			        
		</div>
        </div>
	</div>
	</div>
 </div>
</form>
</main>
<?php include_once SCRIPT_U;?>	
<script > var URL="<?php echo URL; ?>";</script>
 <script src="<?php echo URL; ?>public/js/globalJS.js"></script>
<script>
       function onclick_ (form_id){
     $(form_id).submit(function(event){
        event.preventDefault();
      });
      //controllerAS.tab[0] = '';
      var form =$(form_id);
        console.log(form);
      if (!form[0].checkValidity()) {
         console.log(form[0].checkValidity());
        form.find(':submit').click();
        return false;
      }else return true;
}

    function login(){
        console.log($('#log').serialize());
   if(onclick_('#log'))
    fajax($('#log').serialize(), URL+"/Management/validate_login", validate_login_response);    
    }
    function validate_login_response(response){
        if (response==1)
        {
            setTimeout(function(){ window.location.href = URL+"Management/index"; }, 3000);
                  $("#accountCircle").removeClass("red-text").addClass("green-text");
                  $("#contentLogin").empty().append('<h5 class="center-align">Iniciando...</h5>');
          }
        else
        {
             $("#accountCircle").removeClass("green-text").addClass("red-text");
                 
        Materialize.toast('<i class="material-icons red-text">error</i>&nbsp;Usuario y contraseña que ingresaste no coinciden', 3000, 'rounded');    
        }
             
    }
      $(document).keypress(function(e){
         if(e.which == 13) {
          ACCESS.submit();
         }
      });
</script>
    

   
</body>
</html>
        