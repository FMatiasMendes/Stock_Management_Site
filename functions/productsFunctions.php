<?php

require_once("sqlFunctions.php");

//to list the products table
function listProducts(){
  $list =	selectSQL("SELECT * FROM products");
	return $list;
}

//to insert new product
function insertProduct($name, $price, $quantity){
  $insert = iduSQL("INSERT INTO products (name, price, quantity) VALUES ('$name', '$price', '$quantity')");
}

//to get specific product
function getProduct($name){
  $result = selectSpecificSQL("SELECT * FROM products WHERE name='$name'");
  return $result;
}

?>