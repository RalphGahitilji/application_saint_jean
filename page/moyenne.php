<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/bootstrap-5.2.3-dist/css/bootstrap.min.css">
    <title>gestion des notes</title>
    <style>
        input[type="text"],
        input[type="varchar"],
        input[type="decimal"] {
            font-size: 0.9em;
            color: #fff;
            font-weight: 100;
            width: 94.5%;
            display: block;
            border: none;
            padding: 0.8em;
            border: solid 1px rgba(255, 255, 255, 0.37);
            -webkit-transition: all 0.3s cubic-bezier(0.64, 0.09, 0.08, 1);
            transition: all 0.3s cubic-bezier(0.64, 0.09, 0.08, 1);
            background: -webkit-linear-gradient(top, rgba(255, 255, 255, 0) 96%, #fff 4%);
            background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 96%, #fff 4%);
            background-position: -800px 0;
            background-size: 100%;
            background-repeat: no-repeat;
            color: #fff;
            font-family: "Roboto", sans-serif;
        }

        .main-w3layouts {
            background-color: #292664;
            width: 40%;
            margin: 3em auto;
            padding: 1cm 2cm;
        }

        h1 {
            color: #fff;
            text-align: center;
        }

        label {
            color: #fff;
        }

        .button {
            margin: 0em 0.1em;
        }
    </style>
</head>

<body>
    <?php
    include 'header.php';
    ?>

    <div class="main-w3layouts wrapper">
        <h1>Insérer une moyenne</h1>
        <div class="main-agileinfo">
            <div class="agileits-top">
                <form action="" method="post" id="Myform">

                    <label for="text">Nom</label><br>
                    <input class="text" type="text" name="nom" placeholder="Nom" required=""><br><br>

                    <label for="text">Prenom</label><br>
                    <input class="text" type="text" name="prenom" placeholder="Prenom" required=""><br><br>

                    <label for="varchar">Classe</label><br>
                    <input class="text" type="text" name="class" placeholder="classe" required=""><br><br>

                    <label for="text">Moyenne de l'élève</label><br>
                    <input class="text w3lpass" type="decimal" name="note" placeholder="Insséré la moyenne de l'élève" required=""><br>


                    <button type="submit" name="submit" class="button bg-primary">Inscrire</button>
                </form>
            </div>
        </div>
    </div>
    <?php
    include 'footer.php';
    ?>
    <script src="../script/cdnjs.cloudflare.com_ajax_libs_jquery_3.1.1_jquery.min.js">
    </script>
    <script src="../style/bootstrap-5.2.3-dist/js/bootstrap.min.js"></script>
    <script src="../script/script.js"></script>
</body>

</html>

<?php

if (isset($_POST['submit'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $prenom = $_POST['class'];
    $note = $_POST['note'];

    include('bd.php');
    try {

        $sql = "INSERT INTO moyenne (nom, prenom, class, note) VALUES (:nom, :prenom, :class, :note)";
        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':prenom', $prenom);
        $stmt->bindParam(':class', $class);
        $stmt->bindParam(':note', $note);
        $stmt->execute();

        // $success = true;
        // header("Location: ./admistrateur.php");
        // exit();
    } catch (PDOException $e) {

        die('Erreur : ' . $e->getMessage());
    }

    echo "Successful";
}
?>