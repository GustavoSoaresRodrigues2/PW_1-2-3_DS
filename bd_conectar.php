<?php
   function abrirConexao() {
           $host = 'fdb26.awardspace.net';
           $usuario = '3442405_bancoguto';
           $senha = 'souza2102';
           $bd = '3442405_bancoguto';
           
           $conexao = new mysqli($host, $usuario, $senha, $bd);
		   
           return $conexao;
   }
   
   function fecharConexao($conexao) {
           @mysqli_close($conexao) or die (mysqli_error($conexao));
   }
?>