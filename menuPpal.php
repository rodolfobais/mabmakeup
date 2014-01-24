<?php
/*
 [0] => Array
        (
            [id] => 1
            [alias] => Home
            [file] => home.php
        )
 */ 
global $pages;
// echo "<pre>"; print_r($pages);echo "</pre>";
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
