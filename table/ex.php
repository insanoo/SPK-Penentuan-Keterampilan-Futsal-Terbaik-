<?php
require('./../report/fpdf181/pdfhtml.php');
$pdf = new PDF_HTML('P','mm','A4');

$pdf->AddPage();
$pdf->SetFont('Arial','',12);

$html='<table style="border:1px black solid">
<tr>
<td width="200" height="30">cell 1</td><td width="200" height="30" bgcolor="#D0D0FF">cell 2</td>
</tr>
<tr>
<td width="200" height="30">cell 3</td><td width="200" height="30">cell 4</td>
</tr>
</table>';

$pdf->WriteHTML($html);
$pdf->Output();
?>
