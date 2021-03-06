<?php

Class Reportes extends Controller {

    public function __construct() {

        parent:: __construct();
 
    }
    
    public function chart(){
        $out="";
        $select ="select 'R'";
        $where ="";
        $from=' from ssp_aspirante';
        $add="";
        if(isset($_POST['CHKAPRA'])){
            $select .=", ASP_APRO,count(ASP_APRO) ";
            $add .=' group by  ASP_APRO';
            
        }
         if(isset($_POST['CHKSEXH'])){
            $select .=", ASP_GENE,count(ASP_GENE) ";
            if($add=="")
            $add .=' group by ASP_GENE';
            else
             $add .=' ,ASP_GENE';
            
        }
        $sql=$select.$from.$where.$add.';';
        //echo $sql;
        $out=$this->model->executeReport($sql);
        $this->view->data=['R'=>$out];
          $this->view->render($this, 'chart');
        
        
    }
//________________________VISTAS RENDERIZADAS___________________________//
    //Cargamos la vista reportes de aspirantes
    public function aspirante_reporte() {
        require_once('Management.php');
        $link= new Management();
        $this->view->data = ['Aspirantes' => $link->model->getAspirantesbyApro('%')];
        $this->view->render($this, 'aspirante_reporte');
    }   
        
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
           $stringMeritos.=" , truncate(calificacion_ASP_BCO(ASP_ID,".$value[2]."),2)";
        }
        $selectROW .="nomb_aspbyID(ASP_ID)". $stringMeritos .', truncate(fobtsummerops(ASP_ID,CON_ID,"M"),2)';
        $stringOposicion="";
        foreach ($oposicion as $key => $value) {
           $stringOposicion.=" ,truncate (calificacion_ASP_BCO(ASP_ID,".$value[2]."),2)";
        }
        $selectROW .= $stringOposicion .',truncate(fobtsummerops(ASP_ID,CON_ID,"O"),2) ,truncate(fobtsummerops(ASP_ID,CON_ID,"%"),2) ';
        
        
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
     public function base_concurso() {
        require_once('Management.php');
        $link= new Management();
        //  if(isset($_POST['IDCON_']) && $_POST['CONTOKEN']==$link->tokengenerate($_POST['IDCON_']))
          if(isset($_POST['IDCON_']))
        { 
        $CON_ID=$_POST['IDCON_'];
        
        $this->view->data = $link->datos_concurso($CON_ID);
        
        $aspirantes=  $link->model->getAspirantesbyCONID($CON_ID);
        $baseconcurso= $this->view->data['fasesConcurso'];
         $this->view->R=0;
        $this->view->P=0;
        $this->view->E=0;
        
        $colP = array();
        $colR = array();
        $colE = array();
        foreach ($baseconcurso as $key => $value) {
            switch ($value[9]) {
                case 'P':
                    $this->view->P+=$value[3];
                    $colP+=[$key => $value];
                    break;
                case 'R':
                    $this->view->R+=$value[3];
                    $colR+=[$key => $value];
                    break;
                 case 'E':
                    $this->view->E+=$value[3];
                    $colE+=[$key => $value];
                    break;
                default:
                    # code...
                    break;
            }
           
          
        }
        $this->view->colMO=['P'=>$colP ,'R'=>$colR,'E'=>$colE];
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
      
         $this->view->render($this, 'base_concurso');
        }
    }   
}