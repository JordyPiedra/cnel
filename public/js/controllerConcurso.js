    $( document ).ready(function(){
        $(".button-collapse").sideNav();
        $("#mconcursos").attr("class","active");
    })
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