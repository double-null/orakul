{extends file="file:[orakul]template.tpl"}

{block name="title"}Список услуг{/block}

{block name="content"}
    {$fields = ['ID', 'Страница', 'Название', 'Описание', 'Изображение'] }
    {include '../components/table.tpl' fields=$fields items=$services actions=1}
{/block}

{$creating=1}