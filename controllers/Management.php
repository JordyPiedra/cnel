<?php

Class Management extends Controller {

    public function __construct() {

        parent:: __construct();
		if(!Session::getValue("ID-ADMIN") && ($_SERVER["REQUEST_URI"] != '/cnel/Management/login' && $_SERVER["REQUEST_URI"] != '//Management/validate_login')){
         
          //header('Location: '.URL.'Management/login');
           
        }
    }
//________________________VISTAS RENDERIZADAS___________________________//
    //Cargamos la vista index del usuario
    public function index() {
        $this->view->render($this, 'index');
    }
     //Cargamos la vista de configuraciones
    public function configuracion() {
        $this->tipousuario('D');
        $this->view->render($this, 'configuracion');
    }
     //Cargamos la vista de procesos
    public function procesos() {
$this->view->data=$this->model->getallConcurso("CON_ESTA in ('I','P')"); //Devuelve concursos inicializados
        $this->view->render($this, 'procesos');
    }
     //Cargamos la vista de configuraciones
    public function configuracion_departamentos() {
        $this->tipousuario('D');
        $this->view->data = $this->get_allDepartamentos();
        $this->view->render($this, 'configuracion_departamentos');
    }
     //Cargamos la vista de fases
    public function configuracion_fases() {
        $this->tipousuario('D');
        $this->view->data=($this->model->getallFase(["FMO_TDES" => "'" . '%' . "'"]));
        $this->view->render($this, 'configuracion_fases');
    }
    //Cargamos la vista gestion_aspirante
    public function gestion_aspirante() {
                $this->view->data = ['Aspirantes' => $this->model->getAspirantestoAPRO("ASP_APRO='N' AND ASP_NOM1 != '' AND 1 <= (SELECT COUNT(*) FROM SSP_TITULO WHERE ASP_ID=TIT_FK_ASPI )")];

                $this->castModel('Aspirante');
            $this->view->data += ['Instruccion' => $this->Cmodel->getEducationLevel()];
            $this->view->data += ['AreaEstudio' => $this->Cmodel->getStudyArea()];
            $this->view->data += ['Experiencia' => $this->Cmodel->getWorkArea()];
            $this->view->data += ['Discapacidad' => $this->Cmodel->getDisability()];
        $this->view->render($this, 'gestion_aspirante');
    }
    //Cargamos la vista gestion_aspirante
    public function aprobar_perfil() {
        if(isset($_POST["IDASP"]))
        {
            $data = ["ASP_APRO" => "'S'"];
            $ASP_ID=$_POST["IDASP"];
            
               if($this->model->update_estadoperfilAspirante($ASP_ID, $data))
               {
               $email=$this->model->getAspirantestoAPRO("ASP_ID ='$ASP_ID' ");
              
               EmailGenerator::sendEmail('perfil-aprobado', '', $email[0][8]);
               echo true;
               }
               else
                echo false;
        }
       else 
        echo false;
    }
    
    public function desaprobar_perfil() {
        if(isset($_POST["IDASP"]))
        {
            $data = ["ASP_APRO" => "'N'"];
            $ASP_ID=$_POST["IDASP"];
            
               if($this->model->update_estadoperfilAspirante($ASP_ID, $data))
               echo true;
               else
                echo false;
        }
       else 
        echo false;
    }

    //Cargamos vista de concursos
    public function concursos() {
        $this->tipousuario('D');
        $this->view->data=$this->model->getallConcurso("CON_ESTA in ('C','I','P') ORDER BY CON_ESTA"); //Devuelve concursos inicializados
        $this->view->render($this, 'concursos');
    }
    //Cargamos vista de creacion de concurso
    public function creaconcurso() {
        $this->tipousuario('D');
        $this->view->data = $this->get_allDepartamentos('H');
        if(isset($_POST['IDCON_']) && $_POST['CONTOKEN']==$this->tokengenerate($_POST['IDCON_']))
        {
            $datoConid=['CON_ID' => "'" . $_POST["IDCON_"] . "'"];
            $this->view->DATA = $this->model->get_concurso($_POST['IDCON_']);
            $this->view->DATA += ['fasesConcurso' => $this->model->getall_faseconcurso($datoConid)];    
        }else {
            $numcon= $this->model->getallConcurso();
            $numcon=$numcon['Concursos'];
            $count=(count($numcon)+1);
            //DRH-001-2016
            $numero=str_pad($count, 3, "0", STR_PAD_LEFT);
            $this->view->codicon='DRH-'.$numero.'-'.date('Y');
        }
        
        $this->view->render($this, 'creaconcurso');
    }
    
    
     //Cargamos vista de concursos por reclutar 
    public function reclutamiento() {
        $this->view->data=$this->model->getallConcurso("CON_ESTA='I'"); //Devuelve concursos inicializados
        $this->view->render($this, 'reclutamiento');
    }
    //Cargamos vista de reclutamiento de personal
    private function reclutar($CON_ID) {
          $this->castModel('Aspirante');
             $this->view->data =$this->datos_concurso($CON_ID);
            $this->view->data += ['Instruccion' => $this->Cmodel->getEducationLevel()];
            $this->view->data += ['AreaEstudio' => $this->Cmodel->getStudyArea()];
            $this->view->data += ['Experiencia' => $this->Cmodel->getWorkArea()];
            $this->view->data += ['Discapacidad' => $this->Cmodel->getDisability()];
            $this->view->data += ['Aspirantes' => $this->model->getAspirantesbyApro('S')];
            $this->view->data += ['AspirantesConcurso' => $this->model->getAspirantesbyCONID($CON_ID)];
            $this->view->render($this, 'reclutar');
       

    }
     //Cargamos vista de concursos por calificar
    public function calificaciones() {
        $this->view->data=$this->model->getallConcurso("CON_ESTA='P'"); //Devuelve concursos inicializados
        $this->view->render($this, 'calificaciones');
    }
    //Cargamos vista de calificacion del personal
    private function calificar($CON_ID,$CONTOKEN) {
        
            $this->view->data =$this->datos_concurso_calificaciones($CON_ID,'I');
            if(empty($this->view->data['fasesConcurso']))
            $this->finalStateConcurso($CON_ID,$CONTOKEN);
            else
            $this->view->render($this, 'calificar');
    }
      //Cargamos la vista de concursos finalizados
    public function concurso_finalizado(){
         $this->view->data=$this->model->getallConcurso("CON_ESTA='F'"); //Devuelve concursos inicializados
         $this->view->render($this, 'concurso_finalizado');
    }
    //Cargamos la vista de reportes
    public function reportes(){
         $this->view->render($this, 'reportes');
    }
    
        public function lista_aspirantes() {
      
        $this->view->data = ['Aspirantes' => $this->model->getAspirantesbyApro('S')];
        $this->view->render($this, 'lista_aspirantes');
    }   
//______________________________________________________________________//
public function proceso_concurso(){
     if(isset($_POST['IDCON_']) && $_POST['CONTOKEN']==$this->tokengenerate($_POST['IDCON_']))
        {
            $DATA=$this->model->get_concurso($_POST['IDCON_']);
            $CON_DATA=$DATA['Concurso'];
            $CON_ID=$CON_DATA[0][0];
            $CONTOKEN=$CON_DATA[0][14];
            switch ($CON_DATA[0][12]) {
                case 'I':
                    $this->reclutar($CON_ID);
                    break;
                    
                case 'P':
                   $this->calificar($CON_ID,$CONTOKEN);
                    break;
                    
            
                default:
                    $this->index_management();
                    break;
            }
        }else {
             $this->index_management();
        }
}




    //Obtenemos los datos y fases de un concurso en base a su ID
    public function datos_concurso_calificaciones($CON_ID,$BCO_ESTA="") {
            $datoConid=['CON_ID' => "'" . $CON_ID . "'"];
            $DATA = $this->model->get_concurso($CON_ID);
            $DATA += ['fasesConcurso' => $this->model->getall_faseconcurso($datoConid,$BCO_ESTA)];    
            foreach ($DATA['fasesConcurso'] as $key => $value) {
               
           $DATA['fasesConcurso'][$key] += ['AspirantesConcurso' => $this->model->getAspirantesbyCONIDBCONID($value[0])];
            }
            return $DATA;
    }
    
    //Obtenemos los datos y fases de un concurso en base a su ID
    public function datos_concurso($CON_ID,$BCO_ESTA="") {
            $datoConid=['CON_ID' => "'" . $CON_ID . "'"];
            $DATA = $this->model->get_concurso($CON_ID);
            $DATA += ['fasesConcurso' => $this->model->getall_faseconcurso($datoConid,$BCO_ESTA)];    
            
            return $DATA;
    }

    //Cargamos la vista concurso_aspirante
    public function concurso_aspirante() {
       
        $this->view->render($this, 'concurso_aspirante');
    }
    

    //Cargamos la vista index del usuario
    public function calendario() {
        $this->view->DATA=$this->model->getallConcurso();
        $this->view->render($this, 'calendario');
    }


    //Cargamos la vista login del usuario administrador
    public function login() {
        $this->view->render($this, 'login');
    }
    public function test() {
        $this->view->render($this, 'test');
    }
    
    public function validate_login(){
        if(isset($_POST['USER']) && isset($_POST['PASS']))
        {
            $_POST['USER'] = filter_var($_POST['USER'], FILTER_SANITIZE_STRING);
            $_POST['USER']=$this->Mayus( $_POST['USER']);
            $_POST['PASS'] = filter_var($_POST['PASS'], FILTER_SANITIZE_STRING);
            $_POST['PASS']=md5($_POST['PASS']);
           //echo $_POST['USER'];
           // echo $_POST['PASS'];
            if($result= $this->model->getusuario($_POST['USER'],$_POST['PASS']))
            {
                Session::setValue("ID-ADMIN",$result[0][0]);
                Session::setValue("USU-ADMIN",$result[0][1]);
                Session::setValue("TIP-ADMIN",$result[0][2]);
                Session::setValue("GUEST",'1');
                echo true;    
            }else 
            echo false;
        }else
        echo false;
    }

 
    //___________Eliminamos el registro en SSP_FASE_CONCURSO_______________//
    public function delete_faseConcurso() {

        if (!empty($_POST["CONID"]) && isset($_POST["CONID"])) {
            $DATA = [

                "CON_ID" => "'" . $_POST["CONID"] . "'",
                "FMO_ID" => "'" . $_POST["FASE"] . "'"
            ];
        echo json_encode($this->model->delete_FConcurso($DATA));
        }
    }

   
    //__________________________________________________________________//
    //___________Creamos el registro en SSP_FASE_MO_______________//
    public function crea_fase() {
        $data = [
            "FMO_NOMB" => "'" . $this->Mayus($_POST["IFNOMB"]) . "'",
            "FMO_TFAS" => "'" . $_POST["IFTFAS"] . "'",
            "FMO_TDES" => "'" . $_POST["IFTDES"] . "'"
        ];
        echo json_encode($this->model->insertFase($data));
    }
    public function getall_fase() {
        $data = ["FMO_TDES" => "'" . $_POST["TDES"] . "'"];
        
        //echo $_POST["TDES"];
        echo json_encode($this->model->getallFase($data));
    }
    public function update_fase() {
        
        if(isset($_POST["DID"]) &&  isset($_POST["IFNOMB"]) && isset($_POST["IFTFAS"]) && isset($_POST["IFTDES"]) )
        {$data = [
            "FMO_NOMB" => "'" . $this->Mayus($_POST["IFNOMB"]) . "'",
            "FMO_TFAS" => "'" . $_POST["IFTFAS"] . "'",
            "FMO_TDES" => "'" . $_POST["IFTDES"] . "'"
        ];
        echo json_encode($this->model->update_sspfasemo($data,$_POST["DID"]));
        }
    }
    public function delete_fase() {
        
        if(isset($_POST["DID"]) &&  isset($_POST["ESTA"]) )
        {$data = [
            "FMO_ESTA" => "'" .'D' . "'"
        ];
        echo json_encode($this->model->update_sspfasemo($data,$_POST["DID"]));
        }
    }
    //__________________________________________________________________//
    //_______________Buscamos el registro en SSP_BASE_CONCURSO_______________//
    public function getall_fase_concurso() {
        if (!empty($_POST["CONID"]) && isset($_POST["CONID"])) {
            $DATA = [

                "CON_ID" => "'" . $_POST["CONID"] . "'"
            ];
            echo json_encode($this->model->getall_faseconcurso($DATA));
        } else
            echo "Mensaje del sistema";
    }

    //_______________Creamos el registro en SSP_BASE_CONCURSO_______________//
    public function insert_base_concurso() {
        $this->tipousuario('D');
        if (!empty($_POST["CONID"]) && isset($_POST["CONID"]) && !empty($_POST["CFASE"]) && isset($_POST["CFASE"]) && !empty($_POST["BFINI"]) && isset($_POST["BFINI"]) && !empty($_POST["BFFIN"]) && isset($_POST["BFFIN"]) && !empty($_POST["BVALO"]) && isset($_POST["BVALO"])) {
            $base_concurso = [
                "FMO_ID" => "'" . $_POST["CFASE"] . "'",
                "BCO_FFIN" => "'" . $_POST["BFFIN"] . "'",
                "BCO_FINI" => "'" . $_POST["BFINI"] . "'",
                "CON_ID" => "'" . $_POST["CONID"] . "'",
                "BCO_VALO" => "'" . $_POST["BVALO"] . "'",
                "BCO_DESC" => "'" . $_POST["BDESC"] . "'"
            ];
            echo json_encode($this->model->setBaseConcurso($base_concurso));
        } else
            echo "Complete los campos";
    }

    //__________________________________________________________________//
    //_______________Creamos el registro en SSP_CONCURSO_______________//
    public function insert_concurso() {
        $this->tipousuario('D');
        if (!empty($_POST["CODI"]) && isset($_POST["CODI"]) && !empty($_POST["NOMB"]) 
            && isset($_POST["NOMB"]) && !empty($_POST["NVAC"]) && isset($_POST["NVAC"])
             && !empty($_POST["VALO"]) && isset($_POST["VALO"]) && !empty($_POST["VALM"])
              && isset($_POST["VALM"]) && !empty($_POST["CARGO"]) && ($_POST["CARGO"] != 'NULL')
               && isset($_POST["CARGO"]) && !empty($_POST["DESC"]) && isset($_POST["DESC"])
                && !empty($_POST["CFINI"]) && isset($_POST["CFINI"]) && !empty($_POST["CFFIN"]) && isset($_POST["CFFIN"])) {
            $cabecera_concurso = [
                "CON_NOMB" => "'" . $this->Mayus($_POST["NOMB"]) . "'",
                "CON_DESC" => "'" . $this->Mayus($_POST["DESC"]) . "'",
                "CON_VALM" => "'" . $_POST["VALM"] . "'",
                "CON_VALO" => "'" . $_POST["VALO"] . "'",
                "CON_CODI" => "'" . $_POST["CODI"] . "'",
                "PTR_ID" => "'" . $_POST["CARGO"] . "'",
                "CON_NVAC" => "'" . $_POST["NVAC"] . "'",
                "CON_FINI" => "'" . $_POST["CFINI"] . "'",
                "CON_FFIN" => "'" . $_POST["CFFIN"] . "'",
                "CON_UCRE" => "'" . Session::getValue("USU-ADMIN") . "'",
                "CON_FCRE" => "NOW()",
                "CON_ESTA" => "'C'"
            ];
            $CONCURSO_DATOS = ["SSP_CONCURSO" => $cabecera_concurso];
            echo json_encode($this->model->setConcurso($CONCURSO_DATOS));
        } else
            echo "Complete todos los campos.";
    }
    
    public function update_concurso(){
        $this->tipousuario('D');
       if(isset($_POST['IDCON_']) && $_POST['CONTOKEN']==$this->tokengenerate($_POST['IDCON_']))
        { 
 
            if (!empty($_POST["CODI"]) && isset($_POST["CODI"]) && !empty($_POST["NOMB"]) 
                && isset($_POST["NOMB"]) && !empty($_POST["NVAC"]) && isset($_POST["NVAC"])
                && !empty($_POST["VALO"]) && isset($_POST["VALO"]) && !empty($_POST["VALM"])
                && isset($_POST["VALM"]) && !empty($_POST["CARGO"]) && ($_POST["CARGO"] != 'NULL')
                && isset($_POST["CARGO"]) && !empty($_POST["DESC"]) && isset($_POST["DESC"])
                    && !empty($_POST["CFINI"]) && isset($_POST["CFINI"]) && !empty($_POST["CFFIN"]) && isset($_POST["CFFIN"])) {
                $cabecera_concurso = [
                "CON_NOMB" => "'" . $this->Mayus($_POST["NOMB"]) . "'",
                "CON_DESC" => "'" . $this->Mayus($_POST["DESC"]). "'",
                "CON_VALM" => "'" . $_POST["VALM"] . "'",
                "CON_VALO" => "'" . $_POST["VALO"] . "'",
                "PTR_ID" => "'" . $_POST["CARGO"] . "'",
                "CON_NVAC" => "'" . $_POST["NVAC"] . "'",
                "CON_FINI" => "'" . $_POST["CFINI"] . "'",
                "CON_FFIN" => "'" . $_POST["CFFIN"] . "'",
            ];        
                if($this->model->update_estadoConcurso($_POST['IDCON_'], $cabecera_concurso))
                 echo json_encode(['Mensaje' => '<i class="small material-icons" >done</i>  Concurso actualizado correctamente']);   
                 else 
                 echo json_encode(['Mensaje' => '<i class="small material-icons" >close</i> No existen cambios']);
            }else 
                 echo json_encode(['Mensaje' => 'Complete los datos correctamente']);
      }else 
                 echo json_encode(['Mensaje' => 'Error en concurso']);
    }

    //__________________________________________________________________//
    //___________Creamos el registro en SSP_PUESTO_TRABAJO_______________//
    public function crea_departamento() {
        $this->tipousuario('D');
        $estado = "H";
        
        if (empty($_POST["DPADR"]) || $_POST["DPADR"] == "NULL") {
            $data = [
                "PTR_NOMB" => "'" . $this->Mayus($_POST["DNOMB"]) . "'",
                "PTR_TIPO" => "'" . $_POST["TIPO"] . "'",
                "PTR_ESTA" => "'" . $estado . "'"
            ];
        } else {
            $data = [

                "PTR_NOMB" => "'" . $this->Mayus($_POST["DNOMB"]) . "'",
                "PTR_TIPO" => "'" . $_POST["TIPO"] . "'",
                "PTR_ESTA" => "'" . $estado . "'",
                "PTR_PADR" => "'" . $_POST["DPADR"] . "'"
            ];
        }

        echo json_encode($this->model->insertDepartamento($data));
    }

    //__________________________________________________________________//
    //___________Actualiamos el registro en SSP_PUESTO_TRABAJO_______________//
    public function actualiza_departamento() {
        $this->tipousuario('D');
        $estado = "D";

        if (isset($_POST["DESTA"]))
            $estado = "H";

        if (empty($_POST["DPADR"]) || $_POST["DPADR"] == "NULL") {
            $data = [
                "PTR_NOMB" => "'" . $this->Mayus($_POST["DNOMB"]) . "'",
                "PTR_TIPO" => "'" . $_POST["TIPO"] . "'",
                "PTR_ESTA" => "'" . $estado . "'",
                "PTR_ID" => $_POST["DID"]
            ];
        } else {
            $data = [

                "PTR_NOMB" => "'" . $this->Mayus($_POST["DNOMB"]) . "'",
                "PTR_TIPO" => "'" . $_POST["TIPO"] . "'",
                "PTR_ESTA" => "'" . $estado . "'",
                "PTR_PADR" => "'" . $_POST["DPADR"] . "'",
                "PTR_ID" => $_POST["DID"]
            ];
        }

        echo json_encode($this->model->updateDepartamento($data));
    }
    
    public function elimina_cargo() {
        $this->tipousuario('D');
        $estado = "D";

            $data = [
                "PTR_ESTA" => "'" . $estado . "'",
                "PTR_ID" => $_POST["DID"]
            ];

        echo json_encode($this->model->updateDepartamento($data));
    }
    //__________________________________________________________________//
    //___________Buscamos el registro en SSP_PUESTO_TRABAJO_______________//
    public function busca_departamento() {
        
        $data = [ "PTR_ID" => "'" . $_POST['PUESTO'] . "'"];
        echo json_encode($this->model->getDepartamentos($data));
    }


    //__________________________________________________________________//
   

    //Cargamos la calendario
    public function fases() {
        $this->view->render($this, 'fases');
    }

   
    //FUNCION QUE OBTIENE TODOS LOS CONCURSOS CREADOS
    public function getall_concursos() {
        echo json_encode($this->model->getallConcurso());
    }

    public function departamentos() {
        $this->view->render($this, 'departamentos');
    }

    
    //Obtiene valores de concurso segun ID
    public function get_concursobyID(){

          if(isset($_POST['IDCON_']))
        { 
            $datoConid=['CON_ID' => "'" . $_POST["IDCON_"] . "'"];
            $DATA = $this->model->get_concurso($_POST['IDCON_']);
            $DATA += ['fasesConcurso' => $this->model->getall_faseconcurso($datoConid)];    
             echo json_encode($DATA);
        }

    }

    //_________________CONTRUCCION DE LA CONDICION FINAL SEGUN LOS FILTROS DEL reclutamiento__
    public function get_aspirantes_reclutar(){
        
        $TotalWhere = "";

        if(isset($_POST['InstruccionFormal']) && !Empty($_POST['InstruccionFormal'])) //TABLA SSP_TITULO         
        $WhereInstruccionFormal ="SELECT TIT_FK_ASPI FROM SSP_TITULO WHERE " . $this->WhereFilter("TIT_FK_NSTR",$_POST['InstruccionFormal']);

        if(isset($_POST['AreaEstudio']) && !Empty($_POST['AreaEstudio']))   //TABLA SSP_TITULO Y TABLA SSP_CURSO
        $WhereAreaEstudio= "SELECT T.ASPIRANTE FROM (SELECT CUR_FK_ASPI AS ASPIRANTE FROM SSP_CURSO WHERE " . $this->WhereFilter("CUR_FK_AEST",$_POST['AreaEstudio']). ' UNION '.'  SELECT TIT_FK_ASPI AS ASPIRANTE FROM SSP_TITULO  WHERE ' . $this->WhereFilter("TIT_FK_AEST",$_POST['AreaEstudio']).') as T';      


        if(isset($_POST['Experiencia']) && !Empty($_POST['Experiencia']))   //TABLA SSP_experiencia_LABORAL  
        $WhereExperiencia = "SELECT ELA_FK_ASPI FROM SSP_EXPERIENCIA_LABORAL WHERE " . $this->WhereFilter("ELA_FK_ARTR",$_POST['Experiencia']);      

        if(isset($_POST['Discapacidad']) && !Empty($_POST['Discapacidad']))   //TABLA SSP_ASPIRANTE_DISCAPACIDAD  
        $WhereIDiscapacidad= "SELECT ADI_FK_ASID FROM SSP_ASPIRANTE_DISCAPACIDAD WHERE " . $this->WhereFilter("ADI_FK_TIDI",$_POST['Discapacidad']);


        if(isset($WhereInstruccionFormal))
        $TotalWhere.= ' AND ASP_ID in ('.$WhereInstruccionFormal.')';

        if(isset($WhereAreaEstudio))
        $TotalWhere.= ' AND ASP_ID in ('.$WhereAreaEstudio.')';

        if(isset($WhereExperiencia))
        $TotalWhere.= ' AND ASP_ID in ('.$WhereExperiencia.')';

        if(isset($WhereIDiscapacidad))
        $TotalWhere.= ' AND ASP_ID in ('.$WhereIDiscapacidad.')';


        if(isset($_POST['EST']))
        echo json_encode(['Aspirantes' => $this->model->filter_getAspirantes($TotalWhere." AND ASP_APRO='N' AND ASP_NOM1 != '' AND 1 <= (SELECT COUNT(*) FROM SSP_TITULO WHERE ASP_ID=TIT_FK_ASPI )",'N',false)]);
        else
        echo json_encode(['Aspirantes' => $this->model->filter_getAspirantes($TotalWhere)]);

    } 

      // FUNCION QUE ARMA EL WHERE PARA CADA OPCIÓN ESTABLECIDA COMO FILTRO 
    private function WhereFilter($campo,$arrayV,$condicion=" OR "){
         $Where="";
        foreach ($arrayV as $key => $value) {
          $Where.= $campo." = ".$value['value'];
          if($key<count($arrayV)-1)
            $Where.=$condicion;
        }
        return $Where;

    }


    //________________
    
    //_INSERTAMOS LOS ASPIRANTES AL CONCURSO
    public function set_aspirantes_concurso() {
        $insertados=0;
        $errores=0;
        
        if(isset($_POST['IDCON_']) && isset($_POST['ASP_SELECTED']))
        {
            $datos=['CON_ID' => $_POST['IDCON_'], 'ASP_ID' =>""];
            foreach ($_POST['ASP_SELECTED'] as $key => $value) {
                $datos['ASP_ID']=$value['value'];
              
                if($this->model->setConcursotAspirantes($datos))
                   $insertados++;
                   else
                   $errores++;     
            }
            $strMensaje= '<i class="small material-icons" >done</i> '.$insertados.' Aspirantes insertados <i class="small material-icons" >person</i>';
            $datos= ["Mensaje" => $strMensaje];
         echo json_encode($datos);
        }
        
       // return ['departamentos' => $this->model->getallDepartamentos()];
    }

    public function JSONgetAspirantesbyCONID(){
        if(isset($_POST['IDCON_']))
        echo json_encode(['Mensaje' => 'Registros Obtenidos', 'AspirantesConcurso' => $this->model->getAspirantesbyCONID($_POST['IDCON_'])]);
        else
         echo json_encode(['Mensaje' => 'Concurso no encontrado']);
    }



    //___________obtenemos todos los departamentos en SSP_PUESTO_TRABAJO_______________//
    public function get_allDepartamentos($PTR_ESTA='%') {
        return ['departamentos' => $this->model->getallDepartamentos($PTR_ESTA)];
    }

    public function get_allDepartamentosjson($PTR_ESTA='%') {
        echo json_encode(['departamentos' => $this->model->getallDepartamentos($PTR_ESTA)]);
    }

    public function get_allCargos() {
        $data = [ "PTR_ID" => "'" . $_POST['PUESTO'] . "'"];
        echo json_encode(['puestos' => $this->model->getallCargos($data)]);
    }

    //Funcion que elimina un aspirante del concurso
    public function eliminar_aspirante_concurso() {
      
       if($_POST['CONTOKEN']== $this->tokengenerate($_POST['IDCON_'])
        && $_POST['ASPTOKEN']== $this->tokengenerate($_POST['IDASP'])
        )
       {
        if($this->model->delete_aspirante_concurso(['CON_ID' => $_POST['IDCON_'] , 'ASP_ID' =>$_POST['IDASP']]))
             echo json_encode(['Mensaje' => '<i class="small material-icons" >close</i> Aspirante eliminado del concurso <i class="small material-icons" >person</i>']);
         else
            echo json_encode(['Mensaje' => 'Error al Eliminar']);
       }
       else
        $this->index_management();
        
    }


    //Función que genera el token para un identificador
    public function tokengenerate($identificador){
        $token=$this->model->tokengenerate_($identificador);
        return  $token[0][0];
    }
    //Función que genera el token para un identificador
    private function index_management(){
        header('Location: '.URL.'Management/index');
    }
    private function Mayus($variable) {
        $variable = strtr(strtoupper($variable), "àèìòùáéíóúçñäëïöü", "ÀÈÌÒÙÁÉÍÓÚÇÑÄËÏÖÜ");
        return $variable;
    }

    //-----------------CAMBIIOS DE ESTADO DE PROCESO
    
     //Función que cambia el estado a en PROCESO "P"
    public function processStateConcurso(){
     if(isset($_POST['IDCON_']) && $_POST['CONTOKEN']==$this->tokengenerate($_POST['IDCON_']))
        { 

            
                        $data = ["CON_ESTA" => "'P'"];
                        $CON_ID=$_POST["IDCON_"];
             
                        $DATOS=$this->datos_concurso($CON_ID);
                        $nomcon=$DATOS['Concurso'];
                        $EMAIL=$DATOS['fasesConcurso'];
                        $aspirantes=$this->model->getAspirantesbyCONID($CON_ID);
                       $arrayEmail = array();
                        foreach ($aspirantes as $key => $value) {
                      array_push($arrayEmail,$value[8]);
                        }
                     if(EmailGenerator::sendEmail('aspirante-selected', '', $arrayEmail,['CON_NOMB'=>$nomcon[0][1],'CON_FINI'=>$nomcon[0][10]]))
                     {
                        
                          if($this->model->update_estadoConcurso($CON_ID, $data))
                                 header('Location: '.URL.'Management/procesos');
                             else
                                 $this->index_management();
                         
                     }
                      else 
                      echo "no envio mensaje";
                      //$this->index_management();
        }
         else
           $this->index_management();
    }
    
       //Función que cambia el estado a en INICIALIZADO "I"
    public function inicialStateConcurso(){
     if(isset($_POST['IDCON_']) && $_POST['CONTOKEN']==$this->tokengenerate($_POST['IDCON_']))
        { 

            $data = ["CON_ESTA" => "'I'"];
            $CON_ID=$_POST["IDCON_"];
            
               if($this->model->update_estadoConcurso($CON_ID, $data))
               echo true;
               else
               echo false;

        }
        else
            $this->index_management();
    }
     //Función que cambia el estado a en FINALIZADO "F"
    private function finalStateConcurso($CON_ID,$CON_IDTOKEN){
            $data = ["CON_ESTA" => "'F'"];
            if($this->model->update_estadoConcurso($CON_ID, $data))
            header('Location: '.URL.'Management/procesos');
            else
            $this->index_management();
    }
      //Función que cambia el estado a en FINALIZADO "F"
    public function AnulaStateConcurso(){
          if(isset($_POST['IDCON_']) && $_POST['CONTOKEN']==$this->tokengenerate($_POST['IDCON_']))
        { 
            $data = ["CON_ESTA" => "'A'"];
            $this->model->update_estadoConcurso($_POST['IDCON_'], $data);
      
        }
    }

//funcion que asigna la calificacion de un aspirante
      public function save_calificacion_aspirante(){
       //echo json_encode($_POST);
     if(isset($_POST['IDCON_']) && $_POST['CONTOKEN']==$this->tokengenerate($_POST['IDCON_']))
        { 

            $data = $_POST["data"];
            $CON_ID=$_POST["IDCON_"];
            $errores=0;
            $correcto=0;
            $BCON_ID=$_POST["IDBCON"];
            $valorMaximo= $this->model->get_valor_baseconcurso($BCON_ID);
            foreach ($data as $key => $value) {
            $data=['BCO_ID' => $BCON_ID , 'ASP_ID' => $value['name'] , 'CAL_VALO' =>"'" .  $value['value'] . "'" ];
            if($value['value']>=0 && $value['value'] <=$valorMaximo[0][0]) //Que se encuentre entre el rango de calificacion
               {
                if ($this->model->insert_ssp_calificaciones($data))
                    $correcto++;
                else if ($this->model->update_ssp_calificaciones($data))
                    $correcto++;
                else
                    $errores++;
                }else
                $errores++;  
            }
            echo json_encode(['Mensaje' => '<i class="small material-icons" >done</i>'.$correcto.' calificaciones actualizadas - '.$errores.' Sin cambios ']);
        }
        else
            $this->index_management();
    }
//Funcion que cambia de estado la fase de un concurso
   public function finaliza_fase(){
       //echo json_encode($_POST);
     if(isset($_POST['IDCON_']) && $_POST['CONTOKEN']==$this->tokengenerate($_POST['IDCON_']))
        { 
            if(isset($_POST['IDBCON']) && $_POST['IDBCONTOKEN']==$this->tokengenerate($_POST['IDBCON']))
            {
                $IDBCON=$_POST['IDBCON'];
                if($this->model->update_estado_baseConcurso($IDBCON,'F'))
                echo true;
                else
                echo false;
            }
                
        }
        else
            $this->index_management();
    }
//
public function perfil_aspirante(){
    if(isset($_POST['id']))
    {
       Session::setValue("GUEST",$_POST['id']);
       echo true;
      
    }else {
        $this->index_management();
    }
    
}
 private function tipousuario($TIPO){
     
     if(Session::getValue("TIP-ADMIN")!=$TIPO)
     $this->index_management();
 }
  public function logout(){
    Session::destroy();
    header('Location: '.URL.'Management/login');
    
 }
 
   public function configuracion_usuarios(){
     $this->view->datos=['Usuarios'=>$this->model->getallusuario()];
     
    $this->view->render($this, 'configuracion_usuarios');
    
 }
 public function restaurar_pass(){
     $this->tipousuario('D');
     if(isset($_POST['ID_USER']))
     {
     if($this->model->update_password_user($_POST['ID_USER']))
     echo json_encode(['Mensaje' => 'Contraseña reestablecida']);
     else    
     echo json_encode(['Mensaje' => 'No se pudo reestablecer contraseña']);
     }else {
         echo json_encode(['Mensaje' => 'Error sistema']);
     }
     
 }
 
  public function update_estado_usuario(){
      $this->tipousuario('D');
     if(isset($_POST['ID_USER']) && isset($_POST['ESTADO_USER']) )
     {
         if($_POST['ESTADO_USER']==1)
         $estado='H';
         else
         $estado='D';
     if($this->model->update_state_user($_POST['ID_USER'],$estado))
     echo json_encode(['Mensaje' => 'Estado Actualizado']);
     else    
     echo json_encode(['Mensaje' => 'No se pudo actualizar estado']);
     }else {
         echo json_encode(['Mensaje' => 'Error sistema']);
     }
     
 }
 public function insert_usuario(){
    if(isset($_POST['UNOMB']) && isset($_POST['UTIPO'])){
        $_POST['UNOMB']=$this->Mayus($_POST['UNOMB']);
         if($_POST['UTIPO']=='D')
         $TIPO='D';
         else
         $TIPO='A';
         $data=['USU_NOMB' =>  "'".$_POST['UNOMB']."'" , 'USU_PASS' =>"'".md5('12345')."'",'USU_TIPO'=>"'".$TIPO."'" ];
                  if($this->model->insert_user($data)){
                       echo json_encode(['Mensaje' => 'Usuario '.$_POST['UNOMB'].' creado exitosamente!']);
                  }else
                    echo json_encode(['Mensaje' => 'El usuario ya existe']);
    }else
      echo json_encode(['Mensaje' => 'Datos incorrectos!']);
}

public function change_password(){
      $this->view->render($this, 'change_password');
}
   
    public function update_user_pass(){
     if(isset($_POST['PASS']))
     {
         $_POST['PASS']="'".md5($_POST['PASS'])."'";
     if($this->model->update_password_user(Session::getValue("ID-ADMIN") ,$_POST['PASS']))
     echo json_encode(['Mensaje' => 'Contraseña reestablecida']);
     else    
     echo json_encode(['Mensaje' => 'No se pudo reestablecer contraseña']);
     }else {
         echo json_encode(['Mensaje' => 'Error sistema']);
     }
     
 }
       
}

