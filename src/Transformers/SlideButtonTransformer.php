<?php

namespace Orakul\Transformers;

class SlideButtonTransformer
{
    public function format($data) : string
    {
        $c = count($data['title']);
        $out = [];
        if ($c) {
            for ($i = 0; $i < $c; $i++) {
                if (!$data['title'][$i]) continue;
                $out[] = [
                    'title' => $data['title'][$i],
                    'slug' => $data['slug'][$i],
                    'icon' => $data['icon'][$i],
                ];
            }
        }
        return json_encode($out);
    }
}
