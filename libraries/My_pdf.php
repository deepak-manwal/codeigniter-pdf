<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require('fpdf/pdf.php');

class My_pdf
{
	function test()
	{
		$pdf = new PDF();
		$pdf->AliasNbPages();
		$pdf->AddPage();
		$pdf->SetFont('Times','',12);
		for($i=1;$i<=40;$i++)
			$pdf->Cell(0,10,'Printing line number '.$i,0,1);
		$pdf->Output();
	}
}

?>