<?php

/**
 * Формирование запрашиваемой страницы
 * @param type $smarty
 * @param string $controllerName - имя контроллера
 * @param string $actionName - имя функции обработки страницы
 * @param type $db
 */

function loadPage ($smarty, $controllerName, $actionName = 'index', $db) 
{
    include_once PathPrefix . $controllerName . PathPostfix;
    $function = $actionName . 'Action';
    $function($smarty, $db);
}

function createSmartyRsArray ($query) 
{
    if (!$query) { return false; }

    $smartyRs = array();
    while ($row = mysqli_fetch_assoc($query)) {
        $smartyRs[] = $row;
    }
    
    return $smartyRs;
}

function d ($value = null, $die = 1) 
{
    echo 'Debug: <br><pre>';
    print_r($value);
    echo '</pre>';
    if($die) die;
}






//function loadTemplate ($smarty, $templateName) 
//{
//    $smarty->display($templateName . TemplatePostfix);
//}





