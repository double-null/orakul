<?php

namespace Orakul\Transformers;

class BlockTransformer
{
    public static function format($data) : array
    {
        $out = [];
        foreach ($data as $item) {
            unset($item['data']);
            $out[] = [
                'id' => $item['id'],
                'page_id' => $item['page_id'],
                'position' => $item['position'],
            ];
        }
        return $out;
    }
}