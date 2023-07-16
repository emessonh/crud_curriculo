<?php
    session_start();
    require_once 'verifica-logado.php';
    require_once 'conexao.php';

    if(isset($_POST['bt_editar'])) {
        
        $nome_curso  = mysqli_real_escape_string($con, $_POST['nome_curso']);
        $instituicao = mysqli_real_escape_string($con, $_POST['instituicao']);
        $ano_curso   = mysqli_real_escape_string($con, $_POST['ano_curso']);
        $id_curso    = mysqli_real_escape_string($con, $_POST['id_curso']);

        $sql = "UPDATE cursos SET
            nome_curso = '$nome_curso',
            instituicao = '$instituicao',
            ano_curso = '$ano_curso'
            WHERE idcursos = '$id_curso'";
        // echo "$sql";

        if(mysqli_query($con, $sql)) {
            $_SESSION['mensagem'] = "Curso editado com sucesso!";
            $_SESSION['status'] = "success";
            header('Location: ../cursos.php');
        } else {
            $_SESSION['mensagem'] = "Erro na edição do curso!";
            $_SESSION['status'] = "danger";
            header('Location: ../cursos.php');
        }
        // FECHAR CONEXAO
        mysqli_close($con);
    }
