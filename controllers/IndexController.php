<?php

include_once 'models/CategoriesModel.php';

function testAction() {
    echo 'IndexController.php > testAction';
}

function indexAction($smarty) {
    $rsCategories = getAllMainCatsWithChildren();
    $smarty->assign('pageTitle', 'Главная страница сайта');
    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'index');
    loadTemplate($smarty, 'footer');      
}



