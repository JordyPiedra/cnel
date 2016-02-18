<?php
 require FPDF;

 class PDF extends FPDF
{
// Cabecera de página
public $headerData;
function Header1($data)
{
    $data=$this->headerData;
    // Logo URL.public/images/logo.png
    $this->Image(URL.'public/images/logo.png',10,15,40);
    // Arial bold 15
    // Movernos a la derecha
    $this->Cell(70);
    // Título
    //$this->SetTextColor(31,73,125);
    $this->SetTextColor(0);
    $this->SetDrawColor(31,73,125);
    $t=6;
    $v=10;
    $this->SetFont('Arial','B',12);
    $this->Cell(60,$t,'Tipo de Documento: ',1,0,'C');
    $this->SetFont('Arial','',12);
    $this->Cell(60,$t,'Formato',1,0,'C');
    $this->SetFont('Arial','B',12);
    $this->Cell(30,$t,utf8_decode('Código: '),1,0,'C');
    $this->SetFont('Arial','',12);
    $this->Cell(60,$t,'FO-CNEL-CORP-DRH-15',1,0,'C');
    $this->Ln($t);  
    $this->Cell(70);
    
    $this->SetFont('Arial','B',12);
    $this->Cell(60,$t,'Nombre del Documento: ',1,0,'C');
    $this->SetFont('Arial','',12);
    $this->Cell(60,$t,utf8_decode('Informe de Selección'),1,0,'C');
    
    $this->SetFont('Arial','B',12);
    $this->Cell(30,$t,utf8_decode('Revisión:'),1,0,'C');
    $this->SetFont('Arial','',12);
    $this->Cell(60,$t,utf8_decode('1'),1,0,'C');
    
    $this->Ln($t);  
    $this->Cell(70);
    
    $this->SetFont('Arial','B',12);
    $this->Cell(40,$t,'Elaborado por: ',1,0,'C');
    $this->SetFont('Arial','',12);
    $this->Cell(30,$t,'DRH',1,0,'C');
    
    $this->SetFont('Arial','B',12);
    $this->Cell(40,$t,'Revisado por: ',1,0,'C');
    $this->SetFont('Arial','',12);
    $this->Cell(30,$t,'GDC',1,0,'C');
    
    $this->SetFont('Arial','B',12);
    $this->Cell(40,$t,'Aprobado por: ',1,0,'C');
    $this->SetFont('Arial','',12);
    $this->Cell(30,$t,'GG',1,0,'C');
    
    $this->Ln(13);  
    $this->Cell(1);
    $this->SetTextColor(31,73,125);
    $this->SetFont('Arial','B',12);
    $this->Cell(20,$t,'Proceso: ',0,0,'L');
    $this->SetFont('Arial','',12);
    $this->Cell(100,$t,$data[0][1],0,0,'L');
    $this->SetFont('Arial','B',12);
    $this->Cell(25,$t,utf8_decode('P.Código: '),0,0,'L');
    $this->SetFont('Arial','',12);
    $this->Cell(25,$t,$data[0][5],0,0,'L');
    $this->SetFont('Arial','B',12);
    $this->Cell(30,$t,utf8_decode('Fecha Inicio: '),0,0,'L');
    $this->SetFont('Arial','',12);
    $this->Cell(25,$t,$data[0][10],0,0,'L');
    $this->SetFont('Arial','B',12);
    $this->Cell(30,$t,utf8_decode('Fecha Fin: '),0,0,'L');
    $this->SetFont('Arial','',12);
    $this->Cell(25,$t,$data[0][11],0,0,'L');
     $this->Ln(10);
    // $this->Cell(80);
    // //   $this->Cell(30,10,' Codigo:'.$data[0][5],0,0,'L');
    //   $this->Ln(10);
    // $this->Cell(80);
    // //  $this->Cell(30,10,'Fecha Inicio: '.$data[0][10].'          Fecha Fin:'.$data[0][11],0,0,'L');
    // // Salto de línea
    // $this->Ln(20);
}

// Pie de página
function Footer()
{
    $this->SetY(-25);
    $this->SetFont('Arial','B',10);
    $this->Cell(0,7,'Elaborado por:_____________________________________________',0,0,'C');
    $this->SetFont('Arial','',9);
    $this->Ln(5);
    $this->Cell(0,7,utf8_decode('                         Firma del responsable de selección'),0,0,'C');
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}

function FancyTable($header, $data,$Cmo,$inicial)
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
    $w = array(10, 60, $Mc,$Oc ,10);
    $h = array(21, 21, 7,7 ,14);
    foreach ($header['header'] as $key => $value) {
        $this->Cell($w[$key],$h[$key],$value,1,0,'C',true);
    }
    $this->Cell(1,7,'',0,1);
    $this->Cell(70,7,'',0,0);
    $this->SetFillColor(83,141,213);
    $this->SetFont('Arial','',8);
    foreach ($header['meritos'] as $key => $value) {
        $this->Cell($ColMO,7,$value[0],1,0,'C',true);
    }
    foreach ($header['oposicion'] as $key => $value) {
        $this->Cell($ColMO,7,$value[0],1,0,'C',true);
    }
     $this->Cell(1,7,'',0,1);
    $this->Cell(70,7,'',0,0);
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
         if($key>=$inicial)
         
         $this->Cell($w[0],6,$key+1,'LR',0,'L',$fill);
         
        foreach ($row as $key1 => $value) {
            
            if($key1>=1 && $key1<= ($Cmo[0]+$Cmo[1]))
            $ww=$ColMO;
            else if($key1> ($Cmo[0]+$Cmo[1]))
            $ww=$w[4];
            else 
            $ww=$w[$key1+1];
            
             $this->Cell($ww,6,utf8_decode($value),'LR',0,'L',$fill);
               
        }
       
          if($key==$inicial+17)
               break;
        $this->Ln();
        $fill = !$fill;
    }
  
    
    // Línea de cierre
    $this->Cell(array_sum($w),1,'','T');
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
$npages=ceil(count($data)/18);
$inicial=0;
$headerData=$this->data['Concurso'];
$pdf->headerData=$headerData;
for ($i=1; $i <=$npages ; $i++) { 
$pdf->AddPage();
$pdf->Header1($headerData);
$pdf->SetFont('Arial','B',9);
$pdf->FancyTable($header,$data,$Cmo,$inicial);
$pdf->AliasNbPages();
$inicial+=17;
}

$pdf->Output();
//Alcansan 18
?>



