<?php
//Função Nativa do PHP : ini_set
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once 'credenciais.php';

try {
    // o código que estiver aqui, se houver alguma exceção ele interrompe essa execução

    // cria uma instância da classe PDO
    $conexao = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
    //configuro o PDO para um modo de exibição de lançamento de exceção 
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexão bem sucedida";
}catch(PDOException $excecao) {
    //e inicia a execução do que estiver aqui
    echo "A conexão falhou! Mensagem: ".$excecao->getMessage();
}