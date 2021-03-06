<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Comici</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="../map_comici/css/leaflet-beautify-marker-icon.css" type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<div class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="logo">
			<img src="./images/copyleft.png" id="logonav" alt="logo"/>
		</div>
		<ul class="nav navbar-nav">
			<li class="dropdown-toggle" id="axeculture"><a href="#titre-culture">Culture/Evènements</a></li>
			<li class="dropdown-toggle" id="axeinitiatives"><a href="#titre-initiatives">Initiatives locales</a></li>
			<li class="dropdown-toggle" id="axepatrimoine"><a href="#titre-patrimoine">Patrimoine</a></li>
			<li class="dropdown-toggle" id="login"><a href="admin/login.php">Connexion</a></li>
		</ul>
	</div>

	<!-- sidebar gauche-->

	<nav class='sidebar sidebar-menu-collapsed flexpos'>
		<ul>
			<li class='active'>
				<a class='expandable' href='#' title='Recherche'>
					<span class='glyphicon glyphicon-search'></span>
				</a>
			</li>
			<li>
				<a class='expandable' href='#carte' title='Carte'>
					<span class='glyphicon glyphicon-map-marker'></span>
				</a>
			</li>
			<li>
				<a class='expandable' href='#' title='Langue'>
					<span class='glyphicon glyphicon-flag'></span>
				</a>
			</li>
			<li>
				<div class="emty"></div>
			</li>
		</ul>
	</nav>

	<!-- fin sidebar gauche -->


	<div id="carousel" class="carousel slide background" data-ride="carousel">
		<ol class="carousel-indicators">
			<div class="logo">
				<img src="images/copyleft.png" id="logo" alt="logo"/>
			</div>
			<li data-target="#carousel" data-slide-to="0"></li>
			<li data-target="#carousel" data-slide-to="1"></li>
			<li data-target="#carousel" data-slide-to="2"></li>
		</ol>
		<!-- Slides -->
		<div class="carousel-inner">
			<!-- Page 1 -->
			<div class="item active">
				<div class="carousel-page">
					<img src="images/landscape.jpg" class="img-responsive"  alt="image1"/>
				</div>
				<div class="carousel-caption">1</div>
			</div>
			<!-- Page 2 -->
			<div class="item">
				<div class="carousel-page">
					<img src="images/landscape.jpg" class="img-responsive" alt="image2"   />
				</div>
				<div class="carousel-caption">2</div>
			</div>
			<!-- Page 3 -->
			<div class="item">
				<div class="carousel-page">
					<img src="images/landscape.jpg" class="img-responsive" alt="image3" />
				</div>
				<div class="carousel-caption">3</div>
			</div>
		</div>
		<!-- Contrôles -->
		<a class="left carousel-control" href="#carousel" data-slide="prev">
			<span class="icon-prev"></span>
		</a>
		<a class="right carousel-control" href="#carousel" data-slide="next">
			<span class="icon-next"></span>
		</a>
	</div>

	<div class="content">
		<h2 id="titre-carte">Carte</h2>
		<div id="carte">
			<?php include ('map_comici/map.php'); ?>
		</div>
		<h2 id="titre-culture">Culture</h2>
		<div class="row">
			<div class="container">
				<div id="culture">
					<div class="col-md-6 col-s-8">
						<a href="http://placeholder.com"><img src="http://via.placeholder.com/450x200" alt="placeholder"></a>
					</div>
					<div class="container col-md-6 col-s-4">
						Culture ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <br>
						n voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</div>
				</div>
			</div>
		</div>
		<h2 id="titre-initiatives">Initatives</h2>
		<div class="row desktop" id="three">
			<div id="initiatives">
				<div class="container col-md-6">
					<a href="http://placeholder.com"><img src="http://via.placeholder.com/450x200" alt="placeholder"></a>
				</div>
				<div class="container col-md-6">
					Culture ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <br>
					n voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</div>
			</div>
		</div>
		<h2 id="titre-patrimoine">Patrimoine</h2>
		<div class="row desktop" id="four">
			<div id="patrimoine">
				<div class="container col-md-6">
					<a href="http://placeholder.com"><img src="http://via.placeholder.com/450x200" alt="placeholder"></a>
				</div>
				<div class="container col-md-6">
					Culture ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <br>
					n voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</div>
			</div>
		</div>
	</div>
	<!-- footer -->
	<hr>
	<div class="container footer">
		<div class="row">
			<div class="col-xs-3">
				<div class="foot-header">Liens utiles</div>
				<div>
					<ul>
						<li>1</li>
						<li>2</li>
						<li>3</li>
						<li>4</li>
					</ul>
				</div>
			</div>
			<div class="col-xs-3">
				<div class="foot-header"> Nos partenaires </div>
				<div>
					<ul>
						<li>1</li>
						<li>2</li>
						<li>3</li>
						<li>4</li>
					</ul>
				</div>
			</div>
			<div class="col-xs-3">
				Nous contacter
			</div>
			<div class="col-xs-3">
				<div class="foot-header"> Plan du site </div>
				<div>
					<ul>
						<li>Carte</li>
						<li>Culture/évènements</li>
						<li>Initatives locales</li>
						<li>Patrimoine</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- fin footer -->
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	<script type='text/javascript' src="http://rawgit.com/jasonday/jQuery-UI-Dialog-extended/master/jquery.dialogOptions.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type='text/javascript' src="https://unpkg.com/leaflet-responsive-popup@0.2.0/leaflet.responsive.popup.js"></script>
	<script type='text/javascript' src="https://unpkg.com/leaflet-easybutton@2.0.0/src/easy-button.js"></script>
	<script type='text/javascript' src="/map_comici/js/leaflet-beautify-marker-icon.js"></script>
	<script type='text/javascript' src="../map_comici/js/leaflet-beautify-marker.js"></script>
	<!-- Unite gallery -->
	<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/unitegallery/1.7.40/js/unitegallery.min.js'></script>
	<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/unitegallery/1.7.40/themes/tilesgrid/ug-theme-tilesgrid.min.js'></script>
	<script type="text/javascript" src="js/app.js"></script>
</body>
</html>
