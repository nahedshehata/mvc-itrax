<?php


use Mvc\core\app;

const DS = DIRECTORY_SEPARATOR;
define("ROOT",dirname(__DIR__).DS);
const APP = ROOT . "app" . DS;
const CONTROLLER = APP . "controllers" . DS;
const CORE = APP . "core" . DS;
const MODEL = APP . "models" . DS;
const VIEW = APP . "views" . DS;
const CONFIG = APP . "config" . DS;

require_once("../vendor/autoload.php");

$app = new app();