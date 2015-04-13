<?php
require __DIR__.'/../db/db.php' ;
class newsQuery
{
    public $News;
    public function __construct()
    {
        $this->News = new db('localhost','root','','lesson');
    }
    public function allNews()
    {
       $ret= $this->News->QueryArray('SELECT * FROM `lessons2` ORDER BY date DESC');
        return $ret;

    }
    public function oneNews()
    {
        $ret = $this->News->QueryArray('SELECT * FROM `lessons2` WHERE `id`= ' . $_GET['id'])[0];
        return $ret;

    }

}
