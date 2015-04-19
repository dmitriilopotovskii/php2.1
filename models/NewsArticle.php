<?php
require __DIR__ . '/Article.php';

class NewsArticle
    extends Article
{
    protected function getTable()
    {
        return 'lessons2';
    }

    protected function GetFileUrlDb()
    {
        return '/views/img/';
    }
}

