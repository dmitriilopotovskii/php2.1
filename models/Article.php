<?php

require __DIR__ . '/../db/db.php';

abstract class Article
{
    public function __construct()
    {
        $this->News = new db();
    }

    abstract protected function getTable();

    public function allNews()
    {
        $ret = $this->News->QueryObject('SELECT * FROM `' . $this->getTable() . '`ORDER BY date DESC');
        return $ret;

    }

    public function oneNews($id)
    {
        $ret = $this->News->QueryObjectOne('SELECT * FROM ' . $this->getTable() . ' WHERE id=' . $id);
        return $ret;

    }
}
