<form name="uploadForm" id="uploadForm" method="post" action="modules/cargarportada/upload.php" enctype="multipart/form-data">
	<h1>Propiedades de las portadas</h1>
	<table id = "propTable" border = 1 cellpadding="5">
			<tr>
				<td><b>Pagina</b></td>
				<td><b>Nombre del archivo</b></td>
				<td><b>Alto (px)</b></td>
				<td><b>Ancho (px)</b></td>
			</tr>
			<tr>
				<td>Home</td>
				<td>portada_home.jpg</td>
				<td>384</td>
				<td>960</td>
			</tr>
			<tr>
				<td>Comentarios</td>
				<td>portada_comentarios.jpg</td>
				<td>192</td>
				<td>960</td>
			</tr>
			<tr>
				<td>Comentarios</td>
				<td>portada_mistrabajos.jpg</td>
				<td>192</td>
				<td>960</td>
			</tr>
			<tr>
				<td>Comentarios</td>
				<td>portada_contacto.jpg</td>
				<td>192</td>
				<td>960</td>
			</tr>
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