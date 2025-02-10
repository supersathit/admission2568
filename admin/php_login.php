<?php
    session_start();

    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == "admin" && $password == "Admin@WrPreM1"){
        $_SESSION['admin'] = 'admin';
        $_SESSION['password'] = 'Admin@WrPreM1';

        Header("Location: index.php");
    }
?>