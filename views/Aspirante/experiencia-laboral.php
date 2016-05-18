<?php
  $work_area = $this->data['work_area'];

  $work_experience = $this->data['work_experience'];
?>
<h5 class="center-align">Experiencia laboral</h5>

  <div class="col l12 m12 s12">
    <h6 class="center-align red white-text">Agregar experiencia laboral</h6>
    <h6 class="red-text center-align">Obligatorio <b>*</b></span></h6>
  </div>


<div class="row">
  <form>
  <div class="col l12 m12 s12">
    <div class="col l12 m12 s12">
      <div class="row"></div>
      <div class="input-field offset-l2 col l4 m6 s12">
        <input name="ELNEMP" id="ELNEMP" type="text" maxlength="100" class="actI validate" required>
        <label for="ELNEMP" class="actL">Nombre de la empresa <span class="red-text">*</span></label>
      </div>

      <div class="col l2 m2 s4 right-align" style="padding-top:15px;">Área de trabajo <span class="red-text">*</span></div>
      <div class="input-field col l4 m3 s8">
        <select name="ELARTR" id="ELARTR" class="actS browser-default" required> 
          <option value="">Seleccione</option>
          <?php
            $x = null;
            for ($i=0; $i < count($work_area); $i++) { 
              $x.= '<option value="'.$work_area[$i][0].'">'.$work_area[$i][1].'</option>';
            }
            echo $x;
          ?>
        </select>
      </div>
    </div>

    <div class="col l12 m12 s12">
      <div class="input-field offset-l2 col l2 m6 s6">
        <input name="ELCARG" id="ELCARG" type="text" maxlength="50" class="actI validate" required>
        <label for="ELCARG" class="actL">Cargo <span class="red-text">*</span></label>
      </div>

      <div class="input-field col l2 m6 s6">
        <input name="ELTELE" id="ELTELE" type="text" class="actI validate" required  pattern="[0-9]*"  title= "Solo acepta números">
        <label for="ELTELE" class="actL">Tel. Empresa <span class="red-text">*</span></label>
      </div>

      <div class="input-field col l4 m12 s12">
        <input name="ELRELA" id="ELRELA" type="text" class="actI validate" required>
        <label for="ELRELA" class="actL">Referencia laboral (contácto) <span class="red-text">*</span></label>
      </div>
    </div>

    <div class="col l12 m12 s12">
      <div class="input-field offset-l2 col l2 m6 s6">
        <input name="ELFINI" id="ELFINI" type="date" maxlength="10" pattern="[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])" title="Formato fecha: aaaa-mm-dd Ej. 2010-01-10       Nota: Si visualizas el calendario, por favor sólo selecciona la fecha correspondiente" class="actI validate" placeholder="aaaa-mm-dd" required>
        <label for="ELFINI" class="active">Fecha desde <span class="red-text">*</span></label>
      </div>

      <div class="input-field col l2 m6 s6">
        <input name="ELFFIN" id="ELFFIN" type="date" maxlength="10" pattern="[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])" title="Formato fecha: aaaa-mm-dd Ej. 2010-05-20 Nota: Si visualizas el calendario, por favor sólo selecciona la fecha correspondiente" class="actI validate" placeholder="aaaa-mm-dd" required>
        <label for="ELFFIN" class="active">Fecha hasta <span class="red-text">*</span></label>
      </div>

      <div class="input-field col l6 m12 s12">
        <div class="col l4 m6 s4 right-align" style="padding-top: 10px;">Tipo de empresa <span class="red-text">*</span></div>
        <div class="col l8 m6 s8" >
          <input name="ELSECT" type="radio" class="actR" id="ELSECT1" value="P"/>
          <label for="ELSECT1">Pública</label>
          <input name="ELSECT" type="radio" class="actR" id="ELSECT2" value="R" checked/>
          <label for="ELSECT2">Privada</label>
        </div>
      </div>
  
    </div>

  </div>

  <input type="submit" id="subFORM" style="display:none;">
  <input type="hidden" value="experiencia-laboral" name="ID" id="JIFID">
  </form>
</div>


<div class="row">

  <div class="col l12 m12 s12">
    <p class="center-align contentBtn"><a class="btn-floating waves-effect waves-light red send2"><i class="material-icons medium">save</i></a></p>
  </div>

  <div class="col l12 m12 s12">
    <h6 class="center-align red white-text">Experiencia laboral</h6>
  </div>


  <div class="col l12 m12 s12 ">
    <table class="centered">
      <thead>
        <tr>
          <th>Empresa</th>
          <th>Área de trabajo</th>
          <th>Cargo</th>
          <th>Fecha desde</th>
          <th>Fecha hasta</th>
          <th>Tel. Empresa</th>
          <th>Acción</th>
        </tr>
      </thead>

      <tbody class="tableContent">
        <?php 
          if ($work_experience) {
            $row = null;
            for ($i=0; $i < count($work_experience); $i++) { 
              $row.='<tr data-id="'.$work_experience[$i][0].'">'.
              '<td>'.$work_experience[$i][1].'</td>'.
              '<td>'.$work_area[$work_experience[$i][9]-1][1].'</td>'.
              '<td>'.$work_experience[$i][2].'</td>'.
              '<td>'.$work_experience[$i][6].'</td>'.
              '<td>'.$work_experience[$i][7].'</td>'.
              '<td>'.$work_experience[$i][4].'</td>'.
              '<td><a href="javascript:" class="delete"><i class="material-icons">delete</i></a><a href="javascript:" class="edit"><i class="material-icons">edit</i></a></td>'.
              '</tr>';
            }
            echo $row;
          }
        ?>

      </tbody>
    </table>
  </div>

</div>

  