{extends file="file:[orakul]template.tpl"}

{block name="title"}Настройки{/block}

{block name="content"}
    {$fields = ['ID', 'Название', 'Тег', 'Значение'] }
    {include '../components/table.tpl' fields=$fields items=$settings actions='1'}
{/block}

{$creating=1}