<?php
ini_set('display_errors', 1);
error_reporting(E_ALL); 

$home_url="http://localhost/api/";

$page = isset($_GET['page']) ? $_GET['page'] : 1;
$category = isset($_GET['category']) ? $_GET['category'] : 0;

$records_per_page = 10;

$from_record_num = ($records_per_page * $page) - $records_per_page;

date_default_timezone_set('Europe/Moscow');