<?php
    session_start();
    require_once 'conexao.php';

    if (isset($_POST['bt_atualizar_dados']))
    {
        $idusuario = $_SESSION['idusuario'];
        $nome = mysqli_real_escape_string($con, $_POST['nome']);
        $nacionalidade = mysqli_real_escape_string($con, $_POST['nacionalidade']);
        $estado_civil = mysqli_real_escape_string($con, $_POST['estado_civil']);
        $idade = mysqli_real_escape_string($con, $_POST['idade']);
        $endereco = mysqli_real_escape_string($con, $_POST['endereco']);
        $celular = mysqli_real_escape_string($con, $_POST['celular']);
        $email = mysqli_real_escape_string($con, $_POST['email']);

        $sql = "UPDATE usuarios SET nome = '$nome',
        nacionalidade = '$nacionalidade',
        estado_civil = '$estado_civil',
        idade = '$idade',
        endereco = '$endereco',
        celular = '$celular',
        email = '$email'
        WHERE idusuarios = '$idusuario'";

        if (mysqli_query($con, $sql))
        {
            $_SESSION['mensagem'] = 'Perfil atualizado com sucesso!';
            $_SESSION['status'] = 'success';
            header('Location: ../perfil.php');
        }else{
            $_SESSION['mensagem'] = 'Erro ao atualizar os dados! Tente novamente!';
            $_SESSION['status'] = 'danger'; 
            header('Location: ../perfil.php');
        }

    }