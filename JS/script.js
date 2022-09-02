// Enviar um arequisição GET para um endereço web
fetch("http://localhost/aula0508/PW_1-2-3_DS/PHPs/controller.php")

// garantir que a resposta está no formato JSON
.then(
    function (response){
        return response.json();
    }
)

// Realizar as operações de interesse
.then(
    function(response){
        // Passando por todas posições do JSON
        response.forEach(aluno => {
            inserirElementoNaTela(aluno);
            
        });
    }
)

function inserirElementoNaTela (aluno) {
    // Selecionando objetos do DOM com javascript
    var box = document.querySelector(".box");
    // Criando uma tag "P"
    var linha = document.createElement("p");
    // Alterando o conteúdo d atag P
    linha.textContent = `Nome: ${aluno.nome} - Média: ${aluno.media}`;
    // Adicionando a tag P na DIV com apelido BOX
    box.appendChild(linha);    
}
