<?php 
@session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/mabmakeup/admin/configs/default.conf.php';
require 'libs/funciones.class.php';
$fn = new funciones('admin/');
$TituloHome = $fn->getParametro('TituloHome');
$_SESSION['page'] = 'home.php';
// die;
$misservicios = $fn->getmisservicios(2);
$misTrabajos = $fn->getMisTrabajos(2);
// echo "<pre>"; print_r($_SESSION);echo "</pre>";

$imagenPpal = "portada_home.jpg?v=".$_SESSION['date'];

?>

<!DOCTYPE html>
<html lang="es">
<head>
	
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Home</title>
	<base href="<?php echo $_SESSION['_BasePath'];?>" />
	<meta name="viewport" content="width=1005" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
	<script src="js/jquery-1.8.3.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/main.js" type="text/javascript"></script>
	<style type="text/css">
		body { background: transparent url("gallery/ce9c43e9ae4d790bb0d32a3d16575f6b.jpg") repeat-x fixed center top; }
		.wb_sbg { background: transparent none repeat-x scroll center bottom; }
		.wb-stl-pagetitle { font: normal bold 34px Tahoma,Geneva,sans-serif; text-align: left; text-decoration: none; color: #030303; line-height: normal; margin: 0px 0px 0px 0px; padding: 0px 0px 0px 0px; }
		.wb-stl-pagetitle a { font: normal bold 34px Tahoma,Geneva,sans-serif; text-align: left; text-decoration: none; color: #000000; line-height: normal; font-weight: normal; font-style: normal; }
		.wb-stl-pagetitle a:hover { font: normal bold 34px Tahoma,Geneva,sans-serif; text-align: left; text-decoration: none; color: #000000; line-height: normal; font-weight: normal; font-style: normal; }
		.wb-stl-pagetitle ul { list-style-image: url('null'); }
		.wb-stl-subtitle { font: normal bold 34px Arial,Helvetica,sans-serif; text-align: left; text-decoration: none; color: #676767; line-height: 34px; margin: 0px 0px 0px 0px; padding: 0px 0px 0px 0px; }
		.wb-stl-subtitle a { font: normal bold 34px Arial,Helvetica,sans-serif; text-align: left; text-decoration: none; color: #000000; line-height: 34px; font-weight: normal; font-style: normal; }
		.wb-stl-subtitle a:hover { font: normal bold 34px Arial,Helvetica,sans-serif; text-align: left; text-decoration: none; color: #000000; line-height: 34px; font-weight: normal; font-style: normal; }
		.wb-stl-subtitle ul { list-style-image: url('null'); }
		.wb-stl-heading1 { font: normal bold 34px Arial,Helvetica,sans-serif; text-align: left; text-decoration: none; color: #ffffff; line-height: normal; margin: 0px 0px 0px 0px; padding: 0px 0px 0px 0px; }
		.wb-stl-heading1 a { font: normal bold 34px Arial,Helvetica,sans-serif; text-align: left; text-decoration: none; color: #000000; line-height: normal; font-weight: normal; font-style: normal; }
		.wb-stl-heading1 a:hover { font: normal bold 34px Arial,Helvetica,sans-serif; text-align: left; text-decoration: none; color: #000000; line-height: normal; font-weight: normal; font-style: normal; }
		.wb-stl-heading1 ul { list-style-image: url('null'); }
		.wb-stl-heading2 { font: normal bold 30px Arial,Helvetica,sans-serif; text-align: left; text-decoration: none; color: #ffffff; line-height: normal; margin: 0px 0px 0px 0px; padding: 0px 0px 0px 0px; }
		.wb-stl-heading2 a { font: normal bold 30px Arial,Helvetica,sans-serif; text-align: left; text-decoration: none; color: #000000; line-height: normal; font-weight: normal; font-style: normal; }
		.wb-stl-heading2 a:hover { font: normal bold 30px Arial,Helvetica,sans-serif; text-align: left; text-decoration: none; color: #000000; line-height: normal; font-weight: normal; font-style: normal; }
		.wb-stl-heading2 ul { list-style-image: url('null'); }
		.wb-stl-heading3 { font: normal bold 20px Arial,Helvetica,sans-serif; text-align: left; text-decoration: none; color: #ffffff; line-height: normal; margin: 0px 0px 0px 0px; padding: 0px 0px 0px 0px; }
		.wb-stl-heading3 a { font: normal bold 20px Arial,Helvetica,sans-serif; text-align: left; text-decoration: none; color: #000000; line-height: normal; font-weight: normal; font-style: normal; }
		.wb-stl-heading3 a:hover { font: normal bold 20px Arial,Helvetica,sans-serif; text-align: left; text-decoration: none; color: #000000; line-height: normal; font-weight: normal; font-style: normal; }
		.wb-stl-heading3 ul { list-style-image: url('null'); }
		.wb-stl-normal { font: normal normal 14px Arial,Helvetica,sans-serif; text-align: left; text-decoration: none; color: #ffffff; line-height: 20px; margin: 0px 0px 0px 0px; padding: 0px 0px 0px 0px; }
		.wb-stl-normal a { font: normal normal 14px Arial,Helvetica,sans-serif; text-align: left; text-decoration: none; color: #000000; line-height: 20px; font-weight: bold; font-style: normal; }
		.wb-stl-normal a:hover { font: normal normal 14px Arial,Helvetica,sans-serif; text-align: left; text-decoration: none; color: #4a4a4a; line-height: 20px; font-weight: bold; font-style: normal; }
		.wb-stl-normal ul { list-style-image: url('null'); }
		.wb-stl-highlight { font-size: 12px; background: yellow; }
		.wb-stl-special { font-size: 12px; font-weight: bold; text-decoration: underline; }
		.wb-stl-footer { font: normal normal 12px Arial,Helvetica,sans-serif; text-align: left; text-decoration: none; color: #ffffff; line-height: 20px; margin: 0px 0px 0px 0px; padding: 0px 0px 0px 0px; }
		.wb-stl-footer a { font: normal normal 12px Arial,Helvetica,sans-serif; text-align: left; text-decoration: underline; color: #ffffff; line-height: 20px; font-weight: normal; font-style: normal; }
		.wb-stl-footer a:hover { font: normal normal 12px Arial,Helvetica,sans-serif; text-align: left; text-decoration: none; color: #ffffff; line-height: 20px; font-weight: normal; font-style: normal; }
		.wb-stl-footer ul { list-style-image: url('null'); }
		body, .wb_sbg { min-width: 1007px; }
		#wb_element_instance0 ul { background: #79ff3b none no-repeat scroll left top; border: 1px none #000000; text-align: left; }
		#wb_element_instance0 ul ul { background: transparent none no-repeat scroll left top; }
		#wb_element_instance0 li { margin: 0px 20px 0px 20px; }
		#wb_element_instance0 li a { text-transform: uppercase; border: 0px none #000000; padding: 15px 20px 15px 20px; font: normal bold 14px Arial,Helvetica,sans-serif; text-align: left; text-decoration: none; color: #000000; line-height: 16px; background: transparent none repeat scroll left top; }
		#wb_element_instance0 li a:hover { border: 0px none #000000; font: normal bold 14px Arial,Helvetica,sans-serif; text-align: left; text-decoration: none; color: #1c1c1c; line-height: 16px; background: #ffffff none repeat-x scroll left top; }
		#wb_element_instance0 li.active > a { border: 0px none #000000; font: normal bold 14px Arial,Helvetica,sans-serif; text-align: left; text-decoration: none; color: #050505; line-height: 16px; background: #ffffff none repeat scroll left top; }
	</style>
	<link href="css/site.css?v=1.0.3" rel="stylesheet" type="text/css" />
		
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<script type="text/javascript">
		$(function() {
			$("#wb_element_instance0").children("ul").children().each(function() {
				if ($(this).children("ul").size() == 0) return;
				$(this).hover(function() {
					$(this).children("ul").css({display: "block"});
				}, function() {
					$(this).children("ul").css({display: "none"});
				});
			});
		});
	</script>
	<?php require 'includer.php';?>
</head>
	<body>
		<div class="root" style="width: 1007px;">
			<div class="vbox wb_container" id="wb_header" style='height: 652px; background: transparent url("gallery/<?php echo $imagenPpal;?>") no-repeat scroll center bottom;'>
				<div id="wb_element_instance0" class="wb_element" style="left: 20px; top: 90px; width: 961px; height: 46px; min-width: 961px; min-height: 46px; z-index: 267;">
					<?php require 'menuPpal.php';?>
				</div>
				<div id="wb_element_instance1" class="wb_element" style="left: 39px; top: 23px; width: 580px; height: 43px; min-width: 380px; min-height: 43px; z-index: 63;  line-height: normal;">
					<!-- <h4 class="wb-stl-pagetitle">Mariangeles Blanco Make Up</h4> -->
					<img alt="Mariangeles Blanco Make Up" src="gallery/logonombre.png">
				</div>
				<div id="wb_element_instance2" class="wb_element" style="left: 957px; top: 34px; width: 24px; height: 23px; min-width: 24px; min-height: 23px; z-index: 69;">
					<a href="https://www.facebook.com/mariangelesblanco.makeup" target="_blank"><img alt="" src="gallery/d79712d6d9595f661588582556ae6eec_24x23.png" style="width: 24px; height: 23px;"></a>
				</div>
				<!--
				<div id="wb_element_instance3" class="wb_element" style="left: 923px; top: 34px; width: 24px; height: 23px; min-width: 24px; min-height: 23px; z-index: 70;">
					<a href="http://twitter.com"><img alt="" src="gallery/d8e63c4e3ab13d2207973b945585e20b_24x23.png" style="width: 24px; height: 23px;"></a>
				</div>
				-->
				<div id="wb_element_instance3" class="wb_element" style="left: 723px; top: 34px; width: 24px; height: 23px; min-width: 24px; min-height: 23px; z-index: 70;">
					 <?php 
						 if (!array_key_exists('user', $_SESSION)) {
						 	echo '	
								<form action="validaLogin.php" method="post" id="loginForm" name="loginForm" style="width:230px;height:40px;">
									<input name = "user"   type="text" style="width:150px;height:10px;" placeholder="Usuario">
									<input name = "submit" type="submit" value="Entrar">
									<input name = "psw"    type="password" style="width:150px;" placeholder="Password">
								</form>';
						 }else{
						 	echo 'Bienvenida '.$_SESSION['user'].'(<a href="logout.php" target="_self" title="Salir">Salir</a>)';
						 }
					?>
				</div>
				<div id="wb_element_instance18" class="wb_element" style="left: 23px; top: 169px; width: 923px; height: 68px; min-width: 923px; min-height: 68px; z-index: 44;  line-height: normal;">
					<h5 class="wb-stl-subtitle"><? echo $TituloHome;?></h5>
				</div>
			</div>
			<div class="vbox wb_container" id="wb_main" style="background: transparent none repeat-x scroll center bottom; padding: 0 0 70px 0; border: 0px solid #FF0000;">
				<div id="wb_element_instance4" class="wb_element" style="left: 20px; top: 30px; width: 314px; height: 535px; min-width: 314px; min-height: 443px; z-index: 46;  line-height: normal;">
					<h2 class="wb-stl-heading2">Mis servicios</h2>
					<div id="wb_element_instance9" class="wb_element" style="left: 190px; top: 20px; width: 122px; height: 8px; min-width: 122px; min-height: 8px; z-index: 56;">
						<div style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 1px 0 0 0; width: 100%; height: 1px; left: 0; top: 50%; border-top: 3px solid #7afb3a;"></div>
					</div>
					
					<? echo $misservicios;?>
					
				</div>
				<div style="position:relative; left: 400px; top: 30px; width: 580px; height: 535px; min-width: 314px; min-height: 443px; z-index: 46;  line-height: normal; border: 0px solid #7afb3a;">
					<h2 class="wb-stl-heading2">Mis trabajos</h2>
					<div style="position:relative; left: 180px; top: -10px; font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none;  margin: 1px 0 0 0; width: 400px; height: 1px; border-top: 3px solid #7afb3a;"></div>
					<table border = 0 width = 580 >
						<? echo $misTrabajos;?>
					</table>					
				</div>
			</div>
			<?php require 'footer.php';?>
			<!-- <div class="wb_sbg" style="min-height: 1625px;"></div> -->
		</div>
	</body>
</html>