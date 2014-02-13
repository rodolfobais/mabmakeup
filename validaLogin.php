<?php
session_start();
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once './admin/configs/default.conf.php'; 
require_once './admin/classes/security.class.php';

$login = $_POST['user'];
// $login = "root";
$password = $_POST['psw'];
// $password = "admin";
// echo "<pre>"; print_r($_POST);echo "</pre>";die;
$sc = new security('');
if ($sc -> authenticateAlum ($login,$password)){
// 	echo "true";die;
	$_SESSION['user'] = $login;
// 	echo "<pre>"; print_r($_SESSION);echo "</pre>";
// 	die;
	header('Location: ../index.php');
// 	include 'index.php';
}else{
// 	echo "false";die;
// 	header('Location: login.php?err=1');
	header('Location: ../index.php');
// 	include 'index.php';
}



?>