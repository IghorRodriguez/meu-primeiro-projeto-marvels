<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "conexao-com-mysql.php";

try {
    $sql = "UPDATE newsletters 
    SET firstname='Maria', lastname='Oliveira', email='mariaoliv@hotmail.com'
    WHERE id=8";

    $newsletters = $conexao->prepare($sql);
    $newsletters->execute();

    echo $newsletters->rowCount()." Registros atualizados com sucesso!";

} catch (PDOException $ex) {
    echo "{$sql} <br>".$ex->getMessage();
}