{extends file="file:[orakul]template.tpl"}

{block name="title"}Список отзывов{/block}

{block name="content"}
    {$fields = ['ID', 'ИМЯ', 'Фото', 'Отзыв', 'Ссылка'] }
    {include '../components/table.tpl' fields=$fields items=$reviews}
{/block}