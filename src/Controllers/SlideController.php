<?php

namespace Orakul\Controllers;

use Flight;
use Orakul\Models\Slide;
use Orakul\Transformers\SlideButtonTransformer;

class SlideController
{
    public function index()
    {
        $data = Flight::request()->query->getData();
        $page = (int)$data['page'];
        Flight::view()->assign('page_id', $page);
        Flight::view()->assign('slides', Slide::getAllByPage($page));
        Flight::view()->display('file:[orakul]slides/index.tpl');
    }

    public function create()
    {
        $data = Flight::request()->query->getData();
        Flight::view()->assign('page_id', (int)$data['page']);
        Flight::view()->display('file:[orakul]slides/form.tpl');
    }

    public function store()
    {
        $data = Flight::request()->data->getData();
        $data['buttons'] = SlideButtonTransformer::format($data['buttons']);
        if (Slide::save($data)) {
            Flight::redirect('/admin/slides/?page='.$data['page_id']);
        }
    }

    public function edit($id)
    {
        $slide = Slide::getOneById($id);
        if ($slide) {
            Flight::view()->assign('page_id', $slide['page_id']);
            Flight::view()->assign('slide', Slide::getOneById($id));
            Flight::view()->display('file:[orakul]slides/form.tpl');
        } else {
            return true;
        }
    }

    public function update($id)
    {
        $data = Flight::request()->data->getData();
        $data['buttons'] = SlideButtonTransformer::format($data['buttons']);
        Slide::updateById($id, $data);
        Flight::redirect('/admin/slides/?page='.$data['page_id']);
    }

    public function destroy($id)
    {
        Flight::json(['success' => Slide::deleteById($id)]);
    }
}
