<?php
function classify($cvString){
	//API Url
	$url = 'http://akramyamin.pythonanywhere.com/find-job-title';

	$ch = curl_init($url);
 
	//The JSON data.
	$jsonData = array(
		'cvData' => $cvString
	);
	 
	//Encode the array into JSON.
	$jsonDataEncoded = json_encode($jsonData);
	 
	//Tell cURL that we want to send a POST request.
	curl_setopt($ch, CURLOPT_POST, 1);
	 
	//Attach our encoded JSON string to the POST fields.
	curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);
	 
	//Set the content type to application/json
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
	 
	//Execute the request
	$result = curl_exec($ch);

	return $result[0];
}


function readAndClassify($filePath){
	$cvString = pdfToString($filePath);
	return classify($cvString);
}

function classifyAll($listOffiles){
	$result = array();
	for($i = 0; $i < count($listOffiles); $i++){
		$result[$i] = classify(pdfToString($listOffiles[$i]));
	}
	return $result;
}

function filterCvs($listOffiles, $requiredJobTitle){
	$result = array();
	$jobTitles = classifyAll($listOffiles);
	$x = 0;
	for($i = 0; $i < count($listOffiles); $i++){
		if($jobTitles[$i] == $requiredJobTitle){
			$result[$x] = $listOffiles[$i];
			$x++;
		}
	}
	return $result;
}


?>