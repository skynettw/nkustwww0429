<?php 
    session_start();
    $username = $_POST["username"];
    $password = $_POST["password"];
    if ($username=="admin" && $password=="12345678") {
        $_SESSION["user"] = "admin";
    }
    header("Location: index.php");
?>