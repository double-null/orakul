{extends file="file:[orakul]template.tpl"}

{block name="title"}Добавить услугу{/block}

{block name="content"}

    <form method="POST" action="/admin/services/store/">
        <!--
        {include '../components/form/select.tpl' label='Страница' name='page_id' items=$pages}
        -->
        {include '../components/form/text.tpl' label='Заголовок страницы' name='title'}

        {include '../components/form/textarea.tpl' label='Контент' name='content'}

        {include '../components/form/image.tpl' label='Изображение' name='image'}

        {include '../components/form/button.tpl' text='Добавить'}
    </form>

{/block}