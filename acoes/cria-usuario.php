<?php
    // inicia a sessão
    session_start();

    require_once 'conexao.php';

    if (isset($_POST['bt_cadastrar']))
    {
        $nome =  mysqli_real_escape_string($con, $_POST["nome"]);
        $nacionalidade = mysqli_real_escape_string($con, $_POST['nacionalidade']);
        $estado_civil =  mysqli_real_escape_string($con, $_POST["estado_civil"]);
        $idade =  mysqli_real_escape_string($con, $_POST["idade"]);
        $endereco =  mysqli_real_escape_string($con, $_POST["endereco"]);
        $celular =  mysqli_real_escape_string($con, $_POST["celular"]);
        $email =  mysqli_real_escape_string($con, $_POST["email"]);
        $senha =  md5(mysqli_real_escape_string($con, $_POST["senha"]));
        $foto = "../fotos/foto-perfil.jpg";

        $sql = "INSERT INTO usuarios(nome, nacionalidade, estado_civil, idade, endereco, celular, email, senha,
        foto) VALUES ('$nome', '$nacionalidade', '$estado_civil', '$idade', '$endereco', '$celular', '$email', '$senha', '$foto')";

        if (mysqli_query($con, $sql))
        {
            $_SESSION['mensagem'] = "Cadastro realizado com sucesso<br>";
            $_SESSION['status'] = 'success';
            header("Location: ../index.php");   
        }else{
            $_SESSION['mensagem'] = "Falha ao realizar o cadastro<br>";
            $_SESSION['status'] = 'danger';
            header("Location: ../index.php");   
        }
        mysqli_close($con);
    }