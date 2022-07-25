<?php

namespace Orakul\Controllers;
use Flight;

class StartController
{
    public function init()
    {
        $url = Flight::request()->url;
        $module = array_diff(explode('/', $url),[''])[2];
        Flight::view()->assign('module', $module);
        return true;
    }
}
