<?php

function uploadMultipleFiles($location){
	$listOfFiles = array();
	if(isset($_FILES['files'])){
		
		if (!file_exists($location)) {
			mkdir($location, 0777, true);
		}else{
			$files = glob($location.'/*'); // get all file names
			foreach($files as $file){ // iterate files
				if(is_file($file))
					unlink($file); // delete file
			}
		}
		
		if(!empty($_FILES['files']['name'][0])){
		
			$i = 0;
			while($i < count($_FILES['files']['name'])){
				if(move_uploaded_file($_FILES['files']['tmp_name'][$i],
					$location.'/'.$_FILES['files']['name'][$i])){
						
					$listOfFiles[$i] = $location.'/'.$_FILES['files']['name'][$i];
					// echo 'uploded '.$i;
				}
				// else{
				// 	echo 'There was an error';
				// }
				$i++;
			}
		}
		// else{
		// 	echo 'choose file';
		// }
	}
	return $listOfFiles;
	/*
	<html>
	<head>
	<meta charset="UTF-8">
	</head>
	<body>
	<form method="post" enctype="multipart/form-data">
	  <p><input type="file" name="files[]" multiple></p>
	  <input type="submit" value="Upload">
	</form>
	</body>
	</html>
	*/
}


function uploadFile($location){
	$filePath = '';
	if(isset($_FILES['file'])){
		$tmp_name = $_FILES['file']['tmp_name'];
		$name = $_FILES['file']['name'];
		$filePath = $location.'/'.$name;
		if (isset($name)) {
			if(!empty($name)){
				if (!file_exists($location)) {
					mkdir($location, 0777, true);
				}
				if(move_uploaded_file($tmp_name, $filePath)){
					// echo 'Uploaded!';
				}
				// else{
				// 	echo 'There was an error';
				// }
			}
			// else{
			// 	echo 'choose a file';
			// }
		}
	}
	return $filePath;
	
	/*
	<html>
	<head>
	<meta charset="UTF-8">
	</head>
	<body>
	<form method="post" enctype="multipart/form-data">
	  <p><input type="file" name="file"></p>
	  <input type="submit" value="Upload">
	</form>
	</body>
	</html>
	*/
}
?>