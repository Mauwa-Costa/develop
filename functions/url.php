<?php

function url_redirect($values = []) {
    $buildQueryString = http_build_query($values);
    header('Location: http://localhost/http://localhost:8888/exercicios/Exercicio%2003%20-%20Minha%20primeira%20aplicacao:sistema%20em%20PHP/?' . $buildQueryString);

    exit; 
}