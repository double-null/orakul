<?php

namespace Orakul\Controllers;

use Orakul\Models\Review;
use Flight;

class ReviewController
{
    public function index()
    {
        Flight::view()->assign('reviews', Review::getAll());
        Flight::view()->display('reviews/index.tpl');
    }

    public function create()
    {
        Flight::view()->display('reviews/form.tpl');
    }

    public function store()
    {
        if (Review::save()) {
            Flight::redirect('/admin/reviews/');
        }
    }

    public function edit($id)
    {
        $review = Review::getOneById($id);
        Flight::view()->assign('review', $review);
        Flight::view()->display('reviews/form.tpl');
    }

    public function update($id)
    {
        Review::updateById($id);
        Flight::redirect('/admin/reviews/');
    }

    public function destroy($id)
    {
        Review::deleteById($id);
        Flight::redirect('/admin/reviews/');
    }
}
