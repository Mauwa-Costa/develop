/* Importa a parte HTML do meio do nosso template */
if (file_exists($page_template)) {
    require_once $page_template;
} else {
    /* importa a página de erro 404 not found */
    require_once 'templates/page_not_found.php';
}

/* Importa a parte HTML de baixo do nosso template */
require_once 'templates/foot.php';