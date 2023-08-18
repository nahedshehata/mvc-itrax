<?php

namespace Mvc\core;

class helper
{

    public static function redirectRouter($route){

        header("LOCATION: http://mvc.local/".$route);
    }
}