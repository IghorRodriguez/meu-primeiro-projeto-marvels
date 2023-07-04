<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'conexao-com-mysql.php';

echo'<br>';

try {

    $sql = "SELECT id, firstname, lastname, email, telephone
    FROM newsletters";

    $newsletters = $conexao->prepare($sql);
    $newsletters->execute();
    $resultado = $newsletters->fetchAll(PDO::FETCH_ASSOC);

    // echo "<pre>";
    // var_dump($resultado);
    // echo "</pre>";

    // var_dump($newsletters->toArray());

    foreach ($resultado as $newsletter) {

        // echo "<pre>";
        // var_dump($newsletters["age"]); (com as chaves é possivel informar os dados desejados apartir da busca no banco de dados)
        // echo "</pre>";
        // exit; (o exit ele obriga o limp a parar após checar todos os dasos pedidos acima)

        echo "Id: <strong>" .$newsletter['id']."</strong><br>";
        echo "Nome: <strong>" .$newsletter['firstname']."</strong><br>";
        echo "Sobrenome: <strong>" .$newsletter['lastname']."</strong><br>";
        echo "E-mail: <strong>" .$newsletter['email']."</strong><br>";
        echo "Telefone: <strong>" .$newsletter['telephone']."</strong><br><br>";
        echo "======================================<br><br>";
    }
} catch (Exception $ex) {

    echo "Error: {$ex->getMessage()}";

}