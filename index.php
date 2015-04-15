<?php
require __DIR__ . '/models/NewsArticle.php';
$news  = new NewsArticle();
$allNews = $news->allNews();
require __DIR__ . '/views/index.php';
