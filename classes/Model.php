<?php

require __DIR__ . '/../classes/db.php';

abstract class Model
{

    protected static $table;
    public $title, $text, $id, $fileName;


    public static function getTable()
    {
        return static::$table;
    }

    abstract protected function DbImgDir();


    public static function findAll()
    {
        $class = static::class;
        $sql = 'SELECT * FROM ' . static::getTable();
        $db = new db();
        return $db->findAll($class, $sql);
    }

    public static function findOne($id)
    {
        $class = static::class;
        $sql = 'SELECT * FROM ' . static::getTable() . ' WHERE id=:id';
        $db = new db();
        return $db->findOne($class, $sql, [':id' => $id]);
    }

    public function NewsAdd()
    {
        $title = $this->title;
        $text = $this->text;
        $sql = 'INSERT INTO ' . static::getTable() . ' ( id, title, text, img, date) VALUES (NULL, :title , :text , :imgUrl , CURRENT_TIMESTAMP )';
        $imgUrl = $this->DbImgDir() . $this->fileName;
        $pdo = new db();
        $this->id = $pdo->prepare($sql, [':title' => $title, ':text' => $text, ':imgUrl' => $imgUrl]);


    }

    public function NewsUpdate($id)
    {
        $title = $this->title;
        $text = $this->text;
        $sql = 'UPDATE ' . static::getTable() . ' SET title=:title , text=:text WHERE id=:id';
        $pdo = new db();
        $pdo->prepare($sql, [':title' => $title, ':text' => $text, ':id' => $id]);
    }

    public function Delete()
    {
        $id= $this->id;
        $sql = 'DELETE FROM ' . static::getTable() . ' WHERE id=:id';
        var_dump($sql);
        $pdo = new db();
        $pdo->prepare($sql, [':id' => $id]);

    }

    public function uploadImg($uploadDir)
    {
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
            $this->NewsUpdate($this->id);
        } else {
            $this->NewsAdd();
        }
    }


}


