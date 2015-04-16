<?php
require __DIR__ . './Article.php';

class NewsArticle
    extends Article
{
    protected function getTable()
    {
        return 'lessons2';
    }

    protected function GetFilePath()
    {
        return '/views/img/';
    }
}

//$add= new NewsArticle();
//$add->addNews('privet','kakdela','7429cdcs-960.jpg');