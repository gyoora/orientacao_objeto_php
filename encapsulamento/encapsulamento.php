<?php

    require_once "Clientes.class.php";

    $cliente = new Cliente(1, 'Vera', '132.321.632-85', 'vera@gmail.com');
    echo $cliente -> getNome() . "<br>";
    $cliente -> setNome('Vilma');
    echo $cliente -> getNome();
?>