<?php

$NOME = $_POST["nome"];
$EMAIL = $_POST["email"];
$CARGO = $_POST["cargo"];
$SALARIO = $_POST["salario"];
$DATA_ADIMISSAO = $_POST["data_adimissao"];
$ATIVO = isset($_POST["ativo"]) ? 1 : 0;

//CRIAR A INSTRUÇÃO SQL

$sql = "INSERT INTO funcionario (NOME, EMAIL, CARGO, SALARIO, DATA_ADIMISSAO, ATIVO) 
VALUES ('$NOME', '$EMAIL', '$CARGO', $SALARIO, '$DATA_ADIMISSAO', $ATIVO)";

require_once("../conexao.php"); //CHAMA O ARQUIVO DE CONEXÃO.

$resposta = mysqli_query($conexao, $sql); //EXECUTA A INSTRUÇÃO SQL

if ($resposta == true) {
    header("Location: listar.php?inserido=1");
    exit;
}

?>