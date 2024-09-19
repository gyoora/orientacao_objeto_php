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

?>