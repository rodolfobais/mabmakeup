<?php
global $arrLang;
global $arrMenu;
global $langMenu;
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
	var permission_edit 	= 'no';
	var permission_delete 	= 'yes';
	var permission_copy 	= 'no';
</script>
<form name="uploadForm" id="uploadForm" method="post" action="modules/comentarios/upload.php" enctype="multipart/form-data">
	<table>
		<tr>
			<td>Comentario:</td>
		</tr>
		<tr>
			<td><textarea rows="3" cols="76" name = "comentario"></textarea></td>
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