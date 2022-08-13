<?php

namespace Orakul\Models;

use Orakul\Core\Model;
use Flight;

class Product extends Model
{
    public static $table = 'products';

    public static function getAllByFields($fields)
    {
        return Flight::db()->select(self::$table, $fields);
    }

    public static function getAllWithCategory()
    {
        return Flight::db()->select(self::$table.'(p)',
            ['[>]categories(c)' => ['category_id' => 'id']],
            [
                'p.id', 'c.title(category)', 'p.title', 'p.content', 'p.photo',
                'p.price',
            ]
        );
    }
}
