<?php

function url_redirect($values = []) {
    $buildQueryString = http_build_query($values);
    header('Location: http://localhost/http://localhost:8888/exercicios/Minha-primeira-aplicacao-sistema-em-PHP?' . $buildQueryString);

    exit; 
}