<?php

$dblocation = '127.0.0.1';
$dbname = 'myshop';
$dbuser = 'root';
$dbpasswd = '';

// соединяемся с БД

$db = mysqli_connect($dblocation, $dbuser, $dbpasswd, $dbname);

if (! $db) {
    echo 'Ошибка доступа к MySql';
    exit();
}

mysqli_set_charset($db , 'utf8');