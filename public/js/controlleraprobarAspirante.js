
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
 
function get_aspirantes_filtro(){
parametros ={
  'InstruccionFormal' : F_instruccion_formal()
  , 'AreaEstudio' :  F_area_estudio()
  , 'Discapacidad'  : F_discapacidad()
  , 'Experiencia' : F_experiencia()
  ,'EST' : 'A'
};
 var estudio0=F_instruccion_formal();
//  console.log(estudio0);
  fajax(parametros, URL+"/Management/get_aspirantes_reclutar", get_aspirantes_filtro_response);
}

function get_aspirantes_filtro_response(response){
var obj = JSON.parse(response);
console.log(obj['Aspirantes']);
$("#aprobaciontable").empty();
  $.each(obj['Aspirantes'], function (key, value) {
console.log(value);
  var fila = '<tr class="center-align">';
      fila += '<td>'+(key+1)+'</td>';
      fila += '<td>'+value[1]+'</td>';
      fila += '<td>'+value[2]+' '+value[3]+'</td>';
      fila += '<td> '+value[4]+' '+value[5]+'</td>';
      fila += '<td>'+value[7]+'</td>';
      fila += '<td>'+value[6]+'</td>';
      fila += '<td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;<a class="tooltipped" data-position="top" data-delay="50" data-tooltip="Visualizar C.V." onclick="ver_CV('+value[0]+')"> <i class="material-icons small">visibility</i></a>&nbsp;&nbsp;&nbsp;&nbsp;';
      fila += '<a class="tooltipped " data-position="top" data-delay="50" data-tooltip="Visualizar perfil" onclick="ver_perfil('+value[0]+')"> <i class="material-icons small">assignment_ind</i></a>&nbsp;&nbsp;&nbsp;&nbsp;';
      fila += '<a class="tooltipped " data-position="top" data-delay="50" data-tooltip="Aprobar" onclick="aprobar('+value[0]+",'"+value[1]+"'"+')"><i class="material-icons light-orange-text text-accent-3 small" >check</i></a></td></tr>';
$("#aprobaciontable").append(fila);

            });

} 

//_________________________FILTRO DE BUSQUEDA_______________________________
//retorna los filtros de instruccion formal seleccionados
function F_instruccion_formal(){
  if($('#instruccionF').prop('checked'))
    {
     arrFiltro= $('#InstruccionFormal :input').serializeArray();
    //console.log(arrFiltro);
    return arrFiltro;
    }
    return null;
}

//retorna los filtros de area de estudio seleccionados
function F_area_estudio(){
  if($('#area').prop('checked'))
    {
     arrFiltro= $('#AreaEstudio :input').serializeArray();
    //console.log(arrFiltro);
    return arrFiltro;
    }
    return null;
}
//retorna los filtros de area de trabajo seleccionados
function F_experiencia(){
  if($('#Experiencia').prop('checked'))
    {
     arrFiltro= $('#ExperienciaLaboral :input').serializeArray();
    //console.log(arrFiltro);
    return arrFiltro;
    }
    return null;
}
//retorna los filtros de discapacidad seleccionados
function F_discapacidad(){
  if($('#discapacidad').prop('checked'))
    {
     arrFiltro= $('#DiscapacidadAspirante :input').serializeArray();
     return arrFiltro;
    }
    return null;
}
//______________________________________________________________________________