<?php
    $senha = '123';

    $pass_scrypt = password_hash($senha, PASSWORD_BCRYPT, ['cost' => 12]);

    if(password_verify($senha,$pass_scrypt)){
        echo 'Logado';
    }else{
        echo 'falha ao logar';
    };
    
    ?>