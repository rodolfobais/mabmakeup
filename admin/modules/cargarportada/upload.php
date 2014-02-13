<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
$allowed = array('png', 'jpg', 'gif','zip');

if(isset($_FILES['imagen']) && $_FILES['imagen']['error'] == 0){
	//echo "TRUE";
	$extension = pathinfo($_FILES['imagen']['name'], PATHINFO_EXTENSION);
// 	echo "ext: ".$extension;
	$nombre = $id.".".$extension;
	if(!in_array(strtolower($extension), $allowed)){
		echo '{"status":"error"}';
		die;
	}
// 	echo "fn: ".move_uploaded_file($_FILES['imagen']['tmp_name'], 'uploads/'.$_FILES['imagen']['name']);
	if(move_uploaded_file($_FILES['imagen']['tmp_name'], '../../../gallery/'.$nombre)){
		header('Location: /mabmakeup/admin/index.php?menu=cargarportadahome');
		echo '{"status":"success"}';
		die;
	}else{		
		echo '{"status":"ErrorMoverTmp"}';
		die;
	}
}else{
	//echo "FALSE";
	echo '{"status":"errorGral", "err":"'.$_FILES['imagen']['error'].'", "name":"'.$_FILES['imagen']['name'].'"}';
	die;	
}

