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

$(document).ready(function(){
        $("#mconfiguracion").attr("class","active");
    $('.tooltipped').tooltip({delay: 50});
    
    
  });

//departamentos
function dep_selected(){
  if($('#PUESTO').val()=='NULL') 
   $('#dep_edit').hide();
  else
    {
    $('#dep_edit').show();
 
   fajax($('#PUESTO').serialize(),URL+'Management/get_allCargos', cargar_puestos_trabajo);

  
    }
}
//Enlista los Puestos de trabajo
function cargar_puestos_trabajo(response) {
    console.log(response);
    var obj = JSON.parse(response);
    $("#CARGO").empty();

    $.each(obj['puestos'], function (key, value) {
        if(value[3]=='H')
        estado='Habilitado';
        else
        estado='Deshabilitado';
        var fila = '<tr><td>'+(key+1)+'</td><td>' + value[1] + '</td><td>' +  estado + '</td>'+
        '<td><a class="tooltipped" data-position="top" data-delay="50" data-tooltip="Editar Cargo" onclick="actualizar_cargo('+value[0]+",'"+value[1]+"','"+value[2]+"'"+')"> <i class="material-icons small">edit</i></a>'+
        '<a class="tooltipped" data-position="top" data-delay="50" data-tooltip="Editar Cargo" onclick="elimina_cargo('+value[0]+",'"+value[1]+"'"+')"> <i class="material-icons small">delete</i></a></td></tr>';

        $("#CARGO").append(fila);

    });

}
//Crea los puestos de trabajo
function create_departamento(){
    $('#DNOMB').val('');
    $('#DESTA').prop('checked', 'true');
    $('#guardar_D').attr('onclick', "insert_departamento()");
    $("#departamento_modal").openModal();

}
//Inserta el departamento establecido
function insert_departamento(){
    if(onclick_('#frmDepartamento')){
     var frmdep = $('#frmDepartamento :input').serialize();
     frmdep += "&TIPO=D";
    // console.log(frmdep);
    fajax(frmdep, URL+'Management/crea_departamento', insert_departamento_response);
    }
}
//
function insert_departamento_response(response){
     var obj = JSON.parse(response);
      $("#CARGO").empty();
     Materialize.toast(obj['Mensaje'],2000);
     $("#departamento_modal").closeModal();
  fajax({}, URL+'Management/get_allDepartamentosjson', actualiza_alldepartamentos);
}

//Edita los puestos de trabajo
function edit_departamento(){
    
    $('#lDNOMB').attr('class','active');
    $('#DNOMB').val('');
    $('#DNOMB').val($('#PUESTO option:selected').text());
    
    $('#DESTA').prop('checked', '');
    if($('#PUESTO option:selected').attr('estado')=='H')
    $('#DESTA').prop('checked', 'true');
    iddep=$('#PUESTO').val();
    $('#guardar_D').attr('onclick', "update_departamento("+iddep+")");
    $("#departamento_modal").openModal();

}
//Guardar departamento editado
function update_departamento(id){
    if(onclick_('#frmDepartamento')){
   var frmdep = $('#frmDepartamento :input').serialize();
    frmdep += "&DID="+id; 
     frmdep += "&TIPO=D";
     //console.log(frmdep);
    fajax(frmdep, URL+'Management/actualiza_departamento', update_departamento_response);
    }
}
function update_departamento_response(response){
      $('#departamento_modal').closeModal();
            var obj = JSON.parse(response);
            fajax($('#frmDepartamento :input').serialize(), URL+'Management/get_allDepartamentosjson', actualiza_alldepartamentos);
              $("#CARGO").empty();
            Materialize.toast(obj['Mensaje'], 2000);
            
    
}

//Actualiza lista departamentos
        function actualiza_alldepartamentos(response) {
            $('#dep_edit').hide();
            var obj = JSON.parse(response);
            $("#PUESTO").empty();
             var fila = '<option value="NULL" selected>Elija Departamento</option>';
            $("#PUESTO").append(fila);
            $.each(obj['departamentos'], function (key, value) {

                var fila = '<option estado="'+ value[3] + '" value= "' + value[0] + '">' + value[1] + '</option>';

                $("#PUESTO").append(fila);

            });
        

            $("#CPADR").html($("#PUESTO").html());
        }


//Actualiza Departamento
function create_cargo(){
     $('#CNOMB').val('');
    $('#guardar_C').attr('onclick','insert_cargo();');
    $('#estCarg').hide();
        if($('#PUESTO').val()!= 'NULL')
    $('#CPADR').val($('#PUESTO').val());
    
     $('#cargo_trabajo').openModal();
}
function insert_cargo(){
    if(onclick_('#frmCargo')){
     var frmdep = $('#frmCargo :input').serialize();
    frmdep += "&TIPO=P";
    console.log(frmdep);
    frmdep = frmdep.replace('CNOMB', 'DNOMB').replace('CESTA', 'DESTA').replace('CPADR', 'DPADR');
    console.log(frmdep);
    fajax(frmdep, URL+'Management/crea_departamento', insert_cargo_response);
    } 
}
//CREA CARGO 
function insert_cargo_response(response) {
    $('#cargo_trabajo').closeModal();
    var obj = JSON.parse(response);
    obj['Mensaje']=obj['Mensaje'].replace('departamento', 'cargo')
    Materialize.toast(obj['Mensaje'], 2000);

    if ($('#PUESTO').val() != "NULL")
        fajax($('#PUESTO').serialize(),URL+'Management/get_allCargos', cargar_puestos_trabajo);

}

//Actualiza Cargo
function actualizar_cargo(id,nombre,padre) {
    $('#CNOMB').val(nombre);
    $('#CPADR').val(padre);
    $('#guardar_C').attr('onclick','update_cargo('+id+');');
     $('#lDNOMB2').attr('class','active');
    $('#cargo_trabajo').openModal();

}

//Actualiza Cargo
function update_cargo(id) {
     if(onclick_('#frmCargo')){
  var frmdep = $('#frmCargo :input').serialize();
    frmdep += "&TIPO=P";
        frmdep += "&DID="+id; 
         frmdep += "&DESTA=H"; 
   
    console.log(frmdep);
    frmdep = frmdep.replace('CNOMB', 'DNOMB').replace('CESTA', 'DESTA').replace('CPADR', 'DPADR');
    console.log(frmdep);
     fajax(frmdep, URL+'Management/actualiza_departamento', update_cargo_response);
     }

}
function update_cargo_response(response){
     $('#cargo_trabajo').closeModal();
    var obj = JSON.parse(response);
    obj['Mensaje']=obj['Mensaje'].replace('departamento', 'cargo')
    Materialize.toast(obj['Mensaje'], 2000);
     if ($('#PUESTO').val() != "NULL")
        fajax($('#PUESTO').serialize(),URL+'Management/get_allCargos', cargar_puestos_trabajo);
}


//Actualiza Cargo - elimina cargo
function elimina_cargo(id,nombre){
     $('#mensajeAlert').html('¿Seguro desea eliminar el cargo '+nombre);
    $('#accept').attr('onclick','delete_cargo('+id+');');
     $('#modalAPRO').openModal();
}
function delete_cargo(id) {
  
     fajax({'DID': id}, URL+'Management/actualiza_departamento', delete_cargo_response);
}

function delete_cargo_response(response){
     $('#mensaje_cargo').closeModal();
    Materialize.toast('Cargo eliminado...', 2000);
    $('#elimina_C').attr('onclick','');
    fajax($('#PUESTO').serialize(),URL+'Management/get_allCargos', cargar_puestos_trabajo);
}
//___________________________CONFIGURACION FASES__________________________________
function nueva_fase(){
   $('#IFNOMB').val('');
    $('#IFTFAS').val('');
    $('#IFTDES').val('');
    $('#lblIFNOMB').attr('class',''); 
     $('#fas_guardar').attr('onclick','create_fase();');
}
function actualizar_fase(id,name,merops,tipo){
    $('#IFNOMB').val(name);
    $('#IFTFAS').val(merops);
    $('#IFTDES').val(tipo);
    $('#lblIFNOMB').attr('class','active');
    $('#fas_guardar').attr('onclick','update_fase('+id+');');
    
}
function update_fase(id){
     var frmser = $('#form_fases :input').serialize();
     frmser += "&DID="+id; 
     console.log(frmser);
          fajax(frmser, URL+'Management/update_fase', update_fase_response);
}
function update_fase_response(response){
     console.log(response);
     var obj = JSON.parse(response);
  
    Materialize.toast(obj['Mensaje'], 2000);
    actualizar_tabla_fases();
}

function create_fase(){
    if(onclick_('#form_fases')){
      var frmser = $('#form_fases :input').serialize();
     fajax(frmser, URL+'Management/crea_fase', create_fase_response);   
    }
    
}
function create_fase_response(response){
     console.log(response);
     var obj = JSON.parse(response);
    Materialize.toast(obj['Mensaje'], 2000);
    actualizar_tabla_fases();
}
function elimina_fase(id,nombre){
    $('#mensajeAlert').html('¿Seguro desea eliminar la fase '+nombre);
    $('#modalAPRO').openModal();
    $('#accept').attr('onclick','delete_fase('+id+');');
    
}
function delete_fase(id){
     fajax({'DID':id,'ESTA':'D'}, URL+'Management/delete_fase',delete_fase_response);
}
function delete_fase_response(){
    Materialize.toast('Fase eliminada..',2000);
    $('#mensaje_fase').closeModal();
    actualizar_tabla_fases();
}
function actualizar_tabla_fases(){
     fajax({'TDES': '%'}, URL+'Management/getall_fase', actualizar_tabla_fases_response);
     
}
function actualizar_tabla_fases_response(response){
    
      var obj = JSON.parse(response);
    $("#FASES").empty();

    $.each(obj, function (key, value) {
            tipo="";
      switch (value[3]) {
          case 'P':
             tipo="Prueba";
              break;
          case 'E':
             tipo="Entrevista";
              break;
          case 'R':
             tipo="Requerimiento";
              break;

      }
        
        var fila = '<tr><td>'+(key+1)+'</td><td>' + value[1] + '</td><td>' + value[2] + '</td>'+'</td><td>' + tipo+ '</td><td>'+
       '<a class="tooltipped" data-position="top" data-delay="50" data-tooltip="Editar fase" onclick="actualizar_fase('+value[0]+",'"+value[1]+"','"+value[2]+"','"+value[3]+"'"+')"> <i class="material-icons small">edit</i></a>'+
         '<a class="tooltipped" data-position="top" data-delay="50" data-tooltip="Elimina fase" onclick="elimina_fase('+value[0]+",'"+value[1]+"'"+')"> <i class="material-icons small">delete</i></a></td></tr>';
        $("#FASES").append(fila);

    });

    
}

function restore_password_(id,nombre){
      $('#mensajeAlert').html('¿Seguro desea reestablecer contraseña del usuario '+nombre+'<br>Una vez confirmado se asignará la contraseña por defecto : 12345');
    $('#modalAPRO').openModal();
    $('#accept').attr('onclick','restore_password('+id+');');
}
function restore_password(id){
    fajax({'ID_USER': id}, URL+'Management/restaurar_pass', restore_password_response);
}

function restore_password_response(response){
    var obj = JSON.parse(response);
    $('#modalAPRO').closeModal();
    Materialize.toast(obj['Mensaje'], 2000);
}

function user_estado(state,id,nombre){
    if(state.checked) {
           estado_mensaje="activar";
           estado=1;
           $('#icon_'+id).attr('class','material-icons green-text small');
    }else{
        estado_mensaje="desactivar";
        estado=0;
        $('#icon_'+id).attr('class','material-icons red-text small');
    }
     $('#mensajeAlert').html('¿Seguro desea '+estado_mensaje+' usuario '+nombre);
    $('#modalAPRO').openModal();
    $('#accept').attr('onclick','update_estado('+id+','+estado+');');
}
function update_estado(id,estado){

  fajax({'ID_USER': id,'ESTADO_USER' : estado}, URL+'Management/update_estado_usuario', update_estado_response);   
}

function update_estado_response(response){
    var obj = JSON.parse(response);
    $('#modalAPRO').closeModal();
    Materialize.toast(obj['Mensaje'], 2000);
}

function create_usuario(){
    if(onclick_('#usuarios')){
      var frmser = $('#usuarios :input').serialize();
     fajax(frmser, URL+'Management/insert_usuario', create_usuario_response);   
    }
    
}

function create_usuario_response(response){
    var obj = JSON.parse(response);
    Materialize.toast(obj['Mensaje'], 2000);
    
}
