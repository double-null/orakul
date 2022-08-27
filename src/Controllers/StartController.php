<?php

namespace Orakul\Controllers;
use Flight;

use Orakul\Models\Menu;

class StartController
{
    public function init()
    {
        if (empty($_SESSION['user'])) Flight::notFound();
        $url = Flight::request()->url;
        $sections = array_diff(explode('/', $url),['']);
        Flight::view()->assign('menu', Menu::get());
        Flight::view()->assign('module', $sections[2]);
        Flight::view()->assign('action', $sections[3] ?? 'index');
        return true;
    }
}
