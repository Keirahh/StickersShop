<?php
require_once('../vendor/autoload.php');

require_once 'Autoloader.php';
Autoloader::register();

$loader = new \Twig\Loader\FilesystemLoader('../templates');

session_start();

if(!empty($_SESSION["email"]) && !empty($_SESSION["password"])){
	$login = true;
	$userLogin = session::sessionVersUser();
}
if(!isset($login)){
	$login=false;
}

$twig = new \Twig\Environment($loader,[
	'cache' => false,
	'debug' => true,
	'strict_variables' => true,
]);
$twig->addExtension(new \Twig\Extension\DebugExtension());