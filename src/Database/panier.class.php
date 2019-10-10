<?php

Class panier
{

	public function createPanier(){

		if(isset($_SESSION['panier'])){
			$_SESSION['panier'] = array();
			$_SESSION['panier']['Product_Id'] = array();
			$_SESSION['panier']['Product_Quantity'] = array();	
		}
		return true;
	}

	public function addProduct($product, $qte){
		$key = array_search($product, $_SESSION['panier']['Product_Id']);
		if($key !== false){
			$_SESSION['panier']['Product_Quantity'][$key] += $qte;
		} else {
			array_push($_SESSION['panier']['Product_Id'], $product);
			array_push($_SESSION['panier']['Product_Quantity'], $qte);
		}
	}

	public function deleteProduct($product){
		$tmp=array();
		$tmp['Product_Id'] = array();
		$tmp['Product_Quantity'] = array();

		for($i = 0; $i < count($_SESSION['panier']['Product_Id']); $i++)
		{
			if ($_SESSION['panier']['Product_Id'][$i] !== $product)
			{
				array_push( $tmp['Product_Id'],$_SESSION['panier']['Product_Id'][$i]);
				array_push( $tmp['Product_Quantity'],$_SESSION['panier']['Product_Quantity'][$i]);
			}

		}
		$_SESSION['panier'] =  $tmp;
		unset($tmp);
	}

	public function updateProduct($product,$qte){
		if ($qte > 0)
		{
			$key = array_search($product, $_SESSION['panier']['Product_Id']);

			if ($key !== false)
			{
				$_SESSION['panier']['Product_Quantity'][$key] = $qte ;
			}
		}
		else
			deleteProduct($product);
	}
}