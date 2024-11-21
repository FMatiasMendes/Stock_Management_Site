<?php

//conexão
$pdo = new PDO("mysql:host=localhost;dbname=construcao_e_habitacao_bd;charset=utf8mb4;", "root", "");

//Busca
function selectSQL($a){ 
    global $pdo;
    $consulta = $pdo->query($a);
    $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
    return $resultado;
}

//Busca Unica
function selectSQLUnico($a){
    global $pdo;
    $consulta = $pdo->query($a);
    $resultado = $consulta->fetch(PDO::FETCH_ASSOC);
    return $resultado;
}

//função para insert, delete e update
function iduSQL($a){
    global $pdo;
    $consulta = $pdo->query($a);
}

?>