<?php

include_once 'models/CategoriesModel.php';

function testAction() {
    echo 'IndexController.php > testAction';
}

function indexAction($smarty, $db) {
    $rsCategories = getAllMainCatsWithChildren($db);
    d($rsCategories);
    $smarty->assign('pageTitle', 'Главная страница сайта');
    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'index');
    loadTemplate($smarty, 'footer');      
}



