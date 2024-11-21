<?php

$mysqlHost = "localhost";
$dbname = "stock_management";

//connection to SQL
$pdo = new PDO("mysql:host=$mysqlHost;dbname=$dbname;charset=utf8mb4;", "root", "");

//Search
function selectSQL($a){ 
    global $pdo;
    $consult = $pdo->query($a);
    $result = $consult->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

//Unique search
function selectSQLUnique($a){
    global $pdo;
    $consult = $pdo->query($a);
    $result = $consult->fetch(PDO::FETCH_ASSOC);
    return $result;
}

//insert, delete e update
function iduSQL($a){
    global $pdo;
    $consult = $pdo->query($a);
}

?>