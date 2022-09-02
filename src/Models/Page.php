<?php

namespace Orakul\Models;

use Orakul\Core\Model;
use Flight;

class Page extends Model
{
    public static $table = 'pages';

    public static function findOneBySlug($slug)
    {
        return Flight::db()->get(self::$table, '*', ['slug' => $slug]);
    }
}
