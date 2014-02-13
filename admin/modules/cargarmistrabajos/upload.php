<?php
session_start();
error_reporting(E_ALL);
ini_set("display_errors", 1);
require_once '../../classes/dataBase.class.php';
$db = new dataBase('../../');

$hoy = getdate();
$date = $hoy['year']."-".$hoy['mon']."-".$hoy['mday'];
$sql = "
	INSERT INTO `mistrabajos`(`fecha`, `imagen`, `comentario`) 
	VALUES ('".$date."','','".$_POST['comentario']."');";
$arr = $db -> QuerySimple($sql);

$sql = "SELECT MAX(`id`) FROM `mistrabajos`;";
$arr = $db -> QueryFetchArray($sql);

$id = $arr[0][0];

// echo "<pre>ARR"; print_r($arr);echo "</pre>";
// echo "<pre>FILES"; print_r($_FILES);echo "</pre>";
// echo "<pre>POST"; print_r($_POST);echo "</pre>";die;
// A list of permitted file extensions
$allowed = array('png', 'jpg', 'gif','zip');

if(isset($_FILES['imagen']) && $_FILES['imagen']['error'] == 0){
	//echo "TRUE";
	$extension = pathinfo($_FILES['imagen']['name'], PATHINFO_EXTENSION);
// 	echo "ext: ".$extension;
	$nombre = "mistrabajos_".$id.".".$extension;
	if(!in_array(strtolower($extension), $allowed)){
		echo '{"status":"error"}';
		die;
	}
// 	echo "fn: ".move_uploaded_file($_FILES['imagen']['tmp_name'], 'uploads/'.$_FILES['imagen']['name']);
	if(move_uploaded_file($_FILES['imagen']['tmp_name'], '../../../gallery/'.$nombre)){
		$sql = "UPDATE `mistrabajos` SET `imagen` = '".$nombre."' WHERE id = '".$id."'";
		$arr = $db -> QuerySimple($sql);
		header('Location: /mabmakeup/admin/index.php?menu=cargarmistrabajos');
		echo '{"status":"success"}';
		die;
	}else{
		$sql = "DELETE FROM `mistrabajos` WHERE id = '".$id."'";
		$arr = $db -> QuerySimple($sql);
		
		echo '{"status":"ErrorMoverTmp"}';
		die;
	}
}else{
	//echo "FALSE";
	echo '{"status":"errorGral", "err":"'.$_FILES['imagen']['error'].'", "name":"'.$_FILES['imagen']['name'].'"}';
	die;	
}

