<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: HEAD, GET, POST, PUT, PATCH, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method,Access-Control-Request-Headers, Authorization");
header("Content-Type: application/json");
$sMethod = $_SERVER["REQUEST_METHOD"];
if ($sMethod == "OPTIONS") {
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method,Access-Control-Request-Headers, Authorization");
    header("HTTP/1.1 200 OK");
    die();
}

include_once "../config/database.php";
include_once "../objects/note.php";

$database = new Database();
$db = $database->getConnection();

$oNote = new Note($db);

$arActiveDates = $oNote->getAllActiveDate();

if ($arActiveDates) {
    echo json_encode($arActiveDates);
} else {
    http_response_code(400);
    echo json_encode(array("message" => "Не найдены активные даты"));
}