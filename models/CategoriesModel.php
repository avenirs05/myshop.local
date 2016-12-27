<?php

//модель для таблицы категорий

function getAllMainCatsWithChildren() {
    $sql = 'SELECT * 
           FROM categories
           WHERE parent_id = 0';
}
