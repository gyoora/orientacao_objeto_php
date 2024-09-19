<?php
    require_once "fornecedor.php";
    require_once "produto.php";

    $fornecedor = new Fornecedor (
        'Faber Castell', "Faber Castell", "11111111", "(11) 998932216"
    );

    $produto = new Produto (
        'Régua T', 'Régua para engenharia', 100, 1000, $fornecedor
    );

    echo '<pre>';
    var_dump ($produto);
    echo '</pre>';

?>