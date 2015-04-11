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
    }

    public function selectDb($database)
    {
        mysql_select_db($database)
        || die('net takoi bazi');
    }
    public function query($sql)
    {
        mysql_query($sql)
        || die('nevernii zapros');

    }
}
$a = new db('localhost','root','');
$a->connectDb();
$a->selectDb('lesson');
$a->query('SELECT * FROM `lessons2`');
var_dump($a);
?>
