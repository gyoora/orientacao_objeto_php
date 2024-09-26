<?php
    require_once "categoria.class.php";
    require_once "produto.class.php";

    $produto1 = new Produto(
        'Lápis preto',
        'Lápis preto número 2',
        2.5,
        100
    );

    $produto2 = new Produto(
        'Caderno',
        'Caderno em espiral 200fl',
        20.5,
        1100
    );

    $categoria = new Categoria(
        'Material escolar',
        array($produto1, $produto2)
    );

    echo "<pre>";
    echo ($categoria);
    echo "</pre>";
?>