<!DOCTYPE html> <!-- A VERSÃO MAIS NOVA DO HTML -->
<html lang="pt-br"> <!-- HTML + IDIOMA DO SITE -->

<head> <!-- CONFIGURAÇÕES DO SITE -->
    <meta charset="UTF-8"> <!-- PADRÃO DE CARACTERES -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- COMPATÍVEL COM CELULARES E COMPUTADORES-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Trindade </title> <!-- TÍTULO DO SITE -->
</head>

<body>



<?php require_once('conteudo/topoMenu.php'); ?>





    <div class="conteudo">

        <div class="textos">
            <h1><span>Qualidade que você confia, direto ao seu alcance!</span></h1>
            <p>Oferecemos ovos frescos e selecionados para levar o melhor à sua mesa. Nosso compromisso é com a
                excelência e a satisfação de cada cliente. Conte com a gente para abastecer sua família ou seu negócio
                com o que há de melhor no mercado. Distribuímos qualidade, confiança e sabor!</p>

        </div>

        <div class="imagem">


            <img src="img/ovos-branco.png" class="imagem-ovo">
        </div>
    </div>

    <div class="menu">

        <img src="img/ovo-menu1.png" class="botao-menu"
            onclick="trocarImagem('img/ovo-branco.png'); trocarCor('#ff8c00');">
        <p>Ovos Brancos</p>

        <img src="img/ovo-menu2.png" class="botao-menu"
            onclick="trocarImagem('img/ovo-vermelho.png'); trocarCor('#8b5742');">
        <p>Ovos Vermelhos</p>

        <img src="img/ovo-menu3.png" class="botao-menu"
            onclick="trocarImagem('img/ovo-codorna.png'); trocarCor('#ada86d');">
        <p>Ovos de Codorna</p>
    </div>






    <a href="https://wa.me/5511913603956" target="_blank" class="whatsapp-button" title="Fale conosco pelo WhatsApp">
        <img src="img/zap.png" alt="WhatsApp">
    </a>

    <p class="entrega-info">Entregamos na Região taxa de entrega R$:3,00</p>
    <p class="entrega-info">Vendemos no Atacado e no Varejo</p>




</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>

</html>