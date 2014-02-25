<?php
global $arrLang;
global $arrMenu;
global $langMenu;

require_once 'classes/dataBase.class.php';
$db = new dataBase('');

require_once 'classes/html.class.php';
$ht = new html('');

$sql = "SELECT `id` as id, `descrp` as valor FROM `clientes`";
$aoptions = $db -> QueryFetchArray($sql);
$cliente = $ht->select($name = "cliente", $aoptions);

$sql = "SELECT `id` as id, `descrp` as valor FROM `tipoticket`";
$aoptions = $db -> QueryFetchArray($sql);
$tipoticket = $ht->select($name = "tipoticket", $aoptions);

?>
<script type="text/javascript"> 
	var modulo				= '<?php echo $_SESSION['menu'];?>'
	var userId	 			= '<?php echo $_SESSION['userId'];?>';
	var modulepath 			= '';
	var language 			= '<?php echo $_SESSION['lang'];?>';
	var themepath 			= '';
	var edit 				= '<?php echo $arrLang['edit'];?>';
	var del 				= '<?php echo $arrLang['del'];?>';
	var new_entry 			= '<?php echo $arrLang['new_entry'];?>';
	var copy_item			= '<?php echo $arrLang['copy_item'];?>';
	var delete_this_item 	= '<?php echo $arrLang['deleteThisItem'];?>';
	var select_item 		= '<?php echo $arrLang['SelectAnItem'];?>';
	var addnew 				= 'addnew';	
	var permission_add 		= 'no';
	var permission_edit 	= 'yes';
	var permission_delete 	= 'yes';
	var permission_copy 	= 'yes';
</script>
<form name="uploadForm" id="uploadForm" method="post" action="modules/tickets/upload.php" enctype="multipart/form-data">
	<table>
		<tr>
			<td>Cliente:</td>
			<td><?php echo $cliente; ?></td>
		</tr>
		<tr>
			<td>Tipo de ticket:</td>
			<td><?php echo $tipoticket; ?></td>
		</tr>
		<tr>
			<td>Descripción:</td>
			<td><textarea rows="3" cols="76" name = "descrp"></textarea></td>
		</tr>
		<tr>
			<td>Documento:</td>
			<td><input type = "file" name = "documento" id = "documento"></td>
		</tr>
		<tr>
			<td colspan = 2><input type = "submit" value = "Subir"></td>
		</tr>
	</table>
</form> 
<div id="modalbox" href="#data"></div>
<form id="foo" method="POST" action="?menu=<?php echo $arrLang['edit'];?>">
	<div id="contenido_form"></div>
</form>
<!-- Grid de datos-->
<div id="flex1"></div>
<input type = "hidden" id = "date" value = "">