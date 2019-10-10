<?php


Class category
{
	public $pdo;

	function __construct($pdo){
		$this->pdo = $pdo;

	}
	public function getAllCategory(){
		$Categorydb = $this->pdo->prepare("SELECT `Category_Code`, `Category_Name` FROM `category`");
		$CategorySelect = $Categorydb->execute();
		$allCategory = $Categorydb->fetchAll();
		
		return $allCategory;
	}
		//recupère la table category qui correspond au get
		public function getCatCategory(){
		$categorySelectdb = $this->pdo->prepare('SELECT `Category_Name` FROM `category` WHERE `Category_Code` = ' . $_GET["cat"]. '');
		$CategorySelect = $categorySelectdb->execute();
			$current = $categorySelectdb->fetch(PDO::FETCH_ASSOC);
			$categoryTitle = $current['Category_Name'];
		return $categoryTitle;
	}

}


