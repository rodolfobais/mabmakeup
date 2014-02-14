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
	$_SESSION['user'] = $login;
}
header('Location: '.$_SESSION['page']);


?>