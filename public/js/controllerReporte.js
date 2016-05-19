function genera_chart(){

  
     }
  function genera_chart_response(response) {
    // console.log(response);
     //$("#PUESTO").append('fila');
     var obj = JSON.parse(response);
      $("#detalle").empty();
      $("#option").empty();
  $.each( obj, function( key, value ) {
    CABL=""; fila="";
if(value[1]=='F' || value[1]=='M')
$CABL = '<tr><th>Genero</th><th>Cantidad</th></tr>';
if(value[1]=='F')
    var fila='<tr><td>Femenino</td> <td data-graph-name="January" data-graph-item-highlight="1">'+value[2]+'</td></tr>';
if(value[1]=='M')
    var fila='<tr><td>Masculino</td> <td data-graph-name="January" data-graph-item-highlight="1">'+value[2]+'</td></tr>';
      
    $("#detalle").append(fila);
   
  });
   $("#option").append(CABL);
 $('table.highchart').highchartTable();
  }