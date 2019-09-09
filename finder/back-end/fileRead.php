
<?php
include('PdfToText/PdfToText.phpclass');

function pdfToString($filePath){
	$pdf = new PdfToText($filePath);
	$data = $pdf->Text;
	//echo $data;
	return $data;
}

?>