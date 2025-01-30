<?php

include '../arrays/arrays.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfólio</title>
    <link rel="stylesheet" href="../style/portfolio.css">
    <link rel="stylesheet" href="../style/header_footer.css">
</head>

<body class="body">

    <?php

    require_once '../arrays/header.php';

    ?>

    <main class="main">
        <div class="proj">
            <h3>Dolt</h3>
            <p class="proj-desc">
                A Dolt foi um site co-criado por mim e mais dois colegas. O projeto consiste em um sistema de organização de tarefas feito para organizar ideias de forma simples, prática e eficiente.
            </p>
            <img src="../extras/dolt_icon.PNG">
            <a href="../files/Dolt.zip">
                <button>
                    <span>Projeto Completo</span>
                </button>
            </a>
        </div>

        <div class="proj">
            <h3>Livraria Cultura</h3>
            <p class="proj-desc">
                O site da Livraria Cultura foi um projeto feito em conjunto por mim e mais outros dois colegas, com o intuito de simular o que seria um site oficial da atualmente extinta Livraria Cultura.
            </p>
            <img src="../extras/cultura_icon.png">
            <a href="../files/LivrariaCultura.zip">
                <button>
                    <span>Projeto Completo</span>
                </button>
            </a>

        </div>

        <div class="proj">
            <h3>Burger King</h3>
            <p class="proj-desc">
                O projeto Burger King foi desenvolvido por mim sozinho, sendo meu primeiro site de múltiplas páginas utilizando apenas HTML e CSS. O site simula de maneira não realista o que seria um sistema de atendimento da rede de fast-food Burger King.
            </p>
            <img src="../extras/bk_icon.png">
            <a href="../files/atividade_3paginas_zipado.zip">
                <button>
                    <span>Projeto Completo</span>
                </button>
            </a>
        </div>
    </main>

    <?php

    require_once '../arrays/footer.php';

    ?>

</body>

</html>