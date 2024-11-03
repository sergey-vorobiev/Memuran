<?php

/** Функция отладки */
function debug(&$mxData, $bAccess = true)
{
    global $USER;
    if(!$bAccess && !$USER->IsAdmin()) return;
    echo '<div class="debugger">';
    echo "<pre>" . print_r($mxData, true) . "</pre>";
    echo "<div>";
    die();
}

/** Функция для получения данных с API  */
function getDataFromAPI($url, $params = []) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    if (!empty($params)) {
        $url .= '?' . http_build_query($params);
    }

    curl_setopt($ch, CURLOPT_URL, $url);
    $output = curl_exec($ch);
    curl_close($ch);
    return json_decode($output, true);
}

/** Функция получает категорию по id  */
function getCategoryForNote($category_id) {
    return getDataFromAPI(PATH_MAIN_API . "categories/get_category_by_id.php", array("category_id" => $category_id))[0] ?? array();
}