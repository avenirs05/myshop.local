<?php

function getChildrenForCat ($catId, $db) 
{
    $sql = "SELECT * 
            FROM categories
            WHERE parent_id = $catId"; 
    $rs = mysqli_query($db, $sql);
    if (! $rs) return false;
    $smartyRs = array();
    while ($row = mysqli_fetch_assoc($rs)) {
        $smartyRs[] = $row;
    }
    //d($smartyRs);
    //print_r($smartyRs);
    
    return $smartyRs; 
}

function getAllMainCatsWithChildren($db) 
{
    $sql = 'SELECT * 
           FROM categories
           WHERE parent_id = 0';    
    $rs = mysqli_query($db, $sql);    
    $smartyRs = array();
    while ($row = mysqli_fetch_assoc($rs)) {
        $rsChildren = getChildrenForCat($row['id'], $db);
        if($rsChildren) {
            $row['children'] = $rsChildren;
        }
        $smartyRs[] = $row;
    }    
    print_r($smartyRs);
    return $smartyRs;
}
