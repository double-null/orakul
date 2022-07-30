<?php

namespace Orakul\Controllers;

use Orakul\Models\Page;
use Flight;

class PageController
{
    public function index()
    {
        Flight::view()->assign('pages', Page::getAll());
        Flight::view()->display('pages/index.tpl');
    }

    public function create()
    {
        Flight::view()->display('pages/form.tpl');
    }

    public function store()
    {
        if (Page::save()) {
            Flight::redirect('/admin/pages/');
        }
    }

    public function edit($id)
    {
        $page = Page::getOneById($id);
        Flight::view()->assign('page', $page);
        Flight::view()->display('pages/form.tpl');
    }

    public function update($id)
    {
        Page::updateById($id);
        Flight::redirect('/admin/pages/');
    }

    public function destroy($id)
    {
        Page::deleteById($id);
        Flight::redirect('/admin/pages/');
    }
}
