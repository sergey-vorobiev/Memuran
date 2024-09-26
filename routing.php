<?php

/**
 * Роутинг для сайта
 */

$sRequest = $_SERVER['REQUEST_URI'];

switch($sRequest){
    case '/':
        require_once __DIR__ . PATH_CURRENT_TEMPLATE . "index.php";
        break;

    case '/events/':
        require_once __DIR__ . PATH_CURRENT_TEMPLATE . "events.php";
        break;

    case '/calendar/':
        require_once __DIR__ . PATH_CURRENT_TEMPLATE . "calendar.php";
        break;

    case '/admin/':
        require_once __DIR__ . PATH_MAIN . "admin/index.php";
        break;

    default:
        http_response_code(404);
        require_once __DIR__ . PATH_CURRENT_TEMPLATE . "404.php";
}