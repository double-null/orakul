{extends file="file:[orakul]template.tpl"}

{block name="title"}Список страниц{/block}

{block name="content"}
    {$fields = ['ID', 'Адресс', 'Мета Title', 'Meta Description', 'Заголовок страницы', 'Контент', 'Видимость'] }
    {include '../components/table.tpl' fields=$fields items=$pages}
{/block}