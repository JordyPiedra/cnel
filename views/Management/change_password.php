<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include_once HEAD_U; ?>
    </head>
    <body>
        <?php include_once MENU_F; ?>
        <div class="container">
            <div class="row">
                <br>
    <div class="col  s12 offset-m1 m10 offset-l3 l6 z-depth-1">
    <div class="container" style="padding-bottom:100px;">
      <p class="center-align"><i class="material-icons large">account_circle</i></p>
      	
       <form action="" id="user_pass">
        <div class="col l12 m12 s12">
              <div class="input-field">
		  
                  <input id="upass" name="upass" type="password" class="validate" required>
		  <label for="upass">Contraseña nueva</label>
                </div>
			        
        </div>
        <div class="col l12 m12 s12">
              <div class="input-field">
		  
		    <input id="upass_" type="password"  name="upass_" class="validate" required>
		    <label for="upass_">Repita contraseña</label>
		</div>
			        
        </div>
        <div class="center-align col l12 m12 s12">
                
                    <a class="waves-effect waves-light btn blue" onclick="update_password();">Aceptar</a>
              <br><br><br>

        </div>
    
        <div class="col l12 m12 s12">
                <div class="row">
                    <div class="divider"></div>
                </div>
        </div>
			   <input type="submit" style="display:none;">
        
          </form>
			    

	</div>


	</div>
 </div>
        </div>
    </body>
     <script src="<?php echo URL; ?>/public/js/globalJS.js"></script>
    <script>var URL = '<?= URL ?>';</script>
    <?php include_once SCRIPT_U; ?> 
    <script type="text/javascript">
        $(document).ready(function () {
            $(".button-collapse").sideNav();
        })
        
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

function update_password(){
    if(onclick_('#user_pass')){
        if($('#upass').val() != $('#upass_').val())
        Materialize.toast('Las contraseñas no coinciden',3000);
        else
        {
            fajax({'PASS' : $('#upass').val()}, URL+'Management/update_user_pass', update_password_response);   
        }
    }
    
}
function update_password_response(response){
      var obj = JSON.parse(response);
    Materialize.toast(obj['Mensaje'], 2000);
      
}
    </script>
</html>