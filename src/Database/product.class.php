<?php


Class product
{
	public $pdo;

	function __construct($pdo){
		$this->pdo = $pdo;

	}

	public function getAllProduct(){
		//recupère la table Stickers
		$productdb = $this->pdo->prepare('SELECT `Stickers_Id`, `Stickers_Name`, `Stickers_Category`, `Stickers_Prix`, `Stickers_Image` FROM `stickers`');
		$productSelect = $productdb->execute();
		$allProduct = $productdb->fetchAll();
		return $allProduct;

	}
	
	public function getItemProduct(){
		//recupère la table stickers qui correspond au get
		$productdb = $this->pdo->prepare('SELECT * FROM `stickers` WHERE `Stickers_Id`  = ' . $_GET["item"] );
		$productSelect = $productdb->execute();
		$itemProduct = $productdb->fetchAll();
		return $itemProduct;
	}
	

	public function getCatProduct(){
		//recupère la table stickers qui correspond au get
		$productdb = $this->pdo->prepare('SELECT `Stickers_Id`, `Stickers_Name`, `Stickers_Category`, `Stickers_Prix`, `Stickers_Image` FROM `stickers` WHERE `Stickers_Category` = ' . $_GET["cat"]);
		$productSelect = $productdb->execute();
		$catProduct = $productdb->fetchAll();
		return $catProduct;
	}


	public function getTitleProduct(){
		//recupère la table sitckers qui correspond au get pour le titre
		$titleSelectdb = $this->pdo->prepare('SELECT * FROM `stickers` WHERE `Stickers_Id`  = ' . $_GET["item"] . ' LIMIT 1' );
		$titleSelect = $titleSelectdb->execute();
			$current = $titleSelectdb->fetch(PDO::FETCH_ASSOC);
			$currentTitle = $current['Stickers_Name'];

		return $currentTitle;
	}


}