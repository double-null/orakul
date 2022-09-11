<?php

namespace Orakul\Controllers;

use Orakul\Models\Product;
use Orakul\Models\Category;
use Flight;

class ProductController
{
    public function index()
    {
        $data = Flight::request()->query->getData();
        Flight::view()->assign('products', Product::getAllWithCategory());
        Flight::view()->display('file:[orakul]products/index.tpl');
    }

    public function create()
    {
        $query = Flight::request()->query->getData();
        Flight::view()->assign('categories', Category::getAll());
        Flight::view()->assign('current_category', $query['category']);
        Flight::view()->display('file:[orakul]products/form.tpl');
    }

    public function store()
    {
        if (Product::save()) {
            $data = Flight::request()->data->getData();
            $redirectUrl = $data['category_id'] ?
                "/admin/categories/show/{$data['category_id']}/" :
                '/admin/products/';
            Flight::redirect($redirectUrl);
        }
    }

    public function edit($id)
    {
        $product = Product::getOneById($id);
        Flight::view()->assign('categories', Category::getAll());
        Flight::view()->assign('product', $product);
        Flight::view()->display('file:[orakul]products/form.tpl');
    }

    public function update($id)
    {
        $data = Flight::request()->data->getData();
        $redirectUrl = $data['category_id'] ?
            "/admin/categories/show/{$data['category_id']}/" :
            '/admin/products/';
        Product::updateById($id);
        Flight::redirect($redirectUrl);
    }

    public function destroy($id)
    {
        Flight::json(['success' => Product::deleteById($id)]);
    }
}
