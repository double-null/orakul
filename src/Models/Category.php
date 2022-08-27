<?php

namespace Orakul\Models;

use Orakul\Core\Model;
use Flight;

class Category extends Model
{
    public static $table = 'categories';

    public static function findOneBySlug($slug)
    {
        $category = Flight::db()->get(self::$table, '*', ['slug' => $slug]);
        $category['childs'] = Flight::db()->select(self::$table, '*', [
            'parent' => $category['id'],
        ]);
        if ($category['parent']) {
            $category['parent'] = Flight::db()->get(self::$table, '*', [
                'id' => $category['parent'],
            ]);
        }
        return $category;
    }
}