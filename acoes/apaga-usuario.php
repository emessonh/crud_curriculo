<?php
  session_start();
  require_once 'conexao.php';
  include_once 'verifica-logado.php';
  $idusuario   = $_SESSION['idusuario'];
  echo "
    <!-- modal OBS mudar o numero no id para ficar igual id no banco de dados -->
    <div class='modal fade' id='exampleModal{$idusuario}' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
      <div class='modal-dialog'>
        <div class='modal-content'>
          <div class='modal-header'>
            <h5 class='modal-title' id='exampleModalLabel'>Apagar</h5>
            <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
          </div>
          <div class='modal-body'>
            Deseja apagar seu usuário?
          </div>
          <div class='modal-footer'>
            <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Cancelar</button>
            
            <form action='acoes/apaga-formacao.php' method='POST'>
              <input type='hidden' name='idformacao' value='{$idusuario}'>
              <button type='submit' class='btn btn-primary' name='bt_apagar'>Sim</button>
            </form>

          </div>
        </div>
      </div>
    </div>
    <!-- fim modal -->";

    
  if(isset($_POST['bt_apagar'])) {
    // $id_logado   = $_SESSION['idusuario'];
    
    $sql = "DELETE FROM usuarios WHERE idusuarios = '$idusuario'";
    // echo "$sql"; exit;
    
    if(mysqli_query($con, $sql)) {
        $_SESSION['mensagem'] = "Usuário apagado com sucesso!";
        $_SESSION['status'] = 'sucess';
        unset($_SESSION['idusuario']); // para evitar acessos sem fazer login
        header('Location: ../index.php');
    } else {
        $_SESSION['mensagem'] = "Erro na exclusão do perfil!";
        $_SESSION['status'] = 'danger';
        header('Location: ../configuracoes.php');
    }
    // FECHAR CONEXAO
    mysqli_close($con);
}
