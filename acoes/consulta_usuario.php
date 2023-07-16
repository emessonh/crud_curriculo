<?php

    require_once 'conexao.php';
    $id_logado = $_SESSION['idusuario'];

    $sql = "SELECT * FROM usuarios WHERE idusuarios = '$id_logado'";

    $resultado = mysqli_query($con, $sql);
    $dados = mysqli_fetch_assoc($resultado);

   $idusuario = $dados['idusuarios'];
   $nome = $dados['nome'];
   $nacionalidade = $dados['nacionalidade'];
   $estado_civil = $dados['estado_civil'];
   $idade = $dados['idade'];
   $endereco = $dados['endereco'];
   $celular = $dados['celular'];
   $email = $dados['email']; 
   $foto = $dados['foto'];

   $_SESSION['nome'] = $nome;
   $_SESSION['nacionalidade'] = $nacionalidade;
   $_SESSION['estado_civil'] = $estado_civil;
   $_SESSION['idade'] = $idade;
   $_SESSION['endereco'] = $endereco;
   $_SESSION['celular'] = $celular;
   $_SESSION['email'] = $email; 
   $_SESSION['foto'] = $foto;
