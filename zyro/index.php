<?php
error_reporting(E_ALL); ini_set('display_errors', true);
	$pages = array(
		'0'	=> array('id' => '1', 'alias' => 'Home', 'file' => '1.php'),
		'1'	=> array('id' => '2', 'alias' => 'Sobre-mi', 'file' => '2.php'),
		'2'	=> array('id' => '3', 'alias' => 'Contacts', 'file' => '3.php')
	);
	$forms = array(
		'3'	=> array(
			'7aee5648' => Array( 'email' => '', 'subject' => 'Inquiry from the web page', 'sentMessage' => 'Form was sent.', 'fields' => array( array( 'fidx' => '0', 'name' => 'Nombre', 'type' => 'input', 'options' => '' ), array( 'fidx' => '1', 'name' => 'E-mail', 'type' => 'input', 'options' => '' ), array( 'fidx' => '2', 'name' => 'Mensaje', 'type' => 'textarea', 'options' => '' ) ) )
		)
	);
	$base_dir = dirname(__FILE__);
	$base_url = '/';
	$show_comments = false;
	include dirname(__FILE__).'/functions.inc.php';
	$home_page = '1';
	$page_id = parse_uri();
	$user_key = "pzzqSLJ18GUjpsOGqTis238zDq90";
	$user_hash = "91009fb0692d75b2";
	$comment_callback = "http://uk.zyro.com/es-ES/comment_callback/";
	$preview = false;
	$mod_rewrite = true;
	handleComments($pages[$page_id]['id']);
	if (isset($_POST["wb_form_id"])) handleForms($pages[$page_id]['id']);
	ob_start();
	if (isset($_REQUEST['view']) && $_REQUEST['view'] == 'news')
		include dirname(__FILE__).'/news.php';
	else if (isset($_REQUEST['view']) && $_REQUEST['view'] == 'blog')
		include dirname(__FILE__).'/blog.php';
	else {
		$fl = dirname(__FILE__).'/'.$pages[$page_id]['file'];
		if (is_file($fl)) include $fl; else echo '404 Not found';
	}
	ob_end_flush();

?>