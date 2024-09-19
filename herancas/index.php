<?php

    require_once "conta.class.php";
    require_once "corrente.class.php";
    require_once "poupanca.class.php";

    $corrente = new Corrente(1000.00, '123-2', '12345-6', 'Maria da Silva', 5000.00);
    $poupanca = new Poupanca(10, '463-9', '54321-6', 'Paulo Rocha', 10000.00);

    echo $corrente -> getTitular();
    echo "<br>";
    $corrente -> retirar(5500);
    echo "<br>";
    echo "Saldo: ";
    echo $corrente -> getSaldo();
    echo "<br>";    
    echo "<br>";
    echo $poupanca -> getTitular();
    echo "<br><br>";
    $poupanca -> retirar(1000);
    echo "<br><br>";
    echo "Saldo: ";
    echo $poupanca -> getSaldo();

    //echo "<pre>";
    //var_dump($corrente);
    //echo "</pre>";

?>