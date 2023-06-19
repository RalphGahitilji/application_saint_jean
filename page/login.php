<?php
session_start();
if (
    isset($_POST['mail']) &&
    isset($_POST['pass'])
) {

    include "bd.php";

    $mail = $_POST['mail'];
    $pass = $_POST['pass'];

    $data = "mail=" . $mail;

    if (empty($mail)) {
        $em = "email is required";
        header("Location: ../index.php?error=$em&$data");
        exit;
    } else if (empty($pass)) {
        $em = "password is required"; // Corrigé : "password" au lieu de "pass"
        header("Location: ../index.php?error=$em&$data");
        exit;
    } else {

        $sql = "SELECT * FROM user where mail = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$mail]);

        if ($stmt->rowCount() == 1) {
            $user = $stmt->fetch();

            $username = $user['mail'];
            $password = $user['pass'];
            $fname = $user['fname'];
            $id = $user['id'];
            if ($username === $mail) {
                if (password_verify($pass, $password)) {
                    $_SESSION['id'] = $id;
                    $_SESSION['fname'] = $fname;

                    header("Location: admistrateur.php");
                    exit;
                }
            }
        }

        $em = "Incorrect username or password"; // Corrigé : "Incorrect" au lieu de "Incorect"
        header("Location: admistrateur.php?error=$em&$data");
        exit;
    }
} else {
    header("Location: admistrateur.php?error=error");
    exit;
}
