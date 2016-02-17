<?php

Class Reportes extends Controller {

    public function __construct() {

        parent:: __construct();
        //$this->view->render($this, 'index');
    }
//________________________VISTAS RENDERIZADAS___________________________//
    //Cargamos la vista reportes de aspirantes
    public function reporte_aspirantes() {
        $this->view->render($this, 'reporte_aspirantes');
    }   
        
    
}