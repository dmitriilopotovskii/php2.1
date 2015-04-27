<?php

class Login
{
    protected static $table = 'users';
    private $username,$password,$role;
    public $id;

    public function GetLogin()
    {   $class = static::class;
        $this->username = $_POST['username'];
        $this->password = $_POST['password'];
        $sql = 'SELECT * FROM ' . static::getTable() . ' WHERE username=:username AND password=:password';
        $pdo = new db();
        $res = $pdo->findOne($class,$sql, [':username' =>  $this->username, ':password' => $this->password]);
        if ($res) {
            return $res;
        } else {
            throw new E403Exception('oshibka');
        }

    }

    public function GetRole()
    {
      $role = $this->GetLogin();
        $this->role = $role['role'];
    }
}
