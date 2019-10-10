<?php

require_once('../src/twig.php');

$pdo = (new dbInit("localhost", "stickersshop", "root", ""))->connexion();

echo $twig->render('front/login.html.twig',array( 
	"title" => "Shop",
	"login"=> $login,
	"allCategory"=> (new category($pdo))->getAllCategory()

));
