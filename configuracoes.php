<?php 
  session_start();
  require_once 'acoes/verifica-logado.php';
  $idusuario = $_SESSION['idusuario'];
?>
<!DOCTYPE html>
<html lang="pt-br">
 <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="images/favicon.ico">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title> Configurações </title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" >
  <!-- Icones -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <!-- fonte personalizada -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  
  <!-- estilo do nosso tema -->
  <link rel="stylesheet" href="assets/css/tema-curriculo.css" />
  
</head>
<body>

<!-- barra de navegacao -->
 <nav class="navbar navbar-expand-md navbar-light bg-light">
  <div class="container">
    <div class="navbar-header">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#"><?= $_SESSION['nome']; ?></a>
    </div>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="nav navbar-nav d-flex justify-content-end" id="links">
            <li><a href="painel.php">X</a></li>
        </ul>
    </div>
  </div>
</nav>
<?php 
    include_once "acoes/escrever-mensagem.php";
    include_once 'acoes/modal.php';
?>
<!-- container fluido 100% -->
<div class="container-fluid bg1 text-center" id="quem">
  <h3>Configurações</h3>
  <img src="fotos/<?= $_SESSION['foto']; ?>" class="img-responsive img-redonda" style="display:inline" alt="Foto" width="200">
  <h4> <?= $_SESSION['nome']; ?> </h4>
  <h4> <?= $_SESSION['email']; ?> </h4>
  <h4> Deseja alterar sua senha? <a href="editar-senha.php"><i class="bi bi-pencil"></i></a> </h4>
  <h4> Deseja excluir sua conta? <a href='acoes/apaga-usuario.php' data-bs-toggle='modal' data-bs-target='#exampleModal{$idusuario}'><i class='bi bi-pencil'></i></a> </h4>

  <?php
    include_once 'acoes/modal.php';
  ?>
  <a href="#" class="btn btn-light btn-lg bt">
    <i class="bi bi-arrow-up-circle"></i> Topo
  </a>
</div>

<!-- bootstrap.js -->
<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>