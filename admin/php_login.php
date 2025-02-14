<?php
    session_start();

    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == "admin" && $password == "Admin@WrAdmission1234"){
        $_SESSION['admin'] = 'admin';
        $_SESSION['password'] = 'Admin@WrAdmission1234';

        Header("Location: index.php");
    }
?>