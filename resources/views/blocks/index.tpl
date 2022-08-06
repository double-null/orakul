{extends file="file:[orakul]template.tpl"}

{block name="title"}Список блоков{/block}

{block name="content"}
    {$fields = ['ID', 'Страница', 'Тип', 'Содержимое', 'Позиция'] }
    {include '../components/table.tpl' fields=$fields items=$blocks actions=1}
{/block}

{$creating=1} {$params="?page={$page_id}"}