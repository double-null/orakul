{extends file="file:[orakul]template.tpl"}

{block name="title"}Список страниц{/block}

{block name="content"}
    {$fields = ['ID', 'Адресс', 'Заголовок страницы', 'Слайдер', 'Блоки'] }
    {include '../components/table.tpl' fields=$fields items=$pages actions=1}
{/block}

{$creating=1}