<?php

require_once('../src/twig.php');


$pdo = (new dbInit("localhost", "stickersshop", "root", ""))->connexion();
$utilisateur = new user($pdo);


if($utilisateur->verifUser($_POST['email'], $_POST['password'])){
	$_SESSION["email"] = $_POST['email'];
	$_SESSION["password"] = $_POST['password'];
	Header("Location: index.php");
}else{
	Header("Location: login.php?error");
}