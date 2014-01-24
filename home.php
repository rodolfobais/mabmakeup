<?php 
require 'libs/funciones.class.php';
$fn = new funciones('admin/');
$TituloHome = $fn->getParametro('TituloHome');
$_SESSION['page'] = 'home.php'
// die;
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Home</title>
	<base href="http://mablancomakeup.com.ar/" />
	<meta name="viewport" content="width=1005" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
		<meta name="generator" content="Zyro Web Site Builder" />
	
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
</head>
	<body>
		<div class="root" style="width: 1007px; height: 1625px;">
			<div class="vbox wb_container" id="wb_header" style='height: 652px; background: transparent url("gallery/0a1f813cfe8ce5edfdd57e4f518a62fb.jpg") no-repeat scroll center bottom;'>
				<div id="wb_element_instance0" class="wb_element" style="left: 20px; top: 90px; width: 961px; height: 46px; min-width: 961px; min-height: 46px; z-index: 267;">
					
					<?php require 'menuPpal.php';?>
				</div>
				<div id="wb_element_instance1" class="wb_element" style="left: 39px; top: 23px; width: 580px; height: 43px; min-width: 380px; min-height: 43px; z-index: 63;  line-height: normal;">
					<h4 class="wb-stl-pagetitle">Maria Angeles Blanco MakeUp</h4>
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
					<input type = "text" placeholder = "Usuario">
					<input type = "password" placeholder = "Password">
				</div>
				<div id="wb_element_instance18" class="wb_element" style="left: 23px; top: 169px; width: 923px; height: 68px; min-width: 923px; min-height: 68px; z-index: 44;  line-height: normal;">
					<h5 class="wb-stl-subtitle"><? echo $TituloHome;?></h5>
				</div>
			</div>
			<div class="vbox wb_container" id="wb_main" style="height: 833px; background: transparent none repeat-x scroll center bottom; padding: 0 0 70px 0;">
				<div id="wb_element_instance4" class="wb_element" style="left: 20px; top: 377px; width: 314px; height: 443px; min-width: 314px; min-height: 443px; z-index: 46;  line-height: normal;">
					<h2 class="wb-stl-heading2">Twitter feed</h2>
					<p class="wb-stl-normal"> </p>
					<p class="wb-stl-normal">2013 01 25</p>
					<p class="wb-stl-normal"><a href="Sobre-mi/">Ut wisi enim ad minim veniam,<br>
					quis nostrud exercitation</a></p>
					<p class="wb-stl-normal"> </p>
					<p class="wb-stl-normal">2013 01 15</p>
					<p class="wb-stl-normal"><a href="Sobre-mi/">Nam liber tempor cum soluta<br>
					nobis eleifend option congue nihil</a></p>
					<p class="wb-stl-normal"> </p>
					<p class="wb-stl-normal">2013 01 25</p>
					<p class="wb-stl-normal"><a href="Sobre-mi/">Ut wisi enim ad minim veniam,<br>
					quis nostrud exercitation</a></p>
					<p class="wb-stl-normal"> </p>
					<p class="wb-stl-normal">2013 01 15</p>
					<p class="wb-stl-normal"><a href="Sobre-mi/">Nam liber tempor cum soluta<br>
					nobis eleifend option congue nihil</a></p>
					<p> </p>
					<p class="wb-stl-normal">2013 01 15</p>
					<p class="wb-stl-normal"><a href="Sobre-mi/">Nam liber tempor cum soluta<br>
					nobis eleifend option congue nihil</a></p>
				</div>
				<div id="wb_element_instance5" class="wb_element" style="left: 349px; top: 443px; width: 120px; height: 120px; min-width: 120px; min-height: 120px; z-index: 52;">
					<img alt="" src="gallery/1494b05e8bf8751cdf473874350a6cb7_120x120.jpg" style="width: 120px; height: 120px;">
				</div>
				<div id="wb_element_instance6" class="wb_element" style="left: 349px; top: 580px; width: 120px; height: 120px; min-width: 120px; min-height: 120px; z-index: 53;">
					<img alt="" src="gallery/b6906e8d4d46223fb50e9646cc4d4426_120x120.jpg" style="width: 120px; height: 120px;">
				</div>
				<div id="wb_element_instance7" class="wb_element" style="left: 349px; top: 716px; width: 120px; height: 117px; min-width: 120px; min-height: 117px; z-index: 54;">
					<img alt="" src="gallery/0ccb6ff15783bcbd122c0184e1fe0eab_120x117.jpg" style="width: 120px; height: 117px;">
				</div>
				<div id="wb_element_instance8" class="wb_element" style="left: 349px; top: 377px; width: 103px; height: 36px; min-width: 103px; min-height: 36px; z-index: 55;  line-height: normal;">
					<h2 class="wb-stl-heading2">News</h2>
				</div>
				<div id="wb_element_instance9" class="wb_element" style="left: 197px; top: 397px; width: 122px; height: 8px; min-width: 122px; min-height: 8px; z-index: 56;">
					<div style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 1px 0 0 0; width: 100%; height: 1px; left: 0; top: 50%; border-top: 3px solid #7afb3a;"></div>
				</div>
				<div id="wb_element_instance10" class="wb_element" style="left: 439px; top: 397px; width: 466px; height: 7px; min-width: 466px; min-height: 7px; z-index: 57;">
					<div style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 1px 0 0 0; width: 100%; height: 1px; left: 0; top: 50%; border-top: 3px solid #7afb3a;"></div>
				</div>
				<div id="wb_element_instance11" class="wb_element" style="left: 925px; top: 392px; width: 64px; height: 24px; min-width: 64px; min-height: 24px; z-index: 58;  line-height: normal;">
					<p class="wb-stl-normal"><a href="Sobre-mi/">Archive</a></p>
				</div>
				<div id="wb_element_instance12" class="wb_element" style="left: 20px; top: 480px; width: 305px; height: 37px; min-width: 305px; min-height: 37px; z-index: 59;">
					<div style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 1px 0 0 0; width: 100%; height: 1px; left: 0; top: 50%; border-top: 1px solid #7afb3a;"></div>
				</div>
				<div id="wb_element_instance13" class="wb_element" style="left: 18px; top: 564px; width: 305px; height: 37px; min-width: 305px; min-height: 37px; z-index: 61;">
					<div style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 1px 0 0 0; width: 100%; height: 1px; left: 0; top: 50%; border-top: 1px solid #7afb3a;"></div>
				</div>
				<div id="wb_element_instance14" class="wb_element" style="left: 20px; top: 645px; width: 305px; height: 37px; min-width: 305px; min-height: 37px; z-index: 62;">
					<div style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 1px 0 0 0; width: 100%; height: 1px; left: 0; top: 50%; border-top: 1px solid #7afb3a;"></div>
				</div>
				<div id="wb_element_instance15" class="wb_element" style="left: 20px; top: 728px; width: 305px; height: 37px; min-width: 305px; min-height: 37px; z-index: 63;">
					<div style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 1px 0 0 0; width: 100%; height: 1px; left: 0; top: 50%; border-top: 1px solid #7afb3a;"></div>
				</div>
				<div id="wb_element_instance16" class="wb_element" style="left: 486px; top: 443px; width: 488px; height: 380px; min-width: 488px; min-height: 380px; z-index: 64;  line-height: normal;">
					<p class="wb-stl-normal">2013 01 20</p>
					<p class="wb-stl-normal"><a href="Sobre-mi/">Ut wisi enim ad minim veniam, quis nostrud exercitation vel illum dolore eu feugiat nulla facilisis</a><br>
					Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros</p>
					<p class="wb-stl-normal"> </p>
					<p class="wb-stl-normal"> </p>
					<p class="wb-stl-normal">2013 01 19</p>
					<p class="wb-stl-normal"><a href="Sobre-mi/">Nam liber tempor cum soluta nobis eleifend option congue nihil. Claritas est etiam processus dynamicus, qui sequitur mutationem.</a><br>
					Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros</p>
					<p class="wb-stl-normal"> </p>
					<p class="wb-stl-normal"> </p>
					<p class="wb-stl-normal">2013 01 17</p>
					<p class="wb-stl-normal"><a href="Sobre-mi/">Claritas est etiam processus dynamicus, qui sequitur mutationem</a><br>
					Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros. Claritas est etiam processus dynamicus, qui sequitur mutationem.</p>
				</div>
				<div id="wb_element_instance19" class="wb_element" style="left: 211px; top: 63px; width: 691px; height: 8px; min-width: 691px; min-height: 8px; z-index: 39;">
					<div style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 1px 0 0 0; width: 100%; height: 1px; left: 0; top: 50%; border-top: 3px solid #7afb3a;"></div>
				</div>
				<div id="wb_element_instance20" class="wb_element" style="left: 20px; top: 112px; width: 300px; height: 220px; min-width: 300px; min-height: 220px; z-index: 41;">
					<img alt="" src="gallery/3c0db25f8c23bdee038aa1dd2395018d_300x220.jpg" style="width: 300px; height: 220px;">
				</div>
				<div id="wb_element_instance21" class="wb_element" style="left: 20px; top: 39px; width: 206px; height: 41px; min-width: 206px; min-height: 41px; z-index: 42;  line-height: normal;">
					<h1 class="wb-stl-heading1">Last news</h1>
				</div>
				<div id="wb_element_instance22" class="wb_element" style="left: 351px; top: 112px; width: 300px; height: 220px; min-width: 300px; min-height: 220px; z-index: 43;">
					<img alt="" src="gallery/dc0af38d35427a71bda3b2da5bb1e904_300x220.jpg" style="width: 300px; height: 220px;">
				</div>
				<div id="wb_element_instance23" class="wb_element" style="left: 681px; top: 112px; width: 300px; height: 220px; min-width: 300px; min-height: 220px; z-index: 45;">
					<img alt="" src="gallery/b3eb7235a8d3b14684a74516cf746951_300x220.jpg" style="width: 300px; height: 220px;">
				</div>
				<div id="wb_element_instance24" class="wb_element" style="left: 924px; top: 56px; width: 64px; height: 24px; min-width: 64px; min-height: 24px; z-index: 46;  line-height: normal;">
					<p class="wb-stl-normal"><a href="Sobre-mi/">Archive</a></p>
				</div>
				<div id="wb_element_instance25" class="wb_element" style="left: 0px; top: 853px; min-width: 0px; min-height: 0px; z-index: 9000; width: 100%;">
					<?php
						global $show_comments;
						if (isset($show_comments) && $show_comments) {
							renderComments(1);
					?>
					<script type="text/javascript">
						$(function() {
							var block = $("#wb_element_instance25");
							var comments = block.children(".wb_comments").eq(0);
							var contentBlock = $("#wb_main");
							contentBlock.height(contentBlock.height() + comments.height());
						});
					</script>
					<?php
						} else {
					?>
					<script type="text/javascript">
						$(function() {
							$("#wb_element_instance25").hide();
						});
					</script>
					<?php
						}
					?>
				</div>
			</div>
			<div class="vbox wb_container" id="wb_footer" style="height: 130px; background: #262523 none repeat-x scroll center top;">
				<div id="wb_element_instance17" class="wb_element" style="left: 15px; top: 26px; width: 231px; height: 24px; min-width: 231px; min-height: 24px; z-index: 62;  line-height: normal;">
					<p class="wb-stl-footer">© 2014 <a href="http://mablancomakeup.com.ar">mablancomakeup.com.ar</a></p>
				</div>
				<div id="wb_element_instance26" class="wb_element" style="left: 0px; top: 70px; min-width: 0px; min-height: 0px; z-index: 9999; text-align: center; width: 100%;">
					<div class="wb_footer"></div>
					<script type="text/javascript">
						$(function() {
							var footer = $(".wb_footer");
							var html = (footer.html() + "").replace(/^\s+|\s+$/g, "");
							if (!html) {
								footer.parent().remove();
								footer = $("#wb_footer");
								footer.height(70);
							}
						});
					</script>
				</div>
			</div>
			<div class="wb_sbg" style="min-height: 1625px;"></div>
		</div>
	</body>
</html>