<?php

require_once('../src/twig.php');

$pdo = (new dbInit("localhost", "stickersshop", "root", ""))->connexion();

$product = (new product($pdo));
echo $twig->render('front/ficheProduit.html.twig',array( 
	"title" => $product->getTitleProduct(),
	"stickers"=> $product->getItemProduct(),
	"login"=> $login,
	"allCategory"=> (new category($pdo))->getAllCategory(),

));