<?php

namespace Orakul\Controllers;

use Orakul\Models\Service;
use Orakul\Models\Page;
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
        Flight::view()->display('services/form.tpl');
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
        Flight::view()->display('services/form.tpl');
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
