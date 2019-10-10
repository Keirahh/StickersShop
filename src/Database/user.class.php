<?php

Class user
{
	public $name;
	public $email;
	public $pwd;
	public $pdo;
	public $user;

	function __construct($pdo){
		$this->pdo = $pdo;
	}

	public function verifUser($email, $pwd){
		$userDb = $this->pdo->prepare(' SELECT `Login_Name`, `Login_Email`, `Login_Pwd` FROM `users` WHERE  `Login_Email`  = "'.$email.'" AND `Login_Pwd` ="' .$pwd.'" LIMIT 1');
		$userSelect = $userDb->execute();
		$user = $userDb->fetchAll();
		if(sizeof($user)>0){
			return true;
		} else {
			return false;
		}
	}

	public function getEmail(){
		return $this->email;
	}

}