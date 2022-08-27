<?php

namespace Orakul\Controllers;

use Flight;
use Orakul\Models\Settings;

class SettingController
{
    public function index()
    {

        Flight::view()->assign('settings', Settings::getAll());
        Flight::view()->display('file:[orakul]settings/index.tpl');
    }

    public function create()
    {
        Flight::view()->display('file:[orakul]settings/form.tpl');
    }

    public function store()
    {
        if (Settings::save()) {
            Flight::redirect('/admin/settings/');
        }
    }

    public function edit($id)
    {
        $page = Settings::getOneById($id);
        Flight::view()->assign('settings', $page);
        Flight::view()->display('file:[orakul]settings/form.tpl');
    }

    public function update($id)
    {
        Settings::updateById($id);
        Flight::redirect('/admin/settings/');
    }

    public function destroy($id)
    {
        Flight::json(['success' => Settings::deleteById($id)]);
    }
}
