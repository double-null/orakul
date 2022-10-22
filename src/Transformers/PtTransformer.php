<?php

namespace Orakul\Transformers;

class PtTransformer
{
    public static function format($data)
    {
        $output = [];
        foreach ($data as $item) {
            $output[] = [
                'id' => $item['id'],
                'category' => $item['category'],
                'title' => $item['title'],
                'price' => $item['price'],
            ];
        }
        return $output;
    }
}
