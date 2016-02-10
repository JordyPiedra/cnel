  var IFAS;
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
  function valores_maximo(IDFAS,vmax){

$("#base").html('/'+vmax);
IFAS=IDFAS;
  }
  
  function agregar_calificacion(){

    var data= $('form').serializeArray();
    console.log(data);

    fajax({'IDCON_': IDCONC , 'CONTOKEN':CONTOKEN, 'data': data}, URL+"/management/save_calificacion_aspirante", save_calificacion_aspirante_response);

  }

  function save_calificacion_aspirante_response(response){
   // var obj = JSON.parse(response);
    console.log(response);
//console.log(obj);
  }