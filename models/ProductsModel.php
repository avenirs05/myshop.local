<?php

/**
 * Модель для таблицы продукции (products)
 */

function getLastProducts($limit = null, $db) 
{
    $sql = "SELECT *
            FROM products
            ORDER BY id DESC";    
    if ($limit) { $sql .= " LIMIT $limit"; } 
   
    $query = mysqli_query($db, $sql);
    
    return createSmartyRsArray($query);
 }


