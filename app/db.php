<?php

$host = '127.0.0.1';
$db = 'market';
$user = 'root';
$pass = '';
$charset = 'utf8';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => true,
];
$pdo = new PDO($dsn, $user, $pass, $opt);

//Добавляет данные в таблицу
function insert($table, $params){
    global $pdo;
    $sql = "INSERT INTO product (product_ID, basket, cost, description, img) VALUES (:product_ID, :basket, :cost, :description, :img)";
    $pdo->prepare($sql)->execute($params);
    return $pdo->lastInsertId();
}

//Выборка одной записи из БД
function selectAll($table){
    global $pdo;
    $sql = "SELECT * FROM $table";
    $sth = $pdo->prepare($sql);
    $sth->execute();
    return $sth->fetchAll(PDO::FETCH_ASSOC);
}