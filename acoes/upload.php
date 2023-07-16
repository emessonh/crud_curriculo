<?php 
    if ($_FILES['foto']['name'] != "" || $_FILES['foto']['name'] != null)
    {
        $tipos_permitidos = ['image/jpg', 'image/jpeg', 'image/gif', 'img/png'];
        $extensao = mime_content_type($tipo);
        $ext = pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);

        // verifica se a extensaão é permitida
        if (in_array($extensao, $tipos_permitidos))
        {
            $pasta = '../fotos/';
            $temporario = $_FILES['foto']['tmp_name']; // resgata o nome original do arquivo
            $novo_nome = uniqid().".$ext"; //novo nome do arquivo

            // faz o upload do arquivo
            if (move_uploaded_file($temporario, $pasta.$novo_nome)){
                $foto = $novo_nome;
                $_SESSION['foto'] = $foto;
                $_SESSION['status'] = 'success';
            }
        }else{
            $foto = $_SESSION['foto'];
            $_SESSION['status'] = 'danger';
        }


    }else{
        $foto = $_SESSION['foto'];
    }