<?php
	//On demarre la session php
	session_start();
			require_once "db.php";
			$connexion = new PDO($dsn, $user, $password, $options);

    //on verifie si le formumaire a ete envoye
    if (!empty($_POST)){
        //Le formulaire a ete envoye
        //On verifie que tous les champs requis sont remplis
        if(isset($_POST["username"], $_POST["email"], $_POST["pass"], $_POST["pass2"]) 
		&& !empty($_POST["username"]) && !empty($_POST["email"]) && !empty($_POST["pass"]) && !empty($_POST["pass2"])
		){
			//le formulaire est complet	
			//On recupere les donnees en les protegeant pour eviter les probleme avec le crosaid crypting css 
			$username = strip_tags($_POST["username"]);

			//verifier si l'email est vraiment un email
			if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
				die("L'adresse email est incorrecte");
			}
			//on verifie que les deux mots de passe saisies sont identiques
			if($_POST["pass"] != $_POST["pass2"]){
				die("La confirmation est différentes !");
			}
			//on va hasher le mot de passe (cest le transformer en un echaine de caractere qui ne peut pas retourner our trouver le mot de passe)
			$pass = password_hash($_POST["pass"], PASSWORD_ARGON2ID);
			//on enregistre en base de donnee
			
			$sql="INSERT INTO `admin`(`adminname`, `email`, `password`) 
			VALUES (:username,:email,'$pass')";

			$query = $connexion->prepare($sql);

			$query->bindValue(":username", $username, PDO::PARAM_STR);
			$query->bindValue(":email", $_POST["email"], PDO::PARAM_STR);

			$query->execute();

			//On recupere l'id du nouvelle utilisateur
			$id = $connexion->lastInsertId();

			//on connectera l'utilisateur


						//On va stocke dans $_SESSIon les informations de l'utilisateur
						$_SESSION["admin"] = [
							"id" => $id,
							"pseudo" => $pseudo,
							"email" => $_POST["email"],
						];
						var_dump($_SESSION);
			
						//on redirige vers la page de profiles (par exemple)
						header("Location: profils.php");
			
		}else{
			die("Le formulaire est incomplet");
			}
    }
    ?>
