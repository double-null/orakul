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

            $icon = "<i class='pe-7s-plugin excellent-icon'></i>";
            $link = "/admin/blocks/?page={$item['id']}";
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
