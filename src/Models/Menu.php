<?php

namespace Orakul\Models;

class Menu
{
    public function get()
    {
        return [
            [
                'name' => 'pages',
                'title' => 'Страницы',
                'icon' => 'pe-7s-note2',
            ],
            [
                'name' => 'categories',
                'title' => 'Категории',
                'icon' => 'pe-7s-diamond',
            ],
            [
                'name' => 'products',
                'title' => 'Товары (Услуги)',
                'icon' => 'pe-7s-diamond',
            ],
            [
                'name' => 'portfolio',
                'title' => 'Портфолио',
                'icon' => 'pe-7s-portfolio',
            ],
            [
                'name' => 'reviews',
                'title' => 'Отзывы',
                'icon' => 'pe-7s-comment',
            ],
            [
                'name' => 'settings',
                'title' => 'Настройки',
                'icon' => 'pe-7s-config',
            ],
        ];
    }
}