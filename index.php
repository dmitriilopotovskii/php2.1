<?php
require __DIR__ . '/models/allnews.php';
$allNews = $connect->allDataQueryFromTable('lessons2');
require __DIR__ . '/views/index.php';
?>