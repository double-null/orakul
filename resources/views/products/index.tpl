{extends file="file:[orakul]template.tpl"}

{block name="title"}Список товаров (услуг){/block}

{block name="content"}
    {$fields = ['ID', 'Категория', 'Название', 'Цена'] }
    {include '../components/table.tpl' fields=$fields items=$products actions=1}
{/block}

{$creating=1}