//Selecionar botão
var btn = document.querySelector("#btn_inserir");
calcularMedia();

function inserirAluno(event, count) {
  event.preventDefault();

  //Criar elementos HTML
  var td_nome = document.createElement("td");
  var td_nota1 = document.createElement("td");
  var td_nota2 = document.createElement("td");
  var td_nota3 = document.createElement("td");
  var td_media = document.createElement("td");

  //Busca as informações que estão no Forms
  var form_nome = document.querySelector(".nome");
  var form_nota1 = document.querySelector(".nota1");
  var form_nota2 = document.querySelector(".nota2");
  var form_nota3 = document.querySelector(".nota3");
  
  //Modificando o conteúdo das tds
  td_nome.textContent = form_nome.value;
  td_nota1.textContent = form_nota1.value;
  td_nota2.textContent = form_nota2.value;
  td_nota3.textContent = form_nota3.value;


  //Inserir tds na tr
  var novatr = document.createElement("tr");
  novatr.appendChild(td_nome);
  novatr.appendChild(td_nota1);
  novatr.appendChild(td_nota2);
  novatr.appendChild(td_nota3);
  novatr.appendChild(td_media);

  //Inserindo linha na tabela
  var corpoTabela = document.querySelector("#tabela");
  corpoTabela.appendChild(novatr);

  calcularMedia();

}; // Fechar função

btn.addEventListener("click",inserirAluno);