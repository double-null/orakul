<?php

namespace Orakul\Controllers;

use Orakul\Models\Category;
use Flight;

class CategoryController
{
    public function index()
    {
        Flight::view()->assign('categories', Category::getAll());
        Flight::view()->display('file:[orakul]categories/index.tpl');
    }

    public function create()
    {
        Flight::view()->assign('categories', Category::getAll());
        Flight::view()->display('file:[orakul]categories/form.tpl');
    }

    public function store()
    {
        if (Category::save()) {
            Flight::redirect('/admin/categories/');
        }
    }

    public function edit($id)
    {
        Flight::view()->assign('categories', Category::getAll());
        Flight::view()->assign('category', Category::getOneById($id));
        Flight::view()->display('file:[orakul]categories/form.tpl');
    }

    public function update($id)
    {
        $data = Flight::request()->data->getData();
        Category::updateById($id, $data);
        Flight::redirect('/admin/categories/');
    }

    public function destroy($id)
    {
        Category::deleteById($id);
        Flight::redirect('/admin/categories/');
    }
}
