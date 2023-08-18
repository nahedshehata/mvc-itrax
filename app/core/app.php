<?php
namespace Mvc\core;
class app
{
    public $controller;
    public $method,$para=[];
    public function __construct()
    {
        $this->urlPage();
        $this->render();
    }
    private function urlPage(){
        if (!empty($_SERVER['QUERY_STRING'])) {
            $url = explode("/", $_SERVER['QUERY_STRING']);
            $this->controller = isset($url[0]) ? $url[0] . "Controller" : "homeController";
            $this->method = isset($url[1]) ? $url[1] : "index";
            if (isset($url[0])) {
                unset($url[0]);
            }
            if (isset($url[1])) {
                unset($url[1]);
            }
            $this->para = array_values($url);
        }
        else{
            $this->controller="homeController";

        }

    }
    private function render()
    {
        $controller="Mvc\controllers\\".$this->controller;
        if(class_exists( $controller)){
            $controllerInstance = new  $controller();

            if(method_exists($controllerInstance,$this->method)){
                call_user_func_array([$controllerInstance,$this->method],$this->para);
            }else {
                echo 'method not found';
            }
        }
        else {
            echo "class Not Exists";

        }
    }
}