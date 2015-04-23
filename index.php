<?php

require __DIR__ . '/models/NewsArticle.php';



$NewsArticle = new NewsArticle;
//$NewsArticle->title = 'NExer';
//$NewsArticle->text = 'pobeda';
//$NewsArticle->NewsUpdate(51);
$NewsArticle->Delete(51);




//$AddNews->title = '';
//$AddNews->text = 'text1';
//$AddNews->fileName = '';
//$AddNews->NewsAdd();
//echo $AddNews->id;

/*if (isset($_GET['admin'])) {
    require __DIR__ . '/controllers/AdminController.php';
    $news = new AdminController;
    $news->NewsAdd();
    $news->imgAdd();
    header("Location: /");
} else {
    $ctrl = !empty($_GET['class']) ? $_GET['class'] : 'news';
    $ctrlClassName = ucfirst($ctrl) . 'Controller';
    require_once __DIR__ . '/controllers/' . $ctrlClassName . '.php';

    $method = !empty($_GET['method']) ? $_GET['method'] : 'all';
    $methodName = 'Action' . ucfirst($method);
    $controller = new $ctrlClassName;
    $controller->$methodName();
}*/