<?php

namespace Orakul\Models;

use Orakul\Core\Model;
use Flight;

class Service extends Model
{
    public static $table = 'services';

    public static function getAllByFields($fields)
    {
        return Flight::db()->select(self::$table, $fields);
    }
}
