<?php

namespace App\Models;
class News extends \Model
{


    protected static $table = 'lessons2';
    protected static $imgDirUrl = '/views/news/img/';
    public $text,$title;
    public $img;

    public function update()//sdelat obshuu funkciy

    {   $id = $this->id;
        $title = $this->title;
        $text = $this->text;
        $sql = 'UPDATE ' . static::getTable() . ' SET title=:title , text=:text WHERE id=:id';
        $pdo = new db();
        $pdo->execute($sql, [':title' => $title, ':text' => $text, ':id' => $id]);
    }

    public function uploadImg()
    {
        $this->img = static::$imgDirUrl.$_FILES['userfile']['name'];
        $uploadDir = __DIR__.'/../'.static::$imgDirUrl;
        $extension = pathinfo($_FILES['userfile']['name'], PATHINFO_EXTENSION);
        if ($extension == 'jpg' || $extension == 'png' || $extension == 'gif' || $extension == 'jpeg') {
            $newName = $uploadDir . $_FILES['userfile']['name'];
            return move_uploaded_file($_FILES['userfile']['tmp_name'], $newName);
        } else $error[] = 'nevernoe rashirenie';
        return $error;
    }
    public function save()
    {
        if (null != $this->id) {
            $this->update();
        } else {
            $this->insert();
        }
    }
}
