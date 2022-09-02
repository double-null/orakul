<?php

namespace Orakul\Services;
use Orakul\Models\Category;

class CategoryTree
{
    /**
     * Строит дерево категорий
     * @return array
     */
    public static function build()
    {
        // TODO: на текущий момент формируется 2 уровня
        // допилить до бесконечного уровня
        // P.S: Adjacency list
        $output = [];
        $categories = Category::getAll();
        foreach ($categories as $category) {
            $parent = (int)$category['parent'];
            if ($parent) {
                $output[$parent]['childs'][] = $category;
            } else {
                $childs = $output[$category['id']]['childs'] ?? [];
                $output[$category['id']] = $category;
                $output[$category['id']]['childs'] = $childs;
                $output[$category['id']]['parent'] = 0;
            }
        }
        return $output;
    }
}