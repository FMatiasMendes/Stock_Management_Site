<?php

require_once("functions/sqlFunctions.php");

//to list the products table
function listProducts(){
  $list =	selectSQL("SELECT * FROM products");
	return $list;
}



?>