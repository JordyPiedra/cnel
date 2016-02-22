<?php
 require FPDF;

 class PDF extends FPDF
{
// Cabecera de página
function Header1($data)
{
    // Logo
    //$this->Image('logo_pb.png',10,8,33);
    // Arial bold 15
    $this->SetFont('Arial','B',12);
    // Movernos a la derecha
    $this->Cell(80);
    
    
    // Título
    $this->SetTextColor(31,73,125);
    $this->Cell(30,10,'Concurso: '.$data[0][1],0,0,'L');
    $this->Ln(10);
    $this->Cell(80);
      $this->Cell(30,10,' Codigo:'.$data[0][5],0,0,'L');
      $this->Ln(10);
    $this->Cell(80);
     $this->Cell(30,10,'Fecha Inicio: '.$data[0][10].'          Fecha Fin:'.$data[0][11],0,0,'L');
    // Salto de línea
    $this->Ln(20);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}

function FancyTable($header, $data,$Cmo)
{
    // Colores, ancho de línea y fuente en negrita
    $this->SetFillColor(31,73,125);
    $this->SetTextColor(255);
    $this->SetDrawColor(0);
    $this->SetLineWidth(.3);
    $this->SetFont('','B');
    // Cabecera
    $ColMO= $Cmo[0]+$Cmo[1]; //Sumamos las columnas de merito y oposicion y subtotales
    $ColMO =  200/$ColMO;
    $Mc=$ColMO * ($Cmo[0]); 
    $Oc=$ColMO * ($Cmo[1]);
    $w = array(10, 50, $Mc,$Oc ,20);
    $h = array(21, 21, 7,7 ,14);
    foreach ($header['header'] as $key => $value) {
        $this->Cell($w[$key],$h[$key],$value,1,0,'C',true);
    }
    $this->Cell(1,7,'',0,1);
    $this->Cell(60,7,'',0,0);
    $this->SetFillColor(83,141,213);
    $this->SetFont('Arial','',8);
    foreach ($header['meritos'] as $key => $value) {
        $this->Cell($ColMO,7,$value[0],1,0,'C',true);
    }
    foreach ($header['oposicion'] as $key => $value) {
        $this->Cell($ColMO,7,$value[0],1,0,'C',true);
    }
     $this->Cell(1,7,'',0,1);
    $this->Cell(60,7,'',0,0);
    foreach ($header['meritos'] as $key => $value) {
        $this->Cell($ColMO,7,$value[1].'%',1,0,'C',true);
    }
    foreach ($header['oposicion'] as $key => $value) {
        $this->Cell($ColMO,7,$value[1].'%',1,0,'C',true);
    }
    $this->Cell($w[4],7,'100%',1,0,'C',true);
    
        
    $this->Ln();
    // Restauración de colores y fuentes
    $this->SetFillColor(224,235,255);
    $this->SetTextColor(0);
    $this->SetFont('');
    // Datos
    $fill = false;
    foreach ($data as $key => $row) 
    {
         $this->Cell($w[0],6,$key+1,'LR',0,'L',$fill);
         
        foreach ($row as $key => $value) {
            if($key>=1 && $key<= ($Cmo[0]+$Cmo[1]+1))
            $ww=$ColMO;
            else if($key> ($Cmo[0]+$Cmo[1]+1))
            $ww=$w[4];
            else if($key==0 )
            $ww=$w[$key+1];
            
             $this->Cell($ww,6,utf8_decode($value),'LR',0,'L',$fill);
               
        }
       
          
        $this->Ln();
        $fill = !$fill;
    }
    // Línea de cierre
    $this->Cell(array_sum($w),0,'','T');
}

// Una tabla más completa

}



$pdf = new PDF('L','mm','A4');
// Títulos de las columnas


$header = ['header' => array('No.', 'NOMBRES', 'MERITO', 'OPOSICION','TOTAL'),
            'meritos' => $this->data['meritos'],
            'oposicion' =>  $this->data['oposicion']
          ];
$numcolumM=count($this->data['meritos']);
$numcolumO=count($this->data['oposicion']);
$Cmo = array($numcolumM,$numcolumO);
// Carga de datos
$data = $this->data['AspirantesROW'];

$pdf->AddPage();
$pdf->Header1($this->data['Concurso']);
$pdf->SetFont('Arial','B',10);
//$pdf->Cell(40,10,'¡Hola, Mundo!');
$pdf->FancyTable($header,$data,$Cmo);
$pdf->AliasNbPages();
$pdf->Output();

?>



