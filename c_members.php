<?php
   require('config.php');
 // Vérifie qu'il provient d'un formulaire
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //identifiants mysql
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "bd_daaradji";
    
    $prenom = $_POST["prenom"]; 
    $nom = $_POST["nom"];
	$daara = $_POST["daara"];
	$matricule = $_POST["matricule"];
	$sexe = $_POST['sexe'];
    $date_naissance = $_POST['date_naissance'];
    $lieu_naissance = $_POST['lieu_naissance'];
    $adresse = $_POST['adresse'];
    $sit_matrimoniale = $_POST['sit_matrimoniale'];
    $telephone = $_POST['telephone'];
    $cin = $_POST['cin'];
    $email = $_POST['email'];
    $profession = $_POST['profession'];
    $niveau_etude = $_POST['niveau_etude'];
    $diplome = $_POST['diplome'];
    $activite = $_POST['activite'];
    $fonction = $_POST['fonction'];
    $arabe = $_POST['arabe'];
    $coranique = $_POST['coranique'];
    $khassaide = $_POST['khassaide'];
	$dine = $_POST['dine'];
	

    if (!isset($prenom)){
      die("S'il vous plaît entrez votre prenom");
    }
	if (!isset($nom)){
      die("S'il vous plaît entrez votre nom");
    }
    if (!isset($daara)) {
      die("S'il vous plaît entrez votre adresse daara");
    }  
    //Ouvrir une nouvelle connexion au serveur MySQL
    $mysqli = new mysqli($host, $username, $password, $database);
    
    //Afficher toute erreur de connexion
    if ($mysqli->connect_error) {
      die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
    }  
    
    //préparer la requête d'insertion SQL
    $statement = $mysqli->prepare("INSERT INTO membres (prenom, nom, daara, matricule, sexe, date_naissance, lieu_naissance, adresse, sit_matrimoniale, telephone, cin, email, profession, niveau_etude, diplome, activite, fonction, arabe, coranique, khassaide, dine) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)"); 
    //Associer les valeurs et exécuter la requête d'insertion
    $statement->bind_param('sssssssssssssssssssss', $prenom, $nom, $daara, $matricule, $sexe, $date_naissance, $lieu_naissance, $adresse, $sit_matrimoniale, $telephone, $cin, $email, $profession, $niveau_etude, $diplome, $activite, $fonction, $arabe, $coranique, $khassaide, $dine); 
    
    if($statement->execute()){
      print "Salut " . $prenom . "!, votre Daara est ". $daara;
    }else{
      print $mysqli->error; 
    }
  }
?>