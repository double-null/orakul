{extends file="file:[orakul]template.tpl"}

{block name="title"}Список слайдов{/block}

{block name="content"}
    {$fields = ['ID', 'Страница', 'Заголовок', 'Содержимое', 'Изображение', 'Кнопки']}
    {include '../components/table.tpl' fields=$fields items=$slides actions=1}
{/block}

{$creating=1} {$params="?page={$page_id}"}