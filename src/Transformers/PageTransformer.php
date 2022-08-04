<?php

namespace Orakul\Transformers;

class PageTransformer
{
    public static function addBlockLink($data)
    {
        $out = [];
        foreach ($data as $item)
        {
            $page = $item;
            $icon = "<i class='pe-7s-display2 excellent-icon'></i>";
            $link = "/admin/blocks/?page={$page['id']}";
            $page['block'] = "<a href=\"{$link}\">{$icon}</a>";
            $out[] = $page;
        }
        return $out;
    }
}
