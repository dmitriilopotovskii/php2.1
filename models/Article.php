<?php

require __DIR__ . '/../classes/db.php';

abstract class Article
{
    public function __construct()
    {
        $this->db = new db();
    }

    abstract protected function getTable();

    abstract protected function GetFileUrlDb();


    public function allNews()
    {
        $ret = $this->db->QueryObject('SELECT * FROM `' . $this->getTable() . '`ORDER BY date DESC');
        return $ret;

    }

    public function oneArticle($id)
    {
        $ret = $this->db->QueryObjectOne('SELECT * FROM ' . $this->getTable() . ' WHERE id=' . $id);
        return $ret;

    }

    public function addNews($title, $text, $files)
    {
        $this->db->query("INSERT INTO `" . $this->getTable() . "`(`id`, `title`, `text`, `img`, `date`) VALUES (NULL,'" . $title . "','" . $text . "','" . $this->GetFileUrlDb() . $files . "', CURRENT_TIMESTAMP)");
    }

    public function uploadImg($uploaddir)
    {
        $extension = pathinfo($_FILES['userfile']['name'], PATHINFO_EXTENSION);
        if ($extension == 'jpg' || $extension == 'png' || $extension == 'gif' || $extension == 'jpeg') {
            $newName = $uploaddir . $_FILES['userfile']['name'];
            return move_uploaded_file($_FILES['userfile']['tmp_name'], $newName);
        } else $error[] = 'nevernoe rashirenie';
        return $error;


    }
}
