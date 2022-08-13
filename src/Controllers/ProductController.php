<?php

namespace Orakul\Controllers;

use Orakul\Models\Product;
use Orakul\Models\Category;
use Flight;

class ProductController
{
    public function index()
    {
        Flight::view()->assign('products', Product::getAllWithCategory());
        Flight::view()->display('file:[orakul]products/index.tpl');
    }

    public function create()
    {
        Flight::view()->assign('categories', Category::getAll());
        Flight::view()->display('file:[orakul]products/form.tpl');
    }

    public function store()
    {
        if (Product::save()) {
            Flight::redirect('/admin/products/');
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
        Product::updateById($id);
        Flight::redirect('/admin/products/');
    }

    public function destroy($id)
    {
        Product::deleteById($id);
        Flight::redirect('/admin/products/');
    }
}
