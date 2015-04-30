<?php
session_start();
require __DIR__ . '/autoloadSPL.php';

if (isset($_GET['admin'])) {
    try {
        if ($_GET['admin'] == 'add') {
            $News = new AdminController;
            $News->NewsAdd();
        }


        if ($_GET['admin'] == 'del') {
            $News = new AdminController;
            $News->DeleteNews();
        }
    } catch (E403Exception $e) {

        require __DIR__ . '/views/403.php';
    }
} else {

    $ctrl = !empty($_GET['class']) ? $_GET['class'] : 'news';
    $ctrlClassName ='App\\Controllers\\'. ucfirst($ctrl);
    $method = !empty($_GET['method']) ? $_GET['method'] : 'all';
    $methodName = 'Action' . ucfirst($method);
    try {
        $controller = new $ctrlClassName;
        $controller->$methodName();
    } catch (E404Exception $e) {

        require __DIR__ . '/views/404.php';
    }
}

