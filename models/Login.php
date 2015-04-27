<?php

class Login
{
    protected static $table = 'users';
    protected $username, $password;
    public $id, $role;

    public static function GetLogin()
    {
        $class = static::class;
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = 'SELECT * FROM ' . static::getTable() . ' WHERE username=:username AND password=:password';
        $pdo = new db();
        $res = $pdo->findOne($class, $sql, [':username' => $username, ':password' => $password]);
        if ($res) {
            return $res;
        } else {
            throw new E403Exception('oshibka');
        }

    }

    public static function getTable()
    {
        return static::$table;
    }

   
}
