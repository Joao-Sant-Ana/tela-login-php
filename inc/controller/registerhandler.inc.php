<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        require_once "verifyerrors.inc.php";

        try {
            $user = new VerifyErrors($pdo, $username, $email, $password);
            $user->CallInsertUser();

            header("Location: ../../index.php");
            die();
        } catch (PDOException $e) {
            die("Query failed: " . $e->getMessage());
        }
    } else {
        header("Location: ../../index.php");
        die();
    }