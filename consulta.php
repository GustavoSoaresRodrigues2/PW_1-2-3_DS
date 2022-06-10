<?php
    require './bd_conectar.php';
    require './aluno.php';

    header('Access-Control-Allow-Origin:*');

    $conexao = abrirConexao();

    $query = "SELECT * FROM Tbl_Aluno";

    $resultado = mysqli_query($conexao, $query) or die ("Eroo ao tentar Consultar");

    $array = [];
    
    while($registro = mysqli_fetch_array($resultado)){
        $nome = $registro['nome'];
        $nota1 = $registro['nota1'];
        $nota2 = $registro['nota2'];
        $nota3 = $registro['nota3'];
        $aluno = new Aluno($nome, $nota1, $nota2, $nota3);

        array_push($array, $aluno);
    }

    $json = json_encode($array);

    echo $json;

    fecharConexao($conexao);
?>