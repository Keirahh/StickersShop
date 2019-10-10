<?php


Class dbInit
{
	public $host;
	public $db;
	public $user;
	public $pass;
	public $pdo;

	function __construct($host, $db, $user, $pass){
		$this->host = $host;
		$this->db = $db; 
		$this->user = $user;
		$this->pass = $pass;

	}
	function connexion(){
		try {
			$this->pdo = (new PDO('mysql:host='.$this->host.';dbname='.$this->db, $this->user, $this->pass));
			return $this->pdo;	
		} catch (\PDOException $e) {
			throw new \PDOException($e->getMessage(),(int)$e->getCode());
		}
			
	}

}
