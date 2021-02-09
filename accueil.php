<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Base de données de H2038</title>
		<meta name="description" content="A sidebar menu as seen on the Google Nexus 7 website" />
		<meta name="keywords" content="google nexus 7 menu, css transitions, sidebar, side menu, slide out menu" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />

	</head>
	<body>
		<div class="container">
			<ul id="gn-menu" class="gn-menu-main">
				<li class="gn-trigger">
					<a class="gn-icon gn-icon-menu"><span>Menu</span></a>   
				<nav class="gn-menu-wrapper">
						<div class="gn-scroller">
							<ul class="gn-menu">
								<img src="images/logo_daradji.jpg" alt="" class="imlogo">
								<li><a href="accueil.php">Dashboard</a></li>
								<li><a >Gestion des Daara</a></li>
								<li><a >Gestion des Membres</a></li>
								<li><a >Gestion des Cotisations</a></li>
							    <li><a >Gestion des Users</a></li>
								
							</ul>
						</div><!-- /gn-scroller -->
					</nav>
				</li>			
				<li><a class="codrops-icon codrops-icon-prev" href=""><span>Previous</span></a></li>
				<li><a  href="logout.php"><span>Déconnexion</span></a></li>
			</ul>
			<header>
				<button type="button" class="btn-dsh btn-secondary btn-lg">Nombre de Daaras :</button>
				<button type="button" class="btn-dsh btn-secondary btn-lg">Nombre de membres :</button>
				<button type="button" class="btn-dsh btn-secondary btn-lg">Membre à jour :</button>
				<button type="button" class="btn-dsh btn-secondary btn-lg">Membre en activités :</button>				
			</header>
		</div><!-- /container -->
		<script src="js/classie.js"></script>
		<script src="js/gnmenu.js"></script>
		<script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		</script>
	</body>
</html>
