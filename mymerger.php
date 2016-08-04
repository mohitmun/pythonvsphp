<?php
require('fpdf.php');
require('fpdi.php');

$files = ['p1.pdf', 'p2.pdf', 'p3.pdf'];

$pdf = new FPDI();

// iterate over array of files and merge
foreach ($files as $file) {
    $pagecount = $pdf->setSourceFile($file);
    for($j = 0; $j < $pagecount ; $j++)
    {
      $tpl = $pdf->importPage(($j +1), '/TrimBox'); // template index.
      $pdf->addPage();
      $pdf->useTemplate($tpl, null, null, 0,0, true);
    }
}

// output the pdf as a file (http://www.fpdf.org/en/doc/output.htm)
$pdf->Output('F','php_merged.pdf');
?>