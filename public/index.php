<?php

require_once('../src/twig.php');

$pdo = (new dbInit("localhost", "stickersshop", "root", ""))->connexion();

echo $twig->render('front/index.html.twig',array(
	"title" => "Stickers Shop",
	"login"=> $login, 
	"allCategory"=> (new category($pdo))->getAllCategory(),
	"stickers" => (new product($pdo))->getAllProduct(),
));

echo "<pre>";
var_dump($_SESSION);
echo "</pre>";