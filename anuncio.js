document.getElementById('anunciarForm').addEventListener('submit', function(event) {
    event.preventDefault();

    let produto = document.getElementById('produto').value;
    let descricao = document.getElementById('descricao').value;
    let imagem = document.getElementById('imagem_produto').value;

    if (produto && descricao && imagem) {
        alert('Anúncio criado com sucesso!');
    } else {
        alert('Por favor, preencha todos os campos.');
    }
});