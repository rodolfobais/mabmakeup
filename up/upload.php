<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
// echo "<pre>"; print_r($_FILES);echo "</pre>";
// A list of permitted file extensions
file_put_contents("uploads/test.txt", "asdasd");
$allowed = array('png', 'jpg', 'gif','zip');

if(isset($_FILES['upl']) && $_FILES['upl']['error'] == 0){
	//echo "TRUE";
	$extension = pathinfo($_FILES['upl']['name'], PATHINFO_EXTENSION);
// 	echo "ext: ".$extension;
	if(!in_array(strtolower($extension), $allowed)){
		echo '{"status":"error"}';
		exit;
	}
// 	echo "fn: ".move_uploaded_file($_FILES['upl']['tmp_name'], 'uploads/'.$_FILES['upl']['name']);
	if(move_uploaded_file($_FILES['upl']['tmp_name'], 'uploads/'.$_FILES['upl']['name'])){
		echo '{"status":"success"}';
		exit;
	}else{
		echo '{"status":"ErrorMoverTmp"}';
		exit;
	}
}else{
	//echo "FALSE";
	echo '{"status":"errorGral", "err":"'.$_FILES['upl']['error'].'", "name":"'.$_FILES['upl']['name'].'"}';
	exit;	
}

