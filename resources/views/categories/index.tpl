{extends file="file:[orakul]template.tpl"}

{block name="title"}Список категорий{/block}

{block name="content"}
    {$fields = ['ID', 'Родительская категория', 'Slug', 'Название', 'Описание', 'Иконка', 'Обложка'] }
    {include '../components/table.tpl' fields=$fields items=$categories actions=1}
{/block}

{$creating=1}