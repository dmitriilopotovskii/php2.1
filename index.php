<?php


if (isset($_GET['admin']))
{
    require __DIR__ . '/controllers/AdminController.php';
    if ($_GET['admin'] == 'add')
    {
        $news = new NewsArticle;
        $news->id = $_POST['id'];
        $news->title = $_POST['title'];
        $news->text = $_POST['text'];
        $news->fileName = $_FILES['userfile']['name'];
        $news->uploadImg(__DIR__.'/views/img/');
        $news->save();
        header("Location: /");
    }
    if ($_GET['admin'] == 'del')
    {
        $news = new NewsArticle;
        $news->id = $_POST['id'];
        $news->Delete();
        header("Location: /");
    }


} else {
    $ctrl = !empty($_GET['class']) ? $_GET['class'] : 'news';
    $ctrlClassName = ucfirst($ctrl) . 'Controller';
    require_once __DIR__ . '/controllers/' . $ctrlClassName . '.php';

    $method = !empty($_GET['method']) ? $_GET['method'] : 'all';
    $methodName = 'Action' . ucfirst($method);
    $controller = new $ctrlClassName;
    $controller->$methodName();
}

