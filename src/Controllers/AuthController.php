<?php

namespace Orakul\Controllers;

use Flight;
use Orakul\Validators\LoginValidator;

class AuthController
{
    public function login()
    {
        if (Flight::request()->method == "POST") {
            $valid = new LoginValidator();
            if ($valid->run(Flight::request()->data->getData())) {
                $_SESSION['user'] = $_ENV['ADMIN_LOGIN'];
                Flight::redirect('/admin/pages/');
            } else {
                Flight::view()->assign('error', $valid->first());
            }
        }
        Flight::view()->display('file:[orakul]login.tpl');
    }

    public function logout()
    {
        session_destroy();
        Flight::redirect('/');
    }
}
