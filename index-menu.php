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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Menu</title>

    <link rel="stylesheet" type="text/css" href="./menu-estilo.css"/>
</head>
<body class="body-style">

    <div class="title-div">
        <h1 class="menu-titulo">Hot Burguer Cardápio</h1>
        <img class="img-logo" src='img/hamburgueria-logo.png'>
    </div>

    <form method="POST" action="index-carrinho.php">
        <div class="">
            <h2 class="itens-title">Lanches</h2>

            <div class="bloco-div">
                <?php for($i=0; $i < count($menu['lanches']); $i++) { ?>
                    <div class="card-div">
                        <img class="img"src="./img/<?php echo $menu['lanches'][$i]['img']; ?>" alt="">
                        <span><?php echo $menu['lanches'][$i]['nome']; ?></span>
                        <span>R$ <?php echo $menu['lanches'][$i]['preco']; ?></span>

                        <input type="radio" name="lanche" value="<?php echo $i; ?>">
                    </div>
                <?php } ?>
            </div>
        </div>

        <div>
            <h2 class="itens-title">Acompanhamentos</h2>

            <div class="bloco-div">
                <?php for($i=0; $i < count($menu['acompanhamentos']); $i++) {?>
                    <div class="card-div">
                        <img class="img"src="./img/<?php echo $menu['acompanhamentos'][$i]["img"]; ?>" alt="">
                        <span><?php echo $menu['acompanhamentos'][$i]['nome'];?></span>
                        <span>R$ <?php echo $menu['acompanhamentos'][$i]['preco'];?></span>

                        <input type="radio" name="acompanhamento" value="<?php echo $i; ?>">
                    </div>
                <?php } ?>
            </div>
        </div>

        <div>
            <h2 class="itens-title">Bebidas</h2>

            <div class="bloco-div">
                <?php for($i=0; $i < count($menu['bebidas']); $i++) {?>
                    <div class="card-div">
                        <img class="img"src="./img/<?php echo $menu['bebidas'][$i]["img"]; ?>" alt="">
                        <span><?php echo $menu['bebidas'][$i]['nome'];?></span>
                        <span>R$ <?php echo $menu['bebidas'][$i]['preco'];?></span>

                        <input type="radio" name="bebida" value="<?php echo $i; ?>">
                    </div>
                <?php } ?>
            </div>
        </div>

        <div>
            <button class="main-button"type="submit">Adicionar ao carrinho</button>
        </div>
    </form>
</body>
</html>