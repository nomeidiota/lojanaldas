<?php

    // Informa��es para conex�oav
// $host = 'localhost';
// $usuario = 'root';
// $senha = '=';
// $banco = 'naldas';
// $dsn = "mysql:host={$host};port=3306;dbname={$banco}";
$host = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'naldas';
 $dsn = "mysql:host={$host};port=3306;dbname={$banco}";

try
{
    // Conectando
    $pdo = new PDO($dsn, $usuario, $senha);
}
catch (PDOException $e)
{
    // Se ocorrer algum erro na conex�o
    die($e->getMessage());
}
