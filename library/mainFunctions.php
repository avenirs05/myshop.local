<?php


function loadPage($smarty, $controllerName, $actionName = 'index', $db) 
{
    include_once PathPrefix . $controllerName . PathPostfix;
    $function = $actionName . 'Action';
    $function($smarty, $db);
}

function loadTemplate ($smarty, $templateName) 
{
    $smarty->display($templateName . TemplatePostfix);
}

function d ($value = null, $die = 1) 
{
    echo 'Debug: <br><pre>';
    print_r($value);
    echo '</pre>';
    if($die) die;
}

//function createSmartyRsArray($rs) {
//    if (! $rs) return false;
//    $smartyRs = array();
//    while ($row = mysqli_fetch_assoc($rs)) {
//        $smartyRs[] = $row;
//    }
//    
//    return $smartyRs;
//}



