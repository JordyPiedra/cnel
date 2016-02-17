<?php

Class Reportes_model extends Model {
    
    public function __construct() {
      //parent::__construct();
      $this->db = parent::getInstance();
    }
    
}