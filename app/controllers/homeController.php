<?php

namespace Mvc\controllers;
use Mvc\core\controller;
use Mvc\core\helper;
use Mvc\core\session;
use Mvc\models\user;
use PDO;
use Rakit\Validation\Validator;

class homeController extends controller
{


    public function __construct()
    {
        session::Start();

    }

    public function login()
    {
        $user =new user();
        //$data=$user->getAllUsers();
        $this->view("home/login");


    }
    public function postData(){

        $validator =new Validator();
        $validation = $validator->make($_POST ,[
            'email'                 => 'required|email',
            'password'              => 'required|min:6'
            ]);
        $validation->validate();
        if ($validation->fails()) {
            $errors = $validation->errors();
            echo "<pre>";
            print_r($errors->firstOfAll());
            echo "</pre>";
            exit;
        } else {
            // validation passes
            $user= new user();
            $data= $user->getUser($_POST['email'],$_POST['password']);
            session::Set('user',$data);
            helper::redirectRouter(user/index);
        }

    }

}