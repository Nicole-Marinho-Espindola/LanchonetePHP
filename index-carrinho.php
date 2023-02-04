<?php

    $menu = [
        'lanches' => [
            [
                'nome' => "X-salada",
                'preco' => 8.50,
                'img' => 'x-salada.png'
            ],
            [
                'nome' => "X-burguer",
                'preco' => 8.00,
                'img' => 'x-burguer.png'
            ],
            [
                'nome' => "X-bacon",
                'preco' => 10.50,
                'img' => 'x-bacon.png'
            ],
        ],

        'acompanhamentos' => [
            [
                'nome' => "Batata-Frita",
                'preco' => 7.00,
                'img' => 'batata.png'
            ],
            [
                'nome' => "Nuggets",
                'preco' => 8.00,
                'img' => 'nuggets.png'
            ],
            [
                'nome' => "Cebola-Frita",
                'preco' => 9.90,
                'img' => 'cebola.png'
            ],
        ],

        'bebidas' => [
            [
                'nome' => "Coca-Cola",
                'preco' => 4.90,
                'img' => 'coca.png'
            ],
            [
                'nome' => "Pepsi",
                'preco' => 3.50,
                'img' => 'pepsi.png'
            ],
            [
                'nome' => "Guaraná",
                'preco' => 3.00,
                'img' => 'guarana.png'
            ],
        ],
    ];
    ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Mc Hot's</title>
    <meta charset="utf-8">
    <script src="https://kit.fontawesome.com/e890931bb2.js" crossorigin="anonymous"></script>
    <link href="./carrinho-estilo.css" rel="stylesheet">
  </head>
  <body>



    <div class="title-div">
        <h1> Hot Burguer</h1>
        <img class="img-logo" src="./img/hamburgueria-logo.png" alt="Logo Hamburgueria">
    </div>

    <?php
        $lanche_selecionado = $menu['lanches'][$_POST['lanche']];
        $acompanhamento_selecionado = $menu['acompanhamentos'][$_POST['acompanhamento']];
        $bebida_selecionado = $menu['bebidas'][$_POST['bebida']];
    ?>

    <div class="carrinho-bloco">
            <div class="card-div">
                <h1>Pedido:</h1>
                <h2 ><?php echo $lanche_selecionado['nome'] ?></h2>
                <h2 ><?php echo $acompanhamento_selecionado['nome'] ?></h2>
                <h2 ><?php echo $bebida_selecionado['nome'] ?></h2>
            </div>

            <h1 class="pagamento"> Total a pagar: R$ <?php echo($lanche_selecionado['preco'] + $acompanhamento_selecionado['preco'] + $bebida_selecionado['preco']); ?></h1>
    </div>
    </body>