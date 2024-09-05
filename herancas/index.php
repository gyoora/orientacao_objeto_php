<?php

    require_once "conta.class.php";
    require_once "corrente.class.php";
    require_once "poupanca.class.php";

    $corrente = new Corrente(1000.00, '123-2', '12345-6', 'Maria da Silva', 5000.00);

    echo $corrente -> getTitular();
    
    echo "<pre>";
    var_dump($corrente);
    echo "</pre>";

?>