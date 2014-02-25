<?php 
$arrTabla = array(
		'0'	=> array('pagina' => 'Home'			 	, 'nombre' => 'portada_home.jpg'			, 'alto' => '384', 'ancho' => '960'),
		'1'	=> array('pagina' => 'Mis servicios'	, 'nombre' => 'portada_misservicios.jpg'	, 'alto' => '192', 'ancho' => '960'),
		'2'	=> array('pagina' => 'Mis trabajos' 	, 'nombre' => 'portada_mistrabajos.jpg'		, 'alto' => '192', 'ancho' => '960'),
		'3'	=> array('pagina' => 'Contacto'		 	, 'nombre' => 'portada_contacto.jpg'		, 'alto' => '192', 'ancho' => '960'),
		'4'	=> array('pagina' => 'Quién soy'		, 'nombre' => 'portada_quiensoy.jpg'		, 'alto' => '330', 'ancho' => '330')
);

$tabla = "";

for ($i = 0; $i < count($arrTabla); $i++) {
	$tabla .= "
		<tr>
			<td>".$arrTabla[$i]['pagina']."</td>
			<td>".$arrTabla[$i]['nombre']."</td>
			<td>".$arrTabla[$i]['alto']."</td>
			<td>".$arrTabla[$i]['ancho']."</td>
		</tr>
	";
}
?>
<form name="uploadForm" id="uploadForm" method="post" action="modules/cargarportada/upload.php" enctype="multipart/form-data">
	<h1>Propiedades de las portadas</h1>
	<table id = "propTable" border = 1 cellpadding="5">
			<tr>
				<td><b>Pagina</b></td>
				<td><b>Nombre del archivo</b></td>
				<td><b>Alto (px)</b></td>
				<td><b>Ancho (px)</b></td>
			</tr>
			<?php echo $tabla;?>
	</table>
	<table>
		<tr>
			<td><br/>Imagen:</td>
			<td><br/><input type = "file" name = "imagen" id = "imagen"></td>
		</tr>
		<tr>
			<td colspan = 2><input type = "submit" value = "Subir"></td>
		</tr>
	</table>
</form> 