
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
    fajax({'IDCON_': IDCONC , 'CONTOKEN':CONTOKEN,'IDBCON':IDBCON,'IDBCONTOKEN':IDBCONTOKEN, 'data': data}, URL+"/Management/save_calificacion_aspirante", save_calificacion_aspirante_response);

  }

  function save_calificacion_aspirante_response(response){
    var obj = JSON.parse(response);
     $('#terminabtn').removeClass('disabled');
     $('#terminabtn').attr('onclick','MSGfinFase();');
    Materialize.toast(obj['Mensaje'],3000);
    console.log(response);
    location.reload();
//console.log(obj);
  }
  
    function finaliza_fase(){
    fajax({'IDCON_': IDCONC , 'CONTOKEN':CONTOKEN,'IDBCON':IDBCON,'IDBCONTOKEN':IDBCONTOKEN}, URL+"/Management/finaliza_fase", finaliza_fase_response);
  }
  function finaliza_fase_response(response){
  if(response==1)
  location.reload();
  
  }
$('#aspfas'+IDBCON).change(function(){
    $('#terminabtn').addClass('disabled');
    $('#terminabtn').attr('onclick','');
});
function MSGfinFase(){
     var data1= $('#aspfas'+IDBCON).serializeArray();
     Ncalcero=0;
      $.each(data1, function (key, value) {
         
         if(value['value']==0)
         Ncalcero ++;
      });
    if(Ncalcero>=1)
    MSGCalcero();
    else
   { $("#mensajeAlert").html('Una vez terminada la fase no se permite realizar cambios <br> Desea continuar?.');
     $("#accept").attr('onclick','finaliza_fase();');
      $("#modalAPRO").openModal();
    }
}


function MSGCalcero(){
    $("#mensajeAlert").html('¿La fase actual contiene registros con calificación cero "0" <br> Desea continuar?.');
     $("#accept").attr('onclick','finaliza_fase();');
      $("#modalAPRO").openModal();
}