<?php

namespace Orakul\Controllers;

use App\Models\Service;
use App\Models\Page;
use Flight;

class ServiceController
{
    public function index()
    {
        Flight::view()->assign('services', Service::getAll());
        Flight::view()->display('services/index.tpl');
    }

    public function create()
    {
        Flight::view()->assign('pages', Page::getAll());
        Flight::view()->display('services/create.tpl');
    }

    public function store()
    {
        if (Service::save()) {
            Flight::redirect('/admin/services/');
        }
    }
}