<?php

// Константы
define("PATH_MAIN", "/memuran/");
define("PATH_MAIN_API", "http://memuran/api/");
define("CURRENT_TEMPLATE", "base");

// Абсолютные пути к директориям
define("PATH_TEMPLATES", PATH_MAIN . "templates/");
define("PATH_CURRENT_TEMPLATE", PATH_TEMPLATES . CURRENT_TEMPLATE . "/");

// Загружаемые файлы
define("PATH_UPLOAD", "/upload/");

define("PATH_UPLOAD_PICTURES", PATH_UPLOAD . "pictures/");
define("PATH_UPLOAD_VIDEO", PATH_UPLOAD . "video/");
define("PATH_UPLOAD_AUDIO", PATH_UPLOAD . "audio/");

define("RUSSIAN_MONTH", array(
    "янв",
    "фев",
    "мар",
    "апр",
    "май",
    "июн",
    "июл",
    "авг",
    "сен",
    "окт",
    "ноя",
    "дек"
));