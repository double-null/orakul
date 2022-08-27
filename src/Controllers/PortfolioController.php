<?php

namespace Orakul\Controllers;

use Flight;
use Orakul\Models\Portfolio;

class PortfolioController
{
    public function index()
    {
        Flight::view()->assign('portfolio', Portfolio::getAll());
        Flight::view()->display('file:[orakul]portfolio/index.tpl');
    }

    public function create()
    {
        Flight::view()->display('file:[orakul]portfolio/form.tpl');
    }

    public function store()
    {
        if (Portfolio::save()) {
            Flight::redirect('/admin/portfolio/');
        }
    }

    public function edit($id)
    {
        Flight::view()->assign('portfolio', Portfolio::getOneById($id));
        Flight::view()->display('file:[orakul]portfolio/form.tpl');
    }

    public function update($id)
    {
        $data = Flight::request()->data->getData();
        Portfolio::updateById($id, $data);
        Flight::redirect('/admin/portfolio/');
    }

    public function destroy($id)
    {
        Flight::json(['success' => Portfolio::deleteById($id)]);
    }
}
