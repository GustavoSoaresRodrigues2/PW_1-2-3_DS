<?php
    require 'bd_conectar.php';

    $conexao = abrirConexao();

    $id = $_POST['id'];
    $matricula = $_POST['matricula'];
    $nome = $_POST['nome'];

    $query = "INSERT INTO Tbl_Aluno VALUES" . "($id, $matricula, '$nome')";

    mysqli_query($conexao, $query) or die ("Erro ao Tentar incluir");

    fecharConexao($conexao);

    echo("Incluido com SUCESSO !!");
?>