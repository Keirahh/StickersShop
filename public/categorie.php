<?php

require_once('../src/twig.php');

$pdo = (new dbInit("localhost", "stickersshop", "root", ""))->connexion();

$category = (new category($pdo));
echo $twig->render('front/categorie.html.twig',array( 
	"title" => $category->getCatCategory(),
	"stickers"=> (new product($pdo))->getCatProduct(),
	"login"=> $login,
	"allCategory"=> $category->getAllCategory()
	
));