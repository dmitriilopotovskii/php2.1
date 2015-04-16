<?php
require __DIR__ . '/controllers/NewsController.php';
$news  = new NewsController();
$news->actionAll();

