<?php
    require 'aluno.php';
    
    $aluno1 = new Aluno("Joao Pedro", 10, 8, 7);
    $aluno2 = new Aluno("Gabriel", 8, 6, 7);
    $aluno3 = new Aluno("Marcelo Rodrigues", 10, 8, 9);
    $aluno4 = new Aluno("Anderson Araujo", 7, 9, 5);
    $aluno5 = new Aluno("Luis Faio", 10, 4, 7);
    
    $listaAlunos = [$aluno1, $aluno2, $aluno3, $aluno4, $aluno5];

    $json = json_encode($listaAlunos);

    echo $json;
?>