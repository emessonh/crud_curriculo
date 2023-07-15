
<?php
    session_start();

    require_once 'conexao.php';

    if (isset($_POST['bt_cadastrar_formacao']))
    {
    
        $nivel =  mysqli_real_escape_string($con, $_POST["nivel"]);
        $nome_curso =  mysqli_real_escape_string($con, $_POST["nome_curso"]);
        $instituicao =  mysqli_real_escape_string($con, $_POST["instituicao"]);
        $situacao =  mysqli_real_escape_string($con, $_POST["situacao"]);
        $ano_inicio =  mysqli_real_escape_string($con, $_POST["ano_inicio"]);
        $ano_termino =  mysqli_real_escape_string($con, $_POST["ano_termino"]);
        $id_usuario = mysqli_real_escape_string($con, $_SESSION['idusuario']);

        $sql = "INSERT INTO formacoes(nivel, nome_curso, instituicao, situacao, ano_inicio, ano_termino, idusuario) 
        VALUES ('$nivel','$nome_curso', '$instituicao', '$situacao','$ano_inicio', '$ano_termino', '$id_usuario')";
        var_dump($sql);
        if (mysqli_query($con, $sql))
        {
            $_SESSION['mensagem'] = "Cadastro realizado com sucesso<br>";
            $_SESSION['status'] = 'sucess';
            header("Location: ../cadastrar-formacao.php");   
        }else{
            $_SESSION['mensagem'] = "Falha ao realizar o cadastro<br>";
            $_SESSION['status'] = 'danger';
            header("Location: ../cadastrar-formacao.php");   
        }
        mysqli_close($con);
    }