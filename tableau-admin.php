<?php
session_start();
require "./classes/database.php";
require "./classes/User.php";

if(isset($_SESSION["connecté"]) && empty($ssesion["user"])){
    header("Location: connexion.php");
    exit;
}
$user = unserialize($_SESSION["user"]);

if(!$user->isAdmin()){
    header("Location: tableau-admin.php");
    exit;
}