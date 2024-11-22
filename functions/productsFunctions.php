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

//to get specific product by name
function getProduct($name){
  $result = selectSpecificSQL("SELECT * FROM products WHERE name='$name'");
  return $result;
}

//to get specific product by ID
function getProductById($id){
  $result = selectSpecificSQL("SELECT * FROM products WHERE id='$id'");
  return $result;
}

//to edict a product
function edictProduct($name, $price, $quantity, $id){
  iduSQL("UPDATE products SET name='$name', price='$price', quantity='$quantity' WHERE id='$id'");
}

//to delete a product
function deleteProduct($id){
  iduSQL("DELETE FROM products WHERE id='$id'");
}

?>