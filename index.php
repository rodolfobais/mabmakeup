<?php
	session_start();
	error_reporting(E_ALL); 
	ini_set('display_errors', true);
// 	echo "<br/>path: ".$_SERVER['DOCUMENT_ROOT'].'/mabmakeup/admin/configs/default.conf.php<br/>';
	require_once $_SERVER['DOCUMENT_ROOT'].'/mabmakeup/admin/configs/default.conf.php';
	$_SESSION['pages'] = array(
			'0'	=> array('id' => '1', 'alias' => 'Home', 'file' => 'home.php'),
			'1'	=> array('id' => '2', 'alias' => 'Mis servicios', 'file' => 'misservicios.php'),
			'2'	=> array('id' => '3', 'alias' => 'Mis trabajos', 'file' => 'misTrabajos.php'),
			'3'	=> array('id' => '4', 'alias' => 'Contacto', 'file' => 'contacto.php'),
			'4'	=> array('id' => '5', 'alias' => 'Quién soy', 'file' => 'quiensoy.php')
	); 
	if (array_key_exists('user', $_SESSION)) {
		$_SESSION['pages'][5]['id'] = '6';
		$_SESSION['pages'][5]['alias'] = 'Documentos';
		$_SESSION['pages'][5]['file'] = 'documentos.php';
	}
	
// 	echo "<pre>"; print_r($_SERVER);echo "</pre>";
	$forms = array(
		'3'	=> array(
			'7aee5648' => Array( 'email' => '', 'subject' => 'Inquiry from the web page', 'sentMessage' => 'Form was sent.', 'fields' => array( array( 'fidx' => '0', 'name' => 'Nombre', 'type' => 'input', 'options' => '' ), array( 'fidx' => '1', 'name' => 'E-mail', 'type' => 'input', 'options' => '' ), array( 'fidx' => '2', 'name' => 'Mensaje', 'type' => 'textarea', 'options' => '' ) ) )
		)
	);
// 	echo "<pre>"; print_r($_SESSION);echo "</pre>";
	$base_dir = dirname(__FILE__);
	$base_url = '/';
	$show_comments = false;
	include dirname(__FILE__).'/functions.inc.php';
	$home_page = '1';
	$page_id = parse_uri();
// 	$user_key = "pzzqSLJ18GUjpsOGqTis238zDq90";
// 	$user_hash = "91009fb0692d75b2";
// 	$comment_callback = "http://uk.zyro.com/es-ES/comment_callback/";
	$preview = false;
	$mod_rewrite = true;
// 	handleComments($pages[$page_id]['id']);

	if (isset($_POST["wb_form_id"])){
		handleForms($pages[$page_id]['id']);
	}
	ob_start();
	if (isset($_REQUEST['view']) && $_REQUEST['view'] == 'news'){
		include dirname(__FILE__).'/news.php';
	}else if (isset($_REQUEST['view']) && $_REQUEST['view'] == 'blog'){
		include dirname(__FILE__).'/blog.php';
	}else{
		$fl = dirname(__FILE__).'/'.$_SESSION['pages'][$page_id]['file'];
		if (is_file($fl)) include $fl; else echo '404 Not found';
	}
	ob_end_flush();

?>