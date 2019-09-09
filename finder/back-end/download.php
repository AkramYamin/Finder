<?php


function downloadAll($listOfFiles){
	//$listOfFiles = array('cvs/accountant.pdf', 'cvs/accountant2.pdf', 'cvs/front-end-developer.pdf', 'cvs/front-end-developer2.pdf', 'cvs/lawyer.pdf');
	$zipname = 'file.zip';
	$zip = new ZipArchive;
	$zip->open($zipname, ZipArchive::CREATE);
	foreach ($listOfFiles as $file) {
	  $zip->addFile($file);
	}
	$zip->close();
	
	
	header('Content-Type: application/zip');
	header('Content-disposition: attachment; filename='.$zipname);
	header('Content-Length: ' . filesize($zipname));
	readfile($zipname);
}

//downloadAll(array('cvs/accountant.pdf', 'cvs/accountant2.pdf', 'cvs/front-end-developer.pdf', 'cvs/front-end-developer2.pdf', 'cvs/lawyer.pdf'));


?>