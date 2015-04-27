<?php


abstract class Model
{

    protected static $table;
    public $id;


    public static function getTable()
    {
        return static::$table;
    }


    public static function findAll()
    {
        $class = static::class;
        $sql = 'SELECT * FROM ' . static::getTable();
        $db = new db();
       $res = $db->findAll($class, $sql) ;
        if ($res) {
            return $res;
        } else {
            throw new E404Exception('oshibka');
        }
    }

    public static function findOne($id)
    {
        $class = static::class;
        $sql = 'SELECT * FROM ' . static::getTable() . ' WHERE id=:id';
        $db = new db();
        $res = $db->findOne($class, $sql, [':id' => $id]);
        if ($res) {
            return $res;
        } else {
            throw new E404Exception('Не найдена запись в БД');
        }
    }


    public function Delete()
    {
        $id = $this->id;
        $sql = 'DELETE FROM ' . static::getTable() . ' WHERE id=:id';
        $pdo = new db();
        $pdo->execute($sql, [':id' => $id]);

    }


    public function insert()
    {
        $properties = get_object_vars($this);
        unset($properties['id']);
        $columns = array_keys($properties);

        $places = [];
        $data = [];
        foreach ($columns as $property) {
            $places[] = ':' . $property;
            $data[':' . $property] = $this->$property;
        }

        $sql = 'INSERT INTO ' . static::getTable() . '
                (' . implode(', ', $columns) . ')
                VALUES
                (' . implode(', ', $places) . ')
        ';
        $db = new Db();
        $db->execute($sql, $data);
        $this->id = $db->getId();
    }
}
