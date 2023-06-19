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
        .button {
            /*  */
            width: 200px;
        }
    </style>
</head>

<body>
    <?php
    include 'header.php';
    ?>

    <div class="row">
        <div class="col-md-5">
            <a href="secretaire.php">
                <button class="button" name="submit" id="submit">Ajouter un admistrateur</button>
            </a>
        </div>
        <div class="col-md-5">
            <a href="parent.php">
                <button class="button" name="submit" id="submit">inscrire un parent </button>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-5">
            <a href="eleve.php">
                <button class="button" name="submit" id="submit">inscrire un elève</button>
            </a>
        </div>
        <div class="col-md-5">
            <a href="moyenne.php">
                <button class="button" name="submit" id="submit">Ajouter la moyenne d'un elève</button>
            </a>
        </div>
        <?php
        include 'footer.php';
        ?>

        <script src="../script/cdnjs.cloudflare.com_ajax_libs_jquery_3.1.1_jquery.min.js"></script>
        <script src="../style/bootstrap-5.2.3-dist/js/bootstrap.min.js"></script>
        <script src="../script/script.js"></script>
</body>

</html>