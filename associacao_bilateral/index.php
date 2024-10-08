<?php
    require_once "produto.php";
    require_once "fornecedor.php";

    $produto1 = new Produto(
        'Caderno', 'Caderno da Barbie', 37.99, 1000
    );

    $produto2 = new Produto(
        'Fichário', 'Fichário da Barbie', 87.99, 1000
    );

    $produto3 = new Produto(
        'Agenda 2025', 'Agenda 2025 da Barbie', 23.59, 2500
    );

    $fornecedor = new Fornecedor(
        'Tilibra','Tilibra',"11.111.111/0001-23", "(14) 9929929", array($produto1,$produto2)
    );

    $fornecedor -> setProduto($produto3);

    // echo '<pre>';
    // var_dump ($fornecedor);
    // echo '</pre>';

    echo "<h3>Fornecedor</h3>";
    echo "Razão Social: {$fornecedor -> getRazaoSocial()} <br>";
    echo "Nome Fantasia: {$fornecedor -> getNomeFantasia()} <br>";
    echo "CNPJ: {$fornecedor -> getCnpj()} <br>";
    echo "Telefone: {$fornecedor -> getTelefone()} <br>";

    echo "<br>__________________________________________________________";

    $cont = 1;
    
    foreach($fornecedor -> getProduto() as $produto){
        echo "<h3>Produto {$cont}</h3>";
        echo "Nome: {$produto -> getNome()} <br>";
        echo "Descrição: {$produto -> getDescricao()} <br>";
        echo "Preço R$: " . number_format($produto -> getPreco(),2,",",".") . "<br>";
        echo "Estoque: {$produto -> getEstoque()} <br>";
        echo "<br>__________________________________________________________";
        $cont++;
    }

    $fornecedor1 = new Fornecedor (
        "Faber Castell", "Faber Castell", "22.222.222/0001-22", "(11) 997952290"
    );
    $fornecedor2 = new Fornecedor (
        "Pilot", "Pilot", "33.333.333/0001-33", "(19) 997948990"
    );

    $produto4 = new Produto (
        'Borracha', 'Borracha macia que não borra', 3.10, 2300, array($fornecedor, $fornecedor2, $fornecedor1)
    );

    echo "<h3>Produto</h3>";
    echo "Nome: {$produto4 -> getNome()} <br>"; 
    echo "Descrição: {$produto4 -> getDescricao()} <br>"; 
    echo "Preço R$: " . number_format($produto4 -> getPreco(),2,",",".") .  "<br>"; 
    echo "Estoque: {$produto4 -> getEstoque()} <br>";

    echo "<h3>Fornecedores do produto</h3>";

    foreach($produto4 -> getFornecedor() as $obj){
        echo "<br>Razão Social: {$obj -> getRazaoSocial()} <br>";
        echo "Nome Fantasia: {$obj -> getNomeFantasia()} <br>";
        echo "CNPJ: {$obj -> getCnpj()} <br>";
        echo "Telefone: {$obj -> getTelefone()} <br>";
    
        echo "__________________________________________________________<br>";
    }

?>