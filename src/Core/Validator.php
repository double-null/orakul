<?php

namespace Orakul\Core;

abstract class Validator
{
    protected $errors = [];

    abstract public function run($data);

    abstract public function messages();

    public function getErrors(): array
    {
        $out = [];
        foreach ($this->errors as $error) {
            $field = explode('.', $error)[0];
            $out[$field][] = $this->messages()[$error];
        }
        return $out;
    }

    public function first()
    {
        $error = $this->errors[0];
        $field = explode('.', $error)[0];
        return [$field => $this->messages()[$error]];
    }
}