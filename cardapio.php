<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cardápio Pastel das Coleguinhas</title>
</head>

<body>

</body>

</html>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<div class="card">
    <div class="card-body text-center">
        <h1>
            CARDÁPIO
        </h1>
    </div>
</div>
<br>

<div class="card">
    <div class="card-body">

        <div class="row row-cols-1 row-cols-md-3 g-4">

            <?php

            include "conexao.php";

            $tab_cardapio = "SELECT * FROM cardapio where status = 1 ";

            $cardapio = mysqli_query($conn, $tab_cardapio);

            while ($rows_cardapio = mysqli_fetch_assoc($cardapio)) {

            ?>

                <div class="col">
                    <div class="card h-100" style="width: 20rem;">
                        <img src="<?php echo $rows_cardapio['image'] ?>" class="card-img-top" alt="<?php echo $rows_cardapio['image'] ?>">
                        <!-- <img src="mvc/common/img/lanche/kisabor.png"  height="270px" class="card-img-top" alt="mvc/common/img/lanche/kisabor.png"> -->
                        <div class="card-body">
                            <h5 class="card-title"><?php echo ($rows_cardapio['nome']) ?></h5>
                            <p class="card-text"><?php echo ($rows_cardapio['detalhes']) ?></p>
                        </div>
                        <div class="card-footer">
                            <font color="blue">
                                <h3>
                                    <small class=""><?php echo "R$ " . ($rows_cardapio['preco_venda']) ?></small>
                                </h3>
                            </font>
                        </div>
                    </div>
                </div>
        </div>
    </div>

<?php
            }

            die();
?>


<div class="col">
    <div class="card h-100">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a short card.</p>
        </div>
    </div>
</div>
<div class="col">
    <div class="card h-100">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
        </div>
    </div>
</div>
<div class="col">
    <div class="card h-100">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
    </div>
</div>
</div>