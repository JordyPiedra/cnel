<?php

Class Reportes extends Controller {

    public function __construct() {

        parent:: __construct();
 
    }
//________________________VISTAS RENDERIZADAS___________________________//
    //Cargamos la vista reportes de aspirantes
    public function reporte_aspirantes() {
        require_once('Management.php');
        $link= new Management();
        $this->view->data = ['Aspirantes' => $link->model->getAspirantesbyApro('%')];
        $this->view->render($this, 'reporte_aspirantes');
    }   
        
     //Cargamos la vista reportes de aspirantes
    public function informe_final() {
        require_once('Management.php');
        $link= new Management();
          if(isset($_POST['IDCON_']) && $_POST['CONTOKEN']==$link->tokengenerate($_POST['IDCON_']))
        { 
        $CON_ID=$_POST['IDCON_'];
        
        $this->view->data = $link->datos_concurso($CON_ID,'F');
        
        $aspirantes=  $link->model->getAspirantesbyCONID($CON_ID);
        $baseconcurso= $this->view->data['fasesConcurso'];
        
        $meritos = array();
        $oposicion = array();
        foreach ($baseconcurso as $key => $value) {
             if($value[8]=='M')
                array_push($meritos,array($value[7],$value[3],$value[0]));
            else if($value[8]=='O')
                array_push($oposicion,array($value[7],$value[3],$value[0]));
     
        }
        
        $selectROW ="";
        $stringMeritos="";
        foreach ($meritos as $key => $value) {
           $stringMeritos.=" ,calificacion_ASP_BCO(ASP_ID,".$value[2].")";
        }
        $selectROW .="nomb_aspbyID(ASP_ID)". $stringMeritos .',fobtsummerops(ASP_ID,CON_ID,"M")';
        $stringOposicion="";
        foreach ($oposicion as $key => $value) {
           $stringOposicion.=" ,calificacion_ASP_BCO(ASP_ID,".$value[2].")";
        }
        $selectROW .= $stringOposicion .',fobtsummerops(ASP_ID,CON_ID,"O") ,fobtsummerops(ASP_ID,CON_ID,"%") ';
        
        
        array_push($meritos,array('Subtotal',50));
        array_push($oposicion,array('Subtotal',50));
        $this->view->data+=['meritos' =>$meritos];
        $this->view->data+=['oposicion' =>$oposicion];
        $this->view->data+=['AspirantesROW' => $this->model->calificacionProcesada($selectROW,$CON_ID)];
        //var_dump( $this->view->data);
        //  $this->view->data2=$link->model->getAspirantesbyCONIDBCONID();
         $this->view->render($this, 'informe_final');
        }
    }   
}