{extends file="file:[orakul]template.tpl"}

{block name="title"}Список услуг{/block}

{block name="content"}
    {$fields = ['ID', 'Название', 'Описание', 'Изображение'] }
    {include '../components/table.tpl' fields=$fields items=$services}
{/block}