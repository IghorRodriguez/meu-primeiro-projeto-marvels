<?php

$name = $_POST['name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$telephone = $_POST ['telephone'];

//var_dump($name);
//exit;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'conexao-com-mysql.php';

try {
    $sql = "INSERT INTO newsletters (firstname, lastname, email, telephone)
    VALUES ( '$name', '$last_name', '$email', '$telephone')";

    $conexao->exec($sql);

    echo 'Um novo registro foi criado com sucesso!';

} catch (Exception $ex) {

    echo "Erro: {$sql}<br> {$ex->getMessage()}<br>";

}

$conexao = null;

header('Location: ../index.php?n='.$name.'&ln='.$last_name.'&em='.$email.'&tl='.$telephone. '#rolar-ate-aqui');

//=======================================================================//
//#Atividade para conectar o cadatrar do projeto com o banco de dados!   //
//1.incluir as funções para capturar erros                               //
//2.será necessário incluir a conexao com banco de dados                 //
//3.criar o try e catch para cadastrar as informações                    //
//4.fazer o redirecionamento                                             //
//=======================================================================//
?>