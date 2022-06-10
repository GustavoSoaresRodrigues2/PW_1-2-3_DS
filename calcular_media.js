function calcularMedia() {
  var linha = 1;
  var coluna = 1;
  var media = 0; //Seleciona todas as TR
  var tr = document.querySelectorAll("tr");

  while (linha < tr.length) {
    while (coluna < 4) {
      media =
        parseInt(media) + parseInt(tr[linha].children[coluna].textContent);
      coluna++;
    }
    media = media / 3;
    tr[linha].children[coluna].textContent = media.toFixed(2);
    coluna = 1;
    linha++;
    media = 0;
  } 
  
}
