
  function ver_concurso(id)
  {
    $("#IDCON_").val(id); 
    $("#ejecutar").trigger("click");
  }
    function calificar(id,token)
  {
    console.log(token);
    $("#IDCON_2").val(id); 
    $("#token_").val(token); 
    $("#calificar_").trigger("click");
  }

  $('document').ready(function(){
  $(".button-collapse").sideNav();
  $("#mcalificaciones").attr("class","active");
    
  });
  //////////View- CALIFICAR
  function mostrar_menufa(IDBCON_,IDBCONTOKEN_){
$('form').hide();
$('#aspfas'+IDBCON_).show();
IDBCON=IDBCON_;
IDBCONTOKEN=IDBCONTOKEN_;
  }
  
  function agregar_calificacion(){

    var data= $('#aspfas'+IDBCON).serializeArray();
    console.log(data);
    fajax({'IDCON_': IDCONC , 'CONTOKEN':CONTOKEN,'IDBCON':IDBCON,'IDBCONTOKEN':IDBCONTOKEN, 'data': data}, URL+"/management/save_calificacion_aspirante", save_calificacion_aspirante_response);

  }

  function save_calificacion_aspirante_response(response){
    var obj = JSON.parse(response);
    Materialize.toast(obj['Mensaje'],3000);
    console.log(response);
//console.log(obj);
  }
  
    function finaliza_fase(){
    fajax({'IDCON_': IDCONC , 'CONTOKEN':CONTOKEN,'IDBCON':IDBCON,'IDBCONTOKEN':IDBCONTOKEN}, URL+"/management/finaliza_fase", finaliza_fase_response);
  }
  function finaliza_fase_response(response){
  if(response==1)
  location.reload();
  
  }