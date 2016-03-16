<?php

Class Aspirante extends Controller{
	public function __construct(){
		parent::__construct();

		if(!Session::getValue("GUEST")){
			if(!Session::getValue("ID-ASPIRANTE")){
	            header('Location: '.URL);
	            //echo '<script> window.location.href="'.URL.'Aspirante/perfil"</script>';
	        }	        
		}else{
			Session::SetValue("ID-ASPIRANTE", Session::getValue("GUEST"));
		}
		
	}

	public function perfil(){
		$guest = false;

		if (Session::getValue("GUEST")) {
			$guest = "JVJP";
		}

		$this->view->data = ["MODAL-INIT" => Session::getValue("MODAL-INIT"), "GUEST" => $guest];

		$this->view->render($this, 'perfil');
		Session::SetValue("MODAL-INIT", 0);
	}

	//Configure the view to show
	public function configSection($view){
		$section = $view;

		switch ($section) {
			case 'informacion-personal':
				$location = $this->model->getLocations("country", "province");				
				$catastrophic_illness = $this->model->getCatastrophicIllness();
				$disability = $this->model->getDisability();
				$family_type = $this->model->getFamilyType();

				$candidate = $this->model->getDataCandidate(Session::getValue("ID-ASPIRANTE"))[0];



				if($candidate["ASP_FK_LOCN"] && $candidate["ASP_FK_LOCN"]<1475){
					$LOCN = $this->model->getLocationById($candidate["ASP_FK_LOCN"]);
					$location["canton_birth"] = $this->model->getLocationById($LOCN[0][2], 'LOC_PADR=');
					$candidate["ASP_PRON"] = $LOCN[0][2];
					$candidate["ASP_COUN"] = 1;
				}else{
					$location["canton_birth"] = null;
					$candidate["ASP_PRON"] = null;
					$candidate["ASP_COUN"] = $candidate["ASP_FK_LOCN"];
				}


				$LOCD = $this->model->getLocationById($candidate["ASP_FK_LOCD"]);
				if($LOCD){
					$location["parish_home"] = $this->model->getLocationById($LOCD[0][2], 'LOC_PADR=');
					$canton_home = $this->model->getLocationById($location["parish_home"][0][2]);
					$location["canton_home"] = $this->model->getLocationById($canton_home[0][2], 'LOC_PADR=');
					$candidate["ASP_CAND"] = $LOCD[0][2];
					$candidate["ASP_PARD"] = $canton_home[0][2];
				}else{
					$location["parish_home"] = null;
					$location["canton_home"] = null;
					$candidate["ASP_CAND"] = null;
					$candidate["ASP_PARD"] = null;
				}
				

				$disability_candidate= $this->model->getDisabilityCandidate(Session::getValue("ID-ASPIRANTE"));


				$this->view->data = [
					'candidate' => $candidate,
					'catastrophic_illness' => $catastrophic_illness,
					'canton_birth' => $location["canton_birth"], 
					'canton_home' => $location["canton_home"], 
					'countries' => $location["country"], 
					'disability' => $disability,
					'disability_candidate' => $disability_candidate,
					'family_type' => $family_type,
					'parish_home' => $location["parish_home"], 
					'provinces' => $location["province"] 
				];
			break;

			case 'datos-familiares':
				$education_level = $this->model->getEducationLevel();
				$family_type = $this->model->getFamilyType();
				$job = $this->model->getJobs();

				$family = $this->model->getFamilyCandidate(Session::getValue("ID-ASPIRANTE"));

				$this->view->data = [
					'education_level' => $education_level,
					'family_type' => $family_type,
					'family' => $family,
					'job' => $job
				];
			break;

			case 'instruccion-formal':
				$education_level = $this->model->getEducationLevel();
				$institution = $this->model->getInstitutions();
				$study_area = $this->model->getStudyArea();

				$formal_education = $this->model->getFormalEducation(Session::getValue("ID-ASPIRANTE"));

				$this->view->data = [
					'education_level' => $education_level,
					'formal_education' => $formal_education,
					'institution' => $institution,
					'study_area' => $study_area
				];
			break;

			case 'idiomas':
				$language = $this->model->getLanguages();

				$languages_applicant = $this->model->getLanguagesApplicant(Session::getValue("ID-ASPIRANTE"));

				$this->view->data = [
					'languages' => $language,
					'languages_applicant'=>$languages_applicant
				];
			break;

			case 'capacitacion':
				$event_type = $this->model->getEventType();
				$study_area = $this->model->getStudyArea();

				$candidate_training = $this->model->getCandidateTraining(Session::getValue("ID-ASPIRANTE"));

				$this->view->data = [
					'event_type' => $event_type,
					'study_area' => $study_area,
					'candidate_training'=>$candidate_training
				];
			break;

			case 'experiencia-laboral':
				$work_area = $this->model->getWorkArea();

				$work_experience = $this->model->getWorkExperience(Session::getValue("ID-ASPIRANTE"));

				$this->view->data = [
					'work_area' => $work_area,
					'work_experience'=>$work_experience
				];
			break;

			case 'referencias-personales':
				$personal_references = $this->model->getPersonalReferences(Session::getValue("ID-ASPIRANTE"))[0];

				$this->view->data = [
					'personal_references'=>$personal_references
				];
			break;
		}

		$this->view->render($this, $section);

	}

	//Control requests to add, update and delete information
	public function controller(){
		$output = null;

		switch ($_POST['ID']) {
			case 'informacion-personal':

				$data = $this->processData('informacion-personal');
				$disability = null;

				if($_POST['DEDISC'] === 'S' || $_POST['DEDISC'] === ':N'){
					if($_POST['DEDISC']===':N'){
						$_POST["DETIDI"] = null;
						$_POST["DECONA"] = null;
						$_POST["DEPORC"] = null;
					}

					$disability = [
					"ADI_FK_ASID" => ["value"=>Session::getValue("ID-ASPIRANTE"), "type" => PDO::PARAM_INT],
					"ADI_FK_TIDI" => ["value"=>$_POST["DETIDI"], "type" => PDO::PARAM_INT],
					"ADI_CONA"    => ["value"=>$_POST["DECONA"], "type" => PDO::PARAM_STR],
					"ADI_PORC"    => ["value"=>$_POST["DEPORC"], "type" => PDO::PARAM_INT],
					"ADI_FK_TIFA" => ["value"=>$_POST["DESUST"], "type" => PDO::PARAM_INT]
					];


					if (empty($_POST['DESUST']) && $_POST['DETIDI']!='8'){
						$disability["ADI_FK_TIFA"]["value"] = null;
					}
				}
				$output = $this->model->updatePersonalInformation($data, $disability, Session::getValue("ID-ASPIRANTE"));
        	break;

        	case 'datos-familiares':

        		if(isset($_POST['JV'])){
        			switch ($_POST['JV']) {
        				case 'D':
        					$output = $this->model->deleteData('SSP_FAMILIAR', 'FAM_ID = '.$_POST['jID']);
        				break;

        				case 'E':
        					$output = $this->model->getFamilyCandidate(false, $_POST['jID']);
        				break;

        				case 'U':
        					$data = $this->processData('datos-familiares');
							$output = $this->model->CreateUpdateFamily($data,1, $_POST['jID']);
        				break;
        				
        				default:
        				break;
        			}

        		}else{
        			$data = $this->processData('datos-familiares');
					$output = $this->model->CreateUpdateFamily($data,Session::getValue("ID-ASPIRANTE"));
        		}
        	break;

        	case 'instruccion-formal':
        		if(isset($_POST['JV'])){
        			switch ($_POST['JV']) {
        				case 'D':
        					$output = $this->model->deleteData('SSP_TITULO', 'TIT_ID = '.$_POST['jID']);
        				break;
        				case 'E':
        					$output = $this->model->getFormalEducation(false, $_POST['jID']);	
        				break;
        				case 'U':
        					$data = $this->processData('instruccion-formal');
							$output = $this->model->CreateUpdateFormalEducation($data,Session::getValue("ID-ASPIRANTE"), $_POST['jID']);			
        				break;
        				
        				default:
        				break;
        			}

        		}else{
        			$data = $this->processData('instruccion-formal');
					$output = $this->model->CreateUpdateFormalEducation($data,Session::getValue("ID-ASPIRANTE"));
		
        		}
        	break;

        	case 'idiomas':
        		if(isset($_POST['JV'])){
        			switch ($_POST['JV']) {
        				case 'D':
        					$output = $this->model->deleteData('SSP_ASPIRANTE_IDIOMA', 'AID_ID = '.$_POST['jID']);
        				break;

        				case 'E':
        					$output = $this->model->getLanguagesApplicant(false, $_POST['jID']);
        				break;

        				case 'U':
        					$data = $this->processData('idiomas');
							$output = $this->model->CreateUpdateLanguageApplicant($data,Session::getValue("ID-ASPIRANTE"), $_POST['jID']);
        				break;
        				
        				default:
        				break;
        			}

        		}else{
        			$data = $this->processData('idiomas');
					$output = $this->model->CreateUpdateLanguageApplicant($data,Session::getValue("ID-ASPIRANTE"));
        		}
        	break;

        	case 'capacitacion':
        		if(isset($_POST['JV'])){
        			switch ($_POST['JV']) {
        				case 'D':
        					$output = $this->model->deleteData('SSP_CURSO', 'CUR_ID = '.$_POST['jID']);      		
        				break;

        				case 'E':
        					$output = $this->model->getCandidateTraining(false, $_POST['jID']);   		
        				break;

        				case 'U':
        					$data = $this->processData('capacitacion');
							$output = $this->model->CreateUpdateCandidateTraining($data,Session::getValue("ID-ASPIRANTE"), $_POST['jID']);		
        				break;
        				
        				default:
        				break;
        			}

        		}else{
        			$data = $this->processData('capacitacion');
					$output = $this->model->CreateUpdateCandidateTraining($data,Session::getValue("ID-ASPIRANTE"));
        		}
        	break;

        	case 'experiencia-laboral':
        		if(isset($_POST['JV'])){
        			switch ($_POST['JV']) {
        				case 'D':
        					$output = $this->model->deleteData('SSP_EXPERIENCIA_LABORAL', 'ELA_ID = '.$_POST['jID']);	
        				break;

        				case 'E':
        					$output = $this->model->getWorkExperience(false, $_POST['jID']);
        				break;

        				case 'U':
        					$data = $this->processData('experiencia-laboral');
							$output = $this->model->CreateUpdateWorkExperience($data,Session::getValue("ID-ASPIRANTE"), $_POST['jID']);
        				break;
        				
        				default:
        				break;
        			}

        		}else{
        			$data = $this->processData('experiencia-laboral');
					$output = $this->model->CreateUpdateWorkExperience($data,Session::getValue("ID-ASPIRANTE"));
		
        		}
        	break;

        	case 'referencias-personales':
        		$data = $this->processData('referencias-personales');
        		$output= $this->model->UpdatePersonalReferences($data, Session::getValue("ID-ASPIRANTE"));	
        	break;

        	default:
        	break;

		}
		echo $output;
	}

	public function processData($id){
		switch ($id) {
			case 'informacion-personal':

				if($_POST["IPPAIS"]!='1'){
					$_POST["IPLOCN"] = $_POST["IPPAIS"];
				}


				if(empty($_POST["DEENFE"])){
					$_POST["DEENFE"] = null;
				}

				$data = [
					"ASP_CEDU"    => ["value"=>$_POST["IPCEDU"], "type" => PDO::PARAM_STR], 
					"ASP_NOM1"    => ["value"=>$this->Mayus($_POST["IPNOM1"]), "type" => PDO::PARAM_STR], 
					"ASP_NOM2"    => ["value"=>$this->Mayus($_POST["IPNOM2"]), "type" => PDO::PARAM_STR], 
					"ASP_APE1"    => ["value"=>$this->Mayus($_POST["IPAPE1"]), "type" => PDO::PARAM_STR], 
					"ASP_APE2"    => ["value"=>$this->Mayus($_POST["IPAPE2"]), "type" => PDO::PARAM_STR], 
					"ASP_DISC"    => ["value"=>$_POST["DEDISC"], "type" => PDO::PARAM_STR], 
					"ASP_ETNI"    => ["value"=>$_POST["IPETNI"], "type" => PDO::PARAM_STR], 
					"ASP_ESCI"    => ["value"=>$_POST["IPESCI"], "type" => PDO::PARAM_STR], 
					"ASP_FENA"    => ["value"=>$_POST["IPFENA"], "type" => PDO::PARAM_STR], 
					"ASP_GENE"    => ["value"=>$_POST["IPGENE"], "type" => PDO::PARAM_STR], 
					//"ASP_EMAP"    => ["value"=>$_POST["IPEMAP"], "type" => PDO::PARAM_STR],
					"ASP_EMAI"    => ["value"=>$_POST["IPEMAI"], "type" => PDO::PARAM_STR],
					"ASP_ESTA"    => ["value"=>$_POST["IPESTA"], "type" => PDO::PARAM_STR], 
					"ASP_PESO"    => ["value"=>$_POST["IPPESO"], "type" => PDO::PARAM_STR], 
					"ASP_TEL1"    => ["value"=>$_POST["DDTEL1"], "type" => PDO::PARAM_STR], 
					"ASP_TEL2"    => ["value"=>$_POST["DDTEL2"], "type" => PDO::PARAM_STR], 
					"ASP_TILI"    => ["value"=>$_POST["IPTILI"], "type" => PDO::PARAM_STR], 
					"ASP_TISA"    => ["value"=>$_POST["IPTISA"], "type" => PDO::PARAM_STR],

					"ASP_CAPR"    => ["value"=>$this->Mayus($_POST["DDCAPR"]), "type" => PDO::PARAM_STR],
					"ASP_CASE"    => ["value"=>$this->Mayus($_POST["DDCASE"]), "type" => PDO::PARAM_STR],
					"ASP_NCAS"    => ["value"=>$_POST["DDNCAS"], "type" => PDO::PARAM_STR],
					"ASP_SECT"    => ["value"=>$this->Mayus($_POST["DDSECT"]), "type" => PDO::PARAM_STR],
					"ASP_REFE"    => ["value"=>$this->Mayus($_POST["DDREFE"]), "type" => PDO::PARAM_STR],
					
					"ASP_FK_LOCD" => ["value"=>$_POST["DDPARR"], "type" => PDO::PARAM_INT],
					"ASP_FK_LOCN" => ["value"=>$_POST["IPLOCN"], "type" => PDO::PARAM_INT],
					"ASP_FK_ENCA" => ["value"=>$_POST["DEENFE"], "type" => PDO::PARAM_INT]
				];
			break;

			case 'datos-familiares':
 				$data = [
					"FAM_CEDU"    => ["value"=>$_POST["DFCEDU"], "type" => PDO::PARAM_STR], 
					"FAM_APEL"    => ["value"=>$this->Mayus($_POST["DFAPEL"]), "type" => PDO::PARAM_STR], 
					"FAM_NOMB"    => ["value"=>$this->Mayus($_POST["DFNOMB"]), "type" => PDO::PARAM_STR], 
					"FAM_DIRE"    => ["value"=>$this->Mayus($_POST["DFDIRE"]), "type" => PDO::PARAM_STR], 
					"FAM_FNAC"    => ["value"=>$_POST["DFFNAC"], "type" => PDO::PARAM_STR], 
					"FAM_FEME"    => ["value"=>$_POST["DFFEME"], "type" => PDO::PARAM_STR], 
					"FAM_TEL1"    => ["value"=>$_POST["DFTEL1"], "type" => PDO::PARAM_STR], 
					"FAM_TEL2"    => ["value"=>$_POST["DFTEL2"], "type" => PDO::PARAM_STR], 

					"FAM_FK_ASPI" => ["value"=>Session::getValue("ID-ASPIRANTE"), "type" => PDO::PARAM_INT], 
					"FAM_FK_INST" => ["value"=>$_POST["DFINST"], "type" => PDO::PARAM_INT], 
					"FAM_FK_OFIC" => ["value"=>$_POST["DFOFIC"], "type" => PDO::PARAM_INT], 
					"FAM_FK_TIFA" => ["value"=>$_POST["DFTIFA"], "type" => PDO::PARAM_INT]
				];
			break;

			case 'instruccion-formal':
				if(!!$_POST["IFNOMB1"]){
					$data = [
						"TIT_NOMB"    => ["value"=>$this->Mayus($_POST["IFNOMB1"]), "type" => PDO::PARAM_STR], 
						"TIT_TIEM"    => ["value"=>$this->Mayus($_POST["IFTIEM1"]), "type" => PDO::PARAM_INT], 
						
						"TIT_FK_ASPI" => ["value"=>Session::getValue("ID-ASPIRANTE"), "type" => PDO::PARAM_INT], 
						"TIT_FK_NSTR" => ["value"=>$_POST["IFNSTR"], "type" => PDO::PARAM_INT]
					];
			
				}else{

					if(empty($_POST["IFSENE"])){
						$_POST["IFSENE"] = null;
					}

					if(empty($_POST["IFAEST"])){
						$_POST["IFAEST"] = null;
					}
					if(empty($_POST["IFOINS"])){
						$_POST["IFOINS"] = null;
					}

	 				$data = [
						"TIT_NOMB"    => ["value"=>$this->Mayus($_POST["IFNOMB"]), "type" => PDO::PARAM_STR], 
						"TIT_TIEM"    => ["value"=>$_POST["IFTIEM"], "type" => PDO::PARAM_INT], 
						"TIT_FGRA"    => ["value"=>$_POST["IFFGRA"], "type" => PDO::PARAM_STR], 

						"TIT_FK_ASPI" => ["value"=>Session::getValue("ID-ASPIRANTE"), "type" => PDO::PARAM_INT], 						
						"TIT_FK_INST" => ["value"=>$_POST["IFINST"], "type" => PDO::PARAM_INT], 
						"TIT_FK_NSTR" => ["value"=>$_POST["IFNSTR"], "type" => PDO::PARAM_INT],

						"TIT_SENE"    => ["value"=>$_POST["IFSENE"], "type" => PDO::PARAM_STR],
						"TIT_FK_AEST" => ["value"=>$_POST["IFAEST"], "type" => PDO::PARAM_INT],
						"TIT_OINS" 	  => ["value"=>$this->Mayus($_POST["IFOINS"]), "type" => PDO::PARAM_STR]

					];
					

				}
			break;

			case 'idiomas':
				$languages = ["A", "I", "B"];

				if (in_array($_POST["IDNESC"], $languages) && in_array($_POST["IDNHAB"], $languages)) {
				   $data = [
						"AID_NESC"    => "'".$_POST["IDNESC"]."'",
						"AID_NHAB"    => "'".$_POST["IDNHAB"]."'",
						"AID_FK_ASPI" => Session::getValue("ID-ASPIRANTE"),  		
						"AID_FK_IDIO" => $_POST["IDIDIO"]
					];

				}else{
					$data  = false;
				}
			break;

			case 'capacitacion':
				$certificate_type = ["A", "S"];

				$f1 = strtotime($_POST["CAFICA"]);
				$f2 = strtotime($_POST["CAFFCA"]);

				if ($f2 < $f1) {
					return false;
				}

				if (in_array($_POST["CATCER"], $certificate_type)) {
					$data = [
						"CUR_ECAP"    => ["value"=>$this->Mayus($_POST["CAECAP"]), "type" => PDO::PARAM_STR], 
						"CUR_TITU"    => ["value"=>$this->Mayus($_POST["CATITU"]), "type" => PDO::PARAM_STR], 
						"CUR_TCER"    => ["value"=>$_POST["CATCER"], "type" => PDO::PARAM_STR], 
						"CUR_FICA"    => ["value"=>$_POST["CAFICA"], "type" => PDO::PARAM_STR], 
						"CUR_FFCA"    => ["value"=>$_POST["CAFFCA"], "type" => PDO::PARAM_STR], 
						"CUR_DHOR"    => ["value"=>$_POST["CADHOR"], "type" => PDO::PARAM_INT], 

						"CUR_FK_TEVE" => ["value"=>$_POST["CATEVE"], "type" => PDO::PARAM_INT],
						"CUR_FK_AEST" => ["value"=>$_POST["CAAEST"], "type" => PDO::PARAM_INT],

						"CUR_FK_ASPI" => ["value"=>Session::getValue("ID-ASPIRANTE"), "type" => PDO::PARAM_INT] 
					];

				}else{
					$data  = false;
				}				
			break;

			case 'experiencia-laboral':

				$f1 = strtotime($_POST["ELFINI"]);
				$f2 = strtotime($_POST["ELFFIN"]);

				if ($f2 < $f1) {
					return false;
				}


				$data = [
					"ELA_NEMP"    => ["value"=>$this->Mayus($_POST["ELNEMP"]), "type" => PDO::PARAM_STR], 
					"ELA_CARG"    => ["value"=>$this->Mayus($_POST["ELCARG"]), "type" => PDO::PARAM_STR], 
					"ELA_RELA"    => ["value"=>$this->Mayus($_POST["ELRELA"]), "type" => PDO::PARAM_STR], 
					"ELA_TELE"    => ["value"=>$_POST["ELTELE"], "type" => PDO::PARAM_STR], 
					"ELA_SECT"    => ["value"=>$_POST["ELSECT"], "type" => PDO::PARAM_STR], 
					"ELA_FINI"    => ["value"=>$_POST["ELFINI"], "type" => PDO::PARAM_STR], 
					"ELA_FFIN"    => ["value"=>$_POST["ELFFIN"], "type" => PDO::PARAM_STR], 

					"ELA_FK_ARTR" => ["value"=>$_POST["ELARTR"], "type" => PDO::PARAM_INT],
					"ELA_FK_ASPI" => ["value"=>Session::getValue("ID-ASPIRANTE"), "type" => PDO::PARAM_INT] 
				];		

			break;

			case 'referencias-personales':
				$data = [
					"ASP_R1AP"    => ["value"=>$this->Mayus($_POST["RPR1AP"]), "type" => PDO::PARAM_STR], 
					"ASP_R1NO"    => ["value"=>$this->Mayus($_POST["RPR1NO"]), "type" => PDO::PARAM_STR], 
					"ASP_R1TE"    => ["value"=>$_POST["RPR1TE"], "type" => PDO::PARAM_STR], 
					"ASP_R1CO"    => ["value"=>$_POST["RPR1CO"], "type" => PDO::PARAM_STR],

					"ASP_R2AP"    => ["value"=>$this->Mayus($_POST["RPR2AP"]), "type" => PDO::PARAM_STR], 
					"ASP_R2NO"    => ["value"=>$this->Mayus($_POST["RPR2NO"]), "type" => PDO::PARAM_STR], 
					"ASP_R2TE"    => ["value"=>$_POST["RPR2TE"], "type" => PDO::PARAM_STR], 
					"ASP_R2CO"    => ["value"=>$_POST["RPR2CO"], "type" => PDO::PARAM_STR] 
				];		

			break;
			
			default:
			break;
		}

		return $data;
	}

	public function logout(){
		Session::unsetValue("ID-ASPIRANTE");
		Session::unsetValue("EMAIL-ASPIRANTE");
		echo '<script> window.location.href="'.URL.'"</script>';
	}

	public function curriculumVitae($id = false){

		if (!$id) {
			$id = Session::getValue("ID-ASPIRANTE");
		}

		$candidate = $this->model->getDataCandidate2($id)[0];

		/*$n = $this->model->db->prepare("call get_localidad(".$candidate[34].", 'N');");
		$n->execute();
		$candidate[34] = $n->fetchAll(PDO::FETCH_NUM);*/

		$n = $this->model->db->prepare("call get_localidad(".$candidate[35].", 'D');");
		$n->execute();
		$candidate[35] = $n->fetchAll(PDO::FETCH_NUM);



		$n = $this->model->db->prepare("call get_formal_education(".$id.");");
		$n->execute();

		$candidate["fe"] = $n->fetchAll(PDO::FETCH_NUM);


		$n = $this->model->db->prepare("call get_languages_applicant(".$id.");");
		$n->execute();

		$candidate["la"] = $n->fetchAll(PDO::FETCH_NUM);

		$n = $this->model->db->prepare("call get_candidate_training(".$id.");");
		$n->execute();

		$candidate["ct"] = $n->fetchAll(PDO::FETCH_NUM);

		$n = $this->model->db->prepare("call get_work_experience(".$id.");");
		$n->execute();

		$candidate["we"] = $n->fetchAll(PDO::FETCH_NUM);

		
		$output  =  ["c" => $candidate];
	
		echo json_encode($output);

	}
    private function Mayus($variable) {
        $variable = strtr(strtoupper($variable), "àèìòùáéíóúçñäëïöü", "ÀÈÌÒÙÁÉÍÓÚÇÑÄËÏÖÜ");
        return $variable;
    }

}


?>


