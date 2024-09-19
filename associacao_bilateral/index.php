<?php
    require_once "produto.php";
    require_once "fornecedor.php";

    $produto1 = new Produto(
        'Caderno', 'Caderno da Barbie', 37.99, 1000
    );

    $produto2 = new Produto(
        'Fichário', 'Fichário da Barbie', 87.99, 1000
    );

    $fornecedor = new Fornecedor(
        'Tilibra','Tilibra',"11.111.111/0001-23", "(14) 9929929", array($produto1,$produto2)
    );

    echo '<pre>';
    var_dump ($fornecedor);
    echo '</pre>';
?>