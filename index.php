<?php

include_once 'config/config.php'; //Инициализация настроек
include_once 'config/db.php'; //Инициализация базы данных
include_once 'library/mainFunctions.php'; //Основные функции

// Определяем контроллер, с которым будем работать
$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index';

//Определяем с какой функцией будем работать
$actionName = isset($_GET['action']) ? $_GET['action'] : 'index';

defineContollerAndAction($smarty, $controllerName, $actionName, $db);


