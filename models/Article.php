<?php

require __DIR__ . '/../classes/db.php';

abstract class Article
{
    public function __construct()
    {
        $this->News = new db();
    }

    abstract protected function getTable();

    abstract protected function GetFilePath();


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

    public function addNews($title, $text, $files)
    {
        $this->News->query("INSERT INTO `" . $this->getTable() . "`(`id`, `title`, `text`, `img`, `date`) VALUES (NULL,'" . $title . "','" . $text . "','" . $this->GetFilePath() . $files . "', CURRENT_TIMESTAMP)");
    }

    public function uploadImg($uploaddir)
    {
        $extension = pathinfo($_FILES['userfile']['name'], PATHINFO_EXTENSION);
        if ($extension == 'jpg' || $extension == 'png' || $extension == 'gif' || $extension == 'jpeg') {
            $newName = __DIR__ . $uploaddir . $_FILES['userfile']['name'];
            return move_uploaded_file($_FILES['userfile']['tmp_name'], $newName);
        } else $error[] = 'nevernoe rashirenie';
        return $error;


    }
}
