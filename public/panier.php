<?php

require_once('../src/twig.php');

$pdo = (new dbInit("localhost", "stickersshop", "root", ""))->connexion();
$product = (new product($pdo))->getItemProduct();
$panier = (new panier())->createPanier();
$ajoutproduit = (new panier())->addProduct($product,$_POST['Product_Quantity']);

header('Location: index.php');

echo "<pre>";
var_dump($_SESSION);
echo "</pre>";