<?php
session_start();
error_reporting(E_ALL);
ini_set("display_errors", 1);
require_once '../../classes/dataBase.class.php';
$db = new dataBase('../../');

$hoy = getdate();
$date = $hoy['year']."-".$hoy['mon']."-".$hoy['mday'];
$sql = "
	INSERT INTO `comentarios`(`date`,`comentario`)  
	VALUES ('".$date."','".$_POST['comentario']."');";
$arr = $db -> QuerySimple($sql);
header('Location: /mabmakeup/admin/index.php?menu=comentarios');

?>