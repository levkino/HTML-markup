<?php
session_start();
if (!$_SESSION['login'] || !$_SESSION['pass']){
    header('Location:login.php');
    die();
}