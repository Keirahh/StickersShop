<?php 

class session
{
	static function sessionVersUser(){
		return new user($_SESSION["email"], $_SESSION["password"]);
	}
}