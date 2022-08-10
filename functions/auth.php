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

$login = $_POST['username'];
$password = $_POST['password'];

if ($login == USER_LOGIN && $password == USER_PASSWORD) {
    $_SESSION['is_authenticated'] = true;
    set_flash_message("Utilizador autenticado com sucesso!");
    url_redirect(['route' => 'dashboard']);
} else {
    set_flash_message("Utilizador ou senha incorreta, tente novamente!");
    url_redirect(['route' => 'login']);
}

if (!is_authenticated()) {
    set_flash_message('Acesso negado: Faça login para ter acesso a este conteúdo.');
    url_redirect(['route' => 'login']);
}