
<?php
require_once('mailer/Exception.php');
require_once('mailer/PHPMailer.php');
require_once('mailer/SMTP.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;



$ok = 0;

if (isset($_POST['email'])) {

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $fone = $_POST['fone'];
    $mens = $_POST['mens'];
    $assunto = "site distribuidora trindade";
 
    require_once('admin/class/contato.php');

    $contato = new ContatoClass ();

    $contato->nomecontato = $nome;
    $contato->emailcontato = $email;
    $contato->telefonecontato = $fone;
    $contato->mensagemcontato = $mens;

    $contato->Inserir();




 //Crie uma instância; passar `true (verdadeiro)`
 $mail = new PHPMailer(true);


 try {
    // Configurações do servidor
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'dimas.rabelosouza@gmail.com'; // Seu Gmail
    $mail->Password   = 'nyldclklhbdwrpuq';   // Senha de app
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;

    // Remetente e destinatário
    $mail->setFrom('dimas.rabelosouza@gmail.com', $assunto);
    $mail->addAddress('dimas.rabelosouza@gmail.com'); // Pode ser o mesmo email

    // Conteúdo do email
    $mail->isHTML(true);
    $mail->Subject = 'Nova mensagem do site';
    $mail->Body    = "
        <strong>Nome:</strong> $nome <br>
        <strong>Email:</strong> $email <br>
        <strong>Telefone:</strong> $fone <br>
        <strong>Mensagem:</strong> $mens
    ";
    $mail->AltBody = "Nome: $nome\nEmail: $email\nTelefone: $fone\nMensagem: $mens";

    $mail->send();
    echo 'Mensagem enviada com sucesso!';
} catch (Exception $e) {
    echo "Erro ao enviar. Erro: {$mail->ErrorInfo}";
}
}
?>










































<!DOCTYPE html>
<html lang="br">

<head>
    <meta charset="UTF-8"> <!-- PADRÃO DE CARACTERES -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- COMPATÍVEL COM CELULARES E COMPUTADORES-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">


    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">



</head>

<body>

    <?php require_once('conteudo/topoMenu.php'); ?>



    <h2>Perguntas ou Dúvidas? Entre em contato conosco!</h2>

    <div class="site">


        <form action="#" method="POST">
            <div class="form-group">
                <div class="form-field">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" id="nome" placeholder="*Informe seu nome: " required>
                </div>
                <div class="form-field">
                    <label for="email">E-mail:</label>
                    <input type="email" name="email" id="email" placeholder="*Informe seu e-mail: " required>
                </div>
                <div class="form-field">
                    <label for="fone">Telefone:</label>
                    <input type="tel" name="fone" id="fone" placeholder="Informe seu telefone: ">
                </div>
            </div>

            <div class="form-group">
                <div class="form-field mensagem">
                    <label for="mens">Mensagem:</label>
                    <textarea name="mens" id="mens" cols="30" rows="10"></textarea>
                </div>
                <div class="form-field">
                    <input type="submit" value="Enviar por e-mail">
                </div>
            </div>
        </form>


    </div>







    <section class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.028989542768!2d-46.386286999999996!3d-23.4954653!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce6354ae3f1e61%3A0xd9637ece86629c01!2sTrindade%20distribuidora%20de%20ovos!5e0!3m2!1spt-BR!2sbr!4v1736730644867!5m2!1spt-BR!2sbr"
            width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </section>
    <footer>
        <div class="site">
            <section class="social-media">

                <ul>
                    <li><a href="#"><img src="img/facebook.png" alt="Facebook"></a></li>
                    <li><a href="#"><img src="img/instagram.png" alt="Instagram"></a></li>
                </ul>
                <p>Distribuidora Trindade © 2025</p>
            </section>

            <section class="payment-methods">
                <h3>ACEITAMOS TODAS FORMAS DE PAGAMENTOS</h3>
                <ul>
                    <li><a href="#"><img src="img/cartao-de-debito.png" alt="Cartão de Débito"></a></li>
                    <li><a href="#"><img src="img/pix.png" alt="Pix"></a></li>
                </ul>

            </section>
        </div>
    </footer>
    <footer class="rodapé2">
        <section>
            <p>DESENVOLVIDO POR DIMAS APARECIDO RABELO DE SOUZA WHATSAPP: 11972495017</p>
        </section>


    </footer>

    <a href="https://wa.me/5511913603956" target="_blank" class="whatsapp-button" title="Fale conosco pelo WhatsApp">
        <img src="img/zap.png" alt="WhatsApp">
    </a>


</body>

</html>