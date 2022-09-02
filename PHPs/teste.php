<?php
    require 'aluno.php';

    $aluno1 = new Aluno ('Jorge',4,5,6);
    $aluno2 = new Aluno ('Pedro',7,8,9);
    $aluno3 = new Aluno ('Carlos',10,3,2);

    $lista = [$aluno1, $aluno2, $aluno3];

    $json = json_encode($lista);

    echo $json;
?>