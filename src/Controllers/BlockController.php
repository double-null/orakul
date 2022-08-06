<?php

namespace Orakul\Controllers;

use Flight;
use Orakul\Models\Block;
use Orakul\Models\BlockType;
use Orakul\Models\Page;

class BlockController
{
    public function index()
    {
        $page = (int)$_GET['page'];
        Flight::view()->assign('page_id',$page);
        Flight::view()->assign('blocks', Block::getAllByPage($page));
        Flight::view()->display('file:[orakul]blocks/index.tpl');
    }

    public function create()
    {
        Flight::view()->assign('page_id', (int)$_GET['page']);
        Flight::view()->assign('pages', Page::getAll());
        Flight::view()->assign('types', BlockType::getAll());
        Flight::view()->display('file:[orakul]blocks/form.tpl');
    }

    public function store()
    {
        $data = Flight::request()->data->getData();
        $data['data'] = json_encode($data['Blocks']);
        unset($data['Blocks']);
        if (Block::save($data)) {
            Flight::redirect('/admin/blocks/?page='.$data['page_id']);
        }
    }

    public function edit($id)
    {

    }

    public function update($id)
    {

    }

    public function destroy($id)
    {
        Block::deleteById($id);
        Flight::redirect(Flight::request()->referrer);
    }
}
