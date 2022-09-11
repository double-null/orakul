<?php

namespace Orakul\Controllers;

use Orakul\Models\Category;
use Orakul\Models\Product;
use Orakul\Transformers\CategoryTransformer;
use Flight;

class CategoryController
{
    public function index()
    {
        $category = CategoryTransformer::format(Category::getAll());
        Flight::view()->assign('categories', $category);
        Flight::view()->display('file:[orakul]categories/index.tpl');
    }

    public function show($id)
    {
        $category = Category::getOneById($id);
        $categories = Category::getAllChild($category['id']);
        $formattedCategories = CategoryTransformer::format($categories);
        $products = Product::findAllByCategory($category['id']);
        Flight::view()->assign('category', $category);
        Flight::view()->assign('child_categories', $formattedCategories);
        Flight::view()->assign('products', $products);
        Flight::view()->display('file:[orakul]categories/show.tpl');
    }

    public function create()
    {
        $data = Flight::request()->query->getData();
        Flight::view()->assign('current_category', $data['category']);
        Flight::view()->assign('categories', Category::getAll());
        Flight::view()->display('file:[orakul]categories/form.tpl');
    }

    public function store()
    {
        if (Category::save()) {
            $data = Flight::request()->data->getData();
            $params = $data['parent'] ? "show/{$data['parent']}/" : '';
            Flight::redirect("/admin/categories/$params");
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
        $params = $data['parent'] ? "show/{$data['parent']}/" : '';
        Flight::redirect("/admin/categories/$params");
    }

    public function destroy($id)
    {
        Flight::json(['success' => Category::deleteById($id)]);
    }
}
