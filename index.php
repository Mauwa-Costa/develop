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