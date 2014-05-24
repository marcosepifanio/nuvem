<?php
session_start();

if (!isset($_SESSION['email']) and !isset($_SERVER['senha'])) {
    header("Location: login.php");
    exit ;
}
?>