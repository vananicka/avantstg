<?php 
	$serveur="localhost";
	$login="root";
	$pass="";
	$db="formulaire";

$nom=$_POST['nom'];
$pseudo=$_POST['pseudo'];
$email=$_POST['email'];
$pwd=$_POST['password'];

	try{
			$conn=new PDO("mysql:host=$serveur;dbname=$db",$login,$pass);
			$conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

/*--------------- insertion----------------- */
			$requete = $conn -> prepare($sql1);
			$requete -> bindParam(':nom', $nom);
			$requete -> bindParam(':pseudo', $pseudo);
			$requete -> bindParam(':email', $email);
			$requete -> bindParam(':pwd', $pwd);

			$requete -> execute();

			echo "<a href='index.php'>POURSUIVRE LA CONNECTION</a>";

	}
	catch(PDOException $erreur){
			echo "ECHEC : " .$erreur -> getMessage();
	}

 ?>