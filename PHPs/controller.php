<?php
    require 'aluno.php';

    $aluno1 = new Aluno("Joao Pedro", 10, 8, 7);
    $aluno2 = new Aluno("Gabriel", 8, 6, 7);
    $aluno3 = new Aluno("Marcelo Rodrigues", 10, 8, 9);

    $listaAlunos = array($aluno1, $aluno2, $aluno3);

    $json = json_encode($listaAlunos);

    echo $json;
?>