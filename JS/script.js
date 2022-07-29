// Enviar um arequisição GET para um endereço web
fetch("http://localhost/aula0729/PHPs/controller.php")

// garantir que a resposta está no formato JSON
.then(
    function (response){
        return response.json();
})

// Realizar as operações de interesse
.then(
    function(response){
        console.log(response)
})