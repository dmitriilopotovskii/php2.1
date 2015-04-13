<?php
require __DIR__ . '/models/allnews.php';
$news  = new newsQuery();
$oneNews = $news->oneNews();
require __DIR__ . '/views/article.php';
?>