<?php

namespace Mvc\models;

use Mvc\core\model;
use PDO;

class user extends model
{
    public function getAllUsers(){
        return model::dp()->rows("SELECT * FROM user")->fetchAll();
    }
    public function getUser($email,$password){
        return model::dp()->run("SELECT * FROM user WHERE 'email'='$email'&& 'password'='$password'")->fetchAll();
    }




}