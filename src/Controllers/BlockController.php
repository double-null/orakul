<?php

namespace Orakul\Controllers;

use Flight;
use Orakul\Models\Block;
use Orakul\Models\PageBlock;
use Orakul\Transformers\BlockTransformer;

class BlockController
{
    public function index()
    {
        $page = (int)$_GET['page'];
        $pageBlocks = PageBlock::getAllByPage($page);
        $formattedBlock = BlockTransformer::format($pageBlocks);
        Flight::view()->assign('page_id',$page);
        Flight::view()->assign('page_blocks', $formattedBlock);
        Flight::view()->display('file:[orakul]blocks/index.tpl');
    }

    public function create()
    {
        Flight::view()->assign('page_id', (int)$_GET['page']);
        Flight::view()->assign('blocks', Block::getAll());
        Flight::view()->display('file:[orakul]blocks/form.tpl');
    }

    public function store()
    {
        $data = Flight::request()->data->getData();
        if (PageBlock::save($data)) {
            Flight::redirect('/admin/blocks/?page='.$data['page_id']);
        }
    }

    public function edit($id)
    {
        $block = PageBlock::getOneById($id);
        Flight::view()->assign('block', $block);
        Flight::view()->display('file:[orakul]blocks/form.tpl');
    }

    public function update($id)
    {
        $data = Flight::request()->data->getData();
        $data['data'] = json_encode($data['data']);
        PageBlock::updateById($id, $data);
        Flight::redirect('/admin/blocks/?page='.$data['page_id']);
    }

    public function destroy($id)
    {
        Flight::json(['success' => Block::deleteById($id)]);
    }
}
