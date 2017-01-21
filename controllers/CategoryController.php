<?php

// (/category/1)

include_once 'models/CategoriesModel.php';
include_once 'models/ProductsModel.php';

function indexAction ($smarty, $db) 
{
    $catId = isset($_GET['id']) ? $_GET['id'] : null;
    if($catId == null) { exit(); }
    
    $rsCategory = getCatById($catId, $db);
//    d($rsCategory);
}

