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
   

function alerta_iniciar(id,nombre,codigo,token){
    $("#mensajeAlert").html('Seguro desea inicializar el concurso '+nombre+' - '+codigo+' ?');
     $("#accept").attr('onclick','inicia_concurso('+id+",'"+token+"');");
      $("#modalalert").openModal();
}
    function inicia_concurso(id,token)
  {
    fajax({'IDCON_':id,'CONTOKEN':token},URL+'Management/inicialStateConcurso', inicia_concurso_response);
  }

function inicia_concurso_response(){
    location.reload();
}  

function editar_concurso(id,token){
    $('#IDCON_1').val(id);
    $('#token_1').val(token);
    $('#editar').trigger('click');
    
}

//Validar creacion concurso
//CREA CONCURSO
       function creaconcurso() {
            if(onclick_('#cabeceraConcurso')){
                console.log($('#CFINI').val());
                console.log($('#CFFIN').val());
              if($('#CFINI').val()<=$('#CFFIN').val())
                {
                var cabecera_concurso = $('#cabeceraConcurso :input').serialize();
                console.log(cabecera_concurso);
                fajax(cabecera_concurso, URL+'Management/insert_concurso', creaconcurso_response);
                }
            else
           { Materialize.toast('La fecha inicial no puede ser mayor a la fecha final.',3000);
            $('#CFFIN').focus();
           }
        }
    }

        function creaconcurso_response(response) {
            var obj = JSON.parse(response);
            CONCID_ = obj['IDCON'];
            CONTOKEN = obj['CONTOKEN'];
            if(CONCID_)
            $('#tabPC').show();
            $('#save_all').attr('onclick',"actualizar_concurso()");
            console.log(obj);
            Materialize.toast(obj['Mensaje'],2000);
            $('#ltabPC').trigger('click');
        }
 
 function actualizar_concurso(){
      if(onclick_('#cabeceraConcurso')){
           if($('#CFINI').val()<=$('#CFFIN').val())
                {
            var cabecera_concurso = $('#cabeceraConcurso :input').serialize();
            cabecera_concurso+='&IDCON_=' + CONCID_+'&CONTOKEN=' + CONTOKEN;
            console.log(cabecera_concurso);
            fajax(cabecera_concurso, URL+'Management/update_concurso', actualizar_concurso_response);
                } else
           { Materialize.toast('La fecha inicial no puede ser mayor a la fecha final.',3000);
            $('#CFFIN').focus();
           }   
     }
 }
 
 function actualizar_concurso_response(response){
       var obj = JSON.parse(response);
         Materialize.toast(obj['Mensaje'],2000);
        
 }
 
 ///crea las fases para un concurso especificado
 function insert_base_concurso(){
if (CONCID_ != null && CONCID_ != '')
{
    if(onclick_('#parametrosConcurso')){
        
        if($('#BFINI').val()>=$('#CFINI').val() && $('#BFFIN').val()<=$('#CFFIN').val())
                  {  
                      if($('#BFINI').val()<=$('#BFFIN').val())
                            {
                var faseC = $('#parametrosConcurso :input').serialize();
                faseC += '&CONID=' + CONCID_;
                fajax(faseC, URL+'Management/insert_base_concurso', insert_base_concurso_response);
                }else
                    { Materialize.toast('La fecha inicial no puede ser mayor a la fecha final.',3000);
                        $('#BFFIN').focus();
                    } 
           } else
                    { Materialize.toast('La fechas no estan en el rango de fechas del concurso',3000);
                        $('#BFFIN').focus();
                    } 
             
    }
}
else
    Materialize.toast('Concurso no definido', 2000);   
 }
        
function insert_base_concurso_response(response) {

    var obj = JSON.parse(response);
    console.log(response);
    Materialize.toast(obj['Mensaje'], 2000);
    actualiza_tabla_fases();
}

function actualiza_tabla_fases() {
    param = {'CONID': CONCID_};
    fajax(param, URL+'Management/getall_fase_concurso', actualiza_tabla_fases_response);
}

function actualiza_tabla_fases_response(response) {
        var obj = JSON.parse(response);
        $("#detalle_fases").empty();
        var merito=0;
        var oposicion=0;
        $.each(obj, function (key, value) {
            if (value[8] == 'M')
             {  registro = '<tr class="center-align"><td>' + value[7] + '</td><td>' + value[4] + '</td><td>' + value[5] + '</td><td>' + value[3] + '</td><td></td><td><a onclick="eliminar_fase_concurso(' + value[2] + ')"><i class="material-icons small red-text" >delete</i></a></td></tr>';
                merito+=parseInt(value[3]);
             }
            else
               {
                    registro = '<tr><td>' + value[7] + '</td><td>' + value[4] + '</td><td>' + value[5] + '</td><td></td><td>' + value[3] + '</td><td><a onclick="eliminar_fase_concurso(' + value[2] + ')"><i class="material-icons small red-text" >delete</i></a></td></tr>';
                    oposicion+=parseInt(value[3]);
               }
            $("#detalle_fases").append(registro);

        });
          registro = '<tr><td></td><td></td><th>Totales</th><th>'+merito +'</th><th> '+oposicion+'</th><td></td></tr>';
           $("#detalle_fases").append(registro);
       
    }
//Funcion para cargar las secciones de creacion de concurso
function seccionS(param) {
$('#cabeceraConcurso').hide();
$('#seccion2').hide();


switch (param)
{


    case 'CC':
    {
        $('#cabeceraConcurso').show();
        $('#tabCC').attr('class','tab active');
        $('#tabPC').attr('class','tab');
        $('#save_all').show();
        break;

    }
    case 'PC':

        $('#seccion2').show();
        $('#tabPC').attr('class','tab active');
        $('#tabCC').attr('class','tab');
        $('#save_all').hide();
        break;
    

}
}

function anular_concurso(id,nombre,codigo,token){
    $("#mensajeAlert").html('¿Seguro desea eliminar el concurso '+nombre+' - '+codigo+' ? <br> una vez eliminado no podra activarlo nuevamente');
     $("#accept").attr('onclick','eliminar_concurso('+id+",'"+token+"');");
      $("#modalalert").openModal();
}
 function eliminar_concurso(id,token)
  {
    fajax({'IDCON_':id,'CONTOKEN':token},URL+'Management/AnulaStateConcurso', function(response){console.log(response); location.reload();});
  }
  
   function ver_concurso(id)
  {
       $("#IDCON_3").val(id);
         $("#ver_c").trigger('click');
  }