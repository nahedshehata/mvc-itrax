<?php

namespace Mvc\core;
use Dcblogdev\PdoWrapper\Database ;

class model
{

   public static function dp(){
        $options = [
            'username' => 'root',
            'database' => 'testmvc',
            //optional
            'password' => '',
            'type' => 'mysql',
            'charset' => 'utf8',
            'port' => '3306'
        ];

        return $db = new Database($options);
    }


}