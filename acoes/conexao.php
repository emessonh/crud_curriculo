<?php
    $host     = "127.0.0.1";
    $user     = "root";
    $password = "em03122017";
    $dbname   = "curriculo";

    // CONEXAO
    @$con = mysqli_connect($host, $user, $password, $dbname);

    // TESTAR CONEXAO
    if(mysqli_connect_error()) {
        exit;
    } 