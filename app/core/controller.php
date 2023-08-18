<?php

namespace Mvc\core;

use Dcblogdev\PdoWrapper\Database ;

class controller
{

    public function view($path){
        //extract($param);
        require_once(VIEW.$path.".php");
    }


}