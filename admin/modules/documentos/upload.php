<?php
session_start();
error_reporting(E_ALL);
ini_set("display_errors", 1);
// require_once '../../configs/default.conf.php';
require_once '../../classes/dataBase.class.php';
$db = new dataBase('../../');

$hoy = getdate();
$date = $hoy['year']."-".$hoy['mon']."-".$hoy['mday'];
$sql = "
	INSERT INTO `documentos`(`fecha`, `nombre`, `idcurso`) 
	VALUES ('".$date."','','".$_POST['curso']."');";
$arr = $db -> QuerySimple($sql);

$sql = "SELECT MAX(`id`) FROM `documentos`;";
$arr = $db -> QueryFetchArray($sql);

$id = $arr[0][0];

// echo "<pre>ARR"; print_r($arr);echo "</pre>";
// echo "<pre>FILES"; print_r($_FILES);echo "</pre>";
// echo "<pre>POST"; print_r($_POST);echo "</pre>";die;
// A list of permitted file extensions
// $allowed = array('doc', 'docx', 'gif','zip');

if(isset($_FILES['documento']) && $_FILES['documento']['error'] == 0){
	//echo "TRUE";
	$extension = pathinfo($_FILES['documento']['name'], PATHINFO_EXTENSION);
// 	echo "ext: ".$extension;
// 	$nombre = "documentos_".$id.".".$extension;
	$nombre = $_FILES['documento']['name'];
	/*
	if(!in_array(strtolower($extension), $allowed)){
		echo '{"status":"error"}';
		die;
	}
	*/
// 	echo "fn: ".move_uploaded_file($_FILES['documento']['tmp_name'], 'uploads/'.$_FILES['documento']['name']);
	if(move_uploaded_file($_FILES['documento']['tmp_name'], '../../../gallery/'.$nombre)){
		$sql = "UPDATE `documentos` SET `nombre` = '".$nombre."' WHERE id = '".$id."'";
		$arr = $db -> QuerySimple($sql);
		header('Location: /mabmakeup/admin/index.php?menu=documentos');
		echo '{"status":"success"}';
		die;
	}else{
		$sql = "DELETE FROM `documentos` WHERE id = '".$id."'";
		$arr = $db -> QuerySimple($sql);
		
		echo '{"status":"ErrorMoverTmp"}';
		die;
	}
}else{
	//echo "FALSE";
	echo '{"status":"errorGral", "err":"'.$_FILES['documento']['error'].'", "name":"'.$_FILES['documento']['name'].'"}';
	die;	
}

