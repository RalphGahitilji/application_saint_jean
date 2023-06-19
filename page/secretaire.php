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

    <?php

    if (
        isset($_POST['fname']) &&
        isset($_POST['mail']) &&
        isset($_POST['pass'])
    ) {

        include "bd.php";
        $fname = $_POST['fname'];
        $mail = $_POST['mail'];
        $pass = $_POST['pass'];

        $data = "&fname=" . $fname . "&mail=" . $mail;

        if (empty($fname)) {
            $em = "name is required";
            header("Location: secretaire.php?error=$em&$data");
            exit;
        } else if (empty($mail)) {
            $em = "email is required";
            header("Location: secretaire.php?error=$em&$data");
            exit;
        } else if (empty($pass)) {
            $em = "pass is required";
            header("Location: secretaire.php?error=$em&$data");
            exit;
        } else {
            $pass = password_hash($pass, PASSWORD_DEFAULT);

            $sql = "INSERT INTO user (fname, mail, pass) VALUES (?,?,?)";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$fname, $mail, $pass]);
            header("Location: admistrateur.php?success=Your account has been created sucessfully");
            exit;
        }
    } else {
        header("Location:admistrateur.php?error=error");
        exit;
    }
    ?>

    <form action="" method="post" class="form" id="form">
        <h4 class="display-4 fs-1">Ajouter un admistrateur </h4><br>
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
            <input class="input" id="email" type="text" placeholder="Name" name="fname" value=" <?php echo (isset($_GET['fname'])) ? $_GET['fname'] : ""; ?>" autocomplete="off">
        </div>
        <div class="field email">
            <div class="icon"></div>
            <input class="input" id="email" type="email" placeholder="Email" name="mail" value=" <?php echo (isset($_GET['mail'])) ? $_GET['mail'] : ""; ?>" autocomplete="off">
        </div>

        <div class="field password">
            <div class="icon"></div>
            <input class="input" id="password" type="password" name="pass" placeholder="Password">
        </div>

        <button class="button" name="submit" id="submit">Creér</button>

        <div class="side-top-bottom"></div>
        <div class="side-left-right"></div>

        <!-- <small>Fill in the form</small> -->
    </form>

    <?php
    include 'footer.php';
    ?>

    <script src="../script/cdnjs.cloudflare.com_ajax_libs_jquery_3.1.1_jquery.min.js"></script>
    <script src="../style/bootstrap-5.2.3-dist/js/bootstrap.min.js"></script>
    <script src="../script/script.js"></script>
</body>

</html>