<?php
require __DIR__ . '/models/allnews.php';
$news  = new newsQuery();
$allNews = $news->allNews();
require __DIR__ . '/views/index.php';
?>