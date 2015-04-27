<?php

require __DIR__ . '/autoload.php';

if (isset($_GET['admin'])) {
    if ($_GET['admin'] == 'add') {
        $Add = new AdminController;
        $Add->NewsAdd();
    }
    if ($_GET['admin'] == 'del') {
        $news = new AdminController;
        $news->DeleteNews();
    }


} else {
    try {
        $ctrl = !empty($_GET['class']) ? $_GET['class'] : 'news';
        $ctrlClassName = ucfirst($ctrl) . 'Controller';
        $method = !empty($_GET['method']) ? $_GET['method'] : 'all';
        $methodName = 'Action' . ucfirst($method);
        $controller = new $ctrlClassName;
        $controller->$methodName();
    } catch (E404Exception $e) {
        require __DIR__ . '/views/404.php';
    }
}

