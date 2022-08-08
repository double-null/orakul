<?php

namespace Orakul\Validators;

use Orakul\Core\Validator;

class LoginValidator extends Validator
{
    public function run($data)
    {
        if (empty($data['login'])) {
            $this->errors[] = 'login.empty';
        }

        if (empty($data['password'])) {
            $this->errors[] = 'password.empty';
        }

        if ($data['login'] != $_ENV['ADMIN_LOGIN']
            && $data['password'] != $_ENV['ADMIN_PASSWORD']) {
            $this->errors[] = 'password.dissonance';
        }

        return !$this->errors;
    }

    public function messages()
    {
        return [
            'login.empty' => 'Логин не заполнен',
            'password.empty' => 'Пароль не заполнен',
            'password.dissonance' => 'Не верный пароль',
        ];
    }
}
