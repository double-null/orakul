<?php

namespace Orakul\Controllers;

use App\Models\Review;
use Flight;

class ReviewController
{
    public function index()
    {
        Flight::view()->assign('reviews', Review::getAll());
        Flight::view()->display('review/index.tpl');
    }

    public function create()
    {
        Flight::view()->display('review/create.tpl');
    }

    public function store()
    {
        if (Review::save()) {
            Flight::redirect('/admin/reviews/');
        }
    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function destroy()
    {

    }
}
