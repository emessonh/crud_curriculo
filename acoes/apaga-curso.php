<?php
  session_start();
  require_once 'verifica-logado.php';
  require_once 'conexao.php';
  
  if(isset($_POST['bt_apagar'])) {
    // DELETE Deletar, apagar
    $idcurso = mysqli_real_escape_string($con, $_POST['idcurso']);

    $sql = "DELETE FROM cursos WHERE idcursos = '$idcurso'";
    
    if(mysqli_query($con, $sql)) {
      $_SESSION['mensagem'] = "Curso apagado com sucesso!";
      $_SESSION['status'] = "success";
      header('Location: ../cursos.php');
    } else {
      $_SESSION['mensagem'] = "Não foi possível apagar o curso!";
      $_SESSION['status'] = "danger";
      header('Location: ../cursos.php');
    }
    // FECHAR CONEXAO
    mysqli_close($con);
  }
?>