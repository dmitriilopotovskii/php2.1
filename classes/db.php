<?php

class db
{

    public function __construct()
    {

        $config = include __DIR__ . '/../config/db.php';
        mysql_connect($config['host'], $config['user'], $config['password'])
        || die('problema s podklucheniem');
        mysql_select_db($config['dbname'])
        || die('net takoi bazi');


    }
    public function query($sql)
    {
        mysql_query($sql)
        || die('nevernii zapros');

    }

    public function QueryObject($sql)
    {
        $res = mysql_query($sql);
        if (false === $res) {
            return false;
        }
        $ret = [];
        while ($row = mysql_fetch_object($res)) {
            $ret[] = $row;
        }
        return $ret;

    }

    public function QueryObjectOne($sql)
    {
        return $this->QueryObject($sql)[0];
    }
}
