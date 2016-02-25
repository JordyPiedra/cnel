    $('document').ready(function(){
  $(".button-collapse").sideNav();
  $("#maspirante").attr("class","active");
    
  });
//Aprueba perfil
function aprobar(id,nombre){
    $("#accept").attr('onclick','aprobar_perfil('+id+')');
    $("#mensajeAlert").html('¿Esta seguro en aprobar el aspirante con cédula <b>'+nombre+'</b>? ');
    $("#modalAPRO").openModal();
}

function aprobar_perfil(id){
fajax({'IDASP' : id}, URL+"Management/aprobar_perfil", aprobar_perfil_response);
}

//Respuesta desppues de enviar a guardar los aspirantes
function aprobar_perfil_response(response){
  console.log(response);
  if(response==1)
   {
       $("#modalAPRO").closeModal();
     location.reload();
   }
  else
    Materialize.toast('Error en aprobación',2000);
}
//Muestra Curriculum vitae
function ver_CV(id){
fajax({}, URL+"Aspirante/curriculumVitae/"+id, ver_CV_response);
}

function ver_CV_response(response){
    var obj= JSON.parse(response);
    getCurriculumVitae(obj); 
}
//Muestra el perfil completo
function ver_perfil(id){
   fajax({'id':id}, URL+"Management/perfil_aspirante/",ver_perfil_response); 
}
function ver_perfil_response(response){
    console.log(response);
    if(response == 1)
    window.open(URL+"Aspirante/perfil", '_blank');
}
 
 

