$(function(){

	$('#applicantResume').leanModal({
	    dismissible: false, // Modal can be dismissed by clicking outside of the modal
	    opacity: .5, // Opacity of modal background
	    in_duration: 300, // Transition in duration
	    out_duration: 200, // Transition out duration
	    ready: function() {  }, // Callback for Modal open
	    complete: function() {  } // Callback for Modal close
    	}
	);



  $(document).on('click', '#hvPDF', function(){
    $.ajax({
          url: URL+'Aspirante/curriculumVitae',
          type:'POST',
          data: {},
          beforeSend:function(){
            //$("#BE").prepend(controllerAS.loading());
          },
          success: function(response){
            console.log(response);
            var r= JSON.parse(response);
            getCurriculumVitae(r);

                 
            /*if (r.STATUS==='SUCCESS') {
                //var d = r.DATA;

                if(!controllerAS.idAction){
                      //controllerAS.tab[0] = '';
                      $(".tableContent").fadeTo(400, 0.5, function(){
                        $(this).prepend(r.ROW).fadeTo(100,1);
                        //controllerAS.loadContent.call(".tabs").find(".active"));
                      });
                }else{
                  
                  d = r.DATA;
                  switch(controllerAS.tab[1]){
                  
                  case 'datos-familiares':
                      controllerAS.idRow.find("td:eq(0)").html(d.DFAPEL);
                      controllerAS.idRow.find("td:eq(1)").html(d.DFNOMB);
                      controllerAS.idRow.find("td:eq(2)").html(d.DFCEDU);
                      controllerAS.idRow.find("td:eq(3)").html(d.DFFNAC);
                      controllerAS.idRow.find("td:eq(4)").html(d.DFINST);
                      controllerAS.idRow.find("td:eq(5)").html(d.DFFEME);
                  break;

                  case 'instruccion-formal':
                      controllerAS.idRow.find("td:eq(0)").html(d.IFNSTR);
                      controllerAS.idRow.find("td:eq(2)").html(d.IFNOMB);
                      controllerAS.idRow.find("td:eq(3)").html(d.IFSENE);

                      if(d.IFOINS){
                        controllerAS.idRow.find("td:eq(1)").html(d.IFOINS);
                      }else{
                        instToString = $("select#IFINST").find("option[value="+d.IFINST+"]").html();
                        controllerAS.idRow.find("td:eq(1)").html(instToString);
                      }
                  break;

                  case 'idiomas':
                      controllerAS.idRow.find("td:eq(0)").html(d.IDIDIO);
                      controllerAS.idRow.find("td:eq(1)").html(d.IDNESC);
                      controllerAS.idRow.find("td:eq(2)").html(d.IDNHAB);
                  break;

                  case 'capacitacion':
                      controllerAS.idRow.find("td:eq(0)").html(d.CAECAP);
                      controllerAS.idRow.find("td:eq(1)").html(d.CATEVE);
                      controllerAS.idRow.find("td:eq(2)").html(d.CAAEST);
                      controllerAS.idRow.find("td:eq(3)").html(d.CATITU);
                      controllerAS.idRow.find("td:eq(4)").html(d.CATCER);
                      controllerAS.idRow.find("td:eq(5)").html(d.CADHOR);
                      controllerAS.idRow.find("td:eq(6)").html(d.CAFICA);
                      controllerAS.idRow.find("td:eq(7)").html(d.CAFFCA);
                  break;

                  case 'experiencia-laboral':
                      controllerAS.idRow.find("td:eq(0)").html(d.ELNEMP);
                      controllerAS.idRow.find("td:eq(1)").html(d.ELARTR);
                      controllerAS.idRow.find("td:eq(2)").html(d.ELCARG);
                      controllerAS.idRow.find("td:eq(3)").html(d.ELFINI);
                      controllerAS.idRow.find("td:eq(4)").html(d.ELFFIN);
                      controllerAS.idRow.find("td:eq(5)").html(d.ELTELE);
                  break;


                  }

                }

              controllerAS.cancelEdit();  
            }

            Materialize.toast(r.MSG, 2500);*/
            

          },
          error:function(request, typeMessage, errorMessage){
            Materialize.toast(errorMessage, 2000);
          },
          complete:function(){
            //$("div.progress").slideUp(1500, function(){
              //$(this).remove();
            //});
          }
        });
  });

	function getCurriculumVitae(d)
  {


    //210 x 297


  var x = y = l = 0;
  var pdf = new jsPDF();

  pdf.rect(20, 15, 35, 45);


  pdf.setFontSize(16);
  pdf.setFontType("bold");
  pdf.text(60, 20, d.c[1] + " " + d.c[2] + " " + d.c[3] + " " + d.c[4]);
  //pdf.setLineWidth(0.5);
  //pdf.line(25, 20, 185, 20);

  pdf.setFontType("normal");
  pdf.setFontSize(9);
  pdf.text(60, 28, 'Datos personales');

  pdf.setLineWidth(1);
  pdf.line(62, 30, 62, 57);

  pdf.text(65, 34, 'Año de nacimiento:');
  pdf.text(110, 34, d.c[8]);

  pdf.text(65, 38, 'C.I/Pasaporte:');
  pdf.text(110, 38, d.c[0]);

  pdf.text(65, 42, 'Correo electrónico:');
  pdf.text(110, 42, d.c[10]);

  pdf.text(65, 46, 'Dirección: ');
  pdf.text(110, 46, d.c[21] + " " + d.c[18]);

  pdf.text(65, 50, 'Teléfono (s):');
  pdf.text(110, 50, d.c[14] + " " + d.c[15]);

  pdf.text(65, 54, 'Provincia / Cantón / Parroquia:');
  pdf.text(110, 54, d.c[35][0][0] + "/ " + d.c[35][0][1] + "/ " + d.c[35][0][2]);


  pdf.setFontSize(10);
  pdf.setFontType("bold");

  pdf.text(20, 70, 'Instrucción Formal');
  pdf.setLineWidth(0.5);
  pdf.line(20, 72, 185, 72);

  pdf.setFontSize(9);
  pdf.setFontType("normal");

  x = 20;
  y = 76;

  l = d.c["fe"].length;

  var s = "";


  //INSTRUCCIÓN FORMAL

  for (var i = 0; i < l; i++) {

    if (y > 270) {
      pdf.addPage();
      y = 20;
    }

    if(d.c["fe"][i][2]){
      s = d.c["fe"][i][1] == 1 ? "año" : "años";
      pdf.text(x, y, "( " + d.c["fe"][i][1] + s +" )  " + d.c["fe"][i][0] + " (N° Reg. SENESCYT: " + d.c["fe"][i][2] + ")");
    }else{
      pdf.text(x, y, d.c["fe"][i][0]);
    }

    if (d.c["fe"][i][3]) {
      pdf.text(62, y+4, d.c["fe"][i][3]);
    }else{
      pdf.text(62, y+4, " " + d.c["fe"][i][5]);
    }
    
    pdf.text(x, y+4, d.c["fe"][i][6]);

    y+=10;

  }





  //IDIOMAS
  y+=10;

  pdf.setFontSize(10);
  pdf.setFontType("bold");

  pdf.text(20, y, 'Idiomas');
  pdf.setLineWidth(0.5);
  pdf.line(20, y+2, 185, y+2);

  pdf.setFontSize(9);
  pdf.setFontType("normal");

  l = d.c["la"].length;

   y+=6;

  for (var i = 0; i < l; i++) {

    if (y > 270) {
      pdf.addPage();
      y = 20;
    }

    pdf.text(x, y, d.c["la"][i][0]);
    pdf.text(100, y, "Nivel escrito: " + d.c["la"][i][1]);
    pdf.text(100, y+4, "Nivel hablado: " + d.c["la"][i][2]);

    y+=10;

  }


  //CAPACITACIÓN
  y+=10;

  pdf.setFontSize(10);
  pdf.setFontType("bold");

  pdf.text(20, y, 'Capacitación');
  pdf.setLineWidth(0.5);
  pdf.line(20, y+2, 185, y+2);

  pdf.setFontSize(9);
  pdf.setFontType("normal");

  l = d.c["ct"].length;

   y+=6;

  for (var i = 0; i < l; i++) {

    if (y > 270) {
      pdf.addPage();
      y = 20;
    }

    s = d.c["ct"][i][1] == 1 ? "" : "s";

    pdf.text(x, y, "( "+ d.c["ct"][i][1] +" )  " +d.c["ct"][i][0]);
    pdf.text(x, y+4, "( "+d.c["ct"][i][2]+" hora"+s+")  Desde " + d.c["ct"][i][3] + " hasta "+ d.c["ct"][i][4]);

    y+=10;

  }

  //EXPERIENCIA LABORAL
  y+=10;

  pdf.setFontSize(10);
  pdf.setFontType("bold");

  pdf.text(20, y, 'Experiencia Laboral');
  pdf.setLineWidth(0.5);
  pdf.line(20, y+2, 185, y+2);

  pdf.setFontSize(9);
  pdf.setFontType("normal");

  l = d.c["we"].length;

   y+=6;

  for (var i = 0; i < l; i++) {

    if (y > 270) {
      pdf.addPage();
      y = 20;
    }

    //s = d.c["we"][i][1] == 1 ? "" : "s";

    pdf.text(x, y, d.c["we"][i][0] + " (tel. " +d.c["we"][i][1]+" )");
    pdf.text(x, y+4, d.c["we"][i][2] + "  Desde " + d.c["we"][i][3] + " hasta "+ d.c["we"][i][4]);

    y+=10;

  }



  /*for (var i = 0; i < 150; i++) {
    pdf.text(x, y, " "+y);
    y+=4;
  }*/

  var string = pdf.output('datauristring');

  $('#applicantResume').attr('src', string);
  $('#applicantResume').css("top", 0);
  $('#applicantResume').leanModal();
  $('#applicantResume').openModal();
  $('#applicantResume').height(1000);

  }



});