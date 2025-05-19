<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Distribuidora Trindade</title>

    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/estilo.css">
</head>

<body>
    <header class="topo">
        <img src="img/logo-trindade.jpg" alt="LogoTipo" class="logo">

        <nav class="menu-superior">
            <a href="index.php?p=dashboard">Dashboard</a>
            <a href="index.php?p=funcionarios">Funcionários</a>
            <a href="index.php?p=produtos">Produtos</a>
            <a href="index.php?p=estoque">Estoque</a>
            <a href="index.php?p=vendas">Vendas</a>
            <a href="index.php?p=itensvendidos">Itens Vendidos</a>
            <a href="index.php?p=contato">E-mails</a>
            <a href="index.php?p=relatorio">Relatórios</a>
            <a href="index.php?p=ajuda">Ajuda e Suporte</a>
        </nav>
    </header>

    <div class="box">
        <!-- CONTEÚDO DAS PÁGINAS -->

        <?php

        switch ($pagina) {
            case 'dashboard':

                break;
            case 'funcionarios':
              
                break;

            case 'produtos':
                
                break;

            case 'estoque':

                break;
            case 'vendas':
                
                break;
            case 'itensvendidos':
               
                break;
            case 'contato':
               
                break;

            case 'relatorio':

                break;
            case 'ajuda':
        }
        ?>

    </div>
    </main>

    <?php
    if ($pagina == '') {
        echo '<h2>Dashboard</h2>';
    } else {
        echo ('<h2>Página: ' . $pagina . '</h2>');
    }

    ?>


</body>



<!-- <footer class="rodapé2">
    <section>
        <p>
            DESENVOLVIDO POR DIMAS APARECIDO RABELO DE SOUZA WHATSAPP: 11972495017
        </p>
    </section>
</footer> -->


</html>