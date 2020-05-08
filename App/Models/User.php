<?php

namespace App\Models;

use App\Db;

class User
{
    const TABLE='users';
    //public static $table='users';

    public $id_staff;
    public $name_staff; 
    public $surname_staff;
    public $secondname_staff;
    public static function findAll(){
        $db=new Db();
        return $db->query('SELECT * FROM  '.self::TABLE, 'App\Models\User');
    }
}
//$user=User::findAll();