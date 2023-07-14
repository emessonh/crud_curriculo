<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Emesson Horácio">
    <title>Curriculo - Online</title>

    

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/geral.css">

    
    
    
    <!-- Custom styles for this template -->
    <link href="assets/css/carousel.css" rel="stylesheet">
  </head>
  <body>
    <!-- Estilo da pagina e imagens dos cadastros e configuração -->
    <link rel="stylesheet" href="assets/css/stilo_pagina.css">
    <!-- barra de navegação superior -->
    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Curriculo Online</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="perfil.php">Perfil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="formacoes.php">Formações</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="cursos.php">Cursos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="curriculo.php">Currículos</a>
              </li>
            </ul> 
            
            <link rel="stylesheet" href="assets/css/geral.css">
            <link rel="stylesheet" href="assets/css/bt_logout.css">
            <a href="acoes/logout.php">
              <button class="Btn">
        
                <div class="sign"><svg viewBox="0 0 512 512"><path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"></path></svg></div>
                <div class="text">Logout</div>
              </button>
            </a>
            
          </div>
        </div>
      </nav>
    </header>

  <main>
    <div class="container-fluid">
      <?php include_once "acoes/escrever-mensagem.php"?>
    </div>
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/imagem01.jpg">

          <div class="container">
            <div class="carousel-caption ">
              <h1>Cadastre suas formações</h1>
              
              <p>Mantenha suas formações sempre atualizadas</p>
              <p><a class="btn btn-lg btn-primary" href="#">Saiba mais</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
        <img src="images/imagem02.jpg">

          <div class="container">
            <div class="carousel-caption">
              <h1>Cadastre seus cursos</h1>
              <p>Faça a atualização dos seus cursos</p>
              <p><a class="btn btn-lg btn-primary" href="#">Saiba mais</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
        <img src="images/imagem03.jpg">
          <div class="container">
            <div class="carousel-caption">
              <h1>Atualize seu perfil</h1>
              <p>Mantenha seus dados atualizados</p>
              <p><a class="btn btn-lg btn-primary" href="#">Saiba mais</a></p>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">


          <h2>Cadastro de formações</h2>
          
          <p>Cadastre aqui suas formações</p>
            <p><img src="images/chapeu_formacao.png" class="img-responsive img-redonda" style="display:inline" alt="Foto" width="200"></p>
            <p><a class="btn btn-secondary" href="cadastrar-formacao.php">Cadastro de formações &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">

          <h2>Cadastro de cursos</h2>
          <p>Cadastre aqui seus cursos adicionais</p>
          <p><img src="images/html_logo.jpg" class="img-responsive img-redonda" style="display:inline" alt="Foto" width="200"></p>
          <p><a class="btn btn-secondary" href="cadastrar-curso.php">Cadastro de cursos &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">

          <h2>Configurações</h2>
          <p>Altere as configurações</p>
          <p><img src="images/config.jpg" class="img-responsive img-redonda" style="display:inline" alt="Foto" width="200"></p>
          <p><a class="btn btn-secondary" href="configuracoes.php">Configurações &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <hr class="featurette-divider">



    </div><!-- /.container -->


    <!-- FOOTER -->
    <footer class="container">
      <div class="float-end" style="display: inline">
        <a href="#" >
        Voltar ao Topo
        </a>
      </div>
      <p>
        &copy; 2023 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a>
      </p>
    </footer>
  </main>

  <script src="assets/js/bootstrap.bundle.min.js"></script>
    
  </body>
</html>
