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
        header("Location: ../index.php?error=$em&$data");
        exit;
    } else if (empty($mail)) {
        $em = "email is required";
        header("Location: ../index.php?error=$em&$data");
        exit;
    } else if (empty($pass)) {
        $em = "pass is required";
        header("Location: ../index.php?error=$em&$data");
        exit;
    } else {
        $pass = password_hash($pass, PASSWORD_DEFAULT);

        $sql = "INSERT INTO user (fname, mail, pass) VALUES (?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$fname, $mail, $pass]);
        header("Location: ../index.php?success=Your account has been created sucessfully");
        exit;
    }
} else {
    header("Location:.. /index.php?error=error");
    exit;
}
