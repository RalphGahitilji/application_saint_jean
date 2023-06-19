<?php

	//On demarre la session php
	session_start();

    //on verifie si le formumaire a ete envoye
    if (!empty($_POST)){
        //Le formulaire a ete envoye
        //On verifie que tous les champs requis sont remplis
        if(isset($_POST["email"], $_POST["password"]) 
		&& !empty($_POST["email"]) && !empty($_POST["password"])
		){
			//on verifie que l'email en est un
			if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
				die("ce n'est pas un email");
			}

			// on se connecte a la bdd
			require_once "db.php";

			$sql = "SELECT * FROM `admin` WHERE `email` = :email";

			$query = $connexion->prepare($sql);

			$query->bindValue(":email", $_POST["email"], PDO::PARAM_STR);

			$query->execute();

			$admin = $query->fetch();
				//si $user est un false affiche die
				if(!$admin){
					die("l'utilisateur et/ou le mot de passe est incorrect");
				// 	//46 min 04second
				}
				//Ici on a un user existant, on peut verifier le mot de passe
				if(!password_verify($_POST["password"], $admin["password"])){
				 	die("l'utilisateur et/ou le mot de passe est incorrect");
				}

			//Ici l'utilisateur et le mot de passe sont corrects
			//on va pouvoir "connecter " l'utilisateur
			//On demarre la session php
			session_start();

			//On va stocke dans $_SESSIon les informations de l'utilisateur
			$_SESSION["user"] = [
				"id" => $admin["id"],
				"pseudo" => $admin["adminname"],
				"email" => $admin["email"],
			];
			var_dump($_SESSION);

			//on redirige vers la page de profiles (par exemple)
			header("Location: profils.php");

		}
    }
    ?>
