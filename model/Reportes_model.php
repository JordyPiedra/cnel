<?php

Class Reportes_model extends Model {
    
    public function __construct() {
      //parent::__construct();
      $this->db = parent::getInstance();
    }
    
       
        //OBTIENE LAS NOTAS DE ASPIRANTES DE LOS CONCURSOS LISTADOS
    public function calificacionProcesada($selectROW,$CON_ID) {
        return $this->db->select("$selectROW", 'ssp_aspirante_concurso', "CON_ID='$CON_ID'", PDO::FETCH_NUM);
    }

    
}