<?php
session_start();
error_reporting(E_ALL);
ini_set("display_errors", 1);
require_once '../../classes/dataBase.class.php';
$db = new dataBase('../../');

$hoy = getdate();
$date = $hoy['year']."-".$hoy['mon']."-".$hoy['mday'];
$sql = "
	INSERT INTO `tickets`(`tipoticket`				, `descrp`				, `status`, `cliente`)  
	VALUES 				 ('".$_POST['tipoticket']."','".$_POST['descrp']."' , '1'	  ,'".$_POST['cliente']."');";
$arr = $db -> QuerySimple($sql);

// echo $sql;die;

$sql = "SELECT MAX(`id`) FROM `tickets`;";
$arr = $db -> QueryFetchArray($sql);
$id = $arr[0][0];

// echo "<pre>ARR"; print_r($arr);echo "</pre>";
// echo "<pre>FILES"; print_r($_FILES);echo "</pre>";
// echo "<pre>POST"; print_r($_POST);echo "</pre>";die;
// A list of permitted file extensions

if(isset($_FILES['documento']) && $_FILES['documento']['error'] == 0){
	//echo "TRUE";
	$extension = pathinfo($_FILES['documento']['name'], PATHINFO_EXTENSION);
// 	echo "ext: ".$extension;
	$nombre = "ticket_".$id.".".$extension;
	
// 	echo "fn: ".move_uploaded_file($_FILES['documento']['tmp_name'], 'uploads/'.$_FILES['documento']['name']);
	if(move_uploaded_file($_FILES['documento']['tmp_name'], '../../../gallery/'.$nombre)){
		$sql = "UPDATE `tickets` SET `documento` = '".$nombre."' WHERE id = '".$id."'";
		$arr = $db -> QuerySimple($sql);
		header('Location: /'.$_SESSION['siteName'].'/admin/index.php?menu=tickets');
		echo '{"status":"success"}';
		die;
	}else{
		$sql = "DELETE FROM `mistrabajos` WHERE id = '".$id."'";
		$arr = $db -> QuerySimple($sql);
		header('Location: /'.$_SESSION['siteName'].'/admin/index.php?menu=tickets');
		echo '{"status":"ErrorMoverTmp"}';
		die;
	}
}
header('Location: /'.$_SESSION['siteName'].'/admin/index.php?menu=tickets');

?>