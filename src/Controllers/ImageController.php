<?php

namespace Orakul\Controllers;

use Flight;

class ImageController
{
    public function upload()
    {
        $photo = ImageLoader::run();
        Flight::json([
            'status' => (int)(bool)$photo,
            'name' => $photo,
        ]);
    }

    public function destroy()
    {

    }
}