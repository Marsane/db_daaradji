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
		<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> -->

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
			    <div class="tformulaire">
					<h1>Ajout d'un membre</h1>
				</div>	
				<div class="form">
					<form method="post" action="c_members.php" class="formrow">
						
						<div class="col-md-6">	
							Prénom : <input type="text" name="prenom" placeholder="Entrer le prénom" required="" class="form-control"/<br />
						</div>
						<div class="col-md-6">
							Nom : <input type="text" name="nom" placeholder="Entrer le nom" required="" class="form-control"/><br />
                        </div>						
						<div class="col-md-6">
							<!-- Daara : <input type="text" name="daara" placeholder="Selectionner le Daara" required="" class="form-control"/><br /> -->
							Daara : <select name="daara" class="form-selectt">
										<option value="Thies">Thiès</option>
										<option value="Parcelles">Parcelles</option>
										<option value="Fass">Fass</option>
										<option value="Keur Massar">Keur Massar</option>
									</select>
						</div>
						<div class="col-md-6">
							Matricule : <input type="text" name="matricule" placeholder="Entrez le matricule" class="form-control"/><br />
						</div>
						<div class="col-md-6">	
							<!--Sexe : <input type="text" name="sexe" placeholder="Selectionner le Sexe" required="" class="form-control"/><br /> -->
							Sexe : <br />
								<input type="radio" name="sexe" value="masculin" id="Masculin" checked="checked" class="form-check-input"/> <label for="oui">Masculin</label>
								<input type="radio" name="sexe" value="feminin" id="Feminin" class="form-check-input"/> <label for="non">Feminin</label>
						</div>
						<div class="col-md-6">	
							Date de naissance : <input type="date" name="date_naissance" placeholder="Entrer la date de naissance" class="form-control" /><br />
						</div>
						<div class="col-md-6">	
							Lieu de naissance : <input type="text" name="lieu_naissance" placeholder="Entrer le lieu de naissance" class="form-control" /><br />
						</div>
						<div class="col-md-6">	
							Adresse : <input type="text" name="adresse" placeholder="Entrer l'adresse" class="form-control"/><br />
						</div>
						<div class="col-md-6">
							Situation matrimoniale : 
													<select name="sit_matrimoniale" class="form-selectt">
														<option value="Celibataire">Célibataire</option>
														<option value="Marier">Marié</option>												
													</select>
							
							
							<!-- <input type="text" name="sit_matrimoniale" placeholder="Selectionner la situation matrimoniale" required="" class="form-control"/><br /> -->
						</div>
						<div class="col-md-6">
							Téléphone : <input type="text" name="telephone" placeholder="Entrer le Numéro de téléphone"  class="form-control"/><br />
						</div>
						<div class="col-md-6">
							Numéro CIN : <input type="text" name="cin" placeholder="Entrer le Numéro CIN" class="form-control"/><br />
						</div>
						<div class="col-md-6">
							Adresse Email : <input type="email" name="email" placeholder="Entrer l'Email" class="form-control"/><br />
						</div>
						
						<div class="col-md-6">
							Profession : <input type="text" name="profession" placeholder="Entrer la profession" class="form-control"/><br />
						</div>
						<div class="col-md-6">
							Niveau d'Etude : <input type="text" name="niveau_etude" placeholder="Niveau d'Etude" class="form-control"/><br />
						</div>
						<div class="col-md-6">
							Diplomes et/ou certificats : <input type="text" name="diplome" placeholder="Entrer le Diplomes et/ou certificats" class="form-control"/><br />
						</div>
						<div class="col-md-6">
							En activité : <br />
										<input type="radio" name="activite" value="oui" id="oui" checked="checked" class="form-check-input"/><label for="oui">Oui</label>
								<input type="radio" name="activite" value="non" id="non" class="form-check-input"/> <label for="non">Non</label>
							<!-- <input type="text" name="activite" placeholder="Oui / Non" class="form-control"/><br /> -->
						</div>
						<div class="col-md-6">
							Fonction : <input type="text" name="fonction" placeholder="Entrer la fonction" class="form-control"/><br />
						</div>
						<div class="col-md-6">
							Connaissance en Arabe : 
												   <select name="arabe" class="form-selectt" >
														<option value="Aucune">Aucune</option>
														<option value="Lu">Lu</option>
														<option value="Ecrit">Ecrit</option>
													</select><br />
							<!-- <input type="text" name="arabe" placeholder="Connaisance en Arabe" class="form-control"/><br /> -->
						</div>
						<div class="col-md-6">
							Connaissance Coranique : 
													<select name="coranique" class="form-selectt" >
														<option value="Excellent">Excellent</option>
														<option value="T.Bien">T.Bien</option>
														<option value="Bien">Bien</option>
														<option value="Moyen">Moyen</option>
														<option value="Faible">Faible</option>
													</select><br />
							<!-- <input type="text" name="coranique" placeholder="Connaisance Coranique" class="form-control"/><br /> -->
						</div>
						<div class="col-md-6">
							Xam sa Diné : 
										<select name="dine" class="form-selectt" >
											<option value="Excellent">Excellent</option>
											<option value="Très Bien">Très Bien</option>
											<option value="Bien">Bien</option>
											<option value="Moyen">Moyen</option>
											<option value="Faible">Faible</option>
										</select><br />
							<!-- <input type="text" name="dine" placeholder="Xam sa Diné" class="form-control"/><br /> -->
						</div>
						<div class="col-md-6">
							Khassaide : 
										<select name="khassaide" class="form-selectt" >
											<option value="Excellent">Excellent</option>
											<option value="Très Bien">Très Bien</option>
											<option value="Bien">Bien</option>
											<option value="Moyen">Moyen</option>
											<option value="Faible">Faible</option>
										</select><br />	<br /> 									
							<!-- <input type="text" name="khassaide" placeholder="Niveau sur les Khassaide" class="form-control"/><br /> -->
						</div>
						<div class="col-6">	
					    <input type="submit" value="Submit" class="btn btn-primary"/>
						</div>
					</form>
				</div>
			</header>
			
		</div><!-- /container -->
		
	</body>
</html>
