<?php

//модель для таблицы категорий


function getAllMainCatsWithChildren($db) {
    $sql = 'SELECT * 
           FROM categories
           WHERE parent_id = 0';
    
    $rs = mysqli_query($db, $sql);
    
    $smartyRs = array();
    while ($row = mysqli_fetch_assoc($rs)) {
        $smartyRs[] = $row;
    }
    
    return $smartyRs;
}
