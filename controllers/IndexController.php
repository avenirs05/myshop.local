<?php

include_once 'models/CategoriesModel.php';

function testAction() {
    echo 'IndexController.php > testAction';
}

function indexAction($smarty, $db) 
{ 
    $smarty->assign('pageTitle', 'Главная страница сайта');
    $smarty->assign('rsCategories', getAllMainCatsWithChildren($db));    
    $smarty->display('header' . TemplatePostfix);    
    $smarty->display('index' . TemplatePostfix);
    $smarty->display('footer' . TemplatePostfix);      

//    $rsCategories = getAllMainCatsWithChildren($db);
//    loadTemplate($smarty, 'header');
//    loadTemplate($smarty, 'index');
//    loadTemplate($smarty, 'footer');      
}



