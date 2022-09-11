<?php

namespace Orakul\Transformers;

class CategoryTransformer
{
    public static function format($data) : array
    {
        $out = [];
        foreach ($data as $item) {
            $item['actions'] = [
                [
                    'link' => "/admin/categories/show/{$item['id']}/",
                    'icon' => 'pe-7s-look',
                    'color' => 'green',
                ],
            ];
            $out[] = $item;
        }
        return $out;
    }
}
