<?php

Class Management_model extends Model {

    public function __construct() {
         $this->db = parent::getInstance();
    }

    public function setConcurso($CONCURSO_DATOS) {

        $cabecera_concurso = $CONCURSO_DATOS['SSP_CONCURSO'];


        $result = $this->db->select('CON_CODI', 'SSP_CONCURSO', "CON_CODI = " . $cabecera_concurso['CON_CODI'], PDO::FETCH_NUM);

        if (sizeof($result) > 0)
            return $data = ["Mensaje" => "Ingreso Incorrecto. El concurso " . $cabecera_concurso['CON_CODI'] . " ya existe"];
        else
            $this->db->insert('SSP_CONCURSO', $CONCURSO_DATOS['SSP_CONCURSO']);

        $result1 = $this->db->select('CON_ID', 'SSP_CONCURSO', "CON_CODI = " . $cabecera_concurso['CON_CODI'], PDO::FETCH_NUM);
        if (sizeof($result1) > 0)
            return $data = ["Mensaje" => "Ingreso Correctamente", "Concurso_" => $result1[0][0]];
    }
    
    //Obtener todos los concursos
    public function getallConcurso($where="") {
      
         return $data = ["Mensaje" => "Concursos obtenidos", "Concursos" => $this->db->select('*, tokenGenerator(CON_ID) TOKEN', 'SSP_CONCURSO ',$where, PDO::FETCH_NUM)];
    }

    //Obtener concurso segun ID
    public function get_concurso($CON_ID) {
        return $data = ["Mensaje" => "Concurso obtenido", "Concurso" => $this->db->select("C.* ,PTR_PADR ,tokenGenerator(C.CON_ID) token", 'SSP_CONCURSO C ,SSP_PUESTO_TRABAJO P'," C.PTR_ID = P.PTR_ID AND CON_ID= '$CON_ID'", PDO::FETCH_NUM)];
    }


    //Inserta las fases al concurso
    public function setBaseConcurso($base_concurso) {

           // var_dump($base_concurso);
        $check = $this->db->check('*', 'SSP_BASE_CONCURSO', "CON_ID = " . $base_concurso['CON_ID'] . " AND FMO_ID=" . $base_concurso['FMO_ID']);
        if (!$check)
            {
               //SELECCIONAMOS EL TIPO DE FASE --MERITO OPOSICION -- DE  LA FASE A INSERTAR
            $F = $this->db->select("FMO_TFAS", 'SSP_FASE_MO ', "FMO_ID = " . $base_concurso['FMO_ID'], PDO::FETCH_NUM);
            $T_FASE=$F[0][0];

            ($T_FASE =='M' ? $TIPO_FASE='CON_VALM' : $TIPO_FASE='CON_VALO'); //
            
            //REVISAMOS EL PUNTAJE MAXIMO PARA EL TIPO DE FASE SELECCIONADO
            $C = $this->db->select($TIPO_FASE, 'SSP_CONCURSO ', "CON_ID = " . $base_concurso['CON_ID'], PDO::FETCH_NUM);
              
                $pMAX= $C[0][0];

                //Revisamos que no sobrepase la puntuación asignada a la cabecera de concurso
                $S = $this->db->select('SUM(BCO_VALO)', 'SSP_BASE_CONCURSO CB , SSP_FASE_MO F ', "CB.FMO_ID= F.FMO_ID AND CB.CON_ID = " . $base_concurso['CON_ID']." AND F.FMO_TFAS= '$T_FASE' ", PDO::FETCH_NUM);
                $BCO_VALO_=str_replace("'",' ',$base_concurso['BCO_VALO']);
               
                if (sizeof($S ) > 0)   
                 
                   $SUMA=intval($S[0][0])+intval($BCO_VALO_);

                
                else
                   $SUMA=intval($BCO_VALO_);
                    
                
                if($SUMA>$pMAX)
                {
                   return $data = ["Mensaje" => "Sobrepasa el puntaje permitido"];
                }else
                {
                   $this->db->insert('SSP_BASE_CONCURSO', $base_concurso);
                    return $data = ["Mensaje" => "Ingreso Correctamente2"];
                }
                         
            }else
            return $data = ["Mensaje" => "Ingreso Incorrecto registro existente.!"];
            
    }

    //Elimina las fases un concurso
    public function delete_FConcurso($DATOS) {
        return $this->db->delete('SSP_BASE_CONCURSO',"CON_ID = " . $DATOS['CON_ID'] . " AND FMO_ID=" . $DATOS['FMO_ID']);
    }

    //Consulta todos los departamentos
    public function getallDepartamentos($PTR_ESTA = "H") {
        return $this->db->select('PTR_ID, PTR_NOMB ,PTR_PADR , PTR_ESTA', 'SSP_PUESTO_TRABAJO', "PTR_TIPO = 'D' AND PTR_ESTA LIKE '$PTR_ESTA'", PDO::FETCH_NUM);
    }

    //Consulta un departamento por ID
    public function getDepartamentos($PTR_DATOS) {


        $result = $this->db->select('PTR_ID, PTR_NOMB ,PTR_PADR , PTR_ESTA', 'SSP_PUESTO_TRABAJO', "PTR_ID=" . $PTR_DATOS['PTR_ID'], PDO::FETCH_NUM);

        if (sizeof($result) > 0)
            $data = ["Mensaje" => "" . $result[0][1] . " Encontrado",
                "Departamento" => $result[0]];
        else
            $data = ["Mensaje" => "No encontrado"];

        return $data;
    }

    //Ingreso de un departamento
    public function insertDepartamento($PTR_DATOS) {

        $result = $this->db->select('PTR_NOMB', 'SSP_PUESTO_TRABAJO', "PTR_NOMB = " . $PTR_DATOS['PTR_NOMB'], PDO::FETCH_NUM);

        if (sizeof($result) > 0)
            return $data = ["Mensaje" => "Ingreso Incorrecto. El departamento " . $PTR_DATOS['PTR_NOMB'] . " ya existe"];
        else
            $this->db->insert('SSP_PUESTO_TRABAJO', $PTR_DATOS);
        return $data = ["Mensaje" => "Ingreso Correctamente"];
    }

    //Ingreso de una fase
    public function insertFase($FMO_DATOS) {

        $result = $this->db->select('*', 'SSP_FASE_MO', "FMO_NOMB LIKE " . $FMO_DATOS['FMO_NOMB'], PDO::FETCH_NUM);

        if (sizeof($result) > 0)
            return $data = ["Mensaje" => "Ingreso Incorrecto. La fase " . $FMO_DATOS['FMO_NOMB'] . " ya existe"];
        else
            {
            $this->db->insert('SSP_FASE_MO', $FMO_DATOS);
            return $data = ["Mensaje" => "Ingreso Correctamente"];
            }
    }
    
    //Ingreso de una fase
    public function update_sspfasemo($FMO_DATOS,$FMO_ID) {
        if ($this->db->update('SSP_FASE_MO',$FMO_DATOS,false,"FMO_ID='$FMO_ID'"))
            return $data = ["Mensaje" => "Fase " . $FMO_DATOS['FMO_NOMB'] . " actualizado correctamente"];
        else
            return $data = ["Mensaje" => "Error. al actualizar"];
         
    }

    //OBTENER LAS FASES DE UN CONCURSO
    public function getall_faseconcurso($DATOS, $BCO_ESTA="") {
        return $this->db->select("BCO_ID,CON_ID,f.FMO_ID,BCO_VALO,BCO_FINI,BCO_FFIN,f.FMO_ID,FMO_NOMB,FMO_TFAS,FMO_TDES,BCO_ESTA,tokenGenerator(b.BCO_ID) TOKEN", 'SSP_BASE_CONCURSO b, SSP_FASE_MO f', 'f.FMO_ID= b.FMO_ID  AND CON_ID=' . $DATOS['CON_ID'].'AND b.BCO_ESTA LIKE "%'.$BCO_ESTA.'"', PDO::FETCH_NUM);
    }

    //OBTENER LAS FASES 
    public function getallFase($FMO_DATOS) {
        return $this->db->select('FMO_ID,FMO_NOMB,FMO_TFAS,FMO_TDES', 'SSP_FASE_MO', "FMO_ESTA='H' AND FMO_TDES LIKE " . $FMO_DATOS['FMO_TDES'], PDO::FETCH_NUM);
    }

    //UPDATE de un departamento
    public function updateDepartamento($PTR_DATOS) {


        $this->db->update('SSP_PUESTO_TRABAJO', $PTR_DATOS, false,"PTR_ID=" . $PTR_DATOS['PTR_ID']);
        return $data = ["Mensaje" => "uPDATE Correctamente"];
    }

    //Consulta los cargos de un departamento
    public function getallCargos($PTR_DATOS) {
        return $this->db->select('PTR_ID, PTR_NOMB ,PTR_PADR , PTR_ESTA', 'SSP_PUESTO_TRABAJO', "PTR_TIPO = 'P' AND PTR_PADR=" . $PTR_DATOS['PTR_ID'], PDO::FETCH_NUM);
    }

    //Consulta un puesto por ID
    public function getPuestos($PTR_ID) {
        return $this->db->select('PTR_ID, PTR_NOMB ,PTR_PADR , PTR_ESTA', 'SSP_PUESTO_TRABAJO', "PTR_TIPO = 'P' AND PTR_ID='$PTR_ID'", PDO::FETCH_NUM);
    }

     //LISTA DE ASPIRANTES EN UN CONCURSO
    public function getAspirantesbyCONID($CON_ID) {
        return $this->db->select("A.ASP_ID,ASP_CEDU, ASP_NOM1, ASP_NOM2, ASP_APE1, ASP_APE2, ASP_FENA, tokenGenerator(A.ASP_ID) TOKEN", 'SSP_ASPIRANTE A, SSP_ASPIRANTE_CONCURSO C ', "A.ASP_ID = C.ASP_ID AND C.CON_ID='$CON_ID'", PDO::FETCH_NUM);
    }
     //LISTA DE ASPIRANTES FILTRO POR APROBACIÒN
    public function getAspirantesbyApro($ASP_APRO) {
        return $this->db->select('ASP_ID,ASP_CEDU, ASP_NOM1, ASP_NOM2, ASP_APE1, ASP_APE2, ASP_FENA,ASP_GENE', 'SSP_ASPIRANTE', "ASP_APRO like '$ASP_APRO'", PDO::FETCH_NUM);
    }
    //Función complemenadora para la busqueda de aspirantes donde where es el filtro completo de busqueda
     public function filter_getAspirantes($where) {
    
        return $this->db->select('ASP_ID,ASP_CEDU, ASP_NOM1, ASP_NOM2, ASP_APE1, ASP_APE2, ASP_FENA', 'SSP_ASPIRANTE', "ASP_APRO='S' ".$where.' AND ASP_ID NOT IN (select ASP_ID from aspirantes_en_concurso)', PDO::FETCH_NUM);
    }

    //Función que inserta SSP_ASPIRANTE_CONCURSO
     public function setConcursotAspirantes($ASP_DATOS) {
        if(!$this->db->check('*','SSP_ASPIRANTE_CONCURSO','ASP_ID= ' .$ASP_DATOS['ASP_ID'].' AND CON_ID='.$ASP_DATOS['CON_ID']))
         return $this->db->insert('SSP_ASPIRANTE_CONCURSO', $ASP_DATOS);
        else
            return false;
    }
    //Función que elimina registro de  SSP_ASPIRANTE_CONCURSO
     public function delete_aspirante_concurso($ASP_CON_DATOS) {
         return $this->db->delete('SSP_ASPIRANTE_CONCURSO', "CON_ID=".$ASP_CON_DATOS['CON_ID']." and ASP_ID=".$ASP_CON_DATOS['ASP_ID']);
    }


       //Función que LLAMA la funcion sql tokenGenerator
     public function tokengenerate_($identificador) {
          return $this->db->select("tokenGenerator('$identificador')", 'DUAL', "", PDO::FETCH_NUM);
    }

       //Función que devuelve todos los aspirantes inscritos
     public function getAllAspirantes() {
           return $this->db->select("*", 'SSP_ASPIRANTE', "", PDO::FETCH_NUM);
    }
       //Función que actualiza estado del aspirante
     public function update_estadoperfilAspirante($ASP_ID,$data) {
           return $this->db->update('SSP_ASPIRANTE',$data,false,"ASP_ID='$ASP_ID'");
    }

           //Función que actualiza estado del concurso
     public function update_estadoConcurso($CON_ID,$data) {
           return $this->db->update('SSP_CONCURSO',$data,false,"CON_ID='$CON_ID'");
    }

     //Función que inserta la calificacion por fase del aspirante
     public function insert_ssp_calificaciones($data) {
           return $this->db->insert('SSP_CALIFICACIONES',$data);
    }
    //Función que actualiza la calificacion por fase del aspirante
    public function update_ssp_calificaciones($data) {
           return $this->db->update('SSP_CALIFICACIONES',['CAL_VALO'=>$data['CAL_VALO']],false,"ASP_ID=".$data['ASP_ID']." and BCO_ID=".$data['BCO_ID']);
    }
    
     //LISTA DE ASPIRANTES EN UN CONCURSO y CALIFICACIONES POR FASE 
    public function getAspirantesbyCONIDBCONID($BCO_ID) {
        return $this->db->select("A.ASP_ID,ASP_CEDU, ASP_NOM1, ASP_NOM2, ASP_APE1, ASP_APE2, ASP_FENA, tokenGenerator(A.ASP_ID) TOKEN,CAL_VALO VALOR", 'SSP_ASPIRANTE A, ssp_calificaciones C', "A.ASP_ID = c.ASP_ID  AND C.Bco_ID='$BCO_ID'", PDO::FETCH_NUM);
    }
    
    //CAMBIA ESTADO DE LA TABLA SSP_BASE_CONCURSO 
    public function update_estado_baseConcurso($BCO_ID,$BCO_ESTA) {
        $data=['BCO_ESTA' => "'".$BCO_ESTA."'"];
        return $this->db->update('SSP_BASE_CONCURSO',$data,false ,"BCO_ID='$BCO_ID'");
    }
    
        //OBTIENE EL VALOR ASIGNADO SSP_BASE_CONCURSO 
    public function get_valor_baseconcurso($BCO_ID) {
        return $this->db->select("BCO_VALO", 'SSP_BASE_CONCURSO', "BCO_ID='$BCO_ID'", PDO::FETCH_NUM);
    }


}
