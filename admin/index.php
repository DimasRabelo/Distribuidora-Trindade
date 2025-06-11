<?php
// Pegando o valor da URL
$pagina = isset($_GET['p']) ? $_GET['p'] : 'dashboard';

// Lista de nomes para exibir com acento e formatação
$nomesPaginas = [
    'dashboard'     => 'Dashboard',
    'funcionarios'  => 'Funcionários',
    'produtos'      => 'Produtos',
    'estoque'       => 'Estoque',
    'vendas'        => 'Vendas',
    'itensvendidos' => 'Itens Vendidos',
    'contato'       => 'E-mails',
    'relatorio'     => 'Relatórios',
    'ajuda'         => 'Ajuda e Suporte'
];

// Se não encontrar no array, mostra o valor cru (sem acento)
$nomePaginaAtual = $nomesPaginas[$pagina] ?? strtoupper($pagina);
?>




<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Distribuidora Trindade</title>

    <link rel="stylesheet" href="./css/reset.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
                 require_once('funcionarios/funcionarios.php');
              
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


 <div class="pagina-atual">
    PÁGINA: <span class="nome-pagina">
        <?php echo strtoupper($nomePaginaAtual); ?>
    </span>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>



<!-- <footer class="rodapé2">
    <section>
        <p>
            DESENVOLVIDO POR DIMAS APARECIDO RABELO DE SOUZA WHATSAPP: 11972495017
        </p>
    </section>
</footer> -->


</html>