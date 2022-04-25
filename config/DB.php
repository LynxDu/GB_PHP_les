<?php

namespace config;

use \PDO;

class DB
{
    private $link;

    private $dbd = [
        'host' => 'localhost',
        'db_name' => 'gb_lesson',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8'
    ];

    public function __construct()
    {
        $this->connect();
    }

    public function connect(){

        $dsn = 'mysql:host='.$this->dbd['host'].';dbname='.$this->dbd['db_name'].';charset='.$this->dbd['charset'];

        $this->link = new PDO($dsn, $this->dbd['username'], $this->dbd['password']);

        return $this;
    }

    public function execute($sql, $values = [])
    {
        $sth = $this->link->prepare($sql);

        return $sth->execute($values);
    }

    public function query($sql, $values = [], $statement = PDO::FETCH_ASSOC) //FETCH_OBJ передача объектов, FETCH_ASSOC передача массивов
    {
        $sth = $this->link->prepare($sql);

        $sth-> execute($values);

        $result = $sth->fetchAll(PDO::FETCH_ASSOC);

        if($result === false)
        {
            return [];
        }
        else
        {
            return $result;
        }
    }
}