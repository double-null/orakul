<?php

namespace Orakul\Validators;

use Orakul\Core\Validator;
use Orakul\Models\Category;

class CategoryValidator extends Validator
{
    public function run($data)
    {
        if (empty($data['slug'])) {
            $this->errors[] = 'slug.empty';
        } elseif (Category::hasSlug($data['slug'])) {
            $this->errors[] = 'slug.not_unique';
        }
        return !$this->errors;
    }

    public function messages()
    {
        return [
            'slug.empty' => 'Тэг не заполнен',
            'slug.not_unique' => 'Тэг уже существует',
        ];
    }
}
