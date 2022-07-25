<?php

namespace Orakul;

class Manifest
{
    public function get()
    {
        return [
            'view_path' => dirname(__DIR__).'/resources/views/',
            'route_file' => dirname(__DIR__).'/routes/orakul.php',
        ];
    }
}