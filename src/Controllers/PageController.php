<?php

namespace Orakul\Controllers;

use App\Models\Page;
use Flight;

class PageController
{
    public function index()
    {
        Flight::view()->assign('pages', Page::getAll());
        Flight::view()->display('page/index.tpl');
    }

    public function create()
    {
        Flight::view()->display('page/create.tpl');
    }

    public function store()
    {
        if (Page::save()) {
            Flight::redirect('/admin/pages/');
        }
    }
}