<?php
    session_start();
    require_once "conexao.php";

    if (isset($_POST['bt_entrar']))
    {
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $senha = md5(mysqli_real_escape_string($con, $_POST['senha']));

        $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha='$senha'";

        // executa a instrução sql
        $resultado = mysqli_query($con, $sql);

        // verifica se a consulta retornou algum valor
        if (mysqli_affected_rows($con) > 0)
        {
            // cria array associativo
            $dados = mysqli_fetch_array($resultado);

            // salva as variáveis de sessao
            $_SESSION['mensagem'] = 'Login efetuado com sucesso';
            $_SESSION['status'] = 'success';
            $_SESSION['idusuario'] = $dados["idusuarios"];
            $_SESSION['email'] = $dados["email"];
            var_dump($_SESSION['email']);
            header('Location: ../painel.php');
        }else{
            $_SESSION['mensagem'] = 'Erro ao efetuar login! Email e ou senha incorretos!';
            $_SESSION['status'] = 'danger';
            
            header('Location: ../index.php');
        }
        mysqli_close($con);
    }