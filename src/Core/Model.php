<?php

namespace Orakul\Core;

use Flight;

class Model
{
    public static $table;

    public static function getAll()
    {
        return Flight::db()->select(static::$table, '*');
    }

    public static function getOneById($id)
    {
        return Flight::db()->get(static::$table, '*', ['id' => $id]);
    }

    public static function deleteById($id)
    {
        Flight::db()->delete(static::$table, ['id' => $id]);
    }

    public static function updateById($id, $data = null)
    {
        if (!$data) {
            $data = Flight::request()->data->getData();
        }
        Flight::db()->update(static::$table, $data, ['id' => $id]);
    }

    public static function save($data = null)
    {
        if (!$data) {
            $data = Flight::request()->data->getData();
        }
        Flight::db()->insert(static::$table, $data);
        return Flight::db()->id();
    }
}
