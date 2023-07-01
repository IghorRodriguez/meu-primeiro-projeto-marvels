<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'conexao-com-mysql.php';

try {
    $sql = "INSERT INTO newsletters (firstname, lastname, email, telephone)
    VALUES ( 'Ighor', 'Rodriguez', 'ighormurdock07@gmail.com', '16 991921145')";

    $conexao->exec($sql);

    echo 'Um novo registro foi criado com sucesso!';

} catch (Exception $ex) {

    echo "Erro: {$sql}<br> {$ex->getMessage()}<br>";

}