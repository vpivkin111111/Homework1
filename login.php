<?php
session_start();
$user='root';
$pass='';
if($_POST['submit']) {
    if($users ==$_POST['user'] AND $pass =
    {
        $_SESSION['admin'] =$users;
        header('location: index.php');
        exit;
    }
    else echo'  <p> Логин или пароль не верны!'<
    }

