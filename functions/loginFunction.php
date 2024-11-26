<?php

	session_start();
	date_default_timezone_set("Europe/Lisbon");

	function login($user, $pass){
			$logged_user = selectSQLUnico("SELECT * FROM users WHERE user='$user' AND $pass='$pass'"); 
			
			if(!empty($logged_user)){

					$_SESSION["logged_user"] = $logged_user;
					$id = $logged_user["id"];
					$date = date("d/m/Y - H:i:s");

					iduSQL ("UPDATE users SET last_access='$date' WHERE id='$id'");
					return true;
			}			
			return false;
	}

	function loginStatus(){
		return !empty($_SESSION["logged_user"]);
	}

?>