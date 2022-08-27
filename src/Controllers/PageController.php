<?php

namespace Orakul\Controllers;

use Flight;
use Orakul\Models\Page;
use Orakul\Transformers\PageTransformer;

class PageController
{
    public function index()
    {
        $pages = PageTransformer::addBlockLink(Page::getAll());
        Flight::view()->assign('pages', $pages);
        Flight::view()->display('file:[orakul]pages/index.tpl');
    }

    public function create()
    {
        Flight::view()->display('file:[orakul]pages/form.tpl');
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
        Flight::view()->display('file:[orakul]pages/form.tpl');
    }

    public function update($id)
    {
        Page::updateById($id);
        Flight::redirect('/admin/pages/');
    }

    public function destroy($id)
    {
        Flight::json(['success' => Page::deleteById($id)]);
    }
}
