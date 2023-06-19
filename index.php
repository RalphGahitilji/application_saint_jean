<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/bootstrap-5.2.3-dist/css/bootstrap.min.css">
    <title>gestion des notes</title>
    <style>
        .header {
            padding: 15px 0px;
            background-color: #292664;
            color: #fff;
            margin-bottom: 50px;
        }

        .header h1 {
            text-align: right;
            padding-top: 15px;
        }

        .form {
            margin-bottom: 50px;
        }
    </style>
</head>

<body>
    <main>
        <header>
            <div class="row header">
                <div class="offset-md-1 col-md-3 imag-rounded">
                    <img src="image/logo.jpeg" alt="" width="130px" height="90px">
                </div>
                <div class="col-md-7">
                    <h1>Suivi Académique</h1>
                </div>
            </div>
        </header>

        <form action="page/login.php" method="post" class="form" id="form">
            <h4 class="display-4 fs-1">Connectez-vous?</h4><br>
            <?php if (isset($_GET['error'])) { ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $_GET['error']; ?>
                </div>
            <?php } ?>

            <?php if (isset($_GET['success'])) { ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $_GET['success']; ?>
                </div>
            <?php } ?>
            <div class="field email">
                <div class="icon"></div>
                <input class="input" id="email" type="email" name="mail" placeholder="Email" autocomplete="off">
            </div>

            <div class="field password">
                <div class="icon"></div>
                <input class="input" id="password" type="password" name="pass" value=" <?php echo (isset($_GET['mail'])) ? $_GET['mail'] : ""; ?>" placeholder="Password">
            </div>

            <button class="button" name="submit" id="submit">Connexion</button>
            <p class="message">Non enregistré? <a href="page/inscrit_directeur.php">Creer un compte</a></p>

            <div class="side-top-bottom"></div>
            <div class="side-left-right"></div>

            <!-- <small>Fill in the form</small> -->
        </form><br>
        <?php
        include 'page/footer.php';
        ?>

        <script src="script/cdnjs.cloudflare.com_ajax_libs_jquery_3.1.1_jquery.min.js"></script>
        <script src=" style/bootstrap-5.2.3-dist/js/bootstrap.min.js"></script>
        <script src="script/script.js"></script>
    </main>
</body>

</html>