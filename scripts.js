let imagem = document.querySelector(".imagem-ovo"); 
let circulo = document.querySelector(".circulo");
let textos = document.querySelectorAll(".descricao p"); // Todos os elementos <p>

function trocarImagem(endereco) {
    imagem.src = endereco;
}

function trocarCor(cor) {
    circulo.style.background = cor;
}

function mostrarTexto(textoId) {
    // Primeiro, esconde todos os textos
    textos.forEach(texto => {
        texto.style.display = 'none';
    });

    // Mostra o texto correspondente
    let textoSelecionado = document.getElementById(textoId);
    if (textoSelecionado) {
        textoSelecionado.style.display = 'block';
    }
}
