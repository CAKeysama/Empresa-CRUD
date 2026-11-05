<?php

// Este arquivo CONECTA com o BD MYSQL

$servidor = "localhost";
$usuario = "root";
$senha = "";

$db = "empresa";

$conexao = mysqli_connect($servidor, $usuario, $senha, $db);

if (!$conexao) {
    die("FALHA AO CONECTAR COM O BANCO DE DADOS: " . mysqli_connect_error());
}