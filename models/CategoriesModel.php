<?php

function getChildrenForCat ($catId, $db) 
{
    $sql = "SELECT * 
            FROM categories
            WHERE parent_id = $catId"; 
    $query = mysqli_query($db, $sql);
    
    if (! $query) { return false; }
    
    $smartyRs = array();
    while ($row = mysqli_fetch_assoc($query)) {
        $smartyRs[] = $row;
    }
    
    return $smartyRs; 
}

function getAllMainCatsWithChildren($db) 
{
    $sql = 'SELECT * 
           FROM categories
           WHERE parent_id = 0';    
    $query = mysqli_query($db, $sql);    
    
    $smartyRs = array();
    while ($row = mysqli_fetch_assoc($query)) {
        $rsChildren = getChildrenForCat($row['id'], $db);
        if($rsChildren) {
            $row['children'] = $rsChildren;
        } 
        $smartyRs[] = $row;
    }    
//    print_r($smartyRs);
    return $smartyRs;
}
