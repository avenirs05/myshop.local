<?php

$dblocation = '127.0.0.1';
$dbname = 'myshop';
$dbuser = 'root';
$dbpasswd = '';

// соединяемся с БД

$dbConnection = mysqli_connect($dblocation, $dbuser, $dbpasswd, $dbname);
$sql = 'SELECT * 
           FROM categories
           WHERE parent_id = 0';

if (! $dbConnection) {
    echo 'Ошибка доступа к MySql';
    exit();
}

mysqli_set_charset($dbConnection, 'utf8');