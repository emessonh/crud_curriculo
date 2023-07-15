<?php
    session_start();

    require_once 'conexao.php';

    if (isset($_POST['bt_cadastrar']))
    {
        $nome_curso =  mysqli_real_escape_string($con, $_POST["nome_curso"]);
        $instituicao =  mysqli_real_escape_string($con, $_POST["instituicao"]);
        $ano_curso =  mysqli_real_escape_string($con, $_POST["ano_curso"]);
        $id_usuario = mysqli_real_escape_string($con, $_SESSION['idusuario']);

        $sql = "INSERT INTO cursos(nome_curso, instituicao, ano_curso, idusuarios) VALUES ('$nome_curso', '$instituicao', '$ano_curso', '$id_usuario')";

        if (mysqli_query($con, $sql))
        {
            $_SESSION['mensagem'] = "Cadastro realizado com sucesso<br>";
            $_SESSION['status'] = 'success';
            header("Location: ../cadastrar-curso.php");   
        }else{
            $_SESSION['mensagem'] = "Falha ao realizar o cadastro<br>";
            $_SESSION['status'] = 'danger';
            header("Location: ../cadastrar-curso.php");   
        }
        mysqli_close($con);
    }