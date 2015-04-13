<?php
 class db
{
    private $host, $username, $password, $database;

    public function __construct($host, $username, $password, $database)
    {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
        mysql_connect($host, $username, $password)
        || die('problema s podklucheniem');
        mysql_select_db($database)
        || die('net takoi bazi');
    }


    public function query($sql)
    {
        mysql_query($sql)
        || die('nevernii zapros');

    }
    public function allDataQueryArray($sql)
    {
        $res = mysql_query($sql);
        $ret = [];
        while (false !== ($row = mysql_fetch_array($res)))
        {
            $ret[] = $row;
        }
        return $ret;
    }

}


?>
