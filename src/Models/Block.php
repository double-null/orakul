<?php

namespace Orakul\Models;

use Orakul\Core\Model;
use Flight;

class Block extends Model
{
    public static $table = 'blocks';

    public static function getAllByPage($page_id)
    {
        return Flight::db()->select(self::$table, '*', ['page_id'=>$page_id]);
    }
}
