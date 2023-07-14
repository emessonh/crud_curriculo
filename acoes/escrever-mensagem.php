<?php
    if (isset($_SESSION['mensagem']))
    {
        echo "<div class='alert alert-{$_SESSION['status']} alert-dismissible fade show' role='alert'>
                {$_SESSION['mensagem']}
              </div>";
        unset($_SESSION['mensagem']);
    }