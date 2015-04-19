<?php
$ctrl = !empty($_GET['url']) ? $_GET['url'] : 'news';
$ctrlClassName = ucfirst($ctrl) . 'Controller';
require_once __DIR__.'/controllers/'.$ctrlClassName.'.php';

$method = !empty($_GET['method']) ? $_GET['method'] : 'all';
$methodName = 'Action'.ucfirst($method);
$controller = new $ctrlClassName;
$controller->$methodName();



