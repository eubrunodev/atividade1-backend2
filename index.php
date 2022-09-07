<?php
    include("./class/Produto.php");   
    include("./class/Cliente.php");


    $cliente = new Cliente();
    $produto = new Produto();
// parte do cliente
        // sets
        $cliente->setNome('Bruno Martins');
        $cliente->setCodigo(1);
        $cliente->setCpf(12345);
        $cliente->setEndereco('Rua da Paixão, 555, Maringá-PR');
        $cliente->setTelefone('(44) 9999-999');
        $cliente->setEmail('bruno@gmail.com');

        // gets
        $clienteNome = $cliente->getNome();
        $clienteCodigo = $cliente->getCodigo();
        $clienteCPF = $cliente->getCpf();
        $clienteEndereco = $cliente->getEndereco();
        $clienteEmail = $cliente->getEmail();
        $clienteTelefone = $cliente->getTelefone();

// parte dos produtos
        $produto->setCodigo(1);
        $produto->setDescricao('Lâmpada');
        $produto->setValorCusto(10.90);
        $produto->setValorVenda(90.99);
        $produto->setQuantidadeEstoque(5);


        $produtoCodigo = $produto->getCodigo();
        $produtoDescricao = $produto->getDescricao();
        $produtoValorCusto = $produto->getValorCusto();
        $produtoValorVenda = $produto->getValorVenda();
        $produtoQuantidadeEstoque = $produto->getQuantidadeEstoque();
?>

<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/styles.css">
        <title>Atividade 1</title>
    </head>
    <body>
        <main>
            <div class="container">
                <div class="cliente">
                    <div>
                        <h1>Área do Cliente</h1>
                        <p>Código: <?= $clienteCodigo ?></p>
                        <p>Nome: <?= $clienteNome ?></p>
                        <p>C.P.F: <?= $clienteCPF ?></p>
                        <p>Endereço: <?= $clienteEndereco ?></p>
                        <p>Telefone: <?= $clienteTelefone ?></p>
                        <p>E-mail: <?= $clienteEmail ?></p>
                    </div>
                </div>
                <div class="produto">
                    <h1>Área do Produto</h1>
                    <p>Código: <?= $produtoCodigo ?></p>
                    <p>Descrição: <?= $produtoDescricao ?></p>
                    <p>Valor Custo: <?= $produtoValorCusto ?></p>
                    <p>Valor Venda: <?= $produtoValorVenda ?></p>
                    <p>Qnt. Estoque: <?= $produtoQuantidadeEstoque ?></p>
                </div>
            </div>
        </main>
    </body>
</html>