<?php 
  session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.ico">
    <meta name="description" content="">
    <meta name="author" content="Edson Maia">

    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/geral.css">

    
    <!-- Custom styles for this template -->
    <link href="assets/css/login.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin">
  <form action="acoes/login.php" method="POST">


    <h1 class="h3 mb-3 fw-normal">Login</h1>

    <div class="form-floating">
      <input type="email" name="email" class="form-control" id="floatingInput" placeholder="nome@example.com.br" autofocus>
      <label for="floatingInput">E-mail</label>
    </div>
    <div class="form-floating">
      <input type="password" name="senha" class="form-control" id="floatingPassword" placeholder="Senha">
      <label for="floatingPassword">Senha</label>
    </div>
    <div class='alert'> Não tem login? <a class='btn btn-lg btn-warning' href='cadastrar-usuario.php'> Cadastre-se </a> </div>

    <button class="w-100 btn btn-lg btn-primary" name="bt_entrar" type="submit">Entrar</button>
    <p class="mt-5 mb-3 text-muted"> Edson Maia &copy; 2021</p>

    <?php 
      include_once "acoes/escrever-mensagem.php";
    ?>
  </form>
</main>
 
  </body>
</html>