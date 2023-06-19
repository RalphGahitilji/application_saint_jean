<?php
    $servername = "localhost";  // Nom du serveur MySQL
    $user = "root";  // Nom d'utilisateur MySQL
    $password = "";  // Mot de passe MySQL
    $dbname = "trinome";  // Nom de la base de données

    $dsn = "mysql:host=localhost;dbname=trinome;charset=utf8mb4";
    $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_EMULATE_PREPARES => false];
    try {
        $connexion = new PDO($dsn, $user, $password, $options);

    } catch (PDOException $e) {
        die("Erreur de connexion à la base de données : " . $e->getMessage());
      }

?>