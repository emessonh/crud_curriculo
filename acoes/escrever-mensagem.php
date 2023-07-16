<?php
    if (isset($_SESSION['mensagem']))
    {
        echo "<div class='alert alert-{$_SESSION['status']} alert-dismissible fade show' role='alert'>
                {$_SESSION['mensagem']}
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
              </div>";
        unset($_SESSION['mensagem']);
    }