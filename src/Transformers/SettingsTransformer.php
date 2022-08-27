<?php

namespace Orakul\Transformers;

class SettingsTransformer
{
    public static function assoc($data)
    {
        $out = [];
        foreach ($data as $item)
        {
            $out[$item['key']] = [
                'title' => $item['title'],
                'value' => $item['value'],
            ];
        }
        return $out;
    }
}
