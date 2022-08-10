<?php

function is_authenticated()
{
    if (empty($_SESSION['is_authenticated'])){
        return false;
    } else {
        return true;
    }
}

if (empty($_POST['username']) || empty($_POST['password'])) {
    set_flash_message("Todos os campos são de preenchimento obrigatório!");
    url_redirect(['route' => 'login']);
}