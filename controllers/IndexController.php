<?php

include_once 'models/CategoriesModel.php';
include_once 'models/ProductsModel.php';

function testAction() {
    echo 'IndexController.php > testAction';
}

function indexAction($smarty, $db) 
{ 
    $smarty->assign('pageTitle', 'Главная страница сайта');
    $smarty->assign('rsCategories', getAllMainCatsWithChildren($db)); 
    $smarty->assign('rsProducts', getLastProducts(16, $db));
    
    //print_r(getLastProducts(16, $db));    
    //print_r(getAllMainCatsWithChildren($db));  
    
    $smarty->display('header' . TemplatePostfix);    
    $smarty->display('index' . TemplatePostfix);
    $smarty->display('footer' . TemplatePostfix);       
}



