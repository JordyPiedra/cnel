<?php 
    $location =explode(DIRECTORY_SEPARATOR, __FILE__);
    $inicio = array_search('html', $location);

    if(!$inicio)
    $inicio = array_search('htdocs', $location);    
    
    $url_="";
     for ($i=($inicio+1); $i < (count($location)-1) ; $i++) { 
         $url_ .= '/'.$location[$i];
     }
	define('URL', 'http://'.$_SERVER['SERVER_NAME'].$url_.'/');
    
		define('LIBS', 'libs/');
        
    define('HEAD_U', 'public/inc/HEAD_U.php');
    define('NAV_U', 'public/inc/NAV_U.php');
    define('SCRIPT_U','public/inc/SCRIPT_U.php');

    define('HEAD_F', 'public/inc/HEAD_F.php');
    define('MENU_F', 'public/inc/MENU_F.php');

    define('CALENDAR','public/inc/CALENDAR.php');
    define('SCRIPT_F','public/inc/SCRIPT_F.php');

    define('JSPDF','public/jsPDF-0.9/jspdf.php');
    define('FPDF','public/fpdf/fpdf.php');

    require_once 'vendor/autoload.php' ;



 
    	
?>