<?php

class db
{
    private $host, $username, $password;

    public function __construct($host, $user, $pass)
    {
        $this->host = $host;
        $this->username = $user;
        $this->password = $pass;
    }

    public function connectDb()
    {
        mysql_connect($this->host, $this->username, $this->password)
        || die('problema s podklucheniem');
        echo 'successfully connected to database';
    }

    public function selectDb($database)
    {
        mysql_select_db($database)
        || die('net takoi bazi');
        echo 'successfully selected database';
    }


}
$a = new db('localhost','root','')
?>
