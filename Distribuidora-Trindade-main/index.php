<!DOCTYPE html> <!-- VERSÃO DO HTML5 -->
<html lang="pt-br"> <!-- Idioma da página -->

<head> <!-- Cabeçalho do site -->
    <meta charset="UTF-8"> <!-- Padrão de caracteres -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Responsivo para mobile -->

    <!-- Google Fonts - Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600;700;900&display=swap"
        rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Seus estilos -->
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Distribuidora Trindade</title>
</head>

<body>

    <!-- Menu superior -->
    <?php require_once('conteudo/topoMenu.php'); ?>

    <!-- Conteúdo principal -->
    <div class="conteudo">
        <div class="textos">
            <h1><span>Qualidade que você confia, direto ao seu alcance!</span></h1>
            <p>
                Oferecemos ovos frescos e selecionados para levar o melhor à sua mesa. Nosso compromisso é com a
                excelência e a satisfação de cada cliente. Conte com a gente para abastecer sua família ou seu negócio
                com o que há de melhor no mercado. Distribuímos qualidade, confiança e sabor!
            </p>
        </div>

        <div class="imagem">
            <img src="img/ovos-branco.png" alt="Ovos Brancos" class="imagem-ovo">
        </div>
    </div>

    <!-- Menu de seleção de produtos -->
    <div class="menu">
        <div>
            <img src="img/ovo-menu1.png" class="botao-menu"
                onclick="trocarImagem('img/ovo-branco.png'); trocarCor('#ff8c00');">
            <p>Ovos Brancos</p>
        </div>

        <div>
            <img src="img/ovo-menu2.png" class="botao-menu"
                onclick="trocarImagem('img/ovo-vermelho.png'); trocarCor('#8b5742');">
            <p>Ovos Vermelhos</p>
        </div>

        <div>
            <img src="img/ovo-menu3.png" class="botao-menu"
                onclick="trocarImagem('img/ovo-codorna.png'); trocarCor('#ada86d');">
            <p>Ovos de Codorna</p>
        </div>
    </div>

    <!-- WhatsApp flutuante -->
    <a href="https://wa.me/5511913603956" target="_blank" class="whatsapp-button" title="Fale conosco pelo WhatsApp">
        <img src="img/zap.png" alt="WhatsApp">
    </a>

    <!-- Informações adicionais -->
    <p class="entrega-info">Entregamos na região – Taxa de entrega R$: 3,00</p>
    <p class="entrega-info">Vendemos no atacado e no varejo</p>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>

</body>
</html>
