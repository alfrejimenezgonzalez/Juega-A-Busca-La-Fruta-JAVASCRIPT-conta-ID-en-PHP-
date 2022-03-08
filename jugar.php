<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : Familiar 
Description: A two-column, fixed-width design for 1024x768 screen resolutions.
Version    : 1.0
Released   : 20091206

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
	<div id="logo">
		<h1><a href="#">alfredo</a></h1>
	</div>
	<hr />
	<!-- end #logo -->
	<div id="header">
		<div id="menu">
			<ul>
			
			</ul>
		</div>
		<!-- end #menu -->
		<div id="search">
			<form method="get" action="">
				<fieldset>
				<input type="text" name="s" id="search-text" size="15" />
				<input type="submit" id="search-submit" value="Buscar" />
				</fieldset>
			</form>
		</div>
		<!-- end #search -->
	</div>
	<!-- end #header -->
	<!-- end #header-wrapper -->
	<div id="page">
		<div id="content">
		  <div class="post">
				<h2 class="title"><a href="#">Registrar</a></h2>
				
				<div class="entry">
					<p>
					<!-- *********************************Crea el c—digo aqu’ **************************************-->
					<?php

					$errores = 0;
					$msjError ="";
					if(!isset($_GET["fruta"]) || $_GET["fruta"] == "")
					{
						$errores++;
						$msjError.= " <br/>\n Debe seleccionar una fruta<br/>\n";
					}

					if(!isset($_GET["cantidad"]) || $_GET["cantidad"] == "" || !is_numeric($_GET["cantidad"]) || $_GET["cantidad"] <= 0)
					{
						$errores++;
						$msjError.= "<br/>\n Debe escribir una cantidad y debe ser positiva<br/>\n";
					}
					if ($errores > 0) 
					{
							echo $msjError;
					}
					else 
					{
						$cantidad = $_GET["cantidad"];
						$fruta = $_GET["fruta"];
						$frutas = array("&#127823;", "&#127815;", "&#127825;", "&#127824;", "&#127816;", "&#127826;");
						$contar = 0;
						for($cont=0; $cont < $cantidad; $cont++)
						{
							$Aleatoria = rand(0,5);
							echo $frutas[$Aleatoria].", ";
							if( $fruta == $Aleatoria )
							{
								$contar++;
							}
						}
					echo "<br/> La fruta " . $frutas[$fruta]." se repite ". $contar . " veces<br>\n";
					}

					?>
					</p><p><a href="ejercicio2.php"></a></p>
			</div>
		  </div>
		</div><!-- end #content -->
		<div id="sidebar">
			<ul>
				<li>
					
				</li>
				<li>
					<h2>Men&uacute; principal</h2>
					<ul>
					
					</ul>
				</li>
			</ul>
		</div>
		<!-- end #sidebar -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	<!-- end #page -->
	<div id="footer">
		<p>Copyright (c) 2008 Sitename.com. All rights reserved. Design by <a href="http://www.freecsstemplates.org/">Free CSS Templates</a>.</p>
	</div>
	<!-- end #footer -->
</body>
</html>

				<div class="entry">