<?php

namespace Orakul\Controllers;
use Flight;

class StartController
{
    public function init()
    {
        $url = Flight::request()->url;
        $module = array_pop(array_diff(explode('/', $url),['']));
        Flight::view()->assign('module', $module);
        return true;
    }
}
