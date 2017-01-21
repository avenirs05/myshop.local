<?php

// (/category/1)

include_once 'models/CategoriesModel.php';
include_once 'models/ProductsModel.php';

function indexAction ($smarty, $db) 
{
    $catId = isset($_GET['id']) ? $_GET['id'] : null;
    if ($catId == null) { exit(); }
    
    $childCats = null;
    $productsByCat = null;
    $category = getCatById($catId, $db); 
        
    if ($category['parent_id'] == 0) {
        $childCats = getChildrenForCat($catId, $db);
    } else {
        $productsByCat = getProductsByCat($catId, $db);
    }
    
    $smarty->assign('pageTitle', 'Товары категории ' . $category['name']);
    $smarty->assign('category', $category);
    $smarty->assign('productsByCat', $productsByCat);
    $smarty->assign('childCats', $childCats);
    $smarty->assign('all_Main_Cats_With_Children', getAllMainCatsWithChildren($db));
    
    $smarty->display('header' . TemplatePostfix);
    $smarty->display('category' . TemplatePostfix);
    $smarty->display('footer' . TemplatePostfix);
}

