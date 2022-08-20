<?php

namespace Orakul\Models;

use Orakul\Core\Model;
use Flight;

class Category extends Model
{
    public static $table = 'categories';

    public static function findOneBySlug($slug)
    {
        return Flight::db()->get(self::$table, '*', ['slug' => $slug]);
    }
}