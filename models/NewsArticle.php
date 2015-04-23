<?php

require __DIR__ . '/../classes/Model.php';

class NewsArticle extends Model
{
    protected function DbImgDir()
    {
        return '/views/img/';
    }
    protected static $table = 'lessons2';
    public $id;
    public $title;
    public $text;

}
