
//Guarda los aspirantes seleccionados.
function aprobar_perfil(id){

fajax({'IDASP' : id}, URL+"/management/aprobar_perfil", aprobar_perfil_response);

}

//Respuesta desppues de enviar a guardar los aspirantes
function aprobar_perfil_response(response){
  console.log(response);
  if(response==1)
    $('#modal1').openModal();
  else
    Materialize.toast('Error en aprobación',2000);


}
