<?php
session_start();

require_once 'config.php';
require_once 'functions/url.php';
require_once 'functions/message.php';

if (empty($_GET['route'])) {
    $page = 'login';
} else {
    $page = $_GET['route'];
}

/* código de controlo */
switch ($page) {
    case 'dashboard':
        /* importa o controlador/polícia para o dashboard */
        require_once 'controllers/dashboard.php';
        break;
    case 'authenticate':
        /* importa o controlador/polícia para o authenticate */
        require_once 'controllers/authenticate.php';
        break;
    case 'logout':
        /* importa o controlador/polícia para o logout */
        require_once 'controllers/logout.php';
        break;
    
    default:
        /* Não faz nada. */
        break;
}

/**
 * Constroi o caminho do ficheiro concatenando com o valor que vem 
 * da variável $page.
 */
$page_template = 'templates/page_' . $page . '.php';

/* Importa a parte HTML de cima do nosso template */
require_once 'templates/head.php';

/* Importa a parte HTML do meio do nosso template */
if (file_exists($page_template)) {
    require_once $page_template;
} else {
    /* importa a página de erro 404 not found */
    require_once 'templates/page_not_found.php';
}

/* Importa a parte HTML de baixo do nosso template */
require_once 'templates/foot.php';