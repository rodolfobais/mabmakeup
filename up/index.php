<?php 
error_reporting(E_ALL);
ini_set("display_errors", 1);
// phpinfo();
// file_put_contents("test.txt", "asdasd");die;
?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8"/>
		<!-- The main CSS file -->
		<link href="assets/css/style.css" rel="stylesheet" />
	</head>
	<body>
		<form id="upload" method="post" action="upload.php" enctype="multipart/form-data">
			<div id="drop">
				Drop Here
				<a>Browse</a>
				<input type="file" name="upl" multiple />
			</div>
			<ul>
				<!-- The file uploads will be shown here -->
			</ul>
		</form>
		<!-- JavaScript Includes -->
		<script src="jquery1.8.2.min.js"></script>
		<script src="assets/js/jquery.knob.js"></script>

		<!-- jQuery File Upload Dependencies -->
		<script src="assets/js/jquery.ui.widget.js"></script>
		<script src="assets/js/jquery.iframe-transport.js"></script>
		<script src="assets/js/jquery.fileupload.js"></script>
		
		<!-- Our main JS file -->
		<script src="assets/js/script.js"></script>
		<!-- Only used for the demos. Please ignore and remove. --> 
	</body>
</html>