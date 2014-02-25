<?php
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
$pages = $_SESSION['pages'];
// echo "<pre>"; print_r($_SESSION);echo "</pre>";
$menu = '<ul class="hmenu">';
for ($i = 0; $i < count($pages); $i++) {
	$menu .= '<li';
	if ($pages[$i]['file'] == $_SESSION['page']) {
		$menu .= ' class="active"';
	}
	$menu .= '><a href="'.$pages[$i]['file'].'" target="_self" title="'.$pages[$i]['alias'].'">'.$pages[$i]['alias'].'</a></li>';
}
$menu .= '<ul class="hmenu">';
echo $menu;
?>
