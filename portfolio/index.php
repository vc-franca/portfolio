<?php
include './arrays/arrays.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Victor Cestari - Portfólio</title>
    <link rel="stylesheet" href="./style/index.css">
    <link rel="stylesheet" href="./style/header_footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body class="body">
    <?php require_once './arrays/header.php'; ?>

    <main class="main">
        <section class="info-cont">
            <div class="profile">
                <img src="./extras/avatar_icon.png" alt="Victor Cestari" class="profile-img">
                <div class="profile-overlay">
                    <h2>Victor Cestari</h2>
                    <p>Desenvolvedor Web</p>
                </div>
            </div>

            <div class="aboutme">
                <h1>Hello, World!</h1>
                <h4>
                    Olá! Meu nome é Victor Cestari, e sou um estudante de desenvolvimento web. Este site foi criado para compartilhar meus projetos, demonstrar minhas habilidades com <span>HTML, CSS e PHP</span> e mostrar o que posso oferecer no mundo da tecnologia.<br><br>

                    Tenho 17 anos, moro em São Paulo, e meu objetivo é ingressar em uma empresa de tecnologia como estagiário ou desenvolvedor júnior, onde eu possa aprender, crescer e contribuir com soluções criativas e eficientes.<br><br>

                    Explore à vontade o meu portfólio e conheça os projetos que desenvolvi ao longo do tempo. Se quiser me conhecer melhor, pode ver meus perfis do GitHub ou LinkedIn.<br><br>

                    Aproveite sua visita e divirta-se navegando!
                </h4>
            </div>

            <div class="info">
                <div class="text">
                    <?php
                    foreach ($dados as $dado) {
                        echo '<p>' . htmlspecialchars($dado) . '</p>';
                    }
                    ?>
                </div>
            </div>
        </section>

        <section class="objetivo">
            <div class="obj-section">
                <div class="title">
                    <h3>Curso:</h3>
                </div>
                <div class="desc">
                    <?php
                    $curso = explode(", ", $formacoes['curso']);
                    foreach ($curso as $item) {
                        echo '<p>' . $item . '</p>';
                    }
                    ?>
                </div>
            </div>

            <div class="obj-section">
                <div class="title">
                    <h3>Formação:</h3>
                </div>
                <div class="desc">
                    <?php
                    $formacao = explode(", ", $formacoes['formacao']);
                    foreach ($formacao as $item3) {
                        echo '<p>' . $item3 . '</p>';
                    }
                    ?>
                </div>
            </div>

            <div class="obj-section">
                <div class="title">
                    <h3>
                        No Curso Aprendi:
                    </h3>
                </div>
                <div class="desc">
                    <?php
                    $descricao = explode(", ", $formacoes['descricao']);

                    foreach ($descricao as $item2) {
                        echo '<p>' . $item2 . '</p>';
                    }

                    ?>
                </div>
            </div>

            <section class="section">
                <section class="obj-section">

                    <div class="desc-logo">
                        <img src="./extras/php_icon.png" class="php">
                        <img src="./extras/js_icon.png" class="js">
                        <img src="./extras/css_icon.png" class="css">
                        <img src="./extras/html_icon.png" class="html">
                        <img src="./extras/ccna_icon.png" class="ccna">
                        <img src="./extras/sql_icon.png" class="sql">
                    </div>
                </section>
            </section>
        </section>
    </main>

    <footer class="footer">
        <section class="footer-cont">
            <div class="redirect">

                <a href="https://github.com/vc-franca" target="_blank" rel="noopener noreferrer">
                    <img src="./extras/git_icon.png">
                </a>
                <p class="text">
                    <a href="https://github.com/vc-franca" target="_blank" rel="noopener noreferrer">
                        <== Meu GitHub
                            </a>
                </p>
            </div>

            <div class="redirect">
                <a href="https://www.linkedin.com/in/victor-cestari-76b844338/" target="_blank" rel="noopener noreferrer"><img src="./extras/linkedin_icon.png"></a>
                <p class="text">
                    <a href="https://www.linkedin.com/in/victor-cestari-76b844338/" target="_blank" rel="noopener noreferrer">
                        <== Meu Linkedin
                            </a>
                </p>
            </div>
        </section>

        <p class="copy">
            Victor Cestari &copy;, 2025
        </p>
    </footer>

</body>

</html>