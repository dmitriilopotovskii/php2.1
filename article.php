<?php
require __DIR__ . '/models/NewsArticle.php';
$news  = new NewsArticle();
$oneNews = $news->oneNews($_GET['id']);
require __DIR__ . '/views/article.php';
?>