<?php

namespace Orakul\Controllers;

use Orakul\Models\Service;
use Orakul\Models\Page;
use Flight;

class ServiceController
{
    public function index()
    {
        Flight::view()->assign('services', Service::getAllByFields(
            ['id', 'tag', 'title', 'image']
        ));
        Flight::view()->display('file:[orakul]services/index.tpl');
    }

    public function create()
    {
        Flight::view()->assign('pages', Page::getAll());
        Flight::view()->display('file:[orakul]services/form.tpl');
    }

    public function store()
    {
        if (Service::save()) {
            Flight::redirect('/admin/services/');
        }
    }

    public function edit($id)
    {
        $service = Service::getOneById($id);
        Flight::view()->assign('pages', Page::getAll());
        Flight::view()->assign('service', $service);
        Flight::view()->display('file:[orakul]services/form.tpl');
    }

    public function update($id)
    {
        Service::updateById($id);
        Flight::redirect('/admin/services/');
    }

    public function destroy($id)
    {
        Service::deleteById($id);
        Flight::redirect('/admin/services/');
    }
}
