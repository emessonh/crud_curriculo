<?php
    session_start();

    require_once 'conexao.php';

    print_r("<p>Não entrou no if</p>");
    if (isset($_POST['bt_cadastrar_formacao']))
    {
        echo "<p>Entrou no if da formacao</p>";
        $nivel =  mysqli_real_escape_string($con, $_POST["nivel"]);
        $nome_curso =  mysqli_real_escape_string($con, $_POST["nome_curso"]);
        $instituicao =  mysqli_real_escape_string($con, $_POST["instituicao"]);
        $situacao =  mysqli_real_escape_string($con, $_POST["situacao"]);
        $ano_inicio =  mysqli_real_escape_string($con, $_POST["ano_inicio"]);
        $ano_termino =  mysqli_real_escape_string($con, $_POST["ano_termino"]);
        $id_usuario = mysqli_real_escape_string($con, $_SESSION['idusuario']);

        $sql = "INSERT INTO cursos(nivel, nome_curso, instituicao, situacao, ano_inicio, ano_termino, idusuarios) 
        VALUES ('$nivel','$nome_curso', '$instituicao', '$situacao','$ano_inicio', '$ano_termino', '$id_usuario')";
        var_dump($sql);
        if (mysqli_query($con, $sql))
        {
            $_SESSION['mensagem'] = "Cadastro realizado com sucesso<br>";
            $_SESSION['status'] = 'sucess';
            header("Location: ../painel.php");   
        }else{
            $_SESSION['mensagem'] = "Falha ao realizar o cadastro<br>";
            $_SESSION['status'] = 'danger';
            header("Location: ../painel.php");   
        }
        mysqli_close($con);
    }