<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "conexao-com-mysql.php";

try {
    $sql = "DELETE FROM newsletters WHERE id=8";

    $newsletters = $conexao->prepare($sql);
    $linhas = $newsletters->execute();

    echo $newsletters->rowCount()." Registros removidos com sucesso!";

} catch (PDOException $ex) {
    echo "{$sql} <br>".$ex->getMessage();
}

$conexao = null;