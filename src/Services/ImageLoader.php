<?php

namespace Orakul\Services;
use Flight;

class ImageLoader
{
    public static function run()
    {
        $file = Flight::request()->files->getData();
        if (!$file['image']) return false;
        $type = explode('/', $file['image']['type'])[1];
        if (!in_array($type, ['jpeg', 'png'])) return false;
        $new_name = time().rand(100000, 999999).'.'.$type;
        $path = $_ENV['UPLOAD_DIR'].$new_name;
        return (move_uploaded_file($file['image']['tmp_name'], $path)) ?
            $new_name : false;
    }
}
