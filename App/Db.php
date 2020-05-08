<?php

namespace App;

class Db
{
    protected $dbh;
    function __construct(){
        $this->dbh=new \PDO(('mysql:host=127.0.0.1; dbname=office; charset=utf8;'),'root','');
    }


    public function execute($sql)
    {
        $sth=$this->dbh->prepare($sql);
        $res=$sth->execute();
        return $res;
    }

    public function query($sql, $class){
        $sth=$this->dbh->prepare($sql);
        $res=$sth->execute();
        if (false !==$res){
            return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
        }
        return [];
    }

}