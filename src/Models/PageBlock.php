<?php

namespace Orakul\Models;

use Flight;
use Orakul\Core\Model;

class PageBlock extends Model
{
    public static $table = 'page_blocks';

    public static function getAllByPage($page_id)
    {
        return Flight::db()->select(self::$table, '*', ['page_id'=>$page_id]);
    }

    public static function getOneById($id)
    {
        return Flight::db()->get(self::$table.'(pb)',
            ['[>]blocks(b)' => ['block_id' => 'id']],
            [
                'pb.id', 'pb.page_id', 'pb.data', 'pb.position', 'b.name'
            ],
            ['pb.id' => $id]
        );
    }
}
