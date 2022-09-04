<?php

namespace Orakul\Transformers;

class PageTransformer
{
    public static function format($data)
    {
        $out = [];
        foreach ($data as $item)
        {
            $icon = "<i class='pe-7s-photo-gallery excellent-icon'></i>";
            $link = "/admin/slides/?page={$item['id']}";
            $sliderCode = "<a href=\"{$link}\">{$icon}</a>";

            $icon = "<i class='pe-7s-display2 excellent-icon'></i>";
            $link = "/admin/blocks/?page={$page['id']}";
            $blockCode = "<a href=\"{$link}\">{$icon}</a>";

            $out[] = [
                'id' => $item['id'],
                'slug' => $item['slug'],
                'title' => $item['title'],
                'slider' => $sliderCode,
                'blocks' => $blockCode,
            ];
        }
        return $out;
    }
}
