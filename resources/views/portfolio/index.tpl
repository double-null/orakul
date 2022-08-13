{extends file="file:[orakul]template.tpl"}

{block name="title"}Список работ{/block}

{block name="content"}
    {$fields = ['ID', 'Название', 'Фотография'] }
    {include '../components/table.tpl' fields=$fields items=$portfolio actions=1}
{/block}

{$creating=1}