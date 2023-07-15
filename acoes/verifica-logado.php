<?php
    if (!isset($_SESSION['email']) || !isset($_SESSION['idusuario']))
    {
        header('Location: ../index.php');
    } 